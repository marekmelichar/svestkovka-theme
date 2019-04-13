<?php /* Template Name: History */ ?>
<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package robogon
 */

?>
<?php get_header() ?>

<?php if ( have_posts() ) : ?>
<div class="post-list container">
	<?php while ( have_posts() ) : the_post() ?>

		<div class="main-image-banner">
			<?php the_post_thumbnail(); ?>
		</div>

		<article <?php post_class() ?>>

			<div id="history_headings" class="container">
		    <div class="row">
		      <div class="col">
		        <h1><?php the_field('history_heading') ?></h1>
		        <h2><?php the_field('history_subheading') ?></h2>
		      </div>
		    </div>
		  </div>

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
											<?php get_template_part('svg/' . $icon . '.svg'); ?>
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

			<?php the_content(); ?>

		</article>

	<?php endwhile ?>
</div>
<?php endif ?>

<?php get_footer() ?>
