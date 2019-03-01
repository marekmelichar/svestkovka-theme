<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

				<div class="container">
					<?php the_content() ?>
				</div>

				<?php the_field('weather_widget_shortcode') ?>

				<?php get_template_part( 'partials/slider'); ?>

				<?php

				//get_template_part( 'template-parts/content', get_post_type() );

				//the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif; ?>

				</article> <?php

				endwhile; // End of the loop.
				?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
