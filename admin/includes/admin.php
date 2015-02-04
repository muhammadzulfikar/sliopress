<?php
/**
 * Includes all of the SlioPress Administration API files.
 *
 * @package SlioPress
 * @subpackage Administration
 */

if ( ! defined('WP_ADMIN') ) {
	/*
	 * This file is being included from a file other than admin/admin.php, so
	 * some setup was skipped. Make sure the admin message catalog is loaded since
	 * load_default_textdomain() will not have done so in this context.
	 */
	load_textdomain( 'default', WP_LANG_DIR . '/admin-' . get_locale() . '.mo' );
}

/** SlioPress Bookmark Administration API */
require_once(ABSPATH . 'admin/includes/bookmark.php');

/** SlioPress Comment Administration API */
require_once(ABSPATH . 'admin/includes/comment.php');

/** SlioPress Administration File API */
require_once(ABSPATH . 'admin/includes/file.php');

/** SlioPress Image Administration API */
require_once(ABSPATH . 'admin/includes/image.php');

/** SlioPress Media Administration API */
require_once(ABSPATH . 'admin/includes/media.php');

/** SlioPress Import Administration API */
require_once(ABSPATH . 'admin/includes/import.php');

/** SlioPress Misc Administration API */
require_once(ABSPATH . 'admin/includes/misc.php');

/** SlioPress Plugin Administration API */
require_once(ABSPATH . 'admin/includes/plugin.php');

/** SlioPress Post Administration API */
require_once(ABSPATH . 'admin/includes/post.php');

/** SlioPress Administration Screen API */
require_once(ABSPATH . 'admin/includes/screen.php');

/** SlioPress Taxonomy Administration API */
require_once(ABSPATH . 'admin/includes/taxonomy.php');

/** SlioPress Template Administration API */
require_once(ABSPATH . 'admin/includes/template.php');

/** SlioPress List Table Administration API and base class */
require_once(ABSPATH . 'admin/includes/class-list-table.php');
require_once(ABSPATH . 'admin/includes/list-table.php');

/** SlioPress Theme Administration API */
require_once(ABSPATH . 'admin/includes/theme.php');

/** SlioPress User Administration API */
require_once(ABSPATH . 'admin/includes/user.php');

/** SlioPress Update Administration API */
require_once(ABSPATH . 'admin/includes/update.php');

/** SlioPress Deprecated Administration API */
require_once(ABSPATH . 'admin/includes/deprecated.php');

/** SlioPress Multisite support API */
if ( is_multisite() ) {
	require_once(ABSPATH . 'admin/includes/ms.php');
	require_once(ABSPATH . 'admin/includes/ms-deprecated.php');
}
