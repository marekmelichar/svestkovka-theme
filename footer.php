<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package robogon
 */

?>

	</div><!-- #content -->

	<footer>
		<div class="container">
			<div class="row">
				<?php if( have_rows('footer_column', 'options') ): ?>
						<?php while( have_rows('footer_column', 'options') ): the_row();

							$custom_class = get_sub_field('custom_class');
							$icon = get_sub_field('icon');
							$content = get_sub_field('content');
						?>

						<div class="col <?php echo $custom_class; ?>">
							<?php if($icon): ?>
								<div class="row">
									<div class="col-md-3">
										<div class="svg">
											<?php get_template_part('assets/img/svg/' . $icon . '.svg'); ?>
										</div>
									</div>
									<div class="col-md-9">
										<?php echo $content; ?>
									</div>
								</div>
							<?php else: ?>
								<div class="col">
									<?php echo $content; ?>
								</div>
							<?php endif; ?>
						</div>

						<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="row">
				<div class="col">
					<h2 class="video-footer-heading"><?php the_field('video_footer_heading', 'options') ?></h2>
				</div>
			</div>
			<div class="row footer-video-group">
				<div class="col-md-4">
					<div class="border-radius"><?php the_field('video_footer_first', 'options') ?></div>
				</div>
				<div class="col-md-4">
					<div class="border-radius"><?php the_field('video_footer_second', 'options') ?></div>
				</div>
				<div class="col-md-4">
					<div class="border-radius"><?php the_field('video_footer_third', 'options') ?></div>
				</div>
			</div>
		</div>
	</footer>

	<div class="after-footer">
		<div class="container">
			<div class="row">
				<?php if( have_rows('after_footer_column', 'options') ): ?>
						<?php while( have_rows('after_footer_column', 'options') ): the_row();

							$icon = get_sub_field('icon');
							$content = get_sub_field('content');
						?>

						<?php if($icon): ?>
							<div class="col">
								<div class="row">
									<div class="col-md-4">
										<div class="svg">
											<?php get_template_part('assets/img/svg/' . $icon . '.svg'); ?>
										</div>
									</div>
									<div class="col-md-8">
										<?php echo $content; ?>
									</div>
								</div>
							</div>
							<?php else: ?>
							<?php echo $content; ?>
						<?php endif; ?>

						<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- modal Feedback -->
	<div class="modal fade" id="modalFeedback" tabindex="-1" role="dialog" aria-labelledby="modal feedback" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">

					<?php if( have_rows('modal_feedback', 'options') ): ?>
							<?php while( have_rows('modal_feedback', 'options') ): the_row();

							$modal_title = get_sub_field('modal_title');
							$modal_text = get_sub_field('modal_text');
							$input_1 = get_sub_field('input_1');
							$input_2 = get_sub_field('input_2');
							$input_3 = get_sub_field('input_3');
							$input_email = get_sub_field('input_email');
							$modal_submit = get_sub_field('input_submit');
							?>
							<?php endwhile; ?>
					<?php endif; ?>


	        <h5 class="modal-title" id="feedbackLabel"><?php echo $modal_title; ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
				<form method="post" action="<?php echo get_home_url(); ?>/dekujeme-za-zpetnou-vazbu" class="">
	      <div class="modal-body">
					<p><?php echo $modal_text; ?></p>
	          <div class="form-group">
	            <label for="field_1" class="col-form-label"><?php echo $input_1; ?></label>
	            <input type="text" class="form-control" id="field_1" name="field_1">
	          </div>
	          <div class="form-group">
	            <label for="field_2" class="col-form-label"><?php echo $input_2; ?></label>
	            <textarea class="form-control" id="field_2" name="field_2"></textarea>
	          </div>
						<div class="row">
				      <div class="col-md-6"><label for="field_3" class="col-form-label"><?php echo $input_3; ?></label>
	            <input type="text" class="form-control" id="field_3" name="field_3"></div>
				      <div class="col-md-6"><label for="field_4" class="col-form-label"><?php echo $input_email; ?></label>
	            <input type="text" class="form-control" id="field_4" name="field_4"></div>
				    </div>
		      </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-primary"><?php echo $modal_submit; ?></button>
		      </div>
				</form>
	    </div>
	  </div>
	</div>
	<!-- END of modal Feedback -->


<?php wp_footer(); ?>

<!-- retargeting -->
<script type="text/javascript">
/ <![CDATA[ /
var seznam_retargeting_id = 57431;
/ ]]> /
</script>
<script type="text/javascript" src="//c.imedia.cz/js/retargeting.js"></script>

</body>
</html>


<!-- <div class="col-md-2 text-right">Powered by <a href="www.ixperta.com">IXPERTA</a></div> -->
