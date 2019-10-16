<?php
/*
 * Plugin Name: Kochava Announcement Banner
 * Description: Marketing announcement banner that shows underneath the header, used for promotion etc...
 * Author: erichardson@kochava.com
 * Version: 1.0.1
 */

if ( ! defined('ABSPATH')) exit;  // if direct access

/* Create settings fields */
include(plugin_dir_path( __FILE__) . '/includes/kochava-announcement-settings-fields.php');

/* Add admin banner menu */
include(plugin_dir_path(__FILE__) . '/includes/kochava-announcement-admin-menu.php');

/* Pull in admin setting page html template */
function kochava_plugin_banner_settings_html() {
	/* Pull in settings page html */
	include (plugin_dir_path( __FILE__ ) . '/templates/settings-page.php');
}

/* Banner that is Front End customer facing */
function kochava_plugin_banner_announcement() {
	/* Pull in Front End Template */
	include (plugin_dir_path( __FILE__ )) . '/templates/front-end-page.php';
}

add_action('add_custom_announcement_banner', 'kochava_plugin_banner_announcement')

?>
