<?php
/*
Child Theme for Hello Elementor
*/

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	$parenthandle = 'hello_elementor_enqueue_theme_style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
	$theme        = wp_get_theme();
	wp_enqueue_style( $parenthandle,
		get_template_directory_uri() . '/style.css',
		array(),  // If the parent theme code has a dependency, copy it to here.
		$theme->parent()->get( 'Version' )
	);
	wp_enqueue_style( 'my-child-style',
		get_stylesheet_uri(),
		array( $parenthandle ),
		$theme->get( 'Version' ) // This only works if you have Version defined in the style header.
	);
}

function simpleShortCode(){
    return 'Follow us on <a rel="nofollow" href="https://twitter.com/Hostinger?s=20">Twitter</a>';
}
add_shortcode('simpleShortCode', 'simpleShortCode');