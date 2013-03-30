<form method="get" id="searchform" name="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div><input type="text" value="<?php echo esc_html($s, 1); ?>" name="s" id="s" tabindex="6" accesskey="s" />
<input type="submit" id="searchsubmit" value="Search" tabindex="7" accesskey="b" />
</div>
</form>
