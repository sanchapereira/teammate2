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
			<a href="#">
				<img src="<?php echo get_template_directory_uri(); ?>/img/LogoTM_DouradoBranco.png" alt="logo-nav-big" class="logo-nav-big">
				<img src="<?php echo get_template_directory_uri(); ?>/img/teste.png" alt="logo-nav-small" class="logo-nav-small">
			</a>
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
					<img src="<?php echo get_template_directory_uri(); ?>/img/facebook_branco.svg" alt="face-logo">
				</a>
				<a href="https://www.instagram.com/teammatefootball" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_branco.svg" alt="insta-logo">
				</a>
				<a href="https://www.linkedin.com/company/teammatefootball" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/img/linkedin_branco.svg" alt="linkedin-logo">
				</a>
				<a href="https://www.twitter.com/teammatefootbal" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/img/twitter_branco.svg" alt="twitter-logo">
				</a>
				<a href="https://www.youtube.com/channel/UCwl8cBq60RMRXM9-drjAPhw" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/img/youtube_branco.svg" alt="youtube-logo">
				</a>
			</div>

			<div class="mobile-menu-dropdown">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" 
				aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="">
					<i class="fa fa-bars"></i>
				</button>
			</div>

			<div class="mobile-menu-dropdown-non-xl">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-non-xl" 
				aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="">
					<i class="fa fa-bars"></i>
				</button>
			</div>

			<div id="navbarNavDropdown-non-xl" class="collapse navbar-collapse">
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
			<!-- The WordPress Menu goes here -->

	</nav><!-- .site-navigation -->
</div><!-- #wrapper-navbar end -->