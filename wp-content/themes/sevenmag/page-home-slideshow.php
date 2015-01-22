<?php
	/* Template Name: Home - Slideshow */
	get_header(); 

	$s_p = T20_sidebar_primary();
	wp_reset_postdata();
	global $post;
	$loop = get_post_meta($post->ID,'_loop',true);
	$loop_category = get_post_meta($post->ID,'_loop_category',true);
	$loop_num = get_post_meta($post->ID,'_loop_num',true);
	$page_title = get_post_meta($post->ID,'_page_title',true);
	$page_comments = get_post_meta($post->ID,'_page_comments',true);
	$meta = get_post_meta($post->ID,'_layout',true);

	if ( isset($meta) && !empty($meta) && $meta != 'inherit' ) : 
		$layout = $meta; 
	else :
		$layout = ot_get_option('layout-global');
	endif; 
	if ( $layout == 'both-sidebar' ): 
?>
	<div class="grid_3 alpha">
		<?php dynamic_sidebar( $s_p ); ?>
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

		<?php if ( $page_title != 'off' ) : ?>
			<div class="b_title"><h3><?php the_title(); ?></h3></div>
		<?php endif; ?>

		<div class="post clearfix">
			<?php if (have_posts()) { 
				while ( have_posts() ) : the_post();
					get_template_part('inc/page-image');
					the_content();
				endwhile;
			} else {} ?>
		</div>

		<?php if ( $loop != 'off' ) : ?>
			<div class="posts mbf clearfix">
				<div class="post_item">
					<?php 
						global $paged;
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						query_posts(array(
							'post_type'		=> 'post',
							'cat' 			=> $loop_category,
							'paged'			=> $paged,
							'posts_per_page'	=> $loop_num
						));
						if ( have_posts() ) : while ( have_posts() ) : the_post();
							get_template_part('content');
							endwhile;
							get_template_part('inc/pagination');
						endif; wp_reset_query(); ?>
				</div><!--/.post-list-->
			</div><!--/posts -->
		<?php endif; ?>

		<?php if ( $page_comments != 'off' ) : comments_template('/comments.php',true); endif; ?>
	</div><!--/.grid -->

<?php 
	get_sidebar();
	get_footer(); 
?>