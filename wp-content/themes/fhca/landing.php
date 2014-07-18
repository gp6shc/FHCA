<?php
/*
 * Template Name: Landing Page
 */

get_header(); ?>


	<div id="primary" class="content-area">
		
		<main id="main" class="site-main clearfix" role="main">
			
			<div class="title">
				<h1><?php the_title();?></h1>
			</div>
			
			<div class="landing-grid">
			
			<?php
				$args = array(
				    'post_type'      => 'page',
				    'posts_per_page' => -1,
				    'post_parent'    => $post->ID,
				    'order'          => 'ASC',
				    'orderby'        => 'menu_order'
				 );
				
				$parent = new WP_Query( $args );
			
				if ( $parent->have_posts() ) :
					while ( $parent->have_posts() ) : $parent->the_post(); ?>
			
       			<div class="grid-item">
       				<a href="<?php the_permalink(); ?>">
       					<div class="title">
		   					<h3><?php the_title(); ?></h3>
		   				</div>
		   				<div class="icon-fa">
		   					<?php the_page_fa_icon( get_the_ID() ); ?>
		   				</div>
		   			</a>
       			</div>
			    	<?php
			    		global $more;
			    		$more = 0;
			    	?>
			
			    <?php endwhile; ?>
			
			<?php endif; wp_reset_query(); ?>
			
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
