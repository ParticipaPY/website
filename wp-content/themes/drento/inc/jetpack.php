<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package drento
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function drento_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'drento_infinite_scroll_render',
		'footer'    => 'page',
	) );
	add_theme_support( 'jetpack-responsive-videos' );
} // end function drento_jetpack_setup
add_action( 'after_setup_theme', 'drento_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function drento_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function drento_infinite_scroll_render
