<?php
/*
Template Name: Portfolio-Single
*/

get_header(); ?>

<section class="single portfolio-single">
  <div class="container">
    <div class="row section title row-portfolio">
      <h1><?php echo get_the_title(); ?></h1>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; else: ?>
      <p><?php _e('Sorry, no pages matched your criteria.'); ?></p>
    <?php endif; ?>
    </div>
    <a class="m-btn big" href="<?php echo get_permalink($post->post_parent) ?>" >&laquo; Return</a>
  </div>
</section>

<?php get_footer(); ?>