<?php
/**
 * The template for displaying all pages.
 *
 * @package FHCA
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
			<div class="side-hero" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/img/noise.png); background-size: contain; background-color: #e9e3d3; opacity: 1;"></div>
				<?}?>
				
			<?php endwhile; // end of the loop. ?>
			
			<div class="side-nav">
				<?php 
					if( wp_list_pages('child_of='.$post->ID.'&echo=0&exclude=2') ) {
						wp_list_pages('title_li=&child_of='.$post->ID.'&exclude=2');
					} elseif( get_the_title($post->post_parent) != the_title(' ' , ' ',false) ) {
						wp_list_pages('child_of='.$post->post_parent.'&title_li=&exclude=2');
					}
					
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
