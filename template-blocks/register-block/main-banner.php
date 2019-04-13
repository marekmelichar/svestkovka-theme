<?php

// Main banner block

add_action('acf/init', 'main_banner_acf_init');
function main_banner_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'main-banner',
			'title'				=> __('Main banner'),
			'description'		=> __('Main banner block.'),
			'render_callback'	=> 'main_banner_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Main banner', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function main_banner_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
