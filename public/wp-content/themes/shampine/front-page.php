<?php get_header(); ?>

<div class="full">
  <div class="container"><?php

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 6,
        'order'          => 'DESC',
        'orderby'        => 'ID',
    );

    $wp_query = new WP_Query( $args );
    $count = 0;

    if ( $wp_query->have_posts() ) :

      echo '<div class="row-fluid blog-content">';

      while ( $wp_query->have_posts() ) : $wp_query->the_post();

        $permalink = get_permalink();
        $thumb = get_the_post_thumbnail();
        $title = get_the_title();

        echo '
          <div class="span4">
            <div class="home-thumb">
              <a href="'.$permalink.'">'.$thumb.'
                <span class="home-thumb-title">
                  <p>'.$title.'</p>
                </span>
              </a>
            </div>
          </div>
        ';
        
        $count++;

        if($count === 3 && $wp_query->have_posts() > 0) {
          echo '</div><div class="row-fluid blog-content">';
        }
        
        endwhile;
        endif;
        wp_reset_query(); ?>
    </div>
  </div>  
</div>

<?php get_footer(); ?>