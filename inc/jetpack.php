<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Mr Smile Theme
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function mrsmile_wp_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'mrsmile_wp_jetpack_setup' );
