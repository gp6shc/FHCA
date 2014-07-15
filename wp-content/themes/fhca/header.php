<?php
/**
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package FHCA
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700|Crimson+Text:400,700' rel='stylesheet' type='text/css'>
<title>FHCA <?php wp_title('|', TRUE, 'left' ); ?></title>

<?php if( is_front_page() ) {?>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> 
<?}?>
<script type="application/javascript" async src="<?php bloginfo('stylesheet_directory')?>/js/fastclick.min.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div id="fixed-nav"></div>
	
	<div id="header-wrapper">	
		<header role="banner">
			<div class="header-super-contain">	
				<div id="super-nav">
				    <ul>
				    	<!-- missing </li> tags to counter inline-block space -->
				    	<li><a href="">Media Center</a>
				    	<li><a href="">Contact</a>
				    	<li class="search">
				    	    <?php get_search_form(); ?>
				    </ul>
				</div>
			</div>

			<div class="header-contain clearfix">
				<div class="site-branding">
				    <a href="<?php echo home_url(); ?>">
				    <!-- <img src="<?php bloginfo('stylesheet_directory')?>/img/logo.svg" onerror="this.src="<?php bloginfo('stylesheet_directory')?>/img/logo.png"" alt="60 Years of Caring"> -->
				    <div style="height: 74px; width: 74px; border-radius: 50%; background-color: lightblue; display: inline-block; "></div>
				    <span style="color: white;">60 Years of Swearing</span>
				    </a>
				</div>
				
				<nav role="navigation">
				    <ul class="main-nav" id="elder-care">
				    	<li><a href="<?php echo home_url(); ?>/florida-elder-care/infographic">Florida & Elder Care</a>
				    		<ul class="sub-nav">
				        		<?php wp_list_pages('title_li=&child_of=10'); ?>
				    		</ul>
				    	</li>
				    </ul>
				    
				    <ul class="main-nav" id="aging">
				        <li><a href="<?php echo home_url(); ?>/aging-issues/balance">Aging Issues</a>
				        	<ul class="sub-nav">
				    	    	<?php wp_list_pages('title_li=&child_of=12'); ?>
				        	</ul>
				        </li>
				        	
				    </ul>
				    
				    <ul class="main-nav" id="care-options">
				        <li><a href="<?php echo home_url(); ?>/care-options/part-time-home-care">Care Options</a>
				        	<ul class="sub-nav">
				    	    	<?php wp_list_pages('title_li=&child_of=14'); ?>
				        	</ul>
				        </li>
				    						    
				    </ul>
				    
				    <ul class="main-nav" id="stories">
				        <li><a href="<?php echo home_url(); ?>/stories/elder-care">Stories</a>
				        	<ul class="sub-nav">
				        		<?php wp_list_pages('title_li=&child_of=16'); ?>
				    		</ul>
				        </li>
				    </ul>
				</nav>
			</div>
		</header>
	</div>
	
	<div id="content" class="site-content">
