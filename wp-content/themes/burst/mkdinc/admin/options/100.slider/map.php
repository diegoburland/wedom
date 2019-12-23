<?php

$sliderPage = new BurstMikadoAdminPage(
	"10",
	esc_html__( "Sliders", 'burst' ),
	"arrow_left-right"
);
$burst_mikado_Framework->mkdOptions->addAdminPage(
	"slider",
	$sliderPage
);

$panel_mikado_slider = new BurstMikadoPanel(
	esc_html__( 'Mikado Slider', 'burst' ),
	'panel_mikado_slider'
);
$sliderPage->addChild(
	'panel_mikado_slider',
	$panel_mikado_slider
);

$qs_slider_height_mobile = new BurstMikadoField(
	"text",
	"qs_slider_height_mobile",
	"",
	esc_html__( "Slider Height For Mobile Devices (px)", 'burst' ),
	esc_html__( "Define slider height for mobile devices", 'burst' )
);
$panel_mikado_slider->addChild(
	"qs_slider_height_mobile",
	$qs_slider_height_mobile
);

$qs_slider_preloader_background = new BurstMikadoField(
	"color",
	"qs_slider_preloader_background",
	"",
	esc_html__( "Slider Preloader Background Color", 'burst' ),
	esc_html__( "Define background color for slider preloader", 'burst' )
);
$panel_mikado_slider->addChild(
	"qs_slider_preloader_background",
	$qs_slider_preloader_background
);

// Navigation Control Style

$slider_navigation_style_title = new BurstMikadoTitle(
	'slider_navigation_style_title',
	esc_html__( 'Navigation Bullets Style', 'burst' )
);
$panel_mikado_slider->addChild(
	"slider_navigation_style_title",
	$slider_navigation_style_title
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Colors", 'burst' ),
	esc_html__( "Choose color styles for navigation bullets", 'burst' )
);
$panel_mikado_slider->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$qs_navigation_control_color = new BurstMikadoField(
	"colorsimple",
	"qs_navigation_control_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"qs_navigation_control_color",
	$qs_navigation_control_color
);

$qs_navigation_control_transparency = new BurstMikadoField(
	"textsimple",
	"qs_navigation_control_transparency",
	"",
	esc_html__( "Color Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"qs_navigation_control_transparency",
	$qs_navigation_control_transparency
);

$qs_navigation_control_active_color = new BurstMikadoField(
	"colorsimple",
	"qs_navigation_control_active_color",
	"",
	esc_html__( "Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"qs_navigation_control_active_color",
	$qs_navigation_control_active_color
);

$qs_navigation_control_active_transparency = new BurstMikadoField(
	"textsimple",
	"qs_navigation_control_active_transparency",
	"",
	esc_html__( "Active Color Transparency(0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"qs_navigation_control_active_transparency",
	$qs_navigation_control_active_transparency
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Size", 'burst' ),
	esc_html__( "Define size for navigation bullets controls (w=h in px)", 'burst' )
);
$panel_mikado_slider->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$qs_navigation_control_size = new BurstMikadoField(
	"textsimple",
	"qs_navigation_control_size",
	"",
	esc_html__( "Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"qs_navigation_control_size",
	$qs_navigation_control_size
);

$qs_navigation_control_active_size = new BurstMikadoField(
	"textsimple",
	"qs_navigation_control_active_size",
	"",
	esc_html__( "Active Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"qs_navigation_control_active_size",
	$qs_navigation_control_active_size
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Border Style", 'burst' ),
	esc_html__( "Define border style for navigation bullets", 'burst' )
);
$panel_mikado_slider->addChild(
	"group3",
	$group3
);

$row1 = new BurstMikadoRow();
$group3->addChild(
	"row1",
	$row1
);

$qs_navigation_control_border_color = new BurstMikadoField(
	"colorsimple",
	"qs_navigation_control_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"qs_navigation_control_border_color",
	$qs_navigation_control_border_color
);

$qs_navigation_control_brd_transparency = new BurstMikadoField(
	"textsimple",
	"qs_navigation_control_brd_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"qs_navigation_control_brd_transparency",
	$qs_navigation_control_brd_transparency
);

$qs_navigation_control_active_border_color = new BurstMikadoField(
	"colorsimple",
	"qs_navigation_control_active_border_color",
	"",
	esc_html__( "Active Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"qs_navigation_control_active_border_color",
	$qs_navigation_control_active_border_color
);

$qs_navigation_control_active_brd_transparency = new BurstMikadoField(
	"textsimple",
	"qs_navigation_control_active_brd_transparency",
	"",
	esc_html__( "Active Border Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"qs_navigation_control_active_brd_transparency",
	$qs_navigation_control_active_brd_transparency
);

$row2 = new BurstMikadoRow();
$group3->addChild(
	"row2",
	$row2
);

$qs_navigation_control_border_radius = new BurstMikadoField(
	"textsimple",
	"qs_navigation_control_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"qs_navigation_control_border_radius",
	$qs_navigation_control_border_radius
);

// Custom cursor navigation style

$navigation_custom_cursor = new BurstMikadoTitle(
	'navigation_custom_cursor',
	esc_html__( 'Custom Cursor Navigation Style', 'burst' )
);
$panel_mikado_slider->addChild(
	"navigation_custom_cursor",
	$navigation_custom_cursor
);

$qs_enable_navigation_custom_cursor = new BurstMikadoField(
	"yesno",
	"qs_enable_navigation_custom_cursor",
	"no",
	esc_html__( "Enable Custom Cursor for Navigation", 'burst' ),
	esc_html__( "Enabling this option will display custom cursors for slider navigation", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_qs_enable_navigation_custom_cursor_container"
	)
);
$panel_mikado_slider->addChild(
	"qs_enable_navigation_custom_cursor",
	$qs_enable_navigation_custom_cursor
);

$qs_enable_navigation_custom_cursor_container = new BurstMikadoContainer(
	"qs_enable_navigation_custom_cursor_container",
	"qs_enable_navigation_custom_cursor",
	"no"
);
$panel_mikado_slider->addChild(
	"qs_enable_navigation_custom_cursor_container",
	$qs_enable_navigation_custom_cursor_container
);

$cursor_image_left_right_area_size = new BurstMikadoField(
	"text",
	"cursor_image_left_right_area_size",
	"",
	esc_html__( "Clickable Left/Right Area Size (%)", 'burst' ),
	esc_html__( "Define size of clickable left/right slider area in relation to slider width (default value is 8%)", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_left_right_area_size",
	$cursor_image_left_right_area_size
);

$cursor_image_left_normal = new BurstMikadoField(
	"image",
	"cursor_image_left_normal",
	"",
	esc_html__( "Cursor Image 'Left' - Normal", 'burst' ),
	esc_html__( "Choose a default cursor 'Left' image to display ", 'burst' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_left_normal",
	$cursor_image_left_normal
);

$cursor_image_right_normal = new BurstMikadoField(
	"image",
	"cursor_image_right_normal",
	"",
	esc_html__( "Cursor Image 'Right' - Normal", 'burst' ),
	esc_html__( "Choose a default cursor 'Right' image to display ", 'burst' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_right_normal",
	$cursor_image_right_normal
);

$cursor_image_left_light = new BurstMikadoField(
	"image",
	"cursor_image_left_light",
	"",
	esc_html__( "Cursor Image 'Left' - Light", 'burst' ),
	esc_html__( "Choose a cursor 'Left' light image to display ", 'burst' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_left_light",
	$cursor_image_left_light
);

$cursor_image_right_light = new BurstMikadoField(
	"image",
	"cursor_image_right_light",
	"",
	esc_html__( "Cursor Image 'Right' - Light", 'burst' ),
	esc_html__( "Choose a cursor 'Right' light image to display ", 'burst' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_right_light",
	$cursor_image_right_light
);

$cursor_image_left_dark = new BurstMikadoField(
	"image",
	"cursor_image_left_dark",
	"",
	esc_html__( "Cursor Image 'Left' - Dark", 'burst' ),
	esc_html__( "Choose a cursor 'Left' dark image to display ", 'burst' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_left_dark",
	$cursor_image_left_dark
);

$cursor_image_right_dark = new BurstMikadoField(
	"image",
	"cursor_image_right_dark",
	"",
	esc_html__( "Cursor Image 'Right' - Dark", 'burst' ),
	esc_html__( "Choose a cursor 'Right' dark image to display ", 'burst' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_right_dark",
	$cursor_image_right_dark
);

$qs_enable_navigation_custom_cursor_grab = new BurstMikadoField(
	"yesno",
	"qs_enable_navigation_custom_cursor_grab",
	"no",
	esc_html__( "Enable Custom Cursor for 'Grab' Arrow", 'burst' ),
	esc_html__( "Enabling this option will display custom cursor for slider 'Grab' arrow", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_qs_enable_navigation_custom_cursor_grab_container"
	)
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"qs_enable_navigation_custom_cursor_grab",
	$qs_enable_navigation_custom_cursor_grab
);

$qs_enable_navigation_custom_cursor_grab_container = new BurstMikadoContainer(
	"qs_enable_navigation_custom_cursor_grab_container",
	"qs_enable_navigation_custom_cursor_grab",
	"no"
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"qs_enable_navigation_custom_cursor_grab_container",
	$qs_enable_navigation_custom_cursor_grab_container
);

$cursor_image_grab_normal = new BurstMikadoField(
	"image",
	"cursor_image_grab_normal",
	"",
	esc_html__( "Cursor Image 'Grab' - Normal", 'burst' ),
	esc_html__( "Choose a default cursor 'Grab' image to display", 'burst' )
);
$qs_enable_navigation_custom_cursor_grab_container->addChild(
	"cursor_image_grab_normal",
	$cursor_image_grab_normal
);

$cursor_image_grab_light = new BurstMikadoField(
	"image",
	"cursor_image_grab_light",
	"",
	esc_html__( "Cursor Image 'Grab' - Light", 'burst' ),
	esc_html__( "Choose a cursor 'Grab' light image to display", 'burst' )
);
$qs_enable_navigation_custom_cursor_grab_container->addChild(
	"cursor_image_grab_light",
	$cursor_image_grab_light
);

$cursor_image_grab_dark = new BurstMikadoField(
	"image",
	"cursor_image_grab_dark",
	"",
	esc_html__( "Cursor Image 'Grab' - Dark", 'burst' ),
	esc_html__( "Choose a cursor 'Grab' dark image to display", 'burst' )
);
$qs_enable_navigation_custom_cursor_grab_container->addChild(
	"cursor_image_grab_dark",
	$cursor_image_grab_dark
);

//Vertical Split Slider
$panel_vss = new BurstMikadoPanel(
	esc_html__( "Vertical Split Slider", 'burst' ),
	"panel_vss"
);
$sliderPage->addChild(
	"panel_vss",
	$panel_vss
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Navigation Style", 'burst' ),
	esc_html__( "Define style for navigation bullets", 'burst' )
);
$panel_vss->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$vss_navigation_inactive_color = new BurstMikadoField(
	"colorsimple",
	"vss_navigation_inactive_color",
	"",
	esc_html__( "Navigation Color", 'burst' ),
	esc_html__( "Define color for navigation dots", 'burst' )
);
$row1->addChild(
	"vss_navigation_inactive_color",
	$vss_navigation_inactive_color
);

$vss_navigation_inactive_border_color = new BurstMikadoField(
	"colorsimple",
	"vss_navigation_inactive_border_color",
	"",
	esc_html__( "Navigation Border Color", 'burst' ),
	esc_html__( "Define border color for navigation dots", 'burst' )
);
$row1->addChild(
	"vss_navigation_inactive_border_color",
	$vss_navigation_inactive_border_color
);

$vss_navigation_color = new BurstMikadoField(
	"colorsimple",
	"vss_navigation_color",
	"",
	esc_html__( "Navigation Active Color", 'burst' ),
	esc_html__( "Define active color for navigation dots", 'burst' )
);
$row1->addChild(
	"vss_navigation_color",
	$vss_navigation_color
);

$vss_navigation_border_color = new BurstMikadoField(
	"colorsimple",
	"vss_navigation_border_color",
	"",
	esc_html__( "Navigation Active Border Color", 'burst' ),
	esc_html__( "Define active border color for navigation dots", 'burst' )
);
$row1->addChild(
	"vss_navigation_border_color",
	$vss_navigation_border_color
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Navigation Light Style", 'burst' ),
	esc_html__( "Define style for light navigation bullets", 'burst' )
);
$panel_vss->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$vss_navigation_light_inactive_color = new BurstMikadoField(
	"colorsimple",
	"vss_navigation_light_inactive_color",
	"",
	esc_html__( "Navigation Color", 'burst' ),
	esc_html__( "Define color for navigation dots", 'burst' )
);
$row1->addChild(
	"vss_navigation_light_inactive_color",
	$vss_navigation_light_inactive_color
);

$vss_navigation_light_inactive_border_color = new BurstMikadoField(
	"colorsimple",
	"vss_navigation_light_inactive_border_color",
	"",
	esc_html__( "Navigation Border Color", 'burst' ),
	esc_html__( "Define border color for navigation dots", 'burst' )
);
$row1->addChild(
	"vss_navigation_light_inactive_border_color",
	$vss_navigation_light_inactive_border_color
);

$vss_navigation_light_color = new BurstMikadoField(
	"colorsimple",
	"vss_navigation_light_color",
	"",
	esc_html__( "Navigation Active Color", 'burst' ),
	esc_html__( "Define active color for navigation dots", 'burst' )
);
$row1->addChild(
	"vss_navigation_light_color",
	$vss_navigation_light_color
);

$vss_navigation_light_border_color = new BurstMikadoField(
	"colorsimple",
	"vss_navigation_light_border_color",
	"",
	esc_html__( "Navigation Active Border Color", 'burst' ),
	esc_html__( "Define active border color for navigation dots", 'burst' )
);
$row1->addChild(
	"vss_navigation_light_border_color",
	$vss_navigation_light_border_color
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Navigation Dark Style", 'burst' ),
	esc_html__( "Define style for dark navigation bullets", 'burst' )
);
$panel_vss->addChild(
	"group3",
	$group3
);

$row1 = new BurstMikadoRow();
$group3->addChild(
	"row1",
	$row1
);

$vss_navigation_dark_inactive_color = new BurstMikadoField(
	"colorsimple",
	"vss_navigation_dark_inactive_color",
	"",
	esc_html__( "Navigation Color", 'burst' ),
	esc_html__( "Define color for navigation dots", 'burst' )
);
$row1->addChild(
	"vss_navigation_dark_inactive_color",
	$vss_navigation_dark_inactive_color
);

$vss_navigation_dark_inactive_border_color = new BurstMikadoField(
	"colorsimple",
	"vss_navigation_dark_inactive_border_color",
	"",
	esc_html__( "Navigation Border Color", 'burst' ),
	esc_html__( "Define border color for navigation dots", 'burst' )
);
$row1->addChild(
	"vss_navigation_dark_inactive_border_color",
	$vss_navigation_dark_inactive_border_color
);

$vss_navigation_dark_color = new BurstMikadoField(
	"colorsimple",
	"vss_navigation_dark_color",
	"",
	esc_html__( "Navigation Active Color", 'burst' ),
	esc_html__( "Define active color for navigation dots", 'burst' )
);
$row1->addChild(
	"vss_navigation_dark_color",
	$vss_navigation_dark_color
);

$vss_navigation_dark_border_color = new BurstMikadoField(
	"colorsimple",
	"vss_navigation_dark_border_color",
	"",
	esc_html__( "Navigation Active Border Color", 'burst' ),
	esc_html__( "Define active border color for navigation dots", 'burst' )
);
$row1->addChild(
	"vss_navigation_dark_border_color",
	$vss_navigation_dark_border_color
);

$group4 = new BurstMikadoGroup(
	esc_html__( "Navigation Size", 'burst' ),
	esc_html__( "Define size for navigation dots", 'burst' )
);
$panel_vss->addChild(
	"group4",
	$group4
);

$row1 = new BurstMikadoRow();
$group4->addChild(
	"row1",
	$row1
);

$vss_navigation_size = new BurstMikadoField(
	"textsimple",
	"vss_navigation_size",
	"",
	esc_html__( "Size (px)", 'burst' ),
	esc_html__( "Define size for navigation dots", 'burst' )
);
$row1->addChild(
	"vss_navigation_size",
	$vss_navigation_size
);

$vss_navigation_active_size = new BurstMikadoField(
	"textsimple",
	"vss_navigation_active_size",
	"",
	esc_html__( "Active Size (px)", 'burst' ),
	esc_html__( "Define active size for navigation dots", 'burst' )
);
$row1->addChild(
	"vss_navigation_active_size",
	$vss_navigation_active_size
);

$vss_navigation_spacing_from_edge = new BurstMikadoField(
	"text",
	"vss_navigation_spacing_from_edge",
	"",
	esc_html__( "Navigation Position (px)", 'burst' ),
	esc_html__( "Define position of navigation from right/left edge of slider", 'burst' ),
	array(),
	array( "col_width" => 1 )
);
$panel_vss->addChild(
	"vss_navigation_spacing_from_edge",
	$vss_navigation_spacing_from_edge
);

$vss_left_panel_size = new BurstMikadoField(
	"text",
	"vss_left_panel_size",
	"",
	esc_html__( "Left Slide Panel size (%)", 'burst' ),
	esc_html__( "Define size for left slide panel. Note that sum of left and right slide panel should be 100.", 'burst' ),
	array(),
	array( "col_width" => 1 )
);
$panel_vss->addChild(
	"vss_left_panel_size",
	$vss_left_panel_size
);

$vss_right_panel_size = new BurstMikadoField(
	"text",
	"vss_right_panel_size",
	"",
	esc_html__( "Right Slide Panel size (%)", 'burst' ),
	esc_html__( "Define size for right slide panel. Note that sum of left and right slide panel should be 100.", 'burst' ),
	array(),
	array( "col_width" => 1 )
);
$panel_vss->addChild(
	"vss_right_panel_size",
	$vss_right_panel_size
);
				
	