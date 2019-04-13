<?php
/**
 * Block Name: Train to rent
 *
 *
 */

// get image field (array)
$train_to_rent_image = get_field('train_to_rent_image');


// create id attribute for specific styling
$id = 'traintorent-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container">
    <div class="row traintorent-content">
      <div class="col">
        <?php the_field('train_to_rent_heading') ?>
      </div>
    </div>
    <?php if( have_rows('train_to_rent_repeater') ): ?>
      <?php while( have_rows('train_to_rent_repeater') ): the_row(); ?>
        <?php
          $train_to_rent_image = get_sub_field('image');
          $heading = get_sub_field('heading');
          $standings_heading = get_sub_field('standings_heading');
          $standings_number = get_sub_field('standings_number');
          $seats_heading = get_sub_field('seats_heading');
          $seats_number = get_sub_field('seats_number');
          $maxspeed_heading = get_sub_field('maxspeed_heading');
          $maxspeed_number = get_sub_field('maxspeed_number');
          $content_bottom = get_sub_field('content_bottom');
          $gallery = get_sub_field('gallery');
        ?>
        <div class="row traintorent-train">
          <div class="col-md-3 p-0">
            <img src="<?php echo $train_to_rent_image['url'] ?>" alt="<?php echo $train_to_rent_image['alt'] ?>">
          </div>
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-12">
                <h3><?php echo $heading; ?></h3>
              </div>
                <div class="col-md-4">
                  <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-2 col-12">
                      <div class="svg icon">
                        <?php get_template_part('svg/handle.svg'); ?>
                      </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-10 col-12">
                      <div class="train-specs">
                        <?php echo $standings_heading; ?><br/>
                        <span class="number"><strong><?php echo $standings_number; ?></strong></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-2 col-12">
                      <div class="svg icon">
                        <?php get_template_part('svg/seat.svg'); ?>
                      </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-10 col-12">
                      <div class="train-specs">
                        <?php echo $seats_heading; ?><br/>
                        <span class="number"><strong><?php echo $seats_number; ?></strong></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-2 col-12">
                      <div class="svg icon">
                        <?php get_template_part('svg/tools_and_utensils.svg'); ?>
                      </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-10 col-12">
                      <div class="train-specs">
                        <?php echo $maxspeed_heading; ?><br/>
                        <span class="number"><strong><?php echo $maxspeed_number; ?></strong></span>
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
                  <a href="<?php echo $image['url']; ?>" data-lightbox="traintorentgallery">
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
    padding: 0 2rem 1rem 2rem;

    -webkit-box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
    -moz-box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
    box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
	}

  #<?php echo $id; ?> .traintorent-content {
    padding: 2rem 0 0 0;
  }

  #<?php echo $id; ?> .traintorent-train img {
    width: 100%;
  }

  #<?php echo $id; ?> .traintorent-train h3 {
    font-family: 'source_sans_probold', sans-serif;
    font-size: 1.25rem;
    text-decoration: underline;
    margin: 0 0 1.5rem 0;
  }

  #<?php echo $id; ?> .traintorent-content ul {
    margin-left: 2rem;
  }

  #<?php echo $id; ?> .traintorent-train {
    background-color: #EEEEEE;
    border-radius: 12px;
    padding: 1rem 0.75rem;
    margin: 1rem 0;
  }

  #<?php echo $id; ?> .traintorent-train p:last-child {
    margin-bottom: 0;
  }

  #<?php echo $id; ?> .traintorent-train:last-child {
    margin-bottom: 0;
  }

  .traintorent-train:nth-of-type(3n) {
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
      padding: 0 0 1rem 0;
    }

    #<?php echo $id; ?> .traintorent-train img {
      margin-bottom: 1rem;
    }

  }

</style>
