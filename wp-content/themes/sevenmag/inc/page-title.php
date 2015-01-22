	<?php if ( is_single() ): ?>
		<div class="b_title"><h3><?php the_title(); ?></h3></div>
		
	<?php elseif ( is_page() ): ?>
		<div class="b_title"><h3><?php echo the_title(); ?></h3></div>

	<?php elseif ( is_search() ): ?>
		<div class="b_title"><h3>
			<?php if ( have_posts() ): ?><i class="fa fa-search mi"></i><?php endif; ?>
			<?php if ( !have_posts() ): ?><i class="icon-warning mi"></i><?php endif; ?>
			<?php _e('Search results for:','T20'); ?> "<?php echo get_search_query(); ?>"
		</h3></div>

	<?php elseif ( is_404() ): ?>
		<div class="b_title"><h3><i class="icon-warning mi"></i> <?php _e('Page not found!','T20'); ?></h3></div>
		
	<?php elseif ( is_author() ): ?>
		<?php $author = get_userdata( get_query_var('author') );?>
		<div class="b_title"><h3><i class="icon-user mi"></i><?php _e('Posts by:','T20'); ?> <?php echo $author->display_name;?></h3></div>
		
	<?php elseif ( is_category() ): ?>
		<div class="b_title"><h3><i class="icon-folder-open mi"></i><?php _e('All posts under:','T20'); ?> <?php echo single_cat_title('', false); ?></h3></div>

	<?php elseif ( is_tag() ): ?>
		<div class="b_title"><h3><i class="fa fa-tags mi"></i><?php _e('Tagged:','T20'); ?> <?php echo single_tag_title('', false); ?></h3></div>
		
	<?php elseif ( is_day() ): ?>
		<div class="b_title"><h3><i class="icon-calendar mi"></i> <?php _e('Daily Archive:','T20'); ?> <?php echo get_the_time('F j, Y'); ?> </h3></div>
		
	<?php elseif ( is_month() ): ?>
		<div class="b_title"><h3><i class="icon-calendar mi"></i> <?php _e('Monthly Archive:','T20'); ?> <?php echo get_the_time('F Y'); ?> </h3></div>
			
	<?php elseif ( is_year() ): ?>
		<div class="b_title"><h3><i class="icon-calendar mi"></i> <?php _e('Yearly Archive:','T20'); ?> <?php echo get_the_time('Y'); ?> </h3></div>
	
	<?php else: ?>
		<div class="b_title"><h3><?php the_title(); ?></h3></div>
	<?php endif; ?>