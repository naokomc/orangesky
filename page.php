<?php get_header(); ?>

	<div id="content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post">
		<h2 class="pagetitle" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

			</div>
		</div>
	  <?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	</div>

	<?php comment_form(); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
