<?php
/**
 * Block Name: newsletter_inline_form
 *
 *
 */

// get image field (array)
// $train_to_rent_image = get_field('train_to_rent_image');


// create id attribute for specific styling
$id = 'newsletterinlineform-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container line-after">
    <div class="row">
      <div class="col">
        <h1><?php the_field('newsletterinlineform_heading') ?></h1>
        <h2><?php the_field('newsletterinlineform_subheading') ?></h2>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <?php the_field('newsletterinlineform_form_shortcode') ?>
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

#<?php echo $id; ?> .newsletter-inline-first-p {
  padding: 2rem
}

#<?php echo $id; ?> form .acceptance-flex {
  display: flex;
  justify-content: center;
  width: 350px;
  margin: 1rem auto;
  text-align: left;
}

#<?php echo $id; ?> form input[type="email"] {
  border: 1px solid #484D79;
  height: 62px;
  padding: 1rem 2rem;
  text-align: center;
}

#<?php echo $id; ?> form input[type="email"]::placeholder {
  color: #404D7A;
}

#<?php echo $id; ?> form button[type="submit"] {
    width: 350px;
    -webkit-box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
    height: 62px;
    margin: 1rem auto 0 auto;
}







  @media (max-width: 767px) {
    #<?php echo $id; ?> form .acceptance-flex {
      width: 100%;
    }

    #<?php echo $id; ?> form button[type="submit"] {
      width: 100%;
    }

    #<?php echo $id; ?> form input[type="email"] {
      width: 100%;
    }
  }

</style>
