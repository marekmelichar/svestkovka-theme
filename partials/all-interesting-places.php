<section class="all-interesting-places">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h2><strong><?php echo the_field('aip_heading'); ?></strong></h2>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card-deck">
          <?php $args_one = array( 'posts_per_page' => 3 ) ?>
          <?php $the_query = new WP_Query($args_one); ?>
          <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

            <div class="card">
              <div class="card-header">
                <a href="href="<?php the_permalink() ?>""><?php the_title(); ?></a>
              </div>
              <div class="card-body" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
              <div class="card-footer">
                <a href="<?php echo get_permalink( ); ?>" class="btn btn-info btn-yellow" role="button"><?php echo __('DETAIL VÝLETU') ?></a>
              </div>
            </div>

          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </div>

      </div>
    </div>
    <div class="row mt-5">
      <div class="col">
        <div class="card-deck">
          <?php $args_two = array(
            'category_name' => 'vylet',
            'posts_per_page' => 4,
            // Display posts from the 4th one:
            'offset' => 3
          ) ?>
          <?php $the_query = new WP_Query($args_two); ?>
          <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

            <div class="card">
              <div class="card-header">
                <a href="href="<?php the_permalink() ?>""><?php the_title(); ?></a>
              </div>
              <div class="card-body" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>); height: 300px;"></div>
              <div class="card-footer">
                <a href="<?php echo get_permalink( ); ?>" class="btn btn-info btn-yellow" role="button"><?php echo __('DETAIL VÝLETU') ?></a>
              </div>
            </div>

          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </div>

      </div>
    </div>

    <!-- to show on button click -->
    <div id="show_posts_from_8_to_12" class="row mt-5">
      <div class="col">
        <div class="card-deck">
          <?php $args_two = array(
            'category_name' => 'vylet',
            'posts_per_page' => 4,
            // Display posts from the 4th one:
            'offset' => 8
          ) ?>
          <?php $the_query = new WP_Query($args_two); ?>
          <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

            <div class="card">
              <div class="card-header">
                <a href="href="<?php the_permalink() ?>""><?php the_title(); ?></a>
              </div>
              <div class="card-body" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>); height: 300px;"></div>
              <div class="card-footer">
                <a href="<?php echo get_permalink( ); ?>" class="btn btn-info btn-yellow" role="button"><?php echo __('DETAIL VÝLETU') ?></a>
              </div>
            </div>

          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </div>

      </div>
    </div>
    <!-- / to show on button click -->

    <div class="row text-center my-3">
      <div class="col">
        <?php if(get_field('aip_button')): ?>
          <a id="<?php echo the_field("aip_id"); ?>" href="<?php echo the_field("aip_href"); ?>" class="btn btn-info btn-transparent" role="button"><?php echo the_field('aip_button'); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
