<?php

define('TM_DIR', get_template_directory(__FILE__));
define('TM_URL', get_template_directory_uri(__FILE__));

require_once TM_DIR . '/lib/Parser.php';

function add_style(){
    wp_enqueue_style( 'my-bootstrap-extension', get_template_directory_uri() . '/css/bootstrap.css', array(), '1');
     wp_enqueue_style( 'fotorama', get_template_directory_uri() . '/css/fotorama.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'my-styles', get_template_directory_uri() . '/css/style.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style( 'my-sass', get_template_directory_uri() . '/sass/style.css', array('my-bootstrap-extension'), '1');
   
}
function add_script(){
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '1');
    wp_enqueue_script( 'my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.js', array(), '1');
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/script.js', array(), '1');
    wp_enqueue_script( 'fotorama-js', get_template_directory_uri() . '/js/fotorama.js', array(), '1');

    
}
function add_admin_script(){
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '1');
    wp_enqueue_script('admin',get_template_directory_uri() . '/js/admin.js', array(), '1');
    wp_enqueue_style( 'my-bootstrap-extension-admin', get_template_directory_uri() . '/css/bootstrap.css', array(), '1');
    wp_enqueue_script( 'my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.js', array(), '1');
    wp_enqueue_style( 'my-style-admin', get_template_directory_uri() . '/css/admin.css', array(), '1');
}

add_action('admin_enqueue_scripts', 'add_admin_script');
add_action( 'wp_enqueue_scripts', 'add_style' );
add_action( 'wp_enqueue_scripts', 'add_script' );

function prn($content) {
    echo '<pre style="background: lightgray; border: 1px solid black; padding: 2px">';
    print_r ( $content );
    echo '</pre>';
}

function my_pagenavi() {
    global $wp_query;

    $big = 999999999; // уникальное число для замены

    $args = array(
        'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) )
    ,'format' => ''
    ,'current' => max( 1, get_query_var('paged') )
    ,'total' => $wp_query->max_num_pages
    );

    $result = paginate_links( $args );

    // удаляем добавку к пагинации для первой страницы
    $result = str_replace( '/page/1/', '', $result );

    echo $result;
}

function excerpt_readmore($more) {
    return '... <br><a href="'. get_permalink($post->ID) . '" class="readmore">' . 'Читать далее' . '</a>';
}
add_filter('excerpt_more', 'excerpt_readmore');


if ( function_exists( 'add_theme_support' ) )
    add_theme_support( 'post-thumbnails' );

//ADMIN MENU PAGES
function admin_menu()
{
    add_menu_page('Настройка слайдера', 'Слайдер', 'manage_options', 'slider', 'slider');
    add_menu_page('Настройка партнеров', 'Партнеры', 'manage_options', 'partners', 'partners');
}

add_action('admin_menu', 'admin_menu');

/*--------------------SLIDER---------------------------------*/

// AJAX ACTION
add_action('wp_ajax_save_slide', 'save_slide');
add_action('wp_ajax_update_slide', 'update_slide');
add_action('wp_ajax_delete_slide', 'delete_slide');

//страница админки
function slider()
{
    if (function_exists('wp_enqueue_media')) {
        wp_enqueue_media();
    } else {
        wp_enqueue_style('thickbox');
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
    }

    $parser = new Parser();
    $parser->render(TM_DIR . "/view/slider.php", array(), true);
}

//слайды
function slidergrid_sc()
{
    $slides = getDataFromDb('slider');
    $parser = new Parser();
    $parser->render(TM_DIR . "/view/slidergrid.php", array('slides' => $slides), true);
}
add_shortcode('slidergrid','slidergrid_sc');

//сохранение нового слайда
function save_slide()
{
    global $wpdb;

    if (!empty($_POST['img'])) {
        $wpdb->insert('slider', array('img' => $_POST['img'],
            'head' =>$_POST['head'],
            'title' =>$_POST['title'],
            'description' =>$_POST['description']
            ));
    }
    die();
}

//обновление слайда
function update_slide()
{
    global $wpdb;
    if (!empty($_POST['img'])) {
        $wpdb->update('slider', array(
            'img' => $_POST['img'],
            'head' =>$_POST['head'],
            'title' =>$_POST['title'],
            'description' =>$_POST['description']
        ),array('id' => $_POST['num']));
    }
    die();
}

//Удаление слайда
function delete_slide()
{
    global $wpdb;
    $wpdb->delete('slider', array('id' => $_POST['num']));
    die();
}

//вывод слайдов на страницу
function index_slider_sc(){
    $slides = getDataFromDb('slider');
    $parser = new Parser();
    $parser->render(TM_DIR . "/view/indexslider.php", array('slides' => $slides), true);
}
add_shortcode('index_slider','index_slider_sc');

/*--------------------END SLIDER-----------------------------*/

//получение всех данных по названию таблицы
function getDataFromDb($tableName)
{
    global $wpdb;
    $data = $wpdb->get_results("SELECT * FROM `$tableName`", ARRAY_A);
    return $data;
}

/*--------------------PARTNERS---------------------------------*/

// AJAX ACTION
add_action('wp_ajax_save_partner', 'save_partner');
add_action('wp_ajax_update_partner', 'update_partner');
add_action('wp_ajax_delete_partner', 'delete_partner');

//страница админки
function partners()
{
    if (function_exists('wp_enqueue_media')) {
        wp_enqueue_media();
    } else {
        wp_enqueue_style('thickbox');
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
    }

    $parser = new Parser();
    $parser->render(TM_DIR . "/view/partners.php", array(), true);
}

//слайды
function partnersgrid_sc()
{
    $partners = getDataFromDb('partners');
    $parser = new Parser();
    $parser->render(TM_DIR . "/view/partnersgrid.php", array('partners' => $partners), true);
}
add_shortcode('partnersgrid','partnersgrid_sc');

//сохранение нового слайда
function save_partner()
{
    global $wpdb;

    if (!empty($_POST['img'])) {
        $wpdb->insert('partners', array('img' => $_POST['img'],
            'link' =>$_POST['link']
        ));
    }
    die();
}

//обновление партнера
function update_partner()
{
    global $wpdb;
    if (!empty($_POST['img'])) {
        $wpdb->update('partners', array(
            'img' => $_POST['img'],
            'link' =>$_POST['link']
        ),array('id' => $_POST['num']));
    }
    die();
}

//Удаление слайда
function delete_partner()
{
    global $wpdb;
    $wpdb->delete('partners', array('id' => $_POST['num']));
    die();
}

//вывод партнеров на страницу
function index_partners_sc(){
    $partners = getDataFromDb('partners');
    $parser = new Parser();
    $parser->render(TM_DIR . "/view/indexpartners.php", array('partners' => $partners), true);
}
add_shortcode('index_partners','index_partners_sc');

/*--------------------END PARTNERS-----------------------------*/
