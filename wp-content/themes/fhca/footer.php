<?php
/*
 * @package FHCA
 */
?>

	</div><!-- #content -->

	<footer role="contentinfo">
		<div>
			<ul>
				<h5>Florida & Elder Care</h5>
				<?php wp_list_pages('title_li=&child_of=10'); ?>
			</ul>
			<ul>
				<h5>Aging Issues</h5>
				<?php wp_list_pages('title_li=&child_of=12'); ?>
			</ul>
			<ul>
				<h5>Care Options</h5>
				<?php wp_list_pages('title_li=&child_of=14'); ?>
			</ul>
			<ul>
				<h5>Stories</h5>
				<?php wp_list_pages('title_li=&child_of=16'); ?>
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
	window.addEventListener('load', function() {
		FastClick.attach(document.body);
	}, false);
	
	var button = document.getElementById('menu-button');
	var navBar = document.getElementById('nav-bar');
	
	button.addEventListener( 'touchstart', function() {
		navBar.classList.toggle('height');
	}, false);
</script>
</body>
</html>
