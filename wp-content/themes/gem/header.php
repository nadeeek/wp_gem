<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gem
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="full">
<head>
	<title>Dhananja Gem</title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gem' ); ?></a>

	<header>

			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">
							<img src="img/logo.png">
						</a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<?php wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu',
							'depth'             => 2,
							'container'         => 'ul',
							'menu_class'        => 'nav nav-list',
							'fallback_cb'       => 'wp_bootstrap_navlist_walker::fallback',
							'walker'			=> new wp_bootstrap_navlist_walker()

							)); ?>

					</div>
			</nav>

	</header><!-- #masthead -->
	<div id="content" class="site-content">
