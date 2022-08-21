// Add smooth scrolling to all links
jQuery(document).ready(function ($) {

    $('a[href*="#"]:not([href="#"])').click(function () {
        var target = $(this.hash);
        $('html,body').stop().animate({
            scrollTop: target.offset().top - 124
        }, 1000);
    });
    if (location.hash) {
        var id = $(location.hash);
    }
    $(window).load(function () {
        if (location.hash) {
            $('html,body').animate({ scrollTop: id.offset().top - 112 }, 400)
        };
    });

});
