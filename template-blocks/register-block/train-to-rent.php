<?php

// train to rent

add_action('acf/init', 'train_to_rent_acf_init');
function train_to_rent_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'train-to-rent',
			'title'				=> __('Train to rent'),
			'description'		=> __('Train to rent block.'),
			'render_callback'	=> 'train_to_rent_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Train to rent', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function train_to_rent_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
