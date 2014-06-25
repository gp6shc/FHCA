<?php
/**
 * The template for displaying all pages.
 *
 * @package FHCA
 */

get_header(); ?>

<div class="title">
	<h1><?php echo get_the_title($post->post_parent);?></h1>
</div>

<div id="page-nav-background"></div>
	<div class="page-nav">
		<?php 
			if(wp_list_pages('child_of='.$post->ID.'&echo=0&exclude=2')) {
				wp_list_pages('title_li=&child_of='.$post->ID.'&exclude=2');
			} elseif(get_the_title($post->post_parent) != the_title(' ' , ' ',false)) {
				wp_list_pages('child_of='.$post->post_parent.'&title_li=&exclude=2');
			}
		?>
	</div>

</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
 
				<?php get_template_part( 'content', 'page' ); ?>
 
			<?php endwhile; // end of the loop. ?>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
