<?php
/**
 * robogon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package robogon
 */

if ( ! function_exists( 'robogon_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function robogon_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on robogon, use a find and replace
		 * to change 'robogon' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'robogon', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'robogon_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'robogon' ),
		) );

		// support the WooCommerce
		add_theme_support( 'woocommerce', array(
			// 'thumbnail_image_width' => 150,
			// 'single_image_width'    => 300,
			//
	    //     'product_grid'          => array(
	    //         'default_rows'    => 3,
	    //         'min_rows'        => 2,
	    //         'max_rows'        => 8,
	    //         'default_columns' => 4,
	    //         'min_columns'     => 2,
	    //         'max_columns'     => 5,
	    //     ),
		) );
	}
endif;
add_action( 'after_setup_theme', 'robogon_setup' );












/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function robogon_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'robogon_content_width', 640 );
}
add_action( 'after_setup_theme', 'robogon_content_width', 0 );














/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function robogon_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'robogon' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'robogon' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'robogon_widgets_init' );











/**
 * Enqueue scripts and styles.
 */
function robogon_scripts() {
	// wp_enqueue_script( 'jquery3.2.1', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', false, null);
	// wp_enqueue_script( 'robogon-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), null, true );
	// wp_enqueue_script( 'robogon-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), null, true );

	wp_enqueue_script( 'robogon-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'weather-js', get_template_directory_uri() . '/assets/js/weather.js', array(), '', true );
	wp_enqueue_script( 'fare-js', get_template_directory_uri() . '/assets/js/fare.js', array(), '', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '', true );



	wp_enqueue_style( 'robogon-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	// wp_enqueue_style( 'robogon-fonts', get_template_directory_uri() . 'https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,600,700,800&amp;subset=latin-ext');
	wp_enqueue_style( 'robogon-assets-style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'robogon-weather-style', get_template_directory_uri() . '/assets/css/weather.css' );
	wp_enqueue_style( 'robogon-style', get_stylesheet_uri() );

//	wp_enqueue_script( 'robogon-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '20151215', true );
//	wp_enqueue_script( 'robogon-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
//	wp_enqueue_script( 'robogon-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'robogon_scripts' );











/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce Plugin
 */
// require get_template_directory() . '/inc/woocommerce-custom-product-mini-plugin.php';








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

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Train Search Settings',
		'menu_title'	=> 'Train Search',
		'parent_slug'	=> 'theme-general-settings',
	));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Help Widget Settings',
	// 	'menu_title'	=> 'Help Widget',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));

}



















// icons as a shortcodes:

function azd_logo_modre() {
  ob_start();
  get_template_part('assets/img/svg/azd_logo_modre.svg');
  return ob_get_clean();
}
add_shortcode('azd_logo_modre', 'azd_logo_modre');

function ustecky_kraj() {
  ob_start();
  get_template_part('assets/img/svg/ustecky_kraj.svg');
  return ob_get_clean();
}
add_shortcode('ustecky_kraj', 'ustecky_kraj');

function doprava_uk_logo() {
  ob_start();
  get_template_part('assets/img/svg/doprava_uk_logo.svg');
  return ob_get_clean();
}
add_shortcode('doprava_uk_logo', 'doprava_uk_logo');

function mapa_historie() {
  ob_start();
  get_template_part('assets/img/svg/mapa_historie.svg');
  return ob_get_clean();
}
add_shortcode('mapa_historie', 'mapa_historie');

// weather
add_shortcode( 'weather', 'weather_shortcode' );
function weather_shortcode( $atts ) {

  $atts = shortcode_atts( array(
    // 'parent_class' => 'weather-forecast',
    // 'children_class' => 'some-children-class'
  ), $atts );

  // create the html
  $html .= '<div id="root_weather_forecast"></div>';

  return $html;
}

function trasa_drahy() {
  ob_start();
  get_template_part('assets/img/svg/trasa_drahy.svg');
  return ob_get_clean();
}
add_shortcode('trasa_drahy', 'trasa_drahy');

function vlak_schema() {
  ob_start();
  get_template_part('assets/img/svg/vlak_schema.svg');
  return ob_get_clean();
}
add_shortcode('vlak_schema', 'vlak_schema');

function vlak_planek_komplet() {
  ob_start();
  get_template_part('assets/img/svg/vlak_planek_komplet.svg');
  return ob_get_clean();
}
add_shortcode('vlak_planek_komplet', 'vlak_planek_komplet');

function mapa_o_zeleznici() {
  ob_start();
  get_template_part('assets/img/svg/mapa_o_zeleznici.svg');
  return ob_get_clean();
}
add_shortcode('mapa_o_zeleznici', 'mapa_o_zeleznici');












// define('WC_MAX_LINKED_VARIATIONS', 250);










// add_action( 'wp_ajax_update_seat', 'update_seat' );
add_action( 'wp_ajax_update_seat', 'update_seat' );
add_action( 'wp_ajax_nopriv_update_seat', 'update_seat' );

function update_seat() {
	// global $wpdb; // this is how you get access to the database
	//
	// $whatever = intval( $_POST['whatever'] );
	//
	// $whatever += 10;
	//
  // echo $whatever;

	global $wpdb;

	// $seat = intval( $_POST['seat'] );
	$post = $_POST;

	$seat = $post['seat'];
	$from = $post['train_from'];
	$to = $post['train_to'];

	// var_dump($seat, $from, $to);
	// $query_1 = "UPDATE `sedadla` SET $seat = '1' WHERE Z = 'Lovosice' AND Kam = 'Sulejovice'";
	// $query_2 = "SELECT * FROM `sedadla` WHERE Z = 'Lovosice' AND Kam = 'Sulejovice'";
	// $query_ajax = "UPDATE `sedadla` SET $seat = '1' WHERE Z = $from AND Kam = $to";

	// $result = $wpdb->update($query_ajax);
	// $result = $wpdb->query($wpdb->prepare("UPDATE `sedadla` SET $seat = '1' WHERE Z = 'Lovosice' AND Kam = 'Sulejovice'"));
	// var_dump($result);
	// $result_2 = $wpdb->get_results($query_2);
	// $result = $wpdb->query($wpdb->prepare("UPDATE `sedadla` SET %s = '1' WHERE Z = %s AND Kam = %s", $seat, $from, $to));

	$result = $wpdb->update('sedadla', array($seat=>'1'), array('Z'=>$from, 'Kam'=>$to));
	// var_dump($result);
	// echo $query_1;
	// echo $query_2;
	echo $result;
	// echo $result_2;
	// echo $query_1;






	// echo 'YES';

	// foreach ($result as $instance) {
	// 	echo "<div> Z: " . $instance->Z . "</div>";
	// 	echo "<div> Kam: " . $instance->Kam . "</div>";
	//
	// 	for ($i = 1; $i <= 55; $i++) {
	// 		$index = 's' . $i;
	// 		echo "<a id=$index class='seat'><span>" . $instance->$index . "</span></a>";
	// 	}
	// }

	wp_die(); // this is required to terminate immediately and return a proper response
}








add_action( 'wp_ajax_get_seats_data', 'get_seats_data' );
add_action( 'wp_ajax_nopriv_get_seats_data', 'get_seats_data' );

function get_seats_data() {
	global $wpdb;

	$post = $_POST;

	$seat = $post['seat'];
	$from = $post['train_from'];
	$to = $post['train_to'];

	$query = "SELECT * FROM `sedadla` WHERE Z = $from AND Kam = $to";
	$result = $wpdb->get_results($query);

	foreach ($result as $instance) {
		echo $instance;
	}

	// echo $result;

	wp_die();
}
