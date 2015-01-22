<?php 
	$s_p = T20_sidebar_primary();
	$s_s = T20_sidebar_secondary();

	// Check for post page specific layout
	if(is_single() || is_page()) :
		wp_reset_postdata();
		global $post;
		$meta = get_post_meta($post->ID,'_layout',true);
		if ( isset($meta) && !empty($meta) && $meta != 'inherit' ) : 
			$layout = $meta;
		else : 
			$layout = ot_get_option('layout-global');
		endif;
	else :
		$layout = ot_get_option('layout-global');
	endif;

	if ( $layout == 'both-sidebar' ): 
?>
	<div class="grid_3 righter omega">
		<?php dynamic_sidebar( $s_s ); ?>
	</div>

<?php elseif ( $layout == 'both-sidebar-right' ):  ?>

	<div class="grid_3">
		<?php dynamic_sidebar( $s_s ); ?>
	</div>

	<div class="grid_3 omega">
		<?php dynamic_sidebar( $s_p ); ?>
	</div>

<?php elseif ( $layout == 'sidebar-right' ):  ?>

	<div class="grid_3 omega">
		<?php dynamic_sidebar( $s_p ); ?>
	</div>

<?php elseif ( $layout == 'both-sidebar-left' ):  ?>
	<div class="grid_3 alpha">
		<?php dynamic_sidebar( $s_p ); ?>
	</div>

	<div class="grid_3">
		<?php dynamic_sidebar( $s_s ); ?>
	</div>

<?php elseif ( $layout == 'sidebar-left' ):  ?>

	<div class="grid_3 alpha">
		<?php dynamic_sidebar( $s_p ); ?>
	</div>

<?php elseif ( $layout == 'without-sidebar' ):  ?>
	
<?php endif; ?>