<?php

$visualComposerPage = new BurstMikadoAdminPage(
	'22',
	esc_html__( 'Visual Composer', 'burst' ),
	'icon_grid-3x3'
);
$burst_mikado_Framework->mkdOptions->addAdminPage(
	'visualComposerPage',
	$visualComposerPage
);

$panel1 = new BurstMikadoPanel(
	esc_html__( 'Visual Composer Grid Elements', 'burst' ),
	'vc_grid_elements'
);
$visualComposerPage->addChild(
	'panel1',
	$panel1
);

$enable_grid_elements = new BurstMikadoField(
	'yesno',
	'enable_grid_elements',
	'no',
	esc_html__( 'Enable Grid Elements', 'burst' ),
	esc_html__( 'Enabling this option will allow Visual Composer Grid Elements. NOTE: Enabling Grid Elements will disable Page Transition.', 'burst' ),
	array(),
	array(
		'dependence' => 'true',
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#mkdf_vc_grid_elements_style'
	)
);
$panel1->addChild(
	'enable_grid_elements',
	$enable_grid_elements
);

$panel2 = new BurstMikadoPanel(
	esc_html__( 'Visual Composer Grid Elements Style', 'burst' ),
	'vc_grid_elements_style',
	'enable_grid_elements',
	'no'
);
$visualComposerPage->addChild(
	'panel2',
	$panel2
);

$group1 = new BurstMikadoGroup(
	esc_html__( 'Button', 'burst' ),
	esc_html__( 'Define styles for grid button', 'burst' )
);
$panel2->addChild(
	'group1',
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$vc_grid_button_title_color = new BurstMikadoField(
	'colorsimple',
	'vc_grid_button_title_color',
	'',
	esc_html__( 'Text Color', 'burst' ),
	''
);
$row1->addChild(
	'vc_grid_button_title_color',
	$vc_grid_button_title_color
);
$vc_grid_button_title_hovercolor = new BurstMikadoField(
	'colorsimple',
	'vc_grid_button_title_hovercolor',
	'',
	esc_html__( 'Hover Color', 'burst' ),
	''
);
$row1->addChild(
	'vc_grid_button_title_hovercolor',
	$vc_grid_button_title_hovercolor
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	'row2',
	$row2
);

$vc_grid_button_title_google_fonts = new BurstMikadoField(
	'fontsimple',
	'vc_grid_button_title_google_fonts',
	'-1',
	esc_html__( 'Font Family', 'burst' ),
	''
);
$row2->addChild(
	'vc_grid_button_title_google_fonts',
	$vc_grid_button_title_google_fonts
);
$vc_grid_button_title_fontsize = new BurstMikadoField(
	'textsimple',
	'vc_grid_button_title_fontsize',
	'',
	esc_html__( 'Font Size (px)', 'burst' ),
	''
);
$row2->addChild(
	'vc_grid_button_title_fontsize',
	$vc_grid_button_title_fontsize
);
$vc_grid_button_title_lineheight = new BurstMikadoField(
	'textsimple',
	'vc_grid_button_title_lineheight',
	'',
	esc_html__( 'Line Height (px)', 'burst' ),
	''
);
$row2->addChild(
	'vc_grid_button_title_lineheight',
	$vc_grid_button_title_lineheight
);

$row3 = new BurstMikadoRow( true );
$group1->addChild(
	'row3',
	$row3
);

$vc_grid_button_title_fontstyle = new BurstMikadoField(
	'selectblanksimple',
	'vc_grid_button_title_fontstyle',
	'',
	esc_html__( 'Font Style', 'burst' ),
	'',
	burst_mikado_return_options_fontstyle()
);
$row3->addChild(
	'vc_grid_button_title_fontstyle',
	$vc_grid_button_title_fontstyle
);
$vc_grid_button_title_fontweight = new BurstMikadoField(
	'selectblanksimple',
	'vc_grid_button_title_fontweight',
	'',
	esc_html__( 'Font Weight', 'burst' ),
	'',
	burst_mikado_return_options_fontweight()
);
$row3->addChild(
	'vc_grid_button_title_fontweight',
	$vc_grid_button_title_fontweight
);
$vc_grid_button_title_letter_spacing = new BurstMikadoField(
	'textsimple',
	'vc_grid_button_title_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'burst' ),
	''
);
$row3->addChild(
	'vc_grid_button_title_letter_spacing',
	$vc_grid_button_title_letter_spacing
);

$row4 = new BurstMikadoRow( true );
$group1->addChild(
	'row4',
	$row4
);

$vc_grid_button_backgroundcolor = new BurstMikadoField(
	'colorsimple',
	'vc_grid_button_backgroundcolor',
	'',
	esc_html__( 'Background Color', 'burst' ),
	''
);
$row4->addChild(
	'vc_grid_button_backgroundcolor',
	$vc_grid_button_backgroundcolor
);
$vc_grid_button_backgroundcolor_hover = new BurstMikadoField(
	'colorsimple',
	'vc_grid_button_backgroundcolor_hover',
	'',
	esc_html__( 'Hover Background Color', 'burst' ),
	''
);
$row4->addChild(
	'vc_grid_button_backgroundcolor_hover',
	$vc_grid_button_backgroundcolor_hover
);
$vc_grid_button_border_color = new BurstMikadoField(
	'colorsimple',
	'vc_grid_button_border_color',
	'',
	esc_html__( 'Border Color', 'burst' ),
	''
);
$row4->addChild(
	'vc_grid_button_border_color',
	$vc_grid_button_border_color
);
$vc_grid_button_border_hover_color = new BurstMikadoField(
	'colorsimple',
	'vc_grid_button_border_hover_color',
	'',
	esc_html__( 'Border Hover color', 'burst' ),
	''
);
$row4->addChild(
	'vc_grid_button_border_hover_color',
	$vc_grid_button_border_hover_color
);

$row5 = new BurstMikadoRow( true );
$group1->addChild(
	'row5',
	$row5
);

$vc_grid_button_border_width = new BurstMikadoField(
	'textsimple',
	'vc_grid_button_border_width',
	'',
	esc_html__( 'Border Width (px)', 'burst' ),
	esc_html__( 'This is some description', 'burst' )
);
$row5->addChild(
	'vc_grid_button_border_width',
	$vc_grid_button_border_width
);
$vc_grid_button_border_radius = new BurstMikadoField(
	'textsimple',
	'vc_grid_button_border_radius',
	'',
	esc_html__( 'Border Radius (px)', 'burst' ),
	esc_html__( 'This is some description', 'burst' )
);
$row5->addChild(
	'vc_grid_button_border_radius',
	$vc_grid_button_border_radius
);

$group2 = new BurstMikadoGroup(
	esc_html__( 'Load More Button', 'burst' ),
	esc_html__( 'Define styles for grid load more button', 'burst' )
);
$panel2->addChild(
	'group2',
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$vc_grid_load_more_button_title_color = new BurstMikadoField(
	'colorsimple',
	'vc_grid_load_more_button_title_color',
	'',
	esc_html__( 'Text Color', 'burst' ),
	''
);
$row1->addChild(
	'vc_grid_load_more_button_title_color',
	$vc_grid_load_more_button_title_color
);
$vc_grid_load_more_button_title_hovercolor = new BurstMikadoField(
	'colorsimple',
	'vc_grid_load_more_button_title_hovercolor',
	'',
	esc_html__( 'Hover Color', 'burst' ),
	''
);
$row1->addChild(
	'vc_grid_load_more_button_title_hovercolor',
	$vc_grid_load_more_button_title_hovercolor
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	'row2',
	$row2
);

$vc_grid_load_more_button_title_google_fonts = new BurstMikadoField(
	'fontsimple',
	'vc_grid_load_more_button_title_google_fonts',
	'-1',
	esc_html__( 'Font Family', 'burst' ),
	''
);
$row2->addChild(
	'vc_grid_load_more_button_title_google_fonts',
	$vc_grid_load_more_button_title_google_fonts
);
$vc_grid_load_more_button_title_fontsize = new BurstMikadoField(
	'textsimple',
	'vc_grid_load_more_button_title_fontsize',
	'',
	esc_html__( 'Font Size (px)', 'burst' ),
	''
);
$row2->addChild(
	'vc_grid_load_more_button_title_fontsize',
	$vc_grid_load_more_button_title_fontsize
);
$vc_grid_load_more_button_title_lineheight = new BurstMikadoField(
	'textsimple',
	'vc_grid_load_more_button_title_lineheight',
	'',
	esc_html__( 'Line Height (px)', 'burst' ),
	''
);
$row2->addChild(
	'vc_grid_load_more_button_title_lineheight',
	$vc_grid_load_more_button_title_lineheight
);

$row3 = new BurstMikadoRow( true );
$group2->addChild(
	'row3',
	$row3
);

$vc_grid_load_more_button_title_fontstyle = new BurstMikadoField(
	'selectblanksimple',
	'vc_grid_load_more_button_title_fontstyle',
	'',
	esc_html__( 'Font Style', 'burst' ),
	'',
	burst_mikado_return_options_fontstyle()
);
$row3->addChild(
	'vc_grid_load_more_button_title_fontstyle',
	$vc_grid_load_more_button_title_fontstyle
);
$vc_grid_load_more_button_title_fontweight = new BurstMikadoField(
	'selectblanksimple',
	'vc_grid_load_more_button_title_fontweight',
	'',
	esc_html__( 'Font Weight', 'burst' ),
	'',
	burst_mikado_return_options_fontweight()
);
$row3->addChild(
	'vc_grid_load_more_button_title_fontweight',
	$vc_grid_load_more_button_title_fontweight
);
$vc_grid_load_more_button_title_letter_spacing = new BurstMikadoField(
	'textsimple',
	'vc_grid_load_more_button_title_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'burst' ),
	''
);
$row3->addChild(
	'vc_grid_load_more_button_title_letter_spacing',
	$vc_grid_load_more_button_title_letter_spacing
);

$row4 = new BurstMikadoRow( true );
$group2->addChild(
	'row4',
	$row4
);

$vc_grid_load_more_button_backgroundcolor = new BurstMikadoField(
	'colorsimple',
	'vc_grid_load_more_button_backgroundcolor',
	'',
	esc_html__( 'Background Color', 'burst' ),
	''
);
$row4->addChild(
	'vc_grid_load_more_button_backgroundcolor',
	$vc_grid_load_more_button_backgroundcolor
);
$vc_grid_load_more_button_backgroundcolor_hover = new BurstMikadoField(
	'colorsimple',
	'vc_grid_load_more_button_backgroundcolor_hover',
	'',
	esc_html__( 'Hover Background Color', 'burst' ),
	''
);
$row4->addChild(
	'vc_grid_load_more_button_backgroundcolor_hover',
	$vc_grid_load_more_button_backgroundcolor_hover
);
$vc_grid_load_more_button_border_color = new BurstMikadoField(
	'colorsimple',
	'vc_grid_load_more_button_border_color',
	'',
	esc_html__( 'Border Color', 'burst' ),
	''
);
$row4->addChild(
	'vc_grid_load_more_button_border_color',
	$vc_grid_load_more_button_border_color
);
$vc_grid_load_more_button_border_hover_color = new BurstMikadoField(
	'colorsimple',
	'vc_grid_load_more_button_border_hover_color',
	'',
	esc_html__( 'Border Hover color', 'burst' ),
	''
);
$row4->addChild(
	'vc_grid_load_more_button_border_hover_color',
	$vc_grid_load_more_button_border_hover_color
);

$row5 = new BurstMikadoRow( true );
$group2->addChild(
	'row5',
	$row5
);

$vc_grid_load_more_button_border_width = new BurstMikadoField(
	'textsimple',
	'vc_grid_load_more_button_border_width',
	'',
	esc_html__( 'Border Width (px)', 'burst' ),
	esc_html__( 'This is some description', 'burst' )
);
$row5->addChild(
	'vc_grid_load_more_button_border_width',
	$vc_grid_load_more_button_border_width
);
$vc_grid_load_more_button_border_radius = new BurstMikadoField(
	'textsimple',
	'vc_grid_load_more_button_border_radius',
	'',
	esc_html__( 'Border Radius (px)', 'burst' ),
	esc_html__( 'This is some description', 'burst' )
);
$row5->addChild(
	'vc_grid_load_more_button_border_radius',
	$vc_grid_load_more_button_border_radius
);

$group3 = new BurstMikadoGroup(
	esc_html__( 'Pagination', 'burst' ),
	esc_html__( 'Define styles for grid pagination', 'burst' )
);
$panel2->addChild(
	'group3',
	$group3
);

$row1 = new BurstMikadoRow();
$group3->addChild(
	'row1',
	$row1
);

$vc_grid_pagination_color = new BurstMikadoField(
	'colorsimple',
	'vc_grid_pagination_color',
	'',
	esc_html__( 'Color', 'burst' ),
	''
);
$row1->addChild(
	'vc_grid_pagination_color',
	$vc_grid_pagination_color
);
$vc_grid_pagination_hover_color = new BurstMikadoField(
	'colorsimple',
	'vc_grid_pagination_hover_color',
	'',
	esc_html__( 'Hover Color', 'burst' ),
	''
);
$row1->addChild(
	'vc_grid_pagination_hover_color',
	$vc_grid_pagination_hover_color
);
$vc_grid_pagination_background_color = new BurstMikadoField(
	'colorsimple',
	'vc_grid_pagination_background_color',
	'',
	esc_html__( 'Background Color', 'burst' ),
	''
);
$row1->addChild(
	'vc_grid_pagination_background_color',
	$vc_grid_pagination_background_color
);
$vc_grid_pagination_background_hover_color = new BurstMikadoField(
	'colorsimple',
	'vc_grid_pagination_background_hover_color',
	'',
	esc_html__( 'Background Hover Color', 'burst' ),
	''
);
$row1->addChild(
	'vc_grid_pagination_background_hover_color',
	$vc_grid_pagination_background_hover_color
);

$row2 = new BurstMikadoRow( true );
$group3->addChild(
	'row2',
	$row2
);

$vc_grid_pagination_border_color = new BurstMikadoField(
	'colorsimple',
	'vc_grid_pagination_border_color',
	'',
	esc_html__( 'Border Color', 'burst' ),
	''
);
$row2->addChild(
	'vc_grid_pagination_border_color',
	$vc_grid_pagination_border_color
);
$vc_grid_pagination_border_hover_color = new BurstMikadoField(
	'colorsimple',
	'vc_grid_pagination_border_hover_color',
	'',
	esc_html__( 'Border Hover Color', 'burst' ),
	''
);
$row2->addChild(
	'vc_grid_pagination_border_hover_color',
	$vc_grid_pagination_border_hover_color
);

$group5 = new BurstMikadoGroup(
	esc_html__( 'Filter', 'burst' ),
	esc_html__( 'Define styles for grid filter', 'burst' )
);
$panel2->addChild(
	'group5',
	$group5
);

$row1 = new BurstMikadoRow();
$group5->addChild(
	'row1',
	$row1
);

$vc_grid_portfolio_filter_color = new BurstMikadoField(
	"colorsimple",
	"vc_grid_portfolio_filter_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"vc_grid_portfolio_filter_color",
	$vc_grid_portfolio_filter_color
);
$vc_grid_portfolio_filter_hovercolor = new BurstMikadoField(
	"colorsimple",
	"vc_grid_portfolio_filter_hovercolor",
	"",
	esc_html__( "Hover/Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"vc_grid_portfolio_filter_hovercolor",
	$vc_grid_portfolio_filter_hovercolor
);
$vc_grid_portfolio_filter_font_size = new BurstMikadoField(
	"textsimple",
	"vc_grid_portfolio_filter_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"vc_grid_portfolio_filter_font_size",
	$vc_grid_portfolio_filter_font_size
);
$vc_grid_portfolio_filter_line_height = new BurstMikadoField(
	"textsimple",
	"vc_grid_portfolio_filter_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"vc_grid_portfolio_filter_line_height",
	$vc_grid_portfolio_filter_line_height
);

$row2 = new BurstMikadoRow( true );
$group5->addChild(
	'row2',
	$row2
);

$vc_grid_portfolio_filter_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"vc_grid_portfolio_filter_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"vc_grid_portfolio_filter_text_transform",
	$vc_grid_portfolio_filter_text_transform
);
$vc_grid_portfolio_filter_font_family = new BurstMikadoField(
	"fontsimple",
	"vc_grid_portfolio_filter_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"vc_grid_portfolio_filter_font_family",
	$vc_grid_portfolio_filter_font_family
);
$vc_grid_portfolio_filter_font_style = new BurstMikadoField(
	"selectblanksimple",
	"vc_grid_portfolio_filter_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"vc_grid_portfolio_filter_font_style",
	$vc_grid_portfolio_filter_font_style
);
$vc_grid_portfolio_filter_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"vc_grid_portfolio_filter_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"vc_grid_portfolio_filter_font_weight",
	$vc_grid_portfolio_filter_font_weight
);

$row3 = new BurstMikadoRow( true );
$group5->addChild(
	'row3',
	$row3
);

$vc_grid_portfolio_filter_letter_spacing = new BurstMikadoField(
	"textsimple",
	"vc_grid_portfolio_filter_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"vc_grid_portfolio_filter_letter_spacing",
	$vc_grid_portfolio_filter_letter_spacing
);
$vc_grid_portfolio_filter_margin_bottom = new BurstMikadoField(
	"textsimple",
	"vc_grid_portfolio_filter_margin_bottom",
	"",
	esc_html__( "Filter Bottom Margin (px)", 'burst' ),
	""
);
$row3->addChild(
	"vc_grid_portfolio_filter_margin_bottom",
	$vc_grid_portfolio_filter_margin_bottom
);

$group4 = new BurstMikadoGroup(
	esc_html__( 'Arrows', 'burst' ),
	esc_html__( 'Define styles for grid arrows', 'burst' )
);
$panel2->addChild(
	'group4',
	$group4
);

$row1 = new BurstMikadoRow();
$group4->addChild(
	'row1',
	$row1
);

$vc_grid_arrows_color = new BurstMikadoField(
	'colorsimple',
	'vc_grid_arrows_color',
	'',
	esc_html__( 'Color', 'burst' ),
	''
);
$row1->addChild(
	'vc_grid_arrows_color',
	$vc_grid_arrows_color
);