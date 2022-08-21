<?php

/**
 * Footer Copyright
 * @package Vertex Education
 * @version 1.0.0
 */
?>

<?php $copyright_content = get_field('copyright_content', 'options'); ?>

<?php if ($copyright_content) : ?>

    <section id="footer-copyright" class="py-2 background-color-navy">
        <div class="container">
            <div class="row flex-column flex-md-row justify-content-center justify-content-md-between align-items-center text-center">
                <div class="copyright-content">
                    <?php echo $copyright_content; ?>
                </div>
                <?php wp_nav_menu(['theme_location' => 'footer_menu', 'menu_id' => 'footer-menu']); ?>
            </div>
        </div>
    </section>

<?php endif; ?>