<?php

// newsletter-inline-form

add_action('acf/init', 'newsletter_inline_form_acf_init');
function newsletter_inline_form_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'newsletter-inline-form',
			'title'				=> __('Newsletter inline form'),
			'description'		=> __('Newsletter inline form block.'),
			'render_callback'	=> 'newsletter_inline_form_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Newsletter inline form', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function newsletter_inline_form_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
