<?php if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="showbill__item">
            <div class="showbill__item--img">
                <?= get_the_post_thumbnail(get_the_ID(),'full'); ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 p5">
                <div class="showbill__item--time">
                    <h3><span><?= iconv("cp1251", "UTF-8",strftime("%d", strtotime(get_post_meta(get_the_ID(), 'bg_date', 1)))) ?></span>
                        <?= iconv("cp1251", "UTF-8",strftime("%B", strtotime(get_post_meta(get_the_ID(), 'bg_date', 1)))) ?></h3>
                    <p><?= get_post_meta(get_the_ID(), 'bg_time', 1) ?></p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <div class="showbill__item--info">
                    <h2><?= get_the_title(get_the_ID()) ?></h2>
                    <p><?= get_post_meta(get_the_ID(), 'address', 1) ?></p>
                </div>
            </div>

        </div>
    </div>
        <?php
    endwhile;
}
wp_reset_query(); ?>