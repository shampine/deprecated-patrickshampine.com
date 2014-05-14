<?php
/*
Template Name: Portfolio
*/

get_header(); ?>

<section class="single portfolio">
  <div class="container">

    <div class="row section title">
        <p class="intro">Portfolio.</p>
    </div><?php

    $portfolioRepeater = get_field('pf_repeater');
    $count = 0;

    foreach($portfolioRepeater as $portfolio) { 

    $count++;
    $even = false;

    if($count % 2 === 0) {
      $even = true;
    }

    $browser = '
      <div class="col-sm-8 '.($even ? '' : 'col-sm-pull-4').'">
        <div class="browser-nav"><ul><li></li><li></li><li></li></ul><span>'.$portfolio['pf_link'].'</span></div>
        <div class="browser-body"><img src="'.$portfolio['pf_image']['url'].'" alt="'.$portfolio['pf_image']['alt'].'"></div>
      </div>
    ';
    
    $details = '
      <div class="col-sm-4 '.($even ? '' : 'col-sm-push-8').'">
        <h2>'.$portfolio['pf_title'].'</h2>
        <p>'.$portfolio['pf_language'].'</p>
        <p>'.$portfolio['pf_description'].'</p>
        <a href="'.$portfolio['pf_link'].'" class="btn" target="_blank">View Project</a>
      </div>
    ';

    echo '
      <div class="row portfolio-item">
        '.$details.$browser.'
      </div>
    ';

    } ?>


  </div>
</section>

<?php get_footer(); ?>
