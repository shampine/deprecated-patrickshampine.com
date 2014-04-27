<?php
/**
Template Name: Contact
 */

get_header(); ?>

<section class="single contact">
  <div class="container">
    <div class="row-fluid section title">
      <!-- <H1><?php echo get_the_title(); ?> </H1> -->
      <p class="intro">Built in Los Angeles.</p>
      <div class="container hidden-phone" id="map"> </div> <!-- Google Maps -->
    </div>
    <div class="row-fluid">
    <!--
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; else: ?>
      <p><?php _e('Sorry, no pages matched your criteria.'); ?></p>
    <?php endif; ?>
    -->
    </div>
    <div class="row-fluid">
      <div class="span3">
        <div class="contact-icon center">
          <a href="mailto:patrick@patrickshampine.com"><img src="/wp-content/themes/shampine/img/contact-email.png" alt="Patrick Shampine Email" /></a> 
        </div>    
      </div>
      <div class="span3">
        <div class="contact-icon center">
          <a href="https://plus.google.com/101946159124570139670/" target="_blank"><img src="/wp-content/themes/shampine/img/contact-googleplus.png" alt="Patrick Shampine Google+" /></a>  
        </div>    
      </div>
      <div class="span3">
        <div class="contact-icon center">
          <a href="https://www.linkedin.com/in/patrickshampine/" target="_blank"><img src="/wp-content/themes/shampine/img/contact-linkedin.png" alt="Patrick Shampine LinkedIn" /></a> 
        </div>    
      </div>
      <div class="span3">
        <div class="contact-icon center">
          <a href="https://twitter.com/patrickshampine" target="_blank"><img src="/wp-content/themes/shampine/img/contact-twitter.png" alt="Patrick Shampine Twitter" /></a>  
        </div>    
      </div>
    </div>    
  </div>
</section>

<?php get_footer(); ?>