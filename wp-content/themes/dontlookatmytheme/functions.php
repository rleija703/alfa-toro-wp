<?php
add_action( 'after_setup_theme', 'dontlookatmytheme_theme_support' );
add_action( 'init', 'dontlookatmytheme_menus' );
add_action( 'wp_enqueue_scripts', 'dontlookatmytheme_register_styles' );

add_filter( 'style_loader_src',  'dontlookatmytheme_remove_ver_css_js', 9999, 2 );
add_filter( 'script_loader_src', 'dontlookatmytheme_remove_ver_css_js', 9999, 2 );

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

/**
 * Register and Enqueue Styles.
 */
function dontlookatmytheme_register_styles() {
	wp_enqueue_style( 'dontlookatmytheme-style', get_stylesheet_uri(), array() );
}

function dontlookatmytheme_remove_ver_css_js( $src, $handle ) {
    $handles_with_version = [ 'style' ]; // <-- Adjust to your needs!

    if ( strpos( $src, 'ver=' ) && ! in_array( $handle, $handles_with_version, true ) )
        $src = remove_query_arg( 'ver', $src );

    return $src;
}