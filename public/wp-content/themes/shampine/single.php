<?php get_header(); ?>

<section class="single post">
  <div class="container"><?php 

    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="row">
        <div class="col-md-12 title"><?php
        
          $masthead = get_field('masthead');

          if($masthead) {
            echo '<div class="masthead"><img src="'.$masthead['url'].'" alt="'.$masthead['alt'].'" style="width:100%;height:auto;"></div>';
          }

          echo '<h1>'.get_the_title().'</h1>';

          echo '<p class="aligncenter"><em>'.get_the_time('l, F jS, Y').'</em></p>';
          
          the_content(); 

          // gallery? ?>

      </article>

      <section class="social">
        <div class="g-plusone" data-size="medium"></div>
        <div class="twitter"><a href="https://twitter.com/share" class="twitter-share-button" data-via="patrickshampine">Tweet</a></div>
      </section>

      <section class="comments">
        <?php comments_template(); ?>
      </section><?php

    endwhile; else: ?>
      <article><p><?php _e('Sorry, this page does not exist.'); ?></p></article><?php
    endif; ?>

  </div>
</section>

<?php get_footer(); ?>