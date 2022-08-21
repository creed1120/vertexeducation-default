<?php

/**
 * Icon Image Slider
 * @package Vertex Education
 * @version 1.0.0
 */
?>

<?php $icon_slider = get_sub_field('icon_slider');
$slider_row_cta = get_sub_field('slider_row_cta');
$icon_padding_bottom = '';
if ($slider_row_cta) {
    $icon_padding_bottom = 'pb-5';
} elseif (!$slider_row_cta) {
    $icon_padding_bottom = 'pb-3';
} ?>

<?php if ($icon_slider) : ?>
    <div class="icon-slider slider row pt-3 <?php echo $icon_padding_bottom; ?>">
        <?php foreach ($icon_slider as $icon) : ?>
            <?php if ($icon['icon']) : ?>
                <div class="slide">
                    <div class="d-flex justify-content-center align-items-center color-blue-accent mb-3 mb-md-4">
                        <?php echo $icon['icon']; ?>
                    </div>
                    <p class="text-center font-size-large line-height-1-25 px-5 px-sm-4 px-md-3 px-xl-1"><?php echo $icon['title']; ?></p>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>