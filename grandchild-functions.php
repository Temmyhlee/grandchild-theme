<?php
/**
 * Plugin Name: Grandchild Theme
 * Plugin URI:  https://seothemes.com/plugins/grandchild-theme/
 * Description: Grandchild theme for WordPress built as a plugin.
 * Author:      SEO Themes
 * Author URI:  https://seothemes.com/
 * Version:     1.0.0
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package Grandchild_Theme
 */

add_action( 'wp_print_styles', 'grandchild_add_styles' );
/**
 * Adds our new file with styles.
 *
 * @return void
 */
function grandchild_add_styles() {

	wp_register_style( 'grandchild-style', plugins_url( 'grandchild-styles.css', __FILE__ ), array(), '1.0.0' );

	wp_enqueue_style( 'grandchild-style' );

}

add_action( 'wp_print_scripts', 'grandchild_add_scripts' );
/**
 * Adds our new file with scripts.
 *
 * @return void
 */
function grandchild_add_scripts() {

	wp_register_script( 'grandchild-script', plugins_url( 'grandchild-scripts.js', __FILE__ ), array( 'jquery' ), '1.0.0' );

	wp_enqueue_script( 'grandchild-script' );

}

add_filter( 'template_include', 'grandchild_template_include', 10 );
/**
 * Search for templates in plugin 'templates' dir, and load if exists.
 *
 * @param  string $template Template check.
 * @return string $template Template to use.
 */
function grandchild_template_include( $template ) {

	if ( file_exists( trailingslashit( plugin_dir_path( __FILE__ ) ) . 'templates/' . basename( $template ) ) ) {

		$template = trailingslashit( plugin_dir_path( __FILE__ ) ) . 'templates/' . basename( $template );

	}

	return $template;

}

/**
 * Place any custom PHP functions below this line.
 */
