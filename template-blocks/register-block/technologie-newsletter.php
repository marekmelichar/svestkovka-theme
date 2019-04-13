<?php

// technologie_newsletter

add_action('acf/init', 'technologie_newsletter_acf_init');
function technologie_newsletter_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'technologie-newsletter',
			'title'				=> __('Technologie newsletter'),
			'description'		=> __('Technologie newsletter block.'),
			'render_callback'	=> 'technologie_newsletter_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Technologie newsletter', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function technologie_newsletter_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
