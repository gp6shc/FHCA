<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package FHCA
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h2 style="margin: 25px 0 25px -25px; text-align: center;"><?php printf( __( 'Searching for: %s', 'fhca' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
			</header><!-- .page-header -->
			<div id="contain">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				
				get_template_part( 'content', 'search' );
				?>
				<hr>
			<?php endwhile;  ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		
			</div>
		</main><!-- #main -->
		
		<div class="large-search">
			<?php get_search_form(); ?>
		</div>
		
	</section><!-- #primary -->

<?php get_footer(); ?>
