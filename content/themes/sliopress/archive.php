<?php 
	get_header(); 
	$layout = ot_get_option('layout-global');
	if ( $layout == 'both-sidebar' ): 
?>
	<div class="grid_3 alpha">
		<?php dynamic_sidebar( 'primary' ); ?>
	</div><!--/.grid_3-->

	<div class="grid_6 posts">
<?php elseif ( $layout == 'both-sidebar-right' ):  ?>
	<div class="grid_6 alpha posts">
<?php elseif ( $layout == 'sidebar-right' ):  ?>
	<div class="grid_9 alpha posts">
<?php elseif ( $layout == 'both-sidebar-left' ):  ?>
	<div class="grid_6 righter omega posts">
<?php elseif ( $layout == 'sidebar-left' ):  ?>
	<div class="grid_9 righter omega posts">
<?php elseif ( $layout == 'without-sidebar' ):  ?>
	<div class="clearfix posts">
<?php endif; ?>

		<?php get_template_part('inc/page-title'); ?>
		
		<?php if ((category_description() != '') && !is_paged()) : ?>
			<?php echo category_description(); ?>
		<?php endif; ?>
		
		<?php if ( have_posts() ) : $i = 1; echo '<div class="post-row">'; while ( have_posts() ): the_post();
			get_template_part('content');

			if($i % 2 == 0) { echo '</div><div class="post-row">'; } $i++; endwhile; echo '</div>';

			get_template_part('inc/pagination');
		else: ?>
			<h2 class="mbt mt"><?php _e( 'No posts, Sorry', 'T20' ); ?></h2>
		<?php endif; ?>
	</div><!--/.grid posts -->

<?php 
	get_sidebar();
	get_footer(); 
?>