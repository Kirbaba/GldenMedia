<? get_header()?>
	<section class="category">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
					<h1 class="block_title"><? echo single_cat_title()?></h1>
					<?php if ( have_posts() ) : ?>
	                <!-- Цикл вывода постов -->
			            <?php while ( have_posts() ) : the_post(); ?>

			            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				            <div class="news__item">
				                <div class="news__item--img">
				                    <?= get_the_post_thumbnail(get_the_ID(),'full'); ?>
				                </div>
				                <div class="news__item--soc">
				                    <a href="http://www.facebook.com/sharer.php?u=<?= get_permalink(get_the_ID()); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
				                    <a href="http://vk.com/share.php?url=<?= get_permalink(get_the_ID()); ?>" target="_blank"><i class="fa fa-vk"></i></a>
				<!--                    <a href="http://vk.com/share.php?url=--><?//= get_permalink(get_the_ID()); ?><!--" target="_blank"><i class="fa fa-vk"></i></a>-->
				                </div>
				                <div class="news__item--title">
				                    <p><?= get_the_date("d-m-Y",get_the_ID()); ?></p>
				                    <h4><?= get_the_title(get_the_ID()); ?></h4>
				                    <a href="<?= get_permalink(get_the_ID()); ?>">> ПОДРОБНЕЕ</a>
				                </div>
				            </div>
				        </div>
			                                
			                
			            <?php endwhile;?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		
	</section>
<? get_footer()?>