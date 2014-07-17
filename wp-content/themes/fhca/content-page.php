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
				$pageID = get_the_ID();
				
				switch ($pageID) {
					case 20: ?>
					<div class="fa-stack fa-4x">	
						<i class="fa fa-child fa-stack-1x"></i>
						<i class="fa fa-circle-thin fa-stack-2x"></i>
					</div>
				<?php break;
					case 42: ?>
					<div class="fa-stack fa-3x">	
						<i class="fa fa-arrow-circle-down fa-stack-1x"></i>
						<i class="fa fa-circle-thin fa-stack-2x"></i>
					</div>
				<?php break;
					case 45: ?>
					<div class="fa-stack fa-3x">	
						<i class="fa fa-car fa-stack-1x"></i>
						<i class="fa fa-circle-thin fa-stack-2x"></i>
					</div>
				<?php break;
					case 47: ?>
					<div class="fa-stack fa-3x">	
						<i class="fa fa-volume-up fa-stack-1x"></i>
						<i class="fa fa-circle-thin fa-stack-2x"></i>
					</div>
				<?php break;
					case 49: ?>
					<div class="fa-stack fa-3x">	
						<i class="fa fa-road fa-stack-1x"></i>
						<i class="fa fa-circle-thin fa-stack-2x"></i>
					</div>
				<?php break;
					case 51: ?>
					<div class="fa-stack fa-3x">	
						<i class="fa fa-medkit fa-stack-1x"></i>
						<i class="fa fa-circle-thin fa-stack-2x"></i>
					</div>
				<?php break;
					case 53: ?>
					<div class="fa-stack fa-3x">	
						<i class="fa fa-book fa-stack-1x"></i>
						<i class="fa fa-circle-thin fa-stack-2x"></i>
					</div>
				<?php break;
					case 55: ?>
					<div class="fa-stack fa-3x">	
						<i class="fa fa-users fa-stack-1x"></i>
						<i class="fa fa-circle-thin fa-stack-2x"></i>
					</div>
				<?php break;
					case 57: ?>
					<div class="fa-stack fa-3x">	
						<i class="fa fa-eye fa-stack-1x"></i>
						<i class="fa fa-circle-thin fa-stack-2x"></i>
					</div>
				<?php break;
					
  					default: ?>
  					<div class="fa-stack fa-3x">	
						<i class="fa fa-warning fa-stack-1x"></i>
						<i class="fa fa-circle-thin fa-stack-2x"></i>
					</div>	
  				<?}?>
		</div>
		
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'fhca' ),
				'after'  => '</div>',
			) );
		?>
		</div>
	</div><!-- .entry-content -->
	<div class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'fhca' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-footer -->
</article><!-- #post-## -->
