<?php

/**
 * Content Row
 * @package Vertex Education
 * @version 1.0.0
 */

/**
 *  Establish Variables
 */
$section_id = get_sub_field('section_id');
$has_row_header = get_sub_field('has_row_header');
$row_header = get_sub_field('row_header');
$row_header_weight = get_sub_field('row_header_weight');
$row_header_position = get_sub_field('row_header_position');
$row_width = get_sub_field('row_width');
$row_height = get_sub_field('row_height');
$top_padding = get_sub_field('top_padding');
$bottom_padding = get_sub_field('bottom_padding');
$font_scheme = get_sub_field('font_scheme');
$bottom_accent = get_sub_field('bottom_accent');
$background_type = get_sub_field('background_type');
$background_color = get_sub_field('background_color');
$background_image = get_sub_field('background_image');
$background_video = get_sub_field('background_video');
$background_overlay = get_sub_field('background_overlay');
$standard_overlay = get_sub_field('standard_overlay');
$gradient_overlay = get_sub_field('gradient_overlay');
?>

<section <?php if ($section_id) : ?>id="<?php echo $section_id; ?>" <?php endif; ?> class="content-row position-relative top-padding-<?php echo $top_padding; ?> bottom-padding-<?php echo $bottom_padding; ?> row-height-<?php echo $row_height; ?> font-scheme-<?php echo $font_scheme; ?>">

    <?php /**
     *  Establish Background Type
     */ ?>
    <?php if ($background_type === 'color') : ?>
        <div class="background background-color-<?php echo $background_color; ?>"></div>
    <?php elseif ($background_type === 'image') : ?>
        <div class="background background-image" style="background-image: url('<?php echo $background_image['url']; ?>');"></div>
    <?php elseif ($background_type === 'video') : ?>
        <div class="h-100 w-100 position-absolute overflow-hidden">
            <video preload="auto" autoplay="" playsinline="" loop="" muted="">
                <source src="<?php echo $background_video['url']; ?>" type="video/mp4">
            </video>
        </div>
    <?php endif; ?>

    <?php /**
     *  Establish Background Overlay
     */ ?>
    <?php if ($background_overlay === 'standard') : ?>
        <div class="background background-overlay background-color-<?php echo $standard_overlay; ?>"></div>
    <?php elseif ($background_overlay === 'gradient') : ?>
        <div class="background background-gradient-<?php echo $gradient_overlay; ?>"></div>
    <?php endif; ?>

    <div class="container h-100">
        <div class="row h-100 justify-content-center">
            <div class="<?php echo $row_width; ?>">
                <?php if ($has_row_header === 'yes') : ?>
                    <<?php echo $row_header_weight ?> class="mb-5 <?php echo $row_header_position; ?>"><?php echo $row_header; ?></<?php echo $row_header_weight ?>>
                <?php endif; ?>
                <?php get_template_part('partials/sections/content-row/column', 'layouts'); ?>
            </div>
        </div>
    </div>

    <?php if ($bottom_accent === 'yes') : ?>
        <div class="bootom-accent"><?php get_template_part('partials/svgs/content_row', 'accent.svg'); ?></div>
    <?php endif; ?>

</section>