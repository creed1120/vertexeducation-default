// Slick Sliders 
jQuery(document).ready(function ($) {

    // Testimonial Slider
    if ($('.testimonial-slider').length) {
        $('.testimonial-slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ],
            prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-caret-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fas fa-caret-right"></i></button>'
        });
    }

    // Icon Slider 
    if ($('.icon-slider').length) {
        $('.icon-slider').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 5,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ],
            prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-caret-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fas fa-caret-right"></i></button>'
        });
    }

    // Small Image Slider 
    if ($('.image-slider.image-slider-small').length) {
        $('.image-slider.image-slider-small').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 5,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ],
            prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-caret-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fas fa-caret-right"></i></button>'
        });
    }

    // Large Image Slider 
    if ($('.image-slider.image-slider-large').length) {
        $('.image-slider.image-slider-large').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,

            prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-caret-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fas fa-caret-right"></i></button>'
        });
    }

});