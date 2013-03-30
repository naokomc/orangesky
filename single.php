<?php get_header(); ?>

	<div id="content">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link(' %link &raquo;') ?></div>
		</div>

		<div class="post">
			<h2 class="postdate"><?php the_time('F jS, Y') ?></h2>
			<h2 id="post-<?php the_ID(); ?>" class="posttitle"><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>

			<div class="entry">
				<?php the_content('TRUE'); ?>

				<?php wp_link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
			</div>

				<p class="postmetadata">Posted in <?php the_category(', ') ?> | By <?php the_author() ?></p>
		</div>

				<ul class="commentdata">
					<li>
						<?php if (('open' == $post->comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							Both <a href="#respond" title="skip to the bottom to leave a comment">comments</a> and <a href="<?php trackback_url(); ?>" title="click to see the trackback URI">trackbacks</a> are currenlty <strong>open</strong> for this entry.

						<?php } elseif (!('open' == $post->comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							Comments are currently <strong>closed</strong>, but you can <a href="<?php trackback_url(); ?> ">trackback</a> from your site.

						<?php } elseif (('open' == $post->comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							You can skip to the end and leave a <a href="#respond" title="skip to leave a comment">comments</a>. Trackback is currently <strong>closed</strong>.

						<?php } elseif (!('open' == $post->comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							Both comments and trackbacks are currently <strong>closed</strong>.

						<?php } edit_post_link('Edit this entry.','',''); ?>
					</li>
					<li>Trackback URI: <input type="text" value="<?php trackback_url(); ?>" class="tbinput" title="Ctrl (Apple) + A to select URI" /></li>
					<li><?php post_comments_feed_link('Comments RSS 2.0'); ?></li>
				</ul>
				<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
