<?php get_header(); ?>

<section class="single attachment">
  <div class="container">
    <div class="row section title">
        <h1><?php the_title(); ?></h1>
        <p style="text-align: center;"><em><?php the_time('l, F jS, Y'); ?></em></p>
      <div class="attachment">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php $image_info = getimagesize($post->guid); ?>
          <span class="center"><img src="<?php echo $post->guid; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" <?php echo $image_info[3]; ?> /></span>
          <p><?php the_content(); ?></p>
        <?php endwhile; else: ?>
          <p><?php _e('Sorry, this page does not exist.'); ?></p>
        <?php endif; ?>
      </div>
    </div>
    <a class="btn" href="<?php echo get_permalink($post->post_parent) ?>" >&laquo; Return</a>
  </div>
</section>

<?php get_footer(); ?>