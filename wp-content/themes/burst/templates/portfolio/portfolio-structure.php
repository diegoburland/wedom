<?php
//get global variables
$burst_mikado_options = burst_mikado_return_global_options();

//init variables
$burst_mikado_id 						= burst_mikado_get_page_id();
$burst_mikado_container_styles			= '';

//is page background color set for current page?
if(get_post_meta($burst_mikado_id, "mkd_page_background_color", true) != ""){
	$burst_mikado_container_styles .= 'background-color: '. esc_attr(get_post_meta($burst_mikado_id, "mkd_page_background_color", true)).';';
}

//get current portfolio template
$burst_mikado_portfolio_template = 'small-images';
if(get_post_meta($burst_mikado_id, "mkd_choose-portfolio-single-view", true) != "") {
	$burst_mikado_portfolio_template = get_post_meta($burst_mikado_id, "mkd_choose-portfolio-single-view", true);
} elseif($burst_mikado_options['portfolio_style'] !== '') {
	$burst_mikado_portfolio_template = $burst_mikado_options['portfolio_style'];
}

if(get_post_meta($burst_mikado_id, "mkd_content-top-padding", true) != ""){
	$burst_mikado_content_style = 'padding-top: '.get_post_meta($burst_mikado_id, "mkd_content-top-padding", true).'px';
}else{
	$burst_mikado_content_style = "";
}
?>

<div class="container" <?php burst_mikado_inline_style($burst_mikado_container_styles); ?>>
	<?php if($burst_mikado_options['overlapping_content'] == 'yes') {?>
		<div class="overlapping_content"><div class="overlapping_content_inner">
	<?php } ?>
	<div class="container_inner default_template_holder clearfix" <?php burst_mikado_inline_style($burst_mikado_content_style); ?>>
		<div class="portfolio_single <?php echo esc_attr($burst_mikado_portfolio_template); ?>">
			<?php
				if (post_password_required()) {
					echo get_the_password_form();
				} else {
					//load proper portfolio file based on portfolio template
					get_template_part('templates/portfolio/portfolio', $burst_mikado_portfolio_template);

					get_template_part('templates/portfolio/parts/portfolio-navigation');

					get_template_part('templates/portfolio/parts/portfolio-comments');
				}
			?>
		</div> <!-- close div.portfolio single -->
	</div> <!-- close div.container inner -->
	<?php if($burst_mikado_options['overlapping_content'] == 'yes') {?>
		</div></div>
	<?php } ?>
</div> <!-- close div.container -->