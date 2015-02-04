<?php
/**
 * SlioPress core upgrade functionality.
 *
 * @package SlioPress
 * @subpackage Administration
 * @since 2.7.0
 */

/**
 * Stores files to be deleted.
 *
 * @since 2.7.0
 * @global array $_old_files
 * @var array
 * @name $_old_files
 */
global $_old_files;

$_old_files = array(
// 2.0
'admin/import-b2.php',
'admin/import-blogger.php',
'admin/import-greymatter.php',
'admin/import-livejournal.php',
'admin/import-mt.php',
'admin/import-rss.php',
'admin/import-textpattern.php',
'admin/quicktags.js',
'images/fade-butt.png',
'images/get-firefox.png',
'images/header-shadow.png',
'images/smilies',
'images/small.png',
'images/wpminilogo.png',
'wp.php',
// 2.0.8
'includes/js/tinymce/plugins/inlinepopups/readme.txt',
// 2.1
'admin/edit-form-ajax-cat.php',
'admin/execute-pings.php',
'admin/inline-uploading.php',
'admin/link-categories.php',
'admin/list-manipulation.js',
'admin/list-manipulation.php',
'includes/comment-functions.php',
'includes/feed-functions.php',
'includes/functions-compat.php',
'includes/functions-formatting.php',
'includes/functions-post.php',
'includes/js/dbx-key.js',
'includes/js/tinymce/plugins/autosave/langs/cs.js',
'includes/js/tinymce/plugins/autosave/langs/sv.js',
'includes/links.php',
'includes/pluggable-functions.php',
'includes/template-functions-author.php',
'includes/template-functions-category.php',
'includes/template-functions-general.php',
'includes/template-functions-links.php',
'includes/template-functions-post.php',
'includes/l10n.php',
// 2.2
'admin/cat-js.php',
'admin/import/b2.php',
'includes/js/autosave-js.php',
'includes/js/list-manipulation-js.php',
'includes/js/ajax-js.php',
// 2.3
'admin/admin-db.php',
'admin/cat.js',
'admin/categories.js',
'admin/custom-fields.js',
'admin/dbx-admin-key.js',
'admin/edit-comments.js',
'admin/install-rtl.css',
'admin/install.css',
'admin/upgrade-schema.php',
'admin/upload-functions.php',
'admin/upload-rtl.css',
'admin/upload.css',
'admin/upload.js',
'admin/users.js',
'admin/widgets-rtl.css',
'admin/widgets.css',
'admin/xfn.js',
'includes/js/tinymce/license.html',
// 2.5
'admin/css/upload.css',
'admin/images/box-bg-left.gif',
'admin/images/box-bg-right.gif',
'admin/images/box-bg.gif',
'admin/images/box-butt-left.gif',
'admin/images/box-butt-right.gif',
'admin/images/box-butt.gif',
'admin/images/box-head-left.gif',
'admin/images/box-head-right.gif',
'admin/images/box-head.gif',
'admin/images/heading-bg.gif',
'admin/images/login-bkg-bottom.gif',
'admin/images/login-bkg-tile.gif',
'admin/images/notice.gif',
'admin/images/toggle.gif',
'admin/includes/upload.php',
'admin/js/dbx-admin-key.js',
'admin/js/link-cat.js',
'admin/profile-update.php',
'admin/templates.php',
'includes/images/wlw/WpComments.png',
'includes/images/wlw/WpIcon.png',
'includes/images/wlw/WpWatermark.png',
'includes/js/dbx.js',
'includes/js/fat.js',
'includes/js/list-manipulation.js',
'includes/js/tinymce/langs/en.js',
'includes/js/tinymce/plugins/autosave/editor_plugin_src.js',
'includes/js/tinymce/plugins/autosave/langs',
'includes/js/tinymce/plugins/directionality/images',
'includes/js/tinymce/plugins/directionality/langs',
'includes/js/tinymce/plugins/inlinepopups/css',
'includes/js/tinymce/plugins/inlinepopups/images',
'includes/js/tinymce/plugins/inlinepopups/jscripts',
'includes/js/tinymce/plugins/paste/images',
'includes/js/tinymce/plugins/paste/jscripts',
'includes/js/tinymce/plugins/paste/langs',
'includes/js/tinymce/plugins/spellchecker/classes/HttpClient.class.php',
'includes/js/tinymce/plugins/spellchecker/classes/TinyGoogleSpell.class.php',
'includes/js/tinymce/plugins/spellchecker/classes/TinyPspell.class.php',
'includes/js/tinymce/plugins/spellchecker/classes/TinyPspellShell.class.php',
'includes/js/tinymce/plugins/spellchecker/css/spellchecker.css',
'includes/js/tinymce/plugins/spellchecker/images',
'includes/js/tinymce/plugins/spellchecker/langs',
'includes/js/tinymce/plugins/spellchecker/tinyspell.php',
'includes/js/tinymce/plugins/wordpress/images',
'includes/js/tinymce/plugins/wordpress/langs',
'includes/js/tinymce/plugins/wordpress/wordpress.css',
'includes/js/tinymce/plugins/wphelp',
'includes/js/tinymce/themes/advanced/css',
'includes/js/tinymce/themes/advanced/images',
'includes/js/tinymce/themes/advanced/jscripts',
'includes/js/tinymce/themes/advanced/langs',
// 2.5.1
'includes/js/tinymce/tiny_mce_gzip.php',
// 2.6
'admin/bookmarklet.php',
'includes/js/jquery/jquery.dimensions.min.js',
'includes/js/tinymce/plugins/wordpress/popups.css',
'includes/js/ajax.js',
// 2.7
'admin/css/press-this-ie-rtl.css',
'admin/css/press-this-ie.css',
'admin/css/upload-rtl.css',
'admin/edit-form.php',
'admin/images/comment-pill.gif',
'admin/images/comment-stalk-classic.gif',
'admin/images/comment-stalk-fresh.gif',
'admin/images/comment-stalk-rtl.gif',
'admin/images/del.png',
'admin/images/gear.png',
'admin/images/media-button-gallery.gif',
'admin/images/media-buttons.gif',
'admin/images/postbox-bg.gif',
'admin/images/tab.png',
'admin/images/tail.gif',
'admin/js/forms.js',
'admin/js/upload.js',
'admin/link-import.php',
'includes/images/audio.png',
'includes/images/css.png',
'includes/images/default.png',
'includes/images/doc.png',
'includes/images/exe.png',
'includes/images/html.png',
'includes/images/js.png',
'includes/images/pdf.png',
'includes/images/swf.png',
'includes/images/tar.png',
'includes/images/text.png',
'includes/images/video.png',
'includes/images/zip.png',
'includes/js/tinymce/tiny_mce_config.php',
'includes/js/tinymce/tiny_mce_ext.js',
// 2.8
'admin/js/users.js',
'includes/js/swfupload/plugins/swfupload.documentready.js',
'includes/js/swfupload/plugins/swfupload.graceful_degradation.js',
'includes/js/swfupload/swfupload_f9.swf',
'includes/js/tinymce/plugins/autosave',
'includes/js/tinymce/plugins/paste/css',
'includes/js/tinymce/utils/mclayer.js',
'includes/js/tinymce/wordpress.css',
// 2.8.5
'admin/import/btt.php',
'admin/import/jkw.php',
// 2.9
'admin/js/page.dev.js',
'admin/js/page.js',
'admin/js/set-post-thumbnail-handler.dev.js',
'admin/js/set-post-thumbnail-handler.js',
'admin/js/slug.dev.js',
'admin/js/slug.js',
'includes/gettext.php',
'includes/js/tinymce/plugins/wordpress/js',
'includes/streams.php',
// MU
'README.txt',
'htaccess.dist',
'index-install.php',
'admin/css/mu-rtl.css',
'admin/css/mu.css',
'admin/images/site-admin.png',
'admin/includes/mu.php',
'admin/wpmu-admin.php',
'admin/wpmu-blogs.php',
'admin/wpmu-edit.php',
'admin/wpmu-options.php',
'admin/wpmu-themes.php',
'admin/wpmu-upgrade-site.php',
'admin/wpmu-users.php',
'includes/images/wordpress-mu.png',
'includes/wpmu-default-filters.php',
'includes/wpmu-functions.php',
'wpmu-settings.php',
// 3.0
'admin/categories.php',
'admin/edit-category-form.php',
'admin/edit-page-form.php',
'admin/edit-pages.php',
'admin/images/admin-header-footer.png',
'admin/images/browse-happy.gif',
'admin/images/ico-add.png',
'admin/images/ico-close.png',
'admin/images/ico-edit.png',
'admin/images/ico-viewpage.png',
'admin/images/fav-top.png',
'admin/images/screen-options-left.gif',
'admin/images/logo-vs.gif',
'admin/images/logo.gif',
'admin/import',
'admin/js/gears.dev.js',
'admin/js/gears.js',
'admin/options-misc.php',
'admin/page-new.php',
'admin/page.php',
'admin/rtl.css',
'admin/rtl.dev.css',
'admin/update-links.php',
'admin/admin.css',
'admin/admin.dev.css',
'includes/js/codepress',
'includes/js/codepress/engines/khtml.js',
'includes/js/codepress/engines/older.js',
'includes/js/jquery/autocomplete.dev.js',
'includes/js/jquery/autocomplete.js',
'includes/js/jquery/interface.js',
'includes/js/scriptaculous/prototype.js',
'includes/js/tinymce/tinymce.js',
// 3.1
'admin/edit-attachment-rows.php',
'admin/edit-link-categories.php',
'admin/edit-link-category-form.php',
'admin/edit-post-rows.php',
'admin/images/button-grad-active-vs.png',
'admin/images/button-grad-vs.png',
'admin/images/fav-arrow-vs-rtl.gif',
'admin/images/fav-arrow-vs.gif',
'admin/images/fav-top-vs.gif',
'admin/images/list-vs.png',
'admin/images/screen-options-right-up.gif',
'admin/images/screen-options-right.gif',
'admin/images/visit-site-button-grad-vs.gif',
'admin/images/visit-site-button-grad.gif',
'admin/link-category.php',
'admin/sidebar.php',
'includes/classes.php',
'includes/js/tinymce/blank.htm',
'includes/js/tinymce/plugins/media/css/content.css',
'includes/js/tinymce/plugins/media/img',
'includes/js/tinymce/plugins/safari',
// 3.2
'admin/images/logo-login.gif',
'admin/images/star.gif',
'admin/js/list-table.dev.js',
'admin/js/list-table.js',
'includes/default-embeds.php',
'includes/js/tinymce/plugins/wordpress/img/help.gif',
'includes/js/tinymce/plugins/wordpress/img/more.gif',
'includes/js/tinymce/plugins/wordpress/img/toolbars.gif',
'includes/js/tinymce/themes/advanced/img/fm.gif',
'includes/js/tinymce/themes/advanced/img/sflogo.png',
// 3.3
'admin/css/colors-classic-rtl.css',
'admin/css/colors-classic-rtl.dev.css',
'admin/css/colors-fresh-rtl.css',
'admin/css/colors-fresh-rtl.dev.css',
'admin/css/dashboard-rtl.dev.css',
'admin/css/dashboard.dev.css',
'admin/css/global-rtl.css',
'admin/css/global-rtl.dev.css',
'admin/css/global.css',
'admin/css/global.dev.css',
'admin/css/install-rtl.dev.css',
'admin/css/login-rtl.dev.css',
'admin/css/login.dev.css',
'admin/css/ms.css',
'admin/css/ms.dev.css',
'admin/css/nav-menu-rtl.css',
'admin/css/nav-menu-rtl.dev.css',
'admin/css/nav-menu.css',
'admin/css/nav-menu.dev.css',
'admin/css/plugin-install-rtl.css',
'admin/css/plugin-install-rtl.dev.css',
'admin/css/plugin-install.css',
'admin/css/plugin-install.dev.css',
'admin/css/press-this-rtl.dev.css',
'admin/css/press-this.dev.css',
'admin/css/theme-editor-rtl.css',
'admin/css/theme-editor-rtl.dev.css',
'admin/css/theme-editor.css',
'admin/css/theme-editor.dev.css',
'admin/css/theme-install-rtl.css',
'admin/css/theme-install-rtl.dev.css',
'admin/css/theme-install.css',
'admin/css/theme-install.dev.css',
'admin/css/widgets-rtl.dev.css',
'admin/css/widgets.dev.css',
'admin/includes/internal-linking.php',
'includes/images/admin-bar-sprite-rtl.png',
'includes/js/jquery/ui.button.js',
'includes/js/jquery/ui.core.js',
'includes/js/jquery/ui.dialog.js',
'includes/js/jquery/ui.draggable.js',
'includes/js/jquery/ui.droppable.js',
'includes/js/jquery/ui.mouse.js',
'includes/js/jquery/ui.position.js',
'includes/js/jquery/ui.resizable.js',
'includes/js/jquery/ui.selectable.js',
'includes/js/jquery/ui.sortable.js',
'includes/js/jquery/ui.tabs.js',
'includes/js/jquery/ui.widget.js',
'includes/js/l10n.dev.js',
'includes/js/l10n.js',
'includes/js/tinymce/plugins/wplink/css',
'includes/js/tinymce/plugins/wplink/img',
'includes/js/tinymce/plugins/wplink/js',
'includes/js/tinymce/themes/advanced/img/wpicons.png',
'includes/js/tinymce/themes/advanced/skins/wp_theme/img/butt2.png',
'includes/js/tinymce/themes/advanced/skins/wp_theme/img/button_bg.png',
'includes/js/tinymce/themes/advanced/skins/wp_theme/img/down_arrow.gif',
'includes/js/tinymce/themes/advanced/skins/wp_theme/img/fade-butt.png',
'includes/js/tinymce/themes/advanced/skins/wp_theme/img/separator.gif',
// Don't delete, yet: 'rss.php',
// Don't delete, yet: 'rdf.php',
// Don't delete, yet: 'rss2.php',
// Don't delete, yet: 'commentsrss2.php',
// Don't delete, yet: 'atom.php',
// Don't delete, yet: 'feed.php',
// 3.4
'admin/images/gray-star.png',
'admin/images/logo-login.png',
'admin/images/star.png',
'admin/index-extra.php',
'admin/network/index-extra.php',
'admin/user/index-extra.php',
'admin/images/screenshots/admin-flyouts.png',
'admin/images/screenshots/coediting.png',
'admin/images/screenshots/drag-and-drop.png',
'admin/images/screenshots/help-screen.png',
'admin/images/screenshots/media-icon.png',
'admin/images/screenshots/new-feature-pointer.png',
'admin/images/screenshots/welcome-screen.png',
'includes/css/editor-buttons.css',
'includes/css/editor-buttons.dev.css',
'includes/js/tinymce/plugins/paste/blank.htm',
'includes/js/tinymce/plugins/wordpress/css',
'includes/js/tinymce/plugins/wordpress/editor_plugin.dev.js',
'includes/js/tinymce/plugins/wordpress/img/embedded.png',
'includes/js/tinymce/plugins/wordpress/img/more_bug.gif',
'includes/js/tinymce/plugins/wordpress/img/page_bug.gif',
'includes/js/tinymce/plugins/wpdialogs/editor_plugin.dev.js',
'includes/js/tinymce/plugins/wpeditimage/css/editimage-rtl.css',
'includes/js/tinymce/plugins/wpeditimage/editor_plugin.dev.js',
'includes/js/tinymce/plugins/wpfullscreen/editor_plugin.dev.js',
'includes/js/tinymce/plugins/wpgallery/editor_plugin.dev.js',
'includes/js/tinymce/plugins/wpgallery/img/gallery.png',
'includes/js/tinymce/plugins/wplink/editor_plugin.dev.js',
// Don't delete, yet: 'pass.php',
// Don't delete, yet: 'register.php',
// 3.5
'admin/gears-manifest.php',
'admin/includes/manifest.php',
'admin/images/archive-link.png',
'admin/images/blue-grad.png',
'admin/images/button-grad-active.png',
'admin/images/button-grad.png',
'admin/images/ed-bg-vs.gif',
'admin/images/ed-bg.gif',
'admin/images/fade-butt.png',
'admin/images/fav-arrow-rtl.gif',
'admin/images/fav-arrow.gif',
'admin/images/fav-vs.png',
'admin/images/fav.png',
'admin/images/gray-grad.png',
'admin/images/loading-publish.gif',
'admin/images/logo-ghost.png',
'admin/images/logo.gif',
'admin/images/menu-arrow-frame-rtl.png',
'admin/images/menu-arrow-frame.png',
'admin/images/menu-arrows.gif',
'admin/images/menu-bits-rtl-vs.gif',
'admin/images/menu-bits-rtl.gif',
'admin/images/menu-bits-vs.gif',
'admin/images/menu-bits.gif',
'admin/images/menu-dark-rtl-vs.gif',
'admin/images/menu-dark-rtl.gif',
'admin/images/menu-dark-vs.gif',
'admin/images/menu-dark.gif',
'admin/images/required.gif',
'admin/images/screen-options-toggle-vs.gif',
'admin/images/screen-options-toggle.gif',
'admin/images/toggle-arrow-rtl.gif',
'admin/images/toggle-arrow.gif',
'admin/images/upload-classic.png',
'admin/images/upload-fresh.png',
'admin/images/white-grad-active.png',
'admin/images/white-grad.png',
'admin/images/widgets-arrow-vs.gif',
'admin/images/widgets-arrow.gif',
'admin/images/wpspin_dark.gif',
'includes/images/upload.png',
'includes/js/prototype.js',
'includes/js/scriptaculous',
'admin/css/admin-rtl.dev.css',
'admin/css/admin.dev.css',
'admin/css/media-rtl.dev.css',
'admin/css/media.dev.css',
'admin/css/colors-classic.dev.css',
'admin/css/customize-controls-rtl.dev.css',
'admin/css/customize-controls.dev.css',
'admin/css/ie-rtl.dev.css',
'admin/css/ie.dev.css',
'admin/css/install.dev.css',
'admin/css/colors-fresh.dev.css',
'includes/js/customize-base.dev.js',
'includes/js/json2.dev.js',
'includes/js/comment-reply.dev.js',
'includes/js/customize-preview.dev.js',
'includes/js/wplink.dev.js',
'includes/js/tw-sack.dev.js',
'includes/js/list-revisions.dev.js',
'includes/js/autosave.dev.js',
'includes/js/admin-bar.dev.js',
'includes/js/quicktags.dev.js',
'includes/js/ajax-response.dev.js',
'includes/js/pointer.dev.js',
'includes/js/hoverIntent.dev.js',
'includes/js/colorpicker.dev.js',
'includes/js/lists.dev.js',
'includes/js/customize-loader.dev.js',
'includes/js/jquery/jquery.table-hotkeys.dev.js',
'includes/js/jquery/jquery.color.dev.js',
'includes/js/jquery/jquery.color.js',
'includes/js/jquery/jquery.hotkeys.dev.js',
'includes/js/jquery/jquery.form.dev.js',
'includes/js/jquery/suggest.dev.js',
'admin/js/xfn.dev.js',
'admin/js/set-post-thumbnail.dev.js',
'admin/js/comment.dev.js',
'admin/js/theme.dev.js',
'admin/js/cat.dev.js',
'admin/js/password-strength-meter.dev.js',
'admin/js/user-profile.dev.js',
'admin/js/theme-preview.dev.js',
'admin/js/post.dev.js',
'admin/js/media-upload.dev.js',
'admin/js/word-count.dev.js',
'admin/js/plugin-install.dev.js',
'admin/js/edit-comments.dev.js',
'admin/js/media-gallery.dev.js',
'admin/js/custom-fields.dev.js',
'admin/js/custom-background.dev.js',
'admin/js/common.dev.js',
'admin/js/inline-edit-tax.dev.js',
'admin/js/gallery.dev.js',
'admin/js/utils.dev.js',
'admin/js/widgets.dev.js',
'admin/js/fullscreen.dev.js',
'admin/js/nav-menu.dev.js',
'admin/js/dashboard.dev.js',
'admin/js/link.dev.js',
'admin/js/user-suggest.dev.js',
'admin/js/postbox.dev.js',
'admin/js/tags.dev.js',
'admin/js/image-edit.dev.js',
'admin/js/media.dev.js',
'admin/js/customize-controls.dev.js',
'admin/js/inline-edit-post.dev.js',
'admin/js/categories.dev.js',
'admin/js/editor.dev.js',
'includes/js/tinymce/plugins/wpeditimage/js/editimage.dev.js',
'includes/js/tinymce/plugins/wpdialogs/js/popup.dev.js',
'includes/js/tinymce/plugins/wpdialogs/js/wpdialog.dev.js',
'includes/js/plupload/handlers.dev.js',
'includes/js/plupload/plupload.dev.js',
'includes/js/swfupload/handlers.dev.js',
'includes/js/jcrop/jquery.Jcrop.dev.js',
'includes/js/jcrop/jquery.Jcrop.js',
'includes/js/jcrop/jquery.Jcrop.css',
'includes/js/imgareaselect/jquery.imgareaselect.dev.js',
'includes/css/pointer.dev.css',
'includes/css/editor.dev.css',
'includes/css/jquery-ui-dialog.dev.css',
'includes/css/admin-bar-rtl.dev.css',
'includes/css/admin-bar.dev.css',
'includes/js/jquery/ui/jquery.effects.clip.min.js',
'includes/js/jquery/ui/jquery.effects.scale.min.js',
'includes/js/jquery/ui/jquery.effects.blind.min.js',
'includes/js/jquery/ui/jquery.effects.core.min.js',
'includes/js/jquery/ui/jquery.effects.shake.min.js',
'includes/js/jquery/ui/jquery.effects.fade.min.js',
'includes/js/jquery/ui/jquery.effects.explode.min.js',
'includes/js/jquery/ui/jquery.effects.slide.min.js',
'includes/js/jquery/ui/jquery.effects.drop.min.js',
'includes/js/jquery/ui/jquery.effects.highlight.min.js',
'includes/js/jquery/ui/jquery.effects.bounce.min.js',
'includes/js/jquery/ui/jquery.effects.pulsate.min.js',
'includes/js/jquery/ui/jquery.effects.transfer.min.js',
'includes/js/jquery/ui/jquery.effects.fold.min.js',
'admin/images/screenshots/captions-1.png',
'admin/images/screenshots/captions-2.png',
'admin/images/screenshots/flex-header-1.png',
'admin/images/screenshots/flex-header-2.png',
'admin/images/screenshots/flex-header-3.png',
'admin/images/screenshots/flex-header-media-library.png',
'admin/images/screenshots/theme-customizer.png',
'admin/images/screenshots/twitter-embed-1.png',
'admin/images/screenshots/twitter-embed-2.png',
'admin/js/utils.js',
'admin/options-privacy.php',
'app.php',
'includes/class-atom-server.php',
'includes/js/tinymce/themes/advanced/skins/wp_theme/ui.css',
// 3.5.2
'includes/js/swfupload/swfupload-all.js',
// 3.6
'admin/js/revisions-js.php',
'admin/images/screenshots',
'admin/js/categories.js',
'admin/js/categories.min.js',
'admin/js/custom-fields.js',
'admin/js/custom-fields.min.js',
// 3.7
'admin/js/cat.js',
'admin/js/cat.min.js',
'includes/js/tinymce/plugins/wpeditimage/js/editimage.min.js',
// 3.8
'includes/js/tinymce/themes/advanced/skins/wp_theme/img/page_bug.gif',
'includes/js/tinymce/themes/advanced/skins/wp_theme/img/more_bug.gif',
'includes/js/thickbox/tb-close-2x.png',
'includes/js/thickbox/tb-close.png',
'includes/images/wpmini-blue-2x.png',
'includes/images/wpmini-blue.png',
'admin/css/colors-fresh.css',
'admin/css/colors-classic.css',
'admin/css/colors-fresh.min.css',
'admin/css/colors-classic.min.css',
'admin/js/about.min.js',
'admin/js/about.js',
'admin/images/arrows-dark-vs-2x.png',
'admin/images/logo-vs.png',
'admin/images/arrows-dark-vs.png',
'admin/images/logo.png',
'admin/images/arrows-pr.png',
'admin/images/arrows-dark.png',
'admin/images/press-this.png',
'admin/images/press-this-2x.png',
'admin/images/arrows-vs-2x.png',
'admin/images/welcome-icons.png',
'admin/images/logo-2x.png',
'admin/images/stars-rtl-2x.png',
'admin/images/arrows-dark-2x.png',
'admin/images/arrows-pr-2x.png',
'admin/images/menu-shadow-rtl.png',
'admin/images/arrows-vs.png',
'admin/images/about-search-2x.png',
'admin/images/bubble_bg-rtl-2x.gif',
'admin/images/badge-2x.png',
'admin/images/wordpress-logo-2x.png',
'admin/images/bubble_bg-rtl.gif',
'admin/images/badge.png',
'admin/images/menu-shadow.png',
'admin/images/about-globe-2x.png',
'admin/images/welcome-icons-2x.png',
'admin/images/stars-rtl.png',
'admin/images/logo-vs-2x.png',
'admin/images/about-updates-2x.png',
// 3.9
'admin/css/colors.css',
'admin/css/colors.min.css',
'admin/css/colors-rtl.css',
'admin/css/colors-rtl.min.css',
'admin/css/media-rtl.min.css',
'admin/css/media.min.css',
'admin/css/farbtastic-rtl.min.css',
'admin/images/lock-2x.png',
'admin/images/lock.png',
'admin/js/theme-preview.js',
'admin/js/theme-install.min.js',
'admin/js/theme-install.js',
'admin/js/theme-preview.min.js',
'includes/js/plupload/plupload.html4.js',
'includes/js/plupload/plupload.html5.js',
'includes/js/plupload/changelog.txt',
'includes/js/plupload/plupload.silverlight.js',
'includes/js/plupload/plupload.flash.js',
'includes/js/plupload/plupload.js',
'includes/js/tinymce/plugins/spellchecker',
'includes/js/tinymce/plugins/inlinepopups',
'includes/js/tinymce/plugins/media/js',
'includes/js/tinymce/plugins/media/css',
'includes/js/tinymce/plugins/wordpress/img',
'includes/js/tinymce/plugins/wpdialogs/js',
'includes/js/tinymce/plugins/wpeditimage/img',
'includes/js/tinymce/plugins/wpeditimage/js',
'includes/js/tinymce/plugins/wpeditimage/css',
'includes/js/tinymce/plugins/wpgallery/img',
'includes/js/tinymce/plugins/wpfullscreen/css',
'includes/js/tinymce/plugins/paste/js',
'includes/js/tinymce/themes/advanced',
'includes/js/tinymce/tiny_mce.js',
'includes/js/tinymce/mark_loaded_src.js',
'includes/js/tinymce/tinymce-schema.js',
'includes/js/tinymce/plugins/media/editor_plugin.js',
'includes/js/tinymce/plugins/media/editor_plugin_src.js',
'includes/js/tinymce/plugins/media/media.htm',
'includes/js/tinymce/plugins/wpview/editor_plugin_src.js',
'includes/js/tinymce/plugins/wpview/editor_plugin.js',
'includes/js/tinymce/plugins/directionality/editor_plugin.js',
'includes/js/tinymce/plugins/directionality/editor_plugin_src.js',
'includes/js/tinymce/plugins/wordpress/editor_plugin.js',
'includes/js/tinymce/plugins/wordpress/editor_plugin_src.js',
'includes/js/tinymce/plugins/wpdialogs/editor_plugin_src.js',
'includes/js/tinymce/plugins/wpdialogs/editor_plugin.js',
'includes/js/tinymce/plugins/wpeditimage/editimage.html',
'includes/js/tinymce/plugins/wpeditimage/editor_plugin.js',
'includes/js/tinymce/plugins/wpeditimage/editor_plugin_src.js',
'includes/js/tinymce/plugins/fullscreen/editor_plugin_src.js',
'includes/js/tinymce/plugins/fullscreen/fullscreen.htm',
'includes/js/tinymce/plugins/fullscreen/editor_plugin.js',
'includes/js/tinymce/plugins/wplink/editor_plugin_src.js',
'includes/js/tinymce/plugins/wplink/editor_plugin.js',
'includes/js/tinymce/plugins/wpgallery/editor_plugin_src.js',
'includes/js/tinymce/plugins/wpgallery/editor_plugin.js',
'includes/js/tinymce/plugins/tabfocus/editor_plugin.js',
'includes/js/tinymce/plugins/tabfocus/editor_plugin_src.js',
'includes/js/tinymce/plugins/wpfullscreen/editor_plugin.js',
'includes/js/tinymce/plugins/wpfullscreen/editor_plugin_src.js',
'includes/js/tinymce/plugins/paste/editor_plugin.js',
'includes/js/tinymce/plugins/paste/pasteword.htm',
'includes/js/tinymce/plugins/paste/editor_plugin_src.js',
'includes/js/tinymce/plugins/paste/pastetext.htm',
'includes/js/tinymce/langs/langs.php',
// 4.1
'includes/js/jquery/ui/jquery.ui.accordion.min.js',
'includes/js/jquery/ui/jquery.ui.autocomplete.min.js',
'includes/js/jquery/ui/jquery.ui.button.min.js',
'includes/js/jquery/ui/jquery.ui.core.min.js',
'includes/js/jquery/ui/jquery.ui.datepicker.min.js',
'includes/js/jquery/ui/jquery.ui.dialog.min.js',
'includes/js/jquery/ui/jquery.ui.draggable.min.js',
'includes/js/jquery/ui/jquery.ui.droppable.min.js',
'includes/js/jquery/ui/jquery.ui.effect-blind.min.js',
'includes/js/jquery/ui/jquery.ui.effect-bounce.min.js',
'includes/js/jquery/ui/jquery.ui.effect-clip.min.js',
'includes/js/jquery/ui/jquery.ui.effect-drop.min.js',
'includes/js/jquery/ui/jquery.ui.effect-explode.min.js',
'includes/js/jquery/ui/jquery.ui.effect-fade.min.js',
'includes/js/jquery/ui/jquery.ui.effect-fold.min.js',
'includes/js/jquery/ui/jquery.ui.effect-highlight.min.js',
'includes/js/jquery/ui/jquery.ui.effect-pulsate.min.js',
'includes/js/jquery/ui/jquery.ui.effect-scale.min.js',
'includes/js/jquery/ui/jquery.ui.effect-shake.min.js',
'includes/js/jquery/ui/jquery.ui.effect-slide.min.js',
'includes/js/jquery/ui/jquery.ui.effect-transfer.min.js',
'includes/js/jquery/ui/jquery.ui.effect.min.js',
'includes/js/jquery/ui/jquery.ui.menu.min.js',
'includes/js/jquery/ui/jquery.ui.mouse.min.js',
'includes/js/jquery/ui/jquery.ui.position.min.js',
'includes/js/jquery/ui/jquery.ui.progressbar.min.js',
'includes/js/jquery/ui/jquery.ui.resizable.min.js',
'includes/js/jquery/ui/jquery.ui.selectable.min.js',
'includes/js/jquery/ui/jquery.ui.slider.min.js',
'includes/js/jquery/ui/jquery.ui.sortable.min.js',
'includes/js/jquery/ui/jquery.ui.spinner.min.js',
'includes/js/jquery/ui/jquery.ui.tabs.min.js',
'includes/js/jquery/ui/jquery.ui.tooltip.min.js',
'includes/js/jquery/ui/jquery.ui.widget.min.js',
);

/**
 * Stores new files in content to copy
 *
 * The contents of this array indicate any new bundled plugins/themes which
 * should be installed with the SlioPress Upgrade. These items will not be
 * re-installed in future upgrades, this behaviour is controlled by the
 * introduced version present here being older than the current installed version.
 *
 * The content of this array should follow the following format:
 * Filename (relative to content) => Introduced version
 * Directories should be noted by suffixing it with a trailing slash (/)
 *
 * @since 3.2.0
 * @global array $_new_bundled_files
 * @var array
 * @name $_new_bundled_files
 */
global $_new_bundled_files;

$_new_bundled_files = array(
	'plugins/akismet/'       => '2.0',
	'themes/twentyten/'      => '3.0',
	'themes/twentyeleven/'   => '3.2',
	'themes/twentytwelve/'   => '3.5',
	'themes/twentythirteen/' => '3.6',
	'themes/twentyfourteen/' => '3.8',
	'themes/twentyfifteen/'  => '4.1',
);

/**
 * Upgrade the core of SlioPress.
 *
 * This will create a .maintenance file at the base of the SlioPress directory
 * to ensure that people can not access the web site, when the files are being
 * copied to their locations.
 *
 * The files in the {@link $_old_files} list will be removed and the new files
 * copied from the zip file after the database is upgraded.
 *
 * The files in the {@link $_new_bundled_files} list will be added to the installation
 * if the version is greater than or equal to the old version being upgraded.
 *
 * The steps for the upgrader for after the new release is downloaded and
 * unzipped is:
 *   1. Test unzipped location for select files to ensure that unzipped worked.
 *   2. Create the .maintenance file in current SlioPress base.
 *   3. Copy new SlioPress directory over old SlioPress files.
 *   4. Upgrade SlioPress to new version.
 *     4.1. Copy all files/folders other than content
 *     4.2. Copy any language files to WP_LANG_DIR (which may differ from WP_CONTENT_DIR
 *     4.3. Copy any new bundled themes/plugins to their respective locations
 *   5. Delete new SlioPress directory path.
 *   6. Delete .maintenance file.
 *   7. Remove old files.
 *   8. Delete 'update_core' option.
 *
 * There are several areas of failure. For instance if PHP times out before step
 * 6, then you will not be able to access any portion of your site. Also, since
 * the upgrade will not continue where it left off, you will not be able to
 * automatically remove old files and remove the 'update_core' option. This
 * isn't that bad.
 *
 * If the copy of the new SlioPress over the old fails, then the worse is that
 * the new SlioPress directory will remain.
 *
 * If it is assumed that every file will be copied over, including plugins and
 * themes, then if you edit the default theme, you should rename it, so that
 * your changes remain.
 *
 * @since 2.7.0
 *
 * @param string $from New release unzipped path.
 * @param string $to Path to old SlioPress installation.
 * @return WP_Error|null WP_Error on failure, null on success.
 */
function update_core($from, $to) {
	global $wp_filesystem, $_old_files, $_new_bundled_files, $wpdb;

	@set_time_limit( 300 );

	/**
	 * Filter feedback messages displayed during the core update process.
	 *
	 * The filter is first evaluated after the zip file for the latest version
	 * has been downloaded and unzipped. It is evaluated five more times during
	 * the process:
	 *
	 * 1. Before SlioPress begins the core upgrade process.
	 * 2. Before Maintenance Mode is enabled.
	 * 3. Before SlioPress begins copying over the necessary files.
	 * 4. Before Maintenance Mode is disabled.
	 * 5. Before the database is upgraded.
	 *
	 * @since 2.5.0
	 *
	 * @param string $feedback The core update feedback messages.
	 */
	apply_filters( 'update_feedback', __( 'Verifying the unpacked files&#8230;' ) );

	// Sanity check the unzipped distribution.
	$distro = '';
	$roots = array( '/wordpress/', '/wordpress-mu/' );
	foreach ( $roots as $root ) {
		if ( $wp_filesystem->exists( $from . $root . 'readme.html' ) && $wp_filesystem->exists( $from . $root . 'includes/version.php' ) ) {
			$distro = $root;
			break;
		}
	}
	if ( ! $distro ) {
		$wp_filesystem->delete( $from, true );
		return new WP_Error( 'insane_distro', __('The update could not be unpacked') );
	}

	// Import $wp_version, $required_php_version, and $required_mysql_version from the new version
	// $wp_filesystem->wp_content_dir() returned unslashed pre-2.8
	$versions_file = trailingslashit( $wp_filesystem->wp_content_dir() ) . 'upgrade/version-current.php';
	if ( ! $wp_filesystem->copy( $from . $distro . 'includes/version.php', $versions_file ) ) {
		$wp_filesystem->delete( $from, true );
		return new WP_Error( 'copy_failed_for_version_file', __( 'The update cannot be installed because we will be unable to copy some files. This is usually due to inconsistent file permissions.' ), 'includes/version.php' );
	}

	$wp_filesystem->chmod( $versions_file, FS_CHMOD_FILE );
	require( WP_CONTENT_DIR . '/upgrade/version-current.php' );
	$wp_filesystem->delete( $versions_file );

	$php_version    = phpversion();
	$mysql_version  = $wpdb->db_version();
	$old_wp_version = $GLOBALS['wp_version']; // The version of SlioPress we're updating from
	$development_build = ( false !== strpos( $old_wp_version . $wp_version, '-' )  ); // a dash in the version indicates a Development release
	$php_compat     = version_compare( $php_version, $required_php_version, '>=' );
	if ( file_exists( WP_CONTENT_DIR . '/db.php' ) && empty( $wpdb->is_mysql ) )
		$mysql_compat = true;
	else
		$mysql_compat = version_compare( $mysql_version, $required_mysql_version, '>=' );

	if ( !$mysql_compat || !$php_compat )
		$wp_filesystem->delete($from, true);

	if ( !$mysql_compat && !$php_compat )
		return new WP_Error( 'php_mysql_not_compatible', sprintf( __('The update cannot be installed because SlioPress %1$s requires PHP version %2$s or higher and MySQL version %3$s or higher. You are running PHP version %4$s and MySQL version %5$s.'), $wp_version, $required_php_version, $required_mysql_version, $php_version, $mysql_version ) );
	elseif ( !$php_compat )
		return new WP_Error( 'php_not_compatible', sprintf( __('The update cannot be installed because SlioPress %1$s requires PHP version %2$s or higher. You are running version %3$s.'), $wp_version, $required_php_version, $php_version ) );
	elseif ( !$mysql_compat )
		return new WP_Error( 'mysql_not_compatible', sprintf( __('The update cannot be installed because SlioPress %1$s requires MySQL version %2$s or higher. You are running version %3$s.'), $wp_version, $required_mysql_version, $mysql_version ) );

	/** This filter is documented in admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Preparing to install the latest version&#8230;' ) );

	// Don't copy content, we'll deal with that below
	// We also copy version.php last so failed updates report their old version
	$skip = array( 'content', 'includes/version.php' );
	$check_is_writable = array();

	// Check to see which files don't really need updating - only available for 3.7 and higher
	if ( function_exists( 'get_core_checksums' ) ) {
		// Find the local version of the working directory
		$working_dir_local = WP_CONTENT_DIR . '/upgrade/' . basename( $from ) . $distro;

		$checksums = get_core_checksums( $wp_version, isset( $wp_local_package ) ? $wp_local_package : 'en_US' );
		if ( is_array( $checksums ) && isset( $checksums[ $wp_version ] ) )
			$checksums = $checksums[ $wp_version ]; // Compat code for 3.7-beta2
		if ( is_array( $checksums ) ) {
			foreach( $checksums as $file => $checksum ) {
				if ( 'content' == substr( $file, 0, 10 ) )
					continue;
				if ( ! file_exists( ABSPATH . $file ) )
					continue;
				if ( ! file_exists( $working_dir_local . $file ) )
					continue;
				if ( md5_file( ABSPATH . $file ) === $checksum )
					$skip[] = $file;
				else
					$check_is_writable[ $file ] = ABSPATH . $file;
			}
		}
	}

	// If we're using the direct method, we can predict write failures that are due to permissions.
	if ( $check_is_writable && 'direct' === $wp_filesystem->method ) {
		$files_writable = array_filter( $check_is_writable, array( $wp_filesystem, 'is_writable' ) );
		if ( $files_writable !== $check_is_writable ) {
			$files_not_writable = array_diff_key( $check_is_writable, $files_writable );
			foreach ( $files_not_writable as $relative_file_not_writable => $file_not_writable ) {
				// If the writable check failed, chmod file to 0644 and try again, same as copy_dir().
				$wp_filesystem->chmod( $file_not_writable, FS_CHMOD_FILE );
				if ( $wp_filesystem->is_writable( $file_not_writable ) )
					unset( $files_not_writable[ $relative_file_not_writable ] );
			}

			// Store package-relative paths (the key) of non-writable files in the WP_Error object.
			$error_data = version_compare( $old_wp_version, '3.7-beta2', '>' ) ? array_keys( $files_not_writable ) : '';

			if ( $files_not_writable )
				return new WP_Error( 'files_not_writable', __( 'The update cannot be installed because we will be unable to copy some files. This is usually due to inconsistent file permissions.' ), implode( ', ', $error_data ) );
		}
	}

	/** This filter is documented in admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Enabling Maintenance mode&#8230;' ) );
	// Create maintenance file to signal that we are upgrading
	$maintenance_string = '<?php $upgrading = ' . time() . '; ?>';
	$maintenance_file = $to . '.maintenance';
	$wp_filesystem->delete($maintenance_file);
	$wp_filesystem->put_contents($maintenance_file, $maintenance_string, FS_CHMOD_FILE);

	/** This filter is documented in admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Copying the required files&#8230;' ) );
	// Copy new versions of WP files into place.
	$result = _copy_dir( $from . $distro, $to, $skip );
	if ( is_wp_error( $result ) )
		$result = new WP_Error( $result->get_error_code(), $result->get_error_message(), substr( $result->get_error_data(), strlen( $to ) ) );

	// Since we know the core files have copied over, we can now copy the version file
	if ( ! is_wp_error( $result ) ) {
		if ( ! $wp_filesystem->copy( $from . $distro . 'includes/version.php', $to . 'includes/version.php', true /* overwrite */ ) ) {
			$wp_filesystem->delete( $from, true );
			$result = new WP_Error( 'copy_failed_for_version_file', __( 'The update cannot be installed because we will be unable to copy some files. This is usually due to inconsistent file permissions.' ), 'includes/version.php' );
		}
		$wp_filesystem->chmod( $to . 'includes/version.php', FS_CHMOD_FILE );
	}

	// Check to make sure everything copied correctly, ignoring the contents of content
	$skip = array( 'content' );
	$failed = array();
	if ( isset( $checksums ) && is_array( $checksums ) ) {
		foreach ( $checksums as $file => $checksum ) {
			if ( 'content' == substr( $file, 0, 10 ) )
				continue;
			if ( ! file_exists( $working_dir_local . $file ) )
				continue;
			if ( file_exists( ABSPATH . $file ) && md5_file( ABSPATH . $file ) == $checksum )
				$skip[] = $file;
			else
				$failed[] = $file;
		}
	}

	// Some files didn't copy properly
	if ( ! empty( $failed ) ) {
		$total_size = 0;
		foreach ( $failed as $file ) {
			if ( file_exists( $working_dir_local . $file ) )
				$total_size += filesize( $working_dir_local . $file );
		}

		// If we don't have enough free space, it isn't worth trying again.
		// Unlikely to be hit due to the check in unzip_file().
		$available_space = @disk_free_space( ABSPATH );
		if ( $available_space && $total_size >= $available_space ) {
			$result = new WP_Error( 'disk_full', __( 'There is not enough free disk space to complete the update.' ) );
		} else {
			$result = _copy_dir( $from . $distro, $to, $skip );
			if ( is_wp_error( $result ) )
				$result = new WP_Error( $result->get_error_code() . '_retry', $result->get_error_message(), substr( $result->get_error_data(), strlen( $to ) ) );
		}
	}

	// Custom Content Directory needs updating now.
	// Copy Languages
	if ( !is_wp_error($result) && $wp_filesystem->is_dir($from . $distro . 'content/languages') ) {
		if ( WP_LANG_DIR != ABSPATH . WPINC . '/languages' || @is_dir(WP_LANG_DIR) )
			$lang_dir = WP_LANG_DIR;
		else
			$lang_dir = WP_CONTENT_DIR . '/languages';

		if ( !@is_dir($lang_dir) && 0 === strpos($lang_dir, ABSPATH) ) { // Check the language directory exists first
			$wp_filesystem->mkdir($to . str_replace(ABSPATH, '', $lang_dir), FS_CHMOD_DIR); // If it's within the ABSPATH we can handle it here, otherwise they're out of luck.
			clearstatcache(); // for FTP, Need to clear the stat cache
		}

		if ( @is_dir($lang_dir) ) {
			$wp_lang_dir = $wp_filesystem->find_folder($lang_dir);
			if ( $wp_lang_dir ) {
				$result = copy_dir($from . $distro . 'content/languages/', $wp_lang_dir);
				if ( is_wp_error( $result ) )
					$result = new WP_Error( $result->get_error_code() . '_languages', $result->get_error_message(), substr( $result->get_error_data(), strlen( $wp_lang_dir ) ) );
			}
		}
	}

	/** This filter is documented in admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Disabling Maintenance mode&#8230;' ) );
	// Remove maintenance file, we're done with potential site-breaking changes
	$wp_filesystem->delete( $maintenance_file );

	// 3.5 -> 3.5+ - an empty twentytwelve directory was created upon upgrade to 3.5 for some users, preventing installation of Twenty Twelve.
	if ( '3.5' == $old_wp_version ) {
		if ( is_dir( WP_CONTENT_DIR . '/themes/twentytwelve' ) && ! file_exists( WP_CONTENT_DIR . '/themes/twentytwelve/style.css' )  ) {
			$wp_filesystem->delete( $wp_filesystem->wp_themes_dir() . 'twentytwelve/' );
		}
	}

	// Copy New bundled plugins & themes
	// This gives us the ability to install new plugins & themes bundled with future versions of SlioPress whilst avoiding the re-install upon upgrade issue.
	// $development_build controls us overwriting bundled themes and plugins when a non-stable release is being updated
	if ( !is_wp_error($result) && ( ! defined('CORE_UPGRADE_SKIP_NEW_BUNDLED') || ! CORE_UPGRADE_SKIP_NEW_BUNDLED ) ) {
		foreach ( (array) $_new_bundled_files as $file => $introduced_version ) {
			// If a $development_build or if $introduced version is greater than what the site was previously running
			if ( $development_build || version_compare( $introduced_version, $old_wp_version, '>' ) ) {
				$directory = ('/' == $file[ strlen($file)-1 ]);
				list($type, $filename) = explode('/', $file, 2);

				// Check to see if the bundled items exist before attempting to copy them
				if ( ! $wp_filesystem->exists( $from . $distro . 'content/' . $file ) )
					continue;

				if ( 'plugins' == $type )
					$dest = $wp_filesystem->wp_plugins_dir();
				elseif ( 'themes' == $type )
					$dest = trailingslashit($wp_filesystem->wp_themes_dir()); // Back-compat, ::wp_themes_dir() did not return trailingslash'd pre-3.2
				else
					continue;

				if ( ! $directory ) {
					if ( ! $development_build && $wp_filesystem->exists( $dest . $filename ) )
						continue;

					if ( ! $wp_filesystem->copy($from . $distro . 'content/' . $file, $dest . $filename, FS_CHMOD_FILE) )
						$result = new WP_Error( "copy_failed_for_new_bundled_$type", __( 'Could not copy file.' ), $dest . $filename );
				} else {
					if ( ! $development_build && $wp_filesystem->is_dir( $dest . $filename ) )
						continue;

					$wp_filesystem->mkdir($dest . $filename, FS_CHMOD_DIR);
					$_result = copy_dir( $from . $distro . 'content/' . $file, $dest . $filename);

					// If a error occurs partway through this final step, keep the error flowing through, but keep process going.
					if ( is_wp_error( $_result ) ) {
						if ( ! is_wp_error( $result ) )
							$result = new WP_Error;
						$result->add( $_result->get_error_code() . "_$type", $_result->get_error_message(), substr( $_result->get_error_data(), strlen( $dest ) ) );
					}
				}
			}
		} //end foreach
	}

	// Handle $result error from the above blocks
	if ( is_wp_error($result) ) {
		$wp_filesystem->delete($from, true);
		return $result;
	}

	// Remove old files
	foreach ( $_old_files as $old_file ) {
		$old_file = $to . $old_file;
		if ( !$wp_filesystem->exists($old_file) )
			continue;
		$wp_filesystem->delete($old_file, true);
	}

	// Upgrade DB with separate request
	/** This filter is documented in admin/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Upgrading database&#8230;' ) );
	$db_upgrade_url = admin_url('upgrade.php?step=upgrade_db');
	wp_remote_post($db_upgrade_url, array('timeout' => 60));

	// Clear the cache to prevent an update_option() from saving a stale db_version to the cache
	wp_cache_flush();
	// (Not all cache backends listen to 'flush')
	wp_cache_delete( 'alloptions', 'options' );

	// Remove working directory
	$wp_filesystem->delete($from, true);

	// Force refresh of update information
	if ( function_exists('delete_site_transient') )
		delete_site_transient('update_core');
	else
		delete_option('update_core');

	/**
	 * Fires after SlioPress core has been successfully updated.
	 *
	 * @since 3.3.0
	 *
	 * @param string $wp_version The current SlioPress version.
	 */
	do_action( '_core_updated_successfully', $wp_version );

	// Clear the option that blocks auto updates after failures, now that we've been successful.
	if ( function_exists( 'delete_site_option' ) )
		delete_site_option( 'auto_core_update_failed' );

	return $wp_version;
}

/**
 * Copies a directory from one location to another via the SlioPress Filesystem Abstraction.
 * Assumes that WP_Filesystem() has already been called and setup.
 *
 * This is a temporary function for the 3.1 -> 3.2 upgrade, as well as for those upgrading to
 * 3.7+
 *
 * @ignore
 * @since 3.2.0
 * @since 3.7.0 Updated not to use a regular expression for the skip list
 * @see copy_dir()
 *
 * @param string $from source directory
 * @param string $to destination directory
 * @param array $skip_list a list of files/folders to skip copying
 * @return mixed WP_Error on failure, True on success.
 */
function _copy_dir($from, $to, $skip_list = array() ) {
	global $wp_filesystem;

	$dirlist = $wp_filesystem->dirlist($from);

	$from = trailingslashit($from);
	$to = trailingslashit($to);

	foreach ( (array) $dirlist as $filename => $fileinfo ) {
		if ( in_array( $filename, $skip_list ) )
			continue;

		if ( 'f' == $fileinfo['type'] ) {
			if ( ! $wp_filesystem->copy($from . $filename, $to . $filename, true, FS_CHMOD_FILE) ) {
				// If copy failed, chmod file to 0644 and try again.
				$wp_filesystem->chmod( $to . $filename, FS_CHMOD_FILE );
				if ( ! $wp_filesystem->copy($from . $filename, $to . $filename, true, FS_CHMOD_FILE) )
					return new WP_Error( 'copy_failed__copy_dir', __( 'Could not copy file.' ), $to . $filename );
			}
		} elseif ( 'd' == $fileinfo['type'] ) {
			if ( !$wp_filesystem->is_dir($to . $filename) ) {
				if ( !$wp_filesystem->mkdir($to . $filename, FS_CHMOD_DIR) )
					return new WP_Error( 'mkdir_failed__copy_dir', __( 'Could not create directory.' ), $to . $filename );
			}

			/*
			 * Generate the $sub_skip_list for the subdirectory as a sub-set
			 * of the existing $skip_list.
			 */
			$sub_skip_list = array();
			foreach ( $skip_list as $skip_item ) {
				if ( 0 === strpos( $skip_item, $filename . '/' ) )
					$sub_skip_list[] = preg_replace( '!^' . preg_quote( $filename, '!' ) . '/!i', '', $skip_item );
			}

			$result = _copy_dir($from . $filename, $to . $filename, $sub_skip_list);
			if ( is_wp_error($result) )
				return $result;
		}
	}
	return true;
}

/**
 * Redirect to the About SlioPress page after a successful upgrade.
 *
 * This function is only needed when the existing install is older than 3.4.0.
 *
 * @since 3.3.0
 *
 */
function _redirect_to_about_wordpress( $new_version ) {
	global $wp_version, $pagenow, $action;

	if ( version_compare( $wp_version, '3.4-RC1', '>=' ) )
		return;

	// Ensure we only run this on the update-core.php page. The Core_Upgrader may be used in other contexts.
	if ( 'update-core.php' != $pagenow )
		return;

 	if ( 'do-core-upgrade' != $action && 'do-core-reinstall' != $action )
 		return;

	// Load the updated default text localization domain for new strings.
	load_default_textdomain();

	// See do_core_upgrade()
	show_message( __('SlioPress updated successfully') );

	// self_admin_url() won't exist when upgrading from <= 3.0, so relative URLs are intentional.
	show_message( '<span class="hide-if-no-js">' . sprintf( __( 'Welcome to SlioPress %1$s. You will be redirected to the About SlioPress screen. If not, click <a href="%2$s">here</a>.' ), $new_version, 'about.php?updated' ) . '</span>' );
	show_message( '<span class="hide-if-js">' . sprintf( __( 'Welcome to SlioPress %1$s. <a href="%2$s">Learn more</a>.' ), $new_version, 'about.php?updated' ) . '</span>' );
	echo '</div>';
	?>
<script type="text/javascript">
window.location = 'about.php?updated';
</script>
	<?php

	// Include admin-footer.php and exit.
	include(ABSPATH . 'admin/admin-footer.php');
	exit();
}
add_action( '_core_updated_successfully', '_redirect_to_about_wordpress' );
