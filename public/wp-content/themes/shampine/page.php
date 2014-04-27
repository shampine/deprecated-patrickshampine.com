<?php get_header(); ?>

<div class="full">
  <div class="container">
    <div class="row-fluid section title">
      <!-- <H1><?php echo get_the_title(); ?> </H1> -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; else: ?>
      <p><?php _e('Sorry, no pages matched your criteria.'); ?></p>
    <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>