<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
	
	//Site Styles
	wp_enqueue_style( 'site-styles', get_stylesheet_directory_uri() .'/assets/css/site-styles.css', array(), null, 'all' );

	//Site Scripts
	wp_enqueue_script( 'site-scripts', get_stylesheet_directory_uri(). '/assets/js/site-scripts.js', array(), time(), true );
	
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );
