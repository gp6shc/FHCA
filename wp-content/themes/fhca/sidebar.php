<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package FHCA
 */
?>
<div class="side-nav">
	<?php
		wp_list_categories();
		wp_get_archives();
	?>
</div>