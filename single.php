<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
get_header('navbar');

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="post-header-holder"
	<?php if ( has_post_thumbnail( ) ) { ?>
		style="background-image:url(<?php echo get_the_post_thumbnail_url( ); ?>);" <?php } ?> >
</div>

<div class="post-category text-center">
	<button class="button-back">Voltar</button>
	<img class="mr-1" src="<?php echo get_template_directory_uri(); ?>/img/news/transfers-big.png" alt="insta-logo">
	<h5 class="ml-1"><?php echo get_the_category( )[0]->cat_name; ?></h5>
</div>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'single' );
					get_post_gallery_images( );
				}
				?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php wp_footer(); ?>