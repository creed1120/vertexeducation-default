<?php

/**
 * Template for displaying the header.
 * @package Vertex Education
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://use.typekit.net/yor1isl.css">
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" />
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-iKbFRxucmOHIcpWdX9NTZ5WETOPm0Goy0WmfyNcl52qSYtc2Buk0NCe6jU1sWWNB" crossorigin="anonymous">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php get_template_part('partials/header/primary', 'header'); ?>