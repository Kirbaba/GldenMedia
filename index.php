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
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="showbill__item">
						<div class="showbill__item--img">
							<img src="<?php bloginfo('template_directory'); ?>/img/best.png" alt="">
						</div>						
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 p5">
							<div class="showbill__item--time">
								<h3><span>29</span>апреля</h3>
								<p>21:00</p>
							</div>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
							<div class="showbill__item--info">
								<h2>Артур Бэст</h2>
								<p>театр Надежды Бабкиной "Русская песня"</p>
							</div>
						</div>
					
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="showbill__item">
						<div class="showbill__item--img">
							<img src="<?php bloginfo('template_directory'); ?>/img/pozner.png" alt="">
						</div>						
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 p5">
							<div class="showbill__item--time">
								<h3><span>08</span>апреля</h3>
								<p>21:00</p>
							</div>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
							<div class="showbill__item--info">
								<h2>Владимир Познер</h2>
								<p>Московский Дом Музыки</p>
							</div>
						</div>
					
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="showbill__item">
						<div class="showbill__item--img">
							<img src="<?php bloginfo('template_directory'); ?>/img/ri.png" alt="">
						</div>						
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 p5">
							<div class="showbill__item--time">
								<h3><span>10</span>апреля</h3>
								<p>21:00</p>
							</div>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
							<div class="showbill__item--info">
								<h2>Rihanna</h2>
								<p>СК “ОЛИМПИЙСКИЙ”</p>
							</div>
						</div>
					
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="showbill__item">
						<div class="showbill__item--img">
							<img src="<?php bloginfo('template_directory'); ?>/img/sati.png" alt="">
						</div>						
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 p5">
							<div class="showbill__item--time">
								<h3><span>17</span>апреля</h3>
								<p>21:00</p>
							</div>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
							<div class="showbill__item--info">
								<h2>Сати Казанова</h2>
								<p>КЗ “РОССИЯ”</p>
							</div>
						</div>					
					</div>
				</div>			
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-3">
				<div class="showbill__more"><a href="#">СМОТРЕТЬ ДАЛЬШЕ АФИШУ</a></div>
			</div>
		</div>
	</section>
    
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