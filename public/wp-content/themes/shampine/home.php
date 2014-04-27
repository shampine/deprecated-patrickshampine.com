<?php get_header(); ?>

<section class="single blog">
  <div class="container">
    <div class="row section title">
      <p class="intro">Thoughts neatly packaged into individual posts.<p>
    </div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="row">
      <!-- Title // Date // Excerpt // Read More --> 
          <div class="post-title post-byline post-excerpt blog-content col-md-8">
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <p><em><?php the_time('F jS, Y'); ?></em></p>
            <?php the_excerpt(); ?><a class="m-btn small" href="<?php the_permalink(); ?>">Read More</a>
          </div>
      <!-- Post Thumbnail === Featured Image -->
          <div class="blog-content col-md-4">
            <span class="center blog-thumb"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a></span>
          </div>
      </article>
      <?php endwhile; else: ?>
        <p><?php _e('Sorry, there are no posts.'); ?></p>
      <?php endif; ?>
      
      <div class="navigation">
        <div class="nav-previous"><?php previous_posts_link('<div class="m-btn big">&laquo; Previous</div>') ?></div>
        <div class="nav-next"><?php next_posts_link('<div class="m-btn big">Next &raquo;</div>') ?></div>
      </div>     
  </div>
</section>

<?php get_footer(); ?>