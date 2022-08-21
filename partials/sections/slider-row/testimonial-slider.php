<?php

/**
 * Testimonial Slider
 * @package Vertex Education
 * @version 1.0.0
 */

$testimonial_slider = get_sub_field('testimonial_slider');

if ($testimonial_slider) : ?>

    <div class="testimonial-slider slider row pb-5">

        <?php foreach ($testimonial_slider as $slide) : ?>

            <div class="slide">
                <div class="slide-inner background-color-white mx-2 d-flex flex-column justify-content-between align-items-center">
                    <img class="testimonial-image" src="<?php echo $slide['testimonial_image']['url']; ?>" alt="<?php echo $slide['testimonial_image']['alt']; ?>">
                    <div class="mb-4 line-height-1-5">
                        <?php echo $slide['testimonial_text']; ?>
                    </div>
                    <div class="by-line text-center line-height-1 position-relative w-100">
                        <p class="font-size-x-large font-weight-bolder color-navy mb-2">
                            <?php echo $slide['testimonial_header']; ?>
                        </p>
                        <p><?php echo $slide['testimonial_sub-header']; ?></p>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    </div>

<?php endif; ?>