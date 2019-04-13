<?php
/**
 * Block Name: Event advertisement stripe
 *
 *
 */

// get image field (array)
$eventadvertisementstripe_image = get_field('eventadvertisementstripe_image');

// create id attribute for specific styling
$id = 'eventadvertisementstripe-' . $block['id'];

?>

<section id="<?php echo $id; ?>" data-link="<?php the_field('eventadvertisementstripe_cta_href'); ?>">
  <div class="container p-0">
    <div class="row no-gutters">
      <div class="col-md-8 left-column">
        <img src="<?php echo $eventadvertisementstripe_image['url'] ?>" alt="<?php echo $eventadvertisementstripe_image['alt'] ?>" />
      </div>
      <div class="col-md-4 right-column">
        <h2><?php the_field('eventadvertisementstripe_heading') ?></h2>
        <h3 class="subheading"><?php the_field('eventadvertisementstripe_subheading') ?></h3>

        <!-- call to action -->
        <div class="call-to-action yellow">
          <h3><?php the_field('eventadvertisementstripe_cta_heading'); ?></h3>
          <h4><?php the_field('eventadvertisementstripe_cta_subheading'); ?></h4>
          <a href="<?php the_field('eventadvertisementstripe_cta_href'); ?>"><?php get_template_part('svg/ikona_sipka_bila_vice.svg'); ?></a>
        </div><!-- /call to action -->
      </div>
    </div>
  </div>
</section>




<style type="text/css">
	#<?php echo $id; ?> {
    margin: 1rem 0;

    -webkit-box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);

    cursor: pointer;
	}

  #<?php echo $id; ?> .right-column {
    padding: 2rem;
    background: #404D7A;
  }

  #<?php echo $id; ?> h2 {
    font-family: 'source_sans_probold', sans-serif;
    font-size: 2.5rem;
    color: #fff;
    line-height: 1.5;
    margin: 0;
    text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.3);
  }

  #<?php echo $id; ?> h3.subheading {
    font-family: 'source_sans_probold', sans-serif;
    font-size: 1.75rem;
    color: #fff;
    margin: 1rem 0 0 0;
    text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.3);
  }

  #<?php echo $id; ?> img {
    width: 100%;
  }

  #<?php echo $id; ?> .call-to-action {
    width: auto;
    left: 2rem;

    -webkit-box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
  }







  @media (max-width: 767px) {
    #<?php echo $id; ?> .right-column {
      min-height: 350px;
    }
  }

</style>
