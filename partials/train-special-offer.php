<?php
/**
 * Train search special offer
 *
 * @package robogon
 */
?>

	<div class="row">
		<div class="train-special-offer group">
			<?php if( have_rows('special_offer') ):
				while( have_rows('special_offer') ): the_row();

					// vars
					$icon = get_sub_field('icon');
					$content = get_sub_field('content');
					$button = get_sub_field('button');
					$href = get_sub_field('href');

					?>

					<div class="svg">
						<?php get_template_part('assets/img/svg/' . $icon . '.svg'); ?>
					</div>

					<div class="content">
						<?php echo $content; ?>
					</div>

					<a class="button" href="<?php echo $href; ?>">
						<button><?php echo $button; ?></button>
					</a>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
