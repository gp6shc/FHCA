<?php
/**
 * The template for displaying all pages.
 * Template Name: Video Page
 * @package FHCA
 */

get_header(); ?>


	<div id="primary" class="content-area">
		
		<main id="main" class="site-main clearfix" role="main">
	
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'content', 'page' ); ?>
				
				<div class="side-hero" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/img/noise.png); background-size: contain; background-color: #e9e3d3; opacity: 1;"></div>
		
			<?php endwhile; // end of the loop. ?>
			
			<div class="side-nav">
				<ul>
					<li><a href="#video-1">One</a></li>
					<li><a href="#video-2">Two</a></li>
					<li><a href="#video-3">Three</a></li>
				</ul>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
