<?php

/**
 * Gallery Row
 * @package Vertex Education
 * @version 1.0.0
 */
?>

<?php

$top_padding = get_sub_field('top_padding');
$bottom_padding = get_sub_field('bottom_padding');
$font_scheme = get_sub_field('font_scheme');
$cta_scheme = get_sub_field('cta_scheme');
$background_color = get_sub_field('background_color');

?>
<section class="position-relative top-padding-<?php echo $top_padding; ?> bottom-padding-<?php echo $bottom_padding; ?> font-scheme-<?php echo $font_scheme; ?>">
    <div class="position-relative container">
        <div class="row">
            <div class="col-12">
                <?php get_template_part('partials/sections/gallery-row/single', 'gallery'); ?>
            </div>
        </div>
    </div>
</section>