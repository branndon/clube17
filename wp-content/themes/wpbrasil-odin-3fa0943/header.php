<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- FONTES -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

	<!-- font-awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<!-- less -->
	<?php wp_enqueue_style( 'less-style', get_stylesheet_directory_uri() . '/css/style.less' ); ?>

	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
	<script src="http://maps.google.com/maps/api/js?&key=AIzaSyBMWuoZXh9S-c3wI2OfnAOgx_OoY8XJwPw&callback=initMap"
    async defer></script>
</head>

<body <?php body_class(); ?>>
	<a id="skippy" class="sr-only sr-only-focusable" href="#content">
		<div class="container">
			<span class="skiplink-text"><?php _e( 'Skip to content', 'odin' ); ?></span>
		</div>
	</a>

	<!-- header -->
	<header id="header" role="banner">
		<div class="container">
			<div class="col-md-2">
				<a href="<?php bloginfo( 'siteurl' ); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" />
				</a>
			</div>
			<div class="col-md-10">
				<nav>
					<ul>
					<?php 
						$menuParameters = array(
							'menu'				=> 'menu-header',
							'container'       	=> false,
							'echo'            	=> false,
							'depth'           	=> 0,
						);
						echo strip_tags(wp_nav_menu( $menuParameters ), '<li><a>' );
					?>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<!-- Slider -->
	<?php if (is_home()) : ?>
		<div id="slider">
			<div class="main"></div>
		</div>
	<?php endif; ?>




