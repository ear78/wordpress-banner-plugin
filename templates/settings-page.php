<style>
	.kochava-banner-row td {
		width: 85%;
	}

	.kochava-banner-row input,
	.kochava-banner-row textarea {
		width: 50%;
	}

	.form-table .kochava-banner-row p {
		font-style: italic;
    	color: gray;
    	font-size: 13px;
		width: 50%;
	}

</style>

<div class="wrap">
	<h1><?php esc_html_e(get_admin_page_title()); ?></h1>
	<form action="options.php" method="post">

		<?php
		settings_fields( 'kochava-banner' );

		do_settings_sections( 'kochava-banner' );

		submit_button( 'Save Settings' );
		?>
	</form>
</div>
