<?php
/**
 * Plugin Name: Weichie - Salonkee Widgets
 * Version: 1.0.1
 * Plugin URI: https://weichie.com/plugins/salonkee-widgets
 * Description: Display Salonkee information directly on your WordPress website
 * Author: Weichie.com
 * Author URI: https://weichie.com
 * Requires at least: 6.0.0
 * Tested up to: 6.0.0
 *
 * Text Domain: weichie-salonkee-widgets
 * Domain Path: /lang/
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load plugin class files.
require_once 'includes/class-salonkee-widgets-by-weichie.php';
require_once 'includes/class-salonkee-widgets-by-weichie-settings.php';

// Load plugin libraries.
require_once 'includes/lib/class-salonkee-widgets-by-weichie-admin-api.php';
//require_once 'includes/lib/class-salonkee-widgets-by-weichie-post-type.php';
//require_once 'includes/lib/class-salonkee-widgets-by-weichie-taxonomy.php';

/**
 * Returns the main instance of Salonkee_Widgets_by_Weichie to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Salonkee_Widgets_by_Weichie
 */
function salonkee_widgets_by_weichie() {
	$instance = Salonkee_Widgets_by_Weichie::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = Salonkee_Widgets_by_Weichie_Settings::instance( $instance );
	}

	return $instance;
}

salonkee_widgets_by_weichie();
