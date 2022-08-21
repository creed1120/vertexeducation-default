// This file is not currently in use.
jQuery(document).ready(function () {

    if (jQuery('.filtered-gallery').length) {
        toggleGalleryDropdown();
        selectGalleryRow();
        setGalleryFilter();
        setGalleryCarouselFilter();
    }

});

setGalleryFilter = function () {
    jQuery('.gallery-title').on('click', function () {
        var galleryGroup = jQuery(this).data('gallery'),
            galleryImage = jQuery('.gallery-image');

        galleryImage.fadeOut(0);

        galleryImage.each(function () {

            var imageGroup = jQuery(this).data('gallery');

            if (galleryGroup === 'gallery-all') {
                galleryImage.fadeIn(1000);
            }
            if (jQuery(this).hasClass(galleryGroup)) {
                jQuery(this).fadeIn(1000);
            }
        });
    });
};

setGalleryCarouselFilter = function () {
    jQuery('.gallery-image a').on('click', function () {
        var visibleLinks = jQuery('.gallery-image a:visible');

        jQuery.fancybox.open(visibleLinks, {}, visibleLinks.index(this));

        return false;
    });
};

toggleGalleryDropdown = function () {

    let gallerySelect = jQuery('.current-category'),
        galleryDropdown = jQuery('.galleries-dropdown');

    gallerySelect.on('click', function (e) {
        galleryDropdown.slideToggle();
        gallerySelect.toggleClass('open');
    });

    jQuery(document).on('click', function (e) {
        if (!jQuery(e.target).closest(gallerySelect).length &&
            !jQuery(e.target).is(gallerySelect)) {
            galleryDropdown.slideUp();
            gallerySelect.removeClass('open');
        }
    });

};

selectGalleryRow = function () {

    let gallerySelect = jQuery('.current-category');

    jQuery('.gallery-title[data-gallery]').on('click', function () {
        gallerySelect.html(jQuery(this).html());
    });

};