<?php if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="news__item">
                <div class="news__item--img">
                    <?= get_the_post_thumbnail(get_the_ID(),'full'); ?>
                </div>
                <div class="news__item--soc">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-vk"></i></a>
                </div>
                <div class="news__item--title">
                    <p><?= get_the_date("d-m-Y",get_the_ID()); ?></p>
                    <h4><?= get_the_title(get_the_ID()); ?></h4>
                    <a href="<?= get_permalink(get_the_ID()); ?>">> ПОДРОБНЕЕ</a>
                </div>
            </div>
        </div>
    <?php
endwhile;
}
wp_reset_query(); ?>