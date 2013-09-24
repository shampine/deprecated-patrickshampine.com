<?php
/**
Template Name: Portfolio
 */

get_header(); ?>

<div class="full">
	<div class="container">
		<div class="row-fluid section title">
				<p class="intro">Evolve. Amplify. Heighten. Recent web projects.</p>
		</div>
			<?php wp_reset_query(); ?>
			<!-- Pulls 3 portfolio items in ascending order -->
			<?php
				$args = array(
			    'post_type'      => 'page',
			    'posts_per_page' => -1,
			    'post_parent'    => 94,
			    'order'          => 'DESC',
			    'orderby'        => 'ID',
				);
				$portfolio_query = new WP_Query( $args );
			if ( $portfolio_query->have_posts() ) : ?>

			<div class="row-fluid row-portfolio">
				<?php $count=0; ?>	
				<?php while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); ?>

						<div class="span4">
							<div class="portfolio-thumb">
								<a href="<?php the_permalink(); ?>">
								<?php echo get_the_post_thumbnail( $post_id, $attr ); ?>
								<span class="portfolio-thumb-title"><p><?php the_title(); ?></p></span></a>	
							</div>		
						</div>
			
            <?php $count++; ?>
            <?php if ($count==3 ||$portfolio_query->found_posts==0) : 
            	echo '</div><div class="row-fluid row-portfolio">';
            ?>
            <?php $count=0; ?>
			<?php endif; ?>
        	<?php endwhile; ?>
        	<?php else : ?>            	
            	<h3>Sorry but there are no portfolio items.</h3>
        	<?php endif; ?>
        	<?php wp_reset_query(); ?>
        	
        	</div>

	</div>
</div>

<?php get_footer(); ?>