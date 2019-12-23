<?php

if(!function_exists('burst_mikado_header_classes')) {
	/**
	 * Function that acts like filter for header classes based on theme settings
	 * @param array array of classes to add to header tag
	 *
	 * @see apply_filters()
	 */
	function burst_mikado_header_classes($classes = array()) {
		$classes = array('page_header');
		$classes = apply_filters('burst_mikado_header_classes', $classes);

		if(is_array($classes) && count($classes)) {
			echo implode(' ', $classes);
		}
	}
}

if(!function_exists('burst_mikado_transparent_header_class')) {
	/**
	 * Function that adds transparency class to header based on page or theme options
	 *
*@param array array of classes from main filter
	 *
*@return array array of classes with added transparent class
	 *
	 * @see burst_mikado_is_default_wp_template()
	 */
	function burst_mikado_transparent_header_class($classes) {
		global $wp_query;
		global $burst_mikado_options;

		$id = $wp_query->get_queried_object_id();

		if(burst_mikado_is_woocommerce_page()) {
			$id = get_option('woocommerce_shop_page_id');
		}

		$is_header_transparent  	= false;
		$transparent_values_array 	= array('0.00', '0');
		$is_archive = burst_mikado_is_default_wp_template();
        $sticky_headers_array       = array('stick','stick menu_bottom','stick_with_left_right_menu','stick compound');
        $fixed_headers_array        = array('fixed','fixed fixed_minimal','fixed_hiding','fixed_top_header');

		//is header transparent set on current page?
		if(!$is_archive && get_post_meta($id, "mkd_header_color_transparency_per_page", true) !== "") {
			//take value set for current page
			$transparent_header = esc_attr(get_post_meta($id, "mkd_header_color_transparency_per_page", true));
		} elseif(isset($burst_mikado_options['header_background_transparency_initial'])) {
			//take value set in global options
			$transparent_header = $burst_mikado_options['header_background_transparency_initial'];
		}

		//is header completely transparent?
		$is_header_transparent 	= in_array($transparent_header, $transparent_values_array);
		if($is_header_transparent) {
			$classes[]= 'transparent';
		}
		
		//is header transparent on scrolled window?
		if(isset($burst_mikado_options['header_bottom_appearance']) && $burst_mikado_options['header_bottom_appearance'] !== 'regular' &&
            ((!in_array($burst_mikado_options['header_background_transparency_sticky'], $transparent_values_array) && in_array($burst_mikado_options['header_bottom_appearance'], $sticky_headers_array)) ||
                (!in_array($burst_mikado_options['header_background_transparency_scroll'], $transparent_values_array) && in_array($burst_mikado_options['header_bottom_appearance'], $fixed_headers_array)))) {
			$classes[] = 'scrolled_not_transparent';
		}

		return $classes;
	}

	add_filter('burst_mikado_header_classes', 'burst_mikado_transparent_header_class');
}

if(!function_exists('burst_mikado_with_border_header_class')) {
	/**
	 * Function that adds border class on header tag
	 *
*@param array array of classes from main filter
	 *
*@return array array of classes with added border class
	 *
     * @see burst_mikado_is_default_wp_template()
	 */
	function burst_mikado_with_border_header_class($classes) {
		global $burst_mikado_options;

		$header_with_border = isset($burst_mikado_options['header_bottom_border_color']) && $burst_mikado_options['header_bottom_border_color'] != '';
		if($header_with_border) {
			$classes[]= 'with_border';
		}

		return $classes;
	}

	add_filter('burst_mikado_header_classes', 'burst_mikado_with_border_header_class');
}

if(!function_exists('burst_mikado_wide_first_level_menu_bkg_header_class')) {
	/**
	 * Function that shows wide background in 1st level menu 
	 *
*@param array array of classes from main filter
	 *
*@return array array of classes with added wide background class
     *
     * @see burst_mikado_is_default_wp_template()
	 */
	function burst_mikado_wide_first_level_menu_bkg_header_class($classes) {
		global $burst_mikado_options;

		$mkd_wide_first_level_menu_bkg_header_class = ((isset($burst_mikado_options['header_bottom_appearance']) && $burst_mikado_options['header_bottom_appearance'] == "fixed_hiding") || (isset($burst_mikado_options['header_bottom_appearance']) && $burst_mikado_options['header_bottom_appearance'] == "stick menu_bottom") ) && isset($burst_mikado_options['enable_menu_wide_background']) && $burst_mikado_options['enable_menu_wide_background'] == 'yes';
		if($mkd_wide_first_level_menu_bkg_header_class) {
			$classes[]= 'first_level_menu_wide_bkg';
		}

		return $classes;
	}

	add_filter('burst_mikado_header_classes', 'burst_mikado_wide_first_level_menu_bkg_header_class');
}

if(!function_exists('burst_mikado_top_header_class')) {
	/**
	 * Function that adds top header class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added top header class
	 */
	function burst_mikado_top_header_class($classes) {
		global $burst_mikado_options;

		$display_header_top = "yes";
		if(isset($burst_mikado_options['header_top_area'])){
			$display_header_top = $burst_mikado_options['header_top_area'];
		}

		if($display_header_top == 'yes') {
			$classes[] = 'has_top';
		}

		return $classes;
	}

	add_filter('burst_mikado_header_classes', 'burst_mikado_top_header_class');
}

if(!function_exists('burst_mikado_has_woocommerce_dropdown_class')) {
	/**
	 * Function that adds woocommerce dropdown class to header tag
	 *
*@param array array of classes from main filter
	 *
*@return array array of classes with added woocommerce dropdown class
	 *
	 * @see burst_mikado_is_woocommerce_installed()
	 */
	function burst_mikado_has_woocommerce_dropdown_class($classes) {
		if(is_active_sidebar('woocommerce_dropdown') && burst_mikado_is_woocommerce_installed()) {
			$classes[]= 'has_woocommerce_dropdown ';
		}

		return $classes;
	}

	add_filter('burst_mikado_header_classes', 'burst_mikado_has_woocommerce_dropdown_class');
}

if(!function_exists('burst_mikado_scroll_top_header_class')) {
	/**
	 * Function that adds top header scroll class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added top header scroll class
	 */
	function burst_mikado_scroll_top_header_class($classes) {
		global $burst_mikado_options;

		$header_top_area_scroll = "no";
		if(isset($burst_mikado_options['header_top_area_scroll'])){
			$header_top_area_scroll = $burst_mikado_options['header_top_area_scroll'];
        }

		if($header_top_area_scroll == 'yes') {
			$classes[] = 'scroll_top';
		}

		if($burst_mikado_options['header_top_area_scroll'] == 'no' && $burst_mikado_options['header_top_area'] == 'yes') {
			$classes[]= 'scroll_header_top_area';
		}

		return $classes;
	}

	add_filter('burst_mikado_header_classes' ,'burst_mikado_scroll_top_header_class');
}

if(!function_exists('burst_mikado_center_logo_class')) {
	/**
	 * Function that adds center logo class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added center logo class
	 */
	function burst_mikado_center_logo_class($classes) {
		global $burst_mikado_options;

		if((isset($burst_mikado_options['center_logo_image']) && $burst_mikado_options['center_logo_image'] == 'yes' && ($burst_mikado_options['header_bottom_appearance'] == "regular" || $burst_mikado_options['header_bottom_appearance'] == "stick" || $burst_mikado_options['header_bottom_appearance'] == "fixed")) || (isset($burst_mikado_options['header_bottom_appearance']) && $burst_mikado_options['header_bottom_appearance'] == "fixed_hiding")) {
			$classes[] = 'centered_logo';
		}

		return $classes;
	}

	add_filter('burst_mikado_header_classes', 'burst_mikado_center_logo_class');
}

if(!function_exists('burst_mikado_header_fixed_right_class')) {
	/**
	 * Function that adds fixed header class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added fixed header class
	 */
	function burst_mikado_header_fixed_right_class($classes) {
		if(is_active_sidebar('header_fixed_right')) {
			$classes[]= 'has_header_fixed_right';
		}

		return $classes;
	}

	add_filter('burst_mikado_header_classes', 'burst_mikado_header_fixed_right_class');
}

if(!function_exists('burst_mikado_header_style_class')) {
	/**
	 * Function that adds header style class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added header style class
	 */
	function burst_mikado_header_style_class($classes) {
		global $wp_query;
		global $burst_mikado_options;

		$id = $wp_query->get_queried_object_id();

		if(burst_mikado_is_woocommerce_page()) {
			$id = get_option('woocommerce_shop_page_id');
		}

		if(get_post_meta($id, "mkd_header-style", true) != ""){
			$classes[]= get_post_meta($id, "mkd_header-style", true);
		} else if(isset($burst_mikado_options['header_style'])){
			$classes[]= $burst_mikado_options['header_style'];
		}

		return $classes;
	}

	add_filter('burst_mikado_header_classes', 'burst_mikado_header_style_class');
}

if(!function_exists('burst_mikado_header_style_on_scroll_class')) {
    /**
     * Function that adds header style class to header tag
     * @param array array of classes from main filter
     * @return array array of classes with added header style class
     */
    function burst_mikado_header_style_on_scroll_class($classes) {
        global $wp_query;
        global $burst_mikado_options;

        $id = $wp_query->get_queried_object_id();

        if(burst_mikado_is_woocommerce_page()) {
            $id = get_option('woocommerce_shop_page_id');
        }

        if(get_post_meta($id, "mkd_header-style-on-scroll", true) != ""){
            if(get_post_meta($id, "mkd_header-style-on-scroll", true) == "yes") {
                $classes[] = 'header_style_on_scroll';
            }
        } else if(isset($burst_mikado_options['enable_header_style_on_scroll']) && $burst_mikado_options['enable_header_style_on_scroll'] == 'yes'){
            $classes[]= 'header_style_on_scroll';
        }

        return $classes;
    }

    add_filter('burst_mikado_header_classes', 'burst_mikado_header_style_on_scroll_class');
}

if(!function_exists('burst_mikado_header_class_first_level_bg_color')) {
	/**
	 * Function that adds first level menu background color class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added first level menu background color class
	 */
	function burst_mikado_header_class_first_level_bg_color($classes) {
		global $burst_mikado_options;

		//check if first level hover background color is set
		$has_first_lvl_bg_color = isset($burst_mikado_options['menu_hover_background_color']) && $burst_mikado_options['menu_hover_background_color'] !== '';

		if($has_first_lvl_bg_color) {
			$classes[]= 'with_hover_bg_color';
		}

		return $classes;
	}

	add_filter('burst_mikado_header_classes', 'burst_mikado_header_class_first_level_bg_color');
}

if(!function_exists('burst_mikado_header_bottom_appearance_class')) {
	/**
	 * Function that adds bottom header appearance class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added bottom header appearance class
	 */
	function burst_mikado_header_bottom_appearance_class($classes) {
		global $burst_mikado_options;

        if(isset($burst_mikado_options['header_bottom_appearance'])){
			$classes[]= $burst_mikado_options['header_bottom_appearance'];
		} else {
			$classes[]= 'fixed';
		}

		return $classes;
	}

	add_filter('burst_mikado_header_classes', 'burst_mikado_header_bottom_appearance_class');
}

if(!function_exists('burst_mikado_header_menu_items_position_class')) {
    /**
     * Function that ajax header animation class to header tag
     * @param array array of classes from main filter
     * @return array of classes with added ajax header animation class
     */
    function burst_mikado_header_menu_items_position_class($classes) {
        global $burst_mikado_options;

        if(isset($burst_mikado_options['header_bottom_appearance']) && $burst_mikado_options['header_bottom_appearance'] == 'stick_with_left_right_menu' && isset($burst_mikado_options['menu_items_position'])){
            $classes[]= $burst_mikado_options['menu_items_position'];
        }

        return $classes;
    }

    add_filter('burst_mikado_header_classes', 'burst_mikado_header_menu_items_position_class');
}

if(!function_exists('burst_mikado_header_paspartu_alignment_class')) {
    /**
     * Function that adds paspartu alignment class to header tag
     * @param array array of classes from main filter
     * @return array of classes with added paspartu alignment class
     */
    function burst_mikado_header_paspartu_alignment_class($classes) {
        global $burst_mikado_options;

        if(isset($burst_mikado_options['paspartu_header_alignment']) && $burst_mikado_options['paspartu_header_alignment'] == 'yes' && isset($burst_mikado_options['paspartu']) && $burst_mikado_options['paspartu'] == 'yes'){
            $classes[]= 'paspartu_header_alignment';
        }
		
		if(isset($burst_mikado_options['paspartu_header_inside']) && $burst_mikado_options['paspartu_header_inside'] == 'yes' && isset($burst_mikado_options['paspartu']) && $burst_mikado_options['paspartu'] == 'yes'){
            $classes[]= 'paspartu_header_inside';
        }

        return $classes;
    }

    add_filter('burst_mikado_header_classes', 'burst_mikado_header_paspartu_alignment_class');
}

if(!function_exists('burst_mikado_header_ajax_header_animation_class')) {
    /**
     * Function that ajax header animation class to header tag
     * @param array array of classes from main filter
     * @return array of classes with added ajax header animation class
     */
    function burst_mikado_header_ajax_header_animation_class($classes) {

        if(burst_mikado_is_ajax_header_animation_enabled()){
            $classes[]= 'ajax_header_animation';
        }

        return $classes;
    }

    add_filter('burst_mikado_header_classes', 'burst_mikado_header_ajax_header_animation_class');
}

if(!function_exists('burst_mikado_header_one_scroll_resize_class')) {
    /**
     * Function that add header resize class on one scroll
     * @param array array of classes from main filter
     * @return array of classes with added header resize class
     */
    function burst_mikado_header_one_scroll_resize_class($classes) {
        global $burst_mikado_options;

        if($burst_mikado_options['header_one_scroll_resize'] == 'yes' && in_array($burst_mikado_options['header_bottom_appearance'], array('fixed','fixed fixed_minimal'))){
            $classes[]= 'header_one_scroll_resize';
        }

        return $classes;
    }

    add_filter('burst_mikado_header_classes', 'burst_mikado_header_one_scroll_resize_class');
}