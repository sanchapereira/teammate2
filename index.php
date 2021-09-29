<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('front');
get_header('navbar');

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">

	<div id="who-are-we" class="page-section">
		<div class="container-fluid">
			<div class="title-holder">
				<h2><?php pll_e( 'quem-somos' ); ?></h2>
			</div>
			<div class="row mt-4">
				<div class="col"></div>
				<div class="col-lg-10">
					<ul class="nav justify-content-center" id="who-are-we-nav" role="tablist">
						<li>
							<button class="active" id="founder-tab" data-toggle="tab" data-target="#founder" type="button" role="tab" aria-controls="founder" aria-selected="true"><?php pll_e( 'fundadora' ); ?></button>
						</li>
						<li>
							<button id="teammate-tab" data-toggle="tab" data-target="#teammate" type="button" role="tab" aria-controls="teammate" aria-selected="false">Teammate</button>
						</li>
						<li>
							<button id="team-tab" data-toggle="tab" data-target="#team" type="button" role="tab" aria-controls="team" aria-selected="false"><?php pll_e( 'equipa' ); ?></button>
						</li>
					</ul>
				</div>
				<div class="col"></div>
			</div>

			<div class="container-fluid tab-content mt-5 mt-xl-6">
				<div class="tab-pane fade show active" id="founder" role="tabpanel" aria-labelledby="founder-tab">
					<div class="row">
						<div class="col"></div>
						<div class="col-xl-5">
							<h2 class="founder-name">Raquel Sampaio</h1>
							<h4><?php pll_e( 'fundadora' ); ?></h4>
							<p class="founder-text"><?php pll_e( 'fundadora-p1' ); ?></p>
							<p class="founder-text"><?php pll_e( 'fundadora-p2' ); ?></p>
							<p class="founder-text"><?php pll_e( 'fundadora-p3' ); ?></p>
							<p class="founder-text"><?php pll_e( 'fundadora-p4' ); ?></p>
							<p class="founder-text"><?php pll_e( 'fundadora-p5' ); ?></p>
							<p class="founder-text"><?php pll_e( 'fundadora-p6' ); ?></p>
						</div>
						<div class="col-xl-4 text-center">
							<img class="founder" src="<?php echo get_template_directory_uri(); ?>/img/team/raquel-sampaio-big.png" alt="founder-picture">
							<div class="social-media-founder">
								<a href="https://www.facebook.com/raquel.sampaio1989" target="_blank">
									<img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook_preto.svg" alt="face-logo">
								</a>
								<a href="https://www.instagram.com/raqueltsampaio" target="_blank">
									<img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram_preto.svg" alt="insta-logo">
								</a>
								<a href="https://www.linkedin.com/in/raqueltsampaio" target="_blank">
									<img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_preto.svg" alt="linkedin-logo">
								</a>
								<a href="https://twitter.com/raqueltsampaio" target="_blank">
									<img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter_preto.svg" alt="twitter-logo">
								</a>
							</div>
						</div>
						<div class="col"></div>
					</div>	
				</div>	
				<div class="tab-pane fade" id="teammate" role="tabpanel" aria-labelledby="teammate-tab">
					<h2 class="founder-name text-center">The team you will never leave</h2>
					<div class="row">
						<div class="col"></div>
						<div class="col-lg-7">
							<p class="founder-text text-center"><?php pll_e( 'teammate-p1' ); ?></p>
							<p class="founder-text text-center"><?php pll_e( 'teammate-p2' ); ?></p>
							<p class="founder-text text-center"><?php pll_e( 'teammate-p3' ); ?></p>
							<p class="founder-text text-center"><?php pll_e( 'teammate-p4' ); ?></p>
							<div class="social-media-founder text-center">
								<a href="https://www.facebook.com/Teammate-Football-Management-103659131852598" target="_blank">
									<img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook_preto.svg" alt="face-logo">
								</a>
								<a href="https://www.instagram.com/teammatefootball" target="_blank">
									<img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram_preto.svg" alt="insta-logo">
								</a>
								<a href="https://www.linkedin.com/company/teammatefootball" target="_blank">
									<img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_preto.svg" alt="linkedin-logo">
								</a>
								<a href="https://www.twitter.com/teammatefootbal" target="_blank">
									<img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter_preto.svg" alt="twitter-logo">
								</a>
								<a href="https://www.youtube.com/channel/UCwl8cBq60RMRXM9-drjAPhw" target="_blank">
									<img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/youtube_preto.svg" alt="youtube-logo">
								</a>
							</div>
						</div>
						<div class="col"></div>
					</div>	
				</div>
				
				<div class="tab-pane fade" id="team" role="tabpanel" aria-labelledby="team-tab">
					<div class="row team-row">
						<div class="card team col-lg-3 col-md-4 col-sm-6 col-12 my-3 text-center">
							<div class="team-photo-container">
								<img class="card-img-top team-photo" src="<?php echo get_template_directory_uri(); ?>/img/team/raquel-sampaio-big.png" alt="raquel">
							</div>
							<div class="card-body team-card">
								<p class="team-name">Raquel Sampaio</p>
								<p class="team-description"><?php pll_e( 'equipa-founder-int' ); ?></p>
							</div>
							<div class="social-media-team">
								<a href="https://www.facebook.com/raquel.sampaio1989" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook_preto.svg" alt="face-logo"></a>
								<a href="https://www.instagram.com/raqueltsampaio" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram_preto.svg" alt="insta-logo"></a>
								<a href="https://www.linkedin.com/in/raqueltsampaio" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_preto.svg" alt="linkedin-logo"></a>
								<a href="https://twitter.com/raqueltsampaio" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter_preto.svg" alt="twitter-logo"></a>
							</div>
						</div>
						<div class="card team col-lg-3 col-md-4 col-sm-6 col-12 my-3 text-center">
							<div class="team-photo-container">
								<img class="card-img-top team-photo" src="<?php echo get_template_directory_uri(); ?>/img/team/catia-silva.png" alt="catia">
							</div>
							<div class="card-body team-card">
								<p class="team-name">Cátia Silva</p>
								<p class="team-description"><?php pll_e( 'equipa-comm' ); ?></p>
							</div>
							<div class="social-media-team">
								<a href="https://www.facebook.com/catia.silva.1426" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook_preto.svg" alt="face-logo"></a>
								<a href="https://www.instagram.com/catiasgs" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram_preto.svg" alt="insta-logo"></a>
								<a href="https://www.linkedin.com/in/catia-silva" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_preto.svg" alt="linkedin-logo"></a>
								<a href="https://twitter.com/catiasgs" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter_preto.svg" alt="twitter-logo"></a>
							</div>
						</div>
						<div class="card team col-lg-3 col-md-4 col-sm-6 col-12 my-3 text-center">
							<div class="team-photo-container">
								<img class="card-img-top team-photo" src="<?php echo get_template_directory_uri(); ?>/img/team/joao-alves.png" alt="andre">
							</div>
							<div class="card-body team-card">
								<p class="team-name">João Alves</p>
								<p class="team-description">Designer</p>
							</div>
							<div class="social-media-team">
								<a href="https://www.facebook.com/joao.alves.1485" target="_blank">
									<img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook_preto.svg" alt="face-logo">
								</a>
								<a href="https://www.instagram.com/jfa180" target="_blank">
									<img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram_preto.svg" alt="insta-logo">
								</a>
								<a href="https://www.linkedin.com/in/joaomfalves" target="_blank">
									<img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_preto.svg" alt="linkedin-logo"></a>
								<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/twitter_preto.svg" alt="twitter-logo">
							</div>
						</div>
						<div class="card team col-lg-3 col-md-4 col-sm-6 col-12 my-3 text-center">
							<div class="team-photo-container">
								<img class="card-img-top team-photo" src="<?php echo get_template_directory_uri(); ?>/img/team/francisco-silva.png" alt="catia">
							</div>
							<div class="card-body team-card">
								<p class="team-name">Francisco Gomes da Silva</p>
								<p class="team-description"><?php pll_e( 'equipa-analyst' ); ?></p>
							</div>
							<div class="social-media-team">
								<a href="https://www.facebook.com/fgsilva93" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook_preto.svg" alt="face-logo"></a>
								<a href="https://www.instagram.com/fgsilva1993" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram_preto.svg" alt="insta-logo"></a>
								<a href="https://www.linkedin.com/in/fgsilva1993" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_preto.svg" alt="linkedin-logo"></a>
								<a href="https://twitter.com/fgsilva1993" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter_preto.svg" alt="twitter-logo"></a>
							</div>
						</div>
						<div class="card team col-lg-3 col-md-4 col-sm-6 col-12 my-3 text-center">
							<div class="team-photo-container">
								<img class="card-img-top team-photo" src="<?php echo get_template_directory_uri(); ?>/img/team/ana-ramires.png" alt="catia">
							</div>
							<div class="card-body team-card">
								<p class="team-name">Ana Bispo Ramires</p>
								<p class="team-description"><?php pll_e( 'equipa-psicology' ); ?></p>
							</div>
							<div class="social-media-team">
								<a href="https://www.facebook.com/anabisporamires.psicologia.performance" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook_preto.svg" alt="face-logo"></a>
								<a href="https://www.instagram.com/ana_b_ramires_psicologia" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram_preto.svg" alt="insta-logo"></a>
								<a href="https://www.linkedin.com/in/ana-bispo-ramires-76b9988" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_preto.svg" alt="linkedin-logo"></a>
								<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/twitter_preto.svg" alt="twitter-logo">
							</div>
						</div>
						<div class="card team col-lg-3 col-md-4 col-sm-6 col-12 my-3 text-center">
							<div class="team-photo-container">
								<img class="card-img-top team-photo" src="<?php echo get_template_directory_uri(); ?>/img/team/claudia-minderico.png" alt="catia">
							</div>
							<div class="card-body team-card">
								<p class="team-name">Cláudia Minderico</p>
								<p class="team-description"><?php pll_e( 'equipa-nutri' ); ?></p>
							</div>
							<div class="social-media-team">
								<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/facebook_preto.svg" alt="face-logo">
								<a href="https://www.instagram.com/gapp_performance" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram_preto.svg" alt="insta-logo"></a>
								<a href=" https://www.linkedin.com/in/claudia-sofia-minderico-90501a97" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_preto.svg" alt="linkedin-logo"></a>
								<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/twitter_preto.svg" alt="twitter-logo">
							</div>
						</div>
						<div class="card team col-lg-3 col-md-4 col-sm-6 col-12 my-3 text-center">
							<div class="team-photo-container">
								<img class="card-img-top team-photo" src="<?php echo get_template_directory_uri(); ?>/img/team/bruno-novo.png" alt="catia">
							</div>
							<div class="card-body team-card">
								<p class="team-name">Bruno Novo</p>
								<p class="team-description"><?php pll_e( 'servicos-per' ); ?></p>
							</div>
							<div class="social-media-team">
								<a href="https://www.facebook.com/bruno.novo.18" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook_preto.svg" alt="face-logo"></a>
								<a href="https://www.instagram.com/coach_brunonovo" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram_preto.svg" alt="insta-logo"></a>
								<a href="https://www.linkedin.com/in/bruno-novo-775652135" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_preto.svg" alt="linkedin-logo"></a>
								<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/twitter_preto.svg" alt="twitter-logo">
							</div>
						</div>
						<div class="card team col-lg-3 col-md-4 col-sm-6 col-12 my-3 text-center">
							<div class="team-photo-container">
								<img class="card-img-top team-photo" src="<?php echo get_template_directory_uri(); ?>/img/team/ines-caetano.png" alt="catia">
							</div>
							<div class="card-body team-card">
								<p class="team-name">Inês Alves Caetano</p>
								<p class="team-description"><?php pll_e( 'equipa-consulting' ); ?></p>
							</div>
							<div class="social-media-team">
								<a href="https://www.facebook.com/SportsEmbassy1" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook_preto.svg" alt="face-logo"></a>
								<a href="https://www.instagram.com/sportsembassy_se" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram_preto.svg" alt="insta-logo"></a>
								<a href="https://www.linkedin.com/in/inesalvescaetano" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_preto.svg" alt="linkedin-logo"></a>
								<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/twitter_preto.svg" alt="twitter-logo">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="services" class="page-section">
		<div class="container-fluid">
			<div class="title-holder">
				<h2><?php pll_e( 'servicos' ); ?></h2>
			</div>
			<div class="row service-icons mt-5 justify-content-center">
				<div class="service col-3 col-md-2 mb-4 mx-md-3 mb-sm-0">
					<div class="service-symbol-frame" data-title="<?php pll_e( 'servicos-rep' ); ?>" data-text="<?php pll_e( 'servicos-rep-t' ); ?>">
						<div class="service-symbol-border active">
							<img class="p-md-2 p-1" src="<?php echo get_template_directory_uri(); ?>/img/rep.svg" alt="rep">
						</div>
						<div class="service-symbol-text">
							<?php pll_e( 'servicos-rep' ); ?>
						</div>
					</div>
				</div>
				<div class="service col-3 col-md-2 mb-4 mx-md-3 mb-sm-0">
					<div class="service-symbol-frame" data-title="<?php pll_e( 'servicos-int' ); ?>" data-text="<?php pll_e( 'servicos-int-t' ); ?>">
						<div class="service-symbol-border">	
							<img class="p-md-2 p-1" src="<?php echo get_template_directory_uri(); ?>/img/intermed.svg" alt="intermed">
						</div>
						<div class="service-symbol-text">
							<?php pll_e( 'servicos-int' ); ?>
						</div>
					</div>	
				</div>
				<div class="service col-3 col-md-2 mb-4 mx-md-3 mb-sm-0">
					<div class="service-symbol-frame" data-title="<?php pll_e( 'servicos-mar' ); ?>" data-text="<?php pll_e( 'servicos-mar-t' ); ?>">
						<div class="service-symbol-border">
							<img class="p-md-2 p-1" src="<?php echo get_template_directory_uri(); ?>/img/brand.svg" alt="brands">
						</div>
						<div class="service-symbol-text">
							<?php pll_e( 'servicos-mar' ); ?>
						</div>
					</div>	
				</div>
				<div class="service col-3 col-md-2 mb-4 mx-md-3 mb-sm-0">
					<div class="service-symbol-frame" data-title="<?php pll_e( 'servicos-com' ); ?>" data-text="<?php pll_e( 'servicos-com-t' ); ?>">
						<div class="service-symbol-border">
							<img class="p-md-2 p-1" src="<?php echo get_template_directory_uri(); ?>/img/comm.svg" alt="comm">
						</div>			
						<div class="service-symbol-text">
							<?php pll_e( 'servicos-com' ); ?>
						</div>
					</div>
				</div>
				<div class="service col-3 col-md-2 mb-4 mx-md-3 mb-sm-0">
					<div class="service-symbol-frame" data-title="<?php pll_e( 'servicos-jur' ); ?>" data-text="<?php pll_e( 'servicos-jur-t' ); ?>">
						<div class="service-symbol-border">
							<img class="p-md-2 p-1" src="<?php echo get_template_directory_uri(); ?>/img/juri.svg" alt="juri">
						</div>
						<div class="service-symbol-text">
							<?php pll_e( 'servicos-jur' ); ?>
						</div>
					</div>	
				</div>
				<div class="service col-3 col-md-2 mb-4 mx-md-3 mb-sm-0">
					<div class="service-symbol-frame" data-title="<?php pll_e( 'servicos-ren' ); ?>" data-text="<?php pll_e( 'servicos-ren-t' ); ?>">
						<div class="service-symbol-border">
							<img class="p-md-2 p-1" src="<?php echo get_template_directory_uri(); ?>/img/performance.svg" alt="performance">
						</div>
						<div class="service-symbol-text">
							<?php pll_e( 'servicos-ren' ); ?>
						</div>	
					</div>
				</div>
				<div class="service col-3 col-md-2 mb-4 mx-md-3 mb-sm-0">
					<div class="service-symbol-frame" data-title="<?php pll_e( 'servicos-psi' ); ?>" data-text="<?php pll_e( 'servicos-psi-t' ); ?>">
						<div class="service-symbol-border">
							<img class="p-md-2 p-1" src="<?php echo get_template_directory_uri(); ?>/img/mental.svg" alt="psico">
						</div>
						<div class="service-symbol-text">
							<?php pll_e( 'servicos-psi' ); ?>
						</div>
					</div>
				</div>
				<div class="service col-3 col-md-2 mb-4 mx-md-3 mb-sm-0">
					<div class="service-symbol-frame" data-title="<?php pll_e( 'servicos-nut' ); ?>" data-text="<?php pll_e( 'servicos-nut-t' ); ?>">
						<div class="service-symbol-border">
							<img class="p-md-2 p-1" src="<?php echo get_template_directory_uri(); ?>/img/nutri.svg" alt="nutri">
						</div>
						<div class="service-symbol-text">
							<?php pll_e( 'servicos-nut' ); ?>
						</div>	
					</div>
				</div>
				<div class="service col-3 col-md-2 mb-4 mx-md-3 mb-sm-0">
					<div class="service-symbol-frame" data-title="<?php pll_e( 'servicos-per' ); ?>" data-text="<?php pll_e( 'servicos-per-t' ); ?>">
						<div class="service-symbol-border">
							<img class="p-md-2 p-1" src="<?php echo get_template_directory_uri(); ?>/img/pt.svg" alt="pt">
						</div>						
						<div class="service-symbol-text">
							<?php pll_e( 'servicos-per' ); ?>
						</div>
					</div>
				</div>
				<div class="service col-3 col-md-2 mb-4 mx-md-3 mb-sm-0">
					<div class="service-symbol-frame" data-title="<?php pll_e( 'servicos-eve' ); ?>" data-text="<?php pll_e( 'servicos-eve-t' ); ?>">
						<div class="service-symbol-border">
							<img class="p-md-2 p-1" src="<?php echo get_template_directory_uri(); ?>/img/event.svg" alt="events">
						</div>
						<div class="service-symbol-text">
							<?php pll_e( 'servicos-eve' ); ?>
						</div>
					</div>	
				</div>
			</div>
			<h2 id="services-info-title" class="mt-3"><?php pll_e( 'servicos-rep' ); ?></h2>
			<div class="row mt-4 mt-lg-5">
				<div class="col"></div>
				<div class="col-lg-7">
					<div id="services-info-text" class="services-info">
					<?php pll_e( 'servicos-rep-t' ); ?>
					</div>
				</div>
				<div class="col"></div>
			</div>
		</div> <!-- .container-fluid -->
	</div> <!-- #services -->

	<div class="modal fade bd-example-modal-lg" id="highlightsModal" tabindex="-1" role="dialog" aria-labelledby="highlightsModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe id="player-video-frame" src="" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="players" class="page-section">
		<div class="container-fluid">
			<div class="title-holder">
				<h2>Teammates</h2>
			</div>
			<div class="row mt-4">
				<div class="col-12">
					<ul class="custom-nav justify-content-center mt-3 mb-3 mb-md-5">
						<li>
							<button class="players-nav-buttons active" data-position="all" type="button"><?php pll_e( 'team-all' ); ?></button>
						</li>
						<li>
							<button class="players-nav-buttons" data-position="gk" type="button"><?php pll_e( 'team-gks' ); ?></button>
						</li>
						<li>
							<button class="players-nav-buttons" data-position="def" type="button"><?php pll_e( 'team-defs' ); ?></button>
						</li>
						<li>
							<button class="players-nav-buttons" data-position="med" type="button"><?php pll_e( 'team-meds' ); ?></button>
						</li>
						<li>
							<button class="players-nav-buttons" data-position="fw" type="button"><?php pll_e( 'team-fws' ); ?></button>
						</li>
						<li>
							<button class="players-nav-buttons" data-position="coach" type="button" ><?php pll_e( 'team-coas' ); ?></button>
						</li>
					</ul>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row">
					<div class="col"></div>
					<div class="col-lg-9 text-center">
						<div class="card player m-3 gk all">
							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/InesPereira_Hover.png')">
									<p class="player-name">Inês Pereira</p>
									<p class="player-position"><?php pll_e( 'team-gk' ); ?></p>
									<p class="player-stats">26.05.1999</p>
									<p class="player-stats">172 CM</p>
									<p class="player-stats">65 KG</p>
									<p class="player-stats"><?php pll_e( 'team-left-foot' ); ?></p>
									<div class="player-card-info-footer mt-4">
										<button class="play-button" type="button" data-toggle="modal" data-target="#highlightsModal" data-media="https://player.vimeo.com/video/510939138">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2">
											<a href="https://www.facebook.com/InesPereiraGR" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											</a>
											<a href="https://www.instagram.com/inespereira.12" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											<a href="https://twitter.com/inespereira12_" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
											</a>
										</div>
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_InesPereira.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/InesPereira.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Inês Pereira</p>
									<p class="player-position"><?php pll_e( 'team-gk' ); ?></p>
								</div>
							</div>
						</div>

						<div class="card player m-3 gk all">
							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/RuteCosta_Hover.png')">
									<p class="player-name">Rute Costa</p>
									<p class="player-position"><?php pll_e( 'team-gk' ); ?></p>
									<p class="player-stats">01.07.1996</p>
									<p class="player-stats">170 CM</p>
									<p class="player-stats">62 KG</p>
									<p class="player-stats"><?php pll_e( 'team-right-foot' ); ?></p>
									
									<div class="player-card-info-footer mt-4">
										<button class="play-button" type="button" data-toggle="modal" data-target="#highlightsModal" data-media="https://www.youtube.com/embed/wvbsT5XWLBM">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2">
											<a href="https://www.facebook.com/rutecostaofficial" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											</a>
											<a href="https://www.instagram.com/ruteccosta66" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_RuteCosta.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/RuteCosta.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Rute Costa</p>
									<p class="player-position"><?php pll_e( 'team-gk' ); ?></p>
								</div>
							</div>
						</div>
						
						<div class="card player m-3 def all">
							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/Agata_Hover.png')">
									<p class="player-name">Ágata Filipa</p>
									<p class="player-position"><?php pll_e( 'team-de' ); ?></p>
									<p class="player-stats">12.05.1995</p>
									<p class="player-stats">160 CM</p>
									<p class="player-stats">52 KG</p>
									<p class="player-stats"><?php pll_e( 'team-left-foot' ); ?></p>
									<div class="player-card-info-footer mt-4">
										<button class="play-button" type="button" data-toggle="modal" data-target="#highlightsModal" data-media="https://player.vimeo.com/video/488530075">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>

										<div class="social-media-player mx-2">
											<a href="https://www.facebook.com/AgataaFilipaa" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											</a>
											<a href="https://www.instagram.com/agatafilipa16" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											<a href="https://twitter.com/AgataFilipa" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
											</a>
										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_AgataFilipa.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/AgataFilipa.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Ágata Filipa</p>
									<p class="player-position"><?php pll_e( 'team-def' ); ?></p>
								</div>
							</div>
						</div>
						<div class="card player m-3 def all">

							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/AliciaCorreia_Hover.png')">
									<p class="player-name">Alícia Correia</p>
									<p class="player-position"><?php pll_e( 'team-de' ); ?></p>
									<p class="player-stats">29.04.2003</p>
									<p class="player-stats">160 CM</p>
									<p class="player-stats">53 KG</p>
									<p class="player-stats"><?php pll_e( 'team-left-foot' ); ?></p>
									<div class="player-card-info-footer mt-4">
										<button class="play-button" type="button" data-toggle="modal" data-target="#highlightsModal" data-media="https://www.youtube.com/embed/LZ82HRibYY4">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>

										<div class="social-media-player mx-2">
											<a href="https://www.facebook.com/Al%C3%ADcia-Correia-1707003366098952" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											</a>
											<a href="https://www.instagram.com/aliciafcorreia" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											<a href="https://twitter.com/AliciaCorreia6" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
											</a>
										</div>
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_AliciaCorreia.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/AliciaCorreia.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Alícia Correia</p>
									<p class="player-position"><?php pll_e( 'team-def' ); ?></p>
								</div>
							</div>
						</div>

						<div class="card player m-3 def all">
		
							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/BrunaCosta_Hover.png')">
									<p class="player-name">Bruna Costa</p>
									<p class="player-position"><?php pll_e( 'team-dc' ); ?></p>
									<p class="player-stats">10.04.1999</p>
									<p class="player-stats">173 CM</p>
									<p class="player-stats">65 KG</p>
									<p class="player-stats"><?php pll_e( 'team-right-foot' ); ?></p>
									<div class="player-card-info-footer mt-4">
										<button class="play-button" type="button" data-toggle="modal" data-target="#highlightsModal" data-media="https://player.vimeo.com/video/514735122">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>

										<div class="social-media-player mx-2">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											<a href="https://www.instagram.com/brun6l" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											<a href="https://twitter.com/brun6l" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
											</a>
										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_BrunaCosta.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>	
								</div>
							</div>
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/BrunaCosta.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Bruna Costa</p>
									<p class="player-position"><?php pll_e( 'team-def' ); ?></p>
								</div>
							</div>
						</div>

						<div class="card player m-3 def all">
							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/BrunaRamos_Hover.png')">
									<p class="player-name">Bruna Ramos</p>
									<p class="player-position"><?php pll_e( 'team-dd' ); ?></p>
									<p class="player-stats">24.03.2005</p>
									<p class="player-stats">172 CM</p>
									<p class="player-stats">53 KG</p>
									<p class="player-stats"><?php pll_e( 'team-right-foot' ); ?></p>
									<div class="player-card-info-footer mt-4">

										<button class="play-button low-opacity-fixed" type="button">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											<a href="https://www.instagram.com/brunaramos_26" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_BrunaRamos.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/BrunaRamos.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Bruna Ramos</p>
									<p class="player-position"><?php pll_e( 'team-def' ); ?></p>
								</div>
							</div>
						</div>

						<div class="card player m-3 def all">

							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/CarolinaPimenta_Hover.png')">
									<p class="player-name">Carolina Pimenta</p>
									<p class="player-position"><?php pll_e( 'team-dd' ); ?></p>
									<p class="player-stats">13.03.2006</p>
									<p class="player-stats">158 CM</p>
									<p class="player-stats">51 KG</p>
									<p class="player-stats"><?php pll_e( 'team-right-foot' ); ?></p>

									<div class="player-card-info-footer mt-4">
										<button class="play-button low-opacity-fixed" type="button">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											<a href="https://www.instagram.com/carolinavpimenta_" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_CarolinaPimenta.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/CarolinaPimenta.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Carolina Pimenta</p>
									<p class="player-position"><?php pll_e( 'team-def' ); ?></p>
								</div>
							</div>
						</div>

						<div class="card player m-3 def all">
							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/MarianaRosa_Hover.png')">
									<p class="player-name">Mariana Pinto Rosa</p>
									<p class="player-position"><?php pll_e( 'team-dd' ); ?></p>
									<p class="player-stats">13.04.2001</p>
									<p class="player-stats">160 CM</p>
									<p class="player-stats">51 KG</p>
									<p class="player-stats"><?php pll_e( 'team-right-foot' ); ?></p>

									<div class="player-card-info-footer mt-4">
										<button class="play-button" type="button" data-toggle="modal" data-target="#highlightsModal" data-media="https://www.youtube.com/embed/oP6q_KcG5p8">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>

										<div class="social-media-player mx-2">
											<a href="https://www.facebook.com/Mariana-Pinto-Rosa-102478487762974" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											</a>
											<a href="https://www.instagram.com/marianapintorosa" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											<a href="https://twitter.com/mariana_rosa7" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
											</a>
										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_MarianaRosa.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/MarianaRosa.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Mariana Pinto Rosa</p>
									<p class="player-position"><?php pll_e( 'team-def' ); ?></p>
								</div>
							</div>
						</div>

						<div class="card player m-3 def all">
							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/MonicaMendes_Hover.png'); background-size:cover">
									<p class="player-name">Mónica Mendes</p>
									<p class="player-position"><?php pll_e( 'team-dc' ); ?></p>
									<p class="player-stats">16.06.1993</p>
									<p class="player-stats">165 CM</p>
									<p class="player-stats">60 KG</p>
									<p class="player-stats"><?php pll_e( 'team-right-foot' ); ?></p>

									<div class="player-card-info-footer mt-4">
										<button class="play-button" type="button" data-toggle="modal" data-target="#highlightsModal" data-media="https://www.youtube.com/embed/ccQIHD-GxTs">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>

										<div class="social-media-player mx-2">
											<a href="https://www.facebook.com/MonicaM24" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											</a>
											<a href="https://www.instagram.com/monica_mendes2" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											<a href="https://twitter.com/MonicaMendes24" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
											</a>
										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_MonicaMendes.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/MonicaMendes.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Mónica Mendes</p>
									<p class="player-position"><?php pll_e( 'team-def' ); ?></p>
								</div>
							</div>
						</div>
						
						<div class="card player m-3 def all">
							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/SofiaSilva_Hover.png')">
									<p class="player-name">Sofia Silva</p>
									<p class="player-position"><?php pll_e( 'team-dc' ); ?></p>
									<p class="player-stats">07.02.2002</p>
									<p class="player-stats">169 CM</p>
									<p class="player-stats">63 KG</p>
									<p class="player-stats"><?php pll_e( 'team-right-foot' ); ?></p>

									<div class="player-card-info-footer mt-4">
										<button class="play-button" type="button" data-toggle="modal" data-target="#highlightsModal" data-media="https://www.youtube.com/embed/I238dfmoVGg">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											<a href="https://www.instagram.com/sofiasilva6_" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											<a href="https://www.twitter.com/SofiaSi05279275" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
											</a>										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_SofiaSilva.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/SofiaSilva.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Sofia Silva</p>
									<p class="player-position"><?php pll_e( 'team-def' ); ?></p>
								</div>
							</div>
						</div>

						<div class="card player m-3 med all">
							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/BarbaraLopes_Hover.png')">
									<p class="player-name">Bárbara Lopes</p>
									<p class="player-position"><?php pll_e( 'team-mc' ); ?></p>
									<p class="player-stats">15.01.2002</p>
									<p class="player-stats">165 CM</p>
									<p class="player-stats">57 KG</p>
									<p class="player-stats"><?php pll_e( 'team-left-foot' ); ?></p>

									<div class="player-card-info-footer mt-4">
										<button class="play-button low-opacity-fixed" type="button">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											<a href="https://www.instagram.com/b.lopes915" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											<a href="https://twitter.com/BarbaraLopes915" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
											</a>
										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_BarbaraLopes.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/BarbaraLopes.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Bárbara Lopes</p>
									<p class="player-position"><?php pll_e( 'team-med' ); ?></p>
								</div>
							</div>
						</div>

						<div class="card player m-3 med all">
							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/Clarinha_Hover.png')">
									<p class="player-name">Clarinha</p>
									<p class="player-position"><?php pll_e( 'team-mo' ); ?></p>
									<p class="player-stats">16.01.2006</p>
									<p class="player-stats">160 CM</p>
									<p class="player-stats">55 KG</p>
									<p class="player-stats"><?php pll_e( 'team-left-foot' ); ?></p>

									<div class="player-card-info-footer mt-4">
										<button class="play-button low-opacity-fixed" type="button">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button> 
										<div class="social-media-player mx-2">
											<a href="https://www.facebook.com/Clarinhaa10" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											</a>
											<a href="https://www.instagram.com/clarinnha_10" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											<a href="https://www.twitter.com/10Claarinha" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
											</a>										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_Clarinha.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/Clarinha.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Clarinha</p>
									<p class="player-position"><?php pll_e( 'team-med' ); ?></p>
								</div>
							</div>
						</div>

						<div class="card player m-3 med all">
							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/FatimaPinto_Hover.png')">
									<p class="player-name">Fátima Pinto</p>
									<p class="player-position"><?php pll_e( 'team-mc' ); ?></p>
									<p class="player-stats">16.06.1996</p>
									<p class="player-stats">170 CM</p>
									<p class="player-stats">60 KG</p>
									<p class="player-stats"><?php pll_e( 'team-right-foot' ); ?></p>

									<div class="player-card-info-footer mt-4">
										<button class="play-button" type="button" data-toggle="modal" data-target="#highlightsModal" data-media="https://player.vimeo.com/video/513221979">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2">
											<a href="https://www.facebook.com/13fatimapinto" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											</a>
											<a href="https://www.instagram.com/fatimapinto13" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											<a href="https://twitter.com/13fatimapinto" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
											</a>
										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_FatimaPinto.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/FatimaPinto.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Fátima Pinto</p>
									<p class="player-position"><?php pll_e( 'team-med' ); ?></p>
								</div>
							</div>
						</div>

						<div class="card player m-3 med all">
							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/JoanaMartins_Hover.png')">
									<p class="player-name">Joana Martins</p>
									<p class="player-position"><?php pll_e( 'team-mc' ); ?></p>
									<p class="player-stats">04.10.2000</p>
									<p class="player-stats">155 CM</p>
									<p class="player-stats">50 KG</p>
									<p class="player-stats"><?php pll_e( 'team-right-foot' ); ?></p>

									<div class="player-card-info-footer mt-4">
										<button class="play-button" type="button" data-toggle="modal" data-target="#highlightsModal" data-media="https://player.vimeo.com/video/511599132">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2">
											<a href="https://www.facebook.com/joaninhamr" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											</a>
											<a href="https://www.instagram.com/joaninhamr" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											<a href="https://twitter.com/joaninhamr11" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
											</a>
										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_JoanaMartins.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/JoanaMartins.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Joana Martins</p>
									<p class="player-position"><?php pll_e( 'team-med' ); ?></p>
								</div>
							</div>
						</div>

						<div class="card player m-3 med all">
							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/LuanaBarata_Hover.png')">
									<p class="player-name">Luana Barata</p>
									<p class="player-position"><?php pll_e( 'team-mc' ); ?></p>
									<p class="player-stats">11.03.2006</p>
									<p class="player-stats">159 CM</p>
									<p class="player-stats">52 KG</p>
									<p class="player-stats"><?php pll_e( 'team-right-foot' ); ?></p>
									<div class="player-card-info-footer mt-4">
										<button class="play-button low-opacity-fixed" type="button">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>

										<div class="social-media-player mx-2">
											<a href="https://www.facebook.com/luana.barata.10" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											</a>
											<a href="https://www.instagram.com/_luanabarata21_" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_LuanaBarata.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/LuanaBarata.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Luana Barata</p>
									<p class="player-position"><?php pll_e( 'team-med' ); ?></p>
								</div>
							</div>
						</div>

						<div class="card player m-3 med all">
							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/MafaldaMariano_Hover.png')">
									<p class="player-name">Mafalda Mariano</p>
									<p class="player-position"><?php pll_e( 'team-mo' ); ?></p>
									<p class="player-stats">03.01.2006</p>
									<p class="player-stats">162 CM</p>
									<p class="player-stats">50 KG</p>
									<p class="player-stats"><?php pll_e( 'team-left-foot' ); ?></p>
									
									<div class="player-card-info-footer mt-4">
										<button class="play-button low-opacity-fixed" type="button">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											<a href="https://www.instagram.com/mafalda.11" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_MafaldaMariano.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/MafaldaMariano.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Mafalda Mariano</p>
									<p class="player-position"><?php pll_e( 'team-med' ); ?></p>
								</div>
							</div>
						</div>

						<div class="card player m-3 med all">
							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/MargaridaSousa_Hover.png')">
									<p class="player-name">Margarida Sousa</p>
									<p class="player-position"><?php pll_e( 'team-mc' ); ?></p>
									<p class="player-stats">26.02.1997</p>
									<p class="player-stats">168 CM</p>
									<p class="player-stats">60 KG</p>
									<p class="player-stats"><?php pll_e( 'team-right-foot' ); ?></p>

									<div class="player-card-info-footer mt-4">
										<button class="play-button" type="button" data-toggle="modal" data-target="#highlightsModal" data-media="https://player.vimeo.com/video/410340728">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											<a href="https://www.instagram.com/margarida50" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_MargaridaSousa.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/MargaridaSousa.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Margarida Sousa</p>
									<p class="player-position"><?php pll_e( 'team-med' ); ?></p>
								</div>
							</div>
						</div>

						<div class="card player m-3 med all">
							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/Jaleca_Hover.png')">
									<p class="player-name">Mariana Jaleca</p>
									<p class="player-position"><?php pll_e( 'team-mo' ); ?></p>
									<p class="player-stats">08.10.1997</p>
									<p class="player-stats">166 CM</p>
									<p class="player-stats">55 KG</p>
									<p class="player-stats"><?php pll_e( 'team-right-foot' ); ?></p>
									<div class="player-card-info-footer mt-4">
										<button class="play-button" type="button" data-toggle="modal" data-target="#highlightsModal" data-media="https://www.youtube.com/embed/ak4-N8-jy0E">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											<a href="https://www.instagram.com/jaleca_oficial" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<a href="http://www.linkedin.com/in/mariana-pereira-jaleca-9a6465186" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											</a>						
											<a href="https://twitter.com/marianajka" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
											</a>
										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_MarianaJaleca.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/MarianaJaleca.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Mariana Jaleca</p>
									<p class="player-position"><?php pll_e( 'team-med' ); ?></p>
								</div>
							</div>
						</div>

						<div class="card player m-3 med all">
							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/VeraCid_Hover.png')">
									<p class="player-name">Vera Cid</p>
									<p class="player-position"><?php pll_e( 'team-mc' ); ?></p>
									<p class="player-stats">29.12.2002</p>
									<p class="player-stats">163 CM</p>
									<p class="player-stats">57 KG</p>
									<p class="player-stats"><?php pll_e( 'team-right-foot' ); ?></p>

									<div class="player-card-info-footer mt-4">
										<button class="play-button low-opacity-fixed" type="button">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											<a href="https://www.instagram.com/vera_cid11" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											<a href="https://twitter.com/veraaaa_cid11" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
											</a>
										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_VeraCid.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/VeraCid.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Vera Cid</p>
									<p class="player-position"><?php pll_e( 'team-med' ); ?></p>
								</div>
							</div>
						</div>

						<div class="card player m-3 fw all">
							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/FranciscaCardoso_Hover.png')">
									<p class="player-name">Francisca Cardoso</p>
									<p class="player-position"><?php pll_e( 'team-st' ); ?></p>
									<p class="player-stats">13.12.1997</p>
									<p class="player-stats">174 CM</p>
									<p class="player-stats">63 KG</p>
									<p class="player-stats"><?php pll_e( 'team-right-foot' ); ?></p>

									<div class="player-card-info-footer mt-4">
										<button class="play-button" type="button" data-toggle="modal" data-target="#highlightsModal" data-media="https://player.vimeo.com/video/505225211">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2">
											<a href="https://www.facebook.com/FranciscaCardoso13" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											</a>
											<a href="https://www.instagram.com/chicardoso" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<a href="https://www.linkedin.com/in/francisca-cardoso-5a7367107">
												<img src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											</a>
											<a href="https://twitter.com/Chicacardoso9" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
											</a>
										</div>											
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_FranciscaCardoso.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/FranciscaCardoso.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Francisca Cardoso</p>
									<p class="player-position"><?php pll_e( 'team-fw' ); ?></p>
								</div>
							</div>
						</div>

						<div class="card player m-3 fw all">
							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/JoanaDantas_Hover.png')">
									<p class="player-name">Joana Dantas</p>
									<p class="player-position"><?php pll_e( 'team-fw' ); ?></p>
									<p class="player-stats">15.03.2003</p>
									<p class="player-stats">160 CM</p>
									<p class="player-stats">50 KG</p>
									<p class="player-stats"><?php pll_e( 'team-right-foot' ); ?></p>

									<div class="player-card-info-footer mt-4">
										<button class="play-button low-opacity-fixed" type="button" data-toggle="modal" data-target="#highlightsModal" data-media="https://player.vimeo.com/video/505225211">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											<a href="https://www.instagram.com/joana_dantas70" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											<a href="https://twitter.com/JoanaDantas70" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
											</a>
										</div>											
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_JoanaDantas.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/JoanaDantas.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Joana Dantas</p>
									<p class="player-position"><?php pll_e( 'team-fw' ); ?></p>
								</div>
							</div>
						</div>

						<div class="card player m-3 fw all">
							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/MariaFerreira_Hover.png')">
									<p class="player-name">Maria Ferreira</p>
									<p class="player-position"><?php pll_e( 'team-ee' ); ?></p>
									<p class="player-stats">02.09.2005</p>
									<p class="player-stats">155 CM</p>
									<p class="player-stats">41 KG</p>
									<p class="player-stats"><?php pll_e( 'team-left-foot' ); ?></p>

									<div class="player-card-info-footer mt-4">
										<button class="play-button low-opacity-fixed" type="button">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											<a href="https://www.instagram.com/mariargferreira" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											<a href="https://twitter.com/mariargferreira" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
											</a>
										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_MariaFerreira.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/MariaFerreira.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Maria Ferreira</p>
									<p class="player-position"><?php pll_e( 'team-fw' ); ?></p>
								</div>
							</div>
						</div>

						<div class="card player m-3 fw all">
							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/LydiaAndrade_Hover.png')">
									<p class="player-name">Lydia Andrade</p>
									<p class="player-position"><?php pll_e( 'team-fw' ); ?></p>
									<p class="player-stats">20.02.1999</p>
									<p class="player-stats">166 CM</p>
									<p class="player-stats">54 KG</p>
									<p class="player-stats"><?php pll_e( 'team-right-foot' ); ?></p>

									<div class="player-card-info-footer mt-4">
										<button class="play-button" type="button" data-toggle="modal" data-target="#highlightsModal" data-media="https://www.youtube.com/embed/yLcxQa35dow">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2">
											<a href="https://www.facebook.com/lydia.andrade.9" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											</a>
											<a href="https://www.instagram.com/lydiaandrade23" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_LydiaAndrade.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/LydiaAndrade.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Lydia Andrade</p>
									<p class="player-position"><?php pll_e( 'team-fw' ); ?></p>
								</div>
							</div>
						</div>

						<div class="card player m-3 coach all">
							<div class="card-player-info invisible">
								<div class="card-body player-card-info pt-6" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.70) 0%), url('<?php echo get_template_directory_uri(); ?>/img/teammates/MarianaCabral_Hover.png')">
									<p class="player-name">Mariana Cabral</p>
									<p class="player-position"><?php pll_e( 'team-coa-fem' ); ?></p>
									<p class="player-stats">27.08.1987</p>
									<p class="player-stats">&nbsp;</p>
									<p class="player-stats">&nbsp;</p>
									<p class="player-stats">&nbsp;</p>
									
									<div class="player-card-info-footer mt-4">
										<button class="play-button low-opacity-fixed" type="button">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2">
											<a href="https://www.facebook.com/marianammvc" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/facebook_dourado.svg" alt="face-logo">
											</a>
											<a href="https://www.instagram.com/marianammvcabral" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/instagram_dourado.svg" alt="insta-logo">
											</a>
											<a href="https://www.linkedin.com/in/marianamcabral" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/linkedin_dourado.svg" alt="linkedin-logo">
											</a>
											<a href="https://twitter.com/marianacabral" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/twitter_dourado.svg" alt="twitter-logo">
											</a>
										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_MarianaCabral.pdf" target="_blank">
											<img class="cv-icon" src="<?php echo get_template_directory_uri(); ?>/img/cv.svg" alt="download">
										</a>
									</div>
								</div>
							</div>
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/MarianaCabral.png" alt="Card image cap">
								<div class="card-body player-card">
									<p class="player-name">Mariana Cabral</p>
									<p class="player-position"><?php pll_e( 'team-coa-fem' ); ?></p>
								</div>
							</div>
						</div>
						<div class="card player placeholder m-3 all">
							<div class="card-player-photo">
								<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/teammates/BeOurMate.png" alt="Card image cap">
								<div class="card-body player-card-placeholder">
									<p class="player-name"><a href="#wrapper-footer">BE OUR MATE&nbsp;&nbsp;&nbsp;></a></p>
								</div>
							</div>
						</div>
					</div>	
					<div class="col"></div>
				</div>	
			</div>
		</div>
	</div> <!-- #players -->

	<div id="news" class="page-section">
		<div class="container-fluid">
			<div class="title-holder">
				<h2><?php pll_e( 'noticias' ); ?></h2>
			</div>

			<div class="row mt-4">
				<div class="col"></div>
				<div class="col-lg-8 text-center">
					<h2><?php pll_e( 'soon' ); ?></h2>
					<main class="site-main" id="main">
						<?php
						// if ( have_posts() ) {
						// 	// Start the Loop.
						// 	while ( have_posts() ) {
						// 		the_post();

						// 		/*
						// 		* Include the Post-Format-specific template for the content.
						// 		* If you want to override this in a child theme, then include a file
						// 		* called content-___.php (where ___ is the Post Format name) and that will be used instead.
						// 		*/
						// 		get_template_part( 'loop-templates/content', get_post_format() );
						// 	}
						// } else {
						// 	get_template_part( 'loop-templates/content', 'none' );
						// }
						?>

					</main>
				</div>
				<div class="col"></div>
			</div>
		</div> <!-- .container-fluid -->
	</div> <!-- #news -->

	<div id="newsletter" class="pt-5 pb-4">
		<div class="contact-form-holder">
			<div class="container-fluid">
				<?php echo do_shortcode('[mc4wp_form id="48"]'); ?>
			</div>
		</div>
	</div>

	<div id="partners" class="page-section">
			<div class="title-holder">
				<h2><?php pll_e( 'parceiros' ); ?></h2>
			</div>

			<div class="row mt-lg-5 mt-sm-4">
				<div class="col text-center pt-4 pt-md-5 pt-lg-4 pt-xl-4">
					<img id="prev-arrow" class="slick-prev" src="<?php echo get_template_directory_uri(); ?>/img/partners/arrow_left.png" alt="prev">
				</div>
				<div class="col-8">
					<div class="slider">
						<div class="outer-wrapper">
							<div class="slider-image-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/partners/ADIDAS.png" alt="adidas">	
							</div>
						</div>
						<div class="outer-wrapper">
							<div class="slider-image-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/partners/SPORTSEMBASSY.png" alt="sports-embassy">
							</div>
						</div>
						<div class="outer-wrapper">
							<div class="slider-image-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/partners/GEARXPRO.png" alt="gearpro">					
							</div>
						</div>
						<div class="outer-wrapper">
							<div class="slider-image-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/partners/ACRILSPORTS.png" alt="acril-sports">			
							</div>
						</div>
						<div class="outer-wrapper">
							<div class="slider-image-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/partners/NEWBALANCE.png" alt="nb">					
							</div>
						</div>
						<div class="outer-wrapper">
							<div class="slider-image-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/partners/JOMA.png" alt="joma">				
							</div>
						</div>
						<div class="outer-wrapper">
							<div class="slider-image-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/partners/SP.png" alt="sp">				
							</div>
						</div>
						<div class="outer-wrapper">
							<div class="slider-image-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/partners/ZUMUB.png" alt="zumub">
							</div>
						</div>
						<div class="outer-wrapper">
							<div class="slider-image-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/partners/GAPP.png" alt="gapp">
							</div>
						</div>
						<div class="outer-wrapper">
							<div class="slider-image-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/partners/UMBRO.png" alt="umbro">
							</div>
						</div>
						<div class="outer-wrapper">
							<div class="slider-image-container">
								<img src="<?php echo get_template_directory_uri(); ?>/img/partners/PROSCOUT.png" alt="proscout">			
							</div>
						</div>
					</div>

				</div>
				<div class="col text-center pt-4 pt-md-5 pt-lg-4 pt-xl-4">
					<img id="next-arrow" class="slick-next" src="<?php echo get_template_directory_uri(); ?>/img/partners/arrow_right.png" alt="next">	
				</div>
			</div>

	</div>
	
	

</div><!-- #index-wrapper -->

<?php
get_footer();
