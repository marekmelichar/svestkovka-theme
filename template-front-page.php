<?php
/*
		Template Name: Frontpage
*/

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

						<?php get_template_part( 'partials/train-search'); ?>

						<div class="tabs-about-train">
							<!-- <div class="row">
								<div class="col-md-6">
									<h2 class="heading fz18"><?php echo the_field('tabs_heading'); ?></h2>
								</div>
								<div class="col-md-6">
									<h2 class="heading fz18"><?php echo the_field('map_heading') ?></h2>
								</div>
							</div> -->
							<div class="row">
								<div class="col-md-6">

									<h2 class="heading fz18"><?php echo the_field('tabs_heading'); ?></h2>

									<?php if( have_rows('tabs_repeater') ): ?>

										<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

											<?php while( have_rows('tabs_repeater') ): the_row();

												// vars
												$tab_label = get_sub_field('tab_label');
												$tab_content = get_sub_field('tab_content');
												$tab_button = get_sub_field('tab_button');
												$href = get_sub_field('href');

												?>

												<li class="nav-item">
											    <a class="nav-link" id="pills-<?php echo lcfirst($tab_label); ?>-tab" data-toggle="pill" href="#pills-<?php echo lcfirst($tab_label); ?>" role="tab" aria-controls="pills-<?php echo lcfirst($tab_label); ?>" aria-selected="true">
														<span class="circle"></span>
														<u><?php echo $tab_label; ?></u>
													</a>
											  </li>

											<?php endwhile; ?>

										</ul>

										<div class="tab-content" id="pills-tabContent">

											<?php while( have_rows('tabs_repeater') ): the_row();

												// vars
												$tab_label = get_sub_field('tab_label');
												$tab_content = get_sub_field('tab_content');
												$tab_button = get_sub_field('tab_button');
												$href = get_sub_field('href');

												?>

												<div class="tab-pane fade" id="pills-<?php echo lcfirst($tab_label); ?>" role="tabpanel" aria-labelledby="pills-<?php echo lcfirst($tab_label); ?>-tab">
													<?php echo $tab_content; ?>

													<?php if($tab_button): ?>
														<a class="button" href="<?php echo $href; ?>">
															<button><?php echo $tab_button; ?></button>
														</a>
													<?php endif; ?>
												</div>


											<?php endwhile; ?>

										</div>

									<?php endif; ?>



								</div>
								<div class="col-md-6">
									<h2 class="heading fz18"><?php echo the_field('map_heading') ?></h2>
									<?php get_template_part('assets/img/svg/trasa_drahy.svg'); ?>
								</div>
							</div>

							<div class="row">
								<div class="col">
									<h2 class="heading fz18"><?php echo the_field('tech_data_heading') ?></h2>
								</div>
							</div>

							<div class="technical-data group">
								<div class="row">
									<div class="col-md-3 bordered-right">
										<?php if( have_rows('tech_data_first_cell') ): ?>
												<?php while( have_rows('tech_data_first_cell') ): the_row();

													$left_side = get_sub_field('left_side');
													$right_side = get_sub_field('right_side');
												?>

												<div class="row">
													<div class="col">
														<div class="left-side"><?php echo $left_side; ?></div>
														<div class="right-side"><?php echo $right_side; ?></div>
													</div>
												</div>

												<?php endwhile; ?>
										<?php endif; ?>
									</div>
									<div class="col-md-3 bordered-right">
										<?php if( have_rows('tech_data_second_cell') ): ?>
												<?php while( have_rows('tech_data_second_cell') ): the_row();

													$left_side = get_sub_field('left_side');
													$right_side = get_sub_field('right_side');
												?>

												<div class="row">
													<div class="col">
														<div class="left-side"><?php echo $left_side; ?></div>
														<div class="right-side"><?php echo $right_side; ?></div>
													</div>
												</div>

												<?php endwhile; ?>
										<?php endif; ?>
									</div>
									<div class="col-md-3">
										<?php if( have_rows('tech_data_third_cell') ): ?>
												<?php while( have_rows('tech_data_third_cell') ): the_row();

													$left_side = get_sub_field('left_side');
													$right_side = get_sub_field('right_side');
												?>

												<div class="row">
													<div class="col">
														<div class="left-side"><?php echo $left_side; ?></div>
														<div class="right-side"><?php echo $right_side; ?></div>
													</div>
												</div>

												<?php endwhile; ?>
										<?php endif; ?>
									</div>
									<div class="col-md-3 text-center">
										<a href="<?php echo the_field('tech_data_href') ?>">
											<button type="button" name="button"><?php echo the_field('tech_data_button') ?></button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<?php get_template_part( 'partials/slider'); ?>

						<?php
						the_content();

						// wp_link_pages( array(
						// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'robogon' ),
						// 	'after'  => '</div>',
						// ) );
						?>

				</div>
			</article> <?php

			//get_template_part( 'template-parts/content', 'frontpage' );

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
