<?php
/**
 * Block Name: parni-vlak-papousek
 *
 *
 */

// get image field (array)
// $white_stripe_left_image = get_field('white_stripe_left_image');


// create id attribute for specific styling
$id = 'parnivlakpapousek-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container">

    <div class="row">
      <div class="col">
        <?php the_field('first_row_content') ?>
      </div>
    </div>

    <div class="row">

      <div class="col-md-12 mt-5">
        <h5><strong><?php the_field('second_row_heading') ?></strong></h5>
      </div>

      <div class="row no-gutters papousek-specs">
        <div class="col-md-3">
          <div class="row">
            <div class="col-2">
              <div class="svg">
                <?php get_template_part('svg/medal.svg') ?>
              </div>
            </div>
            <div class="col-10">
              <div class="row">
                <div class="col-5 pipe-after">
                  <?php the_field('second_row_type_name') ?><br/>
                  <strong><?php the_field('second_row_type_number') ?></strong>
                </div>
                <div class="col-7">
                  <?php the_field('second_row_produced_name') ?><br/>
                  <strong><?php the_field('second_row_produced_number') ?></strong>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="row">
            <div class="col-2">
              <div class="svg">
                <?php get_template_part('svg/package.svg') ?>
              </div>
            </div>
            <div class="col-10">
              <div class="row">
                <div class="col-5 pl-4 pr-0 pipe-after length">
                  <?php the_field('second_row_length_name') ?><br/>
                  <strong><?php the_field('second_row_length_number') ?></strong>
                </div>
                <div class="col-7">
                  <?php the_field('second_row_wheelbase_name') ?><br/>
                  <strong><?php the_field('second_row_wheelbase_number') ?></strong>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="row no-gutters">
            <div class="col-3">
              <div class="svg">
                <?php get_template_part('svg/tools_and_utensils.svg') ?>
              </div>
            </div>
            <div class="col-9">
              <?php the_field('second_row_speed_name') ?><br/>
              <strong><?php the_field('second_row_speed_number') ?></strong>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="row no-gutters">
            <div class="col-3 pl-2">
              <div class="svg">
                <?php get_template_part('svg/engine.svg') ?>
              </div>
            </div>
            <div class="col-9 pl-3">
              <?php the_field('second_row_power_name') ?><br/>
              <strong><?php the_field('second_row_power_number') ?></strong>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="row">
            <div class="col-3">
              <div class="svg">
                <?php get_template_part('svg/weight_1.svg') ?>
              </div>
            </div>
            <div class="col-9">
              <?php the_field('second_row_weight_name') ?><br/>
              <strong><?php the_field('second_row_weight_number') ?></strong>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 mt-5">
        <?php the_field('third_row_content') ?>
      </div>

      <div class="col-md-12 __mt-5">
        <?php if(get_field('fourth_row_content_left') && get_field('fourth_row_tickets_heading')) : ?>
          <div class="row">
            <div class="col-md-6">
              <?php the_field('fourth_row_content_left') ?>
            </div>
            <div class="col-md-6">
              <h5><strong><?php the_field('fourth_row_tickets_heading') ?></strong></h5>
              <div class="row no-gutters papousek-jizdne">
                <div class="col-md-2">
                  <?php get_template_part('svg/airplane_ticket.svg') ?>
                </div>
                <div class="col-md-2 pipe-after jizdne">
                  <?php the_field('fourth_row_tickets_adults_heading') ?><br/>
                  <strong><?php the_field('fourth_row_tickets_adults_price') ?></strong>
                </div>
                <div class="col-md-3">
                  <?php the_field('fourth_row_tickets_kids_heading') ?><br/>
                  <strong><?php the_field('fourth_row_tickets_kids_price') ?></strong>
                </div>
                <div class="col-md-5">
                  <?php the_field('fourth_row_tickets_sidenote') ?>
                </div>
              </div>
            </div>
          </div>
        <?php else : ?>
          <div class="row">
            <div class="col">
              <?php the_field('fourth_row_content_left') ?>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>

    <?php $pap_image = get_field('jizdni_rad_papousek_image') ?>
    <div class="row">
      <div class="col">
        <img src="<?php echo $pap_image['url'] ?>" alt="<?php echo $pap_image['alt'] ?>">
      </div>
    </div>
  </div>
</section>




<style type="text/css">
	#<?php echo $id; ?> {
    padding: 2rem;
    background-color: #fff;

    -webkit-box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
    -moz-box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
    box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
	}

  #<?php echo $id; ?> .papousek-specs {
    background-color: #EEEEEE;
    border-radius: 12px;
    padding: 1rem;
    width: 100%;
  }

  #<?php echo $id; ?> .pipe-after:after {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: 1px;
    background-color: #404D7A;
  }

  #<?php echo $id; ?> .pipe-after.length:after {
    right: 4px;
  }

  #<?php echo $id; ?> .pipe-after.jizdne:after {
    right: 8px;
  }

  #<?php echo $id; ?> #tools_and_utensils {
    margin: 0 0 0 -10px;
  }

  #<?php echo $id; ?> .papousek-jizdne {
    background-color: #EEEEEE;
    border-radius: 12px;
    padding: 1rem;
    width: 100%;
  }




  @media (max-width: 767px) {
    #<?php echo $id; ?> .papousek-specs > div[class*="col-"] {
      margin: 2rem 0 0 0;
    }

    #<?php echo $id; ?> .pipe-after.jizdne:after {
      display: none;
    }
  }

</style>
