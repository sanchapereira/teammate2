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

	<div class="row">
		<div class="col"></div>
		<div class="col-lg-6 text-center">
			<span id="who-are-we-header">QUEM SOMOS</span>
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

		<div class="container-fluid tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="founder" role="tabpanel" aria-labelledby="founder-tab">
				<div class="row">
					<div class="col"></div>
					<div class="col-lg-5">
						<span id="founder-name">Raquel Sampaio</span>
						<p class="founder-title">Fundadora</p>
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
						
					</div>
					<div class="col"></div>
				</div>	
			</div>	
			<div class="tab-pane fade" id="teammate" role="tabpanel" aria-labelledby="teammate-tab">...a</div>
			<div class="tab-pane fade" id="team" role="tabpanel" aria-labelledby="team-tab">...b</div>
		</div>
	</div>

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
