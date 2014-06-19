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
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<title><?php wp_title(); ?></title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div id="header-wrapper">	
		<header role="banner">
			<div id="super-nav">
				<ul>
					<!-- missing </li> tags to counter inline-block space -->
					<li><a href="">Media Center</a>
					<li><a href="">Contact</a>
					<li id="search">
					    <form id="searchform" method="get" action="/index.php">
					    		<input type="text" name="s" placeholder="Search" />
					    		<input type="image" src="<?php bloginfo('stylesheet_directory')?>/img/fhca_search.png" alt="Submit Form" />
					    </form>
				</ul>
			</div>
			
			<div class="site-branding">
				<a href="<?php echo home_url(); ?>">
				<img src="<?php bloginfo('stylesheet_directory')?>/img/logo.svg" onerror="this.src="<?php bloginfo('stylesheet_directory')?>/img/logo.png"" alt="Florida Health Care Assocition">
				</a>
			</div>
		
			<nav role="navigation">
				<ul class="main-nav" id="elder-care">
					<li><a href="<?php echo home_url(); ?>/florida-elder-care">Florida & Elder Care</a>
						<ul class="sub-nav">
				    		<li>Infographic</li>
				    		<li>60 Years of Caring Report</li> 
				    		<li>Survey Results</li>
				    		<li>Key Findings</li>
				    		<li>Common Aging Issues</li>
						</ul>
					</li>
				</ul>
				
				<ul class="main-nav" id="aging">
				    <li><a href="<?php echo home_url(); ?>/aging-issues">Aging Issues</a>
				    	<ul class="sub-nav">
					    	<li>Balance</li>
							<li>Depression</li>
							<li>Driving</li>
							<li>Hearing</li>
							<li>Independence</li>
							<li>Medication</li>
							<li>Memory</li>
							<li>Skin</li>
							<li>Vision</li>
				    	</ul>
				    </li>
				    	
				</ul>
				
				<ul class="main-nav" id="care-options">
				    <li><a href="<?php echo home_url(); ?>/care-options">Care Options</a>
				    	<ul class="sub-nav">
					    	<li>Part-Time Home Care</li>
							<li>Appropriate Choices</li>
							<li>Care Coverage</li>
							<li>Average Costs</li>
							<li>Living with Adult Children</li>
							<li>Independent Living Facilities</li>
							<li>Assisted Living Facilities</li>
							<li>Nursing Homes</li>
							<li>Residents' Rights</li>
							<li>Be a Parent Advocate</li>
							<li>Strategies, Things to Ask</li>
				    	</ul>
				    </li>
										    
				</ul>
				
				<ul class="main-nav" id="stories">
				    <li><a href="<?php echo home_url(); ?>/stories">Stories</a>
				    	<ul class="sub-nav">
				    		<li>Elder Care</li>
							<li>Submit</li>
						</ul>
				    </li>
						
				</ul>
			</nav>
		</header>
	</div>
	
	<div id="content" class="site-content">
