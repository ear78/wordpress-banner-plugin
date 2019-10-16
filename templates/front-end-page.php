<?php

/* Pull Data from DB */
$options = get_option('kochava_banner_options');

?>

	<style>

		#announcement-banner {
			position: absolute;
			width: 100%;
			min-height: 40px;
			font-weight: 400 !important;
			padding: 8px 20px;
			left: 0px;
			background: #03b3e3;
			z-index: 20;
			text-align: center;
			line-height: 28px;
			color: #fff;
			box-shadow: 0 2px 7px 0 rgba(0, 0, 0, 0.1);
		}

		#announcement-banner a {
			color: #fff;
			font-weight: 500 !important;
			text-decoration: none;
			transition: all .14s ease-out;
		}

		#announcement-banner a:hover {
			color: #fff !important;
			opacity: .8;
		}

		#announcement-banner span {
			font-weight: 500 !important;
			color: #005c75;
		}

		@media (min-width: 768px){
			#announcement-banner {
				padding: 0;
				line-height: 40px;
			}
		}
	</style>

		<div id="announcement-banner">
			<a id="announcement-text"
			   href="<?php echo $options['link'] ?>"
			   target="_blank"><?php echo $options['set_text'] ?></a>

			<!-- updated text announcement day of -->
			<a id="updated-text"
			   href="<?php echo $options['link'] ?>"
			   target="_blank"><?php echo $options['update_text'] ?></a>
		</div>
	<script>
		'use strict'

		var d = Date.now()
		var start = new Date('<?php echo $options['set_date'] ?> GMT-0700') // Set start time
		var changeTextTimer = new Date('<?php echo $options['update_date'] ?> GMT-0700') // Set time to change text
		var expire = new Date('<?php echo $options['end_date'] ?> GMT-0700') // Set time to expire and remove display


		var banner = document.querySelector('#announcement-banner') //Banner element
		var text = document.querySelector('#announcement-text') // Initial text
		var updatedText = document.querySelector('#updated-text') // Updated text
		var headerSpace = document.querySelector('#header-space') //Header space element
		var headerHeight = headerSpace.offsetHeight + 'px' // Get header height

		banner.style.top = headerHeight // Set top position based off header space height
		banner.style.display = 'none' // initialize before interval

		var watchTime = function() {
			d = Date.now()
			if (d >= start.getTime() && d <= expire.getTime()) {
				banner.style.display = 'block'
				updatedText.style.display = 'none'
			}
			if (d >= changeTextTimer.getTime()){
				text.style.display = 'none',
				updatedText.style.display = 'block'
			}
			if (d >= expire.getTime()) {
				banner.style.display = 'none'
				clear() // function call to stop timer
			}
		}

		var interval = setInterval(watchTime, 1000)

		function clear() {
			clearInterval(interval) // stop timer after completed
		}


	</script>
