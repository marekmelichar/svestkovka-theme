<?php get_header() ?>

<?php if ( have_posts() ) : ?>
<div class="post-list container __single-post-page">
	<?php while ( have_posts() ) : the_post() ?>

		<div class="main-image-banner" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID); ?>); min-height: 350px; background-size: cover; background-position: 0 50%; background-repeat: no-repeat;">
			<?php //the_post_thumbnail(); ?>
		</div>

		<article class="single-post-page">

			<?php the_content(); ?>

		</article>

	<?php endwhile ?>
</div>
<?php endif ?>

<?php get_footer() ?>
