<?php
/**
 * Block Name: svg-mapa-technologie
 *
 *
 */

// get image field (array)
// $train_to_rent_image = get_field('train_to_rent_image');


// create id attribute for specific styling
$id = 'svgmapatechnologie-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container">
    <div class="row">
      <div class="col">
        <?php the_field('svgmapatechnologie_content') ?>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <?php get_template_part('svg/svg_mapa_technologie.svg'); ?>
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


  @media (max-width: 767px) {

  }

</style>
