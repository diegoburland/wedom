<?php 
/*
Template Name: WooCommerce
*/ 
?>
<?php

$burst_mikado_options = burst_mikado_return_global_options();
$burst_mikado_id = get_option('woocommerce_shop_page_id');
$burst_mikado_shop = get_post($burst_mikado_id);
$burst_mikado_sidebar = burst_mikado_get_sidebar_layout();

if(get_post_meta($burst_mikado_id, "mkd_page_background_color", true) != ""){
	$burst_mikado_background_color = 'background-color: '.esc_attr(get_post_meta($burst_mikado_id, "mkd_page_background_color", true));
}else{
	$burst_mikado_background_color = "";
}

$burst_mikado_content_style = "";
if(get_post_meta($burst_mikado_id, "mkd_content-top-padding", true) != ""){
	if(get_post_meta($burst_mikado_id, "mkd_content-top-padding-mobile", true) == 'yes'){
		$burst_mikado_content_style = "padding-top:".esc_attr(get_post_meta($burst_mikado_id, "mkd_content-top-padding", true))."px !important";
	}else{
		$burst_mikado_content_style = "padding-top:".esc_attr(get_post_meta($burst_mikado_id, "mkd_content-top-padding", true))."px";
	}
}

?>
	<?php get_header(); ?>

        <?php get_template_part( 'title' ); ?>
		<?php get_template_part('slider'); ?>

		<?php if(isset($burst_mikado_options['woo_products_enable_full_width_template'])&& $burst_mikado_options['woo_products_enable_full_width_template']=="yes" && !is_singular('product')){ ?>
			<div class="full_width"<?php burst_mikado_inline_style($burst_mikado_background_color); ?>>
		<?php } else{ ?>	
		<div class="container"<?php burst_mikado_inline_style($burst_mikado_background_color); ?>>
		<?php } ?>	
			
		<?php if($burst_mikado_options['overlapping_content'] == 'yes') {?>
			<div class="overlapping_content"><div class="overlapping_content_inner">
		<?php } ?>
		<?php if(isset($burst_mikado_options['woo_products_enable_full_width_template'])&& $burst_mikado_options['woo_products_enable_full_width_template']=="yes" && !is_singular('product')){ ?>
			<div class="full_width_inner" <?php burst_mikado_inline_style($burst_mikado_content_style); ?>>
		<?php } else{ ?>
			<div class="container_inner default_template_holder clearfix" <?php burst_mikado_inline_style($burst_mikado_content_style); ?>>
		<?php } ?>		
				<?php if(!is_singular('product')) { ?>
					<?php if(($burst_mikado_sidebar == "default")||($burst_mikado_sidebar == "")) : ?>
						<div class="page-decription_holder">
							<?php burst_mikado_woocommerce_content_before(); ?>
						</div>
						<?php burst_mikado_woocommerce_content(); ?>
					<?php elseif($burst_mikado_sidebar == "1" || $burst_mikado_sidebar == "2"): ?>

                    <?php burst_mikado_set_number_of_columns_woo_product_list(); ?>

					<?php if(isset($burst_mikado_options['woocommerce_product_list_content_position']) && $burst_mikado_options['woocommerce_product_list_content_position'] == 'content_above_product_list_and_sidebar') { ?>
						<div class="page-decription_holder">
							<?php burst_mikado_woocommerce_content_before(); ?>
						</div>
					<?php }	?>
					<?php if($burst_mikado_sidebar == "1") : ?>						
						<div class="two_columns_66_33 grid2 woocommerce_with_sidebar clearfix">
							<div class="column1">
					<?php elseif($burst_mikado_sidebar == "2") : ?>
						<div class="two_columns_75_25 grid2 woocommerce_with_sidebar clearfix">
							<div class="column1 content_left_from_sidebar">
					<?php endif; ?>
								<div class="column_inner">
									<?php if(isset($burst_mikado_options['woocommerce_product_list_content_position']) && $burst_mikado_options['woocommerce_product_list_content_position'] == 'content_above_product_list') { ?>
											<div class="page-decription_holder">
												<?php burst_mikado_woocommerce_content_before(); ?>
											</div>
									<?php }	?>
									<?php burst_mikado_woocommerce_content(); ?>
								</div>
							</div>
							<div class="column2"><?php get_sidebar();?></div>
						</div>
					<?php elseif($burst_mikado_sidebar == "3" || $burst_mikado_sidebar == "4"): ?>

                         <?php burst_mikado_set_number_of_columns_woo_product_list(); ?>

                        <?php if(isset($burst_mikado_options['woocommerce_product_list_content_position']) && $burst_mikado_options['woocommerce_product_list_content_position'] == 'content_above_product_list_and_sidebar') { ?>
							<div class="page-decription_holder">
								<?php burst_mikado_woocommerce_content_before(); ?>
							</div>
						<?php }	?>
						<?php if($burst_mikado_sidebar == "3") : ?>
							<div class="two_columns_33_66 grid2 woocommerce_with_sidebar clearfix">
								<div class="column1"><?php get_sidebar();?></div>
								<div class="column2">
						<?php elseif($burst_mikado_sidebar == "4") : ?>
							<div class="two_columns_25_75 grid2 woocommerce_with_sidebar clearfix">
								<div class="column1"><?php get_sidebar();?></div>
								<div class="column2 content_right_from_sidebar">
						<?php endif; ?>
									<div class="column_inner">
										<?php if(isset($burst_mikado_options['woocommerce_product_list_content_position']) && $burst_mikado_options['woocommerce_product_list_content_position'] == 'content_above_product_list') { ?>
											<div class="page-decription_holder">
												<?php burst_mikado_woocommerce_content_before(); ?>
											</div>
										<?php }	?>
										<?php burst_mikado_woocommerce_content(); ?>
									</div>
								</div>
							</div>
					<?php endif; ?>
                <?php } else { 
                      burst_mikado_woocommerce_content();
                } ?>
			</div>
			<?php if($burst_mikado_options['overlapping_content'] == 'yes') {?>
				</div></div>
			<?php } ?>
		</div>
	<?php get_footer(); ?>