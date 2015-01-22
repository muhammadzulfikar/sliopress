<?php

/*  Convert hexadecimal to rgb
/* ------------------------------------ */
if ( ! function_exists( 'T20_hex2rgb' ) ) {

	function T20_hex2rgb( $hex, $array=false ) {
		$hex = str_replace("#", "", $hex);

		if ( strlen($hex) == 3 ) {
			$r = hexdec(substr($hex,0,1).substr($hex,0,1));
			$g = hexdec(substr($hex,1,1).substr($hex,1,1));
			$b = hexdec(substr($hex,2,1).substr($hex,2,1));
		} else {
			$r = hexdec(substr($hex,0,2));
			$g = hexdec(substr($hex,2,2));
			$b = hexdec(substr($hex,4,2));
		}

		$rgb = array( $r, $g, $b );
		if ( !$array ) { $rgb = implode(",", $rgb); }
		return $rgb;
	}
	
}	

/*  Google fonts
/* ------------------------------------ */
if ( ! function_exists( 'T20_google_fonts' ) ) {
	function T20_google_fonts () {
		if ( ot_get_option('font_name_body') ) {
			echo '<link href="http://fonts.googleapis.com/css?family='.ot_get_option('font_name_body').'" rel="stylesheet" type="text/css">'. "\n";
		}
		if ( ot_get_option('font_name_navigation') ) {
			echo '<link href="http://fonts.googleapis.com/css?family='.ot_get_option('font_name_navigation').'" rel="stylesheet" type="text/css">'. "\n";
		}
		if ( ot_get_option('font_name_headlines') ) {
			echo '<link href="http://fonts.googleapis.com/css?family='.ot_get_option('font_name_headlines').'" rel="stylesheet" type="text/css">'. "\n";
		}
	}
}
add_action( 'wp_head', 'T20_google_fonts', 2 );	


/*  Dynamic css output
/* ------------------------------------ */
if ( ! function_exists( 'T20_dynamic_css' ) ) {
	function T20_dynamic_css() {
		if ( ot_get_option('dynamic-styles') != 'off' ) {
		
			// rgb values
			$th_color = ot_get_option('featured_thumb_color');
			$theme_color_rgb = T20_hex2rgb($th_color);

			$styles = '<style type="text/css">'."\n";	
			
			// google fonts
			if ( ot_get_option( 'font_name_body' ) ) { $styles .= 'body { font-family: "'.ot_get_option('font_name_body').'", Roboto, tahoma, sans-serif; }'."\n"; }
			if ( ot_get_option( 'font_name_navigation' ) ) { $styles .= 'nav a { font-family: "'.ot_get_option('font_name_navigation').'", Roboto, tahoma, sans-serif; }'."\n"; }
			if ( ot_get_option( 'font_name_headlines' ) ) { $styles .= 'h1, h2, h3, h4, h5, h6 { font-family: "'.ot_get_option('font_name_headlines').'", Roboto, tahoma, sans-serif; }'."\n"; }
			
			// body background
			if ( ot_get_option('body_bg') ) {
				$body_bgg = ot_get_option( 'body_bg', array() );
				if ( $body_bgg['background-color'] ) { $bc = 'background-color:'.$body_bgg['background-color']; } else { $bc = 'background-color:#ddd'; }
				if ( $body_bgg['background-repeat'] ) { $br = 'background-repeat:'.$body_bgg['background-repeat']; } else { $br = 'background-repeat:repeat'; }
				if ( $body_bgg['background-attachment'] ) { $ba = 'background-attachment:'.$body_bgg['background-attachment']; } else { $ba = 'background-attachment:fixed'; }
				if ( $body_bgg['background-position'] ) { $bp = 'background-position:'.$body_bgg['background-position']; } else { $bp = 'background-position:center top'; }
				if ( $body_bgg['background-image'] ) { $bi = 'background-image:url('.$body_bgg['background-image'].')'; } else { $bi = 'background-image:url('.get_template_directory_uri().'/images/backgrounds/'.ot_get_option( 'body_bg_pattern' ).'.png)'; }
				if ( $body_bgg['background-size'] ) { $bs = 'background-size:'.$body_bgg['background-size']; } else { $bs = 'background-size:auto'; }
				$styles .= 'body{'.$bi.';'.$br.';'.$ba.';'.$bp.';'.$bc.';'.$bs.';}'."\n";
			}

			// primary color
			if ( ot_get_option('theme_color') ) {
				$styles .= '
::selection { background-color: '.ot_get_option('theme_color').'; }
::-moz-selection { background-color: '.ot_get_option('theme_color').'; }

a:hover, .sf-menu li li:hover > a, .sf-menu li li > a:hover, .sf-menu li li.current_page_item > a, .sf-menu li li.current-menu-item > a,.sec_head .sf-menu li a:hover, .sf-menu > li:hover > a, 
.sf-menu > li > a:hover, .post_meta a:hover, .widget_archive li.current a, .widget_categories li.current a, .widget_nav_menu li.current a, .widget_meta li.current a, .widget_pages li.current a, 
.widget_archive li:hover a, .widget_pages li:hover a, .widget_meta li:hover a, .widget_nav_menu li:hover a, .widget_categories li:hover a, 
#footer .sf-menu a:hover, #footer .sf-menu .current-menu-item a, #footer .sf-menu .current_page_item a, #header .search button:hover, #footer a:hover, 
.r_post .more_meta a:hover, .r_post .s_category a:hover, .sf-menu li.current_page_item > a, .sf-menu li.current-menu-item > a, .medium_thumb .s_category a:hover { color: '.ot_get_option('theme_color').'; }

.social a:hover .fa-random, .with_color a .fa-random, .social a:hover .fa-envelope-o, .with_color a .fa-envelope-o, .social a:hover .fa-home, .with_color a .fa-home, 
#ajax-login-content-tab input[type="submit"]:hover, #ajax-login-user a:hover, #ajax-recaptcha-container a:hover, #submit:hover, #wp-calendar #today, .tagcloud a:hover,
.search_icon i:hover, .wp-pagenavi a, #footer #submit, #footer .search_btn, #footer .wpcf7-submit, .readmore:hover { background-color: '.ot_get_option('theme_color').' !important; }

.wp-pagenavi a:hover {background: #1D1E20 !important;color: #fff}
textarea:focus, input[type=\'text\']:focus, input[type=\'email\']:focus, input[type=\'url\']:focus, input[type=\'number\']:focus, input[type=\'password\']:focus, .widget_archive li.current a, .widget_categories li.current a, .widget_nav_menu li.current a, .widget_meta li.current a, .widget_pages li.current a, .widget_archive li:hover a, .widget_pages li:hover a, .widget_meta li:hover a, .widget_nav_menu li:hover a, .widget_categories li:hover a,
#footer .widget_archive li a:hover, #footer .widget_pages li a:hover, #footer .widget_meta li a:hover, #footer .widget_recent_entries li:hover, #footer .widget_recent_comments li:hover, #footer .widget_rss li:hover, #footer .widget_nav_menu li a:hover, #footer .widget_categories li a:hover { border-color: '.ot_get_option('theme_color').'; }		
				'."\n";
			}

			if ( ot_get_option('tipsy') ) {
				$styles .= '
.tipsy-inner {background-color: '.ot_get_option('tipsy').' }
.tipsy-n .tipsy-arrow:before { border-bottom: 6px solid '.ot_get_option('tipsy').' }
.tipsy-s .tipsy-arrow:before { border-top: 6px solid '.ot_get_option('tipsy').'}
				'."\n";
			}

			if ( ot_get_option('blocks_color') ) {
				$styles .= '.b_block {border-top: 2px solid '.ot_get_option('blocks_color').' }'."\n";
			}

			if ( ot_get_option('widgets_color') ) {
				$styles .= '.widget {border-top: 2px solid '.ot_get_option('widgets_color').' }'."\n";
			}

			if ( is_rtl() ) { 
				if ( ot_get_option('news-title-bg') ) {
					$styles .= '.sec_head .breaking {background-color: '.ot_get_option('news-title-bg').' }.sec_head .breaking:after {border-right: 15px solid '.ot_get_option('news-title-bg').' }'."\n";
				}
			} else {
				if ( ot_get_option('news-title-bg') ) {
					$styles .= '.sec_head .breaking {background-color: '.ot_get_option('news-title-bg').' }.sec_head .breaking:after {border-left: 15px solid '.ot_get_option('news-title-bg').' }'."\n";
				}
				
			}

			if ( ot_get_option('blocks-pattern') ) {
				$styles .= '.b_title:after {background: url('.ot_get_option('blocks-pattern').') repeat}'."\n";
			}

			if ( ot_get_option('blocks-pattern-footer') ) {
				$styles .= '#footer .b_title:after {background: url('.ot_get_option('blocks-pattern-footer').') repeat}'."\n";
			}

			if ( ot_get_option('hide_review') =='off' ) {
				$styles .= '.tt_review, #review {display: none}'."\n";
			}

			if ( ot_get_option('post_format_icons') =='off' ) {
				$styles .= '.thumb-icon i {display: none !important}'."\n";
			}
			$styles .= '.featured_thumb .thumb-icon {background: rgba('.$theme_color_rgb.', 0.4);}'."\n";
			$styles .= '</style>'."\n";
			echo $styles;		
		}
	}

}
add_action( 'wp_head', 'T20_dynamic_css', 100 );
