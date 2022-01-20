<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="card post-news">
  <div class="card-body" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat contain;">
  <img src="<?php get_category_image(wp_get_post_categories( get_the_ID() )) ?>" />
  <div class="row"></div>
  <div class="row"></div>
  <div class="row"></div>
  <div class="row">
  <?php the_title( '<h5 class="card-title">', '</h5>' ); ?>
    <p class="card-text"><?php the_post_summary() ?></p>
    <a href="<?php echo esc_url( get_permalink() ) ?>" class="btn btn-primary">Open</a>
  </div>
  </div>
</div>


