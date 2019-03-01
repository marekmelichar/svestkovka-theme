<section class="slider-articles">
	<div class="container text-center">
		<h2><?php echo the_field('slider_heading') ?></h2>

		<a class="carousel-control-prev" href="">
		<?php get_template_part('assets/img/svg/sipka_leva.svg'); ?>
		</a>

	 <div id="myCarousel" class="carousel slide" data-ride="carousel">

		 	<?php $args = array(
				'posts_per_page' => 10,
				'category__not_in' => array(1)
			) ?>
	 		<?php $the_query = new WP_Query($args); ?>
	 		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

	    	<div class="carousel-item text-center">
	    		<div class="heading text-center fz16">
						<?php echo the_title(); ?>
					</div>
						<div class="bg-img" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
						<a href="<?php echo get_permalink(); ?>" class="btn btn-info btn-yellow" role="button">detail výletu</a>
	    	</div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

		</div>

		<a class="carousel-control-next" href="">
			<?php get_template_part('assets/img/svg/sipka_prava.svg'); ?>
		</a>

		<a href="<?php echo the_field('slider_href') ?>" class="btn btn-info btn-transparent" role="button"><?php echo the_field('slider_button') ?></a>

</section>
