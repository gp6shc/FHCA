<?php
/*
 * Template Name: Interior (simple)
 */

get_header(); ?>

	<div id="primary" class="content-area">
		
		<main id="main" class="site-main clearfix" role="main">
			
			
	
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'content', 'page' );
				
				if ( has_post_thumbnail()) {
					$thumb_id = get_post_thumbnail_id();
					$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
					$thumb_url = $thumb_url_array[0]; ?>

			<div class="side-hero" style="background-color: white; background-image: url(<?php echo $thumb_url; ?>)"></div>
				<?php }else{ ?>
			<div class="side-hero" style="background-color: #4a525a; opacity: 1;"></div>
				<?}?>
				
			<?php endwhile; // end of the loop. ?>
			
			<div class="side-nav" style="background-color: #4a525a;">
				
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
