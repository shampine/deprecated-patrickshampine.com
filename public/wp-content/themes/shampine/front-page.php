<?php get_header(); ?>

<section class="single front-page">
  <div class="container"><?php

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 1,
        'order'          => 'DESC',
        'orderby'        => 'ID',
    );

    $wp_query = new WP_Query( $args );

    if ( $wp_query->have_posts() ) :
      while ( $wp_query->have_posts() ) : $wp_query->the_post();

        $permalink = get_permalink();
        $featured = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
        $title = get_the_title(); ?>

        <div class="row post">
          <div class="col-md-3 post-title">
            <a href="<?php echo $permalink; ?>"><?php echo $title; ?></a>
          </div>
          <div class="col-md-9 post-image" style="background-image:url('<?php echo $featured['0']; ?>')">
          </div>
        </div><?php

        endwhile;

    endif;

    wp_reset_query(); ?>

  </div>
</section>

<?php get_footer(); ?>