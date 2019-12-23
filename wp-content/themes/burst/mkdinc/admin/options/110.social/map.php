<?php

$burst_mikado_IconCollections = burst_mikado_return_icon_collections();

$socialPage = new BurstMikadoAdminPage(
	"12",
	esc_html__( "Social", 'burst' ),
	"icon_group"
);
$burst_mikado_Framework->mkdOptions->addAdminPage(
	"socialPage",
	$socialPage
);

// Social sidebar

$panel1 = new BurstMikadoPanel(
	esc_html__( "Social Sidebar", 'burst' ),
	"social_sidebar"
);
$socialPage->addChild(
	"panel1",
	$panel1
);

$enable_social_sidebar = new BurstMikadoField(
	"yesno",
	"enable_social_sidebar",
	"no",
	esc_html__( "Enable Social Sidebar", 'burst' ),
	esc_html__( "Enabling this option will allow social sidebar", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_enable_social_sidebar_container"
	)
);
$panel1->addChild(
	"enable_social_sidebar",
	$enable_social_sidebar
);

$enable_social_sidebar_container = new BurstMikadoContainer(
	"enable_social_sidebar_container",
	"enable_social_sidebar",
	"no"
);
$panel1->addChild(
	"enable_social_sidebar_container",
	$enable_social_sidebar_container
);

$social_sidebar_icon_pack = new BurstMikadoField(
	'select',
	'social_sidebar_icon_pack',
	'font_elegant',
	esc_html__( 'Social Sidebar Icon Pack', 'burst' ),
	'',
	$burst_mikado_IconCollections->getIconCollectionsExclude(
		array( 'linea_icons', 'simple_line_icons', 'dripicons' )
	)
);
$enable_social_sidebar_container->addChild(
	'social_sidebar_icon_pack',
	$social_sidebar_icon_pack
);

$social_sidebar_icon_style = new BurstMikadoField(
	"select",
	"social_sidebar_icon_style",
	"circle",
	esc_html__( "Icon Shape Type", 'burst' ),
	esc_html__( "Specify Icon Shape Type", 'burst' ),
	array(
		"circle" => esc_html__( "Circle", 'burst' ),
		"square" => esc_html__( "Square", 'burst' ),
		"normal" => esc_html__( "Normal", 'burst' ),
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"normal" => "#mkdf_enable_social_sidebar_box_type_container"
		),
		"show"       => array(
			"circle" => "#mkdf_enable_social_sidebar_box_type_container",
			"square" => "#mkdf_enable_social_sidebar_box_type_container"
		)
	)
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_icon_style",
	$social_sidebar_icon_style
);

$social_sidebar_icon_size = new BurstMikadoField(
	"text",
	"social_sidebar_icon_size",
	"",
	esc_html__( "Icon Size", 'burst' ),
	esc_html__( "Set size for icon", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_icon_size",
	$social_sidebar_icon_size
);

$social_sidebar_icon_shape_size = new BurstMikadoField(
	"text",
	"social_sidebar_icon_shape_size",
	"",
	esc_html__( "Shape Size", 'burst' ),
	esc_html__( "Set size for icon shape", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_icon_shape_size",
	$social_sidebar_icon_shape_size
);

$social_sidebar_icon_color = new BurstMikadoField(
	"color",
	"social_sidebar_icon_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "Set color for Icon", 'burst' )
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_icon_color",
	$social_sidebar_icon_color
);

$social_sidebar_icon_hover_color = new BurstMikadoField(
	"color",
	"social_sidebar_icon_hover_color",
	"",
	esc_html__( "Hover Color", 'burst' ),
	esc_html__( "Set color for Icon", 'burst' )
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_icon_hover_color",
	$social_sidebar_icon_hover_color
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Position of sidebar", 'burst' ),
	esc_html__( "Define position for Social Sidebar. Place values with 'px' or '%'", 'burst' )
);
$enable_social_sidebar_container->addChild(
	"group1",
	$group1
);
$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$social_sidebar_icon_position_top = new BurstMikadoField(
	"textsimple",
	"social_sidebar_icon_position_top",
	"",
	esc_html__( "From top (default 20%)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"social_sidebar_icon_position_top",
	$social_sidebar_icon_position_top
);
$social_sidebar_icon_position_right = new BurstMikadoField(
	"textsimple",
	"social_sidebar_icon_position_right",
	"",
	esc_html__( "From right (default 30px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"social_sidebar_icon_position_right",
	$social_sidebar_icon_position_right
);

$social_sidebar_icon_space_size = new BurstMikadoField(
	"text",
	"social_sidebar_icon_space_size",
	"",
	esc_html__( "Space Between Icons Size (px)", 'burst' ),
	esc_html__( "Set size for space between icons. Default value is 2px.", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_icon_space_size",
	$social_sidebar_icon_space_size
);

$enable_social_sidebar_box_type_container = new BurstMikadoContainer(
	"enable_social_sidebar_box_type_container",
	"social_sidebar_icon_style",
	"normal"
);
$enable_social_sidebar_container->addChild(
	"enable_social_sidebar_box_type_container",
	$enable_social_sidebar_box_type_container
);

$social_sidebar_icon_background_color = new BurstMikadoField(
	"color",
	"social_sidebar_icon_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Set color for background", 'burst' )
);
$enable_social_sidebar_box_type_container->addChild(
	"social_sidebar_icon_background_color",
	$social_sidebar_icon_background_color
);

$social_sidebar_icon_background_hover_color = new BurstMikadoField(
	"color",
	"social_sidebar_icon_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'burst' ),
	esc_html__( "Set color for background hover", 'burst' )
);
$enable_social_sidebar_box_type_container->addChild(
	"social_sidebar_icon_background_hover_color",
	$social_sidebar_icon_background_hover_color
);

$social_sidebar_icon_border_color = new BurstMikadoField(
	"color",
	"social_sidebar_icon_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "Set color for Border", 'burst' )
);
$enable_social_sidebar_box_type_container->addChild(
	"social_sidebar_icon_border_color",
	$social_sidebar_icon_border_color
);

$social_sidebar_icon_border_hover_color = new BurstMikadoField(
	"color",
	"social_sidebar_icon_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'burst' ),
	esc_html__( "Set color for border hover", 'burst' )
);
$enable_social_sidebar_box_type_container->addChild(
	"social_sidebar_icon_border_hover_color",
	$social_sidebar_icon_border_hover_color
);

$social_sidebar_icon_border_width = new BurstMikadoField(
	"text",
	"social_sidebar_icon_border_width",
	"",
	esc_html__( "Border Size", 'burst' ),
	esc_html__( "Set size for border", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$enable_social_sidebar_box_type_container->addChild(
	"social_sidebar_icon_border_width",
	$social_sidebar_icon_border_width
);

// Facebook sidebar icon

$social_sidebar_facebook_icon = new BurstMikadoField(
	"yesno",
	"social_sidebar_facebook_icon",
	"no",
	esc_html__( "Enable Facebook icon", 'burst' ),
	esc_html__( "Enabling this option will allow Facebook icon on your Social Sidebar", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_enable_social_sidebar_facebook_icon_container"
	)
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_facebook_icon",
	$social_sidebar_facebook_icon
);

$enable_social_sidebar_facebook_icon_container = new BurstMikadoContainer(
	"enable_social_sidebar_facebook_icon_container",
	"social_sidebar_facebook_icon",
	"no"
);
$enable_social_sidebar_container->addChild(
	"enable_social_sidebar_facebook_icon_container",
	$enable_social_sidebar_facebook_icon_container
);
$social_sidebar_facebook_icon_link = new BurstMikadoField(
	"text",
	"social_sidebar_facebook_icon_link",
	"",
	esc_html__( "Link", 'burst' ),
	esc_html__( "Set Facebook link.", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$enable_social_sidebar_facebook_icon_container->addChild(
	"social_sidebar_facebook_icon_link",
	$social_sidebar_facebook_icon_link
);

// Twitter sidebar icon

$social_sidebar_twitter_icon = new BurstMikadoField(
	"yesno",
	"social_sidebar_twitter_icon",
	"no",
	esc_html__( "Enable Twitter icon", 'burst' ),
	esc_html__( "Enabling this option will allow Twitter icon on your Social Sidebar", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_enable_social_sidebar_twitter_icon_container"
	)
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_twitter_icon",
	$social_sidebar_twitter_icon
);

$enable_social_sidebar_twitter_icon_container = new BurstMikadoContainer(
	"enable_social_sidebar_twitter_icon_container",
	"social_sidebar_twitter_icon",
	"no"
);
$enable_social_sidebar_container->addChild(
	"enable_social_sidebar_twitter_icon_container",
	$enable_social_sidebar_twitter_icon_container
);
$social_sidebar_twitter_icon_link = new BurstMikadoField(
	"text",
	"social_sidebar_twitter_icon_link",
	"",
	esc_html__( "Link", 'burst' ),
	esc_html__( "Set Twitter link.", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$enable_social_sidebar_twitter_icon_container->addChild(
	"social_sidebar_twitter_icon_link",
	$social_sidebar_twitter_icon_link
);

// Google Plus sidebar icon

$social_sidebar_google_plus_icon = new BurstMikadoField(
	"yesno",
	"social_sidebar_google_plus_icon",
	"no",
	esc_html__( "Enable Google Plus icon", 'burst' ),
	esc_html__( "Enabling this option will allow Google Plus icon on your Social Sidebar", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_enable_social_sidebar_google_plus_icon_container"
	)
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_google_plus_icon",
	$social_sidebar_google_plus_icon
);

$enable_social_sidebar_google_plus_icon_container = new BurstMikadoContainer(
	"enable_social_sidebar_google_plus_icon_container",
	"social_sidebar_google_plus_icon",
	"no"
);
$enable_social_sidebar_container->addChild(
	"enable_social_sidebar_google_plus_icon_container",
	$enable_social_sidebar_google_plus_icon_container
);
$social_sidebar_google_plus_icon_link = new BurstMikadoField(
	"text",
	"social_sidebar_google_plus_icon_link",
	"",
	esc_html__( "Link", 'burst' ),
	esc_html__( "Set Google Plus link.", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$enable_social_sidebar_google_plus_icon_container->addChild(
	"social_sidebar_google_plus_icon_link",
	$social_sidebar_google_plus_icon_link
);

// LinkedIn sidebar icon

$social_sidebar_linkedIn_icon = new BurstMikadoField(
	"yesno",
	"social_sidebar_linkedIn_icon",
	"no",
	esc_html__( "Enable LinkedIn icon", 'burst' ),
	esc_html__( "Enabling this option will allow LinkedIn icon on your Social Sidebar", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_enable_social_sidebar_linkedIn_icon_container"
	)
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_linkedIn_icon",
	$social_sidebar_linkedIn_icon
);

$enable_social_sidebar_linkedIn_icon_container = new BurstMikadoContainer(
	"enable_social_sidebar_linkedIn_icon_container",
	"social_sidebar_linkedIn_icon",
	"no"
);
$enable_social_sidebar_container->addChild(
	"enable_social_sidebar_linkedIn_icon_container",
	$enable_social_sidebar_linkedIn_icon_container
);
$social_sidebar_linkedIn_icon_link = new BurstMikadoField(
	"text",
	"social_sidebar_linkedIn_icon_link",
	"",
	esc_html__( "Link", 'burst' ),
	esc_html__( "Set LinkedIn link.", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$enable_social_sidebar_linkedIn_icon_container->addChild(
	"social_sidebar_linkedIn_icon_link",
	$social_sidebar_linkedIn_icon_link
);

// Tumblr sidebar icon

$social_sidebar_tumblr_icon = new BurstMikadoField(
	"yesno",
	"social_sidebar_tumblr_icon",
	"no",
	esc_html__( "Enable Tumblr icon", 'burst' ),
	esc_html__( "Enabling this option will allow Tumblr icon on your Social Sidebar", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_enable_social_sidebar_tumblr_icon_container"
	)
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_tumblr_icon",
	$social_sidebar_tumblr_icon
);

$enable_social_sidebar_tumblr_icon_container = new BurstMikadoContainer(
	"enable_social_sidebar_tumblr_icon_container",
	"social_sidebar_tumblr_icon",
	"no"
);
$enable_social_sidebar_container->addChild(
	"enable_social_sidebar_tumblr_icon_container",
	$enable_social_sidebar_tumblr_icon_container
);
$social_sidebar_tumblr_icon_link = new BurstMikadoField(
	"text",
	"social_sidebar_tumblr_icon_link",
	"",
	esc_html__( "Link", 'burst' ),
	esc_html__( "Set Tumblr link.", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$enable_social_sidebar_tumblr_icon_container->addChild(
	"social_sidebar_tumblr_icon_link",
	$social_sidebar_tumblr_icon_link
);

// Pinterest sidebar icon

$social_sidebar_pinterest_icon = new BurstMikadoField(
	"yesno",
	"social_sidebar_pinterest_icon",
	"no",
	esc_html__( "Enable Pinterest icon", 'burst' ),
	esc_html__( "Enabling this option will allow Pinterest icon on your Social Sidebar", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_enable_social_sidebar_pinterest_icon_container"
	)
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_pinterest_icon",
	$social_sidebar_pinterest_icon
);

$enable_social_sidebar_pinterest_icon_container = new BurstMikadoContainer(
	"enable_social_sidebar_pinterest_icon_container",
	"social_sidebar_pinterest_icon",
	"no"
);
$enable_social_sidebar_container->addChild(
	"enable_social_sidebar_pinterest_icon_container",
	$enable_social_sidebar_pinterest_icon_container
);
$social_sidebar_pinterest_icon_link = new BurstMikadoField(
	"text",
	"social_sidebar_pinterest_icon_link",
	"",
	esc_html__( "Link", 'burst' ),
	esc_html__( "Set Pinterest link.", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$enable_social_sidebar_pinterest_icon_container->addChild(
	"social_sidebar_pinterest_icon_link",
	$social_sidebar_pinterest_icon_link
);

// VK sidebar icon

$social_sidebar_vk_icon = new BurstMikadoField(
	"yesno",
	"social_sidebar_vk_icon",
	"no",
	esc_html__( "Enable VK icon", 'burst' ),
	esc_html__( "Enabling this option will allow VK icon on your Social Sidebar", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_enable_social_sidebar_vk_icon_container"
	)
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_vk_icon",
	$social_sidebar_vk_icon
);

$enable_social_sidebar_vk_icon_container = new BurstMikadoContainer(
	"enable_social_sidebar_vk_icon_container",
	"social_sidebar_vk_icon",
	"no"
);
$enable_social_sidebar_container->addChild(
	"enable_social_sidebar_vk_icon_container",
	$enable_social_sidebar_vk_icon_container
);
$social_sidebar_vk_icon_link = new BurstMikadoField(
	"text",
	"social_sidebar_vk_icon_link",
	"",
	esc_html__( "Link", 'burst' ),
	esc_html__( "Set VK link.", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$enable_social_sidebar_vk_icon_container->addChild(
	"social_sidebar_vk_icon_link",
	$social_sidebar_vk_icon_link
);

//Enable Social Share

$panel2 = new BurstMikadoPanel(
	esc_html__( "Enable Social Share", 'burst' ),
	"social_sharing_panel"
);
$socialPage->addChild(
	"panel2",
	$panel2
);

$enable_social_share = new BurstMikadoField(
	"yesno",
	"enable_social_share",
	"no",
	esc_html__( "Enable Social Share", 'burst' ),
	esc_html__( "Enabling this option will allow social share on networks of your choice", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_social_networks_panel,#mkdf_show_social_share_panel"
	)
);
$panel2->addChild(
	"enable_social_share",
	$enable_social_share
);

//Show Social Share

$panel3 = new BurstMikadoPanel(
	esc_html__( "Show Social Share On", 'burst' ),
	"show_social_share_panel",
	"enable_social_share",
	"no"
);
$socialPage->addChild(
	"panel3",
	$panel3
);

$post_types_names_post = new BurstMikadoField(
	"flagpost",
	"post_types_names_post",
	"",
	esc_html__( "Posts", 'burst' ),
	esc_html__( "Show Social Share on Blog Posts", 'burst' )
);
$panel3->addChild(
	"post_types_names_post",
	$post_types_names_post
);

$post_types_names_page = new BurstMikadoField(
	"flagpage",
	"post_types_names_page",
	"",
	esc_html__( "Pages", 'burst' ),
	esc_html__( "Show Social Share on Pages", 'burst' )
);
$panel3->addChild(
	"post_types_names_page",
	$post_types_names_page
);

$post_types_names_attachment = new BurstMikadoField(
	"flagmedia",
	"post_types_names_attachment",
	"",
	esc_html__( "Media", 'burst' ),
	esc_html__( "Show Social Share for Images and Videos", 'burst' )
);
$panel3->addChild(
	"post_types_names_attachment",
	$post_types_names_attachment
);

$post_types_names_portfolio_page = new BurstMikadoField(
	"flagportfolio",
	"post_types_names_portfolio_page",
	"",
	esc_html__( "Portfolio Item", 'burst' ),
	esc_html__( "Show Social Share for Portfolio Items", 'burst' )
);
$panel3->addChild(
	"post_types_names_portfolio_page",
	$post_types_names_portfolio_page
);

if ( burst_mikado_is_woocommerce_installed() ) {
	$post_types_names_product = new BurstMikadoField(
		"flagproduct",
		"post_types_names_product",
		"",
		esc_html__( "Product", 'burst' ),
		esc_html__( "Show Social Share for Product Items", 'burst' )
	);
	$panel3->addChild(
		"post_types_names_product",
		$post_types_names_product
	);
}

//Social Share Networks

$panel4 = new BurstMikadoPanel(
	esc_html__( "Social Networks", 'burst' ),
	"social_networks_panel",
	"enable_social_share",
	"no"
);
$socialPage->addChild(
	"panel4",
	$panel4
);

//Facebook

$facebook_subtitle = new BurstMikadoTitle(
	"facebook_subtitle",
	esc_html__( "Share on Facebook", 'burst' )
);
$panel4->addChild(
	"facebook_subtitle",
	$facebook_subtitle
);

$enable_facebook_share = new BurstMikadoField(
	"yesno",
	"enable_facebook_share",
	"no",
	esc_html__( "Enable Share", 'burst' ),
	esc_html__( "Enabling this option will allow sharing via Facebook", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_enable_facebook_share_container"
	)
);
$panel4->addChild(
	"enable_facebook_share",
	$enable_facebook_share
);

$enable_facebook_share_container = new BurstMikadoContainer(
	"enable_facebook_share_container",
	"enable_facebook_share",
	"no"
);
$panel4->addChild(
	"enable_facebook_share_container",
	$enable_facebook_share_container
);

$facebook_icon = new BurstMikadoField(
	"image",
	"facebook_icon",
	"",
	esc_html__( "Upload Icon", 'burst' ),
	""
);
$enable_facebook_share_container->addChild(
	"facebook_icon",
	$facebook_icon
);

//Twitter
$twitter_subtitle = new BurstMikadoTitle(
	"twitter_subtitle",
	esc_html__( "Share on Twitter", 'burst' )
);
$panel4->addChild(
	"twitter_subtitle",
	$twitter_subtitle
);

$enable_twitter_share = new BurstMikadoField(
	"yesno",
	"enable_twitter_share",
	"no",
	esc_html__( "Enable Share", 'burst' ),
	esc_html__( "Enabling this option will allow sharing via Twitter", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_enable_twitter_share_container"
	)
);
$panel4->addChild(
	"enable_twitter_share",
	$enable_twitter_share
);
$enable_twitter_share_container = new BurstMikadoContainer(
	"enable_twitter_share_container",
	"enable_twitter_share",
	"no"
);
$panel4->addChild(
	"enable_twitter_share_container",
	$enable_twitter_share_container
);
$twitter_icon = new BurstMikadoField(
	"image",
	"twitter_icon",
	"",
	esc_html__( "Upload Icon", 'burst' ),
	""
);
$enable_twitter_share_container->addChild(
	"twitter_icon",
	$twitter_icon
);
$twitter_via = new BurstMikadoField(
	"text",
	"twitter_via",
	"",
	esc_html__( "Via", 'burst' ),
	""
);
$enable_twitter_share_container->addChild(
	"twitter_via",
	$twitter_via
);

//Google Plus

$google_plus_subtitle = new BurstMikadoTitle(
	"google_plus_subtitle",
	esc_html__( "Share on Google Plus", 'burst' )
);
$panel4->addChild(
	"google_plus_subtitle",
	$google_plus_subtitle
);

$enable_google_plus = new BurstMikadoField(
	"yesno",
	"enable_google_plus",
	"no",
	esc_html__( "Enable Share", 'burst' ),
	esc_html__( "Enabling this option will allow sharing via Google Plus", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_enable_google_plus_container"
	)
);
$panel4->addChild(
	"enable_google_plus",
	$enable_google_plus
);
$enable_google_plus_container = new BurstMikadoContainer(
	"enable_google_plus_container",
	"enable_google_plus",
	"no"
);
$panel4->addChild(
	"enable_google_plus_container",
	$enable_google_plus_container
);
$google_plus_icon = new BurstMikadoField(
	"image",
	"google_plus_icon",
	"",
	esc_html__( "Upload Icon", 'burst' ),
	""
);
$enable_google_plus_container->addChild(
	"google_plus_icon",
	$google_plus_icon
);

//LinkedIn

$linkedin_subtitle = new BurstMikadoTitle(
	"linkedin_subtitle",
	esc_html__( "Share on LinkedIn", 'burst' )
);
$panel4->addChild(
	"linkedin_subtitle",
	$linkedin_subtitle
);

$enable_linkedin = new BurstMikadoField(
	"yesno",
	"enable_linkedin",
	"no",
	esc_html__( "Enable Share", 'burst' ),
	esc_html__( "Enabling this option will allow sharing via LinkedIn", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_enable_linkedin_container"
	)
);
$panel4->addChild(
	"enable_linkedin",
	$enable_linkedin
);
$enable_linkedin_container = new BurstMikadoContainer(
	"enable_linkedin_container",
	"enable_linkedin",
	"no"
);
$panel4->addChild(
	"enable_linkedin_container",
	$enable_linkedin_container
);
$linkedin_icon = new BurstMikadoField(
	"image",
	"linkedin_icon",
	"",
	esc_html__( "Upload Icon", 'burst' ),
	""
);
$enable_linkedin_container->addChild(
	"linkedin_icon",
	$linkedin_icon
);

//Tumblr

$tumblr_subtitle = new BurstMikadoTitle(
	"tumblr_subtitle",
	esc_html__( "Share on Tumblr", 'burst' )
);
$panel4->addChild(
	"tumblr_subtitle",
	$tumblr_subtitle
);

$enable_tumblr = new BurstMikadoField(
	"yesno",
	"enable_tumblr",
	"no",
	esc_html__( "Enable Share", 'burst' ),
	esc_html__( "Enabling this option will allow sharing via Tumblr", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_enable_tumblr_container"
	)
);
$panel4->addChild(
	"enable_tumblr",
	$enable_tumblr
);

$enable_tumblr_container = new BurstMikadoContainer(
	"enable_tumblr_container",
	"enable_tumblr",
	"no"
);
$panel4->addChild(
	"enable_tumblr_container",
	$enable_tumblr_container
);

$tumblr_icon = new BurstMikadoField(
	"image",
	"tumblr_icon",
	"",
	esc_html__( "Upload Icon", 'burst' ),
	""
);
$enable_tumblr_container->addChild(
	"tumblr_icon",
	$tumblr_icon
);

// Pinterest

$pinterest_subtitle = new BurstMikadoTitle(
	"pinterest_subtitle",
	esc_html__( "Share on Pinterest", 'burst' )
);
$panel4->addChild(
	"pinterest_subtitle",
	$pinterest_subtitle
);

$enable_pinterest = new BurstMikadoField(
	"yesno",
	"enable_pinterest",
	"no",
	esc_html__( "Enable Share", 'burst' ),
	esc_html__( "Enabling this option will allow sharing via Pinterest", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_enable_pinterest_container"
	)
);
$panel4->addChild(
	"enable_pinterest",
	$enable_pinterest
);
$enable_pinterest_container = new BurstMikadoContainer(
	"enable_pinterest_container",
	"enable_pinterest",
	"no"
);
$panel4->addChild(
	"enable_pinterest_container",
	$enable_pinterest_container
);
$pinterest_icon = new BurstMikadoField(
	"image",
	"pinterest_icon",
	"",
	esc_html__( "Upload Icon", 'burst' ),
	""
);
$enable_pinterest_container->addChild(
	"pinterest_icon",
	$pinterest_icon
);

//VK

$vk_subtitle = new BurstMikadoTitle(
	"vk_subtitle",
	esc_html__( "Share on VK", 'burst' )
);
$panel4->addChild(
	"vk_subtitle",
	$vk_subtitle
);

$enable_vk = new BurstMikadoField(
	"yesno",
	"enable_vk",
	"no",
	esc_html__( "Enable Share", 'burst' ),
	esc_html__( "Enabling this option will allow sharing via VK", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_enable_vk_container"
	)
);
$panel4->addChild(
	"enable_vk",
	$enable_vk
);
$enable_vk_container = new BurstMikadoContainer(
	"enable_vk_container",
	"enable_vk",
	"no"
);
$panel4->addChild(
	"enable_vk_container",
	$enable_vk_container
);
$vk_icon = new BurstMikadoField(
	"image",
	"vk_icon",
	"",
	esc_html__( "Upload Icon", 'burst' ),
	""
);
$enable_vk_container->addChild(
	"vk_icon",
	$vk_icon
);

if ( defined( 'MIKADO_TWITTER_FEED_VERSION' ) ) {
	$twitter_panel = new BurstMikadoPanel(
		esc_html__( 'Twitter', 'burst' ),
		'twitter_panel'
	);
	$socialPage->addChild(
		"twitter_panel",
		$twitter_panel
	);
	
	$twitter_field = new BurstMikadoTwitterFramework();
	$twitter_panel->addChild(
		'twitter_field',
		$twitter_field
	);
}

if ( defined( 'BURST_INSTAGRAM_FEED_VERSION' ) ) {

	$instagram_panel = new BurstMikadoPanel(
		esc_html__( 'Instagram', 'burst' ),
		'instagram_panel'
	);

	$socialPage->addChild(
		"instagram_panel",
		$instagram_panel
	);

	$instagram_field = new BurstMikadoInstagramFramework();
	$instagram_panel->addChild(
		'instagram_field',
		$instagram_field
	);
}