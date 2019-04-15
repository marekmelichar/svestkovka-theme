<?php
/**
 * Block Name: Custom heading
 *
 *
 */

// create id attribute for specific styling
$id = 'customheading-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1><?php the_field('custom_heading') ?></h1>
        <h2><?php the_field('custom_subheading') ?></h2>
      </div>
    </div>
  </div>
</section>




<style type="text/css">
	#<?php echo $id; ?> {
    padding: 2rem;
    text-align: center;
    background-color: #fff;

    -webkit-box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
    -moz-box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
    box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
	}

  /* .standard-page #<?php echo $id; ?> {
    padding: 2rem 1rem;
    margin: -2rem -2rem 0 -2rem;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
  } */

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
    position: relative;
  }

  #<?php echo $id; ?> h2:after {
    content: '';
    position: absolute;
    bottom: -2rem;
    left: 0;
    right: 0;
    background: #404D7A;
    height: 1px;
  }







  @media (max-width: 767px) {
    #<?php echo $id; ?> {
      padding: 4rem 2rem 2rem 2rem;
    }
  }

</style>
