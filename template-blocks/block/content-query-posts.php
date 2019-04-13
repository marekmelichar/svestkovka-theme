<?php
/**
 * Block Name: Query posts
 *
 *
 */

 // get image field (array)
 // $main_banner_bg_image = get_field('main_banner_bg_image');

// create id attribute for specific styling
$id = 'queryposts-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container">
    <h2><?php the_field('posts_query_heading') ?></h2>

    <div class="row trips">
      <?php $post_objects = get_field('posts_query_posts');

        if( $post_objects ): ?>

            <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>

                <div class="col-md-3 trip">
                  <h3 class="heading"><?php echo get_the_title($post->ID); ?></h3>
                  <a href="<?php echo get_permalink($post->ID); ?>">
                    <div class="trip-bg" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID); ?>);"></div>
                  </a>
                  <a class="btn btn-warning" href="<?php echo get_permalink($post->ID); ?>">
                    <?php the_field('posts_query_button_text'); ?>
                  </a>
                </div>


            <?php endforeach; ?>

      <?php endif; ?>
    </div>
  </div>
</section>





<style type="text/css">
	#<?php echo $id; ?> {
    position: relative;
    background: #fff;
    padding: 2rem;

    -webkit-box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
	}

  #<?php echo $id; ?> .trip-bg {
    min-height: 200px;
    position: relative;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
  }

  #<?php echo $id; ?> h2 {
    font-family: 'source_sans_probold', sans-serif;
    font-size: 1.25rem;
    text-align: center;
  }

  #<?php echo $id; ?> h3 {
    font-family: 'source_sans_prosemibold', sans-serif;
    font-size: 1rem;
    text-align: center;
  }

  #<?php echo $id; ?> .btn {
    width: 100%;
  }







  @media (max-width: 767px) {
    #<?php echo $id; ?> .trip:not(:first-child) {
      margin-top: 2rem;
    }
  }

</style>
