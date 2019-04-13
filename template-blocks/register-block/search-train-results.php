<?php

// trips

add_action('acf/init', 'search_train_results_acf_init');
function search_train_results_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'search-train-results',
			'title'				=> __('Search train results'),
			'description'		=> __('Search train results block.'),
			'render_callback'	=> 'search_train_results_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Search train results', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function search_train_results_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
