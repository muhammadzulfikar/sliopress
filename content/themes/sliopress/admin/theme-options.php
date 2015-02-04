<?php

add_action( 'admin_init', 'custom_theme_options', 1 );

/*  Build the custom settings & update
/* ------------------------------------ */
function custom_theme_options() {
	
	// Get a copy of the saved settings array.
	$saved_settings = get_option( 'option_tree_settings', array() );
	$custom_settings = array(	
		'sections'        => array(
			array(
				'id'		=> 'general',
				'title'		=> __('General', 'T20'),
			),
			array(
				'id'		=> 'layout',
				'title'		=> __('Layout', 'T20'),
			),
			array(
				'id'		=> 'header',
				'title'		=> __('Header', 'T20'),
			),
			array(
				'id'		=> 'blog',
				'title'		=> __('Posts', 'T20'),
			),
			array(
				'id'		=> 'styling',
				'title'		=> __('Styling', 'T20'),
			),
			array(
				'id'		=> 'sidebar',
				'title'		=> __('Create Sidebar', 'T20'),
			),
			array(
				'id'		=> 'bbpress',
				'title'		=> __('bbpress', 'T20'),
			),
		),
	
/*  Theme options
/* ------------------------------------ */
	'settings'        => array(
		
		// General: Animations
		array(
			'id'		=> 'introfx',
			'label'		=> __('Load elements on scroll', 'T20'),
			'desc'		=> __('Adding load effect when user scrolling down elements will load one by one.', 'T20'),
			'std'		=> 'off',
			'type'		=> 'on-off',
			'section'		=> 'general'
		),
		// General: AnimFX
		array(
			'id'		=> 'anim_fx',
			'label'		=> __('Animation Type', 'T20'),
			'desc'		=> __('Animation load effect type.', 'T20'),
			'std'		=> 'fadeInUp',
			'type'		=> 'radio',
			'section'	=> 'general',
			'choices'	=> array(
				array( 
					'value' => 'fadeInUp',
					'label' => __('fadeInUp', 'T20')
				),
				array( 
					'value' => 'fadeInDown',
					'label' => __('fadeInDown', 'T20')
				),
				array( 
					'value' => 'fadeInLeft',
					'label' => __('fadeInLeft', 'T20')
				),
				array( 
					'value' => 'fadeInRight',
					'label' => __('fadeInRight', 'T20')
				),
				array( 
					'value' => 'bigEntrance',
					'label' => __('bigEntrance', 'T20')
				)
			)
		),
		// General: Favicon
		array(
			'id'		=> 'favicon',
			'label'		=> __('Favicon', 'T20'),
			'desc'		=> __('Upload a 16x16px Png/Gif/ico image that will be your favicon', 'T20'),
			'type'		=> 'upload',
			'section'	=> 'general'
		),
		// General: Apple Touch
		array(
			'id'		=> 'apple-touch',
			'label'		=> __('Apple Touch', 'T20'),
			'desc'		=> __('Upload a 144x144px Png image that will be your icon', 'T20'),
			'type'		=> 'upload',
			'section'	=> 'general'
		),
		// General: RSS Feed
		array(
			'id'		=> 'rss-feed',
			'label'		=> __('FeedBurner URL', 'T20'),
			'desc'		=> __('Enter your full FeedBurner URL (or any other preferred feed URL) if you wish to use FeedBurner over the standard SlioPress feed e.g. http://feeds.feedburner.com/yoururlhere', 'T20'),
			'type'		=> 'text',
			'section'	=> 'general'
		),
		// General: Meta Description Default
		array(
			'id'		=> 'meta-description-default',
			'label'		=> __('Meta Description Default', 'T20'),
			'desc'		=> __('Type a little description about your site', 'T20'),
			'type'		=> 'textarea-simple',
			'section'		=> 'general',
			'rows'		=> '3'
		),
		// General: Meta Keywords Default
		array(
			'id'		=> 'meta-keywords-default',
			'label'		=> __('Meta Keywords Default', 'T20'),
			'desc'		=> __('example: business, jquery, modern', 'T20'),
			'type'		=> 'textarea-simple',
			'section'		=> 'general',
			'rows'		=> '3'
		),
		// General: Custom head codes
		array(
			'id'		=> 'custom-codes-head',
			'label'		=> __('Custom Head Codes', 'T20'),
			'desc'		=> __('Add your custom codes or scripts or meta tags, this will add before close head', 'T20'),
			'type'		=> 'textarea-simple',
			'section'		=> 'general',
			'rows'		=> '3'
		),
		// General: Custom Footer codes
		array(
			'id'		=> 'custom-codes-footer',
			'label'		=> __('Custom Footer Codes', 'T20'),
			'desc'		=> __('Add your custom codes, analytics or scripts, this will add before close body', 'T20'),
			'type'		=> 'textarea-simple',
			'section'		=> 'general',
			'rows'		=> '3'
		),
		// General: Custom CSS
		array(
			'id'		=> 'custom-css-head',
			'label'		=> __('Custom CSS', 'T20'),
			'desc'		=> __('add your custom css code here without style tag', 'T20'),
			'type'		=> 'css',
			'section'		=> 'general'
		),
		// Blog: Wp pagenavi
		array(
			'id'		=> 'wp_pagenavi',
			'label'		=> __('WP Pagenavi', 'T20'),
			'desc'		=> __('Adds a more advanced paging navigation to your SlioPress blog.', 'T20'),
			'std'		=> 'on',
			'type'		=> 'on-off',
			'section'		=> 'blog'
		),
		// Blog: Post format icons
		array(
			'id'		=> 'post_format_icons',
			'label'		=> __('Post format icons', 'T20'),
			'desc'		=> __('if you dont like post format icons on post image hover, please set this to Off.', 'T20'),
			'std'		=> 'on',
			'type'		=> 'on-off',
			'section'		=> 'blog'
		),
		// Blog: Excerpt Length
		array(
			'id'		=> 'excerpt-length',
			'label'		=> __('Excerpt Length', 'T20'),
			'desc'		=> __('Max number of words', 'T20'),
			'std'		=> '34',
			'type'		=> 'numeric-slider',
			'section'		=> 'blog',
			'min_max_step'	=> '0,100,1'
		),
		// Blog: Read More
		array(
			'id'		=> 'read_more_text',
			'label'		=> __('Read More button Text', 'T20'),
			'desc'		=> __('Example: Read More &#187; ', 'T20'),
			'std'		=> '',
			'type'		=> 'text',
			'section'	=> 'blog'
		),
		// Blog: Single - Authorbox
		array(
			'id'		=> 'author_box',
			'label'		=> __('Author Box in Single Post', 'T20'),
			'desc'		=> __('Shows post author description, if it exists', 'T20'),
			'std'		=> 'on',
			'type'		=> 'on-off',
			'section'	=> 'blog'
		),
		// Blog: Thumbs Size
		array(
			'id'		=> 'posts_thumbs',
			'label'		=> __('Default Posts Thumbnail Size', 'T20'),
			'desc'		=> __('This options will effective on posts list in blog style pages - category page - seach - author - tag and where have posts list', 'T20'),
			'std'		=> '1',
			'type'		=> 'radio',
			'section'	=> 'blog',
			'choices'	=> array(
				array( 
					'value' => '1',
					'label' => __('Big Thumbnails', 'T20')
				),
				array( 
					'value' => '2',
					'label' => __('Medium Thumbnails', 'T20')
				)
			)
		),
		// Blog: Single - Related Posts
		array(
			'id'		=> 'related_posts',
			'label'		=> __('Related Posts', 'T20'),
			'desc'		=> __('Shows randomized related articles below the post in single post', 'T20'),
			'std'		=> 'categories',
			'type'		=> 'radio',
			'section'	=> 'blog',
			'choices'	=> array(
				array( 
					'value' => 'none',
					'label' => __('Disable', 'T20')
				),
				array( 
					'value' => 'categories',
					'label' => __('Related by categories', 'T20')
				),
				array( 
					'value' => 'tags',
					'label' => __('Related by tags', 'T20')
				)
			)
		),
		// Blog: Single - Related Posts
		array(
			'id'		=> 'related_posts_num',
			'label'		=> __('Related Posts Limit', 'T20'),
			'desc'		=> __('Max number of posts if has', 'T20'),
			'std'		=> '6',
			'type'		=> 'numeric-slider',
			'section'		=> 'blog',
			'min_max_step'	=> '1,30,1'
		),
		// Blog: Single - Share Post
		array(
			'id'		=> 'share_post',
			'label'		=> __('Share Post Buttons', 'T20'),
			'desc'		=> __('Shows social share buttons below the post in single post', 'T20'),
			'std'		=> '2',
			'type'		=> 'radio',
			'section'		=> 'blog',
			'choices'	=> array(
				array( 
					'value' => 'none',
					'label' => __('Disable', 'T20')
				),
				array( 
					'value' => '2',
					'label' => __('Display Share Buttons', 'T20')
				)
			)
		),
		// Blog: Disable Review
		array(
			'id'		=> 'hide_review',
			'label'		=> __('Hide Review', 'T20'),
			'desc'		=> __('if you dont need review system on your site please set it off', 'T20'),
			'std'		=> 'on',
			'type'		=> 'on-off',
			'section'		=> 'blog'
		),
		// Header: Custom Logo
		array(
			'id'		=> 'custom-logo',
			'label'		=> __('Custom Logo', 'T20'),
			'desc'		=> __('Upload your custom logo image', 'T20'),
			'type'		=> 'upload',
			'section'	=> 'header'
		),
		// Header: Ads
		array(
			'id'		=> 'header-ads-img',
			'label'		=> __('Header Ads', 'T20'),
			'desc'		=> __('Upload your ads image or insert your ads image url', 'T20'),
			'type'		=> 'upload',
			'section'	=> 'header'
		),
		// Header: Ads link
		array(
			'id'		=> 'header-ads-link',
			'label'		=> '',
			'desc'		=> __('Ads link address', 'T20'),
			'std'		=> '',
			'type'		=> 'text',
			'section'		=> 'header'
		),
		// Header: Ads Description
		array(
			'id'		=> 'header-ads-description',
			'label'		=> '',
			'desc'		=> __('Ads Description - will show on mouse hover', 'T20'),
			'type'		=> 'text',
			'section'		=> 'header'
		),
		// Header: Ads Description
		array(
			'id'		=> 'header-ads-code',
			'label'		=> __('Or insert your Ads code', 'T20'),
			'desc'		=> __('Ads script or code', 'T20'),
			'type'		=> 'textarea-simple',
			'section'		=> 'header',
			'rows'		=> '3'
		),
		// Header: News or Sec Menu
		array(
			'id'		=> 'breaking-or-menu',
			'label'		=> __('News Bar', 'T20'),
			'desc'		=> __('Select Breaking News or Second Menu or Empty', 'T20'),
			'type'		=> 'radio',
			'std'		=> '1',
			'section'	=> 'header',
			'choices'	=> array(
				array( 
					'value' => '1',
					'label' => __('Breaking News', 'T20')
				),
				array( 
					'value' => '2',
					'label' => __('Second Menu Navigation', 'T20')
				),
				array( 
					'value' => '3',
					'label' => __('Empty', 'T20')
				)
			)
		),
		// Header: Breaking News Category
		array(
			'id'		=> 'news-category',
			'label'		=> __('Breaking News Category', 'T20'),
			'desc'		=> __('By not selecting a category, it will show your latest post(s) from all categories', 'T20'),
			'type'		=> 'category-select',
			'section'		=> 'header'
		),
		// Header: News Number of posts
		array(
			'id'		=> 'news-category-num',
			'label'		=> __('Breaking News Numbers', 'T20'),
			'desc'		=> __('Number of Breaking News to display', 'T20'),
			'std'		=> '10',
			'type'		=> 'numeric-slider',
			'section'		=> 'header',
			'min_max_step'	=> '1,30,1'
		),
		// Header: News Title
		array(
			'id'		=> 'news-category-title',
			'label'		=> __('Breaking News Title', 'T20'),
			'desc'		=> __('Set title for News bar', 'T20'),
			'std'		=> '',
			'type'		=> 'text',
			'section'		=> 'header'
		),
		// Header: News Title BG
		array(
			'id'		=> 'news-title-bg',
			'label'		=> __('Breaking News Title Background color', 'T20'),
			'type'		=> 'colorpicker',
			'section'		=> 'header',
			'class'		=> ''
		),
		// Header: News Ticker Speed
		array(
			'id'		=> 'news-speed',
			'label'		=> __('News Ticker Speed', 'T20'),
			'desc'		=> __('Speed of news ticker - default is 7', 'T20'),
			'std'		=> '7',
			'type'		=> 'numeric-slider',
			'section'		=> 'header',
			'min_max_step'	=> '1,9,1'
		),
		// Header: News Time
		array(
			'id'		=> 'news_ago',
			'label'		=> __('Text after time', 'T20'),
			'desc'		=> __('Example: ago ', 'T20'),
			'std'		=> '',
			'type'		=> 'text',
			'section'	=> 'header'
		),
		// Header: Search
		array(
			'id'		=> 'header-search',
			'label'		=> __('Search Form', 'T20'),
			'desc'		=> __('Search form on header', 'T20'),
			'std'		=> 'on',
			'type'		=> 'on-off',
			'section'	=> 'header'
		),
		// Header: Search Tooltip
		array(
			'id'		=> 'header-search-tooltip',
			'label'		=> __('Search Tooltip', 'T20'),
			'desc'		=> __('Tooltip fo search icon', 'T20'),
			'std'		=> '',
			'type'		=> 'text',
			'section'	=> 'header'
		),
		// Header: Search Placeholder
		array(
			'id'		=> 'header-search-placeholder',
			'label'		=> __('Search Placeholder', 'T20'),
			'desc'		=> __('Set placeholder for search form in header', 'T20'),
			'std'		=> '',
			'type'		=> 'text',
			'section'		=> 'header'
		),
		// Header: Search form Title
		array(
			'id'		=> 'search_title',
			'label'		=> __('Search form Title', 'T20'),
			'desc'		=> __('Set title for search form overlay', 'T20'),
			'type'		=> 'text',
			'section'		=> 'header'
		),
		// Header: Random Posts
		array(
			'id'		=> 'random-posts',
			'label'		=> __('Random Post Button', 'T20'),
			'desc'		=> __('do you like display random post button in sub header', 'T20'),
			'std'		=> 'on',
			'type'		=> 'on-off',
			'section'	=> 'header'
		),
		// Header: Random Posts Title
		array(
			'id'		=> 'random-posts-title',
			'label'		=> __('Random Post Button Title', 'T20'),
			'desc'		=> __('This title showing on button hover', 'T20'),
			'std'		=> '',
			'type'		=> 'text',
			'section'	=> 'header'
		),
		// Social Links : List
		array(
			'id'		=> 'social-links',
			'label'		=> __('Social Links', 'T20'),
			'desc'		=> __('Create and organize your social links. Icons List: <br /><br /> fa-facebook <br /> fa-twitter <br /> fa-rss <br /> fa-dribbble <br /> fa-github <br /> fa-instagram <br /> fa-linkedin <br /> fa-pinterest <br /> fa-google-plus <br /> fa-foursquare <br /> fa-skype <br /> fa-cloud <br /> fa-youtube <br /> fa-tumblr <br /> fa-star <br /> fa-flickr <br /> fa-envelope-o <br /> fa-home <br /> ', 'T20'),
			'type'		=> 'list-item',
			'section'		=> 'header',
			'choices'	=> array(),
			'settings'	=> array(
				array(
					'id'		=> 'social-icon',
					'label'		=> __('Icon Name', 'T20'),
					'desc'		=> __('Font Awesome icon names -->', 'T20'),
					'std'		=> 'fa-',
					'type'		=> 'text',
					'choices'	=> array()
				),
				array(
					'id'		=> 'social-link',
					'label'		=> __('Link', 'T20'),
					'desc'		=> __('Enter the full url for your icon button', 'T20'),
					'std'		=> 'http://',
					'type'		=> 'text',
					'choices'	=> array()
				),
				array(
					'id'		=> 'social-target',
					'label'		=> __('Link Options', 'T20'),
					'desc'		=> '',
					'std'		=> '',
					'type'		=> 'checkbox',
					'choices'	=> array(
						array( 
							'value' => '_blank',
							'label' => __('Open in new window', 'T20'),
						)
					)
				)
			)
		),
		// Layout: Responsive Layout
		array(
			'id'		=> 'responsive',
			'label'		=> __('Responsive Layout', 'T20'),
			'desc'		=> __('Mobile and tablet optimizations [ <strong>responsive.css</strong> ]', 'T20'),
			'std'		=> 'on',
			'type'		=> 'on-off',
			'section'		=> 'layout'
		),
		// Layout: Layout
		array(
			'id'		=> 'full-boxed',
			'label'		=> __('Fullwide or Boxed', 'T20'),
			'desc'		=> __('This option is effective on all pages', 'T20'),
			'type'		=> 'radio',
			'std'		=> '3',
			'section'		=> 'layout',
			'choices'	=> array(
				array( 
					'value' => '1',
					'label' => __('Fullwide', 'T20')
				),
				array( 
					'value' => '2',
					'label' => __('Boxed', 'T20')
				),
				array( 
					'value' => '3',
					'label' => __('Boxed with margin', 'T20')
				)
			)
		),
		// Layout : Global
		array(
			'id'		=> 'layout-global',
			'label'		=> __('Global Layout', 'T20'),
			'desc'		=> __('This option will set on all pages and posts, also you can create different layout with pagebuilder for any page you like.', 'T20'),
			'std'		=> 'both-sidebar-right',
			'type'		=> 'radio-image',
			'section'	=> 'layout',
			'choices'	=> array(
				array(
					'value'		=> 'without-sidebar',
					'label'		=> __('Without Sidebar', 'T20'),
					'src'		=> get_template_directory_uri() . '/admin/assets/images/col-1c.png'
				),
				array(
					'value'		=> 'sidebar-right',
					'label'		=> __('1 Sidebar Right', 'T20'),
					'src'		=> get_template_directory_uri() . '/admin/assets/images/col-2cl.png'
				),
				array(
					'value'		=> 'sidebar-left',
					'label'		=> __('1 Sidebar Left', 'T20'),
					'src'		=> get_template_directory_uri() . '/admin/assets/images/col-2cr.png'
				),
				array(
					'value'		=> 'both-sidebar',
					'label'		=> __('Both Sidebar', 'T20'),
					'src'		=> get_template_directory_uri() . '/admin/assets/images/col-3cm.png'
				),
				array(
					'value'		=> 'both-sidebar-right',
					'label'		=> __('Both Sidebar Right', 'T20'),
					'src'		=> get_template_directory_uri() . '/admin/assets/images/col-3cl.png'
				),
				array(
					'value'		=> 'both-sidebar-left',
					'label'		=> __('Both Sidebar Left', 'T20'),
					'src'		=> get_template_directory_uri() . '/admin/assets/images/col-3cr.png'
				)
			)
		),
		// Layout : Layout Footer
		array(
			'id'		=> 'footer-widgets',
			'label'		=> __('Footer Widget Columns', 'T20'),
			'desc'		=> __('Select columns to enable footer widgets', 'T20'),
			'std'		=> '4',
			'type'		=> 'radio-image',
			'section'	=> 'layout',
			'choices'	=> array(
				array(
					'value'		=> '0',
					'label'		=> __('Disable', 'T20'),
					'src'		=> get_template_directory_uri() . '/admin/assets/images/layout-off.png'
				),
				array(
					'value'		=> '1',
					'label'		=> __('1 Column', 'T20'),
					'src'		=> get_template_directory_uri() . '/admin/assets/images/footer-widgets-1.png'
				),
				array(
					'value'		=> '2',
					'label'		=> __('2 Columns', 'T20'),
					'src'		=> get_template_directory_uri() . '/admin/assets/images/footer-widgets-2.png'
				),
				array(
					'value'		=> '3',
					'label'		=> __('3 Columns', 'T20'),
					'src'		=> get_template_directory_uri() . '/admin/assets/images/footer-widgets-3.png'
				),
				array(
					'value'		=> '4',
					'label'		=> __('4 Columns', 'T20'),
					'src'		=> get_template_directory_uri() . '/admin/assets/images/footer-widgets-4.png'
				)
			)
		),
		// Layout: Subfooter
		array(
			'id'		=> 'subfooter',
			'label'		=> __('Subfooter', 'T20'),
			'desc'		=> __('Do you like display Subfooter?', 'T20'),
			'std'		=> 'on',
			'type'		=> 'on-off',
			'section'		=> 'layout'
		),
		// Layout: Copyright Text
		array(
			'id'		=> 'copyright',
			'label'		=> __('Copyright Text', 'T20'),
			'desc'		=> __('Set copyright text for subfooter like: Copyright 2014 by Theme20. All Rights Reserved. Powered by Wordpress', 'T20'),
			'std'		=> '',
			'type'		=> 'text',
			'section'		=> 'layout'
		),
		// Layout : Global
		array(
			'id'		=> 'layout-bbp',
			'label'		=> __('bbpress Layout', 'T20'),
			'desc'		=> __('This option will set on all pages of bbpress forums', 'T20'),
			'std'		=> 'sidebar-right',
			'type'		=> 'radio-image',
			'section'	=> 'bbpress',
			'choices'	=> array(
				array(
					'value'		=> 'without-sidebar',
					'label'		=> __('Without Sidebar', 'T20'),
					'src'		=> get_template_directory_uri() . '/admin/assets/images/col-1c.png'
				),
				array(
					'value'		=> 'sidebar-right',
					'label'		=> __('1 Sidebar Right', 'T20'),
					'src'		=> get_template_directory_uri() . '/admin/assets/images/col-2cl.png'
				),
				array(
					'value'		=> 'sidebar-left',
					'label'		=> __('1 Sidebar Left', 'T20'),
					'src'		=> get_template_directory_uri() . '/admin/assets/images/col-2cr.png'
				),
				array(
					'value'		=> 'both-sidebar',
					'label'		=> __('Both Sidebar', 'T20'),
					'src'		=> get_template_directory_uri() . '/admin/assets/images/col-3cm.png'
				),
				array(
					'value'		=> 'both-sidebar-right',
					'label'		=> __('Both Sidebar Right', 'T20'),
					'src'		=> get_template_directory_uri() . '/admin/assets/images/col-3cl.png'
				),
				array(
					'value'		=> 'both-sidebar-left',
					'label'		=> __('Both Sidebar Left', 'T20'),
					'src'		=> get_template_directory_uri() . '/admin/assets/images/col-3cr.png'
				)
			)
		),
		array(
			'label'		=> 'bbpress Primary Sidebar',
			'id'		=> 'bbp_primary',
			'type'		=> 'sidebar-select',
			'section'	=> 'bbpress',
			'desc'		=> 'Overrides default'
		),
		array(
			'label'		=> 'bbpress Secondary Sidebar',
			'id'		=> 'bbp_secondary',
			'type'		=> 'sidebar-select',
			'section'	=> 'bbpress',
			'desc'		=> 'Overrides default'
		),
		// Sidebars: Create Areas
		array(
			'id'		=> 'sidebar-areas',
			'label'		=> __('Create Unlimited Sidebars', 'T20'),
			'desc'		=> __('You must save changes for the new areas to appear below. <br /><i>Warning: Make sure each area has a unique ID.</i>', 'T20'),
			'type'		=> 'list-item',
			'section'	=> 'sidebar',
			'choices'	=> array(),
			'settings'	=> array(
				array(
					'id'		=> 'id',
					'label'		=> __('Sidebar ID', 'T20'),
					'desc'		=> __('This ID must be unique, for example "sidebar-about"', 'T20'),
					'std'		=> 'sidebar-',
					'type'		=> 'text',
					'choices'	=> array()
				)
			)
		),
		// Styling: Dark Version
		array(
			'id'		=> 'dark',
			'label'		=> __('Dark Version', 'T20'),
			'desc'		=> __('-', 'T20'),
			'std'		=> 'off',
			'type'		=> 'on-off',
			'section'	=> 'styling'
		),
		// Styling: Enable
		array(
			'id'		=> 'dynamic-styles',
			'label'		=> __('Dynamic Styles', 'T20'),
			'desc'		=> __('Turn on to use the styling options below', 'T20'),
			'std'		=> 'on',
			'type'		=> 'on-off',
			'section'	=> 'styling'
		),
		// Styling: Font
		array(
			'id'		=> 'font_name_body',
			'label'		=> __('Body Font', 'T20'),
			'desc'		=> __('Just paste your google font name example: Raleway you can see all fonts here https://www.google.com/fonts', 'T20'),
			'type'		=> 'text',
			'section'	=> 'styling',
		),
		array(
			'id'		=> 'font_name_navigation',
			'label'		=> __('Menu Navigation Font', 'T20'),
			'desc'		=> __('Just paste your google font name example: Raleway you can see all fonts here https://www.google.com/fonts', 'T20'),
			'type'		=> 'text',
			'section'	=> 'styling',
		),
		array(
			'id'		=> 'font_name_headlines',
			'label'		=> __('H1 to H6 Font', 'T20'),
			'desc'		=> __('Just paste your google font name example: Raleway you can see all fonts here https://www.google.com/fonts', 'T20'),
			'type'		=> 'text',
			'section'		=> 'styling',
		),
		// Styling: Primary Color
		array(
			'id'		=> 'theme_color',
			'label'		=> __('Theme Color Scheme', 'T20'),
			'type'		=> 'colorpicker',
			'section'		=> 'styling',
			'class'		=> ''
		),
		// Styling: Blocks Border Color
		array(
			'id'		=> 'blocks_color',
			'label'		=> __('Top Border Color of Blocks', 'T20'),
			'type'		=> 'colorpicker',
			'section'		=> 'styling',
			'class'		=> ''
		),
		// Styling: Widgets Border Color
		array(
			'id'		=> 'widgets_color',
			'label'		=> __('Top Border Color of Widgets', 'T20'),
			'type'		=> 'colorpicker',
			'section'		=> 'styling',
			'class'		=> ''
		),
		// Styling: Body Background
		array(
			'id'		=> 'body_bg',
			'label'		=> __('Body Background', 'T20'),
			'type'		=> 'background',
			'section'		=> 'styling'
		),
		// Styling: Blocks Pattern
		array(
			'id'		=> 'blocks-pattern',
			'label'		=> __('Blocks and Widgets Title Pattern', 'T20'),
			'desc'		=> __('This pattern will added after title with repeat', 'T20'),
			'type'		=> 'upload',
			'section'	=> 'styling'
		),
		// Styling: Blocks Pattern
		array(
			'id'		=> 'blocks-pattern-footer',
			'label'		=> __('Blocks and Widgets Title Pattern on Footer', 'T20'),
			'desc'		=> __('This pattern will added after title with repeat for blocks and widgets in footer', 'T20'),
			'type'		=> 'upload',
			'section'	=> 'styling'
		),
		// Styling: Post format Hover
		array(
			'id'		=> 'featured_thumb_color',
			'label'		=> __('Featured image post hover background color', 'T20'),
			'type'		=> 'colorpicker',
			'section'		=> 'styling',
			'class'		=> ''
		),
		// Styling: Tooltip Tipsy
		array(
			'id'		=> 'tipsy',
			'label'		=> __('Tooltip Tipsy color', 'T20'),
			'type'		=> 'colorpicker',
			'section'		=> 'styling',
			'class'		=> ''
		),
		// Styling: Back To Top
		array(
			'id'		=> 'totop',
			'label'		=> __('Back To Top Button', 'T20'),
			'desc'		=> __('Display Back To Top Button', 'T20'),
			'std'		=> 'on',
			'type'		=> 'on-off',
			'section'		=> 'styling'
		)
	)
);

/*  Settings are not the same? Update the DB
/* ------------------------------------ */
	if ( $saved_settings !== $custom_settings ) {
		update_option( 'option_tree_settings', $custom_settings ); 
	} 
}
