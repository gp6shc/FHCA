<?php
/*
 * Template Name: Interior (simple)
 */

get_header(); ?>

	<div id="primary" class="content-area">
		
		<main id="main" class="site-main clearfix" role="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if( is_page(81) ): ?>
				<div class="entry-content">
				    <div class="title">
				    	<h1><?php the_title();?></h1>
				    </div>
				    
				    <div class="icon-fa">
				    	<?php 
				    		the_page_fa_icon( get_the_ID(), '4x' );
				    	?>
				    </div>
				    
					<p><?php 
						$post_id = 81;
						global $post;
						$post = &get_post($post_id);
						setup_postdata( $post );
						the_content();
						wp_reset_postdata( $post );
						
					?></p>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		    <?php get_sidebar() ?>
			<?php elseif( is_page(255) ): ?>
			
			<div class="entry-content">
				    <div class="title">
				    	<h1><?php the_title();?></h1>
				    </div>
				    
				    <div class="icon-fa">
				    	<?php 
				    		the_page_fa_icon( get_the_ID(), '4x' );
				    	?>
				    </div>
				    
					<p><?php 
						$post_id = 255;
						global $post;
						$post = &get_post($post_id);
						setup_postdata( $post );
						the_content();
						wp_reset_postdata( $post );
						
					?></p>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		
		<?php else: ?>				
	
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
			
			<div class="side-nav" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/img/noise.png); background-size: contain; background-color: #e9e3d3; opacity: 1;"></div>
			</div>
			
			<?php endif ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
