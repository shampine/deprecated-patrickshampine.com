<?php get_header(); ?>

<section class="single page">
  <div class="container">
    <div class="row">
      <div class="col-sm-12"><?php

        if ( have_posts() ) : while ( have_posts() ) : the_post();

          the_content();

        endwhile; else:
        
          echo '<p>Sorry, no pages matched your criteria.</p>';

        endif; ?>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>