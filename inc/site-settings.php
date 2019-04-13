<?php

/**
 * Setup Theme
 */
add_action( 'after_setup_theme', 'ixp_setup' );
function ixp_setup()
{
	/**
	 * Theme Support
	 */
	add_theme_support( 'menus' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	// add_theme_support( 'custom-logo' );


	/**
	 * Menus
	 */
	register_nav_menus(array(
		// 'top_info' => 'Top Info Menu',
		'primary' => 'Primary Menu',
		'mobilemenu1' => 'Mobile Menu 1',
		'mobilemenu2' => 'Mobile Menu 2',
		'footer' => 'Footer Menu'
	));


	/**
	 * Editor Style
	 */
	// add_editor_style( 'css/editor-style.css' );
}


// Add specific CSS class by filter
// add_filter( 'body_class', 'ixp_class_names' );
// function ixp_class_names( $classes )
// {
// 	$slug = get_post_field( 'post_name', get_post() );
// 	$template = esc_html( get_page_template_slug( $post->ID ) );
// 	$temp_string = str_replace(".php", "", $template);
//
// 	$classes = array( $slug, $temp_string );
//
// 	return $classes;
// }


// Turn on 'Kitchen Sink' for all users
add_filter( 'tiny_mce_before_init', 'ixp_unhide_kitchensink' );
function ixp_unhide_kitchensink( $args )
{
	$args['wordpress_adv_hidden'] = false;
	return $args;
}


// Add buttons to the Editor
add_filter('mce_buttons_2', 'ixp_more_mce_buttons');
function ixp_more_mce_buttons( $buttons )
{
	$buttons[] = 'hr';
	// $buttons[] = 'del';
	// $buttons[] = 'sub';
	// $buttons[] = 'sup';
	// $buttons[] = 'anchor';
	// $buttons[] = 'fontselect';
	// $buttons[] = 'fontsizeselect';
	// $buttons[] = 'cleanup';
	// $buttons[] = 'styleselect';

	return $buttons;
}
