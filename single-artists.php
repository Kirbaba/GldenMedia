<? get_header()?>
	<section class="page">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php if ( has_post_thumbnail() ): ?>
		<article class="page__title">
			<div class="container-fluid">
				<div class="row">
					<img src="<?= get_post_meta(get_the_ID(), 'bg', 1) ?>" alt="">
					<div class="page__title--name">
						<div class="col-lg-5 col-lg-offset-5 col-md-5 col-md-offset-5 col-sm-8 col-sm-offset-4 col-xs-8 col-xs-offset-4">
							<h2><?php the_title(); ?></h2>
							<h4><?= get_post_meta(get_the_ID(), 'prof', 1) ?></h4>
						</div>
					</div>
				</div>
			</div>
		</article>
		<article class="page__text">
			<div class="container">
				<div class="row">
					
	                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
	                	<div class="news__item--soc">
		                    <a href="http://www.facebook.com/sharer.php?u=<?= get_the_permalink(get_the_ID()); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
		                    <a href="http://vk.com/share.php?url=<?= get_the_permalink(get_the_ID()); ?>" target="_blank"><i class="fa fa-vk"></i></a>
		                </div>
		                <div class="page__text--box">		
		                	<?php the_content(); ?>
		                </div>
	                </div>
				</div>
			</div>
		</article>
		<?php  endif;?>	
		<?php endwhile; ?>
		<?php  endif;?>	
	</section>
<? get_footer()?>