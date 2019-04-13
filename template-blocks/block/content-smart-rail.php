<?php
/**
 * Block Name: smart-rail
 *
 *
 */

// get image field (array)
// $train_to_rent_image = get_field('train_to_rent_image');


// create id attribute for specific styling
$id = 'smartrail-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container">
    <?php if (get_field('smartrail_heading')) { ?>
      <div class="row">
        <div class="col">
          <h5><?php the_field('smartrail_heading') ?></h5>
        </div>
      </div>
    <?php } ?>


    <?php if( have_rows('smartrail_repeater') ): ?>
      <div class="row">
      <?php while( have_rows('smartrail_repeater') ): the_row(); ?>
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

  #<?php echo $id; ?> h5 {
    font-family: 'source_sans_probold', sans-serif;
  }

  #<?php echo $id; ?> h6 {
    margin: 1rem 0 0.5rem 0;
  }




  @media (max-width: 767px) {

  }

</style>
