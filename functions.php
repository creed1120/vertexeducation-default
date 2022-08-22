<?php

/*
*  Async load
*/
function async_scripts($url)
{
    if (strpos($url, '#asyncload') === false)
        return $url;
    else if (is_admin())
        return str_replace('#asyncload', '', $url);
    else
        return str_replace('#asyncload', '', $url) . "' async='async";
}
add_filter('clean_url', 'async_scripts', 11, 1);

/*
*  Enqueue Files for theme dependencies:
*  Bootstrap, jQuery, and GSAP
*/
function ve_theme()
{
    // wp_enqueue_style('bootstrap-styles', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css');
    wp_enqueue_style('slick-styles', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/dist/css/app.css');

    wp_enqueue_style('fancy-box-styles', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css');
    // wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.slim.min.js', array('jquery'));
    // wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js#asyncload', array('jquery'));
    // wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js#asyncload', array('jquery'));
    wp_enqueue_script('bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js#asyncload', array('jquery'));
    wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js');
    wp_enqueue_script('fancy-box', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js');
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js');
    wp_enqueue_script('scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js');
    wp_enqueue_script('scrollto', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollToPlugin.min.js');
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/custom.js', array('jquery'));

    wp_enqueue_script('custom-js', get_template_directory_uri() . '/dist/js/app.js', '', '', true);

    wp_enqueue_style('custom', get_template_directory_uri() . '/custom.css');
    wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 've_theme');

/*
*  Enqueue Custom Theme Scripts
*/
function enqueue_theme_scripts()
{
    foreach (glob(get_template_directory() . '/assets/js/*.js') as $file) {
        $filename = substr($file, strrpos($file, '/') + 1);
        wp_enqueue_script($filename, get_template_directory_uri() . '/assets/js/' . $filename . '#asyncload', array('jquery'), false, true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');

/*
*  Register Menus
*/
function theme_menus()
{
    register_nav_menus(array(
        'top_header_menu' => __('Top Header Menu'),
        'header_menu' => __('Header Menu'),
        'mobile_menu' => __('Mobile Menu'),
        'footer_menu' => __('Footer Menu')
    ));
}
add_action('init', 'theme_menus', 10);

/*
*  Register Bootstrap Navwalker
*/
if (!file_exists(get_template_directory() . '/assets/class-wp-bootstrap-navwalker.php')) {
    return new WP_Error('class-wp-bootstrap-navwalker-missing', __('It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
} else {
    require_once get_template_directory() . '/assets/class-wp-bootstrap-navwalker.php';
}

/**
 * Load shortcodes
 */
require get_template_directory() . '/inc/shortcodes.php';

/*
*  Register Options Pages
*/
if (function_exists('acf_add_options_page')) {

    acf_add_options_page([
        'page_title'    => 'Theme Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ]);

    acf_add_options_sub_page([
        'page_title'     => 'Header Settings',
        'menu_title'    => 'Header Settings',
        'parent_slug'    => 'theme-settings',
    ]);

    acf_add_options_sub_page([
        'page_title'     => 'Footer Settings',
        'menu_title'    => 'Footer Settings',
        'parent_slug'    => 'theme-settings',
    ]);
}


/*
*  Gravity Forms Bootstrap Styles
*/
add_filter("gform_field_content", "bootstrap_styles_for_gravityforms_fields", 10, 5);
function bootstrap_styles_for_gravityforms_fields($content, $field, $value, $lead_id, $form_id)
{
    if ($field["type"] != 'hidden' && $field["type"] != 'list' && $field["type"] != 'multiselect' && $field["type"] != 'checkbox' && $field["type"] != 'fileupload' && $field["type"] != 'date' && $field["type"] != 'html' && $field["type"] != 'address') {
        $content = str_replace('class=\'medium', 'class=\'form-control medium', $content);
    }
    if ($field["type"] == 'name' || $field["type"] == 'address') {
        $content = str_replace('<input ', '<input class=\'form-control\' ', $content);
    }
    if ($field["type"] == 'textarea') {
        $content = str_replace('class=\'textarea', 'class=\'form-control textarea', $content);
    }
    if ($field["type"] == 'checkbox') {
        $content = str_replace('li class=\'', 'li class=\'form-check ', $content);
        $content = str_replace('<input ', '<input style=\'margin-top:-2px\' ', $content);
        $content = str_replace('<label ', '<label class=\'form-check-label\' ', $content);
    }
    if ($field["type"] == 'radio') {
        $content = str_replace('li class=\'', 'li class=\'radio ', $content);
        $content = str_replace('<input ', '<input style=\'margin-left:1px;\' ', $content);
    }
    return $content;
}
add_filter("gform_submit_button", "form_submit_button", 10, 2);

function form_submit_button($button, $form)
{
    return "<button class='button btn btn-cta' id='gform_submit_button_{$form["id"]}'><span>Submit</span></button>";
}

add_filter('gform_confirmation_anchor', '__return_true');

