<?php

// get-mobile-app block

add_action('acf/init', 'get_mobile_app_acf_init');
function get_mobile_app_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'get-mobile-app',
			'title'				=> __('Get mobile app'),
			'description'		=> __('Get mobile app block.'),
			'render_callback'	=> 'get_mobile_app_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Get mobile app', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function get_mobile_app_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
