<?php
/**
 * Block Name: Contact tiles
 *
 *
 */

// get image field (array)
// $train_to_rent_image = get_field('train_to_rent_image');

$svg_left = get_field('contact_tiles_left_logo');
$svg_right = get_field('contact_tiles_right_logo');


// create id attribute for specific styling
$id = 'contacttiles-' . $block['id'];

?>

<section class="contact-section" id="<?php echo $id; ?>">
  <div class="row m-0">
    <div class="col-md-6">
      <div class="row contact-tile m-0">
        <div class="col-xl-2 col-lg-3 col-md-12">
          <div class="svg">
            <?php get_template_part('svg/'.$svg_left.'.svg'); ?>
          </div>
        </div>
        <div class="col-xl-10 col-lg-9 col-md-12">
          <?php echo the_field('contact_tiles_left_content') ?>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row contact-tile m-0">
        <div class="col-xl-2 col-lg-3 col-md-12">
          <div class="svg">
            <?php get_template_part('svg/'.$svg_right.'.svg'); ?>
          </div>
        </div>
        <div class="col-xl-10 col-lg-9 col-md-12">
          <?php echo the_field('contact_tiles_right_content') ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <?php echo the_field('contact_tiles_bottom_content') ?>
    </div>
  </div>
</section>






<style type="text/css">
  #<?php echo $id; ?> {
    padding: 2rem 2rem 1rem 2rem;
    background-color: #fff;
  }

  #<?php echo $id; ?> .contact-tile {
    background-color: #EEEEEE;
    padding: 1rem;
    border-radius: 0.75rem;
  }






  @media (max-width: 767px) {

  }

</style>
