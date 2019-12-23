<?php
$burst_mikado_options = burst_mikado_return_global_options();

//get portfolio date value
$burst_mikado_portfolio_hide_date = "";
if(isset($burst_mikado_options['portfolio_hide_date'])){
	$burst_mikado_portfolio_hide_date = $burst_mikado_options['portfolio_hide_date'];
}

if($burst_mikado_portfolio_hide_date != "yes"){

    $burst_mikado_portfolio_info_tag             = 'h6';
    $burst_mikado_portfolio_info_style           = '';

    //set info tag
    if (isset($burst_mikado_options['portfolio_info_tag'])) {
    	$burst_mikado_portfolio_info_tag = $burst_mikado_options['portfolio_info_tag'];
    }

    //set style for info
    if ((isset($burst_mikado_options['portfolio_info_margin_bottom']) && $burst_mikado_options['portfolio_info_margin_bottom'] != '')
    || (isset($burst_mikado_options['portfolio_info_color']) && !empty($burst_mikado_options['portfolio_info_color']))) {

		if (isset($burst_mikado_options['portfolio_info_margin_bottom']) && $burst_mikado_options['portfolio_info_margin_bottom'] != '') {
			$burst_mikado_portfolio_info_style .= 'margin-bottom:' . esc_attr($burst_mikado_options['portfolio_info_margin_bottom']) . 'px;';
		}

		if (isset($burst_mikado_options['portfolio_info_color']) && !empty($burst_mikado_options['portfolio_info_color'])) {
			$burst_mikado_portfolio_info_style .= 'color:'.esc_attr($burst_mikado_options['portfolio_info_color']).';';
		}

    }

   ?>


	<div class="info portfolio_single_custom_date">
		<<?php echo esc_attr($burst_mikado_portfolio_info_tag); ?> class="info_section_title" <?php burst_mikado_inline_style($burst_mikado_portfolio_info_style); ?>><?php esc_html_e('Date','burst'); ?></<?php echo esc_attr($burst_mikado_portfolio_info_tag); ?>>
        <p><?php the_time(get_option('date_format')); ?></p>
	</div>
<?php } ?>