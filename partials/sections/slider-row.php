<?php

/**
 * Slider Row
 * @package Vertex Education
 * @version 1.0.0
 */
?>

<?php

$slider_type = get_sub_field('slider_type');
$slider_row_header = get_sub_field('slider_row_header');
$slider_row_cta = get_sub_field('slider_row_cta');
$top_padding = get_sub_field('top_padding');
$bottom_padding = get_sub_field('bottom_padding');
$font_scheme = get_sub_field('font_scheme');
$cta_scheme = get_sub_field('cta_scheme');
$background_color = get_sub_field('background_color');

?>
<section class="slider-row position-relative top-padding-<?php echo $top_padding; ?> bottom-padding-<?php echo $bottom_padding; ?> font-scheme-<?php echo $font_scheme; ?>">
    <div class="background background-color-<?php echo $background_color; ?>"></div>
    <div class="position-relative container">
        <div class="row">
            <?php if ($slider_row_header) : ?>
                <div class="col-12 mb-3">
                    <h4 class="text-center"><?php echo $slider_row_header; ?></h4>
                </div>
            <?php endif; ?>
            <div class="col-12">
                <?php if ($slider_type === 'testimonial') : ?>
                    <?php get_template_part('partials/sections/slider-row/testimonial', 'slider'); ?>
                <?php elseif ($slider_type === 'icon') : ?>
                    <?php get_template_part('partials/sections/slider-row/icon', 'slider'); ?>
                <?php elseif ($slider_type === 'small' || $slider_type === 'large') : ?>
                    <?php get_template_part('partials/sections/slider-row/image', 'slider'); ?>
                <?php endif; ?>
            </div>
            <?php if ($slider_row_cta) : ?>
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-<?php echo $cta_scheme; ?>" href="<?php echo $slider_row_cta['url']; ?>"><?php echo $slider_row_cta['title']; ?></a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>