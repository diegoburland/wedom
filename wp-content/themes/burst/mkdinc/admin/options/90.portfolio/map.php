<?php

$portfolioPage = new BurstMikadoAdminPage(
	"9",
	esc_html__( "Portfolio", 'burst' ),
	"icon_images"
);
$burst_mikado_Framework->mkdOptions->addAdminPage(
	"portfolioPage",
	$portfolioPage
);

//Portfolio List

$panel1 = new BurstMikadoPanel(
	esc_html__( "Portfolio List", 'burst' ),
	"porfolio_list"
);
$portfolioPage->addChild(
	"panel1",
	$panel1
);

$portfolio_mkd_like = new BurstMikadoField(
	"onoff",
	"portfolio_mkd_like",
	"on",
	esc_html__( "Likes", 'burst' ),
	esc_html__( 'Enabling this option will turn on "Likes"', 'burst' )
);
$panel1->addChild(
	"portfolio_mkd_like",
	$portfolio_mkd_like
);

$portfolio_disable_text_box = new BurstMikadoField(
	"yesno",
	"portfolio_disable_text_box",
	"yes",
	esc_html__( "Disable Boxed Style Project Description", 'burst' ),
	esc_html__( "Disabling boxed styled project description", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#mkdf_enable_portfolio_list_box_container",
		"dependence_show_on_yes" => ""
	)
);
$panel1->addChild(
	"portfolio_disable_text_box",
	$portfolio_disable_text_box
);

$enable_portfolio_list_box_container = new BurstMikadoContainer(
	"enable_portfolio_list_box_container",
	"portfolio_disable_text_box",
	"yes"
);
$panel1->addChild(
	"enable_portfolio_list_box_container",
	$enable_portfolio_list_box_container
);

$portfolio_list_box_background_color = new BurstMikadoField(
	"color",
	"portfolio_list_box_background_color",
	"",
	esc_html__( "Portfolio Box Background Color", 'burst' ),
	esc_html__( "Default color is #ffffff", 'burst' )
);
$enable_portfolio_list_box_container->addChild(
	"portfolio_list_box_background_color",
	$portfolio_list_box_background_color
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Image Hover Overlay Color", 'burst' ),
	esc_html__( "Define icons styles on project hover. Default hover color is #279eff.", 'burst' )
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

$portfolio_shader_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_shader_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_shader_color",
	$portfolio_shader_color
);

$portfolio_shader_transparency = new BurstMikadoField(
	"textsimple",
	"portfolio_shader_transparency",
	"",
	esc_html__( "Transparency (0=full - 1=opaque)", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"portfolio_shader_transparency",
	$portfolio_shader_transparency
);

// Portfolio List TEXT STYLES

$title_text_styles = new BurstMikadoTitle(
	"title_text_styles",
	esc_html__( "Title Text Styles", 'burst' )
);
$panel1->addChild(
	"title_text_styles",
	$title_text_styles
);

$group7 = new BurstMikadoGroup(
	esc_html__( "Title Style for Standard and Pinterest Lists", 'burst' ),
	esc_html__( "Define title styles for standard and pinterest portfolio lists.", 'burst' )
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
$portfolio_title_standard_list_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_title_standard_list_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_title_standard_list_color",
	$portfolio_title_standard_list_color
);
$portfolio_title_standard_list_hover_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_title_standard_list_hover_color",
	"",
	esc_html__( "Text Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_title_standard_list_hover_color",
	$portfolio_title_standard_list_hover_color
);
$portfolio_title_standard_list_font_size = new BurstMikadoField(
	"textsimple",
	"portfolio_title_standard_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_title_standard_list_font_size",
	$portfolio_title_standard_list_font_size
);
$portfolio_title_standard_list_line_height = new BurstMikadoField(
	"textsimple",
	"portfolio_title_standard_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_title_standard_list_line_height",
	$portfolio_title_standard_list_line_height
);

$row2 = new BurstMikadoRow( true );
$group7->addChild(
	"row2",
	$row2
);
$portfolio_title_standard_list_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_title_standard_list_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"portfolio_title_standard_list_text_transform",
	$portfolio_title_standard_list_text_transform
);
$portfolio_title_standard_list_font_family = new BurstMikadoField(
	"fontsimple",
	"portfolio_title_standard_list_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"portfolio_title_standard_list_font_family",
	$portfolio_title_standard_list_font_family
);
$portfolio_title_standard_list_font_style = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_title_standard_list_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"portfolio_title_standard_list_font_style",
	$portfolio_title_standard_list_font_style
);
$portfolio_title_standard_list_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_title_standard_list_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"portfolio_title_standard_list_font_weight",
	$portfolio_title_standard_list_font_weight
);

$row3 = new BurstMikadoRow( true );
$group7->addChild(
	"row3",
	$row3
);
$portfolio_title_standard_list_letter_spacing = new BurstMikadoField(
	"textsimple",
	"portfolio_title_standard_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"portfolio_title_standard_list_letter_spacing",
	$portfolio_title_standard_list_letter_spacing
);

$group9 = new BurstMikadoGroup(
	esc_html__( "Title Style for Text on Hover Image List", 'burst' ),
	esc_html__( "Define title styles for text on hover image portfolio list.", 'burst' )
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
$portfolio_title_hover_box_list_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_title_hover_box_list_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_title_hover_box_list_color",
	$portfolio_title_hover_box_list_color
);
$portfolio_title_hover_box_list_hover_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_title_hover_box_list_hover_color",
	"",
	esc_html__( "Text Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_title_hover_box_list_hover_color",
	$portfolio_title_hover_box_list_hover_color
);
$portfolio_title_hover_box_list_font_size = new BurstMikadoField(
	"textsimple",
	"portfolio_title_hover_box_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_title_hover_box_list_font_size",
	$portfolio_title_hover_box_list_font_size
);
$portfolio_title_hover_box_list_line_height = new BurstMikadoField(
	"textsimple",
	"portfolio_title_hover_box_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_title_hover_box_list_line_height",
	$portfolio_title_hover_box_list_line_height
);

$row2 = new BurstMikadoRow( true );
$group9->addChild(
	"row2",
	$row2
);
$portfolio_title_hover_box_list_font_family = new BurstMikadoField(
	"fontsimple",
	"portfolio_title_hover_box_list_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"portfolio_title_hover_box_list_font_family",
	$portfolio_title_hover_box_list_font_family
);
$portfolio_title_hover_box_list_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_title_hover_box_list_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"portfolio_title_hover_box_list_text_transform",
	$portfolio_title_hover_box_list_text_transform
);
$portfolio_title_hover_box_list_font_style = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_title_hover_box_list_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"portfolio_title_hover_box_list_font_style",
	$portfolio_title_hover_box_list_font_style
);
$portfolio_title_hover_box_list_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_title_hover_box_list_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"portfolio_title_hover_box_list_font_weight",
	$portfolio_title_hover_box_list_font_weight
);

$row3 = new BurstMikadoRow( true );
$group9->addChild(
	"row3",
	$row3
);
$portfolio_title_hover_box_list_letter_spacing = new BurstMikadoField(
	"textsimple",
	"portfolio_title_hover_box_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"portfolio_title_hover_box_list_letter_spacing",
	$portfolio_title_hover_box_list_letter_spacing
);

$group11 = new BurstMikadoGroup(
	esc_html__( "Title Style for Portfolio Slider and Masonry Lists", 'burst' ),
	esc_html__( "Define title styles for slider and masonry portfolio lists.", 'burst' )
);
$panel1->addChild(
	"group11",
	$group11
);

$row1 = new BurstMikadoRow();
$group11->addChild(
	"row1",
	$row1
);
$portfolio_title_list_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_title_list_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_title_list_color",
	$portfolio_title_list_color
);
$portfolio_title_list_hover_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_title_list_hover_color",
	"",
	esc_html__( "Text Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_title_list_hover_color",
	$portfolio_title_list_hover_color
);
$portfolio_title_list_font_size = new BurstMikadoField(
	"textsimple",
	"portfolio_title_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_title_list_font_size",
	$portfolio_title_list_font_size
);
$portfolio_title_list_line_height = new BurstMikadoField(
	"textsimple",
	"portfolio_title_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_title_list_line_height",
	$portfolio_title_list_line_height
);

$row2 = new BurstMikadoRow( true );
$group11->addChild(
	"row2",
	$row2
);
$portfolio_title_list_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_title_list_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"portfolio_title_list_text_transform",
	$portfolio_title_list_text_transform
);
$portfolio_title_list_font_family = new BurstMikadoField(
	"fontsimple",
	"portfolio_title_list_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"portfolio_title_list_font_family",
	$portfolio_title_list_font_family
);
$portfolio_title_list_font_style = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_title_list_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"portfolio_title_list_font_style",
	$portfolio_title_list_font_style
);
$portfolio_title_list_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_title_list_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"portfolio_title_list_font_weight",
	$portfolio_title_list_font_weight
);

$row3 = new BurstMikadoRow( true );
$group11->addChild(
	"row3",
	$row3
);
$portfolio_title_list_letter_spacing = new BurstMikadoField(
	"textsimple",
	"portfolio_title_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"portfolio_title_list_letter_spacing",
	$portfolio_title_list_letter_spacing
);

$category_text_styles = new BurstMikadoTitle(
	"category_text_styles",
	esc_html__( "Category Text Styles", 'burst' )
);
$panel1->addChild(
	"category_text_styles",
	$category_text_styles
);

$group8 = new BurstMikadoGroup(
	esc_html__( "Category Style for Standard and Pinterest Lists", 'burst' ),
	esc_html__( "Define category styles for standard and pinterest portfolio lists.", 'burst' )
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
$portfolio_category_standard_list_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_category_standard_list_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_category_standard_list_color",
	$portfolio_category_standard_list_color
);
$portfolio_category_standard_list_font_size = new BurstMikadoField(
	"textsimple",
	"portfolio_category_standard_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_category_standard_list_font_size",
	$portfolio_category_standard_list_font_size
);
$portfolio_category_standard_list_line_height = new BurstMikadoField(
	"textsimple",
	"portfolio_category_standard_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_category_standard_list_line_height",
	$portfolio_category_standard_list_line_height
);
$portfolio_category_standard_list_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_category_standard_list_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"portfolio_category_standard_list_text_transform",
	$portfolio_category_standard_list_text_transform
);

$row2 = new BurstMikadoRow( true );
$group8->addChild(
	"row2",
	$row2
);
$portfolio_category_standard_list_font_family = new BurstMikadoField(
	"fontsimple",
	"portfolio_category_standard_list_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"portfolio_category_standard_list_font_family",
	$portfolio_category_standard_list_font_family
);
$portfolio_category_standard_list_font_style = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_category_standard_list_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"portfolio_category_standard_list_font_style",
	$portfolio_category_standard_list_font_style
);
$portfolio_category_standard_list_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_category_standard_list_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"portfolio_category_standard_list_font_weight",
	$portfolio_category_standard_list_font_weight
);
$portfolio_category_standard_list_letter_spacing = new BurstMikadoField(
	"textsimple",
	"portfolio_category_standard_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"portfolio_category_standard_list_letter_spacing",
	$portfolio_category_standard_list_letter_spacing
);

$group10 = new BurstMikadoGroup(
	esc_html__( "Category Style for Text on Hover Image List", 'burst' ),
	esc_html__( "Define category styles for text on hover portfolio list.", 'burst' )
);
$panel1->addChild(
	"group10",
	$group10
);

$row1 = new BurstMikadoRow();
$group10->addChild(
	"row1",
	$row1
);
$portfolio_category_hover_box_list_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_category_hover_box_list_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_category_hover_box_list_color",
	$portfolio_category_hover_box_list_color
);
$portfolio_category_hover_box_list_font_size = new BurstMikadoField(
	"textsimple",
	"portfolio_category_hover_box_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_category_hover_box_list_font_size",
	$portfolio_category_hover_box_list_font_size
);
$portfolio_category_hover_box_list_line_height = new BurstMikadoField(
	"textsimple",
	"portfolio_category_hover_box_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_category_hover_box_list_line_height",
	$portfolio_category_hover_box_list_line_height
);
$portfolio_category_hover_box_list_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_category_hover_box_list_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"portfolio_category_hover_box_list_text_transform",
	$portfolio_category_hover_box_list_text_transform
);

$row2 = new BurstMikadoRow( true );
$group10->addChild(
	"row2",
	$row2
);
$portfolio_category_hover_box_list_font_family = new BurstMikadoField(
	"fontsimple",
	"portfolio_category_hover_box_list_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"portfolio_category_hover_box_list_font_family",
	$portfolio_category_hover_box_list_font_family
);
$portfolio_category_hover_box_list_font_style = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_category_hover_box_list_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"portfolio_category_hover_box_list_font_style",
	$portfolio_category_hover_box_list_font_style
);
$portfolio_category_hover_box_list_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_category_hover_box_list_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"portfolio_category_hover_box_list_font_weight",
	$portfolio_category_hover_box_list_font_weight
);
$portfolio_category_hover_box_list_letter_spacing = new BurstMikadoField(
	"textsimple",
	"portfolio_category_hover_box_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"portfolio_category_hover_box_list_letter_spacing",
	$portfolio_category_hover_box_list_letter_spacing
);

$group12 = new BurstMikadoGroup(
	esc_html__( "Category Style for Portfolio Slider and Masonry Lists", 'burst' ),
	esc_html__( "Define category styles for slider and masonry portfolio lists.", 'burst' )
);
$panel1->addChild(
	"group12",
	$group12
);

$row1 = new BurstMikadoRow();
$group12->addChild(
	"row1",
	$row1
);
$portfolio_category_list_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_category_list_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_category_list_color",
	$portfolio_category_list_color
);
$portfolio_category_list_font_size = new BurstMikadoField(
	"textsimple",
	"portfolio_category_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_category_list_font_size",
	$portfolio_category_list_font_size
);
$portfolio_category_list_line_height = new BurstMikadoField(
	"textsimple",
	"portfolio_category_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_category_list_line_height",
	$portfolio_category_list_line_height
);
$portfolio_category_list_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_category_list_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"portfolio_category_list_text_transform",
	$portfolio_category_list_text_transform
);

$row2 = new BurstMikadoRow( true );
$group12->addChild(
	"row2",
	$row2
);
$portfolio_category_list_font_family = new BurstMikadoField(
	"fontsimple",
	"portfolio_category_list_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"portfolio_category_list_font_family",
	$portfolio_category_list_font_family
);
$portfolio_category_list_font_style = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_category_list_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"portfolio_category_list_font_style",
	$portfolio_category_list_font_style
);
$portfolio_category_list_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_category_list_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"portfolio_category_list_font_weight",
	$portfolio_category_list_font_weight
);
$portfolio_category_list_letter_spacing = new BurstMikadoField(
	"textsimple",
	"portfolio_category_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"portfolio_category_list_letter_spacing",
	$portfolio_category_list_letter_spacing
);

// Portfolio Filter
$portfolio_filter = new BurstMikadoTitle(
	"portfolio_filter",
	esc_html__( "Category Filter", 'burst' )
);
$panel1->addChild(
	"portfolio_filter",
	$portfolio_filter
);

$portfolio_list_filter_background_color = new BurstMikadoField(
	"color",
	"portfolio_list_filter_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Choose color for background of filter area", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"portfolio_list_filter_background_color",
	$portfolio_list_filter_background_color
);

$portfolio_list_filter_height = new BurstMikadoField(
	"text",
	"portfolio_list_filter_height",
	"",
	esc_html__( "Height (px)", 'burst' ),
	esc_html__( "Enter height for filter area", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"portfolio_list_filter_height",
	$portfolio_list_filter_height
);

$portfolio_filter_margin_bottom = new BurstMikadoField(
	"text",
	"portfolio_filter_margin_bottom",
	"",
	esc_html__( "Bottom Margin (px)", 'burst' ),
	esc_html__( "Enter bottom margin for filter area. Default value is 36", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"portfolio_filter_margin_bottom",
	$portfolio_filter_margin_bottom
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Title", 'burst' ),
	esc_html__( "Define text styles for filter title", 'burst' )
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
$portfolio_filter_title_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_filter_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_filter_title_color",
	$portfolio_filter_title_color
);
$portfolio_filter_title_font_size = new BurstMikadoField(
	"textsimple",
	"portfolio_filter_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_filter_title_font_size",
	$portfolio_filter_title_font_size
);
$portfolio_filter_title_line_height = new BurstMikadoField(
	"textsimple",
	"portfolio_filter_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_filter_title_line_height",
	$portfolio_filter_title_line_height
);
$portfolio_filter_title_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_filter_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"portfolio_filter_title_text_transform",
	$portfolio_filter_title_text_transform
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);
$portfolio_filter_title_font_family = new BurstMikadoField(
	"fontsimple",
	"portfolio_filter_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"portfolio_filter_title_font_family",
	$portfolio_filter_title_font_family
);
$portfolio_filter_title_font_style = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_filter_title_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"portfolio_filter_title_font_style",
	$portfolio_filter_title_font_style
);
$portfolio_filter_title_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_filter_title_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"portfolio_filter_title_font_weight",
	$portfolio_filter_title_font_weight
);
$portfolio_filter_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"portfolio_filter_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"portfolio_filter_title_letter_spacing",
	$portfolio_filter_title_letter_spacing
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Categories", 'burst' ),
	esc_html__( "Define text styles for filter categories", 'burst' )
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
$portfolio_filter_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_filter_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_filter_color",
	$portfolio_filter_color
);
$portfolio_filter_hovercolor = new BurstMikadoField(
	"colorsimple",
	"portfolio_filter_hovercolor",
	"",
	esc_html__( "Hover/Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_filter_hovercolor",
	$portfolio_filter_hovercolor
);
$portfolio_filter_font_size = new BurstMikadoField(
	"textsimple",
	"portfolio_filter_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_filter_font_size",
	$portfolio_filter_font_size
);
$portfolio_filter_line_height = new BurstMikadoField(
	"textsimple",
	"portfolio_filter_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_filter_line_height",
	$portfolio_filter_line_height
);

$row2 = new BurstMikadoRow( true );
$group3->addChild(
	"row2",
	$row2
);
$portfolio_filter_font_family = new BurstMikadoField(
	"fontsimple",
	"portfolio_filter_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"portfolio_filter_font_family",
	$portfolio_filter_font_family
);
$portfolio_filter_font_style = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_filter_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"portfolio_filter_font_style",
	$portfolio_filter_font_style
);
$portfolio_filter_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_filter_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"portfolio_filter_font_weight",
	$portfolio_filter_font_weight
);
$portfolio_filter_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_filter_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"portfolio_filter_text_transform",
	$portfolio_filter_text_transform
);

$row3 = new BurstMikadoRow( true );
$group3->addChild(
	"row3",
	$row3
);
$portfolio_filter_letter_spacing = new BurstMikadoField(
	"textsimple",
	"portfolio_filter_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"portfolio_filter_letter_spacing",
	$portfolio_filter_letter_spacing
);

$portfolio_filter_disable_separator = new BurstMikadoField(
	"yesno",
	"portfolio_filter_disable_separator",
	"yes",
	esc_html__( "Disable Separator Between Categories", 'burst' ),
	esc_html__( "Disabling this option will remove separator between filter categories.", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#mkdf_portfolio_filter_separator_container",
		"dependence_show_on_yes" => "",
	)
);
$panel1->addChild(
	"portfolio_filter_disable_separator",
	$portfolio_filter_disable_separator
);

$portfolio_filter_separator_container = new BurstMikadoContainer(
	"portfolio_filter_separator_container",
	"portfolio_filter_disable_separator",
	"yes"
);
$panel1->addChild(
	"portfolio_filter_separator_container",
	$portfolio_filter_separator_container
);

$portfolio_filter_separator_color = new BurstMikadoField(
	"color",
	"portfolio_filter_separator_color",
	"",
	esc_html__( "Separator Between Categories Color", 'burst' ),
	esc_html__( "Choose a color for separator between categories in filter", 'burst' )
);
$portfolio_filter_separator_container->addChild(
	"portfolio_filter_separator_color",
	$portfolio_filter_separator_color
);

//ICONS STYLE
$icons_style = new BurstMikadoTitle(
	"icons_style",
	esc_html__( "Icons", 'burst' )
);
$panel1->addChild(
	"icons_style",
	$icons_style
);

$portfolio_list_icons_pack = new BurstMikadoField(
	"select",
	"portfolio_list_icons_pack",
	"font-elegant",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( 'Choose font family for hover icons on portfolio', 'burst' ),
	array(
		"font-elegant" => esc_html__( "Font Elegant", 'burst' ),
		"font-awesome" => esc_html__( "Font Awesome", 'burst' )
	)
);
$panel1->addChild(
	"portfolio_list_icons_pack",
	$portfolio_list_icons_pack
);

$group25 = new BurstMikadoGroup(
	esc_html__( "Size", 'burst' ),
	esc_html__( "Enter size for icons in portfolio list ", 'burst' )
);
$panel1->addChild(
	"group25",
	$group25
);

$row1 = new BurstMikadoRow( true );
$group25->addChild(
	"row1",
	$row1
);

$portfolio_list_icons_size = new BurstMikadoField(
	"textsimple",
	"portfolio_list_icons_size",
	"",
	esc_html__( "Icon Size (px)", 'burst' ),
	""
);
$row1->addChild(
	"portfolio_list_icons_size",
	$portfolio_list_icons_size
);

$portfolio_list_icons_shape_size = new BurstMikadoField(
	"textsimple",
	"portfolio_list_icons_shape_size",
	"",
	esc_html__( "Shape Size (px)", 'burst' ),
	""
);
$row1->addChild(
	"portfolio_list_icons_shape_size",
	$portfolio_list_icons_shape_size
);

$group4 = new BurstMikadoGroup(
	esc_html__( "Color", 'burst' ),
	esc_html__( "Choose color of the icons on project hover", 'burst' )
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
$portfolio_list_icons_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_list_icons_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_list_icons_color",
	$portfolio_list_icons_color
);
$portfolio_list_icons_hover_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_list_icons_hover_color",
	"",
	esc_html__( "Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_list_icons_hover_color",
	$portfolio_list_icons_hover_color
);

$group5 = new BurstMikadoGroup(
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Define icons background color styles on project hover", 'burst' )
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
$portfolio_list_icons_background_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_list_icons_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_list_icons_background_color",
	$portfolio_list_icons_background_color
);
$portfolio_list_icons_background_hover_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_list_icons_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_list_icons_background_hover_color",
	$portfolio_list_icons_background_hover_color
);

$group6 = new BurstMikadoGroup(
	esc_html__( "Border", 'burst' ),
	esc_html__( "Define icons border styles on project hover", 'burst' )
);
$panel1->addChild(
	"group6",
	$group6
);

$row1 = new BurstMikadoRow( true );
$group6->addChild(
	"row1",
	$row1
);

$portfolio_list_icons_border_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_list_icons_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_list_icons_border_color",
	$portfolio_list_icons_border_color
);
$portfolio_list_icons_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_list_icons_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_list_icons_border_hover_color",
	$portfolio_list_icons_border_hover_color
);
$portfolio_list_icons_border_width = new BurstMikadoField(
	"textsimple",
	"portfolio_list_icons_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_list_icons_border_width",
	$portfolio_list_icons_border_width
);
$portfolio_list_icons_border_radius = new BurstMikadoField(
	"textsimple",
	"portfolio_list_icons_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_list_icons_border_radius",
	$portfolio_list_icons_border_radius
);

$portfolio_pinterest_style = new BurstMikadoTitle(
	"portfolio_pinterest_style",
	esc_html__( "Pinterest", 'burst' )
);
$panel1->addChild(
	"portfolio_pinterest_style",
	$portfolio_pinterest_style
);

$group24 = new BurstMikadoGroup(
	esc_html__( "Pinterest Padding", 'burst' ),
	esc_html__( "Define pinterest padding", 'burst' )
);
$panel1->addChild(
	"group24",
	$group24
);

$row1 = new BurstMikadoRow( true );
$group24->addChild(
	"row1",
	$row1
);

$pinterest_padding_left = new BurstMikadoField(
	"textsimple",
	"pinterest_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pinterest_padding_left",
	$pinterest_padding_left
);

$pinterest_padding_right = new BurstMikadoField(
	"textsimple",
	"pinterest_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pinterest_padding_right",
	$pinterest_padding_right
);

$pinterest_padding_top = new BurstMikadoField(
	"textsimple",
	"pinterest_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pinterest_padding_top",
	$pinterest_padding_top
);

$pinterest_padding_bottom = new BurstMikadoField(
	"textsimple",
	"pinterest_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"pinterest_padding_bottom",
	$pinterest_padding_bottom
);

$portfolio_masonry_style = new BurstMikadoTitle(
	"portfolio_masonry_style",
	esc_html__( "Masonry", 'burst' )
);
$panel1->addChild(
	"portfolio_masonry_style",
	$portfolio_masonry_style
);

$portfolio_masonry_with_padding_width = new BurstMikadoField(
	"text",
	"portfolio_masonry_with_padding_width",
	"",
	esc_html__( "Space Width (px)", 'burst' ),
	esc_html__( "Enter space width for Masonry if space is enabled. Default value is 10", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"portfolio_masonry_with_padding_width",
	$portfolio_masonry_with_padding_width
);

//Portfolio Single Project

$panel2 = new BurstMikadoPanel(
	esc_html__( "Portfolio Single", 'burst' ),
	"porfolio_single_project"
);
$portfolioPage->addChild(
	"panel2",
	$panel2
);

$portfolio_style = new BurstMikadoField(
	"select",
	"portfolio_style",
	"small-images",
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
	)
);
$panel2->addChild(
	"portfolio_style",
	$portfolio_style
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Portfolio Overlay Color", 'burst' ),
	esc_html__( "Define color and opacity for overlay color", 'burst' )
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

$portfolio_gallery_overlay_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_gallery_overlay_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_gallery_overlay_color",
	$portfolio_gallery_overlay_color
);

$portfolio_gallery_overlay_transparency = new BurstMikadoField(
	"textsimple",
	"portfolio_gallery_overlay_transparency",
	"",
	esc_html__( "Transparency (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_gallery_overlay_transparency",
	$portfolio_gallery_overlay_transparency
);

$portfolio_gallery_image_hover_style = new BurstMikadoField(
	"select",
	"portfolio_gallery_image_hover_style",
	"magnifier",
	esc_html__( "Portfolio Image Hover", 'burst' ),
	esc_html__( 'Choose a default hover type for Single Project pages', 'burst' ),
	array(
		"disable" => esc_html__( "None", 'burst' ),
		"magnifier" => esc_html__( "Magnifier", 'burst' ),
		"icon" => esc_html__( "Icon", 'burst' ),
		"text" => esc_html__( "Image Title", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"disable"   => "#mkdf_portfolio_gallery_image_hover_separator_container,#mkdf_portfolio_gallery_image_hover_icon_container",
			"magnifier" => "#mkdf_portfolio_gallery_image_hover_separator_container,#mkdf_portfolio_gallery_image_hover_icon_container",
			"icon"      => "#mkdf_portfolio_gallery_image_hover_separator_container",
			"text"      => "#mkdf_portfolio_gallery_image_hover_icon_container"
		),
		"show"       => array(
			"disable"   => "",
			"magnifier" => "",
			"icon"      => "#mkdf_portfolio_gallery_image_hover_icon_container",
			"text"      => "#mkdf_portfolio_gallery_image_hover_separator_container"
		)
	)
);
$panel2->addChild(
	"portfolio_gallery_image_hover_style",
	$portfolio_gallery_image_hover_style
);

$portfolio_gallery_image_hover_separator_container = new BurstMikadoContainer(
	"portfolio_gallery_image_hover_separator_container",
	"portfolio_gallery_image_hover_style",
	"magnifier",
	array( "disable", "magnifier", "icon" )
);
$panel2->addChild(
	"portfolio_gallery_image_hover_separator_container",
	$portfolio_gallery_image_hover_separator_container
);

$portfolio_gallery_image_hover_separator = new BurstMikadoField(
	"select",
	"portfolio_gallery_image_hover_separator",
	"",
	esc_html__( "Separator below image title", 'burst' ),
	esc_html__( "This option will place separator below text", 'burst' ),
	array(
		"yes" => esc_html__( "Yes", 'burst' ),
		"no" => esc_html__( "No", 'burst' )
	),
	array( "col_width" => 3 )
);
$portfolio_gallery_image_hover_separator_container->addChild(
	"portfolio_gallery_image_hover_separator",
	$portfolio_gallery_image_hover_separator
);

$portfolio_gallery_overlay_text_color = new BurstMikadoField(
	"color",
	"portfolio_gallery_overlay_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "Choose a color for overlay text in Single Project pages", 'burst' )
);
$portfolio_gallery_image_hover_separator_container->addChild(
	"portfolio_gallery_overlay_text_color",
	$portfolio_gallery_overlay_text_color
);

$portfolio_gallery_image_hover_icon_container = new BurstMikadoContainer(
	"portfolio_gallery_image_hover_icon_container",
	"portfolio_gallery_image_hover_style",
	"magnifier",
	array( "disable", "magnifier", "text" )
);
$panel2->addChild(
	"portfolio_gallery_image_hover_icon_container",
	$portfolio_gallery_image_hover_icon_container
);

$group4 = new BurstMikadoGroup(
	esc_html__( "Portfolio Image Hover Icon", 'burst' ),
	esc_html__( "Define style for Portfolio Image Hover Icon", 'burst' )
);
$portfolio_gallery_image_hover_icon_container->addChild(
	"group4",
	$group4
);

$row1 = new BurstMikadoRow();
$group4->addChild(
	"row1",
	$row1
);

$portfolio_gallery_icon_pack = new BurstMikadoField(
	"selectsimple",
	"portfolio_gallery_icon_pack",
	"font-awesome",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( 'This is some description', 'burst' ),
	array(
		"font-awesome" => esc_html__( "Font Awesome", 'burst' ),
		"font-elegant" => esc_html__( "Font Elegant", 'burst' )
	)
);
$group4->addChild(
	"portfolio_gallery_icon_pack",
	$portfolio_gallery_icon_pack
);

$portfolio_gallery_icon_size = new BurstMikadoField(
	"textsimple",
	"portfolio_gallery_icon_size",
	"",
	esc_html__( "Size", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$group4->addChild(
	"portfolio_gallery_icon_size",
	$portfolio_gallery_icon_size
);

$portfolio_gallery_icon_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_gallery_icon_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$group4->addChild(
	"portfolio_gallery_icon_color",
	$portfolio_gallery_icon_color
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Title Style", 'burst' ),
	esc_html__( "Define title styles on project.", 'burst' )
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

$portfolio_title_tag = new BurstMikadoField(
	"selectsimple",
	"portfolio_title_tag",
	"h3",
	esc_html__( "Tag element", 'burst' ),
	esc_html__( 'This is some description', 'burst' ),
	array(
		"h2" => esc_html__( "h2", 'burst' ),
		"h3" => esc_html__( "h3", 'burst' ),
		"h4" => esc_html__( "h4", 'burst' ),
		"h5" => esc_html__( "h5", 'burst' )
	)
);
$row1->addChild(
	"portfolio_title_tag",
	$portfolio_title_tag
);

$portfolio_title_margin_bottom = new BurstMikadoField(
	"textsimple",
	"portfolio_title_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_title_margin_bottom",
	$portfolio_title_margin_bottom
);

$portfolio_title_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_title_color",
	$portfolio_title_color
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Additional Portfolio Titles", 'burst' ),
	esc_html__( "Define additional portfolio titles styles on project.", 'burst' )
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

$portfolio_info_tag = new BurstMikadoField(
	"selectsimple",
	"portfolio_info_tag",
	"h6",
	esc_html__( "Tag element", 'burst' ),
	esc_html__( 'This is some description', 'burst' ),
	array(
		"h4" => esc_html__( "h4", 'burst' ),
		"h5" => esc_html__( "h5", 'burst' ),
		"h6" => esc_html__( "h6", 'burst' )
	)
);
$row1->addChild(
	"portfolio_info_tag",
	$portfolio_info_tag
);

$portfolio_info_margin_bottom = new BurstMikadoField(
	"textsimple",
	"portfolio_info_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_info_margin_bottom",
	$portfolio_info_margin_bottom
);

$portfolio_info_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_info_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_info_color",
	$portfolio_info_color
);

$lightbox_single_project = new BurstMikadoField(
	"yesno",
	"lightbox_single_project",
	"yes",
	esc_html__( "Lightbox for Images", 'burst' ),
	esc_html__( "Enabling this option will turn on lightbox functionality for projects with images.", 'burst' )
);
$panel2->addChild(
	"lightbox_single_project",
	$lightbox_single_project
);

$lightbox_video_single_project = new BurstMikadoField(
	"yesno",
	"lightbox_video_single_project",
	"no",
	esc_html__( "Lightbox for Videos", 'burst' ),
	esc_html__( "Enabling this option will turn on lightbox functionality for YouTube/Vimeo projects.", 'burst' )
);
$panel2->addChild(
	"lightbox_video_single_project",
	$lightbox_video_single_project
);

$portfolio_hide_categories = new BurstMikadoField(
	"yesno",
	"portfolio_hide_categories",
	"no",
	esc_html__( "Hide Categories", 'burst' ),
	esc_html__( "Enabling this option will disable category meta description on Single Projects.", 'burst' )
);
$panel2->addChild(
	"portfolio_hide_categories",
	$portfolio_hide_categories
);

$portfolio_hide_tags = new BurstMikadoField(
	"yesno",
	"portfolio_hide_tags",
	"no",
	esc_html__( "Hide Tags", 'burst' ),
	esc_html__( "Enabling this option will disable tags meta description on Single Projects.", 'burst' )
);
$panel2->addChild(
	"portfolio_hide_tags",
	$portfolio_hide_tags
);

$portfolio_hide_date = new BurstMikadoField(
	"yesno",
	"portfolio_hide_date",
	"no",
	esc_html__( "Hide Date", 'burst' ),
	esc_html__( "Enabling this option will disable date meta on Single Projects.", 'burst' )
);
$panel2->addChild(
	"portfolio_hide_date",
	$portfolio_hide_date
);

$portfolio_hide_like = new BurstMikadoField(
	"yesno",
	"portfolio_hide_like",
	"no",
	esc_html__( "Hide Like", 'burst' ),
	esc_html__( "Enabling this option will disable like on Single Projects.", 'burst' )
);
$panel2->addChild(
	"portfolio_hide_like",
	$portfolio_hide_like
);

$portfolio_hide_comments = new BurstMikadoField(
	"yesno",
	"portfolio_hide_comments",
	"yes",
	esc_html__( "Hide Comments", 'burst' ),
	esc_html__( "Enabling this option will turn off comments functionality.", 'burst' )
);
$panel2->addChild(
	"portfolio_hide_comments",
	$portfolio_hide_comments
);

$portfolio_text_follow = new BurstMikadoField(
	"portfoliofollow",
	"portfolio_text_follow",
	"portfolio_single_follow",
	esc_html__( "Sticky Side Text ", 'burst' ),
	esc_html__( "Enabling this option will make side text sticky on Single Project pages", 'burst' )
);
$panel2->addChild(
	"portfolio_text_follow",
	$portfolio_text_follow
);

$portfolio_hide_pagination = new BurstMikadoField(
	"yesno",
	"portfolio_hide_pagination",
	"no",
	esc_html__( "Hide Pagination", 'burst' ),
	esc_html__( "Enabling this option will turn off portfolio pagination functionality.", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#mkdf_portfolio_hide_pagination_container",
		"dependence_show_on_yes" => ""
	)
);
$panel2->addChild(
	"portfolio_hide_pagination",
	$portfolio_hide_pagination
);

$portfolio_hide_pagination_container = new BurstMikadoContainer(
	"portfolio_hide_pagination_container",
	"portfolio_hide_pagination",
	"yes"
);
$panel2->addChild(
	"portfolio_hide_pagination_container",
	$portfolio_hide_pagination_container
);

$portfolio_navigation_through_same_category = new BurstMikadoField(
	"yesno",
	"portfolio_navigation_through_same_category",
	"no",
	esc_html__( "Enable Pagination Through Same Category", 'burst' ),
	esc_html__( "Enabling this option will make portfolio pagination sort through current category.", 'burst' )
);
$portfolio_hide_pagination_container->addChild(
	"portfolio_navigation_through_same_category",
	$portfolio_navigation_through_same_category
);

$portfolio_box = new BurstMikadoField(
	"yesno",
	"portfolio_box",
	"no",
	esc_html__( "Enable Box Holder", 'burst' ),
	esc_html__( "Enabling this option will place box holder on project. This option works only if Portfolio style is Big Images, Big Slider or Gallery", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#mkdf_portfolio_without_box_container",
		"dependence_show_on_yes" => "#mkdf_portfolio_box_container"
	)
);
$panel2->addChild(
	"portfolio_box",
	$portfolio_box
);

$portfolio_box_container = new BurstMikadoContainer(
	"portfolio_box_container",
	"portfolio_box",
	"no"
);
$panel2->addChild(
	"portfolio_box_container",
	$portfolio_box_container
);

$portfolio_box_background_color = new BurstMikadoField(
	"color",
	"portfolio_box_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Default color is #ffffff", 'burst' )
);
$portfolio_box_container->addChild(
	"portfolio_box_background_color",
	$portfolio_box_background_color
);

$portfolio_box_lr_padding = new BurstMikadoField(
	"text",
	"portfolio_box_lr_padding",
	"",
	esc_html__( "Padding(px)", 'burst' ),
	esc_html__( "Format: 10px 5px 10px 8px", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$portfolio_box_container->addChild(
	"portfolio_box_lr_padding",
	$portfolio_box_lr_padding
);

$portfolio_without_box_container = new BurstMikadoContainer(
	"portfolio_without_box_container",
	"portfolio_box",
	"yes"
);
$panel2->addChild(
	"portfolio_without_box_container",
	$portfolio_without_box_container
);

$portfolio_box_top_padding = new BurstMikadoField(
	"text",
	"portfolio_box_top_padding",
	"",
	esc_html__( "Top Padding(px)", 'burst' ),
	esc_html__( "Default value is 46", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$portfolio_without_box_container->addChild(
	"portfolio_box_top_padding",
	$portfolio_box_top_padding
);

$portfolio_columns_number = new BurstMikadoField(
	"select",
	"portfolio_columns_number",
	"2",
	esc_html__( "Number of Columns", 'burst' ),
	esc_html__( 'Enter the number of columns for Portfolio Gallery type', 'burst' ),
	array(
		"2" => esc_html__( "2 columns", 'burst' ),
		"3" => esc_html__( "3 columns", 'burst' ),
		"4" => esc_html__( "4 columns", 'burst' )
	)
);
$panel2->addChild(
	"portfolio_columns_number",
	$portfolio_columns_number
);

$portfolio_single_slug = new BurstMikadoField(
	"text",
	"portfolio_single_slug",
	"",
	esc_html__( "Portfolio Single Slug", 'burst' ),
	esc_html__( 'Enter if you wish to use a different Single Project slug (Note: After entering slug, navigate to Settings -> Permalinks and click "Save" in order for changes to take effect) ', 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"portfolio_single_slug",
	$portfolio_single_slug
);

/*Navigation*/

$portfolio_navigation_title = new BurstMikadoTitle(
	"portfolio_navigation_title",
	esc_html__( "Navigation", 'burst' )
);
$panel2->addChild(
	"portfolio_navigation_title",
	$portfolio_navigation_title
);

$group19 = new BurstMikadoGroup(
	esc_html__( "Navigation Button Size", 'burst' ),
	esc_html__( "Define navigation button size", 'burst' )
);
$panel2->addChild(
	"group19",
	$group19
);

$row1 = new BurstMikadoRow();
$group19->addChild(
	"row1",
	$row1
);

$portfolio_single_navigation_button_width = new BurstMikadoField(
	"textsimple",
	"portfolio_single_navigation_button_width",
	"",
	esc_html__( "Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_single_navigation_button_width",
	$portfolio_single_navigation_button_width
);

$portfolio_single_navigation_button_height = new BurstMikadoField(
	"textsimple",
	"portfolio_single_navigation_button_height",
	"",
	esc_html__( "Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_single_navigation_button_height",
	$portfolio_single_navigation_button_height
);

$group20 = new BurstMikadoGroup(
	esc_html__( "Navigation Button Position", 'burst' ),
	esc_html__( "Enter the amount of pixels you would like to move the navigation buttons towards the edges of the slider", 'burst' )
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

$portfolio_single_navigation_button_position = new BurstMikadoField(
	"textsimple",
	"portfolio_single_navigation_button_position",
	"",
	esc_html__( "Position (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_single_navigation_button_position",
	$portfolio_single_navigation_button_position
);

$group16 = new BurstMikadoGroup(
	esc_html__( "Icon Arrow Style", 'burst' ),
	esc_html__( "Define navigation arrow style", 'burst' )
);
$panel2->addChild(
	"group16",
	$group16
);

$row1 = new BurstMikadoRow();
$group16->addChild(
	"row1",
	$row1
);

$portfolio_single_navigation_arrow_size = new BurstMikadoField(
	"textsimple",
	"portfolio_single_navigation_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'burst' ),
	esc_html__( "Default value is 14    ", 'burst' )
);
$row1->addChild(
	"portfolio_single_navigation_arrow_size",
	$portfolio_single_navigation_arrow_size
);

$portfolio_single_navigation_arrows_type = new BurstMikadoField(
	"selectblanksimple",
	"portfolio_single_navigation_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'burst' ),
	"",
	burst_mikado_return_options_arrows_type()
);
$row1->addChild(
	"portfolio_single_navigation_arrows_type",
	$portfolio_single_navigation_arrows_type
);

$portfolio_single_navigation_arrow_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_single_navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_single_navigation_arrow_color",
	$portfolio_single_navigation_arrow_color
);

$portfolio_single_navigation_arrow_transparency = new BurstMikadoField(
	"textsimple",
	"portfolio_single_navigation_arrow_transparency",
	"",
	esc_html__( "Arrow Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_single_navigation_arrow_transparency",
	$portfolio_single_navigation_arrow_transparency
);

$row2 = new BurstMikadoRow( true );
$group16->addChild(
	"row2",
	$row2
);

$portfolio_single_navigation_arrow_hover_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_single_navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"portfolio_single_navigation_arrow_hover_color",
	$portfolio_single_navigation_arrow_hover_color
);

$portfolio_single_navigation_arrow_hover_transparency = new BurstMikadoField(
	"textsimple",
	"portfolio_single_navigation_arrow_hover_transparency",
	"",
	esc_html__( "Arrow Hover Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"portfolio_single_navigation_arrow_hover_transparency",
	$portfolio_single_navigation_arrow_hover_transparency
);

$group17 = new BurstMikadoGroup(
	esc_html__( "Navigation Button Background", 'burst' ),
	esc_html__( "Define navigation button background", 'burst' )
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

$portfolio_single_navigation_background_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_single_navigation_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_single_navigation_background_color",
	$portfolio_single_navigation_background_color
);

$portfolio_single_navigation_background_transparency = new BurstMikadoField(
	"textsimple",
	"portfolio_single_navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_single_navigation_background_transparency",
	$portfolio_single_navigation_background_transparency
);

$portfolio_single_navigation_background_hover_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_single_navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_single_navigation_background_hover_color",
	$portfolio_single_navigation_background_hover_color
);

$portfolio_single_navigation_background_hover_transparency = new BurstMikadoField(
	"textsimple",
	"portfolio_single_navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_single_navigation_background_hover_transparency",
	$portfolio_single_navigation_background_hover_transparency
);

$group18 = new BurstMikadoGroup(
	esc_html__( "Navigation Button Border", 'burst' ),
	esc_html__( "Define border style", 'burst' )
);
$panel2->addChild(
	"group18",
	$group18
);

$row1 = new BurstMikadoRow();
$group18->addChild(
	"row1",
	$row1
);

$portfolio_single_navigation_border_width = new BurstMikadoField(
	"textsimple",
	"portfolio_single_navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'burst' ),
	""
);
$row1->addChild(
	"portfolio_single_navigation_border_width",
	$portfolio_single_navigation_border_width
);

$portfolio_single_navigation_border_radius = new BurstMikadoField(
	"textsimple",
	"portfolio_single_navigation_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_single_navigation_border_radius",
	$portfolio_single_navigation_border_radius
);

$portfolio_single_navigation_border_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_single_navigation_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_single_navigation_border_color",
	$portfolio_single_navigation_border_color
);

$portfolio_single_navigation_border_transparency = new BurstMikadoField(
	"textsimple",
	"portfolio_single_navigation_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_single_navigation_border_transparency",
	$portfolio_single_navigation_border_transparency
);

$row2 = new BurstMikadoRow( true );
$group18->addChild(
	"row2",
	$row2
);

$portfolio_single_navigation_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_single_navigation_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"portfolio_single_navigation_border_hover_color",
	$portfolio_single_navigation_border_hover_color
);

$portfolio_single_navigation_border_hover_transparency = new BurstMikadoField(
	"textsimple",
	"portfolio_single_navigation_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"portfolio_single_navigation_border_hover_transparency",
	$portfolio_single_navigation_border_hover_transparency
);

$portfolio_single_navigation_show_button_shadow = new BurstMikadoField(
	"yesno",
	"portfolio_single_navigation_show_button_shadow",
	"no",
	esc_html__( "Show Button Shadow", 'burst' ),
	esc_html__( "Enabling this options will show button shadow", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_portfolio_single_navigation_button_shadow_container"
	)
);
$panel2->addChild(
	"portfolio_single_navigation_show_button_shadow",
	$portfolio_single_navigation_show_button_shadow
);

$portfolio_single_navigation_button_shadow_container = new BurstMikadoContainer(
	"portfolio_single_navigation_button_shadow_container",
	"portfolio_single_navigation_show_button_shadow",
	"no"
);
$panel2->addChild(
	"portfolio_single_navigation_button_shadow_container",
	$portfolio_single_navigation_button_shadow_container
);

$group21 = new BurstMikadoGroup(
	esc_html__( "Button Shadow", 'burst' ),
	esc_html__( "Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.", 'burst' )
);
$portfolio_single_navigation_button_shadow_container->addChild(
	"group21",
	$group21
);

$row1 = new BurstMikadoRow();
$group21->addChild(
	"row1",
	$row1
);

$portfolio_single_navigation_button_shadow_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_single_navigation_button_shadow_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "Choose color for  box shadow", 'burst' )
);
$row1->addChild(
	"portfolio_single_navigation_button_shadow_color",
	$portfolio_single_navigation_button_shadow_color
);

$row2 = new BurstMikadoRow();
$group21->addChild(
	"row2",
	$row2
);

$portfolio_single_navigation_button_h_shadow = new BurstMikadoField(
	"textsimple",
	"portfolio_single_navigation_button_h_shadow",
	"",
	esc_html__( "Horizontal shadow (px)", 'burst' ),
	""
);
$row2->addChild(
	"portfolio_single_navigation_button_h_shadow",
	$portfolio_single_navigation_button_h_shadow
);

$portfolio_single_navigation_button_v_shadow = new BurstMikadoField(
	"textsimple",
	"portfolio_single_navigation_button_v_shadow",
	"",
	esc_html__( "Vertical shadow (px)", 'burst' ),
	""
);
$row2->addChild(
	"portfolio_single_navigation_button_v_shadow",
	$portfolio_single_navigation_button_v_shadow
);

$portfolio_single_navigation_button_blur = new BurstMikadoField(
	"textsimple",
	"portfolio_single_navigation_button_blur",
	"",
	esc_html__( "Blur (px)", 'burst' ),
	""
);
$row2->addChild(
	"portfolio_single_navigation_button_blur",
	$portfolio_single_navigation_button_blur
);

$portfolio_single_navigation_button_spread = new BurstMikadoField(
	"textsimple",
	"portfolio_single_navigation_button_spread",
	"",
	esc_html__( "Spread (px)", 'burst' ),
	""
);
$row2->addChild(
	"portfolio_single_navigation_button_spread",
	$portfolio_single_navigation_button_spread
);

$portfolio_back_to_button_choice = new BurstMikadoField(
	"select",
	"portfolio_back_to_button_choice",
	"icon",
	esc_html__( "Back to Button Type", 'burst' ),
	esc_html__( "Choose Back to button type", 'burst' ),
	array(
		"icon" => esc_html__( "Icon", 'burst' ),
		"custom_icon" => esc_html__( "Custom Icon", 'burst' )
	),
	array(
		"dependence" => true,
		"show"       => array(
			"icon"        => "#mkdf_portfolio_back_to_button_icon_container",
			"custom_icon" => "#mkdf_portfolio_back_to_button_custom_container"
		),
		"hide"       => array(
			"custom_icon" => "#mkdf_portfolio_back_to_button_icon_container",
			"icon"        => "#mkdf_portfolio_back_to_button_custom_container"
		)
	)
);

$panel2->addChild(
	"portfolio_back_to_button_choice",
	$portfolio_back_to_button_choice
);

$portfolio_back_to_button_icon_container = new BurstMikadoContainer(
	"portfolio_back_to_button_icon_container",
	"portfolio_back_to_button_choice",
	"custom_icon"
);
$panel2->addChild(
	"portfolio_back_to_button_icon_container",
	$portfolio_back_to_button_icon_container
);

$group22 = new BurstMikadoGroup(
	esc_html__( "Icon and Style", 'burst' ),
	esc_html__( "Choose icon and style for it", 'burst' )
);
$portfolio_back_to_button_icon_container->addChild(
	"group22",
	$group22
);

$row1 = new BurstMikadoRow();
$group22->addChild(
	"row1",
	$row1
);

$portfolio_back_to_button_icon_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_back_to_button_icon_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_back_to_button_icon_color",
	$portfolio_back_to_button_icon_color
);

$portfolio_back_to_button_icon_hover_color = new BurstMikadoField(
	"colorsimple",
	"portfolio_back_to_button_icon_hover_color",
	"",
	esc_html__( "Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_back_to_button_icon_hover_color",
	$portfolio_back_to_button_icon_hover_color
);

$portfolio_back_to_button_icon = new BurstMikadoField(
	"selectsimple",
	"portfolio_back_to_button_icon",
	"",
	esc_html__( "Icon", 'burst' ),
	esc_html__( "Choose icon for Back to button", 'burst' ),
	array(
		"fa fa-th" => esc_html__( "fa-th grid", 'burst' ),
		"icon_grid-3x3" => esc_html__( "icon_grid 3x3", 'burst' ),
		"ion-grid" => esc_html__( "ion-grid", 'burst' )
	)
);
$row1->addChild(
	"portfolio_back_to_button_icon",
	$portfolio_back_to_button_icon
);

$portfolio_back_to_button_icon_size = new BurstMikadoField(
	"textsimple",
	"portfolio_back_to_button_icon_size",
	"",
	esc_html__( "Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"portfolio_back_to_button_icon_size",
	$portfolio_back_to_button_icon_size
);

$portfolio_back_to_button_custom_container = new BurstMikadoContainer(
	"portfolio_back_to_button_custom_container",
	"portfolio_back_to_button_choice",
	"icon"
);
$panel2->addChild(
	"portfolio_back_to_button_custom_container",
	$portfolio_back_to_button_custom_container
);

$portfolio_back_to_button_custom_icon = new BurstMikadoField(
	"image",
	"portfolio_back_to_button_custom_icon",
	"",
	esc_html__( "Custom Icon", 'burst' ),
	esc_html__( "Choose custom icon for Back to button", 'burst' )
);
$portfolio_back_to_button_custom_container->addChild(
	"portfolio_back_to_button_custom_icon",
	$portfolio_back_to_button_custom_icon
);

$portfolio_back_to_button_custom_hover_icon = new BurstMikadoField(
	"image",
	"portfolio_back_to_button_custom_hover_icon",
	"",
	esc_html__( "Custom Hover Icon", 'burst' ),
	esc_html__( "Choose custom hover icon for Back to button", 'burst' )
);
$portfolio_back_to_button_custom_container->addChild(
	"portfolio_back_to_button_custom_hover_icon",
	$portfolio_back_to_button_custom_hover_icon
);

$portfolio_back_to_button_custom_icon_retina_x15 = new BurstMikadoField(
	"image",
	"portfolio_back_to_button_custom_icon_retina_x15",
	"",
	esc_html__( "Custom Icon for Retina x1.5", 'burst' ),
	esc_html__( "Choose custom icon for Back to button for retina x1.5 (note that you must have Custom Icon first)", 'burst' )
);
$portfolio_back_to_button_custom_container->addChild(
	"portfolio_back_to_button_custom_icon_retina_x15",
	$portfolio_back_to_button_custom_icon_retina_x15
);

$portfolio_back_to_button_custom_hover_icon_retina_x15 = new BurstMikadoField(
	"image",
	"portfolio_back_to_button_custom_hover_icon_retina_x15",
	"",
	esc_html__( "Custom Hover Icon for Retina x1.5", 'burst' ),
	esc_html__( "Choose custom hover icon for Back to button for retina x1.5 (note that you must have Custom Icon first)", 'burst' )
);
$portfolio_back_to_button_custom_container->addChild(
	"portfolio_back_to_button_custom_hover_icon_retina_x15",
	$portfolio_back_to_button_custom_hover_icon_retina_x15
);

$portfolio_back_to_button_custom_icon_retina_x2 = new BurstMikadoField(
	"image",
	"portfolio_back_to_button_custom_icon_retina_x2",
	"",
	esc_html__( "Custom Icon for Retina x2", 'burst' ),
	esc_html__( "Choose custom icon for Back to button for retina x2 (note that you must have Custom Icon first)", 'burst' )
);
$portfolio_back_to_button_custom_container->addChild(
	"portfolio_back_to_button_custom_icon_retina_x2",
	$portfolio_back_to_button_custom_icon_retina_x2
);

$portfolio_back_to_button_custom_hover_icon_retina_x2 = new BurstMikadoField(
	"image",
	"portfolio_back_to_button_custom_hover_icon_retina_x2",
	"",
	esc_html__( "Custom Hover Icon for Retina x2", 'burst' ),
	esc_html__( "Choose custom hover icon for Back to button for retina x2 (note that you must have Custom Icon first)", 'burst' )
);
$portfolio_back_to_button_custom_container->addChild(
	"portfolio_back_to_button_custom_hover_icon_retina_x2",
	$portfolio_back_to_button_custom_hover_icon_retina_x2
);