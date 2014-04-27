<?php get_header(); ?>

<section class="single fourohfour">
    <div class="container">
      <div class="row">
      <div class="col-sm-12 title" style="margin-bottom: 50px;">
        <H1>{404}</H1>
        <p class="intro">I hope no one ever reads this.</p>
      </div>
    </div>
    <!-- Pulls 3 most recent blog posts -->
    <?php
      $args = array(
          'post_type'      => 'post',
          'posts_per_page' => 3,
          'order'          => 'DESC',
          'orderby'        => 'ID',
      );
      $wp_query = new WP_Query( $args );
    if ( $wp_query->have_posts() ) : ?>
    <!-- Displays 3 most recent blog posts -->
    <div class="row blog-content">
    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
      <div class="col-sm-4">
        <div class="home-thumb">
          <a href="<?php the_permalink(); ?>">
          <?php echo get_the_post_thumbnail( $post_id, $attr ); ?>
          <span class="home-thumb-title">
            <p><?php the_title(); ?></p>
          </span></a> 
        </div>    
      </div>
        <?php endwhile; ?>
        <?php endif; wp_reset_query(); ?>
    </div>



  </div>
</section>

<?php get_footer(); ?>