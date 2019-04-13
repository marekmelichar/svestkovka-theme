<?php

// parni_vlak_papousek

add_action('acf/init', 'parni_vlak_papousek_acf_init');
function parni_vlak_papousek_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'parni-vlak-papousek',
			'title'				=> __('Parni vlak papousek'),
			'description'		=> __('Parni vlak papousek block.'),
			'render_callback'	=> 'parni_vlak_papousek_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Parni vlak papousek', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function parni_vlak_papousek_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
