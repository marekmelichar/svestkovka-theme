<?php
/**
 * Block Name: modern-local-rail-features
 *
 *
 */

// get image field (array)
// $train_to_rent_image = get_field('train_to_rent_image');


// create id attribute for specific styling
$id = 'modernlocalrailfeatures-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container">
    <div class="row">
      <div class="col">
        <?php the_field('modern_local_rail_features_top_content') ?>
      </div>
    </div>
    <div class="row no-gutters">
      <!-- 1st ROW heading -->
      <div class="col-md-12 my-3">
        <h5><strong><?php the_field('modern_local_rail_features_1st_row_heading') ?></strong></h5>
      </div>
      <!-- 1st ROW -->
      <?php if( have_rows('modern_local_rail_features_1st_row_repeater') ): ?>
        <?php while( have_rows('modern_local_rail_features_1st_row_repeater') ): the_row(); ?>
          <?php
            $icon = get_sub_field('icon');
            $heading = get_sub_field('heading');
            $content = get_sub_field('content');
          ?>
          <div class="col-md-4 modern-local-rail-features js--modern_local_rail_features">
            <div class="row">
              <div class="col-md-2 sm-pad">
                <div class="yellow-oval">
                  <?php get_template_part('svg/' . $icon . '.svg'); ?>
                </div>
              </div>
              <div class="col-md-10">
                <h6><?php echo $heading; ?></h6>
                <div class="content">
                  <?php echo $content; ?>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <!-- /1st ROW -->
    </div>
    <div class="row no-gutters">
      <!-- 2nd ROW heading -->
      <div class="col-md-12 my-4">
        <h5><strong><?php the_field('modern_local_rail_features_2nd_row_heading') ?></strong></h5>
      </div>
      <!-- 2nd ROW -->
      <?php if( have_rows('modern_local_rail_features_2nd_row_repeater') ): ?>
        <?php while( have_rows('modern_local_rail_features_2nd_row_repeater') ): the_row(); ?>
          <?php
            $icon = get_sub_field('icon');
            $heading = get_sub_field('heading');
            $content = get_sub_field('content');
          ?>
          <div class="col-md-4 modern-local-rail-features js--modern_local_rail_features">
            <div class="row">
              <div class="col-md-2 sm-pad">
                <div class="yellow-oval">
                  <?php get_template_part('svg/' . $icon . '.svg'); ?>
                </div>
              </div>
              <div class="col-md-10">
                <h6><?php echo $heading; ?></h6>
                <div class="content">
                  <?php echo $content; ?>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <!-- /2nd ROW -->
    </div>
    <div class="row mt-5">
      <div class="col-md-12">
        <h5><strong><?php the_field('modern_local_rail_features_bottom_heading') ?></strong></h5>
      </div>
      <div class="col-md-12">
        <?php the_field('modern_local_rail_features_bottom_content') ?>
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

  #<?php echo $id; ?> h6 {
    font-family: 'source_sans_probold', sans-serif;
    font-size: 1.125rem;
  }

  #<?php echo $id; ?> .yellow-oval {
    background-color: #FFD400;
    border-radius: 21px;
    height: 100%;
    width: 100%;
    padding: 0;
    text-align: center;
  }

  #<?php echo $id; ?> .yellow-oval svg {
    margin: 10px 0 0 0;
  }

  #<?php echo $id; ?> .modern-local-rail-features .sm-pad {
    padding: 0 8px;
  }




  @media (max-width: 767px) {
    #<?php echo $id; ?> .yellow-oval {
      height: auto;
    }
  }

</style>
