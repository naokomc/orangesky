<form action="/" method="get" id="searchform" name="searchform">
	<div>
        <input type="text" name="s" id="s" value="<?php the_search_query(); ?>" />
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>
