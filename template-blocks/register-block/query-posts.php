<?php

// query posts block

add_action('acf/init', 'query_posts_acf_init');
function query_posts_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'query-posts',
			'title'				=> __('Query posts'),
			'description'		=> __('Query posts block.'),
			'render_callback'	=> 'query_posts_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Query posts', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function query_posts_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
