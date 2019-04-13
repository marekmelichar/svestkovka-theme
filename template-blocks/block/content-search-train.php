<?php
/**
 * Block Name: search-train
 *
 *
 */

// get image field (array)
// $train_to_rent_image = get_field('train_to_rent_image');


// create id attribute for specific styling
$id = 'searchtrain-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container">

    <?php
  		global $wpdb;
  		$query = "SELECT zastavka, id FROM `jizdni_rad`";
  		$result = $wpdb->get_results($query);
	  ?>

    <form method="post" action="<?php echo get_home_url(); ?>/hledat-spojeni" class="horizontal-search-train">
      <div class="row">
        <div class="col-md-3">
          <h3><?php the_field('horizontal_search_train_heading'); ?></h3>
          <div class="underline"></div>
        </div>
        <div class="col-md-2">
          <div class="from">
  					<label><?php the_field('horizontal_search_train_text_from'); ?></label>
  					<select class="form-control-sm" name="search_from" required>
  						<option value="" disabled selected>Vyberte...</option>

  						<?php foreach ($result as $instance) { ?>
  							<option value=<?php echo $instance->id ?>><?php echo $instance->zastavka ?></option>
  						<?php } ?>

  					</select>
  				</div>
        </div>
        <div class="col-md-2">
          <div class="to">
  					<label><?php the_field('horizontal_search_train_text_to'); ?></label>
  					<select class="form-control-sm" name="search_to" required>
  						<option value="" disabled selected>Vyberte...</option>

  						<?php foreach ($result as $instance) { ?>
                <option value=<?php echo $instance->id ?>><?php echo $instance->zastavka ?></option>
  						<?php } ?>

  					</select>
  				</div>
        </div>
        <div class="col-md-2">
          <div class="when">
  					<label><?php the_field('horizontal_search_train_text_when'); ?></label>
            <input id="datepicker" type="text" name="search_date" required="required" placeholder="Vyberte..." readonly="readonly">
  				</div>
        </div>
        <div class="col-md-3">
          <button type="submit" class="btn btn-primary"><?php the_field('horizontal_search_train_button_text'); ?></button>
        </div>
      </div>
    </form>

  </div>
</section>






<style type="text/css">
  #<?php echo $id; ?> {
    padding: 1rem 2rem;
    background: #fff;
  }

  .horizontal-search-train {
    background-color: #FFD400;
    border-radius: 0;
    padding: 1rem;
    -webkit-box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
  }

  .horizontal-search-train h3 {
    font-family: 'source_sans_probold', sans-serif;
    font-size: 1rem;
    color: #404D7A;
  }

  .horizontal-search-train .underline {
    width: 100%;
    background: #404D7A;
    height: 1px;
    margin: 28px 0 0 0;
  }

  .horizontal-search-train label {
    font-family: 'source_sans_proregular', sans-serif;
    font-size: 1rem;
  }

  .horizontal-search-train select {
    width: 100%;
    height: 38px !important;

    -webkit-appearance: none;
      -moz-appearance: none;
      -webkit-border-radius: 0px;
      background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPScxLjEnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZycgeG1sbnM6eGxpbms9J2h0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsnIHdpZHRoPScyNCcgaGVpZ2h0PScyNCcgdmlld0JveD0nMCAwIDI0IDI0Jz48cGF0aCBmaWxsPScjNDQ0JyBkPSdNNy40MDYgNy44MjhsNC41OTQgNC41OTQgNC41OTQtNC41OTQgMS40MDYgMS40MDYtNiA2LTYtNnonPjwvcGF0aD48L3N2Zz4=");
      background-position: 99% 50%;
      background-repeat: no-repeat;
      background-size: 16px;
  }

  .horizontal-search-train input {
    width: 100%;
    height: 38px !important;
    font-size: 0.875rem;
    padding: 0 8px;
  }

  .horizontal-search-train button {
    width: 100%;
    margin: 2rem 0 0 0;
    height: 38px;
  }

  .horizontal-search-train div[class*="col-"]:first-child {
    padding-right: 0;
  }





  @media (max-width: 767px) {

  }

</style>
