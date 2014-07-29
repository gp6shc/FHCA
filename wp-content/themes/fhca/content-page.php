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
			
			<?php				
				$activeClass1 = "";
				$activeClass2 = "";
				$activeClass3 = "";
				$activeClass4 = "";
				
				switch(get_the_ID()) {
					case(444): // Florida is aging, green
						$BGColor = "#00b26d";
						$activeClass1 = "current_page_item";
						break;
					case(450): // Challenges and Concerns, blue green
						$BGColor = "#3297a6";
						$activeClass2 = "current_page_item";
						break;
					case(456): // Social Trends, blue
						$BGColor = "#2b418a;";
						$activeClass3 = "current_page_item"; 
						break;
					case(453): // Quality Care, orange
						$BGColor = "#f16a4b";
						$activeClass4 = "current_page_item";
						break;
					default:
						$BGColor = "white";
			}?>	
			
			<div class="button-row long-title">
				<li class="<?php echo $activeClass1; ?>"><a href="<?php echo get_permalink(444) ?>"><?php echo get_the_title(444)?></a></li>
				<li class="<?php echo $activeClass2; ?>"><a href="<?php echo get_permalink(450) ?>"><?php echo get_the_title(450)?></a></li>
				<li class="<?php echo $activeClass3; ?>"><a href="<?php echo get_permalink(456) ?>"><?php echo get_the_title(456)?></a></li>
				<li class="<?php echo $activeClass4; ?>"><a href="<?php echo get_permalink(453) ?>"><?php echo get_the_title(453)?></a></li>
			</div>
			
			<div class="button-row short-title">
				<li class="<?php echo $activeClass1; ?>"><a href="<?php echo get_permalink(444) ?>"><?php the_post_excerpt_by_id(444,2)?></a></li>
				<li class="<?php echo $activeClass2; ?>"><a href="<?php echo get_permalink(450) ?>"><?php the_post_excerpt_by_id(450,2)?></a></li>
				<li class="<?php echo $activeClass3; ?>"><a href="<?php echo get_permalink(456) ?>"><?php the_post_excerpt_by_id(456,2)?></a></li>
				<li class="<?php echo $activeClass4; ?>"><a href="<?php echo get_permalink(453) ?>"><?php the_post_excerpt_by_id(453,2)?></a></li>
			</div>
			
			
			
			<div class="infographic" style="background-color: <?php echo $BGColor ?>;">
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
