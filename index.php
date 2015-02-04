<?php
/**
 * Front to the SlioPress application. This file doesn't do anything, but loads
 * blog-header.php which does and tells SlioPress to load the theme.
 *
 * @package SlioPress
 */

/**
 * Tells SlioPress to load the SlioPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the SlioPress Environment and Template */
require( dirname( __FILE__ ) . '/blog-header.php' );
