<div id="footer">
	<p>
		Powered by <a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>">WordPress v.<?php bloginfo('version'); ?></a>
		<br /><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a> | <a href="<?php bloginfo('rss2_url'); ?>">Entries Feed (RSS)</a> | <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments Feed (RSS)</a>
		<!-- <?php echo $wpdb->num_queries; ?> queries. <?php timer_stop(1); ?> seconds. -->
	</p>
</div>
</div>

		<?php do_action('wp_footer'); ?>

</body>
</html>