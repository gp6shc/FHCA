<?php
/*
 * Template Name: Home Page
 */

get_header(); ?>
	
	<div class="feature" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/img/old-ladies.jpg);"></div>
	<div class="feature-text">
		<?php echo get_post(6)->post_content; ?>
	</div>
	
	<div id="home-contain" class="clearfix">
		<div class="boxes clearfix">
			<h2>Videos</h2>
			<a href="<?php echo home_url('/videos/?video=1#video-1')?>" class="box" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/img/high-quality-nursing_poster.jpg);">
				<i class="fa fa-play"></i>
				<div class="overlay"><h6>Florida's High-Quality Skilled Nursing Centers</h6></div>
			</a>
			<a href="<?php echo home_url('/videos/?video=2#video-2')?>" class="box" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/img/state-of-the-art-rehab_poster.jpg);">
				<i class="fa fa-play"></i>
				<div class="overlay"><h6>State-of-the-Art Rehab in Florida's Skilled Nursing Centers</h6></div>
			</a>
			<a href="<?php echo home_url('/videos/?video=3#video-3')?>" class="box" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/img/caring-for-dementia_poster.jpg);">
				<i class="fa fa-play"></i>
				<div class="overlay"><h6>Caring for Individuals with Alzheimer's Disease or Dementia</h6></div>
			</a>
			
			<div class="blog-preview">
			<h2>Care Conversations Blog</h2>
				<?php $CC_query = new WP_Query( 'category_name=care-conversation&posts_per_page=3' );
					while ( $CC_query->have_posts() ) : $CC_query->the_post();
						$do_not_duplicate = $post->ID; ?>

						<article id="post-<?php the_ID(); ?>">
							<a href="<?php the_permalink(); ?>">
								<!-- <div class="featured-thumb"></div> -->
								<?php /* the_post_thumbnail( 'news-featured-thumb', array('class' => 'attachment-full') ); */ ?>
							
								<h4><?php the_title();?></h4>
								<p><?php the_post_excerpt_by_id($post->id, 265); ?></p>
							</a>
						</article>
				<?php endwhile;?>
			</div>
		</div>
		<aside>
			<h2><?php echo get_the_title(12); ?></h2>
			<ul>
				<li>
					<a class="clearfix" href="<?php echo get_permalink(20); ?>">
						<?php the_page_fa_icon(20,'2x'); ?>
						<div>
							<h6><?php echo get_the_title(20); ?></h6>
							<p><?php the_post_excerpt_by_id(20,125);?></p>
						</div>
					</a>
				</li>
				<li>
					<a class="clearfix" href="<?php echo get_permalink(42); ?>">
						<?php the_page_fa_icon(42,'2x'); ?>
						<div>
							<h6><?php echo get_the_title(42); ?></h6>
							<p><?php the_post_excerpt_by_id(42,125);?></p>
						</div>
					</a>
				</li>
				<li>
					<a class="clearfix" href="<?php echo get_permalink(45); ?>">
						<?php the_page_fa_icon(45,'2x'); ?>
						<div>
							<h6><?php echo get_the_title(45); ?></h6>
							<p><?php the_post_excerpt_by_id(45,125);?></p>
						</div>
					</a>
				</li>
				<li>
					<a class="clearfix" href="<?php echo get_permalink(47); ?>">
						<?php the_page_fa_icon(47,'2x'); ?>
						<div>
							<h6><?php echo get_the_title(47); ?></h6>
							<p><?php the_post_excerpt_by_id(47,125);?></p>
						</div>
					</a>
				</li>
				<li>
					<a class="clearfix" href="<?php echo get_permalink(53); ?>">
						<?php the_page_fa_icon(53,'2x'); ?>
						<div>
							<h6><?php echo get_the_title(53); ?></h6>
							<p><?php the_post_excerpt_by_id(53,125);?></p>
						</div>
					</a>
				</li>
				<li>
					<a class="clearfix" href="<?php echo get_permalink(51); ?>">
						<?php the_page_fa_icon(51,'2x'); ?>
						<div>
							<h6><?php echo get_the_title(51); ?></h6>
							<p><?php the_post_excerpt_by_id(51,125);?></p>
						</div>
					</a>
				</li>
				<li>
					<a class="clearfix" href="<?php echo get_permalink(49); ?>">
						<?php the_page_fa_icon(49,'2x'); ?>
						<div>
							<h6><?php echo get_the_title(49); ?></h6>
							<p><?php the_post_excerpt_by_id(49,125);?></p>
						</div>
					</a>
				</li>
				<li>
					<a class="clearfix" href="<?php echo get_permalink(55); ?>">
						<?php the_page_fa_icon(55,'2x'); ?>
						<div>
							<h6><?php echo get_the_title(55); ?></h6>
							<p><?php the_post_excerpt_by_id(55,125);?></p>
						</div>
					</a>
				</li>
				<li>
					<a class="clearfix" href="<?php echo get_permalink(57); ?>">
						<?php the_page_fa_icon(57,'2x'); ?>
						<div>
							<h6><?php echo get_the_title(57); ?></h6>
							<p><?php the_post_excerpt_by_id(57,125);?></p>
						</div>
					</a>
				</li>
			</ul>
		</aside>
	</div>	
				
<?php get_footer(); ?>