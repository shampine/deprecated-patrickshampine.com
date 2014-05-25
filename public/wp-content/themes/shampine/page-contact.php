<?php
/*
Template Name: Contact
*/

get_header(); ?>

<section class="single contact">
  <div class="container">
    <div class="row section title">
      <p class="intro">Built in Los Angeles.</p>
      <div class="container hidden-xs hidden-sm" id="map"> </div>
    </div>
    <div class="row">
      <div class="col-sm-8 contact-form">
        <?php the_content(); ?>
      </div>
      <div class="col-sm-4 contact-social">
        <ul>
          <li><a href="https://github.com/patrickshampine" target="_blank"><i class="fa fa-github-square"></i><span>GitHub</span></a></li>
          <li><a href="https://twitter.com/patrickshampine" target="_blank"><i class="fa fa-twitter-square"></i><span>Twitter</span></a></li>
          <li><a href="https://plus.google.com/+PatrickShampine/" target="_blank"><i class="fa fa-google-plus-square"></i><span>Google+</span></a></li>
          <li><a href="https://www.linkedin.com/in/patrickshampine" target="_blank"><i class="fa fa-linkedin-square"></i><span>LinkedIn</span></a></li>
        </ul>
      </div>
    </div>  
  </div>
</section>

<?php get_footer(); ?>