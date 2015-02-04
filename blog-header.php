<?php
/**
 * Loads the SlioPress environment and template.
 *
 * @package SlioPress
 */

if ( !isset($wp_did_header) ) {

	$wp_did_header = true;

	require_once( dirname(__FILE__) . '/load.php' );

	wp();

	require_once( ABSPATH . WPINC . '/template-loader.php' );

}
