<?php
/**
 * Block Name: search-train-results
 *
 *
 */

// get image field (array)
// $train_to_rent_image = get_field('train_to_rent_image');


// create id attribute for specific styling
$id = 'searchtrainresults-' . $block['id'];

?>

<?php
  // $jizdni_rad_db = new wpdb('marekmel_jizdnir','6m8YAY92b3fT','marekmel_jizdni_rad','es38.siteground.eu');
  // $query = "SELECT * FROM `jizdni_rad`";
  // $result_b = $jizdni_rad_db->get_results($query);
  // $jizdni_rad_db->print_error();
  // var_dump($result_b);
?>

<section id="<?php echo $id; ?>">
  <div class="container">
    <div class="row">
      <div class="col-md-12 search-train-results">
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
            global $wpdb;
            $query = "SELECT * FROM `jizdni_rad`";
            $result = $wpdb->get_results($query);

            foreach($result as $train) {
              // echo '<pre>';
              // var_dump($train);
              // echo '</pre>';

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
              $km = $km_to - $km_from . "km";
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

          <div class="row">
            <div class="col">
              <h1><?php the_field('searchtrainresults_heading') ?></h1>
              <h2><?php echo $search_date; ?></h2>
            </div>
          </div>

          <?php if ($search_date == "30.03.2019") { ?>
          <div class="row mb-5">
            <div class="col">
              <img src="https://svestkovka.marekmelichar.cz/wp-content/uploads/2019/03/parni_vlak_papousek_jizdni_rad.png" alt="parni_vlak_papousek_jizdni_rad">
            </div>
          </div>
          <?php } ?>

          <?php
            for ($i = 0; $i <= 2; $i++) {
          ?>


          <div class="table-responsive search-train-table <?php if($i == 0){echo 'first';} ?>">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col train-icon"><?php get_template_part('svg/baseline_train.svg'); ?></th>
                  <th scope="col"></th>
                  <th scope="col">Odkud / kam</th>
                  <th scope="col">Příj.</th>
                  <th scope="col">Odj.</th>
                  <th scope="col">Poznámka</th>
                  <th scope="col">Spoj</th>
                  <th scope="col">Služby</th>
                  <th scope="col">Doba / vzdálenost</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><?php get_template_part('svg/sipka_pro_smer_vlaku.svg'); ?></th>
                  <th scope="row"><strong>Z:</strong></th>
                  <td class="trip-from"><strong><?php echo $name_from; ?></strong></td>
                  <td>-</td>
                  <td><?php echo $time_from[$i]; ?></td>
                  <td></td>
                  <td><strong>Os <?php echo $trains[$i]; ?></strong></td>
                  <td>
                    <?php //get_template_part('svg/wheelchair_access.svg'); ?>
                    <?php get_template_part('svg/bicycle.svg'); ?>
                    <?php //get_template_part('svg/baseline_wifi.svg'); ?>
                  </td>
                  <td>
                    <?php echo $time; ?><br/>
                    <?php echo $km; ?>
                  </td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <th scope="row"><strong>Do:</strong></th>
                  <td class="trip-to"><strong><?php echo $name_to; ?></strong></td>
                  <td><?php echo $time_to[$i]; ?></td>
                  <td>-</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>

      <?php } ?>
    <?php } else { ?>
      <span class="search-error">Nebyly zadané parametry správně</span>
    <?php }
      } else { ?>
        <span class="search-error">Nebyly zadané parametry pro vyhledávání</span>
    <?php }	?>
      </div>
    </div><!-- /row -->


    <div class="row mt-5">
      <div class="col">
        <h6><strong>Vysvětlivky symbolů:</strong></h6>
      </div>
    </div>
    <div class="row legenda">
      <div class="col-md-1">
        <?php get_template_part('svg/wheelchair_access.svg'); ?>
      </div>
      <div class="col-md-11">
        Vlak je vhodný pro přepravu cestujících na vozíku
      </div>
    </div>
    <div class="row legenda">
      <div class="col-md-1">
        <?php get_template_part('svg/bicycle.svg'); ?>
      </div>
      <div class="col-md-11">
        Vlak umožňuje přepravu jízdních kol
      </div>
    </div>
    <div class="row legenda">
      <div class="col-md-1">
        <?php get_template_part('svg/baseline_wifi.svg'); ?>
      </div>
      <div class="col-md-11">
        Ve vlaku je k dispozici připojení k internetu
      </div>
    </div>
    <!-- <div class="row legenda">
      <div class="col-md-1">
        <?php get_template_part('svg/svg_R.svg'); ?>
      </div>
      <div class="col-md-11">
        Do vlaku lze zakoupit místenku
      </div>
    </div> -->

  </div><!-- /container -->
</section>







<style type="text/css">
  #<?php echo $id; ?> {
    padding: 2rem;
    background-color: #fff;

    -webkit-box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
  }

  #<?php echo $id; ?> h1 {
    text-align: center;
    font-family: 'source_sans_probold', sans-serif;
    font-size: 2.25rem;
    color: #404D7A;
    margin: 0;
  }

  #<?php echo $id; ?> h2 {
    text-align: center;
    font-family: 'source_sans_proregular', sans-serif;
    font-size: 1rem;
    color: #404D7A;
    margin: 0 0 5rem 0;
    position: relative;
  }

  #<?php echo $id; ?> h2:after {
    content: '';
    position: absolute;
    bottom: -2rem;
    left: 0;
    right: 0;
    background: #404D7A;
    height: 1px;
  }

  .search-train-table {
    margin: 2rem 0 0 0;
    background-color: #F3F3F3;
    border-radius: 3px;
    border: 1px solid #E8E8E8;
    padding: 1rem;
  }

  .search-train-table.first {
    margin: 0;
  }

  #<?php echo $id; ?> #sipka_pro_smer_vlaku {
    position: absolute;
  }

  #<?php echo $id; ?> .table {
    margin: 0;
  }

  #<?php echo $id; ?> .table td,
  #<?php echo $id; ?> .table th {
    border-top: none;
  }

  #<?php echo $id; ?> .table thead th {
    border-bottom: 2px solid #404D7A;
    vertical-align: middle;
    padding: 0 0 10px 0;
  }

  #<?php echo $id; ?> .table tbody tr th,
  #<?php echo $id; ?> .table tbody tr td {
    padding: 10px 0 0 0;
    vertical-align: middle;
    line-height: 1.25;
  }



  @media (max-width: 767px) {

  }

</style>
