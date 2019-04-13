<?php

// event advertisement block

add_action('acf/init', 'event_advertisement_acf_init');
function event_advertisement_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'event-advertisement-stripe',
			'title'				=> __('Event advertisement'),
			'description'		=> __('Event advertisement block.'),
			'render_callback'	=> 'event_advertisement_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Event advertisement', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function event_advertisement_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
