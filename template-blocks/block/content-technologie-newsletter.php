<?php
/**
 * Block Name: technologie-newsletter
 *
 *
 */

// get image field (array)
$technologie_newsletter_image = get_field('technologie_newsletter_image');


// create id attribute for specific styling
$id = 'technologienewsletter-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3><?php the_field('technologie_newsletter_heading') ?></h3>
        <img src="<?php echo $technologie_newsletter_image['url'] ?>" alt="<?php echo $technologie_newsletter_image['alt'] ?>">
      </div>
    </div>
  </div>
</section>






<style type="text/css">
	#<?php echo $id; ?> {
    background-color: #fff;
    padding: 0 2rem 1rem 2rem;

    -webkit-box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
    -moz-box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
    box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
	}

  #<?php echo $id; ?> img {
    width: 100%;
  }

  #<?php echo $id; ?> h3 {
    font-family: 'source_sans_probold', sans-serif;
    font-size: 1.25rem;
    text-align: center;
    margin: 2rem auto;
  }





  @media (max-width: 767px) {


  }

</style>
