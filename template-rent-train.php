<?php /* Template Name: Rent train */ ?>
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

				<div class="container">
					<div class="row">
						<div class="col">
							<?php the_content(); ?>
						</div>
					</div>
				</div>

			</article> <?php

			//get_template_part( 'template-parts/content', 'rent-train' );
			get_template_part( 'partials/slider');

			// If comments are open or we have at least one comment, load up the comment template.
			/*if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			*/
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
