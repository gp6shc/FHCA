<?php
/**
 * The template for displaying all pages.
 *
 * @package FHCA
 */

get_header(); ?>


	<div id="primary" class="content-area">
		
		<main id="main" class="site-main" role="main">
			
			<div class="side-nav">
				<?php 
					if(wp_list_pages('child_of='.$post->ID.'&echo=0&exclude=2')) {
						wp_list_pages('title_li=&child_of='.$post->ID.'&exclude=2');
					} elseif(get_the_title($post->post_parent) != the_title(' ' , ' ',false)) {
						wp_list_pages('child_of='.$post->post_parent.'&title_li=&exclude=2');
					}
				?>
			</div>
	
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'content', 'page' );
				
				$thumb_id = get_post_thumbnail_id();
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
				$thumb_url = $thumb_url_array[0]; ?>
				
			<div class="side-hero" style="background-image: url(<?php $thumb_url?>)">
				
			</div>
				
			<?php endwhile; // end of the loop. ?>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
