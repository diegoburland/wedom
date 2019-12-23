<?php
$burst_mikado_IconCollections = burst_mikado_return_icon_collections();

$generalPage = new BurstMikadoAdminPage(
	"",
	esc_html__( "General", 'burst' ),
	"icon_building"
);
$burst_mikado_Framework->mkdOptions->addAdminPage(
	"general",
	$generalPage
);

//Branding Panel
$branding_panel = new BurstMikadoPanel(
	esc_html__( "Branding", 'burst' ),
	"branding_panel"
);
$generalPage->addChild(
	"branding_panel",
	$branding_panel
);

$show_logo = new BurstMikadoField(
	"yesno",
	"show_logo",
	"yes",
	esc_html__( "Show Logo", 'burst' ),
	esc_html__( "Disabling this option will hide logo", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_show_logo_container"
	)
);
$branding_panel->addChild(
	"show_logo",
	$show_logo
);

$show_logo_container = new BurstMikadoContainer(
	"show_logo_container",
	"show_logo",
	"no"
);
$branding_panel->addChild(
	"show_logo_container",
	$show_logo_container
);

$logo_image = new BurstMikadoField(
	"image",
	"logo_image",
	BURST_MIKADO_ROOT . "/img/logo.png",
	esc_html__( "Logo Image - Normal", 'burst' ),
	esc_html__( "Choose a default logo image to display ", 'burst' )
);
$show_logo_container->addChild(
	"logo_image",
	$logo_image
);

$logo_image_light = new BurstMikadoField(
	"image",
	"logo_image_light",
	BURST_MIKADO_ROOT . "/img/logo_white.png",
	esc_html__( "Logo Image - Light", 'burst' ),
	esc_html__( 'Choose a logo image to display for "Light" header skin', 'burst' )
);
$show_logo_container->addChild(
	"logo_image_light",
	$logo_image_light
);

$logo_image_dark = new BurstMikadoField(
	"image",
	"logo_image_dark",
	BURST_MIKADO_ROOT . "/img/logo_black.png",
	esc_html__( "Logo Image - Dark", 'burst' ),
	esc_html__( 'Choose a logo image to display for "Dark" header skin', 'burst' )
);
$show_logo_container->addChild(
	"logo_image_dark",
	$logo_image_dark
);

$logo_image_sticky = new BurstMikadoField(
	"image",
	"logo_image_sticky",
	BURST_MIKADO_ROOT . "/img/logo_black.png",
	esc_html__( "Logo Image - Sticky Header", 'burst' ),
	esc_html__( 'Choose a logo image to display for "Sticky" header type', 'burst' )
);
$show_logo_container->addChild(
	"logo_image_sticky",
	$logo_image_sticky
);

$logo_image_fixed_hidden = new BurstMikadoField(
	"image",
	"logo_image_fixed_hidden",
	"",
	esc_html__( "Logo Image - Fixed Advanced Header", 'burst' ),
	esc_html__( 'Choose a logo image to display for "Fixed Advanced" header type', 'burst' )
);
$show_logo_container->addChild(
	"logo_image_fixed_hidden",
	$logo_image_fixed_hidden
);

$logo_image_mobile = new BurstMikadoField(
	"image",
	"logo_image_mobile",
	"",
	esc_html__( "Logo Image - Mobile Header", 'burst' ),
	esc_html__( 'Choose a logo image to display for "Mobile" header type', 'burst' )
);
$show_logo_container->addChild(
	"logo_image_mobile",
	$logo_image_mobile
);

$vertical_logo_bottom = new BurstMikadoField(
	"image",
	"vertical_logo_bottom",
	"",
	esc_html__( "Logo Image - Side Menu Area Bottom", 'burst' ),
	esc_html__( 'Choose a logo image to display on the bottom of side menu area for "Initially Hidden" side menu area type', 'burst' )
);
$show_logo_container->addChild(
	"vertical_logo_bottom",
	$vertical_logo_bottom
);

$content_menu_logo_image = new BurstMikadoField(
	"image",
	"content_menu_logo_image",
	"",
	esc_html__( "Logo Image - Content Menu", 'burst' ),
	esc_html__( 'Choose a logo image to display on the Content Menu', 'burst' )
);
$show_logo_container->addChild(
	"content_menu_logo_image",
	$content_menu_logo_image
);

// Design Style

$panel1 = new BurstMikadoPanel(
	esc_html__( "Appearance", 'burst' ),
	"design_style"
);
$generalPage->addChild(
	"panel1",
	$panel1
);

$first_color_title = new BurstMikadoTitle(
	'first_color_title',
	esc_html__( 'First Color', 'burst' )
);
$panel1->addChild(
	'first_color_title',
	$first_color_title
);

$first_color = new BurstMikadoField(
	"color",
	"first_color",
	"",
	esc_html__( "First Main Color", 'burst' ),
	esc_html__( "Choose the most dominant theme color. Default color is #e6ae48.", 'burst' )
);
$panel1->addChild(
	"first_color",
	$first_color
);

$transparent_content_title = new BurstMikadoTitle(
	'transparent_content_title',
	esc_html__( 'Uniform Site Background', 'burst' )
);
$panel1->addChild(
	'transparent_content_title',
	$transparent_content_title
);

$transparent_content = new BurstMikadoField(
	"yesno",
	"transparent_content",
	"no",
	esc_html__( "Enable Uniform Site Background", 'burst' ),
	esc_html__( "If enabled, content background on pages will be transparent (unless set otherwise) and the background you set here will show", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_transparent_content_container"
	)
);
$panel1->addChild(
	"transparent_content",
	$transparent_content
);

$transparent_content_container = new BurstMikadoContainer(
	"transparent_content_container",
	"transparent_content",
	"no"
);
$panel1->addChild(
	"transparent_content_container",
	$transparent_content_container
);

$transparent_content_background_color = new BurstMikadoField(
	"color",
	"transparent_content_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Choose body background color. Default color is #ffffff.", 'burst' )
);
$transparent_content_container->addChild(
	"transparent_content_background_color",
	$transparent_content_background_color
);

$transparent_content_background_image = new BurstMikadoField(
	"image",
	"transparent_content_background_image",
	"",
	esc_html__( "Background Image", 'burst' ),
	esc_html__( "Choose an image to be displayed in background", 'burst' )
);
$transparent_content_container->addChild(
	"transparent_content_background_image",
	$transparent_content_background_image
);

$transparent_content_pattern_background_image = new BurstMikadoField(
	"image",
	"transparent_content_pattern_background_image",
	"",
	esc_html__( "Background Pattern", 'burst' ),
	esc_html__( "Choose an image to be used as background pattern", 'burst' )
);
$transparent_content_container->addChild(
	"transparent_content_pattern_background_image",
	$transparent_content_pattern_background_image
);

$boxed_title = new BurstMikadoTitle(
	'boxed_title',
	esc_html__( 'Boxed Layout', 'burst' )
);
$panel1->addChild(
	'boxed_title',
	$boxed_title
);

$boxed = new BurstMikadoField(
	"yesno",
	"boxed",
	"no",
	esc_html__( "Boxed layout", 'burst' ),
	esc_html__( "Enabling this option will display site content in grid", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_boxed_container"
	)
);
$panel1->addChild(
	"boxed",
	$boxed
);

$boxed_container = new BurstMikadoContainer(
	"boxed_container",
	"boxed",
	"no"
);
$panel1->addChild(
	"boxed_container",
	$boxed_container
);

$spacing_arround_content = new BurstMikadoField(
	"yesno",
	"spacing_arround_content",
	"no",
	esc_html__( "Spacing around content", 'burst' ),
	esc_html__( "Enabling this option will set a spacing around the boxed content", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_spacing_arround_content_container"
	)
);
$boxed_container->addChild(
	"spacing_arround_content",
	$spacing_arround_content
);

$spacing_arround_content_container = new BurstMikadoContainer(
	"spacing_arround_content_container",
	"spacing_arround_content",
	"no"
);
$boxed_container->addChild(
	"spacing_arround_content_container",
	$spacing_arround_content_container
);

$spacing_amount = new BurstMikadoField(
	"text",
	"spacing_amount",
	"",
	esc_html__( "Spacing amount (px)", 'burst' ),
	esc_html__( "Enter the amount for the spacing around boxed content (default is 25)", 'burst' ),
	array(),
	array( "col_width" => 1 )
);
$spacing_arround_content_container->addChild(
	"spacing_amount",
	$spacing_amount
);

$footer_in_content = new BurstMikadoField(
	"yesno",
	"footer_in_content",
	"no",
	esc_html__( "Include footer in content area", 'burst' ),
	esc_html__( "Enabling this option will include the footer in the content area, so the set spacing will wrap around the footer area as well. Otherwise the spacing will separate the footer and content.", 'burst' )
);
$spacing_arround_content_container->addChild(
	"footer_in_content",
	$footer_in_content
);

$frame_around_content = new BurstMikadoField(
	"yesno",
	"frame_around_content",
	"no",
	esc_html__( "Frame around content", 'burst' ),
	esc_html__( "Enabling this option will set a frame around the content", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_frame_around_content_container"
	)
);
$spacing_arround_content_container->addChild(
	"frame_around_content",
	$frame_around_content
);

$frame_around_content_container = new BurstMikadoContainer(
	"frame_around_content_container",
	"frame_around_content",
	"no"
);
$spacing_arround_content_container->addChild(
	"frame_around_content_container",
	$frame_around_content_container
);

$frame_around_content_width = new BurstMikadoField(
	"text",
	"frame_around_content_width",
	"",
	esc_html__( "Frame width (px)", 'burst' ),
	esc_html__( "Enter the width of the frame (default is 15)", 'burst' ),
	array(),
	array( "col_width" => 1 )
);
$frame_around_content_container->addChild(
	"frame_around_content_width",
	$frame_around_content_width
);

$frame_around_content_color = new BurstMikadoField(
	"color",
	"frame_around_content_color",
	"",
	esc_html__( "Frame Color", 'burst' ),
	esc_html__( "Choose a color for frame", 'burst' )
);
$frame_around_content_container->addChild(
	"frame_around_content_color",
	$frame_around_content_color
);

$frame_around_content_pattern = new BurstMikadoField(
	"image",
	"frame_around_content_pattern",
	"",
	esc_html__( "Pattern Image", 'burst' ),
	esc_html__( "Choose an image to be used as a pattern in the frame around the content", 'burst' )
);
$frame_around_content_container->addChild(
	"frame_around_content_pattern",
	$frame_around_content_pattern
);

$background_color_box = new BurstMikadoField(
	"color",
	"background_color_box",
	"",
	esc_html__( "Page Background Color", 'burst' ),
	esc_html__( "Choose the page background (body) color. Default color is #f5f5f5.", 'burst' )
);
$boxed_container->addChild(
	"background_color_box",
	$background_color_box
);

$background_image = new BurstMikadoField(
	"image",
	"background_image",
	"",
	esc_html__( "Background Image", 'burst' ),
	esc_html__( "Choose an image to be displayed in background", 'burst' )
);
$boxed_container->addChild(
	"background_image",
	$background_image
);

$pattern_background_image = new BurstMikadoField(
	"image",
	"pattern_background_image",
	"",
	esc_html__( "Background Pattern", 'burst' ),
	esc_html__( "Choose an image to be used as background pattern", 'burst' )
);
$boxed_container->addChild(
	"pattern_background_image",
	$pattern_background_image
);

$background_image_attachment = new BurstMikadoField(
	"select",
	"background_image_attachment",
	"fixed",
	esc_html__( "Background Attachment", 'burst' ),
	esc_html__( "Choose background attachment behavior", 'burst' ),
	array(
		"fixed" => esc_html__( "Fixed", 'burst' ),
		"scroll" => esc_html__( "Scroll", 'burst' )
	)
);
$boxed_container->addChild(
	"background_image_attachment",
	$background_image_attachment
);

$boxed_padding_general = new BurstMikadoField(
	"text",
	"boxed_padding_general",
	"",
	esc_html__( "Left/Right Padding on Content (%)", 'burst' ),
	esc_html__( "Insert left(right) padding that will apply generaly", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$boxed_container->addChild(
	"boxed_padding_general",
	$boxed_padding_general
);

$boxed_padding_on_header = new BurstMikadoField(
	"yesno",
	"boxed_padding_on_header",
	"no",
	esc_html__( "Left/Right Padding Affects Header", 'burst' ),
	esc_html__( "By enabling this option the left/right padding will affect header", 'burst' )
);
$boxed_container->addChild(
	"boxed_padding_on_header",
	$boxed_padding_on_header
);

$boxed_padding_on_header_footer = new BurstMikadoField(
	"yesno",
	"boxed_padding_on_header_footer",
	"no",
	esc_html__( "Left/Right Padding Affects Header and Footer", 'burst' ),
	esc_html__( "By enabling this option the left/right padding will affect header and footer also", 'burst' )
);
$boxed_container->addChild(
	"boxed_padding_on_header_footer",
	$boxed_padding_on_header_footer
);

$boxed_padding_on_title_content = new BurstMikadoField(
	"yesno",
	"boxed_padding_on_title_content",
	"no",
	esc_html__( "Left/Right Padding Affects Title Content", 'burst' ),
	esc_html__( "By enabling this option the left/right padding will affect title content", 'burst' )
);
$boxed_container->addChild(
	"boxed_padding_on_title_content",
	$boxed_padding_on_title_content
);

$boxed_padding_on_title_container = new BurstMikadoField(
	"yesno",
	"boxed_padding_on_title_container",
	"no",
	esc_html__( "Left/Right Padding Affects Title Container", 'burst' ),
	esc_html__( "By enabling this option the left/right padding will affect title container (including title image)", 'burst' )
);
$boxed_container->addChild(
	"boxed_padding_on_title_container",
	$boxed_padding_on_title_container
);

$paspartu_title = new BurstMikadoTitle(
	'paspartu_title',
	esc_html__( 'Passepartout', 'burst' )
);
$panel1->addChild(
	'paspartu_title',
	$paspartu_title
);

$paspartu = new BurstMikadoField(
	"yesno",
	"paspartu",
	"no",
	esc_html__( "Passepartout", 'burst' ),
	esc_html__( "Enabling this option will display passepartout around site content", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_paspartu_container"
	)
);
$panel1->addChild(
	"paspartu",
	$paspartu
);

$paspartu_container = new BurstMikadoContainer(
	"paspartu_container",
	"paspartu",
	"no"
);
$panel1->addChild(
	"paspartu_container",
	$paspartu_container
);

$paspartu_color = new BurstMikadoField(
	"color",
	"paspartu_color",
	"",
	esc_html__( "Passepartout Color", 'burst' ),
	esc_html__( "Choose passepartout color, default value is #ffffff", 'burst' )
);
$paspartu_container->addChild(
	"paspartu_color",
	$paspartu_color
);

$paspartu_width = new BurstMikadoField(
	"text",
	"paspartu_width",
	"",
	esc_html__( "Passepartout Size (%)", 'burst' ),
	esc_html__( "Enter size amount for passepartout, default value is 2% (the percent is in relation to site width)", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$paspartu_container->addChild(
	"paspartu_width",
	$paspartu_width
);

$paspartu_border_on_edges = new BurstMikadoField(
	"yesno",
	"paspartu_border_on_edges",
	"no",
	esc_html__( "Border on passepartout edges", 'burst' ),
	esc_html__( "Enabling this option will display 1px border on passepartout, only if top and bottom passepartouts are fixed", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_paspartu_border_on_edges_container"
	)
);
$paspartu_container->addChild(
	"paspartu_border_on_edges",
	$paspartu_border_on_edges
);

$paspartu_border_on_edges_container = new BurstMikadoContainer(
	"paspartu_border_on_edges_container",
	"paspartu_border_on_edges",
	"no"
);
$paspartu_container->addChild(
	"paspartu_border_on_edges_container",
	$paspartu_border_on_edges_container
);

$paspartu_border_on_edges_color = new BurstMikadoField(
	"color",
	"paspartu_border_on_edges_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "Choose border color, default value is #e6e6e6", 'burst' )
);
$paspartu_border_on_edges_container->addChild(
	"paspartu_border_on_edges_color",
	$paspartu_border_on_edges_color
);

$paspartu_header_alignment = new BurstMikadoField(
	"yesno",
	"paspartu_header_alignment",
	"no",
	esc_html__( "Align Header With Passepartout", 'burst' ),
	esc_html__( "Enabling this option will align header content with passepartout borders", 'burst' )
);
$paspartu_container->addChild(
	"paspartu_header_alignment",
	$paspartu_header_alignment
);

$paspartu_below_tittle = new BurstMikadoField(
	"yesno",
	"paspartu_below_tittle",
	"no",
	esc_html__( "Passepartout Below Title", 'burst' ),
	esc_html__( "Enabling this option will place passepartout below title", 'burst' )
);
$paspartu_container->addChild(
	"paspartu_below_tittle",
	$paspartu_below_tittle
);

$paspartu_header_inside = new BurstMikadoField(
	"yesno",
	"paspartu_header_inside",
	"no",
	esc_html__( "Set Header Inside Passepartout", 'burst' ),
	esc_html__( "Enabling this option will set the whole header between the left and right border of passepartout", 'burst' )
);
$paspartu_container->addChild(
	"paspartu_header_inside",
	$paspartu_header_inside
);

$vertical_menu_inside_paspartu = new BurstMikadoField(
	"yesno",
	"vertical_menu_inside_paspartu",
	"yes",
	esc_html__( "Vertical Menu Inside Passepartout", 'burst' ),
	""
);
$paspartu_container->addChild(
	"vertical_menu_inside_paspartu",
	$vertical_menu_inside_paspartu
);

$paspartu_footer_alignment = new BurstMikadoField(
	"yesno",
	"paspartu_footer_alignment",
	"no",
	esc_html__( "Align Footer With Passepartout", 'burst' ),
	esc_html__( "Enabling this option will align footer content with passepartout borders", 'burst' )
);
$paspartu_container->addChild(
	"paspartu_footer_alignment",
	$paspartu_footer_alignment
);

$paspartu_on_top = new BurstMikadoField(
	"yesno",
	"paspartu_on_top",
	"yes",
	esc_html__( "Top Passepartout", 'burst' ),
	esc_html__( "Disabling this option will disable top part of passepartout", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_paspartu_on_top_fixed_container"
	)
);
$paspartu_container->addChild(
	"paspartu_on_top",
	$paspartu_on_top
);

$paspartu_on_top_fixed_container = new BurstMikadoContainer(
	"paspartu_on_top_fixed_container",
	"paspartu_on_top",
	"no"
);
$paspartu_container->addChild(
	"paspartu_on_top_fixed_container",
	$paspartu_on_top_fixed_container
);

$paspartu_on_top_fixed = new BurstMikadoField(
	"yesno",
	"paspartu_on_top_fixed",
	"no",
	esc_html__( "Fix Top Passepartout", 'burst' ),
	esc_html__( "Enabling this option will fix top part of passepartout to the top of the screen", 'burst' )
);
$paspartu_on_top_fixed_container->addChild(
	"paspartu_on_top_fixed",
	$paspartu_on_top_fixed
);

$paspartu_on_bottom_slider_container = new BurstMikadoContainer(
	"paspartu_on_bottom_slider_container",
	"",
	""
);
$paspartu_container->addChild(
	"paspartu_on_bottom_slider_container",
	$paspartu_on_bottom_slider_container
);

$paspartu_on_bottom_slider = new BurstMikadoField(
	"yesno",
	"paspartu_on_bottom_slider",
	"no",
	esc_html__( "Show Bottom Passepartout on Mikado Slider", 'burst' ),
	esc_html__( "Enabling this option will show bottom passepartout on Mikado Slider", 'burst' )
);
$paspartu_on_bottom_slider_container->addChild(
	"paspartu_on_bottom_slider",
	$paspartu_on_bottom_slider
);

$paspartu_on_bottom = new BurstMikadoField(
	"yesno",
	"paspartu_on_bottom",
	"yes",
	esc_html__( "Bottom Passepartout", 'burst' ),
	esc_html__( "Disabling this option will disable bottom part of passepartout", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_paspartu_on_bottom_fixed_container"
	)
);
$paspartu_container->addChild(
	"paspartu_on_bottom",
	$paspartu_on_bottom
);

$paspartu_on_bottom_fixed_container = new BurstMikadoContainer(
	"paspartu_on_bottom_fixed_container",
	"paspartu_on_bottom",
	"no"
);
$paspartu_container->addChild(
	"paspartu_on_bottom_fixed_container",
	$paspartu_on_bottom_fixed_container
);

$paspartu_on_bottom_fixed = new BurstMikadoField(
	"yesno",
	"paspartu_on_bottom_fixed",
	"no",
	esc_html__( "Fix Bottom Passepartout", 'burst' ),
	esc_html__( "Enabling this option will fix bottom part of passepartout to the bottom of the screen", 'burst' )
);
$paspartu_on_bottom_fixed_container->addChild(
	"paspartu_on_bottom_fixed",
	$paspartu_on_bottom_fixed
);

$paspartu_portfolio_full_width = new BurstMikadoField(
	"yesno",
	"paspartu_portfolio_full_width",
	"no",
	esc_html__( "Full Width Portfolio List in Passepartout", 'burst' ),
	esc_html__( "Enabling this option will set portfolio lists within the passepartout to full width of content; otherwise there is a small padding between portfolio and passepartout", 'burst' )
);
$paspartu_container->addChild(
	"paspartu_portfolio_full_width",
	$paspartu_portfolio_full_width
);

$preload_pattern_image_title = new BurstMikadoTitle(
	'preload_pattern_image_title',
	esc_html__( 'Preload Pattern Image', 'burst' )
);
$panel1->addChild(
	'preload_pattern_image_title',
	$preload_pattern_image_title
);

$preload_pattern_image = new BurstMikadoField(
	"image",
	"preload_pattern_image",
	BURST_MIKADO_ROOT . "/img/preload_pattern.png",
	esc_html__( "Preload Pattern Image", 'burst' ),
	esc_html__( "Choose preload pattern image to be displayed until images are loaded ", 'burst' )
);
$panel1->addChild(
	"preload_pattern_image",
	$preload_pattern_image
);

// Settings

$panel4 = new BurstMikadoPanel(
	esc_html__( "Behavior", 'burst' ),
	"settings"
);
$generalPage->addChild(
	"panel4",
	$panel4
);

$page_transitions = new BurstMikadoField(
	"select",
	"page_transitions",
	"0",
	esc_html__( "Page Transition", 'burst' ),
	esc_html__( 'Choose a a type of transition between loading pages. In order for animation to work properly, you must choose "Post name" in permalinks settings', 'burst' ),
	array(
		0 => "No animation",
		1 => "Up/Down",
		2 => "Fade",
		3 => "Up/Down (In) / Fade (Out)",
		4 => "Left/Right"
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"0" => "#mkdf_ajax_animate_header_container",
			"1" => "",
			"2" => "",
			"3" => "",
			"4" => ""
		),
		"show"       => array(
			"0" => "",
			"1" => "#mkdf_ajax_animate_header_container",
			"2" => "#mkdf_ajax_animate_header_container",
			"3" => "#mkdf_ajax_animate_header_container",
			"4" => "#mkdf_ajax_animate_header_container"
		)
	),
	"enable_grid_elements",
	array( "yes" )
);
$panel4->addChild(
	"page_transitions",
	$page_transitions
);

$page_transitions_notice = new BurstMikadoNotice(
	esc_html__( "Page Transition", 'burst' ),
	esc_html__( 'Choose a a type of transition between loading pages. In order for animation to work properly, you must choose "Post name" in permalinks settings', 'burst' ),
	esc_html__( "Page transition is disabled because VC Grid is Enabled", 'burst' ),
	"enable_grid_elements",
	"no"
);
$panel4->addChild(
	"page_transitions_notice",
	$page_transitions_notice
);

$ajax_animate_header_container = new BurstMikadoContainer(
	"ajax_animate_header_container",
	"page_transitions",
	"0"
);
$panel4->addChild(
	"ajax_animate_header_container",
	$ajax_animate_header_container
);

$ajax_animate_header = new BurstMikadoField(
	"yesno",
	"ajax_animate_header",
	"no",
	esc_html__( "Animate Header", 'burst' ),
	esc_html__( "Enabling this option will include the header area in the Ajax Page Transition Animations", 'burst' )
);
$ajax_animate_header_container->addChild(
	"ajax_animate_header",
	$ajax_animate_header
);

$loading_animation = new BurstMikadoField(
	"onoff",
	"loading_animation",
	"off",
	esc_html__( "Loading Animation", 'burst' ),
	esc_html__( "Enabling this option will display animation while page loads", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_loading_animation_container"
	)
);
$panel4->addChild(
	"loading_animation",
	$loading_animation
);

$loading_animation_container = new BurstMikadoContainer(
	"loading_animation_container",
	"loading_animation",
	"off"
);
$panel4->addChild(
	"loading_animation_container",
	$loading_animation_container
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Loading Animation Graphic", 'burst' ),
	esc_html__( "Choose type and color of preload graphic animation", 'burst' )
);
$loading_animation_container->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$loading_animation_spinner = new BurstMikadoField(
	"selectsimple",
	"loading_animation_spinner",
	"pulse",
	esc_html__( "Spinner", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	array(
		"pulse" => esc_html__( "Pulse", 'burst' ),
		"double_pulse" => esc_html__( "Double Pulse", 'burst' ),
		"cube" => esc_html__( "Cube", 'burst' ),
		"rotating_cubes" => esc_html__( "Rotating Cubes", 'burst' ),
		"stripes" => esc_html__( "Stripes", 'burst' ),
		"wave" => esc_html__( "Wave", 'burst' ),
		"two_rotating_circles" => esc_html__( "2 Rotating Circles", 'burst' ),
		"five_rotating_circles" => esc_html__( "5 Rotating Circles", 'burst' ),
		"atom" => esc_html__( "Atom", 'burst' ),
		"clock" => esc_html__( "Clock", 'burst' ),
		"mitosis" => esc_html__( "Mitosis", 'burst' ),
		"lines" => esc_html__( "Lines", 'burst' ),
		"fussion" => esc_html__( "Fussion", 'burst' ),
		"wave_circles" => esc_html__( "Wave Circles", 'burst' ),
		"pulse_circles" => esc_html__( "Pulse Circles", 'burst' )
	)
);
$row1->addChild(
	"loading_animation_spinner",
	$loading_animation_spinner
);

$spinner_color = new BurstMikadoField(
	"colorsimple",
	"spinner_color",
	"",
	esc_html__( "Spinner Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"spinner_color",
	$spinner_color
);

$loading_image = new BurstMikadoField(
	"image",
	"loading_image",
	"",
	esc_html__( "Loading Image", 'burst' ),
	esc_html__( 'Upload custom image to be displayed while page loads (Note: Page Transition must not be set to "No Animation")', 'burst' )
);
$loading_animation_container->addChild(
	"loading_image",
	$loading_image
);

$smooth_scroll = new BurstMikadoField(
	"yesno",
	"smooth_scroll",
	"yes",
	esc_html__( "Smooth Scroll", 'burst' ),
	esc_html__( "Enabling this option will perform a smooth scrolling effect on every page (except on Mac and touch devices)", 'burst' )
);
$panel4->addChild(
	"smooth_scroll",
	$smooth_scroll
);

$elements_animation_on_touch = new BurstMikadoField(
	"yesno",
	"elements_animation_on_touch",
	"no",
	esc_html__( "Elements Animation on Mobile/Touch Devices", 'burst' ),
	esc_html__( "Enabling this option will allow elements (shortcodes) to animate on mobile / touch devices", 'burst' )
);
$panel4->addChild(
	"elements_animation_on_touch",
	$elements_animation_on_touch
);

$element_appear_amount = new BurstMikadoField(
	"text",
	"element_appear_amount",
	"",
	esc_html__( "Element Appearance (px)", 'burst' ),
	esc_html__( "For animated elements, set distance (related to browser bottom) to start the animation", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel4->addChild(
	"element_appear_amount",
	$element_appear_amount
);

$ios_format_detection = new BurstMikadoField(
	"yesno",
	"ios_format_detection",
	"no",
	esc_html__( "Disable Format Detection in Safari on iOS", 'burst' ),
	esc_html__( "This option disables automatic detection of possible phone numbers in a webpage in Safari on iOS.", 'burst' )
);
$panel4->addChild(
	"ios_format_detection",
	$ios_format_detection
);

$show_back_button = new BurstMikadoField(
	"yesno",
	"show_back_button",
	"yes",
	esc_html__( "Show 'Back To Top Button'", 'burst' ),
	esc_html__( "Enabling this option will display a Back to Top button on every page", 'burst' )
);
$panel4->addChild(
	"show_back_button",
	$show_back_button
);

$responsiveness = new BurstMikadoField(
	"yesno",
	"responsiveness",
	"yes",
	esc_html__( "Responsiveness", 'burst' ),
	esc_html__( "Enabling this option will make all pages responsive", 'burst' )
);
$panel4->addChild(
	"responsiveness",
	$responsiveness
);

$favicon_image = new BurstMikadoField(
	"image",
	"favicon_image",
	BURST_MIKADO_ROOT . "/img/favicon.ico",
	esc_html__( "Favicon Image", 'burst' ),
	esc_html__( "Choose a favicon image to be displayed", 'burst' )
);
$panel4->addChild(
	"favicon_image",
	$favicon_image
);

$internal_no_ajax_links = new BurstMikadoField(
	"textarea",
	"internal_no_ajax_links",
	"",
	esc_html__( "List of Internal URLs Loaded Without AJAX (Separated With Comma)", 'burst' ),
	esc_html__( "To disable AJAX transitions on certain pages, enter their full URLs here (for example: http://www.mydomain.com/forum/)", 'burst' )
);
$panel4->addChild(
	"internal_no_ajax_links",
	$internal_no_ajax_links
);

// Custom Code

$panel3 = new BurstMikadoPanel(
	esc_html__( "Custom Code", 'burst' ),
	"custom_code"
);
$generalPage->addChild(
	"panel3",
	$panel3
);

$custom_css = new BurstMikadoField(
	"textarea",
	"custom_css",
	"",
	esc_html__( "Custom CSS", 'burst' ),
	esc_html__( "Enter your custom CSS here", 'burst' )
);
$panel3->addChild(
	"custom_css",
	$custom_css
);

$custom_js = new BurstMikadoField(
	"textarea",
	"custom_js",
	"",
	esc_html__( "Custom JS", 'burst' ),
	esc_html__( 'Enter your custom Javascript here (jQuery selector is "$j" because of the conflict mode)', 'burst' )
);
$panel3->addChild(
	"custom_js",
	$custom_js
);

// SEO

$panel2 = new BurstMikadoPanel(
	esc_html__( "SEO", 'burst' ),
	"seo"
);
$generalPage->addChild(
	"panel2",
	$panel2
);

$disable_mkd_seo = new BurstMikadoField(
	"yesno",
	"disable_mkd_seo",
	"no",
	esc_html__( "Disable SEO", 'burst' ),
	esc_html__( "Enabling this option will turn off SEO", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#mkdf_disable_mkd_seo_container",
		"dependence_show_on_yes" => ""
	)
);
$panel2->addChild(
	"disable_mkd_seo",
	$disable_mkd_seo
);

$disable_mkd_seo_container = new BurstMikadoContainer(
	"disable_mkd_seo_container",
	"disable_mkd_seo",
	"yes"
);
$panel2->addChild(
	"disable_mkd_seo_container",
	$disable_mkd_seo_container
);

$meta_keywords = new BurstMikadoField(
	"textarea",
	"meta_keywords",
	"",
	esc_html__( "Meta Keywords", 'burst' ),
	esc_html__( "Add relevant keywords separated with commas to improve SEO", 'burst' )
);
$disable_mkd_seo_container->addChild(
	"meta_keywords",
	$meta_keywords
);

$meta_description = new BurstMikadoField(
	"textarea",
	"meta_description",
	"",
	esc_html__( "Meta Description", 'burst' ),
	esc_html__( "Enter a short description of the website for SEO", 'burst' )
);
$disable_mkd_seo_container->addChild(
	"meta_description",
	$meta_description
);

// Google Maps

$panel_google_maps = new BurstMikadoPanel(
	esc_html__( "Google Maps", 'burst' ),
	"google_maps"
);
$generalPage->addChild(
	"panel_google_maps",
	$panel_google_maps
);

$google_maps_api_key = new BurstMikadoField(
	"text",
	"google_maps_api_key",
	"",
	esc_html__( "Google Maps Api Key", 'burst' ),
	esc_html__( "Insert your Google Maps API key here.", 'burst' )
);
$panel_google_maps->addChild(
	"google_maps_api_key",
	$google_maps_api_key
);

//Maintenance Panel

$mkd_pages = array();
$pages     = get_posts(
	array(
		'post_type' => esc_html__( 'page', 'burst' ),
		'meta_key' => esc_html__( '_wp_page_template', 'burst' ),
		'meta_value' => esc_html__( 'landing_page.php', 'burst' )
	)
);
foreach ( $pages as $page ) {
	$mkd_pages[ $page->ID ] = $page->post_title;
}

$maintenance_panel = new BurstMikadoPanel(
	esc_html__( "Maintenance", 'burst' ),
	"maintenance_panel"
);
$generalPage->addChild(
	"maintenance_panel",
	$maintenance_panel
);

$maintenance_mode = new BurstMikadoField(
	"yesno",
	"mkd_maintenance_mode",
	"no",
	esc_html__( "Maintenance Mode", 'burst' ),
	esc_html__( "Turn on this option if you want to enable maintenance mode on your site", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_maintenance_container"
	)
);
$maintenance_panel->addChild(
	"mkd_maintenance_mode",
	$maintenance_mode
);

$maintenance_container = new BurstMikadoContainer(
	"maintenance_container",
	"mkd_maintenance_mode",
	"no"
);
$maintenance_panel->addChild(
	"maintenance_container",
	$maintenance_container
);

$maintenance_page = new BurstMikadoField(
	"selectblank",
	"mkd_maintenance_page",
	"",
	esc_html__( 'Maintenance Page', 'burst' ),
	esc_html__( 'Choose maintenance page to display when user visits your site', 'burst' ),
	$mkd_pages
);
$maintenance_container->addChild(
	"mkd_maintenance_page",
	$maintenance_page
);