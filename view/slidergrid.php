<?php foreach($slides as $item){ ?>
<li class="list-group-item" data-num="<?= $item['id'] ?>">
    <div class="row">
        <div class="col-lg-12">
            <img src="<?= $item['img'] ?>" alt="" class="slide-img media">
            <button class="btn btn-info media-upload"><span class="glyphicon glyphicon-picture"> Выбрать изображение</span></button>
            <input type="hidden" class="media-img" name="slide-img" value="<?= $item['img'] ?>">
        </div>
        <div class="col-lg-12">
            <input type="text" placeholder="Текст над заголовком" name="slide-head" value="<?= $item['head'] ?>">
            <input type="text" placeholder="Заголовок" name="slide-title" value="<?= $item['title'] ?>">
            <input type="text" placeholder="Краткое описание" name="slide-description" value="<?= $item['description'] ?>">
        </div>
        <div class="col-lg-1">
            <button class="btn btn-success save-slide"><span class="glyphicon glyphicon-floppy-disk"></span></button>
        </div>
        <div class="col-lg-1">
            <?php if ($item['id'] != 1) { ?>
                <button class="btn btn-danger del-slide" data-num="<?= $item['id'] ?>"><span class="glyphicon glyphicon-trash"></span></button>
            <?php } ?>
        </div>
    </div>
</li>
<?php } ?>