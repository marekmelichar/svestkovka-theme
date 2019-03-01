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

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php

		// global $name_from;
		// global $name_to;

		while ( have_posts() ) :

			the_post(); ?>

			<?php get_template_part('partials/jumbotron'); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="container">
						<div class="row">
							<div class="col-md-5 search-train-results">
								<?php
								if(isset($_POST["search_from"])){
									$search_from = sanitize_text_field($_POST["search_from"]);
									$search_to = sanitize_text_field($_POST["search_to"]);
									$search_date = sanitize_text_field($_POST["search_date"]);

									$trains_to_most = array("18350", "18352", "18354");
									$trains_to_lovosice = array("18351", "18353", "18355");

									var_dump($search_from);
									var_dump($search_to);
									var_dump($search_date);

									if($search_to !== $search_from){

										// global $wpdb;

										// $query_from = "SELECT * FROM `jizdni_rad` WHERE id = $search_from";
										// $result_from = $wpdb->get_results($query_from);
										// foreach ($result_from as $instance) {
										// 	echo $instance->zastavka;
										// }

										// $query_to = "SELECT * FROM `jizdni_rad` WHERE id = $search_to";
										// $result_to = $wpdb->get_results($query_to);
										// foreach ($result_to as $instance) {
										// 	echo $instance->zastavka;
										// }

										global $wpdb;
										$query = "SELECT * FROM `jizdni_rad`";
										$result = $wpdb->get_results($query);

										// $xml=simplexml_load_file(get_home_url() . "/train.xml") or die("Error: File doesnt exist in root dir.");
										// foreach($xml->children() as $train) {
										foreach($result as $train) {
																					// echo '<span style="display:none;">'. $train->cas_prichod_lovosice_1.'</span>';
												if($search_from == $train->id){
													if($search_from < $search_to ){
														$time_from[0] = $train->cas_odchod_most_1;
														$time_from[1] = $train->cas_odchod_most_2;
														$time_from[2] = $train->cas_odchod_most_3;
													}else{
														$time_from[0] = $train->cas_odchod_lovosice_1;
														$time_from[1] = $train->cas_odchod_lovosice_2;
														$time_from[2] = $train->cas_odchod_lovosice_3;
													}
													$km_from = $train->km;
													$name_from = $train->zastavka;
												}
												if($search_to == $train->id){
													if($search_from < $search_to ){
														if($train->cas_prichod_most_1 != ""){
															$time_to[0] = $train->cas_prichod_most_1;
															$time_to[1] = $train->cas_prichod_most_2;
															$time_to[2] = $train->cas_prichod_most_3;
														}else{
															$time_to[0] = $train->cas_odchod_most_1;
															$time_to[1] = $train->cas_odchod_most_2;
															$time_to[2] = $train->cas_odchod_most_3;
														}
													}else{
														if($train->cas_prichod_lovosice_1 != ""){
															$time_to[0] = $train->cas_prichod_lovosice_1;
															$time_to[1] = $train->cas_prichod_lovosice_2;
															$time_to[2] = $train->cas_prichod_lovosice_3;
														}else{
															$time_to[0] = $train->cas_odchod_lovosice_1;
															$time_to[1] = $train->cas_odchod_lovosice_2;
															$time_to[2] = $train->cas_odchod_lovosice_3;
														}
													}
													$km_to = $train->km;
													$name_to = $train->zastavka;
												}
										}
										if($search_from < $search_to ){
											$km = $km_to - $km_from . " km";
											$trains = $trains_to_most;
										}else{
											$km = $km_from - $km_to . "km";
											$trains = $trains_to_lovosice;
										}

										$seconds = strtotime($time_to[0]) - strtotime($time_from[0]);

										$hours = floor($seconds / 3600);
										$mins = floor($seconds / 60 % 60);

										if($hours == 0 ){
											$hours = "";
										}else{
											$hours = $hours .' hod ';
										}

										$time = $hours . $mins . ' min';
									?>

									<h2><?php echo $search_date; ?></h2>

									<?php
										for ($i = 0; $i <= 2; $i++) {
									?>

									<div class="search-train-table">
										<table class="table">
										  <thead>
										    <tr>
										      <th scope="col"></th>
										      <th scope="col">Stanice</th>
										      <th scope="col">Příj.</th>
										      <th scope="col">Odj.</th>
										      <th scope="col">Vlak</th>
										    </tr>
										  </thead>
										  <tbody>
										    <tr>
										      <th>Z:</th>
										      <td class="trip-from"><?php echo $name_from; ?></td>
										      <td>-</td>
										      <td><?php echo $time_from[$i]; ?></td>
										      <td><?php echo $trains[$i]; ?></td>
										    </tr>
										    <tr>
										      <th>Do:</th>
										      <td class="trip-to"><?php echo $name_to; ?></td>
										      <td><?php echo $time_to[$i]; ?></td>
										      <td>-</td>
										      <td></td>
										    </tr>
										  </tbody>
										</table>
										<div class="text-right">
											<a href="" class="btn btn-info btn-yellow js-modal-opener" role="button" data-toggle="modal" data-target="#modalSearch<?php echo $trains[$i]; ?>" data-trainid="<?php echo $trains[$i]; ?>">VYBRAT SPOJ</a>
										</div>
									</div>

								<div id="modalSearch<?php echo $trains[$i]; ?>" class="modal fade js-modal-window" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-trainid="<?php echo $trains[$i]; ?>">
									<div class="modal-dialog" role="document">
    								<div class="modal-content">
											<div class="modal-header">
												<div id="modalSearchTrain">
													<h2>Informace k jízdě</h2>
													Datum: <span class="fare-date"><?php echo $search_date; ?></span>
													Z: <span class="fare-from"><?php echo $name_from; ?></span>
													Do: <span class="fare-to"><?php echo $name_to; ?></span>
													Vlak: <span class="fare-train"><?php echo $trains[$i]; ?></span>
													Doba jízdy: <span class="fare-traveltime"><?php echo $time; ?></span>
													Vzdálenost: <span class="fare-km"><?php echo $km; ?></span>

												</div>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											</div>
											<div class="modal-body">
												<div id="modalCheckFare">
													<h2><strong>Tarifní počítadlo jízdného</strong></h2>
													<div class="row">
														<div class="col-md-8">
															Kliknutím na tlačítko se otevře kalkulačka jízdného Dopravy Ústeckého kraje, kde prosím zadejte údaje pro správné zobrazení ceny jízdného.
														</div>
														<div class="col-md-4">
															<a href="http://ids.kr-ustecky.cz/mapserv/iduk/pocitadlo.php" target="_blank" class="btn btn-info btn-yellow" role="button">ZJISTIT CENU JÍZDNÉHO</a>
														</div>
													</div>
												</div>
												<div id="modalBookTrain">

													<h2>Nahlásit větší skupinu cestujících a jízdní kola</h2>
													<p>Ve vlacích linky T4 je možné přepravovat také jízdní kola – vzhledem ke kapacitě vozů je dovoleno max. 5 kol. V případě zájmu o přepravu většího množství jízdních kol je nutné vyplnit tento kontaktní formulář:</p>

													<form method="post">
														<?php
														if(isset($_POST["search_from"])){
														?>
															<input type="hidden" name="search_from" value="<?php echo $search_from; ?>">
															<input type="hidden" name="search_to" value="<?php echo $search_to; ?>">
															<input type="hidden" name="search_date" value="<?php echo $search_date; ?>">
															<input type="hidden" name="send_mail" value="0">
														<?php
														} ?>

														<div class="row name-etc">
															<div class="col-md-4">
																Jméno a Příjmení: <input type="text" name="group_name">
															</div>
															<div class="col-md-4">
																Telefon: <input type="text" name="group_phone">
															</div>
															<div class="col-md-4">
																E-mail: <input type="email" name="group_email">
															</div>
														</div>
														<div class="row counts">
															<div class="col-md-3">
																<span class="label-for-custom-number-input">Počet dospělých:</span>
																<span class="custom-number-input">
																	<span class="min button">-</span>
																	<input type="number" min="0" value="0" name="group_adults">
																	<span class="plus button">+</span>
																</span>
															</div>
															<div class="col-md-3">
																<span class="label-for-custom-number-input">Počet dětí:</span>
																<span class="custom-number-input">
																	<span class="min button">-</span>
																	<input type="number" min="0" value="0" name="group_children">
																	<span class="plus button">+</span>
																</span>
															</div>
															<div class="col-md-3">
																<span class="label-for-custom-number-input">Počet kol:</span>
																<span class="custom-number-input">
																	<span class="min button">-</span>
																	<input type="number" min="0" max="5" value="0" name="group_bicycles">
																	<span class="plus button">+</span>
																</span>
															</div>
															<div class="col-md-3">
																<span class="label-for-custom-number-input">Držitelé průkazu ZTP/P:</span>
																<span class="custom-number-input">
																	<span class="min button">-</span>
																	<input type="number" min="0" value="0" name="group_ZTP">
																	<span class="plus button">+</span>
																</span>
															</div>
														</div>
														<div class="row poznamka">
															<div class="col">
																Poznámka: <input type="text" name="group_note">
															</div>
														</div>
														<div class="row upozorneni">
															<div class="col-md-8">
																Upozornění: Vlak není místenkový a stejně jako ostatní spoje jej zatím nelze rezervovat. Odesláním informací o zvláštní přepravě však předejdete komplikacím.
															</div>
															<div class="col-md-4">
																<input type="submit" value="Koupit" class="btn btn-info btn-yellow" data-trainid="<?php echo $trains[$i]; ?>">
															</div>
														</div>
													</form>

													<?php
														if(isset($_POST["group_name"])){
															$group_name = sanitize_text_field($_POST["group_name"]);
															$group_phone = sanitize_text_field($_POST["group_phone"]);
															$group_email = sanitize_text_field($_POST["group_email"]);
															$group_adults = sanitize_text_field($_POST["group_adults"]);
															$group_children = sanitize_text_field($_POST["group_children"]);
															$group_bicycles = sanitize_text_field($_POST["group_bicycles"]);
															$group_ZTP = sanitize_text_field($_POST["group_ZTP"]);
															$group_note = sanitize_text_field($_POST["group_note"]);

														$subject = "Nahlášení větší skupiny";
														$text_email = get_field('text_email', 'option');
														$subject = get_field('subject_email', 'option');

														$txt = $text_email;
														$txt = str_replace("[name]",$group_name, $txt);
														$txt = str_replace("[phone]",$group_phone, $txt);
														$txt = str_replace("[email]",$group_email, $txt);
														$txt = str_replace("[adults]",$group_adults, $txt);
														$txt = str_replace("[children]",$group_children, $txt);
														$txt = str_replace("[bicycles]",$group_bicycles, $txt);
														$txt = str_replace("[ZTP]",$group_ZTP, $txt);
														$txt = str_replace("[note]",$group_note, $txt);
														$txt = str_replace("[date]",$search_date, $txt);
														$txt = str_replace("[name_from]",$name_from ,$txt);
														$txt = str_replace("[name_to]",$name_to ,$txt);
														$txt = str_replace("[trains]",$trains[$i] ,$txt);
														$txt = str_replace("[time_from]",$time_from[$i] ,$txt);
														$txt = str_replace("[time_to]",$time_to[$i] ,$txt);
														$txt = str_replace("[km]",$km ,$txt);


														$headers = "From: form@svestkovka.cz" . "\r\n";
														$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
														$to = "";
														while( have_rows('emails', 'options') ): the_row();
															$to = $to . "," . get_sub_field('email');
														endwhile;
														  if($_POST["send_mail"] == 0){
															mail($to,$subject,$txt,$headers);
														      $_POST["send_mail"] = 1;
														  }
														?>

														<span class="form-group-success">Formulář byl úspěšně odeslán.</span>

														<?php } ?>

												</div><!-- /modalBookTrain -->
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						<?php } else { ?>
							<span class="search-error">Nebyly zadané parametry správně</span>
					<?php }
						} else { ?>
							<span class="search-error">Nebyly zadané parametry pro vyhledávání</span>
					<?php }	?>
							</div>

							<div class="col-md-7 search-train-map">
								<h2>Mapa</h2>
								<div class="svg">
									<?php get_template_part('assets/img/svg/trasa_drahy.svg'); ?>
								</div>
								<div class="row mt-5 doprava-usteckeho-kraje">
									<div class="col-md-3">
										<div class="svg">
											<?php get_template_part('assets/img/svg/doprava_uk_logo.svg'); ?>
										</div>
									</div>
									<div class="col-md-9">
										<h3><strong>Integrovaný dopravní systém</strong></h3>
										<p>Ve vlacích platí tarif a smluvní přepravní podmínky Dopravy Ústeckého kraje (DÚK).</p>
									</div>
								</div>
							</div>
						</div>



						<div class="container">
							<div class="row">
								<?php
									global $wpdb;
									$query_seats = "SELECT * FROM `sedadla` WHERE Z = '$name_from' AND Kam = '$name_to'";
									$result_seats = $wpdb->get_results($query_seats);
									foreach ($result_seats as $instance) {
										echo "<div id='train_from'>" . $instance->Z . "</div>";
										echo "<div id='train_to'>" . $instance->Kam . "</div>";

										for ($i = 1; $i <= 55; $i++) {
									    $index = 's' . $i;
											echo "<a id=$index class='seat' data-seat=$index><span>" . $instance->$index . "</span></a>";
										}
									}
								?>
							</div>
						</div>





						<!-- <div id="train_fare_table" class="row">
							<div class="col">
								<h2>Cena jízdného</h2>
								<div id="table_of_train_fare"></div>
							</div>
						</div> -->

						<?php
							// var_dump($name_from);
							// var_dump($name_to);
							global $wpdb;
							// var_dump("SELECT * FROM 'ceny_jizdneho' WHERE Z = $name_from AND Kam = $name_to");
							$query_table = "SELECT * FROM `ceny_jizdneho` WHERE Z = '$name_from' AND Kam = '$name_to'";
							// $query_table = "SELECT * FROM `ceny_jizdneho` WHERE Z = 'Lovosice' AND Kam = 'Bělušice'";
							// $result_from = $wpdb->get_results($wpdb->prepare("SELECT * FROM `ceny_jizdneho` WHERE Z = '$name_from' AND Kam = '$name_to'"));
							$result_from = $wpdb->get_results($query_table);
							foreach ($result_from as $instance) {
								// echo $instance;
								// var_dump($instance); ?>

								<div id="train_fare_table" class="row">
									<div class="col">
										<h2>Cena jízdného</h2>
										<div id="table_of_train_fare">
											<div class="train-fair-widget">
										    <div class="table-responsive">
										        <table class="table">
										            <thead>
										                <tr>
										                    <th scope="col" class="border-bottom-none"></th>
										                    <th scope="col" class="border-bottom-none"></th>
										                    <th scope="col" colspan="2" class="text-center">Dospělý 15+</th>
										                    <th scope="col" colspan="2" class="text-center">Dítě 6-15</th>
										                    <th scope="col" colspan="2" class="text-center">Student 15-26</th>
										                    <th scope="col" colspan="2" class="text-center">Žák 6-15</th>
										                    <th scope="col" colspan="2" class="text-center">ZTP+ZTP/P</th>
										                    <th scope="col" colspan="2" class="text-center">Pes</th>
										                    <th scope="col" colspan="2" class="text-center">Kolo</th>
										                </tr>
										                <tr>
										                    <th scope="col" class="border-top-none">Odkud:</th>
										                    <th scope="col" class="border-top-none">Kam:</th>
										                    <th scope="col">1 jízda</th>
										                    <th scope="col">denní</th>
										                    <th scope="col">1 jízda</th>
										                    <th scope="col">denní</th>
										                    <th scope="col">1 jízda</th>
										                    <th scope="col">denní</th>
										                    <th scope="col">1 jízda</th>
										                    <th scope="col">denní</th>
										                    <th scope="col">1 jízda</th>
										                    <th scope="col">denní</th>
										                    <th scope="col">1 jízda</th>
										                    <th scope="col">denní</th>
										                    <th scope="col">1 jízda</th>
										                    <th scope="col">denní</th>
										                </tr>
										            </thead>
										            <tbody>
										                <tr>
										                    <td><?php $instance->Z ?></td>
										                    <td><?php $instance->Kam ?></td>
										                    <td><?php $instance->Dospely_jizda ?></td>
										                    <td><?php $instance->Dospely_denni ?></td>
										                    <td><?php $instance->Dite_jizda ?></td>
										                    <td><?php $instance->Dite_denni ?></td>
										                    <td><?php $instance->Student_jizda ?></td>
										                    <td><?php $instance->Student_denni ?></td>
										                    <td><?php $instance->Zak_jizda ?></td>
										                    <td><?php $instance->Zak_denni ?></td>
										                    <td><?php $instance->ZTPjizda ?></td>
										                    <td><?php $instance->ZTPdenni ?></td>
										                    <td><?php $instance->Pes_jizda ?></td>
										                    <td><?php $instance->Pes_denni ?></td>
										                    <td><?php $instance->Kolo_jizda ?></td>
										                    <td><?php $instance->Kolo_denni ?></td>
										                </tr>
										            </tbody>
										        </table>
										    </div>
										</div>
										</div>
									</div>
								</div>

							<?php } ?>


				</div><!-- /container -->
			</article> <?php

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_footer();
?>
