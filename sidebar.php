</div>
<div id="sidebar">
		<ul>

			<li>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</li>

			<?php /* If this is the front page */ if (is_home()) { ?>
			<li><h2><?php _e('Author'); ?></h2>
			<p>Write a short description of yourself. Additionally use about.php template to create a separate about page. <a href="about/">&raquo; more about me</a></p>
			</li>
			<?php } ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
			<li><p>You are currently browsing the archives for the <strong><?php single_cat_title(''); ?></strong> category.</p></li>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<li><p>You are currently browsing the <strong><a href="<?php echo get_option('siteurl'); ?>"><?php echo bloginfo('name'); ?></a></strong> weblog archives for the day <strong><?php the_time('l, F jS, Y'); ?></strong>.</p></li>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<li><p>You are currently browsing the <strong><a href="<?php echo get_option('siteurl'); ?>"><?php echo bloginfo('name'); ?></a></strong> weblog archives for <?php the_time('F, Y'); ?>.</p></li>

      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<li><p>You are currently browsing the <strong><a href="<?php echo get_option('siteurl'); ?>"><?php echo bloginfo('name'); ?></a></strong> weblog archives for the year <strong><?php the_time('Y'); ?></strong>.</p></li>

		 <?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<li><p>You have searched the <strong><a href="<?php echo get_option('siteurl'); ?>"><?php echo bloginfo('name'); ?></a></strong> weblog archives
			for <strong>'<?php echo esc_html($s); ?>'</strong>.</p></li>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<li><p>You are currently browsing the <strong><a href="<?php echo get_option('siteurl'); ?>"><?php echo bloginfo('name'); ?></a></strong> weblog archives.</p></li>

			<?php } ?>

			<?php wp_list_pages('title_li=<h2>' . __('Pages') . '</h2>' ); ?>

			<li><h2><?php _e('Archives'); ?></h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<li><h2><?php _e('Categories'); ?></h2>
				<ul>
				<?php wp_list_categories('optioncount=1&sort_column=name&hide_empty=0'); ?>
				</ul>
			</li>

			<?php /* If this is the front page */ if ( is_home()) { ?>
				<?php wp_list_bookmarks(); ?>
			<?php } ?>

			<?php /* If this is the front page */ if ( is_home() || is_page() ) { ?>
			<?php if (function_exists('wp_theme_switcher')) { wp_theme_switcher(); } ?>
				<?php if (function_exists('wp_theme_switcher')) { ?>
				<li><h2>< ?php _e('Themes'); ?></h2>
				<?php wp_theme_switcher(); ?>
				</li>
				<?php } ?>

				<li><h2><?php _e('Meta'); ?></h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>">WordPress</a> v.<?php bloginfo('version'); ?></li>
					<li>Orange Sky theme designed by <a href="http://blog.detlog.org">Nao</a></li>
					<?php wp_meta(); ?>
				</ul>
				</li>
			<?php } ?>

		</ul>
	</div>

