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

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">

	<div id="who-are-we" class="page-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col"></div>
				<div class="col-lg-6">
					<h2>Quem Somos</h2>
					<ul class="nav d-flex justify-content-center" id="who-are-we" role="tablist">
						<li>
							<button class="active" id="founder-tab" data-toggle="tab" data-target="#founder" type="button" role="tab" aria-controls="founder" aria-selected="true">Fundadora</button>
						</li>
						<li>
							<button id="teammate-tab" data-toggle="tab" data-target="#teammate" type="button" role="tab" aria-controls="teammate" aria-selected="false">Teammate</button>
						</li>
						<li>
							<button id="team-tab" data-toggle="tab" data-target="#team" type="button" role="tab" aria-controls="team" aria-selected="false">Equipa</button>
						</li>
					</ul>
				</div>
				<div class="col"></div>
			</div>

			<div class="container-fluid tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="founder" role="tabpanel" aria-labelledby="founder-tab">
					<div class="row">
						<div class="col"></div>
						<div class="col-lg-5">
							<h1>Raquel Sampaio</h1>
							<h4>Fundadora</h4>
							<p class="founder-text">
							E se eu te dissesse que, nos meus tempos de Jogadora, era eu que lavava os meus equipamentos e que pagava para jogar? 
							</p>
							<p class="founder-text">
							É verdade. E foi por isso que, quando pendurei as chuteiras, decidi que queria fazer o meu caminho fora dos relvados. 
							Aliando o sonho à oportunidade, tornei-me Diretora do Futebol Feminino do Sporting Clube de Portugal - para profissionalizar a modalidade e oferecer às jogadoras as condições que eu nunca tive. 
							No entanto, apercebi-me que a minha capacidade e vontade em ajudar jogadoras ia muito para além de cores ou emblemas.
							</p>
							<p class="founder-text">
							Fundei, assim, a <b>Teammate Football Management</b>, onde todos os dias faço entrar em campo os meus 17 anos de experiência no futebol e onde convoco as minhas três competências: a de jogadora, a de diretora desportiva e a de agente.							
							</p>
							<p class="founder-text">
							A minha experiência enquanto jogadora, faz com que saiba exatamente quais são as tuas necessidades, dentro e fora das quatro linhas.							
							</p>
							<p class="founder-text">
							O dirigismo desportivo, fez-me compreender o que os Clubes pretendem, como pensam e decidem e, estar a par de todo o processo burocrático e logístico que ocorre nos bastidores.
							</p>
							<p class="founder-text">
							Por último, ser agente, fez-me perceber a importância de ter um <b>Teammate</b> sempre ao nosso lado e que nos ajude a fazer as escolhas certas, rumo ao sucesso. Foi aquilo que eu nunca tive, mas que quero que tu tenhas!							</p>
						</div>
						<div class="col-lg-3 text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/team/raquel-sampaio.jpg" alt="founder-picture">
							<div class="social-media-founder">
								<a href="https://www.facebook.com/raquel.sampaio1989" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="face-logo"></a>
								<a href="https://www.instagram.com/raqueltsampaio" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="insta-logo"></a>
								<a href="https://www.linkedin.com/in/raqueltsampaio" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" alt="linkedin-logo"></a>
								<a href="https://twitter.com/raqueltsampaio" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twiter.png" alt="twitter-logo"></a>
							</div>
						</div>
						<div class="col"></div>
					</div>	
				</div>	
				<div class="tab-pane fade" id="teammate" role="tabpanel" aria-labelledby="teammate-tab">
					<h2>The team you will never leave</h2>
					<div class="row">
						<div class="col"></div>
						<div class="col-lg-5 text-center">
							<p>
							Nós só queremos uma coisa: que jogues sem te preocupares com mais nada. Que dediques todo o teu esforço ao que mais gostas de fazer. O resto nós tratamos.							
							</p>
							<p>
							Enquanto estás em campo, nós tomamos conta de todo o processo fora das quatro linhas e estamos sempre à procura das melhores oportunidades para ti. Por isso, mantemos contacto com os maiores clubes da Europa e com as principais marcas desportivas.
							</p>
							<p>
							Mas um verdadeiro <b>Teammate</b> não está presente apenas durante os 90 minutos. Estamos ao teu lado antes da profissionalização e depois de pendurares as chuteiras.
							</p>
							<p>
							Somos aquele <b>Teammate</b> que torce sempre por ti e faz tudo para que brilhes em qualquer parte do mundo. Somos a equipa que nunca vais querer deixar! #BeOurMate
							</p>
							<div class="social-media-founder">
								<a href="#"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="face-logo"></a>
								<a href="#"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="insta-logo"></a>
								<a href="#"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" alt="linkedin-logo"></a>
								<a href="#"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twiter.png" alt="twitter-logo"></a>
							</div>
						</div>
						<div class="col"></div>
					</div>	
				</div>
				
				<div class="tab-pane fade" id="team" role="tabpanel" aria-labelledby="team-tab">
					<div class="row">
						<div class="col"></div>
						<div class="col-lg-7 text-center">
							<div class="card team m-3">
								<img class="card-img-top team-photo" src="<?php echo get_template_directory_uri(); ?>/img/team/raquel-sampaio.jpg" alt="raquel">
								<div class="card-body team-card">
									<p class="team-name">Raquel Sampaio</p>
									<p class="team-description">Fundadora</p>
									<p class="team-description">&nbsp;</p>
								</div>
								<div class="social-media-team">
									<a href="https://www.facebook.com/raquel.sampaio1989" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="face-logo"></a>
									<a href="https://www.instagram.com/raqueltsampaio" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="insta-logo"></a>
									<a href="https://www.linkedin.com/in/raqueltsampaio" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" alt="linkedin-logo"></a>
									<a href="https://twitter.com/raqueltsampaio" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twiter.png" alt="twitter-logo"></a>
								</div>
							</div>
							<div class="card team m-3">
								<img class="card-img-top team-photo" src="<?php echo get_template_directory_uri(); ?>/img/team/andre-ferreira.jpg" alt="andre">
								<div class="card-body team-card">
									<p class="team-name">Andre Ferreira</p>
									<p class="team-description">Designer</p>
									<p class="team-description">&nbsp;</p>
								</div>
								<div class="social-media-team">
									<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="face-logo">
									<a href="https://www.instagram.com/falconndesign" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="insta-logo"></a>
									<a href="https://www.linkedin.com/in/andré-ferreira-design" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" alt="linkedin-logo"></a>
									<a href="https://twitter.com/falconndesign" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twiter.png" alt="twitter-logo"></a>
								</div>
							</div>
							<div class="card team m-3">
								<img class="card-img-top team-photo" src="<?php echo get_template_directory_uri(); ?>/img/team/catia-silva.jpg" alt="catia">
								<div class="card-body team-card">
									<p class="team-name">Catia Silva</p>
									<p class="team-description">Marketing & Communications</p>
								</div>
								<div class="social-media-team">
									<a href="https://www.facebook.com/catia.silva.1426" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="face-logo"></a>
									<a href="https://www.instagram.com/catiasgs" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="insta-logo"></a>
									<a href="https://www.linkedin.com/in/catia-silva" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" alt="linkedin-logo"></a>
									<a href="https://twitter.com/catiasgs" target="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twiter.png" alt="twitter-logo"></a>
								</div>
							</div>
						</div>
						<div class="col"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="services" class="page-section">
		<div class="container-fluid">
			<div class="title-holder">
				<h2>Serviços</h2>
			</div>
					<div class="row service-icons">
						<div class="col-lg-2 col-md-3">
							<div class="service-symbol-frame">
								<div class="service-symbol-text">
									Representaçao
								</div>
								<img src="<?php echo get_template_directory_uri(); ?>/img/rep.svg" alt="rep"></a>
							</div>
						</div>
						<div class="col-lg-2 col-md-3">
							<div class="service-symbol-frame">
								<div class="service-symbol-text">
									Intermediaçao
								</div>
								<img src="<?php echo get_template_directory_uri(); ?>/img/intermed.svg" alt="intermed"></a>
							</div>	
						</div>
						<div class="col-lg-2 col-md-3">

							<div class="service-symbol-text">
								Assessoria de Comunicaçao
							</div>
							<div class="service-symbol-frame">
								<img src="<?php echo get_template_directory_uri(); ?>/img/comm.svg" alt="comm"></a>
							</div>	
						</div>
						<div class="col-lg-2 col-md-3">
							<div class="service-symbol-text">
								Marcas
							</div>
							<div class="service-symbol-frame">
								<img src="<?php echo get_template_directory_uri(); ?>/img/brand.svg" alt="brands"></a>
							</div>	

						</div>
						<div class="col-lg-2 col-md-3">
							<div class="service-symbol-text">
								Eventos Desportivos
							</div>
							<div class="service-symbol-frame">
								<img src="<?php echo get_template_directory_uri(); ?>/img/event.svg" alt="events"></a>
							</div>	
						</div>
						<div class="col-lg-2 col-md-3">
							<div class="service-symbol-text">
								Assessoria Juridica
							</div>
							<div class="service-symbol-frame">
								<img src="<?php echo get_template_directory_uri(); ?>/img/juri.svg" alt="juri"></a>
							</div>	
						</div>
						<div class="col-lg-2 col-md-3">
							<div class="service-symbol-text">
								Player Performance
							</div>
							<div class="service-symbol-frame">
								<img src="<?php echo get_template_directory_uri(); ?>/img/performance.svg" alt="performance"></a>
							</div>	
						</div>
						<div class="col-lg-2 col-md-3">
							<div class="service-symbol-text">
								Personal Trainer
							</div>
							<div class="service-symbol-frame">
								<img src="<?php echo get_template_directory_uri(); ?>/img/pt.svg" alt="pt"></a>
							</div>	
						</div>
						<div class="col-lg-2 col-md-3">
							<div class="service-symbol-text">
								Nutriçao
							</div>
							<div class="service-symbol-frame">
								<img src="<?php echo get_template_directory_uri(); ?>/img/nutri.svg" alt="nutri"></a>
							</div>	
						</div>
						<div class="col-lg-2 col-md-3">
							<div class="service-symbol-text">
								Mental Coaching
							</div>
							<div class="service-symbol-frame">
								<img src="<?php echo get_template_directory_uri(); ?>/img/mental.svg" alt="mental"></a>
							</div>	
				</div>
			<div class="col"></div>
		</div>
		<div class="row">
			<div class="col"></div>
			<div class="col-lg-7">

				<div class="services-info">
					Procuramos as melhores oportunidades de carreira para as nossas atletas. Gerimos todos os aspectos relacionados com a sua actividade profissional, ocupando-nos de toda a negociação de contratos, de transferências e apoio à atleta.
				</div>
			</div>
			<div class="col"></div>
		</div>
		</div> <!-- .container-fluid -->
	</div> <!-- #services -->

	<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe src="https://player.vimeo.com/video/474648492" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="players" class="page-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col"></div>
				<div class="col-lg-9">
					<div class="title-holder">
						<h2>Teammates</h2>
					</div>
					<ul class="nav d-flex justify-content-center" id="who-are-we" role="tablist">
						<li>
							<button class="active" id="all-tab" data-toggle="tab" data-target="#all" type="button" role="tab" aria-controls="founder" aria-selected="true">Todas</button>
						</li>
						<li>
							<button id="gk-tab" data-toggle="tab" data-target="#gk" type="button" role="tab" aria-controls="gk" aria-selected="false">Guarda-Redes</button>
						</li>
						<li>
							<button id="def-tab" data-toggle="tab" data-target="#def" type="button" role="tab" aria-controls="def" aria-selected="false">Defesas</button>
						</li>
						<li>
							<button id="med-tab" data-toggle="tab" data-target="#med" type="button" role="tab" aria-controls="med" aria-selected="false">Medios</button>
						</li>
						<li>
							<button id="fw-tab" data-toggle="tab" data-target="#fw" type="button" role="tab" aria-controls="fw" aria-selected="false">Avançadas</button>
						</li>
						<li>
							<button id="coach-tab" data-toggle="tab" data-target="#coach" type="button" role="tab" aria-controls="coach" aria-selected="false">Treinadores</button>
						</li>
					</ul>
				</div>
				<div class="col"></div>
			</div>

			<div class="container-fluid tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
					<div class="row">
						<div class="col"></div>
						<div class="col-lg-9 text-center">
							<div class="card player m-3">
								<div class="card-player-info invisible">
									<div class="card-body player-card-info">
										<p class="player-name">Ines Pereira</p>
										<p class="player-position">Guarda-Redes</p>
										<p class="player-stats">172 CM</p>
										<p class="player-stats">65 KG</p>
										<p class="player-stats">Pé Esquerdo</p>
										<button class="play-button" type="button" data-toggle="modal" data-target="#exampleModal">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2 mt-5">
											<a href="https://www.facebook.com/InesPereiraGR" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook-gold.png" alt="face-logo"></a>
											<a href="https://www.instagram.com/inespereira.12" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram-gold.png" alt="insta-logo"></a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-gold.png" alt="linkedin-logo">
											<a href="https://twitter.com/inespereiraaaaa" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter-gold.png" alt="twitter-logo"></a>
										</div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/download_pdf.png" alt="download">
									</div>
								</div>
								<div class="card-player-photo">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fonte.png" alt="Card image cap">
									<div class="card-body player-card">
										<p class="player-name">Ines Pereira</p>
										<p class="player-position">Guarda-Redes</p>
									</div>
								</div>
							</div>

							<div class="card player m-3">

								<div class="card-player-info invisible">
									<div class="card-body player-card-info">
										<p class="player-name">Rute Costa</p>
										<p class="player-position">Guarda-Redes</p>
										<p class="player-stats">170 CM</p>
										<p class="player-stats">62 KG</p>
										<p class="player-stats">Pé Direito</p>
										<button class="play-button" type="button" data-toggle="modal" data-target="#exampleModal">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2 mt-5">
											<a href="https://www.facebook.com/InesPereiraGR" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook-gold.png" alt="face-logo"></a>
											<a href="https://www.instagram.com/inespereira.12" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram-gold.png" alt="insta-logo"></a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-gold.png" alt="linkedin-logo">
											<a href="https://twitter.com/inespereiraaaaa" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter-gold.png" alt="twitter-logo"></a>
										</div>										<img src="<?php echo get_template_directory_uri(); ?>/img/download_pdf.png" alt="download">
									</div>
								</div>
								<div class="card-player-photo">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fonte.png" alt="Card image cap">
									<div class="card-body player-card">
										<p class="player-name">Rute Costa</p>
										<p class="player-position">Guarda-Redes</p>
									</div>
								</div>
							</div>

							<div class="card player m-3" style="position:relative">
								
								<div class="card-player-info invisible">
									<div class="card-body player-card-info">
										<p class="player-name">Bruna Costa</p>
										<p class="player-position">Defesa Centro</p>
										<p class="player-stats">173 CM</p>
										<p class="player-stats">65 KG</p>
										<p class="player-stats">Pe Direito</p>
										<button class="play-button" type="button" data-toggle="modal" data-target="#exampleModal">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2 mt-5">
											<a href="https://www.facebook.com/InesPereiraGR" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook-gold.png" alt="face-logo"></a>
											<a href="https://www.instagram.com/inespereira.12" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram-gold.png" alt="insta-logo"></a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-gold.png" alt="linkedin-logo">
											<a href="https://twitter.com/inespereiraaaaa" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter-gold.png" alt="twitter-logo"></a>
										</div>										<img src="<?php echo get_template_directory_uri(); ?>/img/download_pdf.png" alt="download">
									</div>
								</div>
								<div class="card-player-photo">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fonte.png" alt="Card image cap">
									<div class="card-body player-card">
										<p class="player-name">Bruna Costa</p>
										<p class="player-position">Defesa</p>
									</div>
								</div>
							</div>
							<div class="card player m-3">
								<div class="card-player-info invisible">
									<div class="card-body player-card-info">
										<p class="player-name">Sofia Silva</p>
										<p class="player-position">Defesa Centro</p>
										<p class="player-stats">169 CM</p>
										<p class="player-stats">63 KG</p>
										<p class="player-stats">Pe Direito</p>
										<button class="play-button" type="button" data-toggle="modal" data-target="#exampleModal">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2 mt-5">
											<a href="https://www.facebook.com/InesPereiraGR" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook-gold.png" alt="face-logo"></a>
											<a href="https://www.instagram.com/inespereira.12" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram-gold.png" alt="insta-logo"></a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-gold.png" alt="linkedin-logo">
											<a href="https://twitter.com/inespereiraaaaa" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter-gold.png" alt="twitter-logo"></a>
										</div>										<img src="<?php echo get_template_directory_uri(); ?>/img/download_pdf.png" alt="download">
									</div>
								</div>
								<div class="card-player-photo">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fonte.png" alt="Card image cap">
									<div class="card-body player-card">
										<p class="player-name">Sofia Silva</p>
										<p class="player-position">Defesa</p>
									</div>
								</div>
							</div>
							<div class="card player m-3">
								<div class="card-player-info invisible">
									<div class="card-body player-card-info">
										<p class="player-name">Monica Mendes</p>
										<p class="player-position">Defesa Direito</p>
										<p class="player-stats">165 CM</p>
										<p class="player-stats">60 KG</p>
										<p class="player-stats">Pe Direito</p>
										<button class="play-button" type="button" data-toggle="modal" data-target="#exampleModal">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2 mt-5">
											<a href="https://www.facebook.com/InesPereiraGR" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook-gold.png" alt="face-logo"></a>
											<a href="https://www.instagram.com/inespereira.12" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram-gold.png" alt="insta-logo"></a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-gold.png" alt="linkedin-logo">
											<a href="https://twitter.com/inespereiraaaaa" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter-gold.png" alt="twitter-logo"></a>
										</div>										<img src="<?php echo get_template_directory_uri(); ?>/img/download_pdf.png" alt="download">
									</div>
								</div>
								<div class="card-player-photo">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fonte.png" alt="Card image cap">
									<div class="card-body player-card">
										<p class="player-name">Monica Mendes</p>
										<p class="player-position">Defesa</p>
									</div>
								</div>
							</div>
							<div class="card player m-3">
								<div class="card-player-info invisible">
									<div class="card-body player-card-info">
										<p class="player-name">Agata Filipa</p>
										<p class="player-position">Defesa Esquerdo</p>
										<p class="player-stats">160 CM</p>
										<p class="player-stats">52 KG</p>
										<p class="player-stats">Pe Esquerdo</p>
										<button class="play-button" type="button" data-toggle="modal" data-target="#exampleModal">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2 mt-5">
											<a href="https://www.facebook.com/InesPereiraGR" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook-gold.png" alt="face-logo"></a>
											<a href="https://www.instagram.com/inespereira.12" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram-gold.png" alt="insta-logo"></a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-gold.png" alt="linkedin-logo">
											<a href="https://twitter.com/inespereiraaaaa" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter-gold.png" alt="twitter-logo"></a>
										</div>										<img src="<?php echo get_template_directory_uri(); ?>/img/download_pdf.png" alt="download">
									</div>
								</div>
								<div class="card-player-photo">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fonte.png" alt="Card image cap">
									<div class="card-body player-card">
										<p class="player-name">Agata Filipa</p>
										<p class="player-position">Defesa</p>
									</div>
								</div>
							</div>
							<div class="card player m-3">
								<div class="card-player-info invisible">
									<div class="card-body player-card-info">
										<p class="player-name">Alicia Correia</p>
										<p class="player-position">Defesa Esquerdo</p>
										<p class="player-stats">160 CM</p>
										<p class="player-stats">53 KG</p>
										<p class="player-stats">Pe Esquerdo</p>
										<button class="play-button" type="button" data-toggle="modal" data-target="#exampleModal">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2 mt-5">
											<a href="https://www.facebook.com/InesPereiraGR" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook-gold.png" alt="face-logo"></a>
											<a href="https://www.instagram.com/inespereira.12" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram-gold.png" alt="insta-logo"></a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-gold.png" alt="linkedin-logo">
											<a href="https://twitter.com/inespereiraaaaa" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter-gold.png" alt="twitter-logo"></a>
										</div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/download_pdf.png" alt="download">
									</div>
								</div>
								<div class="card-player-photo">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fonte.png" alt="Card image cap">
									<div class="card-body player-card">
										<p class="player-name">Alicia Correia</p>
										<p class="player-position">Defesa</p>
									</div>
								</div>
							</div>
							<div class="card player m-3">
								<div class="card-player-info invisible">
									<div class="card-body player-card-info">
										<p class="player-name">Mariana Pinto Rosa</p>
										<p class="player-position">Defesa Direito</p>
										<p class="player-stats">160 CM</p>
										<p class="player-stats">51 KG</p>
										<p class="player-stats">Pe Direito</p>

										<button class="play-button" type="button" data-toggle="modal" data-target="#exampleModal">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2 mt-5">
											<a href="https://www.facebook.com/InesPereiraGR" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook-gold.png" alt="face-logo"></a>
											<a href="https://www.instagram.com/inespereira.12" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram-gold.png" alt="insta-logo"></a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-gold.png" alt="linkedin-logo">
											<a href="https://twitter.com/inespereiraaaaa" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter-gold.png" alt="twitter-logo"></a>
										</div>										<img src="<?php echo get_template_directory_uri(); ?>/img/download_pdf.png" alt="download">
									</div>
								</div>
								<div class="card-player-photo">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fonte.png" alt="Card image cap">
									<div class="card-body player-card">
										<p class="player-name">Mariana Pinto Rosa</p>
										<p class="player-position">Defesa</p>
									</div>
								</div>
							</div>

							<div class="card player m-3">
								<div class="card-player-info invisible">
									<div class="card-body player-card-info">
										<p class="player-name">Barbara Lopes</p>
										<p class="player-position">Medio Centro</p>
										<p class="player-stats">165 CM</p>
										<p class="player-stats">57 KG</p>
										<p class="player-stats">Pe Esquerdo</p>

										<button class="play-button" type="button" data-toggle="modal" data-target="#exampleModal">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2 mt-5">
											<a href="https://www.facebook.com/InesPereiraGR" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook-gold.png" alt="face-logo"></a>
											<a href="https://www.instagram.com/inespereira.12" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram-gold.png" alt="insta-logo"></a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-gold.png" alt="linkedin-logo">
											<a href="https://twitter.com/inespereiraaaaa" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter-gold.png" alt="twitter-logo"></a>
										</div>										<img src="<?php echo get_template_directory_uri(); ?>/img/download_pdf.png" alt="download">
									</div>
								</div>
								<div class="card-player-photo">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fonte.png" alt="Card image cap">
									<div class="card-body player-card">
										<p class="player-name">Barbara Lopes</p>
										<p class="player-position">Medio</p>
									</div>
								</div>
							</div>

							<div class="card player m-3">
								<div class="card-player-info invisible">
									<div class="card-body player-card-info">
										<p class="player-name">Fatima Pinto</p>
										<p class="player-position">Medio</p>
										<p class="player-stats">170 CM</p>
										<p class="player-stats">60 KG</p>
										<p class="player-stats">Pe Direito</p>

										<button class="play-button" type="button" data-toggle="modal" data-target="#exampleModal">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2 mt-5">
											<a href="https://www.facebook.com/InesPereiraGR" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook-gold.png" alt="face-logo"></a>
											<a href="https://www.instagram.com/inespereira.12" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram-gold.png" alt="insta-logo"></a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-gold.png" alt="linkedin-logo">
											<a href="https://twitter.com/inespereiraaaaa" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter-gold.png" alt="twitter-logo"></a>
										</div>										<img src="<?php echo get_template_directory_uri(); ?>/img/download_pdf.png" alt="download">
									</div>
								</div>
								<div class="card-player-photo">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fonte.png" alt="Card image cap">
									<div class="card-body player-card">
										<p class="player-name">Fatima Pinto</p>
										<p class="player-position">Medio</p>
									</div>
								</div>
							</div>

							<div class="card player m-3">
								<div class="card-player-info invisible">
									<div class="card-body player-card-info">
										<p class="player-name">Joana Martins</p>
										<p class="player-position">Medio Centro</p>
										<p class="player-stats">155 CM</p>
										<p class="player-stats">50 KG</p>
										<p class="player-stats">Pe Direito</p>

										<button class="play-button" type="button" data-toggle="modal" data-target="#exampleModal">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2 mt-5">
											<a href="https://www.facebook.com/InesPereiraGR" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook-gold.png" alt="face-logo"></a>
											<a href="https://www.instagram.com/inespereira.12" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram-gold.png" alt="insta-logo"></a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-gold.png" alt="linkedin-logo">
											<a href="https://twitter.com/inespereiraaaaa" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter-gold.png" alt="twitter-logo"></a>
										</div>										<img src="<?php echo get_template_directory_uri(); ?>/img/download_pdf.png" alt="download">
									</div>
								</div>
								<div class="card-player-photo">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fonte.png" alt="Card image cap">
									<div class="card-body player-card">
										<p class="player-name">Joana Martins</p>
										<p class="player-position">Medio</p>
									</div>
								</div>
							</div>

							<div class="card player m-3">
								<div class="card-player-info invisible">
									<div class="card-body player-card-info">
										<p class="player-name">Margarida Sousa</p>
										<p class="player-position">Medio Centro</p>
										<p class="player-stats">168 CM</p>
										<p class="player-stats">60 KG</p>
										<p class="player-stats">Pe Direito</p>

										<button class="play-button" type="button" data-toggle="modal" data-target="#exampleModal">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2 mt-5">
											<a href="https://www.facebook.com/InesPereiraGR" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook-gold.png" alt="face-logo"></a>
											<a href="https://www.instagram.com/inespereira.12" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram-gold.png" alt="insta-logo"></a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-gold.png" alt="linkedin-logo">
											<a href="https://twitter.com/inespereiraaaaa" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter-gold.png" alt="twitter-logo"></a>
										</div>										<img src="<?php echo get_template_directory_uri(); ?>/img/download_pdf.png" alt="download">
									</div>
								</div>
								<div class="card-player-photo">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fonte.png" alt="Card image cap">
									<div class="card-body player-card">
										<p class="player-name">Margarida Sousa</p>
										<p class="player-position">Medio</p>
									</div>
								</div>
							</div>

							<div class="card player m-3">
								<div class="card-player-info invisible">
									<div class="card-body player-card-info">
										<p class="player-name">Mariana Jaleca</p>
										<p class="player-position">Avançado</p>
										<p class="player-stats">163 CM</p>
										<p class="player-stats">50 KG</p>
										<p class="player-stats">Pe Direito</p>

										<button class="play-button" type="button" data-toggle="modal" data-target="#exampleModal">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2 mt-5">
											<a href="https://www.facebook.com/InesPereiraGR" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook-gold.png" alt="face-logo"></a>
											<a href="https://www.instagram.com/inespereira.12" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram-gold.png" alt="insta-logo"></a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-gold.png" alt="linkedin-logo">
											<a href="https://twitter.com/inespereiraaaaa" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter-gold.png" alt="twitter-logo"></a>
										</div>										<img src="<?php echo get_template_directory_uri(); ?>/img/download_pdf.png" alt="download">
									</div>
								</div>
								<div class="card-player-photo">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fonte.png" alt="Card image cap">
									<div class="card-body player-card">
										<p class="player-name">Mariana Jaleca</p>
										<p class="player-position">Avançado</p>
									</div>
								</div>
							</div>

							<div class="card player m-3">
								<div class="card-player-info invisible">
									<div class="card-body player-card-info">
										<p class="player-name">Francisca Cardoso</p>
										<p class="player-position">Ponta de Lança</p>
										<p class="player-stats">174 CM</p>
										<p class="player-stats">56 KG</p>
										<p class="player-stats">Pe Direito</p>

										<button class="play-button" type="button" data-toggle="modal" data-target="#exampleModal">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2 mt-5">
											<a href="https://www.facebook.com/InesPereiraGR" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook-gold.png" alt="face-logo"></a>
											<a href="https://www.instagram.com/inespereira.12" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram-gold.png" alt="insta-logo"></a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-gold.png" alt="linkedin-logo">
											<a href="https://twitter.com/inespereiraaaaa" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter-gold.png" alt="twitter-logo"></a>
										</div>										<img src="<?php echo get_template_directory_uri(); ?>/img/download_pdf.png" alt="download">
									</div>
								</div>
								<div class="card-player-photo">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fonte.png" alt="Card image cap">
									<div class="card-body player-card">
										<p class="player-name">Francisca Cardoso</p>
										<p class="player-position">Avançado</p>
									</div>
								</div>
							</div>

							<div class="card player m-3">
								<div class="card-player-info invisible">
									<div class="card-body player-card-info">
										<p class="player-name">Carolina Pimenta</p>
										<p class="player-position">Defesa Direito</p>
										<p class="player-stats">158 CM</p>
										<p class="player-stats">51 KG</p>
										<p class="player-stats">Pe Direito</p>

										<button class="play-button" type="button" data-toggle="modal" data-target="#exampleModal">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2 mt-5">
											<a href="https://www.facebook.com/InesPereiraGR" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook-gold.png" alt="face-logo"></a>
											<a href="https://www.instagram.com/inespereira.12" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram-gold.png" alt="insta-logo"></a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-gold.png" alt="linkedin-logo">
											<a href="https://twitter.com/inespereiraaaaa" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter-gold.png" alt="twitter-logo"></a>
										</div>										<img src="<?php echo get_template_directory_uri(); ?>/img/download_pdf.png" alt="download">
									</div>
								</div>
								<div class="card-player-photo">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fonte.png" alt="Card image cap">
									<div class="card-body player-card">
										<p class="player-name">Carolina Pimenta</p>
										<p class="player-position">Defesa</p>
									</div>
								</div>
							</div>

							<div class="card player m-3">
								<div class="card-player-info invisible">
									<div class="card-body player-card-info">
										<p class="player-name">Bruna Ramos</p>
										<p class="player-position">Defesa Direito</p>
										<p class="player-stats">172 CM</p>
										<p class="player-stats">53 KG</p>
										<p class="player-stats">Pe Direito</p>

										<button class="play-button" type="button" data-toggle="modal" data-target="#exampleModal">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2 mt-5">
											<a href="https://www.facebook.com/InesPereiraGR" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook-gold.png" alt="face-logo"></a>
											<a href="https://www.instagram.com/inespereira.12" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram-gold.png" alt="insta-logo"></a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-gold.png" alt="linkedin-logo">
											<a href="https://twitter.com/inespereiraaaaa" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter-gold.png" alt="twitter-logo"></a>
										</div>										<img src="<?php echo get_template_directory_uri(); ?>/img/download_pdf.png" alt="download">
									</div>
								</div>
								<div class="card-player-photo">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fonte.png" alt="Card image cap">
									<div class="card-body player-card">
										<p class="player-name">Bruna Ramos</p>
										<p class="player-position">Defesa</p>
									</div>
								</div>
							</div>

							<div class="card player m-3">
								<div class="card-player-info invisible">
									<div class="card-body player-card-info">
										<p class="player-name">Vera Cid</p>
										<p class="player-position">Medio Centro</p>
										<p class="player-stats">163 CM</p>
										<p class="player-stats">57 KG</p>
										<p class="player-stats">Pe Direito</p>

										<button class="play-button" type="button" data-toggle="modal" data-target="#exampleModal">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2 mt-5">
											<a href="https://www.facebook.com/InesPereiraGR" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook-gold.png" alt="face-logo"></a>
											<a href="https://www.instagram.com/inespereira.12" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram-gold.png" alt="insta-logo"></a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-gold.png" alt="linkedin-logo">
											<a href="https://twitter.com/inespereiraaaaa" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter-gold.png" alt="twitter-logo"></a>
										</div>										<img src="<?php echo get_template_directory_uri(); ?>/img/download_pdf.png" alt="download">
									</div>
								</div>
								<div class="card-player-photo">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fonte.png" alt="Card image cap">
									<div class="card-body player-card">
										<p class="player-name">Vera Cid</p>
										<p class="player-position">Medio</p>
									</div>
								</div>
							</div>

							<div class="card player m-3">
								<div class="card-player-info invisible">
									<div class="card-body player-card-info">
										<p class="player-name">Luana Barata</p>
										<p class="player-position">Medio Centro</p>
										<p class="player-stats">159 CM</p>
										<p class="player-stats">52 KG</p>
										<p class="player-stats">Pe Direito</p>

										<button class="play-button" type="button" data-toggle="modal" data-target="#exampleModal">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>

										<div class="social-media-player mx-2 mt-5">
											<a href="https://www.facebook.com/luana.barata.10" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook-gold.png" alt="face-logo"></a>
											<a href="https://www.instagram.com/_luanabarata21_" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram-gold.png" alt="insta-logo"></a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-gold.png" alt="linkedin-logo">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/twitter-gold.png" alt="twitter-logo">
										</div>										
										<img src="<?php echo get_template_directory_uri(); ?>/img/download_pdf.png" alt="download">
									</div>
								</div>
								<div class="card-player-photo">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fonte.png" alt="Card image cap">
									<div class="card-body player-card">
										<p class="player-name">Luana Barata</p>
										<p class="player-position">Medio</p>
									</div>
								</div>
							</div>

							<div class="card player m-3">
								<div class="card-player-info invisible">
									<div class="card-body player-card-info">
										<p class="player-name">Clarinha</p>
										<p class="player-position">Medio Centro</p>
										<p class="player-stats">160 CM</p>
										<p class="player-stats">55 KG</p>
										<p class="player-stats">Pe Esquerdo</p>

										<button class="play-button" type="button" data-toggle="modal" data-target="#exampleModal">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button> 
										<div class="social-media-player mx-2 mt-5">
											<a href="https://www.facebook.com/Clarinhaa10" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook-gold.png" alt="face-logo"></a>
											<a href="https://www.instagram.com/claarinha_10" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram-gold.png" alt="insta-logo"></a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-gold.png" alt="linkedin-logo">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/twitter-gold.png" alt="twitter-logo"></a>
										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_Clarinha.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/download_pdf.png" alt="download"></a>
									</div>
								</div>
								<div class="card-player-photo">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fonte.png" alt="Card image cap">
									<div class="card-body player-card">
										<p class="player-name">Clarinha</p>
										<p class="player-position">Medio</p>
									</div>
								</div>
							</div>

							<div class="card player m-3">
								<div class="card-player-info invisible">
									<div class="card-body player-card-info">
										<p class="player-name">Mafalda Mariano</p>
										<p class="player-position">Medio Ofensivo</p>
										<p class="player-stats">156 CM</p>
										<p class="player-stats">42 KG</p>
										<p class="player-stats">Pe Esquerdo</p>

										<button class="play-button" type="button" data-toggle="modal" data-target="#exampleModal">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2 mt-5">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/facebook-gold.png" alt="face-logo">
											<a href="https://www.instagram.com/mafalda.11" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram-gold.png" alt="insta-logo"></a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-gold.png" alt="linkedin-logo">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/twitter-gold.png" alt="twitter-logo">
										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_MafaldaMariano.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/download_pdf.png" alt="download"></a>
									</div>
								</div>
								<div class="card-player-photo">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fonte.png" alt="Card image cap">
									<div class="card-body player-card">
										<p class="player-name">Mafalda Mariano</p>
										<p class="player-position">Medio</p>
									</div>
								</div>
							</div>

							<div class="card player m-3">
								<div class="card-player-info invisible">
									<div class="card-body player-card-info">
										<p class="player-name">Maria Ferreira</p>
										<p class="player-position">Extremo Esquerdo</p>
										<p class="player-stats">155 CM</p>
										<p class="player-stats">41 KG</p>
										<p class="player-stats">Pe Direito</p>

										<button class="play-button" type="button" data-toggle="modal" data-target="#exampleModal">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2 mt-5">
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/facebook-gold.png" alt="face-logo">
											<a href="https://www.instagram.com/mariagarciaferreira_02" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram-gold.png" alt="insta-logo"></a>
											<img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-gold.png" alt="linkedin-logo">
											<a href="https://twitter.com/mariagf0299" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter-gold.png" alt="twitter-logo"></a>
										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_MariaFerreira.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/download_pdf.png" alt="download"></a>
									</div>
								</div>
								<div class="card-player-photo">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fonte.png" alt="Card image cap">
									<div class="card-body player-card">
										<p class="player-name">Maria Ferreira</p>
										<p class="player-position">Avançado</p>
									</div>
								</div>
							</div>

							<div class="card player m-3">
								<div class="card-player-info invisible">
									<div class="card-body player-card-info">
										<p class="player-name">Mariana Cabral</p>
										<p class="player-position">Treinadora</p>
										
										<button class="play-button" type="button" data-toggle="modal" data-target="#exampleModal">
											<img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="play button">
										</button>
										<div class="social-media-player mx-2 mt-5">
											<a href="#" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/facebook-gold.png" alt="face-logo"></a>
											<a href="https://www.instagram.com/marianammvcabral" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/instagram-gold.png" alt="insta-logo"></a>
											<a href="https://www.linkedin.com/in/marianamcabral" targer="_blank"><img class="low-opacity-fixed" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-gold.png" alt="linkedin-logo"></a>
											<a href="https://twitter.com/marianacabral" targer="_blank"><img class="low-opacity" src="<?php echo get_template_directory_uri(); ?>/img/twitter-gold.png" alt="twitter-logo"></a>
										</div>										
										<a href="<?php echo get_template_directory_uri(); ?>/cvs/CV_RuteCosta.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/download_pdf.png" alt="download"></a>
									</div>
								</div>
								<div class="card-player-photo">
									<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/fonte.png" alt="Card image cap">
									<div class="card-body player-card">
										<p class="player-name">Mariana Cabral</p>
										<p class="player-position">Treinadora</p>
									</div>
								</div>
							</div>
						</div>	
						<div class="col"></div>
					</div>	
				</div>
				<div class="tab-pane fade" id="gk" role="tabpanel" aria-labelledby="gk-tab">
					<div class="row">
						<div class="col"></div>
						<div class="col-lg-9">gk
						</div>
						<div class="col"></div>
					</div>	
				</div>	
				<div class="tab-pane fade" id="def" role="tabpanel" aria-labelledby="def-tab">
					<div class="row">
						<div class="col"></div>
						<div class="col-lg-9">def
						</div>
						<div class="col"></div>
					</div>	
				</div>	
				<div class="tab-pane fade" id="med" role="tabpanel" aria-labelledby="med-tab">
					<div class="row">
						<div class="col"></div>
						<div class="col-lg-9">med
						</div>
						<div class="col"></div>
					</div>	
				</div>	
				<div class="tab-pane fade" id="fw" role="tabpanel" aria-labelledby="fw-tab">
					<div class="row">
						<div class="col"></div>
						<div class="col-lg-9">fw
						</div>
						<div class="col"></div>
					</div>	
				</div>	
				<div class="tab-pane fade" id="coach" role="tabpanel" aria-labelledby="coach-tab">
					<div class="row">
						<div class="col"></div>
						<div class="col-lg-9">coach
						</div>
						<div class="col"></div>
					</div>	
				</div>
			</div>
		</div>
	</div> <!-- #players -->

	<div id="news" class="page-section">
		<div class="container-fluid">
			<div class="title-holder">
				<h2>Noticias</h2>
			</div>

			<div class="row">
				<div class="col"></div>
				<div class="col-lg-8 text-center">
					<main class="site-main" id="main">
						<?php
						if ( have_posts() ) {
							// Start the Loop.
							while ( have_posts() ) {
								the_post();

								/*
								* Include the Post-Format-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/
								get_template_part( 'loop-templates/content', get_post_format() );
							}
						} else {
							get_template_part( 'loop-templates/content', 'none' );
						}
						?>

					</main>
				</div>
				<div class="col"></div>
			</div>
		</div> <!-- .container-fluid -->
	</div> <!-- #news -->

	<div id="partners" class="page-section">
			<div class="title-holder">
				<h2>Parceiros</h2>
			</div>

			<div class="container text-center mt-6">
			<div class="row mx-auto my-auto">
			<div id="carouselExampleControls" class="carousel slide w-100" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<img src="<?php echo get_template_directory_uri(); ?>/img/partners/adidas.png" alt="adidas">		
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/partners/nb.png" alt="adidas">					
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/partners/joma.png" alt="adidas">				
					</div>
					<div class="carousel-item">
						<div class="col-lg-2">
							<img src="<?php echo get_template_directory_uri(); ?>/img/partners/proscout.png" alt="adidas">
						</div>						
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/partners/gearpro.png" alt="adidas">					
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/partners/sp.png" alt="adidas">				
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/partners/zumub.png" alt="adidas">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			</div>
			</div>
	</div>
	
	

</div><!-- #index-wrapper -->

<?php
get_footer();
