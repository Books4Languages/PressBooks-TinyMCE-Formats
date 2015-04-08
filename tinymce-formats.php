<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://on-lingua.com
 * @since             0.1
 * @package           TinyMCE_Formats
 *
 * @wordpress-plugin
 * Plugin Name:       TinyMCE Formats
 * Plugin URI:        http://on-lingua.com/
 * Description:       Adds learning formats (i.e. “Form”, “Use” or “Exercise”) shaped as boxes to the TinyMCE editor.
 * Version:           0.2
 * Author:            My Language Skills
 * Author URI:        http://on-lingua.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       tinymce-formats
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-tinymce-formats-activator.php
 */
function activate_tinymce_formats() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-tinymce-formats-activator.php';
	TinyMCE_Formats_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-tinymce-formats-deactivator.php
 */
function deactivate_tinymce_formats() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-tinymce-formats-deactivator.php';
	TinyMCE_Formats_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_tinymce_formats' );
register_deactivation_hook( __FILE__, 'deactivate_tinymce_formats' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-tinymce-formats.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.1
 */
function run_tinymce_formats() {

	$plugin = new TinyMCE_Formats();
	$plugin->run();

}
run_tinymce_formats();
