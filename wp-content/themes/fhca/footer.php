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
			</ul>
		</div>		
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
