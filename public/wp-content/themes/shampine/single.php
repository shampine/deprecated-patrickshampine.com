<?php get_header(); ?>

<section class="single post">
  <div class="container"><?php 

    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="row">
        <div class="col-sm-12"><?php

          $masthead = get_field('masthead');

          if($masthead) {
            echo '<div class="masthead"><img src="'.$masthead['url'].'" alt="'.$masthead['alt'].'" style="width:100%;height:auto;"></div>';
          }

          echo '<h1 class="post-title">'.get_the_title().'</h1>';
          echo '<p class="post-date"><em>'.get_the_time('l, F jS, Y').'</em></p>'; ?>

        </div>
      </div>
      <div class="row">
        <article class="col-sm-9">
          <div class="post-content">
            <?php the_content(); ?>
          </div>
        </article>
        <aside class="col-sm-3 sidebar"><?php
          if(get_field('trail_toggle')) {

            $trail_name = get_field('trail_name');
            $trail_length = get_field('trail_length');
            $trail_elevation = get_field('trail_elevation');
            $trail_gpx = get_field('trail_gpx');
            $summit_post = get_field('summit_post');

            echo '<h3>Trail Information</h3>';
            echo '<ul>';
            echo $trail_name ? '<li><span class="meta-desc">Trail Name:</span><span class="meta-info">'.$trail_name.'</span></li>' : '';
            echo $trail_length ? '<li><span class="meta-desc">Trail Length:</span><span class="meta-info">'.$trail_length.'</span></li>' : '';
            echo $trail_elevation ? '<li><span class="meta-desc">Trail Elevation:</span><span class="meta-info">'.$trail_elevation.'</span></li>' : '';
            echo $trail_gpx ? '<li><span class="meta-desc">Trail GPX:</span><span class="meta-info"><a href="'.$trail_gpx['url'].'">Download</a></span></li>' : '';
            echo $summit_post ? '<li><span class="meta-desc">Trail Name:</span><span class="meta-info"><a href="'.$summit_post.'" target="_blank">More Info</span></li>' : '';
            echo '</ul>';

          } ?>
          <h3>Categories</h3>
          <?php echo get_the_category_list(); ?>
          <h3>Hosting</h3>
          <a href="https://www.digitalocean.com/?refcode=d6cadd6345fb" class="do" target="_blank"><img src="/wp-content/themes/shampine/img/digital-ocean-hosting.png" alt="Digital Ocean" title="Digital Ocean"></a>
        </aside>
      </div><?php


      // gallery w/ rows of 3?   ?>

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