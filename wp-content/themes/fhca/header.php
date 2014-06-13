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
<title><?php wp_title(); ?></title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div id="super-nav">
			<ul>
				<li><a href="">Media Center</a></li>
				<li><a href="">Contact</a></li>
				<li id="search">
				    <form id="searchform" method="get" action="/index.php">
				    	<div>
				    		<input type="text" name="s" id="s" placeholder="Search" />
				    		<img src="" type="submit"/>
				    	</div>
				    </form>
				</li>
			</ul>
		</div>
		
		<div class="site-branding">
			<img src"" alt="Florida Health Care Assocition">
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
