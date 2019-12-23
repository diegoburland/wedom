<?php
$burst_mikado_IconCollections = burst_mikado_return_icon_collections();


/*** Removing shortcodes ***/

vc_remove_element("vc_wp_search");
vc_remove_element("vc_wp_meta");
vc_remove_element("vc_wp_recentcomments");
vc_remove_element("vc_wp_calendar");
vc_remove_element("vc_wp_pages");
vc_remove_element("vc_wp_tagcloud");
vc_remove_element("vc_wp_custommenu");
vc_remove_element("vc_wp_text");
vc_remove_element("vc_wp_posts");
vc_remove_element("vc_wp_links");
vc_remove_element("vc_wp_categories");
vc_remove_element("vc_wp_archives");
vc_remove_element("vc_wp_rss");
vc_remove_element("vc_teaser_grid");
vc_remove_element("vc_button");
vc_remove_element("vc_cta_button");
vc_remove_element("vc_cta_button2");
vc_remove_element("vc_message");
vc_remove_element("vc_tour");
vc_remove_element("vc_progress_bar");
vc_remove_element("vc_pie");
vc_remove_element("vc_posts_slider");
vc_remove_element("vc_toggle");
vc_remove_element("vc_images_carousel");
vc_remove_element("vc_posts_grid");
vc_remove_element("vc_carousel");
vc_remove_element("vc_gmaps");
vc_remove_element("vc_cta");
vc_remove_element("vc_round_chart");
vc_remove_element("vc_line_chart");
vc_remove_element("vc_tta_accordion");
vc_remove_element("vc_tta_tour");
vc_remove_element("vc_tta_tabs");
vc_remove_element("vc_section");


/***Remove Grid Elements if disabled ***/

if (!burst_mikado_vc_grid_elements_enabled() && version_compare(burst_mikado_get_vc_version(), '4.4.2') >= 0) {
	vc_remove_element('vc_basic_grid');
	vc_remove_element('vc_media_grid');
	vc_remove_element('vc_masonry_grid');
	vc_remove_element('vc_masonry_media_grid');
	vc_remove_element('vc_icon');
	vc_remove_element('vc_button2');
	vc_remove_element("vc_custom_heading");
	vc_remove_element("vc_btn");
}


/*** Remove unused parameters ***/

if (function_exists('vc_remove_param')) {
	vc_remove_param('vc_single_image', 'css_animation');
	vc_remove_param('vc_single_image', 'title');
	vc_remove_param('vc_gallery', 'title');
	vc_remove_param('vc_column_text', 'css_animation');
    vc_remove_param('vc_row', 'video_bg');
    vc_remove_param('vc_row', 'video_bg_url');
    vc_remove_param('vc_row', 'video_bg_parallax');
    vc_remove_param('vc_row', 'full_height');
    vc_remove_param('vc_row', 'content_placement');
	vc_remove_param('vc_row', 'full_width');
	vc_remove_param('vc_row', 'bg_image');
	vc_remove_param('vc_row', 'bg_color');
	vc_remove_param('vc_row', 'font_color');
	vc_remove_param('vc_row', 'margin_bottom');
	vc_remove_param('vc_row', 'bg_image_repeat');
	vc_remove_param( "vc_row", "css" );
	vc_remove_param( "vc_row", "css_animation" );
	vc_remove_param( "vc_row_inner", "css" );
	vc_remove_param('vc_tabs', 'interval');
	vc_remove_param('vc_tabs', 'title');
	vc_remove_param('vc_separator', 'style');
	vc_remove_param('vc_separator', 'color');
	vc_remove_param('vc_separator', 'accent_color');
	vc_remove_param('vc_separator', 'el_width');
	vc_remove_param('vc_text_separator', 'style');
	vc_remove_param('vc_text_separator', 'color');
	vc_remove_param('vc_text_separator', 'accent_color');
	vc_remove_param('vc_text_separator', 'el_width');
	vc_remove_param('vc_text_separator', 'title_align');
	vc_remove_param('vc_accordion', 'title');
	vc_remove_param('vc_row', 'gap');
    vc_remove_param('vc_row', 'columns_placement');
    vc_remove_param('vc_row', 'equal_height');
    vc_remove_param('vc_row_inner', 'gap');
    vc_remove_param('vc_row_inner', 'content_placement');
    vc_remove_param('vc_row_inner', 'equal_height');
    vc_remove_param('vc_row', 'parallax_speed_video');
    vc_remove_param('vc_row', 'parallax_speed_bg');
    vc_remove_param('vc_row_inner', 'disable_element');
    vc_remove_param('vc_row', 'disable_element');


    //remove vc parallax functionality
    vc_remove_param('vc_row', 'parallax');
    vc_remove_param('vc_row', 'parallax_image');

	if(version_compare(burst_mikado_get_vc_version(), '4.4.2') >= 0) {
		vc_remove_param('vc_accordion', 'disable_keyboard');
		vc_remove_param('vc_separator', 'align');
		vc_remove_param('vc_separator', 'border_width');
		vc_remove_param('vc_text_separator', 'align');
		vc_remove_param('vc_text_separator', 'border_width');
	}

    add_action( 'init', 'burst_mikado_remove_vc_image_zoom',11);
    function burst_mikado_remove_vc_image_zoom() {
        //Remove zoom from click action on single image
        $param = WPBMap::getParam( 'vc_single_image', 'onclick' );
        unset($param['value']['Zoom']);
        vc_update_shortcode_param( 'vc_single_image', $param );
    }
    vc_remove_param('vc_text_separator', 'css');
    vc_remove_param('vc_separator', 'css');

}


/*** Remove unused parameters from grid elements ***/

if (function_exists('vc_remove_param') && burst_mikado_vc_grid_elements_enabled() && version_compare(burst_mikado_get_vc_version(), '4.4.2') >= 0) {
	vc_remove_param('vc_basic_grid', 'button_style');
	vc_remove_param('vc_basic_grid', 'button_color');
	vc_remove_param('vc_basic_grid', 'button_size');
	vc_remove_param('vc_basic_grid', 'filter_color');
	vc_remove_param('vc_basic_grid', 'filter_style');
	vc_remove_param('vc_media_grid', 'button_style');
	vc_remove_param('vc_media_grid', 'button_color');
	vc_remove_param('vc_media_grid', 'button_size');
	vc_remove_param('vc_media_grid', 'filter_color');
	vc_remove_param('vc_media_grid', 'filter_style');
	vc_remove_param('vc_masonry_grid', 'button_style');
	vc_remove_param('vc_masonry_grid', 'button_color');
	vc_remove_param('vc_masonry_grid', 'button_size');
	vc_remove_param('vc_masonry_grid', 'filter_color');
	vc_remove_param('vc_masonry_grid', 'filter_style');
	vc_remove_param('vc_masonry_media_grid', 'button_style');
	vc_remove_param('vc_masonry_media_grid', 'button_color');
	vc_remove_param('vc_masonry_media_grid', 'button_size');
	vc_remove_param('vc_masonry_media_grid', 'filter_color');
	vc_remove_param('vc_masonry_media_grid', 'filter_style');
	vc_remove_param('vc_basic_grid', 'paging_color');
	vc_remove_param('vc_basic_grid', 'arrows_color');
	vc_remove_param('vc_media_grid', 'paging_color');
	vc_remove_param('vc_media_grid', 'arrows_color');
	vc_remove_param('vc_masonry_grid', 'paging_color');
	vc_remove_param('vc_masonry_grid', 'arrows_color');
	vc_remove_param('vc_masonry_media_grid', 'paging_color');
	vc_remove_param('vc_masonry_media_grid', 'arrows_color');
}


/*** Remove frontend editor ***/

if(function_exists('vc_disable_frontend')){
	vc_disable_frontend();
}

$animations = array(
	esc_html__( "No animations", 'burst' ) => "",
	esc_html__( "Elements Shows From Left Side", 'burst' ) => "element_from_left",
	esc_html__( "Elements Shows From Right Side", 'burst' ) => "element_from_right",
	esc_html__( "Elements Shows From Top Side", 'burst' ) => "element_from_top",
	esc_html__( "Elements Shows From Bottom Side", 'burst' ) => "element_from_bottom",
	esc_html__( "Elements Shows From Fade", 'burst' ) => "element_from_fade"
);
$font_weight_array = array(
	esc_html__( "Default", 'burst' ) => "",
	esc_html__( "Thin 100", 'burst' ) => "100",
	esc_html__( "Extra-Light 200", 'burst' ) => "200",
	esc_html__( "Light 300", 'burst' ) => "300",
	esc_html__( "Regular 400", 'burst' ) => "400",
	esc_html__( "Medium 500", 'burst' ) => "500",
	esc_html__( "Semi-Bold 600", 'burst' ) => "600",
	esc_html__( "Bold 700", 'burst' ) => "700",
	esc_html__( "Extra-Bold 800", 'burst' ) => "800",
	esc_html__( "Ultra-Bold 900", 'burst' ) => "900"
);
$social_icons_array = array(
	"" => "",
	esc_html__( "ADN", 'burst' ) => "fa-adn",
	esc_html__( "Android", 'burst' ) => "fa-android",
	esc_html__( "Apple", 'burst' ) => "fa-apple",
	esc_html__( "Bitbucket", 'burst' ) => "fa-bitbucket",
	esc_html__( "Bitbucket-Sign", 'burst' ) => "fa-bitbucket-sign",
	esc_html__( "Bitcoin", 'burst' ) => "fa-bitcoin",
	esc_html__( "BTC", 'burst' ) => "fa-btc",
	esc_html__( "CSS3", 'burst' ) => "fa-css3",
	esc_html__( "Dribbble", 'burst' ) => "fa-dribbble",
	esc_html__( "Dropbox", 'burst' ) => "fa-dropbox",
	esc_html__( "Facebook", 'burst' ) => "fa-facebook",
	esc_html__( "Facebook-Sign", 'burst' ) => "fa-facebook-sign",
	esc_html__( "Flickr", 'burst' ) => "fa-flickr",
	esc_html__( "Foursquare", 'burst' ) => "fa-foursquare",
	esc_html__( "GitHub", 'burst' ) => "fa-github",
	esc_html__( "GitHub-Alt", 'burst' ) => "fa-github-alt",
	esc_html__( "GitHub-Sign", 'burst' ) => "fa-github-sign",
	esc_html__( "Gittip", 'burst' ) => "fa-gittip",
	esc_html__( "Google Plus", 'burst' ) => "fa-google-plus",
	esc_html__( "Google Plus-Sign", 'burst' ) => "fa-google-plus-sign",
	esc_html__( "HTML5", 'burst' ) => "fa-html5",
	esc_html__( "Instagram", 'burst' ) => "fa-instagram",
	esc_html__( "LinkedIn", 'burst' ) => "fa-linkedin",
	esc_html__( "LinkedIn-Sign", 'burst' ) => "fa-linkedin-sign",
	esc_html__( "Linux", 'burst' ) => "fa-linux",
	esc_html__( "MaxCDN", 'burst' ) => "fa-maxcdn",
	esc_html__( "Paypal", 'burst' ) => "fa-paypal",
	esc_html__( "Pinterest", 'burst' ) => "fa-pinterest",
	esc_html__( "Pinterest-Sign", 'burst' ) => "fa-pinterest-sign",
	esc_html__( "Renren", 'burst' ) => "fa-renren",
	esc_html__( "Skype", 'burst' ) => "fa-skype",
	esc_html__( "StackExchange", 'burst' ) => "fa-stackexchange",
	esc_html__( "Trello", 'burst' ) => "fa-trello",
	esc_html__( "Tumblr", 'burst' ) => "fa-tumblr",
	esc_html__( "Tumblr-Sign", 'burst' ) => "fa-tumblr-sign",
	esc_html__( "Twitter", 'burst' ) => "fa-twitter",
	esc_html__( "Twitter-Sign", 'burst' ) => "fa-twitter-sign",
	esc_html__( "VK", 'burst' ) => "fa-vk",
	esc_html__( "Weibo", 'burst' ) => "fa-weibo",
	esc_html__( "Windows", 'burst' ) => "fa-windows",
	esc_html__( "Xing", 'burst' ) => "fa-xing",
	esc_html__( "Xing-Sign", 'burst' ) => "fa-xing-sign",
	esc_html__( "YouTube", 'burst' ) => "fa-youtube",
	esc_html__( "YouTube Play", 'burst' ) => "fa-youtube-play",
	esc_html__( "YouTube-Sign", 'burst' ) => "fa-youtube-sign"
);

/*** Accordion ***/

vc_add_param("vc_accordion", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Style", 'burst' ),
	"param_name" => "style",
	"value" => array(
		esc_html__( "Accordion", 'burst' ) => "accordion",
		esc_html__( "Toggle", 'burst' ) => "toggle",
        esc_html__( "Boxed Accordion", 'burst' ) => "boxed_accordion",
        esc_html__( "Boxed Toggle", 'burst' ) => "boxed_toggle"
	),
    "save_always" => true
));

vc_add_param("vc_accordion", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Accordion Title Border Radius", 'burst' ),
	"param_name" => "accordion_section_border_radius",
	"value" => "",
	"dependency" => Array('element' => "style", 'value' => array('boxed_accordion', 'boxed_toggle'))
));

vc_add_param("vc_accordion", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Accordion Mark Border Radius", 'burst' ),
	"param_name" => "accordion_border_radius",
	"value" => "",
	"dependency" => Array('element' => "style", 'value' => array('accordion', 'toggle'))
));

vc_add_param("vc_accordion", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Accordion Title Height", 'burst' ),
	"param_name" => "accordion_section_height",
	"value" => ""
));

vc_add_param("vc_accordion", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Hide Icon", 'burst' ),
	"param_name" => "hide_icon",
	"value" => array(
		esc_html__( "Yes", 'burst' ) => "yes",
		esc_html__( "No", 'burst' ) => "no"),
    "save_always" => true
));
vc_add_param("vc_accordion", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Title Alignment", 'burst' ),
	"param_name" => "title_alignment",
	"value" => array(
		"" => "",
		esc_html__( "Left", 'burst' ) => "left",
		esc_html__( "Right", 'burst' ) => "right",
		esc_html__( "Center", 'burst' ) => "center",
		),
	"dependency" => Array('element' =>  "hide_icon", 'value' => "yes")
));

vc_add_param("vc_accordion", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Title and Icon Alignment", 'burst' ),
	"param_name" => "title_icon_alignment",
	"value" => array(
		"" => "",
		esc_html__( "Icon on Left", 'burst' ) => "icon_left",
		esc_html__( "Text on Left", 'burst' ) => "text_left",
		esc_html__( "Icon and Text on Left", 'burst' ) => "icon_left_text_left"
		),
	"description" => esc_html__( "This option is only used for boxed accordions.", 'burst' ),
	"dependency" => Array('element' => "hide_icon", 'value' => "no")
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Title Color", 'burst' ),
	"param_name" => "title_color",
	"value" => ""
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Title Hover Color", 'burst' ),
	"param_name" => "title_hover_color",
	"value" => ""
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Mark Icon Color", 'burst' ),
	"param_name" => "mark_icon_color",
	"value" => ""
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Mark Icon Hover Color", 'burst' ),
	"param_name" => "mark_icon_color_hover",
	"value" => ""
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Title Background Color", 'burst' ),
	"param_name" => "background_color",
	"value" => "",
	"description" => esc_html__( "This option is only used for boxed accordions", 'burst' )
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Title Background Hover Color", 'burst' ),
	"param_name" => "background_hover_color",
	"value" => "",
	"description" => esc_html__( "This option is only used for boxed accordions", 'burst' )
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Title Border Color", 'burst' ),
	"param_name" => "border_color",
	"value" => "",
	"description" => esc_html__( "This option is only used for boxed accordions", 'burst' )
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Title Border Hover Color", 'burst' ),
	"param_name" => "border_hover_color",
	"value" => "",
	"description" => esc_html__( "This option is only used for boxed accordions", 'burst' )
));

vc_add_param("vc_accordion_tab", array(
	"type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Title Tag", 'burst' ),
    "param_name" => "title_tag",
    "value" => array(
        ""   => "",
		"p"  => "p",
        esc_html__( "h2", 'burst' ) => "h2",
        esc_html__( "h3", 'burst' ) => "h3",
        esc_html__( "h4", 'burst' ) => "h4",	
        esc_html__( "h5", 'burst' ) => "h5",
        esc_html__( "h6", 'burst' ) => "h6",
    )
));


/*** Tabs ***/

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Style", 'burst' ),
	"param_name" => "style",
	"value" => array(
		esc_html__( "Horizontal Center", 'burst' ) => "horizontal",
		esc_html__( "Horizontal Center With Icons", 'burst' ) => "horizontal_with_icons",
		esc_html__( "Horizontal Center With Text And Icons", 'burst' ) => "horizontal_with_text_and_icons",
		esc_html__( "Horizontal Left", 'burst' ) => "horizontal_left",
		esc_html__( "Horizontal Left With Icons", 'burst' ) => "horizontal_left_with_icons",
		esc_html__( "Horizontal Left With Text And Icons", 'burst' ) => "horizontal_left_with_text_and_icons",
		esc_html__( "Horizontal Right", 'burst' ) => "horizontal_right",
		esc_html__( "Horizontal Right With Icons", 'burst' ) => "horizontal_right_with_icons",
		esc_html__( "Horizontal Right With Text And Icons", 'burst' ) => "horizontal_right_with_text_and_icons",
		esc_html__( "Vertical Left", 'burst' ) => "vertical_left",
		esc_html__( "Vertical Left With Icons", 'burst' ) => "vertical_left_with_icons",
        esc_html__( "Vertical Left With Text and Icons", 'burst' ) => "vertical_left_with_text_and_icons",
		esc_html__( "Vertical Right", 'burst' ) => "vertical_right",
        esc_html__( "Vertical Right With Icons", 'burst' ) => "vertical_right_with_icons",
        esc_html__( "Vertical Right With Text and Icons", 'burst' ) => "vertical_right_with_text_and_icons",
	),
    "save_always" => true
));

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Tab Type", 'burst' ),
	"param_name" => "tab_type_default",
	"value" => array(
		esc_html__( "Default", 'burst' ) => "default",
		esc_html__( "With Borders", 'burst' ) => "with_borders"
	),
    "save_always" => true,
	"dependency" => Array('element' => "style", 'value' => array('horizontal','horizontal_left','horizontal_right', 'vertical_left', 'vertical_right','horizontal_with_text_and_icons','horizontal_left_with_text_and_icons','horizontal_right_with_text_and_icons','vertical_left_with_text_and_icons','vertical_right_with_text_and_icons'))
));

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Tab Type", 'burst' ),
	"param_name" => "tab_type_icons",
	"value" => array(
		esc_html__( "Default", 'burst' ) => "default",
		esc_html__( "With Borders", 'burst' ) => "with_borders",
		esc_html__( "With Lines", 'burst' ) => "with_lines"
	),
    "save_always" => true,
	"dependency" => Array('element' => "style", 'value' => array('horizontal_with_icons','horizontal_left_with_icons','horizontal_right_with_icons', 'vertical_left_with_icons', 'vertical_right_with_icons'))
));

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Border Type", 'burst' ),
	"param_name" => "border_type_default",
	"value" => array(
		esc_html__( "Border Arround Tabs", 'burst' ) => "border_arround_element",
		esc_html__( "Border Arround Active Tab", 'burst' ) => "border_arround_active_tab"
	),
    "save_always" => true,
	"dependency" => Array('element' => "tab_type_default", 'value' => array('with_borders'))
));

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Border Type", 'burst' ),
	"param_name" => "border_type_icons",
	"value" => array(
		esc_html__( "Border Around Tabs", 'burst' ) => "border_arround_element",
		esc_html__( "Border Around Active Tab", 'burst' ) => "border_arround_active_tab"
	),
    "save_always" => true,
	"dependency" => Array('element' => "tab_type_icons", 'value' => array('with_borders'))
));

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Margin Between Tabs", 'burst' ),
	"param_name" => "margin_between_tabs",
	"value" => array(
		esc_html__( "Yes", 'burst' ) => "enable_margin",
		esc_html__( "No", 'burst' ) => "disable_margin"
	),
    "save_always" => true,
    "dependency" => Array('element' => "tab_type_default", 'value' => array('with_borders'))
));

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Margin Between Tabs", 'burst' ),
	"param_name" => "icons_margin_between_tabs",
	"value" => array(
		esc_html__( "Yes", 'burst' ) => "enable_margin",
		esc_html__( "No", 'burst' ) => "disable_margin"
	),
    "save_always" => true,
	"dependency" => Array('element' => "border_type_icons", 'value' => array('border_arround_element'))
));

vc_add_param("vc_tabs", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Space Between Tab and Content (px)", 'burst' ),
    "param_name" => "space_between_tab_and_content",
    "value" => "",
    "description" => esc_html__( "Insert value for space between Tab and Content (default value is 18px)", 'burst' ),
    "dependency" => Array('element' => "style", 'value' => array('horizontal_with_icons','horizontal_left_with_icons','horizontal_right_with_icons','horizontal','horizontal_left','horizontal_right','horizontal_with_text_and_icons','horizontal_left_with_text_and_icons','horizontal_right_with_text_and_icons','vertical_left_with_text_and_icons','vertical_right_with_text_and_icons'))
));

vc_add_param("vc_tabs", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Border arround Content", 'burst' ),
    "param_name" => "show_content_border",
	"value" => array(
		esc_html__( "No", 'burst' ) => "no",
		esc_html__( "Yes", 'burst' ) => "yes"	 
	),
    "save_always" => true
));

vc_add_param("vc_tabs", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Content Padding", 'burst' ),
    "param_name" => "content_padding",
	"value" => "",
    "description" => esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'burst' )
));


vc_add_param("vc_tabs", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Border Radius (px)", 'burst' ),
    "param_name" => "tab_border_radius",
    "value" => ""  
));

vc_add_param("vc_tabs", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Icon Position", 'burst' ),
    "param_name" => "tab_icon_position",
    "value" => array(
        esc_html__( "Left", 'burst' ) => "left",
        esc_html__( "Right", 'burst' ) => "right"
    ),
    "save_always" => true,
    "dependency" => Array('element' => "style", 'value' => array('horizontal_with_text_and_icons','horizontal_left_with_text_and_icons','horizontal_right_with_text_and_icons','vertical_left_with_text_and_icons','vertical_right_with_text_and_icons'))
));

vc_add_param("vc_tab", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Icon Pack", 'burst' ),
    "param_name" => $burst_mikado_IconCollections->iconPackParamName,
    "value" => $burst_mikado_IconCollections->getIconCollectionsVC(),
    "save_always" => true
));

foreach ($burst_mikado_IconCollections->iconCollections as $collection_key => $collection ) {
    vc_add_param("vc_tab", array(
        "type" => "dropdown",
        "class" => "",
        "heading" => esc_html__( "Icon", 'burst' ),
        "param_name" => $collection->param,
        "value" => $collection->getIconsArray(),
        "save_always" => true,
        "dependency" => Array('element' => $burst_mikado_IconCollections->iconPackParamName, 'value' => array($collection_key))
    ));
}


/*** Flickr Widget ***/

vc_add_param("vc_flickr", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Columns", 'burst' ),
    "param_name" => "columns",
    "value" => array(
        esc_html__( "Two", 'burst' ) => "two",
        esc_html__( "Three", 'burst' ) => "three",
        esc_html__( "Four", 'burst' ) => "four"
    ),
    "save_always" => true
));


/*** Empty Space ***/

vc_add_param("vc_empty_space",  array(
        "type" => "attach_image",
        "holder" => "div",
        'heading' => esc_html__( 'Background Image', 'burst' ),
        'param_name' => 'background_image',
        'value' => '',
        'description' => esc_html__( 'Select image from media library.', 'burst' ),
    )
);
vc_add_param("vc_empty_space",  array(
        "type" => "dropdown",
        'heading' => esc_html__( 'Image Repeat', 'burst' ),
        'param_name' => 'image_repeat',
        "value" => array(
            esc_html__( 'No Repeat', 'burst' ) => 'no-repeat',
            esc_html__( 'Repeat x', 'burst' ) => 'repeat-x',
            esc_html__( 'Repeat y', 'burst' ) => 'repeat-y',
            esc_html__( 'Repeat (x y)', 'burst' ) => 'repeat'
        ),
        "save_always" => true
    )
);

/*** Gallery ***/

vc_add_param("vc_gallery", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Column Number", 'burst' ),
	"param_name" => "column_number",
	 "value" => array(2, 3, 4, 5, "Disable" => 0),
    "save_always" => true,
	 "dependency" => Array('element' => "type", 'value' => array('image_grid'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Grayscale Images", 'burst' ),
    "param_name" => "grayscale",
    "value" => array(
    	esc_html__('No', 'burst' ) => 'no',
		esc_html__('Yes', 'burst') => 'yes'
	),
    "save_always" => true,
    "dependency" => Array('element' => "type", 'value' => array('image_grid'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Frame", 'burst' ),
    "param_name" => "frame",
	"value" => array("Use frame?" => "use_frame"),
	"value" => array(
		'' => '',
		esc_html__( 'Yes', 'burst' ) => 'use_frame',
		esc_html__( 'No', 'burst' ) => 'no'
	),
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide'))
));

vc_add_param("vc_gallery", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Choose Frame", 'burst' ),
	"param_name" => "choose_frame",
	"value" => array(
		esc_html__( 'Default', 'burst' ) => 'default',
		esc_html__( 'Frame 1', 'burst' ) => 'frame1',
		esc_html__( 'Frame 2', 'burst' ) => 'frame2',
		esc_html__( 'Frame 3', 'burst' ) => 'frame3',
		esc_html__( 'Frame 4', 'burst' ) => 'frame4'
	),
    "save_always" => true,
	"dependency" => Array('element' => "frame", 'value' => array('use_frame'))
));

vc_add_param("vc_gallery", array(
    "type" => "checkbox",
    "class" => "",
    "heading" => esc_html__( "Show image title?", 'burst' ),
    "param_name" => "show_image_title",
    "value" => array("Show image title in the bottom of image" => "show_image_title"),
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide', 'flexslider_fade'))
));

vc_add_param("vc_gallery", array(
    "type" => "checkbox",
    "class" => "",
    "heading" => esc_html__( "Disable navigation arrows?", 'burst' ),
    "param_name" => "disable_navigation_arrows",
    "value" => array("Disable navigation arrows" => "yes"),
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide', 'flexslider_fade'))
));

vc_add_param("vc_gallery",array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Navigation Arrows Color", 'burst' ),
	"param_name" => "arrows_color",
	"value" => "",
	"dependency" => Array('element' => "type", 'value' => array('flexslider_slide', 'flexslider_fade'))
));

vc_add_param("vc_gallery",array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Navigation Arrows Hover Color", 'burst' ),
	"param_name" => "arrows_hover_color",
	"value" => "",
	"dependency" => Array('element' => "type", 'value' => array('flexslider_slide', 'flexslider_fade'))
));

vc_add_param("vc_gallery", array(
    "type" => "checkbox",
    "class" => "",
    "heading" => esc_html__( "Show navigation controls?", 'burst' ),
    "param_name" => "show_navigation_controls",
    "value" => array("Show navigation controls" => "yes"),
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide', 'flexslider_fade'))
));

vc_add_param("vc_gallery",array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Navigation Controls Background Color", 'burst' ),
	"param_name" => "bullet_bckg_color",
	"value" => "",
	"dependency" => Array('element' => "show_navigation_controls", 'value' => array('yes'))
));

vc_add_param("vc_gallery",array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Navigation Controls Active Background Color", 'burst' ),
	"param_name" => "bullet_active_bckg_color",
	"value" => "",
	"dependency" => Array('element' => "show_navigation_controls", 'value' => array('yes'))
));

vc_add_param("vc_gallery",array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Navigation Controls Border Color", 'burst' ),
	"param_name" => "bullet_brdr_color",
	"value" => "",
	"dependency" => Array('element' => "show_navigation_controls", 'value' => array('yes'))
));

vc_add_param("vc_gallery",array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Navigation Controls Active Border Color", 'burst' ),
	"param_name" => "bullet_active_brdr_color",
	"value" => "",
	"dependency" => Array('element' => "show_navigation_controls", 'value' => array('yes'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Title Alignment", 'burst' ),
    "param_name" => "title_alignment",
    "value" => array(
        esc_html__( "Left", 'burst' ) => "left",
        esc_html__( "Center", 'burst' ) => "center",
        esc_html__( "Right", 'burst' ) => "right"
    ),
    "save_always" => true,
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Title Font Family", 'burst' ),
    "param_name" => "title_font_family",
    "value" => "",
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Title Font Size (px)", 'burst' ),
    "param_name" => "title_font_size",
    "value" => "",
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Title Font Weight", 'burst' ),
    "param_name" => "title_font_weight",
    "value" => array(
        esc_html__( "Default", 'burst' ) => "",
        esc_html__( "Thin 100", 'burst' ) => "100",
        esc_html__( "Extra-Light 200", 'burst' ) => "200",
        esc_html__( "Light 300", 'burst' ) => "300",
        esc_html__( "Regular 400", 'burst' ) => "400",
        esc_html__( "Medium 500", 'burst' ) => "500",
        esc_html__( "Semi-Bold 600", 'burst' ) => "600",
        esc_html__( "Bold 700", 'burst' ) => "700",
        esc_html__( "Extra-Bold 800", 'burst' ) => "800",
        esc_html__( "Ultra-Bold 900", 'burst' ) => "900"
    ),
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Title Font Style", 'burst' ),
    "param_name" => "title_font_style",
    "value" => array(
        "" 		   => "",
        esc_html__( "Normal", 'burst' ) => "normal",
        esc_html__( "Italic", 'burst' ) => "italic"
    ),
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
	"type" => "colorpicker",
	"holder" => "div",
	"class" => "",
	"heading" => esc_html__( "Title Color", 'burst' ),
	"param_name" => "title_color",
	"value" => "",
	"dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "colorpicker",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Title Layer Color", 'burst' ),
    "param_name" => "title_layer_color",
    "value" => "",
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "colorpicker",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Background hover color", 'burst' ),
    "param_name" => "background_hover_color",
    "value" => "",
    "dependency" => Array('element' => "grayscale", 'value' => array("no"))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Border", 'burst' ),
    "param_name" => "show_border",
    "value" => array(
        esc_html__( "No", 'burst' ) => "no",
        esc_html__( "Yes", 'burst' ) => "yes"
    ),
    "description" => esc_html__( "Show border around slider", 'burst' ),
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide', 'flexslider_fade'))
));

vc_add_param("vc_gallery", array(
    "type" => "colorpicker",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Border Color", 'burst' ),
    "param_name" => "border_color",
    "value" => "",
    "dependency" => Array('element' => "show_border", 'value' => array('yes'))
));

vc_add_param("vc_gallery", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Border Width (px)", 'burst' ),
    "param_name" => "border_width",
    "value" => "",
    "dependency" => Array('element' => "show_border", 'value' => array('yes'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Choose hover icon", 'burst' ),
    "param_name" => "hover_icon",
    "value" => array(
    	esc_html__( 'None', 'burst' ) => 'none',
		esc_html__( 'Magnifier', 'burst' ) => 'magnifier',
		esc_html__( 'Plus', 'burst' ) => 'plus'
	),
    "save_always" => true,
    "dependency" => Array('element' => "grayscale", 'value' => array("no"))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Spaces between images", 'burst' ),
    "param_name" => "images_space",
	"value" => array(
		esc_html__( 'No', 'burst' ) => 'gallery_without_space',
		esc_html__( 'Yes', 'burst' ) => 'gallery_with_space'),
    "save_always" => true,
    "dependency" => Array('element' => "type", 'value' => array('image_grid'))
));



/*** Row ***/

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => esc_html__( "Row Type", 'burst' ),
	"param_name" => "row_type",
	"value" => array(
		esc_html__( "Row", 'burst' ) => "row",
		esc_html__( "Parallax", 'burst' ) => "parallax",
		esc_html__( "Expandable", 'burst' ) => "expandable",
		esc_html__( "Content menu", 'burst' ) => "content_menu"
	),
    "save_always" => true
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => esc_html__( "Use Row as Full Screen Section", 'burst' ),
	"param_name" => "use_row_as_full_screen_section",
	"value" => array(
		esc_html__( "No", 'burst' ) => "no",
		esc_html__( "Yes", 'burst' ) => "yes"
	),
    "save_always" => true,
	"description" => esc_html__( "This option works only for Full Screen Sections Template", 'burst' ),
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Type", 'burst' ),
	"param_name" => "type",
	"value" => array(
		esc_html__( "Full Width", 'burst' ) => "full_width",
		esc_html__( "In Grid", 'burst' ) => "grid"		
	),
    "save_always" => true,
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax','content_menu'))
));

vc_add_param("vc_row", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Header Style", 'burst' ),
    "param_name" => "header_style",
    "value" => array(
        "" => "",
        esc_html__( "Light", 'burst' ) => "light",
        esc_html__( "Dark", 'burst' ) => "dark"
    ),
    "dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Anchor ID (Example home)", 'burst' ),
	"param_name" => "anchor",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable'))
));
vc_add_param("vc_row", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => esc_html__( "Row in content menu", 'burst' ),
	"value" => array("Use row for content menu?" => "in_content_menu"),
	"param_name" => "in_content_menu",
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable', 'expandable_with_background'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Content menu title", 'burst' ),
	"value" => "",
	"param_name" => "content_menu_title",
	"dependency" => Array('element' => "in_content_menu", 'value' => array('in_content_menu'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Content menu icon pack", 'burst' ),
	"param_name" => $burst_mikado_IconCollections->iconPackParamName,
	"value" => $burst_mikado_IconCollections->getIconCollectionsVC(),
    "save_always" => true,
	"dependency" => Array('element' => "in_content_menu", 'value' => array('in_content_menu'))
));

foreach($burst_mikado_IconCollections->iconCollections as $collection_key => $collection) {
    vc_add_param("vc_row", array(
        "type" => "dropdown",
        "class" => "",
        "heading" => esc_html__( "Content menu icon", 'burst' ),
        "param_name" => "content_menu_".$collection->param,
        "value" => $collection->getIconsArray(),
        "save_always" => true,
        "dependency" => Array('element' => $burst_mikado_IconCollections->iconPackParamName, 'value' => array($collection_key))
    ));
}

vc_add_param("vc_row", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Angled Shape in Background", 'burst' ),
    "param_name" => "oblique_section",
    "value" => array(
        esc_html__( 'No', 'burst' ) => 'no',
        esc_html__( 'Yes', 'burst' ) => 'yes'
    ),
    "save_always" => true,
    "dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Angled Shape Top and Bottom", 'burst' ),
    "param_name" => "oblique_section_top_and_bottom",
    "value" => array(
        esc_html__( 'Default (both)', 'burst' ) => 'both',
        esc_html__( 'Only Top', 'burst' ) => 'top',
        esc_html__( 'Only Bottom', 'burst' ) => 'bottom'
    ),
    "save_always" => true,
    "dependency" => Array('element' => "oblique_section", 'value' => array('yes'))
));
vc_add_param("vc_row", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Angled Shape Position", 'burst' ),
    "param_name" => "oblique_section_position",
    "value" => array(
        esc_html__( 'From Left To Right', 'burst' ) => 'from_left_to_right',
        esc_html__( 'From Right To Left', 'burst' ) => 'from_right_to_left'
    ),
    "save_always" => true,
    "dependency" => Array('element' => "oblique_section", 'value' => array('yes'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Text Align", 'burst' ),
	"param_name" => "text_align",
	"value" => array(
		esc_html__( "Left", 'burst' ) => "left",
		esc_html__( "Center", 'burst' ) => "center",
		esc_html__( "Right", 'burst' ) => "right"
	),
    "save_always" => true,
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Row Overflow", 'burst' ),
	"param_name" => "Overflow",
	"value" => array(
		esc_html__( "Default", 'burst' ) => "",
		esc_html__( "Visible", 'burst' ) => "visible",
		esc_html__( "Hidden", 'burst' ) => "hidden"
	),
	"save_always" => true,
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Triangle Shape in Background", 'burst' ),
    "param_name" => "triangle_shape",
    "value" => array(
        esc_html__( 'No', 'burst' ) => 'no',
        esc_html__( 'Yes', 'burst' ) => 'yes'
    ),
    "save_always" => true,
    "description" => esc_html__( "Enabling this option will display a triangular shape on the row", 'burst' ),
    "dependency" => Array('element' => "row_type", 'value' => array('row', 'parallax'))
));

vc_add_param("vc_row", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Triangle Shape Position", 'burst' ),
    "param_name" => "triangle_shape_position",
    "value" => array(
        esc_html__( 'Default (both)', 'burst' ) => 'both',
        esc_html__( 'Only Top', 'burst' ) => 'top',
        esc_html__( 'Only Bottom', 'burst' ) => 'bottom'
    ),
    "save_always" => true,
    "dependency" => Array('element' => "triangle_shape", 'value' => array('yes'))
));

vc_add_param("vc_row", array(
    "type" => "colorpicker",
    "class" => "",
    "heading" => esc_html__( "Triangle Shape Color", 'burst' ),
    "param_name" => "triangle_shape_color",
    "value" => array(
        esc_html__( 'Default (both)', 'burst' ) => 'both',
        esc_html__( 'Only Top', 'burst' ) => 'top',
        esc_html__( 'Only Bottom', 'burst' ) => 'bottom'
    ),
    "dependency" => Array('element' => "triangle_shape", 'value' => array('yes'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Video background", 'burst' ),
	"value" => array(
		esc_html__( "No", 'burst' ) => "",
		esc_html__( "Yes", 'burst' ) => "show_video"
	),
	"param_name" => "video",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Video overlay", 'burst' ),
	"value" => array(
		esc_html__( "No", 'burst' ) => "",
		esc_html__( "Yes", 'burst' ) => "show_video_overlay"
	),
	"param_name" => "video_overlay",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));

vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => esc_html__( "Video overlay image (pattern)", 'burst' ),
	"value" => "",
	"param_name" => "video_overlay_image",
	"dependency" => Array('element' => "video_overlay", 'value' => array('show_video_overlay'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Video background (webm) file url", 'burst' ),
	"value" => "",
	"param_name" => "video_webm",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Video background (mp4) file url", 'burst' ),
	"value" => "",
	"param_name" => "video_mp4",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Video background (ogv) file url", 'burst' ),
	"value" => "",
	"param_name" => "video_ogv",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));

vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => esc_html__( "Video preview image", 'burst' ),
	"value" => "",
	"param_name" => "video_image",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));

vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => esc_html__( "Background image", 'burst' ),
	"value" => "",
	"param_name" => "background_image",
	"dependency" => Array('element' => "row_type", 'value' => array('parallax', 'row','expandable'))
));

vc_add_param("vc_row", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => esc_html__( "Pattern background", 'burst' ),
	"value" => array("Use background image as pattern?" => "pattern_background"),
	"param_name" => "pattern_background",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Full Screen Height", 'burst' ),
    "param_name" => "full_screen_section_height",
    "value" => array(
        esc_html__( "No", 'burst' ) => "no",
        esc_html__( "Yes", 'burst' ) => "yes"
    ),
    "save_always" => true,
    "dependency" => Array('element' => "row_type", 'value' => array('parallax'))
));

vc_add_param("vc_row", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Vertically Align Content In Middle", 'burst' ),
    "param_name" => "vertically_align_content_in_middle",
    "value" => array(
        esc_html__( "No", 'burst' ) => "no",
        esc_html__( "Yes", 'burst' ) => "yes"
    ),
    "save_always" => true,
    "dependency" => array('element' =>  'full_screen_section_height', 'value' => 'yes')
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Section height", 'burst' ),
	"param_name" => "section_height",
	"value" => "",
	"dependency" => Array('element' => "full_screen_section_height", 'value' => array('no'))
));

vc_add_param("vc_row", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => esc_html__( "Use as box", 'burst' ),
	"value" => array("Use row as box" => "use_row_as_box" ),
	"param_name" => "use_as_box",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Parallax speed", 'burst' ),
    "param_name" => "parallax_speed",
    "value" => "",
    "dependency" => Array('element' => "row_type", 'value' => array('parallax'))
));

vc_add_param("vc_row", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Zoom effect", 'burst' ),
    "param_name" => "zoom_effect",
    "value" => array(
        esc_html__( "No", 'burst' ) => "no",
        esc_html__( "Yes", 'burst' ) => "yes"
    ),
    "save_always" => true,
    "dependency" => Array('element' => "row_type", 'value' => array('parallax'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Background color", 'burst' ),
	"param_name" => "background_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','expandable','content_menu'))
));

vc_add_param("vc_row", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => esc_html__( "Show logo", 'burst' ),
	"value" => array("Show logo in content menu" => "logo_in_content_menu"),
	"param_name" => "logo_in_content_menu",
	"dependency" => Array('element' => "row_type", 'value' => array('content_menu'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Custom widget area", 'burst' ),
	"param_name" => "custom_widget_area",
	"value" => array_merge(array('' => ''), array_flip(burst_mikado_get_custom_sidebars())),
	"dependency" => Array('element' => "row_type", 'value' => array('content_menu'))
));

vc_add_param("vc_row", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => esc_html__( "Show Border Bottom", 'burst' ),
	"value" => array("Show border bottom on content menu?" => "yes"),
	"param_name" => "content_menu_border_bottom",
	"dependency" => Array('element' => "row_type", 'value' => array('content_menu'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Content Menu Border Color", 'burst' ),
	"param_name" => "content_menu_border_color",
	"value" => "",
	"dependency" => Array('element' => "content_menu_border_bottom", 'value' => array('yes'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Content Menu Border Style", 'burst' ),
	"param_name" => "content_menu_border_style",
	"value" => array(
		esc_html__( "Solid", 'burst' ) => "solid",
		esc_html__( "Dashed", 'burst' ) => "dashed",
		esc_html__( "Dotted", 'burst' ) => "dotted"
		),
    "save_always" => true,
	"dependency" => Array('element' => "content_menu_border_bottom", 'value' => array('yes'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Border Top Color", 'burst' ),
	"param_name" => "border_top_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Border Bottom Color", 'burst' ),
	"param_name" => "border_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Padding", 'burst' ),
	"value" => "",
	"param_name" => "side_padding",
	"description" => esc_html__( "Padding (left/right in pixels or percentage. Put number and px or %. Ex. 30% or 30px)", 'burst' ),
	"dependency" => Array('element' => "type", 'value' => array('full_width'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
    "heading" => esc_html__( "Padding Top (px)", 'burst' ),
	"value" => "",
	"param_name" => "padding_top",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
    "heading" => esc_html__( "Padding Bottom (px)", 'burst' ),
	"value" => "",
	"param_name" => "padding_bottom",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Label Color", 'burst' ),
	"param_name" => "color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Label Hover Color", 'burst' ),
	"param_name" => "hover_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "More Label", 'burst' ),
	"param_name" => "more_button_label",
	"value" =>  "",
	"description" => esc_html__( "Default label is Expand Section", 'burst' ),
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Less Label", 'burst' ),
	"param_name" => "less_button_label",
	"value" =>  "",
	"description" => esc_html__( "Default label is Contract Section", 'burst' ),
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Label Position", 'burst' ),
	"param_name" => "button_position",
	"value" => array(
		"" => "",
		esc_html__( "Left", 'burst' ) => "left",
		esc_html__( "Right", 'burst' ) => "right",
		esc_html__( "Center", 'burst' ) => "center"
	),
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row",  array(
  "type" => "dropdown",
  "heading" => esc_html__( "CSS Animation", 'burst' ),
  "param_name" => "css_animation",
  "admin_label" => true,
  "value" => $animations,
  "save_always" => true,
  "dependency" => Array('element' => "row_type", 'value' => array('row'))
  
));

vc_add_param("vc_row",  array(
	"type" => "textfield",
	"heading" => esc_html__( "Transition delay (ms)", 'burst' ),
	"param_name" => "transition_delay",
	"admin_label" => true,
	"value" => "",
	"dependency" => array("element" => "css_animation", "not_empty" => true)
  
));

/*** Row Inner ***/

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => esc_html__( "Row Type", 'burst' ),
	"param_name" => "row_type",
	"value" => array(
		esc_html__( "Row", 'burst' ) => "row",
		esc_html__( "Parallax", 'burst' ) => "parallax",
		esc_html__( "Expandable", 'burst' ) => "expandable"
	),
    "save_always" => true
));

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Type", 'burst' ),
	"param_name" => "type",
	"value" => array(
		esc_html__( "Full Width", 'burst' ) => "full_width",
		esc_html__( "In Grid", 'burst' ) => "grid"
	),
    "save_always" => true,
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Use Row as Full Screen Section Slide", 'burst' ),
    "param_name" => "use_row_as_full_screen_section_slide",
    "value" => array(
        esc_html__( "No", 'burst' ) => "no",
        esc_html__( "Yes", 'burst' ) => "yes"
    ),
    "save_always" => true,
    "description" => esc_html__( "This option works only for Full Screen Sections Template", 'burst' ),
    "dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
    "type" => "checkbox",
    "class" => "",
    "heading" => esc_html__( "Use as box", 'burst' ),
    "value" => array("Use row as box" => "use_row_as_box" ),
    "param_name" => "use_as_box",
    "dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Border Radius(px)", 'burst' ),
	"param_name" => "row_box_border_radius",
	"value" => "",
	"dependency" => Array('element' => "use_as_box", 'value' => array('use_row_as_box'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Border Width(px)", 'burst' ),
	"param_name" => "row_box_border_width",
	"value" => "",
	"dependency" => Array('element' => "use_as_box", 'value' => array('use_row_as_box'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Anchor ID", 'burst' ),
	"param_name" => "anchor",
	"value" => ""
));

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Text Align", 'burst' ),
	"param_name" => "text_align",
	"value" => array(
		esc_html__( "Left", 'burst' ) => "left",
		esc_html__( "Center", 'burst' ) => "center",
		esc_html__( "Right", 'burst' ) => "right"
	),
    "save_always" => true
));

vc_add_param("vc_row_inner", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Background color", 'burst' ),
	"param_name" => "background_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','expandable'))
));

vc_add_param("vc_row_inner", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => esc_html__( "Background image", 'burst' ),
	"value" => "",
	"param_name" => "background_image",
	"dependency" => Array('element' => "row_type", 'value' => array('parallax', 'row'))
));

vc_add_param("vc_row_inner", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Border color", 'burst' ),
	"param_name" => "border_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','expandable'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Padding", 'burst' ),
	"value" => "",
	"param_name" => "side_padding",
	"description" => esc_html__( "Left and right spacing in pixels", 'burst' ),
	"dependency" => Array('element' => "type", 'value' => array('full_width'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Padding Top", 'burst' ),
	"value" => "",
	"param_name" => "padding_top",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Padding Bottom", 'burst' ),
	"value" => "",
	"param_name" => "padding_bottom",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "More Button Label", 'burst' ),
	"param_name" => "more_button_label",
	"value" =>  "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Less Button Label", 'burst' ),
	"param_name" => "less_button_label",
	"value" =>  "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Button Position", 'burst' ),
	"param_name" => "button_position",
	"value" => array(
		"" => "",
		esc_html__( "Left", 'burst' ) => "left",
		esc_html__( "Right", 'burst' ) => "right",
		esc_html__( "Center", 'burst' ) => "center"	
	),
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row_inner", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Color", 'burst' ),
	"param_name" => "color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row_inner",  array(
	"type" => "dropdown",
	"heading" => esc_html__( "CSS Animation", 'burst' ),
	"param_name" => "css_animation",
	"admin_label" => true,
	"value" => $animations,
    "save_always" => true,
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
  
));

vc_add_param("vc_row_inner",  array(
  "type" => "textfield",
  "heading" => esc_html__( "Transition delay (ms)", 'burst' ),
  "param_name" => "transition_delay",
  "admin_label" => true,
  "value" => "",
  "dependency" => Array('element' => "row_type", 'value' => array('row'))
  
));


/*** Separator ***/

$separator_setting = array (
  'show_settings_on_create' => true,
  "controls"	=> '',
);
vc_map_update('vc_separator', $separator_setting);

vc_add_param("vc_separator", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Type", 'burst' ),
	"param_name" => "type",
	"value" => array(
		esc_html__( "Normal", 'burst' ) => "normal",
		esc_html__( "Transparent", 'burst' ) => "transparent",
		esc_html__( "Small", 'burst' ) => "small",
	),
    "save_always" => true
));

vc_add_param("vc_separator", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Position", 'burst' ),
	"param_name" => "position",
	"value" => array(
		esc_html__( "Center", 'burst' ) => "center",
		esc_html__( "Left", 'burst' ) => "left",
		esc_html__( "Right", 'burst' ) => "right",
		esc_html__( "Inherit from Elements Holder", 'burst' ) => "inherit"
	),
    "save_always" => true,
    "dependency" => array("element" => "type", "value" => array("small"))
));

vc_add_param("vc_separator", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Color", 'burst' ),
	"param_name" => "color",
	"value" => "",
    "dependency" => array("element" => "type", "value" => array("small", "normal"))
));

vc_add_param("vc_separator", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Border Style", 'burst' ),
	"param_name" => "border_style",
	"value" => array(
		"" => "",
		esc_html__( "Dashed", 'burst' ) => "dashed",
		esc_html__( "Solid", 'burst' ) => "solid",
        esc_html__( "Dotted", 'burst' ) => "dotted"
    )
));

vc_add_param("vc_separator", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Width (px)", 'burst' ),
    "param_name" => "width",
    "value" => "",
	"dependency" => array("element" => "type", "value" => array("small"))
));

vc_add_param("vc_separator", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Thickness (px)", 'burst' ),
	"param_name" => "thickness",
	"value" => ""
));

vc_add_param("vc_separator", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Top Margin", 'burst' ),
	"param_name" => "up",
	"value" => ""
));

vc_add_param("vc_separator", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Top Margin Measuring Unit", 'burst' ),
	"param_name" => "up_style",
	"value" => array(
		esc_html__( "Pixels", 'burst' ) => "px",
		esc_html__( "Percentages", 'burst' ) => "%",
    ),
    "save_always" => true
));

vc_add_param("vc_separator", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Bottom Margin", 'burst' ),
	"param_name" => "down",
	"value" => ""
));

vc_add_param("vc_separator", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Bottom Margin Measuring Unit", 'burst' ),
	"param_name" => "down_style",
	"value" => array(
		esc_html__( "Pixels", 'burst' ) => "px",
		esc_html__( "Percentages", 'burst' ) => "%",
    ),
    "save_always" => true
));


/*** Separator With Text ***/

vc_add_param("vc_text_separator", array(
    "type" => "colorpicker",
    "class" => "",
    "heading" => esc_html__( "Title Color", 'burst' ),
    "param_name" => "title_color",
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Title Font size (px)", 'burst' ),
    "param_name" => 'title_size',
    "value" => ""
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Text In Box", 'burst' ),
    "param_name" => "text_in_box",
    "value" => array(
        esc_html__( "Yes", 'burst' ) => "yes",
        esc_html__( "No", 'burst' ) => "no"
    ),
    "save_always" => true
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Text Position", 'burst' ),
    "param_name" => "text_position",
    "value" => array(
        esc_html__( "Center", 'burst' ) => "center",
        esc_html__( "Left", 'burst' ) => "left",
        esc_html__( "Right", 'burst' ) => "right"
    ),
    "save_always" => true
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Height (px)", 'burst' ),
    "param_name" => 'box_height',
    "value" => "",
    "description" => esc_html__( "Insert height for a shape around the text", 'burst' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Left/right Padding (px)", 'burst' ),
    "param_name" => 'box_padding',
    "value" => "",
    "description" => esc_html__( "Insert size for a padding on left and right side of text", 'burst' ),
));

vc_add_param("vc_text_separator", array(
    "type" => "colorpicker",
    "class" => "",
    "heading" => esc_html__( "Box Background Color", 'burst' ),
    "param_name" => "box_background_color",
    "dependency" => Array('element' => "text_in_box", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Box Border Width (px)", 'burst' ),
    "param_name" => "box_border_width",
    "value" => "",
    "description" => esc_html__( "Insert width for the separator line", 'burst' ),
    "dependency" => Array('element' => "text_in_box", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "colorpicker",
    "class" => "",
    "heading" => esc_html__( "Box Border Color", 'burst' ),
    "param_name" => "box_border_color",
    "dependency" => Array('element' => "text_in_box", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Box Border radius (px)", 'burst' ),
    "param_name" => "box_border_radius",
    "description" => esc_html__( 'Insert border radius(Rounded corners) in px. For example: 4. Leave empty for default.', 'burst' ),
    "dependency" => Array('element' => "text_in_box", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Box Border Style", 'burst' ),
    "param_name" => "box_border_style",
    "value" => array(
        esc_html__( "Solid", 'burst' ) => "solid",
        esc_html__( "Dashed", 'burst' ) => "dashed",
        esc_html__( "Dotted", 'burst' ) => "dotted",
        esc_html__( "Transparent", 'burst' ) => "transparent"
    ),
    "save_always" => true,
    "description" => esc_html__( "Choose a style for the separator line", 'burst' ),
    "dependency" => Array('element' => "text_in_box", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "colorpicker",
    "class" => "",
    "heading" => esc_html__( "Line Color", 'burst' ),
    "param_name" => "line_color",
    "value" => "",
    "description" => esc_html__( "Choose a color for the separator line", 'burst' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Line Width (px)", 'burst' ),
    "param_name" => "line_width",
    "value" => "",
    "description" => esc_html__( "Insert width for the separator line", 'burst' )
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Animation", 'burst' ),
    "param_name" => "animation",
    "value" => array(
        esc_html__( "Default", 'burst' ) => "default",
        esc_html__( "Animate Width", 'burst' ) => "animate_width" 
    ),
    "save_always" => true,
    "description" => esc_html__( "Choose animation for separator", 'burst' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Line Thickness (px)", 'burst' ),
    "param_name" => "line_thickness",
    "value" => "",
    "description" => esc_html__( "Insert thickness for the separator line", 'burst' )
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Separator Line Style", 'burst' ),
    "param_name" => "line_border_style",
    "value" => array(
        esc_html__( "Solid", 'burst' ) => "solid",
        esc_html__( "Dashed", 'burst' ) => "dashed",
        esc_html__( "Dotted", 'burst' ) => "dotted",
        esc_html__( "Transparent", 'burst' ) => "transparent"
    ),
    "save_always" => true,
    "description" => esc_html__( "Choose a style for the separator line", 'burst' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Top Margin (px)", 'burst' ),
    "param_name" => "up",
    "value" => "",
    "description" => esc_html__( "Insert top margin for the separator", 'burst' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Bottom Margin (px)", 'burst' ),
    "param_name" => "down",
    "value" => "",
    "description" => esc_html__( "Insert bottom margin for the separator", 'burst' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Box Margins (px)", 'burst' ),
    "param_name" => "box_margin",
    "description" => esc_html__( "Insert left and right line margins", 'burst' )
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Dots on line end ", 'burst' ),
    "param_name" => "line_dots",
    "value" => array(
        esc_html__( "No", 'burst' ) => "no",
        esc_html__( "Yes", 'burst' ) => "yes"
    ),
    "save_always" => true,
    "description" => esc_html__( "Insert icons on the end of the border", 'burst' )
));

vc_add_param("vc_text_separator", array(
    "type" => "colorpicker",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Dots Color", 'burst' ),
    "param_name" => "line_dots_color",
    "description" => esc_html__( "Insert dots color (default value is #b2b2b2)", 'burst' ),
    "dependency" => Array('element' => "line_dots", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Dots Size (px)", 'burst' ),
    "param_name" => "line_dots_size",
    "description" => esc_html__( "Insert dots size", 'burst' ),
    "dependency" => Array('element' => "line_dots", 'value' => array('yes'))
));


/*** Single Image ***/

vc_add_param("vc_single_image",  array(
	"type" => "dropdown",
	"heading" => esc_html__( "CSS Animation", 'burst' ),
	"param_name" => "mkd_css_animation",
	"admin_label" => true,
	"value" => $animations,
    "save_always" => true 
));

vc_add_param("vc_single_image",  array(
	"type" => "textfield",
	"heading" => esc_html__( "Transition delay (s)", 'burst' ),
	"param_name" => "transition_delay",
	"admin_label" => true,
	"value" => "",
	"dependency" => array("element" => "mkd_css_animation", "not_empty" => true)
));



vc_add_param("vc_single_image",  array(
	"type" => "dropdown",
	"heading" => esc_html__( "Set image shader", 'burst' ),
	"param_name" => "set_shader",
	"admin_label" => true,
	"value" => array(
				esc_html__( "No", 'burst' ) => "no",
				esc_html__( "Yes", 'burst' ) => "yes"
			),
	"save_always" => true,
	"description" => esc_html__( "Choose whether to show a shader over the image when it comes into view-port.", 'burst' )
));

vc_add_param("vc_single_image",  array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Image shader color", 'burst' ),
	"param_name" => "shader_color",
	"value" => "rgba(255,255,255,0.15)",
	"admin_label" => true,
	"save_always" => true,
	"description" => esc_html__( "Set the color of image shader.", 'burst' ),
	"dependency" => array("element" => "set_shader", "value" => array("yes"))
));

vc_add_param("vc_single_image",  array(
	"type" => "textfield",
	"heading" => esc_html__( "Shader border radius", 'burst' ),
	"param_name" => "shader_border_radius",
	"admin_label" => true,
	"save_always" => true,
	"value" => "0",
	"description" => esc_html__( "Set the shader border radius to match your image border radius. The default value is 0. You can use values in px or %.", 'burst' ),
	"dependency" => array("element" => "set_shader", "value" => array("yes"))
));

vc_add_param("vc_single_image",  array(
	"type" => "textfield",
	"heading" => esc_html__( "Shader width", 'burst' ),
	"param_name" => "shader_width",
	"admin_label" => true,
	"save_always" => true,
	"value" => "50",
	"description" => esc_html__( "Set the shader width as a percentage of the image width. The default value is 50. Use absolute values.", 'burst' ),
	"dependency" => array("element" => "set_shader", "value" => array("yes"))
));

vc_add_param("vc_single_image",  array(
	"type" => "textfield",
	"heading" => esc_html__( "Shader height", 'burst' ),
	"param_name" => "shader_height",
	"admin_label" => true,
	"save_always" => true,
	"value" => "100",
	"description" => esc_html__( "Set the shader height as a percentage of the image height. The default value is 100. Use absolute values.", 'burst' ),
	"dependency" => array("element" => "set_shader", "value" => array("yes"))
));

vc_add_param("vc_single_image",  array(
	"type" => "textfield",
	"heading" => esc_html__( "Shader angle", 'burst' ),
	"param_name" => "shader_angle",
	"admin_label" => true,
	"save_always" => true,
	"value" => "52",
	"description" => esc_html__( "Depending on image size, set the shader angle. For example set 52 for 52 degrees. Use absolute values.", 'burst' ),
	"dependency" => array("element" => "set_shader", "value" => array("yes"))
));

vc_add_param("vc_single_image",  array(
	"type" => "dropdown",
	"heading" => esc_html__( "Display a Pop Up note", 'burst' ),
	"param_name" => "set_popup",
	"admin_label" => true,
	"value" => array(
				esc_html__( "No", 'burst' ) => "no",
				esc_html__( "Yes", 'burst' ) => "yes"
			),
	"save_always" => true,
	"description" => esc_html__( 'Choose whether to showcase a pop up note attached to your image that\'ll be displayed when the image comes into viewport.', 'burst' )
));

vc_add_param("vc_single_image",  array(
	"type" => "textfield",
	"heading" => esc_html__( "Pop Up message", 'burst' ),
	"param_name" => "popup_msg",
	"admin_label" => true,
	"save_always" => true,
	"value" => "NEW",
	"description" => esc_html__( "Enter a message to be displayed in a pop up.", 'burst' ),
	"dependency" => array("element" => "set_popup", "value" => array("yes"))
));

vc_add_param("vc_single_image",  array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Pop Up background color", 'burst' ),
	"param_name" => "popup_color",
	"value" => "#18cfab",
	"admin_label" => true,
	"save_always" => true,
	"description" => esc_html__( "Set the background color of the pop up.", 'burst' ),
	"dependency" => array("element" => "set_popup", "value" => array("yes"))
));

vc_add_param("vc_single_image",  array(
	"type" => "colorpicker",
	"heading" => esc_html__( "Pop Up text color", 'burst' ),
	"param_name" => "popup_msg_color",
	"value" => "#fff",
	"admin_label" => true,
	"save_always" => true,
	"description" => esc_html__( "Set the text color of the pop up message.", 'burst' ),
	"dependency" => array("element" => "set_popup", "value" => array("yes"))
));

vc_add_param("vc_single_image",  array(
	"type" => "dropdown",
	"heading" => esc_html__( "Offset Pop Up message", 'burst' ),
	"param_name" => "popup_offset",
	"admin_label" => true,
	"value" => array(
				esc_html__( "No", 'burst' ) => "no",
				esc_html__( "Yes", 'burst' ) => "yes"
			),
	"save_always" => true,
	"description" => esc_html__( "If needed you can offset a the pop up message from the initial top right area.", 'burst' ),
	"dependency" => array("element" => "set_popup", "value" => array("yes"))
));

vc_add_param("vc_single_image",  array(
	"type" => "textfield",
	"heading" => esc_html__( "Top offset", 'burst' ),
	"param_name" => "popup_top",
	"admin_label" => true,
	"save_always" => true,
	"value" => "",
	"description" => esc_html__( "Enter a top offset value. This value is calulated as percentage. So, enter 20 for 20%.", 'burst' ),
	"dependency" => array("element" => "popup_offset", "value" => array("yes"))
));

vc_add_param("vc_single_image",  array(
	"type" => "textfield",
	"heading" => esc_html__( "Right offset", 'burst' ),
	"param_name" => "popup_right",
	"admin_label" => true,
	"save_always" => true,
	"value" => "",
	"description" => esc_html__( "Enter a right offset value. This value is calulated as percentage. So, enter 20 for 20%.", 'burst' ),
	"dependency" => array("element" => "popup_offset", "value" => array("yes"))
));

vc_add_param("vc_single_image",  array(
	"type" => "dropdown",
	"heading" => esc_html__( "Animate Image on Hover", 'burst' ),
	"param_name" => "animate_image_on_hover",
	"admin_label" => true,
	"value" => array(
				esc_html__( "No", 'burst' ) => "no",
				esc_html__( "Zoom In/Out", 'burst' ) => "zoom"
			),
	"save_always" => true,
	"description" => esc_html__( "If image is set to link to an external URL, you can optionally enable a effect.", 'burst' )
));

vc_add_param("vc_single_image",  array(
	"type" => "checkbox",
	"holder" => "div",
	"class" => "",
	"heading" => esc_html__( "Numbered image", 'burst' ),
	"param_name" => "numbered_image",
	"value" => array("Add a number to your image?" => "yes")
));

vc_add_param("vc_single_image",  array(
	"type" => "textfield",
	"heading" => esc_html__( "Image Number", 'burst' ),
	"param_name" => "image_number",
	"admin_label" => true,
	"save_always" => true,
	"value" => "",
	"description" => esc_html__( "Enter an image number to be displayed in the top left corner.", 'burst' ),
	"dependency" => array("element" => "numbered_image", "not_empty" => true)
));
if(!function_exists('burst_mikado_add_open_prettyphoto')) {
	function burst_mikado_add_open_prettyphoto() {
		//Get current values stored in the Link Target in "Single Image" element
		$param = WPBMap::getParam('vc_single_image', 'img_link_target');
		//Append new value to the 'value' array
		$param['value'][esc_html__('Open prettyPhoto', 'burst')] = 'open_prettyphoto';
		//Finally "mutate" param with new values
		WPBMap::mutateParam('vc_single_image', $param);
	}

	add_action('init', 'burst_mikado_add_open_prettyphoto', 11);
}

/*************************************
 	Mapping Shortcodes
 *************************************/


/*** Elements Holder ***/

class WPBakeryShortCode_No_Elements_Holder  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" =>  esc_html__( 'Elements Holder', 'burst' ),
	"base" => "no_elements_holder",
	"as_parent" => array('only' => 'no_elements_holder_item'),
	"content_element" => true,
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-elements-holder extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Color", 'burst' ),
			"param_name" => "background_color",
			"value" => ""
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Columns", 'burst' ),
			"param_name" => "number_of_columns",
			"value" => array(
				esc_html__( "1 Column", 'burst' ) => "one_column",
				esc_html__( "2 Columns", 'burst' ) => "two_columns",
				esc_html__( "3 Columns", 'burst' ) => "three_columns",
				esc_html__( "4 Columns", 'burst' ) => "four_columns",
				esc_html__( "5 Columns", 'burst' ) => "five_columns",
				esc_html__( "6 Columns", 'burst' ) => "six_columns"
			),
            "save_always" => true
		),
		array(
			"type" => "checkbox",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Items Float Left", 'burst' ),
			"param_name" => "items_float_left",
			"value" => array("Make Items Float Left?" => "yes")
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'burst' ),
			"heading" => esc_html__( "Switch to One Column", 'burst' ),
			"param_name" => "switch_to_one_column",
			"value" => array(
				esc_html__( "Default", 'burst' ) => "",
				esc_html__( "Below 1300px", 'burst' ) => "1300",
				esc_html__( "Below 1024px", 'burst' ) => "1024",
				esc_html__( "Below 768px", 'burst' ) => "768",
				esc_html__( "Below 600px", 'burst' ) => "600",
				esc_html__( "Below 480px", 'burst' ) => "480",
				esc_html__( "Never", 'burst' ) => "never"
			),
            "save_always" => true,
			"description" => esc_html__( "Choose on which stage item will be in one column", 'burst' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'burst' ),
			"heading" => esc_html__( "Choose Alignment In Responsive Mode", 'burst' ),
			"param_name" => "alignment_one_column",
			"value" => array(
				esc_html__( "Default", 'burst' ) => "",
				esc_html__( "Left", 'burst' ) => "left",
				esc_html__( "Center", 'burst' ) => "center",
				esc_html__( "Right", 'burst' ) => "right"
			),
			"description" => esc_html__( "Alignment When Items are in One Column", 'burst' )
		)
	)
) );


/*** Elements Holder Item ***/

class WPBakeryShortCode_No_Elements_Holder_Item  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Elements Holder Item', 'burst' ),
	"base" => "no_elements_holder_item",
	"as_parent" => array('except' => 'vc_row, vc_accordion, no_cover_boxes, no_portfolio_slider'),
	"as_child" => array('only' => 'no_elements_holder'),
	"content_element" => true,
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-elements-holder-item extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Color", 'burst' ),
			"param_name" => "background_color",
			"value" => ""
		),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Image", 'burst' ),
			"param_name" => "background_image",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Padding", 'burst' ),
			"param_name" => "item_padding",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'burst' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Alignment", 'burst' ),
			"param_name" => "aligment",
			"value" => array(
				esc_html__( "Left", 'burst' ) => "left",
				esc_html__( "Right", 'burst' ) => "right",
				esc_html__( "Center", 'burst' ) => "center"
			),
            "save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Vertical Alignment", 'burst' ),
			"param_name" => "vertical_alignment",
			"value" => array(
				esc_html__( "Default", 'burst' ) => "",
				esc_html__( "Top", 'burst' ) => "top",
				esc_html__( "Middle", 'burst' ) => "middle",
				esc_html__( "Bottom", 'burst' ) => "bottom"
			),
            "save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Animation Name", 'burst' ),
			"param_name" => "animation_name",
			"value" => array(
				esc_html__( "No Animation", 'burst' ) => "",
				esc_html__( "Flip In", 'burst' ) => "flip_in",
				esc_html__( "Grow In", 'burst' ) => "grow_in",
				esc_html__( "X Rotate", 'burst' ) => "x_rotate",
				esc_html__( "Z Rotate", 'burst' ) => "z_rotate",
				esc_html__( "Y Translate", 'burst' ) => "y_translate",
				esc_html__( "Fade In", 'burst' ) => "fade_in",
				esc_html__( "Fade In Down", 'burst' ) => "fade_in_down",
				esc_html__( "Fade In Left X Rotate", 'burst' ) => "fade_in_left_x_rotate"
			)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Animation Delay (ms)", 'burst' ),
			"param_name" => "animation_delay",
			"value" => "",
			"dependency" => array('element' => "animation_name", 'value' => array('flip_in', 'grow_in', 'x_rotate','z_rotate','y_translate','fade_in', 'fade_in_down', 'fade_in_left_x_rotate'))
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Advanced Animations", 'burst' ),
			"param_name" => "advanced_animations",
			"value" => array(
				esc_html__( "No", 'burst' ) => "no",
				esc_html__( "Yes", 'burst' ) => "yes"
			),
            "save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Animation Start Position", 'burst' ),
			"param_name" => "start_position",
			"value" => array(
				esc_html__( 'Bottom of Page', 'burst' ) => 'bottom',
				esc_html__( 'Center of Page', 'burst' ) => 'center'
			),
            "save_always" => true,
			"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Start Animation Style", 'burst' ),
			"param_name" => "start_animation_style",
			"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Animation End Position", 'burst' ),
			"param_name" => "end_position",
			"value" => array(
				esc_html__( "Center of Page", 'burst' ) => "center",
				esc_html__( "Top of Page", 'burst' ) => "top-bottom"
			),
            "save_always" => true,
			"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "End Animation Style", 'burst' ),
			"param_name" => "end_animation_style",
			"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'burst' ),
			"heading" => esc_html__( "Padding on screen size between 1300px-1600px", 'burst' ),
			"param_name" => "item_padding_1300_1600",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'burst' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'burst' ),
			"heading" => esc_html__( "Padding on screen size between 1024px-1300px", 'burst' ),
			"param_name" => "item_padding_1024_1300",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'burst' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'burst' ),
			"heading" => esc_html__( "Padding on screen size between 768px-1024px", 'burst' ),
			"param_name" => "item_padding_768_1024",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'burst' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'burst' ),
			"heading" => esc_html__( "Padding on screen size between 600px-768px", 'burst' ),
			"param_name" => "item_padding_600_768",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'burst' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'burst' ),
			"heading" => esc_html__( "Padding on screen size between 480px-600px", 'burst' ),
			"param_name" => "item_padding_480_600",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'burst' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'burst' ),
			"heading" => esc_html__( "Padding on Screen Size Bellow 480px", 'burst' ),
			"param_name" => "item_padding_480",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'burst' )
		)
	)
) );


/*** Bordered Elements Holder ***/

class WPBakeryShortCode_No_Bordered_Elements_Holder extends WPBakeryShortCodesContainer {}
vc_map( array(
	'name' => esc_html__( 'Bordered Elements Holder', 'burst' ),
	'base' => 'no_bordered_elements_holder',
	'as_parent' => array('except' => 'vc_row'),
	'content_element' => true,
	'category' => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-bordered-elements-holder-item extended-custom-icon",
	'show_settings_on_create' => true,
	'js_view' => 'VcColumnView',
	'params' => array(
		array(
			'type' => 'dropdown',
			'holder' => 'div',
			'class' => '',
			'heading' => esc_html__( 'Border Animation Type', 'burst' ),
			'param_name' => 'animation_type',
			'value' => array(
				esc_html__( 'No Animation', 'burst' ) => '',
				esc_html__( 'Continue Line', 'burst' ) => 'mkd_box_continue_line',
				esc_html__( 'Corner Line', 'burst' ) => 'mkd_box_corner_line',
				esc_html__( 'Simultaneous Line', 'burst' ) => 'mkd_box_simultaneous_line'
			),
			'description' => esc_html__( 'Choose type of animation', 'burst' )
		),
		array(
			'type' => 'colorpicker',
			'holder' => 'div',
			'class' => '',
			'heading' => esc_html__( 'Border Color', 'burst' ),
			'param_name' => 'border_color',
			'value' => '',
			'description' => esc_html__( '', 'burst' )
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => esc_html__( 'Border Width (px)', 'burst' ),
			'param_name' => 'border_width',
			'value' => '',
			'description' => esc_html__( '', 'burst' )
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => esc_html__( 'Duration of the Animation (s)', 'burst' ),
			'param_name' => 'animation_time',
			'value' => '',
			'description' => esc_html__( 'Default is 2 sec', 'burst' ),
			'dependency' => array('element' => 'animation_type', 'value' => array('mkd_box_continue_line', 'mkd_box_corner_line', 'mkd_box_simultaneous_line'))
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => esc_html__( 'Holder Padding (px)', 'burst' ),
			'param_name' => 'holder_padding',
			'value' => '',
			'description' => esc_html__( '', 'burst' )
		)
	)
) );


/*** Blog List ***/

vc_map( array(
	"name" => esc_html__( "Blog List", 'burst' ),
	"base" => "no_blog_list",
	"icon" => "icon-wpb-blog-list extended-custom-icon",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
        array(
            array(
                "type" => "dropdown",
		        "class" => "",
				"admin_label" => true,
				"heading" => esc_html__("Type", 'burst'),
                "param_name" => "type",
                "value" => array(
                    esc_html__( "Image in left box", 'burst' ) => "image_in_box",
                    esc_html__( "Boxes", 'burst' ) => "boxes",
                    esc_html__( "Minimal", 'burst' ) => "minimal"
                ),
                "save_always" => true
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Number of Posts", 'burst' ),
                "param_name" => "number_of_posts"
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Image Size", 'burst' ),
                "param_name" => "image_size",
                "value" => array(
                    esc_html__( "Original", 'burst' ) => "original",
                    esc_html__( "Landscape", 'burst' ) => "landscape",
                    esc_html__( "Square", 'burst' ) => "square",
                    esc_html__( "Custom Size", 'burst' ) => "custom"
                ),
                "save_always" => true,
                "dependency" => Array('element' => "type", 'value' => array('boxes'))
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => esc_html__( "Image Width", 'burst' ),
                "param_name" => "image_width",
                "value" => "",
                "description" => esc_html__( "Set custom image width", 'burst' ),
                "dependency" => Array('element' => "image_size", 'value' => array('custom'))
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => esc_html__( "Image Height", 'burst' ),
                "param_name" => "image_height",
                "value" => "",
                "description" => esc_html__( "Set custom image size", 'burst' ),
                "dependency" => Array('element' => "image_size", 'value' => array('custom'))
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Show Thumbnail", 'burst' ),
                "param_name" => "show_thumbnail",
                "value" => array(
                    esc_html__( "Yes", 'burst' ) => "yes",
                    esc_html__( "No", 'burst' ) => "no",
                ),
                "save_always" => true,
                "dependency" => Array('element' => "type", 'value' => array('boxes'))
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Number of Columns", 'burst' ),
                "param_name" => "number_of_columns",
                "value" => array(
                    esc_html__( "One", 'burst' ) => "1",
                    esc_html__( "Two", 'burst' ) => "2",
                    esc_html__( "Three", 'burst' ) => "3",
                    esc_html__( "Four", 'burst' ) => "4"
                ),
                "save_always" => true,
                "dependency" => Array('element' => "type", 'value' => array('boxes'))
            ),

            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Overlay Color", 'burst' ),
                "param_name" => "overlay_color",
                "dependency" => Array('element' => "type", 'value' => array('boxes'))
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Display Overlay Icon", 'burst' ),
                "param_name" => "overlay_icon",
                "value" => array(
                    esc_html__( "No", 'burst' ) => "0",
                    esc_html__( "Yes", 'burst' ) => "1"
                ),
                "save_always" => true,
                "dependency" => Array('element' => "type", 'value' => array('boxes'))
            ),
            array(
                "type" => "dropdown",
				"admin_label" => true,
                "class" => "",
                "heading" => esc_html__( "Order By", 'burst' ),
                "param_name" => "order_by",
                "value" => array(
                    esc_html__( "Title", 'burst' ) => "title",
                    esc_html__( "Date", 'burst' ) => "date"
                ),
                "save_always" => true
            ),
            array(
                "type" => "dropdown",
				"admin_label" => true,
                "class" => "",
                "heading" => esc_html__( "Order", 'burst' ),
                "param_name" => "order",
                "value" => array(
                    esc_html__( "ASC", 'burst' ) => "ASC",
                    esc_html__( "DESC", 'burst' ) => "DESC"
                ),
                "save_always" => true
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Category Slug", 'burst' ),
                "param_name" => "category",
                "description" => esc_html__( "Leave empty for all or use comma for list", 'burst' )
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text length", 'burst' ),
                "param_name" => "text_length",
                "description" => esc_html__( "Number of characters", 'burst' )
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Title Tag", 'burst' ),
                "param_name" => "title_tag",
                "value" => array(
                    ""   => "",
                    esc_html__( "h2", 'burst' ) => "h2",
                    esc_html__( "h3", 'burst' ) => "h3",
                    esc_html__( "h4", 'burst' ) => "h4",
                    esc_html__( "h5", 'burst' ) => "h5",
                    esc_html__( "h6", 'burst' ) => "h6",
                )
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title Size (px)", 'burst' ),
                "param_name" => "title_size"
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title Color", 'burst' ),
                "param_name" => "title_color"
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Display excerpt", 'burst' ),
                "param_name" => "display_excerpt",
                "value" => array(
                    esc_html__( "Default", 'burst' ) => "",
                    esc_html__( "Yes", 'burst' ) => "1",
                    esc_html__( "No", 'burst' ) => "0"
                )
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Excerpt Color", 'burst' ),
                "param_name" => "excerpt_color",
                "dependency" => Array('element' => "display_excerpt", 'value' => array('1', ''))
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Info Position", 'burst' ),
                "param_name" => "info_position",
                "value" => array(
                    esc_html__( "Default", 'burst' ) => "",
                    esc_html__( "Top", 'burst' ) => "top",
                    esc_html__( "Bottom", 'burst' ) => "bottom"
                )
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Post info font size (px)", 'burst' ),
                "param_name" => "post_info_font_size"
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Post info color", 'burst' ),
                "param_name" => "post_info_color",
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Post info link color", 'burst' ),
                "param_name" => "post_info_link_color"
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Post info font family", 'burst' ),
                "param_name" => "post_info_font_family"
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Post info text transform", 'burst' ),
                "param_name" => "post_info_text_transform",
                "value" => array(
                    esc_html__( "Default", 'burst' ) => "",
                    esc_html__( "None", 'burst' ) => "none",
                    esc_html__( "Capitalize", 'burst' ) => "capitalize",
                    esc_html__( "Uppercase", 'burst' ) => "uppercase",
                    esc_html__( "Lowercase", 'burst' ) => "lowercase"
                )
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Post info font weight", 'burst' ),
                "param_name" => "post_info_font_weight",
                "value" => $font_weight_array,
                "save_always" => true
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Post info font style", 'burst' ),
                "param_name" => "post_info_font_style",
                "value" => array(
                    esc_html__( "Default", 'burst' ) => "",
                    esc_html__( "Normal", 'burst' ) => "normal",
                    esc_html__( "Italic", 'burst' ) => "italic"
                )
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Post info letter spacing (px)", 'burst' ),
                "param_name" => "post_info_letter_spacing"
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Display category", 'burst' ),
                "param_name" => "display_category",
                "value" => array(
                    esc_html__( "Default", 'burst' ) => "",
                    esc_html__( "Yes", 'burst' ) => "1",
                    esc_html__( "No", 'burst' ) => "0"
                )
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Display date", 'burst' ),
                "param_name" => "display_date",
                "value" => array(
                    esc_html__( "Default", 'burst' ) => "",
                    esc_html__( "Yes", 'burst' ) => "1",
                    esc_html__( "No", 'burst' ) => "0"
                )
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Date Position", 'burst' ),
                "param_name" => "date_place",
                "value" => array(
                    esc_html__( "Date by Title", 'burst' ) => "by_title",
                    esc_html__( "Date by Post Info", 'burst' ) => "by_post_info",
                    esc_html__( "Date over Title", 'burst' ) => "over_title"
                ),
                "save_always" => true,
                "description" => esc_html__( 'Choose where the date will be placed', 'burst' )
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Date Size (px)", 'burst' ),
                "param_name" => "date_size"
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Display author", 'burst' ),
                "param_name" => "display_author",
                "value" => array(
                    esc_html__( "Default", 'burst' ) => "",
                    esc_html__( "Yes", 'burst' ) => "1",
                    esc_html__( "No", 'burst' ) => "0"
                )
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Display comments", 'burst' ),
                "param_name" => "display_comments",
                "value" => array(
                    esc_html__( "Default", 'burst' ) => "",
                    esc_html__( "Yes", 'burst' ) => "1",
                    esc_html__( "No", 'burst' ) => "0"
                ),
                "dependency" => Array('element' => "type", 'value' => array('image_in_box','boxes'))
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Box Background Color", 'burst' ),
                "param_name" => "background_color",
                "dependency" => Array('element' => "type", 'value' => array('boxes', 'image_in_box'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Box Padding", 'burst' ),
                "param_name" => "box_info_padding",
                "description" => esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'burst' ),
                "dependency" => Array('element' => "type", 'value' => array('boxes', 'image_in_box'))
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator Between Item Color", 'burst' ),
                "param_name" => "border_color",
                "dependency" => array('element' => "type", 'value' => array('minimal','image_in_box'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator Between Item Thickness (px)", 'burst' ),
                "param_name" => "border_width",
                "dependency" => array('element' => "type", 'value' => array('minimal','image_in_box'))

            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Display Button", 'burst' ),
                "param_name" => "display_button",
                "value" => array(
                    esc_html__( "Default", 'burst' ) => "",
                    esc_html__( "Yes", 'burst' ) => "1",
                    esc_html__( "No", 'burst' ) => "0"
                ),
                "description" => esc_html__( "Show button leading to post single page", 'burst' )
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Button Size", 'burst' ),
                "param_name" => "button_size",
                "value" => array(
                    esc_html__( "Default", 'burst' ) => "",
                    esc_html__( "Small", 'burst' ) => "small",
                    esc_html__( "Medium", 'burst' ) => "medium",
                    esc_html__( "Large", 'burst' ) => "large",
                    esc_html__( "Extra Large", 'burst' ) => "big_large"
                ),
                "description" => esc_html__( "Default value is small", 'burst' ),
                "dependency" => array('element' =>  "display_button", 'value' => '1')
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Button Style", 'burst' ),
                "param_name" => "button_style",
                "value" => array(
                    esc_html__( "Default", 'burst' ) => "",
                    esc_html__( "White", 'burst' ) => "white"
                ),
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Text", 'burst' ),
                "param_name" => "button_text",
                "description" => esc_html__( "Default text is LEARN MORE", 'burst' ),
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Text Color", 'burst' ),
                "param_name" => "button_color",
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Text Hover Color", 'burst' ),
                "param_name" => "button_hover_color",
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Background Color", 'burst' ),
                "param_name" => "button_background_color",
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Hover Background Color", 'burst' ),
                "param_name" => "button_hover_background_color",
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Border Color", 'burst' ),
                "param_name" => "button_border_color",
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Border Width", 'burst' ),
                "param_name" => "button_border_width",
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Hover Border Color", 'burst' ),
                "param_name" => "button_hover_border_color",
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Border Radius (px)", 'burst' ),
                "param_name" => "button_border_radius",
                "description" => esc_html__( "Border radius for button", 'burst' ),
                "dependency" => array('element' => "display_button", 'value' => '1')
            )
        ),
        $burst_mikado_IconCollections->getVCParamsArray( array( 'element' => 'display_button', 'value' => '1' ) ),
        array(
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Icon Position", 'burst' ),
                "param_name" => "button_icon_position",
                "value" => array(
                    esc_html__( "Right", 'burst' ) => "right",
                    esc_html__( "Left", 'burst' ) => "left"
                ),
                "save_always" => true,
                "dependency" => Array('element' => $burst_mikado_IconCollections->iconPackParamName, 'not_empty' => true)
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Icon Color", 'burst' ),
                "param_name" => "button_icon_color",
                "dependency" => Array('element' =>$burst_mikado_IconCollections->iconPackParamName, 'not_empty' => true)
            ),
			  array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Icon Hover Color", 'burst' ),
                "param_name" => "button_icon_hover_color",
                "dependency" => Array('element' =>$burst_mikado_IconCollections->iconPackParamName, 'not_empty' => true)
            )
        )
	)
) );


/*** Blog Carousel ***/

vc_map( array(
	"name" => esc_html__( "Blog Carousel", 'burst' ),
	"base" => "no_blog_carousel",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-blog-carousel extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Carousel info type", 'burst' ),
			"param_name" => "type",
			"value" => array(
				esc_html__( "Default", 'burst' ) => "",
				esc_html__( "Post Info visible", 'burst' ) => "info_always",
				esc_html__( "Post Info in Bottom", 'burst' ) => "info_in_bottom"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image size", 'burst' ),
			"param_name" => "image_size",
			"value" => array(
				esc_html__( "Default", 'burst' ) => "",
				esc_html__( "Original Size", 'burst' ) => "full",
				esc_html__( "Landscape", 'burst' ) => "landscape",
				esc_html__( "Portrait", 'burst' ) => "portrait"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Order By", 'burst' ),
			"param_name" => "order_by",
			"value" => array(
				"" => "",
				esc_html__( "Title", 'burst' ) => "title",
				esc_html__( "Date", 'burst' ) => "date"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Order", 'burst' ),
			"param_name" => "order",
			"value" => array(
				"" => "",
				esc_html__( "ASC", 'burst' ) => "ASC",
				esc_html__( "DESC", 'burst' ) => "DESC",
			)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Number", 'burst' ),
			"param_name" => "number",
			"value" => "-1",
			"description" => esc_html__( "Number of blog posts on page (-1 is all)", 'burst' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Number of Blog Posts Shown", 'burst' ),
			"param_name" => "blogs_shown",
			"value" => array(
				"" => "",
				"3" => "3",
				"4" => "4",
				"5" => "5",
				"6" => "6"
			),
			"save_always" => true,
			"description" => esc_html__( "Number of blog posts that are showing at the same time in full width (on smaller screens is responsive so there will be less items shown)", 'burst' ),
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Category", 'burst' ),
			"param_name" => "category",
			"value" => "",
			"description" => esc_html__( "Category Slug (leave empty for all)", 'burst' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Selected Projects", 'burst' ),
			"param_name" => "selected_projects",
			"value" => "",
			"description" => esc_html__( "Selected Projects (leave empty for all, delimit by comma)", 'burst' )
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Info Box Background Color", 'burst' ),
			"param_name" => "hover_box_color",
			"value" => ""
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Post Info Color", 'burst' ),
			"param_name" => "post_info_color",
			"value" => "",
			"dependency" => array("element" => "type","value" => "info_in_bottom")
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Author", 'burst' ),
			"param_name" => "show_author",
			"value" => array(
				esc_html__( "Yes", 'burst' ) => "yes",
				esc_html__( "No", 'burst' ) => "no"
			),
            "save_always" => true,
			"description" => esc_html__( "Default value is Yes", 'burst' ),
			"dependency" => array("element" => "type", "value" => "info_in_bottom")
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Author Color", 'burst' ),
			"param_name" => "author_color",
			"value" => "",
			"dependency" => array('element' => "show_author", 'value' => array('yes'))
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Category Names", 'burst' ),
			"param_name" => "show_categories",
			"value" => array(
				esc_html__( "Yes", 'burst' ) => "yes",
				esc_html__( "No", 'burst' ) => "no"
			),
            "save_always" => true,
			"description" => esc_html__( "Default value is Yes", 'burst' ),
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Category Name Color", 'burst' ),
			"param_name" => "category_color",
			"value" => "",
			"dependency" => array('element' => "show_categories", 'value' => array('yes'))
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Date", 'burst' ),
			"param_name" => "show_date",
			"value" => array(
				esc_html__( "Yes", 'burst' ) => "yes",
				esc_html__( "No", 'burst' ) => "no"
			),
            "save_always" => true,
			"description" => esc_html__( "Default value is Yes", 'burst' )
		),		
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Date Position", 'burst' ),
			"param_name" => "date_position",
			"value" => array(
				esc_html__( "Above Title", 'burst' ) => "above",
				esc_html__( "Below Title", 'burst' ) => "below"
			),
            "save_always" => true,
			"description" => esc_html__( "Default value is Above", 'burst' ),
			"dependency" => array('element' => "type",'value' => array('info_always',''))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Date Color", 'burst' ),
			"param_name" => "date_color",
			"value" => "",
			"description" => esc_html__( "Will be Month Color for Post Info in Bottom Type", 'burst' ),
			"dependency" => array('element' => "show_date", 'value' => array('yes'))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Day Color", 'burst' ),
			"param_name" => "day_color",
			"value" => "",
			"description" => esc_html__( "Only for Post Info in Bottom type", 'burst' ),
			"dependency" => array('element' => "show_date", 'value' => array('yes'))
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Title Tag", 'burst' ),
			"param_name" => "title_tag",
			"value" => array(
				""   => "",
				esc_html__( "h2", 'burst' ) => "h2",
				esc_html__( "h3", 'burst' ) => "h3",
				esc_html__( "h4", 'burst' ) => "h4",
				esc_html__( "h5", 'burst' ) => "h5",
				esc_html__( "h6", 'burst' ) => "h6",
			)
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Color", 'burst' ),
			"param_name" => "title_color",
			"value" => ""
		),
		array(
			"type" => "checkbox",
			"class" => "",
			"heading" => esc_html__( "Prev/Next navigation", 'burst' ),
			"value" => array("Enable prev/next navigation?" => "enable_navigation"),
			"param_name" => "enable_navigation"
		),
		array(
			"type" => "checkbox",
			"class" => "",
			"heading" => esc_html__( "Bullets navigation", 'burst' ),
			"value" => array("Show bullets navigation?" => "yes"),
			"param_name" => "pager_navigation"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Separator", 'burst' ),
			"param_name" => "show_separator",
			"value" => array(
				esc_html__( "No", 'burst' ) => "no",
				esc_html__( "Yes", 'burst' ) => "yes"
			),
            "save_always" => true,
			"description" => esc_html__( "Show separator below title", 'burst' ),
			"dependency" => array('element' => 'type', 'value' => array('info_always',''))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Color", 'burst' ),
			"param_name" => "separator_color",
			"dependency" => array('element' => "show_separator", 'value' => array('yes'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Thickness (px)", 'burst' ),
			"param_name" => "separator_thickness",
			"dependency" => array('element' => "show_separator", 'value' => array('yes'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Width (px)", 'burst' ),
			"param_name" => "separator_width",
			"dependency" => array('element' => "show_separator", 'value' => array('yes'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Extra class name", 'burst' ),
			"param_name" => "add_class",
			"value" => "",
			"description" => esc_html__( "If you wish to style this particular blog carousel differently, you can use this field to add an extra class name to it and then refer to that class name in your css file.", 'burst' )
		)
	)
) );


/*** Blog Slider***/

vc_map( array(
	"name" => esc_html__( "Blog Slider", 'burst' ),
	"base" => "no_blog_slider",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-blog-slider extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Slider Type", 'burst' ),
			"param_name" => "type",
			"value" => array(
				esc_html__( "Info Centered", 'burst' ) => "center",
				esc_html__( "Info in Bottom", 'burst' ) => "bottom"
				),
            "save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Order By", 'burst' ),
			"param_name" => "order_by",
			"value" => array(
				"" => "",
				esc_html__( "Title", 'burst' ) => "title",
				esc_html__( "Date", 'burst' ) => "date"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Order", 'burst' ),
			"param_name" => "order",
			"value" => array(
				"" => "",
				esc_html__( "ASC", 'burst' ) => "ASC",
				esc_html__( "DESC", 'burst' ) => "DESC",
			)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Number", 'burst' ),
			"param_name" => "number",
			"value" => "-1",
			"description" => esc_html__( "Number of blog posts on page (-1 is all)", 'burst' )
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Title Tag", 'burst' ),
			"param_name" => "title_tag",
			"value" => array(
				""   => "",
				esc_html__( "h2", 'burst' ) => "h2",
				esc_html__( "h3", 'burst' ) => "h3",
				esc_html__( "h4", 'burst' ) => "h4",
				esc_html__( "h5", 'burst' ) => "h5",
				esc_html__( "h6", 'burst' ) => "h6",
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image size", 'burst' ),
			"param_name" => "image_size",
			"value" => array(
				esc_html__( "Default", 'burst' ) => "",
				esc_html__( "Original Size", 'burst' ) => "full",
				esc_html__( "Landscape", 'burst' ) => "landscape",
				esc_html__( "Portrait", 'burst' ) => "portrait",
				esc_html__( "Custom Size", 'burst' ) => "custom"
			)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image Width", 'burst' ),
			"param_name" => "image_width",
			"value" => "",
			"description" => esc_html__( "Set custom image width", 'burst' ),
			"dependency" => array("element" => "image_size", "value" => array("custom"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image Height", 'burst' ),
			"param_name" => "image_height",
			"value" => "",
			"description" => esc_html__( "Set custom image height", 'burst' ),
			"dependency" => array("element" => "image_size", "value" => array("custom"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Category", 'burst' ),
			"param_name" => "category",
			"value" => "",
			"description" => esc_html__( "Category Slug (leave empty for all)", 'burst' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Selected Projects", 'burst' ),
			"param_name" => "selected_projects",
			"value" => "",
			"description" => esc_html__( "Selected Projects (leave empty for all, delimit by comma)", 'burst' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Category", 'burst' ),
			"param_name" => "show_category",
			"value" => array(
				esc_html__( "Default", 'burst' ) => "",
				esc_html__( "Yes", 'burst' ) => "yes",
				esc_html__( "No", 'burst' ) => "no"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Author", 'burst' ),
			"param_name" => "show_author",
			"value" => array(
				esc_html__( "Default", 'burst' ) => "",
				esc_html__( "Yes", 'burst' ) => "yes",
				esc_html__( "No", 'burst' ) => "no"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Date", 'burst' ),
			"param_name" => "show_date",
			"value" => array(
				esc_html__( "Default", 'burst' ) => "",
				esc_html__( "Yes", 'burst' ) => "yes",
				esc_html__( "No", 'burst' ) => "no"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Comments", 'burst' ),
			"param_name" => "show_comments",
			"value" => array(
				esc_html__( "Default", 'burst' ) => "",
				esc_html__( "Yes", 'burst' ) => "yes",
				esc_html__( "No", 'burst' ) => "no"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Read More Button", 'burst' ),
			"param_name" => "show_read_more",
			"value" => array(
				esc_html__( "Default", 'burst' ) => "",
				esc_html__( "Yes", 'burst' ) => "yes",
				esc_html__( "No", 'burst' ) => "no"
			)
		),
	)
) );

/*** Vertical Split Slider ***/

class WPBakeryShortCode_No_Vertical_Split_Slider  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" =>  esc_html__( 'Mikado Vertical Split Slider', 'burst' ),
	"base" => "no_vertical_split_slider",
	"as_parent" => array('only' => 'no_vertical_left_sliding_panel,no_vertical_right_sliding_panel'),
	"content_element" => true,
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-vertical-split-slider extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Preloader Background Color", 'burst' ),
			"param_name" => "background_color",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Left Slide Panel size (%)", 'burst' ),
			"param_name" => "left_slide_panel_size"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Right Slide Panel size (%)", 'burst' ),
			"param_name" => "right_slide_panel_size"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Disable Dark/Light Header Skin Change", 'burst' ),
			"param_name" => "disable_header_skin_change",
			"value" => array(
				esc_html__( "No", 'burst' ) => "no",
				esc_html__( "Yes", 'burst' ) => "yes"
			),
            "save_always" => true
		)
	)
) );


/*** Vertical Split Slider Left Panel ***/

class WPBakeryShortCode_No_Vertical_Left_Sliding_Panel  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" =>  esc_html__( 'Left Sliding Panel', 'burst' ),
	"base" => "no_vertical_left_sliding_panel",
	"as_parent" => array('only' => 'no_vertical_slide_content_item'),
	"as_child" => array('only' => 'no_vertical_split_slider'),
	"content_element" => true,
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-vertical-split-slider-left-panel extended-custom-icon",
	"show_settings_on_create" => false,
	"js_view" => 'VcColumnView',
	'params' => array()
) );


/*** Vertical Split Slider Right Panel ***/

class WPBakeryShortCode_No_Vertical_Right_Sliding_Panel  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" =>  esc_html__( 'Right Sliding Panel', 'burst' ),
	"base" => "no_vertical_right_sliding_panel",
	"as_parent" => array('only' => 'no_vertical_slide_content_item'),
	"as_child" => array('only' => 'no_vertical_split_slider'),
	"content_element" => true,
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-vertical-split-slider-right-panel extended-custom-icon",
	"show_settings_on_create" => false,
	"js_view" => 'VcColumnView',
	'params' => array()
) );


/*** Vertical Split Slider Content Item ***/

class WPBakeryShortCode_No_Vertical_Slide_Content_Item  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" =>  esc_html__( 'Slide Content Item', 'burst' ),
	"base" => "no_vertical_slide_content_item",
	"as_parent" => array('except' => 'vc_row, vc_accordion, no_cover_boxes, no_portfolio_list, no_portfolio_slider, no_carousel'),
	"as_child" => array('only' => 'no_vertical_left_sliding_panel, no_vertical_right_sliding_panel'),
	"content_element" => true,
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-vertical-split-slider-content-item extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Color", 'burst' ),
			"param_name" => "background_color",
			"value" => ""
		),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Image", 'burst' ),
			"param_name" => "background_image",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Padding left/right", 'burst' ),
			"param_name" => "item_padding",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 10px", 'burst' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Content Aligment", 'burst' ),
			"param_name" => "alignment",
			"value" => array(
				esc_html__( "left", 'burst' ) => "left",
				esc_html__( "right", 'burst' ) => "right",
				esc_html__( "center", 'burst' ) => "center"
			),
            "save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Header/Bullets Style", 'burst' ),
			"param_name" => "header_style",
			"value" => array(
				""	=>	"",
				esc_html__( "Light", 'burst' ) => "light",
				esc_html__( "Dark", 'burst' ) => "dark"
			)
		)

	)
) );


/*** Vertical Split Slider With Text Over ***/

class WPBakeryShortCode_No_Vertical_Split_Slider_With_Text_Over  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" =>  esc_html__( 'Mikado Vertical Split Slider With Text Over', 'burst' ),
	"base" => "no_vertical_split_slider_with_text_over",
	"as_parent" => array('only' => 'no_vertical_split_slider_with_text_over_left_panel,no_vertical_split_slider_with_text_over_right_panel'),
	"content_element" => true,
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-vertical-split-slider extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Preloader Background Color", 'burst' ),
			"param_name" => "background_color",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Slider Title", 'burst' ),
			"param_name" => "slide_title",
			"value" => ""
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Color", 'burst' ),
			"param_name" => "title_color"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font Size (px)", 'burst' ),
			"param_name" => "title_font_size",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font Family", 'burst' ),
			"param_name" => "title_font_family"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Line Height (px)", 'burst' ),
			"param_name" => "title_line_height",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Letter Spacing (px)", 'burst' ),
			"param_name" => "title_letter_spacing",
			"value" => ""
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font Weight", 'burst' ),
			"param_name" => "title_font_weight",
			"value" => array(
				esc_html__( "Default", 'burst' ) => "",
				esc_html__( "Thin 100", 'burst' ) => "100",
				esc_html__( "Extra-Light 200", 'burst' ) => "200",
				esc_html__( "Light 300", 'burst' ) => "300",
				esc_html__( "Regular 400", 'burst' ) => "400",
				esc_html__( "Medium 500", 'burst' ) => "500",
				esc_html__( "Semi-Bold 600", 'burst' ) => "600",
				esc_html__( "Bold 700", 'burst' ) => "700",
				esc_html__( "Extra-Bold 800", 'burst' ) => "800",
				esc_html__( "Ultra-Bold 900", 'burst' ) => "900"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text Transform", 'burst' ),
			"param_name" => "title_text_transform",
			"value" => array(
				esc_html__( "Default", 'burst' ) => "",
				esc_html__( "None", 'burst' ) => "none",
				esc_html__( "Capitalize", 'burst' ) => "capitalize",
				esc_html__( "Uppercase", 'burst' ) => "uppercase",
				esc_html__( "Lowercase", 'burst' ) => "lowercase"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font Style", 'burst' ),
			"param_name" => "title_font_style",
			"value" => array(
				"" => "",
				esc_html__( "Normal", 'burst' ) => "normal",
				esc_html__( "Italic", 'burst' ) => "italic"
			)
		)
	)
) );


/*** Vertical Split Slider With Text Over Left Panel ***/

class WPBakeryShortCode_No_Vertical_Split_Slider_With_Text_Over_Left_Panel  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" =>  esc_html__( 'Left Panel', 'burst' ),
	"base" => "no_vertical_split_slider_with_text_over_left_panel",
	"as_parent" => array('only' => 'no_vertical_split_slider_with_text_over_content'),
	"as_child" => array('only' => 'no_vertical_split_slider_with_text_over'),
	"content_element" => true,
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-vertical-split-slider-left-panel extended-custom-icon",
	"show_settings_on_create" => false,
	"params" => array(),
	"js_view" => 'VcColumnView'
) );


/*** Vertical Split Slider With Text Over Right Panel ***/

class WPBakeryShortCode_No_Vertical_Split_Slider_With_Text_Over_Right_Panel  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" =>  esc_html__( 'Right Panel', 'burst' ),
	"base" => "no_vertical_split_slider_with_text_over_right_panel",
	"as_parent" => array('only' => 'no_vertical_split_slider_with_text_over_content'),
	"as_child" => array('only' => 'no_vertical_split_slider_with_text_over'),
	"content_element" => true,
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-vertical-split-slider-right-panel extended-custom-icon",
	"show_settings_on_create" => false,
	"params" => array(),
	"js_view" => 'VcColumnView'
) );


/*** Vertical Split Slider With Text Over Content ***/

class WPBakeryShortCode_No_Vertical_Split_Slider_With_Text_Over_Content  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" =>  esc_html__( 'Slide Content Item', 'burst' ),
	"base" => "no_vertical_split_slider_with_text_over_content",
	"as_child" => array('only' => 'no_vertical_split_slider_with_text_over_left_panel, no_vertical_split_slider_with_text_over_right_panel'),
	"content_element" => true,
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-vertical-split-slider-content-item extended-custom-icon",
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image", 'burst' ),
			"param_name" => "background_image",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Link", 'burst' ),
			"param_name" => "link"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Link Target", 'burst' ),
			"param_name" => "target",
			"value" => array(
				esc_html__( "Self", 'burst' ) => "_self",
				esc_html__( "Blank", 'burst' ) => "_blank"
			),
            "save_always" => true
		)

	)
) );

/*** Parallax Layers ***/

vc_map( array(
	"name" => esc_html__( "Parallax Layers", 'burst' ),
	"base" => "no_parallax_layers",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-parallax-layers extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "attach_images",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Layers", 'burst' ),
			"param_name" => "images"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Full Screen Height", 'burst' ),
			"param_name" => "full_screen",
			"value" => array(
				esc_html__( "No", 'burst' ) => "no",
				esc_html__( "Yes", 'burst' ) => "yes"
			),
            "save_always" => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Height (px)", 'burst' ),
			"param_name" => "height",
			"value" => "",
			"dependency" => array('element' => 'full_screen', 'value' => 'no')
		),
        array(
            "type" => "textarea_html",
            "holder" => "div",
            "class" => "",
            "heading" => esc_html__( "Content", 'burst' ),
            "param_name" => "content",
            "value" => "",
            "description" => esc_html__( "This content will be displayed as final (top) layer over all other layers", 'burst' )
        )
	)
) );


/*** Google Map ***/

vc_map( array(
	"name" => esc_html__( "Google Map", 'burst' ),
	"base" => "no_google_map",
	"icon" => "icon-wpb-google-map extended-custom-icon",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Address 1", 'burst' ),
			"param_name" => "address1"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Address 2", 'burst' ),
			"param_name" => "address2"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Address 3", 'burst' ),
			"param_name" => "address3"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Address 4", 'burst' ),
			"param_name" => "address4"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Address 5", 'burst' ),
			"param_name" => "address5"
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Custom Map Style", 'burst' ),
			"param_name" => "custom_map_style",
			"value" => array(
				esc_html__( "No", 'burst' ) => "false",
				esc_html__( "Yes", 'burst' ) => "true"
			),
            "save_always" => true,
			"description" => esc_html__( "Enabling this option will allow Map editing", 'burst' )
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Color Overlay", 'burst' ),
			"param_name" => "color_overlay",
			"description" => esc_html__( "Choose a Map color overlay", 'burst' ),
			"dependency" => Array('element' => "custom_map_style", 'value' => array('true'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Saturation", 'burst' ),
			"param_name" => "saturation",
			"description" => esc_html__( "Choose a level of saturation (-100 = least saturated, 100 = most saturated)", 'burst' ),
			"dependency" => Array('element' => "custom_map_style", 'value' => array('true'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Lightness", 'burst' ),
			"param_name" => "lightness",
			"description" => esc_html__( "Choose a level of lightness (-100 = darkest, 100 = lightest)", 'burst' ),
			"dependency" => Array('element' => "custom_map_style", 'value' => array('true'))
		),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Pin", 'burst' ),
			"param_name" => "pin",
			"description" => esc_html__( "Select a pin image to be used on Google Map", 'burst' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Map Zoom", 'burst' ),
			"param_name" => "zoom",
			"description" => esc_html__( "Enter a zoom factor for Google Map (0 = whole worlds, 19 = individual buildings)", 'burst' )
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Zoom Map on Mouse Wheel", 'burst' ),
			"param_name" => "google_maps_scroll_wheel",
			"value" => array(
				esc_html__( "No", 'burst' ) => "false",
				esc_html__( "Yes", 'burst' ) => "true"
			),
            "save_always" => true,
			"description" => esc_html__( "Enabling this option will allow users to zoom in on Map using mouse wheel", 'burst' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Map Height", 'burst' ),
			"param_name" => "map_height"
		),
		array(
			"type" => "checkbox",
			"class" => "",
			"heading" => esc_html__( "Fullscreen Map Height", 'burst' ),
			"param_name" => "full_screen_map_height",
			"value" => array("Enable Fullscreen Map Height?" => "yes"),
			"description" => esc_html__( "Use only with Vertical Split Slider", 'burst' )
		),

		array(
			"type" => "checkbox",
			"class" => "",
			"heading" => esc_html__( "Additional Informations", 'burst' ),
			"param_name" => "enable_additional_informations",
			"value" => array("Enable Additional Informations Box?" => "yes"),
			"description" => esc_html__( 'You can set options for this box in "Addition Informations" tab', 'burst' )
		),
		array(
			"type" => "textarea_html",
			"class" => "",
			"group" => esc_html__( "Additional Informations", 'burst' ),
			"heading" => esc_html__( "Additional Informations Text", 'burst' ),
			"param_name" => "content",
			"value" =>"",
			"description" => esc_html__( "Please Insert Additional Informations", 'burst' ),
			"dependency" => Array('element' => "enable_additional_informations", 'value' => array('yes'))
		),
        array(
            "type" => "dropdown",
            "holder" => "div",
            "class" => "",
            "group" => esc_html__( "Additional Informations", 'burst' ),
            "heading" => esc_html__( "Hide info box on small screens", 'burst' ),
            "param_name" => "info_box_hide_on_small_screens",
            "value" => array(
                esc_html__( "No ", 'burst' ) => "no",
                esc_html__( "Yes", 'burst' ) => "yes"
            ),
            "save_always" => true,
            "dependency" => Array('element' => "enable_additional_informations", 'value' => array('yes')),
            "description" => esc_html__( "Hide info box on screens equal and smaller than 768px.", 'burst' )
        ),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Additional Informations", 'burst' ),
			"heading" => esc_html__( "Info box aligned to grid", 'burst' ),
			"param_name" => "info_box_grid",
			"value" => array(
				esc_html__( "No ", 'burst' ) => "no",
				esc_html__( "Yes", 'burst' ) => "yes"
			),
            "save_always" => true,
			"dependency" => Array('element' => "enable_additional_informations", 'value' => array('yes')),
			"description" => esc_html__( "This options applies only when the map is full width.", 'burst' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Additional Informations", 'burst' ),
			"heading" => esc_html__( "Info Box Left/Right Aligment", 'burst' ),
			"param_name" => "info_box_left_right_aligment",
			"value" => array(
				esc_html__( "Left ", 'burst' ) => "left",
				esc_html__( "Right", 'burst' ) => "right"
			),
            "save_always" => true,
			"dependency" => Array('element' => "enable_additional_informations", 'value' => array('yes'))
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Additional Informations", 'burst' ),
			"heading" => esc_html__( "Info Box Top/Bottom Aligment", 'burst' ),
			"param_name" => "info_box_top_bottom_aligment",
			"value" => array(
				esc_html__( "Top", 'burst' ) => "top",
				esc_html__( "Bottom", 'burst' ) => "bottom"
			),
            "save_always" => true,
			"dependency" => Array('element' => "enable_additional_informations", 'value' => array('yes'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Additional Informations", 'burst' ),
			"heading" => esc_html__( "Info box position from Left/Right edge(px)", 'burst' ),
			"param_name" => "info_box_left_right_distance",
			"value" => "",
			"dependency" => Array('element' => "enable_additional_informations", 'value' => array('yes'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Additional Informations", 'burst' ),
			"heading" => esc_html__( "Info box position from Top/Bottom edge(px)", 'burst' ),
			"param_name" => "info_box_top_bottom_distance",
			"value" => "",
			"dependency" => Array('element' => "enable_additional_informations", 'value' => array('yes'))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Additional Informations", 'burst' ),
			"heading" => esc_html__( "Info box background color", 'burst' ),
			"param_name" => "info_box_background_color",
			"value" => "",
			"dependency" => Array('element' => "enable_additional_informations", 'value' => array('yes'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Additional Informations", 'burst' ),
			"heading" => esc_html__( "Info box width(%)", 'burst' ),
			"param_name" => "info_box_width",
			"value" => "",
			"dependency" => Array('element' => "enable_additional_informations", 'value' => array('yes'))
		)
	)
));



/*** Team ***/

$team_social_icons_array = array();
for ($x = 1; $x<6; $x++) {
	$teamIconCollections = $burst_mikado_IconCollections->getCollectionsWithSocialIcons();
	foreach($teamIconCollections as $collection_key => $collection) {

		$team_social_icons_array[] = array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Social Icon ", 'burst' ).$x,
			"param_name" => "team_social_".$collection->param."_".$x,
			"value" => $collection->getSocialIconsArrayVC(),
            "save_always" => true,
			"dependency" => Array('element' => "team_social_icon_pack", 'value' => array($collection_key))
		);

	}

	$team_social_icons_array[] = array(
		"type" => "textfield",
		"holder" => "div",
		"class" => "",
		"heading" => esc_html__( " Link", 'burst' ),
		"param_name" => "team_social_icon_".$x."_link",
		"dependency" => array('element' => 'team_social_icon_pack', 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
	);

	$team_social_icons_array[] = array(
		"type" => "dropdown",
		"holder" => "div",
		"class" => "",
		"heading" => esc_html__( " Target", 'burst' ),
		"param_name" => "team_social_icon_".$x."_target",
		"value" => array(
			"" => "",
			esc_html__( "Self", 'burst' ) => "_self",
			esc_html__( "Blank", 'burst' ) => "_blank"
		),
		"dependency" => Array('element' => "team_social_icon_".$x."_link", 'not_empty' => true)
	);

}

vc_map( array(
	"name" => esc_html__( "Team", 'burst' ),
	"base" => "no_team",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-team extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		array(
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Type", 'burst' ),
				"param_name" => "team_type",
				"value" => array(
					esc_html__( "Main Info on Hover", 'burst' ) => "on_hover",
					esc_html__( "Main Info Below Image", 'burst' ) => "below_image"
				),
                "save_always" => true
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Image", 'burst' ),
				"param_name" => "team_image"
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Image Type", 'burst' ),
				"param_name" => "team_image_type",
				"value" => array(
					esc_html__( "Default", 'burst' ) => "",
					esc_html__( "Circle", 'burst' ) => "circle"
				)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Image hover color", 'burst' ),
				"param_name" => "team_image_hover_color"
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Hover Type", 'burst' ),
				"param_name" => "team_hover_type",
				"value" => array(
					esc_html__( "Text In Center", 'burst' ) => "in_center",
					esc_html__( "Text in Left Corner", 'burst' ) => "in_corner"
				),
                "save_always" => true,
				"dependency" => array('element' => "team_type", 'value' => array('on_hover'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Image Bottom Margin", 'burst' ),
				"param_name" => "team_info_margin_top",
				"dependency" => array('element' => "team_type", 'value' => array('below_image'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Name", 'burst' ),
				"param_name" => "team_name"
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Name Tag", 'burst' ),
				"param_name" => "team_name_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'burst' ) => "h2",
					esc_html__( "h3", 'burst' ) => "h3",
					esc_html__( "h4", 'burst' ) => "h4",
					esc_html__( "h5", 'burst' ) => "h5",
					esc_html__( "h6", 'burst' ) => "h6",
				),
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Margin bottom(px)", 'burst' ),
				"param_name" => "team_name_bottom_margin",
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Name font size(px)", 'burst' ),
				"param_name" => "team_name_font_size",
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Name color", 'burst' ),
				"param_name" => "team_name_color",
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Name font weight", 'burst' ),
				"param_name" => "team_name_font_weight",
				"value" => $font_weight_array,
                "save_always" => true,
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Name text transform", 'burst' ),
				"param_name" => "team_name_text_transform",
				"value" => array(
					esc_html__( "Default", 'burst' ) => "",
					esc_html__( "None", 'burst' ) => "none",
					esc_html__( "Capitalize", 'burst' ) => "capitalize",
					esc_html__( "Uppercase", 'burst' ) => "uppercase",
					esc_html__( "Lowercase", 'burst' ) => "lowercase"
				),
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Show Separator", 'burst' ),
				"param_name" => "team_show_separator",
				"value" => array(
					esc_html__( "Yes", 'burst' ) => "yes",
					esc_html__( "No", 'burst' ) => "no"
				),
                "save_always" => true
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator width", 'burst' ),
				"param_name" => "team_separator_width",
				"dependency" => array('element' => 'team_show_separator', 'value' => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator thickness", 'burst' ),
				"param_name" => "team_separator_thickness",
				"dependency" => array('element' => 'team_show_separator', 'value' => "yes")
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator color", 'burst' ),
				"param_name" => "team_separator_color",
				"dependency" => array('element' => 'team_show_separator', 'value' => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Position", 'burst' ),
				"param_name" => "team_position"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Position font size(px)", 'burst' ),
				"param_name" => "team_position_font_size",
				"dependency" => array('element' => 'team_position', 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Position color", 'burst' ),
				"param_name" => "team_position_color",
				"dependency" => array('element' => 'team_position', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Position font weight", 'burst' ),
				"param_name" => "team_position_font_weight",
				"value" => $font_weight_array,
                "save_always" => true,
				"dependency" => array('element' => 'team_position', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Position text transform", 'burst' ),
				"param_name" => "team_position_text_transform",
				"value" => array(
					esc_html__( "Default", 'burst' ) => "",
					esc_html__( "None", 'burst' ) => "none",
					esc_html__( "Capitalize", 'burst' ) => "capitalize",
					esc_html__( "Uppercase", 'burst' ) => "uppercase",
					esc_html__( "Lowercase", 'burst' ) => "lowercase"
				),
				"dependency" => array('element' => 'team_position', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Name/Position Order", 'burst' ),
				"param_name" => "name_position_order",
				"value" => array(
					esc_html__( "Default", 'burst' ) => "",
					esc_html__( "Name Before Position", 'burst' ) => "name_first",
					esc_html__( "Position Before Name", 'burst' ) => "position_first"
				),
				"description" => esc_html__( "Choose in which order will name and position appear", 'burst' )
			),
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Description", 'burst' ),
				"param_name" => "team_description"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Description color", 'burst' ),
				"param_name" => "team_description_color",
				"dependency" => array('element' => 'team_description', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text align", 'burst' ),
				"param_name" => "text_align",
				"value" => array(
					esc_html__( "Default", 'burst' ) => "",
					esc_html__( "Left", 'burst' ) => "left_align",
					esc_html__( "Center", 'burst' ) => "center_align",
					esc_html__( "Right", 'burst' ) => "right_align"
				)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Color", 'burst' ),
				"param_name" => "background_color"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Box Border", 'burst' ),
				"param_name" => "box_border",
				"value" => array(
					esc_html__( "Default", 'burst' ) => "",
					esc_html__( "No", 'burst' ) => "no",
					esc_html__( "Yes", 'burst' ) => "yes"
				)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Box Border Width", 'burst' ),
				"param_name" => "box_border_width",
				"value" => "",
				"dependency" => array('element' => "box_border", 'value' => array('yes'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Box Border Color", 'burst' ),
				"param_name" => "box_border_color",
				"value" => "",
				"dependency" => array('element' => "box_border", 'value' => array('yes'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icon Pack", 'burst' ),
				"param_name" => "team_social_icon_pack",
				"value" => array_merge(array("" => ""),$burst_mikado_IconCollections->getIconCollectionsVCExclude(array('linea_icons','dripicons'))),
                "save_always" => true
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Style", 'burst' ),
				"param_name" => "team_social_style",
				"value" => array(
					esc_html__( "In the Bottom Left Corner", 'burst' ) => "social_style_bottom_left",
					esc_html__( "Between Image and Info", 'burst' ) => "social_style_between",
					esc_html__( "In the center of the image", 'burst' ) => "social_style_center",
					esc_html__( "In the bottom of the image", 'burst' ) => "social_style_bottom"
				),
                "save_always" => true,
				"description" => esc_html__( "Social Style applies only when Main Info Below Image type is selected", 'burst' ),
				"dependency" => array('element' => 'team_social_icon_pack', 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons Border color", 'burst' ),
				"param_name" => "team_social_icon_holder_border_color",
				"description" => esc_html__( "Social Icons Background Color applies only when Social Style On the bottom of the image is selected", 'burst' ),
				"dependency" => array('element' => 'team_social_icon_pack', 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons Background color", 'burst' ),
				"param_name" => "team_social_icon_holder_back_color",
				"description" => esc_html__( "Social Icons Background Color applies only when Social Style On the bottom of the image is selected", 'burst' ),
				"dependency" => array('element' => 'team_social_icon_pack', 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
			),			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons Position", 'burst' ),
				"param_name" => "social_icons_position",
				"value" => array(
					esc_html__( "Left", 'burst' ) => "left",
					esc_html__( "Center", 'burst' ) => "center",
					esc_html__( "Right", 'burst' ) => "right"
				),
                "save_always" => true,
				"description" => esc_html__( "Social Icons Position applies only when Main Info Below Image type is selected", 'burst' ),
				"dependency" => array('element' => 'team_social_style', 'value' => array("social_style_between"))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Text", 'burst' ),
				"param_name" => "social_icons_text",
				"value" => "",
				"description" => esc_html__( "Enter text that will display above social icons", 'burst' ),
				"dependency" => array('element' => 'team_social_style', 'value' => array("social_style_center","social_style_bottom","social_style_bottom_left"))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Text Color", 'burst' ),
				"param_name" => "social_icons_text_color",
				"dependency" => array('element' => 'social_icons_text', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons Type", 'burst' ),
				"param_name" => "team_social_icon_type",
				"value" => array(
					esc_html__( "Normal", 'burst' ) => "normal",
					esc_html__( "Circle", 'burst' ) => "circle",
					esc_html__( "Square", 'burst' ) => "square"
				),
                "save_always" => true,
				"dependency" => array('element' => 'team_social_icon_pack', 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons Size(px)", 'burst' ),
				"param_name" => "team_social_icon_size",
				"dependency" => array('element' => 'team_social_icon_pack', 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons color", 'burst' ),
				"param_name" => "team_social_icon_color",
				"dependency" => array('element' => 'team_social_icon_pack', 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons Background Color", 'burst' ),
				"param_name" => "team_social_icon_background_color",
				"dependency" => array('element' => 'team_social_icon_type', 'value' => array('circle', 'square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons Border Color", 'burst' ),
				"param_name" => "team_social_icon_border_color",
				"dependency" => array('element' => 'team_social_icon_type', 'value' => array('circle', 'square'))
			)
		),
		$team_social_icons_array,
		array(
			array(
				"type" => "checkbox",
				"class" => "",
				"heading" => esc_html__( "Team Member Skills", 'burst' ),
				"value" => array("Show Team Member Skills?" => "yes"),
				"param_name" => "show_skills"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Skills Title Size", 'burst' ),
				"param_name" => "skills_title_size",
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "First Skill Title", 'burst' ),
				"param_name" => "skill_title_1",
				"description" => esc_html__( "For example Web design", 'burst' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "First Skill Percentage", 'burst' ),
				"param_name" => "skill_percentage_1",
				"description" => esc_html__( "Enter just number, without %", 'burst' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Second Skill Title", 'burst' ),
				"param_name" => "skill_title_2",
				"description" => esc_html__( "For example Web design", 'burst' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Second Skill Percentage", 'burst' ),
				"param_name" => "skill_percentage_2",
				"description" => esc_html__( "Enter just number, without %", 'burst' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Third Skill Title", 'burst' ),
				"param_name" => "skill_title_3",
				"description" => esc_html__( "For example Web design", 'burst' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Third Skill Percentage", 'burst' ),
				"param_name" => "skill_percentage_3",
				"description" => esc_html__( "Enter just number, without %", 'burst' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			)
		)
	)

) );


/*** Clients ***/

class WPBakeryShortCode_No_Clients  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "burst", 'burst' ),
	"base" => "no_clients",
	"as_parent" => array('only' => 'no_client'),
	"content_element" => true,
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-clients extended-custom-icon",
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Columns", 'burst' ),
			"param_name" => "columns",
			"value" => array(
				esc_html__( "Two", 'burst' ) => "two_columns",
				esc_html__( "Three", 'burst' ) => "three_columns",
				esc_html__( "Four", 'burst' ) => "four_columns",
				esc_html__( "Five", 'burst' ) => "five_columns",
				esc_html__( "Six", 'burst' ) => "six_columns"
			),
            "save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show borders", 'burst' ),
			"param_name" => "client_borders",
			"value" => array(
				esc_html__( "Yes", 'burst' ) => "yes",
				esc_html__( "No", 'burst' ) => "no"
			),
            "save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Space between clients", 'burst' ),
			"param_name" => "space_between_clients",
			"description" => esc_html__( "When yes, space will be 10px", 'burst' ),
			"value" => array(
				esc_html__( "No", 'burst' ) => "no",
				esc_html__( "Yes", 'burst' ) => "yes"
			),
            "save_always" => true
		)
	),
	"js_view" => 'VcColumnView'
) );


/*** Client ***/

class WPBakeryShortCode_No_Client extends WPBakeryShortCode {}
vc_map( array(
	"name" => esc_html__( "burst", 'burst' ),
	"base" => "no_client",
	"content_element" => true,
	"icon" => "icon-wpb-client extended-custom-icon",
	"as_child" => array('only' => 'no_clients'),
	"params" => array(
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image", 'burst' ),
			"param_name" => "image"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Link", 'burst' ),
			"param_name" => "link"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Link Target", 'burst' ),
			"param_name" => "link_target",
			"value" => array(
				"" => "",
				esc_html__( "Self", 'burst' ) => "_self",
				esc_html__( "Blank", 'burst' ) => "_blank"
			)
		)
	)
) );


/*** Circles ***/

class WPBakeryShortCode_No_Circles  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "burst", 'burst' ),
	"base" => "no_circles",
	"as_parent" => array('only' => 'no_circle'),
	"content_element" => true,
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-circles extended-custom-icon",
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Columns", 'burst' ),
			"param_name" => "columns",
			"value" => array(
				esc_html__( "Three", 'burst' ) => "three_columns",
				esc_html__( "Four", 'burst' ) => "four_columns",
				esc_html__( "Five", 'burst' ) => "five_columns",
				esc_html__( "Six", 'burst' ) => "six_columns"
			),
            "save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Lines between items?", 'burst' ),
			"param_name" => "lines_between",
			"value" => array(
				esc_html__( "Default", 'burst' ) => "",
				esc_html__( "No", 'burst' ) => "no",
				esc_html__( "Yes", 'burst' ) => "yes"
			)
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Line Color", 'burst' ),
			"param_name" => "line_color"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Process Item Height (px)", 'burst' ),
			"param_name" => "process_height"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Process Item Width (px)", 'burst' ),
			"param_name" => "process_width"
		)
	),
	"js_view" => 'VcColumnView'
) );


/*** Circle ***/

class WPBakeryShortCode_No_Circle extends WPBakeryShortCode {}
vc_map( array(
	"name" => esc_html__( "burst", 'burst' ),
	"base" => "no_circle",
	"content_element" => true,
	"icon" => "icon-wpb-circle extended-custom-icon",
	"as_child" => array('only' => 'no_circles'),
	"params" => array_merge(
		array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Type", 'burst' ),
				"param_name" => "type",
				"value" => array(
					esc_html__( "Icon in Process", 'burst' ) => "icon_type",
					esc_html__( "Image", 'burst' ) => "image_type",
					esc_html__( "Text in Process", 'burst' ) => "text_type",
					esc_html__( "Image with Text", 'burst' ) => "image_with_text_type"
				),
                "save_always" => true
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Process Background Image", 'burst' ),
				"param_name" => "background_image",
				"dependency" => array('element' => "type", 'value' => array("icon_type"))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Process Color", 'burst' ),
				"param_name" => "background_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Process Transparency", 'burst' ),
				"param_name" => "background_transparency",
				"description" => esc_html__( "Insert value between 0 and 1", 'burst' )
			),
			array(
				"type" => "checkbox",
				"class" => "",
				"heading" => esc_html__( "", 'burst' ),
				"value" => array("Without outer border?" => "yes"),
				"param_name" => "without_double_border"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Gap Color", 'burst' ),
				"param_name" => "gap_color",
				"description" => esc_html__( "Set the color between two borders. Note, this color will extend to the whole circle if the initial background color has not been set.", 'burst' )
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Process Color", 'burst' ),
				"param_name" => "border_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Process Width", 'burst' ),
				"param_name" => "border_width"
			)
		),
		$burst_mikado_IconCollections->getVCParamsArray( array( 'element' => 'type', 'value' => array( 'icon_type' ) ) ),
		array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Size", 'burst' ),
				"param_name" => "size",
				"description" => esc_html__( "Enter just number. Omit px", 'burst' ),
				"dependency" => array('element' => "type", 'value' => array("icon_type"))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Color", 'burst' ),
				"param_name" => "icon_color",
				"dependency" => array('element' => "type", 'value' => array("icon_type"))
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Image", 'burst' ),
				"param_name" => "image",
				"dependency" => array('element' => "type", 'value' => array("image_type", "image_with_text_type"))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text in Process", 'burst' ),
				"param_name" => "text_in_circle",
				"dependency" => array('element' => "type", 'value' => array("text_type", "image_with_text_type"))
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Text in Process Tag", 'burst' ),
				"param_name" => "text_in_circle_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'burst' ) => "h2",
					esc_html__( "h3", 'burst' ) => "h3",
					esc_html__( "h4", 'burst' ) => "h4",
					esc_html__( "h5", 'burst' ) => "h5",
					esc_html__( "h6", 'burst' ) => "h6",
				),
				"dependency" => array('element' => "text_in_circle", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text in Process Size (px)", 'burst' ),
				"param_name" => "font_size",
				"dependency" => array('element' => "text_in_circle", 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text in Process Color", 'burst' ),
				"param_name" => "text_in_circle_color",
				"dependency" => array('element' => "text_in_circle", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Link", 'burst' ),
				"param_name" => "link"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Link Target", 'burst' ),
				"param_name" => "link_target",
				"value" => array(
					"" => "",
					esc_html__( "Self", 'burst' ) => "_self",
					esc_html__( "Blank", 'burst' ) => "_blank"
				),
				"dependency" => array('element' => "link", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title", 'burst' ),
				"param_name" => "title"
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Tag", 'burst' ),
				"param_name" => "title_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'burst' ) => "h2",
					esc_html__( "h3", 'burst' ) => "h3",
					esc_html__( "h4", 'burst' ) => "h4",
					esc_html__( "h5", 'burst' ) => "h5",
					esc_html__( "h6", 'burst' ) => "h6",
				),
				"dependency" => array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Font Size (px)", 'burst' ),
				"param_name" => "title_font_size"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'burst' ),
				"param_name" => "title_color",
				"dependency" => array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Alignment", 'burst' ),
				"param_name" => "title_alignment",
				"value" => array(
					""   => "",
					esc_html__( "Left", 'burst' ) => "title_left",
					esc_html__( "Center", 'burst' ) => "title_center",
					esc_html__( "Right", 'burst' ) => "title_right"
				),
				"dependency" => array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text", 'burst' ),
				"param_name" => "text"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text Color", 'burst' ),
				"param_name" => "text_color",
				"dependency" => array('element' => "text", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Text Alignment", 'burst' ),
				"param_name" => "text_alignment",
				"value" => array(
					""   => "",
					esc_html__( "Left", 'burst' ) => "text_left",
					esc_html__( "Center", 'burst' ) => "text_center",
					esc_html__( "Right", 'burst' ) => "text_right"
				),
				"dependency" => array('element' => "text", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Space between circle and title", 'burst' ),
				"param_name" => "title_margin_top",
				"description" => esc_html__( "Enter just number. Omit px (default value is 24)", 'burst' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Space between title and text", 'burst' ),
				"param_name" => "text_margin_top",
				"description" => esc_html__( "Enter just number. Omit px (default value is 5)", 'burst' )
			)
		)
	)
) );


/*** Pricing Tables ***/

class WPBakeryShortCode_No_Pricing_Tables  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "burst", 'burst' ),
	"base" => "no_pricing_tables",
	"as_parent" => array('only' => 'no_pricing_table'),
	"content_element" => true,
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-pricing-tables extended-custom-icon",
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Columns", 'burst' ),
			"param_name" => "columns",
			"value" => array(
				esc_html__( "Two", 'burst' ) => "two_columns",
				esc_html__( "Three", 'burst' ) => "three_columns",
				esc_html__( "Four", 'burst' ) => "four_columns",
			),
            "save_always" => true
		)
	),
	"js_view" => 'VcColumnView'
) );


/*** Pricing Table ***/

class WPBakeryShortCode_No_Pricing_Table  extends WPBakeryShortCode {}
vc_map( array(
	"name" => esc_html__( "Pricing Table", 'burst' ),
	"base" => "no_pricing_table",
	"icon" => "icon-wpb-pricing-table extended-custom-icon",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"allowed_container_element" => 'vc_row',
	"as_child" => array('only' => 'no_pricing_tables'),
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__("Type", 'burst'),
			"param_name" => "type",
			"value" => array(
				esc_html__( "Price on top", 'burst' ) => "price_on_top",
				esc_html__( "Title on top", 'burst' ) => "title_on_top"
			),
            "save_always" => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title", 'burst' ),
			"param_name" => "title",
			"value" => ""
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Color", 'burst' ),
			"param_name" => "title_color"
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Background Color", 'burst' ),
			"param_name" => "title_background_color"
		),
		array(
            "type" => "attach_image",
            "holder" => "div",
            "class" => "",
            "heading" => esc_html__( "Title Background Image", 'burst' ),
            "param_name" => "title_background_image"
        ),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Font Family", 'burst' ),
			"param_name" => "title_font_family"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Small Separator", 'burst' ),
			"param_name" => "title_separator",
			"value" => array(
				esc_html__( "No", 'burst' ) => "no",
				esc_html__( "Yes", 'burst' ) => "yes"
			),
            "save_always" => true,
			"dependency" => array('element' => 'type', 'value' => 'price_on_top')
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Separator Color", 'burst' ),
			"param_name" => "title_separator_color",
			"dependency" => array('element' => 'title_separator', 'value' => 'yes')
		),
        array(
            "type" => "dropdown",
            "holder" => "div",
            "class" => "",
            "heading" => esc_html__( "Border Top", 'burst' ),
            "param_name" => "table_border_top",
            "value" => array(
                esc_html__( "Yes", 'burst' ) => "yes",
                esc_html__( "No", 'burst' ) => "no"
            ),
            "save_always" => true
        ),

        array(
            "type" => "colorpicker",
            "holder" => "div",
            "class" => "",
            "heading" => esc_html__( "Border Top Color", 'burst' ),
            "param_name" => "pricing_table_border_top_color",
            "dependency" => array('element' => "table_border_top", 'value' => "yes")
        ),

		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Border Around", 'burst' ),
			"param_name" => "border_arround",
			"value" => array(
				esc_html__( "No", 'burst' ) => "no",
				esc_html__( "Yes", 'burst' ) => "yes"
			),
            "save_always" => true,
			"description" => esc_html__( "Display border around table except the fileds with background image", 'burst' )
		),

		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Border Around Color", 'burst' ),
			"param_name" => "border_arround_color",
			"dependency" => array('element' => 'border_arround', 'value' => 'yes')
		),

		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price", 'burst' ),
			"param_name" => "price",
			"description" => esc_html__( "Default value is 100", 'burst' )
		),
		array(
            "type" => "colorpicker",
            "holder" => "div",
            "class" => "",
            "heading" => esc_html__( "Price Color", 'burst' ),
            "param_name" => "price_color"
        ),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price Background Image", 'burst' ),
			"param_name" => "price_bckg_image"
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price Background Color", 'burst' ),
			"param_name" => "price_background"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price Font Weight", 'burst' ),
			"param_name" => "price_font_weight",
			"value" => $font_weight_array,
            "save_always" => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Currency", 'burst' ),
			"param_name" => "currency",
			"description" => esc_html__( "Default mark is $", 'burst' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price Period", 'burst' ),
			"param_name" => "price_period",
			"description" => esc_html__( "Default label is monthly", 'burst' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price Period Position", 'burst' ),
			"param_name" => "price_period_position",
			"value" => array(
				esc_html__( "Default", 'burst' ) => "",
				esc_html__( "Next to Title", 'burst' ) => "next_to_title",
				esc_html__( "Bellow Title", 'burst' ) => "bellow_title"
			),
			"dependency" => array('element' => 'type', 'value' => 'price_on_top')
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Button", 'burst' ),
			"param_name" => "show_button",
			"value" => array(
				esc_html__( "Default", 'burst' ) => "",
				esc_html__( "Yes", 'burst' ) => "yes",
				esc_html__( "No", 'burst' ) => "no"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Button Type", 'burst' ),
			"param_name" => "pricing_button_type",
			"value" => array(
				esc_html__( "Standard Button", 'burst' ) => "standard_button",
				esc_html__( "Button on Bottom", 'burst' ) => "button_on_bottom"
			),
            "save_always" => true,
			"dependency" => array('element' => 'show_button',  'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Button Text", 'burst' ),
			"param_name" => "button_text",
			"description" => esc_html__( "Default text is button", 'burst' ),
			"dependency" => array('element' => 'pricing_button_type',  'value' => 'standard_button')
		),
		array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => esc_html__( "Button Font Size (px)", 'burst' ),
            "param_name" => "button_font_size",
            "dependency" => array('element' => 'show_button',  'value' => 'yes')
        ),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Button Size", 'burst' ),
			"value" => array(
				esc_html__( "Full Width", 'burst' ) => "full_width",
				esc_html__( "Normal", 'burst' ) => "normal"
			),
            "save_always" => true,
			"param_name" => "button_size",
			"description" => esc_html__( "This options is only used for type Title on Top", 'burst' ),
			"dependency" => array('element' => 'pricing_button_type',  'value' => 'standard_button')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Button Link", 'burst' ),
			"param_name" => "link",
			"dependency" => array('element' => 'show_button',  'value' => 'yes')
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Button Target", 'burst' ),
			"param_name" => "target",
			"value" => array(
				"" => "",
				esc_html__( "Self", 'burst' ) => "_self",
				esc_html__( "Blank", 'burst' ) => "_blank"
			),
			"dependency" => array('element' => 'link', 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Button Font Family", 'burst' ),
			"param_name" => "button_font_family",
			"dependency" => array('element' => 'show_button', 'value' => 'yes')
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Button Color", 'burst' ),
			"param_name" => "button_color",
			"dependency" => array('element' => 'show_button', 'value' => 'yes')
		),
		array(
            "type" => "colorpicker",
            "holder" => "div",
            "class" => "",
            "heading" => esc_html__( "Button Hover Color", 'burst' ),
            "param_name" => "button_hover_color",
            "dependency" => array('element' => 'show_button', 'value' => 'yes')
        ),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Button Background Color", 'burst' ),
			"param_name" => "button_background_color",
			"dependency" => array('element' => 'show_button', 'value' => 'yes')
		),
		array(
            "type" => "attach_image",
            "holder" => "div",
            "class" => "",
            "heading" => esc_html__( "Button Background Image", 'burst' ),
            "param_name" => "button_background_image",
            "dependency" => array('element' => 'pricing_button_type',  'value' => 'standard_button')
        ),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Button Icon Size(px)", 'burst' ),
			"param_name" => "button_icon_size",
			"dependency" => array('element' => 'pricing_button_type',  'value' => 'button_on_bottom')
		),

		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Button arrow", 'burst' ),
			"param_name" => "button_arrow",
			"value" => array(
				esc_html__( "No", 'burst' ) => "no",
				esc_html__( "Yes", 'burst' ) => "yes"
			),
            "save_always" => true,
			"dependency" => array('element' => 'button_text', 'not_empty' => true)
		),

		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Disable Button Top Border", 'burst' ),
			"param_name" => "disable_button_border_top",
			"value" => array(
				esc_html__( "Default", 'burst' ) => "",
				esc_html__( "No", 'burst' ) => "no",
				esc_html__( "Yes", 'burst' ) => "yes"
			),
			"description" => esc_html__( "This options is only used for type Title on Top", 'burst' ),
			"dependency" => array('element' => 'button_text', 'not_empty' => true)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Active", 'burst' ),
			"param_name" => "active",
			"value" => array(
				esc_html__( "No", 'burst' ) => "no",
				esc_html__( "Yes", 'burst' ) => "yes"
			),
            "save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Active Style", 'burst' ),
			"param_name" => "active_style",
			"value" => array(
				esc_html__( "Default", 'burst' ) => "",
				esc_html__( "Circle", 'burst' ) => "circle",
				esc_html__( "Rectangle", 'burst' ) => "rectangle",
			),
			"dependency" => array('element' => 'active', 'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Active text", 'burst' ),
			"param_name" => "active_text",
			"description" => esc_html__( "Best choice", 'burst' ),
			"dependency" => array('element' => 'active', 'value' => 'yes')
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Active Text Color", 'burst' ),
			"param_name" => "active_text_color",
			"dependency" => array('element' => 'active', 'value' => 'yes')
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Active Text Background Color", 'burst' ),
			"param_name" => "active_text_background_color",
			"dependency" => array('element' => 'active', 'value' => 'yes')
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Content Style", 'burst' ),
			"param_name" => "content_style",
			"value" => array(
				esc_html__( "In Grid", 'burst' ) => "pricing_content_grid",
				esc_html__( "Full Width ", 'burst' ) => "pricing_content_full_width",
			),
            "save_always" => true
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Content Text Color", 'burst' ),
			"param_name" => "content_text_color"
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Content Background Color", 'burst' ),
			"param_name" => "content_background_color"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Set Different Background Color for Odd and Even Content Sections?", 'burst' ),
			"param_name" => "different_odd_even_sections",
			"value" => array(
				esc_html__( "No", 'burst' ) => "no",
				esc_html__( "Yes", 'burst' ) => "yes",
			),
            "save_always" => true
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Even Sections Background Color", 'burst' ),
			"param_name" => "even_back_color",
			"dependency" => array('element' => 'different_odd_even_sections', 'value' => 'yes')
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Odd Sections Background Color", 'burst' ),
			"param_name" => "odd_back_color",
			"dependency" => array('element' => 'different_odd_even_sections', 'value' => 'yes')
		),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Pricing Table Background Image", 'burst' ),
			"param_name" => "content_background_image"
		),
		array(
			"type" => "textarea_html",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Content", 'burst' ),
			"param_name" => "content",
			"value" => '<li>' . esc_html__('content content content', 'burst') . '</li><li>' . esc_html__('content content content', 'burst') . '</li><li>' . esc_html__('content content content', 'burst') . '</li>'
		)
	)
) );


/*** Pricing List ***/

class WPBakeryShortCode_No_Pricing_List  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Mikado Pricing List', 'burst' ),
	"base" => "no_pricing_list",
	"as_parent" => array('only' => 'no_pricing_list_item'),
	"content_element" => true,
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-pricing-list extended-custom-icon",
	"show_settings_on_create" => false,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Type", 'burst' ),
			"param_name" => "type",
			"value" => array(
				esc_html__( "Leaders", 'burst' ) => "with_leaders",
				esc_html__( "Background", 'burst' ) => "with_background_image"
			),
            "save_always" => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title", 'burst' ),
			"param_name" => "title",
			"value" => ""
		),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background image", 'burst' ),
			"param_name" => "background_image",
			"dependency" => array('element' => "type", 'value' => array("with_background_image"))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Color", 'burst' ),
			"param_name" => "backgroundcolor"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Leaders Type", 'burst' ),
			"param_name" => "leaders_type",
			"value" => array(
				esc_html__( "Dotted", 'burst' ) => "dotted",
				esc_html__( "Solid", 'burst' ) => "solid",
				esc_html__( "Dashed", 'burst' ) => "dashed"
			),
            "save_always" => true,
			"dependency" => array('element' => "type", 'value' => array("with_leaders"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Padding", 'burst' ),
			"param_name" => "item_padding",
			"value" => "",
			"description" => esc_html__( 'Please insert padding in format 0px 10px 0px 10px, default value is 0 0 0 0', 'burst' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Border", 'burst' ),
			"param_name" => "border",
			"value" => array(
				esc_html__( "No", 'burst' ) => "no",
				esc_html__( "Yes", 'burst' ) => "yes",
			),
            "save_always" => true
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Border Color", 'burst' ),
			"param_name" => "border_color",
			"dependency" => array('element' => "border", 'value' => array("yes"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Border Width (px)", 'burst' ),
			"param_name" => "border_width",
			"dependency" => array('element' => "border", 'value' => array("yes"))
		)
	)
) );


/*** Pricing List Item ***/

class WPBakeryShortCode_No_Pricing_List_Item extends WPBakeryShortCode {}
vc_map( array(
	"name" => esc_html__( 'Mikado Pricing List Item', 'burst' ),
	"base" => "no_pricing_list_item",
	"content_element" => true,
	"icon" => "icon-wpb-pricing-list-item extended-custom-icon",
	"as_child" => array('only' => 'no_pricing_list'),
	"params" => array(
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background color", 'burst' ),
			"param_name" => "backgroundcolor",
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title", 'burst' ),
			"param_name" => "title",
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Color", 'burst' ),
			"param_name" => "title_color",
			"dependency" => array('element' => "title", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Font Size (px)", 'burst' ),
			"param_name" => "title_font_size",
			"description" => esc_html__( "Enter just number. Omit unit, it is added automatically", 'burst' ),
			"dependency" => array('element' => "title", 'not_empty' => true)
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Title Tag", 'burst' ),
			"param_name" => "title_tag",
			"value" => array(
				""   => "",
				esc_html__( "h2", 'burst' ) => "h2",
				esc_html__( "h3", 'burst' ) => "h3",
				esc_html__( "h4", 'burst' ) => "h4",
				esc_html__( "h5", 'burst' ) => "h5",
				esc_html__( "h6", 'burst' ) => "h6",
			),
			"dependency" => array('element' => "title", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Font Family", 'burst' ),
			"param_name" => "title_font_family",
			"value" => "",
			"dependency" => array('element' => "title", 'not_empty' => true)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Font Weight", 'burst' ),
			"param_name" => "title_font_weight",
			"value" => array(
				esc_html__( "Default", 'burst' ) => "",
				esc_html__( "Thin 100", 'burst' ) => "100",
				esc_html__( "Extra-Light 200", 'burst' ) => "200",
				esc_html__( "Light 300", 'burst' ) => "300",
				esc_html__( "Regular 400", 'burst' ) => "400",
				esc_html__( "Medium 500", 'burst' ) => "500",
				esc_html__( "Semi-Bold 600", 'burst' ) => "600",
				esc_html__( "Bold 700", 'burst' ) => "700",
				esc_html__( "Extra-Bold 800", 'burst' ) => "800",
				esc_html__( "Ultra-Bold 900", 'burst' ) => "900"
			),
			"dependency" => array('element' => "title", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text", 'burst' ),
			"param_name" => "text",
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text Color", 'burst' ),
			"param_name" => "text_color",
			"dependency" => array('element' => "text", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text Font Size (px)", 'burst' ),
			"param_name" => "text_font_size",
			"description" => esc_html__( "Enter just number. Omit unit, it is added automatically", 'burst' ),
			"dependency" => array('element' => "text", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price", 'burst' ),
			"param_name" => "price",
			"description" => esc_html__( "You can append any unit that you want", 'burst' )
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price Color", 'burst' ),
			"param_name" => "price_color",
			"dependency" => array('element' => "price", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price Font Family", 'burst' ),
			"param_name" => "price_font_family",
			"value" => "",
			"dependency" => array('element' => "price", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price Font Size (px)", 'burst' ),
			"param_name" => "price_font_size",
			"description" => esc_html__( "Enter just number. Omit unit, it is added automatically", 'burst' ),
			"dependency" => array('element' => "price", 'not_empty' => true)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price Font Weight", 'burst' ),
			"param_name" => "price_font_weight",
			"value" => array(
				esc_html__( "Default", 'burst' ) => "",
				esc_html__( "Thin 100", 'burst' ) => "100",
				esc_html__( "Extra-Light 200", 'burst' ) => "200",
				esc_html__( "Light 300", 'burst' ) => "300",
				esc_html__( "Regular 400", 'burst' ) => "400",
				esc_html__( "Medium 500", 'burst' ) => "500",
				esc_html__( "Semi-Bold 600", 'burst' ) => "600",
				esc_html__( "Bold 700", 'burst' ) => "700",
				esc_html__( "Extra-Bold 800", 'burst' ) => "800",
				esc_html__( "Ultra-Bold 900", 'burst' ) => "900"
			),
			"dependency" => array('element' => "price", 'not_empty' => true)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price Font Style", 'burst' ),
			"param_name" => "price_font_style",
			"value" => array(
				"" => "",
				esc_html__( "Normal", 'burst' ) => "normal",
				esc_html__( "Italic", 'burst' ) => "italic"
			),
			"dependency" => array('element' => "price", 'not_empty' => true)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator", 'burst' ),
			"param_name" => "separator",
			"value" => array(
				esc_html__( "No", 'burst' ) => "no",
				esc_html__( "Yes", 'burst' ) => "yes",
			),
            "save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Type", 'burst' ),
			"param_name" => "separator_type",
			"value" => array(
				esc_html__( "Solid", 'burst' ) => "solid",
				esc_html__( "Dotted", 'burst' ) => "dotted",
				esc_html__( "Dashed", 'burst' ) => "dashed"
			),
            "save_always" => true,
			"dependency" => array('element' => "separator", 'value' => array("yes"))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Color", 'burst' ),
			"param_name" => "separator_color",
			"dependency" => array('element' => "separator", 'value' => array("yes"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Thickness (px)", 'burst' ),
			"param_name" => "separator_width",
			"dependency" => array('element' => "separator", 'value' => array("yes"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Position Top (px)", 'burst' ),
			"param_name" => "separator_position_top",
			"dependency" => array('element' => "separator", 'value' => array("yes"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Position Bottom (px)", 'burst' ),
			"param_name" => "separator_position_bottom",
			"dependency" => array('element' => "separator", 'value' => array("yes"))
		),
		array(
			"type" => "checkbox",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "New Item", 'burst' ),
			"param_name" => "enable_new_item",
			"value" => array("Set as new item?" => "enable_new_item"),
			"description" => esc_html__( "Only when pricing list is set to type Leaders", 'burst' )
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "New Item Text Color", 'burst' ),
			"param_name" => "new_item_text_color",
			"dependency" => array('element' => "enable_new_item", 'value' => array("enable_new_item"))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "New Item Icon Color", 'burst' ),
			"param_name" => "new_item_icon_color",
			"dependency" => array('element' => "enable_new_item", 'value' => array("enable_new_item"))
		),
		array(
			"type" => "checkbox",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Highlighted Item", 'burst' ),
			"param_name" => "enable_highlighted_item",
			"value" => array("Set as highlighted item?" => "enable_highlighted_item"),
			"description" => esc_html__( "Only when pricing list is set to type Leaders", 'burst' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Highlighted Text", 'burst' ),
			"param_name" => "highlighted_text",
			"dependency" => array('element' => "enable_highlighted_item", 'value' => array("enable_highlighted_item"))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Highlighted Text Color", 'burst' ),
			"param_name" => "highlighted_text_color",
			"dependency" => array('element' => "enable_highlighted_item", 'value' => array("enable_highlighted_item"))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Highlighted Text Background Color", 'burst' ),
			"param_name" => "highlighted_text_background_color",
			"dependency" => array('element' => "enable_highlighted_item", 'value' => array("enable_highlighted_item"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Item Margin Bottom (px)", 'burst' ),
			"param_name" => "margin_bottom_item"
		),
	)
) );


/*** Service table ***/

vc_map( array(
		"name" => esc_html__( "Service Table", 'burst' ),
		"base" => "no_service_table",
		"icon" => "icon-wpb-service-table extended-custom-icon",
		"category" => esc_html__( 'by MIKADO', 'burst' ),
		"allowed_container_element" => 'vc_row',
		"params" => array_merge(
			array(
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_html__( "Type", 'burst' ),
					"param_name" => "type",
					"value" => array(
						esc_html__( "Icon/Image on Top", 'burst' ) => "icon_image_on_top",
						esc_html__( "Title on Top", 'burst' ) => "title_on_top",
					),
                    "save_always" => true
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Title", 'burst' ),
					"param_name" => "title",
					"value" => ""
				),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_html__( "Title Tag", 'burst' ),
					"param_name" => "title_tag",
					"value" => array(
						""   => "",
						esc_html__( "h2", 'burst' ) => "h2",
						esc_html__( "h3", 'burst' ) => "h3",
						esc_html__( "h4", 'burst' ) => "h4",
						esc_html__( "h5", 'burst' ) => "h5",
						esc_html__( "h6", 'burst' ) => "h6",
					)
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Title Color", 'burst' ),
					"param_name" => "title_color"
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Title Background Color", 'burst' ),
					"param_name" => "title_background_color"
				),
				array(
					"type" => "attach_image",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Top Background Image", 'burst' ),
					"param_name" => "top_background_image",
					"dependency" => array("element" => "type", "value" => array("icon_image_on_top"))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Title Small Separator", 'burst' ),
					"param_name" => "title_separator",
					"value" => array(
						esc_html__( "No", 'burst' ) => "no",
						esc_html__( "Yes", 'burst' ) => "yes"
					),
                    "save_always" => true,
					"dependency" => array("element" => "type", "value" => array("icon_image_on_top"))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Subtitle", 'burst' ),
					"param_name" => "subtitle",
					"value" => ""
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Separator Color", 'burst' ),
					"param_name" => "title_separator_color",
					"dependency" => array("element" => "title_separator", "value" => array("yes"))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Title Border Bottom", 'burst' ),
					"param_name" => "title_border_bottom",
					"value" => array(
						esc_html__( "Yes", 'burst' ) => "yes",
						esc_html__( "No", 'burst' ) => "no"
					),
                    "save_always" => true
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Title Border Bottom color", 'burst' ),
					"param_name" => "title_border_bottom_color",
					"dependency" => array("element" => "title_border_bottom", "value" => array("yes"))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Wide Border Top", 'burst' ),
					"param_name" => "border_top",
					"value" => array(
						esc_html__( "Yes", 'burst' ) => "yes",
						esc_html__( "No", 'burst' ) => "no"
					),
                    "save_always" => true,
					"dependency" => array("element" => "type", "value" => array("title_on_top"))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Wide Border Top Color", 'burst' ),
					"param_name" => "border_top_color",
					"dependency" => array("element" => "border_top", "value" => array("yes"))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Show Icon/Image", 'burst' ),
					"param_name" => "show_icon_image",
					"value" => array(
						esc_html__( "Yes", 'burst' ) => "yes",
						esc_html__( "No", 'burst' ) => "no"
					),
                    "save_always" => true
				),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_html__( "Header type", 'burst' ),
					"param_name" => "header_type",
					"value" => array(
						esc_html__( "With Icon", 'burst' ) => "with_icon",
						esc_html__( "With Image", 'burst' ) => "with_image"
					),
                    "save_always" => true,
					"dependency" => array("element" => "show_icon_image", "value" => array("yes"))
				)
			),
			$burst_mikado_IconCollections->getVCParamsArray(array("element" => "header_type", "value" => array("with_icon"))),
			array(
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Icon Color", 'burst' ),
					"param_name" => "icon_color",
					"dependency" => array("element" => "header_type", "value" => array("with_icon"))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Icon Holder Background Color", 'burst' ),
					"param_name" => "icon_background_color",
					"dependency" => array("element" => "header_type", "value" => array("with_icon"))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Icon/Image Holder Padding Top (px)", 'burst' ),
					"param_name" => "icon_padding_top",
					"value" => "",
					"dependency" => array("element" => "show_icon_image", "value" => array("yes"))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Icon/Image Holder Padding Bottom (px)", 'burst' ),
					"param_name" => "icon_padding_bottom",
					"value" => "",
					"dependency" => array("element" => "show_icon_image", "value" => array("yes"))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Custom Size (px)", 'burst' ),
					"param_name" => "custom_size",
					"value" => "",
					"dependency" => array("element" => "header_type", "value" => array("with_icon"))
				),
				array(
					"type" => "attach_image",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Header Image", 'burst' ),
					"param_name" => "header_image",
					"dependency" => array("element" => "header_type", "value" => array("with_image"))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Border Below Image/Icon", 'burst' ),
					"param_name" => "border_below_image",
					"value" => array(
						esc_html__( "Default", 'burst' ) => "",
						esc_html__( "No", 'burst' ) => "no",
						esc_html__( "Yes", 'burst' ) => "yes"
					),
					"dependency" => array("element" => "show_icon_image", "value" => array("yes"))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Border Below Image/Icon Color", 'burst' ),
					"param_name" => "border_below_image_color",
					"dependency" => array("element" => "border_below_image", "value" => array("yes"))),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Border Below Image/Icon Width", 'burst' ),
					"param_name" => "border_below_image_width",
					"dependency" => array("element" => "border_below_image",  "value" => array("yes"))),				
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Content Background Color", 'burst' ),
					"param_name" => "content_background_color"
				),
				array(
					"type" => "attach_image",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Content Background Image", 'burst' ),
					"param_name" => "content_background_image"
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Border Around", 'burst' ),
					"param_name" => "border",
					"value" => array(
						esc_html__( "Default", 'burst' ) => "",
						esc_html__( "No", 'burst' ) => "no",
						esc_html__( "Yes", 'burst' ) => "yes"
					)
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Border width (px)", 'burst' ),
					"param_name" => "border_width",
					"value" => "",
					"dependency" => array('element' => "border", 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Border color", 'burst' ),
					"param_name" => "border_color",
					"value" => "",
					"dependency" => array('element' => "border", 'value' => array('yes'))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Active", 'burst' ),
					"param_name" => "active",
					"value" => array(
						esc_html__( "No", 'burst' ) => "no",
						esc_html__( "Yes", 'burst' ) => "yes"
					),
                    "save_always" => true
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Active Style", 'burst' ),
					"param_name" => "active_style",
					"value" => array(
						esc_html__( "Default", 'burst' ) => "",
						esc_html__( "Circle", 'burst' ) => "circle",
						esc_html__( "Rectangle", 'burst' ) => "rectangle"
					),
					"dependency" => array('element' => "active", 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Active text", 'burst' ),
					"param_name" => "active_text",
					"description" => esc_html__( "Best choice", 'burst' ),
					"dependency" => array('element' => 'active', 'value' => 'yes')
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Active Text Color", 'burst' ),
					"param_name" => "active_text_color",
					"dependency" => array('element' => 'active', 'value' => 'yes')
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Active Text Background Color", 'burst' ),
					"param_name" => "active_text_background_color",
					"dependency" => array('element' => 'active', 'value' => 'yes')
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Content Text Color", 'burst' ),
					"param_name" => "content_text_color"
				),
				array(
					"type" => "textarea_html",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Content", 'burst' ),
					"param_name" => "content",
					"value" => '<li>' . esc_html__('content content content', 'burst') . '</li><li>' . esc_html__('content content content', 'burst') . '</li><li>' . esc_html__('content content content', 'burst') . '</li>'
				)
			)
		)
	)
);


/*** Call to action ***/

$call_to_action_button_icons_array = array();
$call_to_action_button_IconCollections = $burst_mikado_IconCollections->iconCollections;
foreach($call_to_action_button_IconCollections as $collection_key => $collection) {

    $call_to_action_button_icons_array[] = array(
        "type" => "dropdown",
        "class" => "",
        "heading" => esc_html__( "Button Icon", 'burst' ),
        "param_name" => "button_".$collection->param,
        "value" => $collection->getIconsArray(),
        "save_always" => true,
        "dependency" => Array('element' => "button_icon_pack", 'value' => array($collection_key))
    );

}


vc_map( array(
		"name" => esc_html__( "Call to Action", 'burst' ),
		"base" => "no_call_to_action",
		"category" => esc_html__( 'by MIKADO', 'burst' ),
		"icon" => "icon-wpb-call-to-action extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array_merge(
			array(
				array(
					"type"          => "dropdown",
					"holder"        => "div",
					"class"         => "",
					"heading" => esc_html__( "Full Width", 'burst' ),
					"param_name"    => "full_width",
					"value"         => array(
						esc_html__( "Yes", 'burst' ) => "yes",
						esc_html__( "No", 'burst' ) => "no"
					)
				),
				array(
					"type"          => "dropdown",
					"holder"        => "div",
					"class"         => "",
					"heading" => esc_html__( "Content in grid", 'burst' ),
					"param_name"    => "content_in_grid",
					"value"         => array(
						esc_html__( "Yes", 'burst' ) => "yes",
						esc_html__( "No", 'burst' ) => "no"
					),
					"dependency"    => array("element" => "full_width", "value" => "yes")
				),
				array(
					"type"          => "dropdown",
					"holder"        => "div",
					"class"         => "",
					"heading" => esc_html__( "Grid size", 'burst' ),
					"param_name"    => "grid_size",
					"value"         => array(
						esc_html__( "75/25", 'burst' ) => "75",
						esc_html__( "50/50", 'burst' ) => "50",
						esc_html__( "66/33", 'burst' ) => "66"
					),
					"dependency"    => array("element" =>  "content_in_grid", "value" => "yes")
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Type", 'burst' ),
					"param_name" => "type",
					"value" => array(
						esc_html__( "Normal", 'burst' ) => "normal",
						esc_html__( "With Icon", 'burst' ) => "with_icon",
						esc_html__( "With Custom Icon", 'burst' ) => "with_custom_icon"
					),
                    "save_always" => true
				)
			),
			$burst_mikado_IconCollections->getVCParamsArray(array('element' => 'type', 'value' => array('with_icon'))),
			array(
				array(
					"type" => "attach_image",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Custom Icon", 'burst' ),
					"param_name" => "custom_icon",
					"dependency" => Array('element' => "type", 'value' => array('with_custom_icon'))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Icon Size (px)", 'burst' ),
					"param_name" => "icon_size",
					"dependency" => Array('element' => "type", 'value' => array('with_icon'))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Icon Position", 'burst' ),
					"param_name" => "icon_position",
					"value" => array(
						esc_html__( "Default/Top", 'burst' ) => "top",
						esc_html__( "Middle", 'burst' ) => "middle",
						esc_html__( "Bottom", 'burst' ) => "bottom"
					),
                    "save_always" => true,
					"dependency" => array('element' => 'type', 'value' => array('with_icon','with_custom_icon'))
				),
				array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_html__( "Icon Color", 'burst' ),
					"param_name" => "icon_color",
					"dependency" => Array('element' => "type", 'value' => array('with_icon'))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Background Color", 'burst' ),
					"param_name" => "background_color"
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Border Color", 'burst' ),
					"param_name" => "border_color"
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Box Padding (top right bottom left) px", 'burst' ),
					"param_name" => "box_padding",
					"description" => esc_html__( "Default padding is 20px on all sides", 'burst' )
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Default Text Font Size (px)", 'burst' ),
					"param_name" => "text_size",
					"description" => esc_html__( "Font size for p tag", 'burst' )
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Show Button", 'burst' ),
					"param_name" => "show_button",
					"value" => array(
						esc_html__( "Yes", 'burst' ) => "yes",
						esc_html__( "No", 'burst' ) => "no"
					),
                    "save_always" => true
				),
				array(
                    "type" => "dropdown",
                    "holder" => "div",
                    "class" => "",
                    "heading" => esc_html__( "Hover Animation", 'burst' ),
                    "param_name" => "button_hover_animation",
                    "value" => array(
                        esc_html__( "Default", 'burst' ) => "default",
						esc_html__( "Disable Animation", 'burst' ) => "disable_animation",
                        esc_html__( "Fill From Top", 'burst' ) => "fill_from_top",
						esc_html__( "Fill From Left", 'burst' ) => "fill_from_left",
						esc_html__( "Fill From Bottom", 'burst' ) => "fill_from_bottom"
                    ),
                    "save_always" => true,
                    "dependency" => array('element' => 'show_button', 'value' => 'yes')
                ),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Position", 'burst' ),
					"param_name" => "button_position",
					"value" => array(
						esc_html__( "Default/right", 'burst' ) => "",
						esc_html__( "Center", 'burst' ) => "center",
						esc_html__( "Left", 'burst' ) => "left"
					),
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Text", 'burst' ),
					"param_name" => "button_text",
					"description" => esc_html__( "Default text is button", 'burst' ),
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Link", 'burst' ),
					"param_name" => "button_link",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Target", 'burst' ),
					"param_name" => "button_target",
					"value" => array(
						"" => "",
						esc_html__( "Self", 'burst' ) => "_self",
						esc_html__( "Blank", 'burst' ) => "_blank"
					),
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Left Padding (px)", 'burst' ),
					"param_name" => "button_l_padding",
					"value" => "",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Right Padding (px)", 'burst' ),
					"param_name" => "button_r_padding",
					"value" => "",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Text Size (px)", 'burst' ),
					"param_name" => "button_text_size",
					"value" => "",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Text Line Height (px)", 'burst' ),
					"param_name" => "button_text_lineheight",
					"value" => "",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Text Color", 'burst' ),
					"param_name" => "button_text_color",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Hover Text Color", 'burst' ),
					"param_name" => "button_hover_text_color",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Background Color", 'burst' ),
					"param_name" => "button_background_color",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				 array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Hover Background Color", 'burst' ),
					"param_name" => "button_hover_background_color",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Border Color", 'burst' ),
					"param_name" => "button_border_color",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Hover Border Color", 'burst' ),
					"param_name" => "button_hover_border_color",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Border Width", 'burst' ),
					"param_name" => "button_border_width",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Border Radius px", 'burst' ),
					"param_name" => "border_radius",
					"description" => esc_html__( "Border radius for button", 'burst' ),
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
                array(
                    "type" => "dropdown",
                    "holder" => "div",
                    "class" => "",
                    "heading" => esc_html__( "Button Icon Pack", 'burst' ),
                    "param_name" => "button_icon_pack",
                    "value" => array_merge(array("No Icon" => ""),$burst_mikado_IconCollections->getIconCollectionsVC()),
                    "save_always" => true
                )
            ),
            $call_to_action_button_icons_array,
            array(
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "class" => "",
                    "heading" => esc_html__( "Icon Size", 'burst' ),
                    "param_name" => "button_icon_size",
                    "dependency" => Array('element' => "button_icon_pack", 'not_empty' => true)
                ),
                array(
                    "type" => "colorpicker",
                    "class" => "",
                    "heading" => esc_html__( "Icon Color", 'burst' ),
                    "param_name" => "button_icon_color",
                    "dependency" => Array('element' => "button_icon_pack", 'not_empty' => true)
                ),				
				array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_html__( "Icon Hover Color", 'burst' ),
					"param_name" => "button_icon_hover_color",
					"dependency" => Array('element' => "button_icon_pack", 'not_empty' => true)
				),
                array(
                    "type" => "dropdown",
                    "class" => "",
                    "heading" => esc_html__( "Icon Position", 'burst' ),
                    "param_name" => "button_icon_position",
					"value" => array(
						esc_html__( "Right", 'burst' ) => "right",
						esc_html__( "Left", 'burst' ) => "left"
					),
                    "save_always" => true,
                    "dependency" => Array('element' => "button_icon_pack", 'not_empty' => true)
                ),
				array(
					"type" => "textarea_html",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Content", 'burst' ),
					"param_name" => "content",
					"value" => "<p>" . esc_html__("I am test text for Call to action.", 'burst' ) . "</p>"
				)
			)
			)
    )
);


/*** Message shortcode ***/

vc_map( array(
	"name" => esc_html__( "Message", 'burst' ),
	"base" => "no_message",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-message extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Type", 'burst' ),
				"param_name" => "type",
				"value" => array(
					esc_html__( "Normal", 'burst' ) => "normal",
					esc_html__( "With Icon", 'burst' ) => "with_icon",
					esc_html__( "With Custom Icon", 'burst' ) => "with_custom_icon"
				),
                "save_always" => true
			)
		),
		$burst_mikado_IconCollections->getVCParamsArray(array('element' => "type", 'value' => array('with_icon'))),
		array(
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Icon Position", 'burst' ),
				"param_name" => "icon_position",
				"value" => array(
					esc_html__( "Right", 'burst' ) => "right",
					esc_html__( "Left", 'burst' ) => "left"
				),
                "save_always" => true,
				"dependency" => Array('element' => $burst_mikado_IconCollections->iconPackParamName, 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Icon Position", 'burst' ),
				"param_name" => "custom_icon_position",
				"value" => array(
					esc_html__( "Right", 'burst' ) => "right",
					esc_html__( "Left", 'burst' ) => "left"
				),
                "save_always" => true,
				"dependency" => Array('element' => 'type', 'value' => array('with_custom_icon'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Size", 'burst' ),
				"param_name" => "icon_size",
				"value" => $burst_mikado_IconCollections->getIconSizesArray(),
                "save_always" => true,
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Custom Size (px)", 'burst' ),
				"param_name" => "icon_custom_size",
				"value" => "",
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => esc_html__( "Icon Color", 'burst' ),
				"param_name" => "icon_color",
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => esc_html__( "Icon Background Color", 'burst' ),
				"param_name" => "icon_background_color",
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Custom Icon", 'burst' ),
				"param_name" => "custom_icon",
				"dependency" => Array('element' => "type", 'value' => array('with_custom_icon'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Color", 'burst' ),
				"param_name" => "background_color"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Color", 'burst' ),
				"param_name" => "border_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Width (px)", 'burst' ),
				"param_name" => "border_width",
				"description" => esc_html__( "Default value is 1", 'burst' )
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Close Button Color", 'burst' ),
				"param_name" => "close_button_color",
				"description" => esc_html__( "Default color is #fff", 'burst' )
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Close Button Hover Color", 'burst' ),
				"param_name" => "close_button_hover_color"
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content", 'burst' ),
				"param_name" => "content",
				"value" => "<p>" . esc_html__("I am test text for Message shortcode.", 'burst' ) . "</p>"
			)
		)
	)
) );


/*** Blockquote ***/

vc_map( array(
		"name" => esc_html__( "Blockquote", 'burst' ),
		"base" => "no_blockquote",
		"category" => esc_html__( 'by MIKADO', 'burst' ),
		"icon" => "icon-wpb-blockquote extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text", 'burst' ),
				"param_name" => "text",
				"value" => "Blockquote text",
				"save_always" => true
			),
            array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text Color", 'burst' ),
				"param_name" => "text_color"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title tag", 'burst' ),
				"param_name" => "title_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'burst' ) => "h2",
					esc_html__( "h3", 'burst' ) => "h3",
					esc_html__( "h4", 'burst' ) => "h4",
					esc_html__( "h5", 'burst' ) => "h5",
					esc_html__( "h6", 'burst' ) => "h6",
				)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Width", 'burst' ),
				"param_name" => "width",
				"description" => esc_html__( "Width (%)", 'burst' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Line Height", 'burst' ),
				"param_name" => "line_height",
				"description" => esc_html__( "Line Height (px)", 'burst' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Left Padding", 'burst' ),
				"param_name" => "left_padding",
				"description" => esc_html__( "Left padding (px)", 'burst' )
			),
            array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Color", 'burst' ),
				"param_name" => "background_color"
			),
             array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Show Border", 'burst' ),
                "param_name" => "show_border",
                "value" => array(
                    esc_html__( "Yes", 'burst' ) => "yes",
                    esc_html__( "No", 'burst' ) => "no"
                ),
                "save_always" => true
            ),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Color", 'burst' ),
				"param_name" => "border_color",
                "dependency" => array('element' => "show_border", 'value' => 'yes')
			),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Border width (px)", 'burst' ),
                "param_name" => "border_width",
                "dependency" => array('element' => "show_border", 'value' => 'yes')
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Border Right Margin (px)", 'burst' ),
                "param_name" => "border_right_margin",
                "dependency" => array('element' => "show_border", 'value' => 'yes')
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Show Quote Icon", 'burst' ),
                "param_name" => "show_quote_icon",
                "value" => array(
                    esc_html__( "Yes", 'burst' ) => "yes",
                    esc_html__( "No", 'burst' ) => "no"
                ),
                "save_always" => true
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Use Custom Icon or Font", 'burst' ),
                "param_name" => "quote_icon_font",
                "value" => array(
                    esc_html__( "No", 'burst' ) => "",
                    esc_html__( "Use Specific Font", 'burst' ) => "font_family",
                    esc_html__( "Use Icon", 'burst' ) => "with_icon"
                ),
                "dependency" => array('element' => "show_quote_icon", 'value' => 'yes')
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Quote Icon Font", 'burst' ),
                "param_name" => "quote_font_family",
                "dependency" => Array('element' => "quote_icon_font", 'value' => 'font_family')
            ),           
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Quote Icon Color", 'burst' ),
                "param_name" => "quote_icon_color",
                "dependency" => array('element' => "show_quote_icon", 'value' => 'yes')
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Quote Icon Size (px)", 'burst' ),
				"param_name" => "quote_icon_size",
                "dependency" => array('element' => "show_quote_icon", 'value' => 'yes')
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Quote Icon Left Padding (px)", 'burst' ),
				"param_name" => "quote_icon_padding_left",
                "dependency" => array('element' => "show_quote_icon", 'value' => 'yes')
			)
		)
) );


/*** Custom Font ***/

vc_map( array(
	"name" => esc_html__( "Custom Font", 'burst' ),
	"base" => "no_custom_font",
	"icon" => "icon-wpb-custom-font extended-custom-icon",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font family", 'burst' ),
			"param_name" => "font_family",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font size", 'burst' ),
			"param_name" => "font_size",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Line height", 'burst' ),
			"param_name" => "line_height",
			"value" => ""
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font Style", 'burst' ),
			"param_name" => "font_style",
			"value" => array(
				esc_html__( "Normal", 'burst' ) => "normal",
				esc_html__( "Italic", 'burst' ) => "italic"
			),
            "save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text Align", 'burst' ),
			"param_name" => "text_align",
			"value" => array(
				esc_html__( "Left", 'burst' ) => "left",
				esc_html__( "Center", 'burst' ) => "center",
				esc_html__( "Right", 'burst' ) => "right"
			),
            "save_always" => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font weight", 'burst' ),
			"param_name" => "font_weight",
			"value" => "300",
			"save_always" => true
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Color", 'burst' ),
			"param_name" => "color"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text decoration", 'burst' ),
			"param_name" => "text_decoration",
			"value" => array(
				esc_html__( "None", 'burst' ) => "none",
				esc_html__( "Underline", 'burst' ) => "underline",
				esc_html__( "Overline", 'burst' ) => "overline",
				esc_html__( "Line Through", 'burst' ) => "line-through"
			),
            "save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text transform", 'burst' ),
			"param_name" => "text_transform",
			"value" => array(
				esc_html__( "None", 'burst' ) => "none",
				esc_html__( "Uppercase", 'burst' ) => "uppercase",
				esc_html__( "Lowercase", 'burst' ) => "lowercase",
				esc_html__( "Capitalize", 'burst' ) => "capitalize"
			),
            "save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text shadow", 'burst' ),
			"param_name" => "text_shadow",
			"value" => array(
				esc_html__( "No", 'burst' ) => "no",
				esc_html__( "Yes", 'burst' ) => "yes"
			),
            "save_always" => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Letter Spacing (px)", 'burst' ),
			"param_name" => "letter_spacing",
			"value" => ""
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Color", 'burst' ),
			"param_name" => "background_color"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Padding", 'burst' ),
			"param_name" => "padding",
			"value" => "0",
			"description" => esc_html__( 'Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px', 'burst' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Margin", 'burst' ),
			"param_name" => "margin",
			"value" => "0",
			"description" => esc_html__( 'Please insert margin in format (top right bottom left) i.e. 5px 5px 5px 5px', 'burst' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show in border box", 'burst' ),
			"param_name" => "show_in_border_box",
			"value" => array(
				esc_html__( "No", 'burst' ) => "no",
				esc_html__( "Yes", 'burst' ) => "yes"
			),
            "save_always" => true
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Border Color", 'burst' ),
			"param_name" => "border_color",
			"dependency" => array('element' => 'show_in_border_box', 'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Border Thickness (px)", 'burst' ),
			"param_name" => "border_width",
			"value" => "",
			"dependency" => array('element' => 'show_in_border_box', 'value' => 'yes')
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text background Color", 'burst' ),
			"param_name" => "text_background_color",
			"value" => "",
			"dependency" => array('element' => 'show_in_border_box', 'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text padding (px)", 'burst' ),
			"param_name" => "text_padding",
			"value" => "",
			"description" => esc_html__( 'Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px', 'burst' ),
			"dependency" => array('element' => 'show_in_border_box', 'value' => 'yes')
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Type out strings?", 'burst' ),
			"param_name" => "type_out_strings",
			"value" => array(
				esc_html__( "No", 'burst' ) => "no",
				esc_html__( "Yes", 'burst' ) => "yes"
			),
			"save_always" => true,
			"description" => esc_html__( "Choose whether to type out one string at a time or to display a non-animated custom font area.", 'burst' )
		),
		array(
			"type" => "textarea_html",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Content", 'burst' ),
			"param_name" => "content",
			"value" => '<p>' . esc_html__('content content content' ,'burst') . '</p>',
			"dependency" => array('element' => 'type_out_strings', 'value' => 'no')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "First string", 'burst' ),
			"param_name" => "first_string",
			"value" => "",
			"description" => esc_html__( "Add the first string. You can type up to 3 strings.", 'burst' ),
			"dependency" => array('element' => 'type_out_strings', 'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Second string", 'burst' ),
			"param_name" => "second_string",
			"value" => "",
			"description" => esc_html__( "Add the second string", 'burst' ),
			"dependency" => array('element' => 'first_string', 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Third string", 'burst' ),
			"param_name" => "third_string",
			"value" => "",
			"description" => esc_html__( "Add the third string", 'burst' ),
			"dependency" => array('element' => 'second_string', 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Type Speed (ms)", 'burst' ),
			"param_name" => "type_speed",
			"value" => "",
			"description" => esc_html__( "Set the type speed in milliseconds. The default is 60.", 'burst' ),
			"dependency" => array('element' => 'type_out_strings', 'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Back Delay (ms)", 'burst' ),
			"param_name" => "back_delay",
			"value" => "",
			"description" => esc_html__( "Set the pause between typing out and erasing a string in milliseconds. The default value is 900.", 'burst' ),
			"dependency" => array('element' => 'type_out_strings', 'value' => 'yes')
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Loop?", 'burst' ),
			"param_name" => "loop",
			"value" => array(
				esc_html__( "No", 'burst' ) => "false",
				esc_html__( "Yes", 'burst' ) => "true"
			),
			"description" => esc_html__( "Choose whether to loop the typing animation.", 'burst' ),
			"dependency" => array('element' => 'type_out_strings', 'value' => 'yes')
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Animate when typed out", 'burst' ),
			"param_name" => "final_animation",
			"value" => array(
				esc_html__( "None", 'burst' ) => "none",
				esc_html__( "Scale", 'burst' ) => "scale",
				esc_html__( "Blink", 'burst' ) => "blink",
				esc_html__( "Sweep", 'burst' ) => "sweep"
			),
			"dependency" => array('element' => 'loop', 'value' => 'false')
		),

	)
) );


/*** Button shortcode **/

vc_map( array(
		"name" => esc_html__( "Button", 'burst' ),
		"base" => "no_button",
		"category" => esc_html__( 'by MIKADO', 'burst' ),
		"icon" => "icon-wpb-button extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array_merge(
                    array(
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Size", 'burst' ),
                            "param_name" => "size",
                            "value" => array(
                                esc_html__( "Default", 'burst' ) => "",
                                esc_html__( "Small", 'burst' ) => "small",
                                esc_html__( "Medium", 'burst' ) => "medium",	
                                esc_html__( "Large", 'burst' ) => "large",
                                esc_html__( "Extra Large", 'burst' ) => "big_large",
                                esc_html__( "Extra Large Full Width", 'burst' ) => "big_large_full_width"
                            )
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Style", 'burst' ),
                            "param_name" => "style",
                            "value" => array(
                                esc_html__( "Default", 'burst' ) => "",
                                esc_html__( "White", 'burst' ) => "white",
                                esc_html__( "Transparent", 'burst' ) => "transparent"
                            )
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Text", 'burst' ),
                            "param_name" => "text",
                            "description" => esc_html__( "Default text is button", 'burst' )
                        ),
						 array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Hover Animation", 'burst' ),
                            "param_name" => "button_hover_animation",
                            "value" => array(
                                esc_html__( "Default", 'burst' ) => "default",
								esc_html__( "Disable Animation", 'burst' ) => "disable_animation",
                                esc_html__( "Fill From Top", 'burst' ) => "fill_from_top",
								esc_html__( "Fill From Left", 'burst' ) => "fill_from_left",
								esc_html__( "Fill From Bottom", 'burst' ) => "fill_from_bottom",
								esc_html__( "Rotate From Bottom", 'burst' ) => "rotate_from_bottom"
                            ),
                            "save_always" => true,
                            "dependency" => array('element' => 'style', 'value' => array("","white"))
                        )
                    ),
                    $burst_mikado_IconCollections->getVCParamsArray(array('element' => 'button_hover_animation', 'value' => array("default","disable_animation","fill_from_top","fill_from_bottom","fill_from_left")), '', true),
                    array(
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Hover Animation", 'burst' ),
                            "param_name" => "hover_animation",
                            "value" => array(
                                esc_html__( "Default", 'burst' ) => "",
                                esc_html__( "Move Icon", 'burst' ) => "move_icon"
                            ),
                            "dependency" => Array('element' => $burst_mikado_IconCollections->iconPackParamName, 'not_empty' => true)
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Button Width (px)", 'burst' ),
                            "param_name" => "button_width",
                            "dependency" => array('element' => "hover_animation", 'value' => array('move_icon'))

                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Icon Position", 'burst' ),
                            "param_name" => "icon_position",
                            "value" => array(
                                esc_html__( "Right", 'burst' ) => "right",
                                esc_html__( "Left", 'burst' ) => "left"
                            ),
                            "save_always" => true,
                            "dependency" => Array('element' => $burst_mikado_IconCollections->iconPackParamName, 'not_empty' => true)
                        ),
						array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Font Size (px)", 'burst' ),
                            "param_name" => "icon_font_size",
                            "dependency" => array('element' => $burst_mikado_IconCollections->iconPackParamName, 'not_empty' => true)

                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Color", 'burst' ),
                            "param_name" => "icon_color",
                            "dependency" => Array('element' =>$burst_mikado_IconCollections->iconPackParamName, 'not_empty' => true)
                        ),
						array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Hover Color", 'burst' ),
                            "param_name" => "icon_hover_color",
                            "dependency" => Array('element' =>$burst_mikado_IconCollections->iconPackParamName, 'not_empty' => true)
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Background Color", 'burst' ),
                            "param_name" => "icon_background_color",
                            "dependency" => Array('element' =>$burst_mikado_IconCollections->iconPackParamName, 'not_empty' => true),
                            "description" => esc_html__( "Will have no effect on button with transparent style", 'burst' )
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Background Hover Color", 'burst' ),
                            "param_name" => "icon_background_hover_color",
                            "dependency" => Array('element' =>$burst_mikado_IconCollections->iconPackParamName, 'not_empty' => true),
                            "description" => esc_html__( "Will have no effect on button with transparent style", 'burst' )
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Link", 'burst' ),
                            "param_name" => "link"
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Link Target", 'burst' ),
                            "param_name" => "target",
                            "value" => array(
                                esc_html__( "Self", 'burst' ) => "_self",
                                esc_html__( "Blank", 'burst' ) => "_blank"
                            ),
                            "save_always" => true
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Color", 'burst' ),
                            "param_name" => "color"
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Hover Color", 'burst' ),
                            "param_name" => "hover_color",
                            "dependency" => array('element' => 'button_hover_animation', 'value' => array("default","disable_animation","fill_from_top","fill_from_bottom","fill_from_left"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Background Color", 'burst' ),
                            "param_name" => "background_color",
                            "dependency" => array('element' => 'style', 'value' => array("","white"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Hover Background Color", 'burst' ),
                            "param_name" => "hover_background_color",
							"dependency" => array('element' => 'style', 'value' => array("","white"),'element' => 'button_hover_animation', 'value' => array("default","disable_animation","fill_from_top","fill_from_bottom","fill_from_left"))
						),
						array(
							"type" => "attach_image",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Background Pattern", 'burst' ),
							"param_name" => "background_pattern",
                            "dependency" => array('element' => 'style', 'value' => array("","white"))
						),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Border Color", 'burst' ),
                            "param_name" => "border_color",
                            "dependency" => array('element' => 'style', 'value' => array("","white"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Hover Border Color", 'burst' ),
                            "param_name" => "hover_border_color",
							"dependency" => array('element' => 'style', 'value' => array("","white"), 'element' => 'button_hover_animation', 'value' => array("default","disable_animation","fill_from_top","fill_from_bottom","fill_from_left"))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Border Width (px)", 'burst' ),
                            "param_name" => "border_width",
                            "dependency" => array('element' => 'style', 'value' => array("","white"))
                        ),
						array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Font Size (px)", 'burst' ),
                            "param_name" => "font_size"                            
                        ),
						array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Line Height (px)", 'burst' ),
                            "param_name" => "line_height"
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Font Style", 'burst' ),
                            "param_name" => "font_style",
                            "value" => array(
                                "" => "",
                                esc_html__( "Normal", 'burst' ) => "normal",	
                                esc_html__( "Italic", 'burst' ) => "italic"
                            )
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Font Weight", 'burst' ),
                            "param_name" => "font_weight",
                            "value" => $font_weight_array,
                            "save_always" => true
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Margin", 'burst' ),
                            "param_name" => "margin",
                            "description" => esc_html__( 'Please insert margin in format: 0px 0px 1px 0px', 'burst' )
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Left Padding (px)", 'burst' ),
                            "param_name" => "padding"
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Right Padding (px)", 'burst' ),
                            "param_name" => "padding_right"
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Border radius", 'burst' ),
                            "param_name" => "border_radius",
                            "description" => esc_html__( 'Please insert border radius(Rounded corners) in px. For example: 4', 'burst' ),
                            "dependency" => array('element' => 'style', 'value' => array("","white"))
                        )
                    )
                )
    )
);


/*** Counter ***/

vc_map( array(
	"name" => esc_html__( "Counter", 'burst' ),
	"base" => "no_counter",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	'admin_enqueue_css' => array(burst_mikado_get_skin_uri().'/assets/css/mkdf-vc-extend.css'),
	"icon" => "icon-wpb-counter extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Type", 'burst' ),
				"param_name" => "type",
				"value" => array(
					esc_html__( "Zero Counter", 'burst' ) => "zero",
					esc_html__( "Random Counter", 'burst' ) => "random"
				),
                "save_always" => true
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Box", 'burst' ),
				"param_name" => "box",
				"value" => array(
					"" => "",
					esc_html__( "Yes", 'burst' ) => "yes",
					esc_html__( "No", 'burst' ) => "no"
				)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Box Border Color", 'burst' ),
				"param_name" => "box_border_color",
				"dependency" => array('element' => "box", 'value' => array('yes'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Position", 'burst' ),
				"param_name" => "position",
				"value" => array(
					esc_html__( "Left", 'burst' ) => "left",
					esc_html__( "Right", 'burst' ) => "right",
					esc_html__( "Center", 'burst' ) => "center"
				),
                "save_always" => true
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Digit", 'burst' ),
				"param_name" => "digit"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Underline Digit", 'burst' ),
				"param_name" => "underline_digit",
				"value" => array(
					"" => "",
					esc_html__( "Yes", 'burst' ) => "yes",
					esc_html__( "No", 'burst' ) => "no"
				)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Digit Font Size (px)", 'burst' ),
				"param_name" => "font_size"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Digit Font Weight", 'burst' ),
				"param_name" => "font_weight",
				"value" => array(
					esc_html__( "Default", 'burst' ) => "",
					esc_html__( "Thin 100", 'burst' ) => "100",
					esc_html__( "Extra-Light 200", 'burst' ) => "200",
					esc_html__( "Light 300", 'burst' ) => "300",
					esc_html__( "Regular 400", 'burst' ) => "400",
					esc_html__( "Medium 500", 'burst' ) => "500",
					esc_html__( "Semi-Bold 600", 'burst' ) => "600",
					esc_html__( "Bold 700", 'burst' ) => "700",
					esc_html__( "Extra-Bold 800", 'burst' ) => "800",
					esc_html__( "Ultra-Bold 900", 'burst' ) => "900"
				)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Digit Letter Spacing (px)", 'burst' ),
				"param_name" => "digit_letter_spacing"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Digit Font Color", 'burst' ),
				"param_name" => "font_color"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Show icon next to digit", 'burst' ),
				"param_name" => "counter_icon",
				"value" => array(
					esc_html__( "No", 'burst' ) => "no",
					esc_html__( "Yes", 'burst' ) => "yes",
				),
                "save_always" => true
			)
		),
		$burst_mikado_IconCollections->getVCParamsArray(array("element" => "counter_icon", "value" => array("yes"))),
		array(
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Color", 'burst' ),
				"param_name" => "icon_color",
				"dependency" => Array('element' => "icon_pack", 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Custom Icon Size (px)", 'burst' ),
				"param_name" => "icon_custom_size",
				"dependency" => Array('element' => "icon_pack", 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title", 'burst' ),
				"param_name" => "title"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'burst' ),
				"param_name" => "title_color"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Tag", 'burst' ),
				"param_name" => "title_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'burst' ) => "h2",
					esc_html__( "h3", 'burst' ) => "h3",
					esc_html__( "h4", 'burst' ) => "h4",
					esc_html__( "h5", 'burst' ) => "h5",
					esc_html__( "h6", 'burst' ) => "h6",
				)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Size (px)", 'burst' ),
				"param_name" => "title_size"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text", 'burst' ),
				"param_name" => "text"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text Size (px)", 'burst' ),
				"param_name" => "text_size"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text Font Weight", 'burst' ),
				"param_name" => "text_font_weight",
				"value" => array(
					esc_html__( "Default", 'burst' ) => "",
					esc_html__( "Thin 100", 'burst' ) => "100",
					esc_html__( "Extra-Light 200", 'burst' ) => "200",
					esc_html__( "Light 300", 'burst' ) => "300",
					esc_html__( "Regular 400", 'burst' ) => "400",
					esc_html__( "Medium 500", 'burst' ) => "500",
					esc_html__( "Semi-Bold 600", 'burst' ) => "600",
					esc_html__( "Bold 700", 'burst' ) => "700",
					esc_html__( "Extra-Bold 800", 'burst' ) => "800",
					esc_html__( "Ultra-Bold 900", 'burst' ) => "900"
				)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text Transform", 'burst' ),
				"param_name" => "text_transform",
				"value" => array(
					esc_html__( "Default", 'burst' ) => "",
					esc_html__( "None", 'burst' ) => "none",
					esc_html__( "Capitalize", 'burst' ) => "capitalize",
					esc_html__( "Uppercase", 'burst' ) => "uppercase",
					esc_html__( "Lowercase", 'burst' ) => "lowercase"
				)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text Color", 'burst' ),
				"param_name" => "text_color"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator", 'burst' ),
				"param_name" => "separator",
				"value" => array(
					esc_html__( "Yes", 'burst' ) => "yes",
					esc_html__( "No", 'burst' ) => "no"
				),
                "save_always" => true
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Position", 'burst' ),
				"param_name" => "separator_position",
				"value" => array(
					esc_html__( "Default", 'burst' ) => "",
					esc_html__( "Above Title", 'burst' ) => "above_title",
					esc_html__( "Under Title", 'burst' ) => "under_title",
				),
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Width (px)", 'burst' ),
				"param_name" => "separator_width"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Color", 'burst' ),
				"param_name" => "separator_color",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Thickness (px)", 'burst' ),
				"param_name" => "separator_thickness",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Margin Top (px)", 'burst' ),
				"param_name" => "separator_margin_top",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Margin Bottom (px)", 'burst' ),
				"param_name" => "separator_margin_bottom",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Border Style", 'burst' ),
				"param_name" => "separator_border_style",
				"value" => array(
					"" => "",
					esc_html__( "Dashed", 'burst' ) => "dashed",
					esc_html__( "Solid", 'burst' ) => "solid"
				),
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Padding Bottom(px)", 'burst' ),
				"param_name" => "padding_bottom"
			),
		)
	)
) );


/*** Countdown ***/

vc_map( array(
	"name" => esc_html__( "Countdown", 'burst' ),
	"base" => "no_countdown",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-countdown extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Year", 'burst' ),
			"param_name" => "year",
			"value" => array(
				"" => "",
				esc_html__( "2014", 'burst' ) => "2014",
				esc_html__( "2015", 'burst' ) => "2015",
				esc_html__( "2016", 'burst' ) => "2016",
				esc_html__( "2017", 'burst' ) => "2017",
				esc_html__( "2018", 'burst' ) => "2018",
				esc_html__( "2019", 'burst' ) => "2019",
				esc_html__( "2020", 'burst' ) => "2020"
			),
            "save_always" => true
		),

		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Month", 'burst' ),
			"param_name" => "month",
			"value" => array(
				"" => "",
				esc_html__( "January", 'burst' ) => "1",
				esc_html__( "February", 'burst' ) => "2",
				esc_html__( "March", 'burst' ) => "3",
				esc_html__( "April", 'burst' ) => "4",
				esc_html__( "May", 'burst' ) => "5",
				esc_html__( "June", 'burst' ) => "6",
				esc_html__( "July", 'burst' ) => "7",
				esc_html__( "August", 'burst' ) => "8",
				esc_html__( "September", 'burst' ) => "9",
				esc_html__( "October", 'burst' ) => "10",
				esc_html__( "November", 'burst' ) => "11",
				esc_html__( "December", 'burst' ) => "12"
			),
            "save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Day", 'burst' ),
			"param_name" => "day",
			"value" => array(
				"" => "",
				"1" => "1",
				"2" => "2",
				"3" => "3",
				"4" => "4",
				"5" => "5",
				"6" => "6",
				"7" => "7",
				"8" => "8",
				"9" => "9",
				esc_html__( "10", 'burst' ) => "10",
				esc_html__( "11", 'burst' ) => "11",
				esc_html__( "12", 'burst' ) => "12",
				esc_html__( "13", 'burst' ) => "13",
				esc_html__( "14", 'burst' ) => "14",
				esc_html__( "15", 'burst' ) => "15",
				esc_html__( "16", 'burst' ) => "16",
				esc_html__( "17", 'burst' ) => "17",
				esc_html__( "18", 'burst' ) => "18",
				esc_html__( "19", 'burst' ) => "19",
				esc_html__( "20", 'burst' ) => "20",
				esc_html__( "21", 'burst' ) => "21",
				esc_html__( "22", 'burst' ) => "22",
				esc_html__( "23", 'burst' ) => "23",
				esc_html__( "24", 'burst' ) => "24",
				esc_html__( "25", 'burst' ) => "25",
				esc_html__( "26", 'burst' ) => "26",
				esc_html__( "27", 'burst' ) => "27",
				esc_html__( "28", 'burst' ) => "28",
				esc_html__( "29", 'burst' ) => "29",
				esc_html__( "30", 'burst' ) => "30",
				esc_html__( "31", 'burst' ) => "31",
			),
            "save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Hour", 'burst' ),
			"param_name" => "hour",
			"value" => array(
				"" => "",
				"0" => "0",
				"1" => "1",
				"2" => "2",
				"3" => "3",
				"4" => "4",
				"5" => "5",
				"6" => "6",
				"7" => "7",
				"8" => "8",
				"9" => "9",
				esc_html__( "10", 'burst' ) => "10",
				esc_html__( "11", 'burst' ) => "11",
				esc_html__( "12", 'burst' ) => "12",
				esc_html__( "13", 'burst' ) => "13",
				esc_html__( "14", 'burst' ) => "14",
				esc_html__( "15", 'burst' ) => "15",
				esc_html__( "16", 'burst' ) => "16",
				esc_html__( "17", 'burst' ) => "17",
				esc_html__( "18", 'burst' ) => "18",
				esc_html__( "19", 'burst' ) => "19",
				esc_html__( "20", 'burst' ) => "20",
				esc_html__( "21", 'burst' ) => "21",
				esc_html__( "22", 'burst' ) => "22",
				esc_html__( "23", 'burst' ) => "23",
				esc_html__( "24", 'burst' ) => "24"
			),
            "save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Minute", 'burst' ),
			"param_name" => "minute",
			"value" => array(
				"" => "",
				"0" => "0",
				"1" => "1",
				"2" => "2",
				"3" => "3",
				"4" => "4",
				"5" => "5",
				"6" => "6",
				"7" => "7",
				"8" => "8",
				"9" => "9",
				esc_html__( "10", 'burst' ) => "10",
				esc_html__( "11", 'burst' ) => "11",
				esc_html__( "12", 'burst' ) => "12",
				esc_html__( "13", 'burst' ) => "13",
				esc_html__( "14", 'burst' ) => "14",
				esc_html__( "15", 'burst' ) => "15",
				esc_html__( "16", 'burst' ) => "16",
				esc_html__( "17", 'burst' ) => "17",
				esc_html__( "18", 'burst' ) => "18",
				esc_html__( "19", 'burst' ) => "19",
				esc_html__( "20", 'burst' ) => "20",
				esc_html__( "21", 'burst' ) => "21",
				esc_html__( "22", 'burst' ) => "22",
				esc_html__( "23", 'burst' ) => "23",
				esc_html__( "24", 'burst' ) => "24",
				esc_html__( "25", 'burst' ) => "25",
				esc_html__( "26", 'burst' ) => "26",
				esc_html__( "27", 'burst' ) => "27",
				esc_html__( "28", 'burst' ) => "28",
				esc_html__( "29", 'burst' ) => "29",
				esc_html__( "30", 'burst' ) => "30",
				esc_html__( "31", 'burst' ) => "31",
				esc_html__( "32", 'burst' ) => "32",
				esc_html__( "33", 'burst' ) => "33",
				esc_html__( "34", 'burst' ) => "34",
				esc_html__( "35", 'burst' ) => "35",
				esc_html__( "36", 'burst' ) => "36",
				esc_html__( "37", 'burst' ) => "37",
				esc_html__( "38", 'burst' ) => "38",
				esc_html__( "39", 'burst' ) => "39",
				esc_html__( "40", 'burst' ) => "40",
				esc_html__( "41", 'burst' ) => "41",
				esc_html__( "42", 'burst' ) => "42",
				esc_html__( "43", 'burst' ) => "43",
				esc_html__( "44", 'burst' ) => "44",
				esc_html__( "45", 'burst' ) => "45",
				esc_html__( "46", 'burst' ) => "46",
				esc_html__( "47", 'burst' ) => "47",
				esc_html__( "48", 'burst' ) => "48",
				esc_html__( "49", 'burst' ) => "49",
				esc_html__( "50", 'burst' ) => "50",
				esc_html__( "51", 'burst' ) => "51",
				esc_html__( "52", 'burst' ) => "52",
				esc_html__( "53", 'burst' ) => "53",
				esc_html__( "54", 'burst' ) => "54",
				esc_html__( "55", 'burst' ) => "55",
				esc_html__( "56", 'burst' ) => "56",
				esc_html__( "57", 'burst' ) => "57",
				esc_html__( "58", 'burst' ) => "58",
				esc_html__( "59", 'burst' ) => "59",
				esc_html__( "60", 'burst' ) => "60",
			),
            "save_always" => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Month Label", 'burst' ),
			"param_name" => "month_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Day Label", 'burst' ),
			"param_name" => "day_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Hour Label", 'burst' ),
			"param_name" => "hour_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Minute Label", 'burst' ),
			"param_name" => "minute_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Second Label", 'burst' ),
			"param_name" => "second_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Month Singular Label", 'burst' ),
			"param_name" => "month_singular_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Day Singular Label", 'burst' ),
			"param_name" => "day_singular_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Hour Singular Label", 'burst' ),
			"param_name" => "hour_singular_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Minute Singular Label", 'burst' ),
			"param_name" => "minute_singular_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Second Singular Label", 'burst' ),
			"param_name" => "second_singular_label"
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Color", 'burst' ),
			"param_name" => "color",
			"description" => esc_html__( "For digits, labels and separators", 'burst' ),
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Digit Font Size (px)", 'burst' ),
			"param_name" => "digit_font_size"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Label Font Size (px)", 'burst' ),
			"param_name" => "label_font_size"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font Weight", 'burst' ),
			"param_name" => "font_weight",
			"description" => esc_html__( "For both digits and labels", 'burst' ),
			"value" => array(
				esc_html__( "Default", 'burst' ) => "",
				esc_html__( "Thin 100", 'burst' ) => "100",
				esc_html__( "Extra-Light 200", 'burst' ) => "200",
				esc_html__( "Light 300", 'burst' ) => "300",
				esc_html__( "Regular 400", 'burst' ) => "400",
				esc_html__( "Medium 500", 'burst' ) => "500",
				esc_html__( "Semi-Bold 600", 'burst' ) => "600",
				esc_html__( "Bold 700", 'burst' ) => "700",
				esc_html__( "Extra-Bold 800", 'burst' ) => "800",
				esc_html__( "Ultra-Bold 900", 'burst' ) => "900"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show separator", 'burst' ),
			"param_name" => "show_separator",
			"value" => array(
				esc_html__( "No", 'burst' ) => "hide_separator",
				esc_html__( "Yes", 'burst' ) => "show_separator"
			),
            "save_always" => true
		),
	)
) );


/*** Pie Chart ***/

vc_map( array(
		"name" => esc_html__( "Pie Chart", 'burst' ),
		"base" => "no_pie_chart",
		"icon" => "icon-wpb-pie-chart extended-custom-icon",
		"category" => esc_html__( 'by MIKADO', 'burst' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Size(px)", 'burst' ),
                "param_name" => "size"
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Type of Central text", 'burst' ),
                "param_name" => "type_of_central_text",
                "value" => array(
                    esc_html__( "Title", 'burst' ) => "title",
                    esc_html__( "Percent", 'burst' ) => "percent"
                ),
                "save_always" => true
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage", 'burst' ),
				"param_name" => "percent"
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Show Percentage Mark", 'burst' ),
				"param_name" => "show_percent_mark",
				"value" => array(
					esc_html__( "Yes", 'burst' ) => "with_mark",
					esc_html__( "No", 'burst' ) => "without_mark"	
				),
                "save_always" => true,
				"dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Color", 'burst' ),
				"param_name" => "percentage_color",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Percentage Font", 'burst' ),
                "param_name" => "percent_font_family",
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Font Size", 'burst' ),
				"param_name" => "percent_font_size",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Font weight", 'burst' ),
				"param_name" => "percent_font_weight",
				"value" => array(
					esc_html__( "Default", 'burst' ) => "",
					esc_html__( "Thin 100", 'burst' ) => "100",
					esc_html__( "Extra-Light 200", 'burst' ) => "200",
					esc_html__( "Light 300", 'burst' ) => "300",
					esc_html__( "Regular 400", 'burst' ) => "400",
					esc_html__( "Medium 500", 'burst' ) => "500",
					esc_html__( "Semi-Bold 600", 'burst' ) => "600",
					esc_html__( "Bold 700", 'burst' ) => "700",
					esc_html__( "Extra-Bold 800", 'burst' ) => "800",
					esc_html__( "Ultra-Bold 900", 'burst' ) => "900"
				),
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Bar Active Color", 'burst' ),
				"param_name" => "active_color"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Bar Inactive Color", 'burst' ),
				"param_name" => "noactive_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Pie Chart Line Width (px)", 'burst' ),
				"param_name" => "line_width"
			),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Chart Alignment", 'burst' ),
                "param_name" => "chart_alignment",
                "value" => array(
                    esc_html__( "Center", 'burst' ) => "",
                    esc_html__( "Left", 'burst' ) => "left",
                    esc_html__( "Right", 'burst' ) => "right"
                )
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Margin below chart (px)", 'burst' ),
                "param_name" => "margin_below_chart"
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title", 'burst' ),
				"param_name" => "title"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'burst' ),
				"param_name" => "title_color"
			),
            array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Tag", 'burst' ),
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					esc_html__( "h2", 'burst' ) => "h2",
					esc_html__( "h3", 'burst' ) => "h3",
					esc_html__( "h4", 'burst' ) => "h4",	
					esc_html__( "h5", 'burst' ) => "h5",	
					esc_html__( "h6", 'burst' ) => "h6",	
				)
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text", 'burst' ),
				"param_name" => "text"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text Color", 'burst' ),
				"param_name" => "text_color"
			),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator", 'burst' ),
                "param_name" => "separator",
                "value" => array(
                    esc_html__( "Yes", 'burst' ) => "yes",
                    esc_html__( "No", 'burst' ) => "no"
                ),
                "save_always" => true
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator Color", 'burst' ),
                "param_name" => "separator_color",
                "dependency" => array('element' => "separator", 'value' => array('yes'))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator Border Style", 'burst' ),
                "param_name" => "separator_border_style",
                "value" => array(
                    "" => "",
                    esc_html__( "Dashed", 'burst' ) => "dashed",
                    esc_html__( "Solid", 'burst' ) => "solid"
                ),
                "dependency" => array('element' => "separator", 'value' => array('yes'))
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Width (px)", 'burst' ),
				"param_name" => "separator_width",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Thickness (px)", 'burst' ),
				"param_name" => "separator_thickness",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Margin Top (px)", 'burst' ),
				"param_name" => "separator_margin_top",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Margin Bottom (px)", 'burst' ),
				"param_name" => "separator_margin_bottom",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Show Outer Border", 'burst' ),
				"param_name" => "outer_border",
				"value" => array(
					esc_html__( "No", 'burst' ) => "no",
					esc_html__( "Yes", 'burst' ) => "yes"
				),
                "save_always" => true
			)
		)
) );


/*** Pie Chart 2 (Pie) ***/

vc_map( array(
		"name" => esc_html__( "Pie Chart 2 (Pie)", 'burst' ),
		"base" => "no_pie_chart2",
		"icon" => "icon-wpb-pie-chart2 extended-custom-icon",
		"category" => esc_html__( 'by MIKADO', 'burst' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Width", 'burst' ),
				"param_name" => "width"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Height", 'burst' ),
				"param_name" => "height"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Legend Text Color", 'burst' ),
				"param_name" => "color"
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content", 'burst' ),
				"param_name" => "content",
				"value" => "15,#b9f1e6,Legend One; 35,#5dddc4,Legend Two; 50,#18cfab,Legend Three"
			)

		)
) );


/*** Pie Chart 3 (Doughnut) ***/

vc_map( array(
		"name" => esc_html__( "Pie Chart 3 (Doughnut)", 'burst' ),
		"base" => "no_pie_chart3",
		"category" => esc_html__( 'by MIKADO', 'burst' ),
		"icon" => "icon-wpb-pie-chart3 extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Width", 'burst' ),
				"param_name" => "width"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Height", 'burst' ),
				"param_name" => "height"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Legend Text Color", 'burst' ),
				"param_name" => "color"
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content", 'burst' ),
				"param_name" => "content",
				"value" => "15,#b9f1e6,Legend One; 35,#5dddc4,Legend Two; 50,#18cfab,Legend Three"
			)

		)
) );


/*** Pie Chart With Icon ***/

vc_map( array(
	"name" => esc_html__( "Pie Chart With Icon", 'burst' ),
	"base" => "no_pie_chart_with_icon",
	"icon" => "icon-wpb-pie-chart-with-icon extended-custom-icon",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Size(px)", 'burst' ),
				"param_name" => "size"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage", 'burst' ),
				"param_name" => "percent"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Bar Active Color", 'burst' ),
				"param_name" => "active_color"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Bar Inactive Color", 'burst' ),
				"param_name" => "noactive_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Pie Chart Line Width (px)", 'burst' ),
				"param_name" => "line_width"
			),
			array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Margin below chart (px)", 'burst' ),
                "param_name" => "margin_below_chart"
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title", 'burst' ),
				"param_name" => "title"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'burst' ),
				"param_name" => "title_color",
				"dependency" => array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Tag", 'burst' ),
				"param_name" => "title_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'burst' ) => "h2",
					esc_html__( "h3", 'burst' ) => "h3",
					esc_html__( "h4", 'burst' ) => "h4",
					esc_html__( "h5", 'burst' ) => "h5",
					esc_html__( "h6", 'burst' ) => "h6",
				),
				"dependency" => array('element' => "title", 'not_empty' => true)
			),
		),
		$burst_mikado_IconCollections->getVCParamsArray(),
		array(
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Color", 'burst' ),
				"param_name" => "icon_color",
				"dependency" => Array('element' => "icon_pack", 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Custom Icon Size (px)", 'burst' ),
				"param_name" => "icon_custom_size",
				"dependency" => Array('element' => "icon_pack", 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Size", 'burst' ),
				"param_name" => "icon_size",
				"value" => $burst_mikado_IconCollections->getIconSizesArray(),
                "save_always" => true
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text", 'burst' ),
				"param_name" => "text"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text Color", 'burst' ),
				"param_name" => "text_color",
				"dependency" => array('element' => "text", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator", 'burst' ),
				"param_name" => "separator",
				"value" => array(
					esc_html__( "Yes", 'burst' ) => "yes",
					esc_html__( "No", 'burst' ) => "no"
				),
                "save_always" => true
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Color", 'burst' ),
				"param_name" => "separator_color",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Border Style", 'burst' ),
				"param_name" => "separator_border_style",
				"value" => array(
					"" => "",
					esc_html__( "Dashed", 'burst' ) => "dashed",
					esc_html__( "Solid", 'burst' ) => "solid"
				),
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Width (px)", 'burst' ),
				"param_name" => "separator_width",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Thickness (px)", 'burst' ),
				"param_name" => "separator_thickness",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Margin Top (px)", 'burst' ),
				"param_name" => "separator_margin_top",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Margin Bottom (px)", 'burst' ),
				"param_name" => "separator_margin_bottom",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Show Outer Border", 'burst' ),
				"param_name" => "outer_border",
				"value" => array(
					esc_html__( "No", 'burst' ) => "no",
					esc_html__( "Yes", 'burst' ) => "yes"
				),
                "save_always" => true
			)
		)
	)

) );


/** Horizontal progress bar shortcode ***/

vc_map( array(
		"name" => esc_html__( "Progress Bar - Horizontal", 'burst' ),
		"base" => "no_progress_bar",
		"icon" => "icon-wpb-progress-bar extended-custom-icon",
		"category" => esc_html__( 'by MIKADO', 'burst' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title", 'burst' ),
				"param_name" => "title"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'burst' ),
				"param_name" => "title_color"
			),
            array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Tag", 'burst' ),
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					esc_html__( "h2", 'burst' ) => "h2",
					esc_html__( "h3", 'burst' ) => "h3",
					esc_html__( "h4", 'burst' ) => "h4",	
					esc_html__( "h5", 'burst' ) => "h5",	
					esc_html__( "h6", 'burst' ) => "h6",	
				)
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Custom Size (px)", 'burst' ),
				"param_name" => "title_custom_size"
			),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title Padding Bottom(px)", 'burst' ),
                "param_name" => "title_padding_bottom"
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage", 'burst' ),
				"param_name" => "percent"
			),			
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Show Percentage Number", 'burst' ),
                "param_name" => "show_percent_number",
                "value" => array(
                    esc_html__( "Yes", 'burst' ) => "yes",
                    esc_html__( "No", 'burst' ) => "no"
                ),
                "save_always" => true,
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Show Percentage Mark", 'burst' ),
				"param_name" => "show_percent_mark",
				"value" => array(
					esc_html__( "Yes", 'burst' ) => "with_mark",
					esc_html__( "No", 'burst' ) => "without_mark"	
				),
                "save_always" => true,
				"dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Percentage Type", 'burst' ),
                "param_name" => "percentage_type",
                "value" => array(
                    esc_html__( "Floating", 'burst' ) => "floating",
                    esc_html__( "Static", 'burst' ) => "static"
                ),
                "save_always" => true,
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__( "Percentage Bar Margin Bottom (px)", 'burst' ),
				"param_name" => "percentage_bar_margin_bottom",
				"dependency" => array('element' => "percent", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__( "Percentage Bar Height (px)", 'burst' ),
				"param_name" => "percentage_bar_height",
				"dependency" => array('element' => "percentage_type", 'value' => array('floating'))
			),			
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Floating Type", 'burst' ),
				"param_name" => "floating_type",
				"value" => array(
					esc_html__( "Outside Floating", 'burst' ) => "floating_outside",
					esc_html__( "Inside Floating", 'burst' ) => "floating_inside"
				),
                "save_always" => true,
				"dependency" => array('element' => "percentage_type", 'value' => array('floating'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Color", 'burst' ),
				"param_name" => "percent_color",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Percentage Background Color", 'burst' ),
                "param_name" => "percent_background_color",
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Percentage Border Radius (px)", 'burst' ),
                "param_name" => "percent_border_radius",
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Font Size", 'burst' ),
				"param_name" => "percent_font_size",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Font weight", 'burst' ),
				"param_name" => "percent_font_weight",
				"value" => array(
					esc_html__( "Default", 'burst' ) => "",
					esc_html__( "Thin 100", 'burst' ) => "100",
					esc_html__( "Extra-Light 200", 'burst' ) => "200",
					esc_html__( "Light 300", 'burst' ) => "300",
					esc_html__( "Regular 400", 'burst' ) => "400",
					esc_html__( "Medium 500", 'burst' ) => "500",
					esc_html__( "Semi-Bold 600", 'burst' ) => "600",
					esc_html__( "Bold 700", 'burst' ) => "700",
					esc_html__( "Extra-Bold 800", 'burst' ) => "800",
					esc_html__( "Ultra-Bold 900", 'burst' ) => "900"
				),
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Active Background Color", 'burst' ),
				"param_name" => "active_background_color"
			),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Active Background Second Color", 'burst' ),
                "param_name" => "active_background_second_color",
                "description" => esc_html__( "If this color is set, progress bar background will be in gradient. Note: IE9 and earlier versions do not support gradients", 'burst' ),
                "dependency" => Array('element' => "active_background_color", 'not_empty' => true)
            ),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Active Border Color", 'burst' ),
				"param_name" => "active_border_color"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Inactive Background Color", 'burst' ),
				"param_name" => "noactive_background_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Progress Bar Height (px)", 'burst' ),
				"param_name" => "height"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Progress Bar Border Radius)", 'burst' ),
				"param_name" => "border_radius"
			)
		)
) );


/*** Vertical progress bar shortcode ***/

vc_map( array(
		"name" => esc_html__( "Progress Bar - Vertical", 'burst' ),
		"base" => "no_progress_bar_vertical",
		"icon" => "icon-wpb-vertical-progress-bar extended-custom-icon",
		"category" => esc_html__( 'by MIKADO', 'burst' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
            array (
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title", 'burst' ),
				"param_name" => "title"
			),
            array (
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'burst' ),
				"param_name" => "title_color"
			),
            array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Tag", 'burst' ),
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					esc_html__( "h2", 'burst' ) => "h2",
					esc_html__( "h3", 'burst' ) => "h3",
					esc_html__( "h4", 'burst' ) => "h4",	
					esc_html__( "h5", 'burst' ) => "h5",	
					esc_html__( "h6", 'burst' ) => "h6",	
				)
            ),
            array (
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Size", 'burst' ),
				"param_name" => "title_size"
			),
			 array (
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Progress Bar Height(px)", 'burst' ),
				"param_name" => "bar_content_height",
				"description" => esc_html__( "Default value is 190px", 'burst' )
			),
            array (
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Bar Color", 'burst' ),
                "param_name" => "bar_color"
            ),
            array (
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Bar Border Color", 'burst' ),
                "param_name" => "bar_border_color"
            ),
			array (
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Color", 'burst' ),
				"param_name" => "background_color"
			),
			array (
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Top Border Radius", 'burst' ),
				"param_name" => "border_radius"
			),
            array (
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percent", 'burst' ),
				"param_name" => "percent"
			),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Show Percentage Number", 'burst' ),
                "param_name" => "show_percent_number",
                "value" => array(
                    esc_html__( "Yes", 'burst' ) => "yes",
                    esc_html__( "No", 'burst' ) => "no"
                ),
                "save_always" => true,
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Show Percentage Mark", 'burst' ),
				"param_name" => "show_percent_mark",
				"value" => array(
					esc_html__( "Yes", 'burst' ) => "with_mark",
					esc_html__( "No", 'burst' ) => "without_mark"	
				),
                "save_always" => true,
				"dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
            array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Text Size", 'burst' ),
				"param_name" => "percentage_text_size",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
            array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Color", 'burst' ),
				"param_name" => "percent_color",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
            array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text", 'burst' ),
				"param_name" => "text",
				"value" => ""
			),
            array (
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text Color", 'burst' ),
                "param_name" => "text_color",
                "dependency" => Array('element' => "text", 'not_empty' => true)
            )
		)
) );


/*** Progress Bar Icon ***/

vc_map( array(
	"name" => esc_html__( "Progress Bar - Icon", 'burst' ),
	"base" => "no_progress_bar_icon",
	"icon" => "icon-wpb-progress-bar-icon extended-custom-icon",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
                array(
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Number of Icons", 'burst' ),
                        "param_name" => "icons_number"
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Number of Active Icons", 'burst' ),
                        "param_name" => "active_number"
                    )
                ),
                $burst_mikado_IconCollections->getVCParamsArray(),
                array(
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Size", 'burst' ),
                        "param_name" => "size",
                        "value" => array(
                            esc_html__( "Tiny", 'burst' ) => "tiny",
                            esc_html__( "Small", 'burst' ) => "small",
                            esc_html__( "Medium", 'burst' ) => "medium",
                            esc_html__( "Large", 'burst' ) => "large",
                            esc_html__( "Very Large", 'burst' ) => "very_large",
                            esc_html__( "Custom", 'burst' ) => "custom"
                        ),
                        "save_always" => true,
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Custom Size (px)", 'burst' ),
                        "param_name" => "custom_size",
                        "value" => "",
                        "dependency" => array('element' => 'size', 'value' => array('custom'))
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Type", 'burst' ),
                        "param_name" => "type",
                        "value" => array(
                            esc_html__( "Normal", 'burst' ) => "normal",
                            esc_html__( "Circle", 'burst' ) => "circle",
                            esc_html__( "Square", 'burst' ) => "square"
                        ),
                        "save_always" => true,
                        "dependency" => array('element' => 'size', 'value' => array('tiny','small','medium','large','very_large'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Color", 'burst' ),
                        "param_name" => "icon_color"
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Active Color", 'burst' ),
                        "param_name" => "icon_active_color"
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Background Color", 'burst' ),
                        "param_name" => "background_color",
                        "dependency" => array('element' => "type", 'value' => array('square', 'circle')) 
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Background Active Color", 'burst' ),
                        "param_name" => "background_active_color",
                        "dependency" => array('element' => "type", 'value' => array('square', 'circle'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Border Color", 'burst' ),
                        "param_name" => "border_color",
                        "description" => esc_html__( "Only for Square and Circle type", 'burst' ),
                        "dependency" => array('element' => "type", 'value' => array('square', 'circle'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Border Active Color", 'burst' ),
                        "param_name" => "border_active_color",
                        "description" => esc_html__( "Only for Square and Circle type", 'burst' ),
                        "dependency" => array('element' => "type", 'value' => array('square', 'circle'))
                    )
                )
            )
) );


/*** Line Graph shortcode ***/

vc_map( array(
		"name" => esc_html__( "Line Graph", 'burst' ),
		"base" => "no_line_graph",
		"icon" => "icon-wpb-line-graph extended-custom-icon",
		"category" => esc_html__( 'by MIKADO', 'burst' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Type", 'burst' ),
				"param_name" => "type",
				"value" => array(
					"" => "",
					esc_html__( "Rounded edges", 'burst' ) => "rounded",
					esc_html__( "Sharp edges", 'burst' ) => "sharp"	
				)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Width", 'burst' ),
				"param_name" => "width"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Height", 'burst' ),
				"param_name" => "height"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Custom Color", 'burst' ),
				"param_name" => "custom_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Scale steps", 'burst' ),
				"param_name" => "scale_steps"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Scale step width", 'burst' ),
				"param_name" => "scale_step_width"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Labels", 'burst' ),
				"param_name" => "labels",
				"value" => "Label 1, Label 2, Label 3"
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content", 'burst' ),
				"param_name" => "content",
				"value" => "#279eff,Legend One,1,5,10;#7dc5ff,Legend Two,3,7,20;#bee2ff,Legend Three,10,2,34"
			)
		)
) );


/*** Ordered List ***/

vc_map( array(
		"name" => esc_html__( "List - Ordered", 'burst' ),
		"base" => "no_ordered_list",
		"icon" => "icon-wpb-ordered-list extended-custom-icon",
		"category" => esc_html__( 'by MIKADO', 'burst' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Show Separator", 'burst' ),
				"param_name" => "show_separator",
				"value" => array(
					esc_html__( "No", 'burst' ) => "no",
					esc_html__( "Yes", 'burst' ) => "yes"
				),
                "save_always" => true
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Animate List", 'burst' ),
				"param_name" => "animate",
				"value" => array(
					esc_html__( "No", 'burst' ) => "no",
					esc_html__( "Yes", 'burst' ) => "yes"
				),
				"save_always" => true
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content", 'burst' ),
				"param_name" => "content",
				"value" => '<ol><li>' . esc_html__('Lorem Ipsum', 'burst') . '</li><li>' . esc_html__('Lorem Ipsum', 'burst') . '</li><li>' . esc_html__('Lorem Ipsum', 'burst') . '</li></ol>'
			)

		)
) );


/*** Unordered List ***/

vc_map( array(
		"name" => esc_html__( "List - Unordered", 'burst' ),
		"base" => "no_unordered_list",
		"icon" => "icon-wpb-unordered-list extended-custom-icon",
		"category" => esc_html__( 'by MIKADO', 'burst' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Style", 'burst' ),
				"param_name" => "style",
				"value" => array(
					esc_html__( "Circle", 'burst' ) => "circle",
					esc_html__( "Number", 'burst' ) => "number",
					esc_html__( "Line", 'burst' ) => "line"
				),
                "save_always" => true
			),
            array(
                "type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Number Type", 'burst' ),
				"param_name" => "number_type",
				"value" => array(
					esc_html__( "Circle", 'burst' ) => "circle_number",
					esc_html__( "Transparent", 'burst' ) => "transparent_number"
				),
                "save_always" => true,
                "dependency" => array('element' => "style", 'value' => array('number'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Animate List", 'burst' ),
				"param_name" => "animate",
				"value" => array(
					esc_html__( "No", 'burst' ) => "no",
					esc_html__( "Yes", 'burst' ) => "yes"
				),
                "save_always" => true
			),
            array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Font Weight", 'burst' ),
				"param_name" => "font_weight",
				"value" => array(
                    esc_html__( "Default", 'burst' ) => "",
					esc_html__( "Light", 'burst' ) => "light",
					esc_html__( "Normal", 'burst' ) => "normal",
                    esc_html__( "Bold", 'burst' ) => "bold"
				)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Padding left (px)", 'burst' ),
				"param_name" => "padding_left",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Show Separator", 'burst' ),
				"param_name" => "show_separator",
				"value" => array(
					esc_html__( "No", 'burst' ) => "no",
					esc_html__( "Yes", 'burst' ) => "yes"
				),
                "save_always" => true
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content", 'burst' ),
				"param_name" => "content",
				"value" => '<ul><li>' . esc_html__('Lorem Ipsum', 'burst') . '</li><li>' . esc_html__('Lorem Ipsum', 'burst') . '</li><li>' . esc_html__('Lorem Ipsum', 'burst') . '</li></ul>'
			)
		)
) );


/*** Icon List Item ***/

vc_map( array(
	"name" => esc_html__( "Icon List Item", 'burst' ),
	"base" => "no_icon_list_item",
	"icon" => "icon-wpb-icon-list-item extended-custom-icon",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"params" => array_merge(
		$burst_mikado_IconCollections->getVCParamsArray(),
		array(
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Icon Type", 'burst' ),
				"param_name" => "icon_type",
				"value" => array(
					esc_html__( "Normal", 'burst' ) => "normal_icon_list",
					esc_html__( "Small", 'burst' ) => "small_icon_list"
				),
                "save_always" => true
			),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Icon Size (px)", 'burst' ),
                "param_name" => "icon_size"
            ),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Color", 'burst' ),
				"param_name" => "icon_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Margin Right (px)", 'burst' ),
				"param_name" => "icon_margin_right"
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Border Type", 'burst' ),
				"param_name" => "border_type",
				"value" => array(
					"" => "",
					esc_html__( "Circle", 'burst' ) => "circle",
					esc_html__( "Square", 'burst' ) => "square"
				)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Color", 'burst' ),
				"param_name" => "border_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title", 'burst' ),
				"param_name" => "title"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'burst' ),
				"param_name" => "title_color",
                "dependency" => Array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title size (px)", 'burst' ),
				"param_name" => "title_size",
                "dependency" => Array('element' => "title", 'not_empty' => true)
			),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title Font Family", 'burst' ),
                "param_name" => "title_font_family",
                "dependency" => Array('element' => "title", 'not_empty' => true)
            ),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Font Weight (px)", 'burst' ),
				"param_name" => "title_font_weight",
				"value" => $font_weight_array,
                "save_always" => true,
                "dependency" => Array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Letter Spacing (px)", 'burst' ),
				"param_name" => "title_letter_spacing",
                "dependency" => Array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Bottom Margin (px)", 'burst' ),
				"param_name" => "bottom_margin"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Show Separator", 'burst' ),
				"param_name" => "show_separator",
				"value" => array(
					esc_html__( "No", 'burst' ) => "no",
					esc_html__( "Yes", 'burst' ) => "yes"
				),
                "save_always" => true
			)
		)
	)
) );


/*** Icon Shortcode ***/

vc_map( array(
	"name" => esc_html__( "Icon", 'burst' ),
	"base" => "no_icons",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-icons extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		$burst_mikado_IconCollections->getVCParamsArray(),
		array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Size", 'burst' ),
				"param_name" => 'fa_size',
				"value" => $burst_mikado_IconCollections->getIconSizesArray(),
                "save_always" => true
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Custom Size (px)", 'burst' ),
				"param_name" => "custom_size",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Type", 'burst' ),
				"param_name" => "type",
				"value" => array(
					esc_html__( "Normal", 'burst' ) => "normal",
					esc_html__( "Circle", 'burst' ) => "circle",
					esc_html__( "Square", 'burst' ) => "square"
				),
                "save_always" => true
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Rotated Shape", 'burst' ),
				"param_name" => "rotated_shape",
				"value" => array(
					esc_html__( "No", 'burst' ) => "no",
					esc_html__( "Yes", 'burst' ) => "yes"
				),
                "save_always" => true,
				"dependency" => Array('element' => "type", 'value' => "square")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border radius", 'burst' ),
				"param_name" => "border_radius",
				"description" => esc_html__( 'Please insert border radius(Rounded corners) in px. For example: 4', 'burst' ),
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Shape Size (px)", 'burst' ),
				"param_name" => 'shape_size',
				"value" => "",
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Color", 'burst' ),
				"param_name" => "icon_color"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Position", 'burst' ),
				"param_name" => "position",
				"value" => array(
					esc_html__( "Normal", 'burst' ) => "",
					esc_html__( "Left", 'burst' ) => "left",
					esc_html__( "Center", 'burst' ) => "center",
					esc_html__( "Right", 'burst' ) => "right"
				)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Color", 'burst' ),
				"param_name" => "border_color",
				"dependency" => Array('element' => "type", 'value' => array('circle','square')),
				"description" => esc_html__( "Same color for Inner Border if enabled", 'burst' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Width", 'burst' ),
				"param_name" => "border_width",
				"description" => esc_html__( "Default value is 1. Enter just number. Omit pixels", 'burst' ),
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Image", 'burst' ),
				"param_name" => "background_image",
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Color", 'burst' ),
				"param_name" => "background_color",
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Hover Icon Color", 'burst' ),
				"param_name" => "hover_icon_color"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Hover Border Color", 'burst' ),
				"param_name" => "hover_border_color",
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Hover Background Color", 'burst' ),
				"param_name" => "hover_background_color",
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Shadow", 'burst' ),
				"param_name" => "icon_shadow",
				"value" => array(
					esc_html__( "No", 'burst' ) => "no",
					esc_html__( "Yes", 'burst' ) => "yes"
				),
                "save_always" => true,
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Shadow Color", 'burst' ),
				"param_name" => "shadow_color",
				"dependency" => Array('element' => "icon_shadow", 'value' => 'yes')
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Hover Shadow Color", 'burst' ),
				"param_name" => "hover_shadow_color",
				"dependency" => Array('element' => "icon_shadow", 'value' => 'yes')
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Inner Border", 'burst' ),
				"param_name" => "inner_border",
				"value" => array(
					esc_html__( "No", 'burst' ) => "no",
					esc_html__( "Yes", 'burst' ) => "yes"
				),
                "save_always" => true,
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Margin", 'burst' ),
				"param_name" => "margin",
				"description" => esc_html__( "Margin (top right bottom left)", 'burst' )
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Animation", 'burst' ),
				"param_name" => "icon_animation",
				"value" => array(
					esc_html__( "No", 'burst' ) => "",
					esc_html__( "Yes", 'burst' ) => "mkd_icon_animation"
				)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Hover Animation", 'burst' ),
				"param_name" => "icon_hover_animation",
				"value" => array(
					esc_html__( "No Animation", 'burst' ) => "no_animation",
					esc_html__( "Outline Scale Out", 'burst' ) => "animation_border_out",
					esc_html__( "Outline Scale In", 'burst' ) => "animation_border_in",
					esc_html__( "Scale In With Outline", 'burst' ) => "scale_in_outline",
					esc_html__( "Outline Enlarge", 'burst' ) => "outline_enlarge",
					esc_html__( "Pulse", 'burst' ) => "pulse"
				),
                "save_always" => true,
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Outline Color", 'burst' ),
				"param_name" => "outline_color",
				"dependency" => Array('element' => "icon_hover_animation", 'value' => array('animation_border_out','animation_border_in','scale_in_outline', 'pulse','outline_enlarge'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Animation Delay (ms)", 'burst' ),
				"param_name" => "icon_animation_delay",
				"value" => "",
				"dependency" => Array('element' => "icon_animation", 'value' => 'mkd_icon_animation')
			),
			array(
				"type" => "checkbox",
				"class" => "",
				"heading" => esc_html__( "Use For Back To Top", 'burst' ),
				"value" => array("Use this icon as Back to Top button?" => "yes"),
				"param_name" => "back_to_top_icon"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Link", 'burst' ),
				"param_name" => "link",
				"value" => ""
			),
			array(
				"type" => "checkbox",
				"class" => "",
				"heading" => esc_html__( "Use Link as Anchor", 'burst' ),
				"value" => array("Use this icon as Anchor?" => "yes"),
				"param_name" => "anchor_icon",
				"description" => esc_html__( "Check this box to use icon as anchor link (eg. #contact)", 'burst' ),
				"dependency" => Array('element' => "link", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Target", 'burst' ),
				"param_name" => "target",
				"value" => array(
					esc_html__( "Self", 'burst' ) => "_self",
					esc_html__( "Blank", 'burst' ) => "_blank"
				),
                "save_always" => true,
				"dependency" => Array('element' => "link", 'not_empty' => true)
		))
	)
) );


/*** Icon with Text ***/

vc_map( array(
	"name" => esc_html__( "Icon With Text", 'burst' ),
	"base" => "no_icon_text",
	"icon" => "icon-wpb-icon-with-text extended-custom-icon",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
                array(
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Box type", 'burst' ),
                        "param_name" => "box_type",
                        "value" => array(
                            esc_html__( "Normal", 'burst' ) => "normal",
                            esc_html__( "Icon in a box", 'burst' ) => "icon_in_a_box"
                        ),
                        "save_always" => true
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Box Border Color", 'burst' ),
                        "param_name" => "box_border_color",
                        "dependency" => Array('element' => "box_type", 'value' => array('icon_in_a_box'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Box Background Color", 'burst' ),
                        "param_name" => "box_background_color",
                        "dependency" => Array('element' => "box_type", 'value' => array('icon_in_a_box'))
                    )
                ),
                $burst_mikado_IconCollections->getVCParamsArray(),
                array(
                    array(
                        "type" => "attach_image",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Custom Icon", 'burst' ),
                        "param_name" => "custom_icon"
                    ),
					array(
                        "type" => "attach_image",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Custom Hover Icon", 'burst' ),
                        "param_name" => "custom_icon_hover",
						"dependency" => Array('element' => "custom_icon", 'not_empty' => true)
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Type", 'burst' ),
                        "param_name" => "icon_type",
                        "value" => array(
                            esc_html__( "Normal", 'burst' ) => "normal",
                            esc_html__( "Circle", 'burst' ) => "circle",
                            esc_html__( "Square", 'burst' ) => "square"
                        ),
                        "save_always" => true,
                        "description" => esc_html__( 'This attribute doesn\'t work when Icon Position is Top. In This case Icon Type is Normal', 'burst' ),
                    ),
					array(
						"type" => "dropdown",
						"holder" => "div",
						"class" => "",
						"heading" => esc_html__( "Icon Border Type", 'burst' ),
						"param_name" => "border_type",
						"value" => array(
							esc_html__( "Default", 'burst' ) => "",
							esc_html__( "Outline", 'burst' ) => "outline",
							esc_html__( "Normal", 'burst' ) => "normal"
						),
						"description" => esc_html__( "Choose type of icon border", 'burst' ),
						"dependency" => array('element' => 'icon_type', 'value' => array('circle','square'))
					),
                    array(
                        "type" => "textfield",
                        "class" => "",
                        "heading" => esc_html__( "Icon Border Width (px)", 'burst' ),
                        "param_name" => "icon_border_width",
                        "description" => esc_html__( "Enter just number, omit pixels", 'burst' ),
                        "dependency" => array('element' => 'icon_type' , 'value' => array('circle', 'square'))
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Size / Icon Space From Text", 'burst' ),
                        "param_name" => "icon_size",
                        "value" => $burst_mikado_IconCollections->getIconSizesArray(),
                        "save_always" => true
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Custom Icon Size (px)", 'burst' ),
                        "param_name" => "custom_icon_size",
                        "dependency" => Array('element' => "icon_pack", 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Animation", 'burst' ),
                        "param_name" => "icon_animation",
                        "value" => array(
                            esc_html__( "No", 'burst' ) => "",
                            esc_html__( "Yes", 'burst' ) => "mkd_icon_animation"
                        ),
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Animation Delay (ms)", 'burst' ),
                        "param_name" => "icon_animation_delay",
                        "value" => "",
                        "dependency" => Array('element' => "icon_animation", 'value' => array('mkd_icon_animation'))
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Animation on Hover", 'burst' ),
                        "param_name" => "icon_animation_hover",
                        "value" => array(
                            esc_html__( "No", 'burst' ) => "no",
                            esc_html__( "Zoom Icon", 'burst' ) => "zoom"
                        ),
                        "save_always" => true
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Position", 'burst' ),
                        "param_name" => "icon_position",
                        "value" => array(
                            esc_html__( "Top", 'burst' ) => "top",
                            esc_html__( "Left", 'burst' ) => "left",
                            esc_html__( "Left From Title", 'burst' ) => "left_from_title",
                            esc_html__( "Right", 'burst' ) => "right",
                            esc_html__( "Right From Title", 'burst' ) => "right_from_title"
                        ),
                        "save_always" => true,
                        "description" => esc_html__( "Icon Position (only for normal box type)", 'burst' ),
                        "dependency" => Array('element' => "box_type", 'value' => array('normal'))
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Margin", 'burst' ),
                        "param_name" => "icon_margin",
                        "value" => "",
                        "description" => esc_html__( "Margin should be set in a top right bottom left format", 'burst' ),
                        "dependency" => array('element' => "box_type", 'value' => array('normal'))
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Text Left Padding (px)", 'burst' ),
                        "param_name" => "text_left_padding",
                        "description" => esc_html__( "Only when Icon Position is Left", 'burst' ),
                        "dependency" => Array('element' => "icon_position", 'value' => array('left'))
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Text Right Padding (px)", 'burst' ),
                        "param_name" => "text_right_padding",
                        "description" => esc_html__( "Only when Icon Position is Right", 'burst' ),
                        "dependency" => Array('element' => "icon_position", 'value' => array('right'))
                    ),
					array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Shape Size (px)", 'burst' ),
                        "param_name" => "shape_size"
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Border Color", 'burst' ),
                        "param_name" => "icon_border_color",
                        "description" => esc_html__( "Only for Square and Circle type", 'burst' ),
                        "dependency" => Array('element' => "icon_type", 'value' => array('square','circle'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Color", 'burst' ),
                        "param_name" => "icon_color",
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Hover Color", 'burst' ),
                        "param_name" => "icon_hover_color",
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Background Color", 'burst' ),
                        "param_name" => "icon_background_color",
                        "description" => esc_html__( "Icon Background Color (only for square and circle icon type)", 'burst' ),
                        "dependency" => Array('element' => "icon_type", 'value' => array('square','circle'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Hover Background Color", 'burst' ),
                        "param_name" => "icon_hover_background_color",
                        "description" => esc_html__( "Icon Hover Background Color (only for square and circle icon type)", 'burst' ),
                        "dependency" => Array('element' => "icon_type", 'value' => array('square','circle'))
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Separator", 'burst' ),
                        "param_name" => "separator",
                        "value" => array(
                            esc_html__( "No", 'burst' ) => "no",
                            esc_html__( "Yes", 'burst' ) => "yes",
                        ),
                        "save_always" => true
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Separator Color", 'burst' ),
                        "param_name" => "separator_color",
                        "dependency" => array('element' => "separator", 'value' => array("yes"))
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Separator Thickness (px)", 'burst' ),
                        "param_name" => "separator_thickness",
                        "dependency" => array('element' => "separator", 'value' => array("yes"))
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Separator Size (px)", 'burst' ),
                        "param_name" => "separator_width",
                        "dependency" => array('element' => "separator", 'value' => array("yes"))
                    ),
                    array(
                        "type" => "dropdown",
                        "class" => "",
                        "heading" => esc_html__( "Separator Alignment", 'burst' ),
                        "param_name" => "separator_alignment",
                        "value" => array(
                            esc_html__( "Center", 'burst' ) => "none",
                            esc_html__( "Left", 'burst' ) => "left",
                            esc_html__( "Right", 'burst' ) => "right",
                        ),
                        "save_always" => true,
                        "dependency" => array('element' => "separator", 'value' => array("yes"))
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Title", 'burst' ),
                        "param_name" => "title",
                        "value" => ""
                    ),
                    array(
                        "type" => "dropdown",
                        "class" => "",
                        "heading" => esc_html__( "Title Tag", 'burst' ),
                        "param_name" => "title_tag",
                        "value" => array(
                            ""   => "",
                            esc_html__( "h2", 'burst' ) => "h2",
                            esc_html__( "h3", 'burst' ) => "h3",
                            esc_html__( "h4", 'burst' ) => "h4",
                            esc_html__( "h5", 'burst' ) => "h5",
                            esc_html__( "h6", 'burst' ) => "h6",
                        ),
                        "dependency" => Array('element' => "title", 'not_empty' => true)
                    ),
					array(
						"type" => "textfield",
						"class" => "",
						"heading" => esc_html__( "Title Size (px)", 'burst' ),
						"param_name" => "title_size",
						"value" => "",
						"dependency" => array('element' => "title", 'not_empty' => true)
					),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Title Color", 'burst' ),
                        "param_name" => "title_color",
                        "dependency" => Array('element' => "title", 'not_empty' => true)
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Space Between title and text (px)", 'burst' ),
                        "param_name" => "title_margin",
                        "value" => "",
                        "dependency" => Array('element' => "title", 'not_empty' => true)
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Title Top Padding (px)", 'burst' ),
                        "param_name" => "title_padding",
                        "value" => "",
                        "description" => esc_html__( "This attribute is used for boxed type", 'burst' ),
                        "dependency" => Array('element' => "box_type", 'value' => array('icon_in_a_box'))
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Text", 'burst' ),
                        "param_name" => "text",
                        "value" => ""
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Text Color", 'burst' ),
                        "param_name" => "text_color",
                        "dependency" => Array('element' => "text", 'not_empty' => true)
                    ),
					array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => esc_html__( "Text Size (px)", 'burst' ),
						"param_name" => "text_size",
						"dependency" => Array('element' => "text", 'not_empty' => true)
					),
					array(
						"type" => "textfield",
						"holder" => "div",
						"class" => "",
						"heading" => esc_html__( "Text Line Height (px)", 'burst' ),
						"param_name" => "text_line_height",
						"dependency" => Array('element' => "text", 'not_empty' => true)
					),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Link", 'burst' ),
                        "param_name" => "link",
                        "value" => "",
                        "dependency" => Array('element' => "box_type", 'value' => array('normal'))
                    ),
                    array(
                        "type" => "dropdown",
                        "class" => "",
                        "heading" => esc_html__( "Target", 'burst' ),
                        "param_name" => "target",
                        "value" => array(
                            ""   => "",
                            esc_html__( "Self", 'burst' ) => "_self",
                            esc_html__( "Blank", 'burst' ) => "_blank"
                        ),
                        "dependency" => Array('element' => "link", 'not_empty' => true)
                    )
                )
            )
) );

/*** Separator with Icon ***/

vc_map( array(
	"name" => esc_html__( "Separator with Icon", 'burst' ),
	"base" => "no_separator_with_icon",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-separator-with-icon extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Line Style", 'burst' ),
				"param_name" => "border_style",
				"value" => array(
					esc_html__( "Solid", 'burst' ) => "solid",
					esc_html__( "Dashed", 'burst' ) => "dashed",
					esc_html__( "Dotted", 'burst' ) => "dotted",
					esc_html__( "Transparent", 'burst' ) => "transparent"
				),
                "save_always" => true,
				"description" => esc_html__( "Choose a style for the separator line", 'burst' )
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Line Color", 'burst' ),
				"param_name" => "color",
				"value" => "",
				"description" => esc_html__( "Choose a color for the separator line", 'burst' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Line Width (px)", 'burst' ),
				"param_name" => "width",
				"value" => "",
				"description" => esc_html__( "Insert width for the separator line", 'burst' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Line Thickness (px)", 'burst' ),
				"param_name" => "thickness",
				"value" => "",
				"description" => esc_html__( "Insert thickness for the separator line", 'burst' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Top Margin (px)", 'burst' ),
				"param_name" => "up",
				"value" => "",
				"description" => esc_html__( "Insert top margin for the separator", 'burst' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Bottom Margin (px)", 'burst' ),
				"param_name" => "down",
				"value" => "",
				"description" => esc_html__( "Insert bottom margin for the separator", 'burst' )
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Type", 'burst' ),
				"param_name" => "type",
				"value" => array(
					esc_html__( "Default Icon", 'burst' ) => "with_icon",
					esc_html__( "Custom Icon", 'burst' ) => "with_custom_icon"
				),
                "save_always" => true,
				"description" => esc_html__( "Choose a style for the separator line", 'burst' )
			),
		),
		$burst_mikado_IconCollections->getVCParamsArray(array('element' => "type", 'value' => array('with_icon'))),
		array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Custom Size (px)", 'burst' ),
				"param_name" => "icon_custom_size",
				"value" => "",
				"description" => esc_html__( "Insert size for the icon (default value is 20)", 'burst' ),
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Type", 'burst' ),
				"param_name" => "icon_type",
				"value" => array(
					esc_html__( "Normal", 'burst' ) => "normal",
					esc_html__( "Circle", 'burst' ) => "circle",
					esc_html__( "Square", 'burst' ) => "square"
				),
                "save_always" => true,
				"description" => esc_html__( "Choose icon type", 'burst' ),
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Custom Icon", 'burst' ),
				"param_name" => "custom_icon",
				"dependency" => Array('element' => "type", 'value' => array('with_custom_icon'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Position", 'burst' ),
				"param_name" => "separator_icon_position",
				"value" => array(
					esc_html__( "Center", 'burst' ) => "center",
					esc_html__( "Left", 'burst' ) => "left",
					esc_html__( "Right", 'burst' ) => "right"
				),
                "save_always" => true,
				"description" => esc_html__( "Choose position of the icon", 'burst' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Margins", 'burst' ),
				"param_name" => "icon_margin",
				"description" => esc_html__( "Insert left and right icon margins", 'burst' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Border radius", 'burst' ),
				"param_name" => "icon_border_radius",
				"description" => esc_html__( 'Insert border radius(Rounded corners) in px. For example: 4. Leave empty for default.', 'burst' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Shape Size (px)", 'burst' ),
				"param_name" => 'icon_shape_size',
				"value" => "",
				"description" => esc_html__( "Insert size for a shape around the icon", 'burst' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Color", 'burst' ),
				"param_name" => "icon_color",
				"description" => esc_html__( "Choose a color for the icon", 'burst' ),
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Color", 'burst' ),
				"param_name" => "icon_border_color",
				"description" => esc_html__( "Choose a color for the border around the icon shape", 'burst' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Border Width", 'burst' ),
				"param_name" => "icon_border_width",
				"description" => esc_html__( "Insert border width (just number, omit pixels)", 'burst' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Background Color", 'burst' ),
				"param_name" => "icon_background_color",
				"description" => esc_html__( "Choose a background color for the icon shape", 'burst' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Hover Icon Color", 'burst' ),
				"param_name" => "hover_icon_color",
				"description" => esc_html__( "Choose a hover color for the icon", 'burst' ),
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Hover Border Color", 'burst' ),
				"param_name" => "hover_icon_border_color",
				"description" => esc_html__( "Choose a hover color for the border around the icon shape", 'burst' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Hover Background Color", 'burst' ),
				"param_name" => "hover_icon_background_color",
				"description" => esc_html__( "Choose a background hover color for the icon shape", 'burst' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Link", 'burst' ),
				"param_name" => "link"
			),
			array(
				"type" => "checkbox",
				"class" => "",
				"heading" => esc_html__( "Use Link as Anchor", 'burst' ),
				"value" => array("Use this icon as Anchor?" => "yes"),
				"param_name" => "icon_anchor",
				"description" => esc_html__( "Check this box to use icon as anchor link (eg. #contact)", 'burst' ),
				"dependency" => Array('element' => "link", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Target", 'burst' ),
				"param_name" => "target",
				"value" => array(
					esc_html__( "Self", 'burst' ) => "_self",
					esc_html__( "Blank", 'burst' ) => "_blank"
				),
                "save_always" => true,
				"dependency" => Array('element' => "link", 'not_empty' => true)
			)
		)
	)

) );

/*** Social Share ***/

vc_map( array(
	"name" => esc_html__( "Social Share", 'burst' ),
	"base" => "no_social_share",
	"icon" => "icon-wpb-social-share extended-custom-icon",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"allowed_container_element" => 'vc_row',
	"show_settings_on_create" => false
) );


/*** Cover Boxes ***/

$cover_boxes_icons_array = array(array());
for ($x = 1; $x<4; $x++) {
    $coverBoxesCollections = $burst_mikado_IconCollections->iconCollections;
    foreach($coverBoxesCollections as $collection_key => $collection) {

        $cover_boxes_icons_array[$x][] = array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__( "Button Icon ", 'burst' ).$x,
            "param_name" => "cover_social_".$collection->param."_".$x,
            "value" => $collection->getIconsArray(),
            "save_always" => true,
            "dependency" => Array('element' => "cover_boxes_icon_pack", 'value' => array($collection_key))
        );

    }
}

vc_map( array(
	"name" => esc_html__( "Cover Boxes", 'burst' ),
	"base" => "no_cover_boxes",
	"icon" => "icon-wpb-cover-boxes extended-custom-icon",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
        array(
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Active element", 'burst' ),
                "param_name" => "active_element",
                "value" => ""
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title tag", 'burst' ),
                "param_name" => "title_tag",
                "value" => array(
                    ""   => "",
                    esc_html__( "h2", 'burst' ) => "h2",
                    esc_html__( "h3", 'burst' ) => "h3",
                    esc_html__( "h4", 'burst' ) => "h4",
                    esc_html__( "h5", 'burst' ) => "h5",
                    esc_html__( "h6", 'burst' ) => "h6",
                ),
                "description" => esc_html__( "Choose with heading tag to display for titles", 'burst' )
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Number of items", 'burst' ),
                "param_name" => "number_of_items",
                "value" => array(
                    "" => "",
                    esc_html__( "Two", 'burst' ) => "2",
                    esc_html__( "Three", 'burst' ) => "3"
                ),
                "description" => esc_html__( "Choose the number of items shown", 'burst' )
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Icon Pack", 'burst' ),
                "param_name" => "cover_boxes_icon_pack",
                "value" => array_merge(array("No Icon" => ""),$burst_mikado_IconCollections->getIconCollectionsVC()),
                "save_always" => true
            ),
            array(
                "type" => "attach_image",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Image 1", 'burst' ),
                "param_name" => "image1"
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title 1", 'burst' ),
                "param_name" => "title1",
                "value" => ""
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title Color 1", 'burst' ),
                "param_name" => "title_color1"
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text 1", 'burst' ),
                "param_name" => "text1",
                "value" => ""
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text Color 1", 'burst' ),
                "param_name" => "text_color1"
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Link 1", 'burst' ),
                "param_name" => "link1",
                "value" => ""
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Link label 1", 'burst' ),
                "param_name" => "link_label1",
                "value" => ""
            )
        ),
        $cover_boxes_icons_array['1'],
        array(
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Target 1", 'burst' ),
                "param_name" => "target1",
                "value" => array(
                    esc_html__( "Self", 'burst' ) => "_self",
                    esc_html__( "Blank", 'burst' ) => "_blank"
                ),
                "save_always" => true
            ),
            array(
                "type" => "attach_image",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Image 2", 'burst' ),
                "param_name" => "image2"
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title 2", 'burst' ),
                "param_name" => "title2",
                "value" => ""
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title Color 2", 'burst' ),
                "param_name" => "title_color2"
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text 2", 'burst' ),
                "param_name" => "text2",
                "value" => ""
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text Color 2", 'burst' ),
                "param_name" => "text_color2"
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Link 2", 'burst' ),
                "param_name" => "link2",
                "value" => ""
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Link label 2", 'burst' ),
                "param_name" => "link_label2",
                "value" => ""
            )
        ),
        $cover_boxes_icons_array['2'],
        array(
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Target 2", 'burst' ),
                "param_name" => "target2",
                "value" => array(
                    esc_html__( "Self", 'burst' ) => "_self",
                    esc_html__( "Blank", 'burst' ) => "_blank"
                ),
                "save_always" => true
            ),
            array(
                "type" => "attach_image",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Image 3", 'burst' ),
                "param_name" => "image3",
                "dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title 3", 'burst' ),
                "param_name" => "title3",
                "value" => "",
                "dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title Color 3", 'burst' ),
                "param_name" => "title_color3",
                "dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text 3", 'burst' ),
                "param_name" => "text3",
                "value" => "",
                "dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text Color 3", 'burst' ),
                "param_name" => "text_color3",
                "dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Link 3", 'burst' ),
                "param_name" => "link3",
                "value" => "",
                "dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Link label 3", 'burst' ),
                "param_name" => "link_label3",
                "value" => "",
                "dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
            )
        ),
        $cover_boxes_icons_array['3'],
        array(
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Target 3", 'burst' ),
                "param_name" => "target3",
                "value" => array(
                    esc_html__( "Self", 'burst' ) => "_self",
                    esc_html__( "Blank", 'burst' ) => "_blank"
                ),
                "save_always" => true,
                "dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Show Link as Default Button", 'burst' ),
                "param_name" => "read_more_button_style",
                "value" => array(
                    esc_html__( "Default", 'burst' ) => "",
                    esc_html__( "No", 'burst' ) => "no",
                    esc_html__( "Yes", 'burst' ) => "yes"
                )
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator", 'burst' ),
                "param_name" => "separator",
                "value" => array(
                    esc_html__( "Yes", 'burst' ) => "yes",
                    esc_html__( "No", 'burst' ) => "no"
                ),
                "save_always" => true
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator Thicknes (px)", 'burst' ),
                "param_name" => "separator_thickness",
                "dependency" => array('element' => "separator", 'value' => array('yes'))
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator Color", 'burst' ),
                "param_name" => "separator_color",
                "dependency" => array('element' => "separator", 'value' => array('yes'))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator Border Style", 'burst' ),
                "param_name" => "separator_border_style",
                "value" => array(
                    "" => "",
                    esc_html__( "Dashed", 'burst' ) => "dashed",
                    esc_html__( "Solid", 'burst' ) => "solid"
                ),
                "dependency" => array('element' => "separator", 'value' => array('yes'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Icon Size (px)", 'burst' ),
                "param_name" => "button_icon_size",
                "dependency" => Array('element' => "cover_boxes_icon_pack", 'not_empty' => true)
            ),
            array(
                "type" => "colorpicker",
                "class" => "",
                "heading" => esc_html__( "Button Icon Color", 'burst' ),
                "param_name" => "button_icon_color",
                "dependency" => Array('element' => "cover_boxes_icon_pack", 'not_empty' => true)
            ),
        )
    )
) );


/*** Interactive Banners ***/

vc_map( array(
		"name" => esc_html__( "Interactive Banners", 'burst' ),
		"base" => "no_interactive_banners",
		"category" => esc_html__( 'by MIKADO', 'burst' ),
		"icon" => "icon-wpb-interactive-banners extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array_merge(
                    array(
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Width", 'burst' ),
                            "param_name" => "layout_width",
                            "value" => array(
                                ""   => "",
                                esc_html__( "1/2", 'burst' ) => "one_half",
                                esc_html__( "1/3", 'burst' ) => "one_third",
                                esc_html__( "1/4", 'burst' ) => "one_fourth",
                            ),
                        ),
                        array(
                            "type" => "attach_image",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Image", 'burst' ),
                            "param_name" => "image"
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Image Color Overlay", 'burst' ),
                            "param_name" => "overlay_color",
                            "value" => ""
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Image Hover Color Overlay", 'burst' ),
                            "param_name" => "overlay_color_hover",
                            "value" => ""
                        ),
						array(
							"type" => "dropdown",
							"class" => "",
							"heading" => esc_html__( "Image Zoom on Hover", 'burst' ),
							"param_name" => "image_animate",
							"value" => array(
								esc_html__( "No", 'burst' ) => "no",
								esc_html__( "Yes", 'burst' ) => "yes"
							),
                            "save_always" => true,
							"dependency" => Array('element' => "image", 'not_empty' => true)
						),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Show Image Inner Border", 'burst' ),
                            "param_name" => "show_border",
                            "value" => array(
                            	esc_html__( "Undraw Border On Hover", 'burst' ) => "undraw",
                                esc_html__( "Always", 'burst' ) => "always",
								esc_html__( "Only On Hover", 'burst' ) => "on_hover",
								esc_html__( "Only Before Hover", 'burst' ) => "before_hover",
								esc_html__( "Never", 'burst' ) => "never"
                            ),
                            "save_always" => true,
                        ),
                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__( "Image Inner Border Color", 'burst' ),
                            "param_name" => "border_color",
                            "dependency" => Array('element' => "show_border", 'value' => array('always','on_hover','before_hover','undraw'))
                        ),
						array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Inner Border Width", 'burst' ),
							"param_name" => "border_width",
							"value" => "",
							"dependency" => Array('element' => "show_border", 'value' => array('always','on_hover','before_hover','undraw'))
						),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Inner Border Offset (px)", 'burst' ),
                            "param_name" => "inner_border_offset",
                            "value" => "",
                            "description" => esc_html__( "Default value is 5", 'burst' ),
                            "dependency" => Array('element' => "show_border", 'value' => array('always','on_hover','before_hover','undraw'))
                        ),
						array(
							"type" => "dropdown",
							"class" => "",
							"heading" => esc_html__( "Show Icon", 'burst' ),
							"param_name" => "show_icon",
							"value" => array(
								esc_html__( "Always", 'burst' ) => "always",
								esc_html__( "Only On Hover", 'burst' ) => "on_hover",
								esc_html__( "Never", 'burst' ) => "never"
							),
                            "save_always" => true
						),
                    ),
                    $burst_mikado_IconCollections->getVCParamsArray((array('element' => "show_icon", 'value' => array('always', 'on_hover'))), '', true),
                    array(
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Type", 'burst' ),
                            "param_name" => "icon_type",
                            "value" => array(
                                esc_html__( "Normal", 'burst' ) => "normal",
                                esc_html__( "Circle", 'burst' ) => "circle",
                                esc_html__( "Square", 'burst' ) => "square"
                            ),
                            "save_always" => true,
                            "dependency" => Array('element' => "icon_pack", 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Size (px)", 'burst' ),
                            "param_name" => "icon_custom_size",
                            "value" => "",
                            "description" => esc_html__( "Default value is 20", 'burst' ),
                            "dependency" => Array('element' => "icon_pack", 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Color", 'burst' ),
                            "param_name" => "icon_color",
                            "dependency" => Array('element' => "icon_pack", 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Show Title", 'burst' ),
                            "param_name" => "show_title",
                            "value" => array(
                                esc_html__( "Always", 'burst' ) => "always",
                                esc_html__( "Only On Hover", 'burst' ) => "on_hover",
                                esc_html__( "Only Before Hover", 'burst' ) => "before_hover",
                                esc_html__( "Never", 'burst' ) => "never"
                            ),
                            "save_always" => true
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Title Text", 'burst' ),
                            "param_name" => "title",
                            "dependency" => Array('element' => "show_title", 'value' => array('always','on_hover','before_hover'))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Title Color", 'burst' ),
                            "param_name" => "title_color",
                            "dependency" => Array('element' => "title", 'not_empty' => true),
                            "dependency" => Array('element' => "show_title", 'value' => array('always','on_hover','before_hover'))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Title Size (px)", 'burst' ),
                            "param_name" => "title_size",
                            "description" => esc_html__( "Default value is 17", 'burst' ),
                            "dependency" => Array('element' => "title", 'not_empty' => true),
                            "dependency" => Array('element' => "show_title", 'value' => array('always','on_hover','before_hover'))
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Title Tag", 'burst' ),
                            "param_name" => "title_tag",
                            "value" => array(
                                ""   => "",
                                esc_html__( "h2", 'burst' ) => "h2",
                                esc_html__( "h3", 'burst' ) => "h3",
                                esc_html__( "h4", 'burst' ) => "h4",	
                                esc_html__( "h5", 'burst' ) => "h5",	
                                esc_html__( "h6", 'burst' ) => "h6",	
                            ),
                            "dependency" => Array('element' => "title", 'not_empty' => true)
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Show Button", 'burst' ),
                            "param_name" => "show_button",
                            "value" => array(
                                esc_html__( "Always", 'burst' ) => "always",
                                esc_html__( "Only On Hover", 'burst' ) => "on_hover",
								esc_html__( "Only Before Hover", 'burst' ) => "before_hover",
                                esc_html__( "Never", 'burst' ) => "never"
                            ),
                            "save_always" => true
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Button Height", 'burst' ),
                            "param_name" => "button_size",
                            "description" => esc_html__( "It uses small button options (px)", 'burst' ),
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Button Left and Right Padding", 'burst' ),
                            "param_name" => "button_padding",
                            "description" => esc_html__( "It uses small button options (px)", 'burst' ),
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Button Text", 'burst' ),
                            "param_name" => "link_text",
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Link Button to following URL", 'burst' ),
                            "param_name" => "button_link",
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Link Target", 'burst' ),
                            "param_name" => "target",
                            "value" => array(
                                esc_html__( "Self", 'burst' ) => "_self",
                                esc_html__( "Blank", 'burst' ) => "_blank"
                            ),
                            "save_always" => true,
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Button Text Color", 'burst' ),
                            "param_name" => "link_color",
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Button Border Color", 'burst' ),
                            "param_name" => "link_border_color",
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Button Background Color", 'burst' ),
                            "param_name" => "link_background_color",
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Add Link Over Banner Content", 'burst' ),
                            "param_name" => "link_over_content",
                            "value" => array(
                                esc_html__( "No", 'burst' ) => "no",
                                esc_html__( "Yes", 'burst' ) => "yes"
                            ),
                            "save_always" => true,
							"dependency" => Array('element' => "show_button", 'value' => "never")
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Link Banner Content to following URL", 'burst' ),
                            "param_name" => "content_link",
							"dependency" => Array('element' => "link_over_content", 'value' => 'yes')
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Show Separator under Title", 'burst' ),
                            "param_name" => "separator",
                            "value" => array(
                                esc_html__( "Never", 'burst' ) => "no",
                                esc_html__( "Always", 'burst' ) => "yes",
                                esc_html__( "Only On Hover", 'burst' ) => "on_hover"
                            ),
                            "save_always" => true,
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Separator Thickness (px)", 'burst' ),
                            "param_name" => "separator_thickness",
                            "dependency" => Array('element' => "separator", 'value' => array("yes","on_hover"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Separator Color", 'burst' ),
                            "param_name" => "separator_color",
                            "dependency" => Array('element' => "separator", 'value' => array("yes","on_hover"))
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Show Content", 'burst' ),
                            "param_name" => "show_content",
                            "value" => array(
                                esc_html__( "Always", 'burst' ) => "always",
                                esc_html__( "Only On Hover", 'burst' ) => "on_hover",
                                esc_html__( "Only Before Hover", 'burst' ) => "before_hover",
                                esc_html__( "Never", 'burst' ) => "never"
                            ),
                            "save_always" => true
                        ),
                        array(
                            "type" => "textarea_html",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Content", 'burst' ),
                            "param_name" => "content",
                            "value" => "<p>" . esc_html__("I am test text for Interactive Banner shortcode", 'burst'). "</p>"
                        )
                    )
                )
    )
);


/*** Image with Text and Icon ***/

vc_map( array(
    "name" => esc_html__( "Image with text and Icon", 'burst' ),
    "base" => "no_image_with_text_and_icon",
    "icon" => "icon-wpb-image-with-text-and-icon extended-custom-icon",
    "category" => esc_html__( 'by MIKADO', 'burst' ),
    "allowed_container_element" => 'vc_row',
    "params" => array_merge(
                array(
                    array(
                        "type" => "attach_image",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Image", 'burst' ),
                        "param_name" => "image"
                    ),
					array(
						"type" => "dropdown",
						"holder" => "div",
						"class" => "",
						"heading" => esc_html__( "Show Inner Border", 'burst' ),
						"param_name" => "inner_border",
						"value" => array(
							esc_html__( "Default", 'burst' ) => "",
							esc_html__( "No", 'burst' ) => "no",
							esc_html__( "Yes", 'burst' ) => "yes"
						),
						"description" => esc_html__( "Show Inner Border on Image", 'burst' ),
						"dependency" => array('element' => 'image', 'not_empty' => true)
					)
                ),
                $burst_mikado_IconCollections->getVCParamsArray(array(), '', true),
                array(
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Type", 'burst' ),
                        "param_name" => "icon_type",
                        "value" => array(
                            esc_html__( "Circle", 'burst' ) => "circle",
                            esc_html__( "Square", 'burst' ) => "square"
                        ),
                        "save_always" => true,
                        "dependency" => Array('element' => "icon_pack", 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Custom Size (px)", 'burst' ),
                        "param_name" => "icon_custom_size",
                        "value" => "",
                        "description" => esc_html__( "Default value is 26", 'burst' ),
                        "dependency" => Array('element' => "icon_pack", 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Custom Shape Size (px)", 'burst' ),
                        "param_name" => "icon_shape_size",
                        "value" => "",
                        "description" => esc_html__( "Default value is 74", 'burst' ),
                        "dependency" => Array('element' => "icon_pack", 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Color", 'burst' ),
                        "param_name" => "icon_color",
                        "dependency" => Array('element' => "icon_pack", 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Background Color", 'burst' ),
                        "param_name" => "icon_background_color",
                        "dependency" => Array('element' => "icon_pack", 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Link", 'burst' ),
                        "param_name" => "link"
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Link Target", 'burst' ),
                        "param_name" => "target",
                        "value" => array(
                            "" => "",
                            esc_html__( "Self", 'burst' ) => "_self",
                            esc_html__( "Blank", 'burst' ) => "_blank"
                        )
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Title", 'burst' ),
                        "param_name" => "title"
                    ),
                    array(
                        "type" => "dropdown",
                        "class" => "",
                        "heading" => esc_html__( "Title Tag", 'burst' ),
                        "param_name" => "title_tag",
                        "value" => array(
                            ""   => "",
                            esc_html__( "h2", 'burst' ) => "h2",
                            esc_html__( "h3", 'burst' ) => "h3",
                            esc_html__( "h4", 'burst' ) => "h4",
                            esc_html__( "h5", 'burst' ) => "h5",
                            esc_html__( "h6", 'burst' ) => "h6",
                        ),
                        "description" => esc_html__( "Default value is h4", 'burst' ),
                        "dependency" => Array('element' => "title", 'not_empty' => true)
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Title Color", 'burst' ),
                        "param_name" => "title_color",
                        "dependency" => Array('element' => "title", 'not_empty' => true)
                    ),
                    array(
                        "type" => "textarea_html",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Content", 'burst' ),
                        "param_name" => "content",
                        "value" => "<p>".  esc_html__( "I am test text for Image With Text and Icon shortcode.", 'burst' ) . "</p>"
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Top Margin", 'burst' ),
                        "param_name" => "position_top",
                        "description" => esc_html__( "Select top position of title from image. Default value is 65", 'burst' )
                    )
                )
            )

) );


/*** Image with text ***/

vc_map( array(
	"name" => esc_html__( "Image With Text", 'burst' ),
	"base" => "no_image_with_text",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-image-with-text extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image", 'burst' ),
			"param_name" => "image"
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Alignment", 'burst' ),
			"param_name" => "alignment",
			"value" => array(
				esc_html__( "Center", 'burst' ) => "center",
				esc_html__( "Left", 'burst' ) => "left",
				esc_html__( "Right", 'burst' ) => "right"
			),
            "save_always" => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title", 'burst' ),
			"param_name" => "title"
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Color", 'burst' ),
			"param_name" => "title_color"
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Title Tag", 'burst' ),
			"param_name" => "title_tag",
			"value" => array(
				""   => "",
				esc_html__( "h2", 'burst' ) => "h2",
				esc_html__( "h3", 'burst' ) => "h3",
				esc_html__( "h4", 'burst' ) => "h4",
				esc_html__( "h5", 'burst' ) => "h5",
				esc_html__( "h6", 'burst' ) => "h6",
			)
		),
		array(
			"type" => "textarea_html",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Content", 'burst' ),
			"param_name" => "content",
			"value" => "<p>" . esc_html__("I am test text for Interactive Banners shortcode.", 'burst' )."</p>"
		)
	)
) );


/*** Video ***/

vc_map( array(
	"name" => esc_html__( "Video shortcode", 'burst' ),
	"base" => "no_video",
	"icon" => "icon-wpb-video extended-custom-icon",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__( "Video Type - webm", 'burst' ),
			"param_name" => "webm",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__( "Video Type - mp4", 'burst' ),
			"param_name" => "mp4",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__( "Video Type - ogv", 'burst' ),
			"param_name" => "ogv",
			"value" => ""
		),
		array(
			"type" => "dropdown",
			"admin_label" => true,
			"class" => "",
			"heading" => esc_html__( "Loop", 'burst' ),
			"param_name" => "loop",
			"value" => array(
				esc_html__( "Default", 'burst' ) => "false",
				esc_html__( "No", 'burst' ) => "false",
				esc_html__( "Yes", 'burst' ) => "true"
			),
            "save_always" => true
		),
		array(
			"type" => "dropdown",
			"admin_label" => true,
			"class" => "",
			"heading" => esc_html__( "Autoplay", 'burst' ),
			"param_name" => "autoplay",
			"value" => array(
				esc_html__( "Default", 'burst' ) => "false",
				esc_html__( "No", 'burst' ) => "false",
				esc_html__( "Yes", 'burst' ) => "true"
			),
            "save_always" => true
		)
	)
) );


/*** Contact Form 7 ***/

if(burst_mikado_contact_form_7_installed()){
	vc_add_param("contact-form-7", array(
		"type" => "dropdown",
		"class" => "",
		"heading" => esc_html__( "Style", 'burst' ),
		"param_name" => "html_class",
		"value" => array(
			esc_html__( "Default", 'burst' ) => "default",
			esc_html__( "Custom Style 1", 'burst' ) => "cf7_custom_style_1",
			esc_html__( "Custom Style 2", 'burst' ) => "cf7_custom_style_2",
			esc_html__( "Custom Style 3", 'burst' ) => "cf7_custom_style_3"
		),
        "save_always" => true,
		"description" => esc_html__( "You can style each form element individually in Mikado Options > Contact Form 7", 'burst' )
	));
}


/*** Product Slider ***/
if(burst_mikado_is_woocommerce_installed()) {
    vc_map(array(
        "name" => esc_html__( "Product Slider", 'burst' ),
        "base" => "no_product_slider",
        "category" => esc_html__( 'by MIKADO', 'burst' ),
        "icon" => "icon-wpb-product-slider extended-custom-icon",
        "allowed_container_element" => 'vc_row',
        "params" => array(
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Product type", 'burst' ),
                "param_name" => "product_type",
                "value" => array(
                    esc_html__( "Recent Products", 'burst' ) => "recent_products",
                    esc_html__( "Featured Products", 'burst' ) => "featured_products",
                    esc_html__( "Products By Id", 'burst' ) => "products",
                    esc_html__( "Products By Category", 'burst' ) => "product_category",
                    esc_html__( "Products On Sale", 'burst' ) => "sale_products",
                    esc_html__( "Best Selling", 'burst' ) => "best_selling_products",
                    esc_html__( "Top Rated", 'burst' ) => "top_rated_products"
                ),
                "save_always" => true
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Order By", 'burst' ),
                "param_name" => "order_by",
                "value" => array(
                    "" => "",
                    esc_html__( "Date", 'burst' ) => "date",
                    esc_html__( "ID", 'burst' ) => "date",
                    esc_html__( "Author", 'burst' ) => "date",
                    esc_html__( "Title", 'burst' ) => "title",
                    esc_html__( "Modified", 'burst' ) => "modified",
                    esc_html__( "Random", 'burst' ) => "rand",
                    esc_html__( "Comment count", 'burst' ) => "comment_count",
                    esc_html__( "Menu order", 'burst' ) => "menu_order"
                ),
                "dependency" => array('element' => "product_type", 'value' => array("recent_products","featured_products","product_category","sale_products","top_rated_products"))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Padding between product items", 'burst' ),
                "param_name" => "padding_between",
                "value" => array(
                    esc_html__( "No", 'burst' ) => "no",
                    esc_html__( "Yes", 'burst' ) => "yes"
                ),
                "save_always" => true
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Order", 'burst' ),
                "param_name" => "order",
                "value" => array(
                    "" => "",
                    esc_html__( "ASC", 'burst' ) => "ASC",
                    esc_html__( "DESC", 'burst' ) => "DESC",
                ),
                "dependency" => array('element' => "product_type", 'value' => array("recent_products","featured_products","products","product_category","sale_products","top_rated_products"))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Number", 'burst' ),
                "param_name" => "number",
                "value" => "-1",
                "description" => esc_html__( "Number of product on page (-1 is all)", 'burst' )
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Number of Products Shown", 'burst' ),
                "param_name" => "products_shown",
                "value" => array(
                    "" => "",
                    "3" => "3",
                    "4" => "4",
                    "5" => "5",
                    "6" => "6"
                ),
                "save_always" => true,
                "description" => esc_html__( "Number of product posts that are showing at the same time in full width (on smaller screens is responsive so there will be less items shown)", 'burst' ),
            ),
            array(
                "type" => "checkbox",
                "class" => "",
                "heading" => esc_html__( "Prev/Next navigation", 'burst' ),
                "value" => array("Enable prev/next navigation?" => "yes"),
                "param_name" => "enable_navigation"
            ),
            array(
                "type" => "checkbox",
                "class" => "",
                "heading" => esc_html__( "Bullets navigation", 'burst' ),
                "value" => array("Show bullets navigation?" => "yes"),
                "param_name" => "pager_navigation"
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Products", 'burst' ),
                "param_name" => "ids",
                "value" => "",
                "description" => esc_html__( "Delimit ID numbers by comma", 'burst' ),
                "dependency" => array('element' => "product_type", 'value' => array("products"))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Category", 'burst' ),
                "param_name" => "category",
                "value" => "",
                "description" => esc_html__( "Delimit category slugs by comma", 'burst' ),
                "dependency" => array('element' => "product_type", 'value' => array("product_category"))
            ),
        )
    ));
}

/* Text Slider Holder */

class WPBakeryShortCode_No_Text_Slider_Holder  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "Text Slider Holder", 'burst' ),
	"base" => "no_text_slider_holder",
	"icon" => "icon-wpb-text-slider-holder extended-custom-icon",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"as_parent" => array('only' => 'no_text_slider_item'),
	"content_element" => true,
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Navigation", 'burst' ),
			"param_name" => "show_navigation",
			"value" => array(
				esc_html__( "Yes", 'burst' ) => 'yes',
				esc_html__( "No", 'burst' ) => 'no'				
			),
            "save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Navigation Position", 'burst' ),
			"param_name" => "navigation_position",
			"value" => array(
				esc_html__( "Left", 'burst' ) => 'nav-left',
				esc_html__( "Center", 'burst' ) => 'nav-center',
				esc_html__( "Right", 'burst' ) => 'nav-right'				
			),
            "save_always" => true,
			"dependency" => Array('element' => "show_navigation", 'value' => array('yes')),
		)
	),
	"js_view" => 'VcColumnView'
) );


/* Text Slider Item */

class WPBakeryShortCode_No_Text_Slider_Item  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "Text Slider Item", 'burst' ),
	"base" => "no_text_slider_item",
	"as_parent" => array('only' => 'vc_column_text, vc_separator, no_custom_font, no_icons, no_separator_with_icon, vc_text_separator'),
	"as_child" => array('only' => 'no_text_slider_holder'),
	"content_element" => true,
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-text-slider-item extended-custom-icon",
	"js_view" => 'VcColumnView',
	"show_settings_on_create" => false,
	"params" => array()
) );

/* Icon Slider Holder */

class WPBakeryShortCode_No_Icon_Slider_Holder  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "Icon Slider Holder", 'burst' ),
	"base" => "no_icon_slider_holder",
	"icon" => "icon-wpb-icon-slider-holder extended-custom-icon",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"as_parent" => array('only' => 'no_icon_slider_item'),
	"content_element" => true,
	"show_settings_on_create" => false,
	"params" => array(),
	"js_view" => 'VcColumnView'
) );

/* Icon Slider Item */

$icon_slider_icons_array = array();
$icon_slider_IconCollections = $burst_mikado_IconCollections->iconCollections;
foreach($icon_slider_IconCollections as $collection_key => $collection) {

    $tab_slider_icons_array[] = array(
        "type" => "dropdown",
        "class" => "",
        "heading" => esc_html__( "Slide Navigation Icon", 'burst' ),
        "param_name" => "icon_".$collection->param,
        "value" => $collection->getIconsArray(),
        "save_always" => true,
        "dependency" => Array('element' => "icon_family", 'value' => array($collection_key))
    );

}

class WPBakeryShortCode_No_Icon_Slider_Item  extends WPBakeryShortCode {}
vc_map( array(
	"name" => esc_html__( "Icon Slider Item", 'burst' ),
	"base" => "no_icon_slider_item",
	"as_child" => array('only' => 'no_icon_slider_holder'),
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-icon-slider-item extended-custom-icon",
	"show_settings_on_create" => true,
	"params" =>array_merge(
			array(
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_html__( "Icon Pack", 'burst' ),
					"param_name" => "icon_family",
					"value" => $burst_mikado_IconCollections->getIconCollectionsVC(),
                    "save_always" => true
				),
			),	
			$tab_slider_icons_array,
			array(
				array(
					"type" => "attach_image",
			        "admin_label" => true,
			        'heading' => esc_html__( 'Slide Image', 'burst' ),
			        'param_name' => 'slide_image',
			        'value' => '',
			        'description' => esc_html__( 'Select image from media library.', 'burst' ),
					),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_html__( "Image Position", 'burst' ),
					"param_name" => "image_position",
					"value" => array(
						esc_html__( "Left", 'burst' ) => "left",
						esc_html__( "Right", 'burst' ) => "right",
					),
                    "save_always" => true
				),
				array(
					"type" => "textarea_html",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Content", 'burst' ),
					"param_name" => "content",
					"value" => "",
				),
			)					
		),
	)
);

/*** Accordion ***/


class WPBakeryShortCode_No_Accordion  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" =>  esc_html__( 'Mikado Accordion', 'burst' ),
    "base" => "no_accordion",
    "as_parent" => array('only' => 'no_accordion_section'),
    "content_element" => true,
    "category" => esc_html__( 'by MIKADO', 'burst' ),
    "icon" => "icon-wpb-accordion extended-custom-icon",
    "show_settings_on_create" => true,
    "params" =>
        array(
            array(
                'type' => 'textfield',
				'heading' => esc_html__( 'Active section', 'burst' ),
                'param_name' => 'active_tab',
                'value' => 1,
				'description' => esc_html__( 'Enter section number to be active on load or enter "false" to collapse all sections.', 'burst' )
            ),
            array(
                'type' => 'checkbox',
				'heading' => esc_html__( 'Allow collapse all sections?', 'burst' ),
                'param_name' => 'collapsible',
				'description' => esc_html__( 'If checked, it is allowed to collapse all sections.', 'burst' ),
                'value' => array( esc_html__( 'Yes', 'burst' ) => 'yes' )
            ),
            array(
                'type' => 'textfield',
				'heading' => esc_html__( 'Extra class name', 'burst' ),
                'param_name' => 'el_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'burst' )
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Style", 'burst' ),
                "param_name" => "style",
                "value" => array(
                    esc_html__( "Accordion", 'burst' ) => "accordion",
                    esc_html__( "Toggle", 'burst' ) => "toggle",
                    esc_html__( "Boxed Accordion", 'burst' ) => "boxed_accordion",
                    esc_html__( "Boxed Toggle", 'burst' ) => "boxed_toggle"
                ),
                "save_always" => true
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => esc_html__( "Accordion Title Border Radius", 'burst' ),
                "param_name" => "accordion_section_border_radius",
                "value" => "",
                "dependency" => Array('element' => "style", 'value' => array('boxed_accordion', 'boxed_toggle'))
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => esc_html__( "Accordion Mark Border Radius", 'burst' ),
                "param_name" => "accordion_border_radius",
                "value" => "",
                "dependency" => Array('element' => "style", 'value' => array('accordion', 'toggle'))
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => esc_html__( "Accordion Title Height", 'burst' ),
                "param_name" => "accordion_section_height",
                "value" => ""
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Hide Icon", 'burst' ),
                "param_name" => "hide_icon",
                "value" => array(
                    esc_html__( "Yes", 'burst' ) => "yes",
                    esc_html__( "No", 'burst' ) => "no"
                ),
                "save_always" => true
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Title Alignment", 'burst' ),
                "param_name" => "title_alignment",
                "value" => array(
					"" => "",
					esc_html__( "Left", 'burst' ) => "left",
					esc_html__( "Center", 'burst' ) => "center",
					esc_html__( "Right", 'burst' ) => "right"
				),
                "dependency" => Array('element' => "hide_icon", 'value' => array('yes'))
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Title and Icon Alignment", 'burst' ),
                "param_name" => "title_icon_alignment",
                "value" => array(
					"" => "",
					esc_html__( "Icon on Left", 'burst' ) => "icon_left",
					esc_html__( "Text on Left", 'burst' ) => "text_left",
					esc_html__( "Icon and Text on Left", 'burst' ) => "icon_left_text_left"
				),
                "description" => esc_html__( "This option is only used for boxed type.", 'burst' ),
                "dependency" => Array('element' => "hide_icon", 'value' => array('no'))
            ),
        ),
    "js_view" => 'VcColumnView'

) );

/*** Accordion Section ***/

class WPBakeryShortCode_No_Accordion_Section  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" =>  esc_html__( 'Mikado Accordion Section', 'burst' ),
    "base" => "no_accordion_section",
    "as_parent" => array('except' => 'vc_row'),
    "as_child" => array('only' => 'no_accordion'),
    'is_container' => true,
    "category" => esc_html__( 'by MIKADO', 'burst' ),
    "icon" => "icon-wpb-accordion-section extended-custom-icon",
    "show_settings_on_create" => true,
    "js_view" => 'VcColumnView',
    "params" => array_merge(
        array(
            array(
                'type' => 'textfield',
				'heading' => esc_html__( 'Title', 'burst' ),
                'param_name' => 'title',
                'admin_label' => true,
				'value' => esc_html__( 'Section', 'burst' ),
				'description' => esc_html__( 'Enter accordion section title.', 'burst' )
            ),
            array(
                'type' => 'el_id',
				'heading' => esc_html__( 'Section ID', 'burst' ),
                'param_name' => 'el_id',
				'description' => sprintf( esc_html__( 'Enter optional row ID. Make sure it is unique, and it is valid as w3c specification: %s (Must not have spaces)', 'burst' ), '<a target="_blank" href="http://www.w3schools.com/tags/att_global_id.asp">' . esc_html__( 'link', 'burst' ) . '</a>' ),
            ),
            array(
                "type" => "colorpicker",
                "class" => "",
                "heading" => esc_html__( "Title Color", 'burst' ),
                "param_name" => "title_color",
                "value" => ""
            ),
            array(
                "type" => "colorpicker",
                "class" => "",
                "heading" => esc_html__( "Title Hover Color", 'burst' ),
                "param_name" => "title_hover_color",
                "value" => ""
            ),
            array(
                "type" => "colorpicker",
                "class" => "",
                "heading" => esc_html__( "Mark Icon Color", 'burst' ),
                "param_name" => "mark_icon_color",
                "value" => ""
            ),
            array(
                "type" => "colorpicker",
                "class" => "",
                "heading" => esc_html__( "Mark Icon Hover Color", 'burst' ),
                "param_name" => "mark_icon_color_hover",
                "value" => ""
            ),
            array(
                "type" => "colorpicker",
                "class" => "",
                "heading" => esc_html__( "Title and Mark Background Color", 'burst' ),
                "param_name" => "background_color",
                "value" => "",
                "description" => esc_html__( "This option is only used for boxed accordions", 'burst' )
            ),
            array(
                "type" => "colorpicker",
                "class" => "",
                "heading" => esc_html__( "Title and Mark Background Hover Color", 'burst' ),
                "param_name" => "background_hover_color",
                "value" => "",
                "description" => esc_html__( "This option is only used for boxed accordions", 'burst' )
            ),
            array(
                "type" => "colorpicker",
                "class" => "",
                "heading" => esc_html__( "Title and Mark Border Color", 'burst' ),
                "param_name" => "border_color",
                "value" => "",
                "description" => esc_html__( "This option is only used for boxed accordions", 'burst' )
            ),
            array(
                "type" => "colorpicker",
                "class" => "",
                "heading" => esc_html__( "Title and Mark Border Hover Color", 'burst' ),
                "param_name" => "border_hover_color",
                "value" => "",
                "description" => esc_html__( "This option is only used for boxed accordions", 'burst' )
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Title Tag", 'burst' ),
                "param_name" => "title_tag",
                "value" => array(
                    ""   => "",
                    "p"  => "p",
                    esc_html__( "h2", 'burst' ) => "h2",
                    esc_html__( "h3", 'burst' ) => "h3",
                    esc_html__( "h4", 'burst' ) => "h4",
                    esc_html__( "h5", 'burst' ) => "h5",
                    esc_html__( "h6", 'burst' ) => "h6",
                )
            ),
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => esc_html__( "Content Color", 'burst' ),
				"param_name" => "content_color",
				"value" => ""
			),
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => esc_html__( "Content Background Color", 'burst' ),
				"param_name" => "content_bckg_color",
				"value" => "",
				"description" => esc_html__( "This option is only used for boxed accordions", 'burst' )
			)
        )

    )
) );

/*** Tabs ***/

class WPBakeryShortCode_No_Tabs  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" =>  esc_html__( 'Mikado Tabs', 'burst' ),
    "base" => "no_tabs",
    "as_parent" => array('only' => 'no_tab'),
    "content_element" => true,
    "category" => esc_html__( 'by MIKADO', 'burst' ),
    "icon" => "icon-wpb-tsbs extended-custom-icon",
    "show_settings_on_create" => true,
    "params" => array(
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Extra class name', 'burst' ) ,
            'param_name' => 'el_class',
            'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'burst' )
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__( "Style", 'burst' ),
            "param_name" => "style",
            "value" => array(
                esc_html__( "Horizontal Center", 'burst' ) => "horizontal",
                esc_html__( "Horizontal Center With Icons", 'burst' ) => "horizontal_with_icons",
                esc_html__( "Horizontal Center With Text And Icons", 'burst' ) => "horizontal_with_text_and_icons",
                esc_html__( "Horizontal Left", 'burst' ) => "horizontal_left",
                esc_html__( "Horizontal Left With Icons", 'burst' ) => "horizontal_left_with_icons",
                esc_html__( "Horizontal Left With Text And Icons", 'burst' ) => "horizontal_left_with_text_and_icons",
                esc_html__( "Horizontal Right", 'burst' ) => "horizontal_right",
                esc_html__( "Horizontal Right With Icons", 'burst' ) => "horizontal_right_with_icons",
                esc_html__( "Horizontal Right With Text And Icons", 'burst' ) => "horizontal_right_with_text_and_icons",
                esc_html__( "Vertical Left", 'burst' ) => "vertical_left",
                esc_html__( "Vertical Left With Icons", 'burst' ) => "vertical_left_with_icons",
                esc_html__( "Vertical Left With Text and Icons", 'burst' ) => "vertical_left_with_text_and_icons",
                esc_html__( "Vertical Right", 'burst' ) => "vertical_right",
                esc_html__( "Vertical Right With Icons", 'burst' ) => "vertical_right_with_icons",
                esc_html__( "Vertical Right With Text and Icons", 'burst' ) => "vertical_right_with_text_and_icons",
            ),
            "save_always" => true
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__( "Tab Type", 'burst' ),
            "param_name" => "tab_type_default",
            "value" => array(
                esc_html__( "Default", 'burst' ) => "default",
                esc_html__( "With Borders", 'burst' ) => "with_borders"
            ),
            "save_always" => true,
            "dependency" => Array('element' => "style", 'value' => array('horizontal','horizontal_left','horizontal_right', 'vertical_left', 'vertical_right','horizontal_with_text_and_icons','horizontal_left_with_text_and_icons','horizontal_right_with_text_and_icons','vertical_left_with_text_and_icons','vertical_right_with_text_and_icons'))
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__( "Tab Type", 'burst' ),
            "param_name" => "tab_type_icons",
            "value" => array(
                esc_html__( "Default", 'burst' ) => "default",
                esc_html__( "With Borders", 'burst' ) => "with_borders",
                esc_html__( "With Lines", 'burst' ) => "with_lines"
            ),
            "save_always" => true,
            "dependency" => Array('element' => "style", 'value' => array('horizontal_with_icons','horizontal_left_with_icons','horizontal_right_with_icons', 'vertical_left_with_icons', 'vertical_right_with_icons'))
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__( "Border Type", 'burst' ),
            "param_name" => "border_type_default",
            "value" => array(
                esc_html__( "Border Arround Tabs", 'burst' ) => "border_arround_element",
                esc_html__( "Border Arround Active Tab", 'burst' ) => "border_arround_active_tab"
            ),
            "save_always" => true,
            "dependency" => Array('element' => "tab_type_default", 'value' => array('with_borders'))
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__( "Border Type", 'burst' ),
            "param_name" => "border_type_icons",
            "value" => array(
                esc_html__( "Border Around Tabs", 'burst' ) => "border_arround_element",
                esc_html__( "Border Around Active Tab", 'burst' ) => "border_arround_active_tab"
            ),
            "save_always" => true,
            "dependency" => Array('element' => "tab_type_icons", 'value' => array('with_borders'))
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__( "Margin Between Tabs", 'burst' ),
            "param_name" => "margin_between_tabs",
            "value" => array(
                esc_html__( "Yes", 'burst' ) => "enable_margin",
                esc_html__( "No", 'burst' ) => "disable_margin"
            ),
            "save_always" => true,
            "dependency" => Array('element' => "tab_type_default", 'value' => array('with_borders'))
        ),
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => esc_html__( "Space Between Tab and Content (px)", 'burst' ),
            "param_name" => "space_between_tab_and_content",
            "value" => "",
            "description" => esc_html__( "Insert value for space between Tab and Content (default value is 0px)", 'burst' ),
            "dependency" => Array('element' => "style", 'value' => array('horizontal_with_icons','horizontal_left_with_icons','horizontal_right_with_icons','horizontal','horizontal_left','horizontal_right','horizontal_with_text_and_icons','horizontal_left_with_text_and_icons','horizontal_right_with_text_and_icons'))
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__( "Border arround Content", 'burst' ),
            "param_name" => "show_content_border",
            "value" => array(
                esc_html__( "No", 'burst' ) => "no",
                esc_html__( "Yes", 'burst' ) => "yes"
            ),
            "save_always" => true
        ),
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => esc_html__( "Content Padding", 'burst' ),
            "param_name" => "content_padding",
            "value" => "",
            "description" => esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'burst' )
        ),
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => esc_html__( "Border Radius (px)", 'burst' ),
            "param_name" => "tab_border_radius",
            "value" => ""
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__( "Icon Position", 'burst' ),
            "param_name" => "tab_icon_position",
            "value" => array(
                esc_html__( "Left", 'burst' ) => "left",
                esc_html__( "Right", 'burst' ) => "right"
            ),
            "save_always" => true,
            "dependency" => Array('element' => "style", 'value' => array('horizontal_with_text_and_icons','horizontal_left_with_text_and_icons','horizontal_right_with_text_and_icons','vertical_left_with_text_and_icons','vertical_right_with_text_and_icons'))
        )
    ),
    "js_view" => 'VcColumnView'

) );


/*** Tab ***/

class WPBakeryShortCode_No_Tab  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" =>  esc_html__( 'Mikado Tab', 'burst' ),
    "base" => "no_tab",
    "as_parent" => array('except' => 'vc_row'),
    "as_child" => array('only' => 'no_tabs'),
    'is_container' => true,
    "category" => esc_html__( 'by MIKADO', 'burst' ),
    "icon" => "icon-wpb-tab extended-custom-icon",
    "show_settings_on_create" => true,
    "js_view" => 'VcColumnView',
    "params" => array_merge(
        $burst_mikado_IconCollections->getVCParamsArray(),
        array(
            array(
                "type" => "textfield",
                "class" => "",
                "admin_label" => true,
                "heading" => esc_html__( "Tab Title", 'burst' ),
                "param_name" => "title",
                "value" => ""
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Tab ID", 'burst' ),
                "param_name" => "tab_id",
                "value" => rand(),
                "description" => esc_html__( "This ID is randomly generated. It can be changed, but each ID has to be unique. Therefore, if you duplicate a tab, please make sure to change the tab ID manually.", 'burst' )
            ))

    )
) );


/*** Image Stack ***/

vc_map( array(
		"name" => esc_html__( "Image Stack", 'burst' ),
		"base" => "no_image_stack",
		"category" => esc_html__( 'by MIKADO', 'burst' ),
		"icon" => "icon-wpb-image-stack extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
			    "type" => "textfield",
			    "holder" => "div",
			    "class" => "",
			    "value" => "408",
			    "heading" => esc_html__( "Set the height parameter (px) for the Image Stack.", 'burst' ),
			    "param_name" => "height",
			    "description" => esc_html__( "The default value is 408. This is the initial height value.", 'burst' )
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Set the hero image for the image stack.", 'burst' ),
				"param_name" => "image_1",
				"description" => esc_html__( "This image is positioned in the center.", 'burst' ),
				"dependency" => array('element' => "height", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Additional Images", 'burst' ),
				"param_name" => "additional_images",
				"value" => array(
					"2" => "2",
					"4" => "4"
				),
				"save_always" => true,
				"description" => esc_html__( 'Choose how many additional images you\'d like to display.', 'burst' )
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Set the left inner image.", 'burst' ),
				"param_name" => "image_2",
				"dependency" => array('element' => "image_1", 'not_empty' => true)
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Set the right inner image.", 'burst' ),
				"param_name" => "image_3",
				"dependency" => array('element' => "image_1", 'not_empty' => true)
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Set the left outer image.", 'burst' ),
				"param_name" => "image_4",
				"dependency" => array('element' => "additional_images", 'value' => "4")
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Set the right outer image.", 'burst' ),
				"param_name" => "image_5",
				"dependency" => array('element' => "additional_images", 'value' => "4")
			),
			array(
			    "type" => "textfield",
			    "holder" => "div",
			    "class" => "",
			    "value" => "0",
			    "heading" => esc_html__( "Border radius", 'burst' ),
			    "param_name" => "border_radius",
			    "save_always" => true,
			    "description" => esc_html__( "Set the border radius for top-left and top-right corners for each image, if needed. Enter 15 for 15px for example.", 'burst' ),
			    "dependency" => array('element' => "height", 'not_empty' => true)
			),
		)
) );

/*** Interactive Pie Chart ***/

vc_map( array(
		"name" => esc_html__( "Interactive Pie Chart", 'burst' ),
		"base" => "no_interactive_pie_chart",
		"category" => esc_html__( 'by MIKADO', 'burst' ),
		"icon" => "icon-wpb-interactive-pie-chart extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Set percentage", 'burst' ),
				"param_name" => "percent",
				"value" => array(
					"5" => "5",
					esc_html__( "10", 'burst' ) => "10",
					esc_html__( "15", 'burst' ) => "15",
					esc_html__( "20", 'burst' ) => "20",
					esc_html__( "25", 'burst' ) => "25",
					esc_html__( "30", 'burst' ) => "30",
					esc_html__( "35", 'burst' ) => "35",
					esc_html__( "40", 'burst' ) => "40",
					esc_html__( "45", 'burst' ) => "45",
					esc_html__( "50", 'burst' ) => "50",
					esc_html__( "55", 'burst' ) => "55",
					esc_html__( "60", 'burst' ) => "60",
					esc_html__( "65", 'burst' ) => "65",
					esc_html__( "70", 'burst' ) => "70",
					esc_html__( "75", 'burst' ) => "75",
					esc_html__( "80", 'burst' ) => "80",
					esc_html__( "85", 'burst' ) => "85",
					esc_html__( "90", 'burst' ) => "90",
					esc_html__( "95", 'burst' ) => "95",
					esc_html__( "100", 'burst' ) => "100"
				),
				"save_always" => true,
				"description" => esc_html__( 'Choose which percentage out of 100 you\'d like to showcase for this pie chart.', 'burst' )
			),
			array(
			    "type" => "colorpicker",
			    "holder" => "div",
			    "class" => "",
			    "heading" => esc_html__( "Pie Chart Stroke and Title Hover Color", 'burst' ),
			    "param_name" => "path_color"
			),
			array(
			    "type" => "textfield",
			    "holder" => "div",
			    "class" => "",
			    "value" => "Craft",
			    "heading" => esc_html__( "Title", 'burst' ),
			    "param_name" => "title",
			    "description" => esc_html__( "Enter the desired title.", 'burst' )
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Image", 'burst' ),
				"param_name" => "image",
				"description" => esc_html__( "Set the desired image.", 'burst' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Link", 'burst' ),
				"param_name" => "link",
				"description" => esc_html__( "Enter the external URL to link to.", 'burst' )
			),
			array(
				"type" => "checkbox",
			    "class" => "",
			    "heading" => esc_html__( "Border?", 'burst' ),
			    "param_name" => "pie_chart_border",
			    "save_always" => true,
			    "value" => array("Yes" => "yes"),
			    "description" => esc_html__( "Choose whether to have a circled border around the pie-chart.", 'burst' )
			),
			array(
			    "type" => "colorpicker",
			    "holder" => "div",
			    "class" => "",
			    "heading" => esc_html__( "Pie Chart Border Color", 'burst' ),
			    "param_name" => "pie_chart_border_color",
			    "value" => "#e4e4e4",
				"dependency" => Array('element' => "pie_chart_border", 'value' => "yes")
			)
		)
) );

/*** Interactive Info Card ***/

vc_map( array(
	"name" => esc_html__( "Interactive Info Card", 'burst' ),
		"base" => "no_interactive_info_card",
		"category" => esc_html__( 'by MIKADO', 'burst' ),
		"icon" => "icon-wpb-interactive-info-card extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array_merge(
						$burst_mikado_IconCollections->getVCParamsArray(array(), '', true),
						array(
						    array(
						        "type" => "dropdown",
						        "holder" => "div",
						        "class" => "",
						        "heading" => esc_html__( "Icon Type", 'burst' ),
						        "param_name" => "icon_type",
						        "value" => array(
						            esc_html__( "Circle", 'burst' ) => "circle",
						            esc_html__( "Square", 'burst' ) => "square"
						        ),
						        "save_always" => true,
						        "dependency" => Array('element' => "icon_pack", 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
						    ),
						    array(
						        "type" => "textfield",
						        "holder" => "div",
						        "class" => "",
						        "heading" => esc_html__( "Icon Size (px)", 'burst' ),
						        "param_name" => "icon_custom_size",
						        "value" => "",
						        "description" => esc_html__( "Adust icon size. The default value is 29.", 'burst' ),
						        "dependency" => Array('element' => "icon_pack", 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
						    ),
						    array(
						        "type" => "textfield",
						        "holder" => "div",
						        "class" => "",
						        "heading" => esc_html__( "Custom Shape Size (px)", 'burst' ),
						        "param_name" => "icon_shape_size",
						        "value" => "",
						        "description" => esc_html__( "Default value is 100", 'burst' ),
						        "dependency" => Array('element' => "icon_pack", 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
						    ),
						    array(
						        "type" => "colorpicker",
						        "holder" => "div",
						        "class" => "",
						        "heading" => esc_html__( "Icon Color", 'burst' ),
						        "param_name" => "icon_color",
						        "dependency" => Array('element' => "icon_pack", 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
						    ),
						    array(
						        "type" => "colorpicker",
						        "holder" => "div",
						        "class" => "",
						        "heading" => esc_html__( "Icon Background Color", 'burst' ),
						        "param_name" => "icon_background_color",
						        "dependency" => Array('element' => "icon_pack", 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
						    ),
						    array(
						        "type" => "checkbox",
							    "class" => "",
							    "heading" => esc_html__( "Icon Outline?", 'burst' ),
							    "param_name" => "icon_outline",
							    "save_always" => true,
							    "value" => array("Yes" => "yes"),
							    "description" => esc_html__( 'Set an outline around the icon. It\'ll animate on element hover.', 'burst' ),
						        "dependency" => Array('element' => "icon_pack", 'value' => $burst_mikado_IconCollections->getIconCollectionsKeys())
						    ),
						    array(
						       "type" => "textfield",
						        "holder" => "div",
						        "class" => "",
						        "heading" => esc_html__( "Icon Outline Size", 'burst' ),
						        "param_name" => "icon_outline_size",
						        "value" => "111",
						        "description" => esc_html__( "Set an overall outline size in pixels. The default is 111 in terms of width and height in pixels.", 'burst' ),
						        "dependency" => Array('element' => "icon_outline", 'value' => "yes")
						    ),
						    array(
						       "type" => "colorpicker",
						        "holder" => "div",
						        "class" => "",
						        "heading" => esc_html__( "Icon Outline Color", 'burst' ),
						        "param_name" => "icon_outline_color",
						        "dependency" => Array('element' => "icon_outline", 'value' => "yes")
						    ),
						    array(
						       "type" => "textfield",
						        "holder" => "div",
						        "class" => "",
						        "heading" => esc_html__( "Icon Outline Border Radius", 'burst' ),
						        "param_name" => "icon_outline_border_radius",
						        "value" => "50%",
						        "description" => esc_html__( "Set a border radius in percentage or in pixels. For example set 50% for a fully circled outline.", 'burst' ),
						        "dependency" => Array('element' => "icon_outline", 'value' => "yes")
						    ),
						),
						array(
							array(
								"type" => "textfield",
								"holder" => "div",
								"class" => "",
								"heading" => esc_html__( "Title", 'burst' ),
								"param_name" => "title",
								"save_always" => true
							),
							array(
							    "type" => "colorpicker",
							    "holder" => "div",
							    "class" => "",
							    "heading" => esc_html__( "Title Color", 'burst' ),
							    "param_name" => "title_color",
							    "save_always" => true,
							    "dependency" => array('element' => "title", 'not_empty' => true)
							),
							array(
							    "type" => "colorpicker",
							    "holder" => "div",
							    "class" => "",
							    "heading" => esc_html__( "Title Hover Color", 'burst' ),
							    "param_name" => "title_hover_color",
							    "save_always" => true,
							    "dependency" => array('element' => "title_color", 'not_empty' => true)
							),
							array(
							    "type" => "checkbox",
							    "class" => "",
							    "heading" => esc_html__( "Insert separator?", 'burst' ),
							    "param_name" => "separator",
							    "save_always" => true,
							    "value" => array("Yes" => "yes"),
							    "description" => esc_html__( "Choose whether to insert separator between title and text sections.", 'burst' )
							),
							array(
							    "type" => "textfield",
							    "class" => "",
							    "heading" => esc_html__( "Separator width(px)", 'burst' ),
							    "param_name" => "separator_width",
							    "save_always" => true,
							    "value" => "58",
							    "description" => esc_html__( "Set the separator width in pixels. Enter only the absolute value.", 'burst' ),
							    "dependency" => array('element' => "separator", 'value' => "yes")
							),
							array(
							    "type" => "textfield",
							    "class" => "",
							    "heading" => esc_html__( "Separator top margin(px)", 'burst' ),
							    "param_name" => "separator_top_margin",
							    "save_always" => true,
							    "value" => "23",
							    "description" => esc_html__( "Set the separator top margin in pixels. Enter only the absolute value.", 'burst' ),
							    "dependency" => array('element' => "separator", 'value' => "yes")
							),
							array(
							    "type" => "textfield",
							    "class" => "",
							    "heading" => esc_html__( "Separator bottom margin(px)", 'burst' ),
							    "param_name" => "separator_bottom_margin",
							    "save_always" => true,
							    "value" => "23",
							    "description" => esc_html__( "Set the separator bottom margin in pixels. Enter only the absolute value.", 'burst' ),
							    "dependency" => array('element' => "separator", 'value' => "yes")
							),
							array(
							    "type" => "colorpicker",
							    "holder" => "div",
							    "class" => "",
							    "heading" => esc_html__( "Separator Color", 'burst' ),
							    "param_name" => "separator_color",
							    "save_always" => true,
							    "dependency" => array('element' => "separator", 'value' => "yes")
							),
							array(
								"type" => "colorpicker",
								"holder" => "div",
								"class" => "",
								"heading" => esc_html__( "Separator Hover Color", 'burst' ),
								"param_name" => "separator_hover_color",
								"save_always" => true,
								"value" => "",
								"dependency" => array('element' => "separator_color", 'not_empty' => true)
							),
							array(
								"type" => "textfield",
								"holder" => "div",
								"class" => "",
								"heading" => esc_html__( "Text", 'burst' ),
								"param_name" => "text",
								"save_always" => true
							),	
							array(
							    "type" => "colorpicker",
							    "holder" => "div",
							    "class" => "",
							    "heading" => esc_html__( "Text Color", 'burst' ),
							    "param_name" => "text_color",
							    "save_always" => true,
							    "dependency" => array('element' => "text", 'not_empty' => true)
							),
							array(
								"type" => "textfield",
								"holder" => "div",
								"class" => "",
								"heading" => esc_html__( "Link", 'burst' ),
								"param_name" => "link",
								"save_always" => true,
								"description" => esc_html__( "Enter a URL to link from Interactive Info Card using a button.", 'burst' )
							),
							array(
								"type" => "textfield",
								"holder" => "div",
								"class" => "",
								"heading" => esc_html__( "Button Text", 'burst' ),
								"param_name" => "button_text",
								"save_always" => true,
								"value" => "Explore now",
					 			"description" => esc_html__( "Enter a text to appear inside the button.", 'burst' ),
								"dependency" => array('element' => "link", 'not_empty' => true)
							),
							array(
								"type" => "colorpicker",
								"holder" => "div",
								"class" => "",
								"heading" => esc_html__( "Button Background Color", 'burst' ),
								"param_name" => "button_background_color",
								"save_always" => true,
								"value" => "#18cfab",
								"description" => esc_html__( "Set the button background color.", 'burst' ),
								"dependency" => array('element' => "link", 'not_empty' => true)
							),
							array(
								"type" => "colorpicker",
								"holder" => "div",
								"class" => "",
								"heading" => esc_html__( "Button Text Color", 'burst' ),
								"param_name" => "button_text_color",
								"save_always" => true,
								"value" => "",
								"description" => esc_html__( "Set the button text color.", 'burst' ),
								"dependency" => array('element' => "link", 'not_empty' => true)
							),
							array(
								"type" => "colorpicker",
								"holder" => "div",
								"class" => "",
								"heading" => esc_html__( "Background Color", 'burst' ),
								"param_name" => "background_color",
								"save_always" => true,
								"value" => "",
								"description" => esc_html__( "Set the overall Info Card background color.", 'burst' )
							),
							array(
								"type" => "colorpicker",
								"holder" => "div",
								"class" => "",
								"heading" => esc_html__( "Background Hover Color", 'burst' ),
								"param_name" => "background_hover_color",
								"save_always" => true,
								"value" => "",
								"description" => esc_html__( "Set the Info Card background hover color.", 'burst' )
							),
							array(
								"type" => "textfield",
								"holder" => "div",
								"class" => "",
								"heading" => esc_html__( "Padding", 'burst' ),
								"param_name" => "padding",
								"save_always" => true,
								"value" => "15%",
								"description" => esc_html__( "Set the overall inner padding. Initially set to 15%. For example enter 10% 20% for 10% padding for top and bottom and 20% padding for left and right.", 'burst' )
							),
							array(
							    "type" => "checkbox",
							    "class" => "",
							    "heading" => esc_html__( "Remove column gap?", 'burst' ),
							    "param_name" => "stretch",
							    "save_always" => true,
							    "value" => array("Yes" => "yes"),
							    "description" => esc_html__( "If multiple Interactive Info Cards are used next to each other, set this option to have them aligned with no gap in between.", 'burst' ),
							),
	                        array(
							    "type" => "checkbox",
							    "class" => "",
							    "heading" => esc_html__( "Remove right border?", 'burst' ),
							    "param_name" => "right_border",
							    "save_always" => true,
							    "value" => array("Yes" => "yes"),
							    "description" => esc_html__( "Mark YES if you want to remove the thin white right border between Interactive Info Cards.", 'burst' )
						    )
						)
					)	
) );


vc_map( array(
	"name" => esc_html__( "Vertical Separator", 'burst' ),
	"base" => "no_vertical_separator",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"icon" => "icon-wpb-vertical-separator extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Color", 'burst' ),
			"param_name" => "sep_color",
			"save_always" => true,
			"value" => "#616a6e",
			"description" => esc_html__( "Set the separator color. The default value is 616a6e.", 'burst' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator height", 'burst' ),
			"param_name" => "sep_height",
			"save_always" => true,
			"value" => "14px",
			"description" => esc_html__( "Set the separator height. The default value is 14px.", 'burst' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Left margin", 'burst' ),
			"param_name" => "sep_margin_left",
			"save_always" => true,
			"value" => "20px",
			"description" => esc_html__( "Set the left margin. The default value is 20px.", 'burst' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Right margin", 'burst' ),
			"param_name" => "sep_margin_right",
			"save_always" => true,
			"value" => "12px",
			"description" => esc_html__( "Set the right margin. The default value is 12px.", 'burst' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Bottom Offset", 'burst' ),
			"param_name" => "sep_bottom_offset",
			"save_always" => true,
			"value" => "",
			"description" => esc_html__( "Set the bottom offset for better centering, if needed.", 'burst' )
		)
	)
) );


/*** Scrolling Rails ***/

class WPBakeryShortCode_No_Scrolling_Rails extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "Scrolling Rails", 'burst' ),
	"base" => "no_scrolling_rails",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"as_parent" => array('only' => 'no_scrolling_rails_image_holder,no_scrolling_rails_content'),
	"content_element" => true,
	"icon" => "icon-wpb-scrolling_rails extended-custom-icon",
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Image", 'burst' ),
			"param_name" => "bgnd",
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"value" => array(
				esc_html__( "No", 'burst' ) => "no",
				esc_html__( "Yes", 'burst' ) => "yes",
			),
			'save_always' => true,
			"heading" => esc_html__( "Fade Background?", 'burst' ),
			"param_name" => "fade_bgnd",
			"description" => esc_html__( ", background will fade out when images start moving.", 'burst' ),
			"dependency" => array('element' => 'bgnd', 'not_empty' => true),
		),
	)
) );

class WPBakeryShortCode_No_Scrolling_Rails_Image_Holder extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "Scrolling Rails Image Holder", 'burst' ),
	"base" => "no_scrolling_rails_image_holder",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"as_parent" => array('only' => 'no_scrolling_rails_image'),
	"as_child" => array('only' => 'no_scrolling_rails'),
	"content_element" => true,
	"icon" => "icon-wpb-scrolling-rails-image-holder extended-custom-icon",
	"description" => esc_html__( "Use only one of these.", 'burst' ),
	"js_view" => 'VcColumnView',
	"show_settings_on_create" => false,
	"params" => array(
	)
) );

class WPBakeryShortCode_No_Scrolling_Rails_Image extends WPBakeryShortCode {}
vc_map( array(
	"name" => esc_html__( "Scrolling Rails Image", 'burst' ),
	"base" => "no_scrolling_rails_image",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"as_child" => array('only' => 'no_scrolling_rails_image_holder'),
	"icon" => "icon-wpb-scrolling-rails-image extended-custom-icon",
	"params" => array(
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image", 'burst' ),
			"param_name" => "image",
		),
		array(
			"type" => "checkbox",
		    "class" => "",
		    "heading" => esc_html__( "Phone Frame", 'burst' ),
		    "param_name" => "show_phone_frame",
		    "value" => array("Show phone frame" => "show_phone_frame"),
		    "description" => esc_html__( "If checked, top and lower frame will be added to the picture, simulating phone case.", 'burst' ),
			"dependency" => array('element' => 'image', 'not_empty' => true),
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Position - Top (%)", 'burst' ),
			"param_name" => "top",
			"description" => esc_html__( 'Distance of the container\'s center from the top edge of the holder, e.g. 50 to be vertically centered.', 'burst' ),
			"dependency" => array('element' => 'image', 'not_empty' => true),
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Position - Left (%)", 'burst' ),
			"param_name" => "left",
			"description" => esc_html__( 'Distance of the container\'s center from the left edge of the holder, e.g. 50 to be horizontally centered.', 'burst' ),
			"dependency" => array('element' => 'image', 'not_empty' => true),
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Width (%)", 'burst' ),
			"param_name" => "width",
			"description" => esc_html__( 'How much of the holder\'s width the container should take. The default is 20%.', 'burst' ),
			"dependency" => array('element' => 'image', 'not_empty' => true),
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"value" => array(
				esc_html__( "Left", 'burst' ) => "left",
				esc_html__( "Right", 'burst' ) => "right",
			),
			'save_always' => true,
			"heading" => esc_html__( "Leaving Direction", 'burst' ),
			"param_name" => "leaving",
			"description" => esc_html__( "The direction in which the image leaves the screen while scrolling.", 'burst' ),
			"dependency" => array('element' => 'image', 'not_empty' => true),
		),
	)
) );


class WPBakeryShortCode_No_Scrolling_Rails_Content extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "Scrolling Rails Content", 'burst' ),
	"base" => "no_scrolling_rails_content",
    "icon" => "icon-wpb-scrolling-rails-content extended-custom-icon",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"as_parent" => array('except' => 'no_scrolling_rails_image,no_scrolling_rails,no_scrolling_rails_image_holder,no_scrolling_rails_content'),
	"as_child" => array('only' => 'no_scrolling_rails'),
	"content_element" => true,
	"icon" => "icon-wpb-scrolling-rails-content extended-custom-icon",
	"description" => esc_html__( "Use only one of these.", 'burst' ),
	"js_view" => 'VcColumnView',
	"show_settings_on_create" => false,
	"params" => array(
	)
) );


/*** Image Fusion ***/

class WPBakeryShortCode_No_Image_Fusion extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "Image Fusion", 'burst' ),
	"base" => "no_image_fusion",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"as_parent" => array('only' => 'no_image_fusion_side_image'),
	"content_element" => true,
	"icon" => "icon-wpb-image-fusion extended-custom-icon",
	"description" => esc_html__( "Multiple images fusing into one.", 'burst' ),
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "The Main Image", 'burst' ),
			"param_name" => "image",
			"description" => esc_html__( "Image will be centered and other images will fuse into it.", 'burst' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Side Margin (px)", 'burst' ),
			"param_name" => "margin_side",
			"description" => esc_html__( "If other images stretch outside of this image, this margin should contain them. Enter the value in px for the original size.", 'burst' ),
			"dependency" => array('element' => 'image', 'not_empty' => true),
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Top Margin for Original Size (px)", 'burst' ),
			"param_name" => "margin_top",
			"description" => esc_html__( "If other images stretch above this image, this margin should contain them. Enter the value in px for the original size.", 'burst' ),
			"dependency" => array('element' => 'image', 'not_empty' => true),
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Bottom Margin (px)", 'burst' ),
			"param_name" => "margin_bottom",
			"description" => esc_html__( "If other images stretch below this image, this margin should contain them. Enter the value in px for the original size.", 'burst' ),
			"dependency" => array('element' => 'image', 'not_empty' => true),
		),
	)
) );

class WPBakeryShortCode_No_Image_Fusion_Side_Image extends WPBakeryShortCode {}
vc_map( array(
	"name" => esc_html__( "Image Fusion - Side Image", 'burst' ),
	"base" => "no_image_fusion_side_image",
	"category" => esc_html__( 'by MIKADO', 'burst' ),
	"as_child" => array('only' => 'no_image_fusion'),
	"icon" => "icon-wpb-image-fusion-side-image extended-custom-icon",
	"params" => array(
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image", 'burst' ),
			"param_name" => "image",
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Position - Top (px)", 'burst' ),
			"param_name" => "top",
			"description" => esc_html__( "Relative to the top edge of the main image when all images are in their original size.", 'burst' ),
			"dependency" => array('element' => 'image', 'not_empty' => true),
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Position - Left (px)", 'burst' ),
			"param_name" => "left",
			"description" => esc_html__( "Relative to the left edge of the main image when all images are in their original size.", 'burst' ),
			"dependency" => array('element' => 'image', 'not_empty' => true),
		),
	)
) );