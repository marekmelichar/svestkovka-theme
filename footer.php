<footer role="contentinfo">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-3">
        <div class="white-azd-logo"><?php get_template_part('svg/logo_azd_bile.svg'); ?></div>
        <div class="content">
          <?php the_field('1st_column_content', 'option'); ?>
        </div>
      </div>
      <div class="col-md-3">
        <div class="ustecky-kraj-logo"><?php get_template_part('svg/doprava_uk_logo_white.svg'); ?></div>
        <div class="content">
          <?php the_field('2nd_column_content', 'option'); ?>
        </div>
      </div>
      <div class="col-md-3">
        <div class="svestkovka-white-logo"><?php get_template_part('svg/svestkova_draha_logo_white.svg'); ?></div>
        <div class="content">
          <?php the_field('3rd_column_content', 'option'); ?>
        </div>
      </div>
      <div class="col-md-3">
        <h5 class="social-sharing-heading"><strong><?php the_field('social_sharing_heading', 'option') ?></strong></h5>
        <div class="social-sharing">
          <div class="facebook social-icon"><a href="https://cs-cz.facebook.com/AZDPraha/"><?php get_template_part('svg/facebook.svg'); ?></a></div>
          <!-- <div class="youtube social-icon"><?php get_template_part('svg/youtube.svg'); ?></div> -->
          <div class="instagram social-icon"><a href="https://www.instagram.com/azdpraha/"><?php get_template_part('svg/instagram.svg'); ?></a></div>
          <div class="linkedin social-icon"><a href="https://cz.linkedin.com/company/a-d-praha"><?php get_template_part('svg/linkedin.svg'); ?></a></div>
          <!-- <div class="twitter social-icon"><?php get_template_part('svg/twitter.svg'); ?></div> -->
        </div>
        <div class="content row no-gutters">
          <!-- <div class="col-md-6">
            <?php the_field('4th_column_content_left', 'option'); ?>
          </div> -->
          <div class="col">
            <?php the_field('4th_column_content_right', 'option'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="footer-credits">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <?php the_field('footer_credits_left', 'option'); ?>
      </div>
      <div class="col-md-6 col-sm-6">
        <?php the_field('footer_credits_right', 'option'); ?>
      </div>
    </div>
  </div>
</div>

<!-- html for the button in footer to be used in admin: -->
<!-- <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalNewsletter"><strong>ODBĚR NOVINEK</strong></button> -->

<!-- modal Feedback -->
<div class="modal fade" id="modalFeedback" tabindex="-1" role="dialog" aria-labelledby="modal feedback" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <?php the_field('modal_feedback_shortcode', 'option') ?>
    </div>
  </div>
</div>
<!-- END of modal Feedback -->

<!-- modal Newsletter -->
<div class="modal fade show" id="modalNewsletter" tabindex="-1" role="dialog" aria-labelledby="modal newsletter" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="row">
        <div class="col-md-6">
          <div class="heading">
            <div class="blue-azd-logo"><?php get_template_part('svg/logo_azd.svg'); ?></div>
            <h3>NOVINKY E-MAILEM</h3>
          </div>
          <div class="body">
            <h3>ZŮSTAŇTE V CENTRU AKTUÁLNÍHO DĚNÍ DÍKY NAŠIM NOVINKÁM</h3>
            <p>S naším newsletterem vám neunikne jediná důležitá zpráva nejen z železniční linky U10. Nebojte se, e-mail vám budeme posílat maximálně dvakrát do měsíce.</p>
          </div>
          <?php the_field('modal_newsletter_shortcode', 'option') ?>
        </div>
        <div class="col-md-6"></div>
      </div>
    </div>
  </div>
</div>
<!-- END of modal Newsletter -->

<?php wp_footer(); ?>

<!-- retargeting -->
<script type="text/javascript">
/ <![CDATA[ /
var seznam_retargeting_id = 57431;
/ ]]> /
</script>
<script type="text/javascript" src="//c.imedia.cz/js/retargeting.js"></script>


</body>
</html>
