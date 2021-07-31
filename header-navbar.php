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

<button class="material-scrolltop" type="button">
	<img src="<?php echo get_template_directory_uri(); ?>/img/backup.png" alt="backup">
</button>
<!-- ******************* The Navbar Area ******************* -->
<div id="wrapper-navbar" class="sticky-top">

	<nav id="main-nav" class="navbar navbar-expand-xl navbar-dark" aria-labelledby="main-nav-label">
			<a class="navbar-brand" href="#">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-nav.png" alt="logo-nav-big" class="logo-nav-big">
				<img src="<?php echo get_template_directory_uri(); ?>/img/teste.png" alt="logo-nav-small" class="logo-nav-small">
			</a>
			<div class="mobile-menu-dropdown">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" 
				aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="">
					<i class="fa fa-bars"></i>
				</button>
			</div>
			<div class="collapse navbar-collapse"></div>
			<div id="navbarNavDropdown" class="collapse navbar-collapse">
					<ul id="menu-navbar" class="navbar-nav text-center">
						<li class="menu-item">
							<a href="#who-are-we">Quem Somos</a>
						</li>
						<li class="menu-item">
							<a href="#services">Serviços</a>
						</li>
						<li class="menu-item">
							<a href="#players">Teammates</a>
						</li>
						<li class="menu-item">
							<a href="#news">Notícias</a>
						</li>
						<li class="menu-item">
							<a href="#partners">Parceiros</a>
						</li>
						<li class="menu-item">
							<a href="#wrapper-footer">Contactos</a>
						</li>
					</ul>
			</div>

			<div class="social-network-nav">
				<a href="https://www.facebook.com/Teammate-Football-Management-103659131852598" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu_face.png" alt="face-logo">
				</a>
				<a href="https://www.instagram.com/teammatefootball" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu_insta.png" alt="insta-logo">
				</a>
				<a href="https://www.linkedin.com/company/teammatefootball" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu_linkedin.png" alt="linkedin-logo">
				</a>
				<a href="https://twitter.com/teammatefootbal" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu_twiter.png" alt="twitter-logo">
				</a>
			</div>
			<!-- The WordPress Menu goes here -->

	</nav><!-- .site-navigation -->
</div><!-- #wrapper-navbar end -->