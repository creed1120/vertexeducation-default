<?php

/**
 * Footer Logo
 * @package Vertex Education
 * @version 1.0.0
 */
?>

<?php $footer_logo = get_field('footer_logo', 'options'); ?>
<?php $footer_logo_link = get_field('footer_logo_link', 'options'); ?>

<?php if ($footer_logo) : ?>

    <section id="footer-logo" class="py-4 py-sm-5 background-color-red">
        <div class="container">
            <div class="row flex-column justify-content-center align-items-center">
                <h6 class="color-white letter-spacing-4 text-uppercase">Powered By</h6>
                <a href="<?php echo $footer_logo_link['url']; ?>" class="color-white" target="_blank">
                    <?php echo $footer_logo; ?>
                </a>
            </div>
        </div>
    </section>

<?php endif; ?>