<?php

$burst_mikado_IconCollections = burst_mikado_return_icon_collections();
$titlePage = new BurstMikadoAdminPage(
	"4",
	esc_html__( "Title", 'burst' ),
	"icon_archive_alt"
);
$burst_mikado_Framework->mkdOptions->addAdminPage(
	"title",
	$titlePage
);

$panel8 = new BurstMikadoPanel(
	esc_html__( "Title", 'burst' ),
	"title_panel"
);
$titlePage->addChild(
	"panel8",
	$panel8
);

$show_page_title = new BurstMikadoField(
	"yesno",
	"show_page_title",
	"yes",
	esc_html__( "Enable Page Title Area", 'burst' ),
	esc_html__( "This option will enable Title Area", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_enable_title_container"
	)
);
$panel8->addChild(
	"show_page_title",
	$show_page_title
);

$enable_title_container = new BurstMikadoContainer(
	"enable_title_container",
	"show_page_title",
	"no"
);
$panel8->addChild(
	"enable_title_container",
	$enable_title_container
);

$title_type = new BurstMikadoField(
	"select",
	"title_type",
	"standard_title",
	esc_html__( "Title Type", 'burst' ),
	esc_html__( "Choose title type", 'burst' ),
	array(
		"standard_title" => esc_html__( "Standard", 'burst' ),
		"breadcrumbs_title" => esc_html__( "Breadcrumb", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array( "breadcrumbs_title" => "#mkdf_title_standard_container" ),
		"show"       => array( "standard_title" => "#mkdf_title_standard_container" )
	)
);
$enable_title_container->addChild(
	"title_type",
	$title_type
);

$animate_title_area = new BurstMikadoField(
	"select",
	"animate_title_area",
	"no",
	esc_html__( "Animations", 'burst' ),
	esc_html__( "Choose an animation for Title Area", 'burst' ),
	array(
		"no" => esc_html__( "No animation", 'burst' ),
		"text_right_left" => esc_html__( "Text right to left", 'burst' ),
		"area_top_bottom" => esc_html__( "Title area top to bottom", 'burst' )
	)
);
$enable_title_container->addChild(
	"animate_title_area",
	$animate_title_area
);

$page_title_vertical_aligment = new BurstMikadoField(
	"select",
	"page_title_vertical_aligment",
	"header_bottom",
	esc_html__( "Vertical Alignment", 'burst' ),
	esc_html__( "Specify Title vertical alignment", 'burst' ),
	array(
		"header_bottom" => esc_html__( "From Bottom of Header", 'burst' ),
		"window_top" => esc_html__( "From Window Top", 'burst' )
	)
);
$enable_title_container->addChild(
	"page_title_vertical_aligment",
	$page_title_vertical_aligment
);

$show_page_title_text = new BurstMikadoField(
	"yesno",
	"show_page_title_text",
	"yes",
	esc_html__( "Enable Page Title Text", 'burst' ),
	esc_html__( "This option will enable Title Text", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_enable_title_text_container, #mkdf_animation_page_title_contaier"
	)
);
$enable_title_container->addChild(
	"show_page_title_text",
	$show_page_title_text
);

$enable_title_text_container = new BurstMikadoContainer(
	"enable_title_text_container",
	"show_page_title_text",
	"no"
);
$enable_title_container->addChild(
	"enable_title_text_container",
	$enable_title_text_container
);

$predefined_title_sizes = new BurstMikadoField(
	"select",
	"predefined_title_sizes",
	"small",
	esc_html__( "Text Size", 'burst' ),
	esc_html__( "Choose a default Title size", 'burst' ),
	array(
		"small" => esc_html__( "Small", 'burst' ),
		"medium" => esc_html__( "Medium", 'burst' ),
		"large" => esc_html__( "Large", 'burst' )
	)
);
$enable_title_text_container->addChild(
	"predefined_title_sizes",
	$predefined_title_sizes
);

$title_text_shadow = new BurstMikadoField(
	"yesno",
	"title_text_shadow",
	"no",
	esc_html__( "Title Text Shadow", 'burst' ),
	esc_html__( "Enabling this option will give Title text a shadow", 'burst' )
);
$enable_title_text_container->addChild(
	"title_text_shadow",
	$title_text_shadow
);

$page_title_position = new BurstMikadoField(
	"select",
	"page_title_position",
	"left",
	esc_html__( "Title Content Alignment", 'burst' ),
	esc_html__( "Specify title content alignment", 'burst' ),
	array(
		"left" => esc_html__( "Left", 'burst' ),
		"center" => esc_html__( "Center", 'burst' ),
		"right" => esc_html__( "Right", 'burst' )
	)
);
$enable_title_container->addChild(
	"page_title_position",
	$page_title_position
);

$title_standard_container = new BurstMikadoContainer(
	"title_standard_container",
	"title_type",
	"breadcrumbs_title"
);
$enable_title_container->addChild(
	"title_standard_container",
	$title_standard_container
);

//Title like separator with text
$title_like_separator = new BurstMikadoField(
	"yesno",
	"title_like_separator",
	"no",
	esc_html__( "Separator Around Title Text", 'burst' ),
	esc_html__( "Enable separator around title", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_title_like_separator_container"
	)
);
$title_standard_container->addChild(
	"title_like_separator",
	$title_like_separator
);

$title_like_separator_container = new BurstMikadoContainer(
	"title_like_separator_container",
	"title_like_separator",
	"no"
);
$title_standard_container->addChild(
	"title_like_separator_container",
	$title_like_separator_container
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Line Styles", 'burst' ),
	esc_html__( "Choose style for separator line", 'burst' )
);
$title_like_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$title_like_separator_line_color = new BurstMikadoField(
	"colorsimple",
	"title_like_separator_line_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"title_like_separator_line_color",
	$title_like_separator_line_color
);

$title_like_separator_line_width = new BurstMikadoField(
	"textsimple",
	"title_like_separator_line_width",
	"",
	esc_html__( "Width", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"title_like_separator_line_width",
	$title_like_separator_line_width
);

$title_like_separator_line_thickness = new BurstMikadoField(
	"textsimple",
	"title_like_separator_line_thickness",
	"",
	esc_html__( "Thickness", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"title_like_separator_line_thickness",
	$title_like_separator_line_thickness
);

$title_like_separator_line_style = new BurstMikadoField(
	"selectsimple",
	"title_like_separator_line_style",
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
	"title_like_separator_line_style",
	$title_like_separator_line_style
);

$title_like_separator_margins = new BurstMikadoField(
	"text",
	"title_like_separator_margins",
	"",
	esc_html__( "Margins for Title", 'burst' ),
	esc_html__( "Define left/right margins for title from separator", 'burst' )
);
$title_like_separator_container->addChild(
	"title_like_separator_margins",
	$title_like_separator_margins
);

$title_like_separator_line_dots = new BurstMikadoField(
	"yesno",
	"title_like_separator_line_dots",
	"no",
	esc_html__( "Dots on The End of Lines", 'burst' ),
	esc_html__( "Enabling this option will give lines a dot next to title", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_title_like_separator_dots_container"
	)
);
$title_like_separator_container->addChild(
	"title_like_separator_line_dots",
	$title_like_separator_line_dots
);

$title_like_separator_dots_container = new BurstMikadoContainer(
	"title_like_separator_dots_container",
	"title_like_separator_line_dots",
	"no"
);
$title_like_separator_container->addChild(
	"title_like_separator_dots_container",
	$title_like_separator_dots_container
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Dots Style", 'burst' ),
	esc_html__( "Choose style for dots", 'burst' )
);
$title_like_separator_dots_container->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$title_like_separator_dots_size = new BurstMikadoField(
	"textsimple",
	"title_like_separator_dots_size",
	"",
	esc_html__( "Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"title_like_separator_dots_size",
	$title_like_separator_dots_size
);

$title_like_separator_dots_color = new BurstMikadoField(
	"colorsimple",
	"title_like_separator_dots_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"title_like_separator_dots_color",
	$title_like_separator_dots_color
);

//Subtitle like separator with text
$subtitle_like_separator = new BurstMikadoField(
	"yesno",
	"subtitle_like_separator",
	"no",
	esc_html__( "Separator Around Subtitle Text", 'burst' ),
	esc_html__( "Enable separator around subtitle", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_subtitle_like_separator_container"
	)
);
$title_standard_container->addChild(
	"subtitle_like_separator",
	$subtitle_like_separator
);

$subtitle_like_separator_container = new BurstMikadoContainer(
	"subtitle_like_separator_container",
	"subtitle_like_separator",
	"no"
);
$title_standard_container->addChild(
	"subtitle_like_separator_container",
	$subtitle_like_separator_container
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Line Styles", 'burst' ),
	esc_html__( "Choose style for separator line", 'burst' )
);
$subtitle_like_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$subtitle_like_separator_line_color = new BurstMikadoField(
	"colorsimple",
	"subtitle_like_separator_line_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"subtitle_like_separator_line_color",
	$subtitle_like_separator_line_color
);

$subtitle_like_separator_line_width = new BurstMikadoField(
	"textsimple",
	"subtitle_like_separator_line_width",
	"",
	esc_html__( "Width", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"subtitle_like_separator_line_width",
	$subtitle_like_separator_line_width
);

$subtitle_like_separator_line_thickness = new BurstMikadoField(
	"textsimple",
	"subtitle_like_separator_line_thickness",
	"",
	esc_html__( "Thickness", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"subtitle_like_separator_line_thickness",
	$subtitle_like_separator_line_thickness
);

$subtitle_like_separator_line_style = new BurstMikadoField(
	"selectsimple",
	"subtitle_like_separator_line_style",
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
	"subtitle_like_separator_line_style",
	$subtitle_like_separator_line_style
);

$subtitle_like_separator_margins = new BurstMikadoField(
	"text",
	"subtitle_like_separator_margins",
	"",
	esc_html__( "Margins for Subtitle", 'burst' ),
	esc_html__( "Define left/right margins for subtitle from separator", 'burst' )
);
$subtitle_like_separator_container->addChild(
	"subtitle_like_separator_margins",
	$subtitle_like_separator_margins
);

$title_background_color = new BurstMikadoField(
	"color",
	"title_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Choose a background color for Title Area", 'burst' )
);
$enable_title_container->addChild(
	"title_background_color",
	$title_background_color
);

$title_image = new BurstMikadoField(
	"image",
	"title_image",
	"",
	esc_html__( "Background Image", 'burst' ),
	esc_html__( "Choose an Image for Title Area", 'burst' )
);
$enable_title_container->addChild(
	"title_image",
	$title_image
);

$responsive_title_image = new BurstMikadoField(
	"yesno",
	"responsive_title_image",
	"no",
	esc_html__( "Background Responsive Image", 'burst' ),
	esc_html__( "Enabling this option will make Title background image responsive", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#mkdf_responsive_title_image_container",
		"dependence_show_on_yes" => ""
	)
);
$enable_title_container->addChild(
	"responsive_title_image",
	$responsive_title_image
);

$responsive_title_image_container = new BurstMikadoContainer(
	"responsive_title_image_container",
	"responsive_title_image",
	"yes"
);
$enable_title_container->addChild(
	"responsive_title_image_container",
	$responsive_title_image_container
);
$fixed_title_image = new BurstMikadoField(
	"select",
	"fixed_title_image",
	"no",
	esc_html__( "Parallax Title Image", 'burst' ),
	esc_html__( "Enabling this option will make Title image parallax", 'burst' ),
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' ),
		"yes_zoom" => esc_html__( "Yes, with zoom out", 'burst' )
	)
);
$responsive_title_image_container->addChild(
	"fixed_title_image",
	$fixed_title_image
);
$title_height = new BurstMikadoField(
	"text",
	"title_height",
	"",
	esc_html__( "Title Height (px)", 'burst' ),
	esc_html__( "Set a height for Title Area in pixels", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$responsive_title_image_container->addChild(
	"title_height",
	$title_height
);

$title_overlay_image = new BurstMikadoField(
	"image",
	"title_overlay_image",
	"",
	esc_html__( "Pattern Overlay Image", 'burst' ),
	esc_html__( "Choose an image to be used as pattern over Title Area", 'burst' )
);
$enable_title_container->addChild(
	"title_overlay_image",
	$title_overlay_image
);

$enable_title_oblique = new BurstMikadoField(
	"yesno",
	"enable_title_oblique",
	"no",
	esc_html__( "Enable Angled Shape in Background", 'burst' ),
	esc_html__( "Enabling this option will show angled shape in background", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_enable_title_oblique_container"
	)
);
$enable_title_container->addChild(
	"enable_title_oblique",
	$enable_title_oblique
);

$enable_title_oblique_container = new BurstMikadoContainer(
	"enable_title_oblique_container",
	"enable_title_oblique",
	"no"
);
$enable_title_container->addChild(
	"enable_title_oblique_container",
	$enable_title_oblique_container
);

$title_oblique_section_position = new BurstMikadoField(
	"select",
	"title_oblique_section_position",
	"",
	esc_html__( "Angled Shape Position", 'burst' ),
	esc_html__( "Choose a position for angled shape in title background", 'burst' ),
	array(
		"from_left_to_right" => esc_html__( "From Left To Right", 'burst' ),
		"from_right_to_left" => esc_html__( "From Right To Left", 'burst' )
	)
);
$enable_title_oblique_container->addChild(
	"title_oblique_section_position",
	$title_oblique_section_position
);

$title_oblique_section_color = new BurstMikadoField(
	"color",
	"title_oblique_section_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Choose a background color for angled shape", 'burst' )
);
$enable_title_oblique_container->addChild(
	"title_oblique_section_color",
	$title_oblique_section_color
);

$title_separator = new BurstMikadoField(
	"yesno",
	"title_separator",
	"no",
	esc_html__( "Show Title Separator", 'burst' ),
	esc_html__( "Enabling this option will display a separator underneath Title", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_title_separator_container, #mkdf_animation_page_title_separator_container"
	)
);
$title_standard_container->addChild(
	"title_separator",
	$title_separator
);

$title_separator_container = new BurstMikadoContainer(
	"title_separator_container",
	"title_separator",
	"no"
);
$title_standard_container->addChild(
	"title_separator_container",
	$title_separator_container
);

$title_separator_format = new BurstMikadoField(
	"select",
	"title_separator_format",
	"normal",
	esc_html__( "Format", 'burst' ),
	esc_html__( "Choose a format (type) of separator", 'burst' ),
	array(
		"normal" => esc_html__( "Normal", 'burst' ),
		"with_icon" => esc_html__( "With Icon", 'burst' ),
		"with_custom_icon" => esc_html__( "With Custom Icon", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"normal"           => "#mkdf_separator_with_icon_container, #mkdf_separator_custom_icon_container, #mkdf_separator_all_icons_container",
			"with_custom_icon" => "#mkdf_separator_with_icon_container",
			"with_icon"        => "#mkdf_separator_custom_icon_container"
		),
		"show"       => array(
			"with_icon"        => "#mkdf_separator_with_icon_container, #mkdf_separator_all_icons_container",
			"with_custom_icon" => "#mkdf_separator_custom_icon_container, #mkdf_separator_all_icons_container"
		)
	)
);

$title_separator_container->addChild(
	"title_separator_format",
	$title_separator_format
);

$separator_all_icons_container = new BurstMikadoContainer(
	"separator_all_icons_container",
	"title_separator_format",
	"normal"
);
$title_separator_container->addChild(
	"separator_all_icons_container",
	$separator_all_icons_container
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Icon Position and Margins", 'burst' ),
	esc_html__( "Choose icon position and set left(right) margin", 'burst' )
);
$separator_all_icons_container->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$title_separator_icon_position = new BurstMikadoField(
	"selectsimple",
	"title_separator_icon_position",
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
	"title_separator_icon_position",
	$title_separator_icon_position
);

$title_separator_icon_margins = new BurstMikadoField(
	"textsimple",
	"title_separator_icon_margins",
	"",
	esc_html__( "Margins (px)", 'burst' ),
	esc_html__( "Enter margin that will refer to left and right margin of the icon", 'burst' )
);
$row1->addChild(
	"title_separator_icon_margins",
	$title_separator_icon_margins
);

$separator_with_icon_container = new BurstMikadoContainer(
	"separator_with_icon_container",
	"title_separator_format",
	"normal",
	array( "normal", "with_custom_icon" )
);
$title_separator_container->addChild(
	"separator_with_icon_container",
	$separator_with_icon_container
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$separator_icon_pack_hide_array = array();
$separator_icon_pack_show_array = array();

//do we have some collection added in collections array?
if ( is_array( $burst_mikado_IconCollections->iconCollections ) && count( $burst_mikado_IconCollections->iconCollections ) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$separator_icon_collections_params = $burst_mikado_IconCollections->getIconCollectionsParams();
	
	//foreach collection generate hide and show array
	foreach ( $burst_mikado_IconCollections->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$separator_icon_pack_hide_array[ $dep_collection_key ] = '';
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$separator_icon_pack_show_array[ $dep_collection_key ] = '#mkdf_separator_icon_' . $dep_collection_object->param . '_container';
		
		//for all collections param generate hide string
		foreach ( $separator_icon_collections_params as $separator_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $separator_icon_collections_param !== $dep_collection_object->param ) {
				$separator_icon_pack_hide_array[ $dep_collection_key ] .= '#mkdf_separator_icon_' . $separator_icon_collections_param . '_container,';
			}
		}
		
		//remove remaining ',' character
		$separator_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$separator_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
	}
	
}

$separator_icon_pack = new BurstMikadoField(
	"select",
	"separator_icon_pack",
	"font_awesome",
	esc_html__( "Separator Icon Pack", 'burst' ),
	esc_html__( "Choose icon pack for separator", 'burst' ),
	$burst_mikado_IconCollections->getIconCollections(),
	array(
		"dependence" => true,
		"hide"       => $separator_icon_pack_hide_array,
		"show"       => $separator_icon_pack_show_array
	)
);

$separator_with_icon_container->addChild(
	"separator_icon_pack",
	$separator_icon_pack
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
		
		$separator_icon_hide_values = $icon_collections_keys;
		$separator_icon_container   = new BurstMikadoContainer(
			"separator_icon_" . $collection_object->param . "_container",
			"separator_icon_pack",
			"",
			$separator_icon_hide_values
		);
		$separator_icon             = new BurstMikadoField(
			"select",
			"separator_icon_" . $collection_object->param,
			"",
			esc_html__( "Separator Icon", 'burst' ),
			esc_html__( "Choose Separator Icon", 'burst' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$separator_icon_container->addChild(
			"separator_icon_" . $collection_object->param,
			$separator_icon
		);
		
		$separator_with_icon_container->addChild(
			"separator_icon_" . $collection_object->param . "_container",
			$separator_icon_container
		);
	}
	
}

$group1 = new BurstMikadoGroup(
	esc_html__( "Icon Style", 'burst' ),
	esc_html__( "Choose icon style", 'burst' )
);
$separator_with_icon_container->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$title_separator_icon_color = new BurstMikadoField(
	"colorsimple",
	"title_separator_icon_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "Choose a color of icon for Title separator", 'burst' )
);
$row1->addChild(
	"title_separator_icon_color",
	$title_separator_icon_color
);

$title_separator_icon_hover_color = new BurstMikadoField(
	"colorsimple",
	"title_separator_icon_hover_color",
	"",
	esc_html__( "Hover Color", 'burst' ),
	esc_html__( "Choose a hover color of icon for Title separator", 'burst' )
);
$row1->addChild(
	"title_separator_icon_hover_color",
	$title_separator_icon_hover_color
);

$title_separator_icon_custom_size = new BurstMikadoField(
	"textsimple",
	"title_separator_icon_custom_size",
	"",
	esc_html__( "Icon Size", 'burst' ),
	esc_html__( "Choose size of icon", 'burst' )
);
$row1->addChild(
	"title_separator_icon_custom_size",
	$title_separator_icon_custom_size
);

$title_separator_icon_type = new BurstMikadoField(
	"select",
	"title_separator_icon_type",
	"normal",
	esc_html__( "Icon Type", 'burst' ),
	esc_html__( "Choose icon type", 'burst' ),
	array(
		"normal" => esc_html__( "Normal", 'burst' ),
		"circle" => esc_html__( "Circle", 'burst' ),
		"square" => esc_html__( "Square", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array( "normal" => "#mkdf_title_separator_types_container" ),
		"show"       => array(
			"circle" => "#mkdf_title_separator_types_container",
			"square" => "#mkdf_title_separator_types_container"
		)
	)
);
$separator_with_icon_container->addChild(
	"title_separator_icon_type",
	$title_separator_icon_type
);

$title_separator_types_container = new BurstMikadoContainer(
	"title_separator_types_container",
	"title_separator_icon_type",
	"normal"
);
$separator_with_icon_container->addChild(
	"title_separator_types_container",
	$title_separator_types_container
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Border Style", 'burst' ),
	esc_html__( "Define border style for icon", 'burst' )
);
$title_separator_types_container->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$title_separator_icon_border_radius = new BurstMikadoField(
	"textsimple",
	"title_separator_icon_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "Enter border radius for icon", 'burst' )
);
$row1->addChild(
	"title_separator_icon_border_radius",
	$title_separator_icon_border_radius
);

$title_separator_icon_border_width = new BurstMikadoField(
	"textsimple",
	"title_separator_icon_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "Enter border width for icon", 'burst' )
);
$row1->addChild(
	"title_separator_icon_border_width",
	$title_separator_icon_border_width
);

$title_separator_icon_border_color = new BurstMikadoField(
	"colorsimple",
	"title_separator_icon_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "Enter border color for icon", 'burst' )
);
$row1->addChild(
	"title_separator_icon_border_color",
	$title_separator_icon_border_color
);

$title_separator_icon_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"title_separator_icon_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "Enter border color for icon", 'burst' )
);
$row1->addChild(
	"title_separator_icon_border_hover_color",
	$title_separator_icon_border_hover_color
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Additional Icon Style", 'burst' ),
	esc_html__( "Choose adition icon styling", 'burst' )
);
$title_separator_types_container->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$title_separator_icon_shape_size = new BurstMikadoField(
	"textsimple",
	"title_separator_icon_shape_size",
	"",
	esc_html__( "Shape Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"title_separator_icon_shape_size",
	$title_separator_icon_shape_size
);

$title_separator_icon_background_color = new BurstMikadoField(
	"colorsimple",
	"title_separator_icon_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"title_separator_icon_background_color",
	$title_separator_icon_background_color
);

$title_separator_icon_background_hover_color = new BurstMikadoField(
	"colorsimple",
	"title_separator_icon_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"title_separator_icon_background_hover_color",
	$title_separator_icon_background_hover_color
);

$separator_custom_icon_container = new BurstMikadoContainer(
	"separator_custom_icon_container",
	"title_separator_format",
	"normal",
	array( "normal", "with_icon" )
);
$title_separator_container->addChild(
	"separator_custom_icon_container",
	$separator_custom_icon_container
);

$separator_custom_icon = new BurstMikadoField(
	"image",
	"separator_custom_icon",
	"",
	esc_html__( "Custom Icon", 'burst' ),
	esc_html__( "Choose custom icon for separator", 'burst' )
);
$separator_custom_icon_container->addChild(
	"separator_custom_icon",
	$separator_custom_icon
);

$title_separator_type = new BurstMikadoField(
	"select",
	"title_separator_type",
	"",
	esc_html__( "Type", 'burst' ),
	esc_html__( "Choose a Title separator line style", 'burst' ),
	array(
		""       => "",
		"solid" => esc_html__( "Solid", 'burst' ),
		"dashed" => esc_html__( "Dashed", 'burst' )
	)
);
$title_separator_container->addChild(
	"title_separator_type",
	$title_separator_type
);

$title_separator_position = new BurstMikadoField(
	"select",
	"title_separator_position",
	"",
	esc_html__( "Position", 'burst' ),
	esc_html__( "Choose a Title separator position", 'burst' ),
	array(
		""      => "",
		"above" => esc_html__( "Above Title", 'burst' ),
		"below" => esc_html__( "Below Title", 'burst' )
	)
);
$title_separator_container->addChild(
	"title_separator_position",
	$title_separator_position
);

$title_separator_color = new BurstMikadoField(
	"color",
	"title_separator_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "Choose a color for Title separator", 'burst' )
);
$title_separator_container->addChild(
	"title_separator_color",
	$title_separator_color
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Size", 'burst' ),
	esc_html__( 'Define size for Title separator', 'burst' )
);
$title_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$title_separator_thickness = new BurstMikadoField(
	"textsimple",
	"title_separator_thickness",
	"",
	esc_html__( "Thickness (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"title_separator_thickness",
	$title_separator_thickness
);

$title_separator_width = new BurstMikadoField(
	"textsimple",
	"title_separator_width",
	"",
	esc_html__( "Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"title_separator_width",
	$title_separator_width
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Margin", 'burst' ),
	esc_html__( 'Add space at top and bottom of Title separator', 'burst' )
);
$title_separator_container->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$title_separator_topmargin = new BurstMikadoField(
	"textsimple",
	"title_separator_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"title_separator_topmargin",
	$title_separator_topmargin
);

$title_separator_bottommargin = new BurstMikadoField(
	"textsimple",
	"title_separator_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"title_separator_bottommargin",
	$title_separator_bottommargin
);

$border_top_title_area = new BurstMikadoField(
	"yesno",
	"border_top_title_area",
	"no",
	esc_html__( "Top Border", 'burst' ),
	esc_html__( "Enabling this option will display top border on Title Area", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_border_top_title_area_container"
	)
);
$enable_title_container->addChild(
	"border_top_title_area",
	$border_top_title_area
);

$border_top_title_area_container = new BurstMikadoContainer(
	"border_top_title_area_container",
	"border_top_title_area",
	"no"
);
$enable_title_container->addChild(
	"border_top_title_area_container",
	$border_top_title_area_container
);

$enable_title_border_grid = new BurstMikadoField(
	"yesno",
	"enable_title_border_grid",
	"no",
	esc_html__( "Enable Border in Grid", 'burst' ),
	esc_html__( "This option will show title top border in grid", 'burst' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => ''
	)
);
$border_top_title_area_container->addChild(
	"enable_title_border_grid",
	$enable_title_border_grid
);

$border_top_title_area_width = new BurstMikadoField(
	"text",
	"border_top_title_area_width",
	"",
	esc_html__( "Top Border Width (px)", 'burst' ),
	esc_html__( "Choose a width for Title Area top border", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$border_top_title_area_container->addChild(
	"border_top_title_area_width",
	$border_top_title_area_width
);
$border_top_title_area_color = new BurstMikadoField(
	"color",
	"border_top_title_area_color",
	"",
	esc_html__( "Top Border Color", 'burst' ),
	esc_html__( "Choose a color for Title Area top border", 'burst' )
);
$border_top_title_area_container->addChild(
	"border_top_title_area_color",
	$border_top_title_area_color
);

$border_bottom_title_area = new BurstMikadoField(
	"yesno",
	"border_bottom_title_area",
	"yes",
	esc_html__( "Bottom Border", 'burst' ),
	esc_html__( "Enabling this option will display bottom border on Title Area", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_border_bottom_title_area_container"
	)
);
$enable_title_container->addChild(
	"border_bottom_title_area",
	$border_bottom_title_area
);

$border_bottom_title_area_container = new BurstMikadoContainer(
	"border_bottom_title_area_container",
	"border_bottom_title_area",
	"no"
);
$enable_title_container->addChild(
	"border_bottom_title_area_container",
	$border_bottom_title_area_container
);

$enable_title_bottom_border_grid = new BurstMikadoField(
	"yesno",
	"enable_title_bottom_border_grid",
	"no",
	esc_html__( "Enable Border in Grid", 'burst' ),
	esc_html__( "This option will show title bottom border in grid", 'burst' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => ''
	)
);
$border_bottom_title_area_container->addChild(
	"enable_title_bottom_border_grid",
	$enable_title_bottom_border_grid
);

$border_bottom_title_area_width = new BurstMikadoField(
	"text",
	"border_bottom_title_area_width",
	"",
	esc_html__( "Bottom Border Width (px)", 'burst' ),
	esc_html__( "Choose a width for Title Area bottom border", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$border_bottom_title_area_container->addChild(
	"border_bottom_title_area_width",
	$border_bottom_title_area_width
);
$border_bottom_title_area_color = new BurstMikadoField(
	"color",
	"border_bottom_title_area_color",
	"",
	esc_html__( "Bottom Border Color", 'burst' ),
	esc_html__( "Choose a color for Title Area bottom border", 'burst' )
);
$border_bottom_title_area_container->addChild(
	"border_bottom_title_area_color",
	$border_bottom_title_area_color
);

$enable_breadcrumbs = new BurstMikadoField(
	"yesno",
	"enable_breadcrumbs",
	"yes",
	esc_html__( "Enable Breadcrumbs", 'burst' ),
	esc_html__( "This option will display Breadcrumbs in Title Area", 'burst' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#mkdf_animation_page_title_breadcrumbs_container'
	)
);
$enable_title_container->addChild(
	"enable_breadcrumbs",
	$enable_breadcrumbs
);

$title_graphics = new BurstMikadoField(
	"image",
	"title_graphics",
	"",
	esc_html__( "Graphics", 'burst' ),
	esc_html__( "Choose graphics", 'burst' )
);
$title_standard_container->addChild(
	"title_graphics",
	$title_graphics
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Title Area Content Style", 'burst' ),
	esc_html__( 'Define style for Title Area Content', 'burst' )
);
$enable_title_container->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$title_content_background_color = new BurstMikadoField(
	"colorsimple",
	"title_content_background_color",
	"",
	esc_html__( "Title Content Background Color", 'burst' ),
	esc_html__( "Background color for title content", 'burst' )
);
$row1->addChild(
	"title_content_background_color",
	$title_content_background_color
);

$title_content_background_opacity = new BurstMikadoField(
	"textsimple",
	"title_content_background_opacity",
	"",
	esc_html__( "Title Content Background Opacity", 'burst' ),
	esc_html__( "Choose opacity for background color (0 = fully transparent, 1 = opaque)", 'burst' )
);
$row1->addChild(
	"title_content_background_opacity",
	$title_content_background_opacity
);

$title_content_in_grid = new BurstMikadoField(
	"yesno",
	"title_content_in_grid",
	"yes",
	esc_html__( "Title Area Content In Grid", 'burst' ),
	esc_html__( "This option will show title area content in grid", 'burst' )
);
$enable_title_container->addChild(
	"title_content_in_grid",
	$title_content_in_grid
);

$title_content_shadows = new BurstMikadoField(
	'yesno',
	'title_content_shadows',
	'no',
	esc_html__( 'Show Title Content Area Shadows', 'burst' ),
	esc_html__( 'Enabling this option will show shadows on title content area', 'burst' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#mkdf_title_content_shadows_container'
	)
);
$enable_title_container->addChild(
	'title_content_shadows',
	$title_content_shadows
);

$title_content_shadows_container = new BurstMikadoContainer(
	'title_content_shadows_container',
	'title_content_shadows',
	'no'
);
$enable_title_container->addChild(
	'title_content_shadows_container',
	$title_content_shadows_container
);

$group7 = new BurstMikadoGroup(
	esc_html__( 'Title Content Area Shadows', 'burst' ),
	esc_html__( 'Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.', 'burst' )
);
$title_content_shadows_container->addChild(
	'group7',
	$group7
);

$row1 = new BurstMikadoRow();
$group7->addChild(
	'row1',
	$row1
);

$title_content_shadow_horizontal_shadow = new BurstMikadoField(
	'textsimple',
	'title_content_shadow_horizontal_shadow',
	'',
	esc_html__( 'Horizontal Shadow (px)', 'burst' )
);
$row1->addChild(
	'title_content_shadow_horizontal_shadow',
	$title_content_shadow_horizontal_shadow
);

$title_content_shadow_vertical_shadow = new BurstMikadoField(
	'textsimple',
	'title_content_shadow_vertical_shadow',
	'',
	esc_html__( 'Vertical Shadow (px)', 'burst' )
);
$row1->addChild(
	'title_content_shadow_vertical_shadow',
	$title_content_shadow_vertical_shadow
);

$title_content_shadow_blur_distance = new BurstMikadoField(
	'textsimple',
	'title_content_shadow_blur_distance',
	'',
	esc_html__( 'Blur (px)', 'burst' )
);
$row1->addChild(
	'title_content_shadow_blur_distance',
	$title_content_shadow_blur_distance
);

$title_content_shadow_shadow_size = new BurstMikadoField(
	'textsimple',
	'title_content_shadow_shadow_size',
	'',
	esc_html__( 'Spread (px)', 'burst' )
);
$row1->addChild(
	'title_content_shadow_shadow_size',
	$title_content_shadow_shadow_size
);

$row2 = new BurstMikadoRow( true );
$group7->addChild(
	'row2',
	$row2
);

$title_content_shadow_shadow_color = new BurstMikadoField(
	'colorsimple',
	'title_content_shadow_shadow_color',
	'',
	esc_html__( 'Shadow color', 'burst' )
);
$row2->addChild(
	'title_content_shadow_shadow_color',
	$title_content_shadow_shadow_color
);

$group6 = new BurstMikadoGroup(
	esc_html__( "Title Area Content Padding", 'burst' ),
	esc_html__( "Define padding for title area content", 'burst' )
);
$enable_title_container->addChild(
	"group6",
	$group6
);

$row1 = new BurstMikadoRow();
$group6->addChild(
	"row1",
	$row1
);

$title_content_span_top_padding = new BurstMikadoField(
	"textsimple",
	"title_content_span_top_padding",
	"",
	esc_html__( "Top Padding", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"title_content_span_top_padding",
	$title_content_span_top_padding
);

$title_content_span_right_padding = new BurstMikadoField(
	"textsimple",
	"title_content_span_right_padding",
	"",
	esc_html__( "Right Padding", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"title_content_span_right_padding",
	$title_content_span_right_padding
);

$title_content_span_bottom_padding = new BurstMikadoField(
	"textsimple",
	"title_content_span_bottom_padding",
	"",
	esc_html__( "Bottom Padding", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"title_content_span_bottom_padding",
	$title_content_span_bottom_padding
);

$title_content_span_left_padding = new BurstMikadoField(
	"textsimple",
	"title_content_span_left_padding",
	"",
	esc_html__( "Left Padding", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"title_content_span_left_padding",
	$title_content_span_left_padding
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Title Style", 'burst' ),
	esc_html__( 'Define style for Title', 'burst' )
);
$enable_title_container->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$title_span_background_color = new BurstMikadoField(
	"colorsimple",
	"title_span_background_color",
	"",
	esc_html__( "Title Background Color", 'burst' ),
	esc_html__( "Background color for title", 'burst' )
);
$row1->addChild(
	"title_span_background_color",
	$title_span_background_color
);

$title_span_background_opacity = new BurstMikadoField(
	"textsimple",
	"title_span_background_opacity",
	"",
	esc_html__( "Title Background Opacity", 'burst' ),
	esc_html__( "Choose opacity for background color (0 = fully transparent, 1 = opaque)", 'burst' )
);
$row1->addChild(
	"title_span_background_opacity",
	$title_span_background_opacity
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Title Padding", 'burst' ),
	esc_html__( 'Define padding for Title', 'burst' )
);
$enable_title_container->addChild(
	"group3",
	$group3
);

$row1 = new BurstMikadoRow();
$group3->addChild(
	"row1",
	$row1
);

$title_span_top_padding = new BurstMikadoField(
	"textsimple",
	"title_span_top_padding",
	"",
	esc_html__( "Top Padding", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"title_span_top_padding",
	$title_span_top_padding
);

$title_span_right_padding = new BurstMikadoField(
	"textsimple",
	"title_span_right_padding",
	"",
	esc_html__( "Right Padding", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"title_span_right_padding",
	$title_span_right_padding
);

$title_span_bottom_padding = new BurstMikadoField(
	"textsimple",
	"title_span_bottom_padding",
	"",
	esc_html__( "Bottom Padding", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"title_span_bottom_padding",
	$title_span_bottom_padding
);

$title_span_left_padding = new BurstMikadoField(
	"textsimple",
	"title_span_left_padding",
	"",
	esc_html__( "Left Padding", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"title_span_left_padding",
	$title_span_left_padding
);

$subtitle_position = new BurstMikadoField(
	"select",
	"subtitle_position",
	"below_title",
	esc_html__( "Subtitle Position", 'burst' ),
	esc_html__( "Choose a Subtitle position", 'burst' ),
	array(
		"below_title" => esc_html__( "Below Title", 'burst' ),
		"above_title" => esc_html__( "Above Title", 'burst' ),
		"next_to_title" => esc_html__( "Next to Title", 'burst' )
	)
);
$enable_title_container->addChild(
	"subtitle_position",
	$subtitle_position
);

$group4 = new BurstMikadoGroup(
	esc_html__( "Subtitle Style", 'burst' ),
	esc_html__( 'Define style for subtitle', 'burst' )
);
$enable_title_container->addChild(
	"group4",
	$group4
);

$row1 = new BurstMikadoRow();
$group4->addChild(
	"row1",
	$row1
);

$subtitle_span_background_color = new BurstMikadoField(
	"colorsimple",
	"subtitle_span_background_color",
	"",
	esc_html__( "Subtitle Background Color", 'burst' ),
	esc_html__( "Background color for subtitle", 'burst' )
);
$row1->addChild(
	"subtitle_span_background_color",
	$subtitle_span_background_color
);

$subtitle_span_background_opacity = new BurstMikadoField(
	"textsimple",
	"subtitle_span_background_opacity",
	"",
	esc_html__( "Subtitle Background Opacity", 'burst' ),
	esc_html__( "Choose opacity for background color (0 = fully transparent, 1 = opaque)", 'burst' )
);
$row1->addChild(
	"subtitle_span_background_opacity",
	$subtitle_span_background_opacity
);

$group5 = new BurstMikadoGroup(
	esc_html__( "Subtitle Padding", 'burst' ),
	esc_html__( 'Define padding for subtitle', 'burst' )
);
$enable_title_container->addChild(
	"group5",
	$group5
);

$row1 = new BurstMikadoRow();
$group5->addChild(
	"row1",
	$row1
);

$subtitle_span_top_padding = new BurstMikadoField(
	"textsimple",
	"subtitle_span_top_padding",
	"",
	esc_html__( "Top Padding", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"subtitle_span_top_padding",
	$subtitle_span_top_padding
);

$subtitle_span_right_padding = new BurstMikadoField(
	"textsimple",
	"subtitle_span_right_padding",
	"",
	esc_html__( "Right Padding", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"subtitle_span_right_padding",
	$subtitle_span_right_padding
);

$subtitle_span_bottom_padding = new BurstMikadoField(
	"textsimple",
	"subtitle_span_bottom_padding",
	"",
	esc_html__( "Bottom Padding", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"subtitle_span_bottom_padding",
	$subtitle_span_bottom_padding
);

$subtitle_span_left_padding = new BurstMikadoField(
	"textsimple",
	"subtitle_span_left_padding",
	"",
	esc_html__( "Left Padding", 'burst' ),
	esc_html__( "This is some description.", 'burst' )
);
$row1->addChild(
	"subtitle_span_left_padding",
	$subtitle_span_left_padding
);

$panel9 = new BurstMikadoPanel(
	esc_html__( 'Title Animations', 'burst' ),
	'title_animations'
);
$titlePage->addChild(
	'panel9',
	$panel9
);

//Whole title content animation
$page_title_whole_content_animations = new BurstMikadoField(
	'yesno',
	'page_title_whole_content_animations',
	'no',
	esc_html__( 'Enable Whole Title Content Animation', 'burst' ),
	esc_html__( 'This option will enable whole title content animation', 'burst' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#mkdf_page_title_whole_content_animations_container'
	)
);
$panel9->addChild(
	'page_title_whole_content_animations',
	$page_title_whole_content_animations
);

$page_title_whole_content_animations_container = new BurstMikadoContainer(
	'page_title_whole_content_animations_container',
	'page_title_whole_content_animations',
	'no'
);
$panel9->addChild(
	'page_title_whole_content_animations_container',
	$page_title_whole_content_animations_container
);

$page_title_whole_content_animations_data_start = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation Start Point', 'burst' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'burst' )
);
$page_title_whole_content_animations_container->addChild(
	'page_title_whole_content_animations_data_start',
	$page_title_whole_content_animations_data_start
);

$row1 = new BurstMikadoRow();
$page_title_whole_content_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_whole_content_data_start = new BurstMikadoField(
	'textsimple',
	'page_title_whole_content_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row1->addChild(
	'page_title_whole_content_data_start',
	$page_title_whole_content_data_start
);

$page_title_whole_content_start_custom_style = new BurstMikadoField(
	'textareasimple',
	'page_title_whole_content_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row1->addChild(
	'page_title_whole_content_start_custom_style',
	$page_title_whole_content_start_custom_style
);

$page_title_whole_content_animations_data_end = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation End Point', 'burst' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'burst' )
);
$page_title_whole_content_animations_container->addChild(
	'page_title_whole_content_animations_data_end',
	$page_title_whole_content_animations_data_end
);

$row2 = new BurstMikadoRow();
$page_title_whole_content_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_whole_content_data_end = new BurstMikadoField(
	'textsimple',
	'page_title_whole_content_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row2->addChild(
	'page_title_whole_content_data_end',
	$page_title_whole_content_data_end
);

$page_title_whole_content_end_custom_style = new BurstMikadoField(
	'textareasimple',
	'page_title_whole_content_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row2->addChild(
	'page_title_whole_content_end_custom_style',
	$page_title_whole_content_end_custom_style
);

//Title Animations
$animation_page_title_contaier = new BurstMikadoContainerNoStyle(
	'animation_page_title_contaier',
	'show_page_title_text',
	'no'
);
$panel9->addChild(
	'animation_page_title_contaier',
	$animation_page_title_contaier
);

$page_title_animations = new BurstMikadoField(
	'yesno',
	'page_title_animations',
	'no',
	esc_html__( 'Enable Page Title Animations', 'burst' ),
	esc_html__( 'This option will enable Page Title Scroll Animations', 'burst' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#mkdf_page_title_animations_container'
	)
);
$animation_page_title_contaier->addChild(
	'page_title_animations',
	$page_title_animations
);

$page_title_animations_container = new BurstMikadoContainer(
	'page_title_animations_container',
	'page_title_animations',
	'no'
);
$animation_page_title_contaier->addChild(
	'page_title_animations_container',
	$page_title_animations_container
);

$page_title_animations_data_start = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation Start Point', 'burst' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'burst' )
);
$page_title_animations_container->addChild(
	'page_title_animations_data_start',
	$page_title_animations_data_start
);

$row1 = new BurstMikadoRow();
$page_title_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_data_start = new BurstMikadoField(
	'textsimple',
	'page_title_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row1->addChild(
	'page_title_data_start',
	$page_title_data_start
);

$page_title_start_custom_style = new BurstMikadoField(
	'textareasimple',
	'page_title_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row1->addChild(
	'page_title_start_custom_style',
	$page_title_start_custom_style
);

$page_title_animations_data_end = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation End Point', 'burst' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'burst' )
);
$page_title_animations_container->addChild(
	'page_title_animations_data_end',
	$page_title_animations_data_end
);

$row2 = new BurstMikadoRow();
$page_title_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_data_end = new BurstMikadoField(
	'textsimple',
	'page_title_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row2->addChild(
	'page_title_data_end',
	$page_title_data_end
);

$page_title_end_custom_style = new BurstMikadoField(
	'textareasimple',
	'page_title_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row2->addChild(
	'page_title_end_custom_style',
	$page_title_end_custom_style
);

//Title Separator Animations
$animation_page_title_separator_container = new BurstMikadoContainerNoStyle(
	'animation_page_title_separator_container',
	'title_separator',
	'no'
);
$panel9->addChild(
	'animation_page_title_separator_container',
	$animation_page_title_separator_container
);

$page_title_separator_animations = new BurstMikadoField(
	'yesno',
	'page_title_separator_animations',
	'no',
	esc_html__( 'Enable Page Separator Title Animations', 'burst' ),
	esc_html__( 'This option will enable Page Title Separator Scroll Animations', 'burst' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#mkdf_page_title_separator_animations_container'
	)
);
$animation_page_title_separator_container->addChild(
	'page_title_separator_animations',
	$page_title_separator_animations
);

$page_title_separator_animations_container = new BurstMikadoContainer(
	'page_title_separator_animations_container',
	'page_title_separator_animations',
	'no'
);
$animation_page_title_separator_container->addChild(
	'page_title_separator_animations_container',
	$page_title_separator_animations_container
);

$page_title_separator_animations_data_start = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation Start Point', 'burst' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'burst' )
);
$page_title_separator_animations_container->addChild(
	'page_title_separator_animations_data_start',
	$page_title_separator_animations_data_start
);

$row1 = new BurstMikadoRow();
$page_title_separator_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_separator_data_start = new BurstMikadoField(
	'textsimple',
	'page_title_separator_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row1->addChild(
	'page_title_separator_data_start',
	$page_title_separator_data_start
);

$page_title_separator_start_custom_style = new BurstMikadoField(
	'textareasimple',
	'page_title_separator_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row1->addChild(
	'page_title_separator_start_custom_style',
	$page_title_separator_start_custom_style
);

$page_title_separator_animations_data_end = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation End Point', 'burst' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'burst' )
);
$page_title_separator_animations_container->addChild(
	'page_title_separator_animations_data_end',
	$page_title_separator_animations_data_end
);

$row2 = new BurstMikadoRow();
$page_title_separator_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_separator_data_end = new BurstMikadoField(
	'textsimple',
	'page_title_separator_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row2->addChild(
	'page_title_separator_data_end',
	$page_title_separator_data_end
);

$page_title_separator_end_custom_style = new BurstMikadoField(
	'textareasimple',
	'page_title_separator_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row2->addChild(
	'page_title_separator_end_custom_style',
	$page_title_separator_end_custom_style
);

//Subtitle Animations
$page_subtitle_animations = new BurstMikadoField(
	'yesno',
	'page_subtitle_animations',
	'no',
	esc_html__( 'Enable Page Subtitle Animations', 'burst' ),
	esc_html__( 'This option will enable Page Subtitle Scroll Animations', 'burst' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#mkdf_page_subtitle_animations_container'
	)
);
$panel9->addChild(
	'page_subtitle_animations',
	$page_subtitle_animations
);

$page_subtitle_animations_container = new BurstMikadoContainer(
	'page_subtitle_animations_container',
	'page_subtitle_animations',
	'no'
);
$panel9->addChild(
	'page_subtitle_animations_container',
	$page_subtitle_animations_container
);

$page_subtitle_animations_data_start = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation Start Point', 'burst' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'burst' )
);
$page_subtitle_animations_container->addChild(
	'page_subtitle_animations_data_start',
	$page_subtitle_animations_data_start
);

$row1 = new BurstMikadoRow();
$page_subtitle_animations_data_start->addChild(
	'row1',
	$row1
);

$page_subtitle_data_start = new BurstMikadoField(
	'textsimple',
	'page_subtitle_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row1->addChild(
	'page_subtitle_data_start',
	$page_subtitle_data_start
);

$page_subtitle_start_custom_style = new BurstMikadoField(
	'textareasimple',
	'page_subtitle_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row1->addChild(
	'page_subtitle_start_custom_style',
	$page_subtitle_start_custom_style
);

$page_subtitle_animations_data_end = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation End Point', 'burst' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'burst' )
);
$page_subtitle_animations_container->addChild(
	'page_subtitle_animations_data_end',
	$page_subtitle_animations_data_end
);

$row2 = new BurstMikadoRow();
$page_subtitle_animations_data_end->addChild(
	'row2',
	$row2
);

$page_subtitle_data_end = new BurstMikadoField(
	'textsimple',
	'page_subtitle_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row2->addChild(
	'page_subtitle_data_end',
	$page_subtitle_data_end
);

$page_subtitle_end_custom_style = new BurstMikadoField(
	'textareasimple',
	'page_subtitle_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row2->addChild(
	'page_subtitle_end_custom_style',
	$page_subtitle_end_custom_style
);

//Graphic Animations
$page_title_graphic_animations = new BurstMikadoField(
	'yesno',
	'page_title_graphic_animations',
	'no',
	esc_html__( 'Enable Page Title Graphic Animations', 'burst' ),
	esc_html__( 'This option will enable Page Title Graphic Scroll Animations', 'burst' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#mkdf_page_title_graphic_animations_container'
	)
);
$panel9->addChild(
	'page_title_graphic_animations',
	$page_title_graphic_animations
);

$page_title_graphic_animations_container = new BurstMikadoContainer(
	'page_title_graphic_animations_container',
	'page_title_graphic_animations',
	'no'
);
$panel9->addChild(
	'page_title_graphic_animations_container',
	$page_title_graphic_animations_container
);

$page_title_graphic_animations_data_start = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation Start Point', 'burst' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'burst' )
);
$page_title_graphic_animations_container->addChild(
	'page_title_graphic_animations_data_start',
	$page_title_graphic_animations_data_start
);

$row1 = new BurstMikadoRow();
$page_title_graphic_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_graphic_data_start = new BurstMikadoField(
	'textsimple',
	'page_title_graphic_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row1->addChild(
	'page_title_graphic_data_start',
	$page_title_graphic_data_start
);

$page_title_graphic_start_custom_style = new BurstMikadoField(
	'textareasimple',
	'page_title_graphic_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row1->addChild(
	'page_title_graphic_start_custom_style',
	$page_title_graphic_start_custom_style
);

$page_title_graphic_animations_data_end = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation End Point', 'burst' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'burst' )
);
$page_title_graphic_animations_container->addChild(
	'$page_title_graphic_animations_data_end',
	$page_title_graphic_animations_data_end
);

$row2 = new BurstMikadoRow();
$page_title_graphic_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_graphic_data_end = new BurstMikadoField(
	'textsimple',
	'page_title_graphic_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row2->addChild(
	'page_title_graphic_data_end',
	$page_title_graphic_data_end
);

$page_title_graphic_end_custom_style = new BurstMikadoField(
	'textareasimple',
	'page_title_graphic_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row2->addChild(
	'page_title_graphic_end_custom_style',
	$page_title_graphic_end_custom_style
);

//Breadcrumb animations
$animation_page_title_breadcrumbs_container = new BurstMikadoContainerNoStyle(
	'animation_page_title_breadcrumbs_container',
	'enable_breadcrumbs',
	'no'
);
$panel9->addChild(
	'animation_page_title_breadcrumbs_container',
	$animation_page_title_breadcrumbs_container
);

$page_title_breadcrumbs_animations = new BurstMikadoField(
	'yesno',
	'page_title_breadcrumbs_animations',
	'no',
	esc_html__( 'Enable Page Title Breadcrumbs Animations', 'burst' ),
	esc_html__( 'This option will enable Page Title Breadcrumbs Scroll Animations', 'burst' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#mkdf_page_title_breadcrumbs_animations_container'
	)
);
$animation_page_title_breadcrumbs_container->addChild(
	'page_title_breadcrumbs_animations',
	$page_title_breadcrumbs_animations
);

$page_title_breadcrumbs_animations_container = new BurstMikadoContainer(
	'page_title_breadcrumbs_animations_container',
	'page_title_breadcrumbs_animations',
	'no'
);
$animation_page_title_breadcrumbs_container->addChild(
	'page_title_breadcrumbs_animations_container',
	$page_title_breadcrumbs_animations_container
);

$page_title_breadcrumbs_animations_data_start = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation Start Point', 'burst' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'burst' )
);
$page_title_breadcrumbs_animations_container->addChild(
	'page_title_breadcrumbs_animations_data_start',
	$page_title_breadcrumbs_animations_data_start
);

$row1 = new BurstMikadoRow();
$page_title_breadcrumbs_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_breadcrumbs_data_start = new BurstMikadoField(
	'textsimple',
	'page_title_breadcrumbs_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row1->addChild(
	'page_title_breadcrumbs_data_start',
	$page_title_breadcrumbs_data_start
);

$page_title_breadcrumbs_start_custom_style = new BurstMikadoField(
	'textareasimple',
	'page_title_breadcrumbs_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row1->addChild(
	'page_title_breadcrumbs_start_custom_style',
	$page_title_breadcrumbs_start_custom_style
);

$page_title_breadcrumbs_animations_data_end = new BurstMikadoGroup(
	esc_html__( 'Scrolling Animation End Point', 'burst' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'burst' )
);
$page_title_breadcrumbs_animations_container->addChild(
	'page_title_breadcrumbs_animations_data_end',
	$page_title_breadcrumbs_animations_data_end
);

$row2 = new BurstMikadoRow();
$page_title_breadcrumbs_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_breadcrumbs_data_end = new BurstMikadoField(
	'textsimple',
	'page_title_breadcrumbs_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'burst' )
);
$row2->addChild(
	'page_title_breadcrumbs_data_end',
	$page_title_breadcrumbs_data_end
);

$page_title_breadcrumbs_end_custom_style = new BurstMikadoField(
	'textareasimple',
	'page_title_breadcrumbs_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'burst' )
);
$row2->addChild(
	'page_title_breadcrumbs_end_custom_style',
	$page_title_breadcrumbs_end_custom_style
);