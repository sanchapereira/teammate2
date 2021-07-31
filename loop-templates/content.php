<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="card">
  <div class="card-body" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size:cover;">
  <img src="<?php get_category_image(wp_get_post_categories( get_the_ID() )) ?>" />
  <?php the_title( '<h5 class="card-title">', '</h5>' ); ?>
    <p class="card-text"><?php the_post_summary() ?></p>
    <a href="<?php echo esc_url( get_permalink() ) ?>" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


