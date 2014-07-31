<?php
/*
 * @package FHCA
 */
?>

	</div><!-- #content -->

	<footer role="contentinfo" class="clearfix">
		<div>
			<ul>
				<h5><a href="<?php echo get_permalink(10); ?>"><?php echo get_the_title(10); ?></h5>
				<?php wp_list_pages('title_li=&child_of=10&depth=1'); ?>
			</ul>
			<ul>
				<h5><a href="<?php echo get_permalink(12); ?>"><?php echo get_the_title(12); ?></h5>
				<?php wp_list_pages('title_li=&child_of=12&depth=1'); ?>
			</ul>
			<ul>
				<h5><a href="<?php echo get_permalink(14); ?>"><?php echo get_the_title(14); ?></h5>
				<?php wp_list_pages('title_li=&child_of=14&depth=1'); ?>
			</ul>
			<ul>
				<h5><a href="<?php echo get_permalink(16); ?>"><?php echo get_the_title(16); ?></h5>
				<?php wp_list_pages('title_li=&child_of=16&depth=1'); ?>
				<div id="sponsor">
					<a href="http://www.fhca.org/" target="_blank"><h5>Sponsored by:</h5>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/img/fhca_logo.svg" onerror="this.src='<?php bloginfo('stylesheet_directory'); ?>/img/fhca_logo.png'" alt="60 Years of Caring"></a>
				</div>
			</ul>
		</div>
		
	</footer>
	<footer id="mobile-footer">
		<div id="sponsor">
			<a href="http://www.fhca.org/" target="_blank">
				<h5>Sponsored by:</h5>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/fhca_logo.svg" onerror="this.src='<?php bloginfo('stylesheet_directory'); ?>/img/fhca_logo.png'" alt="60 Years of Caring">
			</a>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">
	
	// initiate FastClick.js whenpage loads
	window.addEventListener('load', function() {
		FastClick.attach(document.body);
	}, false);
	
	// Get the mobile menu icons and nav element 
	var button = document.getElementById('menu-button');
	var navBar = document.getElementById('nav-bar');
	var	faNavIcon = button.children;
	
	// Listen for touch events on the mobile menu; toggle the nav height and icons
	button.addEventListener( 'touchstart', function() {
		navBar.classList.toggle('height');
		faNavIcon[0].classList.toggle('hidden');
		faNavIcon[1].classList.toggle('hidden');
		
	}, false);
	
	// Listen for mouse clicks on thh mobile menu
	button.addEventListener( 'mousedown', function() {
		navBar.classList.toggle('height');
		faNavIcon[0].classList.toggle('hidden');
		faNavIcon[1].classList.toggle('hidden');
	}, false);
	
	//Google Analytics
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	ga('create', 'UA-53377212-1', 'auto');
	ga('send', 'pageview');
</script>

</body>
</html>
