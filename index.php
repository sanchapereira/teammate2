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
							É verdade. E foi por isso que quando pendurei as chuteiras e tive oportunidade, me tornei Directora Desportiva do Sporting Clube de Portugal. Para profissionalizar e dar às jogadoras todas as condições que eu nunca tive. Mas, para mim, isto não foi suficiente. Queria ajudar mais e todas as jogadoras, independentemente do clube. 
							</p>
							<p class="founder-text">
							Fundei, assim, a TeamMate Football Management, onde todos os dias faço entrar em campo os meus três lados: o de Jogadora, o de Directora Desportiva e o de Agente. 
							</p>
							<p class="founder-text">
							Por ter sido Jogadora, sei bem quais são as tuas necessidades dentro e fora das quatro linhas. 
							</p>
							<p class="founder-text">
							Por ter sido Directora Desportiva, sei bem o que os clubes procuram, como pensam e conheço todo o processo logístico e burocrático. 
							</p>
							<p class="founder-text">
							Por ser Agente, sei bem como é importante ter um TeamMate que esteja sempre ao nosso lado e nos ajude a fazer as escolhas certas, rumo ao sucesso. Foi o que eu nunca tive, mas que quero que tu tenhas!
							</p>
						</div>
						<div class="col-lg-3">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/founder.png" alt="founder-picture">
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
				<div class="tab-pane fade" id="teammate" role="tabpanel" aria-labelledby="teammate-tab">
					<div class="row">
						<div class="col"></div>
						<div class="col-lg-5">
							<span id="founder-name">Teammate</span>
							<p class="founder-title">Cenas</p>
							<p class="founder-text">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu metus at sem tempor accumsan a in turpis. Vivamus nec purus ut tellus fermentum fringilla. Pellentesque nec pellentesque ex. Nulla vestibulum finibus pharetra. Nunc pretium efficitur lacus, ut semper mauris consectetur sed. Integer consectetur vitae dolor ut interdum. Integer sit amet rhoncus dolor.
							</p>
							<p class="founder-text">
							Proin risus sem, egestas ut sagittis ac, elementum eu risus. Nunc sed aliquet nisl. Donec et tempor orci. Nam at elementum nisi. Curabitur id eros tellus. Pellentesque massa felis, fringilla non consequat eget, facilisis non velit. Nam et diam purus.						
							</p>
							<p class="founder-text">
							Vivamus id commodo mauris. Morbi condimentum lorem tristique condimentum varius. Suspendisse nec nunc vehicula nunc tristique interdum sit amet eu nulla. Maecenas sagittis augue in arcu gravida rhoncus. Aliquam maximus turpis eu metus ornare aliquet. Praesent vehicula, augue at efficitur congue, ligula urna laoreet nibh, vitae posuere lorem lectus ut nisl. Donec turpis ipsum, pulvinar sit amet leo ut, auctor tempus sapien. Mauris tortor odio, fringilla sed bibendum ut, sodales auctor justo. Aliquam sit amet libero bibendum, laoreet mi iaculis, ornare lacus. Nullam non semper nibh. Fusce leo orci, aliquet id magna nec, iaculis congue sapien. Sed nec venenatis magna, vel pretium velit. Vestibulum fringilla aliquet commodo. Integer sed eleifend neque.						
							</p>
						</div>
						<div class="col-lg-3">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/founder.png" alt="founder-picture">
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
						<div class="col-lg-5">
							<span id="founder-name">Equipa</span>
							<p class="founder-title">Cenas</p>
							<p class="founder-text">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu metus at sem tempor accumsan a in turpis. Vivamus nec purus ut tellus fermentum fringilla. Pellentesque nec pellentesque ex. Nulla vestibulum finibus pharetra. Nunc pretium efficitur lacus, ut semper mauris consectetur sed. Integer consectetur vitae dolor ut interdum. Integer sit amet rhoncus dolor.
							</p>
							<p class="founder-text">
							Proin risus sem, egestas ut sagittis ac, elementum eu risus. Nunc sed aliquet nisl. Donec et tempor orci. Nam at elementum nisi. Curabitur id eros tellus. Pellentesque massa felis, fringilla non consequat eget, facilisis non velit. Nam et diam purus.						
							</p>
							<p class="founder-text">
							Vivamus id commodo mauris. Morbi condimentum lorem tristique condimentum varius. Suspendisse nec nunc vehicula nunc tristique interdum sit amet eu nulla. Maecenas sagittis augue in arcu gravida rhoncus. Aliquam maximus turpis eu metus ornare aliquet. Praesent vehicula, augue at efficitur congue, ligula urna laoreet nibh, vitae posuere lorem lectus ut nisl. Donec turpis ipsum, pulvinar sit amet leo ut, auctor tempus sapien. Mauris tortor odio, fringilla sed bibendum ut, sodales auctor justo. Aliquam sit amet libero bibendum, laoreet mi iaculis, ornare lacus. Nullam non semper nibh. Fusce leo orci, aliquet id magna nec, iaculis congue sapien. Sed nec venenatis magna, vel pretium velit. Vestibulum fringilla aliquet commodo. Integer sed eleifend neque.						
							</p>
						</div>
						<div class="col-lg-3">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/founder.png" alt="founder-picture">
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
			</div>
		</div>
	</div>

	<div id="services" class="page-section">
		<div class="container-fluid">
			<div class="title-holder">
				<h2>Serviços</h2>
			</div>
			<div class="row">
				<div class="col"></div>
				<div class="col-lg-8 text-center">

					<div class="row service-icons">
						<div class="col"></div>
						<div class="col-lg-2">
							<div class="service-symbol-frame">
								<div class="service-symbol-text">
									Representaçao
								</div>
								<img class="service-symbol" src="<?php echo get_template_directory_uri(); ?>/img/rep.svg" alt="rep"></a>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="service-symbol-frame">
								<div class="service-symbol-text">
									Intermediaçao
								</div>
								<img class="service-symbol" src="<?php echo get_template_directory_uri(); ?>/img/intermed.svg" alt="intermed"></a>
							</div>	
						</div>
						<div class="col-lg-2">

							<div class="service-symbol-text">
								Assessoria de Comunicaçao
							</div>
							<div class="service-symbol-frame">
								<img class="service-symbol" src="<?php echo get_template_directory_uri(); ?>/img/comm.svg" alt="comm"></a>
							</div>	
						</div>
						<div class="col-lg-2">
							<div class="service-symbol-text">
								Marcas
							</div>
							<div class="service-symbol-frame">
								<img class="service-symbol" src="<?php echo get_template_directory_uri(); ?>/img/brand.svg" alt="brands"></a>
							</div>	

						</div>
						<div class="col-lg-2">
							<div class="service-symbol-text">
								Eventos Desportivos
							</div>
							<div class="service-symbol-frame">
								<img class="service-symbol" src="<?php echo get_template_directory_uri(); ?>/img/event.svg" alt="events"></a>
							</div>	
						</div>
						<div class="col"></div>
					</div>

					<div class="row service-icons">
						<div class="col"></div>
						<div class="col-lg-2">
							<div class="service-symbol-text">
								Assessoria Juridica
							</div>
							<div class="service-symbol-frame">
								<img class="service-symbol" src="<?php echo get_template_directory_uri(); ?>/img/juri.svg" alt="juri"></a>
							</div>	
						</div>
						<div class="col-lg-2">
							<div class="service-symbol-text">
								Player Performance
							</div>
							<div class="service-symbol-frame">
								<img class="service-symbol" src="<?php echo get_template_directory_uri(); ?>/img/performance.svg" alt="performance"></a>
							</div>	
						</div>
						<div class="col-lg-2">
							<div class="service-symbol-text">
								Personal Trainer
							</div>
							<div class="service-symbol-frame">
								<img class="service-symbol" src="<?php echo get_template_directory_uri(); ?>/img/pt.svg" alt="pt"></a>
							</div>	
						</div>
						<div class="col-lg-2">
							<div class="service-symbol-text">
								Nutriçao
							</div>
							<div class="service-symbol-frame">
								<img class="service-symbol" src="<?php echo get_template_directory_uri(); ?>/img/nutri.svg" alt="nutri"></a>
							</div>	
						</div>
						<div class="col-lg-2">
							<div class="service-symbol-text">
								Mental Coaching
							</div>
							<div class="service-symbol-frame">
								<img class="service-symbol" src="<?php echo get_template_directory_uri(); ?>/img/mental.svg" alt="mental"></a>
							</div>	
						</div>
						<div class="col"></div>
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
	
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

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

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
