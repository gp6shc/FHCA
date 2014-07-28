<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package FHCA
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php if( is_page( array (26,444,450,456,453)) ): ?>
			<div class="title">
				<h1><?php echo get_the_title(26); ?></h1>
			</div>
			
			<div class="icon-fa">
				<?php 
					the_page_fa_icon( 26 ,'4x' );
				?>
			</div>
				
			<div class="button-row">
				<?php wp_list_pages('child_of=26&title_li=&exclude=2&depth=1'); ?>
			</div>
			
			<div class="infographic">
				<?php the_content(); ?>
			</div>
			
		
		<?php else: ?>
		
			<div class="title">
				<h1><?php echo get_the_title(); ?></h1>
			</div>
			
			<div class="icon-fa">
				<?php 
					the_page_fa_icon( get_the_ID(),'4x' );
				?>
			</div>
		
		<?php the_content(); ?>
		
		<?php endif ?>
		
	</div><!-- .entry-content -->
	<div class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'fhca' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-footer -->
</article><!-- #post-## -->
