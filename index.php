<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE">
    </script>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>

</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top navigation" role="navigation">
		<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>		      
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">		      	     
				<ul class="nav navbar-nav navbar-center navigation__list">		      
					<li><a href="#">Главная</a></li>
					<li><a href="#">КОНЦЕРТНЫЙ ГРАФИК</a></li>
					<li><a href="#">ДИСКОГРАФИЯ</a></li>
					<li><a href="#">КАТАЛОГ ПЕСЕН</a></li>
					<li><a href="#">ФОТО</a></li> 
					<li><a href="#">ВИДЕО</a></li>
					<li><a href="#">СМИ</a></li>
					<li><a href="#">СМИ</a></li>
					<li><a href="#">ОРГАНИЗАЦИЯ КОНЦЕРТОВ</a></li>  		        		       
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>	
	<header class="header">
		<div class="header__logo">
			<h3><span>GOLDEN</span>MEDIA</h3>
		</div>
		<div class="fotorama" data-width="100%"  data-ratio="1400/822" data-fit="cover">
			<?= do_shortcode('[index_slider]') ?>
<!--			<div data-img="--><?php //bloginfo('template_directory'); ?><!--/img/Layer-5.png">-->
<!--				<div class="header__text">-->
<!--					<h4>GOLDEN MEDIA PRESENT</h4>-->
<!--					<h1>Rihanna</h1>-->
<!--					<h4>НОВЫЙ КОНЦЕРТНЫЙ ТУР ПО РОССИИ И КАЗАХСТАНУ</h4>-->
<!--				</div>-->
<!--				<div class="header__mouse">-->
<!--					<p>КРУТИТЕ МЫШКУ ВНИЗ</p>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div data-img="--><?php //bloginfo('template_directory'); ?><!--/img/Layer-5.png">-->
<!--			<div class="header__text">-->
<!--					<h4>GOLDEN MEDIA PRESENT</h4>-->
<!--					<h1>Slide #2</h1>-->
<!--					<h4>НОВЫЙ КОНЦЕРТНЫЙ ТУР ПО РОССИИ И КАЗАХСТАНУ</h4>-->
<!--				</div>-->
<!--				<div class="header__mouse">-->
<!--					<p>КРУТИТЕ МЫШКУ ВНИЗ</p>-->
<!--				</div></div>-->
<!--			<div data-img="--><?php //bloginfo('template_directory'); ?><!--/img/Layer-5.png">-->
<!--			<div class="header__text">-->
<!--					<h4>GOLDEN MEDIA PRESENT</h4>-->
<!--					<h1>Slide #3</h1>-->
<!--					<h4>НОВЫЙ КОНЦЕРТНЫЙ ТУР ПО РОССИИ И КАЗАХСТАНУ</h4>-->
<!--				</div>-->
<!--				<div class="header__mouse">-->
<!--					<p>КРУТИТЕ МЫШКУ ВНИЗ</p>-->
<!--				</div></div>-->
		</div>
	</header>

	<section class="showbill">
		<div class="container">
			<h1 class="block_title">АФИША</h1>
			<div class="row poster-row">
				<?= do_shortcode('[poster]') ?>
<!--				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--					<div class="showbill__item">-->
<!--						<div class="showbill__item--img">-->
<!--							<img src="--><?php //bloginfo('template_directory'); ?><!--/img/best.png" alt="">-->
<!--						</div>						-->
<!--						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 p5">-->
<!--							<div class="showbill__item--time">-->
<!--								<h3><span>29</span>апреля</h3>-->
<!--								<p>21:00</p>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">-->
<!--							<div class="showbill__item--info">-->
<!--								<h2>Артур Бэст</h2>-->
<!--								<p>театр Надежды Бабкиной "Русская песня"</p>-->
<!--							</div>-->
<!--						</div>-->
<!--					-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--					<div class="showbill__item">-->
<!--						<div class="showbill__item--img">-->
<!--							<img src="--><?php //bloginfo('template_directory'); ?><!--/img/pozner.png" alt="">-->
<!--						</div>						-->
<!--						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 p5">-->
<!--							<div class="showbill__item--time">-->
<!--								<h3><span>08</span>апреля</h3>-->
<!--								<p>21:00</p>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">-->
<!--							<div class="showbill__item--info">-->
<!--								<h2>Владимир Познер</h2>-->
<!--								<p>Московский Дом Музыки</p>-->
<!--							</div>-->
<!--						</div>-->
<!--					-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--					<div class="showbill__item">-->
<!--						<div class="showbill__item--img">-->
<!--							<img src="--><?php //bloginfo('template_directory'); ?><!--/img/ri.png" alt="">-->
<!--						</div>						-->
<!--						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 p5">-->
<!--							<div class="showbill__item--time">-->
<!--								<h3><span>10</span>апреля</h3>-->
<!--								<p>21:00</p>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">-->
<!--							<div class="showbill__item--info">-->
<!--								<h2>Rihanna</h2>-->
<!--								<p>СК “ОЛИМПИЙСКИЙ”</p>-->
<!--							</div>-->
<!--						</div>-->
<!--					-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--					<div class="showbill__item">-->
<!--						<div class="showbill__item--img">-->
<!--							<img src="--><?php //bloginfo('template_directory'); ?><!--/img/sati.png" alt="">-->
<!--						</div>						-->
<!--						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 p5">-->
<!--							<div class="showbill__item--time">-->
<!--								<h3><span>17</span>апреля</h3>-->
<!--								<p>21:00</p>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">-->
<!--							<div class="showbill__item--info">-->
<!--								<h2>Сати Казанова</h2>-->
<!--								<p>КЗ “РОССИЯ”</p>-->
<!--							</div>-->
<!--						</div>					-->
<!--					</div>-->
<!--				</div>			-->
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-3">
				<div class="showbill__more"><a href="#" class="more-poster" data-page="2">СМОТРЕТЬ ДАЛЬШЕ АФИШУ</a></div>
			</div>
		</div>
	</section>

	<section class="news">
		<div class="container">
			<h1 class="block_title white">Новости</h1>
			<div class="row news-row">
				<?= do_shortcode('[news]') ?>
<!--				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">-->
<!--					<div class="news__item">-->
<!--						<div class="news__item--img">-->
<!--							<img src="--><?php //bloginfo('template_directory'); ?><!--/img/jjd.png" alt="">-->
<!--						</div>-->
<!--						<div class="news__item--soc">-->
<!--							<a href="#"><i class="fa fa-facebook"></i></a>-->
<!--							<a href="#"><i class="fa fa-vk"></i></a>-->
<!--						</div>-->
<!--						<div class="news__item--title">-->
<!--							<p>19.06.2015</p>-->
<!--							<h4>АННА ШУЛЬГИНА:«БАЛ ДЕБЮТАНТОК — ЭТО ШАНС НАЙТИ ДРУЗЕЙ</h4>-->
<!--							<a href="#">> ПОДРОБНЕЕ</a>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">-->
<!--					<div class="news__item">-->
<!--						<div class="news__item--img">-->
<!--							<img src="--><?php //bloginfo('template_directory'); ?><!--/img/723028a42949105d432a898fb71b6c7e__230x230.png" alt="">-->
<!--						</div>-->
<!--						<div class="news__item--soc">-->
<!--							<a href="#"><i class="fa fa-facebook"></i></a>-->
<!--							<a href="#"><i class="fa fa-vk"></i></a>-->
<!--						</div>-->
<!--						<div class="news__item--title">-->
<!--							<p>25.06.2015</p>-->
<!--							<h4>МАКСИМ ФАДЕЕВ ВОЗВРАЩАЕТСЯ НА СЦЕНУ ПОСЛЕ 20-ЛЕТ</h4>-->
<!--							<a href="#">> ПОДРОБНЕЕ</a>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">-->
<!--					<div class="news__item">-->
<!--						<div class="news__item--img">-->
<!--							<img src="--><?php //bloginfo('template_directory'); ?><!--/img/ab0963b4ac4eeb189494c7f18f9140d8__475x230.png" alt="">-->
<!--						</div>-->
<!--						<div class="news__item--soc">-->
<!--							<a href="#"><i class="fa fa-facebook"></i></a>-->
<!--							<a href="#"><i class="fa fa-vk"></i></a>-->
<!--						</div>-->
<!--						<div class="news__item--title">-->
<!--							<p>29.06.2015</p>-->
<!--							<h4>ИГОРЬ КРУТОЙ:«НА КОНКУРСЕ «НОВАЯ ВОЛНА» В СОЧИ</h4>-->
<!--							<a href="#">> ПОДРОБНЕЕ</a>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->

		</div>
			<a href="#" class="news__more" data-page="2">ДРУГИЕ НОВОСТИ</a>
	</section>

	<section class="company">
		<div class="container">
			<h1 class="block_title">КОМПАНИЯ</h1>
				<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
					<h4>Мы создали агентство GOLDEN MEDIA<br>по одной причине... </h4>
					<h2>МЫ ЛЮБИМ МУЗЫКУ!</h2>
					<p>Команда нашего концертного агентства состоит из профессиональных деятелей музыкальной индустрии с безупречной репутацией. Мы знаем, как создавать и продавать первоклассные шоу, будь то концерты или фестивали, классический жанр или хард-рок, детское мероприятие или кабаре. Для артистов и их менеджмента мы оказываем широкий спектр дополнительных услуг.</p>
					<div class="company__links">
						<a href="#">организация концертов</a> 
						<a href="#">создание шоу</a>
						<a href="#">PR&promo</a>
						<a href="#">мерчендайзинг</a>
						<a href="#">реклама</a>
						<a href="#">celebrity marketing</a>
						<a href="#">музыкальный менеджмент</a>
						<a href="#">управление правами</a>
					</div>
				</div>
			
		</div>
	</section>

	<section class="artists">
		<div class="container">
			<div class="h1 block_title">НАШИ АРТИСТЫ</div>
			<?= do_shortcode('[artists]') ?>
<!--			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">-->
<!--				<div class="artists__item">-->
<!--					<div class="artists__item--img">-->
<!--						<img src="--><?php //bloginfo('template_directory'); ?><!--/img/sati2.png" alt="">-->
<!--					</div>-->
<!--					<div class="artists__item--desc">-->
<!--						<h4>САТИ КАЗАНОВА</h4>-->
<!--						<a href="#">ИНФОРМАЦИЯ О АРТИСТЕ</a>-->
<!--						<div class="artists__item--desc--soc">-->
<!--							<a href="#"><i class="fa fa-facebook"></i></a>-->
<!--							<a href="#"><i class="fa fa-vk"></i></a>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">-->
<!--				<div class="artists__item">-->
<!--					<div class="artists__item--img">-->
<!--						<img src="--><?php //bloginfo('template_directory'); ?><!--/img/jas.png" alt="">-->
<!--					</div>-->
<!--					<div class="artists__item--desc">-->
<!--						<h4>Jasmine Thompson</h4>-->
<!--						<a href="#">ИНФОРМАЦИЯ О АРТИСТЕ</a>-->
<!--						<div class="artists__item--desc--soc">-->
<!--							<a href="#"><i class="fa fa-facebook"></i></a>-->
<!--							<a href="#"><i class="fa fa-vk"></i></a>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">-->
<!--				<div class="artists__item">-->
<!--					<div class="artists__item--img">-->
<!--						<img src="--><?php //bloginfo('template_directory'); ?><!--/img/ars.png" alt="">-->
<!--					</div>-->
<!--					<div class="artists__item--desc">-->
<!--						<h4>Arsenium</h4>-->
<!--						<a href="#">ИНФОРМАЦИЯ О АРТИСТЕ</a>-->
<!--						<div class="artists__item--desc--soc">-->
<!--							<a href="#"><i class="fa fa-facebook"></i></a>-->
<!--							<a href="#"><i class="fa fa-vk"></i></a>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
		</div>
	</section>


	<section class="partners">
		<div class="container">
			<div class="row">
				<h1 class="block_title">ПАРТНЕРЫ</h1>
				<?= do_shortcode('[index_partners]');?>
<!--				<div class="col7">-->
<!--					<div class="partners__item">-->
<!--						<a href="#">-->
<!--							<img src="--><?php //bloginfo('template_directory'); ?><!--/img/cdland.png" alt="">-->
<!--						</a>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="col7">-->
<!--					<div class="partners__item">-->
<!--						<a href="#">-->
<!--							<img src="--><?php //bloginfo('template_directory'); ?><!--/img/rayarena.png" alt="">-->
<!--						</a>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="col7">-->
<!--					<div class="partners__item">-->
<!--						<a href="#">-->
<!--							<img src="--><?php //bloginfo('template_directory'); ?><!--/img/concertru.png" alt="">-->
<!--						</a>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="col7">-->
<!--					<div class="partners__item">-->
<!--						<a href="#">-->
<!--							<img src="--><?php //bloginfo('template_directory'); ?><!--/img/kasirru.png" alt="">-->
<!--						</a>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="col7">-->
<!--					<div class="partners__item">-->
<!--						<a href="#">-->
<!--							<img src="--><?php //bloginfo('template_directory'); ?><!--/img/russia1.png" alt="">-->
<!--						</a>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="col7">-->
<!--					<div class="partners__item">-->
<!--						<a href="#">-->
<!--							<img src="--><?php //bloginfo('template_directory'); ?><!--/img/muztv.png" alt="">-->
<!--						</a>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="col7">-->
<!--					<div class="partners__item">-->
<!--						<a href="#">-->
<!--							<img src="--><?php //bloginfo('template_directory'); ?><!--/img/izv.png" alt="">-->
<!--						</a>-->
<!--					</div>-->
<!--				</div>-->
			</div>
		</div>
	</section>

	<section class="contacts">
		<div class="container-fluid">
			<div class="row">
				<h1 class="block_title">КОНТАКТЫ</h1>
				<article class="contacts__map">
					<div id="map_canvas"  style="width:100%; height:100%"></div>
				</article>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="contacts__item">
								<i class="fa fa-map-marker"></i>
								<p>Москва, 115035,<br>
								 ул. Садовническая, 76/71</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="contacts__item">
								<i class="fa fa-envelope-o"></i>
								<p>info@goldenmedia.ru</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="contacts__item">
								<i class="fa fa-phone"></i>
								<h4>+ 7 495 975 6995</h4>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<input type="text" class="contacts--input" placeholder="Ваше имя">
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<input type="text" class="contacts--input" placeholder="E-mail">
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<input type="text" class="contacts--input" placeholder="Телефон">
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<textarea name="" id="" class="contacts--text" placeholder="Сообщение"></textarea>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<input type="button" class="contacts--sub" value="Отправить">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-6 col-xs-12">
					<p><?php echo get_theme_mod('address_textbox'); ?></p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<a href="<?php echo get_theme_mod('fb_textbox'); ?>"><i class="fa fa-facebook"></i></a>
					<a href="<?php echo get_theme_mod('tw_textbox'); ?>"><i class="fa fa-twitter"></i></a>
					<a href="<?php echo get_theme_mod('vk_textbox'); ?>"><i class="fa fa-vk"></i></a>
					<a href="<?php echo get_theme_mod('pi_textbox'); ?>"><i class="fa fa-pinterest"></i></a>
					<a href="<?php echo get_theme_mod('gp_textbox'); ?>"><i class="fa fa-google-plus"></i></a>
					<a href="<?php echo get_theme_mod('dr_textbox'); ?>"><i class="fa fa-dribbble"></i></a>
					<a href="<?php echo get_theme_mod('li_textbox'); ?>"><i class="fa fa-linkedin"></i></a>
				</div>
			</div>
		</div>
	</footer>
    

	<script type="text/javascript">
		addLoadEvent = function(func){if(typeof jQuery!="undefined")jQuery(document).ready(func);else if(typeof wpOnload!='function'){wpOnload=func;}else{var oldonload=wpOnload;wpOnload=function(){oldonload();func();}}};
		var ajaxurl = '/wp-admin/admin-ajax.php',
			pagenow = 'toplevel_page_mainpage',
			typenow = '',
			adminpage = 'toplevel_page_mainpage',
			thousandsSeparator = ' ',
			decimalPoint = ',',
			isRtl = 0;
	</script>

<?php wp_footer(); ?>

<!--	--><?php //echo get_theme_mod('fb_textbox'); ?>
<!--	--><?php //echo get_theme_mod('tw_textbox'); ?>
<!--	--><?php //echo get_theme_mod('vk_textbox'); ?>
<!--	--><?php //echo get_theme_mod('pi_textbox'); ?>
<!--	--><?php //echo get_theme_mod('gp_textbox'); ?>
<!--	--><?php //echo get_theme_mod('dr_textbox'); ?>
<!--	--><?php //echo get_theme_mod('li_textbox'); ?>

</body>
</html>