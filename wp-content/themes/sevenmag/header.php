<!doctype html>
<!--[if IE 8 ]><html class="ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9 ]><html class="ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' );?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>

	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EmulateIE8; IE=EDGE" />
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php if ( ot_get_option('responsive') != 'on' ): ?><style>#layout {min-width: 1210px}</style><?php endif; ?>

</head>

<body <?php body_class() ?>>
	
	<?php if ( ot_get_option('introfx') != 'off' ) : ?>
		<script type="text/javascript">	
		/* <![CDATA[ */
			jQuery(document).ready(function() {
				// Animation Load
				if ( jQuery('#layout').hasClass('load_anim') ) {
					jQuery('.widget, .T20-tabs-nav').css('opacity', '0');
					jQuery('.introfx, .introfxo > div,.widget, .T20-tabs-nav').data( 'appear-top-offset', 700 ).appear(function(){
						jQuery(this).addClass('animated <?php echo ot_get_option('anim_fx'); ?>');
					});
				}
			});
		/* ]]> */
		</script>
	<?php endif; ?>

	<div id="layout" class="<?php if ( ot_get_option( 'full-boxed' ) === '1' ): ?>full<?php elseif ( ot_get_option( 'full-boxed' ) === '2' ): ?>boxed<?php else: ?>boxed-margin<?php endif; ?> <?php if ( ot_get_option('introfx') != 'off' ) : ?>load_anim<?php endif; ?>">
		<header id="header">
			<div class="head">
				<div class="row clearfix">
					<div class="logo">
						<?php echo T20_site_title(); ?>
					</div><!-- /logo -->

					<nav>
						<?php if ( ot_get_option('responsive') != 'off' ) { $responsivemode = 'res_mode'; } else { $responsivemode = 'res_off'; } ?>
						<?php wp_nav_menu( array(
							'theme_location' => 'primary',
							'container' =>false,
							'fallback_cb' => '',
							'items_wrap' => '<ul class="sf-menu ' . $responsivemode . '">%3$s</ul>',
							'echo' => true,
							'before' => '',
							'after' => '',
							'link_before' => '',
							'link_after' => '',
							'depth' => 0,)
						); ?>
					</nav><!-- /nav -->

					<?php if ( ot_get_option('header-ads-code') ) { ?>
						<div class="banner">
							<?php echo ot_get_option('header-ads-code'); ?>
						</div><!-- /banner ads -->
					<?php } elseif ( ot_get_option('header-ads-img') ) { ?>
						<div class="banner">
							<?php if ( ot_get_option('header-ads-link') ) { ?>
								<a href="<?php echo ot_get_option('header-ads-link'); ?>" title="<?php echo ot_get_option('header-ads-description'); ?>"><?php } ?>
									<img src="<?php echo ot_get_option('header-ads-img'); ?>" alt="<?php echo ot_get_option('header-ads-description'); ?>">
							<?php if ( ot_get_option('header-ads-link') ) { ?></a><?php } ?>
						</div><!-- /banner ads -->
					<?php } ?>
				</div><!-- /row -->
			</div><!-- /head -->

			<div class="sec_head">
				<div class="row clearfix">

					<?php if ( ot_get_option( 'breaking-or-menu' ) === '1' ): ?>
						<script type="text/javascript">	
							/* <![CDATA[ */
								jQuery(document).ready(function() {
									jQuery("#ticker").liScroll({travelocity: 0.0<?php echo ot_get_option( 'news-speed' ); ?>});
								});
							/* ]]> */
						</script>
						<?php if ( ot_get_option('news-category-title') ) { ?><span class="breaking"> <?php echo ot_get_option('news-category-title'); ?> </span><?php } ?>
						<ul id="ticker">
							<?php
							$query = 'posts_per_page='.ot_get_option('news-category-num').'&cat='.ot_get_option('news-category').'';
							$queryObject = new WP_Query($query);
							if ($queryObject->have_posts()) {
								while ($queryObject->have_posts()) {
									$queryObject->the_post();
							?>
								<li><a href="<?php the_permalink(); ?>"><span><?php echo time_ago(); ?></span> <?php the_title(); ?> </a></li>
							<?php
								}
							}
							?>
						</ul><!-- /ticker -->
					<?php elseif ( ot_get_option( 'breaking-or-menu' ) === '2' ): ?>
						<nav>
							<?php wp_nav_menu( array(
								'theme_location' => 'secondary',
								'container' =>false,
								'fallback_cb' => '',
								'items_wrap' => '<ul class="sf-menu ' . $responsivemode . '">%3$s</ul>',
								'echo' => true,
								'before' => '',
								'after' => '',
								'link_before' => '',
								'link_after' => '',
								'depth' => 0,)
							); ?>
						</nav><!-- /nav -->
					<?php endif; ?>

					<div class="right_bar">
						<?php T20_social_links() ; ?>

						<?php if ( ot_get_option( 'random-posts' ) != 'off' ): ?>
							<div class="social r_post"><a href="<?php home_url('/'); ?>?random=1" class="bottomtip" title="<?php echo ot_get_option('random-posts-title'); ?>"><i class="fa fa-random"></i></a></div>
						<?php endif; ?>

						<?php if ( ot_get_option( 'header-search' ) != 'off' ): ?>
						<div class="search">
							<div class="search_icon bottomtip" title="<?php echo ot_get_option('header-search-tooltip'); ?>"><i class="fa fa-search"></i></div>
							<div id="popup">
								<div class="search_place">
									<h4> <?php echo ot_get_option( 'search_title' ); ?> </h4>
									<div class="s_form">
										<form action="<?php echo home_url( '/' ); ?>" id="search" class="searchform" method="get">
											<input id="inputhead" name="s" type="text" onfocus="if (this.value=='<?php echo ot_get_option('header-search-placeholder'); ?>') this.value = '';" onblur="if (this.value=='') this.value = '<?php echo ot_get_option('header-search-placeholder'); ?>';" value="<?php echo get_search_query(); ?>" placeholder="<?php echo ot_get_option('header-search-placeholder'); ?>">
											<button type="submit"><i class="fa fa-search"></i></button>
										</form><!-- /form -->
									</div><!-- /form -->
								</div><!-- /search place -->
								<!-- <div id="popupLoginClose">x</div> -->
							</div><!-- /popup -->
							<div id="SearchBackgroundPopup"></div>
						</div><!-- /search -->
						<?php endif; ?>
					</div><!-- /rightbar -->
				</div><!-- /row -->
			</div><!-- /sec head -->
		</header><!-- /header -->

		<?php if ( is_page_template('page-home-slideshow.php') ) { ?>
			<?php
				wp_reset_postdata();
				global $post;
				$slideshow_category = get_post_meta($post->ID,'_slideshow_category',true);
				$slideshow_num = get_post_meta($post->ID,'_slideshow_num',true);
				$slideshow_num_view = get_post_meta($post->ID,'_slideshow_num_view',true);
				$autoPlay = get_post_meta($post->ID,'_autoPlay',true);
				$stopOnHover = get_post_meta($post->ID,'_stopOnHover',true);
				$pagination = get_post_meta($post->ID,'_pagination',true);
				$navigation = get_post_meta($post->ID,'_navigation',true);
				$slideSpeed = get_post_meta($post->ID,'_slideSpeed',true);
				$paginationSpeed = get_post_meta($post->ID,'_paginationSpeed',true);
			?>
			<div class="big_carousel in-view-<?php echo $slideshow_num_view; ?>">
				<div id="big_carousel" class="owl-carousel">
					<?php
					$queryObjectslide = new WP_query( array(
						'cat' => $slideshow_category,
						'posts_per_page' => $slideshow_num
					) );
					
					if ($queryObjectslide->have_posts()) {
						while ($queryObjectslide->have_posts()) {
							$queryObjectslide->the_post();
					?>
								<?php if ( has_post_thumbnail()) : ?>
									<div class="item wgr featured_thumb">
										<?php edit_post_link('edit'); ?>
										<?php if ( $slideshow_num_view === '1' ): ?>
											<?php $thumb = get_post_meta($id,'_thumbnail_id',false); $image = wp_get_attachment_image_src($thumb[0], 'slidefull', false); ?>
										<?php elseif ( $slideshow_num_view === '2' ): ?>
											<?php $thumb = get_post_meta($id,'_thumbnail_id',false); $image = wp_get_attachment_image_src($thumb[0], 'slidehalf', false); ?>
										<?php elseif ( $slideshow_num_view === '3' ): ?>
											<?php $thumb = get_post_meta($id,'_thumbnail_id',false); $image = wp_get_attachment_image_src($thumb[0], 'slidethree', false); ?>
										<?php elseif ( $slideshow_num_view === '4' ): ?>
											<?php $thumb = get_post_meta($id,'_thumbnail_id',false); $image = wp_get_attachment_image_src($thumb[0], 'slidefour', false); ?>
										<?php elseif ( $slideshow_num_view === '5' ): ?>
											<?php $thumb = get_post_meta($id,'_thumbnail_id',false); $image = wp_get_attachment_image_src($thumb[0], 'slide', false); ?>
										<?php endif; ?>
										<a class="first_A" href="<?php the_permalink(); ?>"><img src="<?php echo $image[0] ?>" alt="#"><?php format_icon(); ?><h3> <?php the_title(); ?> </h3></a>
										<?php get_review(); ?>
										<div class="details">
											<span class="s_category">
												<a href="<?php the_permalink(); ?>"><i class="icon-calendar mi"></i><?php the_time('M j, Y'); ?></a>
												<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><i class="icon-user mi"></i><?php the_author(); ?></a>
											</span>
											<span class="more_meta">
												<a href="<?php comments_link(); ?>"><i class="icon-message mi"></i><?php comments_number( '0', '1', '%' ); ?></a>
											</span>
										</div><!-- /details -->
									</div><!-- /item -->
								<?php endif; ?>
					<?php
						}
					}
					?>
				</div><!-- /ID big carousel -->
			</div><!-- /big carousel -->
			<script type="text/javascript">	
				/* <![CDATA[ */
					jQuery(document).ready(function() {
						jQuery("#big_carousel").owlCarousel({
							slideSpeed : <?php echo $slideSpeed; ?>,
							paginationSpeed : <?php echo $paginationSpeed; ?>,
							<?php if ( $slideshow_num_view === '1' ): ?>
							singleItem: true,
							<?php else: ?>
							items : <?php echo $slideshow_num_view; ?>,
							<?php endif; ?>
							autoPlay: <?php if ( $autoPlay != 'off' ): ?>true<?php else: ?>false<?php endif; ?>,
							stopOnHover: <?php if ( $stopOnHover != 'off' ): ?>true<?php else: ?>false<?php endif; ?>,
							addClassActive: true,
							autoHeight: true,
							responsive: <?php if ( ot_get_option('responsive') != 'off' ): ?>true<?php else: ?>false<?php endif; ?>,
							navigation: <?php if ( $navigation != 'off' ): ?>true<?php else: ?>false<?php endif; ?>,
							navigationText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
							pagination : <?php if ( $pagination != 'off' ): ?>true<?php else: ?>false<?php endif; ?>,
							paginationNumbers: false
						});
					});
				/* ]]> */
			</script>
		<?php } else {
			// Nothing
		} ?>


		<div class="page-content">
			<div class="row clearfix">