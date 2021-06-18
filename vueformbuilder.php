<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link    https://wpadcenter.com/
 * @since   1.0.0
 * @package Wpadcenter
 *
 * @wordpress-plugin
 * Plugin Name:       VueFormBuilder
 * Plugin URI:        https://google.com
 * Description:       Drag and drop form builder.
 * Version:           1.0.0
 * Author:            WPEka Club
 * Author URI:        https://club.wpeka.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpadcenter
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Enqueue scripts.
 */
function vfb_admin_enqueue_scripts() {
	wp_register_script(
		'vfb-main',
		plugin_dir_url( __FILE__ ) . 'dist/vfb-main.js',
		array(),
		time(),
		true
	);
}

add_action( 'admin_enqueue_scripts', 'vfb_admin_enqueue_scripts' );

/**
 * Register a custom menu page.
 */
function vfb_menu_page() {
	add_menu_page(
		'Vue Form Builder',
		'vfb',
		'manage_options',
		'vfb-menu',
		'vfb_app'
	);
}

/**
 * VFB one page app.
 */
function vfb_app() {
	wp_enqueue_script( 'vfb-main' );
	wp_localize_script(
		'vfb-main',
		'translations',
		array(
			'first'  => 'first',
			'second' => 'second',
		)
	)
	?>
		<div id="vfb-app">
			
		</div>
	<?php
}

add_action( 'admin_menu', 'vfb_menu_page' );

