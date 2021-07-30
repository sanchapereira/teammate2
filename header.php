<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<div class="site" id="page">

	<div id="targetElement"></div>
	<div class="top-header">
		<div class="row">
			<div class="col"></div>

			<div class="col-lg-6 text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/img/small-logo.png" alt="small-logo" class="small-logo">
			</div>
			<div class="col text-right">
				<div class="social-network">
					<span class="languages">PT/EN</span>
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/img/menu_face.png" alt="face-logo">
					</a>
					<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu_insta.png" alt="insta-logo">
					</a>
					<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu_linkedin.png" alt="linkedin-logo">
					</a>
					<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu_twiter.png" alt="twitter-logo">
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col"></div>
			<div class="col-lg-6 text-justify">
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container'		  => 'div',
						'container_class' => 'menu-main',
						'items_wrap'	  => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'menu_id'         => 'main-menu',
						'depth'           => 2
					)
				);
				?>
			</div>
			<div class="col"></div>
		</div>
		<div class="row">

			<div class="col"></div>
			<div class="col-lg-6 text-center mt-lg-5 mt-sm-3">
				<img src="<?php echo get_template_directory_uri(); ?>/img/background.png" alt="background-logo">
			</div>
			<div class="col"></div>
		</div>
	</div>
	

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" class="sticky-top">

		<nav id="main-nav" class="navbar navbar-expand-xl navbar-dark" aria-labelledby="main-nav-label">

			<div class="container-fluid">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-nav.png" alt="logo-nav" class="logo-nav">

				<div class="mobile-menu-dropdown">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" 
					aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="">
						<i class="fa fa-bars"></i>
					</button>
				</div>

				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>

				<div class="social-network-nav">
					<span class="languages">PT/EN</span>
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/img/menu_face.png" alt="face-logo">
					</a>
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/img/menu_insta.png" alt="insta-logo">
					</a>
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/img/menu_linkedin.png" alt="linkedin-logo">
					</a>
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/img/menu_twiter.png" alt="twitter-logo">
					</a>
				</div>

				<!-- The WordPress Menu goes here -->
			</div><!--  .container -->

		</nav><!-- .site-navigation -->
	</div><!-- #wrapper-navbar end -->


<button class="material-scrolltop" type="button">
	<img src="<?php echo get_template_directory_uri(); ?>/img/backup.png" alt="backup">
</button>
