function torchlight() {
	?>
	<style>
		.torch {
			position: relative;
			overflow: hidden;
			z-index: 0;
		}
		.torch::after {
			content: "";
			position: absolute;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			pointer-events: none;
			background: radial-gradient(circle 150px at var(--x,0) var(--y,0), rgba(87, 0, 0, 0.5) 0%, black 100%);
			z-index: -1;
		}
	</style>

	<script>
		jQuery(document).ready(function($) {
			$('.torch').on('mousemove', function(e) {
				var rect = this.getBoundingClientRect();
				$(this).css('--x', (e.clientX - rect.left) + 'px');
				$(this).css('--y', (e.clientY - rect.top) + 'px');
			});
			
			$('.torch').on('mouseleave', function(e) {
				$(this).css('--x', '-1000px');
				$(this).css('--y', '-1000px');
			});
		});
	</script>
<?php
}

add_action('wp_footer','torchlight');
