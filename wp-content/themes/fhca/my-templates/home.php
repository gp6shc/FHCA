<?php
/*
 * Template Name: Home
 * Description: Design of the home page
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<div id="slider-contain">
			<?php echo do_shortcode("[metaslider id=85]"); ?>
		</div>
		<aside>
			<p>sidebar</p>
		</aside>			
		
			<div style="height: 1000px; background-color: white;">
				
				<?php while ( have_posts() ) : the_post(); ?>
				
				    <?php get_template_part( 'content', 'page' ); ?>
				
				<?php endwhile; // end of the loop. ?>
			</div>


<?php get_footer(); ?>
