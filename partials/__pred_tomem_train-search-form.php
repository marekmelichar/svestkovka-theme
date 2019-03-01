<?php
/**
 * Train search form
 *
 * @package robogon
 */
?>
	<?php
		global $wpdb;
		// $query = "SELECT * FROM `ceny_jizdneho` WHERE Z = '$name_from' AND Kam = '$name_to'";
		// $query = "SELECT `nazevStanice`, `id` FROM 'stanice' WHERE 'zastavovat' = '1' ORDER BY 'poradiStanice'";
		// $query = "SELECT 'nazevStanice', 'id' FROM `stanice` WHERE zastavovat ORDER BY poradiStanice";
		$query = "SELECT nazevStanice, id FROM `stanice` WHERE zastavovat ORDER BY poradiStanice";
		$result = $wpdb->get_results($query);

		// var_dump($result);

		?>




		<form method="post" action="<?php echo get_home_url(); ?>/hledat-spojeni" class="search-train row">
			<div class="col-md-6">
				<div class="from">
					<label>Odkud:</label>
					<!-- <select class="form-control-sm" name="search_from" required> -->
						<select class="form-control-sm" name="search_from" required>
							<option value="" disabled selected>Vyberte...</option>

							<?php foreach ($result as $instance) {
								// echo '<pre>';
							?>


								<option value=<?php echo $instance->id ?>><?php echo $instance->nazevStanice ?></option>

							<?php } ?>

						</select>
						<!-- <option value="" disabled selected>Vyberte...</option>
						<option value="1">Lovosice</option>
						<option value="2">Sulejovice</option>
						<option value="3">Čížkovice</option>
						<option value="4">Třebenice</option>
						<option value="5">Třebenice-město</option>
						<option value="6">Dlažkovice</option>
						<option value="7">Podsedice</option>
						<option value="8">Třebívlice</option>
						<option value="9">Semeč</option>
						<option value="10">Hnojnice</option>
						<option value="11">Libčeves</option>
						<option value="12">Sinutec</option>
						<option value="13">Bělušice</option>
						<option value="14">Skršín</option>
						<option value="15">Sedlec u Obrnic</option>
						<option value="16">Obrnice</option>
						<option value="17">Most</option> -->
					<!-- </select> -->
				</div>
				<div class="to">
					<label>Kam:</label>
					<!-- <select class="form-control-sm" name="search_from" required> -->
						<select class="form-control-sm" name="search_from" required>
							<option value="" disabled selected>Vyberte...</option>

							<?php foreach ($result as $instance) {
								// echo '<pre>';
							?>


								<option value=<?php echo $instance->id ?>><?php echo $instance->nazevStanice ?></option>

							<?php } ?>

						</select>
						<!-- <option value="" disabled selected>Vyberte...</option>
						<option value="1">Lovosice</option>
						<option value="2">Sulejovice</option>
						<option value="3">Čížkovice</option>
						<option value="4">Třebenice</option>
						<option value="5">Třebenice-město</option>
						<option value="6">Dlažkovice</option>
						<option value="7">Podsedice</option>
						<option value="8">Třebívlice</option>
						<option value="9">Semeč</option>
						<option value="10">Hnojnice</option>
						<option value="11">Libčeves</option>
						<option value="12">Sinutec</option>
						<option value="13">Bělušice</option>
						<option value="14">Skršín</option>
						<option value="15">Sedlec u Obrnic</option>
						<option value="16">Obrnice</option>
						<option value="17">Most</option> -->
					<!-- </select> -->
				</div>
				<!-- <div class="to">
					<label>Kam:</label>
					<select class="form-control-sm" name="search_to" required>
						<option value="" disabled selected>Vyberte...</option>
						<option value="1">Lovosice</option>
						<option value="2">Sulejovice</option>
						<option value="3">Čížkovice</option>
						<option value="4">Třebenice</option>
						<option value="5">Třebenice-město</option>
						<option value="6">Dlažkovice</option>
						<option value="7">Podsedice</option>
						<option value="8">Třebívlice</option>
						<option value="9">Semeč</option>
						<option value="10">Hnojnice</option>
						<option value="11">Libčeves</option>
						<option value="12">Sinutec</option>
						<option value="13">Bělušice</option>
						<option value="14">Skršín</option>
						<option value="15">Sedlec u Obrnic</option>
						<option value="16">Obrnice</option>
						<option value="17">Most</option>
					</select>
				</div> -->
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
























			<form method="post" action="<?php echo get_home_url(); ?>/hledat-spojeni" class="search-train row">
				<div class="col-md-6">
					<div class="from">
						<label>Odkud:</label>
						<select class="form-control-sm" name="search_from" required>
							<option value="" disabled selected>Vyberte...</option>
							<option value="1">Lovosice</option>
							<option value="2">Sulejovice</option>
							<option value="3">Čížkovice</option>
							<option value="4">Třebenice</option>
							<option value="5">Třebenice-město</option>
							<option value="6">Dlažkovice</option>
							<option value="7">Podsedice</option>
							<option value="8">Třebívlice</option>
							<option value="9">Semeč</option>
							<option value="10">Hnojnice</option>
							<option value="11">Libčeves</option>
							<option value="12">Sinutec</option>
							<option value="13">Bělušice</option>
							<option value="14">Skršín</option>
							<option value="15">Sedlec u Obrnic</option>
							<option value="16">Obrnice</option>
							<option value="17">Most</option>
						</select>
					</div>
					<div class="to">
						<label>Kam:</label>
						<select class="form-control-sm" name="search_to" required>
							<option value="" disabled selected>Vyberte...</option>
							<option value="1">Lovosice</option>
							<option value="2">Sulejovice</option>
							<option value="3">Čížkovice</option>
							<option value="4">Třebenice</option>
							<option value="5">Třebenice-město</option>
							<option value="6">Dlažkovice</option>
							<option value="7">Podsedice</option>
							<option value="8">Třebívlice</option>
							<option value="9">Semeč</option>
							<option value="10">Hnojnice</option>
							<option value="11">Libčeves</option>
							<option value="12">Sinutec</option>
							<option value="13">Bělušice</option>
							<option value="14">Skršín</option>
							<option value="15">Sedlec u Obrnic</option>
							<option value="16">Obrnice</option>
							<option value="17">Most</option>
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
