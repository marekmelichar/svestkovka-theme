<?php
/**
 * Block Name: Train to rent
 *
 *
 */

// get image field (array)
// $train_to_rent_image = get_field('train_to_rent_image');


// create id attribute for specific styling
$id = 'robotrain-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container">
    <div class="row">
      <div class="col">
        <h5><strong><?php the_field('robotrain_heading') ?></strong></h5>
        <h5><?php the_field('robotrain_subheading') ?></h5>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <?php get_template_part('svg/robotrain.svg'); ?>
      </div>
    </div>
    <div class="row no-gutters robotrain_specs">
      <div class="col-md-2">
        <div class="row no-gutters">
          <div class="col-3">
            <?php get_template_part('svg/handle.svg'); ?>
          </div>
          <div class="col-9 pl-2">
            <?php the_field('robotrain_standings') ?><br/>
            <strong><?php the_field('robotrain_standings_number') ?></strong>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="row no-gutters">
          <div class="col-3">
            <?php get_template_part('svg/seat.svg'); ?>
          </div>
          <div class="col-9 pl-2">
            <?php the_field('robotrain_seats') ?><br/>
            <strong><?php the_field('robotrain_seats_number') ?></strong>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="row no-gutters">
          <div class="col-3">
            <?php get_template_part('svg/tools_and_utensils.svg'); ?>
          </div>
          <div class="col-9 pl-2">
            <?php the_field('robotrain_maxspeed') ?><br/>
            <strong><?php the_field('robotrain_maxspeed_number') ?></strong>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="row no-gutters">
          <div class="col-3">
            <?php get_template_part('svg/engine.svg'); ?>
          </div>
          <div class="col-9 pl-2">
            <?php the_field('robotrain_engine') ?><br/>
            <strong><?php the_field('robotrain_engine_number') ?></strong>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="row no-gutters">
          <div class="col-3">
            <?php get_template_part('svg/muscle.svg'); ?>
          </div>
          <div class="col-9 pl-2">
            <?php the_field('robotrain_power') ?><br/>
            <strong><?php the_field('robotrain_power_number') ?></strong>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="row no-gutters">
          <div class="col-3">
            <?php get_template_part('svg/weight_1.svg'); ?>
          </div>
          <div class="col-9 pl-2">
            <?php the_field('robotrain_weight') ?><br/>
            <strong><?php the_field('robotrain_weight_number') ?></strong>
          </div>
        </div>
      </div>
    </div>
    <?php if( have_rows('robotrain_technologies_repeater') ): ?>
      <div class="row robotrain_technologies">
        <?php while( have_rows('robotrain_technologies_repeater') ): the_row(); ?>
          <?php
            $image = get_sub_field('image');
            $heading = get_sub_field('heading');
            $content = get_sub_field('content');
          ?>

          <div class="col-md-3">
            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
            <h6><?php echo $heading; ?></h6>
            <div class="content">
              <?php echo $content; ?>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>

    <?php $bottom_image = get_field('robotrain_bottom_content_image') ?>

    <div class="row robotrain_bottom_content">
      <div class="col-md-12">
        <h5><strong><?php the_field('robotrain_bottom_content_heading') ?></strong></h5>
      </div>
      <div class="col-md-4">
        <img src="<?php echo $bottom_image['url'] ?>" alt="<?php echo $bottom_image['alt'] ?>">
      </div>
      <div class="col-md-8">
        <?php the_field('robotrain_bottom_content_content') ?>
      </div>
    </div>
  </div>
</section>






<style type="text/css">
	#<?php echo $id; ?> {
    background-color: #fff;
    padding: 2rem;

    -webkit-box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
    -moz-box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
    box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
	}

  #<?php echo $id; ?> svg {
    width: 100%;
  }

  #<?php echo $id; ?> .robotrain_specs {
    background-color: #EEEEEE;
    border-radius: 12px;
    padding: 1rem 0.5rem 0.5rem 0.5rem;
    margin: 2rem 0 0 0;
  }

  #<?php echo $id; ?> h6 {
    font-family: 'source_sans_prosemibold', arial;
    margin: 1rem 0;
  }

  #<?php echo $id; ?> .robotrain_technologies {
    margin: 3rem 0 0 0;
  }

  #<?php echo $id; ?> .robotrain_bottom_content {
    margin: 3rem 0 0 0;
  }





  @media (max-width: 767px) {


  }

</style>
