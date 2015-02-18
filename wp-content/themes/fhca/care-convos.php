<?php
/**
/*
 * Template Name: Care Convos Page
 * @package FHCA
 */
get_header()?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">			
			<!--
			<div class="landing-content">
				<p><?php echo get_post(30)->post_content; ?></p>
			</div>
			-->

			<div class="entry-content">
			<div class="story-title">
				<div class="title">
					<h1><?php the_title();?></h1>
				</div>
				<div class="icon-fa">
				    	<?php 
				    		the_page_fa_icon( get_the_ID(), '4x' );
				    	?>
			    </div>
			</div>
		
			<?php // Define custom query parameters
			
			   $custom_query_args = array(
					'cat' => -4,
					'posts_per_page' => 5,
					'orderby' => 'date',
				);
				
				$custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
				$custom_query = new WP_Query( $custom_query_args );

				// Pagination fix
				$temp_query = $wp_query;
				$wp_query   = NULL;
				$wp_query   = $custom_query;
				
				// Output custom query loop
				if ( $custom_query->have_posts() ) :
				    while ( $custom_query-> have_posts() ) :
				        $custom_query->the_post(); ?>
					
						<article class="post-results">		
							<div id="contain">
							<div class="post" id="post-<?php the_ID(); ?>">
							    <div class="title">
							    	<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
							    	<div class="postmeta">
							    		<span><i>Posted on <?php the_time('l, F j, Y'); ?></i></span>
							    	</div>
							    </div>
							
							    <div class="entry">	
							    	<?php if ( has_post_thumbnail() ) { ?>
							    		<?php the_post_thumbnail('large'); ?>
							    		<?php }else{ ?>
							    			<hr>
							    		<?php }?>
							    	<?php the_excerpt(); ?>
							    </div>
							</div>
							</div>
						</article>
			
			<?php	endwhile;
				endif; ?>
				
					<footer class="page-results-nav clearfix">
						<div class="newer-posts">
					    	<?php previous_posts_link( 'Newer Posts <i class="fa fa-chevron-circle-right"></i>' ); ?>
						</div>
						<div class="older-posts">
							<?php next_posts_link( '<i class="fa fa-chevron-circle-left"></i> Older Posts', $custom_query->max_num_pages ); ?>
						</div>
					</footer>	
			<?php
				wp_reset_postdata();
				
				// Custom query loop pagination
				
				
				// Reset main query object
				$wp_query = NULL;
				$wp_query = $temp_query; ?>
				    			
			</div>
			<?php get_sidebar()?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer()?>