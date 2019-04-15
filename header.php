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
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.png" sizes="16x16 32x32 64x64" type="image/x-icon" />

<!-- Font Awesome Icons -->
<!-- <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script> -->

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

<?php //get_template_part('partials/help_widget'); ?>

<?php //get_template_part('partials/top_info_navbar'); ?>

<span id="top"></span>

<header id="header" class="header">
	<div class="container">
		<div class="row align-items-center">
			<div class="logo-area col-md-3">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<div class="logo">
						<div class="svg">
							<?php get_template_part('svg/logo_azd.svg'); ?>
						</div>
					</div>
					<div class="sublogo">
						<?php echo the_field('logo_text', 'options') ?>
					</div>
				</a>
			</div>

			<div class="desktop-header col-md-9">
				<?php
					wp_nav_menu( array( 'menu' => 'Primary Menu' ) );
				?>
				<!-- <div class="ikona-ucet">
					<a href="/my-account"><?php get_template_part('svg/ikona_ucet.svg'); ?></a>
				</div> -->
				<div class="ikona-mail">
					<a href="#" data-toggle="modal" data-target="#modalFeedback"><?php get_template_part('svg/ikona_mail.svg'); ?></a>
				</div>
				<div class="ikona-search search-icon">
					<a href="#" onclick="return false;"><?php get_template_part('svg/ikona_search.svg'); ?></a>
				</div>
				<?php get_search_form(); ?>
				<!-- <div class="ikona-kosik">
					<a href="/my-account"><?php get_template_part('svg/ikona_kosik.svg'); ?></a>
				</div> -->
			</div>


		</div>
		<div class="mobile-header col">
			
			<?php
				wp_nav_menu( array( 'menu' => 'Mobile Menu 1' ) );
			?>

			<div class="mobile-search">
				<div class="ikona-search search-icon">
					<a href="#" onclick="return false;"><?php get_template_part('svg/ikona_search.svg'); ?></a>
				</div>
				<?php get_search_form(); ?>
			</div>

			<div class="mobile-menu-trigger"><?php get_template_part('svg/hamburger.svg'); ?></div>

			<div class="slide-mobile-nav">
				<div class="logo-mobile-white">
					<div class="svg">
						<?php get_template_part('svg/logo_azd_bile.svg'); ?>
					</div>
				</div>
				<div class="sublogo">
					<?php echo the_field('logo_text', 'options') ?>
				</div>
				<div class="logo-mobile-white-underline"></div>
				<?php
					wp_nav_menu( array( 'menu' => 'Mobile Menu 2' ) );
				?>
				<div class="mobile-menu-close"><?php get_template_part('svg/ikona_krizek_bily.svg'); ?></div>
			</div>
		</div>
	</div>
</header>
<a href="#top" id="back_to_top" title="Back to top"><span><?php get_template_part('svg/ikona_sipka_nahoru.svg'); ?></span></a>
