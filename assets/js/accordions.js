jQuery(document).ready(function ($) {

    if ($('.accordion').length) {

        // Add minus icon for collapse element which is open by default
        $('.collapse.show').each(function () {
            $(this).prev('.card-header').find('.expand-indicator').addClass('fa-minus').removeClass('fa-plus');
        });

        // Toggle plus minus icon on show hide of collapse element
        $('.collapse').on('show.bs.collapse', function () {
            $(this).prev('.card-header').find('.expand-indicator').removeClass('fa-plus').addClass('fa-minus');
        }).on('hide.bs.collapse', function () {
            $(this).prev('.card-header').find('.expand-indicator').removeClass('fa-minus').addClass('fa-plus');
        });
    }

});