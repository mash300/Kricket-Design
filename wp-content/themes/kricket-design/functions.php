<?php
/**
 * Kricket Design theme functions.
 *
 * @package KricketDesign
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load the child-theme stylesheet.
 */
function kricket_design_enqueue_styles(): void {
	wp_enqueue_style(
		'kricket-design-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}

add_action( 'wp_enqueue_scripts', 'kricket_design_enqueue_styles' );