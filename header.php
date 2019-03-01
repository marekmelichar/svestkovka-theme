<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package robogon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-62037281-12"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-62037281-12');
	</script>

	<!-- Global site tag (gtag.js) - AdWords: 795058124 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-795058124"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'AW-795058124');
	</script>


	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- <link rel='stylesheet' id='open-sans-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.5.14' type='text/css' media='all' /> -->
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,600,700,800&amp;subset=latin-ext' type='text/css' media='all' />

	<!-- Font Awesome Icons -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>

	<!-- Slick CSS -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

	<!-- Slick JS -->
	<script defer type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<!-- Babel ES6 polyfill -->
	<script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.0.0/polyfill.min.js"></script>

	<?php wp_head(); ?>

	<!-- Smartlook -->
	<script type="text/javascript">
    window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
    })(document);
    smartlook('init', 'f73e0476d989ad3c4d3dd3dd601676a8e588d38c');
	</script>
</head>

<body <?php body_class(); ?>>

<div class="blue-bg">
	<div id="pre_header" class="container">
		<div class="container">
			<div class="row">
				<div class="col-md-6 left-side">
					<?php the_field('left_side_text', 'option'); ?>
				</div>
				<div class="col-md-6 right-side text-right">
					<?php the_field('right_side_text', 'option'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<header class="fixed">
	<div class="container">
		<div class="row">
			<div class="col-md-4 logo d-inline-flex">
				<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
					<?php get_template_part('assets/img/svg/azd_logo_barevne_bez_napisu_praha.svg'); ?>
				</a>
				<div class="logo-text">
					<?php the_field('logo_text_1', 'option'); ?><br/>
					<?php the_field('logo_text_2', 'option'); ?>
				</div>
			</div>
			<div class="col-md-8">
				<button id="hamburger" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fas fa-bars"></i>
					</span>
				</button>
				<div id="navbarCollapse" class="float-right">
					<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<?php
								wp_nav_menu( array(
									'theme_location' => 'primary',
									'menu_class'     => 'primary nav',
								 ) );
							?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</header>
<main role="main">
