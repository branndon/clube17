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
	<!-- font-family: 'Playfair Display', serif; -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<!-- font-family: 'Open Sans', sans-serif; -->


	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/branndon.css">

	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
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
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" />
			</div>
			<div class="col-md-10">
				<nav>
					<ul>
						<li><a href="#">O Clube</a></li>
						<li><a href="#">Notícias</a></li>
						<li><a href="#">Atividades</a></li>
						<li><a href="#">Locações</a></li>
						<li><a href="#">Seja associado</a></li>
						<li><a href="#">Contato</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<!-- Slider -->
	<div id="slider"></div>
