<?php

$error404Page = new BurstMikadoAdminPage(
	"13",
	"404 Error Page",
	"icon_cart_alt"
);
$burst_mikado_Framework->mkdOptions->addAdminPage(
	"error404Page",
	$error404Page
);

//404 Page Options

$panel1 = new BurstMikadoPanel(
	"404 Page Options",
	"page_error_options_panel"
);
$error404Page->addChild(
	"panel1",
	$panel1
);

$title_404 = new BurstMikadoField(
	"text",
	"404_title",
	"",
	esc_html__( "Title", 'burst' ),
	esc_html__( "Enter title for 404 page", 'burst' )
);
$panel1->addChild(
	"404_title",
	$title_404
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Title Style", 'burst' ),
	esc_html__( "Define title styles.", 'burst' )
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
$title_404_color = new BurstMikadoField(
	"colorsimple",
	"404_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"404_title_color",
	$title_404_color
);

$title_404_font_size = new BurstMikadoField(
	"textsimple",
	"404_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"404_title_font_size",
	$title_404_font_size
);

$title_404_line_height = new BurstMikadoField(
	"textsimple",
	"404_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"404_title_line_height",
	$title_404_line_height
);

$title_404_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"404_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"404_title_text_transform",
	$title_404_text_transform
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);
$title_404_font_family = new BurstMikadoField(
	"fontsimple",
	"404_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"404_title_font_family",
	$title_404_font_family
);

$title_404_font_style = new BurstMikadoField(
	"selectblanksimple",
	"404_title_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"404_title_font_style",
	$title_404_font_style
);

$title_404_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"404_title_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"404_title_font_weight",
	$title_404_font_weight
);

$title_404_letter_spacing = new BurstMikadoField(
	"textsimple",
	"404_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"404_title_letter_spacing",
	$title_404_letter_spacing
);

$text_404 = new BurstMikadoField(
	"text",
	"404_text",
	"",
	esc_html__( "Text", 'burst' ),
	esc_html__( "Enter text for 404 page", 'burst' )
);
$panel1->addChild(
	"404_text",
	$text_404
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Text Style", 'burst' ),
	esc_html__( "Define text style", 'burst' )
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
$text_404_color = new BurstMikadoField(
	"colorsimple",
	"404_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"404_text_color",
	$text_404_color
);

$text_404_font_size = new BurstMikadoField(
	"textsimple",
	"404_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"404_text_font_size",
	$text_404_font_size
);

$text_404_line_height = new BurstMikadoField(
	"textsimple",
	"404_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"404_title_line_height",
	$text_404_line_height
);

$text_404_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"404_text_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"404_text_text_transform",
	$text_404_text_transform
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);
$text_404_font_family = new BurstMikadoField(
	"fontsimple",
	"404_text_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"404_text_font_family",
	$text_404_font_family
);

$text_404_font_style = new BurstMikadoField(
	"selectblanksimple",
	"404_text_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"404_text_font_style",
	$text_404_font_style
);

$text_404_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"404_text_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"404_text_font_weight",
	$text_404_font_weight
);

$text_404_letter_spacing = new BurstMikadoField(
	"textsimple",
	"404_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"404_text_letter_spacing",
	$text_404_letter_spacing
);

$backlabel_404 = new BurstMikadoField(
	"text",
	"404_backlabel",
	"",
	esc_html__( "Back to Home Button Label", 'burst' ),
	esc_html__( 'Enter label for "Back to Home" button ', 'burst' )
);
$panel1->addChild(
	"404_backlabel",
	$backlabel_404
);

