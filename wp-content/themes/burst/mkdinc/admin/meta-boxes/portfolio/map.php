<?php

$mkd_pages = array();
$pages     = get_pages();
foreach ( $pages as $page ) {
	$mkd_pages[ $page->ID ] = $page->post_title;
}

$burst_mikado_IconCollections = burst_mikado_return_icon_collections();

//Portfolio Images

$mkdPortfolioImages = new BurstMikadoMetaBox(
	"portfolio_page",
	esc_html__( "Portfolio Images (multiple upload)", 'burst' )
);
burst_mikado_return_framework_variable()->mkdMetaBoxes->addMetaBox(
	"portfolio_images",
	$mkdPortfolioImages
);

$mkd_portfolio_image_gallery = new BurstMikadoMultipleImages(
	"mkd_portfolio-image-gallery",
	esc_html__( "Portfolio Images", 'burst' ),
	esc_html__( "Choose your portfolio images", 'burst' )
);
$mkdPortfolioImages->addChild(
	"mkd_portfolio-image-gallery",
	$mkd_portfolio_image_gallery
);

/*//Portfolio Images/Videos

$mkdPortfolioImagesVideos = new BurstMikadoMetaBox("portfolio_page", "Mikado Portfolio Images/Videos (single upload)");
burst_mikado_return_framework_variable()->mkdMetaBoxes->addMetaBox("portfolio_images_videos",$mkdPortfolioImagesVideos);

	$mkd_portfolio_images_videos = new BurstMikadoImagesVideos("Portfolio Images/Videos",esc_html__( "ThisIsDescription", 'burst' ));
	$mkdPortfolioImagesVideos->addChild("mkd_portfolio_images_videos",$mkd_portfolio_images_videos);
*/
//Portfolio Images/Videos 2

$mkdPortfolioImagesVideos2 = new BurstMikadoMetaBox(
	"portfolio_page",
	esc_html__( "Portfolio Images/Videos (single upload)", 'burst' )
);
burst_mikado_return_framework_variable()->mkdMetaBoxes->addMetaBox(
	"portfolio_images_videos2",
	$mkdPortfolioImagesVideos2
);

$mkd_portfolio_images_videos2 = new BurstMikadoImagesVideosFramework(
	esc_html__( "Portfolio Images/Videos 2", 'burst' ),
	esc_html__( "ThisIsDescription", 'burst' )
);
$mkdPortfolioImagesVideos2->addChild(
	"mkd_portfolio_images_videos2",
	$mkd_portfolio_images_videos2
);

//Portfolio Additional Sidebar Items

$mkdAdditionalSidebarItems = new BurstMikadoMetaBox(
	"portfolio_page",
	esc_html__( "Additional Portfolio Sidebar Items", 'burst' )
);
burst_mikado_return_framework_variable()->mkdMetaBoxes->addMetaBox(
	"portfolio_properties",
	$mkdAdditionalSidebarItems
);

$mkd_portfolio_properties = new BurstMikadoOptionsFramework(
	esc_html__( "Portfolio Properties", 'burst' ),
	esc_html__( "ThisIsDescription", 'burst' )
);
$mkdAdditionalSidebarItems->addChild(
	"mkd_portfolio_properties",
	$mkd_portfolio_properties
);

//General

$mkdGeneral = new BurstMikadoMetaBox(
	"portfolio_page",
	esc_html__( "General", 'burst' )
);
burst_mikado_return_framework_variable()->mkdMetaBoxes->addMetaBox(
	"portfolio_general",
	$mkdGeneral
);

$mkd_page_background_color = new BurstMikadoMetaField(
	"color",
	"mkd_page_background_color",
	"",
	esc_html__( "Page Background Color", 'burst' ),
	esc_html__( "Choose the page background (body) color", 'burst' )
);
$mkdGeneral->addChild(
	"mkd_page_background_color",
	$mkd_page_background_color
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Content Style", 'burst' ),
	esc_html__( "Define styles for Content area", 'burst' )
);
$mkdGeneral->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$mkd_content_top_padding = new BurstMikadoMetaField(
	"textsimple",
	"mkd_content-top-padding",
	"",
	esc_html__( "Content Top Padding (px)", 'burst' ),
	esc_html__( "This option control content top padding.", 'burst' )
);
$row1->addChild(
	"mkd_content-top-padding",
	$mkd_content_top_padding
);

$mkd_content_top_padding_mobile = new BurstMikadoMetaField(
	"selectblanksimple",
	"mkd_content-top-padding-mobile",
	"",
	esc_html__( "Set this top padding for mobile header", 'burst' ),
	"",
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' )
	)
);
$row1->addChild(
	"mkd_content-top-padding-mobile",
	$mkd_content_top_padding_mobile
);

$mkd_show_animation = new BurstMikadoMetaField(
	"selectblank",
	"mkd_show-animation",
	"",
	esc_html__( "Page Transition", 'burst' ),
	esc_html__( 'Choose a type of transition between loading pages.', 'burst' ),
	array(
		"no_animation" => esc_html__( "No Animation", 'burst' ),
		"updown" => esc_html__( "Up / Down", 'burst' ),
		"fade" => esc_html__( "Fade", 'burst' ),
		"updown_fade" => esc_html__( "Up/Down (In) / Fade (Out)", 'burst' ),
		"leftright" => esc_html__( "Left / Right", 'burst' )
	),
	array(),
	"enable_grid_elements",
	array( "yes" )
);
$mkdGeneral->addChild(
	"mkd_show-animation",
	$mkd_show_animation
);

$page_transitions_notice = new BurstMikadoNotice(
	esc_html__( "Page Transition", 'burst' ),
	esc_html__( 'Choose a a type of transition between loading pages. In order for animation to work properly, you must choose "Post name" in permalinks settings', 'burst' ),
	esc_html__( "AJAX Page transitions are disabled due to VC Grid Elements", 'burst' ),
	"enable_grid_elements",
	"no"
);
$mkdGeneral->addChild(
	"page_transitions_notice",
	$page_transitions_notice
);

$mkd_revolution_slider = new BurstMikadoMetaField(
	"text",
	"mkd_revolution-slider",
	"",
	esc_html__( "Layer Slider or Mikado Slider Shortcode", 'burst' ),
	esc_html__( "Copy and paste your shortcode located in Mikado Slider -> Slider", 'burst' )
);
$mkdGeneral->addChild(
	"mkd_revolution-slider",
	$mkd_revolution_slider
);

$mkd_choose_portfolio_single_view = new BurstMikadoMetaField(
	"selectblank",
	"mkd_choose-portfolio-single-view",
	"",
	esc_html__( "Portfolio Type", 'burst' ),
	esc_html__( 'Choose a default type for Single Project pages', 'burst' ),
	array(
		"small-images" => esc_html__( "Portfolio small images", 'burst' ),
		"small-slider" => esc_html__( "Portfolio small slider", 'burst' ),
		"big-images" => esc_html__( "Portfolio big images", 'burst' ),
		"big-slider" => esc_html__( "Portfolio big slider", 'burst' ),
		"custom" => esc_html__( "Portfolio custom", 'burst' ),
		"full-width-custom" => esc_html__( "Portfolio full width custom", 'burst' ),
		"gallery" => esc_html__( "Portfolio gallery", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""                  => "#mkdf_mkd_choose_number_of_portfolio_columns_container",
			"full-width-custom" => "#mkdf_mkd_choose_number_of_portfolio_columns_container",
			"custom"            => "#mkdf_mkd_choose_number_of_portfolio_columns_container",
			"big-slider"        => "#mkdf_mkd_choose_number_of_portfolio_columns_container",
			"big-images"        => "#mkdf_mkd_choose_number_of_portfolio_columns_container",
			"small-slider"      => "#mkdf_mkd_choose_number_of_portfolio_columns_container",
			"small-images"      => "#mkdf_mkd_choose_number_of_portfolio_columns_container"
		),
		"show"       => array(
			"gallery" => "#mkdf_mkd_choose_number_of_portfolio_columns_container"
		)
	)
);
$mkdGeneral->addChild(
	"mkd_choose-portfolio-single-view",
	$mkd_choose_portfolio_single_view
);

$mkd_choose_number_of_portfolio_columns_container = new BurstMikadoContainer(
	"mkd_choose_number_of_portfolio_columns_container",
	"mkd_choose-portfolio-single-view",
	"no",
	array( "", "1", "2", "3", "4", "5", "7" )
);
$mkdGeneral->addChild(
	"mkd_choose_number_of_portfolio_columns_container",
	$mkd_choose_number_of_portfolio_columns_container
);

$mkd_choose_number_of_portfolio_columns = new BurstMikadoMetaField(
	"selectblank",
	"mkd_choose-number-of-portfolio-columns",
	"",
	esc_html__( "Number of Columns", 'burst' ),
	esc_html__( 'Choose the number of columns for Portfolio Gallery type', 'burst' ),
	array(
		"2" => esc_html__( "2 Columns", 'burst' ),
		"3" => esc_html__( "3 Columns", 'burst' ),
		"4" => esc_html__( "4 Columns", 'burst' )
	)
);
$mkd_choose_number_of_portfolio_columns_container->addChild(
	"mkd_choose-number-of-portfolio-columns",
	$mkd_choose_number_of_portfolio_columns
);

$mkd_choose_portfolio_image_size = new BurstMikadoMetaField(
	"select",
	"mkd_choose-portfolio-image-size",
	"full",
	esc_html__( "Image Proportions", 'burst' ),
	esc_html__( 'Choose image proportions for Portfolio Gallery type', 'burst' ),
	array(
		"full" => esc_html__( "Original Size", 'burst' ),
		"portfolio-square" => esc_html__( "Square", 'burst' ),
		"portfolio-landscape" => esc_html__( "Landscape", 'burst' ),
		"portfolio-portrait" => esc_html__( "Portrait", 'burst' )
	)
);

$mkd_choose_number_of_portfolio_columns_container->addChild(
	"mkd_choose-portfolio-image-size",
	$mkd_choose_portfolio_image_size
);

$mkd_choose_portfolio_list_page = new BurstMikadoMetaField(
	"selectblank",
	"mkd_choose-portfolio-list-page",
	"",
	esc_html__( '"Back To" Link', 'burst' ),
	esc_html__( 'Choose "Back To" page to link from portfolio Single Project page', 'burst' ),
	$mkd_pages
);
$mkdGeneral->addChild(
	"mkd_choose-portfolio-list-page",
	$mkd_choose_portfolio_list_page
);

$mkd_portfolio_external_link = new BurstMikadoMetaField(
	"text",
	"mkd_portfolio-external-link",
	"",
	esc_html__( "Portfolio External Link", 'burst' ),
	esc_html__( "Enter URL to link from Portfolio List page", 'burst' )
);
$mkdGeneral->addChild(
	"mkd_portfolio-external-link",
	$mkd_portfolio_external_link
);

$mkd_portfolio_lightbox_link = new BurstMikadoMetaField(
	"text",
	"mkd_portfolio-lightbox-link",
	"",
	esc_html__( "Portfolio Custom Lighbox Content", 'burst' ),
	esc_html__( "Enter URL to link custom image/video content inside lightbox", 'burst' )
);
$mkdGeneral->addChild(
	"mkd_portfolio-lightbox-link",
	$mkd_portfolio_lightbox_link
);

$mkd_portfolio_type_masonry_style = new BurstMikadoMetaField(
	"select",
	"mkd_portfolio_type_masonry_style",
	"",
	esc_html__( "Dimensions for Masonry", 'burst' ),
	esc_html__( 'Choose image layout when it appears in Masonry type portfolio lists', 'burst' ),
	array(
		"default" => esc_html__( "Default", 'burst' ),
		"large_width" => esc_html__( "Large width", 'burst' ),
		"large_height" => esc_html__( "Large height", 'burst' ),
		"large_width_height" => esc_html__( "Large width/height", 'burst' )
	)
);
$mkdGeneral->addChild(
	"mkd_portfolio_type_masonry_style",
	$mkd_portfolio_type_masonry_style
);

$mkd_portfolio_masonry_parallax = new BurstMikadoMetaField(
	"select",
	"mkd_portfolio_masonry_parallax",
	"no",
	esc_html__( "Set Masonry Item in Parallax", 'burst' ),
	"",
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' )
	)
);
$mkdGeneral->addChild(
	"mkd_portfolio_masonry_parallax",
	$mkd_portfolio_masonry_parallax
);

$mkd_portfolio_disable_comments = new BurstMikadoMetaField(
	"selectblank",
	"mkd_portfolio-hide-comments",
	"",
	esc_html__( "Disable Comments", 'burst' ),
	"",
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' )
	)
);
$mkdGeneral->addChild(
	"mkd_portfolio-hide-comments",
	$mkd_portfolio_disable_comments
);

$mkd_image_hover_container = new BurstMikadoGroup(
	esc_html__( "Image Hover Style", 'burst' ),
	esc_html__( "Define style for hover color", 'burst' )
);
$mkdGeneral->addChild(
	"mkd_image_hover_container",
	$mkd_image_hover_container
);

$row11 = new BurstMikadoRow();
$mkd_image_hover_container->addChild(
	"row11",
	$row11
);

$mkd_portfolio_hover_color = new BurstMikadoMetaField(
	"colorsimple",
	"mkd_portfolio-hover-color",
	"",
	esc_html__( "Portfolio Hover Color", 'burst' ),
	""
);
$row11->addChild(
	"mkd_portfolio-hover-color",
	$mkd_portfolio_hover_color
);

$mkd_portfolio_hover_color_opacity = new BurstMikadoMetaField(
	"textsimple",
	"mkd_portfolio-hover-color-opacity",
	"",
	esc_html__( "Portfolio Hover Color Opacity", 'burst' ),
	""
);
$row11->addChild(
	"mkd_portfolio-hover-color-opacity",
	$mkd_portfolio_hover_color_opacity
);

// Header

$mkdHeader = new BurstMikadoMetaBox(
	"portfolio_page",
	esc_html__( "Header", 'burst' ),
	"vertical_area",
	array( "yes" )
);
burst_mikado_return_framework_variable()->mkdMetaBoxes->addMetaBox(
	"porfolio_header",
	$mkdHeader
);

$mkd_header_style = new BurstMikadoMetaField(
	"selectblank",
	"mkd_header-style",
	"",
	esc_html__( "Header Skin", 'burst' ),
	esc_html__( "Choose a header style to make header elements (logo, main menu, side menu button) in that predefined style", 'burst' ),
	array(
		"light" => esc_html__( "Light", 'burst' ),
		"dark" => esc_html__( "Dark", 'burst' )
	)
);
$mkdHeader->addChild(
	"mkd_header-style",
	$mkd_header_style
);

$mkd_header_style_on_scroll = new BurstMikadoMetaField(
	"selectblank",
	"mkd_header-style-on-scroll",
	"",
	esc_html__( "Enable Header Style on Scroll", 'burst' ),
	esc_html__( "Enabling this option, header will change style on scroll (depending on row settings) to make header elements (logo, main menu, side menu button) in that style", 'burst' ),
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' )
	)
);
$mkdHeader->addChild(
	"mkd_header-style-on-scroll",
	$mkd_header_style_on_scroll
);

$mkd_header_color_per_page = new BurstMikadoMetaField(
	"color",
	"mkd_header_color_per_page",
	"",
	esc_html__( "Initial Header Bottom Background Color", 'burst' ),
	esc_html__( "Choose a background color for header bottom area", 'burst' )
);
$mkdHeader->addChild(
	"mkd_header_color_per_page",
	$mkd_header_color_per_page
);

$mkd_header_color_transparency_per_page = new BurstMikadoMetaField(
	"text",
	"mkd_header_color_transparency_per_page",
	"",
	esc_html__( "Initial Header Bottom Transparency", 'burst' ),
	esc_html__( "Choose a transparency for the header bottom background color (0 = fully transparent, 1 = opaque)", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$mkdHeader->addChild(
	"mkd_header_color_transparency_per_page",
	$mkd_header_color_transparency_per_page
);

$mkd_header_bottom_border_color = new BurstMikadoMetaField(
	"color",
	"mkd_header_bottom_border_color",
	"",
	esc_html__( "Initial Header Bottom Border Color", 'burst' ),
	esc_html__( "Choose a bottom border color for header area", 'burst' )
);
$mkdHeader->addChild(
	"mkd_header_bottom_border_color",
	$mkd_header_bottom_border_color
);

$mkd_header_top_color_per_page = new BurstMikadoMetaField(
	"color",
	"mkd_header_top_color_per_page",
	"",
	esc_html__( "Initial Header Top Background Color", 'burst' ),
	esc_html__( "Choose a background color for header top area", 'burst' )
);
$mkdHeader->addChild(
	"mkd_header_top_color_per_page",
	$mkd_header_top_color_per_page
);

$mkd_header_top_color_transparency_per_page = new BurstMikadoMetaField(
	"text",
	"mkd_header_top_color_transparency_per_page",
	"",
	esc_html__( "Initial Header Top Transparency", 'burst' ),
	esc_html__( "Choose a transparency for the header top background color (0 = fully transparent, 1 = opaque)", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$mkdHeader->addChild(
	"mkd_header_top_color_transparency_per_page",
	$mkd_header_top_color_transparency_per_page
);

$mkd_page_scroll_amount_for_sticky = new BurstMikadoMetaField(
	"text",
	"mkd_page_scroll_amount_for_sticky",
	"",
	esc_html__( "Scroll amount for sticky header appearance (px)", 'burst' ),
	esc_html__( "Define scroll amount for sticky header appearance", 'burst' ),
	array(),
	array( "col_width" => 3 ),
	"header_bottom_appearance",
	array( "regular", "fixed", "fixed_hiding" )
);
$mkdHeader->addChild(
	"mkd_page_scroll_amount_for_sticky",
	$mkd_page_scroll_amount_for_sticky
);

$mkd_page_hide_initial_sticky = new BurstMikadoMetaField(
	"selectblank",
	"mkd_page_hide_initial_sticky",
	"",
	esc_html__( "Hide Sticky Header Initially", 'burst' ),
	esc_html__( "Enabling this option will initially hide the header, and it will only be displayed when the user scrolls down the page", 'burst' ),
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' )
	)
);
$mkdHeader->addChild(
	"mkd_page_hide_initial_sticky",
	$mkd_page_hide_initial_sticky
);

// Side Menu Area

$mkdLeftMenuArea = new BurstMikadoMetaBox(
	"portfolio_page",
	esc_html__( "Side Menu Area", 'burst' ),
	"vertical_area",
	array( "no" )
);
burst_mikado_return_framework_variable()->mkdMetaBoxes->addMetaBox(
	"porfolio_left_menu",
	$mkdLeftMenuArea
);

$mkd_page_vertical_area_transparency = new BurstMikadoMetaField(
	"selectblank",
	"mkd_page_vertical_area_transparency",
	"",
	esc_html__( "Enable transparent side menu area", 'burst' ),
	esc_html__( "Enabling this option will make Left Menu background transparent ", 'burst' ),
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' )
	)
);
$mkdLeftMenuArea->addChild(
	"mkd_page_vertical_area_transparency",
	$mkd_page_vertical_area_transparency
);

$mkd_page_vertical_area_background = new BurstMikadoMetaField(
	"color",
	"mkd_page_vertical_area_background",
	"",
	esc_html__( "Side Menu Area Background Color", 'burst' ),
	esc_html__( "Choose a color for Left Menu background", 'burst' )
);
$mkdLeftMenuArea->addChild(
	"mkd_page_vertical_area_background",
	$mkd_page_vertical_area_background
);

$mkd_page_vertical_area_background_opacity = new BurstMikadoMetaField(
	"text",
	"mkd_page_vertical_area_background_opacity",
	"",
	esc_html__( "Side Menu Area Background Opacity", 'burst' ),
	esc_html__( "Choose a opacity for the Side Menu Area Background (0 = fully transparent, 1 = opaque)", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$mkdLeftMenuArea->addChild(
	"mkd_page_vertical_area_background_opacity",
	$mkd_page_vertical_area_background_opacity
);

$mkd_page_vertical_area_transparency_over_slider = new BurstMikadoMetaField(
	"selectblank",
	"mkd_page_vertical_area_transparency_over_slider",
	"",
	esc_html__( "Transparency Setting Takes Effect Only on Mikado Slider", 'burst' ),
	esc_html__( "Enabling this option will ensure that the transparency set in the 'Side Menu Area Background Opacity' takes effect only when the side menu area is over the Mikado Slider", 'burst' ),
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' )
	)
);
$mkdLeftMenuArea->addChild(
	"mkd_page_vertical_area_transparency_over_slider",
	$mkd_page_vertical_area_transparency_over_slider
);

$mkd_page_vertical_area_background_image = new BurstMikadoMetaField(
	"image",
	"mkd_page_vertical_area_background_image",
	"",
	esc_html__( "Side Menu Area Background Image", 'burst' ),
	esc_html__( "Choose an image for Left Menu background", 'burst' )
);
$mkdLeftMenuArea->addChild(
	"mkd_page_vertical_area_background_image",
	$mkd_page_vertical_area_background_image
);

$mkd_page_disable_vertical_area_background_image = new BurstMikadoMetaField(
	"selectblank",
	"mkd_page_disable_vertical_area_background_image",
	"",
	esc_html__( "Disable Side Menu Area Background Image", 'burst' ),
	esc_html__( "Enabling this option will hide background image in Side Menu", 'burst' ),
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' )
	)
);
$mkdLeftMenuArea->addChild(
	"mkd_page_disable_vertical_area_background_image",
	$mkd_page_disable_vertical_area_background_image
);

// Title

$mkdTitle = new BurstMikadoMetaBox(
	"portfolio_page",
	esc_html__( "Title", 'burst' )
);
burst_mikado_return_framework_variable()->mkdMetaBoxes->addMetaBox(
	"porfolio_title",
	$mkdTitle
);

$mkd_show_page_title = new BurstMikadoMetaField(
	"selectblank",
	"mkd_show-page-title",
	"",
	esc_html__( "Show Title Area", 'burst' ),
	esc_html__( "Disabling this option will turn off page title area", 'burst' ),
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#mkdf_mkd_page_title_area_container, #mkdf-meta-box-portfolio_title_animations"
		),
		"show"       => array(
			""    => "#mkdf_mkd_page_title_area_container, #mkdf-meta-box-portfolio_title_animations",
			"yes" => "#mkdf_mkd_page_title_area_container, #mkdf-meta-box-portfolio_title_animations"
		)
	)
);
$mkdTitle->addChild(
	"mkd_show-page-title",
	$mkd_show_page_title
);

$mkd_page_title_area_container = new BurstMikadoContainer(
	"mkd_page_title_area_container",
	"mkd_show-page-title",
	"no"
);
$mkdTitle->addChild(
	"mkd_page_title_area_container",
	$mkd_page_title_area_container
);

$mkd_page_title_type = new BurstMikadoMetaField(
	"selectblank",
	"mkd_page_title_type",
	"",
	esc_html__( "Title Type", 'burst' ),
	esc_html__( "Choose title type for this page.", 'burst' ),
	array(
		"standard_title" => esc_html__( "Standard", 'burst' ),
		"breadcrumbs_title" => esc_html__( "Breadcrumbs", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array( "breadcrumbs_title" => "#mkdf_mkd_title_standard_container" ),
		"show"       => array(
			"standard_title" => "#mkdf_mkd_title_standard_container",
			""               => "#mkdf_mkd_title_standard_container"
		)
	)
);
$mkd_page_title_area_container->addChild(
	"mkd_page_title_type",
	$mkd_page_title_type
);

$mkd_animate_page_title = new BurstMikadoMetaField(
	"selectblank",
	"mkd_animate_page_title",
	"",
	esc_html__( "Animations", 'burst' ),
	esc_html__( "Choose an animation for Title Area", 'burst' ),
	array(
		"no" => esc_html__( "No animation", 'burst' ),
		"text_right_left" => esc_html__( "Text right to left", 'burst' ),
		"area_top_bottom" => esc_html__( "Title area top to bottom", 'burst' )
	)
);
$mkd_page_title_area_container->addChild(
	"mkd_animate_page_title",
	$mkd_animate_page_title
);

$mkd_page_page_title_vertical_aligment = new BurstMikadoMetaField(
	"selectblank",
	"mkd_page_page_title_vertical_aligment",
	"",
	esc_html__( "Vertical Alignment", 'burst' ),
	esc_html__( "Specify Title vertical alignment", 'burst' ),
	array(
		"header_bottom" => esc_html__( "From Bottom of Header", 'burst' ),
		"window_top" => esc_html__( "From Window Top", 'burst' )
	)
);
$mkd_page_title_area_container->addChild(
	"mkd_page_page_title_vertical_aligment",
	$mkd_page_page_title_vertical_aligment
);

$mkd_page_title_position = new BurstMikadoMetaField(
	"selectblank",
	"mkd_page_title_position",
	"",
	esc_html__( "Title Content Alignment", 'burst' ),
	esc_html__( "Specify title content alignment", 'burst' ),
	array(
		"left" => esc_html__( "Left", 'burst' ),
		"center" => esc_html__( "Center", 'burst' ),
		"right" => esc_html__( "Right", 'burst' )
	)
);
$mkd_page_title_area_container->addChild(
	"mkd_page_title_position",
	$mkd_page_title_position
);

$mkd_show_page_title_text = new BurstMikadoMetaField(
	"selectblank",
	"mkd_show_page_title_text",
	"",
	esc_html__( "Show Title Text", 'burst' ),
	esc_html__( "Disabling this option will turn off page title text", 'burst' ),
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#mkdf_mkd_title_text_container, #mkdf_animation_page_page_title_container"
		),
		"show"       => array(
			""    => "#mkdf_mkd_title_text_container, #mkdf_animation_page_page_title_container",
			"yes" => "#mkdf_mkd_title_text_container, #mkdf_animation_page_page_title_container"
		)
	)
);
$mkd_page_title_area_container->addChild(
	"mkd_show_page_title_text",
	$mkd_show_page_title_text
);

$mkd_title_text_container = new BurstMikadoContainer(
	"mkd_title_text_container",
	"mkd_show_page_title_text",
	"no"
);
$mkd_page_title_area_container->addChild(
	"mkd_title_text_container",
	$mkd_title_text_container
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Title Text Style", 'burst' ),
	esc_html__( "Define styles for text in Title Area", 'burst' )
);
$mkd_title_text_container->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$mkd_page_title_color = new BurstMikadoMetaField(
	"colorsimple",
	"mkd_page-title-color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "ThisIsDescription", 'burst' )
);
$row1->addChild(
	"mkd_page-title-color",
	$mkd_page_title_color
);

$mkd_title_text_shadow = new BurstMikadoMetaField(
	"selectblanksimple",
	"mkd_title_text_shadow",
	"",
	esc_html__( "Text Shadow", 'burst' ),
	esc_html__( "ThisIsDescription", 'burst' ),
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "yes", 'burst' )
	)
);
$row1->addChild(
	"mkd_title_text_shadow",
	$mkd_title_text_shadow
);

$mkd_title_standard_container = new BurstMikadoContainer(
	"mkd_title_standard_container",
	"mkd_page_title_type",
	"breadcrumbs_title"
);
$mkd_page_title_area_container->addChild(
	"mkd_title_standard_container",
	$mkd_title_standard_container
);

$mkd_title_like_separator = new BurstMikadoMetaField(
	"selectblank",
	"mkd_title_like_separator",
	"",
	esc_html__( "Show Separator Around Title Text", 'burst' ),
	esc_html__( "Choose if you want title to look like separator with text", 'burst' ),
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#mkdf_mkd_title_like_separator_container",
			""   => "#mkdf_mkd_title_like_separator_container"
		),
		"show"       => array(
			"yes" => "#mkdf_mkd_title_like_separator_container"
		)
	)
);
$mkd_title_standard_container->addChild(
	"mkd_title_like_separator",
	$mkd_title_like_separator
);

$mkd_title_like_separator_container = new BurstMikadoContainer(
	"mkd_title_like_separator_container",
	"mkd_title_like_separator",
	"",
	array( '', 'no' )
);
$mkd_title_standard_container->addChild(
	"mkd_title_like_separator_container",
	$mkd_title_like_separator_container
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Line Styles", 'burst' ),
	esc_html__( "Choose style for separator line", 'burst' )
);
$mkd_title_like_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$mkd_title_like_separator_line_color = new BurstMikadoMetaField(
	"colorsimple",
	"mkd_title_like_separator_line_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"mkd_title_like_separator_line_color",
	$mkd_title_like_separator_line_color
);

$mkd_title_like_separator_line_width = new BurstMikadoMetaField(
	"textsimple",
	"mkd_title_like_separator_line_width",
	"",
	esc_html__( "Width", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"mkd_title_like_separator_line_width",
	$mkd_title_like_separator_line_width
);

$mkd_title_like_separator_line_thickness = new BurstMikadoMetaField(
	"textsimple",
	"mkd_title_like_separator_line_thickness",
	"",
	esc_html__( "Thickness", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"mkd_title_like_separator_line_thickness",
	$mkd_title_like_separator_line_thickness
);

$mkd_title_like_separator_line_style = new BurstMikadoMetaField(
	"selectsimple",
	"mkd_title_like_separator_line_style",
	"",
	esc_html__( "Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	array(
		"solid" => esc_html__( "Solid", 'burst' ),
		"dashed" => esc_html__( "Dashed", 'burst' ),
		"dotted" => esc_html__( "Dotted", 'burst' )
	)
);
$row1->addChild(
	"mkd_title_like_separator_line_style",
	$mkd_title_like_separator_line_style
);

$mkd_title_like_separator_margins = new BurstMikadoMetaField(
	"text",
	"mkd_title_like_separator_margins",
	"",
	esc_html__( "Margins for Title", 'burst' ),
	esc_html__( "Define left/right margins for title from separator", 'burst' )
);
$mkd_title_like_separator_container->addChild(
	"mkd_title_like_separator_margins",
	$mkd_title_like_separator_margins
);

$mkd_title_like_separator_line_dots = new BurstMikadoMetaField(
	"selectblank",
	"mkd_title_like_separator_line_dots",
	"",
	esc_html__( "Dots on The End of Lines", 'burst' ),
	esc_html__( "Enabling this option will give lines a dot next to title", 'burst' ),
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array( "no" => "#mkdf_mkd_title_like_separator_dots_container" ),
		"show"       => array(
			"yes" => "#mkdf_mkd_title_like_separator_dots_container",
			""    => "#mkdf_mkd_title_like_separator_dots_container"
		)
	)
);
$mkd_title_like_separator_container->addChild(
	"mkd_title_like_separator_line_dots",
	$mkd_title_like_separator_line_dots
);

$mkd_title_like_separator_dots_container = new BurstMikadoContainer(
	"mkd_title_like_separator_dots_container",
	"mkd_title_like_separator_line_dots",
	"no"
);
$mkd_title_like_separator_container->addChild(
	"mkd_title_like_separator_dots_container",
	$mkd_title_like_separator_dots_container
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Dots Style", 'burst' ),
	esc_html__( "Choose style for dots", 'burst' )
);
$mkd_title_like_separator_dots_container->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$mkd_title_like_separator_dots_size = new BurstMikadoMetaField(
	"textsimple",
	"mkd_title_like_separator_dots_size",
	"",
	esc_html__( "Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"mkd_title_like_separator_dots_size",
	$mkd_title_like_separator_dots_size
);

$mkd_title_like_separator_dots_color = new BurstMikadoMetaField(
	"colorsimple",
	"mkd_title_like_separator_dots_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"mkd_title_like_separator_dots_color",
	$mkd_title_like_separator_dots_color
);

//Subtitle like separator with text
$mkd_subtitle_like_separator = new BurstMikadoMetaField(
	"selectblank",
	"mkd_subtitle_like_separator",
	"",
	esc_html__( "Show Separator Around Subtitle Text", 'burst' ),
	esc_html__( "Choose if you want title to look like separator with text", 'burst' ),
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#mkdf_mkd_subtitle_like_separator_container",
			""   => "#mkdf_mkd_subtitle_like_separator_container"
		),
		"show"       => array(
			"yes" => "#mkdf_mkd_subtitle_like_separator_container"
		)
	)
);
$mkd_title_standard_container->addChild(
	"mkd_subtitle_like_separator",
	$mkd_subtitle_like_separator
);

$mkd_subtitle_like_separator_container = new BurstMikadoContainer(
	"mkd_subtitle_like_separator_container",
	"mkd_subtitle_like_separator",
	"",
	array( '', 'no' )
);
$mkd_title_standard_container->addChild(
	"mkd_subtitle_like_separator_container",
	$mkd_subtitle_like_separator_container
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Line Styles", 'burst' ),
	esc_html__( "Choose style for separator line", 'burst' )
);
$mkd_subtitle_like_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$mkd_subtitle_like_separator_line_color = new BurstMikadoMetaField(
	"colorsimple",
	"mkd_subtitle_like_separator_line_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"mkd_subtitle_like_separator_line_color",
	$mkd_subtitle_like_separator_line_color
);

$mkd_subtitle_like_separator_line_width = new BurstMikadoMetaField(
	"textsimple",
	"mkd_subtitle_like_separator_line_width",
	"",
	esc_html__( "Width", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"mkd_subtitle_like_separator_line_width",
	$mkd_subtitle_like_separator_line_width
);

$mkd_subtitle_like_separator_line_thickness = new BurstMikadoMetaField(
	"textsimple",
	"mkd_subtitle_like_separator_line_thickness",
	"",
	esc_html__( "Thickness", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"mkd_subtitle_like_separator_line_thickness",
	$mkd_subtitle_like_separator_line_thickness
);

$mkd_subtitle_like_separator_line_style = new BurstMikadoMetaField(
	"selectsimple",
	"mkd_subtitle_like_separator_line_style",
	"",
	esc_html__( "Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	array(
		"solid" => esc_html__( "Solid", 'burst' ),
		"dashed" => esc_html__( "Dashed", 'burst' ),
		"dotted" => esc_html__( "Dotted", 'burst' )
	)
);
$row1->addChild(
	"mkd_subtitle_like_separator_line_style",
	$mkd_subtitle_like_separator_line_style
);

$mkd_subtitle_like_separator_margins = new BurstMikadoMetaField(
	"text",
	"mkd_subtitle_like_separator_margins",
	"",
	esc_html__( "Margins for Subitle", 'burst' ),
	esc_html__( "Define left/right margins for subtitle from separator", 'burst' )
);
$mkd_subtitle_like_separator_container->addChild(
	"mkd_subtitle_like_separator_margins",
	$mkd_subtitle_like_separator_margins
);

$mkd_page_title_background_color = new BurstMikadoMetaField(
	"color",
	"mkd_page-title-background-color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Choose background color for Title Area", 'burst' )
);
$mkd_page_title_area_container->addChild(
	"mkd_page-title-background-color",
	$mkd_page_title_background_color
);

$mkd_show_page_title_image = new BurstMikadoMetaField(
	"yesno",
	"mkd_show-page-title-image",
	"no",
	esc_html__( "Don't Show Background Image", 'burst' ),
	esc_html__( "Enable this option to hide background image in Title Area", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#mkdf_mkd_background_image_container",
		"dependence_show_on_yes" => ""
	)
);
$mkd_page_title_area_container->addChild(
	"mkd_show-page-title-image",
	$mkd_show_page_title_image
);

$mkd_background_image_container = new BurstMikadoContainer(
	"mkd_background_image_container",
	"mkd_show-page-title-image",
	"yes"
);
$mkd_page_title_area_container->addChild(
	"mkd_background_image_container",
	$mkd_background_image_container
);

$mkd_title_image = new BurstMikadoMetaField(
	"image",
	"mkd_title-image",
	"",
	esc_html__( "Background Image", 'burst' ),
	esc_html__( "Choose a background image for Title Area", 'burst' )
);
$mkd_background_image_container->addChild(
	"mkd_title-image",
	$mkd_title_image
);

$mkd_title_overlay_image = new BurstMikadoMetaField(
	"image",
	"mkd_title-overlay-image",
	"",
	esc_html__( "Pattern Overlay Image", 'burst' ),
	esc_html__( "Choose an image to be used as pattern over Title Area", 'burst' )
);
$mkd_background_image_container->addChild(
	"mkd_title-overlay-image",
	$mkd_title_overlay_image
);

$mkd_responsive_title_image = new BurstMikadoMetaField(
	"selectblank",
	"mkd_responsive-title-image",
	"",
	esc_html__( "Responsive Background Image", 'burst' ),
	esc_html__( "Do you want to make Title background image responsive?", 'burst' ),
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"yes" => "#mkdf_mkd_responsive_title_image_container, #mkdf_mkd_title-height"
		),
		"show"       => array(
			""   => "#mkdf_mkd_responsive_title_image_container, #mkdf_mkd_title-height",
			"no" => "#mkdf_mkd_responsive_title_image_container, #mkdf_mkd_title-height"
		)
	)
);
$mkd_background_image_container->addChild(
	"mkd_responsive-title-image",
	$mkd_responsive_title_image
);

$mkd_responsive_title_image_container = new BurstMikadoContainer(
	"mkd_responsive_title_image_container",
	"mkd_responsive-title-image",
	"yes"
);
$mkd_background_image_container->addChild(
	"mkd_responsive_title_image_container",
	$mkd_responsive_title_image_container
);

$mkd_fixed_title_image = new BurstMikadoMetaField(
	"selectblank",
	"mkd_fixed-title-image",
	"",
	esc_html__( "Parallax Background Image", 'burst' ),
	esc_html__( "Do you want background image to have parallax effect?", 'burst' ),
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' ),
		"yes_zoom" => esc_html__( "Yes, with zoom out", 'burst' )
	)
);
$mkd_responsive_title_image_container->addChild(
	"mkd_fixed-title-image",
	$mkd_fixed_title_image
);

$mkd_title_height = new BurstMikadoMetaField(
	"text",
	"mkd_title-height",
	"",
	esc_html__( "Title Height (px)", 'burst' ),
	esc_html__( "Set a height for Title Area in pixels", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$mkd_page_title_area_container->addChild(
	"mkd_title-height",
	$mkd_title_height
);

$mkd_enable_page_title_oblique = new BurstMikadoMetaField(
	"selectblank",
	"mkd_enable_page_title_oblique",
	"",
	esc_html__( "Show Title Oblique", 'burst' ),
	esc_html__( "Enabling this option will show title oblique", 'burst' ),
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#mkdf_mkd_title_oblique_container",
			""   => "#mkdf_mkd_title_oblique_container"
		),
		"show"       => array(
			"yes" => "#mkdf_mkd_title_oblique_container"
		)
	)
);
$mkd_page_title_area_container->addChild(
	"mkd_enable_page_title_oblique",
	$mkd_enable_page_title_oblique
);

$mkd_title_oblique_container = new BurstMikadoContainer(
	"mkd_title_oblique_container",
	"mkd_enable_page_title_oblique",
	""
);
$mkd_page_title_area_container->addChild(
	"mkd_title_oblique_container",
	$mkd_title_oblique_container
);

$mkd_title_oblique_section_position = new BurstMikadoMetaField(
	"selectblank",
	"mkd_title_oblique_section_position",
	"",
	esc_html__( "Oblique Position", 'burst' ),
	esc_html__( "Choose a position for title oblique", 'burst' ),
	array(
		"from_left_to_right" => esc_html__( "From Left To Right", 'burst' ),
		"from_right_to_left" => esc_html__( "From Right To Left", 'burst' )
	)
);
$mkd_title_oblique_container->addChild(
	"mkd_title_oblique_section_position",
	$mkd_title_oblique_section_position
);

$mkd_title_oblique_section_color = new BurstMikadoMetaField(
	"color",
	"mkd_title_oblique_section_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Choose a background color for Title Oblique", 'burst' )
);
$mkd_title_oblique_container->addChild(
	"mkd_title_oblique_section_color",
	$mkd_title_oblique_section_color
);

$mkd_page_title_area_top_border = new BurstMikadoMetaField(
	"selectblank",
	"mkd_page_title_area_top_border",
	"",
	esc_html__( "Top Border", 'burst' ),
	esc_html__( "Enabling this option will display top border on Title Area", 'burst' ),
	array(
		"yes" => esc_html__( "Yes", 'burst' ),
		"no" => esc_html__( "No", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array( "no" => "#mkdf_mkd_page_title_area_top_border_container" ),
		"show"       => array(
			"yes" => "#mkdf_mkd_page_title_area_top_border_container",
			""    => "#mkdf_mkd_page_title_area_top_border_container"
		)
	)
);
$mkd_page_title_area_container->addChild(
	"mkd_page_title_area_top_border",
	$mkd_page_title_area_top_border
);

$mkd_page_title_area_top_border_container = new BurstMikadoContainer(
	"mkd_page_title_area_top_border_container",
	"mkd_page_title_area_top_border",
	"no"
);
$mkd_page_title_area_container->addChild(
	"mkd_page_title_area_top_border_container",
	$mkd_page_title_area_top_border_container
);

$mkd_page_title_area_tb_in_grid = new BurstMikadoMetaField(
	"selectblank",
	"mkd_page_title_area_tb_in_grid",
	"",
	esc_html__( "Enable Border in Grid", 'burst' ),
	esc_html__( "This option will show title top border in grid", 'burst' ),
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' )
	)
);
$mkd_page_title_area_top_border_container->addChild(
	"mkd_page_title_area_tb_in_grid",
	$mkd_page_title_area_tb_in_grid
);

$mkd_page_title_area_top_border_width = new BurstMikadoMetaField(
	"text",
	"mkd_page_title_area_top_border_width",
	"",
	esc_html__( "Top Border Width (px)", 'burst' ),
	esc_html__( "Choose a width for Title Area top border", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$mkd_page_title_area_top_border_container->addChild(
	"mkd_page_title_area_top_border_width",
	$mkd_page_title_area_top_border_width
);

$mkd_page_title_area_top_border_color = new BurstMikadoMetaField(
	"color",
	"mkd_page_title_area_top_border_color",
	"",
	esc_html__( "Top Border Color", 'burst' ),
	esc_html__( "Choose a color for Title Area top border", 'burst' )
);
$mkd_page_title_area_top_border_container->addChild(
	"mkd_page_title_area_top_border_color",
	$mkd_page_title_area_top_border_color
);

$mkd_page_title_area_bottom_border = new BurstMikadoMetaField(
	"selectblank",
	"mkd_page_title_area_bottom_border",
	"",
	esc_html__( "Bottom Border", 'burst' ),
	esc_html__( "Enabling this option will display bottom border on Title Area", 'burst' ),
	array(
		"yes" => esc_html__( "Yes", 'burst' ),
		"no" => esc_html__( "No", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array( "no" => "#mkdf_mkd_page_title_area_bottom_border_container" ),
		"show"       => array(
			"yes" => "#mkdf_mkd_page_title_area_bottom_border_container",
			""    => "#mkdf_mkd_page_title_area_bottom_border_container"
		)
	)
);
$mkd_page_title_area_container->addChild(
	"mkd_page_title_area_bottom_border",
	$mkd_page_title_area_bottom_border
);

$mkd_page_title_area_bottom_border_container = new BurstMikadoContainer(
	"mkd_page_title_area_bottom_border_container",
	"mkd_page_title_area_bottom_border",
	"no"
);
$mkd_page_title_area_container->addChild(
	"mkd_page_title_area_bottom_border_container",
	$mkd_page_title_area_bottom_border_container
);

$mkd_page_title_area_bb_in_grid = new BurstMikadoMetaField(
	"selectblank",
	"mkd_page_title_area_bb_in_grid",
	"",
	esc_html__( "Enable Border in Grid", 'burst' ),
	esc_html__( "This option will show title bottom border in grid", 'burst' ),
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' )
	)
);
$mkd_page_title_area_bottom_border_container->addChild(
	"mkd_page_title_area_bb_in_grid",
	$mkd_page_title_area_bb_in_grid
);

$mkd_page_title_area_bottom_border_width = new BurstMikadoMetaField(
	"text",
	"mkd_page_title_area_bottom_border_width",
	"",
	esc_html__( "Bottom Border Width (px)", 'burst' ),
	esc_html__( "Choose a width for Title Area bottom border", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$mkd_page_title_area_bottom_border_container->addChild(
	"mkd_page_title_area_bottom_border_width",
	$mkd_page_title_area_bottom_border_width
);

$mkd_page_title_area_bottom_border_color = new BurstMikadoMetaField(
	"color",
	"mkd_page_title_area_bottom_border_color",
	"",
	esc_html__( "Bottom Border Color", 'burst' ),
	esc_html__( "Choose a color for Title Area bottom border", 'burst' )
);
$mkd_page_title_area_bottom_border_container->addChild(
	"mkd_page_title_area_bottom_border_color",
	$mkd_page_title_area_bottom_border_color
);

//$mkd_separator_bellow_title = new BurstMikadoMetaField("select","mkd_separator_bellow_title","",esc_html__( "Separator Under Title Text","Do you want to have a separator under title text?", array( "" => "", 'burst' ),
//	"no" => esc_html__( "No", 'burst' ),
//	"yes" => esc_html__( "Yes", 'burst' )
//));
//$mkd_page_title_area_container->addChild("mkd_separator_bellow_title",$mkd_separator_bellow_title);

//$mkd_title_separator_color = new BurstMikadoMetaField("color","mkd_title_separator_color","",esc_html__( "Separator Color","Choose a color for separator", 'burst' ));
//$mkd_page_title_area_container->addChild("mkd_title_separator_color",$mkd_title_separator_color);

//Separator

$mkd_title_separator = new BurstMikadoMetaField(
	"selectblank",
	"mkd_title_separator",
	"",
	esc_html__( "Show Title Separator", 'burst' ),
	esc_html__( "Enabling this option will display a separator underneath Title", 'burst' ),
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""   => "#mkdf_mkd_title_separator_container",
			"no" => "#mkdf_mkd_title_separator_container"
		),
		"show"       => array(
			"yes" => "#mkdf_mkd_title_separator_container"
		)
	)
);
$mkd_title_standard_container->addChild(
	"mkd_title_separator",
	$mkd_title_separator
);

$mkd_title_separator_container = new BurstMikadoContainer(
	"mkd_title_separator_container",
	"mkd_title_separator",
	"",
	array( '', 'no' )
);
$mkd_title_standard_container->addChild(
	"mkd_title_separator_container",
	$mkd_title_separator_container
);

$mkd_title_separator_format = new BurstMikadoMetaField(
	"select",
	"mkd_title_separator_format",
	"",
	esc_html__( "Format", 'burst' ),
	esc_html__( "Choose a format (type) of separator", 'burst' ),
	array(
		""                 => "",
		"normal" => esc_html__( "Normal", 'burst' ),
		"with_icon" => esc_html__( "With Icon", 'burst' ),
		"with_custom_icon" => esc_html__( "With Custom Icon", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""                 => "#mkdf_mkd_separator_with_icon_container, #mkdf_mkd_separator_with_custom_icon_container",
			"normal"           => "#mkdf_mkd_separator_with_icon_container, #mkdf_mkd_separator_with_custom_icon_container",
			"with_custom_icon" => "#mkdf_mkd_separator_with_icon_container",
			"with_icon"        => "#mkdf_mkd_separator_with_custom_icon_container"
		),
		"show"       => array(
			"with_icon"        => "#mkdf_mkd_separator_with_icon_container",
			"with_custom_icon" => "#mkdf_mkd_separator_with_custom_icon_container"
		)
	)
);

$mkd_title_separator_container->addChild(
	"mkd_title_separator_format",
	$mkd_title_separator_format
);

$mkd_separator_with_icon_container = new BurstMikadoContainer(
	"mkd_separator_with_icon_container",
	"mkd_title_separator_format",
	"normal",
	array( "normal", "with_custom_icon", "" )
);
$mkd_title_separator_container->addChild(
	"mkd_separator_with_icon_container",
	$mkd_separator_with_icon_container
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$separator_icon_pack_hide_array     = array();
$separator_icon_pack_show_array     = array();
$separator_icon_pack_hide_array[""] = "";

//do we have some collection added in collections array?
if ( is_array( $burst_mikado_IconCollections->iconCollections ) && count( $burst_mikado_IconCollections->iconCollections ) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$separator_icon_collections_params = $burst_mikado_IconCollections->getIconCollectionsParams();
	
	//foreach collection generate hide and show array
	foreach ( $burst_mikado_IconCollections->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$separator_icon_pack_hide_array[ $dep_collection_key ] = '';
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$separator_icon_pack_show_array[ $dep_collection_key ] = '#mkdf_mkd_separator_icon_' . $dep_collection_object->param . '_container';
		$separator_icon_pack_hide_array[""]                    .= '#mkdf_mkd_separator_icon_' . $dep_collection_object->param . '_container,';
		
		//for all collections param generate hide string
		foreach ( $separator_icon_collections_params as $separator_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $separator_icon_collections_param !== $dep_collection_object->param ) {
				$separator_icon_pack_hide_array[ $dep_collection_key ] .= '#mkdf_mkd_separator_icon_' . $separator_icon_collections_param . '_container,';
			}
		}
		
		//remove remaining ',' character
		$separator_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$separator_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
		
	}
	
	$separator_icon_pack_hide_array[""] = rtrim(
		$separator_icon_pack_hide_array[""],
		','
	);
	
}

$mkd_separator_icon_pack = new BurstMikadoMetaField(
	"selectblank",
	"mkd_separator_icon_pack",
	"",
	esc_html__( "Separator Icon Pack", 'burst' ),
	esc_html__( "Choose icon pack for separator", 'burst' ),
	$burst_mikado_IconCollections->getIconCollections(),
	array(
		"dependence" => true,
		"hide"       => $separator_icon_pack_hide_array,
		"show"       => $separator_icon_pack_show_array
	)
);

$mkd_separator_with_icon_container->addChild(
	"mkd_separator_icon_pack",
	$mkd_separator_icon_pack
);

if ( is_array( $burst_mikado_IconCollections->iconCollections ) && count( $burst_mikado_IconCollections->iconCollections ) ) {
	//foreach icon collection we need to generate separate container that will have dependency set
	//it will have one field inside with icons dropdown
	foreach ( $burst_mikado_IconCollections->iconCollections as $collection_key => $collection_object ) {
		$icons_array = $collection_object->getIconsArray();
		
		//get icon collection keys (keys from collections array, e.g 'font_awesome', 'font_elegant' etc.)
		$icon_collections_keys = $burst_mikado_IconCollections->getIconCollectionsKeys();
		
		//unset current one, because it doesn't have to be included in dependency that hides icon container
		unset(
			$icon_collections_keys[ array_search(
				$collection_key,
				$icon_collections_keys
			) ]
		);
		
		$separator_icon_hide_values   = $icon_collections_keys;
		$separator_icon_hide_values[] = "";
		$mkd_separator_icon_container = new BurstMikadoContainer(
			"mkd_separator_icon_" . $collection_object->param . "_container",
			"mkd_separator_icon_pack",
			"",
			$separator_icon_hide_values
		);
		$mkd_separator_icon           = new BurstMikadoMetaField(
			"select",
			"mkd_separator_icon_" . $collection_object->param,
			"",
			esc_html__( "Separator Icon", 'burst' ),
			esc_html__( "Choose Separator Icon", 'burst' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$mkd_separator_icon_container->addChild(
			"mkd_separator_icon_" . $collection_object->param,
			$mkd_separator_icon
		);
		
		$mkd_separator_with_icon_container->addChild(
			"mkd_separator_icon_" . $collection_object->param . "_container",
			$mkd_separator_icon_container
		);
	}
	
}

$group1 = new BurstMikadoGroup(
	esc_html__( "Icon Style", 'burst' ),
	esc_html__( "Choose icon style", 'burst' )
);
$mkd_separator_with_icon_container->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$mkd_title_separator_icon_color = new BurstMikadoMetaField(
	"colorsimple",
	"mkd_title_separator_icon_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "Choose a color of icon for Title separator", 'burst' )
);
$row1->addChild(
	"mkd_title_separator_icon_color",
	$mkd_title_separator_icon_color
);

$mkd_title_separator_icon_hover_color = new BurstMikadoMetaField(
	"colorsimple",
	"mkd_title_separator_icon_hover_color",
	"",
	esc_html__( "Hover Color", 'burst' ),
	esc_html__( "Choose a hover color of icon for Title separator", 'burst' )
);
$row1->addChild(
	"mkd_title_separator_icon_hover_color",
	$mkd_title_separator_icon_hover_color
);

$mkd_title_separator_icon_custom_size = new BurstMikadoMetaField(
	"textsimple",
	"mkd_title_separator_icon_custom_size",
	"",
	esc_html__( "Icon Size", 'burst' ),
	esc_html__( "Choose size of icon", 'burst' )
);
$row1->addChild(
	"mkd_title_separator_icon_custom_size",
	$mkd_title_separator_icon_custom_size
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Icon Position and Margin", 'burst' ),
	esc_html__( "Choose icon position and left(right) margin", 'burst' )
);
$mkd_separator_with_icon_container->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$mkd_title_separator_icon_position = new BurstMikadoMetaField(
	"selectsimple",
	"mkd_title_separator_icon_position",
	"",
	esc_html__( "Icon Position", 'burst' ),
	esc_html__( "Choose a position for an icon", 'burst' ),
	array(
		"left" => esc_html__( "Left", 'burst' ),
		"center" => esc_html__( "Center", 'burst' ),
		"right" => esc_html__( "Right", 'burst' )
	)
);
$row1->addChild(
	"mkd_title_separator_icon_position",
	$mkd_title_separator_icon_position
);

$mkd_title_separator_icon_margins = new BurstMikadoMetaField(
	"textsimple",
	"mkd_title_separator_icon_margins",
	"",
	esc_html__( "Margins (px)", 'burst' ),
	esc_html__( "Enter margin that will refer to left and right margin of the icon", 'burst' )
);
$row1->addChild(
	"mkd_title_separator_icon_margins",
	$mkd_title_separator_icon_margins
);

$mkd_title_separator_icon_type = new BurstMikadoMetaField(
	"selectblank",
	"mkd_title_separator_icon_type",
	"",
	esc_html__( "Icon Type", 'burst' ),
	esc_html__( "Choose icon type", 'burst' ),
	array(
		"normal" => esc_html__( "Normal", 'burst' ),
		"circle" => esc_html__( "Circle", 'burst' ),
		"square" => esc_html__( "Square", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"normal" => "#mkdf_mkd_title_separator_types_container",
			""       => "#mkdf_mkd_title_separator_types_container"
		),
		"show"       => array(
			"circle" => "#mkdf_mkd_title_separator_types_container",
			"square" => "#mkdf_mkd_title_separator_types_container"
		)
	)
);
$mkd_separator_with_icon_container->addChild(
	"mkd_title_separator_icon_type",
	$mkd_title_separator_icon_type
);

$mkd_title_separator_types_container = new BurstMikadoContainer(
	"mkd_title_separator_types_container",
	"mkd_title_separator_icon_type",
	"",
	array( "", "normal" )
);
$mkd_separator_with_icon_container->addChild(
	"mkd_title_separator_types_container",
	$mkd_title_separator_types_container
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Border Style", 'burst' ),
	esc_html__( "Define border style for icon", 'burst' )
);
$mkd_title_separator_types_container->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$mkd_title_separator_icon_border_radius = new BurstMikadoMetaField(
	"textsimple",
	"mkd_title_separator_icon_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "Enter border radius for icon", 'burst' )
);
$row1->addChild(
	"mkd_title_separator_icon_border_radius",
	$mkd_title_separator_icon_border_radius
);

$mkd_title_separator_icon_border_width = new BurstMikadoMetaField(
	"textsimple",
	"mkd_title_separator_icon_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "Enter border width for icon", 'burst' )
);
$row1->addChild(
	"mkd_title_separator_icon_border_width",
	$mkd_title_separator_icon_border_width
);

$mkd_title_separator_icon_border_color = new BurstMikadoMetaField(
	"colorsimple",
	"mkd_title_separator_icon_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "Enter border color for icon", 'burst' )
);
$row1->addChild(
	"mkd_title_separator_icon_border_color",
	$mkd_title_separator_icon_border_color
);

$mkd_title_separator_icon_border_hover_color = new BurstMikadoMetaField(
	"colorsimple",
	"mkd_title_separator_icon_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "Enter border color for icon", 'burst' )
);
$row1->addChild(
	"mkd_title_separator_icon_border_hover_color",
	$mkd_title_separator_icon_border_hover_color
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Additional Icon Style", 'burst' ),
	esc_html__( "Choose adition icon styling", 'burst' )
);
$mkd_title_separator_types_container->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$mkd_title_separator_icon_shape_size = new BurstMikadoMetaField(
	"textsimple",
	"mkd_title_separator_icon_shape_size",
	"",
	esc_html__( "Shape Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"mkd_title_separator_icon_shape_size",
	$mkd_title_separator_icon_shape_size
);

$mkd_title_separator_icon_background_color = new BurstMikadoMetaField(
	"colorsimple",
	"mkd_title_separator_icon_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"mkd_title_separator_icon_background_color",
	$mkd_title_separator_icon_background_color
);

$mkd_title_separator_icon_background_hover_color = new BurstMikadoMetaField(
	"colorsimple",
	"mkd_title_separator_icon_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"mkd_title_separator_icon_background_hover_color",
	$mkd_title_separator_icon_background_hover_color
);

$mkd_separator_with_custom_icon_container = new BurstMikadoContainer(
	"mkd_separator_with_custom_icon_container",
	"mkd_title_separator_format",
	"normal",
	array( "normal", "with_icon", "" )
);
$mkd_title_separator_container->addChild(
	"mkd_separator_with_custom_icon_container",
	$mkd_separator_with_custom_icon_container
);

$mkd_separator_custom_icon = new BurstMikadoMetaField(
	"image",
	"mkd_separator_custom_icon",
	"",
	esc_html__( "Custom Icon", 'burst' ),
	esc_html__( "Choose custom icon for separator", 'burst' )
);
$mkd_separator_with_custom_icon_container->addChild(
	"mkd_separator_custom_icon",
	$mkd_separator_custom_icon
);

$mkd_title_separator_type = new BurstMikadoMetaField(
	"select",
	"mkd_title_separator_type",
	"",
	esc_html__( "Type", 'burst' ),
	esc_html__( "Choose a Title separator line style", 'burst' ),
	array(
		""       => "",
		"solid" => esc_html__( "Solid", 'burst' ),
		"dashed" => esc_html__( "Dashed", 'burst' )
	)
);
$mkd_title_separator_container->addChild(
	"mkd_title_separator_type",
	$mkd_title_separator_type
);

$mkd_title_separator_position = new BurstMikadoMetaField(
	"select",
	"mkd_title_separator_position",
	"",
	esc_html__( "Position", 'burst' ),
	esc_html__( "Choose a Title separator position", 'burst' ),
	array(
		""      => "",
		"above" => esc_html__( "Above Title", 'burst' ),
		"below" => esc_html__( "Below Title", 'burst' )
	)
);
$mkd_title_separator_container->addChild(
	"mkd_title_separator_position",
	$mkd_title_separator_position
);

$mkd_title_separator_color = new BurstMikadoMetaField(
	"color",
	"mkd_title_separator_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "Choose a color for Title separator", 'burst' )
);
$mkd_title_separator_container->addChild(
	"mkd_title_separator_color",
	$mkd_title_separator_color
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Size", 'burst' ),
	esc_html__( 'Define size for Title separator', 'burst' )
);
$mkd_title_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$mkd_title_separator_thickness = new BurstMikadoMetaField(
	"textsimple",
	"mkd_title_separator_thickness",
	"",
	esc_html__( "Thickness (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"mkd_title_separator_thickness",
	$mkd_title_separator_thickness
);

$mkd_title_separator_width = new BurstMikadoMetaField(
	"textsimple",
	"mkd_title_separator_width",
	"",
	esc_html__( "Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"mkd_title_separator_width",
	$mkd_title_separator_width
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Margin", 'burst' ),
	esc_html__( 'Add space at top and bottom of Title separator', 'burst' )
);
$mkd_title_separator_container->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$mkd_title_separator_topmargin = new BurstMikadoMetaField(
	"textsimple",
	"mkd_title_separator_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"mkd_title_separator_topmargin",
	$mkd_title_separator_topmargin
);

$mkd_title_separator_bottommargin = new BurstMikadoMetaField(
	"textsimple",
	"mkd_title_separator_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"mkd_title_separator_bottommargin",
	$mkd_title_separator_bottommargin
);

$mkd_title_graphics = new BurstMikadoMetaField(
	"image",
	"mkd_title-graphics",
	"",
	esc_html__( "Title Graphics", 'burst' ),
	esc_html__( "Choose a graphic for Title Area, appearing above title", 'burst' )
);
$mkd_title_standard_container->addChild(
	"mkd_title-graphics",
	$mkd_title_graphics
);

$mkd_enable_breadcrumbs = new BurstMikadoMetaField(
	"selectblank",
	"mkd_enable_breadcrumbs",
	"",
	esc_html__( "Enable Breadcrumbs", 'burst' ),
	esc_html__( "Do you want to display breadcrumbs in title area?", 'burst' ),
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""   => "#mkdf_animation_page_page_title_breadcrumbs_container",
			"no" => "#mkdf_animation_page_page_title_breadcrumbs_container"
		),
		"show"       => array(
			"yes" => "#mkdf_animation_page_page_title_breadcrumbs_container"
		)
	)
);
$mkd_page_title_area_container->addChild(
	"mkd_enable_breadcrumbs",
	$mkd_enable_breadcrumbs
);

$mkd_page_breadcrumbs_color = new BurstMikadoMetaField(
	"color",
	"mkd_page_breadcrumbs_color",
	"",
	esc_html__( "Breadcrumbs Color", 'burst' ),
	esc_html__( "Choose a color for breadcrumbs text ", 'burst' )
);
$mkd_page_title_area_container->addChild(
	"mkd_page_breadcrumbs_color",
	$mkd_page_breadcrumbs_color
);

$mkd_page_subtitle = new BurstMikadoMetaField(
	"text",
	"mkd_page_subtitle",
	"",
	esc_html__( "Subtitle Text", 'burst' ),
	esc_html__( "Enter your subtitle text", 'burst' )
);
$mkd_page_title_area_container->addChild(
	"mkd_page_subtitle",
	$mkd_page_subtitle
);

$mkd_page_subtitle_position = new BurstMikadoMetaField(
	"selectblank",
	"mkd_page_subtitle_position",
	"",
	esc_html__( "Subtitle Position", 'burst' ),
	esc_html__( "Choose a Subtitle position", 'burst' ),
	array(
		"below_title" => esc_html__( "Below Title", 'burst' ),
		"above_title" => esc_html__( "Above Title", 'burst' )
	)
);
$mkd_page_title_area_container->addChild(
	"mkd_page_subtitle_position",
	$mkd_page_subtitle_position
);

$mkd_page_subtitle_color = new BurstMikadoMetaField(
	"color",
	"mkd_page_subtitle_color",
	"",
	esc_html__( "Subtitle Text Color", 'burst' ),
	esc_html__( "Choose a color for subtitle text", 'burst' )
);
$mkd_page_title_area_container->addChild(
	"mkd_page_subtitle_color",
	$mkd_page_subtitle_color
);

$mkd_title_content_style = new BurstMikadoGroup(
	esc_html__( "Title Content Style", 'burst' ),
	esc_html__( "Define style for title area content", 'burst' )
);
$mkd_page_title_area_container->addChild(
	"mkd_title_content_style",
	$mkd_title_content_style
);

$row1 = new BurstMikadoRow();
$mkd_title_content_style->addChild(
	"row1",
	$row1
);

$mkd_title_area_content_background_color = new BurstMikadoMetaField(
	"colorsimple",
	"mkd_title_area_content_background_color",
	"",
	esc_html__( "Title Area Content Background Color", 'burst' ),
	esc_html__( "Choose a background color for Title Area Content", 'burst' )
);
$row1->addChild(
	"mkd_title_area_content_background_color",
	$mkd_title_area_content_background_color
);

$mkd_title_area_content_opacity = new BurstMikadoMetaField(
	"textsimple",
	"mkd_title_area_content_opacity",
	"",
	esc_html__( "Title Area Content Background Color Opacity", 'burst' ),
	esc_html__( "Choose a transparency for the content area background color (0 = fully transparent, 1 = opaque)", 'burst' )
);
$row1->addChild(
	"mkd_title_area_content_opacity",
	$mkd_title_area_content_opacity
);

$mkd_title_content_in_grid = new BurstMikadoMetaField(
	"yesno",
	"mkd_title_content_in_grid",
	"",
	esc_html__( "Title Area Content In Grid", 'burst' ),
	esc_html__( "This option will show title area content in grid", 'burst' )
);
$mkd_page_title_area_container->addChild(
	"mkd_title_content_in_grid",
	$mkd_title_content_in_grid
);

$mkd_title_content_shadow = new BurstMikadoMetaField(
	"yesno",
	"burst_mikado_title_content_shadow",
	"",
	esc_html__( "Show Title Content Area Shadows", 'burst' ),
	esc_html__( "Enabling this option will show shadows on title content area", 'burst' )
);
$mkd_page_title_area_container->addChild(
	"burst_mikado_title_content_shadow",
	$mkd_title_content_shadow
);

$title_area_padding_group = new BurstMikadoGroup(
	esc_html__( "Title Area Content Padding", 'burst' ),
	esc_html__( "Define padding for title area content", 'burst' )
);
$mkd_page_title_area_container->addChild(
	"title_area_padding_group",
	$title_area_padding_group
);

$row1 = new BurstMikadoRow();
$title_area_padding_group->addChild(
	"row1",
	$row1
);

$mkd_title_content_top_padding = new BurstMikadoMetaField(
	"textsimple",
	"mkd_title_content_top_padding",
	"",
	esc_html__( "Top Padding", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"mkd_title_content_top_padding",
	$mkd_title_content_top_padding
);

$mkd_title_content_right_padding = new BurstMikadoMetaField(
	"textsimple",
	"mkd_title_content_right_padding",
	"",
	esc_html__( "Right Padding", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"mkd_title_content_right_padding",
	$mkd_title_content_right_padding
);

$mkd_title_content_bottom_padding = new BurstMikadoMetaField(
	"textsimple",
	"mkd_title_content_bottom_padding",
	"",
	esc_html__( "Bottom Padding", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"mkd_title_content_bottom_padding",
	$mkd_title_content_bottom_padding
);

$mkd_title_content_left_padding = new BurstMikadoMetaField(
	"textsimple",
	"mkd_title_content_left_padding",
	"",
	esc_html__( "Left Padding", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"mkd_title_content_left_padding",
	$mkd_title_content_left_padding
);

$mkd_title_style = new BurstMikadoGroup(
	esc_html__( "Title Style", 'burst' ),
	esc_html__( "Define style for title", 'burst' )
);
$mkd_page_title_area_container->addChild(
	"mkd_title_style",
	$mkd_title_style
);

$row1 = new BurstMikadoRow();
$mkd_title_style->addChild(
	"row1",
	$row1
);

$mkd_title_background_color = new BurstMikadoMetaField(
	"colorsimple",
	"mkd_title_background_color",
	"",
	esc_html__( "Title Background Color", 'burst' ),
	esc_html__( "Choose a background color for Title", 'burst' )
);
$row1->addChild(
	"mkd_title_background_color",
	$mkd_title_background_color
);

$mkd_title_opacity = new BurstMikadoMetaField(
	"textsimple",
	"mkd_title_opacity",
	"",
	esc_html__( "Title Background Color Opacity", 'burst' ),
	esc_html__( "Choose a transparency for the title background color (0 = fully transparent, 1 = opaque)", 'burst' )
);
$row1->addChild(
	"mkd_title_opacity",
	$mkd_title_opacity
);

$title_padding_group = new BurstMikadoGroup(
	esc_html__( "Padding", 'burst' ),
	esc_html__( "Define padding for title (When using separator around title, only right margin is counted for left/right margin)", 'burst' )
);
$mkd_page_title_area_container->addChild(
	"title_padding_group",
	$title_padding_group
);

$row1 = new BurstMikadoRow( true );
$title_padding_group->addChild(
	"row1",
	$row1
);

$mkd_title_top_padding = new BurstMikadoMetaField(
	"textsimple",
	"mkd_title_top_padding",
	"",
	esc_html__( "Top Padding (px)", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"mkd_title_top_padding",
	$mkd_title_top_padding
);

$mkd_title_right_padding = new BurstMikadoMetaField(
	"textsimple",
	"mkd_title_right_padding",
	"",
	esc_html__( "Right Padding (px)", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"mkd_title_right_padding",
	$mkd_title_right_padding
);

$mkd_title_bottom_padding = new BurstMikadoMetaField(
	"textsimple",
	"mkd_title_bottom_padding",
	"",
	esc_html__( "Bottom Padding (px)", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"mkd_title_bottom_padding",
	$mkd_title_bottom_padding
);

$mkd_title_left_padding = new BurstMikadoMetaField(
	"textsimple",
	"mkd_title_left_padding",
	"",
	esc_html__( "Left Padding (px)", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"mkd_title_left_padding",
	$mkd_title_left_padding
);

$mkd_subtitle_style = new BurstMikadoGroup(
	esc_html__( "Subtitle Style", 'burst' ),
	esc_html__( "Define style for subtitle (When using separator around subtitle, only right margin is counted for left/right margin)", 'burst' )
);
$mkd_page_title_area_container->addChild(
	"mkd_subtitle_style",
	$mkd_subtitle_style
);

$row1 = new BurstMikadoRow();
$mkd_subtitle_style->addChild(
	"row1",
	$row1
);

$mkd_subtitle_background_color = new BurstMikadoMetaField(
	"colorsimple",
	"mkd_subtitle_background_color",
	"",
	esc_html__( "Subtitle Background Color", 'burst' ),
	esc_html__( "Choose a background color for Subtitle", 'burst' )
);
$row1->addChild(
	"mkd_subtitle_background_color",
	$mkd_subtitle_background_color
);

$mkd_subtitle_opacity = new BurstMikadoMetaField(
	"textsimple",
	"mkd_subtitle_opacity",
	"",
	esc_html__( "Subtitle Background Color Opacity", 'burst' ),
	esc_html__( "Choose a transparency for the subtitle background color (0 = fully transparent, 1 = opaque)", 'burst' )
);
$row1->addChild(
	"mkd_subtitle_opacity",
	$mkd_subtitle_opacity
);

$subtitle_padding_group = new BurstMikadoGroup(
	esc_html__( "Padding", 'burst' ),
	esc_html__( "Define padding for subtitle", 'burst' )
);
$mkd_page_title_area_container->addChild(
	"subtitle_padding_group",
	$subtitle_padding_group
);
$row1 = new BurstMikadoRow( true );
$subtitle_padding_group->addChild(
	"row1",
	$row1
);

$mkd_subtitle_top_padding = new BurstMikadoMetaField(
	"textsimple",
	"mkd_subtitle_top_padding",
	"",
	esc_html__( "Top Padding (px)", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"mkd_subtitle_top_padding",
	$mkd_subtitle_top_padding
);

$mkd_subtitle_right_padding = new BurstMikadoMetaField(
	"textsimple",
	"mkd_subtitle_right_padding",
	"",
	esc_html__( "Right Padding (px)", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"mkd_subtitle_right_padding",
	$mkd_subtitle_right_padding
);

$mkd_subtitle_bottom_padding = new BurstMikadoMetaField(
	"textsimple",
	"mkd_subtitle_bottom_padding",
	"",
	esc_html__( "Bottom Padding (px)", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"mkd_subtitle_bottom_padding",
	$mkd_subtitle_bottom_padding
);

$mkd_subtitle_left_padding = new BurstMikadoMetaField(
	"textsimple",
	"mkd_subtitle_left_padding",
	"",
	esc_html__( "Left Padding (px)", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"mkd_subtitle_left_padding",
	$mkd_subtitle_left_padding
);

//Portfolio Title Animations
$mkdTitleAnimations = new BurstMikadoMetaBox(
	'portfolio_page',
	esc_html__( 'Title Animations', 'burst' ),
	'mkd_show-page-title',
	array( 'no' )
);
burst_mikado_return_framework_variable()->mkdMetaBoxes->addMetaBox(
	'portfolio_title_animations',
	$mkdTitleAnimations
);

//Whole title content animation
$page_page_title_whole_content_animations = new BurstMikadoMetaField(
	'selectblank',
	'page_page_title_whole_content_animations',
	'',
	esc_html__( 'Enable Whole Title Content Animation', 'burst' ),
	esc_html__( 'This option will enable whole title content animation', 'burst' ),
	array(
		'no' => esc_html__( 'No', 'burst' ),
		'yes' => esc_html__( 'Yes', 'burst' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#mkdf_page_page_title_whole_content_animations_container',
			'no' => '#mkdf_page_page_title_whole_content_animations_container'
		),
		'show'       => array(
			'yes' => '#mkdf_page_page_title_whole_content_animations_container'
		)
	)
);
$mkdTitleAnimations->addChild(
	'page_page_title_whole_content_animations',
	$page_page_title_whole_content_animations
);

$page_page_title_whole_content_animations_container = new BurstMikadoContainer(
	'page_page_title_whole_content_animations_container',
	'page_page_title_whole_content_animations',
	'',
	array( '', 'no' )
);
$mkdTitleAnimations->addChild(
	'page_page_title_whole_content_animations_container',
	$page_page_title_whole_content_animations_container
);

$page_page_title_whole_content_animations_data_start = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation Start Point', 'burst' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'burst' )
);
$page_page_title_whole_content_animations_container->addChild(
	'page_page_title_whole_content_animations_data_start',
	$page_page_title_whole_content_animations_data_start
);

$row1 = new BurstMikadoRow();
$page_page_title_whole_content_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_whole_content_data_start = new BurstMikadoMetaField(
	'textsimple',
	'page_page_title_whole_content_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row1->addChild(
	'page_page_title_whole_content_data_start',
	$page_page_title_whole_content_data_start
);

$page_page_title_whole_content_start_custom_style = new BurstMikadoMetaField(
	'textareasimple',
	'page_page_title_whole_content_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row1->addChild(
	'page_page_title_whole_content_start_custom_style',
	$page_page_title_whole_content_start_custom_style
);

$page_page_title_whole_content_animations_data_end = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation End Point', 'burst' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'burst' )
);
$page_page_title_whole_content_animations_container->addChild(
	'page_page_title_whole_content_animations_data_end',
	$page_page_title_whole_content_animations_data_end
);

$row2 = new BurstMikadoRow();
$page_page_title_whole_content_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_whole_content_data_end = new BurstMikadoMetaField(
	'textsimple',
	'page_page_title_whole_content_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row2->addChild(
	'page_page_title_whole_content_data_end',
	$page_page_title_whole_content_data_end
);

$page_page_title_whole_content_end_custom_style = new BurstMikadoMetaField(
	'textareasimple',
	'page_page_title_whole_content_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row2->addChild(
	'page_page_title_whole_content_end_custom_style',
	$page_page_title_whole_content_end_custom_style
);

//Title Animations
$animation_page_page_title_container = new BurstMikadoContainerNoStyle(
	'animation_page_page_title_container',
	'mkd_show_page_title_text',
	'no'
);
$mkdTitleAnimations->addChild(
	'animation_page_page_title_container',
	$animation_page_page_title_container
);

$page_page_title_animations = new BurstMikadoMetaField(
	'selectblank',
	'page_page_title_animations',
	'',
	esc_html__( 'Enable Page Title Animations', 'burst' ),
	esc_html__( 'This option will enable Page Title Scroll Animations', 'burst' ),
	array(
		'no' => esc_html__( 'No', 'burst' ),
		'yes' => esc_html__( 'Yes', 'burst' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#mkdf_page_page_title_animations_container',
			'no' => '#mkdf_page_page_title_animations_container'
		),
		'show'       => array(
			'yes' => '#mkdf_page_page_title_animations_container'
		)
	)
);

$animation_page_page_title_container->addChild(
	'page_page_title_animations',
	$page_page_title_animations
);

$page_page_title_animations_container = new BurstMikadoContainer(
	'page_page_title_animations_container',
	'page_page_title_animations',
	'',
	array( '', 'no' )
);
$animation_page_page_title_container->addChild(
	'page_page_title_animations_container',
	$page_page_title_animations_container
);

$page_page_title_animations_data_start = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation Start Point', 'burst' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'burst' )
);
$page_page_title_animations_container->addChild(
	'page_page_title_animations_data_start',
	$page_page_title_animations_data_start
);

$row1 = new BurstMikadoRow();
$page_page_title_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_data_start = new BurstMikadoMetaField(
	'textsimple',
	'page_page_title_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row1->addChild(
	'page_page_title_data_start',
	$page_page_title_data_start
);

$page_page_title_start_custom_style = new BurstMikadoMetaField(
	'textareasimple',
	'page_page_title_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row1->addChild(
	'page_page_title_start_custom_style',
	$page_page_title_start_custom_style
);

$page_page_title_animations_data_end = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation End Point', 'burst' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'burst' )
);
$page_page_title_animations_container->addChild(
	'page_page_title_animations_data_end',
	$page_page_title_animations_data_end
);

$row2 = new BurstMikadoRow();
$page_page_title_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_data_end = new BurstMikadoMetaField(
	'textsimple',
	'page_page_title_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row2->addChild(
	'page_page_title_data_end',
	$page_page_title_data_end
);

$page_page_title_end_custom_style = new BurstMikadoMetaField(
	'textareasimple',
	'page_page_title_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row2->addChild(
	'page_page_title_end_custom_style',
	$page_page_title_end_custom_style
);

//Title Separator Animations
$page_page_title_separator_animations = new BurstMikadoMetaField(
	'selectblank',
	'page_page_title_separator_animations',
	'',
	esc_html__( 'Enable Page Separator Title Animations', 'burst' ),
	esc_html__( 'This option will enable Page Title Separator Scroll Animations', 'burst' ),
	array(
		'no' => esc_html__( 'No', 'burst' ),
		'yes' => esc_html__( 'Yes', 'burst' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#mkdf_page_page_title_separator_animations_container',
			'no' => '#mkdf_page_page_title_separator_animations_container'
		),
		'show'       => array(
			'yes' => '#mkdf_page_page_title_separator_animations_container'
		)
	)
);
$mkdTitleAnimations->addChild(
	'page_page_title_separator_animations',
	$page_page_title_separator_animations
);

$page_page_title_separator_animations_container = new BurstMikadoContainer(
	'page_page_title_separator_animations_container',
	'page_page_title_separator_animations',
	'',
	array( 'no', '' )
);
$mkdTitleAnimations->addChild(
	'page_page_title_separator_animations_container',
	$page_page_title_separator_animations_container
);

$page_page_title_separator_animations_data_start = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation Start Point', 'burst' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'burst' )
);
$page_page_title_separator_animations_container->addChild(
	'page_page_title_separator_animations_data_start',
	$page_page_title_separator_animations_data_start
);

$row1 = new BurstMikadoRow();
$page_page_title_separator_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_separator_data_start = new BurstMikadoMetaField(
	'textsimple',
	'page_page_title_separator_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row1->addChild(
	'page_page_title_separator_data_start',
	$page_page_title_separator_data_start
);

$page_page_title_separator_start_custom_style = new BurstMikadoMetaField(
	'textareasimple',
	'page_page_title_separator_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row1->addChild(
	'page_page_title_separator_start_custom_style',
	$page_page_title_separator_start_custom_style
);

$page_page_title_separator_animations_data_end = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation End Point', 'burst' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'burst' )
);
$page_page_title_separator_animations_container->addChild(
	'page_page_title_separator_animations_data_end',
	$page_page_title_separator_animations_data_end
);

$row2 = new BurstMikadoRow();
$page_page_title_separator_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_separator_data_end = new BurstMikadoMetaField(
	'textsimple',
	'page_page_title_separator_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row2->addChild(
	'page_page_title_separator_data_end',
	$page_page_title_separator_data_end
);

$page_page_title_separator_end_custom_style = new BurstMikadoMetaField(
	'textareasimple',
	'page_page_title_separator_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row2->addChild(
	'page_page_title_separator_end_custom_style',
	$page_page_title_separator_end_custom_style
);

//Subtitle Animations
$page_page_subtitle_animations = new BurstMikadoMetaField(
	'selectblank',
	'page_page_subtitle_animations',
	'',
	esc_html__( 'Enable Page Subtitle Animations', 'burst' ),
	esc_html__( 'This option will enable Page Subtitle Scroll Animations', 'burst' ),
	array(
		'no' => esc_html__( 'No', 'burst' ),
		'yes' => esc_html__( 'Yes', 'burst' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#mkdf_page_page_subtitle_animations_container',
			'no' => '#mkdf_page_page_subtitle_animations_container'
		),
		'show'       => array(
			'yes' => '#mkdf_page_page_subtitle_animations_container'
		)
	)
);
$mkdTitleAnimations->addChild(
	'page_page_subtitle_animations',
	$page_page_subtitle_animations
);

$page_page_subtitle_animations_container = new BurstMikadoContainer(
	'page_page_subtitle_animations_container',
	'page_page_subtitle_animations',
	'',
	array( '', 'no' )
);
$mkdTitleAnimations->addChild(
	'page_page_subtitle_animations_container',
	$page_page_subtitle_animations_container
);

$page_page_subtitle_animations_data_start = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation Start Point', 'burst' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'burst' )
);
$page_page_subtitle_animations_container->addChild(
	'page_page_subtitle_animations_data_start',
	$page_page_subtitle_animations_data_start
);

$row1 = new BurstMikadoRow();
$page_page_subtitle_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_subtitle_data_start = new BurstMikadoMetaField(
	'textsimple',
	'page_page_subtitle_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row1->addChild(
	'page_page_subtitle_data_start',
	$page_page_subtitle_data_start
);

$page_page_subtitle_start_custom_style = new BurstMikadoMetaField(
	'textareasimple',
	'page_page_subtitle_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row1->addChild(
	'page_page_subtitle_start_custom_style',
	$page_page_subtitle_start_custom_style
);

$page_page_subtitle_animations_data_end = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation End Point', 'burst' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'burst' )
);
$page_page_subtitle_animations_container->addChild(
	'page_page_subtitle_animations_data_end',
	$page_page_subtitle_animations_data_end
);

$row2 = new BurstMikadoRow();
$page_page_subtitle_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_subtitle_data_end = new BurstMikadoMetaField(
	'textsimple',
	'page_page_subtitle_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row2->addChild(
	'page_page_subtitle_data_end',
	$page_page_subtitle_data_end
);

$page_page_subtitle_end_custom_style = new BurstMikadoMetaField(
	'textareasimple',
	'page_page_subtitle_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row2->addChild(
	'page_page_subtitle_end_custom_style',
	$page_page_subtitle_end_custom_style
);

//Graphic Animations
$page_page_title_graphic_animations = new BurstMikadoMetaField(
	'selectblank',
	'page_page_title_graphic_animations',
	'',
	esc_html__( 'Enable Page Title Graphic Animations', 'burst' ),
	esc_html__( 'This option will enable Page Title Graphic Scroll Animations', 'burst' ),
	array(
		'no' => esc_html__( 'No', 'burst' ),
		'yes' => esc_html__( 'Yes', 'burst' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#mkdf_page_page_title_graphic_animations_container',
			'no' => '#mkdf_page_page_title_graphic_animations_container'
		),
		'show'       => array(
			'yes' => '#mkdf_page_page_title_graphic_animations_container'
		)
	)
);
$mkdTitleAnimations->addChild(
	'page_page_title_graphic_animations',
	$page_page_title_graphic_animations
);

$page_page_title_graphic_animations_container = new BurstMikadoContainer(
	'page_page_title_graphic_animations_container',
	'page_page_title_graphic_animations',
	'',
	array( '', 'no' )
);
$mkdTitleAnimations->addChild(
	'page_page_title_graphic_animations_container',
	$page_page_title_graphic_animations_container
);

$page_page_title_graphic_animations_data_start = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation Start Point', 'burst' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'burst' )
);
$page_page_title_graphic_animations_container->addChild(
	'page_page_title_graphic_animations_data_start',
	$page_page_title_graphic_animations_data_start
);

$row1 = new BurstMikadoRow();
$page_page_title_graphic_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_graphic_data_start = new BurstMikadoMetaField(
	'textsimple',
	'page_page_title_graphic_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row1->addChild(
	'page_page_title_graphic_data_start',
	$page_page_title_graphic_data_start
);

$page_page_title_graphic_start_custom_style = new BurstMikadoMetaField(
	'textareasimple',
	'page_page_title_graphic_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row1->addChild(
	'page_page_title_graphic_start_custom_style',
	$page_page_title_graphic_start_custom_style
);

$page_page_title_graphic_animations_data_end = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation End Point', 'burst' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'burst' )
);
$page_page_title_graphic_animations_container->addChild(
	'page_page_title_graphic_animations_data_end',
	$page_page_title_graphic_animations_data_end
);

$row2 = new BurstMikadoRow();
$page_page_title_graphic_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_graphic_data_end = new BurstMikadoMetaField(
	'textsimple',
	'page_page_title_graphic_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row2->addChild(
	'page_page_title_graphic_data_end',
	$page_page_title_graphic_data_end
);

$page_page_title_graphic_end_custom_style = new BurstMikadoMetaField(
	'textareasimple',
	'page_page_title_graphic_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row2->addChild(
	'page_page_title_graphic_end_custom_style',
	$page_page_title_graphic_end_custom_style
);

//Breadcrumb animations
$animation_page_page_title_breadcrumbs_container = new BurstMikadoContainerNoStyle(
	'animation_page_page_title_breadcrumbs_container',
	'mkd_enable_breadcrumbs',
	'no'
);
$mkdTitleAnimations->addChild(
	'animation_page_page_title_breadcrumbs_container',
	$animation_page_page_title_breadcrumbs_container
);

$page_page_title_breadcrumbs_animations = new BurstMikadoMetaField(
	'selectblank',
	'page_page_title_breadcrumbs_animations',
	'',
	esc_html__( 'Enable Page Title Breadcrumbs Animations', 'burst' ),
	esc_html__( 'This option will enable Page Title Breadcrumbs Scroll Animations', 'burst' ),
	array(
		'no' => esc_html__( 'No', 'burst' ),
		'yes' => esc_html__( 'Yes', 'burst' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#mkdf_page_page_title_breadcrumbs_animations_container',
			'no' => '#mkdf_page_page_title_breadcrumbs_animations_container'
		),
		'show'       => array(
			'yes' => '#mkdf_page_page_title_breadcrumbs_animations_container'
		)
	)
);
$animation_page_page_title_breadcrumbs_container->addChild(
	'page_page_title_breadcrumbs_animations',
	$page_page_title_breadcrumbs_animations
);

$page_page_title_breadcrumbs_animations_container = new BurstMikadoContainer(
	'page_page_title_breadcrumbs_animations_container',
	'page_page_title_breadcrumbs_animations',
	'',
	array( '', 'no' )
);
$animation_page_page_title_breadcrumbs_container->addChild(
	'page_page_title_breadcrumbs_animations_container',
	$page_page_title_breadcrumbs_animations_container
);

$page_page_title_breadcrumbs_animations_data_start = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation Start Point', 'burst' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'burst' )
);
$page_page_title_breadcrumbs_animations_container->addChild(
	'page_page_title_breadcrumbs_animations_data_start',
	$page_page_title_breadcrumbs_animations_data_start
);

$row1 = new BurstMikadoRow();
$page_page_title_breadcrumbs_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_breadcrumbs_data_start = new BurstMikadoMetaField(
	'textsimple',
	'page_page_title_breadcrumbs_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row1->addChild(
	'page_page_title_breadcrumbs_data_start',
	$page_page_title_breadcrumbs_data_start
);

$page_page_title_breadcrumbs_start_custom_style = new BurstMikadoMetaField(
	'textareasimple',
	'page_page_title_breadcrumbs_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row1->addChild(
	'page_page_title_breadcrumbs_start_custom_style',
	$page_page_title_breadcrumbs_start_custom_style
);

$page_page_title_breadcrumbs_animations_data_end = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation End Point', 'burst' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'burst' )
);
$page_page_title_breadcrumbs_animations_container->addChild(
	'page_page_title_breadcrumbs_animations_data_end',
	$page_page_title_breadcrumbs_animations_data_end
);

$row2 = new BurstMikadoRow();
$page_page_title_breadcrumbs_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_breadcrumbs_data_end = new BurstMikadoMetaField(
	'textsimple',
	'page_page_title_breadcrumbs_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row2->addChild(
	'page_page_title_breadcrumbs_data_end',
	$page_page_title_breadcrumbs_data_end
);

$page_page_title_breadcrumbs_end_custom_style = new BurstMikadoMetaField(
	'textareasimple',
	'page_page_title_breadcrumbs_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row2->addChild(
	'page_page_title_breadcrumbs_end_custom_style',
	$page_page_title_breadcrumbs_end_custom_style
);

// Content Bottom

$mkdContentBottom = new BurstMikadoMetaBox(
	"portfolio_page",
	esc_html__( "Content Bottom", 'burst' )
);
burst_mikado_return_framework_variable()->mkdMetaBoxes->addMetaBox(
	"portfolio_content_bottom_page",
	$mkdContentBottom
);

$mkd_enable_content_bottom_area = new BurstMikadoMetaField(
	"selectblank",
	"mkd_enable_content_bottom_area",
	"",
	esc_html__( "Show Content Bottom Area", 'burst' ),
	esc_html__( "Do you want to show content bottom area?", 'burst' ),
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#mkdf_mkd_enable_content_bottom_area_container",
			""   => "#mkdf_mkd_enable_content_bottom_area_container"
		),
		"show"       => array(
			"yes" => "#mkdf_mkd_enable_content_bottom_area_container"
		)
	)
);
$mkdContentBottom->addChild(
	"mkd_enable_content_bottom_area",
	$mkd_enable_content_bottom_area
);

$mkd_enable_content_bottom_area_container = new BurstMikadoContainer(
	"mkd_enable_content_bottom_area_container",
	"mkd_enable_content_bottom_area",
	"no",
	array( "", "no" )
);
$mkdContentBottom->addChild(
	"mkd_enable_content_bottom_area_container",
	$mkd_enable_content_bottom_area_container
);

$mkd_content_bottom_background_color = new BurstMikadoMetaField(
	"color",
	"mkd_content_bottom_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Choose a color for content bottom area", 'burst' )
);
$mkd_enable_content_bottom_area_container->addChild(
	"mkd_content_bottom_background_color",
	$mkd_content_bottom_background_color
);

$mkd_choose_content_bottom_sidebar = new BurstMikadoMetaField(
	"selectblank",
	"mkd_choose_content_bottom_sidebar",
	"",
	esc_html__( "Custom Widget", 'burst' ),
	esc_html__( "Choose Custom Widget area to display", 'burst' ),
	$mkd_custom_sidebars
);
$mkd_enable_content_bottom_area_container->addChild(
	"mkd_choose_content_bottom_sidebar",
	$mkd_choose_content_bottom_sidebar
);

$mkd_content_bottom_sidebar_in_grid = new BurstMikadoMetaField(
	"selectblank",
	"mkd_content_bottom_sidebar_in_grid",
	"",
	esc_html__( "Display in Grid", 'burst' ),
	esc_html__( "Enabling this option will place Content Bottom in grid", 'burst' ),
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' )
	)
);
$mkd_enable_content_bottom_area_container->addChild(
	"mkd_content_bottom_sidebar_in_grid",
	$mkd_content_bottom_sidebar_in_grid
);

// Side Bar Area

$mkdSideBar = new BurstMikadoMetaBox(
	"portfolio_page",
	esc_html__( "Sidebar", 'burst' )
);
burst_mikado_return_framework_variable()->mkdMetaBoxes->addMetaBox(
	"portfolio_side_bar",
	$mkdSideBar
);

$mkd_show_sidebar = new BurstMikadoMetaField(
	"selectblank",
	"mkd_portfolio_show_sidebar",
	"default",
	esc_html__( "Layout", 'burst' ),
	esc_html__( "Choose the sidebar layout", 'burst' ),
	array(
		"default" => esc_html__( "Default", 'burst' ),
		"1" => esc_html__( "Sidebar 1/3 right", 'burst' ),
		"2" => esc_html__( "Sidebar 1/4 right", 'burst' ),
		"3" => esc_html__( "Sidebar 1/3 left", 'burst' ),
		"4" => esc_html__( "Sidebar 1/4 left", 'burst' ),
	)
);
$mkdSideBar->addChild(
	"mkd_portfolio_show_sidebar",
	$mkd_show_sidebar
);

$mkd_choose_sidebar = new BurstMikadoMetaField(
	"selectblank",
	"mkd_choose-sidebar",
	"default",
	esc_html__( "Choose Widget Area in Sidebar", 'burst' ),
	esc_html__( "Choose Custom Widget area to display in Sidebar", 'burst' ),
	$mkd_custom_sidebars
);
$mkdSideBar->addChild(
	"mkd_choose-sidebar",
	$mkd_choose_sidebar
);

// Footer

$mkdFooter = new BurstMikadoMetaBox(
	"portfolio_page",
	esc_html__( "Footer", 'burst' )
);
burst_mikado_return_framework_variable()->mkdMetaBoxes->addMetaBox(
	"portfolio_footer",
	$mkdFooter
);

$mkd_footer_disable = new BurstMikadoMetaField(
	"yesno",
	"mkd_footer-disable",
	"no",
	esc_html__( "Disable Footer for this Page", 'burst' ),
	esc_html__( "Enabling this option will hide footer on your page", 'burst' )
);
$mkdFooter->addChild(
	"mkd_footer-disable",
	$mkd_footer_disable
);

// SEO

$mkdSeo = new BurstMikadoMetaBox(
	"portfolio_page",
	esc_html__( "SEO", 'burst' )
);
burst_mikado_return_framework_variable()->mkdMetaBoxes->addMetaBox(
	"portfolio_seo",
	$mkdSeo
);

$seo_title = new BurstMikadoMetaField(
	"text",
	"mkd_seo_title",
	"",
	esc_html__( "SEO Title", 'burst' ),
	esc_html__( "Enter custom Title for this page", 'burst' )
);
$mkdSeo->addChild(
	"mkd_seo_title",
	$seo_title
);

$seo_keywords = new BurstMikadoMetaField(
	"text",
	"mkd_seo_keywords",
	"",
	esc_html__( "SEO Keywords", 'burst' ),
	esc_html__( "Enter the list of keywords separated by commas", 'burst' )
);
$mkdSeo->addChild(
	"mkd_seo_keywords",
	$seo_keywords
);

$seo_description = new BurstMikadoMetaField(
	"textarea",
	"mkd_seo_description",
	"",
	esc_html__( "SEO Description", 'burst' ),
	esc_html__( "Enter meta description for this page", 'burst' )
);
$mkdSeo->addChild(
	"mkd_seo_description",
	$seo_description
);