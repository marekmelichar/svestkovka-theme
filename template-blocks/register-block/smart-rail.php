<?php

// smart_rail

add_action('acf/init', 'smart_rail_acf_init');
function smart_rail_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'smart-rail',
			'title'				=> __('Smart rail'),
			'description'		=> __('Smart rail block.'),
			'render_callback'	=> 'smart_rail_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Smart rail', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function smart_rail_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
