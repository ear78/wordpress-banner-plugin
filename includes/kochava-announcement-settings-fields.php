<?php

function kochava_banner_settings() {

	/* Register options, option added 'kochava_banner_options' */
	register_setting( 'kochava-banner', 'kochava_banner_options' );

	add_settings_section(
		'kochava_banner_settings_section',
		__('Kochava Announcement Settings', 'kochava-banner'),
		'kochava_banner_settings_cb',
		'kochava-banner'
	);

	add_settings_field(
		'kochava_banner_settings_set_date',
		__('Start Date', 'kochava-banner'),
		'kochava_banner_settings_set_date_cb',
		'kochava-banner',
		'kochava_banner_settings_section',
		[
		 'label_for' => 'set_date',
		 'class' => 'kochava-banner-row',
		 'kochava_banner_custom_data' => 'custom',
		]
	);

	add_settings_field(
		'kochava_banner_settings_update_date',
		__('Update Date', 'kochava-banner'),
		'kochava_banner_settings_update_date_cb',
		'kochava-banner',
		'kochava_banner_settings_section',
		[
		 'label_for' => 'update_date',
		 'class' => 'kochava-banner-row',
		 'kochava_banner_custom_data' => 'custom',
		]
	);

	add_settings_field(
		'kochava_banner_settings_end_date',
		__('End Date', 'kochava-banner'),
		'kochava_banner_settings_end_date_cb',
		'kochava-banner',
		'kochava_banner_settings_section',
		[
		 'label_for' => 'end_date',
		 'class' => 'kochava-banner-row',
		 'kochava_banner_custom_data' => 'custom',
		]
	);

	add_settings_field(
		'kochava_banner_settings_set_text',
		__('Set Text', 'kochava-banner'),
		'kochava_banner_settings_set_text_cb',
		'kochava-banner',
		'kochava_banner_settings_section',
		[
		 'label_for' => 'set_text',
		 'class' => 'kochava-banner-row',
		 'kochava_banner_custom_data' => 'custom',
		]
	);

	add_settings_field(
		'kochava_banner_settings_update_text',
		__('Updated Text', 'kochava-banner'),
		'kochava_banner_settings_update_text_cb',
		'kochava-banner',
		'kochava_banner_settings_section',
		[
		 'label_for' => 'update_text',
		 'class' => 'kochava-banner-row',
		 'kochava_banner_custom_data' => 'custom',
		]
	);

	add_settings_field(
		'kochava_banner_settings_link',
		__('Webinar Link', 'kochava-banner'),
		'kochava_banner_settings_link_cb',
		'kochava-banner',
		'kochava_banner_settings_section',
		[
		 'label_for' => 'link',
		 'class' => 'kochava-banner-row',
		 'kochava_banner_custom_data' => 'custom',
		]
	);

}
add_action('admin_init', 'kochava_banner_settings');

function kochava_banner_settings_cb() {
	esc_html_e('Kochava Banner is used to display a banner at the top of the page for promotional and marketing purposes. Use inputs to update the dates, times, text, and links below.', 'kochava-banner');
}

function kochava_banner_settings_set_date_cb($args) {
	$options = get_option('kochava_banner_options');

	?>

	<input type="text" id="kochava_banner_options[<?php echo esc_attr( $args['label_for'] ); ?>]" name="kochava_banner_options[<?php echo esc_attr( $args['label_for'] ); ?>]" value="<?php echo $options['set_date']; ?>" placeholder="October 14, 2019 05:08:00"/>
	<p>Please fill out date like this: October 14, 2019 05:08:00</p>
	<?php
}

function kochava_banner_settings_update_date_cb($args) {
	$options = get_option('kochava_banner_options');

	?>
	<input type="text" id="kochava_banner_options[<?php echo esc_attr( $args['label_for'] ); ?>]" name="kochava_banner_options[<?php echo esc_attr( $args['label_for'] ); ?>]" value="<?php echo $options['update_date']; ?>" placeholder="October 14, 2019 10:00:00"/>
	<p>Please fill out date like this: October 14, 2019 05:08:00</p>
	<?php
}

function kochava_banner_settings_end_date_cb($args) {
	$options = get_option('kochava_banner_options');

	?>
	<input type="text" id="kochava_banner_options[<?php echo esc_attr( $args['label_for'] ); ?>]" name="kochava_banner_options[<?php echo esc_attr( $args['label_for'] ); ?>]" value="<?php echo $options['end_date']; ?>" placeholder="October 16, 2019 10:00:00"/>
	<p>Please fill out date like this: October 14, 2019 05:08:00</p>
	<?php
}

function kochava_banner_settings_set_text_cb($args) {
	$options = get_option('kochava_banner_options');
	?>

	<textarea rows="5" cols="50" id="kochava_banner_options[<?php echo esc_attr( $args['label_for'] ); ?>]" name="kochava_banner_options[<?php echo esc_attr( $args['label_for'] ); ?>]"><?php echo esc_html_e($options['set_text']) ?></textarea>
	<p>Use the span tag like the example for your standout text. Ex. The Facebook / Kochava Webinar is starting in less than 24 hours. &lt;span&gt;Register now!&lt;/span&gt;</p>

	<?php
}


function kochava_banner_settings_update_text_cb($args) {
	$options = get_option('kochava_banner_options');
	?>

	<textarea rows="5" cols="50" id="kochava_banner_options[<?php echo esc_attr( $args['label_for'] ); ?>]" name="kochava_banner_options[<?php echo esc_attr( $args['label_for'] ); ?>]"><?php echo esc_html_e($options['update_text']) ?></textarea>
	<p>Use the span tag like the example for your standout text. Ex. The Facebook / Kochava Webinar is at 10am PST. &lt;span&gt;Register now!&lt;/span&gt;</p>

	<?php
}

function kochava_banner_settings_link_cb($args) {
	$options = get_option('kochava_banner_options');

	?>
	<input type="text" id="kochava_banner_options[<?php echo esc_attr( $args['label_for'] ); ?>]" name="kochava_banner_options[<?php echo esc_attr( $args['label_for'] ); ?>]" value="<?php echo $options['link']; ?>" placeholder="https://kochava.com/market-place"/>

	<?php
}
