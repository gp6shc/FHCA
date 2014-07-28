<?php
/*
 * Template Name: Home Page
 */

get_header(); ?>
	
	<div id="home-contain" class="clearfix">
		<div class="feature" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/img/fhca_elderly_group_1.jpg);">
			<div>
				<?php echo get_post(6)->post_content; ?>
			</div>
		</div>
		
		<aside>
			<h2><?php echo get_the_title(12); ?></h2>
			<ul>
				<li>
					<a class="clearfix" href="<?php echo get_permalink(20); ?>">
					<?php the_page_fa_icon(20,'2x'); ?>
					<h6><?php echo get_the_title(20); ?></h6>
					<p><?php echo the_post_excerpt_by_id(20,20);?></p>
					</a>
				</li>
				<li>
					<a class="clearfix" href="<?php echo get_permalink(42); ?>">
					<?php the_page_fa_icon(42,'2x'); ?>
					<h6><?php echo get_the_title(42); ?></h6>
					<p><?php echo the_post_excerpt_by_id(42,20);?></p>
					</a>
				</li>
				<li>
					<a class="clearfix" href="<?php echo get_permalink(45); ?>">
					<?php the_page_fa_icon(45,'2x'); ?>
					<h6><?php echo get_the_title(45); ?></h6>
					<p><?php echo the_post_excerpt_by_id(45,20);?></p>
					</a>
				</li>
				<li>
					<a class="clearfix" href="<?php echo get_permalink(47); ?>">
					<?php the_page_fa_icon(47,'2x'); ?>
					<h6><?php echo get_the_title(47); ?></h6>
					<p><?php echo the_post_excerpt_by_id(47,20);?></p>
					</a>
				</li>
			</ul>
				<button><a href="<?php echo get_permalink(12); ?>">See More</a></button>
		</aside>
		
		<div class="boxes clearfix">
			<div class="box" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/img/fhca_elderly_1.jpg);" >
			    <a href="<?php echo get_permalink(53); ?>"><span>Memory & Cognition in Seniors</span></a>
			</div>
			<div class="box" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/img/fhca_elderly_3.jpg);">
			    <a href="<?php echo get_permalink(33); ?>"><span>60 Years of Caring</span></a>
			</div>
			<div class="box" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/img/fhca_elderly_2.jpg);">
			    <a href="<?php echo get_permalink(388); ?>"><span>"… the best thing we could have done to help Dad"</span></a>
			</div>
		</div>
	</div>	
				
<?php get_footer(); ?>