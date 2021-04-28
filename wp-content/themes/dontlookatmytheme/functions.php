<?php
add_action( 'after_setup_theme', 'dontlookatmytheme_theme_support' );
add_action( 'init', 'dontlookatmytheme_menus' );

function dontlookatmytheme_theme_support() {
    /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
}

/**
 * Register navigation menus uses wp_nav_menu in one place.
 */
function dontlookatmytheme_menus() {
	$locations = array(
		'primary' => __( 'Desktop Horizontal Menu', 'dontlookatmytheme' ),
	);

	register_nav_menus( $locations );
}