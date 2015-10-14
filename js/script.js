
/*-------------GOOGLE MAPS-----------------*/

function initialize() {

    var myLatlng = new google.maps.LatLng(59.934602, 30.334607);
    var mapOptions = {
        center: new google.maps.LatLng(59.934602, 30.334607),
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        mapOptions);
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title:"Ditlogistic"
    });
}

function loadScript() {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE&callback=initialize";
    document.body.appendChild(script);
}

window.onload = loadScript;



jQuery(function() {

    jQuery(window).scroll(function() {
        if(jQuery(this).scrollTop() != 0) {
            jQuery('#toTop').fadeIn();
        } else {
            jQuery('#toTop').fadeOut();
        }
    });
    jQuery('#toTop').click(function() {
        jQuery('body,html').animate({scrollTop: 0}, 1000);
    });

    jQuery('.smoothScroll').click(function(event) {
        event.preventDefault();
        var href=$(this).attr('href');
        var target=$(href);
        var top=target.offset().top;
        $('html,body').animate({
            scrollTop: top
        }, 1000);
    });
});

jQuery(document).ready(function(){
    jQuery(document).on('click', '.more-poster', function(){
        var num = jQuery(this).attr('data-page');

        jQuery.ajax({
            url: ajaxurl, //url, к которому обращаемся
            type: "POST",
            data: "action=more_poster&num=" +num, //данные, которые передаем. Обязательно для action указываем имя нашего хука
            success: function(data){
                num = num+1;
                jQuery('.poster-row').append(data);
                jQuery('.more-poster').attr('data-page', num);
            }
        });
        return false;
    });
    jQuery(document).on('click', '.news__more', function(){
        var num = jQuery(this).attr('data-page');

        jQuery.ajax({
            url: ajaxurl, //url, к которому обращаемся
            type: "POST",
            data: "action=more_news&num=" +num, //данные, которые передаем. Обязательно для action указываем имя нашего хука
            success: function(data){
                num = num+1;
                jQuery('.news-row').append(data);
                jQuery('.news__more').attr('data-page', num);
            }
        });
        return false;
    });
});

