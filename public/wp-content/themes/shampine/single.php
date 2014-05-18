<?php get_header(); ?>

<section class="single post">
  <div class="container"><?php 

    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="row">
        <div class="col-md-12">
          <article><?php
        
          $masthead = get_field('masthead');

          if($masthead) {
            echo '<div class="masthead"><img src="'.$masthead['url'].'" alt="'.$masthead['alt'].'" style="width:100%;height:auto;"></div>';
          }

          echo '<h1 class="post-title">'.get_the_title().'</h1>';

          echo '<p class="post-date"><em>'.get_the_time('l, F jS, Y').'</em></p>';
          
          echo '<div class="post-content">'.get_the_content().'</div>';

          // gallery? ?>

          </article>
        </div>
      </div>

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