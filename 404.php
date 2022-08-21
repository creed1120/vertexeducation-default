<?php

/**
 * 404 Template File
 * @package Vertex Education
 * @version 1.0.0
 */

get_header();  ?>

<div class="page-body position-relative">
    <div class="background background-color-dark-gray"></div>
    <div class="background background-gradient-navy-right-to-left"></div>
    <section id="page-not-found-404" class="container pb-5">
        <div class="row h-100">
            <div class="col-12 d-flex flex-column justify-content-center">
                <div class="position-relative container-404">
                    <figure class="background">
                        <?php get_template_part('partials/svgs/inline', '404.svg'); ?>
                    </figure>
                </div>
                <h3 class="color-white text-md-center">
                    We're sorry, the page you are looking for has not been located.
                </h3>
                <p class="color-white letter-spacing-1 font-size-large text-md-center">
                    You will be riderected to the <a href="/" class="color-white">home page</a> in <span class="countdown"></span>
                </p>
            </div>
        </div>
    </section>
</div>


<?php get_footer();  ?>