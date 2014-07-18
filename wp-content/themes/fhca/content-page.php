<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package FHCA
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div class="title">
			<h1><?php the_title();?></h1>
		</div>
		
		<div class="icon-fa">
			<?php 
				the_page_fa_icon( get_the_ID() );
			?>
		</div>
		
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->
	<div class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'fhca' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-footer -->
</article><!-- #post-## -->
