<?php
/*-----------------------------------------------------------------------------
  Register Shortcodes
-----------------------------------------------------------------------------*/

function button($atts, $content = null)
{

    $a = shortcode_atts(array(
        'href'   => '',
        'class'  => '',
        'target' => '',
    ), $atts);

    return sprintf('<a href="%s" class="btn %s" target="%s">%s</a>', $a['href'], $a['class'], $a['target'], $content);
}

add_shortcode('button', 'button');

function add_class($atts, $content = null)
{

    $a = shortcode_atts(array(
        'class'  => '',
    ), $atts);

    return sprintf('<span class="%s">%s</span>', $a['class'], $content);
}

add_shortcode('add-class', 'add_class');

function add_height($atts, $content = null)
{

    $a = shortcode_atts(array(
        'class'  => '',
    ), $atts);

    return sprintf('<div class="add-height-%s"></div>', $a['class'], $content);
}

add_shortcode('add-height', 'add_height');
