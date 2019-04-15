<?php
/**
 * Block Name: Teaser box
 *
 *
 */

// get image field (array)
$white_stripe_left_image = get_field('white_stripe_left_image');
$white_stripe_right_image = get_field('white_stripe_right_image');

$gray_stripe_image_1 = get_field('gray_stripe_image_1');
$gray_stripe_image_2 = get_field('gray_stripe_image_2');
$gray_stripe_image_3 = get_field('gray_stripe_image_3');

// create id attribute for specific styling
$id = 'teaserbox-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container">
    <div class="row white-stripe">
      <div class="col-md-6">
        <h2><?php the_field('white_stripe_heading_left') ?></h2>
        <h3><?php the_field('white_stripe_subheading_left') ?></h3>
        <a href="<?php the_field('white_stripe_btn_text_left_href') ?>">
          <img src="<?php echo $white_stripe_left_image['url'] ?>" alt="<?php echo $white_stripe_left_image['alt'] ?>">
          <span class="btn btn-warning"><?php the_field('white_stripe_btn_text_left') ?></span>
        </a>
      </div>
      <div class="col-md-6">
        <h2><?php the_field('white_stripe_heading_right') ?></h2>
        <h3><?php the_field('white_stripe_subheading_right') ?></h3>
        <a href="<?php the_field('white_stripe_btn_text_right_href') ?>">
          <img src="<?php echo $white_stripe_right_image['url'] ?>" alt="<?php echo $white_stripe_right_image['alt'] ?>">
          <span class="btn btn-warning"><?php the_field('white_stripe_btn_text_right') ?></span>
        </a>
      </div>
    </div>
    <div class="row gray-stripe">
      <div class="col-md-6 images-row">
        <a href="<?php the_field('gray_stripe_content_text_more_href') ?>"><img src="<?php echo $gray_stripe_image_1['url'] ?>" alt="<?php echo $gray_stripe_image_1['alt'] ?>"></a>
        <a href="<?php the_field('gray_stripe_content_text_more_href') ?>"><img src="<?php echo $gray_stripe_image_2['url'] ?>" alt="<?php echo $gray_stripe_image_2['alt'] ?>"></a>
        <a href="<?php the_field('gray_stripe_content_text_more_href') ?>"><img src="<?php echo $gray_stripe_image_3['url'] ?>" alt="<?php echo $gray_stripe_image_3['alt'] ?>"></a>
      </div>
      <div class="col-md-6 right-side">
        <h2><?php the_field('gray_stripe_heading') ?></h2>
        <div class="content">
          <?php the_field('gray_stripe_content') ?>
        </div>
        <div class="more">
          <a href="<?php the_field('gray_stripe_content_text_more_href') ?>">
            <span class="text-more"><?php the_field('gray_stripe_content_text_more') ?></span>
            <span class="icon-more"><?php get_template_part('svg/ikona_sipka_modra_vice.svg'); ?></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>




<style type="text/css">
	#<?php echo $id; ?> {
    -webkit-box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
	}

	#<?php echo $id; ?> .white-stripe {
    padding: 2rem;
    background: #fff;
	}

  #<?php echo $id; ?> .white-stripe img {
    width: 100%;
  }

  #<?php echo $id; ?> h2 {
    font-family: 'source_sans_probold', sans-serif;
    font-size: 1.25rem;
    color: #404D7A;
    margin: 0 0 0.25rem 0;
  }

  #<?php echo $id; ?> h3 {
    font-family: 'source_sans_proregular', sans-serif;
    font-size: 1rem;
    color: #404D7A;
    margin-bottom: 1rem;
  }

  #<?php echo $id; ?> .btn {
    position: absolute;
    bottom: 20px;
    right: 15px;
  }

  #<?php echo $id; ?> .gray-stripe {
    background: #EEEEEE;
    padding: 2rem;
  }

  #<?php echo $id; ?> .images-row {
    display: flex;
    justify-content: flex-start;
  }

  #<?php echo $id; ?> .gray-stripe img {
    margin: 0 5px 0 0;
    max-width: 98%;
    height: fit-content;
  }

  #<?php echo $id; ?> .more {
    text-align: right;
  }

  #<?php echo $id; ?> .more a {
    display: flex;
    align-items: center;
    justify-content: flex-end;
  }

  #<?php echo $id; ?> .more .text-more {
    margin: -4px 0.5rem 0 0;
    text-decoration: underline;
  }






  @media (max-width: 767px) {
    #<?php echo $id; ?> .white-stripe div[class*="col-"]:last-child h2 {
      margin-top: 2rem;
    }

    #<?php echo $id; ?> .images-row {
      display: block;
    }

    #<?php echo $id; ?> .gray-stripe img {
      margin: 0 0 5px 0;
      width: 32%;
      max-width: none;
      height: auto;
    }

    #<?php echo $id; ?> .gray-stripe h2 {
      margin-top: 2rem;
    }
  }

</style>
