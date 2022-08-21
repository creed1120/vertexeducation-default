<?php

/**
 * Primary Header
 * @package Vertex Education
 * @version 1.0.0
 */
?>

<?php
$id = get_the_ID();
$header_logo =  get_field('header_logo', 'options');
$header_background =  get_field('header_background', $id);
if (is_404()) {
    $header_background = 'transparent';
} ?>

<header id="primary-header" class="header-background-<?php echo $header_background; ?>" data-header-background="<?php echo $header_background; ?>">
    <div class="container position-relative h-100">
        <div class="row px-3 px-lg-0 h-100 justify-content-between align-items-center">
            <a href="/" class="header-logo color-white">
                <?php echo $header_logo; ?>
            </a>
            <div class="header-nav-group d-none d-xl-flex flex-column align-items-end">
                <nav class="top-header-nav px-2">
                    <?php wp_nav_menu(['theme_location' => 'top_header_menu', 'menu_id' => 'top-header-menu']); ?>
                </nav>
                <nav class="header-nav">
                    <?php wp_nav_menu(['theme_location' => 'header_menu', 'menu_id' => 'header-menu']); ?>
                </nav>
            </div>

            <div class="menu-container d-flex d-xl-none">

                <div class="menu-toggle">
                    <div class="menu-toggle-closed">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="menu-toggle-open">
                        <span></span>
                        <span></span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

<div id="mobile-menu" class="mobile-menu">
    <div class="container py-4">
        <nav class="top-header-nav pt-2">
            <?php wp_nav_menu(['theme_location' => 'top_header_menu', 'menu_id' => 'top-header-menu']); ?>
        </nav>
        <nav class="mobile-nav">
            <?php wp_nav_menu(['theme_location' => 'mobile_menu', 'menu_id' => 'header-menu-mobile']); ?>
        </nav>
    </div>
</div>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>