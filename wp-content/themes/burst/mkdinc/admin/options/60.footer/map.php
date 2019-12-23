<?php

$footerPage = new BurstMikadoAdminPage(
	"3",
	esc_html__( "Footer", 'burst' ),
	"icon_cone_alt"
);
$burst_mikado_Framework->mkdOptions->addAdminPage(
	"footer",
	$footerPage
);

$panel10 = new BurstMikadoPanel(
	esc_html__( "Footer", 'burst' ),
	"footer_panel"
);
$footerPage->addChild(
	"panel10",
	$panel10
);

$uncovering_footer = new BurstMikadoField(
	"yesno",
	"uncovering_footer",
	"no",
	esc_html__( "Uncovering Footer", 'burst' ),
	esc_html__( "Enabling this option will make Footer gradually appear on scroll", 'burst' )
);
$panel10->addChild(
	"uncovering_footer",
	$uncovering_footer
);

$footer_in_grid = new BurstMikadoField(
	"yesno",
	"footer_in_grid",
	"yes",
	esc_html__( "Footer in Grid", 'burst' ),
	esc_html__( "Enabling this option will place Footer content in grid", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_footer_grid_background_container"
	)
);
$panel10->addChild(
	"footer_in_grid",
	$footer_in_grid
);

$footer_main_image_background = new BurstMikadoField(
	"image",
	"footer_main_image_background",
	"",
	esc_html__( "Footer Background Image", 'burst' ),
	esc_html__( "Choose footer background image", 'burst' )
);
$panel10->addChild(
	"footer_main_image_background",
	$footer_main_image_background
);

$show_footer_top = new BurstMikadoField(
	"yesno",
	"show_footer_top",
	"yes",
	esc_html__( "Show Footer Top", 'burst' ),
	esc_html__( "Enabling this option will show Footer Top area", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_show_footer_top_container"
	)
);
$panel10->addChild(
	"show_footer_top",
	$show_footer_top
);

$show_footer_top_container = new BurstMikadoContainer(
	"show_footer_top_container",
	"show_footer_top",
	"no"
);
$panel10->addChild(
	"show_footer_top_container",
	$show_footer_top_container
);

$footer_top_columns_alignment = new BurstMikadoField(
	"select",
	"footer_top_columns_alignment",
	"",
	esc_html__( "Footer Top Columns Alignment", 'burst' ),
	esc_html__( "Text Alignment in Footer Columns", 'burst' ),
	array(
		"left" => esc_html__( "Left", 'burst' ),
		"center" => esc_html__( "Center", 'burst' ),
		"right" => esc_html__( "Right", 'burst' )
	)
);
$show_footer_top_container->addChild(
	"footer_top_columns_alignment",
	$footer_top_columns_alignment
);

$footer_top_columns = new BurstMikadoField(
	"select",
	"footer_top_columns",
	"4",
	esc_html__( "Footer Top Columns", 'burst' ),
	esc_html__( "Choose number of columns for Footer Top area", 'burst' ),
	array(
		"1" => "1",
		"2" => "2",
		"3" => "3",
		"5" => esc_html__( "3(25%+25%+50%)", 'burst' ),
		"6" => esc_html__( "3(50%+25%+25%)", 'burst' ),
		"4" => "4"
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"1" => "#mkdf_footer_top_column2_alignment_container,#mkdf_footer_top_column3_alignment_container,#mkdf_footer_top_column4_alignment_container",
			"2" => "#mkdf_footer_top_column3_alignment_container,#mkdf_footer_top_column4_alignment_container",
			"3" => "#mkdf_footer_top_column4_alignment_container",
			"4" => "",
			"5" => "#mkdf_footer_top_column4_alignment_container",
			"6" => "#mkdf_footer_top_column4_alignment_container"
		),
		"show"       => array(
			"1" => "#mkdf_footer_top_column1_alignment_container",
			"2" => "#mkdf_footer_top_column1_alignment_container,#mkdf_footer_top_column2_alignment_container",
			"3" => "#mkdf_footer_top_column1_alignment_container,#mkdf_footer_top_column2_alignment_container,#mkdf_footer_top_column3_alignment_container",
			"4" => "#mkdf_footer_top_column1_alignment_container,#mkdf_footer_top_column2_alignment_container,#mkdf_footer_top_column3_alignment_container,#mkdf_footer_top_column4_alignment_container",
			"5" => "#mkdf_footer_top_column1_alignment_container,#mkdf_footer_top_column2_alignment_container,#mkdf_footer_top_column3_alignment_container",
			"6" => "#mkdf_footer_top_column1_alignment_container,#mkdf_footer_top_column2_alignment_container,#mkdf_footer_top_column3_alignment_container",
		)
	)
);
$show_footer_top_container->addChild(
	"footer_top_columns",
	$footer_top_columns
);

$footer_top_column1_alignment_container = new BurstMikadoContainer(
	"footer_top_column1_alignment_container",
	"footer_top_columns",
	""
);
$show_footer_top_container->addChild(
	"footer_top_column1_alignment_container",
	$footer_top_column1_alignment_container
);

$footer_top_column1_alignment = new BurstMikadoField(
	"select",
	"footer_top_column1_alignment",
	"",
	esc_html__( "Footer Top First Column Alignment", 'burst' ),
	esc_html__( "This option will overwrite 'Footer Top Columns Alignment'", 'burst' ),
	array(
		"" => esc_html__( "Default", 'burst' ),
		"left" => esc_html__( "Left", 'burst' ),
		"center" => esc_html__( "Center", 'burst' ),
		"right" => esc_html__( "Right", 'burst' )
	),
	array( "col_width" => 3 )
);
$footer_top_column1_alignment_container->addChild(
	"footer_top_column1_alignment",
	$footer_top_column1_alignment
);

$footer_top_column2_alignment_container = new BurstMikadoContainer(
	"footer_top_column2_alignment_container",
	"footer_top_columns",
	"1"
);
$show_footer_top_container->addChild(
	"footer_top_column2_alignment_container",
	$footer_top_column2_alignment_container
);

$footer_top_column2_alignment = new BurstMikadoField(
	"select",
	"footer_top_column2_alignment",
	"",
	esc_html__( "Footer Top Second Column Alignment", 'burst' ),
	esc_html__( "This option will overwrite 'Footer Top Columns Alignment'", 'burst' ),
	array(
		"" => esc_html__( "Default", 'burst' ),
		"left" => esc_html__( "Left", 'burst' ),
		"center" => esc_html__( "Center", 'burst' ),
		"right" => esc_html__( "Right", 'burst' )
	),
	array( "col_width" => 3 )
);
$footer_top_column2_alignment_container->addChild(
	"footer_top_column2_alignment",
	$footer_top_column2_alignment
);

$footer_top_column3_alignment_container = new BurstMikadoContainer(
	"footer_top_column3_alignment_container",
	"footer_top_columns",
	"1",
	array( "1", "2" )
);
$show_footer_top_container->addChild(
	"footer_top_column3_alignment_container",
	$footer_top_column3_alignment_container
);

$footer_top_column3_alignment = new BurstMikadoField(
	"select",
	"footer_top_column3_alignment",
	"",
	esc_html__( "Footer Top Third Column Alignment", 'burst' ),
	esc_html__( "This option will overwrite 'Footer Top Columns Alignment'", 'burst' ),
	array(
		"" => esc_html__( "Default", 'burst' ),
		"left" => esc_html__( "Left", 'burst' ),
		"center" => esc_html__( "Center", 'burst' ),
		"right" => esc_html__( "Right", 'burst' )
	),
	array( "col_width" => 3 )
);
$footer_top_column3_alignment_container->addChild(
	"footer_top_column3_alignment",
	$footer_top_column3_alignment
);

$footer_top_column4_alignment_container = new BurstMikadoContainer(
	"footer_top_column4_alignment_container",
	"footer_top_columns",
	"1",
	array( "1", "2", "3", "5", "6" )
);
$show_footer_top_container->addChild(
	"footer_top_column4_alignment_container",
	$footer_top_column4_alignment_container
);

$footer_top_column4_alignment = new BurstMikadoField(
	"select",
	"footer_top_column4_alignment",
	"",
	esc_html__( "Footer Top Fourth Column Alignment", 'burst' ),
	esc_html__( "This option will overwrite 'Footer Top Columns Alignment'", 'burst' ),
	array(
		"" => esc_html__( "Default", 'burst' ),
		"left" => esc_html__( "Left", 'burst' ),
		"center" => esc_html__( "Center", 'burst' ),
		"right" => esc_html__( "Right", 'burst' )
	),
	array( "col_width" => 3 )
);
$footer_top_column4_alignment_container->addChild(
	"footer_top_column4_alignment",
	$footer_top_column4_alignment
);

$footer_border_columns = new BurstMikadoField(
	"yesno",
	"footer_border_columns",
	"no",
	esc_html__( "Border Between Columns", 'burst' ),
	esc_html__( "Disabling this option will remove border between footer columns.", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_footer_border_columns_holder"
	)
);
$show_footer_top_container->addChild(
	"footer_border_columns",
	$footer_border_columns
);

$footer_border_columns_holder = new BurstMikadoContainer(
	"footer_border_columns_holder",
	"footer_border_columns",
	"no"
);
$show_footer_top_container->addChild(
	"footer_border_columns_holder",
	$footer_border_columns_holder
);

$footer_border_columns_color = new BurstMikadoField(
	"color",
	"footer_border_columns_color",
	"",
	esc_html__( "Border Color Between Columns", 'burst' ),
	esc_html__( "Choose a color for border in footer columns.", 'burst' )
);
$footer_border_columns_holder->addChild(
	"footer_border_columns_color",
	$footer_border_columns_color
);

$footer_bottom_border_element = new BurstMikadoField(
	"yesno",
	"footer_bottom_border_element",
	"no",
	esc_html__( "Border Bottom on Elements", 'burst' ),
	esc_html__( "Enabling this option will add border bottom on footer elements.", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_footer_bottom_border_element_holder"
	)
);
$show_footer_top_container->addChild(
	"footer_bottom_border_element",
	$footer_bottom_border_element
);

$footer_bottom_border_element_holder = new BurstMikadoContainer(
	"footer_bottom_border_element_holder",
	"footer_bottom_border_element",
	"no"
);
$show_footer_top_container->addChild(
	"footer_bottom_border_element_holder",
	$footer_bottom_border_element_holder
);

$footer_bottom_border_element_color = new BurstMikadoField(
	"color",
	"footer_bottom_border_element_color",
	"",
	esc_html__( "Border Bottom Color", 'burst' ),
	esc_html__( "Choose a color for border in footer columns.", 'burst' )
);
$footer_bottom_border_element_holder->addChild(
	"footer_bottom_border_element_color",
	$footer_bottom_border_element_color
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Footer Top Area Style", 'burst' ),
	esc_html__( "Configure style for Footer Top area", 'burst' )
);
$show_footer_top_container->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);
$footer_top_background_color = new BurstMikadoField(
	"colorsimple",
	"footer_top_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_top_background_color",
	$footer_top_background_color
);

$footer_top_border_color = new BurstMikadoField(
	"colorsimple",
	"footer_top_border_color",
	"",
	esc_html__( "Top Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_top_border_color",
	$footer_top_border_color
);

$footer_top_border_width = new BurstMikadoField(
	"textsimple",
	"footer_top_border_width",
	"",
	esc_html__( "Top Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_top_border_width",
	$footer_top_border_width
);

$footer_top_border_in_grid = new BurstMikadoField(
	"yesnosimple",
	"footer_top_border_in_grid",
	"no",
	esc_html__( "Set Top Border In Grid", 'burst' ),
	""
);
$row1->addChild(
	"footer_top_border_in_grid",
	$footer_top_border_in_grid
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);

$footer_top_padding = new BurstMikadoField(
	"textsimple",
	"footer_top_padding",
	"",
	esc_html__( "Top Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"footer_top_padding",
	$footer_top_padding
);

$footer_bottom_padding = new BurstMikadoField(
	"textsimple",
	"footer_bottom_padding",
	"",
	esc_html__( "Bottom Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"footer_bottom_padding",
	$footer_bottom_padding
);

$footer_left_padding = new BurstMikadoField(
	"textsimple",
	"footer_left_padding",
	"",
	esc_html__( "Left Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"footer_left_padding",
	$footer_left_padding
);

$footer_right_padding = new BurstMikadoField(
	"textsimple",
	"footer_right_padding",
	"",
	esc_html__( "Right Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"footer_right_padding",
	$footer_right_padding
);

$footer_grid_background_container = new BurstMikadoContainer(
	"footer_grid_background_container",
	"footer_in_grid",
	"no"
);
$show_footer_top_container->addChild(
	"footer_grid_background_container",
	$footer_grid_background_container
);

$footer_top_background_color_in_grid = new BurstMikadoField(
	"color",
	"footer_top_background_color_in_grid",
	"",
	esc_html__( "Grid Background Color", 'burst' ),
	esc_html__( "Choose background color for grid on footer top", 'burst' )
);
$footer_grid_background_container->addChild(
	"footer_top_background_color_in_grid",
	$footer_top_background_color_in_grid
);

$footer_image_background = new BurstMikadoField(
	"image",
	"footer_image_background",
	"",
	esc_html__( "Footer Top Background Image", 'burst' ),
	esc_html__( "Choose footer top background image", 'burst' )
);
$show_footer_top_container->addChild(
	"footer_image_background",
	$footer_image_background
);

$footer_oblique_section = new BurstMikadoField(
	"yesno",
	"footer_oblique_section",
	"no",
	esc_html__( "Enable Angled Shape in Background", 'burst' ),
	esc_html__( "Enabling this option will show angled shape in  footer background", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_footer_oblique_section_holder"
	)
);
$show_footer_top_container->addChild(
	"footer_oblique_section",
	$footer_oblique_section
);

$footer_oblique_section_holder = new BurstMikadoContainer(
	"footer_oblique_section_holder",
	"footer_oblique_section",
	"no"
);
$show_footer_top_container->addChild(
	"footer_oblique_section_holder",
	$footer_oblique_section_holder
);

$footer_oblique_section_position = new BurstMikadoField(
	"select",
	"footer_oblique_section_position",
	"",
	esc_html__( "Angled Shape Position", 'burst' ),
	esc_html__( "Choose a position for footer angled shape", 'burst' ),
	array(
		"from_left_to_right" => esc_html__( "From Left To Right", 'burst' ),
		"from_right_to_left" => esc_html__( "From Right To Left", 'burst' )
	)
);
$footer_oblique_section_holder->addChild(
	"footer_oblique_section_position",
	$footer_oblique_section_position
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Footer Top Title Style", 'burst' ),
	esc_html__( "Configure style for Footer Top Title", 'burst' )
);
$show_footer_top_container->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$footer_title_color = new BurstMikadoField(
	"colorsimple",
	"footer_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_title_color",
	$footer_title_color
);

$footer_title_font_size = new BurstMikadoField(
	"textsimple",
	"footer_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_title_font_size",
	$footer_title_font_size
);

$footer_title_line_height = new BurstMikadoField(
	"textsimple",
	"footer_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_title_line_height",
	$footer_title_line_height
);

$footer_title_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"footer_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"footer_title_text_transform",
	$footer_title_text_transform
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);
$footer_title_font_family = new BurstMikadoField(
	"fontsimple",
	"footer_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"footer_title_font_family",
	$footer_title_font_family
);

$footer_title_font_style = new BurstMikadoField(
	"selectblanksimple",
	"footer_title_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"footer_title_font_style",
	$footer_title_font_style
);

$footer_title_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"footer_title_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"footer_title_font_weight",
	$footer_title_font_weight
);

$footer_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"footer_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"footer_title_letter_spacing",
	$footer_title_letter_spacing
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Footer Top Text Style", 'burst' ),
	esc_html__( "Configure style for Footer Top text", 'burst' )
);
$show_footer_top_container->addChild(
	"group3",
	$group3
);

$row1 = new BurstMikadoRow();
$group3->addChild(
	"row1",
	$row1
);
$footer_top_text_color = new BurstMikadoField(
	"colorsimple",
	"footer_top_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_top_text_color",
	$footer_top_text_color
);

$footer_top_text_font_size = new BurstMikadoField(
	"textsimple",
	"footer_top_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_top_text_font_size",
	$footer_top_text_font_size
);

$footer_top_text_line_height = new BurstMikadoField(
	"textsimple",
	"footer_top_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_top_text_line_height",
	$footer_top_text_line_height
);

$footer_top_text_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"footer_top_text_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"footer_top_text_text_transform",
	$footer_top_text_text_transform
);

$row2 = new BurstMikadoRow( true );
$group3->addChild(
	"row2",
	$row2
);
$footer_top_text_font_family = new BurstMikadoField(
	"fontsimple",
	"footer_top_text_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"footer_top_text_font_family",
	$footer_top_text_font_family
);

$footer_top_text_font_style = new BurstMikadoField(
	"selectblanksimple",
	"footer_top_text_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"footer_top_text_font_style",
	$footer_top_text_font_style
);

$footer_top_text_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"footer_top_text_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"footer_top_text_font_weight",
	$footer_top_text_font_weight
);

$footer_top_text_letter_spacing = new BurstMikadoField(
	"textsimple",
	"footer_top_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"footer_top_text_letter_spacing",
	$footer_top_text_letter_spacing
);

$group4 = new BurstMikadoGroup(
	esc_html__( "Footer Top Link Style", 'burst' ),
	esc_html__( "Configure style for Footer Top link", 'burst' )
);
$show_footer_top_container->addChild(
	"group4",
	$group4
);

$row1 = new BurstMikadoRow();
$group4->addChild(
	"row1",
	$row1
);
$footer_top_link_color = new BurstMikadoField(
	"colorsimple",
	"footer_top_link_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_top_link_color",
	$footer_top_link_color
);

$footer_top_link_font_size = new BurstMikadoField(
	"textsimple",
	"footer_top_link_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_top_link_font_size",
	$footer_top_link_font_size
);

$footer_top_link_line_height = new BurstMikadoField(
	"textsimple",
	"footer_top_link_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_top_link_line_height",
	$footer_top_link_line_height
);

$footer_top_link_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"footer_top_link_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"footer_top_link_text_transform",
	$footer_top_link_text_transform
);

$row2 = new BurstMikadoRow( true );
$group4->addChild(
	"row2",
	$row2
);
$footer_top_link_font_family = new BurstMikadoField(
	"fontsimple",
	"footer_top_link_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"footer_top_link_font_family",
	$footer_top_link_font_family
);

$footer_top_link_font_style = new BurstMikadoField(
	"selectblanksimple",
	"footer_top_link_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"footer_top_link_font_style",
	$footer_top_link_font_style
);

$footer_top_link_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"footer_top_link_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"footer_top_link_font_weight",
	$footer_top_link_font_weight
);

$footer_top_link_letter_spacing = new BurstMikadoField(
	"textsimple",
	"footer_top_link_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"footer_top_link_letter_spacing",
	$footer_top_link_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$group4->addChild(
	"row3",
	$row3
);
$footer_top_link_hover_color = new BurstMikadoField(
	"colorsimple",
	"footer_top_link_hover_color",
	"",
	esc_html__( "Hover Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"footer_top_link_hover_color",
	$footer_top_link_hover_color
);

$footer_text = new BurstMikadoField(
	"yesno",
	"footer_text",
	"yes",
	esc_html__( "Show Footer Bottom", 'burst' ),
	esc_html__( "Enabling this option will show Footer Bottom area", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_footer_text_container"
	)
);
$panel10->addChild(
	"footer_text",
	$footer_text
);

$footer_text_container = new BurstMikadoContainer(
	"footer_text_container",
	"footer_text",
	"no"
);
$panel10->addChild(
	"footer_text_container",
	$footer_text_container
);

$footer_bottom_columns = new BurstMikadoField(
	"select",
	"footer_bottom_columns",
	"3",
	esc_html__( "Footer Bottom Columns", 'burst' ),
	esc_html__( "Choose number of columns for Footer Bottom area", 'burst' ),
	array(
		"1" => "1",
		"2" => "2",
		"3" => "3"
	)
);
$footer_text_container->addChild(
	"footer_bottom_columns",
	$footer_bottom_columns
);

$group5 = new BurstMikadoGroup(
	esc_html__( "Footer Bottom Area Style", 'burst' ),
	esc_html__( "Configure style for Footer Bottom area", 'burst' )
);
$footer_text_container->addChild(
	"group5",
	$group5
);

$row1 = new BurstMikadoRow();
$group5->addChild(
	"row1",
	$row1
);
$footer_bottom_height = new BurstMikadoField(
	"textsimple",
	"footer_bottom_height",
	"",
	esc_html__( "Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_bottom_height",
	$footer_bottom_height
);
$footer_bottom_background_color = new BurstMikadoField(
	"colorsimple",
	"footer_bottom_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_bottom_background_color",
	$footer_bottom_background_color
);

$footer_bottom_border_in_grid = new BurstMikadoField(
	"yesnosimple",
	"footer_bottom_border_in_grid",
	"no",
	esc_html__( "Set Top Border In Grid", 'burst' ),
	""
);
$row1->addChild(
	"footer_bottom_border_in_grid",
	$footer_bottom_border_in_grid
);

$row2 = new BurstMikadoRow( true );
$group5->addChild(
	"row2",
	$row2
);

$footer_bottom_border_color = new BurstMikadoField(
	"colorsimple",
	"footer_bottom_border_color",
	"",
	esc_html__( "Top Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"footer_bottom_border_color",
	$footer_bottom_border_color
);
$footer_bottom_border_width = new BurstMikadoField(
	"textsimple",
	"footer_bottom_border_width",
	"",
	esc_html__( "Top Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"footer_bottom_border_width",
	$footer_bottom_border_width
);
$footer_bottom_border_bottom_color = new BurstMikadoField(
	"colorsimple",
	"footer_bottom_border_bottom_color",
	"",
	esc_html__( "Bottom Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"footer_bottom_border_bottom_color",
	$footer_bottom_border_bottom_color
);
$footer_bottom_border_bottom_width = new BurstMikadoField(
	"textsimple",
	"footer_bottom_border_bottom_width",
	"",
	esc_html__( "Bottom Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"footer_bottom_border_bottom_width",
	$footer_bottom_border_bottom_width
);

$row3 = new BurstMikadoRow( true );
$group5->addChild(
	"row3",
	$row3
);

$footer_bottom_top_padding = new BurstMikadoField(
	"textsimple",
	"footer_bottom_top_padding",
	"",
	esc_html__( "Top Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"footer_bottom_top_padding",
	$footer_bottom_top_padding
);
$footer_bottom_bottom_padding = new BurstMikadoField(
	"textsimple",
	"footer_bottom_bottom_padding",
	"",
	esc_html__( "Bottom Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"footer_bottom_bottom_padding",
	$footer_bottom_bottom_padding
);
$footer_bottom_left_padding = new BurstMikadoField(
	"textsimple",
	"footer_bottom_left_padding",
	"",
	esc_html__( "Left Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"footer_bottom_left_padding",
	$footer_bottom_left_padding
);
$footer_bottom_right_padding = new BurstMikadoField(
	"textsimple",
	"footer_bottom_right_padding",
	"",
	esc_html__( "Right Padding (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"footer_bottom_right_padding",
	$footer_bottom_right_padding
);

$footer_bottom_image_background = new BurstMikadoField(
	"image",
	"footer_bottom_image_background",
	"",
	esc_html__( "Footer Bottom Background Image", 'burst' ),
	esc_html__( "Choose footer bottom background image", 'burst' )
);
$footer_text_container->addChild(
	"footer_bottom_image_background",
	$footer_bottom_image_background
);

$group6 = new BurstMikadoGroup(
	esc_html__( "Footer Bottom Text Style", 'burst' ),
	esc_html__( "Configure style for Footer Bottom text", 'burst' )
);
$footer_text_container->addChild(
	"group6",
	$group6
);

$row1 = new BurstMikadoRow();
$group6->addChild(
	"row1",
	$row1
);

$footer_bottom_text_color = new BurstMikadoField(
	"colorsimple",
	"footer_bottom_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_bottom_text_color",
	$footer_bottom_text_color
);

$footer_bottom_text_font_size = new BurstMikadoField(
	"textsimple",
	"footer_bottom_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_bottom_text_font_size",
	$footer_bottom_text_font_size
);

$footer_bottom_text_line_height = new BurstMikadoField(
	"textsimple",
	"footer_bottom_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_bottom_text_line_height",
	$footer_bottom_text_line_height
);

$footer_bottom_text_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"footer_bottom_text_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"footer_bottom_text_text_transform",
	$footer_bottom_text_text_transform
);

$row2 = new BurstMikadoRow( true );
$group6->addChild(
	"row2",
	$row2
);

$footer_bottom_text_font_family = new BurstMikadoField(
	"fontsimple",
	"footer_bottom_text_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"footer_bottom_text_font_family",
	$footer_bottom_text_font_family
);

$footer_bottom_text_font_style = new BurstMikadoField(
	"selectblanksimple",
	"footer_bottom_text_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"footer_bottom_text_font_style",
	$footer_bottom_text_font_style
);

$footer_bottom_text_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"footer_bottom_text_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"footer_bottom_text_font_weight",
	$footer_bottom_text_font_weight
);

$footer_bottom_text_letter_spacing = new BurstMikadoField(
	"textsimple",
	"footer_bottom_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"footer_bottom_text_letter_spacing",
	$footer_bottom_text_letter_spacing
);

$group7 = new BurstMikadoGroup(
	esc_html__( "Footer Bottom Link Style", 'burst' ),
	esc_html__( "Configure style for Footer Bottom link", 'burst' )
);
$footer_text_container->addChild(
	"group7",
	$group7
);

$row1 = new BurstMikadoRow();
$group7->addChild(
	"row1",
	$row1
);

$footer_bottom_link_color = new BurstMikadoField(
	"colorsimple",
	"footer_bottom_link_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_bottom_link_color",
	$footer_bottom_link_color
);

$footer_bottom_link_font_size = new BurstMikadoField(
	"textsimple",
	"footer_bottom_link_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_bottom_link_font_size",
	$footer_bottom_link_font_size
);

$footer_bottom_link_line_height = new BurstMikadoField(
	"textsimple",
	"footer_bottom_link_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_bottom_link_line_height",
	$footer_bottom_link_line_height
);

$footer_bottom_link_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"footer_bottom_link_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"footer_bottom_link_text_transform",
	$footer_bottom_link_text_transform
);

$row2 = new BurstMikadoRow( true );
$group7->addChild(
	"row2",
	$row2
);

$footer_bottom_link_font_family = new BurstMikadoField(
	"fontsimple",
	"footer_bottom_link_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"footer_bottom_link_font_family",
	$footer_bottom_link_font_family
);

$footer_bottom_link_font_style = new BurstMikadoField(
	"selectblanksimple",
	"footer_bottom_link_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"footer_bottom_link_font_style",
	$footer_bottom_link_font_style
);

$footer_bottom_link_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"footer_bottom_link_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"footer_bottom_link_font_weight",
	$footer_bottom_link_font_weight
);

$footer_bottom_link_letter_spacing = new BurstMikadoField(
	"textsimple",
	"footer_bottom_link_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"footer_bottom_link_letter_spacing",
	$footer_bottom_link_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$group7->addChild(
	"row3",
	$row3
);

$footer_bottom_link_hover_color = new BurstMikadoField(
	"colorsimple",
	"footer_bottom_link_hover_color",
	"",
	esc_html__( "Hover Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"footer_bottom_link_hover_color",
	$footer_bottom_link_hover_color
);