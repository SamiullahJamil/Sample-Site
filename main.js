$(document).ready(function () {
    $(window).bind("load resize scroll", function () {
        if (window.innerWidth < 1000) {
            $('#myCarousel').hide();
            $('body').removeClass('bgchange1');
            $('body').removeClass('bgchange2');
        }
        else {
            $('#myCarousel').show();
            if ($(window).scrollTop() < $('#imageChange').offset().top) {
                $('body').addClass('bgchange1');
                $('body').removeClass('bgchange2');
            }
            else {
                $('body').removeClass('bgchange1');
                $('body').addClass('bgchange2');
            }
            if ($(window).scrollTop() > $("#imageChange").offset().top) {
                $('body').removeClass('bgchange1');
                $('body').addClass('bgchange2');
            }
            else {
                $('body').addClass('bgchange1');
                $('body').removeClass('bgchange2');
            }
        }
    });
});