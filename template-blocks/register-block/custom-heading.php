<?php

// custom heading block

add_action('acf/init', 'custom_heading_acf_init');
function custom_heading_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'custom-heading',
			'title'				=> __('Custom heading'),
			'description'		=> __('Custom heading block.'),
			'render_callback'	=> 'custom_heading_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Custom heading', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function custom_heading_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
