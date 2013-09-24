<?php get_header(); ?>

<div class="full">
	<div class="container">
		<!-- Pulls content from "home" page in wp-admin -->
		<div class="row-fluid blog-content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no pages matched your criteria.'); ?></p>
			<?php endif; ?>
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
		<div class="row-fluid blog-content">
		<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
			<div class="span4">
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
</div>

<?php get_footer(); ?>