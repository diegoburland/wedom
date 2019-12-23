<?php
$burst_mikado_options = burst_mikado_return_global_options();
$burst_mikado_icon_collections = burst_mikado_return_icon_collections();

if(isset($burst_mikado_options['enable_social_sidebar']) && $burst_mikado_options['enable_social_sidebar'] == 'yes') {
	$burst_mikado_icons_param_array = array();

	if(isset($burst_mikado_options['social_sidebar_icon_pack']) && $burst_mikado_options['social_sidebar_icon_pack'] !== '' ) {
		$burst_mikado_icon_pack = "icon_pack='".$burst_mikado_options['social_sidebar_icon_pack']."'";

		$burst_mikado_collection_obj = $burst_mikado_icon_collections->getIconCollection($burst_mikado_options['social_sidebar_icon_pack']);

		if(property_exists($burst_mikado_collection_obj, 'param')) {
			$burst_mikado_icon_param = $burst_mikado_collection_obj->param;
		}
	}

	if(isset($burst_mikado_options['social_sidebar_icon_style']) && $burst_mikado_options['social_sidebar_icon_style'] !== '') {
		$burst_mikado_icons_param_array[] = "type='".$burst_mikado_options['social_sidebar_icon_style']."'";
	}
	if(isset($burst_mikado_options['social_sidebar_icon_size']) && $burst_mikado_options['social_sidebar_icon_size'] !== '') {
		$burst_mikado_icons_param_array[] = "custom_size='".esc_attr($burst_mikado_options['social_sidebar_icon_size'])."'";
	}
	else{
		$burst_mikado_icons_param_array[] = "custom_size='20'";
	}
	if(isset($burst_mikado_options['social_sidebar_icon_shape_size']) && $burst_mikado_options['social_sidebar_icon_shape_size'] !== '') {
		$burst_mikado_icons_param_array[] = "shape_size='".esc_attr($burst_mikado_options['social_sidebar_icon_shape_size'])."'";
	}
	if(!empty($burst_mikado_options['social_sidebar_icon_color'])){
		$burst_mikado_icons_param_array[] = "icon_color='".esc_attr($burst_mikado_options['social_sidebar_icon_color'])."'";
	}
	if(!empty($burst_mikado_options['social_sidebar_icon_hover_color'])){
		$burst_mikado_icons_param_array[] = "hover_icon_color='".esc_attr($burst_mikado_options['social_sidebar_icon_hover_color'])."'";
	}
	if(!empty($burst_mikado_options['social_sidebar_icon_background_color'])){
		$burst_mikado_icons_param_array[] = "background_color='".esc_attr($burst_mikado_options['social_sidebar_icon_background_color'])."'";
	}
	if(!empty($burst_mikado_options['social_sidebar_icon_background_hover_color'])){
		$burst_mikado_icons_param_array[] = "hover_background_color='".esc_attr($burst_mikado_options['social_sidebar_icon_background_hover_color'])."'";
	}
	if(!empty($burst_mikado_options['social_sidebar_icon_border_color'])){
		$burst_mikado_icons_param_array[] = "border_color='".esc_attr($burst_mikado_options['social_sidebar_icon_border_color'])."'";
	}
	if(!empty($burst_mikado_options['social_sidebar_icon_border_hover_color'])){
		$burst_mikado_icons_param_array[] = "hover_border_color='".esc_attr($burst_mikado_options['social_sidebar_icon_border_hover_color'])."'";
	}
	if(isset($burst_mikado_options['social_sidebar_icon_border_width']) && $burst_mikado_options['social_sidebar_icon_border_width'] !== '') {
		$burst_mikado_icons_param_array[] = "border_width='".esc_attr($burst_mikado_options['social_sidebar_icon_border_width'])."'";
	}
	$burst_mikado_icons_param_array[] = "target='_self'";

	?>
	<div id="social_icons_widget">
		<div class="social_icons_widget_inner">
			<?php
			if(isset($burst_mikado_options['social_sidebar_facebook_icon']) && $burst_mikado_options['social_sidebar_facebook_icon'] == 'yes') {
				$burst_mikado_icon = $burst_mikado_icon_collections->getFacebookIcon($burst_mikado_options['social_sidebar_icon_pack']);
				$burst_mikado_social_link = "#";
				if(isset($burst_mikado_options['social_sidebar_facebook_icon_link']) && $burst_mikado_options['social_sidebar_facebook_icon_link'] !== ''){
					$burst_mikado_social_link = esc_url($burst_mikado_options['social_sidebar_facebook_icon_link']);
				}
				?> <div class="mkd_social_icon_holder"> <?php
					echo do_shortcode('[no_icons '.$burst_mikado_icon_pack.' '.$burst_mikado_icon_param.'="'.$burst_mikado_icon.'" link="'.$burst_mikado_social_link.'" '.implode(' ', $burst_mikado_icons_param_array).']'); // XSS OK
					?> </div> <?php
			}
			if(isset($burst_mikado_options['social_sidebar_twitter_icon']) && $burst_mikado_options['social_sidebar_twitter_icon'] == 'yes') {
				$burst_mikado_icon = $burst_mikado_icon_collections->getTwitterIcon($burst_mikado_options['social_sidebar_icon_pack']);
				$burst_mikado_social_link = "#";
				if(isset($burst_mikado_options['social_sidebar_twitter_icon_link']) && $burst_mikado_options['social_sidebar_twitter_icon_link'] !== ''){
					$burst_mikado_social_link = esc_url($burst_mikado_options['social_sidebar_twitter_icon_link']);
				}
				?> <div class="mkd_social_icon_holder"> <?php
					echo do_shortcode('[no_icons '.$burst_mikado_icon_pack.' '.$burst_mikado_icon_param.'="'.$burst_mikado_icon.'" link="'.$burst_mikado_social_link.'" '.implode(' ', $burst_mikado_icons_param_array).']'); // XSS OK
					?> </div> <?php
			}
			if(isset($burst_mikado_options['social_sidebar_google_plus_icon']) && $burst_mikado_options['social_sidebar_google_plus_icon'] == 'yes') {
				$burst_mikado_icon = $burst_mikado_icon_collections->getGooglePlusIcon($burst_mikado_options['social_sidebar_icon_pack']);
				$burst_mikado_social_link = "#";
				if(isset($burst_mikado_options['social_sidebar_google_plus_icon_link']) && $burst_mikado_options['social_sidebar_google_plus_icon_link'] !== ''){
					$burst_mikado_social_link = esc_url($burst_mikado_options['social_sidebar_google_plus_icon_link']);
				}
				?> <div class="mkd_social_icon_holder"> <?php
					echo do_shortcode('[no_icons '.$burst_mikado_icon_pack.' '.$burst_mikado_icon_param.'="'.$burst_mikado_icon.'" link="'.$burst_mikado_social_link.'" '.implode(' ', $burst_mikado_icons_param_array).']'); // XSS OK
					?> </div> <?php
			}
			if(isset($burst_mikado_options['social_sidebar_linkedIn_icon']) && $burst_mikado_options['social_sidebar_linkedIn_icon'] == 'yes') {
				$burst_mikado_icon = $burst_mikado_icon_collections->getLinkedInIcon($burst_mikado_options['social_sidebar_icon_pack']);
				$burst_mikado_social_link = "#";
				if(isset($burst_mikado_options['social_sidebar_linkedIn_icon_link']) && $burst_mikado_options['social_sidebar_linkedIn_icon_link'] !== ''){
					$burst_mikado_social_link = esc_url($burst_mikado_options['social_sidebar_linkedIn_icon_link']);
				}
				?> <div class="mkd_social_icon_holder"> <?php
					echo do_shortcode('[no_icons '.$burst_mikado_icon_pack.' '.$burst_mikado_icon_param.'="'.$burst_mikado_icon.'" link="'.$burst_mikado_social_link.'" '.implode(' ', $burst_mikado_icons_param_array).']'); // XSS OK
					?> </div> <?php
			}
			if(isset($burst_mikado_options['social_sidebar_tumblr_icon']) && $burst_mikado_options['social_sidebar_tumblr_icon'] == 'yes') {
				$burst_mikado_icon = $burst_mikado_icon_collections->getTumblrIcon($burst_mikado_options['social_sidebar_icon_pack']);
				$burst_mikado_social_link = "#";
				if(isset($burst_mikado_options['social_sidebar_tumblr_icon_link']) && $burst_mikado_options['social_sidebar_tumblr_icon_link'] !== ''){
					$burst_mikado_social_link = esc_url($burst_mikado_options['social_sidebar_tumblr_icon_link']);
				}
				?> <div class="mkd_social_icon_holder"> <?php
					echo do_shortcode('[no_icons '.$burst_mikado_icon_pack.' '.$burst_mikado_icon_param.'="'.$burst_mikado_icon.'" link="'.$burst_mikado_social_link.'" '.implode(' ', $burst_mikado_icons_param_array).']'); // XSS OK
					?> </div> <?php
			}
			if(isset($burst_mikado_options['social_sidebar_pinterest_icon']) && $burst_mikado_options['social_sidebar_pinterest_icon'] == 'yes') {
				$burst_mikado_icon = $burst_mikado_icon_collections->getPinterestIcon($burst_mikado_options['social_sidebar_icon_pack']);
				$burst_mikado_social_link = "#";
				if(isset($burst_mikado_options['social_sidebar_pinterest_icon_link']) && $burst_mikado_options['social_sidebar_pinterest_icon_link'] !== ''){
					$burst_mikado_social_link = esc_url($burst_mikado_options['social_sidebar_pinterest_icon_link']);
				}
				?> <div class="mkd_social_icon_holder"> <?php
					echo do_shortcode('[no_icons '.$burst_mikado_icon_pack.' '.$burst_mikado_icon_param.'="'.$burst_mikado_icon.'" link="'.$burst_mikado_social_link.'" '.implode(' ', $burst_mikado_icons_param_array).']'); // XSS OK
					?> </div> <?php
			}
			if (isset($burst_mikado_options['social_sidebar_vk_icon']) && $burst_mikado_options['social_sidebar_vk_icon'] == 'yes') {
				$burst_mikado_social_link = "#";
				if (isset($burst_mikado_options['social_sidebar_vk_icon_link']) && $burst_mikado_options['social_sidebar_vk_icon_link'] !== '') {
					$burst_mikado_social_link = esc_url($burst_mikado_options['social_sidebar_vk_icon_link']);
				}
				?>
				<div class="mkd_social_icon_holder"> <?php
					echo do_shortcode('[no_icons icon_pack="font_awesome" fa_icon="fa-vk" link="' . $burst_mikado_social_link . '" ' . implode(' ', $burst_mikado_icons_param_array) . ']'); // XSS OK
					?> </div> <?php
			}
			?>
		</div>
	</div>
<?php } ?>