<?php

$burst_mikado_options = burst_mikado_return_global_options();

if( burst_mikado_core_installed() && isset($burst_mikado_options['enable_social_share'])  && $burst_mikado_options['enable_social_share'] == "yes") { ?>
	<?php echo do_shortcode('[no_social_share]'); // XSS OK ?>
<?php } ?>