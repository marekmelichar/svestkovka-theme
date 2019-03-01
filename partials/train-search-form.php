<?php
/**
 * Train search form
 *
 * @package robogon
 */
?>
	<?php
		global $wpdb;
		$query = "SELECT nazevStanice, id FROM `stanice` WHERE zastavovat ORDER BY poradiStanice";
		$result = $wpdb->get_results($query);
		// echo '<pre>';
		// 	var_dump($result);
		// echo '</pre>';
	?>

		<form method="post" action="<?php echo get_home_url(); ?>/hledat-spojeni" class="search-train row">
			<div class="col-md-6">
				<div class="from">
					<label>Odkud:</label>
					<select class="form-control-sm" name="search_from" required>
						<option value="" disabled selected>Vyberte...</option>

						<?php foreach ($result as $instance) { ?>

							<option value=<?php echo $instance->id ?>><?php echo $instance->nazevStanice ?></option>

						<?php } ?>

					</select>
				</div>
				<div class="to">
					<label>Kam:</label>
					<select class="form-control-sm" name="search_to" required>
						<option value="" disabled selected>Vyberte...</option>

						<?php foreach ($result as $instance) { ?>

							<option value=<?php echo $instance->id ?>><?php echo $instance->nazevStanice ?></option>

						<?php } ?>

					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="when">
					<label>Kdy:</label>
					<select class="form-control-sm" name="search_date" required>
					<?php while( have_rows('dates', 'options') ): the_row();

						echo '<option value="'.get_sub_field('date').'">'.get_sub_field('date').'</option>';

					?>
					<?php endwhile; ?>
					</select>
				</div>

				<button type="submit">Hledat</button>
			</div>
		</form>
