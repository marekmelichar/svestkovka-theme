<?php
	/* Template Name: Homepage */
?>

<?php get_header() ?>

<?php if ( have_posts() ) : ?>
<div class="post-list container">
	<?php while ( have_posts() ) : the_post() ?>

		<article <?php post_class() ?>>

			<?php the_content(); ?>

		</article>

	<?php endwhile ?>
</div>
<?php endif ?>

<?php get_footer() ?>
