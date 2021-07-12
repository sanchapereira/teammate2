<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="footer-text">
		<div class="title-holder">
			<h2>Contactos</h2>
		</div>

		<div class="contact-info text-center">
			<p>+351 914 423 660</p>
			<p class="lowercase">info@teammatefootball.pt</p>
			<p>Lisboa, Portugal</p>
		</div>
		<h5 class="contact-form-title text-center pt-5 pb-1">The Team you will never want to leave</h5>
		<div class="contact-form-holder">
			<?php echo do_shortcode('[contact-form-7 id="14" title="Contact form 1"]'); ?>
		</div>
	</div>

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

