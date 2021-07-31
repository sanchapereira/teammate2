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

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="site" id="page">

	<div id="targetElement"></div>
	<div class="top-header">
		<div class="row">
			<div class="col-4"></div>

			<div class="col-4 text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/img/small-logo.png" alt="small-logo" class="small-logo">
			</div>
			
			<div class="col-4 text-right">
				<div id="header-social-network" class="social-network">
					<span class="languages">PT/EN</span>
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
			</div>
		</div>
		<div id="main-menu-container" class="row">
			<div class="col"></div>
			<div class="col-xl-9 col-lg-12">
				<div class="menu-main">
					<ul id="main-menu" class="text-center">
						<li class="menu-item">
							<a href="#">Quem Somos</a>
						</li>
						<li class="menu-item">
							<a href="#">Serviços</a>
						</li>
						<li class="menu-item">
							<a href="#">Teammates</a>
						</li>
						<li class="menu-item">
							<a href="#">Notícias</a>
						</li>
						<li class="menu-item">
							<a href="#">Parceiros</a>
						</li>
						<li class="menu-item">
							<a href="#">Contactos</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col"></div>
		</div>
		<div class="row">

			<div class="col"></div>
			<div class="col-lg-6 text-center mt-lg-5 mt-sm-5 mt-6">
				<img src="<?php echo get_template_directory_uri(); ?>/img/background.jpg" alt="background-logo">
			</div>
			<div class="col"></div>
		</div>
	</div>