<?php if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="artists__item">
            <div class="artists__item--img">
                <?= get_the_post_thumbnail(get_the_ID(),'full'); ?>
            </div>
            <div class="artists__item--desc">
                <h4><?= get_the_title(get_the_ID()); ?></h4>
                <a href="<?= get_permalink(get_the_ID()); ?>">ИНФОРМАЦИЯ О АРТИСТЕ</a>
                <div class="artists__item--desc--soc">
                    <a href="<?= get_post_meta(get_the_ID(), 'fb', 1) ?>"><i class="fa fa-facebook"></i></a>
                    <a href="<?= get_post_meta(get_the_ID(), 'tw', 1) ?>"><i class="fa fa-vk"></i></a>
                </div>
            </div>
        </div>
    </div>
    <?php
endwhile;
}
wp_reset_query(); ?>