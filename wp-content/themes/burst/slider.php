<?php
$burst_mikado_slider_shortcode = get_post_meta($id, "mkd_revolution-slider", true);
if (!empty($burst_mikado_slider_shortcode)) { ?>
	<div class="mkd_slider">
		<div class="mkd_slider_inner">
			<?php echo do_shortcode(wp_kses_post($burst_mikado_slider_shortcode)); // XSS OK ?>
		</div>
	</div>
<?php } ?>