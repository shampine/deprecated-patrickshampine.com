<?php
/**
Template Name: Portfolio-Single
 */

get_header(); ?>

<div class="full">
	<div class="container">
		<div class="row-fluid section title row-portfolio">
			<H1><?php echo get_the_title(); ?> </H1>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no pages matched your criteria.'); ?></p>
		<?php endif; ?>
		</div>
		<a class="m-btn big" href="<?php echo get_permalink($post->post_parent) ?>" >&laquo; Return</a>
	</div>
</div>

<?php get_footer(); ?>