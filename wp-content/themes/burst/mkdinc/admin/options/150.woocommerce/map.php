<?php

$woocommercePage = new BurstMikadoAdminPage(
	"19",
	esc_html__( "WooCommerce", 'burst' ),
	"icon_cart_alt"
);
$burst_mikado_Framework->mkdOptions->addAdminPage(
	"woocommerce",
	$woocommercePage
);

// General
$panel3 = new BurstMikadoPanel(
	esc_html__( "General", 'burst' ),
	"general_panel"
);
$woocommercePage->addChild(
	"panel3",
	$panel3
);

$text_input_field_subtitle = new BurstMikadoTitle(
	"text_input_field_subtitle",
	esc_html__( "Text Input Fields", 'burst' )
);
$panel3->addChild(
	"text_input_field_subtitle",
	$text_input_field_subtitle
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Text Input Fields Text Style", 'burst' ),
	esc_html__( "Define text input fields style in Cart, Checkout, My Account", 'burst' )
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

$woo_input_text_color = new BurstMikadoField(
	"colorsimple",
	"woo_input_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_input_text_color",
	$woo_input_text_color
);

$woo_input_focus_text_color = new BurstMikadoField(
	"colorsimple",
	"woo_input_focus_text_color",
	"",
	esc_html__( "Focus Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_input_focus_text_color",
	$woo_input_focus_text_color
);

$group16 = new BurstMikadoGroup(
	esc_html__( "Text Input Fields Background", 'burst' ),
	esc_html__( "Define text input fields background", 'burst' )
);
$panel3->addChild(
	"group16",
	$group16
);

$row1 = new BurstMikadoRow();
$group16->addChild(
	"row1",
	$row1
);

$woo_input_background_color = new BurstMikadoField(
	"colorsimple",
	"woo_input_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_input_background_color",
	$woo_input_background_color
);

$woo_input_focus_background_color = new BurstMikadoField(
	"colorsimple",
	"woo_input_focus_background_color",
	"",
	esc_html__( "Focus Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_input_focus_background_color",
	$woo_input_focus_background_color
);

$group17 = new BurstMikadoGroup(
	esc_html__( "Text Input Fields Border", 'burst' ),
	esc_html__( "Define text input fields border", 'burst' )
);
$panel3->addChild(
	"group17",
	$group17
);

$row1 = new BurstMikadoRow();
$group17->addChild(
	"row1",
	$row1
);

$woo_input_border_color = new BurstMikadoField(
	"colorsimple",
	"woo_input_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_input_border_color",
	$woo_input_border_color
);

$woo_input_focus_border_color = new BurstMikadoField(
	"colorsimple",
	"woo_input_focus_border_color",
	"",
	esc_html__( "Focus Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_input_focus_border_color",
	$woo_input_focus_border_color
);

$woo_input_border_width = new BurstMikadoField(
	"textsimple",
	"woo_input_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_input_border_width",
	$woo_input_border_width
);

//Button

$button_all_shop_pages = new BurstMikadoTitle(
	"button_all_shop_pages",
	esc_html__( "Buttons", 'burst' )
);
$panel3->addChild(
	"button_all_shop_pages",
	$button_all_shop_pages
);

$group8 = new BurstMikadoGroup(
	esc_html__( "Button Text Style", 'burst' ),
	esc_html__( "Define button text style for all shop pages", 'burst' )
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

$woo_products_list_add_to_cart_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_list_add_to_cart_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_color",
	$woo_products_list_add_to_cart_color
);

$woo_products_list_add_to_cart_font_size = new BurstMikadoField(
	"textsimple",
	"woo_products_list_add_to_cart_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_font_size",
	$woo_products_list_add_to_cart_font_size
);

$woo_products_list_add_to_cart_line_height = new BurstMikadoField(
	"textsimple",
	"woo_products_list_add_to_cart_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_line_height",
	$woo_products_list_add_to_cart_line_height
);

$woo_products_list_add_to_cart_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_list_add_to_cart_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"woo_products_list_add_to_cart_text_transform",
	$woo_products_list_add_to_cart_text_transform
);

$row2 = new BurstMikadoRow( true );
$group8->addChild(
	"row2",
	$row2
);

$woo_products_list_add_to_cart_font_family = new BurstMikadoField(
	"fontsimple",
	"woo_products_list_add_to_cart_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_products_list_add_to_cart_font_family",
	$woo_products_list_add_to_cart_font_family
);

$woo_products_list_add_to_cart_font_style = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_list_add_to_cart_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"woo_products_list_add_to_cart_font_style",
	$woo_products_list_add_to_cart_font_style
);

$woo_products_list_add_to_cart_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_list_add_to_cart_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"woo_products_list_add_to_cart_font_weight",
	$woo_products_list_add_to_cart_font_weight
);

$woo_products_list_add_to_cart_letter_spacing = new BurstMikadoField(
	"textsimple",
	"woo_products_list_add_to_cart_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_products_list_add_to_cart_letter_spacing",
	$woo_products_list_add_to_cart_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$group8->addChild(
	"row3",
	$row3
);

$woo_products_list_add_to_cart_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_list_add_to_cart_hover_color",
	"",
	esc_html__( "Hover Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_products_list_add_to_cart_hover_color",
	$woo_products_list_add_to_cart_hover_color
);

$woo_products_list_add_to_cart_padding = new BurstMikadoField(
	"textsimple",
	"woo_products_list_add_to_cart_padding",
	"",
	esc_html__( "Padding Left/Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_products_list_add_to_cart_padding",
	$woo_products_list_add_to_cart_padding
);

$row4 = new BurstMikadoRow( true );
$group8->addChild(
	"row4",
	$row4
);

$group14 = new BurstMikadoGroup(
	esc_html__( "Button Background", 'burst' ),
	esc_html__( "Define button background", 'burst' )
);
$panel3->addChild(
	"group14",
	$group14
);

$row1 = new BurstMikadoRow();
$group14->addChild(
	"row1",
	$row1
);

$woo_products_list_add_to_cart_background_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_list_add_to_cart_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_background_color",
	$woo_products_list_add_to_cart_background_color
);

$woo_products_list_add_to_cart_background_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_list_add_to_cart_background_hover_color",
	"",
	esc_html__( "Hover Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_background_hover_color",
	$woo_products_list_add_to_cart_background_hover_color
);

$group15 = new BurstMikadoGroup(
	esc_html__( "Button Border", 'burst' ),
	esc_html__( "Define button border", 'burst' )
);
$panel3->addChild(
	"group15",
	$group15
);

$row1 = new BurstMikadoRow();
$group15->addChild(
	"row1",
	$row1
);

$woo_products_list_add_to_cart_border_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_list_add_to_cart_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_border_color",
	$woo_products_list_add_to_cart_border_color
);

$woo_products_list_add_to_cart_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_list_add_to_cart_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_border_hover_color",
	$woo_products_list_add_to_cart_border_hover_color
);

$woo_products_list_add_to_cart_border_width = new BurstMikadoField(
	"textsimple",
	"woo_products_list_add_to_cart_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_border_width",
	$woo_products_list_add_to_cart_border_width
);

$woo_products_list_add_to_cart_border_radius = new BurstMikadoField(
	"textsimple",
	"woo_products_list_add_to_cart_border_radius",
	"",
	esc_html__( "Border radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_border_radius",
	$woo_products_list_add_to_cart_border_radius
);

$wocommerce_messages_style_title = new BurstMikadoTitle(
	"wocommerce_messages_style_title",
	esc_html__( "Message", 'burst' )
);
$panel3->addChild(
	"wocommerce_messages_style_title",
	$wocommerce_messages_style_title
);

$group9 = new BurstMikadoGroup(
	esc_html__( "Message Box Style", 'burst' ),
	esc_html__( "Define message box style for all shop pages", 'burst' )
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

$woo_message_box_text_color = new BurstMikadoField(
	"colorsimple",
	"woo_message_box_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_message_box_text_color",
	$woo_message_box_text_color
);

$woo_message_box_font_size = new BurstMikadoField(
	"textsimple",
	"woo_message_box_font_size",
	"",
	esc_html__( "Font Size", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_message_box_font_size",
	$woo_message_box_font_size
);

$woo_message_box_background_color = new BurstMikadoField(
	"colorsimple",
	"woo_message_box_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_message_box_background_color",
	$woo_message_box_background_color
);

$woo_message_box_border_color = new BurstMikadoField(
	"colorsimple",
	"woo_message_box_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_message_box_border_color",
	$woo_message_box_border_color
);

//Product list styles

$panel1 = new BurstMikadoPanel(
	esc_html__( "Product List", 'burst' ),
	"product_list_panel"
);
$woocommercePage->addChild(
	"panel1",
	$panel1
);

//Define position of content on product list page

$woocommerce_product_list_content_position = new BurstMikadoField(
	"select",
	"woocommerce_product_list_content_position",
	"content_above_product_list",
	esc_html__( "Content Position", 'burst' ),
	esc_html__( "Choose content position for product list when sidebar is enabled.", 'burst' ),
	array(
		"content_above_product_list" => esc_html__( "Content Above Product List", 'burst' ),
		"content_above_product_list_and_sidebar" => esc_html__( "Content Above Product List and Sidebar", 'burst' )
	)
);

$panel1->addChild(
	"woocommerce_product_list_content_position",
	$woocommerce_product_list_content_position
);

//Use full-width template

$woo_products_enable_full_width_template = new BurstMikadoField(
	"yesno",
	"woo_products_enable_full_width_template",
	"no",
	esc_html__( "Enable Full Width Template", 'burst' ),
	esc_html__( "Enabling this option will enable full width template for shop page", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_enable_full_width_template_container"
	)
);
$panel1->addChild(
	"woo_products_enable_full_width_template",
	$woo_products_enable_full_width_template
);

$enable_full_width_template_container = new BurstMikadoContainer(
	"enable_full_width_template_container",
	"woo_products_enable_full_width_template",
	"no"
);
$panel1->addChild(
	"enable_full_width_template_container",
	$enable_full_width_template_container
);

$woo_full_width_margin_left = new BurstMikadoField(
	"text",
	"woo_full_width_margin_left",
	"",
	esc_html__( "Full Width Template Left Margin", 'burst' ),
	esc_html__( 'Please insert margin in px (i.e. 5px), or in % (i.e 5%)', 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$enable_full_width_template_container->addChild(
	"woo_full_width_margin_left",
	$woo_full_width_margin_left
);

$woo_full_width_margin_right = new BurstMikadoField(
	"text",
	"woo_full_width_margin_right",
	"",
	esc_html__( "Full Width Template Right Margin", 'burst' ),
	esc_html__( 'Please insert margin in px (i.e. 5px), or in % (i.e 5%)', 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$enable_full_width_template_container->addChild(
	"woo_full_width_margin_right",
	$woo_full_width_margin_right
);

//Use full-width template

$woo_products_disable_space_between_products = new BurstMikadoField(
	"yesno",
	"woo_products_disable_space_between_products",
	"no",
	esc_html__( "Disable Space Between Products", 'burst' ),
	esc_html__( "Enabling this option will disable space between products", 'burst' )
);
$panel1->addChild(
	"woo_products_disable_space_between_products",
	$woo_products_disable_space_between_products
);

//Product per page

$woo_products_per_page = new BurstMikadoField(
	"text",
	"woo_products_per_page",
	"",
	esc_html__( "Number Of Product Per Page", 'burst' ),
	esc_html__( "Set number of products on shop page.", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"woo_products_per_page",
	$woo_products_per_page
);

$woo_products_list_margin_top = new BurstMikadoField(
	"text",
	"woo_products_list_margin_top",
	"",
	esc_html__( "Product List Margin Top ", 'burst' ),
	esc_html__( "Set margin top for product list.", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"woo_products_list_margin_top",
	$woo_products_list_margin_top
);

//Products list type

$woo_products_enable_item_borders = new BurstMikadoField(
	"yesno",
	"woo_products_enable_item_borders",
	"no",
	esc_html__( "Enable Borders Around Item", 'burst' ),
	esc_html__( "Enable this option and choose to display borders around item's box or image", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_woo_products_item_borders_container"
	)
);
$panel1->addChild(
	"woo_products_enable_item_borders",
	$woo_products_enable_item_borders
);

$woo_products_item_borders_container = new BurstMikadoContainer(
	"woo_products_item_borders_container",
	"woo_products_enable_item_borders",
	"no"
);
$panel1->addChild(
	"woo_products_item_borders_container",
	$woo_products_item_borders_container
);

$woo_products_item_borders_style = new BurstMikadoField(
	"select",
	"woo_products_item_borders_style",
	"around_item",
	esc_html__( "Display Borders Around", 'burst' ),
	esc_html__( "Choose to display borders around the item's box or image", 'burst' ),
	array(
		"around_item" => esc_html__( "Item Box", 'burst' ),
		"around_image" => esc_html__( "Image", 'burst' )
	
	)
);
$woo_products_item_borders_container->addChild(
	"woo_products_item_borders_style",
	$woo_products_item_borders_style
);

$woo_products_item_borders_width = new BurstMikadoField(
	"text",
	"woo_products_item_borders_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "Please insert width for the item borders", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$woo_products_item_borders_container->addChild(
	"woo_products_item_borders_width",
	$woo_products_item_borders_width
);

$woo_products_item_borders_color = new BurstMikadoField(
	"color",
	"woo_products_item_borders_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "Choose a color for the item borders", 'burst' )
);
$woo_products_item_borders_container->addChild(
	"woo_products_item_borders_color",
	$woo_products_item_borders_color
);

$woo_products_item_borders_hover_color = new BurstMikadoField(
	"color",
	"woo_products_item_borders_hover_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "Choose a color for the item borders", 'burst' )
);
$woo_products_item_borders_container->addChild(
	"woo_products_item_borders_hover_color",
	$woo_products_item_borders_hover_color
);

$woo_products_enable_lighbox_icon = new BurstMikadoField(
	"yesno",
	"woo_products_enable_lighbox_icon",
	"yes",
	esc_html__( "Enable Lightbox Icon", 'burst' ),
	esc_html__( "Enabling this option will show lighbox icon on product list", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_woo_products_item_lightbox_icon_container"
	)
);
$panel1->addChild(
	"woo_products_enable_lighbox_icon",
	$woo_products_enable_lighbox_icon
);

$woo_products_item_lightbox_icon_container = new BurstMikadoContainer(
	"woo_products_item_lightbox_icon_container",
	"woo_products_enable_lighbox_icon",
	"no"
);
$panel1->addChild(
	"woo_products_item_lightbox_icon_container",
	$woo_products_item_lightbox_icon_container
);

$woo_products_lightbox_icon_color = new BurstMikadoField(
	"color",
	"woo_products_lightbox_icon_color",
	"",
	esc_html__( "Lightbox Icon Color", 'burst' ),
	esc_html__( "Define color for lightbox icon", 'burst' )
);
$woo_products_item_lightbox_icon_container->addChild(
	"woo_products_lightbox_icon_color",
	$woo_products_lightbox_icon_color
);

$woo_products_hover_list_type = new BurstMikadoField(
	"select",
	"woo_products_hover_list_type",
	"type1",
	esc_html__( "Product Hover Style", 'burst' ),
	esc_html__( "Choose hover style for products in products list", 'burst' ),
	array(
		"hover_type1" => esc_html__( "Add to cart button", 'burst' ),
		"hover_type2" => esc_html__( "Add to cart icon", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"hover_type2" => "#mkdf_woo_products_enable_button_icons_container"
		),
		"show"       => array(
			"hover_type1" => "#mkdf_woo_products_enable_button_icons_container"
		)
	)
);
$panel1->addChild(
	"woo_products_hover_list_type",
	$woo_products_hover_list_type
);

$woo_products_enable_button_icons_container = new BurstMikadoContainer(
	"woo_products_enable_button_icons_container",
	"woo_products_hover_list_type",
	""
);
$panel1->addChild(
	"woo_products_enable_button_icons_container",
	$woo_products_enable_button_icons_container
);

$woo_products_enable_button_icons = new BurstMikadoField(
	"yesno",
	"woo_products_enable_button_icons",
	"no",
	esc_html__( "Enable Icons in Add to Cart Button", 'burst' ),
	esc_html__( "Enabling this option will display icons in Add to Cart button", 'burst' )
);
$woo_products_enable_button_icons_container->addChild(
	"woo_products_enable_button_icons",
	$woo_products_enable_button_icons
);

$woo_products_enable_item_hover_image = new BurstMikadoField(
	"yesno",
	"woo_products_enable_item_hover_image",
	"no",
	esc_html__( "Enable Hover Image for Product", 'burst' ),
	esc_html__( "Enabling this option will display hover image in product list.", 'burst' ),
	array(),
	array()
);
$panel1->addChild(
	"woo_products_enable_item_hover_image",
	$woo_products_enable_item_hover_image
);

$woo_products_list_number = new BurstMikadoField(
	"select",
	"woo_products_list_number",
	"columns-3",
	esc_html__( "Product List and Related Products Columns Number", 'burst' ),
	esc_html__( "Choose number of columns for product listing and related products on single product", 'burst' ),
	array(
		"columns-3" => esc_html__( "3 Columns (2 with sidebar)", 'burst' ),
		"columns-4" => esc_html__( "4 Columns (3 with sidebar)", 'burst' )
	)
);

$panel1->addChild(
	"woo_products_list_number",
	$woo_products_list_number
);

//Product box
$woo_products_box_text_align = new BurstMikadoField(
	"select",
	"woo_products_box_text_align",
	"left",
	esc_html__( "Product Info Text Alignment", 'burst' ),
	esc_html__( "Specify products text alignment in product listing", 'burst' ),
	array(
		"left" => esc_html__( "Left", 'burst' ),
		"center" => esc_html__( "Center", 'burst' ),
		"right" => esc_html__( "Right", 'burst' )
	)
);
$panel1->addChild(
	"woo_products_box_text_align",
	$woo_products_box_text_align
);

$woo_products_item_info_box_background_color = new BurstMikadoField(
	"color",
	"woo_products_item_info_box_background_color",
	"",
	esc_html__( "Product Info Background Color", 'burst' ),
	esc_html__( "Define background color for product info box", 'burst' )
);
$panel1->addChild(
	"woo_products_item_info_box_background_color",
	$woo_products_item_info_box_background_color
);

$woo_products_item_info_box_padding = new BurstMikadoField(
	"text",
	"woo_products_item_info_box_padding",
	"",
	esc_html__( "Product Info Box Padding", 'burst' ),
	esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"woo_products_item_info_box_padding",
	$woo_products_item_info_box_padding
);

$woo_products_item_info_box_border = new BurstMikadoField(
	"yesno",
	"woo_products_item_info_box_border",
	"no",
	esc_html__( "Enable Right Separator for Product Info Box", 'burst' ),
	esc_html__( "Enabling this option will show right separator for product info box.", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_show_on_yes" => "#mkdf_woo_products_item_info_box_container",
		"dependence_hide_on_yes" => ""
	)
);
$panel1->addChild(
	"woo_products_item_info_box_border",
	$woo_products_item_info_box_border
);

$woo_products_item_info_box_container = new BurstMikadoContainer(
	"woo_products_item_info_box_container",
	"woo_products_item_info_box_border",
	"no"
);
$panel1->addChild(
	"woo_products_item_info_box_container",
	$woo_products_item_info_box_container
);

$group_product_box_info = new BurstMikadoGroup(
	esc_html__( "Product Box Info Border Styles ", 'burst' ),
	esc_html__( "Define box info border styles", 'burst' )
);
$woo_products_item_info_box_container->addChild(
	"group_product_box_info",
	$group_product_box_info
);

$row1 = new BurstMikadoRow();
$group_product_box_info->addChild(
	"row1",
	$row1
);

$woo_products_box_info_border_width = new BurstMikadoField(
	"textsimple",
	"woo_products_box_info_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_box_info_border_width",
	$woo_products_box_info_border_width
);

$woo_products_box_info_border_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_box_info_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_box_info_border_color",
	$woo_products_box_info_border_color
);

$woo_products_item_shader_color = new BurstMikadoField(
	"color",
	"woo_products_item_shader_color",
	"",
	esc_html__( "Shader Background Color", 'burst' ),
	esc_html__( "Choose a background color for the shader of hovered item", 'burst' )
);
$panel1->addChild(
	"woo_products_item_shader_color",
	$woo_products_item_shader_color
);

$woo_products_item_shader_opacity = new BurstMikadoField(
	"text",
	"woo_products_item_shader_opacity",
	"",
	esc_html__( "Shader Background Opacity", 'burst' ),
	esc_html__( "Choose a transparency for the shader background color (0 = fully transparent, 1 = opaque)", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"woo_products_item_shader_opacity",
	$woo_products_item_shader_opacity
);

//Product category
$woo_products_category_hide_category = new BurstMikadoField(
	"yesno",
	"woo_products_category_hide_category",
	"no",
	esc_html__( "Hide Product Category", 'burst' ),
	esc_html__( "Enabling this option will hide product category.", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#mkdf_woo_products_hide_category_container",
		"dependence_show_on_yes" => ""
	)
);
$panel1->addChild(
	"woo_products_category_hide_category",
	$woo_products_category_hide_category
);

$woo_products_hide_category_container = new BurstMikadoContainer(
	"woo_products_hide_category_container",
	"woo_products_category_hide_category",
	"yes"
);
$panel1->addChild(
	"woo_products_hide_category_container",
	$woo_products_hide_category_container
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Product Category Text Style", 'burst' ),
	esc_html__( "Define product category text style", 'burst' )
);
$woo_products_hide_category_container->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$woo_products_category_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_category_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_category_color",
	$woo_products_category_color
);

$woo_products_category_font_size = new BurstMikadoField(
	"textsimple",
	"woo_products_category_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_category_font_size",
	$woo_products_category_font_size
);

$woo_products_category_line_height = new BurstMikadoField(
	"textsimple",
	"woo_products_category_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_category_line_height",
	$woo_products_category_line_height
);

$woo_products_category_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_category_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"woo_products_category_text_transform",
	$woo_products_category_text_transform
);

$row2 = new BurstMikadoRow();
$group2->addChild(
	"row2",
	$row2
);

$woo_products_category_font_family = new BurstMikadoField(
	"fontsimple",
	"woo_products_category_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_products_category_font_family",
	$woo_products_category_font_family
);

$woo_products_category_font_style = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_category_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"woo_products_category_font_style",
	$woo_products_category_font_style
);

$woo_products_category_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_category_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"woo_products_category_font_weight",
	$woo_products_category_font_weight
);

$woo_products_category_letter_spacing = new BurstMikadoField(
	"textsimple",
	"woo_products_category_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_products_category_letter_spacing",
	$woo_products_category_letter_spacing
);

$woo_products_title_separator_hide_title_separator = new BurstMikadoField(
	"yesno",
	"woo_products_title_separator_hide_title_separator",
	"no",
	esc_html__( "Hide Separator in Product Title ", 'burst' ),
	esc_html__( "Enabling this option will hide product title separator", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#mkdf_woo_products_hide_title_separator_container",
		"dependence_show_on_yes" => ""
	)
);
$panel1->addChild(
	"woo_products_title_separator_hide_title_separator",
	$woo_products_title_separator_hide_title_separator
);

$woo_products_hide_title_separator_container = new BurstMikadoContainer(
	"woo_products_hide_title_separator_container",
	"woo_products_title_separator_hide_title_separator",
	"yes"
);
$panel1->addChild(
	"woo_products_hide_title_separator_container",
	$woo_products_hide_title_separator_container
);

$group10 = new BurstMikadoGroup(
	esc_html__( "Separator Styles", 'burst' ),
	esc_html__( "Define style for product title separator ", 'burst' )
);
$woo_products_hide_title_separator_container->addChild(
	"group10",
	$group10
);

$row1 = new BurstMikadoRow();
$group10->addChild(
	"row1",
	$row1
);

$woo_products_title_separator_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_title_separator_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_title_separator_color",
	$woo_products_title_separator_color
);

$woo_products_title_separator_style = new BurstMikadoField(
	"selectsimple",
	"woo_products_title_separator_style",
	"solid",
	esc_html__( "Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	array(
		"solid" => esc_html__( "Solid", 'burst' ),
		"dashed" => esc_html__( "Dashed", 'burst' ),
		"dotted" => esc_html__( "Dotted", 'burst' )
	)
);
$row1->addChild(
	"woo_products_title_separator_style",
	$woo_products_title_separator_style
);

$woo_products_title_separator_margin_top = new BurstMikadoField(
	"textsimple",
	"woo_products_title_separator_margin_top",
	"",
	esc_html__( "Margin Top (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_title_separator_margin_top",
	$woo_products_title_separator_margin_top
);

$woo_products_title_separator_margin_bottom = new BurstMikadoField(
	"textsimple",
	"woo_products_title_separator_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_title_separator_margin_bottom",
	$woo_products_title_separator_margin_bottom
);

//Product title

$group3 = new BurstMikadoGroup(
	esc_html__( "Product Title", 'burst' ),
	esc_html__( "Define product title text style", 'burst' )
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

$woo_products_title_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_title_color",
	$woo_products_title_color
);

$woo_products_title_font_size = new BurstMikadoField(
	"textsimple",
	"woo_products_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_title_font_size",
	$woo_products_title_font_size
);

$woo_products_title_line_height = new BurstMikadoField(
	"textsimple",
	"woo_products_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_title_line_height",
	$woo_products_title_line_height
);

$woo_products_title_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"woo_products_title_text_transform",
	$woo_products_title_text_transform
);

$row2 = new BurstMikadoRow( true );
$group3->addChild(
	"row2",
	$row2
);

$woo_products_title_font_family = new BurstMikadoField(
	"fontsimple",
	"woo_products_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_products_title_font_family",
	$woo_products_title_font_family
);

$woo_products_title_font_style = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_title_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"woo_products_title_font_style",
	$woo_products_title_font_style
);

$woo_products_title_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_title_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"woo_products_title_font_weight",
	$woo_products_title_font_weight
);

$woo_products_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"woo_products_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_products_title_letter_spacing",
	$woo_products_title_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$group3->addChild(
	"row3",
	$row3
);

$woo_products_title_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_title_hover_color",
	"",
	esc_html__( "Hover Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_products_title_hover_color",
	$woo_products_title_hover_color
);

$woo_products_title_line_margin_bottom = new BurstMikadoField(
	"textsimple",
	"woo_products_title_line_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_products_title_line_margin_bottom",
	$woo_products_title_line_margin_bottom
);

//Product price	

$group4 = new BurstMikadoGroup(
	esc_html__( "Product Price", 'burst' ),
	esc_html__( "Define product price text style", 'burst' )
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

$woo_products_price_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_price_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_price_color",
	$woo_products_price_color
);

$woo_products_price_font_size = new BurstMikadoField(
	"textsimple",
	"woo_products_price_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_price_font_size",
	$woo_products_price_font_size
);

$woo_products_price_line_height = new BurstMikadoField(
	"textsimple",
	"woo_products_price_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_price_line_height",
	$woo_products_price_line_height
);

$woo_products_price_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_price_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"woo_products_price_text_transform",
	$woo_products_price_text_transform
);

$row2 = new BurstMikadoRow( true );
$group4->addChild(
	"row2",
	$row2
);

$woo_products_price_font_family = new BurstMikadoField(
	"fontsimple",
	"woo_products_price_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_products_price_font_family",
	$woo_products_price_font_family
);

$woo_products_price_font_style = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_price_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"woo_products_price_font_style",
	$woo_products_price_font_style
);

$woo_products_price_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_price_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"woo_products_price_font_weight",
	$woo_products_price_font_weight
);

$woo_products_price_letter_spacing = new BurstMikadoField(
	"textsimple",
	"woo_products_price_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_products_price_letter_spacing",
	$woo_products_price_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$group4->addChild(
	"row3",
	$row3
);

$woo_products_price_old_font_size = new BurstMikadoField(
	"textsimple",
	"woo_products_price_old_font_size",
	"",
	esc_html__( "Old Price Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_products_price_old_font_size",
	$woo_products_price_old_font_size
);

$woo_products_price_old_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_price_old_color",
	"",
	esc_html__( "Old Price Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_products_price_old_color",
	$woo_products_price_old_color
);

//Product sale

$group5 = new BurstMikadoGroup(
	esc_html__( "Product Sale", 'burst' ),
	esc_html__( "Define product sale text style", 'burst' )
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

$woo_products_sale_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_sale_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_sale_color",
	$woo_products_sale_color
);

$woo_products_sale_font_size = new BurstMikadoField(
	"textsimple",
	"woo_products_sale_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_sale_font_size",
	$woo_products_sale_font_size
);

$woo_products_sale_line_height = new BurstMikadoField(
	"textsimple",
	"woo_products_sale_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_sale_line_height",
	$woo_products_sale_line_height
);

$woo_products_sale_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_sale_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"woo_products_sale_text_transform",
	$woo_products_sale_text_transform
);

$row2 = new BurstMikadoRow( true );
$group5->addChild(
	"row2",
	$row2
);

$woo_products_sale_font_family = new BurstMikadoField(
	"fontsimple",
	"woo_products_sale_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_products_sale_font_family",
	$woo_products_sale_font_family
);

$woo_products_sale_font_style = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_sale_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"woo_products_sale_font_style",
	$woo_products_sale_font_style
);

$woo_products_sale_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_sale_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"woo_products_sale_font_weight",
	$woo_products_sale_font_weight
);

$woo_products_sale_letter_spacing = new BurstMikadoField(
	"textsimple",
	"woo_products_sale_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_products_sale_letter_spacing",
	$woo_products_sale_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$group5->addChild(
	"row3",
	$row3
);

$woo_products_sale_background_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_sale_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_products_sale_background_color",
	$woo_products_sale_background_color
);

$woo_products_sale_border_radius = new BurstMikadoField(
	"textsimple",
	"woo_products_sale_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_products_sale_border_radius",
	$woo_products_sale_border_radius
);

$woo_products_sale_top_position = new BurstMikadoField(
	"textsimple",
	"woo_products_sale_top_position",
	"",
	esc_html__( "Top Position (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_products_sale_top_position",
	$woo_products_sale_top_position
);

$woo_products_sale_left_position = new BurstMikadoField(
	"textsimple",
	"woo_products_sale_left_position",
	"",
	esc_html__( "Left Position (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_products_sale_left_position",
	$woo_products_sale_left_position
);

$row4 = new BurstMikadoRow( true );
$group5->addChild(
	"row4",
	$row4
);

$woo_products_sale_right_position = new BurstMikadoField(
	"textsimple",
	"woo_products_sale_right_position",
	"",
	esc_html__( "Right Position (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"woo_products_sale_right_position",
	$woo_products_sale_right_position
);

$woo_products_sale_width = new BurstMikadoField(
	"textsimple",
	"woo_products_sale_width",
	"",
	esc_html__( "Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"woo_products_sale_width",
	$woo_products_sale_width
);

$woo_products_sale_height = new BurstMikadoField(
	"textsimple",
	"woo_products_sale_height",
	"",
	esc_html__( "Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"woo_products_sale_height",
	$woo_products_sale_height
);

//Product out of stock

$group6 = new BurstMikadoGroup(
	esc_html__( 'Product "Out Of Stock"', 'burst' ),
	esc_html__( "Define 'Out Of Stock' text style", 'burst' )
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

$woo_products_out_of_stock_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_out_of_stock_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_out_of_stock_color",
	$woo_products_out_of_stock_color
);

$woo_products_out_of_stock_font_size = new BurstMikadoField(
	"textsimple",
	"woo_products_out_of_stock_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_out_of_stock_font_size",
	$woo_products_out_of_stock_font_size
);

$woo_products_out_of_stock_line_height = new BurstMikadoField(
	"textsimple",
	"woo_products_out_of_stock_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_out_of_stock_line_height",
	$woo_products_out_of_stock_line_height
);

$woo_products_out_of_stock_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_out_of_stock_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"woo_products_out_of_stock_text_transform",
	$woo_products_out_of_stock_text_transform
);

$row2 = new BurstMikadoRow( true );
$group6->addChild(
	"row2",
	$row2
);

$woo_products_out_of_stock_font_family = new BurstMikadoField(
	"fontsimple",
	"woo_products_out_of_stock_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_products_out_of_stock_font_family",
	$woo_products_out_of_stock_font_family
);

$woo_products_out_of_stock_font_style = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_out_of_stock_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"woo_products_out_of_stock_font_style",
	$woo_products_out_of_stock_font_style
);

$woo_products_out_of_stock_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_out_of_stock_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"woo_products_out_of_stock_font_weight",
	$woo_products_out_of_stock_font_weight
);

$woo_products_out_of_stock_letter_spacing = new BurstMikadoField(
	"textsimple",
	"woo_products_out_of_stock_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_products_out_of_stock_letter_spacing",
	$woo_products_out_of_stock_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$group6->addChild(
	"row3",
	$row3
);

$woo_products_out_of_stock_background_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_out_of_stock_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_products_out_of_stock_background_color",
	$woo_products_out_of_stock_background_color
);

$woo_products_out_of_stock_border_radius = new BurstMikadoField(
	"textsimple",
	"woo_products_out_of_stock_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_products_out_of_stock_border_radius",
	$woo_products_out_of_stock_border_radius
);

$woo_products_out_of_stock_top_position = new BurstMikadoField(
	"textsimple",
	"woo_products_out_of_stock_top_position",
	"",
	esc_html__( "Top Position (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_products_out_of_stock_top_position",
	$woo_products_out_of_stock_top_position
);

$woo_products_out_of_stock_left_position = new BurstMikadoField(
	"textsimple",
	"woo_products_out_of_stock_left_position",
	"",
	esc_html__( "Left Position (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_products_out_of_stock_left_position",
	$woo_products_out_of_stock_left_position
);

$row4 = new BurstMikadoRow( true );
$group6->addChild(
	"row4",
	$row4
);

$woo_products_out_of_stock_right_position = new BurstMikadoField(
	"textsimple",
	"woo_products_out_of_stock_right_position",
	"",
	esc_html__( "Right Position (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"woo_products_out_of_stock_right_position",
	$woo_products_out_of_stock_right_position
);

$woo_products_out_of_stock_width = new BurstMikadoField(
	"textsimple",
	"woo_products_out_of_stock_width",
	"",
	esc_html__( "Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"woo_products_out_of_stock_width",
	$woo_products_out_of_stock_width
);

$woo_products_out_of_stock_height = new BurstMikadoField(
	"textsimple",
	"woo_products_out_of_stock_height",
	"",
	esc_html__( "Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"woo_products_out_of_stock_height",
	$woo_products_out_of_stock_height
);

//Pricing Filter

$group9 = new BurstMikadoGroup(
	esc_html__( "Price Filter Colors", 'burst' ),
	esc_html__( "Define colors in price filter", 'burst' )
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

$woo_products_price_filter_background_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_price_filter_background_color",
	"",
	esc_html__( "In Price Range", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_price_filter_background_color",
	$woo_products_price_filter_background_color
);

$woo_products_price_filter_background_active_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_price_filter_background_active_color",
	"",
	esc_html__( "Out Price Range", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_price_filter_background_active_color",
	$woo_products_price_filter_background_active_color
);

$woo_products_price_filter_arrows_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_price_filter_arrows_color",
	"",
	esc_html__( "Handles", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_price_filter_arrows_color",
	$woo_products_price_filter_arrows_color
);

$group7 = new BurstMikadoGroup(
	esc_html__( '"Number of Results" Text Style', 'burst' ),
	esc_html__( "Define style for text showing the number of results in product list", 'burst' )
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

$woo_products_sorting_result_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_sorting_result_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_sorting_result_color",
	$woo_products_sorting_result_color
);

$woo_products_sorting_result_font_size = new BurstMikadoField(
	"textsimple",
	"woo_products_sorting_result_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_sorting_result_font_size",
	$woo_products_sorting_result_font_size
);

$woo_products_sorting_result_line_height = new BurstMikadoField(
	"textsimple",
	"woo_products_sorting_result_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_sorting_result_line_height",
	$woo_products_sorting_result_line_height
);

$woo_products_sorting_result_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_sorting_result_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"woo_products_sorting_result_text_transform",
	$woo_products_sorting_result_text_transform
);

$row2 = new BurstMikadoRow( true );
$group7->addChild(
	"row2",
	$row2
);

$woo_products_sorting_result_font_family = new BurstMikadoField(
	"fontsimple",
	"woo_products_sorting_result_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_products_sorting_result_font_family",
	$woo_products_sorting_result_font_family
);

$woo_products_sorting_result_font_style = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_sorting_result_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"woo_products_sorting_result_font_style",
	$woo_products_sorting_result_font_style
);

$woo_products_sorting_result_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_sorting_result_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"woo_products_sorting_result_font_weight",
	$woo_products_sorting_result_font_weight
);

$woo_products_sorting_result_letter_spacing = new BurstMikadoField(
	"textsimple",
	"woo_products_sorting_result_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_products_sorting_result_letter_spacing",
	$woo_products_sorting_result_letter_spacing
);

//Products add to cart button

$products_add_to_cart_subtitle = new BurstMikadoTitle(
	"products_add_to_cart_subtitle",
	esc_html__( '"Add to cart" button', 'burst' )
);
$panel1->addChild(
	"products_add_to_cart_subtitle",
	$products_add_to_cart_subtitle
);

$group14 = new BurstMikadoGroup(
	esc_html__( "Button Text Style", 'burst' ),
	esc_html__( "Define Add To Cart button text style", 'burst' )
);
$panel1->addChild(
	"group14",
	$group14
);

$row1 = new BurstMikadoRow();
$group14->addChild(
	"row1",
	$row1
);

$woo_products_add_to_cart_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_add_to_cart_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_add_to_cart_color",
	$woo_products_add_to_cart_color
);

$woo_products_add_to_cart_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_add_to_cart_hover_color",
	"",
	esc_html__( "Hover Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_add_to_cart_hover_color",
	$woo_products_add_to_cart_hover_color
);

$woo_products_add_to_cart_font_size = new BurstMikadoField(
	"textsimple",
	"woo_products_add_to_cart_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_add_to_cart_font_size",
	$woo_products_add_to_cart_font_size
);

$woo_products_add_to_cart_line_height = new BurstMikadoField(
	"textsimple",
	"woo_products_add_to_cart_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_add_to_cart_line_height",
	$woo_products_add_to_cart_line_height
);

$row2 = new BurstMikadoRow( true );
$group14->addChild(
	"row2",
	$row2
);

$woo_products_add_to_cart_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_add_to_cart_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"woo_products_add_to_cart_text_transform",
	$woo_products_add_to_cart_text_transform
);

$woo_products_add_to_cart_font_family = new BurstMikadoField(
	"fontsimple",
	"woo_products_add_to_cart_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_products_add_to_cart_font_family",
	$woo_products_add_to_cart_font_family
);

$woo_products_add_to_cart_font_style = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_add_to_cart_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"woo_products_add_to_cart_font_style",
	$woo_products_add_to_cart_font_style
);

$woo_products_add_to_cart_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_add_to_cart_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"woo_products_add_to_cart_font_weight",
	$woo_products_add_to_cart_font_weight
);

$row3 = new BurstMikadoRow( true );
$group14->addChild(
	"row3",
	$row3
);

$woo_products_add_to_cart_letter_spacing = new BurstMikadoField(
	"textsimple",
	"woo_products_add_to_cart_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_products_add_to_cart_letter_spacing",
	$woo_products_add_to_cart_letter_spacing
);

$woo_products_add_to_cart_margin_top = new BurstMikadoField(
	"textsimple",
	"woo_products_add_to_cart_margin_top",
	"",
	esc_html__( "Margin Top (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_products_add_to_cart_margin_top",
	$woo_products_add_to_cart_margin_top
);

$woo_products_add_to_cart_padding_left = new BurstMikadoField(
	"textsimple",
	"woo_products_add_to_cart_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_products_add_to_cart_padding_left",
	$woo_products_add_to_cart_padding_left
);

$woo_products_add_to_cart_padding_right = new BurstMikadoField(
	"textsimple",
	"woo_products_add_to_cart_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_products_add_to_cart_padding_right",
	$woo_products_add_to_cart_padding_right
);

$add_to_cart_button_hover_animation = new BurstMikadoField(
	"selectblank",
	"add_to_cart_button_hover_animation",
	"",
	esc_html__( "Button Hover Animation", 'burst' ),
	esc_html__( "Choose a hover animation for button", 'burst' ),
	array(
		"fill_from_top" => esc_html__( "Fill From Top", 'burst' ),
		"fill_from_left" => esc_html__( "Fill From Left", 'burst' ),
		"fill_from_bottom" => esc_html__( "Fill From Bottom", 'burst' ),
	)
);
$panel1->addChild(
	"add_to_cart_button_hover_animation",
	$add_to_cart_button_hover_animation
);

$group27 = new BurstMikadoGroup(
	esc_html__( 'Button Background', 'burst' ),
	esc_html__( 'Define "Add To Cart" Button Background', 'burst' )
);
$panel1->addChild(
	"group27",
	$group27
);

$row1 = new BurstMikadoRow();
$group27->addChild(
	"row1",
	$row1
);

$woo_products_add_to_cart_background_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_add_to_cart_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_add_to_cart_background_color",
	$woo_products_add_to_cart_background_color
);

$woo_products_add_to_cart_background_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_add_to_cart_background_hover_color",
	"",
	esc_html__( "Hover Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_add_to_cart_background_hover_color",
	$woo_products_add_to_cart_background_hover_color
);

$group28 = new BurstMikadoGroup(
	esc_html__( 'Button Border', 'burst' ),
	esc_html__( 'Define "Add To Cart" border', 'burst' )
);
$panel1->addChild(
	"group28",
	$group28
);

$row1 = new BurstMikadoRow();
$group28->addChild(
	"row1",
	$row1
);

$woo_products_add_to_cart_border_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_add_to_cart_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_add_to_cart_border_color",
	$woo_products_add_to_cart_border_color
);

$woo_products_add_to_cart_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_add_to_cart_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_add_to_cart_border_hover_color",
	$woo_products_add_to_cart_border_hover_color
);

$woo_products_add_to_cart_border_width = new BurstMikadoField(
	"textsimple",
	"woo_products_add_to_cart_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_add_to_cart_border_width",
	$woo_products_add_to_cart_border_width
);

$woo_products_add_to_cart_border_radius = new BurstMikadoField(
	"textsimple",
	"woo_products_add_to_cart_border_radius",
	"",
	esc_html__( "Border radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_add_to_cart_border_radius",
	$woo_products_add_to_cart_border_radius
);

//Sorting Product List

$product_sorting = new BurstMikadoTitle(
	"product_sorting",
	esc_html__( "Product Sorting Select Box", 'burst' )
);
$panel1->addChild(
	"product_sorting",
	$product_sorting
);

$group8 = new BurstMikadoGroup(
	esc_html__( "Select Box Text Style", 'burst' ),
	esc_html__( "Define product sorting text style", 'burst' )
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

$woo_products_sorting_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_sorting_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_sorting_color",
	$woo_products_sorting_color
);

$woo_products_sorting_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_sorting_hover_color",
	"",
	esc_html__( "Text Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_sorting_hover_color",
	$woo_products_sorting_hover_color
);

// Sorting Background

$group12 = new BurstMikadoGroup(
	esc_html__( "Select Box Background", 'burst' ),
	esc_html__( "Define product sorting select box background", 'burst' )
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

$woo_products_sorting_background_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_sorting_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_sorting_background_color",
	$woo_products_sorting_background_color
);

$woo_products_sorting_dropdown_background_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_sorting_dropdown_background_color",
	"",
	esc_html__( "Dropdown Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_sorting_dropdown_background_color",
	$woo_products_sorting_dropdown_background_color
);

// Sorting Border Style

$group13 = new BurstMikadoGroup(
	esc_html__( "Select Box Border", 'burst' ),
	esc_html__( "Define product sorting select box border", 'burst' )
);
$panel1->addChild(
	"group13",
	$group13
);

$row1 = new BurstMikadoRow();
$group13->addChild(
	"row1",
	$row1
);

$woo_products_sorting_border_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_sorting_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_sorting_border_color",
	$woo_products_sorting_border_color
);

$woo_products_sorting_border_width = new BurstMikadoField(
	"textsimple",
	"woo_products_sorting_border_width",
	"",
	esc_html__( "Box Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_sorting_border_width",
	$woo_products_sorting_border_width
);

//Show Number of Results text

//Product single styles

$panel2 = new BurstMikadoPanel(
	esc_html__( "Product Single", 'burst' ),
	"product_single_panel"
);
$woocommercePage->addChild(
	"panel2",
	$panel2
);

//Product single title

$product_text_style = new BurstMikadoTitle(
	"product_text_style",
	esc_html__( "Product Text Style", 'burst' )
);
$panel2->addChild(
	"product_text_style",
	$product_text_style
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Product Single Title", 'burst' ),
	esc_html__( "Define Product Single Title Style", 'burst' )
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

$woo_product_single_title_color = new BurstMikadoField(
	"colorsimple",
	"woo_product_single_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_title_color",
	$woo_product_single_title_color
);

$woo_product_single_title_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_product_single_title_hover_color",
	"",
	esc_html__( "Hover Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_title_hover_color",
	$woo_product_single_title_hover_color
);

$woo_product_single_title_font_size = new BurstMikadoField(
	"textsimple",
	"woo_product_single_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_title_font_size",
	$woo_product_single_title_font_size
);

$woo_product_single_title_line_height = new BurstMikadoField(
	"textsimple",
	"woo_product_single_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_title_line_height",
	$woo_product_single_title_line_height
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);

$woo_product_single_title_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"woo_product_single_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"woo_product_single_title_text_transform",
	$woo_product_single_title_text_transform
);

$woo_product_single_title_font_family = new BurstMikadoField(
	"fontsimple",
	"woo_product_single_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_product_single_title_font_family",
	$woo_product_single_title_font_family
);

$woo_product_single_title_font_style = new BurstMikadoField(
	"selectblanksimple",
	"woo_product_single_title_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"woo_product_single_title_font_style",
	$woo_product_single_title_font_style
);

$woo_product_single_title_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"woo_product_single_title_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"woo_product_single_title_font_weight",
	$woo_product_single_title_font_weight
);

$row3 = new BurstMikadoRow( true );
$group1->addChild(
	"row3",
	$row3
);

$woo_product_single_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"woo_product_single_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_product_single_title_letter_spacing",
	$woo_product_single_title_letter_spacing
);

//Product single title separator	

$woo_single_product_title_separator = new BurstMikadoField(
	"yesno",
	"woo_single_product_title_separator",
	"no",
	esc_html__( "Display Separator After Title", 'burst' ),
	esc_html__( "Enabling this option will display separator after product title", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_woo_single_product_title_separator_container"
	)
);
$panel2->addChild(
	"woo_single_product_title_separator",
	$woo_single_product_title_separator
);

$woo_single_product_title_separator_container = new BurstMikadoContainer(
	"woo_single_product_title_separator_container",
	"woo_single_product_title_separator",
	"no"
);
$panel2->addChild(
	"woo_single_product_title_separator_container",
	$woo_single_product_title_separator_container
);

$group29 = new BurstMikadoGroup(
	esc_html__( "Title Separator Styles", 'burst' ),
	esc_html__( "Define style for title separator", 'burst' )
);
$woo_single_product_title_separator_container->addChild(
	"group29",
	$group29
);
$row1 = new BurstMikadoRow();
$group29->addChild(
	"row1",
	$row1
);

$woo_single_product_title_separator_color = new BurstMikadoField(
	"colorsimple",
	"woo_single_product_title_separator_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_single_product_title_separator_color",
	$woo_single_product_title_separator_color
);

$woo_single_product_title_separator_style = new BurstMikadoField(
	"selectsimple",
	"woo_single_product_title_separator_style",
	"solid",
	esc_html__( "Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	array(
		"solid" => esc_html__( "Solid", 'burst' ),
		"dashed" => esc_html__( "Dashed", 'burst' ),
		"dotted" => esc_html__( "Dotted", 'burst' )
	)
);
$row1->addChild(
	"woo_single_product_title_separator_style",
	$woo_single_product_title_separator_style
);

$woo_single_product_title_separator_margin_top = new BurstMikadoField(
	"textsimple",
	"woo_single_product_title_separator_margin_top",
	"",
	esc_html__( "Margin Top (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_single_product_title_separator_margin_top",
	$woo_single_product_title_separator_margin_top
);

$woo_single_product_title_separator_margin_bottom = new BurstMikadoField(
	"textsimple",
	"woo_single_product_title_separator_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_single_product_title_separator_margin_bottom",
	$woo_single_product_title_separator_margin_bottom
);

//Product single meta title

$group2 = new BurstMikadoGroup(
	esc_html__( "Product Single Meta Title", 'burst' ),
	esc_html__( "Define Product Single Meta Title Style", 'burst' )
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

$woo_product_single_meta_title_color = new BurstMikadoField(
	"colorsimple",
	"woo_product_single_meta_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_meta_title_color",
	$woo_product_single_meta_title_color
);

$woo_product_single_meta_title_font_size = new BurstMikadoField(
	"textsimple",
	"woo_product_single_meta_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_meta_title_font_size",
	$woo_product_single_meta_title_font_size
);

$woo_product_single_meta_title_line_height = new BurstMikadoField(
	"textsimple",
	"woo_product_single_meta_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_meta_title_line_height",
	$woo_product_single_meta_title_line_height
);

$woo_product_single_meta_title_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"woo_product_single_meta_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"woo_product_single_meta_title_text_transform",
	$woo_product_single_meta_title_text_transform
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);

$woo_product_single_meta_title_font_family = new BurstMikadoField(
	"fontsimple",
	"woo_product_single_meta_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_product_single_meta_title_font_family",
	$woo_product_single_meta_title_font_family
);

$woo_product_single_meta_title_font_style = new BurstMikadoField(
	"selectblanksimple",
	"woo_product_single_meta_title_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"woo_product_single_meta_title_font_style",
	$woo_product_single_meta_title_font_style
);

$woo_product_single_meta_title_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"woo_product_single_meta_title_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"woo_product_single_meta_title_font_weight",
	$woo_product_single_meta_title_font_weight
);

$woo_product_single_meta_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"woo_product_single_meta_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_product_single_meta_title_letter_spacing",
	$woo_product_single_meta_title_letter_spacing
);

//Product single meta title

$group3 = new BurstMikadoGroup(
	esc_html__( "Product Single Meta Info", 'burst' ),
	esc_html__( "Define Product Single Meta Info Style", 'burst' )
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

$woo_product_single_meta_info_color = new BurstMikadoField(
	"colorsimple",
	"woo_product_single_meta_info_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_meta_info_color",
	$woo_product_single_meta_info_color
);

$woo_product_single_meta_info_font_size = new BurstMikadoField(
	"textsimple",
	"woo_product_single_meta_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_meta_info_font_size",
	$woo_product_single_meta_info_font_size
);

$woo_product_single_meta_info_line_height = new BurstMikadoField(
	"textsimple",
	"woo_product_single_meta_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_meta_info_line_height",
	$woo_product_single_meta_info_line_height
);

$woo_product_single_meta_info_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"woo_product_single_meta_info_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"woo_product_single_meta_info_text_transform",
	$woo_product_single_meta_info_text_transform
);

$row2 = new BurstMikadoRow( true );
$group3->addChild(
	"row2",
	$row2
);

$woo_product_single_meta_info_font_family = new BurstMikadoField(
	"fontsimple",
	"woo_product_single_meta_info_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_product_single_meta_info_font_family",
	$woo_product_single_meta_info_font_family
);

$woo_product_single_meta_info_font_style = new BurstMikadoField(
	"selectblanksimple",
	"woo_product_single_meta_info_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"woo_product_single_meta_info_font_style",
	$woo_product_single_meta_info_font_style
);

$woo_product_single_meta_info_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"woo_product_single_meta_info_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"woo_product_single_meta_info_font_weight",
	$woo_product_single_meta_info_font_weight
);

$woo_product_single_meta_info_letter_spacing = new BurstMikadoField(
	"textsimple",
	"woo_product_single_meta_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_product_single_meta_info_letter_spacing",
	$woo_product_single_meta_info_letter_spacing
);

//Product single price 

$group4 = new BurstMikadoGroup(
	esc_html__( "Product Single Price", 'burst' ),
	esc_html__( "Define Product Single Price Style", 'burst' )
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

$woo_product_single_price_color = new BurstMikadoField(
	"colorsimple",
	"woo_product_single_price_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_price_color",
	$woo_product_single_price_color
);

$woo_product_single_price_font_size = new BurstMikadoField(
	"textsimple",
	"woo_product_single_price_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_price_font_size",
	$woo_product_single_price_font_size
);

$woo_product_single_price_line_height = new BurstMikadoField(
	"textsimple",
	"woo_product_single_price_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_price_line_height",
	$woo_product_single_price_line_height
);

$woo_product_single_price_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"woo_product_single_price_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"woo_product_single_price_text_transform",
	$woo_product_single_price_text_transform
);

$row2 = new BurstMikadoRow( true );
$group4->addChild(
	"row2",
	$row2
);

$woo_product_single_price_font_family = new BurstMikadoField(
	"fontsimple",
	"woo_product_single_price_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_product_single_price_font_family",
	$woo_product_single_price_font_family
);

$woo_product_single_price_font_style = new BurstMikadoField(
	"selectblanksimple",
	"woo_product_single_price_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"woo_product_single_price_font_style",
	$woo_product_single_price_font_style
);

$woo_product_single_price_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"woo_product_single_price_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"woo_product_single_price_font_weight",
	$woo_product_single_price_font_weight
);

$woo_product_single_price_letter_spacing = new BurstMikadoField(
	"textsimple",
	"woo_product_single_price_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_product_single_price_letter_spacing",
	$woo_product_single_price_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$group4->addChild(
	"row3",
	$row3
);

$woo_product_single_price_old_font_size = new BurstMikadoField(
	"textsimple",
	"woo_product_single_price_old_font_size",
	"",
	esc_html__( "Old Price Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_product_single_price_old_font_size",
	$woo_product_single_price_old_font_size
);

$woo_product_single_price_old_color = new BurstMikadoField(
	"colorsimple",
	"woo_product_single_price_old_color",
	"",
	esc_html__( "Old Price Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_product_single_price_old_color",
	$woo_product_single_price_old_color
);

$woo_product_single_show_social_share = new BurstMikadoField(
	"yesno",
	"woo_product_single_show_social_share",
	"no",
	esc_html__( "Show Share", 'burst' ),
	esc_html__( "Enabling this option will show share on Single Product", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_woo_product_single_share_options_container"
	)
);
$panel2->addChild(
	"woo_product_single_show_social_share",
	$woo_product_single_show_social_share
);

$woo_product_single_share_options_container = new BurstMikadoContainer(
	"woo_product_single_share_options_container",
	"woo_product_single_show_social_share",
	"no"
);
$panel2->addChild(
	"woo_product_single_share_options_container",
	$woo_product_single_share_options_container
);

$woo_product_single_select_share_option = new BurstMikadoField(
	"select",
	"woo_product_single_select_share_option",
	"dropdown",
	esc_html__( "Social Share Style", 'burst' ),
	esc_html__( "Choose Social Share Style for Single Product", 'burst' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'burst' ),
		"list" => esc_html__( "Social Share List", 'burst' )
	)
);
$woo_product_single_share_options_container->addChild(
	"woo_product_single_select_share_option",
	$woo_product_single_select_share_option
);

$woo_product_single_show_related_products = new BurstMikadoField(
	"yesno",
	"woo_product_single_show_related_products",
	"yes",
	esc_html__( "Show Related Products", 'burst' ),
	esc_html__( "Enabling this option will show related products on Single Product", 'burst' ),
	array(),
	array()
);
$panel2->addChild(
	"woo_product_single_show_related_products",
	$woo_product_single_show_related_products
);

//Product single tabs/accordions

$woo_products_info_style = new BurstMikadoField(
	"select",
	"woo_products_info_style",
	"accordions",
	esc_html__( "Product Info Display Style", 'burst' ),
	esc_html__( "Choose to display product info with accordions right from product image or with vertical tabs below product image", 'burst' ),
	array(
		"accordions" => esc_html__( "Accordions", 'burst' ),
		"vertical_tabs" => esc_html__( "Vertical Tabs", 'burst' )
	
	)
);

$panel2->addChild(
	"woo_products_info_style",
	$woo_products_info_style
);

//Product single accordions 

$group10 = new BurstMikadoGroup(
	esc_html__( "Product Single Accordions", 'burst' ),
	esc_html__( "Define Product Single Accordions Style", 'burst' )
);
$panel2->addChild(
	"group10",
	$group10
);

$row1 = new BurstMikadoRow();
$group10->addChild(
	"row1",
	$row1
);

$woo_product_single_tabs_color = new BurstMikadoField(
	"colorsimple",
	"woo_product_single_tabs_color",
	"",
	esc_html__( "Header Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_tabs_color",
	$woo_product_single_tabs_color
);

$woo_product_single_tabs_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_product_single_tabs_hover_color",
	"",
	esc_html__( "Header Hover Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_tabs_hover_color",
	$woo_product_single_tabs_hover_color
);

$woo_product_single_tabs_border_color = new BurstMikadoField(
	"colorsimple",
	"woo_product_single_tabs_border_color",
	"",
	esc_html__( "Header Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_tabs_border_color",
	$woo_product_single_tabs_border_color
);

$woo_product_single_tabs_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_product_single_tabs_border_hover_color",
	"",
	esc_html__( "Header Hover Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_tabs_border_hover_color",
	$woo_product_single_tabs_border_hover_color
);

$row2 = new BurstMikadoRow();
$group10->addChild(
	"row2",
	$row2
);

$woo_product_single_tabs_text_color = new BurstMikadoField(
	"colorsimple",
	"woo_product_single_tabs_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_product_single_tabs_text_color",
	$woo_product_single_tabs_text_color
);

$woo_product_single_tabs_text_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_product_single_tabs_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_product_single_tabs_text_hover_color",
	$woo_product_single_tabs_text_hover_color
);

$woo_product_single_tabs_font_size = new BurstMikadoField(
	"textsimple",
	"woo_product_single_tabs_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_product_single_tabs_font_size",
	$woo_product_single_tabs_font_size
);

$woo_product_single_tabs_line_height = new BurstMikadoField(
	"textsimple",
	"woo_product_single_tabs_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_product_single_tabs_line_height",
	$woo_product_single_tabs_line_height
);

$row3 = new BurstMikadoRow( true );
$group10->addChild(
	"row3",
	$row3
);

$woo_product_single_tabs_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"woo_product_single_tabs_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row3->addChild(
	"woo_product_single_tabs_text_transform",
	$woo_product_single_tabs_text_transform
);

$woo_product_single_tabs_font_family = new BurstMikadoField(
	"fontsimple",
	"woo_product_single_tabs_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_product_single_tabs_font_family",
	$woo_product_single_tabs_font_family
);

$woo_product_single_tabs_font_style = new BurstMikadoField(
	"selectblanksimple",
	"woo_product_single_tabs_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row3->addChild(
	"woo_product_single_tabs_font_style",
	$woo_product_single_tabs_font_style
);

$woo_product_single_tabs_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"woo_product_single_tabs_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row3->addChild(
	"woo_product_single_tabs_font_weight",
	$woo_product_single_tabs_font_weight
);

$row4 = new BurstMikadoRow( true );
$group10->addChild(
	"row4",
	$row4
);

$woo_product_single_tabs_letter_spacing = new BurstMikadoField(
	"textsimple",
	"woo_product_single_tabs_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row4->addChild(
	"woo_product_single_tabs_letter_spacing",
	$woo_product_single_tabs_letter_spacing
);

//Product single tabs 

$group11 = new BurstMikadoGroup(
	esc_html__( "Product Single Tabs", 'burst' ),
	esc_html__( "Define Product Single Tabs Style", 'burst' )
);
$panel2->addChild(
	"group11",
	$group11
);

$row1 = new BurstMikadoRow();
$group11->addChild(
	"row1",
	$row1
);

$woo_product_single_vertical_tabs_text_color = new BurstMikadoField(
	"colorsimple",
	"woo_product_single_vertical_tabs_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_vertical_tabs_text_color",
	$woo_product_single_vertical_tabs_text_color
);

$woo_product_single_vertical_tabs_text_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_product_single_vertical_tabs_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_vertical_tabs_text_hover_color",
	$woo_product_single_vertical_tabs_text_hover_color
);

$woo_product_single_vertical_tabs_border_color = new BurstMikadoField(
	"colorsimple",
	"woo_product_single_vertical_tabs_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_vertical_tabs_border_color",
	$woo_product_single_vertical_tabs_border_color
);

$woo_product_single_vertical_tabs_border_width = new BurstMikadoField(
	"textsimple",
	"woo_product_single_vertical_tabs_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_vertical_tabs_border_width",
	$woo_product_single_vertical_tabs_border_width
);

$row2 = new BurstMikadoRow();
$group11->addChild(
	"row2",
	$row2
);

$woo_product_single_vertical_tabs_font_size = new BurstMikadoField(
	"textsimple",
	"woo_product_single_vertical_tabs_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_product_single_vertical_tabs_font_size",
	$woo_product_single_vertical_tabs_font_size
);

$woo_product_single_vertical_tabs_line_height = new BurstMikadoField(
	"textsimple",
	"woo_product_single_vertical_tabs_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_product_single_vertical_tabs_line_height",
	$woo_product_single_vertical_tabs_line_height
);

$woo_product_single_vertical_tabs_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"woo_product_single_vertical_tabs_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"woo_product_single_vertical_tabs_text_transform",
	$woo_product_single_vertical_tabs_text_transform
);

$woo_product_single_vertical_tabs_font_family = new BurstMikadoField(
	"fontsimple",
	"woo_product_single_vertical_tabs_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_product_single_vertical_tabs_font_family",
	$woo_product_single_vertical_tabs_font_family
);

$row3 = new BurstMikadoRow( true );
$group11->addChild(
	"row3",
	$row3
);

$woo_product_single_vertical_tabs_font_style = new BurstMikadoField(
	"selectblanksimple",
	"woo_product_single_vertical_tabs_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row3->addChild(
	"woo_product_single_vertical_tabs_font_style",
	$woo_product_single_vertical_tabs_font_style
);

$woo_product_single_vertical_tabs_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"woo_product_single_vertical_tabs_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row3->addChild(
	"woo_product_single_vertical_tabs_font_weight",
	$woo_product_single_vertical_tabs_font_weight
);

$woo_product_single_vertical_tabs_letter_spacing = new BurstMikadoField(
	"textsimple",
	"woo_product_single_vertical_tabs_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_product_single_vertical_tabs_letter_spacing",
	$woo_product_single_vertical_tabs_letter_spacing
);

//Related Products Title

$group5 = new BurstMikadoGroup(
	esc_html__( "Related Products Title", 'burst' ),
	esc_html__( "Define Related Products Title Style", 'burst' )
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

$woo_product_single_related_color = new BurstMikadoField(
	"colorsimple",
	"woo_product_single_related_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_related_color",
	$woo_product_single_related_color
);

$woo_product_single_related_font_size = new BurstMikadoField(
	"textsimple",
	"woo_product_single_related_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_related_font_size",
	$woo_product_single_related_font_size
);

$woo_product_single_related_line_height = new BurstMikadoField(
	"textsimple",
	"woo_product_single_related_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_product_single_related_line_height",
	$woo_product_single_related_line_height
);

$woo_product_single_related_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"woo_product_single_related_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"woo_product_single_related_text_transform",
	$woo_product_single_related_text_transform
);

$row2 = new BurstMikadoRow( true );
$group5->addChild(
	"row2",
	$row2
);

$woo_product_single_related_font_family = new BurstMikadoField(
	"fontsimple",
	"woo_product_single_related_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_product_single_related_font_family",
	$woo_product_single_related_font_family
);

$woo_product_single_related_font_style = new BurstMikadoField(
	"selectblanksimple",
	"woo_product_single_related_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"woo_product_single_related_font_style",
	$woo_product_single_related_font_style
);

$woo_product_single_related_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"woo_product_single_related_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"woo_product_single_related_font_weight",
	$woo_product_single_related_font_weight
);

$woo_product_single_related_letter_spacing = new BurstMikadoField(
	"textsimple",
	"woo_product_single_related_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_product_single_related_letter_spacing",
	$woo_product_single_related_letter_spacing
);

//Add to cart button

$add_to_cart_subtitle = new BurstMikadoTitle(
	"add_to_cart_subtitle",
	esc_html__( '"Add to cart" button', 'burst' )
);
$panel2->addChild(
	"add_to_cart_subtitle",
	$add_to_cart_subtitle
);

$group6 = new BurstMikadoGroup(
	esc_html__( 'Button Text Style', 'burst' ),
	esc_html__( 'Define "Add To Cart" button text style', 'burst' )
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

$woo_products_single_add_to_cart_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_single_add_to_cart_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_color",
	$woo_products_single_add_to_cart_color
);

$woo_products_single_add_to_cart_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_single_add_to_cart_hover_color",
	"",
	esc_html__( "Hover Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_hover_color",
	$woo_products_single_add_to_cart_hover_color
);

$woo_products_single_add_to_cart_font_size = new BurstMikadoField(
	"textsimple",
	"woo_products_single_add_to_cart_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_font_size",
	$woo_products_single_add_to_cart_font_size
);

$woo_products_single_add_to_cart_line_height = new BurstMikadoField(
	"textsimple",
	"woo_products_single_add_to_cart_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_line_height",
	$woo_products_single_add_to_cart_line_height
);

$row2 = new BurstMikadoRow( true );
$group6->addChild(
	"row2",
	$row2
);

$woo_products_single_add_to_cart_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_single_add_to_cart_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"woo_products_single_add_to_cart_text_transform",
	$woo_products_single_add_to_cart_text_transform
);

$woo_products_single_add_to_cart_font_family = new BurstMikadoField(
	"fontsimple",
	"woo_products_single_add_to_cart_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"woo_products_single_add_to_cart_font_family",
	$woo_products_single_add_to_cart_font_family
);

$woo_products_single_add_to_cart_font_style = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_single_add_to_cart_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"woo_products_single_add_to_cart_font_style",
	$woo_products_single_add_to_cart_font_style
);

$woo_products_single_add_to_cart_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"woo_products_single_add_to_cart_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"woo_products_single_add_to_cart_font_weight",
	$woo_products_single_add_to_cart_font_weight
);

$row3 = new BurstMikadoRow( true );
$group6->addChild(
	"row3",
	$row3
);

$woo_products_single_add_to_cart_letter_spacing = new BurstMikadoField(
	"textsimple",
	"woo_products_single_add_to_cart_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_products_single_add_to_cart_letter_spacing",
	$woo_products_single_add_to_cart_letter_spacing
);

$woo_products_single_add_to_cart_margin_left = new BurstMikadoField(
	"textsimple",
	"woo_products_single_add_to_cart_margin_left",
	"",
	esc_html__( "Margin left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_products_single_add_to_cart_margin_left",
	$woo_products_single_add_to_cart_margin_left
);

$woo_products_single_add_to_cart_padding_left = new BurstMikadoField(
	"textsimple",
	"woo_products_single_add_to_cart_padding_left",
	"",
	esc_html__( "Padding left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_products_single_add_to_cart_padding_left",
	$woo_products_single_add_to_cart_padding_left
);

$woo_products_single_add_to_cart_padding_right = new BurstMikadoField(
	"textsimple",
	"woo_products_single_add_to_cart_padding_right",
	"",
	esc_html__( "Padding right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"woo_products_single_add_to_cart_padding_right",
	$woo_products_single_add_to_cart_padding_right
);

$group18 = new BurstMikadoGroup(
	esc_html__( 'Button Background', 'burst' ),
	esc_html__( 'Define "Add To Cart" Button Background', 'burst' )
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

$woo_products_single_add_to_cart_background_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_single_add_to_cart_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_background_color",
	$woo_products_single_add_to_cart_background_color
);

$woo_products_single_add_to_cart_background_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_single_add_to_cart_background_hover_color",
	"",
	esc_html__( "Hover Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_background_hover_color",
	$woo_products_single_add_to_cart_background_hover_color
);

$group19 = new BurstMikadoGroup(
	esc_html__( 'Button Border', 'burst' ),
	esc_html__( 'Define "Add To Cart" border', 'burst' )
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

$woo_products_single_add_to_cart_border_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_single_add_to_cart_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_border_color",
	$woo_products_single_add_to_cart_border_color
);

$woo_products_single_add_to_cart_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_single_add_to_cart_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_border_hover_color",
	$woo_products_single_add_to_cart_border_hover_color
);

$woo_products_single_add_to_cart_border_width = new BurstMikadoField(
	"textsimple",
	"woo_products_single_add_to_cart_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_border_width",
	$woo_products_single_add_to_cart_border_width
);

$woo_products_single_add_to_cart_border_radius = new BurstMikadoField(
	"textsimple",
	"woo_products_single_add_to_cart_border_radius",
	"",
	esc_html__( "Border radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_border_radius",
	$woo_products_single_add_to_cart_border_radius
);

//Quantity buttons

$quantity_subtitle = new BurstMikadoTitle(
	"quantity_subtitle",
	esc_html__( 'Quantity Buttons', 'burst' )
);
$panel2->addChild(
	"quantity_subtitle",
	$quantity_subtitle
);

$woo_products_single_quantity_button_space = new BurstMikadoField(
	"yesno",
	"woo_products_single_quantity_button_space",
	"no",
	esc_html__( "Disable Space Between Buttons", 'burst' ),
	esc_html__( "Enabling this option will disable space between quantity buttons", 'burst' )
);
$panel2->addChild(
	"woo_products_single_quantity_button_space",
	$woo_products_single_quantity_button_space
);

$group27 = new BurstMikadoGroup(
	esc_html__( 'Buttons Width', 'burst' ),
	esc_html__( 'Define width for buttons', 'burst' )
);
$panel2->addChild(
	"group27",
	$group27
);

$row1 = new BurstMikadoRow();
$group27->addChild(
	"row1",
	$row1
);

$woo_products_single_quantity_width = new BurstMikadoField(
	"textsimple",
	"woo_products_single_quantity_width",
	"",
	esc_html__( "Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quantity_width",
	$woo_products_single_quantity_width
);

$group20 = new BurstMikadoGroup(
	esc_html__( 'Buttons Text Style', 'burst' ),
	esc_html__( 'Define Quantity buttons text style', 'burst' )
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

$woo_products_single_quantity_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_single_quantity_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quantity_color",
	$woo_products_single_quantity_color
);

$woo_products_single_quantity_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_single_quantity_hover_color",
	"",
	esc_html__( "Hover Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quantity_hover_color",
	$woo_products_single_quantity_hover_color
);

$woo_products_single_quantity_font_size = new BurstMikadoField(
	"textsimple",
	"woo_products_single_quantity_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quantity_font_size",
	$woo_products_single_quantity_font_size
);

$woo_products_single_quantity_line_height = new BurstMikadoField(
	"textsimple",
	"woo_products_single_quantity_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quantity_line_height",
	$woo_products_single_quantity_line_height
);

$group21 = new BurstMikadoGroup(
	esc_html__( 'Buttons Background', 'burst' ),
	esc_html__( 'Define Quantity buttons background', 'burst' )
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

$woo_products_single_quantity_background_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_single_quantity_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quantity_background_color",
	$woo_products_single_quantity_background_color
);

$woo_products_single_quantity_background_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_single_quantity_background_hover_color",
	"",
	esc_html__( "Hover Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quantity_background_hover_color",
	$woo_products_single_quantity_background_hover_color
);

$group22 = new BurstMikadoGroup(
	esc_html__( 'Buttons Border', 'burst' ),
	esc_html__( 'Define Quantity buttons border', 'burst' )
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

$woo_products_single_quantity_border_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_single_quantity_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quantity_border_color",
	$woo_products_single_quantity_border_color
);

$woo_products_single_quantity_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_single_quantity_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quantity_border_hover_color",
	$woo_products_single_quantity_border_hover_color
);

$woo_products_single_quantity_border_width = new BurstMikadoField(
	"textsimple",
	"woo_products_single_quantity_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quantity_border_width",
	$woo_products_single_quantity_border_width
);

$woo_products_single_quantity_border_radius = new BurstMikadoField(
	"textsimple",
	"woo_products_single_quantity_border_radius",
	"",
	esc_html__( "Border radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quantity_border_radius",
	$woo_products_single_quantity_border_radius
);

//Quantity input field

$quantity_input_subtitle = new BurstMikadoTitle(
	"quantity_input_subtitle",
	esc_html__( 'Quantity Input Field', 'burst' )
);
$panel2->addChild(
	"quantity_input_subtitle",
	$quantity_input_subtitle
);

$group26 = new BurstMikadoGroup(
	esc_html__( 'Input Field Width', 'burst' ),
	esc_html__( 'Define width for input field', 'burst' )
);
$panel2->addChild(
	"group26",
	$group26
);

$row1 = new BurstMikadoRow();
$group26->addChild(
	"row1",
	$row1
);

$woo_products_single_quantity_input_width = new BurstMikadoField(
	"textsimple",
	"woo_products_single_quantity_input_width",
	"",
	esc_html__( "Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quantity_input_width",
	$woo_products_single_quantity_input_width
);

$group23 = new BurstMikadoGroup(
	esc_html__( 'Input Text Style', 'burst' ),
	esc_html__( 'Define Quantity Input Field text style', 'burst' )
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

$woo_products_single_quantity_input_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_single_quantity_input_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quantity_input_color",
	$woo_products_single_quantity_input_color
);

$woo_products_single_quantity_input_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_single_quantity_input_hover_color",
	"",
	esc_html__( "Focus Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quantity_input_hover_color",
	$woo_products_single_quantity_input_hover_color
);

$woo_products_single_quantity_input_font_size = new BurstMikadoField(
	"textsimple",
	"woo_products_single_quantity_input_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quantity_input_font_size",
	$woo_products_single_quantity_input_font_size
);

$woo_products_single_quantity_input_line_height = new BurstMikadoField(
	"textsimple",
	"woo_products_single_quantity_input_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quantity_input_line_height",
	$woo_products_single_quantity_input_line_height
);

$group24 = new BurstMikadoGroup(
	esc_html__( 'Input Background', 'burst' ),
	esc_html__( 'Define Quantity Input Field background', 'burst' )
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

$woo_products_single_quantity_input_background_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_single_quantity_input_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quantity_input_background_color",
	$woo_products_single_quantity_input_background_color
);

$woo_products_single_quantity_input_background_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_single_quantity_input_background_hover_color",
	"",
	esc_html__( "Focus Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quantity_input_background_hover_color",
	$woo_products_single_quantity_input_background_hover_color
);

$group25 = new BurstMikadoGroup(
	esc_html__( 'Input Border', 'burst' ),
	esc_html__( 'Define Quantity Input Field border', 'burst' )
);
$panel2->addChild(
	"group25",
	$group25
);

$row1 = new BurstMikadoRow();
$group25->addChild(
	"row1",
	$row1
);

$woo_products_single_quantity_input_border_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_single_quantity_input_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quantity_input_border_color",
	$woo_products_single_quantity_input_border_color
);

$woo_products_single_quantity_input_border_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_single_quantity_input_border_hover_color",
	"",
	esc_html__( "Border Focus Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quantity_input_border_hover_color",
	$woo_products_single_quantity_input_border_hover_color
);

$woo_products_single_quantity_input_border_width = new BurstMikadoField(
	"textsimple",
	"woo_products_single_quantity_input_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quantity_input_border_width",
	$woo_products_single_quantity_input_border_width
);

$woo_products_single_quantity_input_border_radius = new BurstMikadoField(
	"textsimple",
	"woo_products_single_quantity_input_border_radius",
	"",
	esc_html__( "Border radius (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quantity_input_border_radius",
	$woo_products_single_quantity_input_border_radius
);

$group_outline_focus_color = new BurstMikadoGroup(
	esc_html__( 'Input Focus Outline Color', 'burst' ),
	esc_html__( 'Define Quantity Input Field outline color on focus', 'burst' )
);
$panel2->addChild(
	"group_outline_focus_color",
	$group_outline_focus_color
);

$row1 = new BurstMikadoRow();
$group_outline_focus_color->addChild(
	"row1",
	$row1
);

$woo_products_single_quan_input_outline_hover_color = new BurstMikadoField(
	"colorsimple",
	"woo_products_single_quan_input_outline_hover_color",
	"",
	esc_html__( "Outline Focus Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"woo_products_single_quan_input_outline_hover_color",
	$woo_products_single_quan_input_outline_hover_color
);

//Product single styles

$panel4 = new BurstMikadoPanel(
	esc_html__( "Header & Sidebar Widget", 'burst' ),
	"product_widget"
);
$woocommercePage->addChild(
	"panel4",
	$panel4
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Product Title", 'burst' ),
	esc_html__( "Define styles for product title in widget. This option works for Products, Recently Viewed Products and Top Rated Products widget", 'burst' )
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
$sidebar_product_title_color = new BurstMikadoField(
	"colorsimple",
	"sidebar_product_title_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_product_title_color",
	$sidebar_product_title_color
);

$sidebar_product_title_font_size = new BurstMikadoField(
	"textsimple",
	"sidebar_product_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_product_title_font_size",
	$sidebar_product_title_font_size
);

$sidebar_product_title_line_height = new BurstMikadoField(
	"textsimple",
	"sidebar_product_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_product_title_line_height",
	$sidebar_product_title_line_height
);

$sidebar_product_title_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"sidebar_product_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"sidebar_product_title_text_transform",
	$sidebar_product_title_text_transform
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);
$sidebar_product_title_font_family = new BurstMikadoField(
	"fontsimple",
	"sidebar_product_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"sidebar_product_title_font_family",
	$sidebar_product_title_font_family
);

$sidebar_product_title_font_style = new BurstMikadoField(
	"selectblanksimple",
	"sidebar_product_title_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"sidebar_product_title_font_style",
	$sidebar_product_title_font_style
);

$sidebar_product_title_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"sidebar_product_title_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"sidebar_product_title_font_weight",
	$sidebar_product_title_font_weight
);

$sidebar_product_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"sidebar_product_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"sidebar_product_title_letter_spacing",
	$sidebar_product_title_letter_spacing
);

$row3 = new BurstMikadoRow();
$group1->addChild(
	"row3",
	$row3
);
$sidebar_product_title_hover_color = new BurstMikadoField(
	"colorsimple",
	"sidebar_product_title_hover_color",
	"",
	esc_html__( "Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"sidebar_product_title_hover_color",
	$sidebar_product_title_hover_color
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Product Price", 'burst' ),
	esc_html__( "Define product price text style in widget. This option works for Products, Recently Viewed Products and Top Rated Products widget", 'burst' )
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

$sidebar_product_price_color = new BurstMikadoField(
	"colorsimple",
	"sidebar_product_price_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_product_price_color",
	$sidebar_product_price_color
);

$sidebar_product_price_font_size = new BurstMikadoField(
	"textsimple",
	"sidebar_product_price_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_product_price_font_size",
	$sidebar_product_price_font_size
);

$sidebar_product_price_line_height = new BurstMikadoField(
	"textsimple",
	"sidebar_product_price_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_product_price_line_height",
	$sidebar_product_price_line_height
);

$sidebar_product_price_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"sidebar_product_price_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"sidebar_product_price_text_transform",
	$sidebar_product_price_text_transform
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);

$sidebar_product_price_font_family = new BurstMikadoField(
	"fontsimple",
	"sidebar_product_price_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"sidebar_product_price_font_family",
	$sidebar_product_price_font_family
);

$sidebar_product_price_font_style = new BurstMikadoField(
	"selectblanksimple",
	"sidebar_product_price_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"sidebar_product_price_font_style",
	$sidebar_product_price_font_style
);

$sidebar_product_price_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"sidebar_product_price_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"sidebar_product_price_font_weight",
	$sidebar_product_price_font_weight
);

$sidebar_product_price_letter_spacing = new BurstMikadoField(
	"textsimple",
	"sidebar_product_price_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"sidebar_product_price_letter_spacing",
	$sidebar_product_price_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$group2->addChild(
	"row3",
	$row3
);

$sidebar_product_price_old_color = new BurstMikadoField(
	"colorsimple",
	"sidebar_product_price_old_color",
	"",
	esc_html__( "Old Price Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"sidebar_product_price_old_color",
	$sidebar_product_price_old_color
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Icon Spacing", 'burst' ),
	esc_html__( "Define padding and margin for widget icon", 'burst' )
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

$sidebar_product_icon_padding_left = new BurstMikadoField(
	"textsimple",
	"sidebar_product_icon_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_product_icon_padding_left",
	$sidebar_product_icon_padding_left
);

$sidebar_product_icon_padding_right = new BurstMikadoField(
	"textsimple",
	"sidebar_product_icon_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_product_icon_padding_right",
	$sidebar_product_icon_padding_right
);

$sidebar_product_icon_margin_left = new BurstMikadoField(
	"textsimple",
	"sidebar_product_icon_margin_left",
	"",
	esc_html__( "Margin Left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_product_icon_margin_left",
	$sidebar_product_icon_margin_left
);

$sidebar_product_icon_margin_right = new BurstMikadoField(
	"textsimple",
	"sidebar_product_icon_margin_right",
	"",
	esc_html__( "Margin Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"sidebar_product_icon_margin_right",
	$sidebar_product_icon_margin_right
);

//WooCommerce Dropdown Cart

$cart_styles_title = new BurstMikadoTitle(
	"cart_styles_title",
	esc_html__( "Cart Menu Item Style", 'burst' )
);
$panel4->addChild(
	"cart_styles_title",
	$cart_styles_title
);

$group6 = new BurstMikadoGroup(
	esc_html__( "Count Number Style", 'burst' ),
	esc_html__( "Define count number style in header.", 'burst' )
);
$panel4->addChild(
	"group6",
	$group6
);

$row1 = new BurstMikadoRow();
$group6->addChild(
	"row1",
	$row1
);

$header_cart_icon_count_color = new BurstMikadoField(
	"colorsimple",
	"header_cart_icon_count_color",
	"",
	esc_html__( "Count Number Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"header_cart_icon_count_color",
	$header_cart_icon_count_color
);

$header_cart_icon_count_hover_color = new BurstMikadoField(
	"colorsimple",
	"header_cart_icon_count_hover_color",
	"",
	esc_html__( "Count Number Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"header_cart_icon_count_hover_color",
	$header_cart_icon_count_hover_color
);

$header_cart_icon_count_size = new BurstMikadoField(
	"textsimple",
	"header_cart_icon_count_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"header_cart_icon_count_size",
	$header_cart_icon_count_size
);

$group_count_number_sticky = new BurstMikadoGroup(
	esc_html__( "Cart Style for Sticky Menu", 'burst' ),
	esc_html__( "Define cart style for sticky menu.", 'burst' )
);
$panel4->addChild(
	"group_count_number_sticky",
	$group_count_number_sticky
);

$row1 = new BurstMikadoRow();
$group_count_number_sticky->addChild(
	"row1",
	$row1
);

$header_sticky_cart_icon_count_color = new BurstMikadoField(
	"colorsimple",
	"header_sticky_cart_icon_count_color",
	"",
	esc_html__( "Count Number Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"header_sticky_cart_icon_count_color",
	$header_sticky_cart_icon_count_color
);

$header_sticky_cart_icon_count_hover_color = new BurstMikadoField(
	"colorsimple",
	"header_sticky_cart_icon_count_hover_color",
	"",
	esc_html__( "Count Number Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"header_sticky_cart_icon_count_hover_color",
	$header_sticky_cart_icon_count_hover_color
);

$cart_skin_color = new BurstMikadoField(
	"selectblank",
	"cart_skin_color",
	"",
	esc_html__( "Cart Skin", 'burst' ),
	esc_html__( "Dark or Light", 'burst' ),
	array(
		"dark" => esc_html__( "Dark", 'burst' ),
		"light" => esc_html__( "Light", 'burst' )
	)
);
$panel4->addChild(
	"cart_skin_color",
	$cart_skin_color
);

$ww_dropdown_styles_title = new BurstMikadoTitle(
	"ww_dropdown_styles_title",
	esc_html__( "Dropdown Item Style", 'burst' )
);
$panel4->addChild(
	"ww_dropdown_styles_title",
	$ww_dropdown_styles_title
);

$header_cart_drop_down_position = new BurstMikadoField(
	"selectblank",
	"header_cart_drop_down_position",
	"",
	esc_html__( "Dropdown Position", 'burst' ),
	esc_html__( "Choose position of dropdown", 'burst' ),
	array(
		"left" => esc_html__( "Left", 'burst' ),
		"right" => esc_html__( "Right", 'burst' )
	)
);
$panel4->addChild(
	"header_cart_drop_down_position",
	$header_cart_drop_down_position
);

$group_drop_down_back_color = new BurstMikadoGroup(
	esc_html__( "Dropdown Styles", 'burst' ),
	esc_html__( "Define dropdown box style", 'burst' )
);
$panel4->addChild(
	"group_drop_down_back_color",
	$group_drop_down_back_color
);

$row1 = new BurstMikadoRow();
$group_drop_down_back_color->addChild(
	"row1",
	$row1
);

$header_cart_drop_down_back_color = new BurstMikadoField(
	"colorsimple",
	"header_cart_drop_down_back_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"header_cart_drop_down_back_color",
	$header_cart_drop_down_back_color
);

$header_cart_drop_down_border_color = new BurstMikadoField(
	"colorsimple",
	"header_cart_drop_down_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"header_cart_drop_down_border_color",
	$header_cart_drop_down_border_color
);

$group8 = new BurstMikadoGroup(
	esc_html__( "Product Name Style", 'burst' ),
	esc_html__( "Define style for product name", 'burst' )
);
$panel4->addChild(
	"group8",
	$group8
);

$row1 = new BurstMikadoRow();
$group8->addChild(
	"row1",
	$row1
);

$drop_down_product_name_color = new BurstMikadoField(
	"colorsimple",
	"drop_down_product_name_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"drop_down_product_name_color",
	$drop_down_product_name_color
);

$drop_down_product_name_hover_color = new BurstMikadoField(
	"colorsimple",
	"drop_down_product_name_hover_color",
	"",
	esc_html__( "Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"drop_down_product_name_hover_color",
	$drop_down_product_name_hover_color
);

$drop_down_product_name_font_size = new BurstMikadoField(
	"textsimple",
	"drop_down_product_name_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"drop_down_product_name_font_size",
	$drop_down_product_name_font_size
);

$drop_down_product_name_line_height = new BurstMikadoField(
	"textsimple",
	"drop_down_product_name_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"drop_down_product_name_line_height",
	$drop_down_product_name_line_height
);

$row2 = new BurstMikadoRow();
$group8->addChild(
	"row2",
	$row2
);

$drop_down_product_name_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"drop_down_product_name_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"drop_down_product_name_text_transform",
	$drop_down_product_name_text_transform
);

$drop_down_product_name_font_family = new BurstMikadoField(
	"fontsimple",
	"drop_down_product_name_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"drop_down_product_name_font_family",
	$drop_down_product_name_font_family
);

$drop_down_product_name_font_style = new BurstMikadoField(
	"selectblanksimple",
	"drop_down_product_name_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"drop_down_product_name_font_style",
	$drop_down_product_name_font_style
);

$drop_down_product_name_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"drop_down_product_name_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"drop_down_product_name_font_weight",
	$drop_down_product_name_font_weight
);

$row3 = new BurstMikadoRow();
$group8->addChild(
	"row3",
	$row3
);

$drop_down_product_name_letter_spacing = new BurstMikadoField(
	"textsimple",
	"drop_down_product_name_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"drop_down_product_name_letter_spacing",
	$drop_down_product_name_letter_spacing
);

$group10 = new BurstMikadoGroup(
	esc_html__( "Product Total Style", 'burst' ),
	esc_html__( "Define style for product total", 'burst' )
);
$panel4->addChild(
	"group10",
	$group10
);

$row1 = new BurstMikadoRow();
$group10->addChild(
	"row1",
	$row1
);

$drop_down_product_total_color = new BurstMikadoField(
	"colorsimple",
	"drop_down_product_total_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"drop_down_product_total_color",
	$drop_down_product_total_color
);

$drop_down_product_total_font_size = new BurstMikadoField(
	"textsimple",
	"drop_down_product_total_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"drop_down_product_total_font_size",
	$drop_down_product_total_font_size
);

$drop_down_product_total_line_height = new BurstMikadoField(
	"textsimple",
	"drop_down_product_total_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"drop_down_product_total_line_height",
	$drop_down_product_total_line_height
);

$drop_down_product_total_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"drop_down_product_total_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"drop_down_product_total_text_transform",
	$drop_down_product_total_text_transform
);

$row2 = new BurstMikadoRow();
$group10->addChild(
	"row2",
	$row2
);

$drop_down_product_total_font_family = new BurstMikadoField(
	"fontsimple",
	"drop_down_product_total_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"drop_down_product_total_font_family",
	$drop_down_product_total_font_family
);

$drop_down_product_total_font_style = new BurstMikadoField(
	"selectblanksimple",
	"drop_down_product_total_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"drop_down_product_total_font_style",
	$drop_down_product_total_font_style
);

$drop_down_product_total_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"drop_down_product_total_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"drop_down_product_total_font_weight",
	$drop_down_product_total_font_weight
);

$drop_down_product_total_letter_spacing = new BurstMikadoField(
	"textsimple",
	"drop_down_product_total_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"drop_down_product_total_letter_spacing",
	$drop_down_product_total_letter_spacing
);

$group_drop_cart_buttons = new BurstMikadoGroup(
	esc_html__( "Dropdown Cart Buttons", 'burst' ),
	esc_html__( "Define style for dropdown cart buttons", 'burst' )
);
$panel4->addChild(
	"group_drop_cart_buttons",
	$group_drop_cart_buttons
);

$row1 = new BurstMikadoRow();
$group_drop_cart_buttons->addChild(
	"row1",
	$row1
);

$drop_down_cart_button_color = new BurstMikadoField(
	"colorsimple",
	"drop_down_cart_button_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"drop_down_cart_button_color",
	$drop_down_cart_button_color
);

$drop_down_cart_button_color_hover = new BurstMikadoField(
	"colorsimple",
	"drop_down_cart_button_color_hover",
	"",
	esc_html__( "Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"drop_down_cart_button_color_hover",
	$drop_down_cart_button_color_hover
);

$drop_down_cart_button_line_height = new BurstMikadoField(
	"textsimple",
	"drop_down_cart_button_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"drop_down_cart_button_line_height",
	$drop_down_cart_button_line_height
);

$row2 = new BurstMikadoRow();
$group_drop_cart_buttons->addChild(
	"row2",
	$row2
);

$drop_down_cart_button_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"drop_down_cart_button_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"drop_down_cart_button_text_transform",
	$drop_down_cart_button_text_transform
);

$drop_down_cart_button_font_family = new BurstMikadoField(
	"fontsimple",
	"drop_down_cart_button_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"drop_down_cart_button_font_family",
	$drop_down_cart_button_font_family
);

$drop_down_cart_button_font_style = new BurstMikadoField(
	"selectblanksimple",
	"drop_down_cart_button_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"drop_down_cart_button_font_style",
	$drop_down_cart_button_font_style
);

$drop_down_cart_button_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"drop_down_cart_button_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"drop_down_cart_button_font_weight",
	$drop_down_cart_button_font_weight
);

$row3 = new BurstMikadoRow();
$group_drop_cart_buttons->addChild(
	"row3",
	$row3
);

$drop_down_cart_button_background_color = new BurstMikadoField(
	"colorsimple",
	"drop_down_cart_button_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"drop_down_cart_button_background_color",
	$drop_down_cart_button_background_color
);

$drop_down_cart_button_background_color_hover = new BurstMikadoField(
	"colorsimple",
	"drop_down_cart_button_background_color_hover",
	"",
	esc_html__( "Background Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"drop_down_cart_button_background_color_hover",
	$drop_down_cart_button_background_color_hover
);

$group_drop_cart_remove_button = new BurstMikadoGroup(
	esc_html__( "Remove Button Style", 'burst' ),
	esc_html__( "Define style for remove button", 'burst' )
);
$panel4->addChild(
	"group_drop_cart_remove_button",
	$group_drop_cart_remove_button
);

$row1 = new BurstMikadoRow();
$group_drop_cart_remove_button->addChild(
	"row1",
	$row1
);

$drop_down_remove_button_color = new BurstMikadoField(
	"colorsimple",
	"drop_down_remove_button_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"drop_down_remove_button_color",
	$drop_down_remove_button_color
);

$drop_down_remove_button_color_hover = new BurstMikadoField(
	"colorsimple",
	"drop_down_remove_button_color_hover",
	"",
	esc_html__( "Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"drop_down_remove_button_color_hover",
	$drop_down_remove_button_color_hover
);

$drop_down_remove_button_back_color = new BurstMikadoField(
	"colorsimple",
	"drop_down_remove_button_back_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"drop_down_remove_button_back_color",
	$drop_down_remove_button_back_color
);

$drop_down_remove_button_back_color_hover = new BurstMikadoField(
	"colorsimple",
	"drop_down_remove_button_back_color_hover",
	"",
	esc_html__( "Background Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"drop_down_remove_button_back_color_hover",
	$drop_down_remove_button_back_color_hover
);

//Footer widget

$panel5 = new BurstMikadoPanel(
	esc_html__( "Footer Widget", 'burst' ),
	"footer_product_widget"
);
$woocommercePage->addChild(
	"panel5",
	$panel5
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Product Title", 'burst' ),
	esc_html__( "Define styles for product title in widget. This option works for Products, Recently Viewed Products and Top Rated Products widget", 'burst' )
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

$footer_wdgt_product_title_color = new BurstMikadoField(
	"colorsimple",
	"footer_wdgt_product_title_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_wdgt_product_title_color",
	$footer_wdgt_product_title_color
);

$footer_wdgt_product_title_font_size = new BurstMikadoField(
	"textsimple",
	"footer_wdgt_product_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_wdgt_product_title_font_size",
	$footer_wdgt_product_title_font_size
);

$footer_wdgt_product_title_line_height = new BurstMikadoField(
	"textsimple",
	"footer_wdgt_product_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_wdgt_product_title_line_height",
	$footer_wdgt_product_title_line_height
);

$footer_wdgt_product_title_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"footer_wdgt_product_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"footer_wdgt_product_title_text_transform",
	$footer_wdgt_product_title_text_transform
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);

$footer_wdgt_product_title_font_family = new BurstMikadoField(
	"fontsimple",
	"footer_wdgt_product_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"footer_wdgt_product_title_font_family",
	$footer_wdgt_product_title_font_family
);

$footer_wdgt_product_title_font_style = new BurstMikadoField(
	"selectblanksimple",
	"footer_wdgt_product_title_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"footer_wdgt_product_title_font_style",
	$footer_wdgt_product_title_font_style
);

$footer_wdgt_product_title_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"footer_wdgt_product_title_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"footer_wdgt_product_title_font_weight",
	$footer_wdgt_product_title_font_weight
);

$footer_wdgt_product_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"footer_wdgt_product_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"footer_wdgt_product_title_letter_spacing",
	$footer_wdgt_product_title_letter_spacing
);

$row3 = new BurstMikadoRow();
$group1->addChild(
	"row3",
	$row3
);
$footer_wdgt_product_title_hover_color = new BurstMikadoField(
	"colorsimple",
	"footer_wdgt_product_title_hover_color",
	"",
	esc_html__( "Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"footer_wdgt_product_title_hover_color",
	$footer_wdgt_product_title_hover_color
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Product Price", 'burst' ),
	esc_html__( "Define product price text style in widget. This option works for Products, Recently Viewed Products and Top Rated Products widget", 'burst' )
);
$panel5->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$footer_wdgt_product_price_color = new BurstMikadoField(
	"colorsimple",
	"footer_wdgt_product_price_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_wdgt_product_price_color",
	$footer_wdgt_product_price_color
);

$footer_wdgt_product_price_font_size = new BurstMikadoField(
	"textsimple",
	"footer_wdgt_product_price_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_wdgt_product_price_font_size",
	$footer_wdgt_product_price_font_size
);

$footer_wdgt_product_price_line_height = new BurstMikadoField(
	"textsimple",
	"footer_wdgt_product_price_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"footer_wdgt_product_price_line_height",
	$footer_wdgt_product_price_line_height
);

$footer_wdgt_product_price_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"footer_wdgt_product_price_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"footer_wdgt_product_price_text_transform",
	$footer_wdgt_product_price_text_transform
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);

$footer_wdgt_product_price_font_family = new BurstMikadoField(
	"fontsimple",
	"footer_wdgt_product_price_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"footer_wdgt_product_price_font_family",
	$footer_wdgt_product_price_font_family
);

$footer_wdgt_product_price_font_style = new BurstMikadoField(
	"selectblanksimple",
	"footer_wdgt_product_price_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"footer_wdgt_product_price_font_style",
	$footer_wdgt_product_price_font_style
);

$footer_wdgt_product_price_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"footer_wdgt_product_price_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"footer_wdgt_product_price_font_weight",
	$footer_wdgt_product_price_font_weight
);

$footer_wdgt_product_price_letter_spacing = new BurstMikadoField(
	"textsimple",
	"footer_wdgt_product_price_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"footer_wdgt_product_price_letter_spacing",
	$footer_wdgt_product_price_letter_spacing
);

$row3 = new BurstMikadoRow( true );
$group2->addChild(
	"row3",
	$row3
);

$footer_wdgt_product_price_old_color = new BurstMikadoField(
	"colorsimple",
	"footer_wdgt_product_price_old_color",
	"",
	esc_html__( "Old Price Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"footer_wdgt_product_price_old_color",
	$footer_wdgt_product_price_old_color
);
