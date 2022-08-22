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


function add_html_block($atts) {
    $a = shortcode_atts(array(
        'class' => '',
        'href' => ''
    ), $atts);

    return sprintf(
        '<div class="card %s" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
          <a href="%s" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>', $a['class'], $a['href']);
}
add_shortcode('add_html_block', 'add_html_block');