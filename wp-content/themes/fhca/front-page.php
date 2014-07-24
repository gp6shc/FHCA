<?php
/*
 * Template Name: Home Page
 */

get_header(); ?>
	
	<div id="home-contain" class="clearfix">
		<div class="feature" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/img/fhca_elderly_group_1.jpg);">
			<div>
				<?php $id = 6; $post_object = get_post( $id ); echo $post_object->post_content; ?>
				<button><a href="<?php echo get_permalink(30); ?>">See Stories</a></button>
			</div>
		</div>
		
		<aside>
			<h2><?php echo get_the_title(12); ?></h2>
			<ul>
				<li>
					<a class="clearfix" href="<?php echo get_permalink(20); ?>">
					<div class="fa-stack fa-2x">	
						<i class="fa fa-child fa-stack-1x"></i>
						<i class="fa fa-circle-thin fa-stack-2x"></i>
					</div>
					<h6><?php echo get_the_title(20); ?></h6>
					<p><?php echo the_post_excerpt_by_id(20,20);?></p>
					</a>
				</li>
				<li>
					<a class="clearfix" href="<?php echo get_permalink(42); ?>">
					<div class="fa-stack fa-2x">	
						<i class="fa fa-arrow-circle-down fa-stack-1x"></i>
						<i class="fa fa-circle-thin fa-stack-2x"></i>
					</div>
					<h6><?php echo get_the_title(42); ?></h6>
					<p><?php echo the_post_excerpt_by_id(42,20);?></p>
					</a>
				</li>
				<li>
					<a class="clearfix" href="<?php echo get_permalink(45); ?>">
					<div class="fa-stack fa-2x">	
						<i class="fa fa-car fa-stack-1x"></i>
						<i class="fa fa-circle-thin fa-stack-2x"></i>
					</div>
					<h6><?php echo get_the_title(45); ?></h6>
					<p><?php echo the_post_excerpt_by_id(45,20);?></p>
					</a>
				</li>
				<li>
					<a class="clearfix" href="<?php echo get_permalink(47); ?>">
					<div class="fa-stack fa-2x">	
						<i class="fa fa-volume-up fa-stack-1x"></i>
						<i class="fa fa-circle-thin fa-stack-2x"></i>
					</div>
					<h6><?php echo get_the_title(47); ?></h6>
					<p><?php echo the_post_excerpt_by_id(47,20);?></p>
					</a>
				</li>
<!--
				<li>
					<a class="clearfix" href="<?php echo get_permalink(49); ?>">
					<div class="fa-stack fa-2x">	
						<i class="fa fa-road fa-stack-1x"></i>
						<i class="fa fa-circle-thin fa-stack-2x"></i>
					</div>
					<h6><?php echo get_the_title(49); ?></h6>
					<p><?php echo the_post_excerpt_by_id(49,20);?></p>
					</a>
				</li>
-->
			</ul>
				<button><a href="<?php echo get_permalink(49); ?>">See More</a></button>
		</aside>
		
		<div class="boxes clearfix">
			<div class="box" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/img/fhca_elderly_1.jpg);" >
			    <a href="<?php echo get_permalink(53); ?>"><span>Memory & Cognition in Seniors</span></a>
			</div>
			<div class="box" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/img/fhca_elderly_2.jpg);">
			    <a href="<?php echo get_permalink(26); ?>"><span>Infographics</span></a>
			</div>
			<div class="box" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/img/fhca_elderly_3.jpg);">
			    <a href="<?php echo get_permalink(76); ?>"><span>Advocating for Your Parent</span></a>
			</div>
		</div>
	</div>	
				
<?php get_footer(); ?>