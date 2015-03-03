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

<meta name="keywords" content="elder care in florida, elder care florida, choosing long term care, long term care in florida, aging issues florida, elder care depression, care options, care conventions, resources for families in florida, resources for elder families, elder care resources florida, elder care conventions">
<meta name="description" content="Choosing the right long term care facility for loved ones can be challenging. Elder Care in Florida provides resources to help families choose the best option.">
<meta property="og:title" content="<?php echo (is_front_page() ? "Elder Care in Florida - Resources for Families" : get_the_title() ); ?>">
<meta property="og:url" content="<?php the_permalink(); ?>">
<meta property="og:description" content="<?php the_content(); ?>">
<meta property="og:image" content="http://eldercareflorida.com/wp-content/themes/fhca/img/fhca_elderly_group_1.jpg">

<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700|Crimson+Text:400,700' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<link rel="shortcut icon" href="favicon.ico" />
<link rel="apple-touch-icon" sizes="152x152" href="touch-icon.png">

<title>Elder Care Florida<?php wp_title('|', true, 'left' ); ?></title>

<?php wp_head(); ?>

<script type="application/javascript" async src="<?php bloginfo('stylesheet_directory')?>/js/fastclick.min.js"></script>

<!--[if lte IE 9]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory')?>/ie.css" />
<![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div id="header-wrapper">	
		<header role="banner" id="nav-bar">
			<div class="header-super-contain">	
				<div id="super-nav">
				    <ul>
				    	<!-- missing </li> tags to counter inline-block space -->
				    	<!-- <li><a href="<?php echo get_permalink(253); ?>">Media Center</a> -->
				    	<li><a href="<?php echo get_permalink(255); ?>"><?php echo get_the_title(255); ?></a>
				    	<li class="search">
				    	    <?php get_search_form(); ?>
				    </ul>
				</div>
			</div>

			<div class="header-contain clearfix">
				<div class="site-branding">
				    <a href="<?php echo home_url(); ?>">
				    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/ecf_logo.svg" onerror="this.src='<?php bloginfo('stylesheet_directory'); ?>/img/ecf_logo.png'" alt="60 Years of Caring">
				    <div class="slogan desktop">
				    	<span>Elder Care in Florida<br/>
				    		<span><em>Resources for Families</em></span>
				    	</span>
				    </div>
				    <div class="slogan mobile">
				    	<span>Elder Care<br/>in Florida</span>
				    </div>
				    </a>
				</div>
				
				<div class="fa-stack fa-2x" id="menu-button">
					<i class="fa fa-bars fa-stack-1x"></i>
					<i class="fa fa-times fa-stack-1x hidden"></i>
				</div>
				
				<nav role="navigation">
					
					<ul class="main-nav" id="care-options">
				        <li><a href="<?php echo get_permalink(14); ?>"><?php echo get_the_title(14); ?></a>
				        	<ul class="sub-nav">
				    	    	<?php wp_list_pages('title_li=&child_of=14&depth=1'); ?>
				        	</ul>
				        </li>
					</ul>
					
					<ul class="main-nav" id="aging">
				        <li><a href="<?php echo get_permalink(12); ?>"><?php echo get_the_title(12); ?></a>
				        	<ul class="sub-nav">
				    	    	<?php wp_list_pages('title_li=&child_of=12&depth=1'); ?>
				        	</ul>
				        </li>
				        	
				    </ul>
				  
				    <ul class="main-nav" id="elder-care">
				    	<li><a href="<?php echo get_permalink(10); ?>"><?php echo get_the_title(10); ?></a>
				    		<ul class="sub-nav">
				        		<?php wp_list_pages('title_li=&child_of=10&depth=1'); ?>
				    		</ul>
				    	</li>
				    </ul>
				    
				    <ul class="main-nav" id="stories">
				        <li><a href="<?php echo get_permalink(16); ?>"><?php echo get_the_title(16); ?></a>
				        	<ul class="sub-nav">
				        		<?php wp_list_pages('title_li=&child_of=16&depth=1'); ?>
				    		</ul>
				        </li>
				    </ul>
				    
				</nav>
				<ul class="main-nav home-nav" style="float: right">
					<li><a href="<?php bloginfo('url'); ?>">Home</a>
				</ul>
			</div>
		</header>
	</div>
	
	<div id="content" class="site-content">
