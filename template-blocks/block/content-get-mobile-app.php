<?php
/**
 * Block Name: Get mobile app
 *
 *
 */

$get_mobile_app_bg_image = get_field('get_mobile_app_bg_image');

// create id attribute for specific styling
$id = 'getmobileapp-' . $block['id'];

?>

<section id="<?php echo $id; ?>" style="background-image: url(<?php echo $get_mobile_app_bg_image['url']; ?>);">
<!-- <section id="<?php echo $id; ?>"> -->
  <!-- <div class="background"><img src="<?php echo $get_mobile_app_bg_image['url']; ?>" alt="<?php echo $get_mobile_app_bg_image['alt']; ?>"></div> -->
  <div class="container">
    <h2><?php the_field('get_mobile_app_heading') ?></h2>
    <div class="content"><?php the_field('get_mobile_app_content') ?></div>
    <div class="icons-set">
      <!-- <div class="icon-google-play">
        <a href="<?php the_field('google_play_download_link') ?>">
          <?php get_template_part('svg/icon_google_play.svg'); ?>
        </a>
      </div> -->
      <!-- <div class="icon-apple-store">
        <a href="<?php the_field('apple_store_download_link') ?>">
          <?php get_template_part('svg/icon_apple_store.svg'); ?>
        </a>
      </div> -->
      <div class="icon-doprava-usteckeho-kraje"><?php get_template_part('svg/icon_doprava_usteckeho_kraje.svg'); ?></div>
    </div>
  </div>
</section>




<style type="text/css">
	#<?php echo $id; ?> {
    padding: 1.25rem 2rem;
    position: relative;
    background-repeat: no-repeat;
    background-size: 1240px auto;
    background-position: center center;
    margin: 1rem 0;

    -webkit-box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
	}

  #<?php echo $id; ?> h2 {
    font-family: 'source_sans_probold', sans-serif;
    font-size: 1.25rem;
    color: #404D7A;
    margin: 0 0 0.25rem 0;
  }

  #<?php echo $id; ?> .content {
    font-family: 'source_sans_proregular', sans-serif;
    font-size: 1rem;
    color: #404D7A;
    margin-bottom: 1rem;
    width: 66%;
  }

  #<?php echo $id; ?> .icons-set {
    display: flex;
    justify-content: flex-start;
  }

  #<?php echo $id; ?> .icons-set .icon-apple-store {
    margin: 0 8rem 0 1rem;
  }





  @media (max-width: 767px) {
    #<?php echo $id; ?> {
      background-size: 100vw auto;
    }

    #<?php echo $id; ?> .content {
      width: 100%;
    }

    #<?php echo $id; ?> .icons-set {
      display: block;
    }

    #<?php echo $id; ?> .icons-set .icon-google-play {
      margin: 2rem 0 0 0;
    }

    #<?php echo $id; ?> .icons-set .icon-apple-store {
      margin: 2rem 0px;
    }
  }

</style>



<script type="text/javascript">

  if (window.innerWidth <= 767) {
    var bg = document.getElementById('<?php echo $id; ?>')
    bg.setAttribute("style", "background-image: url('/wp-content/themes/svestkovka-theme-master/img/mobile-get-app-bg.png')")
  }

</script>
