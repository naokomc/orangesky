<?php
/*
Template Name: Links
*/
?>

<?php get_header(); ?>

<div id="content">
<div class="post">
<h2 class="pagetitle">Links</h2>

	<ul class="links">
		<?php wp_list_bookmarks(); ?>
	</ul>

</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
