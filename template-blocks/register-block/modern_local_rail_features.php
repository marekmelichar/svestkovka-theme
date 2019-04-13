<?php

// modern_local_rail_features

add_action('acf/init', 'modern_local_rail_features_acf_init');
function modern_local_rail_features_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'modern-local-rail-features',
			'title'				=> __('Modern local rail features'),
			'description'		=> __('Modern local rail features block.'),
			'render_callback'	=> 'modern_local_rail_features_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Modern local rail features', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function modern_local_rail_features_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
