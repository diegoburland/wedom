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


$burst_mikado_portfolio_hide_categories = "no";
if(isset($burst_mikado_options['portfolio_hide_categories'])) {
	$burst_mikado_portfolio_hide_categories = $burst_mikado_options['portfolio_hide_categories'];
}

$burst_mikado_portfolio_categories = wp_get_post_terms(get_the_ID(),'portfolio_category');

if(is_array($burst_mikado_portfolio_categories) && count($burst_mikado_portfolio_categories) && $burst_mikado_portfolio_hide_categories != "yes"){

	$burst_mikado_portfolio_categories_array = array();
	foreach($burst_mikado_portfolio_categories as $portfolio_category) {
		$burst_mikado_portfolio_categories_array[] = $portfolio_category->name;
	}

	?>
	<div class="info portfolio_single_categories">
		<<?php echo esc_attr($burst_mikado_portfolio_info_tag); ?> class="info_section_title" <?php burst_mikado_inline_style($burst_mikado_portfolio_info_style); ?>><?php esc_html_e('Categories ','burst'); ?></<?php echo esc_attr($burst_mikado_portfolio_info_tag); ?>>
		<ul class="category">
		<?php
		foreach($burst_mikado_portfolio_categories_array as $portfolio_category_single) { ?>
		<li> <?php echo esc_html($portfolio_category_single); ?> </li>
		<?php } ?>
		</ul> <!-- close .category -->
	</div> <!-- close div.info.portfolio-categories -->
<?php } ?>