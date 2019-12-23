<?php

$contactform7page = new BurstMikadoAdminPage(
	"17",
	esc_html__( "Contact Form 7", 'burst' ),
	"icon_mail_alt"
);
$burst_mikado_Framework->mkdOptions->addAdminPage(
	esc_html__( "Contact Form 7", 'burst' ),
	$contactform7page
);

//Contact Form 7 Settings

$panel1 = new BurstMikadoPanel(
	esc_html__( "Custom Style 1 Settings", 'burst' ),
	"contact_form_custom_style_1_panel"
);
$contactform7page->addChild(
	"panel1",
	$panel1
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Form Elements' Background", 'burst' ),
	esc_html__( "Define background for form elements (input, textarea, select)", 'burst' )
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
$cf7_custom_style_1_element_background_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_1_element_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_element_background_color",
	$cf7_custom_style_1_element_background_color
);
$cf7_custom_style_1_element_focus_background_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_1_element_focus_background_color",
	"",
	esc_html__( "Focus Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_element_focus_background_color",
	$cf7_custom_style_1_element_focus_background_color
);
$cf7_custom_style_1_element_background_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_element_background_transparency",
	"",
	esc_html__( "Background Transparency (values: 0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_element_background_transparency",
	$cf7_custom_style_1_element_background_transparency
);
$cf7_custom_style_1_element_focus_background_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_element_focus_background_transparency",
	"",
	esc_html__( "Focus Background Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_element_focus_background_transparency",
	$cf7_custom_style_1_element_focus_background_transparency
);
$group2 = new BurstMikadoGroup(
	esc_html__( "Form Elements' Border", 'burst' ),
	esc_html__( "Define border style for form elements (text input fields, textarea, select)", 'burst' )
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
$cf7_custom_style_1_element_border_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_1_element_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_element_border_color",
	$cf7_custom_style_1_element_border_color
);
$cf7_custom_style_1_element_focus_border_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_1_element_focus_border_color",
	"",
	esc_html__( "Focus Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_element_focus_border_color",
	$cf7_custom_style_1_element_focus_border_color
);
$cf7_custom_style_1_border_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_border_transparency",
	"",
	esc_html__( "Border Transparency (values: 0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_border_transparency",
	$cf7_custom_style_1_border_transparency
);
$cf7_custom_style_1_focus_border_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_focus_border_transparency",
	"",
	esc_html__( "Focus Border Transparency (values: 0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_focus_border_transparency",
	$cf7_custom_style_1_focus_border_transparency
);
$row2 = new BurstMikadoRow();
$group2->addChild(
	"row2",
	$row2
);
$cf7_custom_style_1_element_border_width = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_element_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_1_element_border_width",
	$cf7_custom_style_1_element_border_width
);
$cf7_custom_style_1_element_border_radius = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_element_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_1_element_border_radius",
	$cf7_custom_style_1_element_border_radius
);
$cf7_custom_style_1_element_border_bottom = new BurstMikadoField(
	"yesnosimple",
	"cf7_custom_style_1_element_border_bottom",
	"no",
	esc_html__( "Show Only Border Bottom", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_1_element_border_bottom",
	$cf7_custom_style_1_element_border_bottom
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Form Elements' Text Style", 'burst' ),
	esc_html__( "Define text style for form elements (text input fields, textarea, select)", 'burst' )
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
$cf7_custom_style_1_element_font_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_1_element_font_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_element_font_color",
	$cf7_custom_style_1_element_font_color
);
$cf7_custom_style_1_element_font_focus_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_1_element_font_focus_color",
	"",
	esc_html__( "Focus Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_element_font_focus_color",
	$cf7_custom_style_1_element_font_focus_color
);
$cf7_custom_style_1_element_font_size = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_element_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_element_font_size",
	$cf7_custom_style_1_element_font_size
);
$cf7_custom_style_1_element_line_height = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_element_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_element_line_height",
	$cf7_custom_style_1_element_line_height
);
$row2 = new BurstMikadoRow( true );
$group3->addChild(
	"row2",
	$row2
);
$cf7_custom_style_1_element_font_family = new BurstMikadoField(
	"fontsimple",
	"cf7_custom_style_1_element_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_1_element_font_family",
	$cf7_custom_style_1_element_font_family
);
$cf7_custom_style_1_element_font_style = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_1_element_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"cf7_custom_style_1_element_font_style",
	$cf7_custom_style_1_element_font_style
);
$cf7_custom_style_1_element_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_1_element_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"cf7_custom_style_1_element_font_weight",
	$cf7_custom_style_1_element_font_weight
);
$cf7_custom_style_1_element_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_1_element_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"cf7_custom_style_1_element_text_transform",
	$cf7_custom_style_1_element_text_transform
);
$row3 = new BurstMikadoRow( true );
$group3->addChild(
	"row3",
	$row3
);
$cf7_custom_style_1_element_letter_spacing = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_element_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_1_element_letter_spacing",
	$cf7_custom_style_1_element_letter_spacing
);

$group9 = new BurstMikadoGroup(
	esc_html__( "Form Elements' Labels Style", 'burst' ),
	esc_html__( "Define labels style for form elements (text input fields, textarea, select)", 'burst' )
);
$panel1->addChild(
	"group9",
	$group9
);
$row1 = new BurstMikadoRow();
$group9->addChild(
	"row1",
	$row1
);
$cf7_custom_style_1_label_font_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_1_label_font_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_label_font_color",
	$cf7_custom_style_1_label_font_color
);
$cf7_custom_style_1_label_font_size = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_label_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_label_font_size",
	$cf7_custom_style_1_label_font_size
);
$cf7_custom_style_1_label_line_height = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_label_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_label_line_height",
	$cf7_custom_style_1_label_line_height
);
$cf7_custom_style_1_label_font_family = new BurstMikadoField(
	"fontsimple",
	"cf7_custom_style_1_label_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_label_font_family",
	$cf7_custom_style_1_label_font_family
);
$row2 = new BurstMikadoRow( true );
$group9->addChild(
	"row2",
	$row2
);
$cf7_custom_style_1_label_font_style = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_1_label_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"cf7_custom_style_1_label_font_style",
	$cf7_custom_style_1_label_font_style
);
$cf7_custom_style_1_label_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_1_label_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"cf7_custom_style_1_label_font_weight",
	$cf7_custom_style_1_label_font_weight
);
$cf7_custom_style_1_label_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_1_label_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"cf7_custom_style_1_label_text_transform",
	$cf7_custom_style_1_label_text_transform
);
$cf7_custom_style_1_label_letter_spacing = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_label_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_1_label_letter_spacing",
	$cf7_custom_style_1_label_letter_spacing
);
$group4 = new BurstMikadoGroup(
	esc_html__( "Form Elements' Padding", 'burst' ),
	esc_html__( "Define padding for form elements (text input fields, textarea, select)", 'burst' )
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
$cf7_custom_style_1_element_padding_top = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_element_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_element_padding_top",
	$cf7_custom_style_1_element_padding_top
);
$cf7_custom_style_1_element_padding_right = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_element_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_element_padding_right",
	$cf7_custom_style_1_element_padding_right
);
$cf7_custom_style_1_element_padding_bottom = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_element_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_element_padding_bottom",
	$cf7_custom_style_1_element_padding_bottom
);
$cf7_custom_style_1_element_padding_left = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_element_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_element_padding_left",
	$cf7_custom_style_1_element_padding_left
);

$group5 = new BurstMikadoGroup(
	esc_html__( "Form Elements' Margin", 'burst' ),
	esc_html__( "Define margin for form elements (text input fields, textarea, select)", 'burst' )
);
$panel1->addChild(
	"group5",
	$group5
);
$row1 = new BurstMikadoRow();
$group5->addChild(
	"row1",
	$row1
);
$cf7_custom_style_1_element_margin_top = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_element_margin_top",
	"",
	esc_html__( "Margin Top (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_element_margin_top",
	$cf7_custom_style_1_element_margin_top
);
$cf7_custom_style_1_element_margin_bottom = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_element_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_element_margin_bottom",
	$cf7_custom_style_1_element_margin_bottom
);

$cf7_custom_style_1_element_textarea_height = new BurstMikadoField(
	"text",
	"cf7_custom_style_1_element_textarea_height",
	"",
	esc_html__( "Textarea Height (px)", 'burst' ),
	esc_html__( "Enter height for textarea form element", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"cf7_custom_style_1_element_textarea_height",
	$cf7_custom_style_1_element_textarea_height
);

$group6 = new BurstMikadoGroup(
	esc_html__( "Button Background", 'burst' ),
	esc_html__( "Define background for button", 'burst' )
);
$panel1->addChild(
	"group6",
	$group6
);
$row1 = new BurstMikadoRow();
$group6->addChild(
	"row1",
	$row1
);
$cf7_custom_style_1_button_background_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_1_button_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_button_background_color",
	$cf7_custom_style_1_button_background_color
);
$cf7_custom_style_1_button_hover_background_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_1_button_hover_background_color",
	"",
	esc_html__( "Hover Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_button_hover_background_color",
	$cf7_custom_style_1_button_hover_background_color
);
$cf7_custom_style_1_button_background_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_button_background_transparency",
	"",
	esc_html__( "Background Transparency (values: 0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_button_background_transparency",
	$cf7_custom_style_1_button_background_transparency
);
$cf7_custom_style_1_button_hover_background_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_button_hover_background_transparency",
	"",
	esc_html__( "Hover Background Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_button_hover_background_transparency",
	$cf7_custom_style_1_button_hover_background_transparency
);

$group7 = new BurstMikadoGroup(
	esc_html__( "Button Border", 'burst' ),
	esc_html__( "Define border style for button", 'burst' )
);
$panel1->addChild(
	"group7",
	$group7
);
$row1 = new BurstMikadoRow();
$group7->addChild(
	"row1",
	$row1
);
$cf7_custom_style_1_button_border_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_1_button_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_button_border_color",
	$cf7_custom_style_1_button_border_color
);
$cf7_custom_style_1_button_hover_border_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_1_button_hover_border_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_button_hover_border_color",
	$cf7_custom_style_1_button_hover_border_color
);
$cf7_custom_style_1_button_border_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_button_border_transparency",
	"",
	esc_html__( "Border Transparency (values: 0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_button_border_transparency",
	$cf7_custom_style_1_button_border_transparency
);
$cf7_custom_style_1_button_hover_border_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_button_hover_border_transparency",
	"",
	esc_html__( "Hover Border Transparency (values: 0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_button_hover_border_transparency",
	$cf7_custom_style_1_button_hover_border_transparency
);
$row2 = new BurstMikadoRow();
$group7->addChild(
	"row2",
	$row2
);
$cf7_custom_style_1_button_border_width = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_button_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_1_button_border_width",
	$cf7_custom_style_1_button_border_width
);
$cf7_custom_style_1_button_border_radius = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_1_button_border_radius",
	$cf7_custom_style_1_button_border_radius
);
$group8 = new BurstMikadoGroup(
	esc_html__( "Button Text Style", 'burst' ),
	esc_html__( "Define text style for button", 'burst' )
);
$panel1->addChild(
	"group8",
	$group8
);
$row1 = new BurstMikadoRow();
$group8->addChild(
	"row1",
	$row1
);
$cf7_custom_style_1_button_font_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_1_button_font_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_button_font_color",
	$cf7_custom_style_1_button_font_color
);
$cf7_custom_style_1_button_font_hover_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_1_button_font_hover_color",
	"",
	esc_html__( "Hover Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_button_font_hover_color",
	$cf7_custom_style_1_button_font_hover_color
);
$cf7_custom_style_1_button_font_size = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_button_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_button_font_size",
	$cf7_custom_style_1_button_font_size
);
$cf7_custom_style_1_button_font_family = new BurstMikadoField(
	"fontsimple",
	"cf7_custom_style_1_button_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_1_button_font_family",
	$cf7_custom_style_1_button_font_family
);
$row2 = new BurstMikadoRow( true );
$group8->addChild(
	"row2",
	$row2
);
$cf7_custom_style_1_button_font_style = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_1_button_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"cf7_custom_style_1_button_font_style",
	$cf7_custom_style_1_button_font_style
);
$cf7_custom_style_1_button_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_1_button_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"cf7_custom_style_1_button_font_weight",
	$cf7_custom_style_1_button_font_weight
);
$cf7_custom_style_1_button_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_1_button_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"cf7_custom_style_1_button_text_transform",
	$cf7_custom_style_1_button_text_transform
);
$cf7_custom_style_1_button_letter_spacing = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_1_button_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_1_button_letter_spacing",
	$cf7_custom_style_1_button_letter_spacing
);

$cf7_custom_style_1_button_height = new BurstMikadoField(
	"text",
	"cf7_custom_style_1_button_height",
	"",
	esc_html__( "Button Height (px)", 'burst' ),
	esc_html__( "Enter button height in px ", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"cf7_custom_style_1_button_height",
	$cf7_custom_style_1_button_height
);

$cf7_custom_style_1_button_padding = new BurstMikadoField(
	"text",
	"cf7_custom_style_1_button_padding",
	"",
	esc_html__( "Button Padding (px)", 'burst' ),
	esc_html__( "Enter value for button left and right padding in px ", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"cf7_custom_style_1_button_padding",
	$cf7_custom_style_1_button_padding
);

$cf7_custom_style_1_error_validation_messages_color = new BurstMikadoField(
	"color",
	"cf7_custom_style_1_error_validation_messages_color",
	"",
	esc_html__( "Validation Error Text Color", 'burst' ),
	esc_html__( "Choose color for error form validation text messages", 'burst' )
);
$panel1->addChild(
	"cf7_custom_style_1_error_validation_messages_color",
	$cf7_custom_style_1_error_validation_messages_color
);

$panel2 = new BurstMikadoPanel(
	esc_html__( "Custom Style 2 Settings", 'burst' ),
	"contact_form_custom_style_2_panel"
);
$contactform7page->addChild(
	"panel2",
	$panel2
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Form Elements' Background", 'burst' ),
	esc_html__( "Define background for form elements (input, textarea, select)", 'burst' )
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
$cf7_custom_style_2_element_background_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_2_element_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_element_background_color",
	$cf7_custom_style_2_element_background_color
);
$cf7_custom_style_2_element_focus_background_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_2_element_focus_background_color",
	"",
	esc_html__( "Focus Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_element_focus_background_color",
	$cf7_custom_style_2_element_focus_background_color
);
$cf7_custom_style_2_element_background_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_element_background_transparency",
	"",
	esc_html__( "Background Transparency (values: 0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_element_background_transparency",
	$cf7_custom_style_2_element_background_transparency
);
$cf7_custom_style_2_element_focus_background_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_element_focus_background_transparency",
	"",
	esc_html__( "Focus Background Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_element_focus_background_transparency",
	$cf7_custom_style_2_element_focus_background_transparency
);
$group2 = new BurstMikadoGroup(
	esc_html__( "Form Elements' Border", 'burst' ),
	esc_html__( "Define border style for form elements (text input fields, textarea, select)", 'burst' )
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
$cf7_custom_style_2_element_border_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_2_element_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_element_border_color",
	$cf7_custom_style_2_element_border_color
);
$cf7_custom_style_2_element_focus_border_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_2_element_focus_border_color",
	"",
	esc_html__( "Focus Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_element_focus_border_color",
	$cf7_custom_style_2_element_focus_border_color
);
$cf7_custom_style_2_border_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_border_transparency",
	"",
	esc_html__( "Border Transparency (values: 0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_border_transparency",
	$cf7_custom_style_2_border_transparency
);
$cf7_custom_style_2_focus_border_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_focus_border_transparency",
	"",
	esc_html__( "Focus Border Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_focus_border_transparency",
	$cf7_custom_style_2_focus_border_transparency
);

$row2 = new BurstMikadoRow();
$group2->addChild(
	"row2",
	$row2
);
$cf7_custom_style_2_element_border_width = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_element_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_2_element_border_width",
	$cf7_custom_style_2_element_border_width
);
$cf7_custom_style_2_element_border_radius = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_element_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_2_element_border_radius",
	$cf7_custom_style_2_element_border_radius
);
$cf7_custom_style_2_element_border_bottom = new BurstMikadoField(
	"yesnosimple",
	"cf7_custom_style_2_element_border_bottom",
	"no",
	esc_html__( "Show Only Border Bottom", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_2_element_border_bottom",
	$cf7_custom_style_2_element_border_bottom
);
$group3 = new BurstMikadoGroup(
	esc_html__( "Form Elements' Text Style", 'burst' ),
	esc_html__( "Define text style for form elements (text input fields, textarea, select)", 'burst' )
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
$cf7_custom_style_2_element_font_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_2_element_font_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_element_font_color",
	$cf7_custom_style_2_element_font_color
);
$cf7_custom_style_2_element_font_focus_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_2_element_font_focus_color",
	"",
	esc_html__( "Focus Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_element_font_focus_color",
	$cf7_custom_style_2_element_font_focus_color
);
$cf7_custom_style_2_element_font_size = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_element_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_element_font_size",
	$cf7_custom_style_2_element_font_size
);
$cf7_custom_style_2_element_line_height = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_element_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_element_line_height",
	$cf7_custom_style_2_element_line_height
);
$row2 = new BurstMikadoRow( true );
$group3->addChild(
	"row2",
	$row2
);
$cf7_custom_style_2_element_font_family = new BurstMikadoField(
	"fontsimple",
	"cf7_custom_style_2_element_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_2_element_font_family",
	$cf7_custom_style_2_element_font_family
);
$cf7_custom_style_2_element_font_style = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_2_element_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"cf7_custom_style_2_element_font_style",
	$cf7_custom_style_2_element_font_style
);
$cf7_custom_style_2_element_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_2_element_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"cf7_custom_style_2_element_font_weight",
	$cf7_custom_style_2_element_font_weight
);
$cf7_custom_style_2_element_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_2_element_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"cf7_custom_style_2_element_text_transform",
	$cf7_custom_style_2_element_text_transform
);
$row3 = new BurstMikadoRow( true );
$group3->addChild(
	"row3",
	$row3
);
$cf7_custom_style_2_element_letter_spacing = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_element_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"cf7_custom_style_2_element_letter_spacing",
	$cf7_custom_style_2_element_letter_spacing
);
$group9 = new BurstMikadoGroup(
	esc_html__( "Form Elements' Labels Style", 'burst' ),
	esc_html__( "Define labels style for form elements (text input fields, textarea, select)", 'burst' )
);
$panel2->addChild(
	"group9",
	$group9
);
$row1 = new BurstMikadoRow();
$group9->addChild(
	"row1",
	$row1
);
$cf7_custom_style_2_label_font_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_2_label_font_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_label_font_color",
	$cf7_custom_style_2_label_font_color
);
$cf7_custom_style_2_label_font_size = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_label_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_label_font_size",
	$cf7_custom_style_2_label_font_size
);
$cf7_custom_style_2_label_line_height = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_label_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_label_line_height",
	$cf7_custom_style_2_label_line_height
);
$cf7_custom_style_2_label_font_family = new BurstMikadoField(
	"fontsimple",
	"cf7_custom_style_2_label_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_label_font_family",
	$cf7_custom_style_2_label_font_family
);
$row2 = new BurstMikadoRow( true );
$group9->addChild(
	"row2",
	$row2
);
$cf7_custom_style_2_label_font_style = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_2_label_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"cf7_custom_style_2_label_font_style",
	$cf7_custom_style_2_label_font_style
);
$cf7_custom_style_2_label_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_2_label_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"cf7_custom_style_2_label_font_weight",
	$cf7_custom_style_2_label_font_weight
);
$cf7_custom_style_2_label_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_2_label_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"cf7_custom_style_2_label_text_transform",
	$cf7_custom_style_2_label_text_transform
);
$cf7_custom_style_2_label_letter_spacing = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_label_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_2_label_letter_spacing",
	$cf7_custom_style_2_label_letter_spacing
);
$group4 = new BurstMikadoGroup(
	esc_html__( "Form Elements' Padding", 'burst' ),
	esc_html__( "Define padding for form elements (text input fields, textarea, select)", 'burst' )
);
$panel2->addChild(
	"group4",
	$group4
);
$row1 = new BurstMikadoRow();
$group4->addChild(
	"row1",
	$row1
);
$cf7_custom_style_2_element_padding_top = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_element_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_element_padding_top",
	$cf7_custom_style_2_element_padding_top
);
$cf7_custom_style_2_element_padding_right = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_element_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_element_padding_right",
	$cf7_custom_style_2_element_padding_right
);
$cf7_custom_style_2_element_padding_bottom = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_element_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_element_padding_bottom",
	$cf7_custom_style_2_element_padding_bottom
);
$cf7_custom_style_2_element_padding_left = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_element_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_element_padding_left",
	$cf7_custom_style_2_element_padding_left
);
$group5 = new BurstMikadoGroup(
	esc_html__( "Form Elements' Margin", 'burst' ),
	esc_html__( "Define margin for form elements (text input fields, textarea, select)", 'burst' )
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
$cf7_custom_style_2_element_margin_top = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_element_margin_top",
	"",
	esc_html__( "Margin Top (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_element_margin_top",
	$cf7_custom_style_2_element_margin_top
);
$cf7_custom_style_2_element_margin_bottom = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_element_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_element_margin_bottom",
	$cf7_custom_style_2_element_margin_bottom
);
$cf7_custom_style_2_element_textarea_height = new BurstMikadoField(
	"text",
	"cf7_custom_style_2_element_textarea_height",
	"",
	esc_html__( "Textarea Height (px)", 'burst' ),
	esc_html__( "Enter height for textarea form element", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"cf7_custom_style_2_element_textarea_height",
	$cf7_custom_style_2_element_textarea_height
);

$group6 = new BurstMikadoGroup(
	esc_html__( "Button Background", 'burst' ),
	esc_html__( "Define background for button", 'burst' )
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
$cf7_custom_style_2_button_background_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_2_button_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_button_background_color",
	$cf7_custom_style_2_button_background_color
);
$cf7_custom_style_2_button_hover_background_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_2_button_hover_background_color",
	"",
	esc_html__( "Hover Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_button_hover_background_color",
	$cf7_custom_style_2_button_hover_background_color
);
$cf7_custom_style_2_button_background_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_button_background_transparency",
	"",
	esc_html__( "Background Transparency (values: 0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_button_background_transparency",
	$cf7_custom_style_2_button_background_transparency
);
$cf7_custom_style_2_button_hover_background_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_button_hover_background_transparency",
	"",
	esc_html__( "Hover Background Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_button_hover_background_transparency",
	$cf7_custom_style_2_button_hover_background_transparency
);
$group7 = new BurstMikadoGroup(
	esc_html__( "Button Border", 'burst' ),
	esc_html__( "Define border style for button", 'burst' )
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
$cf7_custom_style_2_button_border_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_2_button_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_button_border_color",
	$cf7_custom_style_2_button_border_color
);
$cf7_custom_style_2_button_hover_border_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_2_button_hover_border_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_button_hover_border_color",
	$cf7_custom_style_2_button_hover_border_color
);
$cf7_custom_style_2_button_border_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_button_border_transparency",
	"",
	esc_html__( "Border Transparency (values: 0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_button_border_transparency",
	$cf7_custom_style_2_button_border_transparency
);
$cf7_custom_style_2_button_hover_border_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_button_hover_border_transparency",
	"",
	esc_html__( "Hover Border Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_button_hover_border_transparency",
	$cf7_custom_style_2_button_hover_border_transparency
);

$row2 = new BurstMikadoRow();
$group7->addChild(
	"row2",
	$row2
);
$cf7_custom_style_2_button_border_width = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_button_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_2_button_border_width",
	$cf7_custom_style_2_button_border_width
);
$cf7_custom_style_2_button_border_radius = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_2_button_border_radius",
	$cf7_custom_style_2_button_border_radius
);
$group8 = new BurstMikadoGroup(
	esc_html__( "Button Text Style", 'burst' ),
	esc_html__( "Define text style for button", 'burst' )
);
$panel2->addChild(
	"group8",
	$group8
);
$row1 = new BurstMikadoRow();
$group8->addChild(
	"row1",
	$row1
);
$cf7_custom_style_2_button_font_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_2_button_font_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_button_font_color",
	$cf7_custom_style_2_button_font_color
);
$cf7_custom_style_2_button_font_hover_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_2_button_font_hover_color",
	"",
	esc_html__( "Hover Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_button_font_hover_color",
	$cf7_custom_style_2_button_font_hover_color
);
$cf7_custom_style_2_button_font_size = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_button_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_button_font_size",
	$cf7_custom_style_2_button_font_size
);
$cf7_custom_style_2_button_font_family = new BurstMikadoField(
	"fontsimple",
	"cf7_custom_style_2_button_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_2_button_font_family",
	$cf7_custom_style_2_button_font_family
);
$row2 = new BurstMikadoRow( true );
$group8->addChild(
	"row2",
	$row2
);
$cf7_custom_style_2_button_font_style = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_2_button_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"cf7_custom_style_2_button_font_style",
	$cf7_custom_style_2_button_font_style
);
$cf7_custom_style_2_button_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_2_button_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"cf7_custom_style_2_button_font_weight",
	$cf7_custom_style_2_button_font_weight
);
$cf7_custom_style_2_button_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_2_button_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"cf7_custom_style_2_button_text_transform",
	$cf7_custom_style_2_button_text_transform
);
$cf7_custom_style_2_button_letter_spacing = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_2_button_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_2_button_letter_spacing",
	$cf7_custom_style_2_button_letter_spacing
);

$cf7_custom_style_2_button_height = new BurstMikadoField(
	"text",
	"cf7_custom_style_2_button_height",
	"",
	esc_html__( "Button Height (px)", 'burst' ),
	esc_html__( "Enter button height in px ", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"cf7_custom_style_2_button_height",
	$cf7_custom_style_2_button_height
);

$cf7_custom_style_2_button_padding = new BurstMikadoField(
	"text",
	"cf7_custom_style_2_button_padding",
	"",
	esc_html__( "Button Padding (px)", 'burst' ),
	esc_html__( "Enter value for button left and right padding in px ", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"cf7_custom_style_2_button_padding",
	$cf7_custom_style_2_button_padding
);

$cf7_custom_style_2_error_validation_messages_color = new BurstMikadoField(
	"color",
	"cf7_custom_style_2_error_validation_messages_color",
	"",
	esc_html__( "Validation Error Text Color", 'burst' ),
	esc_html__( "Choose color for error form validation text messages", 'burst' )
);
$panel2->addChild(
	"cf7_custom_style_2_error_validation_messages_color",
	$cf7_custom_style_2_error_validation_messages_color
);

$panel3 = new BurstMikadoPanel(
	esc_html__( "Custom Style 3 Settings", 'burst' ),
	"contact_form_custom_style_3_panel"
);
$contactform7page->addChild(
	"panel3",
	$panel3
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Form Elements' Background", 'burst' ),
	esc_html__( "Define background for form elements (input, textarea, select)", 'burst' )
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
$cf7_custom_style_3_element_background_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_3_element_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_element_background_color",
	$cf7_custom_style_3_element_background_color
);
$cf7_custom_style_3_element_focus_background_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_3_element_focus_background_color",
	"",
	esc_html__( "Focus Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_element_focus_background_color",
	$cf7_custom_style_3_element_focus_background_color
);
$cf7_custom_style_3_element_background_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_element_background_transparency",
	"",
	esc_html__( "Background Transparency (values: 0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_element_background_transparency",
	$cf7_custom_style_3_element_background_transparency
);
$cf7_custom_style_3_element_focus_background_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_element_focus_background_transparency",
	"",
	esc_html__( "Focus Background Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_element_focus_background_transparency",
	$cf7_custom_style_3_element_focus_background_transparency
);
$group2 = new BurstMikadoGroup(
	esc_html__( "Form Elements' Border", 'burst' ),
	esc_html__( "Define border style for form elements (text input fields, textarea, select)", 'burst' )
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
$cf7_custom_style_3_element_border_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_3_element_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_element_border_color",
	$cf7_custom_style_3_element_border_color
);
$cf7_custom_style_3_element_focus_border_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_3_element_focus_border_color",
	"",
	esc_html__( "Focus Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_element_focus_border_color",
	$cf7_custom_style_3_element_focus_border_color
);
$cf7_custom_style_3_border_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_border_transparency",
	"",
	esc_html__( "Border Transparency (values: 0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_border_transparency",
	$cf7_custom_style_3_border_transparency
);
$cf7_custom_style_3_focus_border_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_focus_border_transparency",
	"",
	esc_html__( "Focus Border Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_focus_border_transparency",
	$cf7_custom_style_3_focus_border_transparency
);

$row2 = new BurstMikadoRow();
$group2->addChild(
	"row2",
	$row2
);
$cf7_custom_style_3_element_border_width = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_element_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_3_element_border_width",
	$cf7_custom_style_3_element_border_width
);
$cf7_custom_style_3_element_border_radius = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_element_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_3_element_border_radius",
	$cf7_custom_style_3_element_border_radius
);
$cf7_custom_style_3_element_border_bottom = new BurstMikadoField(
	"yesnosimple",
	"cf7_custom_style_3_element_border_bottom",
	"no",
	esc_html__( "Show Only Border Bottom", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_3_element_border_bottom",
	$cf7_custom_style_3_element_border_bottom
);
$group3 = new BurstMikadoGroup(
	esc_html__( "Form Elements' Text Style", 'burst' ),
	esc_html__( "Define text style for form elements (text input fields, textarea, select)", 'burst' )
);
$panel3->addChild(
	"group3",
	$group3
);
$row1 = new BurstMikadoRow();
$group3->addChild(
	"row1",
	$row1
);
$cf7_custom_style_3_element_font_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_3_element_font_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_element_font_color",
	$cf7_custom_style_3_element_font_color
);
$cf7_custom_style_3_element_font_focus_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_3_element_font_focus_color",
	"",
	esc_html__( "Focus Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_element_font_focus_color",
	$cf7_custom_style_3_element_font_focus_color
);
$cf7_custom_style_3_element_font_size = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_element_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_element_font_size",
	$cf7_custom_style_3_element_font_size
);
$cf7_custom_style_3_element_line_height = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_element_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_element_line_height",
	$cf7_custom_style_3_element_line_height
);
$row2 = new BurstMikadoRow( true );
$group3->addChild(
	"row2",
	$row2
);
$cf7_custom_style_3_element_font_family = new BurstMikadoField(
	"fontsimple",
	"cf7_custom_style_3_element_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_3_element_font_family",
	$cf7_custom_style_3_element_font_family
);
$cf7_custom_style_3_element_font_style = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_3_element_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"cf7_custom_style_3_element_font_style",
	$cf7_custom_style_3_element_font_style
);
$cf7_custom_style_3_element_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_3_element_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"cf7_custom_style_3_element_font_weight",
	$cf7_custom_style_3_element_font_weight
);
$cf7_custom_style_3_element_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_3_element_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"cf7_custom_style_3_element_text_transform",
	$cf7_custom_style_3_element_text_transform
);
$row3 = new BurstMikadoRow( true );
$group3->addChild(
	"row3",
	$row3
);
$cf7_custom_style_3_element_letter_spacing = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_element_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_3_element_letter_spacing",
	$cf7_custom_style_3_element_letter_spacing
);

$group9 = new BurstMikadoGroup(
	esc_html__( "Form Elements' Labels Style", 'burst' ),
	esc_html__( "Define labels style for form elements (text input fields, textarea, select)", 'burst' )
);
$panel3->addChild(
	"group9",
	$group9
);
$row1 = new BurstMikadoRow();
$group9->addChild(
	"row1",
	$row1
);
$cf7_custom_style_3_label_font_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_3_label_font_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_label_font_color",
	$cf7_custom_style_3_label_font_color
);
$cf7_custom_style_3_label_font_size = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_label_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_label_font_size",
	$cf7_custom_style_3_label_font_size
);
$cf7_custom_style_3_label_line_height = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_label_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_label_line_height",
	$cf7_custom_style_3_label_line_height
);
$cf7_custom_style_3_label_font_family = new BurstMikadoField(
	"fontsimple",
	"cf7_custom_style_3_label_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_label_font_family",
	$cf7_custom_style_3_label_font_family
);
$row2 = new BurstMikadoRow( true );
$group9->addChild(
	"row2",
	$row2
);
$cf7_custom_style_3_label_font_style = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_3_label_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"cf7_custom_style_3_label_font_style",
	$cf7_custom_style_3_label_font_style
);
$cf7_custom_style_3_label_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_3_label_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"cf7_custom_style_3_label_font_weight",
	$cf7_custom_style_3_label_font_weight
);
$cf7_custom_style_3_label_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_3_label_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"cf7_custom_style_3_label_text_transform",
	$cf7_custom_style_3_label_text_transform
);
$cf7_custom_style_3_label_letter_spacing = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_label_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_3_label_letter_spacing",
	$cf7_custom_style_3_label_letter_spacing
);

$group4 = new BurstMikadoGroup(
	esc_html__( "Form Elements' Padding", 'burst' ),
	esc_html__( "Define padding for form elements (text input fields, textarea, select)", 'burst' )
);
$panel3->addChild(
	"group4",
	$group4
);
$row1 = new BurstMikadoRow();
$group4->addChild(
	"row1",
	$row1
);
$cf7_custom_style_3_element_padding_top = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_element_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_element_padding_top",
	$cf7_custom_style_3_element_padding_top
);
$cf7_custom_style_3_element_padding_right = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_element_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_element_padding_right",
	$cf7_custom_style_3_element_padding_right
);
$cf7_custom_style_3_element_padding_bottom = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_element_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_element_padding_bottom",
	$cf7_custom_style_3_element_padding_bottom
);
$cf7_custom_style_3_element_padding_left = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_element_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_element_padding_left",
	$cf7_custom_style_3_element_padding_left
);

$group5 = new BurstMikadoGroup(
	esc_html__( "Form Elements' Margin", 'burst' ),
	esc_html__( "Define margin for form elements (text input fields, textarea, select)", 'burst' )
);
$panel3->addChild(
	"group5",
	$group5
);
$row1 = new BurstMikadoRow();
$group5->addChild(
	"row1",
	$row1
);
$cf7_custom_style_3_element_margin_top = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_element_margin_top",
	"",
	esc_html__( "Margin Top (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_element_margin_top",
	$cf7_custom_style_3_element_margin_top
);
$cf7_custom_style_3_element_margin_bottom = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_element_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_element_margin_bottom",
	$cf7_custom_style_3_element_margin_bottom
);

$cf7_custom_style_3_element_textarea_height = new BurstMikadoField(
	"text",
	"cf7_custom_style_3_element_textarea_height",
	"",
	esc_html__( "Textarea Height (px)", 'burst' ),
	esc_html__( "Enter height for textarea form element", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel3->addChild(
	"cf7_custom_style_3_element_textarea_height",
	$cf7_custom_style_3_element_textarea_height
);

$group6 = new BurstMikadoGroup(
	esc_html__( "Button Background", 'burst' ),
	esc_html__( "Define background for button", 'burst' )
);
$panel3->addChild(
	"group6",
	$group6
);
$row1 = new BurstMikadoRow();
$group6->addChild(
	"row1",
	$row1
);
$cf7_custom_style_3_button_background_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_3_button_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_button_background_color",
	$cf7_custom_style_3_button_background_color
);
$cf7_custom_style_3_button_hover_background_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_3_button_hover_background_color",
	"",
	esc_html__( "Hover Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_button_hover_background_color",
	$cf7_custom_style_3_button_hover_background_color
);
$cf7_custom_style_3_button_background_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_button_background_transparency",
	"",
	esc_html__( "Background Transparency (values: 0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_button_background_transparency",
	$cf7_custom_style_3_button_background_transparency
);
$cf7_custom_style_3_button_hover_background_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_button_hover_background_transparency",
	"",
	esc_html__( "Hover Background Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_button_hover_background_transparency",
	$cf7_custom_style_3_button_hover_background_transparency
);
$group7 = new BurstMikadoGroup(
	esc_html__( "Button Border", 'burst' ),
	esc_html__( "Define border style for button", 'burst' )
);
$panel3->addChild(
	"group7",
	$group7
);
$row1 = new BurstMikadoRow();
$group7->addChild(
	"row1",
	$row1
);
$cf7_custom_style_3_button_border_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_3_button_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_button_border_color",
	$cf7_custom_style_3_button_border_color
);
$cf7_custom_style_3_button_hover_border_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_3_button_hover_border_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_button_hover_border_color",
	$cf7_custom_style_3_button_hover_border_color
);
$cf7_custom_style_3_button_border_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_button_border_transparency",
	"",
	esc_html__( "Border Transparency (values: 0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_button_border_transparency",
	$cf7_custom_style_3_button_border_transparency
);
$cf7_custom_style_3_button_hover_border_transparency = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_button_hover_border_transparency",
	"",
	esc_html__( "Hover Border Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_button_hover_border_transparency",
	$cf7_custom_style_3_button_hover_border_transparency
);
$row2 = new BurstMikadoRow();
$group7->addChild(
	"row2",
	$row2
);
$cf7_custom_style_3_button_border_width = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_button_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_3_button_border_width",
	$cf7_custom_style_3_button_border_width
);
$cf7_custom_style_3_button_border_radius = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_3_button_border_radius",
	$cf7_custom_style_3_button_border_radius
);
$group8 = new BurstMikadoGroup(
	esc_html__( "Button Text Style", 'burst' ),
	esc_html__( "Define text style for button", 'burst' )
);
$panel3->addChild(
	"group8",
	$group8
);
$row1 = new BurstMikadoRow();
$group8->addChild(
	"row1",
	$row1
);
$cf7_custom_style_3_button_font_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_3_button_font_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_button_font_color",
	$cf7_custom_style_3_button_font_color
);
$cf7_custom_style_3_button_font_hover_color = new BurstMikadoField(
	"colorsimple",
	"cf7_custom_style_3_button_font_hover_color",
	"",
	esc_html__( "Hover Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_button_font_hover_color",
	$cf7_custom_style_3_button_font_hover_color
);
$cf7_custom_style_3_button_font_size = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_button_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_button_font_size",
	$cf7_custom_style_3_button_font_size
);
$cf7_custom_style_3_button_font_family = new BurstMikadoField(
	"fontsimple",
	"cf7_custom_style_3_button_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"cf7_custom_style_3_button_font_family",
	$cf7_custom_style_3_button_font_family
);
$row2 = new BurstMikadoRow( true );
$group8->addChild(
	"row2",
	$row2
);
$cf7_custom_style_3_button_font_style = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_3_button_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"cf7_custom_style_3_button_font_style",
	$cf7_custom_style_3_button_font_style
);
$cf7_custom_style_3_button_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_3_button_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"cf7_custom_style_3_button_font_weight",
	$cf7_custom_style_3_button_font_weight
);
$cf7_custom_style_3_button_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"cf7_custom_style_3_button_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"cf7_custom_style_3_button_text_transform",
	$cf7_custom_style_3_button_text_transform
);
$cf7_custom_style_3_button_letter_spacing = new BurstMikadoField(
	"textsimple",
	"cf7_custom_style_3_button_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"cf7_custom_style_3_button_letter_spacing",
	$cf7_custom_style_3_button_letter_spacing
);

$cf7_custom_style_3_button_height = new BurstMikadoField(
	"text",
	"cf7_custom_style_3_button_height",
	"",
	esc_html__( "Button Height (px)", 'burst' ),
	esc_html__( "Enter button height in px ", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel3->addChild(
	"cf7_custom_style_3_button_height",
	$cf7_custom_style_3_button_height
);

$cf7_custom_style_3_button_padding = new BurstMikadoField(
	"text",
	"cf7_custom_style_3_button_padding",
	"",
	esc_html__( "Button Padding (px)", 'burst' ),
	esc_html__( "Enter value for button left and right padding in px ", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel3->addChild(
	"cf7_custom_style_3_button_padding",
	$cf7_custom_style_3_button_padding
);

$cf7_custom_style_3_error_validation_messages_color = new BurstMikadoField(
	"color",
	"cf7_custom_style_3_error_validation_messages_color",
	"",
	esc_html__( "Validation Error Text Color", 'burst' ),
	esc_html__( "Choose color for error form validation text messages", 'burst' )
);
$panel3->addChild(
	"cf7_custom_style_3_error_validation_messages_color",
	$cf7_custom_style_3_error_validation_messages_color
);
