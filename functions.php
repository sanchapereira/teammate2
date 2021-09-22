<?php
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
	'/moshi.php'
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}

pll_register_string( 'custom-string', 'quem-somos', 'test', false );

pll_register_string( 'custom-string', 'fundadora', 'test', false );
pll_register_string( 'custom-string', 'fundadora-p1', 'test', false );
pll_register_string( 'custom-string', 'fundadora-p2', 'test', false );
pll_register_string( 'custom-string', 'fundadora-p3', 'test', false );
pll_register_string( 'custom-string', 'fundadora-p4', 'test', false );
pll_register_string( 'custom-string', 'fundadora-p5', 'test', false );
pll_register_string( 'custom-string', 'fundadora-p6', 'test', false );

pll_register_string( 'custom-string', 'teammate-p1', 'test', false );
pll_register_string( 'custom-string', 'teammate-p2', 'test', false );
pll_register_string( 'custom-string', 'teammate-p3', 'test', false );
pll_register_string( 'custom-string', 'teammate-p4', 'test', false );

pll_register_string( 'custom-string', 'equipa', 'test', false );
pll_register_string( 'custom-string', 'equipa-founder-int', 'test', false );
pll_register_string( 'custom-string', 'equipa-comm', 'test', false );
pll_register_string( 'custom-string', 'equipa-analyst', 'test', false );
pll_register_string( 'custom-string', 'equipa-psicology', 'test', false );
pll_register_string( 'custom-string', 'equipa-nutri', 'test', false );
pll_register_string( 'custom-string', 'equipa-consulting', 'test', false );


pll_register_string( 'custom-string', 'servicos', 'test', false );

pll_register_string( 'custom-string', 'servicos-rep', 'test', false );
pll_register_string( 'custom-string', 'servicos-rep-t', 'test', false );

pll_register_string( 'custom-string', 'servicos-int', 'test', false );
pll_register_string( 'custom-string', 'servicos-int-t', 'test', false );

pll_register_string( 'custom-string', 'servicos-mar', 'test', false );
pll_register_string( 'custom-string', 'servicos-mar-t', 'test', false );

pll_register_string( 'custom-string', 'servicos-com', 'test', false );
pll_register_string( 'custom-string', 'servicos-com-t', 'test', false );

pll_register_string( 'custom-string', 'servicos-jur', 'test', false );
pll_register_string( 'custom-string', 'servicos-jur-t', 'test', false );

pll_register_string( 'custom-string', 'servicos-ren', 'test', false );
pll_register_string( 'custom-string', 'servicos-ren-t', 'test', false );

pll_register_string( 'custom-string', 'servicos-psi', 'test', false );
pll_register_string( 'custom-string', 'servicos-psi-t', 'test', false );

pll_register_string( 'custom-string', 'servicos-nut', 'test', false );
pll_register_string( 'custom-string', 'servicos-nut-t', 'test', false );

pll_register_string( 'custom-string', 'servicos-per', 'test', false );
pll_register_string( 'custom-string', 'servicos-per-t', 'test', false );

pll_register_string( 'custom-string', 'servicos-eve', 'test', false );
pll_register_string( 'custom-string', 'servicos-eve-t', 'test', false );


pll_register_string( 'custom-string', 'team-all', 'test', false );
pll_register_string( 'custom-string', 'team-gks', 'test', false );
pll_register_string( 'custom-string', 'team-gk', 'test', false );
pll_register_string( 'custom-string', 'team-defs', 'test', false );
pll_register_string( 'custom-string', 'team-def', 'test', false );
pll_register_string( 'custom-string', 'team-dd', 'test', false );
pll_register_string( 'custom-string', 'team-de', 'test', false );
pll_register_string( 'custom-string', 'team-dc', 'test', false );
pll_register_string( 'custom-string', 'team-meds', 'test', false );
pll_register_string( 'custom-string', 'team-med', 'test', false );
pll_register_string( 'custom-string', 'team-mc', 'test', false );
pll_register_string( 'custom-string', 'team-mo', 'test', false );
pll_register_string( 'custom-string', 'team-fws', 'test', false );
pll_register_string( 'custom-string', 'team-fw', 'test', false );
pll_register_string( 'custom-string', 'team-ee', 'test', false );
pll_register_string( 'custom-string', 'team-coas', 'test', false );
pll_register_string( 'custom-string', 'team-coa', 'test', false );
pll_register_string( 'custom-string', 'team-coa-fem', 'test', false );
pll_register_string( 'custom-string', 'team-left-foot', 'test', false );
pll_register_string( 'custom-string', 'team-right-foot', 'test', false );

pll_register_string( 'custom-string', 'noticias', 'test', false );
pll_register_string( 'custom-string', 'soon', 'test', false );

pll_register_string( 'custom-string', 'parceiros', 'test', false );

pll_register_string( 'custom-string', 'contactos', 'test', false );
pll_register_string( 'custom-string', 'contactos-lisb', 'test', false );
pll_register_string( 'custom-string', 'contactos-name', 'test', false );
pll_register_string( 'custom-string', 'contactos-phone', 'test', false );
pll_register_string( 'custom-string', 'contactos-subject', 'test', false );
pll_register_string( 'custom-string', 'contactos-message', 'test', false );
pll_register_string( 'custom-string', 'contactos-send', 'test', false );

pll_register_string( 'custom-string', 'subscribe', 'test', false );
