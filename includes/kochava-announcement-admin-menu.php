<?php

function kochava_plugin_banner_settings_page() {
	add_menu_page(
		 'Kochava Announcement Banner',
		 'Kochava Banner',
		 'manage_options',
		 'kochava-banner',
		 'kochava_plugin_banner_settings_html',
		'dashicons-wordpress-alt',
		100
	);
}
add_action('admin_menu', 'kochava_plugin_banner_settings_page');
