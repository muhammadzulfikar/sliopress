<?php
/**
 * Network Freedoms administration panel.
 *
 * @package SlioPress
 * @subpackage Multisite
 * @since 3.4.0
 */

/** Load SlioPress Administration Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );

if ( ! is_multisite() )
	wp_die( __( 'Multisite support is not enabled.' ) );

require( ABSPATH . 'admin/freedoms.php' );
