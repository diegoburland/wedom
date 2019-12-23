<?php

require_once get_template_directory() . '/theme-includes.php';

if(!function_exists('burst_mikado_rewrite_rules_on_theme_activation')) {
    /**
     * Function that flushes rewrite rules on deactivation
     */
    function burst_mikado_rewrite_rules_on_theme_activation() {
        flush_rewrite_rules();
    }

    add_action( 'after_switch_theme', 'burst_mikado_rewrite_rules_on_theme_activation' );
}

if(!function_exists('burst_mikado_add_theme_support')) {
    /**
     * Function that adds various features to theme. Also defines image sizes that are used in a theme
     */
    function burst_mikado_add_theme_support() {
        global $burst_mikado_image_size_prefix;

        //add support for feed links
        add_theme_support( 'automatic-feed-links' );

        //add support for post formats
        add_theme_support('post-formats', array('gallery', 'link', 'quote', 'video', 'audio'));

        //add theme support for post thumbnails
        add_theme_support( 'post-thumbnails' );

        //add theme support for title tag
        if(function_exists('_wp_render_title_tag')) {
            add_theme_support('title-tag');
        }

        if( burst_mikado_is_woocommerce_installed() ) {
            add_theme_support('woocommerce', array(
                'gallery_thumbnail_image_width' => 200,
            ));
        }

        $GLOBALS['content_width'] = 1060;

        load_theme_textdomain( 'burst', get_template_directory().'/languages' );

        //define thumbnail sizes
        add_image_size( $burst_mikado_image_size_prefix.'portfolio-square', 550, 550, true );
        add_image_size( $burst_mikado_image_size_prefix.'portfolio-landscape', 800, 600, true );
        add_image_size( $burst_mikado_image_size_prefix.'portfolio-portrait', 600, 800, true );
        add_image_size( $burst_mikado_image_size_prefix.'portfolio_masonry_wide', 1000, 500, true );
        add_image_size( $burst_mikado_image_size_prefix.'portfolio_masonry_tall', 500, 1000, true );
        add_image_size( $burst_mikado_image_size_prefix.'portfolio_masonry_large', 1000, 1000, true );
        add_image_size( $burst_mikado_image_size_prefix.'portfolio_masonry_with_space', 700);
        add_image_size( $burst_mikado_image_size_prefix.'blog_image_format_link_quote', 1100, 500, true);

    }

    add_action('after_setup_theme', 'burst_mikado_add_theme_support');
}

if (!function_exists('burst_mikado_styles')) {
    /**
     * Function that includes theme's core styles
     */
    function burst_mikado_styles() {
        global $burst_mikado_options;
        global $burst_mikado_IconCollections;

        //init variables
        $responsiveness = 'yes';
        $vertical_area_hidden = '';

        wp_enqueue_style('wp-mediaelement');

        wp_register_style("burst-mikado-blog", BURST_MIKADO_CSS_ROOT . "/blog.min.css");

        //include theme's core styles
        wp_enqueue_style("burst-mikado-default-style", BURST_MIKADO_ROOT . "/style.css");
        wp_enqueue_style("burst-mikado-stylesheet", BURST_MIKADO_CSS_ROOT . "/stylesheet.min.css");

        //Print-specific CSS
        wp_enqueue_style("burst-mikado-print-stylesheet", BURST_MIKADO_CSS_ROOT . "/print.css");

        if(burst_mikado_load_blog_assets()) {
            wp_enqueue_style('burst-mikado-blog');
        }

        //define files afer which style dynamic needs to be included. It should be included last so it can override other files
        $style_dynamic_deps_array = array();
        if(burst_mikado_load_woo_assets()) {
            $style_dynamic_deps_array[] = 'burst-mikado-woocommerce';
        }


        //include icon collections styles
        if(is_array($burst_mikado_IconCollections->iconCollections) && count($burst_mikado_IconCollections->iconCollections)) {
            foreach ($burst_mikado_IconCollections->iconCollections as $collection_key => $collection_obj) {
                wp_enqueue_style('burst-mikado-'.$collection_key, $collection_obj->styleUrl);
            }
        }

        //does responsive option exists?
        if (isset($burst_mikado_options['responsiveness'])) {
            $responsiveness = $burst_mikado_options['responsiveness'];
        }

        //is responsive option turned on?
        if ($responsiveness != "no") {
            //include proper styles
            wp_enqueue_style("burst-mikado-responsive", BURST_MIKADO_CSS_ROOT . "/responsive.min.css");

            if(burst_mikado_load_woo_assets()) {
                $style_dynamic_deps_array[] = 'burst-mikado-woocommerce-responsive';
            }

            if (file_exists(BURST_MIKADO_CSS_ROOT_DIR ."/style_dynamic_responsive.css") && burst_mikado_is_css_folder_writable() && !is_multisite()){
                wp_enqueue_style("burst-mikado-style-dynamic-responsive", BURST_MIKADO_CSS_ROOT . "/style_dynamic_responsive.css", array(), filemtime(BURST_MIKADO_CSS_ROOT_DIR . "/style_dynamic_responsive.css"));
            } else if ( file_exists( BURST_MIKADO_CSS_ROOT_DIR . '/style_dynamic_responsive_ms_id_' . burst_mikado_get_multisite_blog_id() . '.css' ) && burst_mikado_is_css_folder_writable() && is_multisite() ) {
                wp_enqueue_style( 'burst-mikado-style-dynamic-responsive', BURST_MIKADO_CSS_ROOT . '/style_dynamic_ms_id_' . burst_mikado_get_multisite_blog_id() . '.css', $style_dynamic_deps_array, filemtime( BURST_MIKADO_CSS_ROOT_DIR . '/style_dynamic_ms_id_' . burst_mikado_get_multisite_blog_id() . '.css' ) );
            } else {
                wp_enqueue_style("burst-mikado-style-dynamic-responsive", BURST_MIKADO_CSS_ROOT . "/style_dynamic_responsive_callback.php");
            }
        }

        if (file_exists(BURST_MIKADO_CSS_ROOT_DIR . "/style_dynamic.css") && burst_mikado_is_css_folder_writable() && !is_multisite()) {
            wp_enqueue_style("burst-mikado-style-dynamic", BURST_MIKADO_CSS_ROOT . "/style_dynamic.css", $style_dynamic_deps_array, filemtime(BURST_MIKADO_CSS_ROOT_DIR . "/style_dynamic.css")); //it must be included after woocommerce styles so it can override it
        } else if ( file_exists( BURST_MIKADO_CSS_ROOT_DIR . '/style_dynamic_ms_id_' . burst_mikado_get_multisite_blog_id() . '.css' ) && burst_mikado_is_css_folder_writable() && is_multisite() ) {
            wp_enqueue_style( 'burst-mikado-style-dynamic', BURST_MIKADO_CSS_ROOT . '/style_dynamic_ms_id_' . burst_mikado_get_multisite_blog_id() . '.css', $style_dynamic_deps_array, filemtime( BURST_MIKADO_CSS_ROOT_DIR . '/style_dynamic_ms_id_' . burst_mikado_get_multisite_blog_id() . '.css' ) );
        } else {
            wp_enqueue_style("burst-mikado-style-dynamic", BURST_MIKADO_CSS_ROOT . "/style_dynamic_callback.php", $style_dynamic_deps_array); //it must be included after woocommerce styles so it can override it
        }

        //is hidden menu enabled?
        if (isset($burst_mikado_options['vertical_area_type'])){
            $vertical_area_hidden = $burst_mikado_options['vertical_area_type'];
        }

        //is left menu activated and is responsive turned on?
        if(burst_mikado_is_side_header() && $responsiveness != "no" && $vertical_area_hidden!='hidden'){
            wp_enqueue_style("burst-mikado-vertical-responsive", BURST_MIKADO_CSS_ROOT . "/vertical_responsive.min.css");
        }

        //include Visual Composer styles
        if (class_exists('WPBakeryVisualComposerAbstract')) {
            wp_enqueue_style( 'js_composer_front' );
        }

        $custom_css = $burst_mikado_options['custom_css'];
        if ( ! empty( $custom_css ) ) {
            wp_add_inline_style( 'burst-mikado-style-dynamic', $custom_css );
        }

    }

    add_action('wp_enqueue_scripts', 'burst_mikado_styles');
}


if(!function_exists('burst_mikado_browser_specific_styles')) {
    /**
     * Function that includes browser specific styles. Works for Chrome on Mac and for webkit browsers
     */
    function burst_mikado_browser_specific_styles() {
        global $is_chrome;
        global $is_safari;

        //check Chrome version
        preg_match( "#Chrome/(.+?)\.#", getenv('HTTP_USER_AGENT'), $match );
        if(!empty($match)) {
            $chrome_version = $match[1];
        } else{
            $chrome_version = 0;
        }

        //is Mac OS X?
        $mac_os = strpos(getenv('HTTP_USER_AGENT'), "Macintosh; Intel Mac OS X");

        //is Edge browser?
        $is_edge_browser = strstr(getenv('HTTP_USER_AGENT'), 'Edge');

        //is Chrome on Mac with version greater than 21
        if($is_chrome && ($mac_os !== false) && ($chrome_version > 21)) {
            //include mac specific styles
            wp_enqueue_style("burst-mikado-mac-stylesheet", BURST_MIKADO_ROOT . "/css/mac_stylesheet.css");
        }

        //is Chrome or Safari?
        if(($is_chrome || $is_safari) && !$is_edge_browser) {
            //include style for webkit browsers only
            wp_enqueue_style("burst-mikado-webkit", BURST_MIKADO_ROOT . "/css/webkit_stylesheet.css");
        }

        //is IE 9 in use and enqueue it's style
        preg_match('/MSIE (.*?);/', getenv('HTTP_USER_AGENT'), $matches);
        if(count($matches)<2){
            preg_match('/Trident\/\d{1,2}.\d{1,2}; rv:([0-9]*)/', getenv('HTTP_USER_AGENT'), $matches);
        }

        if (count($matches)>1){
            //Then we're using IE
            $version = $matches[1];

            if( $version==9 ){
                wp_enqueue_style('burst-mikado-ie9-stylesheet', BURST_MIKADO_ROOT . '/css/ie9_stylesheet.css');
            }
        }
    }

    add_action('wp_enqueue_scripts', 'burst_mikado_browser_specific_styles');
}

/* Page ID */
if(!function_exists('burst_mikado_init_page_id')) {
    /**
     * Function that initializes global variable that holds current page id
     */
    function burst_mikado_init_page_id() {
        global $wp_query;
        global $burst_mikado_page_id;

        $burst_mikado_page_id = $wp_query->get_queried_object_id();
    }

    add_action('get_header', 'burst_mikado_init_page_id');
}


if(!function_exists('burst_mikado_google_fonts_styles')) {
    /**
     * Function that includes google fonts defined anywhere in the theme
     */
    function burst_mikado_google_fonts_styles() {
        global $burst_mikado_options;
        global $burst_mikado_Framework;

        $font_sipmle_field_array = array();
        if(is_array($burst_mikado_Framework->mkdOptions->getOptionsByType('fontsimple')) && count($burst_mikado_Framework->mkdOptions->getOptionsByType('fontsimple')) > 0){
            $font_sipmle_field_array = $burst_mikado_Framework->mkdOptions->getOptionsByType('fontsimple');
        }
        $font_field_array = array();
        if(is_array($burst_mikado_Framework->mkdOptions->getOptionsByType('font')) && count($burst_mikado_Framework->mkdOptions->getOptionsByType('font')) > 0){
            $font_field_array = $burst_mikado_Framework->mkdOptions->getOptionsByType('font');
        }
        $available_font_options = array_merge($font_sipmle_field_array, $font_field_array);
        $font_weight_str = '100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic';

        //define available font options array
        $fonts_array = array();
        foreach($available_font_options as $font_option) {
            //is font set and not set to default and not empty?
            if(isset($burst_mikado_options[$font_option]) && $burst_mikado_options[$font_option] !== '-1' && $burst_mikado_options[$font_option] !== '' && !burst_mikado_is_native_font($burst_mikado_options[$font_option])) {
                $font_option_string = $burst_mikado_options[$font_option].':'.$font_weight_str;
                if(!in_array($font_option_string, $fonts_array)) {
                    $fonts_array[] = $font_option_string;
                }
            }
        }

        //add google fonts set in slider
        $args = array( 'post_type' => 'slides', 'posts_per_page' => -1);
        $loop = new WP_Query( $args );

        //for each slide defined
        while ( $loop->have_posts() ) : $loop->the_post();

            //is font family for title option chosen?
            if(get_post_meta(get_the_ID(), "mkd_slide-title-font-family", true) != "" && !burst_mikado_is_native_font(get_post_meta(get_the_ID(), "mkd_slide-title-font-family", true))) {
                $slide_title_font_string = get_post_meta(get_the_ID(), "mkd_slide-title-font-family", true) . ":".$font_weight_str;
                if(!in_array($slide_title_font_string, $fonts_array)) {
                    //include that font
                    array_push($fonts_array, $slide_title_font_string);
                }
            }

            //is font family defined for slide's text?
            if(get_post_meta(get_the_ID(), "mkd_slide-text-font-family", true) != "" && !burst_mikado_is_native_font(get_post_meta(get_the_ID(), "mkd_slide-text-font-family", true))) {
                $slide_text_font_string = get_post_meta(get_the_ID(), "mkd_slide-text-font-family", true) . ":".$font_weight_str;
                if(!in_array($slide_text_font_string, $fonts_array)) {
                    //include that font
                    array_push($fonts_array, $slide_text_font_string);
                }
            }

            //is font family defined for slide's subtitle?
            if(get_post_meta(get_the_ID(), "mkd_slide-subtitle-font-family", true) != "" && !burst_mikado_is_native_font(get_post_meta(get_the_ID(), "mkd_slide-subtitle-font-family", true))) {
                $slide_subtitle_font_string = get_post_meta(get_the_ID(), "mkd_slide-subtitle-font-family", true) .":".$font_weight_str;
                if(!in_array($slide_subtitle_font_string, $fonts_array)) {
                    //include that font
                    array_push($fonts_array, $slide_subtitle_font_string);
                }
            }
        endwhile;

        wp_reset_postdata();

        $fonts_array = array_diff($fonts_array, array("-1:".$font_weight_str));
        $google_fonts_string = implode( '|', $fonts_array);

        //default fonts should be separated with %7C because of HTML validation
        $default_font_string = 'Open Sans:'.$font_weight_str;

        //is google font option checked anywhere in theme?
        if (count($fonts_array) > 0) {

            //include all checked fonts
            $fonts_full_list = $default_font_string . '|' . str_replace('+', ' ', $google_fonts_string);
            $fonts_full_list_args = array(
                'family' => urlencode($fonts_full_list),
                'subset' => urlencode('latin,latin-ext'),
            );

            $mkd_fonts = add_query_arg( $fonts_full_list_args, 'https://fonts.googleapis.com/css' );
            wp_enqueue_style( 'burst_mikado_google_fonts', esc_url_raw($mkd_fonts), array(), '1.0.0' );

        } else {
            //include default google font that theme is using
            $default_fonts_args = array(
                'family' => urlencode($default_font_string),
                'subset' => urlencode('latin,latin-ext'),
            );
            $mkd_fonts = add_query_arg( $default_fonts_args, 'https://fonts.googleapis.com/css' );
            wp_enqueue_style( 'burst-mikado-google-fonts', esc_url_raw($mkd_fonts), array(), '1.0.0' );
        }

    }

    add_action('wp_enqueue_scripts', 'burst_mikado_google_fonts_styles');
}


if (!function_exists('burst_mikado_scripts')) {
    /**
     * Function that includes all necessary scripts
     */
    function burst_mikado_scripts() {
        global $burst_mikado_options;
        global $wp_scripts;
        global $is_IE;

        //init variables
        $smooth_scroll 	= true;
        $has_ajax 		= false;
        $mkd_animation = "";

        //is smooth scroll option turned on?
        if(isset($burst_mikado_options['smooth_scroll']) && $burst_mikado_options['smooth_scroll'] == "no"){
            $smooth_scroll = false;
        }

        //init theme core scripts
        wp_enqueue_script( 'jquery-ui-core' );
        wp_enqueue_script( 'jquery-ui-widget' );
        wp_enqueue_script( 'jquery-ui-mouse' );
        wp_enqueue_script( 'jquery-ui-draggable' );
        wp_enqueue_script( 'jquery-ui-droppable' );
        wp_enqueue_script( 'jquery-ui-resizable' );
        wp_enqueue_script( 'jquery-ui-selectable' );
        wp_enqueue_script( 'jquery-ui-sortable' );
        wp_enqueue_script( 'jquery-ui-accordion' );
        wp_enqueue_script( 'jquery-ui-autocomplete' );
        wp_enqueue_script( 'jquery-ui-button' );
        wp_enqueue_script( 'jquery-ui-datepicker' );
        wp_enqueue_script( 'jquery-ui-dialog' );
        wp_enqueue_script( 'jquery-effects-core' );
        wp_enqueue_script( 'jquery-effects-blind' );
        wp_enqueue_script( 'jquery-effects-bounce' );
        wp_enqueue_script( 'jquery-effects-clip' );
        wp_enqueue_script( 'jquery-effects-drop' );
        wp_enqueue_script( 'jquery-effects-explode' );
        wp_enqueue_script( 'jquery-effects-fade' );
        wp_enqueue_script( 'jquery-effects-fold' );
        wp_enqueue_script( 'jquery-effects-highlight' );
        wp_enqueue_script( 'jquery-effects-pulsate' );
        wp_enqueue_script( 'jquery-effects-scale' );
        wp_enqueue_script( 'jquery-effects-shake' );
        wp_enqueue_script( 'jquery-effects-slide' );
        wp_enqueue_script( 'jquery-effects-transfer' );
        wp_enqueue_script( 'jquery-ui-menu' );
        wp_enqueue_script( 'jquery-ui-position' );
        wp_enqueue_script( 'jquery-ui-progressbar' );
        wp_enqueue_script( 'jquery-ui-slider' );
        wp_enqueue_script( 'jquery-ui-spinner' );
        wp_enqueue_script( 'jquery-ui-tabs' );
        wp_enqueue_script( 'jquery-ui-tooltip' );
        wp_enqueue_script('jquery-form' );
        wp_enqueue_script("hoverIntent");
        wp_enqueue_script('wp-mediaelement');
        wp_enqueue_script("doubletaptogo", BURST_MIKADO_JS_ROOT . "/plugins/doubletaptogo.min.js",array("jquery"),false,true);
        wp_enqueue_script("modernizr", BURST_MIKADO_JS_ROOT . "/plugins/modernizr.min.js",array("jquery"),false,true);
        wp_enqueue_script("appear", BURST_MIKADO_JS_ROOT . "/plugins/jquery.appear.min.js",array("jquery"),false,true);
        wp_enqueue_script("absoluteCounter", BURST_MIKADO_JS_ROOT . "/plugins/absoluteCounter.min.js",array("jquery"),false,true);
        wp_enqueue_script("easyPieChart", BURST_MIKADO_JS_ROOT . "/plugins/easyPieChart.min.js",array("jquery"),false,true);
        wp_enqueue_script("mixitup", BURST_MIKADO_JS_ROOT . "/plugins/mixitup.min.js",array("jquery"),false,true);
        wp_enqueue_script("niceScroll", BURST_MIKADO_JS_ROOT . "/plugins/jquery.nicescroll.min.js",array("jquery"),false,true);
        wp_enqueue_script("prettyPhoto", BURST_MIKADO_JS_ROOT . "/plugins/jquery.prettyPhoto.min.js",array("jquery"),false,true);
        wp_enqueue_script("fitVids", BURST_MIKADO_JS_ROOT . "/plugins/jquery.fitvids.min.js",array("jquery"),false,true);
        wp_enqueue_script("flexslider", BURST_MIKADO_JS_ROOT . "/plugins/jquery.flexslider.min.js",array("jquery"),false,true);
        wp_enqueue_script("infinitescroll", BURST_MIKADO_JS_ROOT . "/plugins/infiniteScroll.min.js",array("jquery"),false,true);
        wp_enqueue_script("waitforimages", BURST_MIKADO_JS_ROOT . "/plugins/waitforimages.min.js",array("jquery"),false,true);
        wp_enqueue_script("waypoints-jquery", BURST_MIKADO_JS_ROOT . "/plugins/waypoints.min.js",array("jquery"),false,true);
        wp_enqueue_script("jplayer", BURST_MIKADO_JS_ROOT . "/plugins/jplayer.min.js",array("jquery"),false,true);
        wp_enqueue_script("bootstrapCarousel", BURST_MIKADO_JS_ROOT . "/plugins/bootstrap.carousel.js",array("jquery"),false,true);
        wp_enqueue_script("skrollr", BURST_MIKADO_JS_ROOT . "/plugins/skrollr.min.js",array("jquery"),false,true);
        wp_enqueue_script("Chart", BURST_MIKADO_JS_ROOT . "/plugins/Chart.min.js",array("jquery"),false,true);
        wp_enqueue_script("easing", BURST_MIKADO_JS_ROOT . "/plugins/jquery.easing.min.js",array("jquery"),false,true);
        wp_enqueue_script("countdown", BURST_MIKADO_JS_ROOT . "/plugins/countdown.min.js",array("jquery"),false,true);
        wp_enqueue_script("multiscroll", BURST_MIKADO_JS_ROOT . "/plugins/jquery.multiscroll.min.js",array("jquery"),false,true);
        wp_enqueue_script("typed", BURST_MIKADO_JS_ROOT . "/plugins/typed.min.js",array("jquery"),false,true);
        wp_enqueue_script("carouFredSel", BURST_MIKADO_JS_ROOT . "/plugins/jquery.carouFredSel-6.2.1.js",array("jquery"),false,true);
        wp_enqueue_script("one_page_scroll", BURST_MIKADO_JS_ROOT . "/plugins/jquery.fullPage.min.js",array("jquery"),false,true);
        wp_enqueue_script("lemmonSlider", BURST_MIKADO_JS_ROOT . "/plugins/lemmon-slider.js",array("jquery"),false,true);
        wp_enqueue_script("mousewheel", BURST_MIKADO_JS_ROOT . "/plugins/jquery.mousewheel.min.js",array("jquery"),false,true);
        wp_enqueue_script("touchSwipe", BURST_MIKADO_JS_ROOT . "/plugins/jquery.touchSwipe.min.js",array("jquery"),false,true);
        wp_enqueue_script("isotope", BURST_MIKADO_JS_ROOT . "/plugins/jquery.isotope.min.js",array("jquery"),false,true);

        //include google map api script
        if( (isset($burst_mikado_options['google_maps_api_key']) && $burst_mikado_options['google_maps_api_key'] != "")) {

            $google_maps_api_key = $burst_mikado_options['google_maps_api_key'];
            wp_enqueue_script("google-map-api", "https://maps.googleapis.com/maps/api/js?key=" . $google_maps_api_key,array(),false,true);

        }

        if (file_exists(BURST_MIKADO_JS_ROOT_DIR . "/default_dynamic.js") && burst_mikado_is_js_folder_writable() && !is_multisite()) {
            wp_enqueue_script("burst-mikado-default-dynamic", BURST_MIKADO_JS_ROOT . "/default_dynamic.js", array("jquery"), filemtime(BURST_MIKADO_JS_ROOT_DIR . "/default_dynamic.js"),true);
        } else if ( file_exists( BURST_MIKADO_JS_ROOT . '/default_dynamic_ms_id_' . burst_mikado_get_multisite_blog_id() . '.js' ) && burst_mikado_is_js_folder_writable() && is_multisite() ) {
            wp_enqueue_script( 'burst-mikado-default-dynamic', BURST_MIKADO_JS_ROOT . '/default_dynamic_ms_id_' . burst_mikado_get_multisite_blog_id() . '.js', array('jquery'), filemtime( BURST_MIKADO_JS_ROOT_DIR . '/default_dynamic_ms_id_' . burst_mikado_get_multisite_blog_id() . '.js' ), true );
        } else {
            wp_enqueue_script("burst-mikado-default-dynamic", BURST_MIKADO_JS_ROOT . "/default_dynamic_callback.php", array("jquery"), false, true);
        }

        wp_enqueue_script("burst-mikado-default", BURST_MIKADO_JS_ROOT . "/default.js", array("jquery"), false, true);

        if( burst_mikado_load_blog_assets() ) {
            wp_enqueue_script('burst-mikado-blog', BURST_MIKADO_JS_ROOT . "/blog.min.js", array("jquery"), false, true);
        }

        $custom_js = $burst_mikado_options['custom_js'];
        if ( ! empty( $custom_js ) ) {
            wp_add_inline_script( 'burst-mikado-default', $custom_js );
        }

        //is smooth scroll enabled enabled and not Mac device?
        $mac_os = strpos(getenv('HTTP_USER_AGENT'), "Macintosh; Intel Mac OS X");
        if($smooth_scroll && $mac_os == false){
            wp_enqueue_script("TweenLite", BURST_MIKADO_JS_ROOT . "/plugins/TweenLite.min.js",array("jquery"),false,true);
            wp_enqueue_script("ScrollToPlugin", BURST_MIKADO_JS_ROOT . "/plugins/ScrollToPlugin.min.js",array("jquery"),false,true);
            wp_enqueue_script("smoothPageScroll", BURST_MIKADO_JS_ROOT . "/plugins/smoothPageScroll.js",array("jquery"),false,true);
        }

        //include comment reply script
        $wp_scripts->add_data('comment-reply', 'group', 1 );
        if (is_singular()) {
            wp_enqueue_script( "comment-reply");
        }

        if (($burst_mikado_options['page_transitions'] != "0") && (empty($mkd_animation) || ($mkd_animation != "no"))) {
            $has_ajax = true;
        } elseif (!empty($mkd_animation) && ($mkd_animation != "no"))
            $has_ajax = true;

        if ($has_ajax) {
            wp_enqueue_script("burst-mikado-ajax", BURST_MIKADO_JS_ROOT . "/ajax.min.js",array("jquery"),false,true);
        }

        //include Visual Composer script
        if (class_exists('WPBakeryVisualComposerAbstract')) {
            wp_enqueue_script( 'wpb_composer_front_js' );
        }

        //is ie?
        if ($is_IE) {
            wp_enqueue_script("html5", BURST_MIKADO_JS_ROOT . "/html5.js",array("jquery"),false,false);
        }
    }

    add_action('wp_enqueue_scripts', 'burst_mikado_scripts');
}

if(!function_exists('burst_mikado_woocommerce_assets')) {
    /**
     * Function that includes all necessary scripts for WooCommerce if installed
     */
    function burst_mikado_woocommerce_assets() {
        global $burst_mikado_options;

        //is woocommerce installed?
        if(burst_mikado_is_woocommerce_installed()) {
            if(burst_mikado_load_woo_assets()) {
                //get woocommerce specific scripts
                wp_enqueue_script("burst-mikado-woocommerce-script", BURST_MIKADO_JS_ROOT . "/woocommerce.min.js", array("jquery"), false, true);
                wp_enqueue_script("select2", BURST_MIKADO_JS_ROOT . "/plugins/select2.min.js", array("jquery"), false, true);

                //include theme's woocommerce styles
                wp_enqueue_style("burst-mikado-woocommerce", BURST_MIKADO_CSS_ROOT . "/woocommerce.min.css");

                //is responsive option turned on?
                if ($burst_mikado_options['responsiveness'] == 'yes') {
                    //include theme's woocommerce responsive styles
                    wp_enqueue_style("burst-mikado-woocommerce-responsive", BURST_MIKADO_CSS_ROOT . "/woocommerce_responsive.min.css");
                }
            }
        }
    }

    add_action('wp_enqueue_scripts', 'burst_mikado_woocommerce_assets');
}

if (!function_exists('burst_mikado_register_menus')) {
    /**
     * Function that registers menu locations
     */
    function burst_mikado_register_menus() {
        global $burst_mikado_options;

        if((isset($burst_mikado_options['header_bottom_appearance']) && $burst_mikado_options['header_bottom_appearance'] != "stick_with_left_right_menu") || (burst_mikado_is_side_header())){
            //header and left menu location
            register_nav_menus(
                array('top-navigation' => esc_html__( 'Top Navigation', 'burst')
                )
            );
        }

        //popup menu location
        register_nav_menus(
            array('popup-navigation' => esc_html__( 'Fullscreen Navigation', 'burst')
            )
        );

        if((isset($burst_mikado_options['header_bottom_appearance']) && $burst_mikado_options['header_bottom_appearance'] == "stick_with_left_right_menu") && (!burst_mikado_is_side_header())){
            //header left menu location
            register_nav_menus(
                array('left-top-navigation' => esc_html__( 'Left Top Navigation', 'burst')
                )
            );

            //header right menu location
            register_nav_menus(
                array('right-top-navigation' => esc_html__( 'Right Top Navigation', 'burst')
                )
            );
        }
    }

    add_action( 'after_setup_theme', 'burst_mikado_register_menus' );
}

if(!function_exists('burst_mikado_rgba_color')) {
    /**
     * Function that generates rgba part of css color property
     * @param $color string hex color
     * @param $transparency float transparency value between 0 and 1
     * @return string generated rgba string
     */
    function burst_mikado_rgba_color($color, $transparency) {
        if($color !== '' && $transparency !== '') {
            $rgba_color = '';

            $rgb_color_array = burst_mikado_hex2rgb($color);
            $rgba_color .= 'rgba('.implode(', ', $rgb_color_array).', '.$transparency.')';

            return $rgba_color;
        }
    }
}

if(!function_exists('burst_mikado_wp_title_text')) {
    /**
     * Function that sets page's title. Hooks to wp_title filter
     * @param $title string current page title
     * @param $sep string title separator
     * @return string changed title text if SEO plugins aren't installed
     */
    function burst_mikado_wp_title_text() {
        global $burst_mikado_options;

        //is SEO plugin installed?
        if(burst_mikado_seo_plugin_installed()) {
            //don't do anything, seo plugin will take care of it
        } else {
            //get current post id
            $id = burst_mikado_get_page_id();
            $sep = ' | ';
            $title_prefix = get_bloginfo('name');
            $title_suffix = '';

            //is WooCommerce installed and is current page shop page?
            if(burst_mikado_is_woocommerce_installed() && burst_mikado_is_woocommerce_shop()) {
                //get shop page id
                $id = burst_mikado_get_woo_shop_page_id();
            }

            //set unchanged title variable so we can use it later if necessary
            $unchanged_title = get_the_title( $id );

            //is mkd seo enabled?
            if(isset($burst_mikado_options['disable_mkd_seo']) && $burst_mikado_options['disable_mkd_seo'] !== 'yes') {
                //get current post seo title
                $seo_title = esc_attr(get_post_meta($id, "mkd_seo_title", true));

                //is current post seo title set?
                if($seo_title !== '') {
                    $title_suffix = $seo_title;
                }
            }

            //title suffix is empty, which means that it wasn't set by mkd seo
            if(empty($title_suffix)) {
                //if current page is front page append site description, else take original title string
                $title_suffix = is_front_page() ? get_bloginfo('description') : $unchanged_title;
            }

            //concatenate title string
            $title  = $title_prefix.$sep.$title_suffix;

            //return generated title string
            return $title;
        }
    }

    add_filter('pre_get_document_title', 'burst_mikado_wp_title_text', 10, 2);
}

if(!function_exists('burst_mikado_get_page_id')) {
    /**
     * Function that returns current page / post id.
     * Checks if current page is woocommerce page and returns that id if it is.
     * Checks if current page is any archive page (category, tag, date, author etc.) and returns -1 because that isn't
     * page that is created in WP admin.
     *
     * @return int
     *
     * @version 0.1
     *
     * @see burst_mikado_is_woocommerce_installed()
     * @see burst_mikado_is_woocommerce_shop()
     */
    function burst_mikado_get_page_id() {
        if( burst_mikado_is_woocommerce_installed() && burst_mikado_is_woocommerce_shop() ) {
            return burst_mikado_get_woo_shop_page_id();
        }

        if ( is_archive() || is_search() || is_404() || ( is_front_page() && is_home() ) ) {
            return - 1;
        }

        return get_queried_object_id();
    }
}

if(!function_exists('burst_mikado_set_logo_sizes')) {
    /**
     * Function that sets logo image dimensions to global mkd options array so it can be used in the theme
     */
    function burst_mikado_set_logo_sizes() {
        global $burst_mikado_options;

        if (!empty($burst_mikado_options['logo_image'])){
            //get logo image size
            $logo_image_sizes = burst_mikado_get_image_dimensions($burst_mikado_options['logo_image']);
            $burst_mikado_options['logo_width'] = 280;
            $burst_mikado_options['logo_height'] = 130;

            //is image width and height set?
            if(isset($logo_image_sizes['width']) && isset($logo_image_sizes['height'])) {
                //set those variables in global array
                $burst_mikado_options['logo_width'] = $logo_image_sizes['width'];
                $burst_mikado_options['logo_height'] = $logo_image_sizes['height'];
            }
        }
    }

    add_action('init', 'burst_mikado_set_logo_sizes', 0);
}


if(!function_exists('burst_mikado_is_default_wp_template')) {
    /**
     * Function that checks if current page archive page, search, 404 or default home blog page
     * @return bool
     *
     * @see is_archive()
     * @see is_search()
     * @see is_404()
     * @see is_front_page()
     * @see is_home()
     */
    function burst_mikado_is_default_wp_template() {
        return is_archive() || is_search() || is_404() || (is_front_page() && is_home());
    }
}

if(!function_exists('burst_mikado_get_page_template_name')) {
    /**
     * Returns current template file name without extension
     * @return string name of current template file
     */
    function burst_mikado_get_page_template_name() {
        $file_name = '';

        if(!burst_mikado_is_default_wp_template()) {
            $file_name_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', basename(get_page_template()));

            if($file_name_without_ext !== '') {
                $file_name = $file_name_without_ext;
            }
        }

        return $file_name;
    }
}

if(!function_exists('burst_mikado_is_main_menu_set')) {
    /**
     * Function that checks if any of main menu locations are set.
     * Checks whether top-navigation location is set, or left-top-navigation and right-top-navigation is set
     * @return bool
     *
     * @version 0.1
     */
    function burst_mikado_is_main_menu_set() {
        $has_top_nav = has_nav_menu('top-navigation');
        $has_divided_nav = has_nav_menu('left-top-navigation') && has_nav_menu('right-top-navigation');

        return $has_top_nav || $has_divided_nav;
    }
}

if(!function_exists('burst_mikado_has_shortcode')) {
    /**
     * Function that checks whether shortcode exists on current page / post
     * @param string shortcode to find
     * @param string content to check. If isn't passed current post content will be used
     * @return bool whether content has shortcode or not
     */
    function burst_mikado_has_shortcode($shortcode, $content = '')
    {
        $has_shortcode = false;

        if ($shortcode) {
            //if content variable isn't past
            if ($content == '') {
                //take content from current post
                $page_id = burst_mikado_get_page_id();
                if (!empty($page_id)) {
                    $current_post = get_post($page_id);

                    if (is_object($current_post) && property_exists($current_post, 'post_content')) {
                        $content = $current_post->post_content;
                    }

                }
            }

            //does content has shortcode added?
            if (stripos($content, '[' . $shortcode) !== false) {
                $has_shortcode = true;
            }
        }

        return $has_shortcode;
    }
}

if(!function_exists('burst_mikado_localize_no_ajax_pages')) {
    /**
     * Function that outputs no_ajax_obj javascript variable that is used default_dynamic.php.
     * It is used for no ajax pages functionality
     *
     * Function hooks to wp_enqueue_scripts and uses wp_localize_script
     *
     * @see http://codex.wordpress.org/Function_Reference/wp_localize_script
     *
     * @uses mkd_get_posts_without_ajax()
     * @uses mkd_get_pages_without_ajax()
     * @uses burst_mikado_get_wpml_pages_for_current_page()
     * @uses burst_mikado_get_woocommerce_pages()
     *
     * @version 0.1
     */
    function burst_mikado_localize_no_ajax_pages() {
        global $burst_mikado_options;



        //is ajax enabled?
        if(burst_mikado_is_ajax_enabled()) {
            $no_ajax_pages = array();

            //get posts that have ajax disabled and merge with main array
            $no_ajax_pages = array_merge($no_ajax_pages, burst_mikado_get_objects_without_ajax());

            //is wpml installed?
            if(burst_mikado_is_wpml_installed()) {
                //get translation pages for current page and merge with main array
                $no_ajax_pages = array_merge($no_ajax_pages, burst_mikado_get_wpml_pages_for_current_page());
            }

            //is woocommerce installed?
            if(burst_mikado_is_woocommerce_installed()) {
                //get all woocommerce pages and products and merge with main array
                $no_ajax_pages = array_merge($no_ajax_pages, burst_mikado_get_woocommerce_pages());
            }

            //do we have some internal pages that won't to be without ajax?
            if (isset($burst_mikado_options['internal_no_ajax_links'])) {
                //get array of those pages
                $options_no_ajax_pages_array = explode(',', $burst_mikado_options['internal_no_ajax_links']);

                if(is_array($options_no_ajax_pages_array) && count($options_no_ajax_pages_array)) {
                    $no_ajax_pages = array_merge($no_ajax_pages, $options_no_ajax_pages_array);
                }
            }

            //add logout url to main array
            $no_ajax_pages[] = wp_specialchars_decode(wp_logout_url());

            //finally localize script so we can use it in default_dynamic
            wp_localize_script( 'burst-mikado-default-dynamic', 'no_ajax_obj', array(
                'no_ajax_pages' => $no_ajax_pages
            ));
        }
    }

    add_action('wp_enqueue_scripts', 'burst_mikado_localize_no_ajax_pages');
}

if ( ! function_exists( 'burst_mikado_set_global_variables' ) ) {
    function burst_mikado_set_global_variables() {
        $sticky_scroll_amount = get_post_meta( burst_mikado_get_page_id(), "mkd_page_scroll_amount_for_sticky", true );

        if ( $sticky_scroll_amount !== '' ) {
            wp_localize_script( 'burst-mikado-default', 'page_scroll_amount_for_sticky', $sticky_scroll_amount );
        }
    }

    add_action( 'wp_enqueue_scripts', 'burst_mikado_set_global_variables' );
}

if(!function_exists('burst_mikado_get_objects_without_ajax')) {
    /**
     * Function that returns urls of objects that have ajax disabled.
     * Works for posts, pages and portfolio pages.
     * @return array array of urls of posts that have ajax disabled
     *
     * @version 0.1
     */
    function burst_mikado_get_objects_without_ajax() {
        $posts_without_ajax = array();

        $posts_args =  array(
            'post_type'  => array('post', 'portfolio_page', 'page'),
            'post_status' => 'publish',
            'meta_key' => 'mkd_show-animation',
            'meta_value' => 'no_animation'
        );

        $posts_query = new WP_Query($posts_args);

        if($posts_query->have_posts()) {
            while($posts_query->have_posts()) {
                $posts_query->the_post();
                $posts_without_ajax[] = get_permalink(get_the_ID());
            }
        }

        wp_reset_postdata();

        return $posts_without_ajax;
    }
}

if(!function_exists('burst_mikado_is_ajax_enabled')) {
    /**
     * Function that checks if ajax is enabled.
     * @return bool
     *
     * @version 0.1
     */
    function burst_mikado_is_ajax_enabled() {
        global $burst_mikado_options;

        $has_ajax = false;

        if(isset($burst_mikado_options['page_transitions']) && $burst_mikado_options['page_transitions'] !== '0') {
            $has_ajax = true;
        }

        return $has_ajax;
    }
}

if(!function_exists('burst_mikado_is_ajax_header_animation_enabled')) {
    /**
     * Function that checks if header animation with ajax is enabled.
     * @return boolean
     *
     * @version 0.1
     */
    function burst_mikado_is_ajax_header_animation_enabled() {
        global $burst_mikado_options;

        $has_header_animation = false;

        if(isset($burst_mikado_options['page_transitions']) && $burst_mikado_options['page_transitions'] !== '0' && isset($burst_mikado_options['ajax_animate_header']) && $burst_mikado_options['ajax_animate_header'] == 'yes') {
            $has_header_animation = true;
        }

        return $has_header_animation;
    }
}

if(!function_exists('burst_mikado_maintenance_mode')) {
    /**
     * Function that redirects user to desired landing page if maintenance mode is turned on in options
     */
    function burst_mikado_maintenance_mode() {
        global $burst_mikado_options;

        $protocol = is_ssl() ? "https://" : "http://";
        if(isset($burst_mikado_options['mkd_maintenance_mode']) && $burst_mikado_options['mkd_maintenance_mode'] == 'yes' && isset($burst_mikado_options['mkd_maintenance_page']) && $burst_mikado_options['mkd_maintenance_page'] != ""
            && !in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'))
            && !is_admin()
            && !is_user_logged_in()
            && $protocol.getenv('SERVER_NAME').getenv('REQUEST_URI') != get_permalink($burst_mikado_options['mkd_maintenance_page'])
        ) {

            wp_redirect(get_permalink($burst_mikado_options['mkd_maintenance_page']));
            exit;
        }
    }
}

if(!function_exists('burst_mikado_initial_maintenance')) {
    /**
     * Function that initalize maintenance function
     */
    function burst_mikado_initial_maintenance() {
        global $burst_mikado_options;

        if(isset($burst_mikado_options['mkd_maintenance_mode']) && $burst_mikado_options['mkd_maintenance_mode'] == 'yes') {
            add_action('init', 'burst_mikado_maintenance_mode', 2);
        }
    }

    add_action('init', 'burst_mikado_initial_maintenance', 1);
}

if(!function_exists('burst_mikado_horizontal_slider_icon_classes')) {
    /**
     * Returns classes for left and right arrow for sliders
     *
     * @param $icon_class
     * @return array
     */
    function burst_mikado_horizontal_slider_icon_classes($icon_class) {

        switch($icon_class) {
            case 'arrow_carrot-left_alt2':
                $left_icon_class = 'arrow_carrot-left_alt2';
                $right_icon_class = 'arrow_carrot-right_alt2';
                break;
            case 'arrow_carrot-2left_alt2':
                $left_icon_class = 'arrow_carrot-2left_alt2';
                $right_icon_class = 'arrow_carrot-2right_alt2';
                break;
            case 'arrow_triangle-left_alt2':
                $left_icon_class = 'arrow_triangle-left_alt2';
                $right_icon_class = 'arrow_triangle-right_alt2';
                break;
            case 'icon-arrows-drag-left-dashed':
                $left_icon_class = 'icon-arrows-drag-left-dashed';
                $right_icon_class = 'icon-arrows-drag-right-dashed';
                break;
            case 'icon-arrows-drag-left-dashed':
                $left_icon_class = 'icon-arrows-drag-left-dashed';
                $right_icon_class = 'icon-arrows-drag-right-dashed';
                break;
            case 'icon-arrows-left-double-32':
                $left_icon_class = 'icon-arrows-left-double-32';
                $right_icon_class = 'icon-arrows-right-double';
                break;
            case 'icon-arrows-slide-left1':
                $left_icon_class = 'icon-arrows-slide-left1';
                $right_icon_class = 'icon-arrows-slide-right1';
                break;
            case 'icon-arrows-slide-left2':
                $left_icon_class = 'icon-arrows-slide-left2';
                $right_icon_class = 'icon-arrows-slide-right2';
                break;
            case 'icon-arrows-slim-left-dashed':
                $left_icon_class = 'icon-arrows-slim-left-dashed';
                $right_icon_class = 'icon-arrows-slim-right-dashed';
                break;
            case 'ion-arrow-left-a':
                $left_icon_class = 'ion-arrow-left-a';
                $right_icon_class = 'ion-arrow-right-a';
                break;
            case 'ion-arrow-left-b':
                $left_icon_class = 'ion-arrow-left-b';
                $right_icon_class = 'ion-arrow-right-b';
                break;
            case 'ion-arrow-left-c':
                $left_icon_class = 'ion-arrow-left-c';
                $right_icon_class = 'ion-arrow-right-c';
                break;
            case 'ion-ios-arrow-':
                $left_icon_class = $icon_class.'left';
                $right_icon_class = $icon_class.'right';
                break;
            case 'ion-ios-forward':
                $left_icon_class = 'ion-ios-arrow-back';
                $right_icon_class = 'ion-ios-arrow-forward';
                break;
            case 'ion-ios-fastforward':
                $left_icon_class = 'ion-ios-rewind';
                $right_icon_class = 'ion-ios-fastforward';
                break;
            case 'ion-ios-fastforward-outline':
                $left_icon_class = 'ion-ios-rewind-outline';
                $right_icon_class = 'ion-ios-fastforward-outline';
                break;
            case 'ion-ios-skipbackward':
                $left_icon_class = 'ion-ios-skipbackward';
                $right_icon_class = 'ion-ios-skipforward';
                break;
            case 'ion-ios-skipbackward-outline':
                $left_icon_class = 'ion-ios-skipbackward-outline';
                $right_icon_class = 'ion-ios-skipforward-outline';
                break;
            case 'ion-android-arrow-':
                $left_icon_class = $icon_class.'back';
                $right_icon_class = $icon_class.'forward';
                break;
            case 'ion-android-arrow-dropleft-circle':
                $left_icon_class = 'ion-android-arrow-dropleft-circle';
                $right_icon_class = 'ion-android-arrow-dropright-circle';
                break;
            default:
                $left_icon_class = $icon_class.'left';
                $right_icon_class = $icon_class.'right';
        }

        $icon_classes = array(
            'left_icon_class' => $left_icon_class,
            'right_icon_class' => $right_icon_class
        );

        return $icon_classes;

    }

}

if(!function_exists('burst_mikado_get_side_menu_icon_html')) {
    /**
     * Function that outputs html for side area icon opener.
     * Uses $burst_mikado_IconCollections global variable
     * @return string generated html
     */
    function burst_mikado_get_side_menu_icon_html() {
        global $burst_mikado_IconCollections, $burst_mikado_options;

        $icon_html = '';

        if(isset($burst_mikado_options['side_area_button_icon_pack']) && $burst_mikado_options['side_area_button_icon_pack'] !== '') {
            $icon_pack = $burst_mikado_options['side_area_button_icon_pack'];
            if ($icon_pack !== '') {
                $icon_collection_obj = $burst_mikado_IconCollections->getIconCollection($icon_pack);
                $icon_field_name = 'side_area_icon_'. $icon_collection_obj->param;

                if(isset($burst_mikado_options[$icon_field_name]) && $burst_mikado_options[$icon_field_name] !== ''){
                    $icon_single = $burst_mikado_options[$icon_field_name];

                    if (method_exists($icon_collection_obj, 'render')) {
                        $icon_html = $icon_collection_obj->render($icon_single);
                    }
                }
            }
        }

        return $icon_html;
    }
}

if (!function_exists('burst_mikado_vc_grid_elements_enabled')) {

    /**
     * Function that checks if Visual Composer Grid Elements are enabled
     *
     * @return bool
     */
    function burst_mikado_vc_grid_elements_enabled() {

        global $burst_mikado_options;
        $vc_grid_enabled = false;

        if (isset($burst_mikado_options['enable_grid_elements']) && $burst_mikado_options['enable_grid_elements'] == 'yes') {

            $vc_grid_enabled = true;

        }

        return $vc_grid_enabled;

    }

}

if(!function_exists('burst_mikado_visual_composer_grid_elements')) {

    /**
     * Removes Visual Composer Grid Elements post type if VC Grid option disabled
     * and enables Visual Composer Grid Elements post type
     * if VC Grid option enabled
     */
    function burst_mikado_visual_composer_grid_elements() {

        if(!burst_mikado_vc_grid_elements_enabled()){

            remove_action( 'init', 'vc_grid_item_editor_create_post_type' );

        }
    }

    add_action('vc_after_init', 'burst_mikado_visual_composer_grid_elements', 12);
}

if(!function_exists('burst_mikado_grid_elements_ajax_disable')) {
    /**
     * Function that disables ajax transitions if grid elements are enabled in theme options
     */
    function burst_mikado_grid_elements_ajax_disable() {
        global $burst_mikado_options;

        if(burst_mikado_vc_grid_elements_enabled()) {
            $burst_mikado_options['page_transitions'] = '0';
        }
    }

    add_action('wp', 'burst_mikado_grid_elements_ajax_disable');
}

if(!function_exists('burst_mikado_get_dynamic_sidebar')){
    /**
     * Return Custom Widget Area content
     *
     * @return string
     */
    function burst_mikado_get_dynamic_sidebar($index = 1){
        $sidebar_contents = "";
        ob_start();
        dynamic_sidebar($index);
        $sidebar_contents = ob_get_clean();
        return $sidebar_contents;
    }
}

if ( ! function_exists( 'burst_mikado_is_gutenberg_installed' ) ) {
    /**
     * Function that checks if Gutenberg plugin installed
     * @return bool
     */
    function burst_mikado_is_gutenberg_installed() {
        return function_exists( 'is_gutenberg_page' ) && is_gutenberg_page();
    }
}

if ( ! function_exists('burst_mikado_is_wp_gutenberg_installed') ) {
    /**
     * Function that checks if WordPress 5.x with Gutenberg editor installed
     *
     * @return bool
     */
    function burst_mikado_is_wp_gutenberg_installed() {
        return class_exists( 'WP_Block_Type' );
    }
}

if ( ! function_exists( 'burst_mikado_enqueue_editor_customizer_styles' ) ) {
    /**
     * Enqueue supplemental block editor styles
     */
    function burst_mikado_enqueue_editor_customizer_styles() {
        $protocol = is_ssl() ? 'https:' : 'http:';
        //include default google font that theme is using
        $default_fonts_args          = array(
            'family' => urlencode( 'Raleway:300,400,600,700' ),
            'subset' => urlencode( 'latin-ext' ),
        );
        $burst_global_fonts = add_query_arg( $default_fonts_args, $protocol . '//fonts.googleapis.com/css' );
        wp_enqueue_style( 'burst-mikado-editor-google-fonts', esc_url_raw( $burst_global_fonts ) );

        wp_enqueue_style( 'burst-mikado-editor-customizer-style', BURST_MIKADO_CSS_ROOT . '/admin/editor-customizer-style.css' );
        wp_enqueue_style( 'burst-mikado-editor-blocks-style', BURST_MIKADO_CSS_ROOT . '/admin/editor-blocks-style.css' );
    }

    add_action( 'enqueue_block_editor_assets', 'burst_mikado_enqueue_editor_customizer_styles' );
}