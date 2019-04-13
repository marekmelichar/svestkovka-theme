<?php

/**
 * Add scripts & styles
 */
// add_filter( 'wpcf7_load_js', '__return_false' );
// add_filter( 'wpcf7_load_css', '__return_false' );

add_action('wp_enqueue_scripts', 'default_theme_scripts');
function default_theme_scripts()
{




	// CSS

	wp_enqueue_style( 'bootstrapCSS', get_template_directory_uri() . '/css/bootstrap.min.css' );

	wp_enqueue_style( 'slickCSS', get_template_directory_uri() . '/css/slick.min.css' );
	wp_enqueue_style( 'slickThemeCSS', get_template_directory_uri() . '/css/slick-theme.min.css' );

	wp_enqueue_style( 'jquery-ui-CSS', get_template_directory_uri() . '/css/jquery-ui/jquery-ui-1.9.2.custom.min.css' );

	wp_enqueue_style( 'lightbox-gallery-CSS', get_template_directory_uri() . '/lightbox-gallery/css/lightbox.min.css' );

	wp_enqueue_style(
		'default-style', get_stylesheet_uri()
	);

	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );






	// JS

	wp_enqueue_script( 'bootstrapJS', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'slickJS', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'jquery-ui-js', get_template_directory_uri() . '/js/jquery-ui/jquery-ui-1.9.2.custom.min.js', array( 'jquery' ), '', true );


	// wp_enqueue_script( 'isMobileJS', get_template_directory_uri() . '/js/ismobile.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'equal-height-js', get_template_directory_uri() . '/js/equal-height.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'lightbox-gallery-js', get_template_directory_uri() . '/lightbox-gallery/js/lightbox.min.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'scrolldepth-js', get_template_directory_uri() . '/analytics/jquery.scrolldepth.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'screentime-js', get_template_directory_uri() . '/analytics/jquery.screentime.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'riveted-js', get_template_directory_uri() . '/analytics/jquery.riveted.min.js', array( 'jquery' ), '', true );






	// only load CONTACT FORM 7 on contact page
	// if ( is_page('contact') )
	// {
	// 	if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
	// 		wpcf7_enqueue_scripts();
	// 	}
	//
	// 	if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
	// 		wpcf7_enqueue_styles();
	// 	}
	// }
}


// load JQUERY in FOOTER
// function starter_scripts() {
//     wp_deregister_script( 'jquery' );
//     // wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
// 		wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery/jquery.min.js', array(), '3.3.1', false );
//
//     wp_enqueue_script( 'jquery' );
// }
// add_action( 'wp_enqueue_scripts', 'starter_scripts' );



// replace jQuery in core WP, with custom latest version :
function replace_core_jquery_version() {
    wp_deregister_script( 'jquery' );
    wp_deregister_script( 'jquery-ui-core' );

		wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery/jquery.min.js', array(), '3.3.1', false ); // jquery has to go to header, because plugins are depending on it
		wp_enqueue_script( 'jquery' );
		// wp_enqueue_script( 'jquery-ui-datepicker' );

		// wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.0.0.js', array(), '3.3.1', true );
		// wp_register_script( 'jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.0.1.js', array(), '3.0.1', true );
}
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );
