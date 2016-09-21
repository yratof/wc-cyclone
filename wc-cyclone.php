<?php
/**
Plugin Name: WC Cyclone 
Plugin URI: https://metorik.com
Description: Generate fake data for a WooCommerce store.
Version: 0.1
Author Name: Bryce Adams | Metorik
Author URI: https://bryce.se
*/

add_action( 'plugins_loaded', function() {
	// Composer dependencies
	require_once( 'vendor/autoload.php' );

	// Resources
	require_once( 'inc/helpers.php' );
	require_once( 'inc/generate.php' );

	// WP CLI commands
	if ( defined('WP_CLI') && WP_CLI ) {
		require_once( 'inc/commands.php');
	}
} );