<?php

// train to rent

add_action('acf/init', 'our_trains_acf_init');
function our_trains_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'our-trains',
			'title'				=> __('Our trains'),
			'description'		=> __('Our trains block.'),
			'render_callback'	=> 'our_trains_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Our trains', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function our_trains_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
