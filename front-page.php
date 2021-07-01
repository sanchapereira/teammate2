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

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body class="front-page" <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
    <div class="top-header">    
		 <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 pt-xl-7 pt-lg-6 pt-5">
                        <h3 style="color:white">The Team you'll never want to leave is coming</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/large-logo.png" alt="large-logo">
                        </div>
                    </div>
                </div>
            <div class="row">
				<div class="col-lg-12 text-center">
					<div class="">
                        <h5 style="color:white;text-transform:lowercase">info@teammatefootball.pt</h5>
                        <h5 style="color:white">Lisboa, Portugal</h5>
					</div>
				</div>
			</div>
        </div> 
    </div>

</body>

</html>