<?php

/**
 * Footer Navigation
 * @package Vertex Education
 * @version 1.0.0
 */
?>

<?php $footer_navigation = get_field('footer_navigation', 'options'); ?>

<?php if ($footer_navigation) : ?>

    <section id="footer-nav" class="py-4 py-sm-5 background-color-dark-gray">

        <div class="container">
            <div class="row">
                <?php foreach ($footer_navigation as $column) : ?>

                    <?php $column_links = $column['column_links']; ?>

                    <div class="footer-nav-col col-12 col-sm-4 text-center">

                        <h6 class="color-white letter-spacing-3 text-uppercase mb-2"><?php echo $column['column_header']; ?></h6>

                        <?php if ($column_links) : ?>
                            <div class="footer-links d-flex flex-column">
                                <?php foreach ($column_links as $link) : ?>
                                    <a class="color-light-gray my-1 line-height-1" href="<?php echo $link['link']['url'] ?>" target="<?php echo $link['link']['target'] ?>"><?php echo $link['link']['title'] ?></a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php endif; ?>