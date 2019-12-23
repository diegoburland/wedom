<?php

if (!function_exists('burst_mikado_ajax_classes')) {
    /**
     * Function that adds classes on body for ajax transitions
     */
    function burst_mikado_ajax_classes($classes) {
        global $burst_mikado_options;


        //is ajax animation turned off in options?
        if(($burst_mikado_options['page_transitions'] === "0")) {
            $classes[] = '';
        }

        //is up down animation type set?
        elseif($burst_mikado_options['page_transitions'] === "1") {
            $classes[] = 'ajax_updown';
            $classes[] = 'page_not_loaded';
        }

        //is fade animation type set?
        elseif($burst_mikado_options['page_transitions'] === "2") {
            $classes[] = 'ajax_fade';
            $classes[] = 'page_not_loaded';
        }

        //is up down fade animation type set?
        elseif($burst_mikado_options['page_transitions'] === "3") {
            $classes[] = 'ajax_updown_fade';
            $classes[] = 'page_not_loaded';
        }

        //is left / right animation type set?
        elseif($burst_mikado_options['page_transitions'] === "4") {
            $classes[] = 'ajax_leftright';
            $classes[] = 'page_not_loaded';
        }

        //animation is turned off in options
        else {
            $classes[] ="";
        }

        return $classes;
    }

    add_filter('body_class', 'burst_mikado_ajax_classes');
}

if (!function_exists('burst_mikado_boxed_class')) {
    /**
     * Function that adds classes on body for boxed layout
     */
    function burst_mikado_boxed_class($classes) {
        global $burst_mikado_options;

        //is boxed layout turned on?
        if(isset($burst_mikado_options['boxed']) && $burst_mikado_options['boxed'] == "yes" && isset($burst_mikado_options['transparent_content']) && $burst_mikado_options['transparent_content'] == 'no') {
            $classes[] = 'boxed';
        } else {
            $classes[] ="";
        }

        return $classes;
    }

    add_filter('body_class', 'burst_mikado_boxed_class');
}

if (!function_exists('burst_mikado_padding_class')) {
    /**
     * Function that adds classes on body for boxed layout with padding
     */
    function burst_mikado_padding_class($classes) {
        global $burst_mikado_options;

        //is boxed layout turned on?
        if(isset($burst_mikado_options['boxed']) && $burst_mikado_options['boxed'] == "yes" && isset($burst_mikado_options['boxed_padding_general']) && !empty($burst_mikado_options['boxed_padding_general'])) {
            $classes[] = 'has_general_padding';
        } else {
            $classes[] ="";
        }

        return $classes;
    }

    add_filter('body_class', 'burst_mikado_padding_class');
}

if (!function_exists('burst_mikado_theme_version_class')) {
    /**
     * Function that adds classes on body for version of theme
     */
    function burst_mikado_theme_version_class($classes) {
        $current_theme = wp_get_theme();

        //is child theme activated?
        if($current_theme->parent()) {
            //add child theme version
            $classes[] = strtolower($current_theme->get('Name')).'-child-ver-'.$current_theme->get('Version');

            //get parent theme
            $current_theme = $current_theme->parent();
        }

        if($current_theme->exists() && $current_theme->get('Version') != "") {
            $classes[] = strtolower($current_theme->get('Name')).'-ver-'.$current_theme->get('Version');
        }

        return $classes;
    }

    add_filter('body_class', 'burst_mikado_theme_version_class');
}

if (!function_exists('burst_mikado_vertical_menu_class')) {
    /**
     * Function that adds classes on body element for left menu area
     */
    function burst_mikado_vertical_menu_class($classes) {
        global $burst_mikado_options;
        global $wp_query;

        //is left menu area turned on?
        if(burst_mikado_is_side_header()) {
            $classes[] = 'vertical_menu_enabled';

            //left menu type class?
            if(isset($burst_mikado_options['vertical_area_type']) && $burst_mikado_options['vertical_area_type'] != '') {
                switch ($burst_mikado_options['vertical_area_type']) {
                    case 'hidden':
                        $classes[] = ' vertical_menu_hidden';

                        if(isset($burst_mikado_options['vertical_logo_bottom']) && $burst_mikado_options['vertical_logo_bottom'] !== '') {
                            $classes[] = 'vertical_menu_hidden_with_logo';
                        }
                        break;

                    case 'hidden_with_icons':
                        $classes[] = ' vertical_menu_hidden vertical_menu_hidden_with_icons';

                        if(isset($burst_mikado_options['vertical_logo_bottom']) && $burst_mikado_options['vertical_logo_bottom'] !== '') {
                            $classes[] = 'vertical_menu_hidden_with_logo';
                        }
                        break;
                }
            }

            if(isset($burst_mikado_options['vertical_area_position'])){
                if($burst_mikado_options['vertical_area_position'] == 'right'){
                    $classes[] = ' vertical_menu_right';
                }elseif($burst_mikado_options['vertical_area_position'] == 'left'){
                    $classes[] = ' vertical_menu_left';
                }
            }

            if(isset($burst_mikado_options['vertical_area_width']) && $burst_mikado_options['vertical_area_width']=='width_350'){
                $classes[] = ' vertical_menu_width_350';
            }
            elseif(isset($burst_mikado_options['vertical_area_width']) && $burst_mikado_options['vertical_area_width']=='width_400'){
                $classes[] = ' vertical_menu_width_400';
            }
            else{
                $classes[] = ' vertical_menu_width_290';
            }
        }

        //get current page id
        $id = $wp_query->get_queried_object_id();

        if(burst_mikado_is_woocommerce_page()) {
            $id = get_option('woocommerce_shop_page_id');
        }

        if(isset($burst_mikado_options['vertical_area_transparency']) && $burst_mikado_options['vertical_area_transparency'] =='yes' && get_post_meta($id, "mkd_page_vertical_area_transparency", true) != "no" && isset($burst_mikado_options['vertical_area_dropdown_showing']) && $burst_mikado_options['vertical_area_dropdown_showing'] != "side"){
            $classes[] = ' vertical_menu_transparency vertical_menu_transparency_on';
        }else if(get_post_meta($id, "mkd_page_vertical_area_transparency", true) == "yes" && isset($burst_mikado_options['vertical_area_dropdown_showing']) && $burst_mikado_options['vertical_area_dropdown_showing'] != "side"){
            $classes[] = ' vertical_menu_transparency vertical_menu_transparency_on';
        }

        if(isset($burst_mikado_options['vertical_area_transparency_over_slider']) && $burst_mikado_options['vertical_area_transparency_over_slider'] =='yes' && get_post_meta($id, "mkd_page_vertical_area_transparency_over_slider", true) != "no" && isset($burst_mikado_options['vertical_area_dropdown_showing']) && $burst_mikado_options['vertical_area_dropdown_showing'] != "side"){
            $classes[] = 'vertical_menu_background_opacity_over_slider  vertical_menu_background_opacity_over_slider_on';
        }else if(get_post_meta($id, "mkd_page_vertical_area_transparency_over_slider", true) == "yes" && isset($burst_mikado_options['vertical_area_dropdown_showing']) && $burst_mikado_options['vertical_area_dropdown_showing'] != "side"){
            $classes[] = ' vertical_menu_background_opacity_over_slider  vertical_menu_background_opacity_over_slider_on';
        }

        if(isset($burst_mikado_options['vertical_area_background_transparency']) && $burst_mikado_options['vertical_area_background_transparency'] !=='' && $burst_mikado_options['vertical_area_background_transparency'] !=='1' && get_post_meta($id, "mkd_page_vertical_area_background_opacity", true) == "" && isset($burst_mikado_options['vertical_area_dropdown_showing']) && $burst_mikado_options['vertical_area_dropdown_showing'] != "side"){
            $classes[] = 'vertical_menu_background_opacity';
        }else if(get_post_meta($id, "mkd_page_vertical_area_background_opacity", true) !== "" && get_post_meta($id, "mkd_page_vertical_area_background_opacity", true) !== "1" && isset($burst_mikado_options['vertical_area_dropdown_showing']) && $burst_mikado_options['vertical_area_dropdown_showing'] != "side"){
            $classes[] = ' vertical_menu_background_opacity';
        }

        if(isset($burst_mikado_options['vertical_area_dropdown_showing']) && $burst_mikado_options['vertical_area_dropdown_showing'] != "to_content"){
            $classes[] = ' vertical_menu_with_scroll';
        }


        return $classes;
    }

    add_filter('body_class', 'burst_mikado_vertical_menu_class');
}

if (!function_exists('burst_mikado_smooth_scroll_class')) {
    /**
     * Function that adds classes on body for smooth scroll
     */
    function burst_mikado_smooth_scroll_class($classes) {
        global $burst_mikado_options;

        //is smooth_scroll turned on?
        if(isset($burst_mikado_options['smooth_scroll']) && $burst_mikado_options['smooth_scroll'] == "yes") {
            $classes[] = 'smooth_scroll';
        } else {
            $classes[] ="";
        }

        return $classes;
    }

    add_filter('body_class', 'burst_mikado_smooth_scroll_class');
}

if (!function_exists('burst_mikado_elements_animation_on_touch_class')) {
    /**
     * Function that adds classes on body when touch is disabled on touch devices
     * @param $classes array classes array
     * @return array array with added classes
     */
    function burst_mikado_elements_animation_on_touch_class($classes) {
        global $burst_mikado_options;

        //check if current client is on mobile
        $isMobile = (bool)preg_match('#\b(ip(hone|od|ad)|android|opera m(ob|in)i|windows (phone|ce)|blackberry|tablet'.
            '|s(ymbian|eries60|amsung)|p(laybook|alm|rofile/midp|laystation portable)|nokia|fennec|htc[\-_]'.
            '|mobile|up\.browser|[1-4][0-9]{2}x[1-4][0-9]{2})\b#i', getenv('HTTP_USER_AGENT') );

        //are animations turned off on touch and client is on mobile?
        if(isset($burst_mikado_options['elements_animation_on_touch']) && $burst_mikado_options['elements_animation_on_touch'] == "no" && $isMobile == true) {
            $classes[] = 'no_animation_on_touch';
        } else {
            $classes[] ="";
        }

        return $classes;
    }

    add_filter('body_class', 'burst_mikado_elements_animation_on_touch_class');
}

if(!function_exists('burst_mikado_side_menu_body_class')) {
    /**
     * Function that adds body classes for different side menu styles
     * @param $classes array original array of body classes
     * @return array modified array of classes
     */
    function burst_mikado_side_menu_body_class($classes) {
        global $burst_mikado_options;

        if(isset($burst_mikado_options['header_type']) && $burst_mikado_options['header_type'] == 'top' && isset($burst_mikado_options['enable_side_area']) && $burst_mikado_options['enable_side_area'] == 'yes') {
            if(isset($burst_mikado_options['side_area_type']) && $burst_mikado_options['side_area_type'] == 'side_menu_slide_from_right') {
                $classes[] = 'side_menu_slide_from_right';
            }

            else if(isset($burst_mikado_options['side_area_type']) && $burst_mikado_options['side_area_type'] == 'side_menu_slide_with_content') {
                $classes[] = 'side_menu_slide_with_content';
                $classes[] = $burst_mikado_options['side_area_slide_with_content_width'];
            }

            if(isset($burst_mikado_options['side_area_type']) && $burst_mikado_options['side_area_type'] == 'side_area_uncovered_from_content') {
                $classes[] = 'side_area_uncovered_from_content';
            }
        }

        return $classes;
    }

    add_filter('body_class', 'burst_mikado_side_menu_body_class');
}


if(!function_exists('burst_mikado_full_screen_menu_body_class')) {
    /**
     * Function that adds body classes for different full screen menu types
     * @param $classes array original array of body classes
     * @return array modified array of classes
     */
    function burst_mikado_full_screen_menu_body_class($classes) {
        global $burst_mikado_options;

        if(isset($burst_mikado_options['enable_popup_menu']) && $burst_mikado_options['enable_popup_menu'] == 'yes') {
            if(isset($burst_mikado_options['popup_menu_animation_style'])) {
                $classes[] = $burst_mikado_options['popup_menu_animation_style'];
            }
        }

        return $classes;
    }

    add_filter('body_class', 'burst_mikado_full_screen_menu_body_class');
}

if(!function_exists('burst_mikado_paspartu_body_class')) {
    /**
     * Function that adds paspartu class to body.
     * @param $classes array of body classes
     * @return array with paspartu body class added
     */
    function burst_mikado_paspartu_body_class($classes) {
        global $burst_mikado_options;

        if(isset($burst_mikado_options['paspartu']) && $burst_mikado_options['paspartu'] == 'yes') {
            $classes[] = 'paspartu_enabled';

            if((isset($burst_mikado_options['paspartu_on_top']) && $burst_mikado_options['paspartu_on_top'] == 'yes' && isset($burst_mikado_options['paspartu_on_top_fixed']) && $burst_mikado_options['paspartu_on_top_fixed'] == 'yes') ||
                (burst_mikado_is_side_header() && isset($burst_mikado_options['vertical_menu_inside_paspartu']) && $burst_mikado_options['vertical_menu_inside_paspartu'] == 'yes')) {
                $classes[] = 'paspartu_on_top_fixed';
            }

            if(($burst_mikado_options['paspartu_on_bottom'] == 'yes' && $burst_mikado_options['paspartu_on_bottom_fixed'] == 'yes') ||
                (burst_mikado_is_side_header() && isset($burst_mikado_options['vertical_menu_inside_paspartu']) && $burst_mikado_options['vertical_menu_inside_paspartu'] == 'yes')) {
                $classes[] = 'paspartu_on_bottom_fixed';
            }

            if(isset($burst_mikado_options['paspartu_header_alignment']) && $burst_mikado_options['paspartu_header_alignment'] == 'yes'){
                $classes[] = 'paspartu_header_aligned';
            }

            if(isset($burst_mikado_options['paspartu_header_inside']) && $burst_mikado_options['paspartu_header_inside'] == 'yes'){
                $classes[] = 'paspartu_header_set_inside';
            }

            if(burst_mikado_is_side_header() && isset($burst_mikado_options['vertical_menu_inside_paspartu']) && $burst_mikado_options['vertical_menu_inside_paspartu'] == 'no') {
                $classes[] = 'vertical_menu_outside_paspartu';
            }

            if(burst_mikado_is_side_header() && isset($burst_mikado_options['vertical_menu_inside_paspartu']) && $burst_mikado_options['vertical_menu_inside_paspartu'] == 'yes') {
                $classes[] = 'vertical_menu_inside_paspartu';
            }

            if($burst_mikado_options['paspartu_border_on_edges'] == 'yes' &&
                $burst_mikado_options['paspartu_on_top'] == 'yes' && $burst_mikado_options['paspartu_on_top_fixed'] == 'yes' &&
                $burst_mikado_options['paspartu_on_bottom'] == 'yes' && $burst_mikado_options['paspartu_on_bottom_fixed'] == 'yes' ) {
                $classes[] = 'paspartu_border_on_edges';
            }
        }

        return $classes;
    }

    add_filter('body_class', 'burst_mikado_paspartu_body_class');
}

if(!function_exists('burst_mikado_transparent_content_body_class')) {
    /**
     * Function that adds transparent content class to body.
     * @param $classes array of body classes
     * @return array with transparent content body class added
     */
    function burst_mikado_transparent_content_body_class($classes) {
        global $burst_mikado_options;

        if(isset($burst_mikado_options['transparent_content']) && $burst_mikado_options['transparent_content'] == 'yes') {
            $classes[] = 'transparent_content';
        }

        return $classes;
    }

    add_filter('body_class', 'burst_mikado_transparent_content_body_class');
}

if(!function_exists('burst_mikado_overlapping_content_body_class')) {
    /**
     * Function that adds transparent content class to body.
     * @param $classes array of body classes
     * @return array with transparent content body class added
     */
    function burst_mikado_overlapping_content_body_class($classes) {
        global $burst_mikado_options;

        if(isset($burst_mikado_options['overlapping_content']) && $burst_mikado_options['overlapping_content'] == 'yes') {
            $classes[] = 'overlapping_content';

            if(isset($burst_mikado_options['animate_overlapping_content']) && $burst_mikado_options['animate_overlapping_content'] == 'yes') {
                $classes[] = 'animate_overlapping_content';
            }

            if(isset($burst_mikado_options['frame_around_overlapping_content']) && $burst_mikado_options['frame_around_overlapping_content'] == 'yes') {
                $classes[] = 'frame_around_overlapping_content';
            }
        }

        return $classes;
    }

    add_filter('body_class', 'burst_mikado_overlapping_content_body_class');
}

if(!function_exists('burst_mikado_content_initial_width_body_class')) {
    /**
     * Function that adds transparent content class to body.
     * @param $classes array of body classes
     * @return array with transparent content body class added
     */
    function burst_mikado_content_initial_width_body_class($classes) {
        global $burst_mikado_options;

        if(isset($burst_mikado_options['content_predefined_width']) && $burst_mikado_options['content_predefined_width'] !== '') {
            $classes[] = $burst_mikado_options['content_predefined_width'];
        }

        return $classes;
    }

    add_filter('body_class', 'burst_mikado_content_initial_width_body_class');
}

if(!function_exists('burst_mikado_set_woocommerce_body_class')) {
    /**
     * Function that adds woocommerce class to body if woocommerce is installed.
     * @param $classes array of body classes
     * @return array with woocommerce body class added
     */
    function burst_mikado_set_woocommerce_body_class($classes) {

        if(burst_mikado_is_woocommerce_installed()){
            $classes[] = "woocommerce_installed";
        }

        return $classes;

    }

    add_filter('body_class', 'burst_mikado_set_woocommerce_body_class');
}

if(!function_exists('burst_mikado_set_blog_body_class')) {
    /**
     * Function that adds blog class to body if blog template, shortcodes or widgets are used on site.
     * @param $classes array of body classes
     * @return array with blog body class added
     */
    function burst_mikado_set_blog_body_class($classes) {

        if(burst_mikado_load_blog_assets()){
            $classes[] = "blog_installed";
        }

        return $classes;

    }

    add_filter('body_class', 'burst_mikado_set_blog_body_class');
}

if(!function_exists('burst_mikado_hide_initial_sticky_body_class')) {
    /**
     * Function that adds hidden initial sticky class to body.
     * @param $classes array of body classes
     * @return hidden initial sticky body class
     */
    function burst_mikado_hide_initial_sticky_body_class($classes) {
        global $burst_mikado_options;

        if(isset($burst_mikado_options['header_bottom_appearance']) && ($burst_mikado_options['header_bottom_appearance'] == "stick" || $burst_mikado_options['header_bottom_appearance'] == "stick menu_bottom" || $burst_mikado_options['header_bottom_appearance'] == "stick_with_left_right_menu" || $burst_mikado_options['header_bottom_appearance'] == "stick compound")){
            if(get_post_meta(burst_mikado_get_page_id(), "mkd_page_hide_initial_sticky", true) !== ''){
                if(get_post_meta(burst_mikado_get_page_id(), "mkd_page_hide_initial_sticky", true) == 'yes'){
                    $classes[] = 'hide_inital_sticky';
                }
            }else if(isset($burst_mikado_options['hide_initial_sticky']) && $burst_mikado_options['hide_initial_sticky'] == 'yes') {
                $classes[] = 'hide_inital_sticky';
            }
        }

        return $classes;
    }

    add_filter('body_class', 'burst_mikado_hide_initial_sticky_body_class');
}

if(!function_exists('burst_mikado_full_screen_sections_on_small_screens_class')) {
    /**
     * Function that adds full screen section class for small screens to body.
     * @param $classes array of body classes
     * @return full screen section class for small screens body class
     */
    function burst_mikado_full_screen_sections_on_small_screens_class($classes) {
        global $burst_mikado_options;

        if(get_post_meta(burst_mikado_get_page_id(), "mkd_full_screen_sections_on_small_screens", true) !== ''){
            if(get_post_meta(burst_mikado_get_page_id(), "mkd_full_screen_sections_on_small_screens", true) == 'yes'){
                $classes[] = 'enable_full_screen_sections_on_small_screens';
            }
        }else if(isset($burst_mikado_options['full_screen_sections_on_small_screens']) && $burst_mikado_options['full_screen_sections_on_small_screens'] == 'yes') {
            $classes[] = 'enable_full_screen_sections_on_small_screens';
        }

        return $classes;
    }

    add_filter('body_class', 'burst_mikado_full_screen_sections_on_small_screens_class');
}