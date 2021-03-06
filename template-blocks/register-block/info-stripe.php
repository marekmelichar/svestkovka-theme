<?php

// info-stripe block

add_action('acf/init', 'info_stripe_acf_init');
function info_stripe_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'info-stripe',
			'title'				=> __('Info stripe'),
			'description'		=> __('Info stripe block.'),
			'render_callback'	=> 'info_stripe_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Info stripe', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function info_stripe_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
