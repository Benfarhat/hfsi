<?php


/**
 * Enqueue scripts and styles.
 */
function hfsi_scripts() {
	wp_enqueue_style( 'hfsi-style', get_stylesheet_uri() );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css',false,'4.0','all');
  wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/style.css',array('bootstrap'),'1.0','all');
  wp_enqueue_style( 'cdn_font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style( 'cdn_animated-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css');

/*

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'twentyseventeen-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'twentyseventeen-style' ), '1.0' );
		wp_style_add_data( 'twentyseventeen-ie9', 'conditional', 'IE 9' );
	}

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'twentyseventeen-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'twentyseventeen-style' ), '1.0' );
	wp_style_add_data( 'twentyseventeen-ie8', 'conditional', 'lt IE 9' );

	// Load the html5 shiv.
	wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );
*/
	wp_enqueue_script( 'jquery', get_theme_file_uri( '/js/jquery.min.js' ), false, '3.3.1', true );
	wp_enqueue_script( 'popper', get_theme_file_uri( '/js/popper.min.js' ), false, '3.3.1', true );
	wp_enqueue_script( 'bootstrap', get_theme_file_uri( '/js/bootstrap.min.js' ), false, '3.3.1', true );

}
add_action( 'wp_enqueue_scripts', 'hfsi_scripts' );
