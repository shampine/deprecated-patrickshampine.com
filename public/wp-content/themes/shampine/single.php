<?php get_header(); ?>

<section class="single post">
  <div class="container">
    <article class="row-fluid">
      <div class="span12 title">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <p style="text-align: center;"><em><?php the_time('l, F jS, Y'); ?></em></p>
      <?php the_content(); ?>
          <div class="social">
            <div class="g-plusone" data-size="medium"></div>
            <div class="twitter"><a href="https://twitter.com/share" class="twitter-share-button" data-via="patrickshampine">Tweet</a></div>
          </div>
      <?php comments_template(); ?>
      <?php endwhile; else: ?>
      <p><?php _e('Sorry, this page does not exist.'); ?></p>
      <?php endif; ?>
      </div>
    </article>
  </div>
</section>

<?php get_footer(); ?>