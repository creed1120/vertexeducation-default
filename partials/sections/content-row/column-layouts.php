<?php

/**
 * Column Layouts
 * @package Vertex Education
 * @version 1.0.0
 */

/**
 *  Establish Variables
 */
$column_configuration = get_sub_field('column_configuration');
$one_column_layout = get_sub_field('one_column_layout');
$two_column_layout = get_sub_field('two_column_layout');
$three_column_layout = get_sub_field('three_column_layout');
$conditional = '';
$primary_col_classes = '';
$interior_col_classes = '';

/**
 *  Establish Column Configuration
 *  and Primary Column Classes 
 */
if ($column_configuration === 'one') {
    $conditional = $one_column_layout;
    $primary_col_classes = 'one-column h-100';
} elseif ($column_configuration === 'two' || $column_configuration === 'two-wide-right' || $column_configuration === 'two-wide-left') {
    $conditional = $two_column_layout;
    $primary_col_classes = 'two-column h-100 row';
} elseif ($column_configuration === 'three') {
    $conditional = $three_column_layout;
    $primary_col_classes = 'three-column h-100 row';
}

?>

<?php if ($conditional) : ?>

    <div class="<?php echo $primary_col_classes; ?>">

        <?php $i = 1; ?>

        <?php foreach ($conditional as $col) : ?>

            <?php
            /**
             *  Establish Variables
             */
            $content_type = $col['content_type'];
            $vertical_alignment = $col['vertical_alignment'];
            $horizontal_alignment = $col['horizontal_alignment'];
            $text_editor = $col['text_editor'];
            $image = $col['image'];
            $gallery = $col['gallery'];
            $gallery_columns = $col['gallery_columns'];
            $youtube_id = $col['youtube_id'];
            $accordion = $col['accordion'];
            $code_field = $col['code_field'];


            /**
             *  Establish Interior Column Classes
             */
            if ($column_configuration === 'one') { /* One Column */
                $interior_col_classes = 'h-100';
            } elseif ($column_configuration === 'two-wide-right') { /* Two Column Wide Right */
                if ($i === 1) {
                    $interior_col_classes = 'col-12 col-md-4';
                } elseif ($i === 2) {
                    $interior_col_classes = 'col-12 col-md-8';
                }
            } elseif ($column_configuration === 'two-wide-left') {  /* Two Column Wide Left */
                if ($i === 1) {
                    $interior_col_classes = 'col-12 col-md-8';
                } elseif ($i === 2) {
                    $interior_col_classes = 'col-12 col-md-4';
                }
            } elseif ($column_configuration === 'two') {  /* Two Column 50/50 */
                $interior_col_classes = 'col-12 col-md-6';
            } elseif ($column_configuration === 'three') { /* Three Column */
                $interior_col_classes = 'col-12 col-md-4';
            }
            ?>

            <div class="<?php echo $interior_col_classes; ?> col-content position-relative d-flex justify-content-<?php echo $horizontal_alignment; ?> align-items-<?php echo $vertical_alignment; ?>">

                <?php /* Wysisyg */
                if ($content_type === 'text' && $text_editor) :
                    echo '<div class="w-100">' .  $text_editor . '</div>';

                /* Single Image */
                elseif ($content_type === 'image' && $image) : ?>
                    <div class="image-container position-relative w-100">
                        <figure class="background" style="background-image: url('<?php echo $image['url']; ?>');"></figure>
                    </div>

                <?php /* YouTube Video */
                elseif ($content_type === 'video' && $youtube_id) : ?>
                    <iframe class="video-container <?php echo $column_configuration; ?>" src="https://www.youtube.com/embed/<?php echo $youtube_id; ?>?rel=0&controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <?php /* Code Field */
                elseif ($content_type === 'code_field' && $code_field) :
                    echo $code_field;

                /* Image Gallery */
                elseif ($content_type === 'gallery' && $gallery) : ?>
                    <div id="gallery-<?php echo $i . '-' . get_row_index(); ?>" class="gallery w-100">
                        <div class="container">
                            <a href="/art-show">Back to Art Show</a>
                            <div class="card-columns card-columns-<?php echo $gallery_columns; ?>">
                                <?php foreach ($gallery as $gallery_row) : ?>
                                    <div class="card">
                                        <a class="py-1" href="<?php echo $gallery_row['sizes']['large']; ?>" data-fancybox="gallery-<?php echo $i . '-' . get_row_index(); ?>">
                                            <img src="<?php echo $gallery_row['sizes']['medium']; ?>" alt="<?php echo $gallery_row['alt']; ?>">
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                <?php /* Accordion */
                elseif ($content_type === 'accordion' && $accordion) : ?>

                    <div id="accordion-<?php echo $i . '-' . get_row_index(); ?>" class="accordion w-100">

                        <?php $has_header_buttons = $col['has_header_buttons']; ?>
                        <?php $header_button = 1; ?>
                        <?php $header_body = 1; ?>
                        <?php $i_c = 1; ?>

                        <div class="container">
                            <?php if ($has_header_buttons === true) : ?>
                                <div id="header-buttons-<?php echo get_row_index(); ?>" class="row">
                                    <div class="col-12 mb-4 mb-md-5">
                                        <div class="d-flex flex-wrap justify-content-center">
                                            <?php foreach ($accordion as $accordion_row) : ?>
                                                <?php $accordion_row_type = $accordion_row['accordion_row_type']; ?>
                                                <?php if ($accordion_row_type === 'header') : ?>
                                                    <a class="m-2 btn btn-primary" href="#header-<?php echo get_row_index() . '-' . $header_button; ?>">
                                                        <span class="m-0"><?php echo $accordion_row['header']; ?></span>
                                                    </a>
                                                    <?php $header_button++; ?>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="row">
                                <div class="col-12">
                                    <?php foreach ($accordion as $accordion_row) : ?>

                                        <?php $accordion_row_type = $accordion_row['accordion_row_type']; ?>

                                        <?php if ($accordion_row_type === 'header') : ?>
                                            <h2 id="header-<?php echo get_row_index() . '-' . $header_body; ?>" class="accordion-header color-red d-flex justify-content-between align-items-center mb-4">
                                                <?php echo $accordion_row['header']; ?>
                                                <?php if ($has_header_buttons === true) : ?>
                                                    <a class="color-red" href="#header-buttons-<?php echo get_row_index(); ?>"><i class="fa fa-arrow-circle-up"></i></a>
                                                <?php endif; ?>
                                            </h2>
                                            <?php $header_body++; ?>
                                        <?php endif; ?>

                                        <?php if ($accordion_row_type === 'accordion') : ?>

                                            <div class="card mb-3">
                                                <div class="card-header font-weight-bold font-italic color-navy">
                                                    <p class="card-link <?php if ($i_c !== 1) : ?>collapsed<?php endif; ?> mb-0 pb-0" data-toggle="collapse" data-target="#collapse-<?php echo $i . '-' . $i_c . '-' . get_row_index(); ?>"><i class="expand-indicator fa fa-plus mr-2"></i><?php echo $accordion_row['title'] ?></p>
                                                </div>
                                                <div id="collapse-<?php echo $i . '-' . $i_c . '-' . get_row_index(); ?>" class="collapse collapse-<?php echo get_row_index(); ?> <?php if ($i_c === 1) : ?>show<?php endif; ?>" data-parent="#accordion-<?php echo $i . '-' . get_row_index(); ?>">
                                                    <div class="card-body">
                                                        <?php echo $accordion_row['body']; ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php $i_c++; ?>

                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </div>
                            </div>

                        </div>

                    </div>

                <?php endif; ?>

            </div>

            <?php $i++; ?>

        <?php endforeach; ?>

    </div>

<?php endif; ?>