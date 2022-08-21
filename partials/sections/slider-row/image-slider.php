<?php

/**
 * Image Slider
 * @package Vertex Education
 * @version 1.0.0
 */

?>

<?php $image_slider = get_sub_field('image_slider'); ?>
<?php $slider_type = get_sub_field('slider_type'); ?>

<?php if ($image_slider) : ?>
    <div class="image-slider image-slider-<?php if ($slider_type === 'small' || $slider_type === 'large') : echo $slider_type;
                                            endif; ?> slider row pt-3 pb-5">
        <?php foreach ($image_slider as $image) : ?>
            <div class="slide position-relative">
                <figure class="background" style="background-image: url('<?php echo $image['url']; ?>');"></figure>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>