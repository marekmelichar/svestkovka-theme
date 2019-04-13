<?php
	/* Template Name: Page */
?>

<?php get_header() ?>

<?php if ( have_posts() ) : ?>
<div class="post-list container">
	<?php while ( have_posts() ) : the_post() ?>

		<div class="main-image-banner">
			<?php the_post_thumbnail(); ?>
		</div>

		<article class="standard-page">

			<?php the_content(); ?>

		</article>

	<?php endwhile ?>
</div>
<?php endif ?>

<?php get_footer() ?>
