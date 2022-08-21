<?php
/*
 * Template Name: Page Builder Template
 * Template Post Type: page
 * @package Vertex Education
 * @version 1.0.0
 */

get_header();  ?>

<?php $id = get_the_ID(); ?>
<?php $header_background =  get_field('header_background', $id); ?>

<div <?php if ($header_background !== 'transparent') : ?>class="page-content-wrap" <?php endif; ?>>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            if (have_rows('default_flexible_sections')) :
                while (have_rows('default_flexible_sections')) : the_row();
                    if (get_row_layout() === 'content_row') :
                        get_template_part('partials/sections/content', 'row');
                    elseif (get_row_layout() === 'slider_row') :
                        get_template_part('partials/sections/slider', 'row');
                    elseif (get_row_layout() === 'gallery_row') :
                        get_template_part('partials/sections/gallery', 'row');
                    endif;
                endwhile;
            endif;
        } // end while
    } // end if 
    ?>
</div>

<?php get_footer();  ?>