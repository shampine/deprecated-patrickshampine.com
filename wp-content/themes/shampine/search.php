<?php get_header(); ?>

<div class="full">
  <div class="container">
    <div class="row-fluid section title">
      <H2>Search Results</H2>
    </div>
    <div class="row-fluid">
      <div class="span12">
        <article>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="post">
            <div class="post-title"><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1></div>
            <div class="post-byline"><p><em><?php the_time('l, F jS, Y'); ?></em></p></div>
            <div class="thumbnail"><?php echo get_the_post_thumbnail( $post_id, array(770,160), $attr ); ?></div>
            <div class="post-excerpt"><?php the_excerpt(); ?><p><a href="<?php the_permalink(); ?>">Read More</a></p></div>
          </div>
        </article>
        <hr>    
          <?php endwhile; else: ?>
          <p><?php _e('Sorry, there are no posts.'); ?></p>
          <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>