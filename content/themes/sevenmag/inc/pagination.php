<nav class="pagination clearfix">
	<?php if ( function_exists('wp_pagenavi') ): ?>
		<?php wp_pagenavi(); ?>
	<?php else: ?>
		<ul class="pagination_default clearfix">
			<li class="newer righter"><?php previous_posts_link( __('Newer Posts <i class="fa fa-angle-double-right"></i>', 'T20') ); ?></li>
			<li class="older lefter"><?php next_posts_link( __('<i class="fa fa-angle-double-left"></i> Older Posts', 'T20') ); ?></li>
		</ul>
	<?php endif; ?>
</nav><!--/.pagination-->
