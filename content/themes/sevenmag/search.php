<?php 
	get_header(); 
	$layout = ot_get_option('layout-global');
	if ( $layout == 'both-sidebar' ): 
?>
	<div class="grid_3 alpha">
		<?php dynamic_sidebar( 'primary' ); ?>
	</div><!--/.grid_3-->

	<div class="grid_6">
<?php elseif ( $layout == 'both-sidebar-right' ):  ?>
	<div class="grid_6 alpha">
<?php elseif ( $layout == 'sidebar-right' ):  ?>
	<div class="grid_9 alpha">
<?php elseif ( $layout == 'both-sidebar-left' ):  ?>
	<div class="grid_6 righter omega">
<?php elseif ( $layout == 'sidebar-left' ):  ?>
	<div class="grid_9 righter omega">
<?php elseif ( $layout == 'without-sidebar' ):  ?>
	<div class="clearfix">
<?php endif; ?>

	<?php 
		get_template_part('inc/page-title');
		if ( !have_posts() ): ?>
		<div class="b_block">
			<h2 class="mt mbt"> <?php _e('Nothing Found','T20'); ?> </h2>
			<p><?php _e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.','T20'); ?></p>
			<?php get_search_form(); ?>
		</div><!--/block-->
		<?php endif; ?>
		
		<?php if ( have_posts() ) : 
			while ( have_posts() ): the_post();
				get_template_part('content');
			endwhile;

			get_template_part('inc/pagination');
		endif; 
	?>
	</div><!--/grid posts -->

<?php 
	get_sidebar();
	get_footer(); 
?>