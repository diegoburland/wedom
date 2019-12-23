<?php
$contentPage = new BurstMikadoAdminPage(
	'_content',
	esc_html__( 'Content', 'burst' ),
	'icon_clipboard'
);
$burst_mikado_Framework->mkdOptions->addAdminPage(
	'content',
	$contentPage
);

//General Panel
$panelGeneral = new BurstMikadoPanel(
	esc_html__( 'General', 'burst' ),
	'panel_general'
);
$contentPage->addChild(
	'panel_general',
	$panelGeneral
);

$background_color = new BurstMikadoField(
	"color",
	"background_color",
	"",
	esc_html__( "Content Background Color", 'burst' ),
	esc_html__( "Choose the background color for page content area. Default color is #f5f5f5.", 'burst' )
);
$panelGeneral->addChild(
	"background_color",
	$background_color
);

$background_color_grid = new BurstMikadoField(
	"color",
	"background_color_grid",
	"",
	esc_html__( "Content Background Color for Templates in Grid", 'burst' ),
	esc_html__( "Choose the background color for the page templates in grid.", 'burst' )
);
$panelGeneral->addChild(
	"background_color_grid",
	$background_color_grid
);

$selection_color = new BurstMikadoField(
	"color",
	"selection_color",
	"",
	esc_html__( "Text Selection Color", 'burst' ),
	esc_html__( "Choose the color users see when selecting text", 'burst' )
);
$panelGeneral->addChild(
	"selection_color",
	$selection_color
);

$content_top_padding = new BurstMikadoField(
	"text",
	"content_top_padding",
	"0",
	esc_html__( "Content Top Padding (px)", 'burst' ),
	esc_html__( "Enter top padding for content area. If you set this value then it's important to set also Content top padding for mobile header value.", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panelGeneral->addChild(
	"content_top_padding",
	$content_top_padding
);

$content_top_padding_default_template = new BurstMikadoField(
	"text",
	"content_top_padding_default_template",
	"44",
	esc_html__( "Content Top Padding for Templates in Grid (px)", 'burst' ),
	esc_html__( "Enter top padding for content area for Templates in grid. If you set this value then it's important to set also Content top padding for mobile header value.", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panelGeneral->addChild(
	"content_top_padding_default_template",
	$content_top_padding_default_template
);

$content_top_padding_mobile = new BurstMikadoField(
	"text",
	"content_top_padding_mobile",
	"44",
	esc_html__( "Content Top Padding for Mobile Header (px)", 'burst' ),
	esc_html__( "Enter top padding for content area for Mobile Header.", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panelGeneral->addChild(
	"content_top_padding_mobile",
	$content_top_padding_mobile
);

$overlapping_content = new BurstMikadoField(
	"yesno",
	"overlapping_content",
	"no",
	esc_html__( "Enable Overlapping Content", 'burst' ),
	esc_html__( "Enabling this option will make content overlap title area or slider for set amount of pixels", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_overlapping_content_container"
	)
);
$panelGeneral->addChild(
	"overlapping_content",
	$overlapping_content
);

$overlapping_content_container = new BurstMikadoContainer(
	"overlapping_content_container",
	"overlapping_content",
	"no"
);
$panelGeneral->addChild(
	"overlapping_content_container",
	$overlapping_content_container
);

$overlapping_top_content_amount = new BurstMikadoField(
	"text",
	"overlapping_top_content_amount",
	"",
	esc_html__( "Overlapping top amount (px)", 'burst' ),
	esc_html__( "Enter amount of pixels you would like content to overlap title area or slider (default is 40)", 'burst' ),
	array(),
	array( "col_width" => 1 )
);
$overlapping_content_container->addChild(
	"overlapping_top_content_amount",
	$overlapping_top_content_amount
);

$overlapping_bottom_content_amount = new BurstMikadoField(
	"text",
	"overlapping_bottom_content_amount",
	"",
	esc_html__( "Overlapping bottom amount (px)", 'burst' ),
	esc_html__( "Enter amount of pixels you would like content to overlap footer (default is 40)", 'burst' ),
	array(),
	array( "col_width" => 1 )
);
$overlapping_content_container->addChild(
	"overlapping_bottom_content_amount",
	$overlapping_bottom_content_amount
);

$overlapping_content_padding = new BurstMikadoField(
	"text",
	"overlapping_content_padding",
	"",
	esc_html__( "Overlapping left/right padding (px)", 'burst' ),
	esc_html__( "This option takes effect only on Default (in grid) templates", 'burst' ),
	array(),
	array( "col_width" => 1 )
);
$overlapping_content_container->addChild(
	"overlapping_content_padding",
	$overlapping_content_padding
);

$animate_overlapping_content = new BurstMikadoField(
	"yesno",
	"animate_overlapping_content",
	"no",
	esc_html__( "Animate overlapping content", 'burst' ),
	esc_html__( "Enabling this option will turn on entry animation on overlapping content", 'burst' )
);
$overlapping_content_container->addChild(
	"animate_overlapping_content",
	$animate_overlapping_content
);

$frame_around_overlapping_content = new BurstMikadoField(
	"yesno",
	"frame_around_overlapping_content",
	"no",
	esc_html__( "Frame around overlapping content", 'burst' ),
	esc_html__( "Enabling this option will set a frame around the overlapping content", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_frame_around_overlapping_content_container"
	)
);
$overlapping_content_container->addChild(
	"frame_around_overlapping_content",
	$frame_around_overlapping_content
);

$frame_around_overlapping_content_container = new BurstMikadoContainer(
	"frame_around_overlapping_content_container",
	"frame_around_overlapping_content",
	"no"
);
$overlapping_content_container->addChild(
	"frame_around_overlapping_content_container",
	$frame_around_overlapping_content_container
);

$frame_around_overlapping_content_width = new BurstMikadoField(
	"text",
	"frame_around_overlapping_content_width",
	"",
	esc_html__( "Frame width (px)", 'burst' ),
	esc_html__( "Enter the width of the frame (default is 15)", 'burst' ),
	array(),
	array( "col_width" => 1 )
);
$frame_around_overlapping_content_container->addChild(
	"frame_around_overlapping_content_width",
	$frame_around_overlapping_content_width
);

$frame_around_overlapping_content_color = new BurstMikadoField(
	"color",
	"frame_around_overlapping_content_color",
	"",
	esc_html__( "Frame Color", 'burst' ),
	esc_html__( "Choose a color for frame", 'burst' )
);
$frame_around_overlapping_content_container->addChild(
	"frame_around_overlapping_content_color",
	$frame_around_overlapping_content_color
);

$frame_around_overlapping_content_pattern = new BurstMikadoField(
	"image",
	"frame_around_overlapping_content_pattern",
	"",
	esc_html__( "Pattern Image", 'burst' ),
	esc_html__( "Choose an image to be used as a pattern in the frame around the overlapping content", 'burst' )
);
$frame_around_overlapping_content_container->addChild(
	"frame_around_overlapping_content_pattern",
	$frame_around_overlapping_content_pattern
);

$content_grid_position = new BurstMikadoField(
	"select",
	"content_grid_position",
	"",
	esc_html__( "Position of Content in Grid", 'burst' ),
	esc_html__( "Set position of content in grid", 'burst' ),
	array(
		"default" => esc_html__( "Default", 'burst' ),
		"left" => esc_html__( "Left", 'burst' ),
		"right" => esc_html__( "Right", 'burst' )
	)
);
$panelGeneral->addChild(
	"content_grid_position",
	$content_grid_position
);

$content_predefined_width = new BurstMikadoField(
	"select",
	"content_predefined_width",
	"",
	esc_html__( "Initial Width of Content", 'burst' ),
	esc_html__( "Choose the initial width of content which is in grid (Applies to pages set to 'Default Template' and rows set to 'In Grid' )", 'burst' ),
	array(
		"" => esc_html__( "1100px - default", 'burst' ),
		"grid_1300" => esc_html__( "1300px", 'burst' ),
		"grid_1200" => esc_html__( "1200px", 'burst' ),
		"grid_1000" => esc_html__( "1000px", 'burst' ),
		"grid_800" => esc_html__( "800px", 'burst' )
	)
);
$panelGeneral->addChild(
	"content_predefined_width",
	$content_predefined_width
);

$panel_content_bottom = new BurstMikadoPanel(
	esc_html__( "Content Bottom Area", 'burst' ),
	"content_bottom_area_panel"
);
$contentPage->addChild(
	"panel_content_bottom",
	$panel_content_bottom
);

$enable_content_bottom_area = new BurstMikadoField(
	"yesno",
	"enable_content_bottom_area",
	"no",
	esc_html__( "Enable Content Bottom Area", 'burst' ),
	esc_html__( "This option will enable Content Bottom area on pages", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_enable_content_bottom_area_container"
	)
);
$panel_content_bottom->addChild(
	"enable_content_bottom_area",
	$enable_content_bottom_area
);

$enable_content_bottom_area_container = new BurstMikadoContainer(
	"enable_content_bottom_area_container",
	"enable_content_bottom_area",
	"no"
);
$panel_content_bottom->addChild(
	"enable_content_bottom_area_container",
	$enable_content_bottom_area_container
);

$custom_sidebars = burst_mikado_get_custom_sidebars();

$content_bottom_sidebar_custom_display = new BurstMikadoField(
	"selectblank",
	"content_bottom_sidebar_custom_display",
	"",
	esc_html__( "Sidebar to Display", 'burst' ),
	esc_html__( "Choose a Content Bottom sidebar to display", 'burst' ),
	$custom_sidebars
);
$enable_content_bottom_area_container->addChild(
	"content_bottom_sidebar_custom_display",
	$content_bottom_sidebar_custom_display
);

$content_bottom_in_grid = new BurstMikadoField(
	"yesno",
	"content_bottom_in_grid",
	"yes",
	esc_html__( "Display in Grid", 'burst' ),
	esc_html__( "Enabling this option will place Content Bottom in grid", 'burst' )
);
$enable_content_bottom_area_container->addChild(
	"content_bottom_in_grid",
	$content_bottom_in_grid
);

$content_bottom_background_color = new BurstMikadoField(
	"color",
	"content_bottom_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Choose a background color for Content Bottom area", 'burst' )
);
$enable_content_bottom_area_container->addChild(
	"content_bottom_background_color",
	$content_bottom_background_color
);