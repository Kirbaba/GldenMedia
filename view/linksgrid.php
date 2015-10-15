<li class="list-group-item" data-num="<?= $item['id'] ?>">
    <div class="row">
        <div class="col-lg-5">
            <p>Название</p>
        </div>
        <div class="col-lg-5">
            <p>Ссылка</p>
        </div>
        <div class="col-lg-1">
            <p>Сохранить</p>
        </div>
        <div class="col-lg-1">
            <p>Удалить</p>
        </div>
    </div>
</li>
<?php foreach($links as $item){ ?>
    <li class="list-group-item" data-num="<?= $item['id'] ?>">
        <div class="row">
            <div class="col-lg-5">
                <input type="text" name="db_name" value="<?= $item['link'] ?>">
            </div>
            <div class="col-lg-5">
                <input type="text" placeholder="Ссылка" name="db_link" value="<?= $item['name'] ?>">
            </div>
            <div class="col-lg-1">
                <button class="btn btn-success save-link"><span class="glyphicon glyphicon-floppy-disk"></span></button>
            </div>
            <div class="col-lg-1">
                <button class="btn btn-danger del-link" data-num="<?= $item['id'] ?>"><span class="glyphicon glyphicon-trash"></span></button>
            </div>
        </div>
    </li>
<?php } ?>