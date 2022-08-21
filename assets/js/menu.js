jQuery(document).ready(function ($) {

    // Mobile menu toggle function
    $('.menu-toggle').click(function () {
        $('#primary-header').toggleClass('open');
        $('#mobile-menu').slideToggle();
    });

    // Mobile sub-menu click function
    $('#header-menu-mobile a').click(function (event) {

        var submenu = $(this).next('ul.sub-menu');

        if (submenu.length >= 1) {
            event.preventDefault();
            submenu.slideToggle();
            $(this).parent().toggleClass('open');
        }

    });

    $('#header-menu-mobile li.current-menu-parent').find('ul.sub-menu').show();
    $('#header-menu-mobile li.current-menu-parent').addClass('open');

    // Give transparent header a navy background on scroll
    // Remove background if scrool position is page top

    var header_background = $('#primary-header').data('header-background');

    if (header_background === 'transparent') {

        $(window).scroll(function () {
            if ($(window).scrollTop() === 0) {
                $('#primary-header').removeClass('header-background-navy');
            } else {
                $('#primary-header').addClass('header-background-navy');
            }
        });

        if ($(window).scrollTop() !== 0) {
            $('#primary-header').addClass('header-background-navy');
        }
    }

});