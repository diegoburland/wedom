<?php

$elementsPage = new BurstMikadoAdminPage(
	"6",
	esc_html__( "Elements", 'burst' ),
	"icon_genius"
);
$burst_mikado_Framework->mkdOptions->addAdminPage(
	"elementsPage",
	$elementsPage
);

//Accordions and Toogles

$panel29 = new BurstMikadoPanel(
	esc_html__( "Accordions and  Toggles", 'burst' ),
	"accordions_toogles_panel"
);
$elementsPage->addChild(
	"panel29",
	$panel29
);

$accordion_regular_subtitle = new BurstMikadoTitle(
	"accordion_regular_subtitle",
	esc_html__( "Accordion & Toggle Title", 'burst' )
);
$panel29->addChild(
	"accordion_regular_subtitle",
	$accordion_regular_subtitle
);

$group4 = new BurstMikadoGroup(
	esc_html__( "Title Style", 'burst' ),
	esc_html__( "Define Accordion & Toggle Title style", 'burst' )
);
$panel29->addChild(
	"group4",
	$group4
);

$row1 = new BurstMikadoRow( true );
$group4->addChild(
	"row1",
	$row1
);

$accordion_regular_title_color = new BurstMikadoField(
	"colorsimple",
	"accordion_regular_title_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"accordion_regular_title_color",
	$accordion_regular_title_color
);

$accordion_regular_title_hover_color = new BurstMikadoField(
	"colorsimple",
	"accordion_regular_title_hover_color",
	"",
	esc_html__( "Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"accordion_regular_title_hover_color",
	$accordion_regular_title_hover_color
);

$accordion_regular_title_fontsize = new BurstMikadoField(
	"textsimple",
	"accordion_regular_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"accordion_regular_title_fontsize",
	$accordion_regular_title_fontsize
);

$accordion_regular_title_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"accordion_regular_title_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row1->addChild(
	"accordion_regular_title_fontweight",
	$accordion_regular_title_fontweight
);

$accordion_toogle_subtitle = new BurstMikadoTitle(
	"accordion_toogle_subtitle",
	esc_html__( "Accordion & Toggle Boxed Title", 'burst' )
);
$panel29->addChild(
	"accordion_toogle_subtitle",
	$accordion_toogle_subtitle
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Title Style", 'burst' ),
	esc_html__( "Define Accordion & Toggle Boxed Title style", 'burst' )
);
$panel29->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow( true );
$group1->addChild(
	"row1",
	$row1
);

$accordion_toogle_title_color = new BurstMikadoField(
	"colorsimple",
	"accordion_toogle_title_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"accordion_toogle_title_color",
	$accordion_toogle_title_color
);

$accordion_toogle_title_hover_color = new BurstMikadoField(
	"colorsimple",
	"accordion_toogle_title_hover_color",
	"",
	esc_html__( "Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"accordion_toogle_title_hover_color",
	$accordion_toogle_title_hover_color
);

$accordion_toogle_title_fontsize = new BurstMikadoField(
	"textsimple",
	"accordion_toogle_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"accordion_toogle_title_fontsize",
	$accordion_toogle_title_fontsize
);

$accordion_toogle_title_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"accordion_toogle_title_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row1->addChild(
	"accordion_toogle_title_fontweight",
	$accordion_toogle_title_fontweight
);

$accordion_toogle_mark_subtitle = new BurstMikadoTitle(
	"accordion_toogle_mark_subtitle",
	esc_html__( "Accordion & Toggle Mark", 'burst' )
);
$panel29->addChild(
	"accordion_toogle_mark_subtitle",
	$accordion_toogle_mark_subtitle
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Mark Style", 'burst' ),
	esc_html__( "Define mark style", 'burst' )
);
$panel29->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow( true );
$group2->addChild(
	"row1",
	$row1
);

$accordion_mark_icon_color = new BurstMikadoField(
	"colorsimple",
	"accordion_mark_icon_color",
	"",
	esc_html__( "Icon Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"accordion_mark_icon_color",
	$accordion_mark_icon_color
);

$accordion_mark_icon_hover_color = new BurstMikadoField(
	"colorsimple",
	"accordion_mark_icon_hover_color",
	"",
	esc_html__( "Icon Hover/Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"accordion_mark_icon_hover_color",
	$accordion_mark_icon_hover_color
);

$accordion_mark_icon_fontsize = new BurstMikadoField(
	"textsimple",
	"accordion_mark_icon_fontsize",
	"",
	esc_html__( "Icon Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"accordion_mark_icon_fontsize",
	$accordion_mark_icon_fontsize
);

$accordion_mark_icon_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"accordion_mark_icon_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row1->addChild(
	"accordion_mark_icon_fontweight",
	$accordion_mark_icon_fontweight
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);

$accordion_mark_background_color = new BurstMikadoField(
	"colorsimple",
	"accordion_mark_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"accordion_mark_background_color",
	$accordion_mark_background_color
);

$accordion_mark_background_hover_color = new BurstMikadoField(
	"colorsimple",
	"accordion_mark_background_hover_color",
	"",
	esc_html__( "Background Hover/Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"accordion_mark_background_hover_color",
	$accordion_mark_background_hover_color
);

$row3 = new BurstMikadoRow( true );
$group2->addChild(
	"row3",
	$row3
);

$accordion_mark_border_color = new BurstMikadoField(
	"colorsimple",
	"accordion_mark_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"accordion_mark_border_color",
	$accordion_mark_border_color
);

$accordion_mark_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"accordion_mark_border_hover_color",
	"",
	esc_html__( "Border Hover/Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"accordion_mark_border_hover_color",
	$accordion_mark_border_hover_color
);

$accordion_mark_border_radius = new BurstMikadoField(
	"textsimple",
	"accordion_mark_border_radius",
	"",
	esc_html__( "Border Radius", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"accordion_mark_border_radius",
	$accordion_mark_border_radius
);

$accordion_toggle_boxed_subtitle = new BurstMikadoTitle(
	"accordion_toggle_boxed_subtitle",
	esc_html__( "Accordion & Toggle Boxed Style", 'burst' )
);
$panel29->addChild(
	"accordion_toggle_boxed_subtitle",
	$accordion_toggle_boxed_subtitle
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Boxed Style", 'burst' ),
	esc_html__( "Define boxed style", 'burst' )
);
$panel29->addChild(
	"group3",
	$group3
);

$row1 = new BurstMikadoRow( true );
$group3->addChild(
	"row1",
	$row1
);

$accordion_toggle_boxed_background_color = new BurstMikadoField(
	"colorsimple",
	"accordion_toggle_boxed_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"accordion_toggle_boxed_background_color",
	$accordion_toggle_boxed_background_color
);

$accordion_toggle_boxed_background_hover_color = new BurstMikadoField(
	"colorsimple",
	"accordion_toggle_boxed_background_hover_color",
	"",
	esc_html__( "Background Hover/Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"accordion_toggle_boxed_background_hover_color",
	$accordion_toggle_boxed_background_hover_color
);

$accordion_toggle_boxed_border_color = new BurstMikadoField(
	"colorsimple",
	"accordion_toggle_boxed_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"accordion_toggle_boxed_border_color",
	$accordion_toggle_boxed_border_color
);

$accordion_toggle_boxed_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"accordion_toggle_boxed_border_hover_color",
	"",
	esc_html__( "Border Hover/Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"accordion_toggle_boxed_border_hover_color",
	$accordion_toggle_boxed_border_hover_color
);

$row2 = new BurstMikadoRow( true );
$group3->addChild(
	"row2",
	$row2
);

$accordion_toggle_boxed_border_radius = new BurstMikadoField(
	"textsimple",
	"accordion_toggle_boxed_border_radius",
	"",
	esc_html__( "Border Radius", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"accordion_toggle_boxed_border_radius",
	$accordion_toggle_boxed_border_radius
);

$accordion_toggle_boxed_content_background_color = new BurstMikadoField(
	"colorsimple",
	"accordion_toggle_boxed_content_background_color",
	"",
	esc_html__( "Content Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"accordion_toggle_boxed_content_background_color",
	$accordion_toggle_boxed_content_background_color
);

$accordion_toggle_boxed_background_pattern = new BurstMikadoField(
	"yesno",
	"accordion_toggle_boxed_background_pattern",
	"no",
	esc_html__( "Boxed Style Pattern", 'burst' ),
	"Enabling this option will add pattern background to boxed style.
		",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_accordion_toggle_boxed_background_pattern_image_container"
	)
);
$panel29->addChild(
	"accordion_toggle_boxed_background_pattern",
	$accordion_toggle_boxed_background_pattern
);

$accordion_toggle_boxed_background_pattern_image_container = new BurstMikadoContainer(
	"accordion_toggle_boxed_background_pattern_image_container",
	"accordion_toggle_boxed_background_pattern",
	"no"
);
$panel29->addChild(
	"accordion_toggle_boxed_background_pattern_image_container",
	$accordion_toggle_boxed_background_pattern_image_container
);

$group27 = new BurstMikadoGroup(
	esc_html__( "Image", 'burst' ),
	esc_html__( "Choose pattern image for boxed style", 'burst' )
);
$accordion_toggle_boxed_background_pattern_image_container->addChild(
	"group27",
	$group27
);
$row3 = new BurstMikadoRow();
$group27->addChild(
	"row3",
	$row3
);

$accordion_toggle_boxed_background_pattern_image = new BurstMikadoField(
	"imagesimple",
	"accordion_toggle_boxed_background_pattern_image",
	"",
	esc_html__( "Pattern image", 'burst' ),
	""
);
$row3->addChild(
	"accordion_toggle_boxed_background_pattern_image",
	$accordion_toggle_boxed_background_pattern_image
);

$group5 = new BurstMikadoGroup(
	esc_html__( "Mark Style", 'burst' ),
	esc_html__( "Define mark style", 'burst' )
);
$panel29->addChild(
	"group5",
	$group5
);

$row1 = new BurstMikadoRow( true );
$group5->addChild(
	"row1",
	$row1
);

$accordion_boxed_mark_icon_color = new BurstMikadoField(
	"colorsimple",
	"accordion_boxed_mark_icon_color",
	"",
	esc_html__( "Icon Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"accordion_boxed_mark_icon_color",
	$accordion_boxed_mark_icon_color
);

$accordion_boxed_mark_icon_hover_color = new BurstMikadoField(
	"colorsimple",
	"accordion_boxed_mark_icon_hover_color",
	"",
	esc_html__( "Icon Hover/Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"accordion_boxed_mark_icon_hover_color",
	$accordion_boxed_mark_icon_hover_color
);

$accordion_boxed_mark_icon_fontsize = new BurstMikadoField(
	"textsimple",
	"accordion_boxed_mark_icon_fontsize",
	"",
	esc_html__( "Icon Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"accordion_boxed_mark_icon_fontsize",
	$accordion_boxed_mark_icon_fontsize
);

$accordion_boxed_mark_icon_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"accordion_boxed_mark_icon_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row1->addChild(
	"accordion_boxed_mark_icon_fontweight",
	$accordion_boxed_mark_icon_fontweight
);

//Back to top

$panel1 = new BurstMikadoPanel(
	"esc_html__( 'Back to Top', 'burst' ) Link Button",
	"back_to_top_panel"
);
$elementsPage->addChild(
	"panel1",
	$panel1
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Background", 'burst' ),
	esc_html__( 'Choose background for "Back to Top"', 'burst' )
);
$panel1->addChild(
	"group1",
	$group1
);
$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$back_to_top_background_color = new BurstMikadoField(
	"colorsimple",
	"back_to_top_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"back_to_top_background_color",
	$back_to_top_background_color
);

$back_to_top_background_hover_color = new BurstMikadoField(
	"colorsimple",
	"back_to_top_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"back_to_top_background_hover_color",
	$back_to_top_background_hover_color
);

$back_to_top_background_transparency = new BurstMikadoField(
	"textsimple",
	"back_to_top_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"back_to_top_background_transparency",
	$back_to_top_background_transparency
);

$back_to_top_background_hover_transparency = new BurstMikadoField(
	"textsimple",
	"back_to_top_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"back_to_top_background_hover_transparency",
	$back_to_top_background_hover_transparency
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Border", 'burst' ),
	esc_html__( "Choose Border style for Back to Top", 'burst' )
);
$panel1->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$back_to_top_border_color = new BurstMikadoField(
	"colorsimple",
	"back_to_top_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"back_to_top_border_color",
	$back_to_top_border_color
);

$back_to_top_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"back_to_top_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"back_to_top_border_hover_color",
	$back_to_top_border_hover_color
);

$back_to_top_border_width = new BurstMikadoField(
	"textsimple",
	"back_to_top_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"back_to_top_border_width",
	$back_to_top_border_width
);

$back_to_top_border_radius = new BurstMikadoField(
	"textsimple",
	"back_to_top_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"back_to_top_border_radius",
	$back_to_top_border_radius
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);

$back_to_top_border_transparency = new BurstMikadoField(
	"textsimple",
	"back_to_top_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"back_to_top_border_transparency",
	$back_to_top_border_transparency
);

$back_to_top_border_hover_transparency = new BurstMikadoField(
	"textsimple",
	"back_to_top_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"back_to_top_border_hover_transparency",
	$back_to_top_border_hover_transparency
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Button Size", 'burst' ),
	esc_html__( 'Choose Size for "Back to Top" button', 'burst' )
);
$panel1->addChild(
	"group3",
	$group3
);

$row1 = new BurstMikadoRow();
$group3->addChild(
	"row1",
	$row1
);

$back_to_top_height = new BurstMikadoField(
	"textsimple",
	"back_to_top_height",
	"",
	esc_html__( "Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"back_to_top_height",
	$back_to_top_height
);
$back_to_top_width = new BurstMikadoField(
	"textsimple",
	"back_to_top_width",
	"",
	esc_html__( "Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"back_to_top_width",
	$back_to_top_width
);

$group4 = new BurstMikadoGroup(
	esc_html__( "Button Position", 'burst' ),
	esc_html__( 'Define button alignment and margin bottom', 'burst' )
);
$panel1->addChild(
	"group4",
	$group4
);

$row1 = new BurstMikadoRow();
$group4->addChild(
	"row1",
	$row1
);

$back_to_top_position = new BurstMikadoField(
	"selectsimple",
	"back_to_top_position",
	"",
	esc_html__( "Button Alignment", 'burst' ),
	esc_html__( 'Choose alignment for "Back to Top" button', 'burst' ),
	array(
		"right" => esc_html__( "Right", 'burst' ),
		"left" => esc_html__( "Left", 'burst' ),
		"center" => esc_html__( "Center", 'burst' ),
	)
);
$row1->addChild(
	"back_to_top_position",
	$back_to_top_position
);

$back_to_top_button_margin_bottom = new BurstMikadoField(
	"textsimple",
	"back_to_top_button_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'burst' ),
	esc_html__( "Enter bottom margin", 'burst' )
);
$row1->addChild(
	"back_to_top_button_margin_bottom",
	$back_to_top_button_margin_bottom
);

$back_to_top_type = new BurstMikadoField(
	"select",
	"back_to_top_type",
	"arrow",
	esc_html__( "Button Text Type", 'burst' ),
	esc_html__( 'Choose "Back to Top" button type ', 'burst' ),
	array(
		"arrow" => esc_html__( "Arrow", 'burst' ),
		"text" => esc_html__( "Text", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"arrow" => "#mkdf_back_to_top_type_text_container",
			"text"  => "#mkdf_back_to_top_type_arrow_container"
		),
		"show"       => array(
			"arrow" => "#mkdf_back_to_top_type_arrow_container",
			"text"  => "#mkdf_back_to_top_type_text_container"
		)
	)
);
$panel1->addChild(
	"back_to_top_type",
	$back_to_top_type
);

$back_to_top_type_arrow_container = new BurstMikadoContainer(
	"back_to_top_type_arrow_container",
	"back_to_top_type",
	"text"
);
$panel1->addChild(
	"back_to_top_type_arrow_container",
	$back_to_top_type_arrow_container
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Arrow Icon Style", 'burst' ),
	esc_html__( "Define style for arrow icon", 'burst' )
);
$back_to_top_type_arrow_container->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$show_back_button_icon = new BurstMikadoField(
	'selectsimple',
	'show_back_button_icon',
	'',
	esc_html__( 'Choose Icon', 'burst' ),
	esc_html__( 'Choose Icon', 'burst' ),
	burst_mikado_return_options_arrows_up_type()
);
$row1->addChild(
	'show_back_button_icon',
	$show_back_button_icon
);

$back_to_top_arrow_size = new BurstMikadoField(
	"textsimple",
	"back_to_top_arrow_size",
	"14",
	esc_html__( "Icon Size (px)", 'burst' ),
	esc_html__( "Default value is 14	", 'burst' )
);
$row1->addChild(
	"back_to_top_arrow_size",
	$back_to_top_arrow_size
);

$back_to_top_arrow_color = new BurstMikadoField(
	"colorsimple",
	"back_to_top_arrow_color",
	"",
	esc_html__( "Icon Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"back_to_top_arrow_color",
	$back_to_top_arrow_color
);

$back_to_top_arrow_hover_color = new BurstMikadoField(
	"colorsimple",
	"back_to_top_arrow_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"back_to_top_arrow_hover_color",
	$back_to_top_arrow_hover_color
);

$back_to_top_type_text_container = new BurstMikadoContainer(
	"back_to_top_type_text_container",
	"back_to_top_type",
	"arrow"
);
$panel1->addChild(
	"back_to_top_type_text_container",
	$back_to_top_type_text_container
);

$back_to_top_text = new BurstMikadoField(
	"text",
	"back_to_top_text",
	"",
	esc_html__( "Back to Top Text", 'burst' ),
	esc_html__( "Enter text for 'Back to Top' button", 'burst' )
);
$back_to_top_type_text_container->addChild(
	"back_to_top_text",
	$back_to_top_text
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Button Text Color", 'burst' ),
	esc_html__( "Define Color for Text Type", 'burst' )
);
$back_to_top_type_text_container->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$back_to_top_text_color = new BurstMikadoField(
	"colorsimple",
	"back_to_top_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"back_to_top_text_color",
	$back_to_top_text_color
);

$back_to_top_text_hover_color = new BurstMikadoField(
	"colorsimple",
	"back_to_top_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"back_to_top_text_hover_color",
	$back_to_top_text_hover_color
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Button Text Style", 'burst' ),
	esc_html__( "Define Style for Text Type", 'burst' )
);
$back_to_top_type_text_container->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$back_to_top_text_fontsize = new BurstMikadoField(
	"textsimple",
	"back_to_top_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"back_to_top_text_fontsize",
	$back_to_top_text_fontsize
);

$back_to_top_text_lineheight = new BurstMikadoField(
	"textsimple",
	"back_to_top_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"back_to_top_text_lineheight",
	$back_to_top_text_lineheight
);

$back_to_top_text_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"back_to_top_text_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"back_to_top_text_texttransform",
	$back_to_top_text_texttransform
);

$back_to_top_text_fontfamily = new BurstMikadoField(
	"fontsimple",
	"back_to_top_text_fontfamily",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"back_to_top_text_fontfamily",
	$back_to_top_text_fontfamily
);

$row2 = new BurstMikadoRow();
$group2->addChild(
	"row2",
	$row2
);

$back_to_top_text_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"back_to_top_text_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"back_to_top_text_fontstyle",
	$back_to_top_text_fontstyle
);

$back_to_top_text_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"back_to_top_text_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"back_to_top_text_fontweight",
	$back_to_top_text_fontweight
);

$back_to_top_text_letterspacing = new BurstMikadoField(
	"textsimple",
	"back_to_top_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"back_to_top_text_letterspacing",
	$back_to_top_text_letterspacing
);

//Buttons

$panel2 = new BurstMikadoPanel(
	esc_html__( "Buttons", 'burst' ),
	"buttons_panel"
);
$elementsPage->addChild(
	"panel2",
	$panel2
);

$button_default_section = new BurstMikadoTitle(
	"button_default_section",
	esc_html__( "Default Button", 'burst' )
);
$panel2->addChild(
	"button_default_section",
	$button_default_section
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Text Style", 'burst' ),
	esc_html__( "Define text style", 'burst' )
);
$panel2->addChild(
	"group1",
	$group1
);
$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);
$button_title_google_fonts = new BurstMikadoField(
	"fontsimple",
	"button_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"button_title_google_fonts",
	$button_title_google_fonts
);

$button_title_fontsize = new BurstMikadoField(
	"textsimple",
	"button_title_fontsize",
	"",
	esc_html__( "Text Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"button_title_fontsize",
	$button_title_fontsize
);

$button_title_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"button_title_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row1->addChild(
	"button_title_fontstyle",
	$button_title_fontstyle
);

$button_title_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"button_title_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row1->addChild(
	"button_title_fontweight",
	$button_title_fontweight
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);
$button_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"button_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"button_title_letter_spacing",
	$button_title_letter_spacing
);

$button_title_lineheight = new BurstMikadoField(
	"textsimple",
	"button_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"button_title_lineheight",
	$button_title_lineheight
);

$button_title_color = new BurstMikadoField(
	"colorsimple",
	"button_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"button_title_color",
	$button_title_color
);

$button_title_hovercolor = new BurstMikadoField(
	"colorsimple",
	"button_title_hovercolor",
	"",
	esc_html__( "Hover Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"button_title_hovercolor",
	$button_title_hovercolor
);

$row3 = new BurstMikadoRow( true );
$group1->addChild(
	"row3",
	$row3
);

$button_title_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"button_title_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row3->addChild(
	"button_title_texttransform",
	$button_title_texttransform
);

$group21 = new BurstMikadoGroup(
	esc_html__( "Icon Style", 'burst' ),
	esc_html__( "Define icon style", 'burst' )
);
$panel2->addChild(
	"group21",
	$group21
);
$row1 = new BurstMikadoRow();
$group21->addChild(
	"row1",
	$row1
);

$button_icon_size = new BurstMikadoField(
	"textsimple",
	"button_icon_size",
	"",
	esc_html__( "Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"button_icon_size",
	$button_icon_size
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Background", 'burst' ),
	esc_html__( "Define background", 'burst' )
);
$panel2->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$button_backgroundcolor = new BurstMikadoField(
	"colorsimple",
	"button_backgroundcolor",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"button_backgroundcolor",
	$button_backgroundcolor
);

$button_backgroundcolor_hover = new BurstMikadoField(
	"colorsimple",
	"button_backgroundcolor_hover",
	"",
	esc_html__( "Background Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"button_backgroundcolor_hover",
	$button_backgroundcolor_hover
);

$button_background_pattern_image = new BurstMikadoField(
	"imagesimple",
	"button_background_pattern_image",
	"",
	esc_html__( "Pattern image", 'burst' ),
	""
);
$row1->addChild(
	"button_background_pattern_image",
	$button_background_pattern_image
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Border Style", 'burst' ),
	esc_html__( "Define border style", 'burst' )
);
$panel2->addChild(
	"group3",
	$group3
);

$row1 = new BurstMikadoRow();
$group3->addChild(
	"row1",
	$row1
);

$button_border_color = new BurstMikadoField(
	"colorsimple",
	"button_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"button_border_color",
	$button_border_color
);

$button_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"button_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"button_border_hover_color",
	$button_border_hover_color
);

$button_border_width = new BurstMikadoField(
	"textsimple",
	"button_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"button_border_width",
	$button_border_width
);

$button_border_radius = new BurstMikadoField(
	"textsimple",
	"button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"button_border_radius",
	$button_border_radius
);

$button_padding = new BurstMikadoField(
	"text",
	"button_padding",
	"",
	esc_html__( "Padding Left/Right (px) ", 'burst' ),
	esc_html__( "Define padding", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"button_padding",
	$button_padding
);

$button_hover_animation = new BurstMikadoField(
	"selectblank",
	"button_hover_animation",
	"",
	esc_html__( "Button Hover Animation", 'burst' ),
	esc_html__( "Choose a hover animation for button", 'burst' ),
	array(
		"fill_from_top" => esc_html__( "Fill From Top", 'burst' ),
		"fill_from_left" => esc_html__( "Fill From Left", 'burst' ),
		"fill_from_bottom" => esc_html__( "Fill From Bottom", 'burst' ),
	)
);
$panel2->addChild(
	"button_hover_animation",
	$button_hover_animation
);

$button_predefined_white_section = new BurstMikadoTitle(
	"button_predefined_white_section",
	esc_html__( "Predefined White Button", 'burst' )
);
$panel2->addChild(
	"button_predefined_white_section",
	$button_predefined_white_section
);

$group5 = new BurstMikadoGroup(
	esc_html__( "Text Style", 'burst' ),
	esc_html__( "Define text style.", 'burst' )
);
$panel2->addChild(
	"group5",
	$group5
);
$row1 = new BurstMikadoRow();
$group5->addChild(
	"row1",
	$row1
);

$button_white_text_color = new BurstMikadoField(
	"colorsimple",
	"button_white_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"button_white_text_color",
	$button_white_text_color
);

$button_white_text_color_hover = new BurstMikadoField(
	"colorsimple",
	"button_white_text_color_hover",
	"",
	esc_html__( "Hover Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"button_white_text_color_hover",
	$button_white_text_color_hover
);

$group6 = new BurstMikadoGroup(
	esc_html__( "Background", 'burst' ),
	esc_html__( "Define background", 'burst' )
);
$panel2->addChild(
	"group6",
	$group6
);
$row1 = new BurstMikadoRow();
$group6->addChild(
	"row1",
	$row1
);

$button_white_background_color = new BurstMikadoField(
	"colorsimple",
	"button_white_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"button_white_background_color",
	$button_white_background_color
);

$button_white_background_color_hover = new BurstMikadoField(
	"colorsimple",
	"button_white_background_color_hover",
	"",
	esc_html__( "Background Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"button_white_background_color_hover",
	$button_white_background_color_hover
);

$button_white_background_pattern_image = new BurstMikadoField(
	"imagesimple",
	"button_white_background_pattern_image",
	"",
	esc_html__( "Pattern image", 'burst' ),
	""
);
$row1->addChild(
	"button_white_background_pattern_image",
	$button_white_background_pattern_image
);

$group7 = new BurstMikadoGroup(
	esc_html__( "Border Style", 'burst' ),
	esc_html__( "Define border style.", 'burst' )
);
$panel2->addChild(
	"group7",
	$group7
);

$row1 = new BurstMikadoRow();
$group7->addChild(
	"row1",
	$row1
);

$button_white_border_color = new BurstMikadoField(
	"colorsimple",
	"button_white_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"button_white_border_color",
	$button_white_border_color
);

$button_white_border_color_hover = new BurstMikadoField(
	"colorsimple",
	"button_white_border_color_hover",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"button_white_border_color_hover",
	$button_white_border_color_hover
);

$button_small_section = new BurstMikadoTitle(
	"button_small_section",
	esc_html__( "Small Button", 'burst' )
);
$panel2->addChild(
	"button_small_section",
	$button_small_section
);

$group14 = new BurstMikadoGroup(
	esc_html__( "Text Style", 'burst' ),
	esc_html__( "Define text style", 'burst' )
);
$panel2->addChild(
	"group14",
	$group14
);
$row1 = new BurstMikadoRow();
$group14->addChild(
	"row1",
	$row1
);

$small_button_fontsize = new BurstMikadoField(
	"textsimple",
	"small_button_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"small_button_fontsize",
	$small_button_fontsize
);

$small_button_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"small_button_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row1->addChild(
	"small_button_fontweight",
	$small_button_fontweight
);

$small_button_lineheight = new BurstMikadoField(
	"textsimple",
	"small_button_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"small_button_lineheight",
	$small_button_lineheight
);

$group22 = new BurstMikadoGroup(
	esc_html__( "Icon Style", 'burst' ),
	esc_html__( "Define icon style", 'burst' )
);
$panel2->addChild(
	"group22",
	$group22
);
$row1 = new BurstMikadoRow();
$group22->addChild(
	"row1",
	$row1
);

$small_button_icon_size = new BurstMikadoField(
	"textsimple",
	"small_button_icon_size",
	"",
	esc_html__( "Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"small_button_icon_size",
	$small_button_icon_size
);

$small_button_padding = new BurstMikadoField(
	"text",
	"small_button_padding",
	"",
	esc_html__( "Padding left/right (px) ", 'burst' ),
	esc_html__( "Define padding", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"small_button_padding",
	$small_button_padding
);

$small_button_border_radius = new BurstMikadoField(
	"text",
	"small_button_border_radius",
	"",
	esc_html__( "Border radius (px)", 'burst' ),
	esc_html__( "Define border", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"small_button_border_radius",
	$small_button_border_radius
);

$button_large_section = new BurstMikadoTitle(
	"button_large_section",
	esc_html__( "Large Button", 'burst' )
);
$panel2->addChild(
	"button_large_section",
	$button_large_section
);

$group17 = new BurstMikadoGroup(
	esc_html__( "Text Style", 'burst' ),
	esc_html__( "Define text style", 'burst' )
);
$panel2->addChild(
	"group17",
	$group17
);

$row1 = new BurstMikadoRow();
$group17->addChild(
	"row1",
	$row1
);

$large_button_fontsize = new BurstMikadoField(
	"textsimple",
	"large_button_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"large_button_fontsize",
	$large_button_fontsize
);

$large_button_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"large_button_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row1->addChild(
	"large_button_fontweight",
	$large_button_fontweight
);

$large_button_lineheight = new BurstMikadoField(
	"textsimple",
	"large_button_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"large_button_lineheight",
	$large_button_lineheight
);

$group23 = new BurstMikadoGroup(
	esc_html__( "Icon Style", 'burst' ),
	esc_html__( "Define icon style", 'burst' )
);
$panel2->addChild(
	"group23",
	$group23
);
$row1 = new BurstMikadoRow();
$group23->addChild(
	"row1",
	$row1
);

$large_button_icon_size = new BurstMikadoField(
	"textsimple",
	"large_button_icon_size",
	"",
	esc_html__( "Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"large_button_icon_size",
	$large_button_icon_size
);

$large_button_padding = new BurstMikadoField(
	"text",
	"large_button_padding",
	"",
	esc_html__( "Padding Left/Right (px) ", 'burst' ),
	esc_html__( "Define padding", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"large_button_padding",
	$large_button_padding
);

$large_button_border_radius = new BurstMikadoField(
	"text",
	"large_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "Define border", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"large_button_border_radius",
	$large_button_border_radius
);

$button_extra_large_section = new BurstMikadoTitle(
	"button_extra_large_section",
	esc_html__( "Extra Large Button", 'burst' )
);
$panel2->addChild(
	"button_extra_large_section",
	$button_extra_large_section
);

$group20 = new BurstMikadoGroup(
	esc_html__( "Text Style", 'burst' ),
	esc_html__( "Define text style", 'burst' )
);
$panel2->addChild(
	"group20",
	$group20
);
$row1 = new BurstMikadoRow();
$group20->addChild(
	"row1",
	$row1
);

$big_large_button_fontsize = new BurstMikadoField(
	"textsimple",
	"big_large_button_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"big_large_button_fontsize",
	$big_large_button_fontsize
);

$big_large_button_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"big_large_button_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row1->addChild(
	"big_large_button_fontweight",
	$big_large_button_fontweight
);

$big_large_button_lineheight = new BurstMikadoField(
	"textsimple",
	"big_large_button_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"big_large_button_lineheight",
	$big_large_button_lineheight
);

$group24 = new BurstMikadoGroup(
	esc_html__( "Icon Style", 'burst' ),
	esc_html__( "Define icon style", 'burst' )
);
$panel2->addChild(
	"group24",
	$group24
);
$row1 = new BurstMikadoRow();
$group24->addChild(
	"row1",
	$row1
);

$big_large_button_icon_size = new BurstMikadoField(
	"textsimple",
	"big_large_button_icon_size",
	"",
	esc_html__( "Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"big_large_button_icon_size",
	$big_large_button_icon_size
);

$big_large_button_padding = new BurstMikadoField(
	"text",
	"big_large_button_padding",
	"",
	esc_html__( "Padding Left/Right (px) ", 'burst' ),
	esc_html__( "Define padding", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"big_large_button_padding",
	$big_large_button_padding
);

$big_large_button_border_radius = new BurstMikadoField(
	"text",
	"big_large_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "Define padding", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"big_large_button_border_radius",
	$big_large_button_border_radius
);

//Blockquote

$panel3 = new BurstMikadoPanel(
	esc_html__( "Blockquote", 'burst' ),
	"blockquote_panel"
);
$elementsPage->addChild(
	"panel3",
	$panel3
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Blockquote Style", 'burst' ),
	esc_html__( "Define Blockquote style", 'burst' )
);
$panel3->addChild(
	"group1",
	$group1
);
$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$blockquote_color = new BurstMikadoField(
	"colorsimple",
	"blockquote_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blockquote_font_color",
	$blockquote_color
);

$blockquote_font_size = new BurstMikadoField(
	"textsimple",
	"blockquote_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blockquote_font_size",
	$blockquote_font_size
);

$blockquote_line_height = new BurstMikadoField(
	"textsimple",
	"blockquote_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blockquote_line_height",
	$blockquote_line_height
);

$blockquote_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"blockquote_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"blockquote_text_transform",
	$blockquote_text_transform
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);

$blockquote_font_family = new BurstMikadoField(
	"fontsimple",
	"blockquote_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blockquote_font_family",
	$blockquote_font_family
);

$blockquote_font_style = new BurstMikadoField(
	"selectblanksimple",
	"blockquote_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blockquote_font_style",
	$blockquote_font_style
);

$blockquote_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"blockquote_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blockquote_font_weight",
	$blockquote_font_weight
);

$blockquote_letter_spacing = new BurstMikadoField(
	"textsimple",
	"blockquote_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blockquote_letter_spacing",
	$blockquote_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$group1->addChild(
	"row3",
	$row3
);

$blockquote_background_color = new BurstMikadoField(
	"colorsimple",
	"blockquote_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blockquote_background_color",
	$blockquote_background_color
);

$blockquote_border_color = new BurstMikadoField(
	"colorsimple",
	"blockquote_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blockquote_border_color",
	$blockquote_border_color
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Blockquote Icon Style", 'burst' ),
	esc_html__( "Define Blockquote Icon style", 'burst' )
);
$panel3->addChild(
	"group2",
	$group2
);
$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);
$blockquote_quote_icon_color = new BurstMikadoField(
	"colorsimple",
	"blockquote_quote_icon_color",
	"",
	esc_html__( "Quote Icon Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blockquote_quote_icon_color",
	$blockquote_quote_icon_color
);

$blockquote_icon_type = new BurstMikadoField(
	"selectblanksimple",
	"blockquote_icon_type",
	"",
	esc_html__( "Quote Icon", 'burst' ),
	"",
	burst_mikado_return_options_blockquote_type()
);
$row1->addChild(
	"blockquote_icon_type",
	$blockquote_icon_type
);

//Content Menu

$panel25 = new BurstMikadoPanel(
	esc_html__( "Content Menu", 'burst' ),
	"content_menu_panel"
);
$elementsPage->addChild(
	"panel25",
	$panel25
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Menu Icons Style", 'burst' ),
	esc_html__( "Define Icons style", 'burst' )
);
$panel25->addChild(
	"group1",
	$group1
);
$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);
$content_menu_icon_color = new BurstMikadoField(
	"colorsimple",
	"content_menu_icon_color",
	"",
	esc_html__( "Icon Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"content_menu_icon_color",
	$content_menu_icon_color
);
$content_menu_icon_hover_color = new BurstMikadoField(
	"colorsimple",
	"content_menu_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"content_menu_icon_hover_color",
	$content_menu_icon_hover_color
);
$content_menu_icon_size = new BurstMikadoField(
	"textsimple",
	"content_menu_icon_size",
	"",
	esc_html__( "Icon Size", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"content_menu_icon_size",
	$content_menu_icon_size
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Text Style", 'burst' ),
	esc_html__( "Define Text style", 'burst' )
);
$panel25->addChild(
	"group2",
	$group2
);
$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);
$content_menu_text_color = new BurstMikadoField(
	"colorsimple",
	"content_menu_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"content_menu_text_color",
	$content_menu_text_color
);
$content_menu_text_hover_color = new BurstMikadoField(
	"colorsimple",
	"content_menu_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"content_menu_text_hover_color",
	$content_menu_text_hover_color
);
$content_menu_text_fontsize = new BurstMikadoField(
	"textsimple",
	"content_menu_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"content_menu_text_fontsize",
	$content_menu_text_fontsize
);
$content_menu_text_lineheight = new BurstMikadoField(
	"textsimple",
	"content_menu_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"content_menu_text_lineheight",
	$content_menu_text_lineheight
);
$row2 = new BurstMikadoRow();
$group2->addChild(
	"row2",
	$row2
);
$content_menu_text_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"content_menu_text_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"content_menu_text_texttransform",
	$content_menu_text_texttransform
);
$content_menu_text_google_fonts = new BurstMikadoField(
	"fontsimple",
	"content_menu_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"content_menu_text_google_fonts",
	$content_menu_text_google_fonts
);
$content_menu_text_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"content_menu_text_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"content_menu_text_fontstyle",
	$h1_fontstyle
);
$content_menu_text_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"content_menu_text_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"content_menu_text_fontweight",
	$content_menu_text_fontweight
);
$row3 = new BurstMikadoRow();
$group2->addChild(
	"row3",
	$row3
);
$content_menu_text_letterspacing = new BurstMikadoField(
	"textsimple",
	"content_menu_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"content_menu_text_letterspacing",
	$content_menu_text_letterspacing
);

//Call to action

$panel31 = new BurstMikadoPanel(
	esc_html__( "Call to Action", 'burst' ),
	"call_to_action_panel"
);
$elementsPage->addChild(
	"panel31",
	$panel31
);

$call_to_action_button_section = new BurstMikadoTitle(
	"call_to_action_button_section",
	esc_html__( "Button", 'burst' )
);
$panel31->addChild(
	"call_to_action_button_section",
	$call_to_action_button_section
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Text Style", 'burst' ),
	esc_html__( "Define text style", 'burst' )
);
$panel31->addChild(
	"group1",
	$group1
);
$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);
$cto_action_bttn_title_google_fonts = new BurstMikadoField(
	"fontsimple",
	"cto_action_bttn_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cto_action_bttn_title_google_fonts",
	$cto_action_bttn_title_google_fonts
);

$cto_action_bttn_title_fontsize = new BurstMikadoField(
	"textsimple",
	"cto_action_bttn_title_fontsize",
	"",
	esc_html__( "Text Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cto_action_bttn_title_fontsize",
	$cto_action_bttn_title_fontsize
);

$cto_action_bttn_title_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"cto_action_bttn_title_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row1->addChild(
	"cto_action_bttn_title_fontstyle",
	$cto_action_bttn_title_fontstyle
);

$cto_action_bttn_title_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"cto_action_bttn_title_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row1->addChild(
	"cto_action_bttn_title_fontweight",
	$cto_action_bttn_title_fontweight
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);
$cto_action_bttn_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"cto_action_bttn_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cto_action_bttn_title_letter_spacing",
	$cto_action_bttn_title_letter_spacing
);

$cto_action_bttn_title_lineheight = new BurstMikadoField(
	"textsimple",
	"cto_action_bttn_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cto_action_bttn_title_lineheight",
	$cto_action_bttn_title_lineheight
);

$cto_action_bttn_title_color = new BurstMikadoField(
	"colorsimple",
	"cto_action_bttn_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cto_action_bttn_title_color",
	$cto_action_bttn_title_color
);

$cto_action_bttn_title_hovercolor = new BurstMikadoField(
	"colorsimple",
	"cto_action_bttn_title_hovercolor",
	"",
	esc_html__( "Hover Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cto_action_bttn_title_hovercolor",
	$cto_action_bttn_title_hovercolor
);

$row3 = new BurstMikadoRow( true );
$group1->addChild(
	"row3",
	$row3
);

$cto_action_bttn_title_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"cto_action_bttn_title_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row3->addChild(
	"cto_action_bttn_title_texttransform",
	$cto_action_bttn_title_texttransform
);

$group4 = new BurstMikadoGroup(
	esc_html__( "Icon Style", 'burst' ),
	esc_html__( "Define icon style", 'burst' )
);
$panel31->addChild(
	"group4",
	$group4
);

$row1 = new BurstMikadoRow();
$group4->addChild(
	"row1",
	$row1
);

$cto_action_bttn_icon_size = new BurstMikadoField(
	"textsimple",
	"cto_action_bttn_icon_size",
	"",
	esc_html__( "Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cto_action_bttn_icon_size",
	$cto_action_bttn_icon_size
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Background", 'burst' ),
	esc_html__( "Define background", 'burst' )
);
$panel31->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$cto_action_bttn_backgroundcolor = new BurstMikadoField(
	"colorsimple",
	"cto_action_bttn_backgroundcolor",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cto_action_bttn_backgroundcolor",
	$cto_action_bttn_backgroundcolor
);

$cto_action_bttn_backgroundcolor_hover = new BurstMikadoField(
	"colorsimple",
	"cto_action_bttn_backgroundcolor_hover",
	"",
	esc_html__( "Background Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cto_action_bttn_backgroundcolor_hover",
	$cto_action_bttn_backgroundcolor_hover
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Border Style", 'burst' ),
	esc_html__( "Define border style", 'burst' )
);
$panel31->addChild(
	"group3",
	$group3
);

$row1 = new BurstMikadoRow();
$group3->addChild(
	"row1",
	$row1
);

$cto_action_bttn_border_color = new BurstMikadoField(
	"colorsimple",
	"cto_action_bttn_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cto_action_bttn_border_color",
	$cto_action_bttn_border_color
);

$cto_action_bttn_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"cto_action_bttn_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cto_action_bttn_border_hover_color",
	$cto_action_bttn_border_hover_color
);

$cto_action_bttn_border_width = new BurstMikadoField(
	"textsimple",
	"cto_action_bttn_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cto_action_bttn_border_width",
	$cto_action_bttn_border_width
);

$cto_action_bttn_border_radius = new BurstMikadoField(
	"textsimple",
	"cto_action_bttn_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cto_action_bttn_border_radius",
	$cto_action_bttn_border_radius
);

$cto_action_bttn_padding = new BurstMikadoField(
	"text",
	"cto_action_bttn_padding",
	"",
	esc_html__( "Padding Left/Right (px) ", 'burst' ),
	esc_html__( "Define padding", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel31->addChild(
	"cto_action_bttn_padding",
	$cto_action_bttn_padding
);

//Counters

$panel4 = new BurstMikadoPanel(
	esc_html__( "Counters", 'burst' ),
	"counters_panel"
);
$elementsPage->addChild(
	"panel4",
	$panel4
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Counters Style", 'burst' ),
	esc_html__( "Define styles for Counters", 'burst' )
);
$panel4->addChild(
	"group1",
	$group1
);
$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$counter_color = new BurstMikadoField(
	"colorsimple",
	"counter_color",
	"",
	esc_html__( "Numeral Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"counter_color",
	$counter_color
);

$counter_text_color = new BurstMikadoField(
	"colorsimple",
	"counter_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"counter_text_color",
	$counter_text_color
);

$counter_separator_color = new BurstMikadoField(
	"colorsimple",
	"counter_separator_color",
	"",
	esc_html__( "Separator Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"counter_separator_color",
	$counter_separator_color
);

$counter_icon_color = new BurstMikadoField(
	"colorsimple",
	"counter_icon_color",
	"",
	esc_html__( "Icon Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"counter_icon_color",
	$counter_icon_color
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);

$counters_font_family = new BurstMikadoField(
	"fontsimple",
	"counters_font_family",
	"-1",
	esc_html__( "Numeral Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"counters_font_family",
	$counters_font_family
);

$counters_font_size = new BurstMikadoField(
	"textsimple",
	"counters_font_size",
	"",
	esc_html__( "Numeral Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"counters_font_size",
	$counters_font_size
);

$counters_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"counters_fontweight",
	"",
	esc_html__( "Numeral Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"counters_fontweight",
	$counters_fontweight
);

$counters_icon_font_size = new BurstMikadoField(
	"textsimple",
	"counters_icon_font_size",
	"",
	esc_html__( "Icon Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"counters_icon_font_size",
	$counters_icon_font_size
);

$row3 = new BurstMikadoRow( true );
$group1->addChild(
	"row3",
	$row3
);

$counters_text_font_size = new BurstMikadoField(
	"textsimple",
	"counters_text_font_size",
	"",
	esc_html__( "Text Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"counters_text_font_size",
	$counters_text_font_size
);

$counters_text_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"counters_text_fontweight",
	"",
	esc_html__( "Text Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row3->addChild(
	"counters_text_fontweight",
	$counters_text_fontweight
);

$counters_text_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"counters_text_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row3->addChild(
	"counters_text_texttransform",
	$counters_text_texttransform
);

$counters_text_letterspacing = new BurstMikadoField(
	"textsimple",
	"counters_text_letterspacing",
	"",
	esc_html__( "Text Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"counters_text_letterspacing",
	$counters_text_letterspacing
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Counters Title", 'burst' ),
	esc_html__( "Define Counter title style", 'burst' )
);
$panel4->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$counters_title_color = new BurstMikadoField(
	"colorsimple",
	"counters_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"counters_title_color",
	$counters_title_color
);

$counters_title_font_size = new BurstMikadoField(
	"textsimple",
	"counters_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"counters_title_font_size",
	$counters_title_font_size
);

$counters_title_line_height = new BurstMikadoField(
	"textsimple",
	"counters_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"counters_title_line_height",
	$counters_title_line_height
);

$counters_title_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"counters_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"counters_title_text_transform",
	$counters_title_text_transform
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);

$counters_title_font_family = new BurstMikadoField(
	"fontsimple",
	"counters_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"counters_title_font_family",
	$counters_title_font_family
);

$counters_title_font_style = new BurstMikadoField(
	"selectblanksimple",
	"counters_title_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"counters_title_font_style",
	$counters_title_font_style
);

$counters_title_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"counters_title_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"counters_title_font_weight",
	$counters_title_font_weight
);

$counters_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"counters_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"counters_title_letter_spacing",
	$counters_title_letter_spacing
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Counters Padding", 'burst' ),
	esc_html__( "Define padding for Counters", 'burst' )
);
$panel4->addChild(
	"group3",
	$group3
);

$row1 = new BurstMikadoRow();
$group3->addChild(
	"row1",
	$row1
);

$counters_padding_top = new BurstMikadoField(
	"textsimple",
	"counters_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"counters_padding_top",
	$counters_padding_top
);

$counters_padding_right = new BurstMikadoField(
	"textsimple",
	"counters_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"counters_padding_right",
	$counters_padding_right
);

$counters_padding_bottom = new BurstMikadoField(
	"textsimple",
	"counters_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"counters_padding_bottom",
	$counters_padding_bottom
);

$counters_padding_left = new BurstMikadoField(
	"textsimple",
	"counters_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"counters_padding_left",
	$counters_padding_left
);

//Counters

$panel28 = new BurstMikadoPanel(
	esc_html__( "Countdown", 'burst' ),
	"countdown_panel"
);
$elementsPage->addChild(
	"panel28",
	$panel28
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Countdown Amount", 'burst' ),
	esc_html__( "Define countdown amount style", 'burst' )
);
$panel28->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$countdown_amount_color = new BurstMikadoField(
	"colorsimple",
	"countdown_amount_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"countdown_amount_color",
	$countdown_amount_color
);

$countdown_amount_font_size = new BurstMikadoField(
	"textsimple",
	"countdown_amount_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"countdown_amount_font_size",
	$countdown_amount_font_size
);

$countdown_amount_line_height = new BurstMikadoField(
	"textsimple",
	"countdown_amount_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"countdown_amount_line_height",
	$countdown_amount_line_height
);

$countdown_amount_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"countdown_amount_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"countdown_amount_text_transform",
	$countdown_amount_text_transform
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);

$countdown_amount_font_family = new BurstMikadoField(
	"fontsimple",
	"countdown_amount_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"countdown_amount_font_family",
	$countdown_amount_font_family
);

$countdown_amount_font_style = new BurstMikadoField(
	"selectblanksimple",
	"countdown_amount_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"countdown_amount_font_style",
	$countdown_amount_font_style
);

$countdown_amount_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"countdown_amount_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"countdown_amount_font_weight",
	$countdown_amount_font_weight
);

$countdown_amount_letter_spacing = new BurstMikadoField(
	"textsimple",
	"countdown_amount_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"countdown_amount_letter_spacing",
	$countdown_amount_letter_spacing
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Countdown Label", 'burst' ),
	esc_html__( "Define Countdown period style", 'burst' )
);
$panel28->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$countdown_label_color = new BurstMikadoField(
	"colorsimple",
	"countdown_label_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"countdown_label_color",
	$countdown_label_color
);

$countdown_label_font_size = new BurstMikadoField(
	"textsimple",
	"countdown_label_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"countdown_label_font_size",
	$countdown_label_font_size
);

$countdown_label_line_height = new BurstMikadoField(
	"textsimple",
	"countdown_label_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"countdown_label_line_height",
	$countdown_label_line_height
);

$countdown_label_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"countdown_label_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"countdown_label_text_transform",
	$countdown_label_text_transform
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);

$countdown_label_font_family = new BurstMikadoField(
	"fontsimple",
	"countdown_label_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"countdown_label_font_family",
	$countdown_label_font_family
);

$countdown_label_font_style = new BurstMikadoField(
	"selectblanksimple",
	"countdown_label_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"countdown_label_font_style",
	$countdown_label_font_style
);

$countdown_label_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"countdown_label_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"countdown_label_font_weight",
	$countdown_label_font_weight
);

$countdown_label_letter_spacing = new BurstMikadoField(
	"textsimple",
	"countdown_label_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"countdown_label_letter_spacing",
	$countdown_label_letter_spacing
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Countdown Separator", 'burst' ),
	esc_html__( 'Define styles for separator in countdown shortcode', 'burst' )
);
$panel28->addChild(
	"group3",
	$group3
);
$row1 = new BurstMikadoRow();
$group3->addChild(
	"row1",
	$row1
);

$countdown_separator_color = new BurstMikadoField(
	"colorsimple",
	"countdown_separator_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"countdown_separator_color",
	$countdown_separator_color
);

$countdown_separator_transparency = new BurstMikadoField(
	"textsimple",
	"countdown_separator_transparency",
	"",
	esc_html__( "Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"countdown_separator_transparency",
	$countdown_separator_transparency
);

$countdown_separator_thickness = new BurstMikadoField(
	"textsimple",
	"countdown_separator_thickness",
	"",
	esc_html__( "Thickness (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"countdown_separator_thickness",
	$countdown_separator_thickness
);

$countdown_separator_width = new BurstMikadoField(
	"textsimple",
	"countdown_separator_width",
	"",
	esc_html__( "Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"countdown_separator_width",
	$countdown_separator_width
);

$row2 = new BurstMikadoRow( true );
$group3->addChild(
	"row2",
	$row2
);

$countdown_separator_topmargin = new BurstMikadoField(
	"textsimple",
	"countdown_separator_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"countdown_separator_topmargin",
	$countdown_separator_topmargin
);

$countdown_separator_bottommargin = new BurstMikadoField(
	"textsimple",
	"countdown_separator_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"countdown_separator_bottommargin",
	$countdown_separator_bottommargin
);

//Expandable Section

$panel5 = new BurstMikadoPanel(
	esc_html__( "Expandable Section", 'burst' ),
	"expandable_section_panel"
);
$elementsPage->addChild(
	"panel5",
	$panel5
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Title Style", 'burst' ),
	esc_html__( "Define Expandable Section title style", 'burst' )
);
$panel5->addChild(
	"group1",
	$group1
);
$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$expandable_label_color = new BurstMikadoField(
	"colorsimple",
	"expandable_label_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"expandable_label_color",
	$expandable_label_color
);

$expandable_label_font_size = new BurstMikadoField(
	"textsimple",
	"expandable_label_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"expandable_label_font_size",
	$expandable_label_font_size
);

$expandable_label_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"expandable_label_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"expandable_label_text_transform",
	$expandable_label_text_transform
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);

$expandable_label_font_family = new BurstMikadoField(
	"fontsimple",
	"expandable_label_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"expandable_label_font_family",
	$expandable_label_font_family
);

$expandable_label_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"expandable_label_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"expandable_label_font_weight",
	$expandable_label_font_weight
);

$expandable_label_letter_spacing = new BurstMikadoField(
	"textsimple",
	"expandable_label_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"expandable_label_letter_spacing",
	$expandable_label_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$group1->addChild(
	"row3",
	$row3
);

$expandable_background_color = new BurstMikadoField(
	"colorsimple",
	"expandable_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"expandable_background_color",
	$expandable_background_color
);

$expandable_label_hover_color = new BurstMikadoField(
	"colorsimple",
	"expandable_label_hover_color",
	"",
	esc_html__( "Hover Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"expandable_label_hover_color",
	$expandable_label_hover_color
);

//Full Screen Sections

$panel51 = new BurstMikadoPanel(
	esc_html__( "Full Screen Sections", 'burst' ),
	"expandable_section_panel"
);
$elementsPage->addChild(
	"panel51",
	$panel51
);
$full_screen_sections_on_small_screens = new BurstMikadoField(
	"yesno",
	"full_screen_sections_on_small_screens",
	"no",
	esc_html__( "Enable Full Screen Sections on Small Screens", 'burst' ),
	esc_html__( "Enabling this option will turn on Full Screen Sections on small screens", 'burst' )
);
$panel51->addChild(
	"full_screen_sections_on_small_screens",
	$full_screen_sections_on_small_screens
);
$show_full_screen_sections_navigation = new BurstMikadoField(
	"yesno",
	"show_full_screen_sections_navigation",
	"yes",
	esc_html__( "Show Full Screen Sections Navigation", 'burst' ),
	esc_html__( "Choose whether to showcase arrow navigation for Full Screen Sections template.", 'burst' )
);
$panel51->addChild(
	"show_full_screen_sections_navigation",
	$show_full_screen_sections_navigation
);

//Highlight

$panel17 = new BurstMikadoPanel(
	esc_html__( "Highlight", 'burst' ),
	"highlight_panel"
);
$elementsPage->addChild(
	"panel17",
	$panel17
);
$highlight_color = new BurstMikadoField(
	"color",
	"highlight_color",
	"",
	esc_html__( "Highlight Color", 'burst' ),
	esc_html__( "Set color for Highlight", 'burst' )
);
$panel17->addChild(
	"highlight_color",
	$highlight_color
);

//Horizontal Progress Bars

$panel6 = new BurstMikadoPanel(
	esc_html__( "Horizontal Progress Bars", 'burst' ),
	"horizontal_progress_bars_panel"
);
$elementsPage->addChild(
	"panel6",
	$panel6
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Progress Bar Title Style", 'burst' ),
	esc_html__( "Define styles for Horizontal Progress Bars title", 'burst' )
);
$panel6->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$progress_bar_horizontal_font_size = new BurstMikadoField(
	"textsimple",
	"progress_bar_horizontal_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"progress_bar_horizontal_font_size",
	$progress_bar_horizontal_font_size
);

$progress_bar_horizontal_color = new BurstMikadoField(
	"colorsimple",
	"progress_bar_horizontal_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"progress_bar_horizontal_color",
	$progress_bar_horizontal_color
);

$progress_bar_horizontal_line_height = new BurstMikadoField(
	"textsimple",
	"progress_bar_horizontal_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"progress_bar_horizontal_line_height",
	$progress_bar_horizontal_line_height
);

$progress_bar_horizontal_font_family = new BurstMikadoField(
	"fontsimple",
	"progress_bar_horizontal_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"progress_bar_horizontal_font_family",
	$progress_bar_horizontal_font_family
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);

$progress_bar_horizontal_font_style = new BurstMikadoField(
	"selectblanksimple",
	"progress_bar_horizontal_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"progress_bar_horizontal_font_style",
	$progress_bar_horizontal_font_style
);

$progress_bar_horizontal_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"progress_bar_horizontal_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"progress_bar_horizontal_font_weight",
	$progress_bar_horizontal_font_weight
);

$progress_bar_horizontal_letter_spacing = new BurstMikadoField(
	"textsimple",
	"progress_bar_horizontal_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"progress_bar_horizontal_letter_spacing",
	$progress_bar_horizontal_letter_spacing
);

$progress_bar_horizontal_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"progress_bar_horizontal_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"progress_bar_horizontal_text_transform",
	$progress_bar_horizontal_text_transform
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Progress Bar Percentage Style", 'burst' ),
	esc_html__( "Define styles for Horizontal Progress Bars percentage", 'burst' )
);
$panel6->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$progress_bar_horizontal_percentage_font_size = new BurstMikadoField(
	"textsimple",
	"progress_bar_horizontal_percentage_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"progress_bar_horizontal_percentage_font_size",
	$progress_bar_horizontal_percentage_font_size
);

$progress_bar_horizontal_percentage_color = new BurstMikadoField(
	"colorsimple",
	"progress_bar_horizontal_percentage_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"progress_bar_horizontal_percentage_color",
	$progress_bar_horizontal_percentage_color
);

$progress_bar_horizontal_percentage_line_height = new BurstMikadoField(
	"textsimple",
	"progress_bar_horizontal_percentage_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"progress_bar_horizontal_percentage_line_height",
	$progress_bar_horizontal_percentage_line_height
);

$progress_bar_horizontal_percentage_font_family = new BurstMikadoField(
	"fontsimple",
	"progress_bar_horizontal_percentage_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"progress_bar_horizontal_percentage_font_family",
	$progress_bar_horizontal_percentage_font_family
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);

$progress_bar_horizontal_percentage_font_style = new BurstMikadoField(
	"selectblanksimple",
	"progress_bar_horizontal_percentage_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"progress_bar_horizontal_percentage_font_style",
	$progress_bar_horizontal_percentage_font_style
);

$progress_bar_horizontal_percentage_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"progress_bar_horizontal_percentage_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"progress_bar_horizontal_percentage_font_weight",
	$progress_bar_horizontal_percentage_font_weight
);

$progress_bar_horizontal_percentage_letter_spacing = new BurstMikadoField(
	"textsimple",
	"progress_bar_horizontal_percentage_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"progress_bar_horizontal_percentage_letter_spacing",
	$progress_bar_horizontal_percentage_letter_spacing
);

$progress_bar_horizontal_percentage_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"progress_bar_horizontal_percentage_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"progress_bar_horizontal_percentage_text_transform",
	$progress_bar_horizontal_percentage_text_transform
);
//Vertical Progress Bars

$panel73 = new BurstMikadoPanel(
	esc_html__( "Vertical Progress Bars", 'burst' ),
	"vertical_progress_bars_panel"
);
$elementsPage->addChild(
	"panel73",
	$panel73
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Progress Bar Title Style", 'burst' ),
	esc_html__( "Define styles for Vertical Progress Bars title", 'burst' )
);
$panel73->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$progress_bar_vertical_font_size = new BurstMikadoField(
	"textsimple",
	"progress_bar_vertical_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"progress_bar_vertical_font_size",
	$progress_bar_vertical_font_size
);

$progress_bar_vertical_color = new BurstMikadoField(
	"colorsimple",
	"progress_bar_vertical_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"progress_bar_vertical_color",
	$progress_bar_vertical_color
);

$progress_bar_vertical_line_height = new BurstMikadoField(
	"textsimple",
	"progress_bar_vertical_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"progress_bar_vertical_line_height",
	$progress_bar_vertical_line_height
);

$progress_bar_vertical_font_family = new BurstMikadoField(
	"fontsimple",
	"progress_bar_vertical_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"progress_bar_vertical_font_family",
	$progress_bar_vertical_font_family
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);

$progress_bar_vertical_font_style = new BurstMikadoField(
	"selectblanksimple",
	"progress_bar_vertical_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"progress_bar_vertical_font_style",
	$progress_bar_vertical_font_style
);

$progress_bar_vertical_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"progress_bar_vertical_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"progress_bar_vertical_font_weight",
	$progress_bar_vertical_font_weight
);

$progress_bar_vertical_letter_spacing = new BurstMikadoField(
	"textsimple",
	"progress_bar_vertical_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"progress_bar_vertical_letter_spacing",
	$progress_bar_vertical_letter_spacing
);

$progress_bar_vertical_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"progress_bar_vertical_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"progress_bar_vertical_text_transform",
	$progress_bar_vertical_text_transform
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Progress Bar Percentage Style", 'burst' ),
	esc_html__( "Define styles for Vertical Progress Bars percentage", 'burst' )
);
$panel73->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$progress_bar_vertical_percentage_font_size = new BurstMikadoField(
	"textsimple",
	"progress_bar_vertical_percentage_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"progress_bar_vertical_percentage_font_size",
	$progress_bar_vertical_percentage_font_size
);

$progress_bar_vertical_percentage_color = new BurstMikadoField(
	"colorsimple",
	"progress_bar_vertical_percentage_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"progress_bar_vertical_percentage_color",
	$progress_bar_vertical_percentage_color
);

$progress_bar_vertical_percentage_line_height = new BurstMikadoField(
	"textsimple",
	"progress_bar_vertical_percentage_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"progress_bar_vertical_percentage_line_height",
	$progress_bar_vertical_percentage_line_height
);

$progress_bar_vertical_percentage_font_family = new BurstMikadoField(
	"fontsimple",
	"progress_bar_vertical_percentage_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"progress_bar_vertical_percentage_font_family",
	$progress_bar_vertical_percentage_font_family
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);

$progress_bar_vertical_percentage_font_style = new BurstMikadoField(
	"selectblanksimple",
	"progress_bar_vertical_percentage_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"progress_bar_vertical_percentage_font_style",
	$progress_bar_vertical_percentage_font_style
);

$progress_bar_vertical_percentage_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"progress_bar_vertical_percentage_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"progress_bar_vertical_percentage_font_weight",
	$progress_bar_vertical_percentage_font_weight
);

$progress_bar_vertical_percentage_letter_spacing = new BurstMikadoField(
	"textsimple",
	"progress_bar_vertical_percentage_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"progress_bar_vertical_percentage_letter_spacing",
	$progress_bar_vertical_percentage_letter_spacing
);

$progress_bar_vertical_percentage_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"progress_bar_vertical_percentage_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"progress_bar_vertical_percentage_text_transform",
	$progress_bar_vertical_percentage_text_transform
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Progress Bar Text Style", 'burst' ),
	esc_html__( "Define styles for Vertical Progress Bars text", 'burst' )
);
$panel73->addChild(
	"group3",
	$group3
);

$row1 = new BurstMikadoRow();
$group3->addChild(
	"row1",
	$row1
);

$progress_bar_vertical_text_font_size = new BurstMikadoField(
	"textsimple",
	"progress_bar_vertical_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"progress_bar_vertical_text_font_size",
	$progress_bar_vertical_text_font_size
);

$progress_bar_vertical_text_color = new BurstMikadoField(
	"colorsimple",
	"progress_bar_vertical_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"progress_bar_vertical_text_color",
	$progress_bar_vertical_text_color
);

$progress_bar_vertical_text_line_height = new BurstMikadoField(
	"textsimple",
	"progress_bar_vertical_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"progress_bar_vertical_text_line_height",
	$progress_bar_vertical_text_line_height
);

$progress_bar_vertical_text_font_family = new BurstMikadoField(
	"fontsimple",
	"progress_bar_vertical_text_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"progress_bar_vertical_text_font_family",
	$progress_bar_vertical_text_font_family
);

$row2 = new BurstMikadoRow( true );
$group3->addChild(
	"row2",
	$row2
);

$progress_bar_vertical_text_font_style = new BurstMikadoField(
	"selectblanksimple",
	"progress_bar_vertical_text_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"progress_bar_vertical_text_font_style",
	$progress_bar_vertical_text_font_style
);

$progress_bar_vertical_text_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"progress_bar_vertical_text_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"progress_bar_vertical_text_font_weight",
	$progress_bar_vertical_text_font_weight
);

$progress_bar_vertical_text_letter_spacing = new BurstMikadoField(
	"textsimple",
	"progress_bar_vertical_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"progress_bar_vertical_text_letter_spacing",
	$progress_bar_vertical_text_letter_spacing
);

$progress_bar_vertical_text_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"progress_bar_vertical_text_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"progress_bar_vertical_text_text_transform",
	$progress_bar_vertical_text_text_transform
);

//Icon

$panel19 = new BurstMikadoPanel(
	esc_html__( "Icons", 'burst' ),
	"icons_panel"
);
$elementsPage->addChild(
	"panel19",
	$panel19
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Normal Icons", 'burst' ),
	esc_html__( "Define Normal Icons style", 'burst' )
);
$panel19->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$icon_color_normal = new BurstMikadoField(
	"colorsimple",
	"icon_color_normal",
	"",
	esc_html__( "Icon Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"icon_color_normal",
	$icon_color_normal
);

$icon_hover_color_normal = new BurstMikadoField(
	"colorsimple",
	"icon_hover_color_normal",
	"",
	esc_html__( "Icon Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"icon_hover_color_normal",
	$icon_hover_color_normal
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Icons Circle/Square", 'burst' ),
	esc_html__( "Define circle/square Icons style", 'burst' )
);
$panel19->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$icon_color = new BurstMikadoField(
	"colorsimple",
	"icon_color",
	"",
	esc_html__( "Icon Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"icon_color",
	$icon_color
);

$icon_hover_color = new BurstMikadoField(
	"colorsimple",
	"icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"icon_hover_color",
	$icon_hover_color
);

$icon_background_color = new BurstMikadoField(
	"colorsimple",
	"icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"icon_background_color",
	$icon_background_color
);

$icon_hover_background_color = new BurstMikadoField(
	"colorsimple",
	"icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"icon_hover_background_color",
	$icon_hover_background_color
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);

$icon_border_width = new BurstMikadoField(
	"textsimple",
	"icon_border_width",
	"",
	esc_html__( "Icon Border Width", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"icon_border_width",
	$icon_border_width
);

$icon_border_color = new BurstMikadoField(
	"colorsimple",
	"icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"icon_border_color",
	$icon_border_color
);

$icon_hover_border_color = new BurstMikadoField(
	"colorsimple",
	"icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"icon_hover_border_color",
	$icon_hover_border_color
);

$panel21 = new BurstMikadoPanel(
	esc_html__( "Icon With Text", 'burst' ),
	"icon_with_text_panel"
);
$elementsPage->addChild(
	"panel21",
	$panel21
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Normal Icons", 'burst' ),
	esc_html__( "Define Normal Icons style", 'burst' )
);
$panel21->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$icon_with_text_icon_color_normal = new BurstMikadoField(
	"colorsimple",
	"icon_with_text_icon_color_normal",
	"",
	esc_html__( "Icon Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"icon_with_text_icon_color_normal",
	$icon_with_text_icon_color_normal
);

$icon_with_text_icon_hover_color_normal = new BurstMikadoField(
	"colorsimple",
	"icon_with_text_icon_hover_color_normal",
	"",
	esc_html__( "Icon Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"icon_with_text_icon_hover_color_normal",
	$icon_with_text_icon_hover_color_normal
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Icons Circle/Square", 'burst' ),
	esc_html__( "Define circle/square Icons style", 'burst' )
);
$panel21->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$icon_with_text_icon_color = new BurstMikadoField(
	"colorsimple",
	"icon_with_text_icon_color",
	"",
	esc_html__( "Icon Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"icon_with_text_icon_color",
	$icon_with_text_icon_color
);

$icon_with_text_icon_hover_color = new BurstMikadoField(
	"colorsimple",
	"icon_with_text_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"icon_with_text_icon_hover_color",
	$icon_with_text_icon_hover_color
);

$icon_with_text_icon_background_color = new BurstMikadoField(
	"colorsimple",
	"icon_with_text_icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"icon_with_text_icon_background_color",
	$icon_with_text_icon_background_color
);

$icon_with_text_icon_hover_background_color = new BurstMikadoField(
	"colorsimple",
	"icon_with_text_icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"icon_with_text_icon_hover_background_color",
	$icon_with_text_icon_hover_background_color
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);

$icon_with_text_icon_border_width = new BurstMikadoField(
	"textsimple",
	"icon_with_text_icon_border_width",
	"",
	esc_html__( "Icon Border Width", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"icon_with_text_icon_border_width",
	$icon_with_text_icon_border_width
);

$icon_with_text_icon_border_color = new BurstMikadoField(
	"colorsimple",
	"icon_with_text_icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"icon_with_text_icon_border_color",
	$icon_with_text_icon_border_color
);

$icon_with_text_icon_hover_border_color = new BurstMikadoField(
	"colorsimple",
	"icon_with_text_icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"icon_with_text_icon_hover_border_color",
	$icon_with_text_icon_hover_border_color
);

//Input Fields

$panel7 = new BurstMikadoPanel(
	esc_html__( "Input Fields", 'burst' ),
	"input_fields_panel"
);
$elementsPage->addChild(
	"panel7",
	$panel7
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Input Fields Style", 'burst' ),
	esc_html__( "Define styles for Input Fields", 'burst' )
);
$panel7->addChild(
	"group1",
	$group1
);
$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$input_background_color = new BurstMikadoField(
	"colorsimple",
	"input_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"input_background_color",
	$input_background_color
);

$input_focus_background_color = new BurstMikadoField(
	"colorsimple",
	"input_focus_background_color",
	"",
	esc_html__( "Focus Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"input_focus_background_color",
	$input_focus_background_color
);

$input_border_color = new BurstMikadoField(
	"colorsimple",
	"input_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"input_border_color",
	$input_border_color
);

$input_focus_border_color = new BurstMikadoField(
	"colorsimple",
	"input_focus_border_color",
	"",
	esc_html__( "Focus Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"input_focus_border_color",
	$input_focus_border_color
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);

$input_text_color = new BurstMikadoField(
	"colorsimple",
	"input_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"input_text_color",
	$input_text_color
);

$input_focus_text_color = new BurstMikadoField(
	"colorsimple",
	"input_focus_text_color",
	"",
	esc_html__( "Focus Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"input_focus_text_color",
	$input_focus_text_color
);

//Interactive Banners

$panel71 = new BurstMikadoPanel(
	esc_html__( "Interactive Banners", 'burst' ),
	"interactive_banners_panel"
);
$elementsPage->addChild(
	"panel71",
	$panel71
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Interactive Banners Style", 'burst' ),
	esc_html__( "Define styles for Interactive Banners", 'burst' )
);
$panel71->addChild(
	"group1",
	$group1
);
$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$interactive_banners_background_color = new BurstMikadoField(
	"colorsimple",
	"interactive_banners_background_color",
	"",
	esc_html__( "Image Overlay Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"interactive_banners_background_color",
	$interactive_banners_background_color
);

$interactive_banners_background_transparency = new BurstMikadoField(
	"textsimple",
	"interactive_banners_background_transparency",
	"",
	esc_html__( "Image Overlay Color Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"interactive_banners_background_transparency",
	$interactive_banners_background_transparency
);

$interactive_banners_hover_background_color = new BurstMikadoField(
	"colorsimple",
	"interactive_banners_hover_background_color",
	"",
	esc_html__( "Image Overlay Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"interactive_banners_hover_background_color",
	$interactive_banners_hover_background_color
);

$interactive_banners_hover_background_transparency = new BurstMikadoField(
	"textsimple",
	"interactive_banners_hover_background_transparency",
	"",
	esc_html__( "Image Overlay Hover Color Transparency", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"interactive_banners_hover_background_transparency",
	$interactive_banners_hover_background_transparency
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Interactive Banners Padding", 'burst' ),
	esc_html__( "Define interactive banners padding", 'burst' )
);
$panel71->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow( true );
$group2->addChild(
	"row1",
	$row1
);

$interactive_banners_padding_left = new BurstMikadoField(
	"textsimple",
	"interactive_banners_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"interactive_banners_padding_left",
	$interactive_banners_padding_left
);

$interactive_banners_padding_right = new BurstMikadoField(
	"textsimple",
	"interactive_banners_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"interactive_banners_padding_right",
	$interactive_banners_padding_right
);

$interactive_banners_padding_top = new BurstMikadoField(
	"textsimple",
	"interactive_banners_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"interactive_banners_padding_top",
	$interactive_banners_padding_top
);

$interactive_banners_padding_bottom = new BurstMikadoField(
	"textsimple",
	"interactive_banners_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"interactive_banners_padding_bottom",
	$interactive_banners_padding_bottom
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Interactive Banners Title", 'burst' ),
	esc_html__( "Define interactive banners title style", 'burst' )
);
$panel71->addChild(
	"group3",
	$group3
);

$row1 = new BurstMikadoRow();
$group3->addChild(
	"row1",
	$row1
);

$interactive_banners_title_color = new BurstMikadoField(
	"colorsimple",
	"interactive_banners_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"interactive_banners_title_color",
	$interactive_banners_title_color
);

$interactive_banners_title_font_size = new BurstMikadoField(
	"textsimple",
	"interactive_banners_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"interactive_banners_title_font_size",
	$interactive_banners_title_font_size
);

$interactive_banners_title_line_height = new BurstMikadoField(
	"textsimple",
	"interactive_banners_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"interactive_banners_title_line_height",
	$interactive_banners_title_line_height
);

$interactive_banners_title_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"interactive_banners_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"interactive_banners_title_text_transform",
	$interactive_banners_title_text_transform
);

$row2 = new BurstMikadoRow( true );
$group3->addChild(
	"row2",
	$row2
);

$interactive_banners_title_font_family = new BurstMikadoField(
	"fontsimple",
	"interactive_banners_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"interactive_banners_title_font_family",
	$interactive_banners_title_font_family
);

$interactive_banners_title_font_style = new BurstMikadoField(
	"selectblanksimple",
	"interactive_banners_title_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"interactive_banners_title_font_style",
	$interactive_banners_title_font_style
);

$interactive_banners_title_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"interactive_banners_title_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"interactive_banners_title_font_weight",
	$interactive_banners_title_font_weight
);

$interactive_banners_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"interactive_banners_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"interactive_banners_title_letter_spacing",
	$interactive_banners_title_letter_spacing
);

//Lists

$panel72 = new BurstMikadoPanel(
	esc_html__( "Lists", 'burst' ),
	"lists"
);
$elementsPage->addChild(
	"panel72",
	$panel72
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Unordered List Style", 'burst' ),
	esc_html__( "Define styles for Unordered Lists", 'burst' )
);
$panel72->addChild(
	"group1",
	$group1
);
$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$list_item_color = new BurstMikadoField(
	"colorsimple",
	"list_item_color",
	"",
	esc_html__( "List Bullet Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"list_item_color",
	$list_item_color
);
$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);

$list_color = new BurstMikadoField(
	"colorsimple",
	"list_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"list_color",
	$list_color
);

$list_fontsize = new BurstMikadoField(
	"textsimple",
	"list_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"list_fontsize",
	$list_fontsize
);

$list_lineheight = new BurstMikadoField(
	"textsimple",
	"list_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"list_lineheight",
	$list_lineheight
);

$list_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"list_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"list_texttransform",
	$list_texttransform
);

$row3 = new BurstMikadoRow( true );
$group1->addChild(
	"row3",
	$row3
);
$list_google_fonts = new BurstMikadoField(
	"fontsimple",
	"list_google_fonts",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"list_google_fonts",
	$list_google_fonts
);

$list_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"list_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row3->addChild(
	"list_fontstyle",
	$list_fontstyle
);

$list_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"list_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row3->addChild(
	"list_fontweight",
	$list_fontweight
);

$list_letter_spacing = new BurstMikadoField(
	"textsimple",
	"list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"list_letter_spacing",
	$list_letter_spacing
);
$row4 = new BurstMikadoRow( true );
$group1->addChild(
	"row4",
	$row4
);
$list_bottom_margin = new BurstMikadoField(
	"textsimple",
	"list_bottom_margin",
	"",
	esc_html__( "Item bottom margin (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"list_bottom_margin",
	$list_bottom_margin
);

$list_separator_color = new BurstMikadoField(
	"colorsimple",
	"list_separator_color",
	"",
	esc_html__( "Separator Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"list_separator_color",
	$list_separator_color
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Ordered List Style", 'burst' ),
	esc_html__( "Define styles for Ordered lists", 'burst' )
);
$panel72->addChild(
	"group2",
	$group2
);
$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$list_ordered_item_color = new BurstMikadoField(
	"colorsimple",
	"list_ordered_item_color",
	"",
	esc_html__( "List Number Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"list_ordered_item_color",
	$list_ordered_item_color
);
$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);

$list_ordered_color = new BurstMikadoField(
	"colorsimple",
	"list_ordered_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"list_ordered_color",
	$list_ordered_color
);

$list_ordered_fontsize = new BurstMikadoField(
	"textsimple",
	"list_ordered_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"list_ordered_fontsize",
	$list_ordered_fontsize
);

$list_ordered_lineheight = new BurstMikadoField(
	"textsimple",
	"list_ordered_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"list_ordered_lineheight",
	$list_ordered_lineheight
);

$list_ordered_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"list_ordered_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"list_ordered_texttransform",
	$list_ordered_texttransform
);

$row3 = new BurstMikadoRow( true );
$group2->addChild(
	"row3",
	$row3
);
$list_ordered_google_fonts = new BurstMikadoField(
	"fontsimple",
	"list_ordered_google_fonts",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"list_ordered_google_fonts",
	$list_ordered_google_fonts
);

$list_ordered_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"list_ordered_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row3->addChild(
	"list_ordered_fontstyle",
	$list_ordered_fontstyle
);

$list_ordered_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"list_ordered_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row3->addChild(
	"list_ordered_fontweight",
	$list_ordered_fontweight
);

$list_ordered_letter_spacing = new BurstMikadoField(
	"textsimple",
	"list_ordered_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"list_ordered_letter_spacing",
	$list_ordered_letter_spacing
);
$row4 = new BurstMikadoRow( true );
$group2->addChild(
	"row4",
	$row4
);
$list_ordered_bottom_margin = new BurstMikadoField(
	"textsimple",
	"list_ordered_bottom_margin",
	"",
	esc_html__( "Item bottom margin (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"list_ordered_bottom_margin",
	$list_ordered_bottom_margin
);

$list_ordered_separator_color = new BurstMikadoField(
	"colorsimple",
	"list_ordered_separator_color",
	"",
	esc_html__( "Separator Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"list_ordered_separator_color",
	$list_ordered_separator_color
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Icon List Item Style", 'burst' ),
	esc_html__( "Define styles for icon list item", 'burst' )
);
$panel72->addChild(
	"group3",
	$group3
);
$row1 = new BurstMikadoRow( true );
$group3->addChild(
	"row1",
	$row1
);

$icon_list_item_separator_color = new BurstMikadoField(
	"colorsimple",
	"icon_list_item_separator_color",
	"",
	esc_html__( "Separator Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"icon_list_item_separator_color",
	$icon_list_item_separator_color
);

//Masonry Gallery
$panel30 = new BurstMikadoPanel(
	esc_html__( 'Masonry Gallery', 'burst' ),
	'masonry_gallery_panel'
);
$elementsPage->addChild(
	'panel30',
	$panel30
);

$masonry_gallery_space = new BurstMikadoField(
	"text",
	"masonry_gallery_space",
	"",
	esc_html__( "Space between Items (px)", 'burst' ),
	esc_html__( "Define a space between items in the Masonry Gallery", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel30->addChild(
	"masonry_gallery_space",
	$masonry_gallery_space
);

//Square Big
$masonry_gallery_square_big_title = new BurstMikadoTitle(
	'masonry_gallery_square_big_title',
	esc_html__( 'Square Big', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_square_big_title',
	$masonry_gallery_square_big_title
);

$masonry_gallery_square_big_title_group = new BurstMikadoGroup(
	esc_html__( 'Title Style', 'burst' ),
	esc_html__( 'Define Square Big Title Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_square_big_title_group',
	$masonry_gallery_square_big_title_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_square_big_title_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_square_big_title_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_big_title_color',
	'',
	esc_html__( 'Title Color', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_big_title_color',
	$masonry_gallery_square_big_title_color
);

$masonry_gallery_square_big_title_font_size = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_title_font_size',
	'',
	esc_html__( 'Font size (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_big_title_font_size',
	$masonry_gallery_square_big_title_font_size
);

$masonry_gallery_square_big_title_line_height = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_title_line_height',
	'',
	esc_html__( 'Line Height (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_big_title_line_height',
	$masonry_gallery_square_big_title_line_height
);

$masonry_gallery_square_big_title_text_transform = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_square_big_title_text_transform',
	'',
	esc_html__( 'Text Transform', 'burst' ),
	'',
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	'masonry_gallery_square_big_title_text_transform',
	$masonry_gallery_square_big_title_text_transform
);

$row2 = new BurstMikadoRow( true );
$masonry_gallery_square_big_title_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_square_big_title_font_family = new BurstMikadoField(
	'fontsimple',
	'masonry_gallery_square_big_title_font_family',
	'-1',
	esc_html__( 'Font Family', 'burst' )
);
$row2->addChild(
	'masonry_gallery_square_big_title_font_family',
	$masonry_gallery_square_big_title_font_family
);

$masonry_gallery_square_big_title_font_style = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_square_big_title_font_style',
	'',
	esc_html__( 'Font Style', 'burst' ),
	'',
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	'masonry_gallery_square_big_title_font_style',
	$masonry_gallery_square_big_title_font_style
);

$masonry_gallery_square_big_title_font_weight = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_square_big_title_font_weight',
	'',
	esc_html__( 'Font Weight', 'burst' ),
	'',
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	'masonry_gallery_square_big_title_font_weight',
	$masonry_gallery_square_big_title_font_weight
);

$masonry_gallery_square_big_title_letter_spacing = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_title_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'burst' )
);
$row2->addChild(
	'masonry_gallery_square_big_title_letter_spacing',
	$masonry_gallery_square_big_title_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$masonry_gallery_square_big_title_group->addChild(
	"row3",
	$row3
);

$masonry_gallery_square_big_title_margin_bottom = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_title_margin_bottom',
	'',
	esc_html__( 'Margin Bottom', 'burst' )
);
$row3->addChild(
	'masonry_gallery_square_big_title_margin_bottom',
	$masonry_gallery_square_big_title_margin_bottom
);

$masonry_gallery_square_big_separator_group = new BurstMikadoGroup(
	esc_html__( 'Separator Style', 'burst' ),
	esc_html__( 'Define Square Big Separator Style for With Button type', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_square_big_separator_group',
	$masonry_gallery_square_big_separator_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_square_big_separator_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_square_big_separator_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_big_separator_color',
	'',
	esc_html__( 'Separator Color', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_big_separator_color',
	$masonry_gallery_square_big_separator_color
);

$masonry_gallery_square_big_separator_width = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_separator_width',
	'',
	esc_html__( 'Width (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_big_separator_width',
	$masonry_gallery_square_big_separator_width
);

$masonry_gallery_square_big_separator_margin_top = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_separator_margin_top',
	'',
	esc_html__( 'Margin Top (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_big_separator_margin_top',
	$masonry_gallery_square_big_separator_margin_top
);

$masonry_gallery_square_big_separator_margin_bottom = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_separator_margin_bottom',
	'',
	esc_html__( 'Margin Bottom (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_big_separator_margin_bottom',
	$masonry_gallery_square_big_separator_margin_bottom
);

$row2 = new BurstMikadoRow( true );
$masonry_gallery_square_big_separator_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_square_big_separator_position = new BurstMikadoField(
	"selectsimple",
	"masonry_gallery_square_big_separator_position",
	"left",
	esc_html__( "Separator Alignment", 'burst' ),
	esc_html__( "Choose separator position", 'burst' ),
	array(
		"left" => esc_html__( "Left", 'burst' ),
		"center" => esc_html__( "Center", 'burst' ),
		"right" => esc_html__( "Right", 'burst' )
	)
);
$row2->addChild(
	'masonry_gallery_square_big_separator_position',
	$masonry_gallery_square_big_separator_position
);

$masonry_gallery_square_big_text_group = new BurstMikadoGroup(
	esc_html__( 'Text Style', 'burst' ),
	esc_html__( 'Define Square Big Text Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_square_big_text_group',
	$masonry_gallery_square_big_text_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_square_big_text_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_square_big_text_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_big_text_color',
	'',
	esc_html__( 'Text Color', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_big_text_color',
	$masonry_gallery_square_big_text_color
);

$masonry_gallery_square_big_text_font_size = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_text_font_size',
	'',
	esc_html__( 'Font size (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_big_text_font_size',
	$masonry_gallery_square_big_text_font_size
);

$masonry_gallery_square_big_text_line_height = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_text_line_height',
	'',
	esc_html__( 'Line Height (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_big_text_line_height',
	$masonry_gallery_square_big_text_line_height
);

$masonry_gallery_square_big_text_text_transform = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_square_big_text_text_transform',
	'',
	esc_html__( 'Text Transform', 'burst' ),
	'',
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	'masonry_gallery_square_big_text_text_transform',
	$masonry_gallery_square_big_text_text_transform
);

$row2 = new BurstMikadoRow( true );
$masonry_gallery_square_big_text_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_square_big_text_font_family = new BurstMikadoField(
	'fontsimple',
	'masonry_gallery_square_big_text_font_family',
	'-1',
	esc_html__( 'Font Family', 'burst' )
);
$row2->addChild(
	'masonry_gallery_square_big_text_font_family',
	$masonry_gallery_square_big_text_font_family
);

$masonry_gallery_square_big_text_font_style = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_square_big_text_font_style',
	'',
	esc_html__( 'Font Style', 'burst' ),
	'',
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	'masonry_gallery_square_big_text_font_style',
	$masonry_gallery_square_big_text_font_style
);

$masonry_gallery_square_big_text_font_weight = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_square_big_text_font_weight',
	'',
	esc_html__( 'Font Weight', 'burst' ),
	'',
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	'masonry_gallery_square_big_text_font_weight',
	$masonry_gallery_square_big_text_font_weight
);

$masonry_gallery_square_big_text_letter_spacing = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_text_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'burst' )
);
$row2->addChild(
	'masonry_gallery_square_big_text_letter_spacing',
	$masonry_gallery_square_big_text_letter_spacing
);

$masonry_gallery_square_big_button_group = new BurstMikadoGroup(
	esc_html__( 'Button Style', 'burst' ),
	esc_html__( 'Define Square Big Button Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_square_big_button_group',
	$masonry_gallery_square_big_button_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_square_big_button_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_big_button_font_family = new BurstMikadoField(
	'fontsimple',
	'masonry_gallery_square_big_button_font_family',
	'-1',
	esc_html__( 'Font Family', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_big_button_font_family',
	$masonry_gallery_square_big_button_font_family
);

$masonry_gallery_square_big_button_font_style = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_square_big_button_font_style',
	'',
	esc_html__( 'Font Style', 'burst' ),
	'',
	burst_mikado_return_options_fontstyle()
);
$row1->addChild(
	'masonry_gallery_square_big_button_font_style',
	$masonry_gallery_square_big_button_font_style
);

$masonry_gallery_square_big_button_font_weight = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_square_big_button_font_weight',
	'',
	esc_html__( 'Font Weight', 'burst' ),
	'',
	burst_mikado_return_options_fontweight()
);
$row1->addChild(
	'masonry_gallery_square_big_button_font_weight',
	$masonry_gallery_square_big_button_font_weight
);

$masonry_gallery_square_big_button_text_transform = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_square_big_button_text_transform',
	'',
	esc_html__( 'Text Transform', 'burst' ),
	'',
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	'masonry_gallery_square_big_button_text_transform',
	$masonry_gallery_square_big_button_text_transform
);

$row2 = new BurstMikadoRow( true );
$masonry_gallery_square_big_button_group->addChild(
	'row2',
	$row2
);

$masonry_gallery_square_big_button_font_size = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_button_font_size',
	'',
	esc_html__( 'Text Size (px)', 'burst' )
);
$row2->addChild(
	'masonry_gallery_square_big_button_font_size',
	$masonry_gallery_square_big_button_font_size
);

$masonry_gallery_square_big_button_line_height = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_button_line_height',
	'',
	esc_html__( 'Line Height (px)', 'burst' )
);
$row2->addChild(
	'masonry_gallery_square_big_button_line_height',
	$masonry_gallery_square_big_button_line_height
);

$masonry_gallery_square_big_button_letter_spacing = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_button_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'burst' )
);
$row2->addChild(
	'masonry_gallery_square_big_button_letter_spacing',
	$masonry_gallery_square_big_button_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$masonry_gallery_square_big_button_group->addChild(
	'row3',
	$row3
);

$masonry_gallery_square_big_button_text_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_big_button_text_color',
	'',
	esc_html__( 'Text Color', 'burst' )
);
$row3->addChild(
	'masonry_gallery_square_big_button_text_color',
	$masonry_gallery_square_big_button_text_color
);

$masonry_gallery_square_big_button_hover_text_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_big_button_hover_text_color',
	'',
	esc_html__( 'Hover Text Color', 'burst' )
);
$row3->addChild(
	'masonry_gallery_square_big_button_hover_text_color',
	$masonry_gallery_square_big_button_hover_text_color
);

$masonry_gallery_square_big_button_background_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_big_button_background_color',
	'',
	esc_html__( 'Background Color', 'burst' )
);
$row3->addChild(
	'masonry_gallery_square_big_button_background_color',
	$masonry_gallery_square_big_button_background_color
);

$masonry_gallery_square_big_button_hover_background_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_big_button_hover_background_color',
	'',
	esc_html__( 'Hover Background Color', 'burst' )
);
$row3->addChild(
	'masonry_gallery_square_big_button_hover_background_color',
	$masonry_gallery_square_big_button_hover_background_color
);

$row4 = new BurstMikadoRow( true );
$masonry_gallery_square_big_button_group->addChild(
	'row4',
	$row4
);

$masonry_gallery_square_big_button_border_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_big_button_border_color',
	'',
	esc_html__( 'Border Color', 'burst' )
);
$row4->addChild(
	'masonry_gallery_square_big_button_border_color',
	$masonry_gallery_square_big_button_border_color
);

$masonry_gallery_square_big_button_hover_border_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_big_button_hover_border_color',
	'',
	esc_html__( 'Hover Border Color', 'burst' )
);
$row4->addChild(
	'masonry_gallery_square_big_button_hover_border_color',
	$masonry_gallery_square_big_button_hover_border_color
);

$masonry_gallery_square_big_button_border_width = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_button_border_width',
	'',
	esc_html__( 'Border Width (px)', 'burst' )
);
$row4->addChild(
	'masonry_gallery_square_big_button_border_width',
	$masonry_gallery_square_big_button_border_width
);

$masonry_gallery_square_big_button_border_radius = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_button_border_radius',
	'',
	esc_html__( 'Border Radius (px)', 'burst' )
);
$row4->addChild(
	'masonry_gallery_square_big_button_border_radius',
	$masonry_gallery_square_big_button_border_radius
);

$row5 = new BurstMikadoRow( true );
$masonry_gallery_square_big_button_group->addChild(
	'row5',
	$row5
);

$masonry_gallery_square_big_button_padding_left = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_button_padding_left',
	'',
	esc_html__( 'Padding Left (px)', 'burst' )
);
$row5->addChild(
	'masonry_gallery_square_big_button_padding_left',
	$masonry_gallery_square_big_button_padding_left
);

$masonry_gallery_square_big_button_padding_right = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_button_padding_right',
	'',
	esc_html__( 'Padding Right (px)', 'burst' )
);
$row5->addChild(
	'masonry_gallery_square_big_button_padding_right',
	$masonry_gallery_square_big_button_padding_right
);

$masonry_gallery_square_big_button_margin_top = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_button_margin_top',
	'',
	esc_html__( 'Margin Top', 'burst' )
);
$row5->addChild(
	'masonry_gallery_square_big_button_margin_top',
	$masonry_gallery_square_big_button_margin_top
);

$masonry_gallery_square_big_icon_group = new BurstMikadoGroup(
	esc_html__( 'Icon Style', 'burst' ),
	esc_html__( 'Define Square Big Icon Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_square_big_icon_group',
	$masonry_gallery_square_big_icon_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_square_big_icon_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_big_icon_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_big_icon_color',
	'',
	esc_html__( 'Icon Color', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_big_icon_color',
	$masonry_gallery_square_big_icon_color
);

$masonry_gallery_square_big_icon_hover_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_big_icon_hover_color',
	'',
	esc_html__( 'Icon Hover Color', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_big_icon_hover_color',
	$masonry_gallery_square_big_icon_hover_color
);

$masonry_gallery_square_big_icon_size = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_icon_size',
	'',
	esc_html__( 'Icon Size (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_big_icon_size',
	$masonry_gallery_square_big_icon_size
);

$masonry_gallery_square_big_icon_margin_bottom = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_icon_margin_bottom',
	'',
	esc_html__( 'Margin Bottom', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_big_icon_margin_bottom',
	$masonry_gallery_square_big_icon_margin_bottom
);

$masonry_gallery_square_big_overlay_group = new BurstMikadoGroup(
	esc_html__( 'Standard Type Overlay Style', 'burst' ),
	esc_html__( 'Define Square Big Standard Overlay Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_square_big_overlay_group',
	$masonry_gallery_square_big_overlay_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_square_big_overlay_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_big_overlay_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_big_overlay_color',
	'',
	esc_html__( 'Color', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_big_overlay_color',
	$masonry_gallery_square_big_overlay_color
);

$masonry_gallery_square_big_overlay_transparency = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_overlay_transparency',
	'',
	esc_html__( 'Transparency (0=full - 1=opaque)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_big_overlay_transparency',
	$masonry_gallery_square_big_overlay_transparency
);

$masonry_gallery_square_big_overlay_bttn_icn = new BurstMikadoGroup(
	esc_html__( 'With Button and With Icon Overlay Style', 'burst' ),
	esc_html__( 'Define Square Big With Button and With Icon Overlay Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_square_big_overlay_bttn_icn',
	$masonry_gallery_square_big_overlay_bttn_icn
);

$row1 = new BurstMikadoRow();
$masonry_gallery_square_big_overlay_bttn_icn->addChild(
	"row1",
	$row1
);

$masonry_gallery_square_big_overlay_bttn_icn_clr = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_big_overlay_bttn_icn_clr',
	'',
	esc_html__( 'Color', 'burst' ),
	esc_html__( 'This is some description', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_big_overlay_bttn_icn_clr',
	$masonry_gallery_square_big_overlay_bttn_icn_clr
);

$masonry_gallery_square_big_overlay_bttn_icn_trnsp = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_overlay_bttn_icn_trnsp',
	'',
	esc_html__( 'Transparency', 'burst' ),
	esc_html__( 'This is some description', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_big_overlay_bttn_icn_trnsp',
	$masonry_gallery_square_big_overlay_bttn_icn_trnsp
);

$masonry_gallery_square_big_overlay_bttn_icn_clr_hvr = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_big_overlay_bttn_icn_clr_hvr',
	'',
	esc_html__( 'Hover Color', 'burst' ),
	esc_html__( 'This is some description', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_big_overlay_bttn_icn_clr_hvr',
	$masonry_gallery_square_big_overlay_bttn_icn_clr_hvr
);

$masonry_gallery_square_big_overlay_bttn_icn_trnsp_hvr = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_big_overlay_bttn_icn_trnsp_hvr',
	'',
	esc_html__( 'Hover Transparency', 'burst' ),
	esc_html__( 'This is some description', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_big_overlay_bttn_icn_trnsp_hvr',
	$masonry_gallery_square_big_overlay_bttn_icn_trnsp_hvr
);

$masonry_gallery_square_big_spacing_group = new BurstMikadoGroup(
	esc_html__( 'Text Alignment', 'burst' ),
	esc_html__( 'Define Text Alignment', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_square_big_spacing_group',
	$masonry_gallery_square_big_spacing_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_square_big_spacing_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_big_text_align = new BurstMikadoField(
	"selectsimple",
	"masonry_gallery_square_big_text_align",
	"center",
	esc_html__( "Text Alignment", 'burst' ),
	esc_html__( "Choose text position", 'burst' ),
	array(
		"center" => esc_html__( "Center", 'burst' ),
		"left" => esc_html__( "Left", 'burst' ),
		"right" => esc_html__( "Right", 'burst' )
	)
);

$row1->addChild(
	"masonry_gallery_square_big_text_align",
	$masonry_gallery_square_big_text_align
);

$masonry_gallery_square_big_padding_group = new BurstMikadoGroup(
	esc_html__( 'Content Padding', 'burst' ),
	esc_html__( 'Please insert padding in px(or %) i.e. 5px (or 5%)', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_square_big_padding_group',
	$masonry_gallery_square_big_padding_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_square_big_padding_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_big_padding_left = new BurstMikadoField(
	"textsimple",
	"masonry_gallery_square_big_padding_left",
	"",
	esc_html__( "Padding Left", 'burst' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px(or 5%)", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_square_big_padding_left",
	$masonry_gallery_square_big_padding_left
);

$masonry_gallery_square_big_padding_right = new BurstMikadoField(
	"textsimple",
	"masonry_gallery_square_big_padding_right",
	"",
	esc_html__( "Padding Right", 'burst' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px(or 5%)", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_square_big_padding_right",
	$masonry_gallery_square_big_padding_right
);

//Square Small
$masonry_gallery_square_small_title = new BurstMikadoTitle(
	'masonry_gallery_square_small_title',
	esc_html__( 'Square Small', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_square_small_title',
	$masonry_gallery_square_small_title
);

$masonry_gallery_square_small_title_group = new BurstMikadoGroup(
	esc_html__( 'Title Style', 'burst' ),
	esc_html__( 'Define Square Small Title Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_square_small_title_group',
	$masonry_gallery_square_small_title_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_square_small_title_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_square_small_title_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_small_title_color',
	'',
	esc_html__( 'Title Color', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_small_title_color',
	$masonry_gallery_square_small_title_color
);

$masonry_gallery_square_small_title_font_size = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_small_title_font_size',
	'',
	esc_html__( 'Font size (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_small_title_font_size',
	$masonry_gallery_square_small_title_font_size
);

$masonry_gallery_square_small_title_line_height = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_small_title_line_height',
	'',
	esc_html__( 'Line Height (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_small_title_line_height',
	$masonry_gallery_square_small_title_line_height
);

$masonry_gallery_square_small_title_text_transform = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_square_small_title_text_transform',
	'',
	esc_html__( 'Text Transform', 'burst' ),
	'',
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	'masonry_gallery_square_small_title_text_transform',
	$masonry_gallery_square_small_title_text_transform
);

$row2 = new BurstMikadoRow( true );
$masonry_gallery_square_small_title_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_square_small_title_font_family = new BurstMikadoField(
	'fontsimple',
	'masonry_gallery_square_small_title_font_family',
	'-1',
	esc_html__( 'Font Family', 'burst' )
);
$row2->addChild(
	'masonry_gallery_square_small_title_font_family',
	$masonry_gallery_square_small_title_font_family
);

$masonry_gallery_square_small_title_font_style = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_square_small_title_font_style',
	'',
	esc_html__( 'Font Style', 'burst' ),
	'',
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	'masonry_gallery_square_small_title_font_style',
	$masonry_gallery_square_small_title_font_style
);

$masonry_gallery_square_small_title_font_weight = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_square_small_title_font_weight',
	'',
	esc_html__( 'Font Weight', 'burst' ),
	'',
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	'masonry_gallery_square_small_title_font_weight',
	$masonry_gallery_square_small_title_font_weight
);

$masonry_gallery_square_small_title_letter_spacing = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_small_title_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'burst' )
);
$row2->addChild(
	'masonry_gallery_square_small_title_letter_spacing',
	$masonry_gallery_square_small_title_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$masonry_gallery_square_small_title_group->addChild(
	"row3",
	$row3
);

$masonry_gallery_square_small_title_margin_bottom = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_small_title_margin_bottom',
	'',
	esc_html__( 'Margin Bottom', 'burst' )
);
$row3->addChild(
	'masonry_gallery_square_small_title_margin_bottom',
	$masonry_gallery_square_small_title_margin_bottom
);

$masonry_gallery_square_small_text_group = new BurstMikadoGroup(
	esc_html__( 'Text Style', 'burst' ),
	esc_html__( 'Define Square Small Text Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_square_small_text_group',
	$masonry_gallery_square_small_text_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_square_small_text_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_square_small_text_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_small_text_color',
	'',
	esc_html__( 'Text Color', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_small_text_color',
	$masonry_gallery_square_small_text_color
);

$masonry_gallery_square_small_text_font_size = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_small_text_font_size',
	'',
	esc_html__( 'Font size (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_small_text_font_size',
	$masonry_gallery_square_small_text_font_size
);

$masonry_gallery_square_small_text_line_height = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_small_text_line_height',
	'',
	esc_html__( 'Line Height (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_small_text_line_height',
	$masonry_gallery_square_small_text_line_height
);

$masonry_gallery_square_small_text_text_transform = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_square_small_text_text_transform',
	'',
	esc_html__( 'Text Transform', 'burst' ),
	'',
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	'masonry_gallery_square_small_text_text_transform',
	$masonry_gallery_square_small_text_text_transform
);

$row2 = new BurstMikadoRow( true );
$masonry_gallery_square_small_text_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_square_small_text_font_family = new BurstMikadoField(
	'fontsimple',
	'masonry_gallery_square_small_text_font_family',
	'-1',
	esc_html__( 'Font Family', 'burst' )
);
$row2->addChild(
	'masonry_gallery_square_small_text_font_family',
	$masonry_gallery_square_small_text_font_family
);

$masonry_gallery_square_small_text_font_style = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_square_small_text_font_style',
	'',
	esc_html__( 'Font Style', 'burst' ),
	'',
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	'masonry_gallery_square_small_text_font_style',
	$masonry_gallery_square_small_text_font_style
);

$masonry_gallery_square_small_text_font_weight = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_square_small_text_font_weight',
	'',
	esc_html__( 'Font Weight', 'burst' ),
	'',
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	'masonry_gallery_square_small_text_font_weight',
	$masonry_gallery_square_small_text_font_weight
);

$masonry_gallery_square_small_text_letter_spacing = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_small_text_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'burst' )
);
$row2->addChild(
	'masonry_gallery_square_small_text_letter_spacing',
	$masonry_gallery_square_small_text_letter_spacing
);

$masonry_gallery_square_small_button_group = new BurstMikadoGroup(
	esc_html__( 'Button Style', 'burst' ),
	esc_html__( 'Define Square Small Button Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_square_small_button_group',
	$masonry_gallery_square_small_button_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_square_small_button_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_small_button_font_family = new BurstMikadoField(
	'fontsimple',
	'masonry_gallery_square_small_button_font_family',
	'-1',
	esc_html__( 'Font Family', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_small_button_font_family',
	$masonry_gallery_square_small_button_font_family
);

$masonry_gallery_square_small_button_font_style = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_square_small_button_font_style',
	'',
	esc_html__( 'Font Style', 'burst' ),
	'',
	burst_mikado_return_options_fontstyle()
);
$row1->addChild(
	'masonry_gallery_square_small_button_font_style',
	$masonry_gallery_square_small_button_font_style
);

$masonry_gallery_square_small_button_font_weight = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_square_small_button_font_weight',
	'',
	esc_html__( 'Font Weight', 'burst' ),
	'',
	burst_mikado_return_options_fontweight()
);
$row1->addChild(
	'masonry_gallery_square_small_button_font_weight',
	$masonry_gallery_square_small_button_font_weight
);

$masonry_gallery_square_small_button_text_transform = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_square_small_button_text_transform',
	'',
	esc_html__( 'Text Transform', 'burst' ),
	'',
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	'masonry_gallery_square_small_button_text_transform',
	$masonry_gallery_square_small_button_text_transform
);

$row2 = new BurstMikadoRow( true );
$masonry_gallery_square_small_button_group->addChild(
	'row2',
	$row2
);

$masonry_gallery_square_small_button_font_size = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_small_button_font_size',
	'',
	esc_html__( 'Text Size (px)', 'burst' )
);
$row2->addChild(
	'masonry_gallery_square_small_button_font_size',
	$masonry_gallery_square_small_button_font_size
);

$masonry_gallery_square_small_button_line_height = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_small_button_line_height',
	'',
	esc_html__( 'Line Height (px)', 'burst' )
);
$row2->addChild(
	'masonry_gallery_square_small_button_line_height',
	$masonry_gallery_square_small_button_line_height
);

$masonry_gallery_square_small_button_letter_spacing = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_small_button_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'burst' )
);
$row2->addChild(
	'masonry_gallery_square_small_button_letter_spacing',
	$masonry_gallery_square_small_button_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$masonry_gallery_square_small_button_group->addChild(
	'row3',
	$row3
);

$masonry_gallery_square_small_button_text_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_small_button_text_color',
	'',
	esc_html__( 'Text Color', 'burst' )
);
$row3->addChild(
	'masonry_gallery_square_small_button_text_color',
	$masonry_gallery_square_small_button_text_color
);

$masonry_gallery_square_small_button_hover_text_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_small_button_hover_text_color',
	'',
	esc_html__( 'Hover Text Color', 'burst' )
);
$row3->addChild(
	'masonry_gallery_square_small_button_hover_text_color',
	$masonry_gallery_square_small_button_hover_text_color
);

$masonry_gallery_square_small_button_background_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_small_button_background_color',
	'',
	esc_html__( 'Background Color', 'burst' )
);
$row3->addChild(
	'masonry_gallery_square_small_button_background_color',
	$masonry_gallery_square_small_button_background_color
);

$masonry_gallery_square_small_button_hover_background_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_small_button_hover_background_color',
	'',
	esc_html__( 'Hover Background Color', 'burst' )
);
$row3->addChild(
	'masonry_gallery_square_small_button_hover_background_color',
	$masonry_gallery_square_small_button_hover_background_color
);

$row4 = new BurstMikadoRow( true );
$masonry_gallery_square_small_button_group->addChild(
	'row4',
	$row4
);

$masonry_gallery_square_small_button_border_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_small_button_border_color',
	'',
	esc_html__( 'Border Color', 'burst' )
);
$row4->addChild(
	'masonry_gallery_square_small_button_border_color',
	$masonry_gallery_square_small_button_border_color
);

$masonry_gallery_square_small_button_hover_border_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_small_button_hover_border_color',
	'',
	esc_html__( 'Hover Border Color', 'burst' )
);
$row4->addChild(
	'masonry_gallery_square_small_button_hover_border_color',
	$masonry_gallery_square_small_button_hover_border_color
);

$masonry_gallery_square_small_button_border_width = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_small_button_border_width',
	'',
	esc_html__( 'Border Width (px)', 'burst' )
);
$row4->addChild(
	'masonry_gallery_square_small_button_border_width',
	$masonry_gallery_square_small_button_border_width
);

$masonry_gallery_square_small_button_border_radius = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_small_button_border_radius',
	'',
	esc_html__( 'Border Radius (px)', 'burst' )
);
$row4->addChild(
	'masonry_gallery_square_small_button_border_radius',
	$masonry_gallery_square_small_button_border_radius
);

$row5 = new BurstMikadoRow( true );
$masonry_gallery_square_small_button_group->addChild(
	'row5',
	$row5
);

$masonry_gallery_square_small_button_padding_left = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_small_button_padding_left',
	'',
	esc_html__( 'Padding Left (px)', 'burst' )
);
$row5->addChild(
	'masonry_gallery_square_small_button_padding_left',
	$masonry_gallery_square_small_button_padding_left
);

$masonry_gallery_square_small_button_padding_right = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_small_button_padding_right',
	'',
	esc_html__( 'Padding Right (px)', 'burst' )
);
$row5->addChild(
	'masonry_gallery_square_small_button_padding_right',
	$masonry_gallery_square_small_button_padding_right
);

$masonry_gallery_square_small_button_margin_top = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_small_button_margin_top',
	'',
	esc_html__( 'Margin Top', 'burst' )
);
$row5->addChild(
	'masonry_gallery_square_small_button_margin_top',
	$masonry_gallery_square_small_button_margin_top
);

$masonry_gallery_square_small_icon_group = new BurstMikadoGroup(
	esc_html__( 'Icon Style', 'burst' ),
	esc_html__( 'Define Square Small Icon Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_square_small_icon_group',
	$masonry_gallery_square_small_icon_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_square_small_icon_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_small_icon_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_small_icon_color',
	'',
	esc_html__( 'Icon Color', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_small_icon_color',
	$masonry_gallery_square_small_icon_color
);

$masonry_gallery_square_small_icon_hover_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_small_icon_hover_color',
	'',
	esc_html__( 'Icon Hover Color', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_small_icon_hover_color',
	$masonry_gallery_square_small_icon_hover_color
);

$masonry_gallery_square_small_icon_size = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_small_icon_size',
	'',
	esc_html__( 'Icon Size (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_small_icon_size',
	$masonry_gallery_square_small_icon_size
);

$masonry_gallery_square_small_icon_margin_bottom = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_small_icon_margin_bottom',
	'',
	esc_html__( 'Margin Bottom (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_small_icon_margin_bottom',
	$masonry_gallery_square_small_icon_margin_bottom
);

$masonry_gallery_square_small_overlay_group = new BurstMikadoGroup(
	esc_html__( 'Standard Type Overlay Style', 'burst' ),
	esc_html__( 'Define Square Small Standard Overlay Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_square_small_overlay_group',
	$masonry_gallery_square_small_overlay_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_square_small_overlay_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_small_overlay_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_small_overlay_color',
	'',
	esc_html__( 'Color', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_small_overlay_color',
	$masonry_gallery_square_small_overlay_color
);

$masonry_gallery_square_small_overlay_transparency = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_small_overlay_transparency',
	'',
	esc_html__( 'Transparency (0=full - 1=opaque)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_small_overlay_transparency',
	$masonry_gallery_square_small_overlay_transparency
);

$masonry_gallery_square_small_overlay_bttn_icn = new BurstMikadoGroup(
	esc_html__( 'With Button and With Icon Overlay Style', 'burst' ),
	esc_html__( 'Define Square Small With Button and With Icon Overlay Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_square_small_overlay_bttn_icn',
	$masonry_gallery_square_small_overlay_bttn_icn
);

$row1 = new BurstMikadoRow();
$masonry_gallery_square_small_overlay_bttn_icn->addChild(
	"row1",
	$row1
);

$masonry_gallery_square_small_overlay_bttn_icn_clr = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_small_overlay_bttn_icn_clr',
	'',
	esc_html__( 'Color', 'burst' ),
	esc_html__( 'This is some description', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_small_overlay_bttn_icn_clr',
	$masonry_gallery_square_small_overlay_bttn_icn_clr
);

$masonry_gallery_square_small_overlay_bttn_icn_trnsp = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_small_overlay_bttn_icn_trnsp',
	'',
	esc_html__( 'Transparency', 'burst' ),
	esc_html__( 'This is some description', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_small_overlay_bttn_icn_trnsp',
	$masonry_gallery_square_small_overlay_bttn_icn_trnsp
);

$masonry_gallery_square_small_overlay_bttn_icn_clr_hvr = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_square_small_overlay_bttn_icn_clr_hvr',
	'',
	esc_html__( 'Hover Color', 'burst' ),
	esc_html__( 'This is some description', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_small_overlay_bttn_icn_clr_hvr',
	$masonry_gallery_square_small_overlay_bttn_icn_clr_hvr
);

$masonry_gallery_square_small_overlay_bttn_icn_trnsp_hvr = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_square_small_overlay_bttn_icn_trnsp_hvr',
	'',
	esc_html__( 'Hover Transparency', 'burst' ),
	esc_html__( 'This is some description', 'burst' )
);
$row1->addChild(
	'masonry_gallery_square_small_overlay_bttn_icn_trnsp_hvr',
	$masonry_gallery_square_small_overlay_bttn_icn_trnsp_hvr
);

$masonry_gallery_square_small_spacing_group = new BurstMikadoGroup(
	esc_html__( 'Text Alignment', 'burst' ),
	esc_html__( 'Define Text Alignment', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_square_small_spacing_group',
	$masonry_gallery_square_small_spacing_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_square_small_spacing_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_small_text_align = new BurstMikadoField(
	"selectsimple",
	"masonry_gallery_square_small_text_align",
	"center",
	esc_html__( "Text Alignment", 'burst' ),
	esc_html__( "Choose text position", 'burst' ),
	array(
		"center" => esc_html__( "Center", 'burst' ),
		"left" => esc_html__( "Left", 'burst' ),
		"right" => esc_html__( "Right", 'burst' )
	)
);

$row1->addChild(
	"masonry_gallery_square_small_text_align",
	$masonry_gallery_square_small_text_align
);

$masonry_gallery_square_small_padding_group = new BurstMikadoGroup(
	esc_html__( 'Content Padding', 'burst' ),
	esc_html__( 'Please insert padding in px(or %) i.e. 5px (or 5%)', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_square_small_padding_group',
	$masonry_gallery_square_small_padding_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_square_small_padding_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_small_padding_left = new BurstMikadoField(
	"textsimple",
	"masonry_gallery_square_small_padding_left",
	"",
	esc_html__( "Padding Left", 'burst' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px(or 5%)", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_square_small_padding_left",
	$masonry_gallery_square_small_padding_left
);

$masonry_gallery_square_small_padding_right = new BurstMikadoField(
	"textsimple",
	"masonry_gallery_square_small_padding_right",
	"",
	esc_html__( "Padding Right", 'burst' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px(or 5%)", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_square_small_padding_right",
	$masonry_gallery_square_small_padding_right
);

//Rectangle Portrait
$masonry_gallery_rectangle_portrait_title = new BurstMikadoTitle(
	'masonry_gallery_rectangle_portrait_title',
	esc_html__( 'Rectangle Portrait', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_title',
	$masonry_gallery_rectangle_portrait_title
);

$masonry_gallery_rectangle_portrait_title_group = new BurstMikadoGroup(
	esc_html__( 'Title Style', 'burst' ),
	esc_html__( 'Define Rectangle Portrait Title Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_title_group',
	$masonry_gallery_rectangle_portrait_title_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_rectangle_portrait_title_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_rectangle_portrait_title_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_title_color',
	'',
	esc_html__( 'Title Color', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_title_color',
	$masonry_gallery_rectangle_portrait_title_color
);

$masonry_gallery_rectangle_portrait_title_font_size = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_title_font_size',
	'',
	esc_html__( 'Font size (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_title_font_size',
	$masonry_gallery_rectangle_portrait_title_font_size
);

$masonry_gallery_rectangle_portrait_title_line_height = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_title_line_height',
	'',
	esc_html__( 'Line Height (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_title_line_height',
	$masonry_gallery_rectangle_portrait_title_line_height
);

$masonry_gallery_rectangle_portrait_title_text_transform = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_title_text_transform',
	'',
	esc_html__( 'Text Transform', 'burst' ),
	'',
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_title_text_transform',
	$masonry_gallery_rectangle_portrait_title_text_transform
);

$row2 = new BurstMikadoRow( true );
$masonry_gallery_rectangle_portrait_title_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_rectangle_portrait_title_font_family = new BurstMikadoField(
	'fontsimple',
	'masonry_gallery_rectangle_portrait_title_font_family',
	'-1',
	esc_html__( 'Font Family', 'burst' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_title_font_family',
	$masonry_gallery_rectangle_portrait_title_font_family
);

$masonry_gallery_rectangle_portrait_title_font_style = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_title_font_style',
	'',
	esc_html__( 'Font Style', 'burst' ),
	'',
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_title_font_style',
	$masonry_gallery_rectangle_portrait_title_font_style
);

$masonry_gallery_rectangle_portrait_title_font_weight = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_title_font_weight',
	'',
	esc_html__( 'Font Weight', 'burst' ),
	'',
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_title_font_weight',
	$masonry_gallery_rectangle_portrait_title_font_weight
);

$masonry_gallery_rectangle_portrait_title_letter_spacing = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_title_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'burst' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_title_letter_spacing',
	$masonry_gallery_rectangle_portrait_title_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$masonry_gallery_rectangle_portrait_title_group->addChild(
	"row3",
	$row3
);

$masonry_gallery_rectangle_portrait_title_margin_bottom = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_title_margin_bottom',
	'',
	esc_html__( 'Margin Bottom', 'burst' )
);
$row3->addChild(
	'masonry_gallery_rectangle_portrait_title_margin_bottom',
	$masonry_gallery_rectangle_portrait_title_margin_bottom
);

$masonry_gallery_rectangle_portrait_text_group = new BurstMikadoGroup(
	esc_html__( 'Text Style', 'burst' ),
	esc_html__( 'Define Rectangle Portrait Text Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_text_group',
	$masonry_gallery_rectangle_portrait_text_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_rectangle_portrait_text_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_rectangle_portrait_text_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_text_color',
	'',
	esc_html__( 'Text Color', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_text_color',
	$masonry_gallery_rectangle_portrait_text_color
);

$masonry_gallery_rectangle_portrait_text_font_size = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_text_font_size',
	'',
	esc_html__( 'Font size (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_text_font_size',
	$masonry_gallery_rectangle_portrait_text_font_size
);

$masonry_gallery_rectangle_portrait_text_line_height = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_text_line_height',
	'',
	esc_html__( 'Line Height (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_text_line_height',
	$masonry_gallery_rectangle_portrait_text_line_height
);

$masonry_gallery_rectangle_portrait_text_text_transform = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_text_text_transform',
	'',
	esc_html__( 'Text Transform', 'burst' ),
	'',
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_text_text_transform',
	$masonry_gallery_rectangle_portrait_text_text_transform
);

$row2 = new BurstMikadoRow( true );
$masonry_gallery_rectangle_portrait_text_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_rectangle_portrait_text_font_family = new BurstMikadoField(
	'fontsimple',
	'masonry_gallery_rectangle_portrait_text_font_family',
	'-1',
	esc_html__( 'Font Family', 'burst' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_text_font_family',
	$masonry_gallery_rectangle_portrait_text_font_family
);

$masonry_gallery_rectangle_portrait_text_font_style = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_text_font_style',
	'',
	esc_html__( 'Font Style', 'burst' ),
	'',
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_text_font_style',
	$masonry_gallery_rectangle_portrait_text_font_style
);

$masonry_gallery_rectangle_portrait_text_font_weight = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_text_font_weight',
	'',
	esc_html__( 'Font Weight', 'burst' ),
	'',
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_text_font_weight',
	$masonry_gallery_rectangle_portrait_text_font_weight
);

$masonry_gallery_rectangle_portrait_text_letter_spacing = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_text_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'burst' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_text_letter_spacing',
	$masonry_gallery_rectangle_portrait_text_letter_spacing
);

$masonry_gallery_rectangle_portrait_button_group = new BurstMikadoGroup(
	esc_html__( 'Button Style', 'burst' ),
	esc_html__( 'Define Rectangle Portrait Button Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_button_group',
	$masonry_gallery_rectangle_portrait_button_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_rectangle_portrait_button_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_portrait_button_font_family = new BurstMikadoField(
	'fontsimple',
	'masonry_gallery_rectangle_portrait_button_font_family',
	'-1',
	esc_html__( 'Font Family', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_button_font_family',
	$masonry_gallery_rectangle_portrait_button_font_family
);

$masonry_gallery_rectangle_portrait_button_font_style = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_button_font_style',
	'',
	esc_html__( 'Font Style', 'burst' ),
	'',
	burst_mikado_return_options_fontstyle()
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_button_font_style',
	$masonry_gallery_rectangle_portrait_button_font_style
);

$masonry_gallery_rectangle_portrait_button_font_weight = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_button_font_weight',
	'',
	esc_html__( 'Font Weight', 'burst' ),
	'',
	burst_mikado_return_options_fontweight()
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_button_font_weight',
	$masonry_gallery_rectangle_portrait_button_font_weight
);

$masonry_gallery_rectangle_portrait_button_text_transform = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_button_text_transform',
	'',
	esc_html__( 'Text Transform', 'burst' ),
	'',
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_button_text_transform',
	$masonry_gallery_rectangle_portrait_button_text_transform
);

$row2 = new BurstMikadoRow( true );
$masonry_gallery_rectangle_portrait_button_group->addChild(
	'row2',
	$row2
);

$masonry_gallery_rectangle_portrait_button_font_size = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_font_size',
	'',
	esc_html__( 'Text Size (px)', 'burst' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_button_font_size',
	$masonry_gallery_rectangle_portrait_button_font_size
);

$masonry_gallery_rectangle_portrait_button_line_height = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_line_height',
	'',
	esc_html__( 'Line Height (px)', 'burst' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_button_line_height',
	$masonry_gallery_rectangle_portrait_button_line_height
);

$masonry_gallery_rectangle_portrait_button_letter_spacing = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'burst' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_button_letter_spacing',
	$masonry_gallery_rectangle_portrait_button_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$masonry_gallery_rectangle_portrait_button_group->addChild(
	'row3',
	$row3
);

$masonry_gallery_rectangle_portrait_button_text_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_button_text_color',
	'',
	esc_html__( 'Text Color', 'burst' )
);
$row3->addChild(
	'masonry_gallery_rectangle_portrait_button_text_color',
	$masonry_gallery_rectangle_portrait_button_text_color
);

$masonry_gallery_rectangle_portrait_button_hover_text_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_button_hover_text_color',
	'',
	esc_html__( 'Hover Text Color', 'burst' )
);
$row3->addChild(
	'masonry_gallery_rectangle_portrait_button_hover_text_color',
	$masonry_gallery_rectangle_portrait_button_hover_text_color
);

$masonry_gallery_rectangle_portrait_button_background_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_button_background_color',
	'',
	esc_html__( 'Background Color', 'burst' )
);
$row3->addChild(
	'masonry_gallery_rectangle_portrait_button_background_color',
	$masonry_gallery_rectangle_portrait_button_background_color
);

$masonry_gallery_rectangle_portrait_button_hover_background_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_button_hover_background_color',
	'',
	esc_html__( 'Hover Background Color', 'burst' )
);
$row3->addChild(
	'masonry_gallery_rectangle_portrait_button_hover_background_color',
	$masonry_gallery_rectangle_portrait_button_hover_background_color
);

$row4 = new BurstMikadoRow( true );
$masonry_gallery_rectangle_portrait_button_group->addChild(
	'row4',
	$row4
);

$masonry_gallery_rectangle_portrait_button_border_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_button_border_color',
	'',
	esc_html__( 'Border Color', 'burst' )
);
$row4->addChild(
	'masonry_gallery_rectangle_portrait_button_border_color',
	$masonry_gallery_rectangle_portrait_button_border_color
);

$masonry_gallery_rectangle_portrait_button_hover_border_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_button_hover_border_color',
	'',
	esc_html__( 'Hover Border Color', 'burst' )
);
$row4->addChild(
	'masonry_gallery_rectangle_portrait_button_hover_border_color',
	$masonry_gallery_rectangle_portrait_button_hover_border_color
);

$masonry_gallery_rectangle_portrait_button_border_width = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_border_width',
	'',
	esc_html__( 'Border Width (px)', 'burst' )
);
$row4->addChild(
	'masonry_gallery_rectangle_portrait_button_border_width',
	$masonry_gallery_rectangle_portrait_button_border_width
);

$masonry_gallery_rectangle_portrait_button_border_radius = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_border_radius',
	'',
	esc_html__( 'Border Radius (px)', 'burst' )
);
$row4->addChild(
	'masonry_gallery_rectangle_portrait_button_border_radius',
	$masonry_gallery_rectangle_portrait_button_border_radius
);

$row5 = new BurstMikadoRow( true );
$masonry_gallery_rectangle_portrait_button_group->addChild(
	'row5',
	$row5
);

$masonry_gallery_rectangle_portrait_button_padding_left = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_padding_left',
	'',
	esc_html__( 'Padding Left (px)', 'burst' )
);
$row5->addChild(
	'masonry_gallery_rectangle_portrait_button_padding_left',
	$masonry_gallery_rectangle_portrait_button_padding_left
);

$masonry_gallery_rectangle_portrait_button_padding_right = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_padding_right',
	'',
	esc_html__( 'Padding Right (px)', 'burst' )
);
$row5->addChild(
	'masonry_gallery_rectangle_portrait_button_padding_right',
	$masonry_gallery_rectangle_portrait_button_padding_right
);

$masonry_gallery_rectangle_portrait_button_margin_top = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_margin_top',
	'',
	esc_html__( 'Margin Top', 'burst' )
);
$row5->addChild(
	'masonry_gallery_rectangle_portrait_button_margin_top',
	$masonry_gallery_rectangle_portrait_button_margin_top
);

$masonry_gallery_rectangle_portrait_icon_group = new BurstMikadoGroup(
	esc_html__( 'Icon Style', 'burst' ),
	esc_html__( 'Define Rectangle Portrait Icon Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_icon_group',
	$masonry_gallery_rectangle_portrait_icon_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_rectangle_portrait_icon_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_portrait_icon_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_icon_color',
	'',
	esc_html__( 'Icon Color', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_icon_color',
	$masonry_gallery_rectangle_portrait_icon_color
);

$masonry_gallery_rectangle_portrait_icon_hover_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_icon_hover_color',
	'',
	esc_html__( 'Icon Hover Color', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_icon_hover_color',
	$masonry_gallery_rectangle_portrait_icon_hover_color
);

$masonry_gallery_rectangle_portrait_icon_size = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_icon_size',
	'',
	esc_html__( 'Icon Size (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_icon_size',
	$masonry_gallery_rectangle_portrait_icon_size
);

$masonry_gallery_rectangle_portrait_icon_margin_bottom = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_icon_margin_bottom',
	'',
	esc_html__( 'Margin Bottom (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_icon_margin_bottom',
	$masonry_gallery_rectangle_portrait_icon_margin_bottom
);

$masonry_gallery_rectangle_portrait_overlay_group = new BurstMikadoGroup(
	esc_html__( 'Standard Type Overlay Style', 'burst' ),
	esc_html__( 'Define Rectangle Portrait Standard Overlay Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_overlay_group',
	$masonry_gallery_rectangle_portrait_overlay_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_rectangle_portrait_overlay_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_portrait_overlay_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_overlay_color',
	'',
	esc_html__( 'Color', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_overlay_color',
	$masonry_gallery_rectangle_portrait_overlay_color
);

$masonry_gallery_rectangle_portrait_overlay_transparency = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_overlay_transparency',
	'',
	esc_html__( 'Transparency (0=full - 1=opaque)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_overlay_transparency',
	$masonry_gallery_rectangle_portrait_overlay_transparency
);

$masonry_gallery_rectangle_portrait_overlay_bttn_icn = new BurstMikadoGroup(
	esc_html__( 'With Button and With Icon Overlay Style', 'burst' ),
	esc_html__( 'Define Rectangle Portrait With Button and With Icon Overlay Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_overlay_bttn_icn',
	$masonry_gallery_rectangle_portrait_overlay_bttn_icn
);

$row1 = new BurstMikadoRow();
$masonry_gallery_rectangle_portrait_overlay_bttn_icn->addChild(
	"row1",
	$row1
);

$masonry_gallery_rectangle_portrait_overlay_bttn_icn_clr = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_overlay_bttn_icn_clr',
	'',
	esc_html__( 'Color', 'burst' ),
	esc_html__( 'This is some description', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_overlay_bttn_icn_clr',
	$masonry_gallery_rectangle_portrait_overlay_bttn_icn_clr
);

$masonry_gallery_rectangle_portrait_overlay_bttn_icn_trnsp = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_overlay_bttn_icn_trnsp',
	'',
	esc_html__( 'Transparency', 'burst' ),
	esc_html__( 'This is some description', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_overlay_bttn_icn_trnsp',
	$masonry_gallery_rectangle_portrait_overlay_bttn_icn_trnsp
);

$masonry_gallery_rectangle_portrait_overlay_bttn_icn_clr_hvr = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_overlay_bttn_icn_clr_hvr',
	'',
	esc_html__( 'Hover Color', 'burst' ),
	esc_html__( 'This is some description', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_overlay_bttn_icn_clr_hvr',
	$masonry_gallery_rectangle_portrait_overlay_bttn_icn_clr_hvr
);

$masonry_gallery_rectangle_portrait_overlay_bttn_icn_trnsp_hvr = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_overlay_bttn_icn_trnsp_hvr',
	'',
	esc_html__( 'Hover Transparency', 'burst' ),
	esc_html__( 'This is some description', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_overlay_bttn_icn_trnsp_hvr',
	$masonry_gallery_rectangle_portrait_overlay_bttn_icn_trnsp_hvr
);

$masonry_gallery_rectangle_portrait_spacing_group = new BurstMikadoGroup(
	esc_html__( 'Text Alignment', 'burst' ),
	esc_html__( 'Define Text Alignment', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_spacing_group',
	$masonry_gallery_rectangle_portrait_spacing_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_rectangle_portrait_spacing_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_portrait_text_align = new BurstMikadoField(
	"selectsimple",
	"masonry_gallery_rectangle_portrait_text_align",
	"center",
	esc_html__( "Text Alignment", 'burst' ),
	esc_html__( "Choose text position", 'burst' ),
	array(
		"center" => esc_html__( "Center", 'burst' ),
		"left" => esc_html__( "Left", 'burst' ),
		"right" => esc_html__( "Right", 'burst' )
	)
);

$row1->addChild(
	"masonry_gallery_rectangle_portrait_text_align",
	$masonry_gallery_rectangle_portrait_text_align
);

$masonry_gallery_rectangle_portrait_padding_group = new BurstMikadoGroup(
	esc_html__( 'Content Padding', 'burst' ),
	esc_html__( 'Please insert padding in px(or %) i.e. 5px (or 5%)', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_padding_group',
	$masonry_gallery_rectangle_portrait_padding_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_rectangle_portrait_padding_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_portrait_padding_left = new BurstMikadoField(
	"textsimple",
	"masonry_gallery_rectangle_portrait_padding_left",
	"",
	esc_html__( "Padding Left", 'burst' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px(or 5%)", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_rectangle_portrait_padding_left",
	$masonry_gallery_rectangle_portrait_padding_left
);

$masonry_gallery_rectangle_portrait_padding_right = new BurstMikadoField(
	"textsimple",
	"masonry_gallery_rectangle_portrait_padding_right",
	"",
	esc_html__( "Padding Right", 'burst' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px(or 5%)", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_rectangle_portrait_padding_right",
	$masonry_gallery_rectangle_portrait_padding_right
);

//Rectangle Landscape
$masonry_gallery_rectangle_landscape_title = new BurstMikadoTitle(
	'masonry_gallery_rectangle_landscape_title',
	esc_html__( 'Rectangle Landscape', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_title',
	$masonry_gallery_rectangle_landscape_title
);

$masonry_gallery_rectangle_landscape_title_group = new BurstMikadoGroup(
	esc_html__( 'Title Style', 'burst' ),
	esc_html__( 'Define Rectangle Landscape Title Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_title_group',
	$masonry_gallery_rectangle_landscape_title_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_rectangle_landscape_title_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_rectangle_landscape_title_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_title_color',
	'',
	esc_html__( 'Title Color', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_title_color',
	$masonry_gallery_rectangle_landscape_title_color
);

$masonry_gallery_rectangle_landscape_title_font_size = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_title_font_size',
	'',
	esc_html__( 'Font size (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_title_font_size',
	$masonry_gallery_rectangle_landscape_title_font_size
);

$masonry_gallery_rectangle_landscape_title_line_height = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_title_line_height',
	'',
	esc_html__( 'Line Height (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_title_line_height',
	$masonry_gallery_rectangle_landscape_title_line_height
);

$masonry_gallery_rectangle_landscape_title_text_transform = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_title_text_transform',
	'',
	esc_html__( 'Text Transform', 'burst' ),
	'',
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_title_text_transform',
	$masonry_gallery_rectangle_landscape_title_text_transform
);

$row2 = new BurstMikadoRow( true );
$masonry_gallery_rectangle_landscape_title_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_rectangle_landscape_title_font_family = new BurstMikadoField(
	'fontsimple',
	'masonry_gallery_rectangle_landscape_title_font_family',
	'-1',
	esc_html__( 'Font Family', 'burst' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_title_font_family',
	$masonry_gallery_rectangle_landscape_title_font_family
);

$masonry_gallery_rectangle_landscape_title_font_style = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_title_font_style',
	'',
	esc_html__( 'Font Style', 'burst' ),
	'',
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_title_font_style',
	$masonry_gallery_rectangle_landscape_title_font_style
);

$masonry_gallery_rectangle_landscape_title_font_weight = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_title_font_weight',
	'',
	esc_html__( 'Font Weight', 'burst' ),
	'',
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_title_font_weight',
	$masonry_gallery_rectangle_landscape_title_font_weight
);

$masonry_gallery_rectangle_landscape_title_letter_spacing = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_title_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'burst' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_title_letter_spacing',
	$masonry_gallery_rectangle_landscape_title_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$masonry_gallery_rectangle_landscape_title_group->addChild(
	"row3",
	$row3
);

$masonry_gallery_rectangle_landscape_title_margin_bottom = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_title_margin_bottom',
	'',
	esc_html__( 'Margin Bottom', 'burst' )
);
$row3->addChild(
	'masonry_gallery_rectangle_landscape_title_margin_bottom',
	$masonry_gallery_rectangle_landscape_title_margin_bottom
);

$masonry_gallery_rectangle_landscape_text_group = new BurstMikadoGroup(
	esc_html__( 'Text Style', 'burst' ),
	esc_html__( 'Define Rectangle Landscape Text Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_text_group',
	$masonry_gallery_rectangle_landscape_text_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_rectangle_landscape_text_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_rectangle_landscape_text_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_text_color',
	'',
	esc_html__( 'Text Color', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_text_color',
	$masonry_gallery_rectangle_landscape_text_color
);

$masonry_gallery_rectangle_landscape_text_font_size = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_text_font_size',
	'',
	esc_html__( 'Font size (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_text_font_size',
	$masonry_gallery_rectangle_landscape_text_font_size
);

$masonry_gallery_rectangle_landscape_text_line_height = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_text_line_height',
	'',
	esc_html__( 'Line Height (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_text_line_height',
	$masonry_gallery_rectangle_landscape_text_line_height
);

$masonry_gallery_rectangle_landscape_text_text_transform = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_text_text_transform',
	'',
	esc_html__( 'Text Transform', 'burst' ),
	'',
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_text_text_transform',
	$masonry_gallery_rectangle_landscape_text_text_transform
);

$row2 = new BurstMikadoRow( true );
$masonry_gallery_rectangle_landscape_text_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_rectangle_landscape_text_font_family = new BurstMikadoField(
	'fontsimple',
	'masonry_gallery_rectangle_landscape_text_font_family',
	'-1',
	esc_html__( 'Font Family', 'burst' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_text_font_family',
	$masonry_gallery_rectangle_landscape_text_font_family
);

$masonry_gallery_rectangle_landscape_text_font_style = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_text_font_style',
	'',
	esc_html__( 'Font Style', 'burst' ),
	'',
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_text_font_style',
	$masonry_gallery_rectangle_landscape_text_font_style
);

$masonry_gallery_rectangle_landscape_text_font_weight = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_text_font_weight',
	'',
	esc_html__( 'Font Weight', 'burst' ),
	'',
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_text_font_weight',
	$masonry_gallery_rectangle_landscape_text_font_weight
);

$masonry_gallery_rectangle_landscape_text_letter_spacing = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_text_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'burst' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_text_letter_spacing',
	$masonry_gallery_rectangle_landscape_text_letter_spacing
);

$masonry_gallery_rectangle_landscape_button_group = new BurstMikadoGroup(
	esc_html__( 'Button Style', 'burst' ),
	esc_html__( 'Define Rectangle Landscape Button Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_button_group',
	$masonry_gallery_rectangle_landscape_button_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_rectangle_landscape_button_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_landscape_button_font_family = new BurstMikadoField(
	'fontsimple',
	'masonry_gallery_rectangle_landscape_button_font_family',
	'-1',
	esc_html__( 'Font Family', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_button_font_family',
	$masonry_gallery_rectangle_landscape_button_font_family
);

$masonry_gallery_rectangle_landscape_button_font_style = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_button_font_style',
	'',
	esc_html__( 'Font Style', 'burst' ),
	'',
	burst_mikado_return_options_fontstyle()
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_button_font_style',
	$masonry_gallery_rectangle_landscape_button_font_style
);

$masonry_gallery_rectangle_landscape_button_font_weight = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_button_font_weight',
	'',
	esc_html__( 'Font Weight', 'burst' ),
	'',
	burst_mikado_return_options_fontweight()
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_button_font_weight',
	$masonry_gallery_rectangle_landscape_button_font_weight
);

$masonry_gallery_rectangle_landscape_button_text_transform = new BurstMikadoField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_button_text_transform',
	'',
	esc_html__( 'Text Transform', 'burst' ),
	'',
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_button_text_transform',
	$masonry_gallery_rectangle_landscape_button_text_transform
);

$row2 = new BurstMikadoRow( true );
$masonry_gallery_rectangle_landscape_button_group->addChild(
	'row2',
	$row2
);

$masonry_gallery_rectangle_landscape_button_font_size = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_font_size',
	'',
	esc_html__( 'Text Size (px)', 'burst' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_button_font_size',
	$masonry_gallery_rectangle_landscape_button_font_size
);

$masonry_gallery_rectangle_landscape_button_line_height = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_line_height',
	'',
	esc_html__( 'Line Height (px)', 'burst' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_button_line_height',
	$masonry_gallery_rectangle_landscape_button_line_height
);

$masonry_gallery_rectangle_landscape_button_letter_spacing = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'burst' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_button_letter_spacing',
	$masonry_gallery_rectangle_landscape_button_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$masonry_gallery_rectangle_landscape_button_group->addChild(
	'row3',
	$row3
);

$masonry_gallery_rectangle_landscape_button_text_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_button_text_color',
	'',
	esc_html__( 'Text Color', 'burst' )
);
$row3->addChild(
	'masonry_gallery_rectangle_landscape_button_text_color',
	$masonry_gallery_rectangle_landscape_button_text_color
);

$masonry_gallery_rectangle_landscape_button_hover_text_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_button_hover_text_color',
	'',
	esc_html__( 'Hover Text Color', 'burst' )
);
$row3->addChild(
	'masonry_gallery_rectangle_landscape_button_hover_text_color',
	$masonry_gallery_rectangle_landscape_button_hover_text_color
);

$masonry_gallery_rectangle_landscape_button_background_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_button_background_color',
	'',
	esc_html__( 'Background Color', 'burst' )
);
$row3->addChild(
	'masonry_gallery_rectangle_landscape_button_background_color',
	$masonry_gallery_rectangle_landscape_button_background_color
);

$masonry_gallery_rectangle_landscape_button_hover_background_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_button_hover_background_color',
	'',
	esc_html__( 'Hover Background Color', 'burst' )
);
$row3->addChild(
	'masonry_gallery_rectangle_landscape_button_hover_background_color',
	$masonry_gallery_rectangle_landscape_button_hover_background_color
);

$row4 = new BurstMikadoRow( true );
$masonry_gallery_rectangle_landscape_button_group->addChild(
	'row4',
	$row4
);

$masonry_gallery_rectangle_landscape_button_border_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_button_border_color',
	'',
	esc_html__( 'Border Color', 'burst' )
);
$row4->addChild(
	'masonry_gallery_rectangle_landscape_button_border_color',
	$masonry_gallery_rectangle_landscape_button_border_color
);

$masonry_gallery_rectangle_landscape_button_hover_border_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_button_hover_border_color',
	'',
	esc_html__( 'Hover Border Color', 'burst' )
);
$row4->addChild(
	'masonry_gallery_rectangle_landscape_button_hover_border_color',
	$masonry_gallery_rectangle_landscape_button_hover_border_color
);

$masonry_gallery_rectangle_landscape_button_border_width = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_border_width',
	'',
	esc_html__( 'Border Width (px)', 'burst' )
);
$row4->addChild(
	'masonry_gallery_rectangle_landscape_button_border_width',
	$masonry_gallery_rectangle_landscape_button_border_width
);

$masonry_gallery_rectangle_landscape_button_border_radius = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_border_radius',
	'',
	esc_html__( 'Border Radius (px)', 'burst' )
);
$row4->addChild(
	'masonry_gallery_rectangle_landscape_button_border_radius',
	$masonry_gallery_rectangle_landscape_button_border_radius
);

$row5 = new BurstMikadoRow( true );
$masonry_gallery_rectangle_landscape_button_group->addChild(
	'row5',
	$row5
);

$masonry_gallery_rectangle_landscape_button_padding_left = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_padding_left',
	'',
	esc_html__( 'Padding Left (px)', 'burst' )
);
$row5->addChild(
	'masonry_gallery_rectangle_landscape_button_padding_left',
	$masonry_gallery_rectangle_landscape_button_padding_left
);

$masonry_gallery_rectangle_landscape_button_padding_right = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_padding_right',
	'',
	esc_html__( 'Padding Right (px)', 'burst' )
);
$row5->addChild(
	'masonry_gallery_rectangle_landscape_button_padding_right',
	$masonry_gallery_rectangle_landscape_button_padding_right
);

$masonry_gallery_rectangle_landscape_button_margin_top = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_margin_top',
	'',
	esc_html__( 'Margin Top', 'burst' )
);
$row5->addChild(
	'masonry_gallery_rectangle_landscape_button_margin_top',
	$masonry_gallery_rectangle_landscape_button_margin_top
);

$masonry_gallery_rectangle_landscape_icon_group = new BurstMikadoGroup(
	esc_html__( 'Icon Style', 'burst' ),
	esc_html__( 'Define Rectangle Landscape Icon Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_icon_group',
	$masonry_gallery_rectangle_landscape_icon_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_rectangle_landscape_icon_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_landscape_icon_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_icon_color',
	'',
	esc_html__( 'Icon Color', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_icon_color',
	$masonry_gallery_rectangle_landscape_icon_color
);

$masonry_gallery_rectangle_landscape_icon_hover_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_icon_hover_color',
	'',
	esc_html__( 'Icon Hover Color', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_icon_hover_color',
	$masonry_gallery_rectangle_landscape_icon_hover_color
);

$masonry_gallery_rectangle_landscape_icon_size = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_icon_size',
	'',
	esc_html__( 'Icon Size (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_icon_size',
	$masonry_gallery_rectangle_landscape_icon_size
);

$masonry_gallery_rectangle_landscape_icon_margin_bottom = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_icon_margin_bottom',
	'',
	esc_html__( 'Margin Bottom (px)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_icon_margin_bottom',
	$masonry_gallery_rectangle_landscape_icon_margin_bottom
);

$masonry_gallery_rectangle_landscape_overlay_group = new BurstMikadoGroup(
	esc_html__( 'Standard Type Overlay Style', 'burst' ),
	esc_html__( 'Define Rectangle Landscape Standard Overlay Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_overlay_group',
	$masonry_gallery_rectangle_landscape_overlay_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_rectangle_landscape_overlay_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_landscape_overlay_color = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_overlay_color',
	'',
	esc_html__( 'Color', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_overlay_color',
	$masonry_gallery_rectangle_landscape_overlay_color
);

$masonry_gallery_rectangle_landscape_overlay_transparency = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_overlay_transparency',
	'',
	esc_html__( 'Transparency (0=full - 1=opaque)', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_overlay_transparency',
	$masonry_gallery_rectangle_landscape_overlay_transparency
);

$masonry_gallery_rectangle_landscape_overlay_bttn_icn = new BurstMikadoGroup(
	esc_html__( 'With Button and With Icon Overlay Style', 'burst' ),
	esc_html__( 'Define Rectangle Landscape With Button and With Icon Overlay Style', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_overlay_bttn_icn',
	$masonry_gallery_rectangle_landscape_overlay_bttn_icn
);

$row1 = new BurstMikadoRow();
$masonry_gallery_rectangle_landscape_overlay_bttn_icn->addChild(
	"row1",
	$row1
);

$masonry_gallery_rectangle_landscape_overlay_bttn_icn_clr = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_overlay_bttn_icn_clr',
	'',
	esc_html__( 'Color', 'burst' ),
	esc_html__( 'This is some description', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_overlay_bttn_icn_clr',
	$masonry_gallery_rectangle_landscape_overlay_bttn_icn_clr
);

$masonry_gallery_rectangle_landscape_overlay_bttn_icn_trnsp = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_overlay_bttn_icn_trnsp',
	'',
	esc_html__( 'Transparency', 'burst' ),
	esc_html__( 'This is some description', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_overlay_bttn_icn_trnsp',
	$masonry_gallery_rectangle_landscape_overlay_bttn_icn_trnsp
);

$masonry_gallery_rectangle_landscape_overlay_bttn_icn_clr_hvr = new BurstMikadoField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_overlay_bttn_icn_clr_hvr',
	'',
	esc_html__( 'Hover Color', 'burst' ),
	esc_html__( 'This is some description', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_overlay_bttn_icn_clr_hvr',
	$masonry_gallery_rectangle_landscape_overlay_bttn_icn_clr_hvr
);

$masonry_gallery_rectangle_landscape_overlay_bttn_icn_trnsp_hvr = new BurstMikadoField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_overlay_bttn_icn_trnsp_hvr',
	'',
	esc_html__( 'Hover Transparency', 'burst' ),
	esc_html__( 'This is some description', 'burst' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_overlay_bttn_icn_trnsp_hvr',
	$masonry_gallery_rectangle_landscape_overlay_bttn_icn_trnsp_hvr
);

$masonry_gallery_rectangle_landscape_spacing_group = new BurstMikadoGroup(
	esc_html__( 'Text Alignment', 'burst' ),
	esc_html__( 'Define Text Alignment', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_spacing_group',
	$masonry_gallery_rectangle_landscape_spacing_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_rectangle_landscape_spacing_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_landscape_text_align = new BurstMikadoField(
	"selectsimple",
	"masonry_gallery_rectangle_landscape_text_align",
	"center",
	esc_html__( "Text Alignment", 'burst' ),
	esc_html__( "Choose text position", 'burst' ),
	array(
		"center" => esc_html__( "Center", 'burst' ),
		"left" => esc_html__( "Left", 'burst' ),
		"right" => esc_html__( "Right", 'burst' )
	)
);

$row1->addChild(
	"masonry_gallery_rectangle_landscape_text_align",
	$masonry_gallery_rectangle_landscape_text_align
);

$masonry_gallery_rectangle_landscape_padding_group = new BurstMikadoGroup(
	esc_html__( 'Content Padding', 'burst' ),
	esc_html__( 'Please insert padding in px(or %) i.e. 5px (or 5%)', 'burst' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_padding_group',
	$masonry_gallery_rectangle_landscape_padding_group
);

$row1 = new BurstMikadoRow();
$masonry_gallery_rectangle_landscape_padding_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_landscape_padding_left = new BurstMikadoField(
	"textsimple",
	"masonry_gallery_rectangle_landscape_padding_left",
	"",
	esc_html__( "Padding Left", 'burst' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px (or 5%)", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_rectangle_landscape_padding_left",
	$masonry_gallery_rectangle_landscape_padding_left
);

$masonry_gallery_rectangle_landscape_padding_right = new BurstMikadoField(
	"textsimple",
	"masonry_gallery_rectangle_landscape_padding_right",
	"",
	esc_html__( "Padding Right", 'burst' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px(or 5%)", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_rectangle_landscape_padding_right",
	$masonry_gallery_rectangle_landscape_padding_right
);

//Message Boxes

$panel8 = new BurstMikadoPanel(
	esc_html__( "Message Boxes", 'burst' ),
	"message_boxes_panel"
);
$elementsPage->addChild(
	"panel8",
	$panel8
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Message Box Style", 'burst' ),
	esc_html__( "Define Message Box Style", 'burst' )
);
$panel8->addChild(
	"group1",
	$group1
);
$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$message_title_color = new BurstMikadoField(
	"colorsimple",
	"message_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"message_title_color",
	$message_title_color
);

$message_backgroundcolor = new BurstMikadoField(
	"colorsimple",
	"message_backgroundcolor",
	"",
	esc_html__( "Background color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"message_backgroundcolor",
	$message_backgroundcolor
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);

$message_title_google_fonts = new BurstMikadoField(
	"fontsimple",
	"message_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"message_title_google_fonts",
	$message_title_google_fonts
);

$message_title_fontsize = new BurstMikadoField(
	"textsimple",
	"message_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"message_title_fontsize",
	$message_title_fontsize
);

$message_title_lineheight = new BurstMikadoField(
	"textsimple",
	"message_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"message_title_lineheight",
	$message_title_lineheight
);

$message_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"message_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"message_title_letter_spacing",
	$message_title_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$group1->addChild(
	"row3",
	$row3
);

$message_title_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"message_title_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row3->addChild(
	"message_title_fontstyle",
	$message_title_fontstyle
);

$message_title_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"message_title_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row3->addChild(
	"message_title_fontweight",
	$message_title_fontweight
);

$message_title_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"message_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row3->addChild(
	"message_title_text_transform",
	$message_title_text_transform
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Message Box Icon Style", 'burst' ),
	esc_html__( "Define styles for Message Box icons", 'burst' )
);
$panel8->addChild(
	"group2",
	$group2
);
$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$message_icon_color = new BurstMikadoField(
	"colorsimple",
	"message_icon_color",
	"",
	esc_html__( "Icon Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"message_icon_color",
	$message_icon_color
);

$message_icon_fontsize = new BurstMikadoField(
	"textsimple",
	"message_icon_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"message_icon_fontsize",
	$message_icon_fontsize
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Message Box Padding", 'burst' ),
	esc_html__( "Define message box padding", 'burst' )
);
$panel8->addChild(
	"group3",
	$group3
);

$row1 = new BurstMikadoRow( true );
$group3->addChild(
	"row1",
	$row1
);

$message_padding_left = new BurstMikadoField(
	"textsimple",
	"message_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"message_padding_left",
	$message_padding_left
);

$message_padding_right = new BurstMikadoField(
	"textsimple",
	"message_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"message_padding_right",
	$message_padding_right
);

$message_padding_top = new BurstMikadoField(
	"textsimple",
	"message_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"message_padding_top",
	$message_padding_top
);

$message_padding_bottom = new BurstMikadoField(
	"textsimple",
	"message_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"message_padding_bottom",
	$message_padding_bottom
);

//Pagination

$panel10 = new BurstMikadoPanel(
	esc_html__( "Pagination", 'burst' ),
	"pagination_panel"
);
$elementsPage->addChild(
	"panel10",
	$panel10
);

$pagination_type = new BurstMikadoField(
	"select",
	"pagination_type",
	"",
	esc_html__( "Type", 'burst' ),
	esc_html__( "Choose pagination style", 'burst' ),
	array(
		"standard" => esc_html__( "Standard", 'burst' ),
		"arrows_on_sides" => esc_html__( "Arrows on Sides", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"standard"        => "",
			"arrows_on_sides" => "#mkdf_pagination_standard_position_container"
		),
		"show"       => array(
			"standard"        => "#mkdf_pagination_standard_position_container",
			"arrows_on_sides" => ""
		)
	)
);
$panel10->addChild(
	"pagination_type",
	$pagination_type
);

$pagination_standard_position_container = new BurstMikadoContainer(
	"pagination_standard_position_container",
	"pagination_type",
	"arrows_on_sides"
);
$panel10->addChild(
	"pagination_standard_position_container",
	$pagination_standard_position_container
);

$pagination_standard_position = new BurstMikadoField(
	"select",
	"pagination_standard_position",
	"",
	esc_html__( "Position", 'burst' ),
	esc_html__( "Choose position of pagination", 'burst' ),
	array(
		"left" => esc_html__( "Left", 'burst' ),
		"center" => esc_html__( "Center", 'burst' ),
		"right" => esc_html__( "Right", 'burst' )
	)
);
$pagination_standard_position_container->addChild(
	"pagination_standard_position",
	$pagination_standard_position
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Navigation Style", 'burst' ),
	esc_html__( "Define Navigation styles", 'burst' )
);
$panel10->addChild(
	"group3",
	$group3
);

$row1 = new BurstMikadoRow();
$group3->addChild(
	"row1",
	$row1
);

$pagination_button_width = new BurstMikadoField(
	"textsimple",
	"pagination_button_width",
	"",
	esc_html__( "Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pagination_button_width",
	$pagination_button_width
);

$pagination_button_height = new BurstMikadoField(
	"textsimple",
	"pagination_button_height",
	"",
	esc_html__( "Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pagination_button_height",
	$pagination_button_height
);

$pagination_space_between_buttons = new BurstMikadoField(
	"textsimple",
	"pagination_space_between_buttons",
	"",
	esc_html__( "Space between buttons (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pagination_space_between_buttons",
	$pagination_space_between_buttons
);

$pagination_button_background_color = new BurstMikadoField(
	"colorsimple",
	"pagination_button_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pagination_button_background_color",
	$pagination_button_background_color
);

$row2 = new BurstMikadoRow();
$group3->addChild(
	"row2",
	$row2
);

$pagination_button_background_hover_color = new BurstMikadoField(
	"colorsimple",
	"pagination_button_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pagination_button_background_hover_color",
	$pagination_button_background_hover_color
);

$pagination_button_background_active_color = new BurstMikadoField(
	"colorsimple",
	"pagination_button_background_active_color",
	"",
	esc_html__( "Background Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pagination_button_background_active_color",
	$pagination_button_background_active_color
);

$pagination_button_border_color = new BurstMikadoField(
	"colorsimple",
	"pagination_button_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pagination_button_border_color",
	$pagination_button_border_color
);

$pagination_button_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"pagination_button_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pagination_button_border_hover_color",
	$pagination_button_border_hover_color
);

$row3 = new BurstMikadoRow();
$group3->addChild(
	"row3",
	$row3
);

$pagination_button_border_active_color = new BurstMikadoField(
	"colorsimple",
	"pagination_button_border_active_color",
	"",
	esc_html__( "Border Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"pagination_button_border_active_color",
	$pagination_button_border_active_color
);

$pagination_button_border_radius = new BurstMikadoField(
	"textsimple",
	"pagination_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"pagination_button_border_radius",
	$pagination_button_border_radius
);

$pagination_button_border_width = new BurstMikadoField(
	"textsimple",
	"pagination_button_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"pagination_button_border_width",
	$pagination_button_border_width
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Text Style", 'burst' ),
	esc_html__( "Define text styles (this style will also be applied to Only Previous and Next type)", 'burst' )
);
$panel10->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$pagination_color = new BurstMikadoField(
	"colorsimple",
	"pagination_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pagination_color",
	$pagination_color
);

$pagination_hover_color = new BurstMikadoField(
	"colorsimple",
	"pagination_hover_color",
	"",
	esc_html__( "Hover Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pagination_hover_color",
	$pagination_hover_color
);

$pagination_active_color = new BurstMikadoField(
	"colorsimple",
	"pagination_active_color",
	"",
	esc_html__( "Active Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pagination_active_color",
	$pagination_active_color
);

$pagination_font_size = new BurstMikadoField(
	"textsimple",
	"pagination_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pagination_font_size",
	$pagination_font_size
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);

$pagination_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"pagination_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"pagination_font_weight",
	$pagination_font_weight
);

$pagination_font_family = new BurstMikadoField(
	"fontsimple",
	"pagination_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pagination_font_family",
	$pagination_font_family
);

$pagination_font_style = new BurstMikadoField(
	"selectblanksimple",
	"pagination_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"pagination_font_style",
	$pagination_font_style
);

$pagination_letter_spacing = new BurstMikadoField(
	"textsimple",
	"pagination_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pagination_letter_spacing",
	$pagination_letter_spacing
);

$group4 = new BurstMikadoGroup(
	esc_html__( "Icon Arrow Style", 'burst' ),
	esc_html__( "Define arrow styles (this style will also be applied to Only Previous and Next type)", 'burst' )
);
$panel10->addChild(
	"group4",
	$group4
);

$row1 = new BurstMikadoRow();
$group4->addChild(
	"row1",
	$row1
);

$pagination_arrow_size = new BurstMikadoField(
	"textsimple",
	"pagination_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pagination_arrow_size",
	$pagination_arrow_size
);

$pagination_arrows_type = new BurstMikadoField(
	"selectblanksimple",
	"pagination_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'burst' ),
	"",
	burst_mikado_return_options_arrows_type()
);
$row1->addChild(
	"pagination_arrows_type",
	$pagination_arrows_type
);

$pagination_double_arrows_type = new BurstMikadoField(
	"selectblanksimple",
	"pagination_double_arrows_type",
	"",
	esc_html__( "First/Last Arrow Icon", 'burst' ),
	"",
	burst_mikado_return_options_double_arrows_type()
);
$row1->addChild(
	"pagination_double_arrows_type",
	$pagination_double_arrows_type
);

$portfolio_pagination_section = new BurstMikadoTitle(
	"portfolio_pagination_section",
	esc_html__( "Portfolio Pagination", 'burst' )
);
$panel10->addChild(
	"portfolio_pagination_section",
	$portfolio_pagination_section
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Portfolio Pagination Style", 'burst' ),
	esc_html__( "Define Pagination styles for portfolio single", 'burst' )
);
$panel10->addChild(
	"group2",
	$group2
);
$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$portfolio_pagination_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_pagination_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_pagination_color",
	$portfolio_pagination_color
);

$portfolio_pagination_hover_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_pagination_hover_color",
	"",
	esc_html__( "Hover Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_pagination_hover_color",
	$portfolio_pagination_hover_color
);

$portfolio_pagination_font_size = new BurstMikadoField(
	"textsimple",
	"portfolio_pagination_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_pagination_font_size",
	$portfolio_pagination_font_size
);

//Parallax

$panel_parallax = new BurstMikadoPanel(
	esc_html__( "Parallax", 'burst' ),
	"parallax_settings_panel"
);
$elementsPage->addChild(
	"panel_parallax",
	$panel_parallax
);

$parallax_onoff = new BurstMikadoField(
	"onoff",
	"parallax_onoff",
	"off",
	esc_html__( "Parallax on touch devices", 'burst' ),
	esc_html__( "Enabling this option will allow parallax on touch devices", 'burst' )
);
$panel_parallax->addChild(
	"parallax_onoff",
	$parallax_onoff
);

$parallax_minheight = new BurstMikadoField(
	"text",
	"parallax_minheight",
	"400",
	esc_html__( "Parallax Min Height (px)", 'burst' ),
	esc_html__( "Set a minimum height for parallax images on small displays (phones, tablets, etc.)", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel_parallax->addChild(
	"parallax_minheight",
	$parallax_minheight
);

//Pie Charts

$panel11 = new BurstMikadoPanel(
	esc_html__( "Pie Charts", 'burst' ),
	"pie_charts_panel"
);
$elementsPage->addChild(
	"panel11",
	$panel11
);

$pie_charts_margin_below_chart = new BurstMikadoField(
	"text",
	"pie_charts_margin_below_chart",
	"",
	esc_html__( "Margin Below Chart (px)", 'burst' ),
	esc_html__( "Set margin below pie chart", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel11->addChild(
	"pie_charts_margin_below_chart",
	$pie_charts_margin_below_chart
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Pie Chart Percent Style", 'burst' ),
	esc_html__( "Define text style for Pie Charts percent number", 'burst' )
);
$panel11->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$pie_charts_fontsize = new BurstMikadoField(
	"textsimple",
	"pie_charts_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pie_charts_fontsize",
	$pie_charts_fontsize
);

$pie_charts_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"pie_charts_fontweight",
	"",
	esc_html__( "Text Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row1->addChild(
	"pie_charts_fontweight",
	$pie_charts_fontweight
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Pie chart outer border color", 'burst' ),
	esc_html__( "Set color for Pie Chart outer border", 'burst' )
);
$panel11->addChild(
	"group2",
	$group2
);

$row2 = new BurstMikadoRow();
$group2->addChild(
	"row2",
	$row2
);

$pie_charts_outer_border_color = new BurstMikadoField(
	"colorsimple",
	"pie_charts_outer_border_color",
	"",
	"",
	""
);
$row2->addChild(
	"pie_charts_outer_border_color",
	$pie_charts_outer_border_color
);

//Pricing table

$panel12 = new BurstMikadoPanel(
	esc_html__( "Pricing Table", 'burst' ),
	"pricing_table_panel"
);
$elementsPage->addChild(
	"panel12",
	$panel12
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Pricing Tables Style", 'burst' ),
	esc_html__( "Define Pricing tables style", 'burst' )
);
$panel12->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$pricing_table_title_background_color = new BurstMikadoField(
	"colorsimple",
	"pricing_table_title_background_color",
	"",
	esc_html__( "Title Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_table_title_background_color",
	$pricing_table_title_background_color
);

$pricing_table_title_separator_color = new BurstMikadoField(
	"colorsimple",
	"pricing_table_title_separator_color",
	"",
	esc_html__( "Title Separator Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_table_title_separator_color",
	$pricing_table_title_separator_color
);

$pricing_table_title_separator_thickness = new BurstMikadoField(
	"textsimple",
	"pricing_table_title_separator_thickness",
	"",
	esc_html__( "Title Separator Thickness (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_table_title_separator_thickness",
	$pricing_table_title_separator_thickness
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);

$pricing_table_title_top_padding = new BurstMikadoField(
	"textsimple",
	"pricing_table_title_top_padding",
	"",
	esc_html__( "Title Padding Top (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pricing_table_title_top_padding",
	$pricing_table_title_top_padding
);

$pricing_table_title_bottom_padding = new BurstMikadoField(
	"textsimple",
	"pricing_table_title_bottom_padding",
	"",
	esc_html__( "Title Padding Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pricing_table_title_bottom_padding",
	$pricing_table_title_bottom_padding
);

$row3 = new BurstMikadoRow( true );
$group1->addChild(
	"row3",
	$row3
);

$pricing_table_price_background_color = new BurstMikadoField(
	"colorsimple",
	"pricing_table_price_background_color",
	"",
	esc_html__( "Price Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"pricing_table_price_background_color",
	$pricing_table_price_background_color
);

$pricing_table_price_top_padding = new BurstMikadoField(
	"textsimple",
	"pricing_table_price_top_padding",
	"",
	esc_html__( "Price Top Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"pricing_table_price_top_padding",
	$pricing_table_price_top_padding
);

$pricing_table_price_bottom_padding = new BurstMikadoField(
	"textsimple",
	"pricing_table_price_bottom_padding",
	"",
	esc_html__( "Price Bottom Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"pricing_table_price_bottom_padding",
	$pricing_table_price_bottom_padding
);

$row4 = new BurstMikadoRow( true );
$group1->addChild(
	"row4",
	$row4
);

$pricing_table_background_color = new BurstMikadoField(
	"colorsimple",
	"pricing_table_background_color",
	"",
	esc_html__( "Content Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"pricing_table_background_color",
	$pricing_table_background_color
);

$pricing_table_separator_color = new BurstMikadoField(
	"colorsimple",
	"pricing_table_separator_color",
	"",
	esc_html__( "Content Separator Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"pricing_table_separator_color",
	$pricing_table_separator_color
);

$pricing_table_separator_thickness = new BurstMikadoField(
	"textsimple",
	"pricing_table_separator_thickness",
	"",
	esc_html__( "Content Separator Thickness (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"pricing_table_separator_thickness",
	$pricing_table_separator_thickness
);

$row5 = new BurstMikadoRow( true );
$group1->addChild(
	"row5",
	$row5
);

$pricing_table_content_top_margin = new BurstMikadoField(
	"textsimple",
	"pricing_table_content_top_margin",
	"",
	esc_html__( "Content Top Margin (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row5->addChild(
	"pricing_table_content_top_margin",
	$pricing_table_content_top_margin
);

$pricing_table_content_bottom_margin = new BurstMikadoField(
	"textsimple",
	"pricing_table_content_bottom_margin",
	"",
	esc_html__( "Content Bottom Margin (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row5->addChild(
	"pricing_table_content_bottom_margin",
	$pricing_table_content_bottom_margin
);

$row6 = new BurstMikadoRow( true );
$group1->addChild(
	"row6",
	$row6
);

$pricing_table_button_holder_background_color = new BurstMikadoField(
	"colorsimple",
	"pricing_table_button_holder_background_color",
	"",
	esc_html__( "Button Holder Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row6->addChild(
	"pricing_table_button_holder_background_color",
	$pricing_table_button_holder_background_color
);

$pricing_table_button_top_padding = new BurstMikadoField(
	"textsimple",
	"pricing_table_button_top_padding",
	"",
	esc_html__( "Button Holder Padding Top(px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row6->addChild(
	"pricing_table_button_top_padding",
	$pricing_table_button_top_padding
);

$pricing_table_button_bottom_padding = new BurstMikadoField(
	"textsimple",
	"pricing_table_button_bottom_padding",
	"",
	esc_html__( "Button Holder Padding Bottom(px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row6->addChild(
	"pricing_table_button_bottom_padding",
	$pricing_table_button_bottom_padding
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Pricing Tables Active Text", 'burst' ),
	esc_html__( "DefinePricing tables active text style.", 'burst' )
);
$panel12->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$pricing_tables_active_text_color = new BurstMikadoField(
	"colorsimple",
	"pricing_tables_active_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_tables_active_text_color",
	$pricing_tables_active_text_color
);

$pricing_tables_active_text_font_size = new BurstMikadoField(
	"textsimple",
	"pricing_tables_active_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_tables_active_text_font_size",
	$pricing_tables_active_text_font_size
);

$pricing_tables_active_text_line_height = new BurstMikadoField(
	"textsimple",
	"pricing_tables_active_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_tables_active_text_line_height",
	$pricing_tables_active_text_line_height
);

$pricing_tables_active_text_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"pricing_tables_active_text_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"pricing_tables_active_text_text_transform",
	$pricing_tables_active_text_text_transform
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);

$pricing_tables_active_text_font_family = new BurstMikadoField(
	"fontsimple",
	"pricing_tables_active_text_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pricing_tables_active_text_font_family",
	$pricing_tables_active_text_font_family
);

$pricing_tables_active_text_font_style = new BurstMikadoField(
	"selectblanksimple",
	"pricing_tables_active_text_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"pricing_tables_active_text_font_style",
	$pricing_tables_active_text_font_style
);

$pricing_tables_active_text_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"pricing_tables_active_text_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"pricing_tables_active_text_font_weight",
	$pricing_tables_active_text_font_weight
);

$pricing_tables_active_text_letter_spacing = new BurstMikadoField(
	"textsimple",
	"pricing_tables_active_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pricing_tables_active_text_letter_spacing",
	$pricing_tables_active_text_letter_spacing
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Pricing Tables Title", 'burst' ),
	esc_html__( "Define Pricing tables title style", 'burst' )
);
$panel12->addChild(
	"group3",
	$group3
);

$row1 = new BurstMikadoRow();
$group3->addChild(
	"row1",
	$row1
);

$pricing_tables_title_color = new BurstMikadoField(
	"colorsimple",
	"pricing_tables_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_tables_title_color",
	$pricing_tables_title_color
);

$pricing_tables_title_font_size = new BurstMikadoField(
	"textsimple",
	"pricing_tables_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_tables_title_font_size",
	$pricing_tables_title_font_size
);

$pricing_tables_title_line_height = new BurstMikadoField(
	"textsimple",
	"pricing_tables_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_tables_title_line_height",
	$pricing_tables_title_line_height
);

$pricing_tables_title_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"pricing_tables_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"pricing_tables_title_text_transform",
	$pricing_tables_title_text_transform
);

$row2 = new BurstMikadoRow( true );
$group3->addChild(
	"row2",
	$row2
);

$pricing_tables_title_font_family = new BurstMikadoField(
	"fontsimple",
	"pricing_tables_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pricing_tables_title_font_family",
	$pricing_tables_title_font_family
);

$pricing_tables_title_font_style = new BurstMikadoField(
	"selectblanksimple",
	"pricing_tables_title_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"pricing_tables_title_font_style",
	$pricing_tables_title_font_style
);

$pricing_tables_title_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"pricing_tables_title_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"pricing_tables_title_font_weight",
	$pricing_tables_title_font_weight
);

$pricing_tables_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"pricing_tables_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pricing_tables_title_letter_spacing",
	$pricing_tables_title_letter_spacing
);

$group4 = new BurstMikadoGroup(
	esc_html__( "Pricing Tables Period", 'burst' ),
	esc_html__( "DefinePricing tables period style", 'burst' )
);
$panel12->addChild(
	"group4",
	$group4
);

$row1 = new BurstMikadoRow();
$group4->addChild(
	"row1",
	$row1
);

$pricing_tables_period_color = new BurstMikadoField(
	"colorsimple",
	"pricing_tables_period_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_tables_period_color",
	$pricing_tables_period_color
);

$pricing_tables_period_font_size = new BurstMikadoField(
	"textsimple",
	"pricing_tables_period_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_tables_period_font_size",
	$pricing_tables_period_font_size
);

$pricing_tables_period_line_height = new BurstMikadoField(
	"textsimple",
	"pricing_tables_period_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_tables_period_line_height",
	$pricing_tables_period_line_height
);

$pricing_tables_period_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"pricing_tables_period_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"pricing_tables_period_text_transform",
	$pricing_tables_period_text_transform
);

$row2 = new BurstMikadoRow( true );
$group4->addChild(
	"row2",
	$row2
);

$pricing_tables_period_font_family = new BurstMikadoField(
	"fontsimple",
	"pricing_tables_period_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pricing_tables_period_font_family",
	$pricing_tables_period_font_family
);

$pricing_tables_period_font_style = new BurstMikadoField(
	"selectblanksimple",
	"pricing_tables_period_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"pricing_tables_period_font_style",
	$pricing_tables_period_font_style
);

$pricing_tables_period_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"pricing_tables_period_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"pricing_tables_period_font_weight",
	$pricing_tables_period_font_weight
);

$pricing_tables_period_letter_spacing = new BurstMikadoField(
	"textsimple",
	"pricing_tables_period_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pricing_tables_period_letter_spacing",
	$pricing_tables_period_letter_spacing
);

$group5 = new BurstMikadoGroup(
	esc_html__( "Pricing Tables Price", 'burst' ),
	esc_html__( "Define Pricing Tables price style", 'burst' )
);
$panel12->addChild(
	"group5",
	$group5
);

$row1 = new BurstMikadoRow();
$group5->addChild(
	"row1",
	$row1
);

$pricing_tables_price_color = new BurstMikadoField(
	"colorsimple",
	"pricing_tables_price_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_tables_price_color",
	$pricing_tables_price_color
);

$pricing_tables_price_font_size = new BurstMikadoField(
	"textsimple",
	"pricing_tables_price_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_tables_price_font_size",
	$pricing_tables_price_font_size
);

$pricing_tables_price_line_height = new BurstMikadoField(
	"textsimple",
	"pricing_tables_price_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_tables_price_line_height",
	$pricing_tables_price_line_height
);

$pricing_tables_price_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"pricing_tables_price_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"pricing_tables_price_text_transform",
	$pricing_tables_price_text_transform
);

$row2 = new BurstMikadoRow( true );
$group5->addChild(
	"row2",
	$row2
);

$pricing_tables_price_font_family = new BurstMikadoField(
	"fontsimple",
	"pricing_tables_price_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pricing_tables_price_font_family",
	$pricing_tables_price_font_family
);

$pricing_tables_price_font_style = new BurstMikadoField(
	"selectblanksimple",
	"pricing_tables_price_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"pricing_tables_price_font_style",
	$pricing_tables_price_font_style
);

$pricing_tables_price_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"pricing_tables_price_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"pricing_tables_price_font_weight",
	$pricing_tables_price_font_weight
);

$pricing_tables_price_letter_spacing = new BurstMikadoField(
	"textsimple",
	"pricing_tables_price_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pricing_tables_price_letter_spacing",
	$pricing_tables_price_letter_spacing
);

$group6 = new BurstMikadoGroup(
	esc_html__( "Pricing Tables Currency", 'burst' ),
	esc_html__( "Define Pricing tables currency style.", 'burst' )
);
$panel12->addChild(
	"group6",
	$group6
);
$row1 = new BurstMikadoRow();
$group6->addChild(
	"row1",
	$row1
);

$pricing_tables_currency_color = new BurstMikadoField(
	"colorsimple",
	"pricing_tables_currency_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_tables_currency_color",
	$pricing_tables_currency_color
);

$pricing_tables_currency_font_size = new BurstMikadoField(
	"textsimple",
	"pricing_tables_currency_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_tables_currency_font_size",
	$pricing_tables_currency_font_size
);

$pricing_tables_currency_line_height = new BurstMikadoField(
	"textsimple",
	"pricing_tables_currency_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_tables_currency_line_height",
	$pricing_tables_currency_line_height
);

$pricing_tables_currency_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"pricing_tables_currency_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"pricing_tables_currency_text_transform",
	$pricing_tables_currency_text_transform
);

$row2 = new BurstMikadoRow( true );
$group6->addChild(
	"row2",
	$row2
);

$pricing_tables_currency_font_family = new BurstMikadoField(
	"fontsimple",
	"pricing_tables_currency_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pricing_tables_currency_font_family",
	$pricing_tables_currency_font_family
);

$pricing_tables_currency_font_style = new BurstMikadoField(
	"selectblanksimple",
	"pricing_tables_currency_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"pricing_tables_currency_font_style",
	$pricing_tables_currency_font_style
);

$pricing_tables_currency_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"pricing_tables_currency_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"pricing_tables_currency_font_weight",
	$pricing_tables_currency_font_weight
);

$pricing_tables_currency_letter_spacing = new BurstMikadoField(
	"textsimple",
	"pricing_tables_currency_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pricing_tables_currency_letter_spacing",
	$pricing_tables_currency_letter_spacing
);

$group7 = new BurstMikadoGroup(
	esc_html__( "Pricing Tables Button", 'burst' ),
	esc_html__( "Define Pricing Tables button style.", 'burst' )
);
$panel12->addChild(
	"group7",
	$group7
);

$row1 = new BurstMikadoRow();
$group7->addChild(
	"row1",
	$row1
);

$pricing_tables_button_color = new BurstMikadoField(
	"colorsimple",
	"pricing_tables_button_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_tables_button_color",
	$pricing_tables_button_color
);

$pricing_tables_button_font_size = new BurstMikadoField(
	"textsimple",
	"pricing_tables_button_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_tables_button_font_size",
	$pricing_tables_button_font_size
);

$pricing_tables_button_line_height = new BurstMikadoField(
	"textsimple",
	"pricing_tables_button_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_tables_button_line_height",
	$pricing_tables_button_line_height
);

$pricing_tables_button_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"pricing_tables_button_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"pricing_tables_button_text_transform",
	$pricing_tables_button_text_transform
);

$row2 = new BurstMikadoRow( true );
$group7->addChild(
	"row2",
	$row2
);

$pricing_tables_button_font_family = new BurstMikadoField(
	"fontsimple",
	"pricing_tables_button_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pricing_tables_button_font_family",
	$pricing_tables_button_font_family
);

$pricing_tables_button_font_style = new BurstMikadoField(
	"selectblanksimple",
	"pricing_tables_button_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"pricing_tables_button_font_style",
	$pricing_tables_button_font_style
);

$pricing_tables_button_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"pricing_tables_button_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"pricing_tables_button_font_weight",
	$pricing_tables_button_font_weight
);

$pricing_tables_button_letter_spacing = new BurstMikadoField(
	"textsimple",
	"pricing_tables_button_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pricing_tables_button_letter_spacing",
	$pricing_tables_button_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$group7->addChild(
	"row3",
	$row3
);
$pricing_tables_button_hovercolor = new BurstMikadoField(
	"colorsimple",
	"pricing_tables_button_hovercolor",
	"",
	esc_html__( "Text Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"pricing_tables_button_hovercolor",
	$pricing_tables_button_hovercolor
);

$pricing_tables_button_backgroundcolor = new BurstMikadoField(
	"colorsimple",
	"pricing_tables_button_backgroundcolor",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"pricing_tables_button_backgroundcolor",
	$pricing_tables_button_backgroundcolor
);

$pricing_tables_button_backgroundcolor_hover = new BurstMikadoField(
	"colorsimple",
	"pricing_tables_button_backgroundcolor_hover",
	"",
	esc_html__( "Background Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"pricing_tables_button_backgroundcolor_hover",
	$pricing_tables_button_backgroundcolor_hover
);

$row4 = new BurstMikadoRow( true );
$group7->addChild(
	"row4",
	$row4
);

$pricing_tables_button_border_width = new BurstMikadoField(
	"textsimple",
	"pricing_tables_button_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"pricing_tables_button_border_width",
	$pricing_tables_button_border_width
);

$pricing_tables_button_border_radius = new BurstMikadoField(
	"textsimple",
	"pricing_tables_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"pricing_tables_button_border_radius",
	$pricing_tables_button_border_radius
);

$pricing_tables_button_border_color = new BurstMikadoField(
	"colorsimple",
	"pricing_tables_button_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"pricing_tables_button_border_color",
	$pricing_tables_button_border_color
);

$pricing_tables_button_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"pricing_tables_button_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"pricing_tables_button_border_hover_color",
	$pricing_tables_button_border_hover_color
);

$group9 = new BurstMikadoGroup(
	esc_html__( "Pricing Tables Button Padding", 'burst' ),
	esc_html__( "Define Pricing Tables button padding (Takes effect only when pricing table button is set to size normal)", 'burst' )
);
$panel12->addChild(
	"group9",
	$group9
);

$row1 = new BurstMikadoRow( true );
$group9->addChild(
	"row1",
	$row1
);

$pricing_table_button_left_padding = new BurstMikadoField(
	"textsimple",
	"pricing_table_button_left_padding",
	"",
	esc_html__( "Padding Left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_table_button_left_padding",
	$pricing_table_button_left_padding
);

$pricing_table_button_right_padding = new BurstMikadoField(
	"textsimple",
	"pricing_table_button_right_padding",
	"",
	esc_html__( "Padding Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_table_button_right_padding",
	$pricing_table_button_right_padding
);

$group8 = new BurstMikadoGroup(
	esc_html__( "Pricing Tables Content", 'burst' ),
	esc_html__( "Define Pricing Tables content style", 'burst' )
);
$panel12->addChild(
	"group8",
	$group8
);

$row1 = new BurstMikadoRow();
$group8->addChild(
	"row1",
	$row1
);

$pricing_tables_content_color = new BurstMikadoField(
	"colorsimple",
	"pricing_tables_content_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_tables_content_color",
	$pricing_tables_content_color
);

$pricing_tables_content_font_size = new BurstMikadoField(
	"textsimple",
	"pricing_tables_content_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_tables_content_font_size",
	$pricing_tables_content_font_size
);

$pricing_tables_content_line_height = new BurstMikadoField(
	"textsimple",
	"pricing_tables_content_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_tables_content_line_height",
	$pricing_tables_content_line_height
);

$pricing_tables_content_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"pricing_tables_content_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"pricing_tables_content_text_transform",
	$pricing_tables_content_text_transform
);

$row2 = new BurstMikadoRow( true );
$group8->addChild(
	"row2",
	$row2
);

$pricing_tables_content_font_family = new BurstMikadoField(
	"fontsimple",
	"pricing_tables_content_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pricing_tables_content_font_family",
	$pricing_tables_content_font_family
);

$pricing_tables_content_font_style = new BurstMikadoField(
	"selectblanksimple",
	"pricing_tables_content_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"pricing_tables_content_font_style",
	$pricing_tables_content_font_style
);

$pricing_tables_content_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"pricing_tables_content_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"pricing_tables_content_font_weight",
	$pricing_tables_content_font_weight
);

$pricing_tables_content_letter_spacing = new BurstMikadoField(
	"textsimple",
	"pricing_tables_content_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pricing_tables_content_letter_spacing",
	$pricing_tables_content_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$group8->addChild(
	"row3",
	$row3
);

$pricing_table_content_top_padding = new BurstMikadoField(
	"textsimple",
	"pricing_table_content_top_padding",
	"",
	esc_html__( "Content Top Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"pricing_table_content_top_padding",
	$pricing_table_content_top_padding
);

$pricing_table_content_bottom_padding = new BurstMikadoField(
	"textsimple",
	"pricing_table_content_bottom_padding",
	"",
	esc_html__( "Content Bottom Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"pricing_table_content_bottom_padding",
	$pricing_table_content_bottom_padding
);

//Pricing List Items

$panel27 = new BurstMikadoPanel(
	esc_html__( "Pricing List Items", 'burst' ),
	"pricing_list_item_panel"
);
$elementsPage->addChild(
	"panel27",
	$panel27
);
$group5 = new BurstMikadoGroup(
	esc_html__( "Title Style", 'burst' ),
	esc_html__( "Choose title style for pricing list", 'burst' )
);
$panel27->addChild(
	"group5",
	$group5
);

$row1 = new BurstMikadoRow();
$group5->addChild(
	"row1",
	$row1
);

$pricing_list_title_color = new BurstMikadoField(
	"colorsimple",
	"pricing_list_title_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_list_title_color",
	$pricing_list_title_color
);

$pricing_list_title_fontsize = new BurstMikadoField(
	"textsimple",
	"pricing_list_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_list_title_fontsize",
	$pricing_list_title_fontsize
);

$pricing_list_title_lineheight = new BurstMikadoField(
	"textsimple",
	"pricing_list_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_list_title_lineheight",
	$pricing_list_title_lineheight
);

$pricing_list_title_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"pricing_list_title_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"pricing_list_title_texttransform",
	$pricing_list_title_texttransform
);

$row2 = new BurstMikadoRow( true );
$group5->addChild(
	"row2",
	$row2
);
$pricing_list_title_google_fonts = new BurstMikadoField(
	"fontsimple",
	"pricing_list_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pricing_list_title_google_fonts",
	$pricing_list_title_google_fonts
);

$pricing_list_title_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"pricing_list_title_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"pricing_list_title_fontstyle",
	$pricing_list_title_fontstyle
);

$pricing_list_title_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"pricing_list_title_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"pricing_list_title_fontweight",
	$pricing_list_title_fontweight
);

$pricing_list_title_letterspacing = new BurstMikadoField(
	"textsimple",
	"pricing_list_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pricing_list_title_letterspacing",
	$pricing_list_title_letterspacing
);

$row3 = new BurstMikadoRow( true );
$group5->addChild(
	"row3",
	$row3
);

$pricing_list_title_margin_bottom = new BurstMikadoField(
	"textsimple",
	"pricing_list_title_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"pricing_list_title_margin_bottom",
	$pricing_list_title_margin_bottom
);

$highlighted_item_section = new BurstMikadoTitle(
	"highlighted_item_section",
	esc_html__( "Highlighted Item", 'burst' )
);
$panel27->addChild(
	"highlighted_item_section",
	$highlighted_item_section
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Background Style", 'burst' ),
	esc_html__( "Choose background & border color for highlighted item", 'burst' )
);
$panel27->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);
$pricing_list_highlighted_background_color = new BurstMikadoField(
	"colorsimple",
	"pricing_list_highlighted_background_color",
	"",
	esc_html__( "Background & Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_list_highlighted_background_color",
	$pricing_list_highlighted_background_color
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Text Style", 'burst' ),
	esc_html__( "Define text style for highlighted item", 'burst' )
);
$panel27->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);
$pricing_list_highlighted_text_color = new BurstMikadoField(
	"colorsimple",
	"pricing_list_highlighted_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_list_highlighted_text_color",
	$pricing_list_highlighted_text_color
);
$pricing_list_highlighted_text_fontsize = new BurstMikadoField(
	"textsimple",
	"pricing_list_highlighted_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_list_highlighted_text_fontsize",
	$pricing_list_highlighted_text_fontsize
);
$pricing_list_highlighted_text_lineheight = new BurstMikadoField(
	"textsimple",
	"pricing_list_highlighted_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_list_highlighted_text_lineheight",
	$pricing_list_highlighted_text_lineheight
);
$pricing_list_highlighted_text_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"pricing_list_highlighted_text_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"pricing_list_highlighted_text_texttransform",
	$pricing_list_highlighted_text_texttransform
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);
$pricing_list_highlighted_text_google_fonts = new BurstMikadoField(
	"fontsimple",
	"pricing_list_highlighted_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pricing_list_highlighted_text_google_fonts",
	$pricing_list_highlighted_text_google_fonts
);
$pricing_list_highlighted_text_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"pricing_list_highlighted_text_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"pricing_list_highlighted_text_fontstyle",
	$pricing_list_highlighted_text_fontstyle
);
$pricing_list_highlighted_text_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"pricing_list_highlighted_text_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"pricing_list_highlighted_text_fontweight",
	$pricing_list_highlighted_text_fontweight
);
$pricing_list_highlighted_text_letterspacing = new BurstMikadoField(
	"textsimple",
	"pricing_list_highlighted_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pricing_list_highlighted_text_letterspacing",
	$pricing_list_highlighted_text_letterspacing
);

$new_item_section = new BurstMikadoTitle(
	"new_item_section",
	esc_html__( "New Item", 'burst' )
);
$panel27->addChild(
	"new_item_section",
	$new_item_section
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Icon Style", 'burst' ),
	esc_html__( "Choose icon style for new item", 'burst' )
);
$panel27->addChild(
	"group3",
	$group3
);

$row1 = new BurstMikadoRow();
$group3->addChild(
	"row1",
	$row1
);
$pricing_list_new_background_color = new BurstMikadoField(
	"colorsimple",
	"pricing_list_new_background_color",
	"",
	esc_html__( "Icon Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_list_new_background_color",
	$pricing_list_new_background_color
);
$pricing_list_new_icon_size = new BurstMikadoField(
	"textsimple",
	"pricing_list_new_icon_size",
	"",
	esc_html__( "Icon Size", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_list_new_icon_size",
	$pricing_list_new_icon_size
);

$group4 = new BurstMikadoGroup(
	esc_html__( "Text Style", 'burst' ),
	esc_html__( "Define text style for new item", 'burst' )
);
$panel27->addChild(
	"group4",
	$group4
);

$row1 = new BurstMikadoRow();
$group4->addChild(
	"row1",
	$row1
);

$pricing_list_new_text_color = new BurstMikadoField(
	"colorsimple",
	"pricing_list_new_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_list_new_text_color",
	$pricing_list_new_text_color
);
$pricing_list_new_text_fontsize = new BurstMikadoField(
	"textsimple",
	"pricing_list_new_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_list_new_text_fontsize",
	$pricing_list_new_text_fontsize
);
$pricing_list_new_text_lineheight = new BurstMikadoField(
	"textsimple",
	"pricing_list_new_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pricing_list_new_text_lineheight",
	$pricing_list_new_text_lineheight
);
$pricing_list_new_text_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"pricing_list_new_text_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"pricing_list_new_text_texttransform",
	$pricing_list_new_text_texttransform
);

$row2 = new BurstMikadoRow( true );
$group4->addChild(
	"row2",
	$row2
);

$pricing_list_new_text_google_fonts = new BurstMikadoField(
	"fontsimple",
	"pricing_list_new_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pricing_list_new_text_google_fonts",
	$pricing_list_new_text_google_fonts
);
$pricing_list_new_text_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"pricing_list_new_text_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"pricing_list_new_text_fontstyle",
	$pricing_list_new_text_fontstyle
);
$pricing_list_new_text_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"pricing_list_new_text_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"pricing_list_new_text_fontweight",
	$pricing_list_new_text_fontweight
);
$pricing_list_new_text_letterspacing = new BurstMikadoField(
	"textsimple",
	"pricing_list_new_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"pricing_list_new_text_letterspacing",
	$pricing_list_new_text_letterspacing
);

//Service table

$panel22 = new BurstMikadoPanel(
	esc_html__( "Service Table", 'burst' ),
	"service_table_panel"
);
$elementsPage->addChild(
	"panel22",
	$panel22
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Service Tables Style", 'burst' ),
	esc_html__( "Define Service tables style", 'burst' )
);
$panel22->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$service_table_title_background_color = new BurstMikadoField(
	"colorsimple",
	"service_table_title_background_color",
	"",
	esc_html__( "Title Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"service_table_title_background_color",
	$service_table_title_background_color
);

$service_table_title_separator_color = new BurstMikadoField(
	"colorsimple",
	"service_table_title_separator_color",
	"",
	esc_html__( "Title Separator Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"service_table_title_separator_color",
	$service_table_title_separator_color
);

$service_table_title_separator_thickness = new BurstMikadoField(
	"textsimple",
	"service_table_title_separator_thickness",
	"",
	esc_html__( "Title Separator Thickness (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"service_table_title_separator_thickness",
	$service_table_title_separator_thickness
);

$row2 = new BurstMikadoRow();
$group1->addChild(
	"row2",
	$row2
);

$service_table_title_padding_top = new BurstMikadoField(
	"textsimple",
	"service_table_title_padding_top",
	"",
	esc_html__( "Title Padding Top (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"service_table_title_padding_top",
	$service_table_title_padding_top
);

$service_table_title_padding_bottom = new BurstMikadoField(
	"textsimple",
	"service_table_title_padding_bottom",
	"",
	esc_html__( "Title Padding Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"service_table_title_padding_bottom",
	$service_table_title_padding_bottom
);

$row3 = new BurstMikadoRow( true );
$group1->addChild(
	"row3",
	$row3
);

$service_table_background_color = new BurstMikadoField(
	"colorsimple",
	"service_table_background_color",
	"",
	esc_html__( "Content Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"service_table_background_color",
	$service_table_background_color
);

$service_table_separator_color = new BurstMikadoField(
	"colorsimple",
	"service_table_separator_color",
	"",
	esc_html__( "Content Separator Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"service_table_separator_color",
	$service_table_separator_color
);

$service_table_separator_thickness = new BurstMikadoField(
	"textsimple",
	"service_table_separator_thickness",
	"",
	esc_html__( "Content Separator Thickness (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"service_table_separator_thickness",
	$service_table_separator_thickness
);

$row4 = new BurstMikadoRow();
$group1->addChild(
	"row4",
	$row4
);

$service_table_content_padding_top = new BurstMikadoField(
	"textsimple",
	"service_table_content_padding_top",
	"",
	esc_html__( "Content Padding Top (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"service_table_content_padding_top",
	$service_table_content_padding_top
);

$service_table_content_padding_bottom = new BurstMikadoField(
	"textsimple",
	"service_table_content_padding_bottom",
	"",
	esc_html__( "Content Padding Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"service_table_content_padding_bottom",
	$service_table_content_padding_bottom
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Service Tables Active Text", 'burst' ),
	esc_html__( "DefineService tables active text style.", 'burst' )
);
$panel22->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$service_tables_active_text_color = new BurstMikadoField(
	"colorsimple",
	"service_tables_active_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"service_tables_active_text_color",
	$service_tables_active_text_color
);

$service_tables_active_text_font_size = new BurstMikadoField(
	"textsimple",
	"service_tables_active_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"service_tables_active_text_font_size",
	$service_tables_active_text_font_size
);

$service_tables_active_text_line_height = new BurstMikadoField(
	"textsimple",
	"service_tables_active_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"service_tables_active_text_line_height",
	$service_tables_active_text_line_height
);

$service_tables_active_text_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"service_tables_active_text_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"service_tables_active_text_text_transform",
	$service_tables_active_text_text_transform
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);

$service_tables_active_text_font_family = new BurstMikadoField(
	"fontsimple",
	"service_tables_active_text_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"service_tables_active_text_font_family",
	$service_tables_active_text_font_family
);

$service_tables_active_text_font_style = new BurstMikadoField(
	"selectblanksimple",
	"service_tables_active_text_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"service_tables_active_text_font_style",
	$service_tables_active_text_font_style
);

$service_tables_active_text_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"service_tables_active_text_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"service_tables_active_text_font_weight",
	$service_tables_active_text_font_weight
);

$service_tables_active_text_letter_spacing = new BurstMikadoField(
	"textsimple",
	"service_tables_active_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"service_tables_active_text_letter_spacing",
	$service_tables_active_text_letter_spacing
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Service Tables Title", 'burst' ),
	esc_html__( "Define Service tables title style", 'burst' )
);
$panel22->addChild(
	"group3",
	$group3
);

$row1 = new BurstMikadoRow();
$group3->addChild(
	"row1",
	$row1
);

$service_tables_title_color = new BurstMikadoField(
	"colorsimple",
	"service_tables_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"service_tables_title_color",
	$service_tables_title_color
);

$service_tables_title_font_size = new BurstMikadoField(
	"textsimple",
	"service_tables_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"service_tables_title_font_size",
	$service_tables_title_font_size
);

$service_tables_title_line_height = new BurstMikadoField(
	"textsimple",
	"service_tables_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"service_tables_title_line_height",
	$service_tables_title_line_height
);

$service_tables_title_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"service_tables_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"service_tables_title_text_transform",
	$service_tables_title_text_transform
);

$row2 = new BurstMikadoRow( true );
$group3->addChild(
	"row2",
	$row2
);

$service_tables_title_font_family = new BurstMikadoField(
	"fontsimple",
	"service_tables_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"service_tables_title_font_family",
	$service_tables_title_font_family
);

$service_tables_title_font_style = new BurstMikadoField(
	"selectblanksimple",
	"service_tables_title_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"service_tables_title_font_style",
	$service_tables_title_font_style
);

$service_tables_title_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"service_tables_title_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"service_tables_title_font_weight",
	$service_tables_title_font_weight
);

$service_tables_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"service_tables_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"service_tables_title_letter_spacing",
	$service_tables_title_letter_spacing
);

$group4 = new BurstMikadoGroup(
	esc_html__( "Service Tables Content", 'burst' ),
	esc_html__( "Define Service tables content style", 'burst' )
);
$panel22->addChild(
	"group4",
	$group4
);

$row1 = new BurstMikadoRow();
$group4->addChild(
	"row1",
	$row1
);

$service_tables_content_color = new BurstMikadoField(
	"colorsimple",
	"service_tables_content_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"service_tables_content_color",
	$service_tables_content_color
);

$service_tables_content_font_size = new BurstMikadoField(
	"textsimple",
	"service_tables_content_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"service_tables_content_font_size",
	$service_tables_content_font_size
);

$service_tables_content_line_height = new BurstMikadoField(
	"textsimple",
	"service_tables_content_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"service_tables_content_line_height",
	$service_tables_content_line_height
);

$service_tables_content_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"service_tables_content_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"service_tables_content_text_transform",
	$service_tables_content_text_transform
);

$row2 = new BurstMikadoRow( true );
$group4->addChild(
	"row2",
	$row2
);

$service_tables_content_font_family = new BurstMikadoField(
	"fontsimple",
	"service_tables_content_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"service_tables_content_font_family",
	$service_tables_content_font_family
);

$service_tables_content_font_style = new BurstMikadoField(
	"selectblanksimple",
	"service_tables_content_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"service_tables_content_font_style",
	$service_tables_content_font_style
);

$service_tables_content_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"service_tables_content_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"service_tables_content_font_weight",
	$service_tables_content_font_weight
);

$service_tables_content_letter_spacing = new BurstMikadoField(
	"textsimple",
	"service_tables_content_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"service_tables_content_letter_spacing",
	$service_tables_content_letter_spacing
);

//Separators

$panel13 = new BurstMikadoPanel(
	esc_html__( "Separators", 'burst' ),
	"separators_panel"
);
$elementsPage->addChild(
	"panel13",
	$panel13
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Normal", 'burst' ),
	esc_html__( 'Define styles for separator of type "Normal"', 'burst' )
);
$panel13->addChild(
	"group1",
	$group1
);
$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$separator_color = new BurstMikadoField(
	"colorsimple",
	"separator_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"separator_color",
	$separator_color
);

$separator_thickness = new BurstMikadoField(
	"textsimple",
	"separator_thickness",
	"",
	esc_html__( "Thickness (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"separator_thickness",
	$separator_thickness
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);

$separator_topmargin = new BurstMikadoField(
	"textsimple",
	"separator_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"separator_topmargin",
	$separator_topmargin
);

$separator_bottommargin = new BurstMikadoField(
	"textsimple",
	"separator_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"separator_bottommargin",
	$separator_bottommargin
);

$separator_type = new BurstMikadoField(
	"selectblanksimple",
	"separator_type",
	"",
	esc_html__( "Separator type", 'burst' ),
	"",
	array(
		"solid" => esc_html__( "Solid", 'burst' ),
		"dashed" => esc_html__( "Dashed", 'burst' ),
		"dotted" => esc_html__( "Dotted", 'burst' )
	)
);
$row2->addChild(
	"separator_type",
	$separator_type
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Small", 'burst' ),
	esc_html__( 'Define styles for separator of type "Small"', 'burst' )
);
$panel13->addChild(
	"group2",
	$group2
);
$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$separator_small_color = new BurstMikadoField(
	"colorsimple",
	"separator_small_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"separator_small_color",
	$separator_small_color
);

$separator_small_thickness = new BurstMikadoField(
	"textsimple",
	"separator_small_thickness",
	"",
	esc_html__( "Thickness (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"separator_small_thickness",
	$separator_small_thickness
);

$separator_small_width = new BurstMikadoField(
	"textsimple",
	"separator_small_width",
	"",
	esc_html__( "Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"separator_small_width",
	$separator_small_width
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);

$separator_small_topmargin = new BurstMikadoField(
	"textsimple",
	"separator_small_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"separator_small_topmargin",
	$separator_small_topmargin
);

$separator_small_bottommargin = new BurstMikadoField(
	"textsimple",
	"separator_small_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"separator_small_bottommargin",
	$separator_small_bottommargin
);

$separator_small_type = new BurstMikadoField(
	"selectsimple",
	"separator_small_type",
	"",
	esc_html__( "Separator type", 'burst' ),
	"",
	array(
		""       => "",
		"solid" => esc_html__( "Solid", 'burst' ),
		"dashed" => esc_html__( "Dashed", 'burst' ),
		"dotted" => esc_html__( "Dotted", 'burst' )
	)
);
$row2->addChild(
	"separator_small_type",
	$separator_small_type
);

//Separators with text

$panel23 = new BurstMikadoPanel(
	esc_html__( "Separators with Text", 'burst' ),
	"separators_with_text_panel"
);
$elementsPage->addChild(
	"panel23",
	$panel23
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Text Style", 'burst' ),
	esc_html__( 'Define text styles for separator with text', 'burst' )
);
$panel23->addChild(
	"group1",
	$group1
);
$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$separators_with_text_text_color = new BurstMikadoField(
	"colorsimple",
	"separators_with_text_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"separators_with_text_text_color",
	$separators_with_text_text_color
);

$separators_with_text_text_hover_color = new BurstMikadoField(
	"colorsimple",
	"separators_with_text_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"separators_with_text_text_hover_color",
	$separators_with_text_text_hover_color
);

$separators_with_text_text_fontsize = new BurstMikadoField(
	"textsimple",
	"separators_with_text_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"separators_with_text_text_fontsize",
	$separators_with_text_text_fontsize
);

$separators_with_text_text_lineheight = new BurstMikadoField(
	"textsimple",
	"separators_with_text_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"separators_with_text_text_lineheight",
	$separators_with_text_text_lineheight
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);

$separators_with_text_text_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"separators_with_text_text_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"separators_with_text_text_texttransform",
	$separators_with_text_text_texttransform
);

$separators_with_text_text_google_fonts = new BurstMikadoField(
	"fontsimple",
	"separators_with_text_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"separators_with_text_text_google_fonts",
	$separators_with_text_text_google_fonts
);

$separators_with_text_text_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"separators_with_text_text_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"separators_with_text_text_fontstyle",
	$separators_with_text_text_fontstyle
);

$separators_with_text_text_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"separators_with_text_text_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"separators_with_text_text_fontweight",
	$separators_with_text_text_fontweight
);

$row3 = new BurstMikadoRow( true );
$group1->addChild(
	"row3",
	$row3
);

$separators_with_text_text_letterspacing = new BurstMikadoField(
	"textsimple",
	"separators_with_text_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"separators_with_text_text_letterspacing",
	$separators_with_text_text_letterspacing
);

$panel24 = new BurstMikadoPanel(
	esc_html__( "Single Image", 'burst' ),
	"single_image_panel"
);
$elementsPage->addChild(
	"panel24",
	$panel24
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Hover Style", 'burst' ),
	esc_html__( "Define hover style", 'burst' )
);
$panel24->addChild(
	"group1",
	$group1
);
$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$single_image_hover_color = new BurstMikadoField(
	"colorsimple",
	"single_image_hover_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"single_image_hover_color",
	$single_image_hover_color
);

$single_image_hover_transparency = new BurstMikadoField(
	"textsimple",
	"single_image_hover_transparency",
	"",
	esc_html__( "Transparency (0=full - 1=opaque)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"single_image_hover_transparency",
	$single_image_hover_transparency
);

//Slider Navigation Interface

$panel9 = new BurstMikadoPanel(
	esc_html__( "Slider Navigation Interface", 'burst' ),
	"navigation_panel"
);
$elementsPage->addChild(
	"panel9",
	$panel9
);

$navigation_slider_horizontal_section = new BurstMikadoTitle(
	"navigation_slider_horizontal_section",
	esc_html__( "Mikado Slider", 'burst' )
);
$panel9->addChild(
	"navigation_slider_horizontal_section",
	$navigation_slider_horizontal_section
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Navigation Button Size", 'burst' ),
	esc_html__( "Define navigation button size", 'burst' )
);
$panel9->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$navigation_button_width = new BurstMikadoField(
	"textsimple",
	"navigation_button_width",
	"",
	esc_html__( "Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"navigation_button_width",
	$navigation_button_width
);

$navigation_button_height = new BurstMikadoField(
	"textsimple",
	"navigation_button_height",
	"",
	esc_html__( "Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"navigation_button_height",
	$navigation_button_height
);

$group9 = new BurstMikadoGroup(
	esc_html__( "Navigation Button Position", 'burst' ),
	esc_html__( "Enter the amount of pixels you would like to move the navigation buttons towards the edges of the slider", 'burst' )
);
$panel9->addChild(
	"group9",
	$group9
);

$row1 = new BurstMikadoRow();
$group9->addChild(
	"row1",
	$row1
);

$navigation_button_position = new BurstMikadoField(
	"textsimple",
	"navigation_button_position",
	"",
	esc_html__( "Position (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"navigation_button_position",
	$navigation_button_position
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Icon Arrow Style", 'burst' ),
	esc_html__( "Define arrow navigation style", 'burst' )
);
$panel9->addChild(
	"group2",
	$group2
);
$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$navigation_arrow_size = new BurstMikadoField(
	"textsimple",
	"navigation_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'burst' ),
	esc_html__( "Default value is 14    ", 'burst' )
);
$row1->addChild(
	"navigation_arrow_size",
	$navigation_arrow_size
);

$navigation_arrows_type = new BurstMikadoField(
	"selectblanksimple",
	"navigation_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'burst' ),
	"",
	burst_mikado_return_options_arrows_type()
);
$row1->addChild(
	"navigation_arrows_type",
	$navigation_arrows_type
);

$navigation_arrow_color = new BurstMikadoField(
	"colorsimple",
	"navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"navigation_arrow_color",
	$navigation_arrow_color
);

$navigation_arrow_transparency = new BurstMikadoField(
	"textsimple",
	"navigation_arrow_transparency",
	"",
	esc_html__( "Arrow Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"navigation_arrow_transparency",
	$navigation_arrow_transparency
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);

$navigation_arrow_hover_color = new BurstMikadoField(
	"colorsimple",
	"navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"navigation_arrow_hover_color",
	$navigation_arrow_hover_color
);

$navigation_arrow_hover_transparency = new BurstMikadoField(
	"textsimple",
	"navigation_arrow_hover_transparency",
	"",
	esc_html__( "Arrow Hover Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"navigation_arrow_hover_transparency",
	$navigation_arrow_hover_transparency
);

$navigation_number_group = new BurstMikadoGroup(
	esc_html__( 'Navigation Numbers Style', 'burst' ),
	esc_html__( 'Define navigation numbers style', 'burst' )
);
$panel9->addChild(
	'navigation_number_group',
	$navigation_number_group
);

$row1 = new BurstMikadoRow();
$navigation_number_group->addChild(
	'row1',
	$row1
);

$navigation_number_font_size = new BurstMikadoField(
	'textsimple',
	'navigation_number_font_size',
	'',
	esc_html__( 'Font Size (px)', 'burst' ),
	''
);
$row1->addChild(
	'navigation_number_font_size',
	$navigation_number_font_size
);

$navigation_number_letter_spacing = new BurstMikadoField(
	'textsimple',
	'navigation_number_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'burst' ),
	''
);
$row1->addChild(
	'navigation_number_letter_spacing',
	$navigation_number_letter_spacing
);

$navigation_number_line_height = new BurstMikadoField(
	'textsimple',
	'navigation_number_line_height',
	'',
	esc_html__( 'Line Height', 'burst' ),
	''
);
$row1->addChild(
	'navigation_number_line_height',
	$navigation_number_line_height
);

$navigation_number_font_font_family = new BurstMikadoField(
	'fontsimple',
	'navigation_number_font_font_family',
	'-1',
	esc_html__( 'Font Family', 'burst' ),
	''
);
$row1->addChild(
	'navigation_number_font_font_family',
	$navigation_number_font_font_family
);

$row2 = new BurstMikadoRow( true );
$navigation_number_group->addChild(
	'row2',
	$row2
);

$navigation_number_font_style = new BurstMikadoField(
	'selectsimple',
	'navigation_number_font_style',
	'',
	esc_html__( 'Font Style', 'burst' ),
	'',
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	'navigation_number_font_style',
	$navigation_number_font_style
);

$navigation_number_font_weight = new BurstMikadoField(
	'selectsimple',
	'navigation_number_font_weight',
	'',
	esc_html__( 'Font Weight', 'burst' ),
	'',
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	'navigation_number_font_weight',
	$navigation_number_font_weight
);

$row3 = new BurstMikadoRow( true );
$navigation_number_group->addChild(
	'row3',
	$row3
);

$navigation_number_color = new BurstMikadoField(
	'colorsimple',
	'navigation_number_color',
	'',
	esc_html__( 'Color', 'burst' ),
	''
);
$row3->addChild(
	'navigation_number_color',
	$navigation_number_color
);

$navigation_number_hover_color = new BurstMikadoField(
	'colorsimple',
	'navigation_number_hover_color',
	'',
	esc_html__( 'Hover Color', 'burst' ),
	''
);
$row3->addChild(
	'navigation_number_hover_color',
	$navigation_number_hover_color
);

$navigation_number_transparency = new BurstMikadoField(
	'textsimple',
	'navigation_number_transparency',
	'',
	esc_html__( 'Transparency (0=full - 1=opaque)', 'burst' ),
	''
);
$row3->addChild(
	'navigation_number_transparency',
	$navigation_number_transparency
);

$navigation_number_hover_transparency = new BurstMikadoField(
	'textsimple',
	'navigation_number_hover_transparency',
	'',
	esc_html__( 'Hover Transparency (0=full - 1=opaque)', 'burst' ),
	''
);
$row3->addChild(
	'navigation_number_hover_transparency',
	$navigation_number_hover_transparency
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Navigation Button Background", 'burst' ),
	esc_html__( "Define navigation button background", 'burst' )
);
$panel9->addChild(
	"group3",
	$group3
);

$row1 = new BurstMikadoRow();
$group3->addChild(
	"row1",
	$row1
);

$navigation_background_color = new BurstMikadoField(
	"colorsimple",
	"navigation_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"navigation_background_color",
	$navigation_background_color
);

$navigation_background_transparency = new BurstMikadoField(
	"textsimple",
	"navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"navigation_background_transparency",
	$navigation_background_transparency
);

$navigation_background_hover_color = new BurstMikadoField(
	"colorsimple",
	"navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"navigation_background_hover_color",
	$navigation_background_hover_color
);

$navigation_background_hover_transparency = new BurstMikadoField(
	"textsimple",
	"navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"navigation_background_hover_transparency",
	$navigation_background_hover_transparency
);

$group4 = new BurstMikadoGroup(
	esc_html__( "Navigation Button Border", 'burst' ),
	esc_html__( "Define border style", 'burst' )
);
$panel9->addChild(
	"group4",
	$group4
);

$row1 = new BurstMikadoRow();
$group4->addChild(
	"row1",
	$row1
);

$navigation_border_width = new BurstMikadoField(
	"textsimple",
	"navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'burst' ),
	""
);
$row1->addChild(
	"navigation_border_width",
	$navigation_border_width
);

$navigation_border_radius = new BurstMikadoField(
	"textsimple",
	"navigation_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"navigation_border_radius",
	$navigation_border_radius
);

$navigation_border_color = new BurstMikadoField(
	"colorsimple",
	"navigation_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"navigation_border_color",
	$navigation_border_color
);

$navigation_border_transparency = new BurstMikadoField(
	"textsimple",
	"navigation_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"navigation_border_transparency",
	$navigation_border_transparency
);

$row2 = new BurstMikadoRow( true );
$group4->addChild(
	"row2",
	$row2
);

$navigation_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"navigation_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"navigation_border_hover_color",
	$navigation_border_hover_color
);

$navigation_border_hover_transparency = new BurstMikadoField(
	"textsimple",
	"navigation_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"navigation_border_hover_transparency",
	$navigation_border_hover_transparency
);

$navigation_show_button_shadow = new BurstMikadoField(
	"yesno",
	"navigation_show_button_shadow",
	"no",
	esc_html__( "Show Button Shadow", 'burst' ),
	esc_html__( "Enabling this options will show button shadow", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_navigation_button_shadow_container"
	)
);
$panel9->addChild(
	"navigation_show_button_shadow",
	$navigation_show_button_shadow
);

$navigation_button_shadow_container = new BurstMikadoContainer(
	"navigation_button_shadow_container",
	"navigation_show_button_shadow",
	"no"
);
$panel9->addChild(
	"navigation_button_shadow_container",
	$navigation_button_shadow_container
);

$group9 = new BurstMikadoGroup(
	esc_html__( "Button Shadow", 'burst' ),
	esc_html__( "Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.", 'burst' )
);
$navigation_button_shadow_container->addChild(
	"group9",
	$group9
);

$row1 = new BurstMikadoRow();
$group9->addChild(
	"row1",
	$row1
);

$navigation_button_shadow_color = new BurstMikadoField(
	"colorsimple",
	"navigation_button_shadow_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "Choose color for  box shadow", 'burst' )
);
$row1->addChild(
	"navigation_button_shadow_color",
	$navigation_button_shadow_color
);

$row2 = new BurstMikadoRow();
$group9->addChild(
	"row2",
	$row2
);

$navigation_button_h_shadow = new BurstMikadoField(
	"textsimple",
	"navigation_button_h_shadow",
	"",
	esc_html__( "Horizontal shadow (px)", 'burst' ),
	""
);
$row2->addChild(
	"navigation_button_h_shadow",
	$navigation_button_h_shadow
);

$navigation_button_v_shadow = new BurstMikadoField(
	"textsimple",
	"navigation_button_v_shadow",
	"",
	esc_html__( "Vertical shadow (px)", 'burst' ),
	""
);
$row2->addChild(
	"navigation_button_v_shadow",
	$navigation_button_v_shadow
);

$navigation_button_blur = new BurstMikadoField(
	"textsimple",
	"navigation_button_blur",
	"",
	esc_html__( "Blur (px)", 'burst' ),
	""
);
$row2->addChild(
	"navigation_button_blur",
	$navigation_button_blur
);

$navigation_button_spread = new BurstMikadoField(
	"textsimple",
	"navigation_button_spread",
	"",
	esc_html__( "Spread (px)", 'burst' ),
	""
);
$row2->addChild(
	"navigation_button_spread",
	$navigation_button_spread
);

$navigation_carousels_slider = new BurstMikadoTitle(
	"navigation_carousels_slider",
	esc_html__( "Carousel Sliders", 'burst' )
);
$panel9->addChild(
	"navigation_carousels_slider",
	$navigation_carousels_slider
);

$group16 = new BurstMikadoGroup(
	esc_html__( "Navigation Button Size", 'burst' ),
	esc_html__( "Define navigation button size", 'burst' )
);
$panel9->addChild(
	"group16",
	$group16
);

$row1 = new BurstMikadoRow();
$group16->addChild(
	"row1",
	$row1
);

$carousel_navigation_button_width = new BurstMikadoField(
	"textsimple",
	"carousel_navigation_button_width",
	"",
	esc_html__( "Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"carousel_navigation_button_width",
	$carousel_navigation_button_width
);

$carousel_navigation_button_height = new BurstMikadoField(
	"textsimple",
	"carousel_navigation_button_height",
	"",
	esc_html__( "Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"carousel_navigation_button_height",
	$carousel_navigation_button_height
);

$group17 = new BurstMikadoGroup(
	esc_html__( "Navigation Button Position", 'burst' ),
	esc_html__( "Enter the amount of pixels you would like to move the navigation buttons towards the edges of the slider", 'burst' )
);
$panel9->addChild(
	"group17",
	$group17
);

$row1 = new BurstMikadoRow();
$group17->addChild(
	"row1",
	$row1
);

$carousel_navigation_button_position = new BurstMikadoField(
	"textsimple",
	"carousel_navigation_button_position",
	"",
	esc_html__( "Position (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"carousel_navigation_button_position",
	$carousel_navigation_button_position
);

$group18 = new BurstMikadoGroup(
	esc_html__( "Icon Arrow Style", 'burst' ),
	esc_html__( "Define arrow navigation style", 'burst' )
);
$panel9->addChild(
	"group18",
	$group18
);
$row1 = new BurstMikadoRow();
$group18->addChild(
	"row1",
	$row1
);

$carousel_navigation_arrow_size = new BurstMikadoField(
	"textsimple",
	"carousel_navigation_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'burst' ),
	esc_html__( "Default value is 14    ", 'burst' )
);
$row1->addChild(
	"carousel_navigation_arrow_size",
	$carousel_navigation_arrow_size
);

$carousel_navigation_arrows_type = new BurstMikadoField(
	"selectblanksimple",
	"carousel_navigation_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'burst' ),
	"",
	burst_mikado_return_options_arrows_type()
);
$row1->addChild(
	"carousel_navigation_arrows_type",
	$carousel_navigation_arrows_type
);

$carousel_navigation_arrow_color = new BurstMikadoField(
	"colorsimple",
	"carousel_navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"carousel_navigation_arrow_color",
	$carousel_navigation_arrow_color
);

$carousel_navigation_arrow_transparency = new BurstMikadoField(
	"textsimple",
	"carousel_navigation_arrow_transparency",
	"",
	esc_html__( "Arrow Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"carousel_navigation_arrow_transparency",
	$carousel_navigation_arrow_transparency
);

$row2 = new BurstMikadoRow( true );
$group18->addChild(
	"row2",
	$row2
);

$carousel_navigation_arrow_hover_color = new BurstMikadoField(
	"colorsimple",
	"carousel_navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"carousel_navigation_arrow_hover_color",
	$carousel_navigation_arrow_hover_color
);

$carousel_navigation_arrow_hover_transparency = new BurstMikadoField(
	"textsimple",
	"carousel_navigation_arrow_hover_transparency",
	"",
	esc_html__( "Arrow Hover Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"carousel_navigation_arrow_hover_transparency",
	$carousel_navigation_arrow_hover_transparency
);

$group19 = new BurstMikadoGroup(
	esc_html__( "Navigation Button Background", 'burst' ),
	esc_html__( "Define navigation button background", 'burst' )
);
$panel9->addChild(
	"group19",
	$group19
);

$row1 = new BurstMikadoRow();
$group19->addChild(
	"row1",
	$row1
);

$carousel_navigation_background_color = new BurstMikadoField(
	"colorsimple",
	"carousel_navigation_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"carousel_navigation_background_color",
	$carousel_navigation_background_color
);

$carousel_navigation_background_transparency = new BurstMikadoField(
	"textsimple",
	"carousel_navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"carousel_navigation_background_transparency",
	$carousel_navigation_background_transparency
);

$carousel_navigation_background_hover_color = new BurstMikadoField(
	"colorsimple",
	"carousel_navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"carousel_navigation_background_hover_color",
	$carousel_navigation_background_hover_color
);

$carousel_navigation_background_hover_transparency = new BurstMikadoField(
	"textsimple",
	"carousel_navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"carousel_navigation_background_hover_transparency",
	$carousel_navigation_background_hover_transparency
);

$group10 = new BurstMikadoGroup(
	esc_html__( "Navigation Button Border", 'burst' ),
	esc_html__( "Define border style", 'burst' )
);
$panel9->addChild(
	"group10",
	$group10
);

$row1 = new BurstMikadoRow();
$group10->addChild(
	"row1",
	$row1
);

$carousel_navigation_border_width = new BurstMikadoField(
	"textsimple",
	"carousel_navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'burst' ),
	""
);
$row1->addChild(
	"carousel_navigation_border_width",
	$carousel_navigation_border_width
);

$carousel_navigation_border_radius = new BurstMikadoField(
	"textsimple",
	"carousel_navigation_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"carousel_navigation_border_radius",
	$carousel_navigation_border_radius
);

$carousel_navigation_border_color = new BurstMikadoField(
	"colorsimple",
	"carousel_navigation_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"carousel_navigation_border_color",
	$carousel_navigation_border_color
);

$carousel_navigation_border_transparency = new BurstMikadoField(
	"textsimple",
	"carousel_navigation_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"carousel_navigation_border_transparency",
	$carousel_navigation_border_transparency
);

$row2 = new BurstMikadoRow( true );
$group10->addChild(
	"row2",
	$row2
);

$carousel_navigation_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"carousel_navigation_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"carousel_navigation_border_hover_color",
	$carousel_navigation_border_hover_color
);

$carousel_navigation_border_hover_transparency = new BurstMikadoField(
	"textsimple",
	"carousel_navigation_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"carousel_navigation_border_hover_transparency",
	$carousel_navigation_border_hover_transparency
);

$carousel_navigation_show_button_shadow = new BurstMikadoField(
	"yesno",
	"carousel_navigation_show_button_shadow",
	"no",
	esc_html__( "Show Button Shadow", 'burst' ),
	esc_html__( "Enabling this options will show button shadow", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_carousel_navigation_button_shadow_container"
	)
);
$panel9->addChild(
	"carousel_navigation_show_button_shadow",
	$carousel_navigation_show_button_shadow
);

$carousel_navigation_button_shadow_container = new BurstMikadoContainer(
	"carousel_navigation_button_shadow_container",
	"carousel_navigation_show_button_shadow",
	"no"
);
$panel9->addChild(
	"carousel_navigation_button_shadow_container",
	$carousel_navigation_button_shadow_container
);

$group9 = new BurstMikadoGroup(
	esc_html__( "Button Shadow", 'burst' ),
	esc_html__( "Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.", 'burst' )
);
$carousel_navigation_button_shadow_container->addChild(
	"group9",
	$group9
);

$row1 = new BurstMikadoRow();
$group9->addChild(
	"row1",
	$row1
);

$carousel_navigation_button_shadow_color = new BurstMikadoField(
	"colorsimple",
	"carousel_navigation_button_shadow_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "Choose color for  box shadow", 'burst' )
);
$row1->addChild(
	"carousel_navigation_button_shadow_color",
	$carousel_navigation_button_shadow_color
);

$row2 = new BurstMikadoRow();
$group9->addChild(
	"row2",
	$row2
);

$carousel_navigation_button_h_shadow = new BurstMikadoField(
	"textsimple",
	"carousel_navigation_button_h_shadow",
	"",
	esc_html__( "Horizontal shadow (px)", 'burst' ),
	""
);
$row2->addChild(
	"carousel_navigation_button_h_shadow",
	$carousel_navigation_button_h_shadow
);

$carousel_navigation_button_v_shadow = new BurstMikadoField(
	"textsimple",
	"carousel_navigation_button_v_shadow",
	"",
	esc_html__( "Vertical shadow (px)", 'burst' ),
	""
);
$row2->addChild(
	"carousel_navigation_button_v_shadow",
	$carousel_navigation_button_v_shadow
);

$carousel_navigation_button_blur = new BurstMikadoField(
	"textsimple",
	"carousel_navigation_button_blur",
	"",
	esc_html__( "Blur (px)", 'burst' ),
	""
);
$row2->addChild(
	"carousel_navigation_button_blur",
	$carousel_navigation_button_blur
);

$carousel_navigation_button_spread = new BurstMikadoField(
	"textsimple",
	"carousel_navigation_button_spread",
	"",
	esc_html__( "Spread (px)", 'burst' ),
	""
);
$row2->addChild(
	"carousel_navigation_button_spread",
	$carousel_navigation_button_spread
);

$navigation_single_sliders_slider = new BurstMikadoTitle(
	"navigation_single_sliders_slider",
	esc_html__( "Flex Sliders", 'burst' )
);
$panel9->addChild(
	"navigation_single_sliders_slider",
	$navigation_single_sliders_slider
);

$group11 = new BurstMikadoGroup(
	esc_html__( "Navigation Button Size", 'burst' ),
	esc_html__( "Define navigation button size", 'burst' )
);
$panel9->addChild(
	"group11",
	$group11
);
$row1 = new BurstMikadoRow();
$group11->addChild(
	"row1",
	$row1
);

$single_slider_navigation_button_width = new BurstMikadoField(
	"textsimple",
	"single_slider_navigation_button_width",
	"",
	esc_html__( "Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"single_slider_navigation_button_width",
	$single_slider_navigation_button_width
);

$single_slider_navigation_button_height = new BurstMikadoField(
	"textsimple",
	"single_slider_navigation_button_height",
	"",
	esc_html__( "Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"single_slider_navigation_button_height",
	$single_slider_navigation_button_height
);

$group12 = new BurstMikadoGroup(
	esc_html__( "Navigation Button Position", 'burst' ),
	esc_html__( "Enter the amount of pixels you would like to move the navigation buttons towards the edges of the slider", 'burst' )
);
$panel9->addChild(
	"group12",
	$group12
);

$row1 = new BurstMikadoRow();
$group12->addChild(
	"row1",
	$row1
);

$single_slider_navigation_button_position = new BurstMikadoField(
	"textsimple",
	"single_slider_navigation_button_position",
	"",
	esc_html__( "Position (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"single_slider_navigation_button_position",
	$single_slider_navigation_button_position
);

$group13 = new BurstMikadoGroup(
	esc_html__( "Icon Arrow Style", 'burst' ),
	esc_html__( "Define arrow navigation style", 'burst' )
);
$panel9->addChild(
	"group13",
	$group13
);
$row1 = new BurstMikadoRow();
$group13->addChild(
	"row1",
	$row1
);

$single_slider_navigation_arrow_size = new BurstMikadoField(
	"textsimple",
	"single_slider_navigation_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'burst' ),
	esc_html__( "Default value is 14    ", 'burst' )
);
$row1->addChild(
	"single_slider_navigation_arrow_size",
	$single_slider_navigation_arrow_size
);

$single_slider_navigation_arrows_type = new BurstMikadoField(
	"selectblanksimple",
	"single_slider_navigation_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'burst' ),
	"",
	burst_mikado_return_options_arrows_type()
);
$row1->addChild(
	"single_slider_navigation_arrows_type",
	$single_slider_navigation_arrows_type
);

$single_slider_navigation_arrow_color = new BurstMikadoField(
	"colorsimple",
	"single_slider_navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"single_slider_navigation_arrow_color",
	$single_slider_navigation_arrow_color
);

$single_slider_navigation_arrow_transparency = new BurstMikadoField(
	"textsimple",
	"single_slider_navigation_arrow_transparency",
	"",
	esc_html__( "Arrow Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"single_slider_navigation_arrow_transparency",
	$single_slider_navigation_arrow_transparency
);

$row2 = new BurstMikadoRow( true );
$group13->addChild(
	"row2",
	$row2
);

$single_slider_navigation_arrow_hover_color = new BurstMikadoField(
	"colorsimple",
	"single_slider_navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"single_slider_navigation_arrow_hover_color",
	$single_slider_navigation_arrow_hover_color
);

$single_slider_navigation_arrow_hover_transparency = new BurstMikadoField(
	"textsimple",
	"single_slider_navigation_arrow_hover_transparency",
	"",
	esc_html__( "Arrow Hover Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"single_slider_navigation_arrow_hover_transparency",
	$single_slider_navigation_arrow_hover_transparency
);

$group14 = new BurstMikadoGroup(
	esc_html__( "Navigation Button Background", 'burst' ),
	esc_html__( "Define navigation button background", 'burst' )
);
$panel9->addChild(
	"group14",
	$group14
);

$row1 = new BurstMikadoRow();
$group14->addChild(
	"row1",
	$row1
);

$single_slider_navigation_background_color = new BurstMikadoField(
	"colorsimple",
	"single_slider_navigation_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"single_slider_navigation_background_color",
	$single_slider_navigation_background_color
);

$single_slider_navigation_background_transparency = new BurstMikadoField(
	"textsimple",
	"single_slider_navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"single_slider_navigation_background_transparency",
	$single_slider_navigation_background_transparency
);

$single_slider_navigation_background_hover_color = new BurstMikadoField(
	"colorsimple",
	"single_slider_navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"single_slider_navigation_background_hover_color",
	$single_slider_navigation_background_hover_color
);

$single_slider_navigation_background_hover_transparency = new BurstMikadoField(
	"textsimple",
	"single_slider_navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"single_slider_navigation_background_hover_transparency",
	$single_slider_navigation_background_hover_transparency
);

$group15 = new BurstMikadoGroup(
	esc_html__( "Navigation Button Border", 'burst' ),
	esc_html__( "Define border style", 'burst' )
);
$panel9->addChild(
	"group15",
	$group15
);

$row1 = new BurstMikadoRow();
$group15->addChild(
	"row1",
	$row1
);

$single_slider_navigation_border_width = new BurstMikadoField(
	"textsimple",
	"single_slider_navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'burst' ),
	""
);
$row1->addChild(
	"single_slider_navigation_border_width",
	$single_slider_navigation_border_width
);

$single_slider_navigation_border_radius = new BurstMikadoField(
	"textsimple",
	"single_slider_navigation_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"single_slider_navigation_border_radius",
	$single_slider_navigation_border_radius
);

$single_slider_navigation_border_color = new BurstMikadoField(
	"colorsimple",
	"single_slider_navigation_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"single_slider_navigation_border_color",
	$single_slider_navigation_border_color
);

$single_slider_navigation_border_transparency = new BurstMikadoField(
	"textsimple",
	"single_slider_navigation_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"single_slider_navigation_border_transparency",
	$single_slider_navigation_border_transparency
);

$row2 = new BurstMikadoRow( true );
$group15->addChild(
	"row2",
	$row2
);

$single_slider_navigation_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"single_slider_navigation_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"single_slider_navigation_border_hover_color",
	$single_slider_navigation_border_hover_color
);

$single_slider_navigation_border_hover_transparency = new BurstMikadoField(
	"textsimple",
	"single_slider_navigation_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"single_slider_navigation_border_hover_transparency",
	$single_slider_navigation_border_hover_transparency
);

$single_slider_navigation_show_button_shadow = new BurstMikadoField(
	"yesno",
	"single_slider_navigation_show_button_shadow",
	"no",
	esc_html__( "Show Button Shadow", 'burst' ),
	esc_html__( "Enabling this options will show button shadow", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_single_slider_navigation_button_shadow_container"
	)
);
$panel9->addChild(
	"single_slider_navigation_show_button_shadow",
	$single_slider_navigation_show_button_shadow
);

$single_slider_navigation_button_shadow_container = new BurstMikadoContainer(
	"single_slider_navigation_button_shadow_container",
	"single_slider_navigation_show_button_shadow",
	"no"
);
$panel9->addChild(
	"single_slider_navigation_button_shadow_container",
	$single_slider_navigation_button_shadow_container
);

$group9 = new BurstMikadoGroup(
	esc_html__( "Button Shadow", 'burst' ),
	esc_html__( "Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.", 'burst' )
);
$single_slider_navigation_button_shadow_container->addChild(
	"group9",
	$group9
);

$row1 = new BurstMikadoRow();
$group9->addChild(
	"row1",
	$row1
);

$single_slider_navigation_button_shadow_color = new BurstMikadoField(
	"colorsimple",
	"single_slider_navigation_button_shadow_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "Choose color for  box shadow", 'burst' )
);
$row1->addChild(
	"single_slider_navigation_button_shadow_color",
	$single_slider_navigation_button_shadow_color
);

$row2 = new BurstMikadoRow();
$group9->addChild(
	"row2",
	$row2
);

$single_slider_navigation_button_h_shadow = new BurstMikadoField(
	"textsimple",
	"single_slider_navigation_button_h_shadow",
	"",
	esc_html__( "Horizontal shadow (px)", 'burst' ),
	""
);
$row2->addChild(
	"single_slider_navigation_button_h_shadow",
	$single_slider_navigation_button_h_shadow
);

$single_slider_navigation_button_v_shadow = new BurstMikadoField(
	"textsimple",
	"single_slider_navigation_button_v_shadow",
	"",
	esc_html__( "Vertical shadow (px)", 'burst' ),
	""
);
$row2->addChild(
	"single_slider_navigation_button_v_shadow",
	$single_slider_navigation_button_v_shadow
);

$single_slider_navigation_button_blur = new BurstMikadoField(
	"textsimple",
	"single_slider_navigation_button_blur",
	"",
	esc_html__( "Blur (px)", 'burst' ),
	""
);
$row2->addChild(
	"single_slider_navigation_button_blur",
	$single_slider_navigation_button_blur
);

$single_slider_navigation_button_spread = new BurstMikadoField(
	"textsimple",
	"single_slider_navigation_button_spread",
	"",
	esc_html__( "Spread (px)", 'burst' ),
	""
);
$row2->addChild(
	"single_slider_navigation_button_spread",
	$single_slider_navigation_button_spread
);

$icon_slider = new BurstMikadoTitle(
	"icon_slider_navigation",
	esc_html__( "Icon Slider", 'burst' )
);
$panel9->addChild(
	"icon_slider",
	$icon_slider
);

$icon_slider_navigation = new BurstMikadoGroup(
	esc_html__( "Navigation Controls", 'burst' ),
	esc_html__( "Define icon navigation style", 'burst' )
);
$panel9->addChild(
	"icon_slider_navigation",
	$icon_slider_navigation
);

$row2 = new BurstMikadoRow();
$icon_slider_navigation->addChild(
	"row2",
	$row2
);

$icon_slider_navigation_color = new BurstMikadoField(
	"colorsimple",
	"icon_slider_navigation_color",
	"",
	esc_html__( "Icon Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"icon_slider_navigation_color",
	$icon_slider_navigation_color
);

$icon_slider_navigation_color_active = new BurstMikadoField(
	"colorsimple",
	"icon_slider_navigation_color_active",
	"",
	esc_html__( "Active Icon Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"icon_slider_navigation_color_active",
	$icon_slider_navigation_color_active
);

$icon_slider_navigation_color_hover = new BurstMikadoField(
	"colorsimple",
	"icon_slider_navigation_color_hover",
	"",
	esc_html__( "Hover Icon Color ", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"icon_slider_navigation_color_hover",
	$icon_slider_navigation_color_hover
);

$row1 = new BurstMikadoRow();
$icon_slider_navigation->addChild(
	"row1",
	$row1
);

$icon_slider_navigation_size = new BurstMikadoField(
	"textsimple",
	"icon_slider_navigation_size",
	"",
	esc_html__( "Icon Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"icon_slider_navigation_size",
	$icon_slider_navigation_size
);

$icon_slider_navigation_space_between_icons = new BurstMikadoField(
	"textsimple",
	"icon_slider_navigation_space_between_icons",
	"",
	esc_html__( "Space Between Icons (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"icon_slider_navigation_space_between_icons",
	$icon_slider_navigation_space_between_icons
);

$icon_slider_navigation_space_below_icons = new BurstMikadoField(
	"textsimple",
	"icon_slider_navigation_space_below_icons",
	"",
	esc_html__( "Space Below Icons (px) ", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"icon_slider_navigation_space_below_icons",
	$icon_slider_navigation_space_below_icons
);

$icon_slider_slide = new BurstMikadoGroup(
	esc_html__( "Slide Styling", 'burst' ),
	esc_html__( "Define style of Slide", 'burst' )
);
$panel9->addChild(
	"icon_slider_slide",
	$icon_slider_slide
);

$row3 = new BurstMikadoRow();
$icon_slider_slide->addChild(
	"row3",
	$row3
);

$icon_slider_slide_background_color = new BurstMikadoField(
	"colorsimple",
	"icon_slider_slide_background_color",
	"",
	esc_html__( "Slide Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"icon_slider_slide_background_color",
	$icon_slider_slide_background_color
);

$icon_slider_text_align = new BurstMikadoField(
	"selectsimple",
	"icon_slider_text_align",
	"",
	esc_html__( "Content Text Alignment", 'burst' ),
	esc_html__( 'Choose alignment for text alignment', 'burst' ),
	array(
		"right" => esc_html__( "Right", 'burst' ),
		"left" => esc_html__( "Left", 'burst' ),
		"center" => esc_html__( "Center", 'burst' ),
	)
);
$row3->addChild(
	"icon_slider_text_align",
	$icon_slider_text_align
);

$icon_slider_slide_padding = new BurstMikadoField(
	"textsimple",
	"icon_slider_slide_padding",
	"",
	esc_html__( "Content Text Padding (5px 5px 5px 5px) ", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"icon_slider_slide_padding",
	$icon_slider_slide_padding
);

$text_slider_navigation = new BurstMikadoTitle(
	"text_slider_navigation",
	esc_html__( "Numbered Navigation", 'burst' )
);
$panel9->addChild(
	"text_slider_navigation",
	$text_slider_navigation
);

$group88 = new BurstMikadoGroup(
	esc_html__( "Numbered Navigation Controls", 'burst' ),
	esc_html__( "Define numbered navigation style", 'burst' )
);
$panel9->addChild(
	"group88",
	$group88
);

$row1 = new BurstMikadoRow();
$group88->addChild(
	"row1",
	$row1
);

$numbered_navigation_size = new BurstMikadoField(
	"textsimple",
	"numbered_navigation_size",
	"",
	esc_html__( "Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"numbered_navigation_size",
	$numbered_navigation_size
);

$numbered_navigation_border_radius = new BurstMikadoField(
	"textsimple",
	"numbered_navigation_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"numbered_navigation_border_radius",
	$numbered_navigation_border_radius
);

$numbered_navigation_border_width = new BurstMikadoField(
	"textsimple",
	"numbered_navigation_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"numbered_navigation_border_width",
	$numbered_navigation_border_width
);

$row5 = new BurstMikadoRow();
$group88->addChild(
	"row5",
	$row5
);

$numbered_navigation_space_between_numbers = new BurstMikadoField(
	"textsimple",
	"numbered_navigation_space_between_numbers",
	"",
	esc_html__( "Space Between Numbers (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row5->addChild(
	"numbered_navigation_space_between_numbers",
	$numbered_navigation_space_between_numbers
);

$numbered_navigation_font_size = new BurstMikadoField(
	"textsimple",
	"numbered_navigation_font_size",
	"",
	esc_html__( "Font size (px) ", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row5->addChild(
	"numbered_navigation_font_size",
	$numbered_navigation_font_size
);

$numbered_navigation_font_family = new BurstMikadoField(
	"fontsimple",
	"numbered_navigation_font_family",
	"-1",
	esc_html__( "Font family ", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row5->addChild(
	"numbered_navigation_font_family",
	$numbered_navigation_font_family
);

$row2 = new BurstMikadoRow();
$group88->addChild(
	"row2",
	$row2
);

$numbered_navigation_background_color = new BurstMikadoField(
	"colorsimple",
	"numbered_navigation_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"numbered_navigation_background_color",
	$numbered_navigation_background_color
);

$numbered_navigation_border_color = new BurstMikadoField(
	"colorsimple",
	"numbered_navigation_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"numbered_navigation_border_color",
	$numbered_navigation_border_color
);

$numbered_navigation_number_color = new BurstMikadoField(
	"colorsimple",
	"numbered_navigation_number_color",
	"",
	esc_html__( "Numbers Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"numbered_navigation_number_color",
	$numbered_navigation_number_color
);

$row3 = new BurstMikadoRow();
$group88->addChild(
	"row3",
	$row3
);

$numbered_navigation_active_background_color = new BurstMikadoField(
	"colorsimple",
	"numbered_navigation_active_background_color",
	"",
	esc_html__( "Active Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"numbered_navigation_active_background_color",
	$numbered_navigation_active_background_color
);

$numbered_navigation_active_border_color = new BurstMikadoField(
	"colorsimple",
	"numbered_navigation_active_border_color",
	"",
	esc_html__( "Active Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"numbered_navigation_active_border_color",
	$numbered_navigation_active_border_color
);

$numbered_navigation_active_number_color = new BurstMikadoField(
	"colorsimple",
	"numbered_navigation_active_number_color",
	"",
	esc_html__( "Active Number Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"numbered_navigation_active_number_color",
	$numbered_navigation_active_number_color
);

$row4 = new BurstMikadoRow();
$group88->addChild(
	"row4",
	$row4
);

$numbered_navigation_hover_background_color = new BurstMikadoField(
	"colorsimple",
	"numbered_navigation_hover_background_color",
	"",
	esc_html__( "Hover Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"numbered_navigation_hover_background_color",
	$numbered_navigation_hover_background_color
);

$numbered_navigation_hover_border_color = new BurstMikadoField(
	"colorsimple",
	"numbered_navigation_hover_border_color",
	"",
	esc_html__( "Hover Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"numbered_navigation_hover_border_color",
	$numbered_navigation_hover_border_color
);

$numbered_navigation_hover_number_color = new BurstMikadoField(
	"colorsimple",
	"numbered_navigation_hover_number_color",
	"",
	esc_html__( "Hover Number Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"numbered_navigation_hover_number_color",
	$numbered_navigation_hover_number_color
);

$slider_circle_navigation = new BurstMikadoTitle(
	"slider_circle_navigation",
	esc_html__( "Bullet Navigation", 'burst' )
);
$panel9->addChild(
	"slider_circle_navigation",
	$slider_circle_navigation
);

$group8 = new BurstMikadoGroup(
	esc_html__( "Navigation Controls", 'burst' ),
	esc_html__( "Define navigation controls style", 'burst' )
);
$panel9->addChild(
	"group8",
	$group8
);

$row1 = new BurstMikadoRow();
$group8->addChild(
	"row1",
	$row1
);

$navigation_control_color = new BurstMikadoField(
	"colorsimple",
	"navigation_control_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"navigation_control_color",
	$navigation_control_color
);

$navigation_control_active_color = new BurstMikadoField(
	"colorsimple",
	"navigation_control_active_color",
	"",
	esc_html__( "Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"navigation_control_active_color",
	$navigation_control_active_color
);

$navigation_control_size = new BurstMikadoField(
	"textsimple",
	"navigation_control_size",
	"",
	esc_html__( "Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"navigation_control_size",
	$navigation_control_size
);

$navigation_control_active_size = new BurstMikadoField(
	"textsimple",
	"navigation_control_active_size",
	"",
	esc_html__( "Active Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"navigation_control_active_size",
	$navigation_control_active_size
);

$row2 = new BurstMikadoRow();
$group8->addChild(
	"row2",
	$row2
);

$navigation_control_border_color = new BurstMikadoField(
	"colorsimple",
	"navigation_control_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"navigation_control_border_color",
	$navigation_control_border_color
);

$navigation_control_active_border_color = new BurstMikadoField(
	"colorsimple",
	"navigation_control_active_border_color",
	"",
	esc_html__( "Active Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"navigation_control_active_border_color",
	$navigation_control_active_border_color
);

$navigation_control_border_radius = new BurstMikadoField(
	"textsimple",
	"navigation_control_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"navigation_control_border_radius",
	$navigation_control_border_radius
);

$navigation_slider_vertical_section = new BurstMikadoTitle(
	"navigation_slider_vertical_section",
	esc_html__( "Vertical Sliders (Full Screen Section Template)", 'burst' )
);
$panel9->addChild(
	"navigation_slider_vertical_section",
	$navigation_slider_vertical_section
);

$fs_navigation_slider_vertical_section_type = new BurstMikadoField(
	'select',
	'fs_navigation_slider_vertical_section_type',
	'arrows',
	esc_html__( 'Navigation Type', 'burst' ),
	esc_html__( 'Choose type of Navigation for Vertical Sliders', 'burst' ),
	array(
		'arrows' => esc_html__( 'Arrows', 'burst' ),
		'bullets' => esc_html__( 'Bullets', 'burst' ),
		'both' => esc_html__( 'Both', 'burst' )
	)
);
$panel9->addChild(
	'fs_navigation_slider_vertical_section_type',
	$fs_navigation_slider_vertical_section_type
);

$group6 = new BurstMikadoGroup(
	esc_html__( "Arrow Navigation Button Size", 'burst' ),
	esc_html__( "Define arrow navigation button size", 'burst' )
);
$panel9->addChild(
	"group6",
	$group6
);
$row1 = new BurstMikadoRow();
$group6->addChild(
	"row1",
	$row1
);

$fs_navigation_button_width = new BurstMikadoField(
	"textsimple",
	"fs_navigation_button_width",
	"",
	esc_html__( "Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"fs_navigation_button_width",
	$fs_navigation_button_width
);

$fs_navigation_button_height = new BurstMikadoField(
	"textsimple",
	"fs_navigation_button_height",
	"",
	esc_html__( "Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"fs_navigation_button_height",
	$fs_navigation_button_height
);

$group5 = new BurstMikadoGroup(
	esc_html__( "Arrow Icon Style", 'burst' ),
	esc_html__( "Define icon arrow style", 'burst' )
);
$panel9->addChild(
	"group5",
	$group5
);

$row1 = new BurstMikadoRow();
$group5->addChild(
	"row1",
	$row1
);

$fs_navigation_arrow_size = new BurstMikadoField(
	"textsimple",
	"fs_navigation_arrow_size",
	"",
	esc_html__( "Icon Arrow Size (px)", 'burst' ),
	esc_html__( "Define size for arrow navigation icons", 'burst' )
);
$row1->addChild(
	"fs_navigation_arrow_size",
	$fs_navigation_arrow_size
);

$fs_navigation_arrow_color = new BurstMikadoField(
	"colorsimple",
	"fs_navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"fs_navigation_arrow_color",
	$fs_navigation_arrow_color
);

$fs_navigation_arrow_hover_color = new BurstMikadoField(
	"colorsimple",
	"fs_navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"fs_navigation_arrow_hover_color",
	$fs_navigation_arrow_hover_color
);

$group7 = new BurstMikadoGroup(
	esc_html__( "Arrow Navigation Button Background", 'burst' ),
	esc_html__( "Define arrow navigation button background", 'burst' )
);
$panel9->addChild(
	"group7",
	$group7
);

$row1 = new BurstMikadoRow();
$group7->addChild(
	"row1",
	$row1
);

$fs_navigation_background_color = new BurstMikadoField(
	"colorsimple",
	"fs_navigation_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"fs_navigation_background_color",
	$fs_navigation_background_color
);

$fs_navigation_background_transparency = new BurstMikadoField(
	"textsimple",
	"fs_navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"fs_navigation_background_transparency",
	$fs_navigation_background_transparency
);

$fs_navigation_background_hover_color = new BurstMikadoField(
	"colorsimple",
	"fs_navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"fs_navigation_background_hover_color",
	$fs_navigation_background_hover_color
);

$fs_navigation_background_hover_transparency = new BurstMikadoField(
	"textsimple",
	"fs_navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"fs_navigation_background_hover_transparency",
	$fs_navigation_background_hover_transparency
);

$group20 = new BurstMikadoGroup(
	esc_html__( "Bullets Navigation", 'burst' ),
	esc_html__( "Define bullets navigation style", 'burst' )
);
$panel9->addChild(
	"group20",
	$group20
);

$row1 = new BurstMikadoRow();
$group20->addChild(
	"row1",
	$row1
);

$fs_navigation_control_color = new BurstMikadoField(
	"colorsimple",
	"fs_navigation_control_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"fs_navigation_control_color",
	$fs_navigation_control_color
);

$fs_navigation_control_active_color = new BurstMikadoField(
	"colorsimple",
	"fs_navigation_control_active_color",
	"",
	esc_html__( "Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"fs_navigation_control_active_color",
	$fs_navigation_control_active_color
);

$fs_navigation_control_size = new BurstMikadoField(
	"textsimple",
	"fs_navigation_control_size",
	"",
	esc_html__( "Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"fs_navigation_control_size",
	$fs_navigation_control_size
);

$fs_navigation_control_active_size = new BurstMikadoField(
	"textsimple",
	"fs_navigation_control_active_size",
	"",
	esc_html__( "Active Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"fs_navigation_control_active_size",
	$fs_navigation_control_active_size
);

$row2 = new BurstMikadoRow();
$group20->addChild(
	"row2",
	$row2
);

$fs_navigation_control_border_color = new BurstMikadoField(
	"colorsimple",
	"fs_navigation_control_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"fs_navigation_control_border_color",
	$fs_navigation_control_border_color
);

$fs_navigation_control_active_border_color = new BurstMikadoField(
	"colorsimple",
	"fs_navigation_control_active_border_color",
	"",
	esc_html__( "Active Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"fs_navigation_control_active_border_color",
	$fs_navigation_control_active_border_color
);

$fs_navigation_control_border_radius = new BurstMikadoField(
	"textsimple",
	"fs_navigation_control_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"fs_navigation_control_border_radius",
	$fs_navigation_control_border_radius
);

// Social Share List Icon

$panel26 = new BurstMikadoPanel(
	esc_html__( "Social Share List", 'burst' ),
	"social_share_list_icon_panel"
);
$elementsPage->addChild(
	"panel26",
	$panel26
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Icons", 'burst' ),
	esc_html__( "Define Social Icons style for Social Share List", 'burst' )
);
$panel26->addChild(
	"group1",
	$group1
);
$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$social_share_list_icon_size = new BurstMikadoField(
	"textsimple",
	"social_share_list_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"social_share_list_icon_size",
	$social_share_list_icon_size
);

$social_share_list_icon_margin_right = new BurstMikadoField(
	"textsimple",
	"social_share_list_icon_margin_right",
	"",
	esc_html__( "Margin Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"social_share_list_icon_margin_right",
	$social_share_list_icon_margin_right
);

$social_share_list_icon_color = new BurstMikadoField(
	"colorsimple",
	"social_share_list_icon_color",
	"",
	esc_html__( "Icon Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"social_share_list_icon_color",
	$social_share_list_icon_color
);

$social_share_list_icon_hover_color = new BurstMikadoField(
	"colorsimple",
	"social_share_list_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"social_share_list_icon_hover_color",
	$social_share_list_icon_hover_color
);

$social_share_list_icons_type = new BurstMikadoField(
	'select',
	'social_share_list_icons_type',
	'circle',
	esc_html__( 'Icons Type', 'burst' ),
	esc_html__( 'Choose type of social share list icons', 'burst' ),
	array(
		'circle' => esc_html__( 'Circle', 'burst' ),
		'normal' => esc_html__( 'Normal', 'burst' )
	)
);
$panel26->addChild(
	'social_share_list_icons_type',
	$social_share_list_icons_type
);

//Tabs Panel

$panel15 = new BurstMikadoPanel(
	esc_html__( "Tabs", 'burst' ),
	"tabs_panel"
);
$elementsPage->addChild(
	"panel15",
	$panel15
);

$tabs_navigation_subtitle = new BurstMikadoTitle(
	"tabs_navigation_subtitle",
	esc_html__( "Tabs Navigation (with Text)", 'burst' )
);
$panel15->addChild(
	"tabs_navigation_subtitle",
	$tabs_navigation_subtitle
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Tabs Navigation Text Style", 'burst' ),
	esc_html__( "Define Tabs text style", 'burst' )
);
$panel15->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$tab_text_color = new BurstMikadoField(
	"colorsimple",
	"tab_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_text_color",
	$tab_text_color
);

$tab_active_text_color = new BurstMikadoField(
	"colorsimple",
	"tab_active_text_color",
	"",
	esc_html__( "Text Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_active_text_color",
	$tab_active_text_color
);

$tab_text_size = new BurstMikadoField(
	"textsimple",
	"tab_text_size",
	"",
	esc_html__( "Text Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_text_size",
	$tab_text_size
);

$tab_nav_font_family = new BurstMikadoField(
	"fontsimple",
	"tab_nav_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_nav_font_family",
	$tab_nav_font_family
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);

$tab_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"tab_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"tab_text_transform",
	$tab_text_transform
);

$tab_letter_spacing = new BurstMikadoField(
	"textsimple",
	"tab_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"tab_letter_spacing",
	$tab_letter_spacing
);

$tab_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"tab_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"tab_font_weight",
	$tab_font_weight
);

$tab_font_style = new BurstMikadoField(
	"selectblanksimple",
	"tab_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"tab_font_style",
	$tab_font_style
);

$tabs_navigation_icon_subtitle = new BurstMikadoTitle(
	"tabs_navigation_icon_subtitle",
	esc_html__( "Tabs Navigation (with Icon)", 'burst' )
);
$panel15->addChild(
	"tabs_navigation_icon_subtitle",
	$tabs_navigation_icon_subtitle
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Tabs Navigation Icon Style", 'burst' ),
	esc_html__( "Define icon style", 'burst' )
);
$panel15->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$tabs_icon_size = new BurstMikadoField(
	"textsimple",
	"tabs_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tabs_icon_size",
	$tabs_icon_size
);

$tab_icon_color = new BurstMikadoField(
	"colorsimple",
	"tab_icon_color",
	"",
	esc_html__( "Icon Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_icon_color",
	$tab_icon_color
);

$tab_icon_hover_color = new BurstMikadoField(
	"colorsimple",
	"tab_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_icon_hover_color",
	$tab_icon_hover_color
);

$tabs_navigation_icon_and_text_subtitle = new BurstMikadoTitle(
	"tabs_navigation_icon_and_text_subtitle",
	esc_html__( "Tabs Navigation (with Icons and Text)", 'burst' )
);
$panel15->addChild(
	"tabs_navigation_icon_and_text_subtitle",
	$tabs_navigation_icon_and_text_subtitle
);

$group19 = new BurstMikadoGroup(
	esc_html__( "Tabs Navigation Text Style", 'burst' ),
	esc_html__( "Define Tabs text style (with Icons and Text)", 'burst' )
);
$panel15->addChild(
	"group19",
	$group19
);

$row1 = new BurstMikadoRow();
$group19->addChild(
	"row1",
	$row1
);

$tab_icon_and_text_text_color = new BurstMikadoField(
	"colorsimple",
	"tab_icon_and_text_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_icon_and_text_text_color",
	$tab_icon_and_text_text_color
);

$tab_icon_and_text_active_text_color = new BurstMikadoField(
	"colorsimple",
	"tab_icon_and_text_active_text_color",
	"",
	esc_html__( "Text Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_icon_and_text_active_text_color",
	$tab_icon_and_text_active_text_color
);

$tab_icon_and_text_text_size = new BurstMikadoField(
	"textsimple",
	"tab_icon_and_text_text_size",
	"",
	esc_html__( "Text Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_icon_and_text_text_size",
	$tab_icon_and_text_text_size
);

$tab_icon_and_text_nav_font_family = new BurstMikadoField(
	"fontsimple",
	"tab_icon_and_text_nav_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_icon_and_text_nav_font_family",
	$tab_icon_and_text_nav_font_family
);

$row2 = new BurstMikadoRow( true );
$group19->addChild(
	"row2",
	$row2
);

$tab_icon_and_text_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"tab_icon_and_text_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"tab_icon_and_text_text_transform",
	$tab_icon_and_text_text_transform
);

$tab_icon_and_text_letter_spacing = new BurstMikadoField(
	"textsimple",
	"tab_icon_and_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"tab_icon_and_text_letter_spacing",
	$tab_icon_and_text_letter_spacing
);

$tab_icon_and_text_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"tab_icon_and_text_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"tab_icon_and_text_font_weight",
	$tab_icon_and_text_font_weight
);

$tab_icon_and_text_font_style = new BurstMikadoField(
	"selectblanksimple",
	"tab_icon_and_text_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"tab_icon_and_text_font_style",
	$tab_icon_and_text_font_style
);

$group20 = new BurstMikadoGroup(
	esc_html__( "Tabs Navigation Icon Style", 'burst' ),
	esc_html__( "Define icon style (with Icons and Text)", 'burst' )
);
$panel15->addChild(
	"group20",
	$group20
);

$row1 = new BurstMikadoRow();
$group20->addChild(
	"row1",
	$row1
);

$tab_icon_and_text_icon_size = new BurstMikadoField(
	"textsimple",
	"tab_icon_and_text_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_icon_and_text_icon_size",
	$tab_icon_and_text_icon_size
);

$tab_icon_and_text_icon_color = new BurstMikadoField(
	"colorsimple",
	"tab_icon_and_text_icon_color",
	"",
	esc_html__( "Icon Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_icon_and_text_icon_color",
	$tab_icon_and_text_icon_color
);

$tab_icon_and_text_icon_hover_color = new BurstMikadoField(
	"colorsimple",
	"tab_icon_and_text_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_icon_and_text_icon_hover_color",
	$tab_icon_and_text_icon_hover_color
);

$tabs_navigation_type_with_lines_subtitle = new BurstMikadoTitle(
	"tabs_navigation_type_with_lines_subtitle",
	esc_html__( "Tabs Navigation (With Lines)", 'burst' )
);
$panel15->addChild(
	"tabs_navigation_type_with_lines_subtitle",
	$tabs_navigation_type_with_lines_subtitle
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Tabs Navigation Style", 'burst' ),
	esc_html__( "Define tab style", 'burst' )
);
$panel15->addChild(
	"group3",
	$group3
);

$row1 = new BurstMikadoRow( true );
$group3->addChild(
	"row1",
	$row1
);

$tabs_icon_width = new BurstMikadoField(
	"textsimple",
	"tabs_icon_width",
	"",
	esc_html__( "Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tabs_icon_width",
	$tabs_icon_width
);

$tabs_icon_height = new BurstMikadoField(
	"textsimple",
	"tabs_icon_height",
	"",
	esc_html__( "Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tabs_icon_height",
	$tabs_icon_height
);

$tabs_icon_shape_border_width = new BurstMikadoField(
	"textsimple",
	"tabs_icon_shape_border_width",
	"",
	esc_html__( "Spike Length (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tabs_icon_shape_border_width",
	$tabs_icon_shape_border_width
);

$tabs_default_subtitle = new BurstMikadoTitle(
	"tabs_default_subtitle",
	esc_html__( "Default Tabs Style", 'burst' )
);
$panel15->addChild(
	"tabs_default_subtitle",
	$tabs_default_subtitle
);

$tabs_default_show_separator = new BurstMikadoField(
	"yesno",
	"tabs_default_show_separator",
	"no",
	esc_html__( "Show Right Separator", 'burst' ),
	esc_html__( "Enabling this option will show right separator", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_default_tabs_right_separator_container"
	)
);
$panel15->addChild(
	"tabs_default_show_separator",
	$tabs_default_show_separator
);

$default_tabs_right_separator_container = new BurstMikadoContainer(
	"default_tabs_right_separator_container",
	"tabs_default_show_separator",
	"no"
);
$panel15->addChild(
	"default_tabs_right_separator_container",
	$default_tabs_right_separator_container
);

$tabs_default_right_separator_color = new BurstMikadoField(
	"color",
	"tabs_default_right_separator_color",
	"",
	esc_html__( "Separator Color", 'burst' ),
	esc_html__( "Choose right separator color", 'burst' )
);
$default_tabs_right_separator_container->addChild(
	"tabs_default_right_separator_color",
	$tabs_default_right_separator_color
);

$group_default_tabs = new BurstMikadoGroup(
	esc_html__( "Tabs Navigation Style", 'burst' ),
	esc_html__( "Define tab navigation style", 'burst' )
);
$panel15->addChild(
	"group_default_tabs",
	$group_default_tabs
);

$row1 = new BurstMikadoRow( true );
$group_default_tabs->addChild(
	"row1",
	$row1
);

$tabs_default_padding_left = new BurstMikadoField(
	"textsimple",
	"tabs_default_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tabs_default_padding_left",
	$tabs_default_padding_left
);

$tabs_default_padding_right = new BurstMikadoField(
	"textsimple",
	"tabs_default_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tabs_default_padding_right",
	$tabs_default_padding_right
);

$row2 = new BurstMikadoRow( true );
$group_default_tabs->addChild(
	"row2",
	$row2
);

$tabs_default_text_color = new BurstMikadoField(
	"colorsimple",
	"tabs_default_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"tabs_default_text_color",
	$tabs_default_text_color
);

$tabs_default_active_text_color = new BurstMikadoField(
	"colorsimple",
	"tabs_default_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"tabs_default_active_text_color",
	$tabs_default_active_text_color
);

$tabs_navigation_boxed_subtitle = new BurstMikadoTitle(
	"tabs_navigation_boxed_subtitle",
	esc_html__( "Tabs Navigation (With Borders)", 'burst' )
);
$panel15->addChild(
	"tabs_navigation_boxed_subtitle",
	$tabs_navigation_boxed_subtitle
);

$group4 = new BurstMikadoGroup(
	esc_html__( "Tabs Navigation Size", 'burst' ),
	esc_html__( "Define tab size style", 'burst' )
);
$panel15->addChild(
	"group4",
	$group4
);

$row1 = new BurstMikadoRow( true );
$group4->addChild(
	"row1",
	$row1
);

$tabs_with_borders_height = new BurstMikadoField(
	"textsimple",
	"tabs_with_borders_height",
	"",
	esc_html__( "Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tabs_with_borders_height",
	$tabs_with_borders_height
);

$group_hor_with_borders_padding = new BurstMikadoGroup(
	esc_html__( "Horizontal Tabs Navigation Padding", 'burst' ),
	esc_html__( "Define tab size style", 'burst' )
);
$panel15->addChild(
	"group_hor_with_borders_padding",
	$group_hor_with_borders_padding
);

$row1 = new BurstMikadoRow( true );
$group_hor_with_borders_padding->addChild(
	"row1",
	$row1
);

$tabs_with_borders_padding_left = new BurstMikadoField(
	"textsimple",
	"tabs_with_borders_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tabs_with_borders_padding_left",
	$tabs_with_borders_padding_left
);

$tabs_with_borders_padding_right = new BurstMikadoField(
	"textsimple",
	"tabs_with_borders_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tabs_with_borders_padding_right",
	$tabs_with_borders_padding_right
);

//		this options are for type with icon and text, this type need to have smaller paddings

$group_icon_text_diff_padding = new BurstMikadoGroup(
	esc_html__( "Horizontal Tabs Navigation Size for Tabs with Icon and Text", 'burst' ),
	esc_html__( "Define tab size style", 'burst' )
);
$panel15->addChild(
	"group_icon_text_diff_padding",
	$group_icon_text_diff_padding
);

$row1 = new BurstMikadoRow( true );
$group_icon_text_diff_padding->addChild(
	"row1",
	$row1
);

$tabs_with_borders_diff_padding_left = new BurstMikadoField(
	"textsimple",
	"tabs_with_borders_diff_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tabs_with_borders_diff_padding_left",
	$tabs_with_borders_diff_padding_left
);

$tabs_with_borders_diff_padding_right = new BurstMikadoField(
	"textsimple",
	"tabs_with_borders_diff_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tabs_with_borders_diff_padding_right",
	$tabs_with_borders_diff_padding_right
);
$group_ver_with_borders_padding = new BurstMikadoGroup(
	esc_html__( "Vertical Tabs Navigation Padding", 'burst' ),
	esc_html__( "Define tab size style", 'burst' )
);
$panel15->addChild(
	"group_ver_with_borders_padding",
	$group_ver_with_borders_padding
);

$row1 = new BurstMikadoRow( true );
$group_ver_with_borders_padding->addChild(
	"row1",
	$row1
);

$ver_tabs_with_borders_padding_left = new BurstMikadoField(
	"textsimple",
	"ver_tabs_with_borders_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"ver_tabs_with_borders_padding_left",
	$ver_tabs_with_borders_padding_left
);

$ver_tabs_with_borders_padding_right = new BurstMikadoField(
	"textsimple",
	"ver_tabs_with_borders_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"ver_tabs_with_borders_padding_right",
	$ver_tabs_with_borders_padding_right
);

//		this options are for type with icon and text, this type need to have smaller paddings

$group_ver_icon_text_diff_padding = new BurstMikadoGroup(
	esc_html__( "Vertical Tabs Navigation Size for Tabs with Icon and Text", 'burst' ),
	esc_html__( "Define tab size style", 'burst' )
);
$panel15->addChild(
	"group_ver_icon_text_diff_padding",
	$group_ver_icon_text_diff_padding
);

$row1 = new BurstMikadoRow( true );
$group_ver_icon_text_diff_padding->addChild(
	"row1",
	$row1
);

$ver_tabs_with_borders_diff_padding_left = new BurstMikadoField(
	"textsimple",
	"ver_tabs_with_borders_diff_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"ver_tabs_with_borders_diff_padding_left",
	$ver_tabs_with_borders_diff_padding_left
);

$ver_tabs_with_borders_diff_padding_right = new BurstMikadoField(
	"textsimple",
	"ver_tabs_with_borders_diff_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"ver_tabs_with_borders_diff_padding_right",
	$ver_tabs_with_borders_diff_padding_right
);

$horizontal_tabs_border_arround_element_no_space = new BurstMikadoTitle(
	"horizontal_tabs_border_arround_element_no_space",
	esc_html__( "Horizontal Tabs - Border Around Tabs (Without Space)", 'burst' )
);
$panel15->addChild(
	"horizontal_tabs_border_arround_element_no_space",
	$horizontal_tabs_border_arround_element_no_space
);

$group5 = new BurstMikadoGroup(
	esc_html__( "Tab Styles", 'burst' ),
	esc_html__( "Define tab style", 'burst' )
);
$panel15->addChild(
	"group5",
	$group5
);

$row1 = new BurstMikadoRow( true );
$group5->addChild(
	"row1",
	$row1
);

$tab_bae_hor_no_marg_background_color = new BurstMikadoField(
	"colorsimple",
	"tab_bae_hor_no_marg_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_background_color",
	$tab_bae_hor_no_marg_background_color
);

$tab_bae_hor_no_marg_background_color_hover = new BurstMikadoField(
	"colorsimple",
	"tab_bae_hor_no_marg_background_color_hover",
	"",
	esc_html__( "Background Hover/Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_background_color_hover",
	$tab_bae_hor_no_marg_background_color_hover
);

$tab_bae_hor_no_marg_border_color = new BurstMikadoField(
	"colorsimple",
	"tab_bae_hor_no_marg_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_border_color",
	$tab_bae_hor_no_marg_border_color
);

$group6 = new BurstMikadoGroup(
	esc_html__( "Text Styles", 'burst' ),
	esc_html__( "Define text styles", 'burst' )
);
$panel15->addChild(
	"group6",
	$group6
);

$row1 = new BurstMikadoRow( true );
$group6->addChild(
	"row1",
	$row1
);

$tab_bae_hor_no_marg_text_color = new BurstMikadoField(
	"colorsimple",
	"tab_bae_hor_no_marg_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_text_color",
	$tab_bae_hor_no_marg_text_color
);

$tab_bae_hor_no_marg_active_text_color = new BurstMikadoField(
	"colorsimple",
	"tab_bae_hor_no_marg_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_active_text_color",
	$tab_bae_hor_no_marg_active_text_color
);

$hor_tabs_border_arround_element_with_space = new BurstMikadoTitle(
	"hor_tabs_border_arround_element_with_space",
	esc_html__( "Horizontal Tabs -  Border Around Tabs (With Space)", 'burst' )
);
$panel15->addChild(
	"hor_tabs_border_arround_element_with_space",
	$hor_tabs_border_arround_element_with_space
);

$group7 = new BurstMikadoGroup(
	esc_html__( "Tab Styles", 'burst' ),
	esc_html__( "Define tab style", 'burst' )
);
$panel15->addChild(
	"group7",
	$group7
);

$row1 = new BurstMikadoRow( true );
$group7->addChild(
	"row1",
	$row1
);

$tab_bae_hor_marg_background_color = new BurstMikadoField(
	"colorsimple",
	"tab_bae_hor_marg_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_bae_hor_marg_background_color",
	$tab_bae_hor_marg_background_color
);

$tab_bae_hor_marg_background_hover_color = new BurstMikadoField(
	"colorsimple",
	"tab_bae_hor_marg_background_hover_color",
	"",
	esc_html__( "Background Hover/Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_bae_hor_marg_background_hover_color",
	$tab_bae_hor_marg_background_hover_color
);

$tab_bae_hor_marg_border_color = new BurstMikadoField(
	"colorsimple",
	"tab_bae_hor_marg_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_bae_hor_marg_border_color",
	$tab_bae_hor_marg_border_color
);

$tab_bae_hor_marg_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"tab_bae_hor_marg_border_hover_color",
	"",
	esc_html__( "Border Hover/Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_bae_hor_marg_border_hover_color",
	$tab_bae_hor_marg_border_hover_color
);

$group8 = new BurstMikadoGroup(
	esc_html__( "Text Styles", 'burst' ),
	esc_html__( "Define text styles", 'burst' )
);
$panel15->addChild(
	"group8",
	$group8
);

$row1 = new BurstMikadoRow( true );
$group8->addChild(
	"row1",
	$row1
);

$tab_bae_hor_marg_text_color = new BurstMikadoField(
	"colorsimple",
	"tab_bae_hor_marg_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_bae_hor_marg_text_color",
	$tab_bae_hor_marg_text_color
);

$tab_bae_hor_marg_active_text_color = new BurstMikadoField(
	"colorsimple",
	"tab_bae_hor_marg_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_bae_hor_marg_active_text_color",
	$tab_bae_hor_marg_active_text_color
);

$horizontal_tabs_border_arround_active_tab = new BurstMikadoTitle(
	"horizontal_tabs_border_arround_active_tab",
	esc_html__( "Horizontal Tabs -  Border Around Active Tab", 'burst' )
);
$panel15->addChild(
	"horizontal_tabs_border_arround_active_tab",
	$horizontal_tabs_border_arround_active_tab
);

$group9 = new BurstMikadoGroup(
	esc_html__( "Tab Styles", 'burst' ),
	esc_html__( "Define tab style", 'burst' )
);
$panel15->addChild(
	"group9",
	$group9
);

$row1 = new BurstMikadoRow( true );
$group9->addChild(
	"row1",
	$row1
);

$tab_bord_active_background_color = new BurstMikadoField(
	"colorsimple",
	"tab_bord_active_background_color",
	"",
	esc_html__( "Background Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_bord_active_background_color",
	$tab_bord_active_background_color
);

$tab_bord_active_background_color_hover = new BurstMikadoField(
	"colorsimple",
	"tab_bord_active_background_color_hover",
	"",
	esc_html__( "Background Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_bord_active_background_color_hover",
	$tab_bord_active_background_color_hover
);

$tab_bord_active_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"tab_bord_active_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_bord_active_border_hover_color",
	$tab_bord_active_border_hover_color
);

$tab_bord_active_active_tab_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"tab_bord_active_active_tab_border_hover_color",
	"",
	esc_html__( "Border Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_bord_active_active_tab_border_hover_color",
	$tab_bord_active_active_tab_border_hover_color
);

$group10 = new BurstMikadoGroup(
	esc_html__( "Text Styles", 'burst' ),
	esc_html__( "Define text style", 'burst' )
);
$panel15->addChild(
	"group10",
	$group10
);

$row1 = new BurstMikadoRow( true );
$group10->addChild(
	"row1",
	$row1
);

$tab_bord_active_text_color = new BurstMikadoField(
	"colorsimple",
	"tab_bord_active_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_bord_active_text_color",
	$tab_bord_active_text_color
);

$tab_bord_active_active_text_color = new BurstMikadoField(
	"colorsimple",
	"tab_bord_active_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tab_bord_active_active_text_color",
	$tab_bord_active_active_text_color
);

$vertical_tabs_border_arround_element = new BurstMikadoTitle(
	"vertical_tabs_border_arround_element",
	esc_html__( "Vertical Tabs -  Border Around Tabs(Without Space)", 'burst' )
);
$panel15->addChild(
	"vertical_tabs_border_arround_element",
	$vertical_tabs_border_arround_element
);

$group11 = new BurstMikadoGroup(
	esc_html__( "Tab Styles", 'burst' ),
	esc_html__( "Define tab style", 'burst' )
);
$panel15->addChild(
	"group11",
	$group11
);

$row1 = new BurstMikadoRow( true );
$group11->addChild(
	"row1",
	$row1
);

$ver_tab_bae_background_color = new BurstMikadoField(
	"colorsimple",
	"ver_tab_bae_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"ver_tab_bae_background_color",
	$ver_tab_bae_background_color
);

$ver_tab_bae_background_color_hover = new BurstMikadoField(
	"colorsimple",
	"ver_tab_bae_background_color_hover",
	"",
	esc_html__( "Background Active/HoverColor", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"ver_tab_bae_background_color_hover",
	$ver_tab_bae_background_color_hover
);

$ver_tab_bae_border_color = new BurstMikadoField(
	"colorsimple",
	"ver_tab_bae_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"ver_tab_bae_border_color",
	$ver_tab_bae_border_color
);

$group12 = new BurstMikadoGroup(
	esc_html__( "Text Styles", 'burst' ),
	esc_html__( "Define text style", 'burst' )
);
$panel15->addChild(
	"group12",
	$group12
);

$row1 = new BurstMikadoRow( true );
$group12->addChild(
	"row1",
	$row1
);

$ver_tab_bae_text_color = new BurstMikadoField(
	"colorsimple",
	"ver_tab_bae_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"ver_tab_bae_text_color",
	$ver_tab_bae_text_color
);

$ver_tab_bae_active_text_color = new BurstMikadoField(
	"colorsimple",
	"ver_tab_bae_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"ver_tab_bae_active_text_color",
	$ver_tab_bae_active_text_color
);

$ver_tab_bae_with_space = new BurstMikadoTitle(
	"ver_tab_bae_with_space",
	esc_html__( "Vertical Tabs -  Border Around Tabs(With Space)", 'burst' )
);
$panel15->addChild(
	"ver_tab_bae_with_space",
	$ver_tab_bae_with_space
);

$group_vert_tabs_with_space = new BurstMikadoGroup(
	esc_html__( "Tab Styles", 'burst' ),
	esc_html__( "Define tab style", 'burst' )
);
$panel15->addChild(
	"group_vert_tabs_with_space",
	$group_vert_tabs_with_space
);

$row1 = new BurstMikadoRow( true );
$group_vert_tabs_with_space->addChild(
	"row1",
	$row1
);

$ver_tab_bae_with_space_background_color = new BurstMikadoField(
	"colorsimple",
	"ver_tab_bae_with_space_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"ver_tab_bae_with_space_background_color",
	$ver_tab_bae_with_space_background_color
);

$ver_tab_bae_with_space_background_color_hover = new BurstMikadoField(
	"colorsimple",
	"ver_tab_bae_with_space_background_color_hover",
	"",
	esc_html__( "Background Active/HoverColor", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"ver_tab_bae_with_space_background_color_hover",
	$ver_tab_bae_with_space_background_color_hover
);

$ver_tab_bae_with_space_border_color = new BurstMikadoField(
	"colorsimple",
	"ver_tab_bae_with_space_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"ver_tab_bae_with_space_border_color",
	$ver_tab_bae_with_space_border_color
);

$ver_tab_bae_with_space_border_color_hover = new BurstMikadoField(
	"colorsimple",
	"ver_tab_bae_with_space_border_color_hover",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"ver_tab_bae_with_space_border_color_hover",
	$ver_tab_bae_with_space_border_color_hover
);

$group_vert_tabs_with_space_text = new BurstMikadoGroup(
	esc_html__( "Text Styles", 'burst' ),
	esc_html__( "Define text style", 'burst' )
);
$panel15->addChild(
	"group_vert_tabs_with_space_text",
	$group_vert_tabs_with_space_text
);

$row1 = new BurstMikadoRow( true );
$group_vert_tabs_with_space_text->addChild(
	"row1",
	$row1
);

$ver_tab_bae_with_space_text_color = new BurstMikadoField(
	"colorsimple",
	"ver_tab_bae_with_space_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"ver_tab_bae_with_space_text_color",
	$ver_tab_bae_with_space_text_color
);

$ver_tab_bae_with_space_active_text_color = new BurstMikadoField(
	"colorsimple",
	"ver_tab_bae_with_space_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"ver_tab_bae_with_space_active_text_color",
	$ver_tab_bae_with_space_active_text_color
);

$vertical_tabs_border_arround_active_tab = new BurstMikadoTitle(
	"vertical_tabs_border_arround_active_tab",
	esc_html__( "Vertical Tabs -  Border Around Active Tab", 'burst' )
);
$panel15->addChild(
	"vertical_tabs_border_arround_active_tab",
	$vertical_tabs_border_arround_active_tab
);

$group13 = new BurstMikadoGroup(
	esc_html__( "Tab Styles", 'burst' ),
	esc_html__( "Define tab style", 'burst' )
);
$panel15->addChild(
	"group13",
	$group13
);

$row1 = new BurstMikadoRow( true );
$group13->addChild(
	"row1",
	$row1
);

$ver_tab_bord_act_background_color = new BurstMikadoField(
	"colorsimple",
	"ver_tab_bord_act_background_color",
	"",
	esc_html__( "Background Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"ver_tab_bord_act_background_color",
	$ver_tab_bord_act_background_color
);

$ver_tab_bord_act_background_color_hover = new BurstMikadoField(
	"colorsimple",
	"ver_tab_bord_act_background_color_hover",
	"",
	esc_html__( "Background HoverColor", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"ver_tab_bord_act_background_color_hover",
	$ver_tab_bord_act_background_color_hover
);

$ver_tab_bord_act_border_color = new BurstMikadoField(
	"colorsimple",
	"ver_tab_bord_act_border_color",
	"",
	esc_html__( "Border Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"ver_tab_bord_act_border_color",
	$ver_tab_bord_act_border_color
);

$ver_tab_bord_act_border_color_hover = new BurstMikadoField(
	"colorsimple",
	"ver_tab_bord_act_border_color_hover",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"ver_tab_bord_act_border_color_hover",
	$ver_tab_bord_act_border_color_hover
);

$group14 = new BurstMikadoGroup(
	esc_html__( "Text Styles", 'burst' ),
	esc_html__( "Define text style", 'burst' )
);
$panel15->addChild(
	"group14",
	$group14
);

$row1 = new BurstMikadoRow( true );
$group14->addChild(
	"row1",
	$row1
);

$ver_tab_bord_act_text_color = new BurstMikadoField(
	"colorsimple",
	"ver_tab_bord_act_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"ver_tab_bord_act_text_color",
	$ver_tab_bord_act_text_color
);

$ver_tab_bord_act_active_text_color = new BurstMikadoField(
	"colorsimple",
	"ver_tab_bord_act_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"ver_tab_bord_act_active_text_color",
	$ver_tab_bord_act_active_text_color
);

$tabs_content_horizontal_subtitle = new BurstMikadoTitle(
	"tabs_content_horizontal_subtitle",
	esc_html__( "Horizontal Tabs Content", 'burst' )
);
$panel15->addChild(
	"tabs_content_horizontal_subtitle",
	$tabs_content_horizontal_subtitle
);

$group15 = new BurstMikadoGroup(
	esc_html__( "Tabs Content Styles", 'burst' ),
	esc_html__( "Define tab content style", 'burst' )
);
$panel15->addChild(
	"group15",
	$group15
);

$row1 = new BurstMikadoRow( true );
$group15->addChild(
	"row1",
	$row1
);

$tabs_content_text_size = new BurstMikadoField(
	"textsimple",
	"tabs_content_text_size",
	"",
	esc_html__( "Tabs Content Text Size (px)", 'burst' ),
	esc_html__( "Enter size for text in tab containers", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"tabs_content_text_size",
	$tabs_content_text_size
);

$tabs_content_background_color = new BurstMikadoField(
	"colorsimple",
	"tabs_content_background_color",
	"",
	esc_html__( "Tab Content Background", 'burst' ),
	esc_html__( "Choose color for tab background", 'burst' )
);
$row1->addChild(
	"tabs_content_background_color",
	$tabs_content_background_color
);

$tabs_content_border_color = new BurstMikadoField(
	"colorsimple",
	"tabs_content_border_color",
	"",
	esc_html__( "Tab Content Border Color", 'burst' ),
	esc_html__( "Choose border width for tab content", 'burst' )
);
$row1->addChild(
	"tabs_content_border_color",
	$tabs_content_border_color
);

$group16 = new BurstMikadoGroup(
	esc_html__( "Content Padding", 'burst' ),
	esc_html__( "Define tab content padding", 'burst' )
);
$panel15->addChild(
	"group16",
	$group16
);

$row1 = new BurstMikadoRow( true );
$group16->addChild(
	"row1",
	$row1
);

$tabs_content_padding_left = new BurstMikadoField(
	"textsimple",
	"tabs_content_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tabs_content_padding_left",
	$tabs_content_padding_left
);

$tabs_content_padding_right = new BurstMikadoField(
	"textsimple",
	"tabs_content_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tabs_content_padding_right",
	$tabs_content_padding_right
);

$tabs_content_padding_top = new BurstMikadoField(
	"textsimple",
	"tabs_content_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tabs_content_padding_top",
	$tabs_content_padding_top
);

$tabs_content_padding_bottom = new BurstMikadoField(
	"textsimple",
	"tabs_content_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tabs_content_padding_bottom",
	$tabs_content_padding_bottom
);

$tabs_vertical_content_subtitle = new BurstMikadoTitle(
	"tabs_vertical_content_subtitle",
	esc_html__( "Vertical Tabs Content", 'burst' )
);
$panel15->addChild(
	"tabs_vertical_content_subtitle",
	$tabs_vertical_content_subtitle
);

$group17 = new BurstMikadoGroup(
	esc_html__( "Tabs Content Styles", 'burst' ),
	esc_html__( "Define tab content style", 'burst' )
);
$panel15->addChild(
	"group17",
	$group17
);

$row1 = new BurstMikadoRow( true );
$group17->addChild(
	"row1",
	$row1
);

$tabs_vertical_content_text_size = new BurstMikadoField(
	"textsimple",
	"tabs_vertical_content_text_size",
	"",
	esc_html__( "Tabs Content Text Size (px)", 'burst' ),
	esc_html__( "Enter size for text in tab containers", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"tabs_vertical_content_text_size",
	$tabs_vertical_content_text_size
);

$tabs_vertical_content_background_color = new BurstMikadoField(
	"colorsimple",
	"tabs_vertical_content_background_color",
	"",
	esc_html__( "Tab Content Background", 'burst' ),
	esc_html__( "Choose color for tab background", 'burst' )
);
$row1->addChild(
	"tabs_vertical_content_background_color",
	$tabs_vertical_content_background_color
);

$tabs_vertical_content_border_color = new BurstMikadoField(
	"colorsimple",
	"tabs_vertical_content_border_color",
	"",
	esc_html__( "Tab Content Border Color", 'burst' ),
	esc_html__( "Choose border width for tab content", 'burst' )
);
$row1->addChild(
	"tabs_vertical_content_border_color",
	$tabs_vertical_content_border_color
);

$group18 = new BurstMikadoGroup(
	esc_html__( "Content Padding", 'burst' ),
	esc_html__( "Define tab content padding", 'burst' )
);
$panel15->addChild(
	"group18",
	$group18
);

$row1 = new BurstMikadoRow( true );
$group18->addChild(
	"row1",
	$row1
);

$tabs_vertical_content_padding_left = new BurstMikadoField(
	"textsimple",
	"tabs_vertical_content_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tabs_vertical_content_padding_left",
	$tabs_vertical_content_padding_left
);

$tabs_vertical_content_padding_right = new BurstMikadoField(
	"textsimple",
	"tabs_vertical_content_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tabs_vertical_content_padding_right",
	$tabs_vertical_content_padding_right
);

$tabs_vertical_content_padding_top = new BurstMikadoField(
	"textsimple",
	"tabs_vertical_content_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tabs_vertical_content_padding_top",
	$tabs_vertical_content_padding_top
);

$tabs_vertical_content_padding_bottom = new BurstMikadoField(
	"textsimple",
	"tabs_vertical_content_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tabs_vertical_content_padding_bottom",
	$tabs_vertical_content_padding_bottom
);

//Tags

$panel18 = new BurstMikadoPanel(
	esc_html__( "Tags", 'burst' ),
	"tags_panel"
);
$elementsPage->addChild(
	"panel18",
	$panel18
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Tags Style", 'burst' ),
	esc_html__( "Define Tags style", 'burst' )
);
$panel18->addChild(
	"group1",
	$group1
);
$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$tags_color = new BurstMikadoField(
	"colorsimple",
	"tags_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tags_color",
	$tags_color
);

$tags_font_size = new BurstMikadoField(
	"textsimple",
	"tags_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tags_font_size",
	$tags_font_size
);

$tags_line_height = new BurstMikadoField(
	"textsimple",
	"tags_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"tags_line_height",
	$tags_line_height
);

$tags_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"tags_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"tags_text_transform",
	$tags_text_transform
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);

$tags_font_family = new BurstMikadoField(
	"fontsimple",
	"tags_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"tags_font_family",
	$tags_font_family
);

$tags_font_style = new BurstMikadoField(
	"selectblanksimple",
	"tags_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"tags_font_style",
	$tags_font_style
);

$tags_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"tags_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"tags_font_weight",
	$tags_font_weight
);

$tags_letter_spacing = new BurstMikadoField(
	"textsimple",
	"tags_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"tags_letter_spacing",
	$tags_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$group1->addChild(
	"row3",
	$row3
);

$tags_hover_color = new BurstMikadoField(
	"colorsimple",
	"tags_hover_color",
	"",
	esc_html__( "Hover Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"tags_hover_color",
	$tags_hover_color
);

$tags_background_color = new BurstMikadoField(
	"colorsimple",
	"tags_background_color",
	"",
	esc_html__( "Background color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"tags_background_color",
	$tags_background_color
);

$tags_background_hover_color = new BurstMikadoField(
	"colorsimple",
	"tags_background_hover_color",
	"",
	esc_html__( "Hover background color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"tags_background_hover_color",
	$tags_background_hover_color
);

$tags_border_radius = new BurstMikadoField(
	"textsimple",
	"tags_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"tags_border_radius",
	$tags_border_radius
);

$row4 = new BurstMikadoRow( true );
$group1->addChild(
	"row4",
	$row4
);

$tags_border_color = new BurstMikadoField(
	"colorsimple",
	"tags_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"tags_border_color",
	$tags_border_color
);

$tags_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"tags_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"tags_border_hover_color",
	$tags_border_hover_color
);

$tags_border_width = new BurstMikadoField(
	"textsimple",
	"tags_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"tags_border_width",
	$tags_border_width
);

//Team

$panel20 = new BurstMikadoPanel(
	esc_html__( "Team", 'burst' ),
	"team_panel"
);
$elementsPage->addChild(
	"panel20",
	$panel20
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Team Image Hover Overlay", 'burst' ),
	esc_html__( "Choose team image hover overlay", 'burst' )
);
$panel20->addChild(
	"group1",
	$group1
);
$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);
$team_hover_color = new BurstMikadoField(
	"colorsimple",
	"team_hover_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_hover_color",
	$team_hover_color
);

$team_hover_color_opacity = new BurstMikadoField(
	"textsimple",
	"team_hover_color_opacity",
	"",
	esc_html__( "Transparency (0=full - 1=opaque)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_hover_color_opacity",
	$team_hover_color_opacity
);

$team_hover_border_width = new BurstMikadoField(
	"textsimple",
	"team_hover_border_width",
	"",
	esc_html__( "Border Width", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_hover_border_width",
	$team_hover_border_width
);

$team_hover_border_color = new BurstMikadoField(
	"colorsimple",
	"team_hover_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_hover_border_color",
	$team_hover_border_color
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Team Member Name", 'burst' ),
	esc_html__( "Define styles for team member name", 'burst' )
);
$panel20->addChild(
	"group2",
	$group2
);
$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$team_color = new BurstMikadoField(
	"colorsimple",
	"team_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_color",
	$team_color
);

$team_font_size = new BurstMikadoField(
	"textsimple",
	"team_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_font_size",
	$team_font_size
);

$team_line_height = new BurstMikadoField(
	"textsimple",
	"team_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_line_height",
	$team_line_height
);

$team_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"team_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"team_text_transform",
	$team_text_transform
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);

$team_font_family = new BurstMikadoField(
	"fontsimple",
	"team_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"team_font_family",
	$team_font_family
);

$team_font_style = new BurstMikadoField(
	"selectblanksimple",
	"team_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"team_font_style",
	$team_font_style
);

$team_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"team_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"team_font_weight",
	$team_font_weight
);

$team_letter_spacing = new BurstMikadoField(
	"textsimple",
	"team_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"team_letter_spacing",
	$team_letter_spacing
);

$group5 = new BurstMikadoGroup(
	esc_html__( "Team Member Position", 'burst' ),
	esc_html__( "Define styles for team member position", 'burst' )
);
$panel20->addChild(
	"group5",
	$group5
);

$row1 = new BurstMikadoRow();
$group5->addChild(
	"row1",
	$row1
);

$team_position_color = new BurstMikadoField(
	"colorsimple",
	"team_position_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_position_color",
	$team_position_color
);

$team_position_font_size = new BurstMikadoField(
	"textsimple",
	"team_position_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_position_font_size",
	$team_position_font_size
);

$team_position_line_height = new BurstMikadoField(
	"textsimple",
	"team_position_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_position_line_height",
	$team_position_line_height
);

$team_position_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"team_position_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"team_position_text_transform",
	$team_position_text_transform
);

$row2 = new BurstMikadoRow( true );
$group5->addChild(
	"row2",
	$row2
);

$team_position_font_family = new BurstMikadoField(
	"fontsimple",
	"team_position_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"team_position_font_family",
	$team_position_font_family
);

$team_position_font_style = new BurstMikadoField(
	"selectblanksimple",
	"team_position_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"team_position_font_style",
	$team_position_font_style
);

$team_position_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"team_position_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"team_position_font_weight",
	$team_position_font_weight
);

$team_position_letter_spacing = new BurstMikadoField(
	"textsimple",
	"team_position_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"team_position_letter_spacing",
	$team_position_letter_spacing
);

$group6 = new BurstMikadoGroup(
	esc_html__( "Team Member Description", 'burst' ),
	esc_html__( "Define styles for team member description", 'burst' )
);
$panel20->addChild(
	"group6",
	$group6
);

$row1 = new BurstMikadoRow();
$group6->addChild(
	"row1",
	$row1
);

$team_description_color = new BurstMikadoField(
	"colorsimple",
	"team_description_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_description_color",
	$team_description_color
);

$team_description_font_size = new BurstMikadoField(
	"textsimple",
	"team_description_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_description_font_size",
	$team_description_font_size
);

$team_description_line_height = new BurstMikadoField(
	"textsimple",
	"team_description_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_description_line_height",
	$team_description_line_height
);

$team_description_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"team_description_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"team_description_text_transform",
	$team_description_text_transform
);

$row2 = new BurstMikadoRow( true );
$group6->addChild(
	"row2",
	$row2
);

$team_description_font_family = new BurstMikadoField(
	"fontsimple",
	"team_description_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"team_description_font_family",
	$team_description_font_family
);

$team_description_font_style = new BurstMikadoField(
	"selectblanksimple",
	"team_description_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"team_description_font_style",
	$team_description_font_style
);

$team_description_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"team_description_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"team_description_font_weight",
	$team_description_font_weight
);

$team_description_letter_spacing = new BurstMikadoField(
	"textsimple",
	"team_description_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"team_description_letter_spacing",
	$team_description_letter_spacing
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Social Icons", 'burst' ),
	esc_html__( "Define Social Icons style", 'burst' )
);
$panel20->addChild(
	"group3",
	$group3
);
$row1 = new BurstMikadoRow();
$group3->addChild(
	"row1",
	$row1
);

$team_icon_color = new BurstMikadoField(
	"colorsimple",
	"team_icon_color",
	"",
	esc_html__( "Icon Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_icon_color",
	$team_icon_color
);

$team_icon_hover_color = new BurstMikadoField(
	"colorsimple",
	"team_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_icon_hover_color",
	$team_icon_hover_color
);

$team_icon_background_color = new BurstMikadoField(
	"colorsimple",
	"team_icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_icon_background_color",
	$team_icon_background_color
);

$team_icon_hover_background_color = new BurstMikadoField(
	"colorsimple",
	"team_icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_icon_hover_background_color",
	$team_icon_hover_background_color
);

$row2 = new BurstMikadoRow( true );
$group3->addChild(
	"row2",
	$row2
);

$team_icon_border_color = new BurstMikadoField(
	"colorsimple",
	"team_icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"team_icon_border_color",
	$team_icon_border_color
);

$team_icon_hover_border_color = new BurstMikadoField(
	"colorsimple",
	"team_icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"team_icon_hover_border_color",
	$team_icon_hover_border_color
);

$team_icon_border_width = new BurstMikadoField(
	"textsimple",
	"team_icon_border_width",
	"",
	esc_html__( "Icon Border Width", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"team_icon_border_width",
	$team_icon_border_width
);

$team_icon_size = new BurstMikadoField(
	"textsimple",
	"team_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"team_icon_size",
	$team_icon_size
);

$row3 = new BurstMikadoRow( true );
$group3->addChild(
	"row3",
	$row3
);

$team_icon_shape_size = new BurstMikadoField(
	"textsimple",
	"team_icon_shape_size",
	"",
	esc_html__( "Shape Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"team_icon_shape_size",
	$team_icon_shape_size
);

$team_icon_space = new BurstMikadoField(
	"textsimple",
	"team_icon_space",
	"",
	esc_html__( "Space between Icons (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"team_icon_space",
	$team_icon_space
);

$group7 = new BurstMikadoGroup(
	esc_html__( "Team Social Text", 'burst' ),
	esc_html__( "Define styles for team social text", 'burst' )
);
$panel20->addChild(
	"group7",
	$group7
);

$row1 = new BurstMikadoRow();
$group7->addChild(
	"row1",
	$row1
);

$team_social_text_color = new BurstMikadoField(
	"colorsimple",
	"team_social_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_social_text_color",
	$team_social_text_color
);

$team_social_text_font_size = new BurstMikadoField(
	"textsimple",
	"team_social_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_social_text_font_size",
	$team_social_text_font_size
);

$team_social_text_line_height = new BurstMikadoField(
	"textsimple",
	"team_social_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_social_text_line_height",
	$team_social_text_line_height
);

$team_social_text_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"team_social_text_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"team_social_text_text_transform",
	$team_social_text_text_transform
);

$row2 = new BurstMikadoRow( true );
$group7->addChild(
	"row2",
	$row2
);

$team_social_text_font_family = new BurstMikadoField(
	"fontsimple",
	"team_social_text_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"team_social_text_font_family",
	$team_social_text_font_family
);

$team_social_text_font_style = new BurstMikadoField(
	"selectblanksimple",
	"team_social_text_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"team_social_text_font_style",
	$team_social_text_font_style
);

$team_social_text_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"team_social_text_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"team_social_text_font_weight",
	$team_social_text_font_weight
);

$team_social_text_letter_spacing = new BurstMikadoField(
	"textsimple",
	"team_social_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"team_social_text_letter_spacing",
	$team_social_text_letter_spacing
);

$main_info_below_image_subtitle = new BurstMikadoTitle(
	"main_info_below_image_subtitle",
	esc_html__( "Main Info Below Image - Type", 'burst' )
);
$panel20->addChild(
	"main_info_below_image_subtitle",
	$main_info_below_image_subtitle
);

$group4 = new BurstMikadoGroup(
	esc_html__( "Share Icon", 'burst' ),
	esc_html__( "Define Share Icon style. This applies only if Between Image and Info is selected for Social Style", 'burst' )
);
$panel20->addChild(
	"group4",
	$group4
);
$row1 = new BurstMikadoRow();
$group4->addChild(
	"row1",
	$row1
);

$team_share_icon_color = new BurstMikadoField(
	"colorsimple",
	"team_share_icon_color",
	"",
	esc_html__( "Icon Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_share_icon_color",
	$team_share_icon_color
);

$team_share_icon_hover_color = new BurstMikadoField(
	"colorsimple",
	"team_share_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_share_icon_hover_color",
	$team_share_icon_hover_color
);

$team_share_icon_background_color = new BurstMikadoField(
	"colorsimple",
	"team_share_icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_share_icon_background_color",
	$team_share_icon_background_color
);

$team_share_icon_hover_background_color = new BurstMikadoField(
	"colorsimple",
	"team_share_icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"team_share_icon_hover_background_color",
	$team_share_icon_hover_background_color
);

$row2 = new BurstMikadoRow( true );
$group4->addChild(
	"row2",
	$row2
);

$team_share_icon_border_color = new BurstMikadoField(
	"colorsimple",
	"team_share_icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"team_share_icon_border_color",
	$team_share_icon_border_color
);

$team_share_icon_hover_border_color = new BurstMikadoField(
	"colorsimple",
	"team_share_icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"team_share_icon_hover_border_color",
	$team_share_icon_hover_border_color
);

$team_share_icon_size = new BurstMikadoField(
	"textsimple",
	"team_share_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"team_share_icon_size",
	$team_share_icon_size
);

$team_share_icon_shape_size = new BurstMikadoField(
	"textsimple",
	"team_share_icon_shape_size",
	"",
	esc_html__( "Shape Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"team_share_icon_shape_size",
	$team_share_icon_shape_size
);

//Testimonials

$panel16 = new BurstMikadoPanel(
	esc_html__( "Testimonials", 'burst' ),
	"testimonials_panel"
);
$elementsPage->addChild(
	"panel16",
	$panel16
);

$group4 = new BurstMikadoGroup(
	esc_html__( "Testimonials Title", 'burst' ),
	esc_html__( "Define Testimonials title style", 'burst' )
);
$panel16->addChild(
	"group4",
	$group4
);
$row1 = new BurstMikadoRow();
$group4->addChild(
	"row1",
	$row1
);

$testimonials_title_color = new BurstMikadoField(
	"colorsimple",
	"testimonials_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"testimonials_title_color",
	$testimonials_title_color
);

$testimonials_title_font_size = new BurstMikadoField(
	"textsimple",
	"testimonials_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"testimonials_title_font_size",
	$testimonials_title_font_size
);

$testimonials_title_line_height = new BurstMikadoField(
	"textsimple",
	"testimonials_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"testimonials_title_line_height",
	$testimonials_title_line_height
);

$testimonials_title_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"testimonials_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"testimonials_title_text_transform",
	$testimonials_title_text_transform
);

$row2 = new BurstMikadoRow( true );
$group4->addChild(
	"row2",
	$row2
);

$testimonials_title_font_family = new BurstMikadoField(
	"fontsimple",
	"testimonials_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"testimonials_title_font_family",
	$testimonials_title_font_family
);

$testimonials_title_font_style = new BurstMikadoField(
	"selectblanksimple",
	"testimonials_title_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"testimonials_title_font_style",
	$testimonials_title_font_style
);

$testimonials_title_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"testimonials_title_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"testimonials_title_font_weight",
	$testimonials_title_font_weight
);

$testimonials_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"testimonials_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"testimonials_title_letter_spacing",
	$testimonials_title_letter_spacing
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Testimonials Text", 'burst' ),
	esc_html__( "Define Testimonials text style", 'burst' )
);
$panel16->addChild(
	"group1",
	$group1
);
$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$testimonials_text_color = new BurstMikadoField(
	"colorsimple",
	"testimonials_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"testimonials_text_color",
	$testimonials_text_color
);

$testimonials_text_font_size = new BurstMikadoField(
	"textsimple",
	"testimonials_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"testimonials_text_font_size",
	$testimonials_text_font_size
);

$testimonials_text_line_height = new BurstMikadoField(
	"textsimple",
	"testimonials_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"testimonials_text_line_height",
	$testimonials_text_line_height
);

$testimonials_text_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"testimonials_text_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"testimonials_text_text_transform",
	$testimonials_text_text_transform
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);

$testimonials_text_font_family = new BurstMikadoField(
	"fontsimple",
	"testimonials_text_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"testimonials_text_font_family",
	$testimonials_text_font_family
);

$testimonials_text_font_style = new BurstMikadoField(
	"selectblanksimple",
	"testimonials_text_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"testimonials_text_font_style",
	$testimonials_text_font_style
);

$testimonials_text_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"testimonials_text_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"testimonials_text_font_weight",
	$testimonials_text_font_weight
);

$testimonials_text_letter_spacing = new BurstMikadoField(
	"textsimple",
	"testimonials_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"testimonials_text_letter_spacing",
	$testimonials_text_letter_spacing
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Testimonials Author Style", 'burst' ),
	esc_html__( "Define Testimonials author style", 'burst' )
);
$panel16->addChild(
	"group2",
	$group2
);
$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$testimonials_author_color = new BurstMikadoField(
	"colorsimple",
	"testimonials_author_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"testimonials_author_color",
	$testimonials_author_color
);

$testimonials_author_font_size = new BurstMikadoField(
	"textsimple",
	"testimonials_author_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"testimonials_author_font_size",
	$testimonials_author_font_size
);

$testimonials_author_line_height = new BurstMikadoField(
	"textsimple",
	"testimonials_author_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"testimonials_author_line_height",
	$testimonials_author_line_height
);

$testimonials_author_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"testimonials_author_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"testimonials_author_text_transform",
	$testimonials_author_text_transform
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);

$testimonials_author_font_family = new BurstMikadoField(
	"fontsimple",
	"testimonials_author_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"testimonials_author_font_family",
	$testimonials_author_font_family
);

$testimonials_author_font_style = new BurstMikadoField(
	"selectblanksimple",
	"testimonials_author_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"testimonials_author_font_style",
	$testimonials_author_font_style
);

$testimonials_author_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"testimonials_author_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"testimonials_author_font_weight",
	$testimonials_author_font_weight
);

$testimonials_author_letter_spacing = new BurstMikadoField(
	"textsimple",
	"testimonials_author_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"testimonials_author_letter_spacing",
	$testimonials_author_letter_spacing
);

$group6 = new BurstMikadoGroup(
	esc_html__( "Testimonials Job Position Style", 'burst' ),
	esc_html__( "Define testimonials job position author style", 'burst' )
);
$panel16->addChild(
	"group6",
	$group6
);
$row1 = new BurstMikadoRow();
$group6->addChild(
	"row1",
	$row1
);

$testimonials_author_job_position_color = new BurstMikadoField(
	"colorsimple",
	"testimonials_author_job_position_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"testimonials_author_job_position_color",
	$testimonials_author_job_position_color
);

$testimonials_author_job_position_font_size = new BurstMikadoField(
	"textsimple",
	"testimonials_author_job_position_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"testimonials_author_job_position_font_size",
	$testimonials_author_job_position_font_size
);

$testimonials_author_job_position_line_height = new BurstMikadoField(
	"textsimple",
	"testimonials_author_job_position_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"testimonials_author_job_position_line_height",
	$testimonials_author_job_position_line_height
);

$testimonials_author_job_position_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"testimonials_author_job_position_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"testimonials_author_job_position_text_transform",
	$testimonials_author_job_position_text_transform
);

$row2 = new BurstMikadoRow( true );
$group6->addChild(
	"row2",
	$row2
);

$testimonials_author_job_position_font_family = new BurstMikadoField(
	"fontsimple",
	"testimonials_author_job_position_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"testimonials_author_job_position_font_family",
	$testimonials_author_job_position_font_family
);

$testimonials_author_job_position_font_style = new BurstMikadoField(
	"selectblanksimple",
	"testimonials_author_job_position_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"testimonials_author_job_position_font_style",
	$testimonials_author_job_position_font_style
);

$testimonials_author_job_position_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"testimonials_author_job_position_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"testimonials_author_job_position_font_weight",
	$testimonials_author_job_position_font_weight
);

$testimonials_author_job_position_letter_spacing = new BurstMikadoField(
	"textsimple",
	"testimonials_author_job_position_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"testimonials_author_job_position_letter_spacing",
	$testimonials_author_job_position_letter_spacing
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Testimonials Navigation", 'burst' ),
	esc_html__( "Define Testimonials navigation style", 'burst' )
);
$panel16->addChild(
	"group3",
	$group3
);
$row1 = new BurstMikadoRow();
$group3->addChild(
	"row1",
	$row1
);

$testimonials_navigation_width = new BurstMikadoField(
	"textsimple",
	"testimonials_navigation_width",
	"",
	esc_html__( "Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"testimonials_navigation_width",
	$testimonials_navigation_width
);

$testimonials_navigation_height = new BurstMikadoField(
	"textsimple",
	"testimonials_navigation_height",
	"",
	esc_html__( "Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"testimonials_navigation_height",
	$testimonials_navigation_height
);

$testimonials_navigation_active_width = new BurstMikadoField(
	"textsimple",
	"testimonials_navigation_active_width",
	"",
	esc_html__( "Active Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"testimonials_navigation_active_width",
	$testimonials_navigation_active_width
);

$testimonials_navigation_active_height = new BurstMikadoField(
	"textsimple",
	"testimonials_navigation_active_height",
	"",
	esc_html__( "Active Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"testimonials_navigation_active_height",
	$testimonials_navigation_active_height
);

$row2 = new BurstMikadoRow( true );
$group3->addChild(
	"row2",
	$row2
);

$testimonials_navigation_color = new BurstMikadoField(
	"colorsimple",
	"testimonials_navigation_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"testimonials_navigation_color",
	$testimonials_navigation_color
);

$testimonials_navigation_color_transparency = new BurstMikadoField(
	"textsimple",
	"testimonials_navigation_color_transparency",
	"",
	esc_html__( "Color Transparency", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"testimonials_navigation_color_transparency",
	$testimonials_navigation_color_transparency
);

$testimonials_navigation_active_color = new BurstMikadoField(
	"colorsimple",
	"testimonials_navigation_active_color",
	"",
	esc_html__( "Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"testimonials_navigation_active_color",
	$testimonials_navigation_active_color
);

$testimonials_navigation_active_color_transparency = new BurstMikadoField(
	"textsimple",
	"testimonials_navigation_active_color_transparency",
	"",
	esc_html__( "Active Color Transparency", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"testimonials_navigation_active_color_transparency",
	$testimonials_navigation_active_color_transparency
);

$row3 = new BurstMikadoRow( true );
$group3->addChild(
	"row3",
	$row3
);

$testimonials_navigation_border_radius = new BurstMikadoField(
	"textsimple",
	"testimonials_navigation_border_radius",
	"",
	esc_html__( "Border radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"testimonials_navigation_border_radius",
	$testimonials_navigation_border_radius
);

$testimonials_navigation_border_width = new BurstMikadoField(
	"textsimple",
	"testimonials_navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"testimonials_navigation_border_width",
	$testimonials_navigation_border_width
);

$testimonials_navigation_border_color = new BurstMikadoField(
	"colorsimple",
	"testimonials_navigation_border_color",
	"",
	esc_html__( "Border color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"testimonials_navigation_border_color",
	$testimonials_navigation_border_color
);

$testimonials_navigation_border_transparency = new BurstMikadoField(
	"textsimple",
	"testimonials_navigation_border_transparency",
	"",
	esc_html__( "Border Color Transparency", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"testimonials_navigation_border_transparency",
	$testimonials_navigation_border_transparency
);

$row4 = new BurstMikadoRow();
$group3->addChild(
	"row4",
	$row4
);

$testimonials_navigation_active_border_color = new BurstMikadoField(
	"colorsimple",
	"testimonials_navigation_active_border_color",
	"",
	esc_html__( "Active Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"testimonials_navigation_active_border_color",
	$testimonials_navigation_active_border_color
);

$testimonials_navigation_active_border_transparency = new BurstMikadoField(
	"textsimple",
	"testimonials_navigation_active_border_transparency",
	"",
	esc_html__( "Active Border Color Transparency", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"testimonials_navigation_active_border_transparency",
	$testimonials_navigation_active_border_transparency
);

$testimonials_navigation_active_outer_border_color = new BurstMikadoField(
	"colorsimple",
	"testimonials_navigation_active_outer_border_color",
	"",
	esc_html__( "Outer Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"testimonials_navigation_active_outer_border_color",
	$testimonials_navigation_active_outer_border_color
);

$group_testimonials_image = new BurstMikadoGroup(
	esc_html__( "Testimonials Image Style", 'burst' ),
	esc_html__( "Define Testimonials Image Style", 'burst' )
);
$panel16->addChild(
	"group_testimonials_image",
	$group_testimonials_image
);

$row1 = new BurstMikadoRow( true );
$group_testimonials_image->addChild(
	"row1",
	$row1
);

$testimonials_image_border_radius = new BurstMikadoField(
	"textsimple",
	"testimonials_image_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"testimonials_image_border_radius",
	$testimonials_image_border_radius
);

$group_testimonials_carousel_type_background = new BurstMikadoGroup(
	esc_html__( "Testimonials Carousel Style", 'burst' ),
	esc_html__( "Define Testimonials Carousel Style", 'burst' )
);
$panel16->addChild(
	"group_testimonials_carousel_type_background",
	$group_testimonials_carousel_type_background
);

$row1 = new BurstMikadoRow( true );
$group_testimonials_carousel_type_background->addChild(
	"row1",
	$row1
);

$testimonials_carousel_type_background_color = new BurstMikadoField(
	"colorsimple",
	"testimonials_carousel_type_background_color",
	"",
	esc_html__( "Testimonial Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"testimonials_carousel_type_background_color",
	$testimonials_carousel_type_background_color
);

$group5 = new BurstMikadoGroup(
	esc_html__( "Testimonials Arrows Style", 'burst' ),
	esc_html__( "Define Testimonials Arrows Style", 'burst' )
);
$panel16->addChild(
	"group5",
	$group5
);
$row1 = new BurstMikadoRow();
$group5->addChild(
	"row1",
	$row1
);

$testimonials_arrows_button_width = new BurstMikadoField(
	"textsimple",
	"testimonials_arrows_button_width",
	"",
	esc_html__( "Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"testimonials_arrows_button_width",
	$testimonials_arrows_button_width
);

$testimonials_arrows_button_height = new BurstMikadoField(
	"textsimple",
	"testimonials_arrows_button_height",
	"",
	esc_html__( "Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"testimonials_arrows_button_height",
	$testimonials_arrows_button_height
);

$testimonials_arrows_type = new BurstMikadoField(
	"selectblanksimple",
	"testimonials_arrows_type",
	"",
	esc_html__( "Arrow Type", 'burst' ),
	esc_html__( "This option doesn't work for carousel type.", 'burst' ),
	burst_mikado_return_options_arrows_type()
);
$row1->addChild(
	"testimonials_arrows_type",
	$testimonials_arrows_type
);

$testimonials_arrows_color = new BurstMikadoField(
	"colorsimple",
	"testimonials_arrows_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"testimonials_arrows_color",
	$testimonials_arrows_color
);

$row2 = new BurstMikadoRow( true );
$group5->addChild(
	"row2",
	$row2
);

$testimonials_arrows_color_transparency = new BurstMikadoField(
	"textsimple",
	"testimonials_arrows_color_transparency",
	"",
	esc_html__( "Background Transparency (0=full - 1=opaque)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"testimonials_arrows_color_transparency",
	$testimonials_arrows_color_transparency
);

$testimonials_arrows_active_color = new BurstMikadoField(
	"colorsimple",
	"testimonials_arrows_active_color",
	"",
	esc_html__( "Hover Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"testimonials_arrows_active_color",
	$testimonials_arrows_active_color
);

$testimonials_arrows_active_color_transparency = new BurstMikadoField(
	"textsimple",
	"testimonials_arrows_active_color_transparency",
	"",
	esc_html__( "Background Hover Transparency (0=full - 1=opaque)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"testimonials_arrows_active_color_transparency",
	$testimonials_arrows_active_color_transparency
);

$testimonials_arrows_border_radius = new BurstMikadoField(
	"textsimple",
	"testimonials_arrows_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"testimonials_arrows_border_radius",
	$testimonials_arrows_border_radius
);

$row3 = new BurstMikadoRow( true );
$group5->addChild(
	"row3",
	$row3
);

$testimonials_arrows_border_width = new BurstMikadoField(
	"textsimple",
	"testimonials_arrows_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"testimonials_arrows_border_width",
	$testimonials_arrows_border_width
);

$testimonials_arrows_border_color = new BurstMikadoField(
	"colorsimple",
	"testimonials_arrows_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"testimonials_arrows_border_color",
	$testimonials_arrows_border_color
);

$testimonials_arrows_border_transparency = new BurstMikadoField(
	"textsimple",
	"testimonials_arrows_border_transparency",
	"",
	esc_html__( "Border Transparency (0=full - 1=opaque)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"testimonials_arrows_border_transparency",
	$testimonials_arrows_border_transparency
);

$testimonials_arrows_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"testimonials_arrows_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"testimonials_arrows_border_hover_color",
	$testimonials_arrows_border_hover_color
);

$row4 = new BurstMikadoRow( true );
$group5->addChild(
	"row4",
	$row4
);

$testimonials_arrows_border_hover_transparency = new BurstMikadoField(
	"textsimple",
	"testimonials_arrows_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0=full - 1=opaque)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"testimonials_arrows_border_hover_transparency",
	$testimonials_arrows_border_hover_transparency
);

$testimonials_arrows_icon_color = new BurstMikadoField(
	"colorsimple",
	"testimonials_arrows_icon_color",
	"",
	esc_html__( "Icon Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"testimonials_arrows_icon_color",
	$testimonials_arrows_icon_color
);

$testimonials_arrows_transparency = new BurstMikadoField(
	"textsimple",
	"testimonials_arrows_transparency",
	"",
	esc_html__( "Icon Transparency (0=full - 1=opaque)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"testimonials_arrows_transparency",
	$testimonials_arrows_transparency
);

$testimonials_arrows_icon_hover_color = new BurstMikadoField(
	"colorsimple",
	"testimonials_arrows_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"testimonials_arrows_icon_hover_color",
	$testimonials_arrows_icon_hover_color
);

$row5 = new BurstMikadoRow( true );
$group5->addChild(
	"row5",
	$row5
);

$testimonials_arrows_hover_transparency = new BurstMikadoField(
	"textsimple",
	"testimonials_arrows_hover_transparency",
	"",
	esc_html__( "Icon Hover Transparency (0=full - 1=opaque)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row5->addChild(
	"testimonials_arrows_hover_transparency",
	$testimonials_arrows_hover_transparency
);

$testimonials_arrows_size = new BurstMikadoField(
	"textsimple",
	"testimonials_arrows_size",
	"",
	esc_html__( "Icon Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row5->addChild(
	"testimonials_arrows_size",
	$testimonials_arrows_size
);

//Widgets
$panel_widgets = new BurstMikadoPanel(
	esc_html__( "Widgets", 'burst' ),
	"widget_style"
);
$elementsPage->addChild(
	"panel_widgets",
	$panel_widgets
);

$sidebar_background_color = new BurstMikadoField(
	"color",
	"sidebar_background_color",
	"",
	esc_html__( "Sidebar Background Color", 'burst' ),
	esc_html__( "Choose background color for sidebar", 'burst' )
);
$panel_widgets->addChild(
	"sidebar_background_color",
	$sidebar_background_color
);

$group6 = new BurstMikadoGroup(
	esc_html__( "Padding", 'burst' ),
	esc_html__( "Define padding for sidebar", 'burst' )
);
$panel_widgets->addChild(
	"group6",
	$group6
);
$row1 = new BurstMikadoRow( true );
$group6->addChild(
	"row1",
	$row1
);
$sidebar_padding_top = new BurstMikadoField(
	"textsimple",
	"sidebar_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_padding_top",
	$sidebar_padding_top
);
$sidebar_padding_right = new BurstMikadoField(
	"textsimple",
	"sidebar_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_padding_right",
	$sidebar_padding_right
);
$sidebar_padding_bottom = new BurstMikadoField(
	"textsimple",
	"sidebar_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_padding_bottom",
	$sidebar_padding_bottom
);
$sidebar_padding_left = new BurstMikadoField(
	"textsimple",
	"sidebar_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_padding_left",
	$sidebar_padding_left
);

$sidebar_alignment = new BurstMikadoField(
	"select",
	"sidebar_alignment",
	"",
	esc_html__( "Text Alignment", 'burst' ),
	esc_html__( "Choose text aligment", 'burst' ),
	array(
		"left" => esc_html__( "Left", 'burst' ),
		"center" => esc_html__( "Center", 'burst' ),
		"right" => esc_html__( "Right", 'burst' )
	)
);
$panel_widgets->addChild(
	"sidebar_alignment",
	$sidebar_alignment
);

$widget_style = new BurstMikadoTitle(
	"widget_style",
	esc_html__( "Widget Style", 'burst' )
);
$panel_widgets->addChild(
	"widget_style",
	$widget_style
);

$widget_background_color = new BurstMikadoField(
	"color",
	"widget_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Choose color for widget background", 'burst' )
);
$panel_widgets->addChild(
	"widget_background_color",
	$widget_background_color
);

$widget_border_color = new BurstMikadoField(
	"color",
	"widget_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "Choose a border color around widget", 'burst' )
);
$panel_widgets->addChild(
	"widget_border_color",
	$widget_border_color
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Padding", 'burst' ),
	esc_html__( "Define padding for widget", 'burst' )
);
$panel_widgets->addChild(
	"group1",
	$group1
);
$row1 = new BurstMikadoRow( true );
$group1->addChild(
	"row1",
	$row1
);
$widget_padding_top = new BurstMikadoField(
	"textsimple",
	"widget_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"widget_padding_top",
	$widget_padding_top
);
$widget_padding_right = new BurstMikadoField(
	"textsimple",
	"widget_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"widget_padding_right",
	$widget_padding_right
);
$widget_padding_bottom = new BurstMikadoField(
	"textsimple",
	"widget_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"widget_padding_bottom",
	$widget_padding_bottom
);
$widget_padding_left = new BurstMikadoField(
	"textsimple",
	"widget_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"widget_padding_left",
	$widget_padding_left
);

$widget_title = new BurstMikadoTitle(
	"widget_title",
	esc_html__( "Widget Title", 'burst' )
);
$panel_widgets->addChild(
	"widget_title",
	$widget_title
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Text Style", 'burst' ),
	esc_html__( "Define styles for widgets title", 'burst' )
);
$panel_widgets->addChild(
	"group2",
	$group2
);
$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);
$sidebar_title_color = new BurstMikadoField(
	"colorsimple",
	"sidebar_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_title_color",
	$sidebar_title_color
);

$sidebar_title_font_size = new BurstMikadoField(
	"textsimple",
	"sidebar_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_title_font_size",
	$sidebar_title_font_size
);

$sidebar_title_line_height = new BurstMikadoField(
	"textsimple",
	"sidebar_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_title_line_height",
	$sidebar_title_line_height
);

$sidebar_title_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"sidebar_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"sidebar_title_text_transform",
	$sidebar_title_text_transform
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);
$sidebar_title_font_family = new BurstMikadoField(
	"fontsimple",
	"sidebar_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"sidebar_title_font_family",
	$sidebar_title_font_family
);

$sidebar_title_font_style = new BurstMikadoField(
	"selectblanksimple",
	"sidebar_title_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"sidebar_title_font_style",
	$sidebar_title_font_style
);

$sidebar_title_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"sidebar_title_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"sidebar_title_font_weight",
	$sidebar_title_font_weight
);

$sidebar_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"sidebar_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"sidebar_title_letter_spacing",
	$sidebar_title_letter_spacing
);

$sidebar_title_aligment = new BurstMikadoField(
	"select",
	"sidebar_title_aligment",
	"",
	esc_html__( "Title Text Alignment", 'burst' ),
	esc_html__( "Choose text alignment for widget title", 'burst' ),
	array(
		"left" => esc_html__( "Left", 'burst' ),
		"center" => esc_html__( "Center", 'burst' ),
		"right" => esc_html__( "Right", 'burst' )
	)
);
$panel_widgets->addChild(
	"sidebar_title_aligment",
	$sidebar_title_aligment
);

$sidebar_title_background = new BurstMikadoField(
	"color",
	"sidebar_title_background",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Choose color for background", 'burst' )
);
$panel_widgets->addChild(
	"sidebar_title_background",
	$sidebar_title_background
);

$sidebar_title_border_color = new BurstMikadoField(
	"color",
	"sidebar_title_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "Choose color for border", 'burst' )
);
$panel_widgets->addChild(
	"sidebar_title_border_color",
	$sidebar_title_border_color
);

$group8 = new BurstMikadoGroup(
	esc_html__( "Padding for Title", 'burst' ),
	esc_html__( "Define padding for title", 'burst' )
);
$panel_widgets->addChild(
	"group8",
	$group8
);

$row1 = new BurstMikadoRow();
$group8->addChild(
	"row1",
	$row1
);

$sidebar_title_padding_top = new BurstMikadoField(
	"textsimple",
	"sidebar_title_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_title_padding_top",
	$sidebar_title_padding_top
);

$sidebar_title_padding_right = new BurstMikadoField(
	"textsimple",
	"sidebar_title_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_title_padding_right",
	$sidebar_title_padding_right
);

$sidebar_title_padding_bottom = new BurstMikadoField(
	"textsimple",
	"sidebar_title_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_title_padding_bottom",
	$sidebar_title_padding_bottom
);

$sidebar_title_padding_left = new BurstMikadoField(
	"textsimple",
	"sidebar_title_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_title_padding_left",
	$sidebar_title_padding_left
);

$group4 = new BurstMikadoGroup(
	esc_html__( "Separator", 'burst' ),
	esc_html__( "Define styles for title separator", 'burst' )
);
$panel_widgets->addChild(
	"group4",
	$group4
);
$row1 = new BurstMikadoRow();
$group4->addChild(
	"row1",
	$row1
);
$sidebar_title_border_bottom_color = new BurstMikadoField(
	"colorsimple",
	"sidebar_title_border_bottom_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_title_border_bottom_color",
	$sidebar_title_border_bottom_color
);

$sidebar_title_border_bottom_width = new BurstMikadoField(
	"textsimple",
	"sidebar_title_border_bottom_width",
	"",
	esc_html__( "Thickness (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_title_border_bottom_width",
	$sidebar_title_border_bottom_width
);

$sidebar_title_border_bottom_padding_bottom = new BurstMikadoField(
	"textsimple",
	"sidebar_title_border_bottom_padding_bottom",
	"",
	esc_html__( "Top Margin (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_title_border_bottom_padding_bottom",
	$sidebar_title_border_bottom_padding_bottom
);

$sidebar_title_border_bottom_margin_bottom = new BurstMikadoField(
	"textsimple",
	"sidebar_title_border_bottom_margin_bottom",
	"",
	esc_html__( "Bottom Margin (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_title_border_bottom_margin_bottom",
	$sidebar_title_border_bottom_margin_bottom
);

$row2 = new BurstMikadoRow();
$group4->addChild(
	"row2",
	$row2
);

$sidebar_title_border_bottom_length = new BurstMikadoField(
	"textsimple",
	"sidebar_title_border_bottom_length",
	"",
	esc_html__( "Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"sidebar_title_border_bottom_length",
	$sidebar_title_border_bottom_length
);

$widget_text = new BurstMikadoTitle(
	"widget_text",
	esc_html__( "Widget Text", 'burst' )
);
$panel_widgets->addChild(
	"widget_text",
	$widget_text
);

$group7 = new BurstMikadoGroup(
	esc_html__( "Text Style", 'burst' ),
	esc_html__( "Define styles for widgets text", 'burst' )
);
$panel_widgets->addChild(
	"group7",
	$group7
);
$row1 = new BurstMikadoRow();
$group7->addChild(
	"row1",
	$row1
);
$sidebar_text_color = new BurstMikadoField(
	"colorsimple",
	"sidebar_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_text_color",
	$sidebar_text_color
);

$sidebar_text_font_size = new BurstMikadoField(
	"textsimple",
	"sidebar_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_text_font_size",
	$sidebar_text_font_size
);

$sidebar_text_line_height = new BurstMikadoField(
	"textsimple",
	"sidebar_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_text_line_height",
	$sidebar_text_line_height
);

$sidebar_text_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"sidebar_text_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"sidebar_text_text_transform",
	$sidebar_text_text_transform
);

$row2 = new BurstMikadoRow( true );
$group7->addChild(
	"row2",
	$row2
);
$sidebar_text_font_family = new BurstMikadoField(
	"fontsimple",
	"sidebar_text_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"sidebar_text_font_family",
	$sidebar_text_font_family
);

$sidebar_text_font_style = new BurstMikadoField(
	"selectblanksimple",
	"sidebar_text_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"sidebar_text_font_style",
	$sidebar_text_font_style
);

$sidebar_text_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"sidebar_text_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"sidebar_text_font_weight",
	$sidebar_text_font_weight
);

$sidebar_text_letter_spacing = new BurstMikadoField(
	"textsimple",
	"sidebar_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"sidebar_text_letter_spacing",
	$sidebar_text_letter_spacing
);

$widget_link = new BurstMikadoTitle(
	"widget_link",
	esc_html__( "Widget Link", 'burst' )
);
$panel_widgets->addChild(
	"widget_link",
	$widget_link
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Text Style", 'burst' ),
	esc_html__( "Define styles for widget links", 'burst' )
);
$panel_widgets->addChild(
	"group3",
	$group3
);
$row1 = new BurstMikadoRow();
$group3->addChild(
	"row1",
	$row1
);
$sidebar_link_color = new BurstMikadoField(
	"colorsimple",
	"sidebar_link_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_link_color",
	$sidebar_link_color
);

$sidebar_link_hover_color = new BurstMikadoField(
	"colorsimple",
	"sidebar_link_hover_color",
	"",
	esc_html__( "Text Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_link_hover_color",
	$sidebar_link_hover_color
);

$sidebar_link_font_size = new BurstMikadoField(
	"textsimple",
	"sidebar_link_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_link_font_size",
	$sidebar_link_font_size
);

$sidebar_link_line_height = new BurstMikadoField(
	"textsimple",
	"sidebar_link_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_link_line_height",
	$sidebar_link_line_height
);

$row2 = new BurstMikadoRow( true );
$group3->addChild(
	"row2",
	$row2
);

$sidebar_link_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"sidebar_link_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"sidebar_link_text_transform",
	$sidebar_link_text_transform
);

$sidebar_link_font_family = new BurstMikadoField(
	"fontsimple",
	"sidebar_link_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"sidebar_link_font_family",
	$sidebar_link_font_family
);

$sidebar_link_font_style = new BurstMikadoField(
	"selectblanksimple",
	"sidebar_link_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"sidebar_link_font_style",
	$sidebar_link_font_style
);

$sidebar_link_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"sidebar_link_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"sidebar_link_font_weight",
	$sidebar_link_font_weight
);

$row3 = new BurstMikadoRow( true );
$group3->addChild(
	"row3",
	$row3
);
$sidebar_link_letter_spacing = new BurstMikadoField(
	"textsimple",
	"sidebar_link_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"sidebar_link_letter_spacing",
	$sidebar_link_letter_spacing
);

$group9 = new BurstMikadoGroup(
	esc_html__( "Separator Style", 'burst' ),
	esc_html__( "Choose style for separator between links", 'burst' )
);
$panel_widgets->addChild(
	"group9",
	$group9
);

$row1 = new BurstMikadoRow();
$group9->addChild(
	"row1",
	$row1
);

$sidebar_link_separator_color = new BurstMikadoField(
	"colorsimple",
	"sidebar_link_separator_color",
	"",
	esc_html__( "Separator between links color", 'burst' ),
	esc_html__( "Choose color for separator between color", 'burst' )
);
$row1->addChild(
	"sidebar_link_separator_color",
	$sidebar_link_separator_color
);

$sidebar_link_separator_type = new BurstMikadoField(
	"selectblanksimple",
	"sidebar_link_separator_type",
	"",
	esc_html__( "Separator between links style", 'burst' ),
	esc_html__( "Choose style for separator", 'burst' ),
	array(
		"solid" => esc_html__( "Solid", 'burst' ),
		"dotted" => esc_html__( "Dotted", 'burst' ),
		"dashed" => esc_html__( "Dashed", 'burst' )
	)
);
$row1->addChild(
	"sidebar_link_separator_type",
	$sidebar_link_separator_type
);

$widget_elements = new BurstMikadoTitle(
	"widget_elements",
	esc_html__( "Widget Elements", 'burst' )
);
$panel_widgets->addChild(
	"widget_elements",
	$widget_elements
);

$group5 = new BurstMikadoGroup(
	esc_html__( "Search", 'burst' ),
	esc_html__( "Define styles for search in widget", 'burst' )
);
$panel_widgets->addChild(
	"group5",
	$group5
);
$row1 = new BurstMikadoRow();
$group5->addChild(
	"row1",
	$row1
);

$sidebar_search_height = new BurstMikadoField(
	"textsimple",
	"sidebar_search_height",
	"",
	esc_html__( "Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_search_height",
	$sidebar_search_height
);

$sidebar_search_border_color = new BurstMikadoField(
	"colorsimple",
	"sidebar_search_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_search_border_color",
	$sidebar_search_border_color
);

$sidebar_search_loupe_color = new BurstMikadoField(
	"colorsimple",
	"sidebar_search_loupe_color",
	"",
	esc_html__( "Magnifier Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_search_loupe_color",
	$sidebar_search_loupe_color
);

$sidebar_search_loupe_background_color = new BurstMikadoField(
	"colorsimple",
	"sidebar_search_loupe_background_color",
	"",
	esc_html__( "Magnifier Area Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_search_loupe_background_color",
	$sidebar_search_loupe_background_color
);

$row2 = new BurstMikadoRow();
$group5->addChild(
	"row2",
	$row2
);
$sidebar_search_text_color = new BurstMikadoField(
	"colorsimple",
	"sidebar_search_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"sidebar_search_text_color",
	$sidebar_search_text_color
);

$sidebar_search_focus_text_color = new BurstMikadoField(
	"colorsimple",
	"sidebar_search_focus_text_color",
	"",
	esc_html__( "Focus Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"sidebar_search_focus_text_color",
	$sidebar_search_focus_text_color
);

$sidebar_search_text_font_size = new BurstMikadoField(
	"textsimple",
	"sidebar_search_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"sidebar_search_text_font_size",
	$sidebar_search_text_font_size
);

$sidebar_search_text_line_height = new BurstMikadoField(
	"textsimple",
	"sidebar_search_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"sidebar_search_text_line_height",
	$sidebar_search_text_line_height
);

$row3 = new BurstMikadoRow( true );
$group5->addChild(
	"row3",
	$row3
);

$sidebar_search_text_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"sidebar_search_text_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row3->addChild(
	"sidebar_search_text_text_transform",
	$sidebar_search_text_text_transform
);

$sidebar_search_text_font_family = new BurstMikadoField(
	"fontsimple",
	"sidebar_search_text_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"sidebar_search_text_font_family",
	$sidebar_search_text_font_family
);

$sidebar_search_text_font_style = new BurstMikadoField(
	"selectblanksimple",
	"sidebar_search_text_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row3->addChild(
	"sidebar_search_text_font_style",
	$sidebar_search_text_font_style
);

$sidebar_search_text_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"sidebar_search_text_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row3->addChild(
	"sidebar_search_text_font_weight",
	$sidebar_search_text_font_weight
);

$row4 = new BurstMikadoRow( true );
$group5->addChild(
	"row4",
	$row4
);

$sidebar_search_text_letter_spacing = new BurstMikadoField(
	"textsimple",
	"sidebar_search_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"sidebar_search_text_letter_spacing",
	$sidebar_search_text_letter_spacing
);

$sidebar_search_border_around = new BurstMikadoField(
	"selectsimple",
	"sidebar_search_border_around",
	"",
	esc_html__( "Border Around", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	array(
		"around_everything" => esc_html__( "Around Everything", 'burst' ),
		"around_search_text" => esc_html__( "Around Search Text", 'burst' )
	)
);
$row4->addChild(
	"sidebar_search_border_around",
	$sidebar_search_border_around
);

$widget_blog_list = new BurstMikadoTitle(
	"widget_blog_list",
	esc_html__( "Widget - Mikado Blog", 'burst' )
);
$panel_widgets->addChild(
	"widget_blog_list",
	$widget_blog_list
);

$group10 = new BurstMikadoGroup(
	esc_html__( "Blog List Title", 'burst' ),
	esc_html__( "Define Blog List title style", 'burst' )
);
$panel_widgets->addChild(
	"group10",
	$group10
);
$row1 = new BurstMikadoRow();
$group10->addChild(
	"row1",
	$row1
);

$widget_blog_list_title_color = new BurstMikadoField(
	"colorsimple",
	"widget_blog_list_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"widget_blog_list_title_color",
	$widget_blog_list_title_color
);

$widget_blog_list_title_hover_color = new BurstMikadoField(
	"colorsimple",
	"widget_blog_list_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"widget_blog_list_title_hover_color",
	$widget_blog_list_title_hover_color
);

$widget_blog_list_title_font_size = new BurstMikadoField(
	"textsimple",
	"widget_blog_list_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"widget_blog_list_title_font_size",
	$widget_blog_list_title_font_size
);

$widget_blog_list_title_line_height = new BurstMikadoField(
	"textsimple",
	"widget_blog_list_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"widget_blog_list_title_line_height",
	$widget_blog_list_title_line_height
);

$row2 = new BurstMikadoRow( true );
$group10->addChild(
	"row2",
	$row2
);

$widget_blog_list_title_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"widget_blog_list_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"widget_blog_list_title_text_transform",
	$widget_blog_list_title_text_transform
);

$widget_blog_list_title_font_family = new BurstMikadoField(
	"fontsimple",
	"widget_blog_list_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"widget_blog_list_title_font_family",
	$widget_blog_list_title_font_family
);

$widget_blog_list_title_font_style = new BurstMikadoField(
	"selectblanksimple",
	"widget_blog_list_title_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"widget_blog_list_title_font_style",
	$widget_blog_list_title_font_style
);

$widget_blog_list_title_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"widget_blog_list_title_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"widget_blog_list_title_font_weight",
	$widget_blog_list_title_font_weight
);

$row3 = new BurstMikadoRow( true );
$group10->addChild(
	"row3",
	$row3
);

$widget_blog_list_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"widget_blog_list_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"widget_blog_list_title_letter_spacing",
	$widget_blog_list_title_letter_spacing
);

$group11 = new BurstMikadoGroup(
	esc_html__( "Blog List Post Info", 'burst' ),
	esc_html__( "Define blog list post info style", 'burst' )
);
$panel_widgets->addChild(
	"group11",
	$group11
);
$row1 = new BurstMikadoRow();
$group11->addChild(
	"row1",
	$row1
);

$widget_blog_list_post_info_color = new BurstMikadoField(
	"colorsimple",
	"widget_blog_list_post_info_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"widget_blog_list_post_info_color",
	$widget_blog_list_post_info_color
);

$widget_blog_list_post_info_link_color = new BurstMikadoField(
	"colorsimple",
	"widget_blog_list_post_info_link_color",
	"",
	esc_html__( "Link Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"widget_blog_list_post_info_link_color",
	$widget_blog_list_post_info_link_color
);

$widget_blog_list_post_info_link_hover_color = new BurstMikadoField(
	"colorsimple",
	"widget_blog_list_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"widget_blog_list_post_info_link_hover_color",
	$widget_blog_list_post_info_link_hover_color
);

$widget_blog_list_post_info_font_size = new BurstMikadoField(
	"textsimple",
	"widget_blog_list_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"widget_blog_list_post_info_font_size",
	$widget_blog_list_post_info_font_size
);

$row2 = new BurstMikadoRow( true );
$group11->addChild(
	"row2",
	$row2
);

$widget_blog_list_post_info_line_height = new BurstMikadoField(
	"textsimple",
	"widget_blog_list_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"widget_blog_list_post_info_line_height",
	$widget_blog_list_post_info_line_height
);

$widget_blog_list_post_info_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"widget_blog_list_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"widget_blog_list_post_info_text_transform",
	$widget_blog_list_post_info_text_transform
);

$widget_blog_list_post_info_font_family = new BurstMikadoField(
	"fontsimple",
	"widget_blog_list_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"widget_blog_list_post_info_font_family",
	$widget_blog_list_post_info_font_family
);

$widget_blog_list_post_info_font_style = new BurstMikadoField(
	"selectblanksimple",
	"widget_blog_list_post_info_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"widget_blog_list_post_info_font_style",
	$widget_blog_list_post_info_font_style
);

$row3 = new BurstMikadoRow( true );
$group11->addChild(
	"row3",
	$row3
);

$widget_blog_list_post_info_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"widget_blog_list_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row3->addChild(
	"widget_blog_list_post_info_font_weight",
	$widget_blog_list_post_info_font_weight
);

$widget_blog_list_post_info_letter_spacing = new BurstMikadoField(
	"textsimple",
	"widget_blog_list_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"widget_blog_list_post_info_letter_spacing",
	$widget_blog_list_post_info_letter_spacing
);

$group12 = new BurstMikadoGroup(
	esc_html__( "Blog List Date Style", 'burst' ),
	esc_html__( "Define blog list date style", 'burst' )
);
$panel_widgets->addChild(
	"group12",
	$group12
);
$row1 = new BurstMikadoRow();
$group12->addChild(
	"row1",
	$row1
);

$widget_blog_list_date_color = new BurstMikadoField(
	"colorsimple",
	"widget_blog_list_date_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"widget_blog_list_date_color",
	$widget_blog_list_date_color
);

$widget_blog_list_date_font_size = new BurstMikadoField(
	"textsimple",
	"widget_blog_list_date_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"widget_blog_list_date_font_size",
	$widget_blog_list_date_font_size
);

$widget_blog_list_date_line_height = new BurstMikadoField(
	"textsimple",
	"widget_blog_list_date_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"widget_blog_list_date_line_height",
	$widget_blog_list_date_line_height
);

$widget_blog_list_date_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"widget_blog_list_date_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"widget_blog_list_date_text_transform",
	$widget_blog_list_date_text_transform
);

$row2 = new BurstMikadoRow( true );
$group12->addChild(
	"row2",
	$row2
);

$widget_blog_list_date_font_family = new BurstMikadoField(
	"fontsimple",
	"widget_blog_list_date_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"widget_blog_list_date_font_family",
	$widget_blog_list_date_font_family
);

$widget_blog_list_date_font_style = new BurstMikadoField(
	"selectblanksimple",
	"widget_blog_list_date_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"widget_blog_list_date_font_style",
	$widget_blog_list_date_font_style
);

$widget_blog_list_date_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"widget_blog_list_date_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"widget_blog_list_date_font_weight",
	$widget_blog_list_date_font_weight
);

$widget_blog_list_date_letter_spacing = new BurstMikadoField(
	"textsimple",
	"widget_blog_list_date_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"widget_blog_list_date_letter_spacing",
	$widget_blog_list_date_letter_spacing
);

$group31 = new BurstMikadoGroup(
	esc_html__( "Blog List Spacing", 'burst' ),
	esc_html__( "Define blog list spacing", 'burst' )
);
$panel_widgets->addChild(
	"group31",
	$group31
);

$row1 = new BurstMikadoRow( true );
$group31->addChild(
	"row1",
	$row1
);

$widget_blog_list_title_margin_bttm = new BurstMikadoField(
	"textsimple",
	"widget_blog_list_title_margin_bttm",
	"",
	esc_html__( "Margin Under Title (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"widget_blog_list_title_margin_bttm",
	$widget_blog_list_title_margin_bttm
);

$widget_blog_list_post_info_margin_bttm = new BurstMikadoField(
	"textsimple",
	"widget_blog_list_post_info_margin_bttm",
	"",
	esc_html__( "Margin Under Post Info (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"widget_blog_list_post_info_margin_bttm",
	$widget_blog_list_post_info_margin_bttm
);

$widget_blog_list_read_more_margin_top = new BurstMikadoField(
	"textsimple",
	"widget_blog_list_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"widget_blog_list_read_more_margin_top",
	$widget_blog_list_read_more_margin_top
);

//Widget - Latest Posts Slider

$panel32 = new BurstMikadoPanel(
	esc_html__( "Widget - Latest Post Slider", 'burst' ),
	"menu_latest_post"
);
$elementsPage->addChild(
	"panel32",
	$panel32
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Title style", 'burst' ),
	esc_html__( "Latest Post Slider title style", 'burst' )
);
$panel32->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_title_color = new BurstMikadoField(
	"colorsimple",
	"menu_latest_post_widget_title_color",
	"",
	esc_html__( "Title Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_title_color",
	$menu_latest_post_widget_title_color
);

$menu_latest_post_widget_title_hover_color = new BurstMikadoField(
	"colorsimple",
	"menu_latest_post_widget_title_hover_color",
	"",
	esc_html__( "Title Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_title_hover_color",
	$menu_latest_post_widget_title_hover_color
);

$menu_latest_post_widget_title_font_size = new BurstMikadoField(
	"textsimple",
	"menu_latest_post_widget_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_title_font_size",
	$menu_latest_post_widget_title_font_size
);

$menu_latest_post_widget_title_line_height = new BurstMikadoField(
	"textsimple",
	"menu_latest_post_widget_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_title_line_height",
	$menu_latest_post_widget_title_line_height
);

$row2 = new BurstMikadoRow();
$group1->addChild(
	"row2",
	$row2
);

$menu_latest_post_widget_title_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"menu_latest_post_widget_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"menu_latest_post_widget_title_text_transform",
	$menu_latest_post_widget_title_text_transform
);

$menu_latest_post_widget_title_font_family = new BurstMikadoField(
	"fontsimple",
	"menu_latest_post_widget_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"menu_latest_post_widget_title_font_family",
	$menu_latest_post_widget_title_font_family
);

$menu_latest_post_widget_title_font_style = new BurstMikadoField(
	"selectblanksimple",
	"menu_latest_post_widget_title_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"menu_latest_post_widget_title_font_style",
	$menu_latest_post_widget_title_font_style
);

$menu_latest_post_widget_title_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"menu_latest_post_widget_title_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"menu_latest_post_widget_title_font_weight",
	$menu_latest_post_widget_title_font_weight
);

$row3 = new BurstMikadoRow();
$group1->addChild(
	"row3",
	$row3
);

$menu_latest_post_widget_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"menu_latest_post_widget_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"menu_latest_post_widget_title_letter_spacing",
	$menu_latest_post_widget_title_letter_spacing
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Post Info style", 'burst' ),
	esc_html__( "Latest Post Slider post info style", 'burst' )
);
$panel32->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_post_info_color = new BurstMikadoField(
	"colorsimple",
	"menu_latest_post_widget_post_info_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_post_info_color",
	$menu_latest_post_widget_post_info_color
);

$menu_latest_post_widget_post_info_link_color = new BurstMikadoField(
	"colorsimple",
	"menu_latest_post_widget_post_info_link_color",
	"",
	esc_html__( "Link Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_post_info_link_color",
	$menu_latest_post_widget_post_info_link_color
);

$menu_latest_post_widget_post_info_link_hover_color = new BurstMikadoField(
	"colorsimple",
	"menu_latest_post_widget_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_post_info_link_hover_color",
	$menu_latest_post_widget_post_info_link_hover_color
);

$menu_latest_post_widget_post_info_font_size = new BurstMikadoField(
	"textsimple",
	"menu_latest_post_widget_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_post_info_font_size",
	$menu_latest_post_widget_post_info_font_size
);

$row2 = new BurstMikadoRow();
$group2->addChild(
	"row2",
	$row2
);

$menu_latest_post_widget_post_info_line_height = new BurstMikadoField(
	"textsimple",
	"menu_latest_post_widget_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"menu_latest_post_widget_post_info_line_height",
	$menu_latest_post_widget_post_info_line_height
);

$menu_latest_post_widget_post_info_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"menu_latest_post_widget_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"menu_latest_post_widget_post_info_text_transform",
	$menu_latest_post_widget_post_info_text_transform
);

$menu_latest_post_widget_post_info_font_family = new BurstMikadoField(
	"fontsimple",
	"menu_latest_post_widget_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"menu_latest_post_widget_post_info_font_family",
	$menu_latest_post_widget_post_info_font_family
);

$menu_latest_post_widget_post_info_font_style = new BurstMikadoField(
	"selectblanksimple",
	"menu_latest_post_widget_post_info_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"menu_latest_post_widget_post_info_font_style",
	$menu_latest_post_widget_post_info_font_style
);

$row3 = new BurstMikadoRow();
$group2->addChild(
	"row3",
	$row3
);

$menu_latest_post_widget_post_info_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"menu_latest_post_widget_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row3->addChild(
	"menu_latest_post_widget_post_info_font_weight",
	$menu_latest_post_widget_post_info_font_weight
);

$menu_latest_post_widget_post_info_letter_spacing = new BurstMikadoField(
	"textsimple",
	"menu_latest_post_widget_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"menu_latest_post_widget_post_info_letter_spacing",
	$menu_latest_post_widget_post_info_letter_spacing
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Spacing", 'burst' ),
	esc_html__( "Define spacing for Latest Post Slider widget", 'burst' )
);
$panel32->addChild(
	"group3",
	$group3
);

$row1 = new BurstMikadoRow();
$group3->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_thumb_margin_bttm = new BurstMikadoField(
	"textsimple",
	"menu_latest_post_widget_thumb_margin_bttm",
	"",
	esc_html__( "Margin Under Image (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_thumb_margin_bttm",
	$menu_latest_post_widget_thumb_margin_bttm
);

$menu_latest_post_widget_title_margin_bttm = new BurstMikadoField(
	"textsimple",
	"menu_latest_post_widget_title_margin_bttm",
	"",
	esc_html__( "Margin Under Title (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_title_margin_bttm",
	$menu_latest_post_widget_title_margin_bttm
);

$menu_latest_post_widget_navigation = new BurstMikadoTitle(
	"menu_latest_post_widget_navigation",
	esc_html__( "Navigation Buttons Style", 'burst' )
);
$panel32->addChild(
	"menu_latest_post_widget_navigation",
	$menu_latest_post_widget_navigation
);

$group4 = new BurstMikadoGroup(
	esc_html__( "Navigation Arrow Button Size", 'burst' ),
	esc_html__( "Define arrow size", 'burst' )
);
$panel32->addChild(
	"group4",
	$group4
);

$row1 = new BurstMikadoRow();
$group4->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_arrow_width = new BurstMikadoField(
	"textsimple",
	"menu_latest_post_widget_arrow_width",
	"",
	esc_html__( "Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_width",
	$menu_latest_post_widget_arrow_width
);

$menu_latest_post_widget_arrow_height = new BurstMikadoField(
	"textsimple",
	"menu_latest_post_widget_arrow_height",
	"",
	esc_html__( "Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_height",
	$menu_latest_post_widget_arrow_height
);

$menu_latest_post_widget_arrow_size = new BurstMikadoField(
	"textsimple",
	"menu_latest_post_widget_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_size",
	$menu_latest_post_widget_arrow_size
);

$group5 = new BurstMikadoGroup(
	esc_html__( "Navigation Arrow Color", 'burst' ),
	esc_html__( "Define coloring for navigation arrows", 'burst' )
);
$panel32->addChild(
	"group5",
	$group5
);

$row1 = new BurstMikadoRow();
$group5->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_arrow_color = new BurstMikadoField(
	"colorsimple",
	"menu_latest_post_widget_arrow_color",
	"",
	esc_html__( "Arrow Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_color",
	$menu_latest_post_widget_arrow_color
);

$menu_latest_post_widget_arrow_transparency = new BurstMikadoField(
	"textsimple",
	"menu_latest_post_widget_arrow_transparency",
	"",
	esc_html__( "Arrow Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_transparency",
	$menu_latest_post_widget_arrow_transparency
);

$menu_latest_post_widget_arrow_hover_color = new BurstMikadoField(
	"colorsimple",
	"menu_latest_post_widget_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_hover_color",
	$menu_latest_post_widget_arrow_hover_color
);

$menu_latest_post_widget_arrow_hover_transparency = new BurstMikadoField(
	"textsimple",
	"menu_latest_post_widget_arrow_hover_transparency",
	"",
	esc_html__( "Arrow Hover Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_hover_transparency",
	$menu_latest_post_widget_arrow_hover_transparency
);

$group6 = new BurstMikadoGroup(
	esc_html__( "Navigation Button Background", 'burst' ),
	esc_html__( "Define navigation button background", 'burst' )
);
$panel32->addChild(
	"group6",
	$group6
);

$row1 = new BurstMikadoRow();
$group6->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_background_color = new BurstMikadoField(
	"colorsimple",
	"menu_latest_post_widget_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_background_color",
	$menu_latest_post_widget_background_color
);

$menu_latest_post_widget_background_transparency = new BurstMikadoField(
	"textsimple",
	"menu_latest_post_widget_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_background_transparency",
	$menu_latest_post_widget_background_transparency
);

$menu_latest_post_widget_background_hover_color = new BurstMikadoField(
	"colorsimple",
	"menu_latest_post_widget_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_background_hover_color",
	$menu_latest_post_widget_background_hover_color
);

$menu_latest_post_widget_background_hover_transparency = new BurstMikadoField(
	"textsimple",
	"menu_latest_post_widget_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_background_hover_transparency",
	$menu_latest_post_widget_background_hover_transparency
);

$group7 = new BurstMikadoGroup(
	esc_html__( "Navigation Button Border", 'burst' ),
	esc_html__( "Define border style", 'burst' )
);
$panel32->addChild(
	"group7",
	$group7
);

$row1 = new BurstMikadoRow();
$group7->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_border_width = new BurstMikadoField(
	"textsimple",
	"menu_latest_post_widget_border_width",
	"",
	esc_html__( "Border width (px)", 'burst' ),
	""
);
$row1->addChild(
	"menu_latest_post_widget_border_width",
	$menu_latest_post_widget_border_width
);

$menu_latest_post_widget_border_radius = new BurstMikadoField(
	"textsimple",
	"menu_latest_post_widget_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_border_radius",
	$menu_latest_post_widget_border_radius
);

$menu_latest_post_widget_border_color = new BurstMikadoField(
	"colorsimple",
	"menu_latest_post_widget_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_border_color",
	$menu_latest_post_widget_border_color
);

$menu_latest_post_widget_border_transparency = new BurstMikadoField(
	"textsimple",
	"menu_latest_post_widget_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"menu_latest_post_widget_border_transparency",
	$menu_latest_post_widget_border_transparency
);

$row2 = new BurstMikadoRow();
$group7->addChild(
	"row2",
	$row2
);

$menu_latest_post_widget_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"menu_latest_post_widget_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"menu_latest_post_widget_border_hover_color",
	$menu_latest_post_widget_border_hover_color
);

$menu_latest_post_widget_border_hover_transparency = new BurstMikadoField(
	"textsimple",
	"menu_latest_post_widget_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"menu_latest_post_widget_border_hover_transparency",
	$menu_latest_post_widget_border_hover_transparency
);

$menu_latest_post_widget_position = new BurstMikadoField(
	"text",
	"menu_latest_post_widget_position",
	"",
	esc_html__( "Navigation Buttons Position from Middle (px)", 'burst' ),
	esc_html__( "Move navigation arrows down(positive value), or up (negative value) from the middle", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel32->addChild(
	"menu_latest_post_widget_position",
	$menu_latest_post_widget_position
);