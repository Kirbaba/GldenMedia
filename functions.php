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

/*--------------------THEME OPTIONS----------------------------*/

add_action('customize_register', function($customizer){
    /*Меню настройки контактов*/
    $customizer->add_section(
        'contacts_section',
        array(
            'title' => 'Настройки контактов',
            'description' => 'Контакты',
            'priority' => 35,
        )
    );

    $customizer->add_control(
        'phone_textbox',
        array(
            'label' => 'Телефон',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'address_textbox',
        array(
            'label' => 'Адрес',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'mail_textbox',
        array(
            'label' => 'Email',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );

    $customizer->add_setting(
        'address_textbox',
        array('default' => 'Москва, Садовническая улица,76/71')
    );
    $customizer->add_setting(
        'mail_textbox',
        array('default' => 'info@medialand.su')
    );
    $customizer->add_setting(
        'phone_textbox',
        array('default' => '+7 495 975 6995')
    );

    /*меню настройки соц сетей*/
    $customizer->add_section(
        'social_section',
        array(
            'title' => 'Соц. сети',
            'description' => 'Ссылки на соц. сети',
            'priority' => 35,
        )
    );

    $customizer->add_setting(
        'tw_textbox',
        array('default' => 'http://twitter.com/')
    );
    $customizer->add_setting(
        'vk_textbox',
        array('default' => 'http://vk.com/')
    );
    $customizer->add_setting(
        'fb_textbox',
        array('default' => 'http://facebook.com/')
    );
    $customizer->add_setting(
        'pi_textbox',
        array('default' => 'http://pinterest.com/')
    );
    $customizer->add_setting(
        'in_textbox',
        array('default' => 'http://linkedin.com/')
    );
    $customizer->add_setting(
        'dr_textbox',
        array('default' => 'http://dribbble.com/')
    );
    $customizer->add_setting(
        'gp_textbox',
        array('default' => 'http://plus.google.com/')
    );


    $customizer->add_control(
        'vk_textbox',
        array(
            'label' => 'VKontakte',
            'section' => 'social_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'fb_textbox',
        array(
            'label' => 'Facebook',
            'section' => 'social_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'in_textbox',
        array(
            'label' => 'LinkedIn',
            'section' => 'social_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'gp_textbox',
        array(
            'label' => 'Google+',
            'section' => 'social_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'pi_textbox',
        array(
            'label' => 'Pinterest',
            'section' => 'social_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'dr_textbox',
        array(
            'label' => 'Dribbble',
            'section' => 'social_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'tw_textbox',
        array(
            'label' => 'Twitter',
            'section' => 'social_section',
            'type' => 'text',
        )
    );
});

/*------------------END THEME OPTIONS--------------------------*/


/*------------------OUR ARTISTS--------------------------------*/

add_action('init', 'my_custom_init_artists');
function my_custom_init_artists()
{
    $labels = array(
        'name' => 'Артисты', // Основное название типа записи
        'singular_name' => 'Артист', // отдельное название записи типа Book
        'add_new' => 'Добавить артиста',
        'add_new_item' => 'Добавить нового артиста',
        'edit_item' => 'Редактировать артиста',
        'new_item' => 'Новый артист',
        'view_item' => 'Посмотреть артиста',
        'search_items' => 'Найти артиста',
        'not_found' => 'Артистов не найдено',
        'not_found_in_trash' => 'В корзине артистов не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Артисты'

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('artists', $args);
}

function my_extra_fields_artists()
{
    add_meta_box('extra_fb', 'Facebook', 'extra_fields_fb_func', 'artists', 'normal', 'high');
    add_meta_box('extra_tw', 'Twitter', 'extra_fields_tw_func', 'artists', 'normal', 'high');
}

add_action('add_meta_boxes', 'my_extra_fields_artists', 1);

function extra_fields_fb_func($post)
{
    ?>
    <p><span>Ссылка на Facebook</span><input type='text' name='extra[fb]'
                                                value='<?php echo get_post_meta($post->ID, "fb", 1); ?>'
                                                style='width:50%'/></p>
    <?php
}

function extra_fields_tw_func($post)
{
    ?>
    <p><span>Ссылка на Twitter</span><input type='text' name='extra[tw]'
                                             value='<?php echo get_post_meta($post->ID, "tw", 1); ?>'
                                             style='width:50%'/></p>
    <?php
}

add_action('save_post', 'my_extra_fields_update', 10, 1);

/* Сохраняем данные, при сохранении поста */
function my_extra_fields_update($post_id)
{

    if (!isset($_POST['extra'])) return false;
    foreach ($_POST['extra'] as $key => $value) {
        if (empty($value)) {
            delete_post_meta($post_id, $key); // удаляем поле если значение пустое
            continue;
        }

        update_post_meta($post_id, $key, $value); // add_post_meta() работает автоматически
    }
    return $post_id;
}

/*----------------END OUR ARTISTS------------------------------*/

/*------------------POSTER--------------------------------*/

add_action('init', 'my_custom_init_poster');
function my_custom_init_poster()
{
    $labels = array(
        'name' => 'Афиша', // Основное название типа записи
        'singular_name' => 'Событие', // отдельное название записи типа Book
        'add_new' => 'Добавить событие',
        'add_new_item' => 'Добавить новое событие',
        'edit_item' => 'Редактировать событие',
        'new_item' => 'Новое событие',
        'view_item' => 'Посмотреть событие',
        'search_items' => 'Найти событие',
        'not_found' => 'Событий не найдено',
        'not_found_in_trash' => 'В корзине событий не найдено',
        'parent_item_colon' => '',
        'menu_name' => 'Афиша'

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'thumbnail')
    );
    register_post_type('poster', $args);
}

function my_extra_fields_poster()
{
    add_meta_box('extra_address', 'Место: ', 'extra_fields_address_func', 'poster', 'normal', 'high');
    add_meta_box('extra_bg_date', 'Дата начала: ', 'extra_fields_date_func', 'poster', 'normal', 'high');
    add_meta_box('extra_bg_time', 'Время начала: ', 'extra_fields_time_func', 'poster', 'normal', 'high');
}

add_action('add_meta_boxes', 'my_extra_fields_poster', 1);

function extra_fields_address_func($post)
{
    ?>
    <p><span>Место события:</span><input type='text' name='extra[address]'
                                        value='<?php echo get_post_meta($post->ID, "address", 1); ?>'
                                        style='width:100%'/></p>
    <?php
}

function extra_fields_date_func($post)
{
    ?>
    <p><span>Дата события:</span><input type='date' name='extra[bg_date]'
                                             value='<?php echo get_post_meta($post->ID, "bg_date", 1); ?>'
                                             style='width:100%'/></p>
    <?php
}

function extra_fields_time_func($post)
{
    ?>
    <p><span>Время начала: </span><input type='text' name='extra[bg_time]'
                                            value='<?php echo get_post_meta($post->ID, "bg_time", 1); ?>'
                                            style='width:100%'/></p>
    <?php
}

/*----------------END POSTER------------------------------*/