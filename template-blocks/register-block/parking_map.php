<?php

// parking_map

add_action('acf/init', 'parking_map_acf_init');
function parking_map_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'parking-map',
			'title'				=> __('Parking map'),
			'description'		=> __('Parking map block.'),
			'render_callback'	=> 'parking_map_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Parking map', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function parking_map_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
