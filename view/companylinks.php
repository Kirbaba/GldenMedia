<div class="container">
    <div class="col-lg-12">
        <p><h1>Ссылки компании</h1></p>
        <form action="/wp-admin/admin.php?page=companylinks" method="post">
            <p>Укажите ссылку</p>
            <input type="text" name="link" placeholder="Ссылка">
            <p>Укажите название для ссылки</p>
            <input type="text" name="name" placeholder="название">
            <input type="submit" class="btn btn-success" value="Сохранить">
        </form>
        <ul class="list-group ">
            <?= do_shortcode('[companylinks]'); ?>
        </ul>
    </div>
</div>