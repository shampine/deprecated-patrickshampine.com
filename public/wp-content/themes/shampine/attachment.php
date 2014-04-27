<?php get_header(); ?>

<div class="full">
  <div class="container">
    <div class="row-fluid section title">
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
    <a class="m-btn big" href="<?php echo get_permalink($post->post_parent) ?>" >&laquo; Return</a>
  </div>
</div>

<?php get_footer(); ?>