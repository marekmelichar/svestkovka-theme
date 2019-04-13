<?php /* Template Name: Search train */ ?>
<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package robogon
 */

get_header();
?>

	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>

			<div class="main-image-banner">
				<?php the_post_thumbnail(); ?>
			</div>

			<?php the_content(); ?>

		<?php endwhile; ?>
	</div><!-- /container -->

<?php
	get_footer();
