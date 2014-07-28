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
			
			<div class="landing-content">
				<p><?php echo get_post( get_the_ID() )->post_content; ?></p>
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
		   					<?php the_page_fa_icon( get_the_ID(),'4x' ); ?>
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
<?php if (is_page(10)): ?>
	<script>
		var oneRow = document.getElementById('one-line');
		parentsGridItem = oneRow.parentNode.parentNode.parentNode;
		parentsGridItem.className += " one-line";
	</script>
<?php endif ?>


<?php get_footer(); ?>









