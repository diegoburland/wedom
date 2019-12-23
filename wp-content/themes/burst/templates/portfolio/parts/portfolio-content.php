<?php

$burst_mikado_options = burst_mikado_return_global_options();

$burst_mikado_portfolio_info_tag = 'h6';
//set info tag
if (isset($burst_mikado_options['portfolio_info_tag'])) {
    $burst_mikado_portfolio_info_tag = $burst_mikado_options['portfolio_info_tag'];
}
?>
<div class="portfolio_single_text_holder">
	<<?php echo esc_attr($burst_mikado_portfolio_info_tag); ?> class="portfolio_content_title"><?php esc_html_e('Description','burst'); ?></<?php echo esc_attr($burst_mikado_portfolio_info_tag); ?>>
	<div class="info portfolio_single_content">
		<?php the_content(); ?>
	</div> <!-- close div.portfolio_content -->
</div> <!-- close div.portfolio_single_text_holder -->