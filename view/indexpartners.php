<?php foreach($partners as $item){ ?>
    <div class="col7">
        <div class="partners__item">
            <a href=" <?= $item['link'] ?>">
                <img src="<?= $item['img'] ?>" alt="">
            </a>
        </div>
    </div>
<?php } ?>