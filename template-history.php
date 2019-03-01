<?php /* Template Name: History */ ?>
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

			<?php get_template_part('partials/jumbotron'); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div id="history" class="container group">
					<div class="row">
						<div class="col">
							<?php if( have_rows('history') ): ?>
									<?php while( have_rows('history') ): the_row();

										// vars
										$side = get_sub_field('side');
										$heading = get_sub_field('heading');
										$content = get_sub_field('content');
										$icon = get_sub_field('icon');

										?>

										<div class="history-section <?php echo $side; ?>">
											<div class="svg">
												<?php get_template_part('assets/img/svg/' . $icon . '.svg'); ?>
											</div>
											<h2><strong><?php echo $heading; ?></strong></h2>
											<div class="history-section__content">
												<?php echo $content; ?>
											</div>
										</div>

									<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</article>

			<?php get_template_part( 'partials/slider'); ?>

			<?php

			//get_template_part( 'template-parts/content', 'history' );

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
