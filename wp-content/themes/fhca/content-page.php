<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package FHCA
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'fhca' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<div class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'fhca' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-footer -->
</article><!-- #post-## -->
