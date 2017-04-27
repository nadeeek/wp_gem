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
	<title><?php bloginfo('name') ?>|
		<?php is_front_page() ? bloginfo('discription') : wp_title()?>
	</title>
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
				<div class="container">
					<div class="row info">
						<div class="col-md-3 visible-lg-inline-block visible-md-inline-block visible-sm-inline-block">
							<span>Hotline: +94 77 693 7555</span>
							<span>Email: info@dhanaja.lk</span>
						</div>
						<div class="col-md-9 visible-lg-inline-block visible-md-inline-block visible-sm-inline-block header-right">
							<span>Customer Testimonials</span>
							<span>Videos</span>
							<span>Special Offers</span>
						</div>
					</div>
				</div>
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">
							<img src="<?php echo(get_template_directory_uri());?>/img/logo.png">
						</a>
					</div>
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<?php /* Primary navigation */
						wp_nav_menu( array(
								'menu'       => 'primary',
								'depth'      => 2,
								'container'  => false,
								'menu_class' => 'nav navbar-nav',
								'walker'     => new wp_bootstrap_navwalker())
						);
						?>

					</div>
			</nav>

	</header><!-- #masthead -->
	<div id="content" class="site-content">
