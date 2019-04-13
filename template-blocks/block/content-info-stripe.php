<?php
/**
 * Block Name: Info Stripe
 *
 * This is the template that displays the "infostripe" block.
 */


// create id attribute for specific styling
$id = 'infostripe-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container">
    <div class="row">
      <div class="col-md-6 first-column">
        <h3><?php the_field('column_1_heading') ?></h3>
        <?php if (have_rows('column_1_repeater')) { ?>
          <ul>
            <?php while (have_rows('column_1_repeater')) : the_row();
              $heading = get_sub_field('heading');
              $href = get_sub_field('href');
            ?>
              <li>
                <a href="<?php echo $href; ?>">
                  <?php echo $heading; ?>
                </a>
                <a href="<?php echo $href; ?>">
                  <span class="icon-more"><?php get_template_part('svg/ikona_sipka_olivova_vice.svg'); ?></span>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php } ?>
      </div>
      <div class="col-md-6 second-column">
        <h3><?php the_field('column_2_heading') ?></h3>
        <?php if (have_rows('column_2_repeater')) { ?>
          <ul>
            <?php while (have_rows('column_2_repeater')) : the_row();
              $heading = get_sub_field('heading');
              $href = get_sub_field('href');
            ?>
              <li>
                <a href="<?php echo $href; ?>">
                  <?php echo $heading; ?>
                </a>
                <a href="<?php echo $href; ?>">
                  <span class="icon-more"><?php get_template_part('svg/ikona_sipka_olivova_vice.svg'); ?></span>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php } ?>
      </div>
    </div>
  </div>
</section>




<style type="text/css">
	#<?php echo $id; ?> {
    background: #fff;
    padding: 1.5rem 1rem;

    -webkit-box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.3);
	}

  #<?php echo $id; ?> h3 {
    font-family: 'source_sans_probold', sans-serif;
    font-size: 1.125rem;
    margin-bottom: 1rem;
  }

  #<?php echo $id; ?> ul {
    list-style-type: none;
    padding: 0;
  }

  #<?php echo $id; ?> ul li {
    display: flex;
    justify-content: space-between;
  }

  #<?php echo $id; ?> ul li:not(:last-child) {
    margin-bottom: 0.5rem;
  }

  #<?php echo $id; ?> ul li a {
    font-family: 'source_sans_proregular', sans-serif;
    font-size: 1rem;
  }

  #<?php echo $id; ?> .first-column {
    padding-right: 2rem
  }

  #<?php echo $id; ?> .second-column {
    padding-left: 2rem
  }

  #<?php echo $id; ?> .second-column:before {
    content: '';
    display: block;
    position: absolute;
    width: 1px;
    height: 100%;
    left: 0;
    background: #404D7A;
  }





  @media (max-width: 767px) {
    #<?php echo $id; ?> .first-column {
      padding-right: 1rem;
    }

    #<?php echo $id; ?> .second-column {
      padding-left: 15px;
      margin: 4rem 0 0 0;
    }

    #<?php echo $id; ?> .second-column:before {
      width: auto;
      height: 1px;
      top: -44px;
      left: 1rem;
      right: 1rem;
    }
  }

</style>
