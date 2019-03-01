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

									// var_dump($search_from);
									// var_dump($search_to);
									// var_dump($search_date);

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
										// $query = "SELECT * FROM `jizdni_rad`";

										$query_from = "SELECT nazevStanice, poradiStanice, id FROM `stanice` WHERE stanice.id = $search_from";
										$result_from = $wpdb->get_results($query_from);

										$query_to = "SELECT nazevStanice, poradiStanice, id FROM `stanice` WHERE stanice.id = $search_to";
										$result_to = $wpdb->get_results($query_to);

									}

								}

									?>

									<?php
										// var_dump($result_from[0]->poradiStanice);
										// var_dump($result_to[0]->poradiStanice);

										$number_from = (int)$result_from[0]->poradiStanice;
										$number_to = (int)$result_to[0]->poradiStanice;

										$id_stanice_from = (int)$result_from[0]->id;
										$id_stanice_to = (int)$result_to[0]->id;

										// var_dump($id_stanice_from);
										// var_dump($id_stanice_to);

										if ($number_to > $number_from) {
											$smer = true;
										} else {
											$smer = false;
										}

										// var_dump($smer);
									?>

									<?php
										// var_dump($smer);
										$query_seznam_spoju = "SELECT * FROM `spec_spoje` WHERE smer = $smer";
										$result_seznam_spoju = $wpdb->get_results($query_seznam_spoju);
										// var_dump($result_seznam_spoju);
									?>

									<?php
										if ($smer) {
											// jedu smer Lovosice -> Most "TAM"
											$query_prvni_usek = "SELECT * FROM `spec_useku` WHERE idStanice1 = $id_stanice_from";
											$query_posledni_usek = "SELECT * FROM `spec_useku` WHERE idStanice2 = $id_stanice_to";
										} else {
											// jedu smer Most -> Lovosice "ZPET"
											$query_prvni_usek = "SELECT * FROM `spec_useku` WHERE idStanice2 = $id_stanice_from";
											$query_posledni_usek = "SELECT * FROM `spec_useku` WHERE idStanice1 = $id_stanice_to";
										}

										$result_prvni_usek = $wpdb->get_results($query_prvni_usek);
										$result_posledni_usek = $wpdb->get_results($query_posledni_usek);

										// var_dump($result_prvni_usek[0]);
										// var_dump((int)$result_prvni_usek[0]->idSpecUseku);
										// echo '******************************************';
										// // var_dump($result_posledni_usek[0]);
										// var_dump((int)$result_posledni_usek[0]->idSpecUseku);
										//
										// echo 'AAAAAAAAAAAADSAFSDGSADGSGAFGSDFGDSFGDSFDSFGDS^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^';
									?>

									<?php
										$id_prvniho_useku = (int)$result_prvni_usek[0]->idSpecUseku;
										var_dump($id_prvniho_useku);

										$id_posledniho_useku = (int)$result_posledni_usek[0]->idSpecUseku;
										var_dump($id_posledniho_useku);

										foreach ($result_seznam_spoju as $instance) {
											// var_dump($instance->idSpecSpoje);
											// echo '========================================';
											$query_nabidka_spoju = "SELECT * FROM `spec_trasySpoje` WHERE idSpecSpoje = $instance->idSpecSpoje AND
												(idSpecUseku = $id_prvniho_useku OR idSpecUseku = $id_posledniho_useku)";

											$result_nabidka_spoju = $wpdb->get_results($query_nabidka_spoju);
											foreach ($result_nabidka_spoju as $item) {
												var_dump($item); echo '<br/>';
											}
										}
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
													<td class="trip-from"><?php echo $result_from[0]->nazevStanice; ?></td>
													<td>-</td>
													<td><?php echo $time_from[$i]; ?></td>
													<td><?php echo $trains[$i]; ?></td>
												</tr>
												<tr>
													<th>Do:</th>
													<td class="trip-to"><?php echo $result_to[0]->nazevStanice; ?></td>
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


							</div>
						</div>
					</div>

				</div><!-- /container -->
			</article>
		<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_footer();
?>
