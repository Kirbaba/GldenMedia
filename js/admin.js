jQuery(document).ready(function ($) {

    $(document).on('click', '.media-upload', function() {
        var par = $(this).parent();
        var send_attachment_bkp = wp.media.editor.send.attachment;
        wp.media.editor.send.attachment = function(props, attachment) {
            par.children('.media').attr('src', attachment.url);
            par.children('.media-img').val(attachment.url);
//                jQuery('.custom_media_id').val(attachment.id);
            wp.media.editor.send.attachment = send_attachment_bkp;
        }
        wp.media.editor.open();
        return false;
    });
    //добавить партнера
    $(document).on('click', '.add-partner', function(){
        $('.partners-list').append('<li class="list-group-item"> ' +
            '<div class="row"> ' +
            '<div class="col-lg-5"> ' +
            '<img src="" alt="" class="partner-img media"> ' +
            '<button class="btn btn-info media-upload"><span class="glyphicon glyphicon-picture"> Выбрать изображение</span></button> ' +
            '<input type="hidden" class="media-img" name="partner-img"> ' +
            '</div> ' +
            '<div class="col-lg-5"> ' +
            '<input type="text" placeholder="Ссылка на партнера" name="partner-link"> ' +
            '</div> ' +
            '<div class="col-lg-1"> ' +
            '<button class="btn btn-success save-partner"><span class="glyphicon glyphicon-floppy-disk"></span></button> ' +
            '</div> ' +
            '<div class="col-lg-1"> ' +
            '</div> ' +
            '</div> ' +
            '</li>');
    });
    //сохранениа партнера
    $(document).on('click', '.save-partner', function(){
        var block = $(this).parent().parent();

        var num = block.parent().attr('data-num');
        var link = block.children().children('[name="partner-link"]').val();
        var img = block.children().children('[name="partner-img"]').val();

        if(num == null){
            $.ajax({
                type:'POST',
                url:ajaxurl,
                data:'action=save_partner&link='+link+'&img='+img,
                success:function(data){
                    alert("Партнер добавлен и сохранен!");
                    location.reload();
                }
            });
        }else{
            $.ajax({
                type:'POST',
                url:ajaxurl,
                data:'action=update_partner&link='+link+'&img='+img+'&num='+num,
                success:function(data){
                    alert("Партнер обновлен!");
                }
            });
        }
    });
    //удаление слайда
    $(document).on('click', '.del-partner', function(){
        var num = $(this).attr('data-num');
        if(num != undefined){
            var block = $(this).parent().parent().parent();
            $.ajax({
                type:'POST',
                url:ajaxurl,
                data:'action=delete_partner&num='+num,
                success:function(data){
                    console.log(data);
                    alert("Партнер удален!");
                }
            });
            block.remove();
        }

    });

    //добавить партнера
    $(document).on('click', '.add-slide', function(){
        $('.slide-list').append('<li class="list-group-item"> ' +
            '<div class="row"> ' +
            '<div class="col-lg-12"> ' +
            '<img src="" alt="" class="slide-img media"> ' +
            '<button class="btn btn-info media-upload"><span class="glyphicon glyphicon-picture"> Выбрать изображение</span></button> ' +
            '<input type="hidden" class="media-img" name="slide-img"> ' +
            '</div> ' +
            '<div class="col-lg-12">'+
            '<input type="text" placeholder="Текст над заголовком" name="slide-head" value="">'+
            '<input type="text" placeholder="Заголовок" name="slide-title" value="">'+
            '<input type="text" placeholder="Краткое описание" name="slide-description" value="">'+
            '</div>'+
            '<div class="col-lg-1"> ' +
            '<button class="btn btn-success save-slide"><span class="glyphicon glyphicon-floppy-disk"></span> Сохранить</button> ' +
            '</div> ' +
            '<div class="col-lg-1"> ' +
            '</div> ' +
            '</div> ' +
            '</li>');
    });
    //сохранениа партнера
    $(document).on('click', '.save-slide', function(){
        var block = $(this).parent().parent();

        var num = block.parent().attr('data-num');
        var img = block.children().children('[name="slide-img"]').val();
        var head = block.children().children('[name="slide-head"]').val();
        var title = block.children().children('[name="slide-title"]').val();
        var description = block.children().children('[name="slide-description"]').val();

        console.log(num);

        if(num == null){
            $.ajax({
                type:'POST',
                url:ajaxurl,
                data:'action=save_slide&img='+img+'&head='+head+'&title='+title+'&description='+description,
                success:function(data){
                    console.log(data);
                    alert("Слайд добавлен и сохранен!");
                    location.reload();
                }
            });
        }else{
            $.ajax({
                type:'POST',
                url:ajaxurl,
                data:'action=update_slide&img='+img+'&head='+head+'&title='+title+'&description='+description+'&num='+num,
                success:function(data){
                    console.log(data);
                    alert("Слайд обновлен!");
                }
            });
        }
    });
    //удаление слайда
    $(document).on('click', '.del-slide', function(){
        var num = $(this).attr('data-num');
        if(num != undefined){
            var block = $(this).parent().parent().parent();
            $.ajax({
                type:'POST',
                url:ajaxurl,
                data:'action=delete_side&num='+num,
                success:function(data){
                    alert("Слайд удален!");
                }
            });
            block.remove();
        }
    });

    $(document).on('click', '.del-link', function(){
        var id = $(this).attr('data-num');
        if(id != undefined){
            var block = $(this).parent().parent().parent();
            $.ajax({
                type:'POST',
                url:ajaxurl,
                data:'action=save_link&del_link='+id,
                success:function(data){
                    alert("Ссылка удалена!");
                    block.remove();
                }
            });
        }
    });

    $(document).on('click', '.save-link', function(){
        var block = $(this).parent().parent();

        var id = block.parent().attr('data-num');
        var name = block.children().children('[name="db_link"]').val();
        var link = block.children().children('[name="db_name"]').val();

        if(id != undefined){
            var block = $(this).parent().parent().parent();
            $.ajax({
                type:'POST',
                url:ajaxurl,
                data:'action=save_link&id='+id+'&name='+name+'&link='+link+'&update=1',
                success:function(data){
                    alert("Ссылка обновлена!");
                }
            });
        }
    });

    //добавить изображение к новости
    $(document).on('click', '.add-newsimg', function(){
        $('.news-imgs').append('<div> ' +
            '<img src="" style="width:200px" alt="" class="media"> ' +
        '<button class="btn btn-info media-upload"><span class="glyphicon glyphicon-picture"> Выбрать изображение</span></button> ' +
            '<button class="btn btn-danger media-delete"><span class="glyphicon glyphicon-trash"> Удалить изображение</span></button>'+
        '<input type="hidden" class="media-img" name="extra[newsbg][]" value=""> ' +
        '</div>');
        return false;
    });

    $(document).on('click','.media-delete',function(){
        $(this).parent().remove();
        return false;
    });

});
