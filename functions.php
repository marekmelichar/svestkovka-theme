<?php

define( 'THEME_DIRECTORY', get_template_directory() );

/**
 * Theme Support and Site Settings
 */
require_once THEME_DIRECTORY . '/inc/site-settings.php';

/**
 * Scripts and Styles
 */
require_once THEME_DIRECTORY . '/inc/enqueue-scripts.php';

/**
 * Cleanup WordPress and Reorder menus
 */
require_once THEME_DIRECTORY . '/inc/cleanup-reorder.php';

/**
 * Hide the main content editor if not necessary
 */
require_once THEME_DIRECTORY . '/inc/hide-the-editor.php';

/**
 * Register Sidebars
 */
// require_once THEME_DIRECTORY . '/inc/sidebars-widgets.php';

/**
 * Shortcodes
 */
// require_once THEME_DIRECTORY . '/inc/shortcode_get_post.php';
require_once THEME_DIRECTORY . '/inc/shortcode_contact_button.php';

/**
 * Customizer
 */
require_once THEME_DIRECTORY . '/inc/customizer.php';

/**
 * Theme Options Page
 */
// require_once THEME_DIRECTORY . '/inc/theme-options-page.php';


// require_once THEME_DIRECTORY . '/inc/template-functions.php';
// require_once THEME_DIRECTORY . '/inc/template-tags.php';




if ( ! function_exists( 'log_me' ) ) :
	/**
	 * Simple error logging
	 *
	 * @param $message
	 * @return bool
	 */
	function log_me( $message )
	{
		if ( true !== WP_DEBUG ) return false;

		if ( is_array($message) || is_object($message) ) {
			return error_log( json_encode($message) );
		}

		return error_log( $message );
	}

endif;


if ( ! function_exists( 'extend_array' ) ) :

	/**
	 * jQuery style array extend
	 *
	 * @return array
	 */
	function extend_array()
	{
		$args     = func_get_args();
		$extended = array();

		if ( is_array( $args ) && count( $args ) )
		{
			foreach ( $args as $array )
			{
				if ( ! is_array( $array ) )	continue;
				$extended = array_merge( $extended, $array );
			}
		}

		return $extended;
	}

endif;



/**
 * ACF PRO Options Page
 * Global OPTIONS
 * HEADER & FOOTER
 *
 *
 */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Help Widget Settings',
	// 	'menu_title'	=> 'Help Widget',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Global Strings',
	// 	'menu_title'	=> 'Global Strings',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));

}





















// OPTIONALLY CAN USE ICONS IN SHORTCODE :

// function ikona_facebook() {
//   ob_start();
//   get_template_part('svg/ikona_facebook.svg');
//   return ob_get_clean();
// }
// add_shortcode('ikona_facebook', 'ikona_facebook');
//
//
//
// function ikona_linkedin() {
//   ob_start();
//   get_template_part('svg/ikona_linkedin.svg');
//   return ob_get_clean();
// }
// add_shortcode('ikona_linkedin', 'ikona_linkedin');
//
//
//
// function ikona_youtube() {
//   ob_start();
//   get_template_part('svg/ikona_youtube.svg');
//   return ob_get_clean();
// }
// add_shortcode('ikona_youtube', 'ikona_youtube');
//
//
//
// function homepage_industrial_vision_logo() {
//   ob_start();
//   get_template_part('svg/homepage_industrial_vision_logo.svg');
//   return ob_get_clean();
// }
// add_shortcode('homepage_industrial_vision_logo', 'homepage_industrial_vision_logo');
//
//
//
// function homepage_xevoq_logo() {
//   ob_start();
//   get_template_part('svg/homepage_xevoq_logo.svg');
//   return ob_get_clean();
// }
// add_shortcode('homepage_xevoq_logo', 'homepage_xevoq_logo');
//
// function logo_ixperta_bile() {
//   ob_start();
//   get_template_part('svg/logo_ixperta_bile.svg');
//   return ob_get_clean();
// }
// add_shortcode('logo_ixperta_bile', 'logo_ixperta_bile');







// no auto paragraphs
// remove_filter( 'the_content', 'wpautop' );






// extend the theme with career - theme-01
// require('theme-01/functions.php');








// function language_selector_flags(){
//     $languages = icl_get_languages('skip_missing=0&orderby=code');
//     if(!empty($languages)){
//         foreach($languages as $l){
//             if(!$l['active']) echo '<a href="'.$l['url'].'">';
//             echo '<img src="'.$l['country_flag_url'].'" height="15" alt="'.$l['language_code'].'" width="23" />';
//             if(!$l['active']) echo '</a>';
//         }
//     }
// }













// ACF PRO BLOCKS for Gutenberg : !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! THIS IS POSSIBLE ONLY WITH V. 5.8 BETA !!!!!!!!!!!!!!!!!!!!!!!!!!!!!

/**
 * Gutenberg blocks
 */
require_once THEME_DIRECTORY . '/template-blocks/register-block/main-banner.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/info-stripe.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/event-advertisement-stripe.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/teaser-box.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/get-mobile-app.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/query-posts.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/custom-heading.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/train-to-rent.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/train-to-rent-contact-form.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/trips.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/contact-tiles.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/our-trains.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/search-train.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/search-train-results.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/svg-mapa-technologie.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/smart-rail.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/robotrain.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/modern_local_rail_features.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/parking_map.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/parni_vlak_papousek.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/technologie-newsletter.php';
require_once THEME_DIRECTORY . '/template-blocks/register-block/newsletter-inline-form.php';





























// Update CSS within in Admin
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');



















add_action('wp_head', 'myplugin_ajaxurl');

function myplugin_ajaxurl() {

   echo '<script type="text/javascript">
           window.ajaxurl = "' . admin_url('admin-ajax.php') . '";
         </script>';
}




add_action( 'wp_ajax_nopriv_load_more_posts', 'load_more_posts' );
add_action( 'wp_ajax_load_more_posts', 'load_more_posts' );
function load_more_posts() {

  $id = $_POST['id'];
  $return = array();
  $return['id'] = $id;

	// global $wpdb;
  // $queryPosts = "SELECT * FROM wp_posts
  //                WHERE post_type = 'post'
  //                ORDER BY post_modified DESC;";
  // $result_stanice = $wpdb->get_results($queryPosts);
	//
	// $response = array();
	//
	// foreach ($result_stanice as $item) {
  //   $response[] = array(
  //     'id' => $item->id,
  //     'nazevStanice' => $item->nazevStanice
  //   );
  // }

	$response = "";

	$args = array(
      'posts_per_page' => 100,
      'offset' => 7,
			'post_status' => 'publish'
  );
  $posts_row_2 = new WP_Query( $args ); // The Query ?>

  <?php if( $posts_row_2->have_posts() ) { ?>

		<?php //$index = 1; ?>

		<?php $response .= '<div class="container">' ?>
			<?php $response .= '<div class="row trips-after-load-more">' ?>

				<?php while ( $posts_row_2->have_posts() ) : $posts_row_2->the_post(); // The Loop ?>

						<?php $excerpt_custom_image = get_field('excerpt_custom_image', get_the_id()); ?>

						<?php $response .= '<div class="col-md-3 trip load-more">' ?>
						<?php $response .= '<h3 class="heading">' . get_the_title() . '</h3>' ?>
	          <?php //$response .= '<img src="'.$excerpt_custom_image['url'].'" alt="'.$excerpt_custom_image['alt'].'" />' ?>
	          <?php $response .= '<a href="' . get_permalink($post->ID) . '"><div class="trip-bg" style="background-image: url(' . get_the_post_thumbnail_url($post->ID) . ');"></div></a>' ?>
	          <?php $response .= '<a class="btn btn-warning" href="' . get_permalink() . '">' ?>
	          <?php $response .= get_field('trips_button_text', 'option') ?>
	          <?php $response .= '</a>' ?>
	          <?php $response .= '</div>' ?>



					<?php //$index++; ?>
				<?php endwhile; ?>

			<?php $response .= '</div>' ?>
		<?php $response .= '</div>' ?>

  <?php } ?>

	<?php
	echo json_encode($response);
	wp_die(); // this is required to terminate immediately and return a proper response

}


















// include('phpqrcode/qrlib.php');
//
// // outputs image directly into browser, as PNG stream
// // QRcode::png('start:20;stop:70;exp:06.01.2020;cp:2;tp:4;overeni:asdsa848484ad9as4das894d;');
//
// // this will save it to the root directory:
// QRcode::png('start:20;stop:70;exp:06.01.2020;cp:2;tp:4;overeni:asdsa848484ad9as4das894d;', 'jizdenka_asdsa848484ad9as4das894d.png', 'L', 4, 2);











// function getUserIP()
// {
//     $client  = @$_SERVER['HTTP_CLIENT_IP'];
//     $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
//     $remote  = $_SERVER['REMOTE_ADDR'];
//
//     if(filter_var($client, FILTER_VALIDATE_IP))
//     {
//         $ip = $client;
//     }
//     elseif(filter_var($forward, FILTER_VALIDATE_IP))
//     {
//         $ip = $forward;
//     }
//     else
//     {
//         $ip = $remote;
//     }
//
//     return $ip;
// }
//
//
// $user_ip = getUserIP();
//
// echo $user_ip; // Output IP address [Ex: 177.87.193.134]
