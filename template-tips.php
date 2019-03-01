<?php /* Template Name: Tips */ ?>
<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package robogon
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		while ( have_posts() ) :

			the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php get_template_part('partials/jumbotron'); ?>

				<!-- <div class="container map" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/map.png')">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/map.png">
				</div> -->

				<!-- <?php the_content(); ?> -->
				<!-- <div class="container map">
				</div> -->

				<div class="container"><?php the_field('interactive_map_shortcode') ?></div>

				<?php the_field('weather_widget_shortcode') ?>

				<?php get_template_part('partials/all-interesting-places'); ?>

			</article> <?php

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
