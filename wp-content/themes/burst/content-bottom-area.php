<?php
$burst_mikado_options = burst_mikado_return_global_options();
$burst_mikado_page_id							= burst_mikado_get_page_id();
$burst_mikado_content_bottom_area 				= "yes";
$burst_mikado_content_bottom_area_sidebar 		= "";
$burst_mikado_content_bottom_area_in_grid 		= true;
$burst_mikado_content_bottom_background_color 	= '';

//is content bottom area enabled for current page?
if(get_post_meta($burst_mikado_page_id, "mkd_enable_content_bottom_area", true) != ""){
	$burst_mikado_content_bottom_area = get_post_meta($burst_mikado_page_id, "mkd_enable_content_bottom_area", true);
} elseif(isset($burst_mikado_options['enable_content_bottom_area'])) {
	//content bottom area is turned on in theme options
	$burst_mikado_content_bottom_area = $burst_mikado_options['enable_content_bottom_area'];
}

//is content bottom area enabled?
if($burst_mikado_content_bottom_area == 'yes') {
	//is sidebar chosen for content bottom area for current page?
	if(get_post_meta($burst_mikado_page_id, 'mkd_choose_content_bottom_sidebar', true) != ""){
		$burst_mikado_content_bottom_area_sidebar = get_post_meta($burst_mikado_page_id, 'mkd_choose_content_bottom_sidebar', true);
	} elseif(isset($burst_mikado_options['content_bottom_sidebar_custom_display'])) {
		//sidebar is chosen for content bottom area in theme options
		$burst_mikado_content_bottom_area_sidebar = $burst_mikado_options['content_bottom_sidebar_custom_display'];
	}

	//take content bottom area in grid option for current page if set or from theme options otherwise
	if(get_post_meta($burst_mikado_page_id, 'mkd_content_bottom_sidebar_in_grid', true) != ""){
		$burst_mikado_content_bottom_area_in_grid = get_post_meta($burst_mikado_page_id, 'mkd_content_bottom_sidebar_in_grid', true);
	} elseif(isset($burst_mikado_options['content_bottom_in_grid'])) {
		$burst_mikado_content_bottom_area_in_grid = $burst_mikado_options['content_bottom_in_grid'];
	}

	//is background color for content bottom area set for current page
	if(get_post_meta($burst_mikado_page_id, "mkd_content_bottom_background_color", true) != ""){
		$burst_mikado_content_bottom_background_color = 'background-color: '.esc_attr(get_post_meta($burst_mikado_page_id, "mkd_content_bottom_background_color", true));
	}
}
?>
<?php if(($burst_mikado_content_bottom_area == "yes") && (is_active_sidebar($burst_mikado_content_bottom_area_sidebar))) { ?>

	<div class="content_bottom" <?php burst_mikado_inline_style($burst_mikado_content_bottom_background_color); ?>>
		<?php if($burst_mikado_content_bottom_area_in_grid == 'yes'){ ?>
		<div class="container">
			<div class="container_inner clearfix">
				<?php } ?>
				<?php dynamic_sidebar($burst_mikado_content_bottom_area_sidebar); ?>
				<?php if($burst_mikado_content_bottom_area_in_grid == 'yes'){ ?>
			</div>
		</div>
	<?php } ?>
	</div>
<?php } ?>