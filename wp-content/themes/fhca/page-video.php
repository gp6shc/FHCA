<?php
/**
 * The template for displaying all pages.
 * Template Name: Video Page
 * @package FHCA
 */

get_header(); ?>


	<div id="primary" class="content-area videos">
		
		<main id="main" class="site-main clearfix" role="main">
	
			<?php while ( have_posts() ) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<div class="entry-content">
						
						<div class="title">
							<h1><?php echo get_the_title(); ?></h1>
						</div>
						
						<div class="icon-fa">
							<?php the_page_fa_icon( get_the_ID(),'4x' ); ?>
						</div>
						
						<?php 
							if (isset($_GET["video"])) {
								$videoNumber = htmlspecialchars($_GET["video"]);
							}
						?>
						<div id="contain">
							<h3 id="video-1">Florida's High-Quality Skilled Nursing Centers</h3>
							<div class="video-wrapper">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/SNDZGQipP4M?rel=0&showinfo=0&autohide=1<?php echo($videoNumber == 1 ? "&autoplay=1" :"") ?>" frameborder="0" allowfullscreen></iframe>
							</div>
							<hr/>
							<h3 id="video-2">State-of-the-Art Rehab in Florida's Skilled Nursing Centers</h3>
							<div class="video-wrapper">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/vDg_hTzBYco?rel=0&showinfo=0&autohide=1<?php echo($videoNumber == 2 ? "&autoplay=1" :"") ?>" frameborder="0" allowfullscreen></iframe>
							</div>
							<hr/>
							<h3 id="video-3">Caring for Individuals with Alzheimer's Disease or Dementia</h3>
							<div class="video-wrapper">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/v38rwVeNFXY?rel=0&showinfo=0&autohide=1<?php echo($videoNumber == 3 ? "&autoplay=1" :"") ?>" frameborder="0" allowfullscreen></iframe>
							</div>
							<?php the_content(); ?>
						</div>
					</div><!-- .entry-content -->

					<div class="entry-footer">
						<?php edit_post_link( __( 'Edit', 'fhca' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-footer -->
				</article><!-- #post-## -->
				
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
