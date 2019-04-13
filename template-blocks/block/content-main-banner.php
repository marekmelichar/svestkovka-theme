<?php
/**
 * Block Name: Main banner
 *
 * This is the template that displays the Main banner block.
 */

// get image field (array)
$main_banner_bg_image = get_field('main_banner_bg_image');

// create id attribute for specific styling
$id = 'mainbanner-' . $block['id'];

?>

<section id="<?php echo $id; ?>" style="background-image: url(<?php echo $main_banner_bg_image['url']; ?>);">
  <div class="container">
    <div class="svestkovka-logo">
      <?php get_template_part('svg/svestkova_draha_logo.svg'); ?>
    </div>
    <h2><?php the_field('main_banner_subheading'); ?></h2>



    <!-- search-train -->
    <?php
  		global $wpdb;
  		// $query = "SELECT nazevStanice, id FROM `stanice` WHERE zastavovat ORDER BY poradiStanice";
  		$query = "SELECT zastavka, id FROM `jizdni_rad`";
  		$result = $wpdb->get_results($query);
      // var_dump($result);
	  ?>

    <form method="post" action="<?php echo get_home_url(); ?>/hledat-spojeni" class="search-train">

      <div class="row">
        <div class="col">
          <h3><?php the_field('search_train_heading'); ?></h3>
          <div class="underline"></div>
        </div>
      </div>

      <div class="row mt-2">
  			<div class="col-md-6">
  				<div class="from">
  					<label><?php the_field('search_train_text_from'); ?></label>
  					<select class="form-control-sm" name="search_from" required>
  						<option value="" disabled selected>Vyberte...</option>

  						<?php foreach ($result as $instance) { ?>

  							<!-- <option value=<?php echo $instance->id ?>><?php echo $instance->nazevStanice ?></option> -->
  							<option value=<?php echo $instance->id ?>><?php echo $instance->zastavka ?></option>

  						<?php } ?>

  					</select>
  				</div>
				</div>
        <div class="col-md-6">
          <div class="to">
  					<label><?php the_field('search_train_text_to'); ?></label>
  					<select class="form-control-sm" name="search_to" required>
  						<option value="" disabled selected>Vyberte...</option>

  						<?php foreach ($result as $instance) { ?>

  							<!-- <option value=<?php echo $instance->id ?>><?php echo $instance->nazevStanice ?></option> -->
                <option value=<?php echo $instance->id ?>><?php echo $instance->zastavka ?></option>

  						<?php } ?>

  					</select>
  				</div>
				</div>
  		</div>

      <div class="row mt-2">
  			<div class="col-md-6">
          <div class="when mt-2">
  					<label><?php the_field('search_train_text_when'); ?></label>
            <input id="datepicker" type="text" name="search_date" required="required" placeholder="Vyberte..." autocomplete="off" readonly="readonly" />
  				</div>
  			</div>
        <div class="col-md-6 mt-2">
          <button type="submit" class="btn btn-primary"><?php the_field('search_train_button_text'); ?></button>
        </div>
      </div>
      <!-- <button type="submit" class="btn btn-primary"><?php the_field('search_train_button_text'); ?></button> -->
		</form> <!-- /search-train -->

    <!-- call to action -->
    <!-- <div class="call-to-action"> -->
    <a class="call-to-action" href="<?php the_field('search_train_cta_anchor'); ?>">
      <h3><?php the_field('search_train_cta_heading'); ?></h3>
      <h4><?php the_field('search_train_cta_subheading'); ?></h4>
      <?php get_template_part('svg/ikona_sipka_zluta_vice.svg'); ?>
    </a><!-- /call to action -->
  </div>
</section>




<style type="text/css">
	#<?php echo $id; ?> {
    position: relative;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    padding: 1rem 1rem 2rem 1rem;
    font-size: 0.75rem;
	}

  #<?php echo $id; ?> h2 {
    font-family: 'source_sans_prosemibold', sans-serif;
    text-align: center;
  }

  #<?php echo $id; ?> h2:before {
    content: '';
    display: block;
    position: absolute;
    height: 1px;
    background: #404D7A;
    width: 250px;
    top: -18px;
    left: 50%;
    transform: translateX(-50%);
  }

  #<?php echo $id; ?> .svestkovka-logo {
    text-align: center;
    margin: 3rem auto 2rem auto;
  }

  #<?php echo $id; ?> #svestkova_draha_logo {
    width: 100%;
  }

  #<?php echo $id; ?> .call-to-action {
    cursor: pointer;
  }

  #<?php echo $id; ?> .call-to-action svg {
    position: absolute;
    right: 12px;
    top: 12px;
  }




  @media (max-width: 767px) {
    #<?php echo $id; ?> {
      padding: 1rem 1rem 8rem 1rem;
    }

    #<?php echo $id; ?> .to {
      margin: 1rem 0 0 0;
    }
  }

</style>
