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
	<a href="https://wa.me/+351914423660" class="whatsapp-container" target="_blank">
		<img class="whatsapp-logo" src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.png" />
	</a>
	<div id="targetElement"></div>
	<div class="top-header">
		<div class="row">
			<div class="col-3 col-sm-4"></div>

			<div class="col-6 col-sm-4 text-center mt-4">
				<img src="<?php echo get_template_directory_uri(); ?>/img/LogoTM_Branco.png" alt="small-logo" class="small-logo">
			</div>

			<div class="col-6 col-sm-4 text-right mt-4">
				<div id="header-social-network" class="social-network">
					<span class="languages">PT/EN</span>	
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
			</div>
		</div>
		<div id="main-menu-container" class="row">
			<div class="col"></div>
			<div class="col-xl-9 col-lg-12">
				<div class="menu-main">
					<ul id="main-menu" class="text-center">
						<li class="menu-item">
							<a href="#who-are-we"><?php pll_e( 'quem-somos' ); ?></a>
						</li>
						<li class="menu-item">
							<a href="#services"><?php pll_e( 'servicos' ); ?></a>
						</li>
						<li class="menu-item">
							<a href="#players">Teammates</a>
						</li>
						<li class="menu-item">
							<a href="#news"><?php pll_e( 'noticias' ); ?></a>
						</li>
						<li class="menu-item">
							<a href="#partners"><?php pll_e( 'parceiros' ); ?></a>
						</li>
						<li class="menu-item">
							<a href="#wrapper-footer"><?php pll_e( 'contactos' ); ?></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col"></div>
		</div>
		<div class="row">

			<div class="col"></div>
			<div class="col-xl-9 col-lg-12 text-center mt-lg-0 mt-sm-5 mt-3 mb-6">
				<img class="background-logo" src="<?php echo get_template_directory_uri(); ?>/img/Home.png" alt="background-logo">
			</div>
			<div class="col"></div>
		</div>
	</div>
</div>
