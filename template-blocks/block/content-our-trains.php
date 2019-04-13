<?php
/**
 * Block Name: Train to rent
 *
 *
 */

// get image field (array)
// $our_train_image = get_field('train_to_rent_image');


// create id attribute for specific styling
$id = 'ourtrains-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container">
    <?php if( have_rows('our_train_repeater') ): ?>
      <?php while( have_rows('our_train_repeater') ): the_row(); ?>
        <?php
          $our_train_image = get_sub_field('image');
          $heading = get_sub_field('heading');
          $standings_heading = get_sub_field('standings_heading');
          $standings_number = get_sub_field('standings_number');
          $seats_heading = get_sub_field('seats_heading');
          $seats_number = get_sub_field('seats_number');
          $maxspeed_heading = get_sub_field('maxspeed_heading');
          $maxspeed_number = get_sub_field('maxspeed_number');
          $engine_heading = get_sub_field('engine_heading');
          $engine_number = get_sub_field('engine_number');
          $content_bottom = get_sub_field('content_bottom');
          $gallery = get_sub_field('gallery');
        ?>
        <div class="row ourtrain-train">
          <div class="col-md-3 p-0">
            <img src="<?php echo $our_train_image['url'] ?>" alt="<?php echo $our_train_image['alt'] ?>">
          </div>
          <div class="col-md-9">
            <div class="row no-gutters">
              <div class="col-md-12">
                <h3><?php echo $heading; ?></h3>
              </div>
                <div class="col-md-3">
                  <div class="row">
                    <div class="col-xl-3 col-md-12 col-sm-3 col-12">
                      <div class="svg icon">
                        <?php get_template_part('svg/handle.svg'); ?>
                      </div>
                    </div>
                    <div class="col-xl-9 col-md-12 col-sm-9 col-12">
                      <div class="train-specs">
                        <?php echo $standings_heading; ?><br/>
                        <span class="number"><strong><?php echo $standings_number; ?></strong></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="row">
                    <div class="col-xl-3 col-md-12 col-sm-3 col-12">
                      <div class="svg icon">
                        <?php get_template_part('svg/seat.svg'); ?>
                      </div>
                    </div>
                    <div class="col-xl-9 col-md-12 col-sm-9 col-12">
                      <div class="train-specs">
                        <?php echo $seats_heading; ?><br/>
                        <span class="number"><strong><?php echo $seats_number; ?></strong></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="row">
                    <div class="col-xl-3 col-md-12 col-sm-3 col-12 mt-1 mb-2">
                      <div class="svg icon">
                        <?php get_template_part('svg/tools_and_utensils.svg'); ?>
                      </div>
                    </div>
                    <div class="col-xl-9 col-md-12 col-sm-9 col-12">
                      <div class="train-specs">
                        <?php echo $maxspeed_heading; ?><br/>
                        <span class="number"><strong><?php echo $maxspeed_number; ?></strong></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="row">
                    <div class="col-xl-3 col-md-12 col-sm-3 col-12">
                      <div class="svg icon">
                        <?php get_template_part('svg/engine.svg'); ?>
                      </div>
                    </div>
                    <div class="col-xl-9 col-md-12 col-sm-9 col-12">
                      <div class="train-specs">
                        <?php echo $engine_heading; ?><br/>
                        <span class="number"><strong><?php echo $engine_number; ?></strong></span>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row mt-3">
              <div class="col">
                <?php echo $content_bottom; ?>
              </div>
            </div>
          </div>
          <div id="train_to_rent_gallery_<?php echo $id; ?>" class="row mt-3 no-gutters gallery">
            <?php if( $gallery ): ?>
              <?php foreach( $gallery as $image ): ?>
                <div class="col gallery-image">
                  <a href="<?php echo $image['url']; ?>" data-lightbox="ourtraingallery">
                    <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
                  </a>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>






<style type="text/css">
	#<?php echo $id; ?> {
    background-color: #fff;
    padding: 1rem 2rem 2rem 2rem;

    -webkit-box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
    -moz-box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
    box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
	}

  #<?php echo $id; ?> .ourtrain-content {
    padding: 2rem 0 0 0;
  }

  #<?php echo $id; ?> .ourtrain-train img {
    width: 100%;
  }

  #<?php echo $id; ?> .ourtrain-train h3 {
    font-family: 'source_sans_probold', sans-serif;
    font-size: 1.25rem;
    text-decoration: underline;
    margin: 0 0 1.5rem 0;
  }

  #<?php echo $id; ?> .ourtrain-content ul {
    margin-left: 2rem;
  }

  #<?php echo $id; ?> .ourtrain-train {
    background-color: #EEEEEE;
    border-radius: 12px;
    padding: 1rem 0.75rem;
    margin: 1rem 0;
  }

  #<?php echo $id; ?> .ourtrain-train p:last-child {
    margin-bottom: 0;
  }

  #<?php echo $id; ?> .ourtrain-train:last-child {
    margin-bottom: 0;
  }

  .ourtrain-train:nth-of-type(3n) {
    background-color: #DEDEDE !important;
  }

  #<?php echo $id; ?> .train-specs .number {
    font-size: 1.25rem;
  }

  #<?php echo $id; ?> .gallery-image:not(:first-child) {
    margin-left: 0.5rem;
  }




  @media (max-width: 767px) {
    #<?php echo $id; ?> {
      padding: 1rem;
    }

    #<?php echo $id; ?> .ourtrain-train img {
      margin-bottom: 1rem;
    }

  }

</style>
