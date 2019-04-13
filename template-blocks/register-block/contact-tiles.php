<?php

// contact-tiles

add_action('acf/init', 'contact_tiles_acf_init');
function contact_tiles_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'contact-tiles',
			'title'				=> __('Contact tiles'),
			'description'		=> __('Contact tiles block.'),
			'render_callback'	=> 'contact_tiles_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Contact tiles', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function contact_tiles_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
