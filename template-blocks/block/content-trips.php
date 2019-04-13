<?php
/**
 * Block Name: Trips
 *
 *
 */

// get image field (array)
// $train_to_rent_image = get_field('train_to_rent_image');


// create id attribute for specific styling
$id = 'trips-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container line-after">
    <div class="row">
      <div class="col">
        <h1><?php the_field('trips_heading') ?></h1>
        <h2><?php the_field('trips_subheading') ?></h2>
      </div>
    </div>
  </div>


  <!-- ROW 1 -->
  <?php
  $today = getdate();
  $args = array(
      'posts_per_page' => 3
  );
  $posts_row_1 = new WP_Query( $args ); // The Query ?>

  <?php if( $posts_row_1->have_posts() ) { ?>

    <div class="container">

      <div class="row trips">

        <?php while ( $posts_row_1->have_posts() ) : $posts_row_1->the_post(); // The Loop ?>
          <!-- <?php $excerpt_custom_image = get_field('excerpt_custom_image', get_the_id()); ?> -->
          <div class="col trip">
            <h3 class="heading"><?php echo get_the_title(); ?></h3>
            <?php //echo get_the_post_thumbnail(); ?>
            <!-- <img src="<?php echo $excerpt_custom_image['url'] ?>" alt="<?php echo $excerpt_custom_image['alt'] ?>" /> -->

            <a href="<?php echo get_permalink($post->ID); ?>">
              <div class="trip-bg lg" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID); ?>);"></div>
            </a>
            <a class="btn btn-warning" href="<?php echo get_permalink(); ?>">
              <?php the_field('trips_button_text', 'option'); ?>
            </a>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

      </div>

    </div>
  <?php } ?>



  <!-- ROW 2 -->
  <?php
  $today = getdate();
  $args = array(
      'posts_per_page' => 4,
      'offset' => 3
  );
  $posts_row_2 = new WP_Query( $args ); // The Query ?>

  <?php if( $posts_row_2->have_posts() ) { ?>

    <div class="container mt-5">

      <div class="row trips">

        <?php while ( $posts_row_2->have_posts() ) : $posts_row_2->the_post(); // The Loop ?>
          <!-- <?php $excerpt_custom_image = get_field('excerpt_custom_image', get_the_id()); ?> -->
          <div class="col trip">
            <h3 class="heading"><?php echo get_the_title(); ?></h3>
            <?php //echo get_the_post_thumbnail(); ?>
            <!-- <img src="<?php echo $excerpt_custom_image['url'] ?>" alt="<?php echo $excerpt_custom_image['alt'] ?>" /> -->

            <a href="<?php echo get_permalink($post->ID); ?>">
              <div class="trip-bg" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID); ?>);"></div>
            </a>
            <a class="btn btn-warning" href="<?php echo get_permalink(); ?>">
              <?php the_field('trips_button_text', 'option'); ?>
            </a>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

      </div>

    </div>
  <?php } ?>



  <!-- UKAŽ DALŠÍ VÝLETY -->
  <div id="load_more_posts_here"></div>
  <a id="trips_button_show_more_posts" href="#" class="btn btn-outline-primary"><?php the_field('trips_button_show_more_posts') ?></a>


  <!-- <div id="root_weather_forecast"></div> -->
  <div class="container weather-forecast">
    <div class="row">
      <div class="col">
        <h2><?php the_field('trips_weather_forecast_heading') ?></h2>
        <h3><?php the_field('trips_weather_forecast_subheading') ?></h3>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <?php the_field('trips_weather_forecast') ?>
      </div>
    </div>
  </div>

</section>






<style type="text/css">
  #<?php echo $id; ?> {
    background-color: #fff;
    padding: 2rem 0;
    text-align: center;
    position: relative;

    -webkit-box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
    -moz-box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
    box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);

    margin: -4rem 0 0 0;
    position: relative;
    z-index: 999;
  }

  #<?php echo $id; ?> .line-after {
    position: relative;
    padding: 0 0 2rem 0;
    margin: 0 0 2rem 0;
  }

  #<?php echo $id; ?> .line-after:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 3rem;
    right: 3rem;
    background: #404D7A;
    height: 1px;
  }

  #<?php echo $id; ?> h1 {
    font-family: 'source_sans_probold', sans-serif;
    font-size: 2.25rem;
    color: #404D7A;
    margin: 0;
  }

  #<?php echo $id; ?> h2 {
    font-family: 'source_sans_proregular', sans-serif;
    font-size: 1rem;
    color: #404D7A;
    margin: 0;
  }

  .trip h3 {
    font-family: 'source_sans_prosemibold', sans-serif;
    font-size: 1rem;
    text-align: center;
  }

  .trip .btn {
    width: 100%;
  }

  .trips {
    padding: 0 2rem;
  }

  #<?php echo $id; ?> .btn.btn-outline-primary {
    margin-top: 2.5rem;
    width: 50%;
  }

  .trip {
    margin: 1rem 0;
  }

  .trip-bg {
    min-height: 200px;
    position: relative;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
  }

  .trip-bg.lg {
    min-height: 300px;
  }

  /* .trip.load-more {
    margin: 1rem 0;
  } */

  .trips-after-load-more {
    padding: 0 2rem;
  }

  .weather-forecast {
    margin: 4rem 0 0 0;
  }

  .weather-forecast > .row {
    padding: 0 2rem;
  }

  #<?php echo $id; ?> .weather-forecast h2,
  .weather-forecast h2 {
    font-family: 'source_sans_probold', sans-serif;
    font-size: 2.125rem;
  }

  #<?php echo $id; ?> .weather-forecast h3,
  .weather-forecast h3 {
    font-family: 'source_sans_proregular', sans-serif;
    font-size: 1.25rem;
  }

  .weather-forecast h3:after {
    content: '';
    position: absolute;
    bottom: -12px;
    left: 2rem;
    right: 2rem;
    background: #404D7A;
    height: 1px;
  }





  @media (max-width: 767px) {

  }

</style>
