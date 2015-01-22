<form method="get" class="searchform" action="<?php echo home_url( '/' ); ?>">
	<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
	<input class="search_btn" type="submit" value="<?php _e('Search', 'T20')?>" />
</form>