<?php

// svg-mapa-technologie

add_action('acf/init', 'svg_mapa_technologie_acf_init');
function svg_mapa_technologie_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'svg-mapa-technologie',
			'title'				=> __('Svg mapa technologie'),
			'description'		=> __('Svg mapa technologie block.'),
			'render_callback'	=> 'svg_mapa_technologie_block_render_callback',
			'category'			=> 'widgets',
			'icon'				=> 'admin-tools',
			'keywords'			=> array( 'Svg mapa technologie', 'Gutenberg block' ),
			'mode' => 'edit',
		));
	}
}

function svg_mapa_technologie_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-blocks/block" folder
	if( file_exists( get_theme_file_path("/template-blocks/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-blocks/block/content-{$slug}.php") );
	}
}
