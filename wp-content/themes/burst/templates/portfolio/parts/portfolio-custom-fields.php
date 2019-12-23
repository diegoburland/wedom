<?php

$burst_mikado_options = burst_mikado_return_global_options();

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

$burst_mikado_portfolios = get_post_meta(get_the_ID(), "mkd_portfolios", true);
if (is_array($burst_mikado_portfolios) && count($burst_mikado_portfolios)){
	usort($burst_mikado_portfolios, "burst_mikado_ComparePortfolioOptions");
	foreach($burst_mikado_portfolios as $portfolio) {
		?>
		<div class="info portfolio_single_custom_field">
			<?php if($portfolio['optionLabel'] != "") { ?>
				<<?php echo esc_attr($burst_mikado_portfolio_info_tag);?> class="info_section_title" <?php burst_mikado_inline_style($burst_mikado_portfolio_info_style); ?>><?php echo stripslashes($portfolio['optionLabel']); ?></<?php echo esc_attr($burst_mikado_portfolio_info_tag);?>>
			<?php } ?>
			<p>
				<?php if($portfolio['optionUrl'] != "") {  ?>
					<a href="<?php echo esc_url($portfolio['optionUrl']); ?>" target="_blank">
						<?php echo esc_html(stripslashes($portfolio['optionValue'])); ?>
					</a>
				<?php } else { ?>
					<?php echo esc_html(stripslashes($portfolio['optionValue'])); ?>
				<?php } ?>
			</p>
		</div> <!-- close div.info.portfolio_single_custom_field -->
	<?php
	}
}
?>