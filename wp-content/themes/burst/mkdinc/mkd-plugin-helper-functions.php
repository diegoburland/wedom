<?php

/*=================================================================================
 * #WooCommerce helper functions
 *=================================================================================*/

if(!function_exists('burst_mikado_is_woocommerce_installed')) {
	/**
	 * Function that checks if woocommerce is installed
	 * @return bool
	 */
	function burst_mikado_is_woocommerce_installed() {
		return function_exists('is_woocommerce');
	}
}

if(!function_exists('burst_mikado_is_woocommerce_page')) {
	/**
	 * Function that checks if current page is woocommerce shop, product or product taxonomy
	 * @return bool
	 *
	 * @see is_woocommerce()
	 */
	function burst_mikado_is_woocommerce_page() {
		return function_exists('is_woocommerce') && is_woocommerce();
	}
}

if(!function_exists('burst_mikado_is_woocommerce_shop')) {
	/**
	 * Function that checks if current page is shop or product page
	 * @return bool
	 *
	 * @see is_shop()
	 */
	function burst_mikado_is_woocommerce_shop() {
		return function_exists('is_shop') && is_shop();
	}
}

if(!function_exists('burst_mikado_get_woo_shop_page_id')) {
	/**
	 * Function that returns shop page id that is set in WooCommerce settings page
	 * @return int id of shop page
	 */
	function burst_mikado_get_woo_shop_page_id() {
		if(burst_mikado_is_woocommerce_installed()) {
			return get_option('woocommerce_shop_page_id');
		}
	}
}

if(!function_exists('burst_mikado_is_product_category')) {
	function burst_mikado_is_product_category() {
		return function_exists('is_product_category') && is_product_category();
	}
}

if(!function_exists('burst_mikado_load_woo_assets')) {
	/**
	 * Function that checks whether WooCommerce assets needs to be loaded.
	 *
	 * @see burst_mikado_is_ajax_enabled()
	 * @see burst_mikado_is_woocommerce_page()
	 * @see burst_mikado_has_woocommerce_shortcode()
	 * @see burst_mikado_has_woocommerce_widgets()
	 * @return bool
	 */

	function burst_mikado_load_woo_assets() {
		return burst_mikado_is_woocommerce_installed() && (burst_mikado_is_ajax_enabled() || burst_mikado_is_woocommerce_page() ||
			burst_mikado_has_woocommerce_shortcode() || burst_mikado_has_woocommerce_widgets());
	}
}

if(!function_exists('burst_mikado_has_woocommerce_shortcode')) {
	/**
	 * Function that checks if current page has at least one of WooCommerce shortcodes added
	 * @return bool
	 */
	function burst_mikado_has_woocommerce_shortcode() {
		$woocommerce_shortcodes = array(
			'woocommerce_order_tracking',
			'add_to_cart',
			'product',
			'products',
			'product_categories',
			'product_category',
			'recent_products',
			'featured_products',
			'woocommerce_messages',
			'woocommerce_cart',
			'woocommerce_checkout',
			'woocommerce_my_account',
			'woocommerce_edit_address',
			'woocommerce_change_password',
			'woocommerce_view_order',
			'woocommerce_pay',
			'woocommerce_thankyou'
		);

		foreach ($woocommerce_shortcodes as $woocommerce_shortcode) {
			$has_shortcode = burst_mikado_has_shortcode($woocommerce_shortcode);

			if($has_shortcode) {
				return true;
			}
		}

		return false;
	}
}

if(!function_exists('burst_mikado_has_woocommerce_widgets')) {
	/**
	 * Function that checks if current page has at least one of WooCommerce shortcodes added
	 * @return bool
	 */
	function burst_mikado_has_woocommerce_widgets() {
		$widgets_array = array(
			'mkd_woocommerce_dropdown_cart',
			'woocommerce_widget_cart',
			'woocommerce_layered_nav',
			'woocommerce_layered_nav_filters',
			'woocommerce_price_filter',
			'woocommerce_product_categories',
			'woocommerce_product_search',
			'woocommerce_product_tag_cloud',
			'woocommerce_products',
			'woocommerce_recent_reviews',
			'woocommerce_recently_viewed_products',
			'woocommerce_top_rated_products'
		);

		foreach ($widgets_array as $widget) {
			$active_widget = is_active_widget(false, false, $widget);

			if($active_widget) {
				return true;
			}
		}

		return false;
	}
}

if(!function_exists('burst_mikado_get_woocommerce_pages')) {
	/**
	 * Function that returns all url woocommerce pages
	 * @return array array of WooCommerce pages
	 *
	 * @version 0.1
	 */
	function burst_mikado_get_woocommerce_pages() {
		$woo_pages_array = array();

		if(burst_mikado_is_woocommerce_installed()) {
			if(get_option('woocommerce_shop_page_id') != ''){ $woo_pages_array[] = get_permalink(get_option('woocommerce_shop_page_id')); }
			if(get_option('woocommerce_cart_page_id') != ''){ $woo_pages_array[] = get_permalink(get_option('woocommerce_cart_page_id')); }
			if(get_option('woocommerce_checkout_page_id') != ''){ $woo_pages_array[] = get_permalink(get_option('woocommerce_checkout_page_id')); }
			if(get_option('woocommerce_pay_page_id') != ''){ $woo_pages_array[] = get_permalink(get_option(' woocommerce_pay_page_id ')); }
			if(get_option('woocommerce_thanks_page_id') != ''){ $woo_pages_array[] = get_permalink(get_option(' woocommerce_thanks_page_id ')); }
			if(get_option('woocommerce_myaccount_page_id') != ''){ $woo_pages_array[] = get_permalink(get_option(' woocommerce_myaccount_page_id ')); }
			if(get_option('woocommerce_edit_address_page_id') != ''){ $woo_pages_array[] = get_permalink(get_option(' woocommerce_edit_address_page_id ')); }
			if(get_option('woocommerce_view_order_page_id') != ''){ $woo_pages_array[] = get_permalink(get_option(' woocommerce_view_order_page_id ')); }
			if(get_option('woocommerce_terms_page_id') != ''){ $woo_pages_array[] = get_permalink(get_option(' woocommerce_terms_page_id ')); }

			$woo_products = get_posts(array('post_type' => 'product','post_status' => 'publish', 'posts_per_page' => '-1') );

			foreach($woo_products as $product) {
				$woo_pages_array[] = get_permalink($product->ID);
			}
		}

		return $woo_pages_array;
	}
}

if(!function_exists('burst_mikado_woocommerce_columns_class')) {
	/**
	 * Function that adds number of columns class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added bottom header appearance class
	 */
	function burst_mikado_woocommerce_columns_class($classes) {
		global $burst_mikado_options;

		if (in_array("woocommerce", $classes)) {
			$products_list_number = 'columns-3';
			if(isset($burst_mikado_options['woo_products_list_number'])){
				$products_list_number = $burst_mikado_options['woo_products_list_number'];
			}
			$classes[]= $products_list_number;
			
			$products_list_type="type1";
			$classes[]= $products_list_type;
		}

		return $classes;
	}

	add_filter('body_class', 'burst_mikado_woocommerce_columns_class');
}


/*=================================================================================
 * #Visual Composer helper functions
 *=================================================================================*/

if(!function_exists('burst_mikado_visual_composer_installed')) {
	/**
	 * Function that checks if visual composer installed
	 * @return bool
	 */
	function burst_mikado_visual_composer_installed() {
		//is Visual Composer installed?
		if(class_exists('WPBakeryVisualComposerAbstract')) {
			return true;
		}

		return false;
	}
}

/*=================================================================================
 * #Yoast helper functions
 *=================================================================================*/
if(!function_exists('burst_mikado_seo_plugin_installed')) {
	/**
	 * Function that checks if popular seo plugins are installed
	 * @return bool
	 */
	function burst_mikado_seo_plugin_installed() {
        //is 'YOAST' or 'All in One SEO' installed?
        if(defined('WPSEO_VERSION') || class_exists('All_in_One_SEO_Pack')) {
			return true;
		}

		return false;
	}
}

//if(!function_exists('burst_mikado_disable_yoast_page_analysis')){
//    /**
//     * Function that disable yoast page analysis
//     * @return bool
//     */
//    function burst_mikado_disable_yoast_page_analysis($bool){
//
//        if(burst_mikado_seo_plugin_installed()){
//            $bool = false;
//        }
//
//        return $bool;
//    }
//
//    add_filter( 'wpseo_use_page_analysis', 'burst_mikado_disable_yoast_page_analysis' );
//}

//if(!function_exists('burst_mikado_yoast_page_analysis_notice')) {
//    /**
//     * Prints admin notice for Yoast page analysis if plugin is installed
//     *
//     * @see burst_mikado_admin_notice
//     */
//    function burst_mikado_yoast_page_analysis_notice() {
//        if(burst_mikado_seo_plugin_installed()) {
//            burst_mikado_admin_notice(
//                'yoast_page_analysis_notice',
//                esc_html__('Yoast SEO page analysis functionality has been disabled due to coding issue in plugin. Plugin author has been notifed and we hope that this issue will be resolved soon.', 'burst'),
//                'updated',
//                true
//            );
//        }
//
//    }
//
//    add_action('admin_notices', 'burst_mikado_yoast_page_analysis_notice');
//}


/*=================================================================================
 * #Contact Form 7 helper functions
 *=================================================================================*/
if(!function_exists('burst_mikado_contact_form_7_installed')) {
	/**
	 * Function that checks if contact form 7 installed
	 * @return bool
	 */
	function burst_mikado_contact_form_7_installed() {
		//is Contact Form 7 installed?
		if(defined('WPCF7_VERSION')) {
			return true;
		}

		return false;
	}
}



/*=================================================================================
 * #WPML helper functions
 *=================================================================================*/
if(!function_exists('burst_mikado_is_wpml_installed')) {
	/**
	 * Function that checks if WPML plugin is installed
	 * @return bool
	 *
	 * @version 0.1
	 */
	function burst_mikado_is_wpml_installed() {
		return defined('ICL_SITEPRESS_VERSION');
	}
}

if(!function_exists('burst_mikado_get_wpml_pages_for_current_page')) {
	/**
	 * Function that returns urls translated pages for current page.
	 * @return array array of url urls translated pages for current page.
	 *
	 * @version 0.1
	 */
	function burst_mikado_get_wpml_pages_for_current_page() {
		$wpml_pages_for_current_page = array();

		if(burst_mikado_is_wpml_installed()) {
			$language_pages = icl_get_languages('skip_missing=0');

			foreach($language_pages as $key => $language_page) {
				$wpml_pages_for_current_page[] = $language_page["url"];
			}
		}

		return $wpml_pages_for_current_page;
	}
}

if(!function_exists('burst_mikado_get_vc_version')) {
    /**
     * Return Visual Composer version string
     *
     * @return bool|string
     */
    function burst_mikado_get_vc_version() {
        if(burst_mikado_visual_composer_installed()) {
            return WPB_VC_VERSION;
        }

        return false;
    }
}

if ( ! function_exists('burst_mikado_get_multisite_blog_id') ) {
    function burst_mikado_get_multisite_blog_id() {
        if ( is_multisite() ) {
            return get_blog_details()->blog_id;
        }
    }
}

// Fixed Single Product Gallery Blurry Images
if( ! function_exists('burst_mikado_set_single_product_image_sizes') ){
    function burst_mikado_set_single_product_image_sizes( $size ){
        $image_properties = array(
            'width'  => 200,
            'height' => 200,
            'crop'   => 1,
        );

        return $image_properties;
    }

    add_filter( 'woocommerce_get_image_size_gallery_thumbnail', 'burst_mikado_set_single_product_image_sizes' );
}

if( ! function_exists('burst_mikado_return_global_options') ){
    function burst_mikado_return_global_options(){
        global $burst_mikado_options;

        return $burst_mikado_options;
    }
}

if( ! function_exists('burst_mikado_return_ie_variable') ){
    function burst_mikado_return_ie_variable(){
        global $is_IE;

        return $is_IE;
    }
}

if( ! function_exists('burst_mikado_return_global_query') ){
    function burst_mikado_return_global_query(){
        global $wp_query;

        return $wp_query;
    }
}

if( ! function_exists('burst_mikado_return_framework_variable') ){
    function burst_mikado_return_framework_variable(){
        global $burst_mikado_Framework;

        return $burst_mikado_Framework;
    }
}

if( ! function_exists('burst_mikado_return_options_fontstyle') ){
    function burst_mikado_return_options_fontstyle(){
        global $burst_mikado_options_fontstyle;

        return $burst_mikado_options_fontstyle;
    }
}

if( ! function_exists('burst_mikado_return_options_fontweight') ){
    function burst_mikado_return_options_fontweight(){
        global $burst_mikado_options_fontweight;

        return $burst_mikado_options_fontweight;
    }
}

if( ! function_exists('burst_mikado_return_options_texttransform') ){
    function burst_mikado_return_options_texttransform(){
        global $burst_mikado_options_texttransform;

        return $burst_mikado_options_texttransform;
    }
}

if( ! function_exists('burst_mikado_return_options_fontdecoration') ){
    function burst_mikado_return_options_fontdecoration(){
        global $burst_mikado_options_fontdecoration;

        return $burst_mikado_options_fontdecoration;
    }
}

if( ! function_exists('burst_mikado_return_options_arrows_type') ){
    function burst_mikado_return_options_arrows_type(){
        global $burst_mikado_options_arrows_type;

        return $burst_mikado_options_arrows_type;
    }
}

if( ! function_exists('burst_mikado_return_options_arrows_up_type') ){
    function burst_mikado_return_options_arrows_up_type(){
        global $burst_mikado_options_arrows_up_type;

        return $burst_mikado_options_arrows_up_type;
    }
}

if( ! function_exists('burst_mikado_return_options_double_arrows_type') ){
    function burst_mikado_return_options_double_arrows_type(){
        global $burst_mikado_options_double_arrows_type;

        return $burst_mikado_options_double_arrows_type;
    }
}

if( ! function_exists('burst_mikado_return_options_blockquote_type') ){
    function burst_mikado_return_options_blockquote_type(){
        global $burst_mikado_options_blockquote_type;

        return $burst_mikado_options_blockquote_type;
    }
}

if( ! function_exists('burst_mikado_return_woocommerce_variable') ){
    function burst_mikado_return_woocommerce_variable(){
        global $woocommerce;

        return $woocommerce;
    }
}

if( ! function_exists('burst_mikado_return_icon_collections') ){
    function burst_mikado_return_icon_collections(){
        global $burst_mikado_IconCollections;

        return $burst_mikado_IconCollections;
    }
}

if( ! function_exists('burst_mikado_set_more_variable') ){
    function burst_mikado_set_more_variable(){
        global $more;

        $more = 0;
    }
}

if( ! function_exists('burst_mikado_return_filesystem') ){
    function burst_mikado_return_filesystem(){
        global $wp_filesystem;

        return $wp_filesystem;
    }
}

if ( ! function_exists( 'burst_mikado_wp_link_pages' ) ) {
    function burst_mikado_wp_link_pages() {
        wp_link_pages();
    }
}

if ( ! function_exists( 'burst_mikado_wp_link_pages_exist' ) ) {
    function burst_mikado_wp_link_pages_exist() {
        $args_pages = array(
            'echo' => 0
        );

        return wp_link_pages( $args_pages );
    }
}

if ( ! function_exists( 'burst_mikado_get_sidebar_layout' ) ) {
    function burst_mikado_get_sidebar_layout( $default_value = true ) {
        $global_options    = burst_mikado_return_global_options();
        $qode_page_id      = burst_mikado_get_page_id();
        $show_sidebar_meta = get_post_meta( $qode_page_id, "mkd_show-sidebar", true );
        $sidebar           = $default_value ? $global_options['category_blog_sidebar'] : '';

        if ( ! empty( $show_sidebar_meta ) ) {
            $sidebar = $show_sidebar_meta;
        }

        if ( is_singular( 'post' ) && empty( $show_sidebar_meta ) ) {
            $sidebar = $global_options['blog_single_sidebar'];
        }

        if ( ! empty( $sidebar ) && ! is_active_sidebar( burst_mikado_get_sidebar_name() ) ) {
            $sidebar = '';
        }

        return $sidebar;
    }
}

if ( ! function_exists( 'burst_mikado_get_sidebar_name' ) ) {
    function burst_mikado_get_sidebar_name() {
        $burst_options = burst_mikado_return_global_options();
        $page_id      = burst_mikado_get_page_id();

        if ( get_post_meta( $page_id, 'mkd_choose-sidebar', true ) != "" ) {
            $sidebar = get_post_meta( $page_id, 'mkd_choose-sidebar', true );
        } else {
            if ( is_singular( "post" ) ) {
                if ( $burst_options['blog_single_sidebar_custom_display'] != "" ) {
                    $sidebar = $burst_options['blog_single_sidebar_custom_display'];
                } else {
                    $sidebar = 'sidebar';
                }
            } else {
                $sidebar = 'sidebar_page';
            }
        }

        return $sidebar;
    }
}

if ( ! function_exists('burst_mikado_set_number_of_columns_woo_product_list') ) {
    function burst_mikado_set_number_of_columns_woo_product_list() {
        global $woocommerce_loop;

        $woocommerce_loop['columns'] = 3;
    }
}