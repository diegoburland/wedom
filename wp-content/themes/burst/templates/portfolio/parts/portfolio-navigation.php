<?php
$burst_mikado_options = burst_mikado_return_global_options();

$burst_mikado_enable_navigation = true;
if (isset($burst_mikado_options['portfolio_hide_pagination']) && $burst_mikado_options['portfolio_hide_pagination'] == "yes"){
    $burst_mikado_enable_navigation = false;
}

$burst_mikado_navigation_through_category = false;
if (isset($burst_mikado_options['portfolio_navigation_through_same_category']) && $burst_mikado_options['portfolio_navigation_through_same_category'] == "yes")
    $burst_mikado_navigation_through_category = true;
?>

<?php

$burst_mikado_icon_navigation_class = "fa fa-angle-";

if (isset($burst_mikado_options['portfolio_single_navigation_arrows_type']) && $burst_mikado_options['portfolio_single_navigation_arrows_type'] != '') {
    $burst_mikado_icon_navigation_class = $burst_mikado_options['portfolio_single_navigation_arrows_type'];
}

$burst_mikado_direction_nav_classes = burst_mikado_horizontal_slider_icon_classes($burst_mikado_icon_navigation_class);


$burst_mikado_back_to_button_code = '<i class="icon-grid"></i>';

if ($burst_mikado_options['portfolio_back_to_button_choice'] == 'icon'){
    if (isset($burst_mikado_options['portfolio_back_to_button_icon']) && $burst_mikado_options['portfolio_back_to_button_icon'] != '') {
        $burst_mikado_back_to_button = $burst_mikado_options['portfolio_back_to_button_icon'];
        $burst_mikado_back_to_button_code = '<span class="' . $burst_mikado_back_to_button . '"></span>';
    }
}
elseif ($burst_mikado_options['portfolio_back_to_button_choice'] == 'custom_icon') {
    if (isset($burst_mikado_options['portfolio_back_to_button_custom_icon']) && $burst_mikado_options['portfolio_back_to_button_custom_icon'] != '') {
        $burst_mikado_back_to_button_code = '<span class="portfolio_single_nav_custom"></span>';
    }
}

if (get_previous_post() != ""){

	$burst_mikado_prev_categories_array = '';

	if ($burst_mikado_navigation_through_category){
		$burst_mikado_prev_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_previous_post(true,'','portfolio_category')->ID));
		$burst_mikado_prev_thumb = $burst_mikado_prev_thumb[0];
		$burst_mikado_prev_categories = wp_get_post_terms(get_previous_post(true,'','portfolio_category')->ID,'portfolio_category');
	}
	else{
		$burst_mikado_prev_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_previous_post()->ID));
		$burst_mikado_prev_thumb = $burst_mikado_prev_thumb[0];
		$burst_mikado_prev_categories = wp_get_post_terms(get_previous_post()->ID,'portfolio_category');
	}
	if(is_array($burst_mikado_prev_categories) && count($burst_mikado_prev_categories)){
		$burst_mikado_prev_categories_array = array();
		foreach($burst_mikado_prev_categories as $prev_category) {
			$burst_mikado_prev_categories_array[] = $prev_category->name;
		}
	}
	$burst_mikado_previous_html = '<div class="portfolio_pagination">';
	$burst_mikado_previous_html .= '<div class="pagination_arrows_thumb_holder">';
	$burst_mikado_previous_html .= '<span class="pagination_arrows ' .$burst_mikado_direction_nav_classes['left_icon_class']. '"></span>';
	$burst_mikado_previous_html .= '<div class="pagination_thumb" style="background:url('.$burst_mikado_prev_thumb.');"></div>';
	$burst_mikado_previous_html .= '</div>';
	$burst_mikado_previous_html .= '<div class="pagination_text_holder">';
	$burst_mikado_previous_html .= '<span class="pagination_title">%title</span>';
	if (is_array($burst_mikado_prev_categories_array) && count($burst_mikado_prev_categories_array)) {
		$burst_mikado_previous_html .= '<span class="pagination_categories">'.esc_html(implode(', ', $burst_mikado_prev_categories_array)).'</span>';
	}
	$burst_mikado_previous_html .= '</div>'; //closing of .pagination_text_holder
	$burst_mikado_previous_html .= '</div>';
}

if (get_next_post() !== ""){

	$burst_mikado_next_categories_array = '';

	if ($burst_mikado_navigation_through_category){
		$burst_mikado_next_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_next_post(true,'','portfolio_category')->ID));
		$burst_mikado_next_thumb = $burst_mikado_next_thumb[0];
		$burst_mikado_next_categories = wp_get_post_terms(get_next_post(true,'','portfolio_category')->ID,'portfolio_category');
	}
	else{
		$burst_mikado_next_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_next_post()->ID));
		$burst_mikado_next_thumb = $burst_mikado_next_thumb[0];
		$burst_mikado_next_categories = wp_get_post_terms(get_next_post()->ID,'portfolio_category');
	}
	if(is_array($burst_mikado_next_categories) && count($burst_mikado_next_categories)){
		$burst_mikado_next_categories_array = array();
		foreach($burst_mikado_next_categories as $next_category) {
			$burst_mikado_next_categories_array[] = $next_category->name;
		}
	}
	$burst_mikado_next_html = '<div class="portfolio_pagination">';
	$burst_mikado_next_html .= '<div class="pagination_text_holder">';
	$burst_mikado_next_html .= '<span class="pagination_title">%title</span>';
	if (is_array($burst_mikado_next_categories_array) && count($burst_mikado_next_categories_array)) {
		$burst_mikado_next_html .= '<span class="pagination_categories">'.esc_html(implode(', ', $burst_mikado_next_categories_array)).'</span>';
	}
	$burst_mikado_next_html .= '</div>';
	$burst_mikado_next_html .= '<div class="pagination_arrows_thumb_holder">';
	$burst_mikado_next_html .= '<span class="pagination_arrows ' .$burst_mikado_direction_nav_classes['right_icon_class']. '"></span>';
	$burst_mikado_next_html .= '<div class="pagination_thumb" style="background:url('.$burst_mikado_next_thumb.');"></div>';
	$burst_mikado_next_html .= '</div>';
	$burst_mikado_next_html .= '</div>';
}
?>

<?php if($burst_mikado_enable_navigation){ ?>
    <div class="portfolio_navigation">
        <div class="portfolio_navigation_inner">
            <?php if(get_previous_post() != ""){ ?>
                <div class="portfolio_prev">
                    <?php
                    if($burst_mikado_navigation_through_category){
                        previous_post_link('%link',$burst_mikado_previous_html, true,'','portfolio_category');
                    } else {
                        previous_post_link('%link',$burst_mikado_previous_html);
                    }
                    ?>
                </div> <!-- close div.portfolio_prev -->
            <?php } ?>
            <?php if(get_post_meta(get_the_ID(), "mkd_choose-portfolio-list-page", true) != "") { ?>
                <div class="portfolio_button">
                    <a href="<?php echo esc_url(get_permalink(get_post_meta(get_the_ID(), "mkd_choose-portfolio-list-page", true))); ?>"><?php echo wp_kses($burst_mikado_back_to_button_code,array(
                        'span' => array("class" => true),
                        'i' => array("class"=> true)
                    ));?></a>
                </div> <!-- close div.portfolio_button -->
            <?php } ?>
            <?php if(get_next_post() != ""){ ?>
                <div class="portfolio_next">
                    <?php
                    if($burst_mikado_navigation_through_category){
                        next_post_link('%link',$burst_mikado_next_html, true,'','portfolio_category');
                    } else {
                        next_post_link('%link',$burst_mikado_next_html);
                    }
                    ?>
                </div> <!-- close div.portfolio_next -->
            <?php } ?>
        </div>
    </div> <!-- close div.portfolio_navigation -->
<?php } ?>	