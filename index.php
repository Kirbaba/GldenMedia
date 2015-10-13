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
		<div class="fotorama" data-width="100%"  data-ratio="1400/822" data-fit="cover">
			<div data-img="<?php bloginfo('template_directory'); ?>/img/Layer-5.png">
				<div class="header__text">
					<h4>GOLDEN MEDIA PRESENT</h4>
					<h1>Rihanna</h1>
					<h4>НОВЫЙ КОНЦЕРТНЫЙ ТУР ПО РОССИИ И КАЗАХСТАНУ</h4>
				</div>
				<div class="header__mouse">
					<p>КРУТИТЕ МЫШКУ ВНИЗ</p>
				</div>
			</div>
			<div data-img="<?php bloginfo('template_directory'); ?>/img/Layer-5.png">
			<div class="header__text">
					<h4>GOLDEN MEDIA PRESENT</h4>
					<h1>Slide #2</h1>
					<h4>НОВЫЙ КОНЦЕРТНЫЙ ТУР ПО РОССИИ И КАЗАХСТАНУ</h4>
				</div>
				<div class="header__mouse">
					<p>КРУТИТЕ МЫШКУ ВНИЗ</p>
				</div></div>
			<div data-img="<?php bloginfo('template_directory'); ?>/img/Layer-5.png">
			<div class="header__text">
					<h4>GOLDEN MEDIA PRESENT</h4>
					<h1>Slide #3</h1>
					<h4>НОВЫЙ КОНЦЕРТНЫЙ ТУР ПО РОССИИ И КАЗАХСТАНУ</h4>
				</div>
				<div class="header__mouse">
					<p>КРУТИТЕ МЫШКУ ВНИЗ</p>
				</div></div>
		</div>
	</header>
    
<?php wp_footer(); ?>
</body>
</html>