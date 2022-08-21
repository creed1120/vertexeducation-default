<?php

/**
 * Filtered Gallery Content
 * Not currently in use.
 * Not called into any other files.
 * @package Vertex Education
 * @version 1.0.0
 */

/**
 *  Establish Variables
 */
$column_configuration = get_sub_field('column_configuration');
$one_column_layout = get_sub_field('one_column_layout');
$two_column_layout = get_sub_field('two_column_layout');
$conditional = '';

/**
 *  Establish Column Configuration 
 */
if ($column_configuration === 'one') {
    $conditional = $one_column_layout;
} elseif ($column_configuration === 'two' || $column_configuration === 'two-wide-right' || $column_configuration === 'two-wide-left') {
    $conditional = $two_column_layout;
}

?>

<?php if ($conditional) : ?>

    <?php foreach ($conditional as $col) : ?>

        <?php $content_type = $col['content_type']; ?>
        <?php $galleries = $col['gallery']; ?>

        <?php if ($content_type === 'gallery') : ?>

            <div id="gallery<?php echo get_row_index(); ?>" class="gallery w-100">

                <?php if ($galleries) : ?>

                    <div class="container">

                        <?php if ($galleries) : ?>
                            <div class="gallery-menu">
                                Categories:<span class="current-category"> All</span>
                                <div class="galleries-dropdown">
                                    <div class="gallery-title" data-gallery="gallery-all">
                                        All
                                    </div>
                                    <?php $m = 1; ?>
                                    <?php foreach ($galleries as $gallery) : ?>
                                        <div class="gallery-title" data-gallery="gallery-<?php echo $m; ?>">
                                            <?php echo $gallery['gallery_title'] ?>
                                        </div>
                                        <?php $m++; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="gallery">
                                <?php $g = 1; ?>
                                <?php foreach ($galleries as $gallery) : ?>
                                    <?php $i = 1; ?>
                                    <?php $gallery = $gallery['gallery'] ?>
                                    <?php foreach ($gallery as $image) : ?>
                                        <div id="gallery-<?php echo $g . '-image-' . $i; ?>" class="gallery-image gallery-<?php echo $g; ?>" data-gallery="gallery-<?php echo $g; ?>">
                                            <a href="<?php echo $image['sizes']['large']; ?>" data-fancybox="gallery">
                                                <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>">
                                            </a>
                                        </div>
                                        <?php ++$i; ?>
                                    <?php endforeach; ?>
                                    <?php $g++; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                    </div>

                <?php endif; ?>

            </div>

        <?php endif; ?>

    <?php endforeach; ?>

<?php endif; ?>