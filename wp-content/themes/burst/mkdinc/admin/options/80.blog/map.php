<?php

$blogPage = new BurstMikadoAdminPage(
	"8",
	esc_html__( "Blog", 'burst' ),
	"icon_book_alt"
);
$burst_mikado_Framework->mkdOptions->addAdminPage(
	"blogPage",
	$blogPage
);

// Blog Post Lists - General

$panel1 = new BurstMikadoPanel(
	esc_html__( "Blog Lists", 'burst' ),
	"post_lists_general_panel"
);
$blogPage->addChild(
	"panel1",
	$panel1
);

$blog_style = new BurstMikadoField(
	"select",
	"blog_style",
	"1",
	esc_html__( "Archive and Category Layout", 'burst' ),
	esc_html__( "Choose a default blog layout for archived Blog Post Lists and Category Blog Lists", 'burst' ),
	array(
		"blog_standard" => esc_html__( "Blog: Standard", 'burst' ),
		"blog_masonry" => esc_html__( "Blog: Masonry", 'burst' ),
		"blog_masonry_full_width" => esc_html__( "Blog: Masonry Full Width", 'burst' ),
		"blog_standard_whole_post" => esc_html__( "Blog: Standard Whole Post", 'burst' ),
	)
);
$panel1->addChild(
	"blog_style",
	$blog_style
);

$category_blog_sidebar = new BurstMikadoField(
	"select",
	"category_blog_sidebar",
	"default",
	esc_html__( "Archive and Category Sidebar", 'burst' ),
	esc_html__( "Choose a sidebar layout for archived Blog Post Lists and Category Blog Lists", 'burst' ),
	array(
		"default" => esc_html__( "No Sidebar", 'burst' ),
		"1" => esc_html__( "Sidebar 1/3 right", 'burst' ),
		"2" => esc_html__( "Sidebar 1/4 right", 'burst' ),
		"3" => esc_html__( "Sidebar 1/3 left", 'burst' ),
		"4" => esc_html__( "Sidebar 1/4 left", 'burst' )
	)
);
$panel1->addChild(
	"category_blog_sidebar",
	$category_blog_sidebar
);

$pagination = new BurstMikadoField(
	"yesno",
	"pagination",
	"yes",
	esc_html__( "Pagination", 'burst' ),
	esc_html__( "Enabling this option will display pagination links on bottom of Blog Post List", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_blog_hide_pagination_list_container"
	)
);
$panel1->addChild(
	"pagination",
	$pagination
);

$blog_hide_pagination_list_container = new BurstMikadoContainer(
	"blog_hide_pagination_list_container",
	"pagination",
	""
);
$panel1->addChild(
	"blog_hide_pagination_list_container",
	$blog_hide_pagination_list_container
);

$blog_pagination_type = new BurstMikadoField(
	"select",
	"blog_pagination_type",
	"standard",
	esc_html__( "Pagination type", 'burst' ),
	esc_html__( "Choose type of pagination", 'burst' ),
	array(
		"standard" => esc_html__( "Standard", 'burst' ),
		"prev_and_next" => esc_html__( "Only Previous and Next", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"prev_and_next" => "#mkdf_blog_page_range_container",
			"standard"      => "#mkdf_blog_pagination_text_container"
		),
		"show"       => array(
			"standard"      => "#mkdf_blog_page_range_container",
			"prev_and_next" => "#mkdf_blog_pagination_text_container"
		)
	)
);
$blog_hide_pagination_list_container->addChild(
	"blog_pagination_type",
	$blog_pagination_type
);

$blog_page_range_container = new BurstMikadoContainer(
	"blog_page_range_container",
	"blog_pagination_type",
	"prev_and_next"
);
$blog_hide_pagination_list_container->addChild(
	"blog_page_range_container",
	$blog_page_range_container
);

$blog_page_range = new BurstMikadoField(
	"text",
	"blog_page_range",
	"",
	esc_html__( "Pagination Range limit", 'burst' ),
	esc_html__( "Enter a number that will limit pagination to a certain range of links", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$blog_page_range_container->addChild(
	"blog_page_range",
	$blog_page_range
);

$blog_pagination_text_container = new BurstMikadoContainer(
	"blog_pagination_text_container",
	"blog_pagination_type",
	"standard"
);
$blog_hide_pagination_list_container->addChild(
	"blog_pagination_text_container",
	$blog_pagination_text_container
);

$group17 = new BurstMikadoGroup(
	esc_html__( "Labels for Buttons", 'burst' ),
	esc_html__( "Enter labels you want for Previous and Next buttons (Previous and Next are standard labels)", 'burst' )
);
$blog_pagination_text_container->addChild(
	"group17",
	$group17
);

$row1 = new BurstMikadoRow();
$group17->addChild(
	"row1",
	$row1
);

$blog_pagination_previous_label = new BurstMikadoField(
	"textsimple",
	"blog_pagination_previous_label",
	"",
	esc_html__( "Previous Label", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_pagination_previous_label",
	$blog_pagination_previous_label
);

$blog_pagination_next_label = new BurstMikadoField(
	"textsimple",
	"blog_pagination_next_label",
	"",
	esc_html__( "Next Label", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_pagination_next_label",
	$blog_pagination_next_label
);

$blog_pagination_border_above_yesno = new BurstMikadoField(
	"yesno",
	"blog_pagination_border_above_yesno",
	"no",
	esc_html__( "Border Above Pagination", 'burst' ),
	esc_html__( "Enabling this option will display border above pagination", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_show_on_yes" => "#mkdf_blog_pagination_border_container"
	)
);
$blog_page_range_container->addChild(
	"blog_pagination_border_above_yesno",
	$blog_pagination_border_above_yesno
);

$blog_pagination_border_container = new BurstMikadoContainer(
	"blog_pagination_border_container",
	"blog_pagination_border_above_yesno",
	"no"
);
$blog_page_range_container->addChild(
	"blog_pagination_border_container",
	$blog_pagination_border_container
);

$group18 = new BurstMikadoGroup(
	esc_html__( "Border Style", 'burst' ),
	esc_html__( "Define style for border top on pagination", 'burst' )
);
$blog_pagination_border_container->addChild(
	"group18",
	$group18
);

$row1 = new BurstMikadoRow();
$group18->addChild(
	"row1",
	$row1
);

$blog_pgn_border_color = new BurstMikadoField(
	"colorsimple",
	"blog_pgn_border_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_pgn_border_color",
	$blog_pgn_border_color
);

$blog_pgn_border_width = new BurstMikadoField(
	"textsimple",
	"blog_pgn_border_width",
	"",
	esc_html__( "Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_pgn_border_width",
	$blog_pgn_border_width
);

$blog_pgn_border_style = new BurstMikadoField(
	"selectsimple",
	"blog_pgn_border_style",
	"",
	esc_html__( "Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	array(
		"solid" => esc_html__( "Solid", 'burst' ),
		"dotted" => esc_html__( "Dotted", 'burst' ),
		"dashed" => esc_html__( "Dashed", 'burst' )
	)
);
$row1->addChild(
	"blog_pgn_border_style",
	$blog_pgn_border_style
);

$blog_pagination_border_margin = new BurstMikadoField(
	"text",
	"blog_pagination_border_margin",
	"",
	esc_html__( "Margin from Border (px)", 'burst' ),
	esc_html__( "Set margin from border to pagination buttons", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$blog_pagination_border_container->addChild(
	"blog_pagination_border_margin",
	$blog_pagination_border_margin
);

$number_of_chars = new BurstMikadoField(
	"text",
	"number_of_chars",
	"45",
	esc_html__( "Number of Words in Excerpt", 'burst' ),
	' Enter a number of words in excerpt (article summary)',
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"number_of_chars",
	$number_of_chars
);

// Blog Single

$panel20 = new BurstMikadoPanel(
	esc_html__( "Blog Single", 'burst' ),
	"blog_single_panel"
);
$blogPage->addChild(
	"panel20",
	$panel20
);

$blog_single_sidebar = new BurstMikadoField(
	"select",
	"blog_single_sidebar",
	"default",
	esc_html__( "Sidebar Layout", 'burst' ),
	esc_html__( "Choose a sidebar layout for Blog Single pages", 'burst' ),
	array(
		"default" => esc_html__( "No Sidebar", 'burst' ),
		"1" => esc_html__( "Sidebar 1/3 right", 'burst' ),
		"2" => esc_html__( "Sidebar 1/4 right", 'burst' ),
		"3" => esc_html__( "Sidebar 1/3 left", 'burst' ),
		"4" => esc_html__( "Sidebar 1/4 left", 'burst' )
	)
);
$panel20->addChild(
	"blog_single_sidebar",
	$blog_single_sidebar
);

$custom_sidebars = burst_mikado_get_custom_sidebars();

$blog_single_sidebar_custom_display = new BurstMikadoField(
	"selectblank",
	"blog_single_sidebar_custom_display",
	"",
	esc_html__( "Sidebar to Display", 'burst' ),
	esc_html__( "Choose a sidebar to display on Blog Single pages", 'burst' ),
	$custom_sidebars
);
$panel20->addChild(
	"blog_single_sidebar_custom_display",
	$blog_single_sidebar_custom_display
);

$blog_single_image_size = new BurstMikadoField(
	"select",
	"blog_single_image_size",
	"full",
	esc_html__( "Blog Image Size", 'burst' ),
	esc_html__( "Choose image size for Blog Single pages", 'burst' ),
	array(
		"full" => esc_html__( "Default", 'burst' ),
		"portfolio-landscape" => esc_html__( "Landscape", 'burst' ),
		"portfolio-portrait" => esc_html__( "Portrait", 'burst' ),
		"custom" => esc_html__( "Custom", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"full"                => "#mkdf_blog_single_image_size_container",
			"portfolio-landscape" => "#mkdf_blog_single_image_size_container",
			"portfolio-portrait"  => "#mkdf_blog_single_image_size_container",
			"custom"              => ""
		),
		"show"       => array(
			"full"                => "",
			"portfolio-landscape" => "",
			"portfolio-portrait"  => "",
			"custom"              => "#mkdf_blog_single_image_size_container"
		)
	)
);
$panel20->addChild(
	"blog_single_image_size",
	$blog_single_image_size
);

$blog_single_image_size_container = new BurstMikadoContainer(
	"blog_single_image_size_container",
	"blog_single_image_size",
	"",
	array(
		"full",
		"portfolio-landscape",
		"portfolio-portrait"
	)
);
$panel20->addChild(
	"blog_single_image_size_container",
	$blog_single_image_size_container
);

$blog_single_image_size_height = new BurstMikadoField(
	"text",
	"blog_single_image_size_height",
	"",
	esc_html__( "Image Height (px)", 'burst' ),
	esc_html__( "Enter width (in pixels) for Custom Image for Blog Single", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$blog_single_image_size_container->addChild(
	"blog_single_image_size_height",
	$blog_single_image_size_height
);

$blog_single_image_size_width = new BurstMikadoField(
	"text",
	"blog_single_image_size_width",
	"",
	esc_html__( "Image Width (px)", 'burst' ),
	esc_html__( "Enter width (in pixels) for Custom Image for Blog Single", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$blog_single_image_size_container->addChild(
	"blog_single_image_size_width",
	$blog_single_image_size_width
);

$blog_single_show_ql_icon = new BurstMikadoField(
	"yesno",
	"blog_single_show_ql_icon",
	"yes",
	esc_html__( "Enable Quote/Link Icon", 'burst' ),
	esc_html__( "Enabling this option will show Quote/Link Icon on Blog Single posts", 'burst' )
);
$panel20->addChild(
	"blog_single_show_ql_icon",
	$blog_single_show_ql_icon
);

$blog_single_navigation = new BurstMikadoField(
	"yesno",
	"blog_single_navigation",
	"no",
	esc_html__( "Enable Prev/Next Single Post Navigation Links", 'burst' ),
	esc_html__( "Enable navigation links through the blog posts (left and right arrows will appear)", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_blog_hide_pagination_container"
	)
);
$panel20->addChild(
	"blog_single_navigation",
	$blog_single_navigation
);

$blog_hide_pagination_container = new BurstMikadoContainer(
	"blog_hide_pagination_container",
	"blog_single_navigation",
	"no"
);
$panel20->addChild(
	"blog_hide_pagination_container",
	$blog_hide_pagination_container
);

$blog_navigation_through_same_category = new BurstMikadoField(
	"yesno",
	"blog_navigation_through_same_category",
	"no",
	esc_html__( "Enable Navigation Only in Current Category", 'burst' ),
	esc_html__( "Limit your navigation only through current category", 'burst' )
);
$blog_hide_pagination_container->addChild(
	"blog_navigation_through_same_category",
	$blog_navigation_through_same_category
);

$blog_single_title_tags = new BurstMikadoField(
	"select",
	"blog_single_title_tags",
	"h5",
	esc_html__( "Headlines Below Post Content", 'burst' ),
	esc_html__( 'Choose a tag for headlines below post content ("Tags", "Post a comment", etc)', 'burst' ),
	array(
		"h2" => esc_html__( "h2", 'burst' ),
		"h3" => esc_html__( "h3", 'burst' ),
		"h4" => esc_html__( "h4", 'burst' ),
		"h5" => esc_html__( "h5", 'burst' ),
		"h6" => esc_html__( "h6", 'burst' )
	)
);
$panel20->addChild(
	"blog_single_title_tags",
	$blog_single_title_tags
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Blog Single Spacing", 'burst' ),
	esc_html__( "Set spacing for single post pages", 'burst' )
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

$blog_single_tags_holder_margin_top = new BurstMikadoField(
	"textsimple",
	"blog_single_tags_holder_margin_top",
	"",
	esc_html__( "Margin Above Tags(px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_single_tags_holder_margin_top",
	$blog_single_tags_holder_margin_top
);

$blog_single_navigation_margin = new BurstMikadoField(
	"textsimple",
	"blog_single_navigation_margin",
	"",
	esc_html__( "Margin Above and Under Navigation(px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_single_navigation_margin",
	$blog_single_navigation_margin
);

$blog_single_comments_holder_margin = new BurstMikadoField(
	"textsimple",
	"blog_single_comments_holder_margin",
	"",
	esc_html__( "Margin Above and Under Comments(px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_single_comments_holder_margin",
	$blog_single_comments_holder_margin
);

$post_info_data_single = new BurstMikadoTitle(
	"post_info_data_single",
	esc_html__( "Post Info Data Fields", 'burst' )
);
$panel20->addChild(
	"post_info_data_single",
	$post_info_data_single
);

$blog_single_show_date = new BurstMikadoField(
	"yesno",
	"blog_single_show_date",
	"yes",
	esc_html__( "Show Date", 'burst' ),
	esc_html__( "Enabling this option will show date on Blog Single posts", 'burst' )
);
$panel20->addChild(
	"blog_single_show_date",
	$blog_single_show_date
);

$blog_single_show_like = new BurstMikadoField(
	"yesno",
	"blog_single_show_like",
	"no",
	esc_html__( "Show Like", 'burst' ),
	esc_html__( "Enabling this option will turn on 'Likes' on Blog Single posts", 'burst' )
);
$panel20->addChild(
	"blog_single_show_like",
	$blog_single_show_like
);

$blog_single_show_social_share = new BurstMikadoField(
	"yesno",
	"blog_single_show_social_share",
	"no",
	esc_html__( "Show Share", 'burst' ),
	esc_html__( "Enabling this option will show share on Single Post", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_blog_single_share_options_container"
	)
);
$panel20->addChild(
	"blog_single_show_social_share",
	$blog_single_show_social_share
);

$blog_single_share_options_container = new BurstMikadoContainer(
	"blog_single_share_options_container",
	"blog_single_show_social_share",
	"no"
);
$panel20->addChild(
	"blog_single_share_options_container",
	$blog_single_share_options_container
);

$blog_single_select_share_option = new BurstMikadoField(
	"select",
	"blog_single_select_share_option",
	"dropdown",
	esc_html__( "Social Share Style", 'burst' ),
	esc_html__( "Choose Social Share Style for Single Post", 'burst' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'burst' ),
		"list" => esc_html__( "Social Share List", 'burst' )
	)
);

$blog_single_share_options_container->addChild(
	"blog_single_select_share_option",
	$blog_single_select_share_option
);

$blog_single_show_category = new BurstMikadoField(
	"yesno",
	"blog_single_show_category",
	"yes",
	esc_html__( "Show Category", 'burst' ),
	esc_html__( "Enabling this option will show category/categories on Blog Single posts", 'burst' )
);
$panel20->addChild(
	"blog_single_show_category",
	$blog_single_show_category
);

$blog_single_show_time = new BurstMikadoField(
	"yesno",
	"blog_single_show_time",
	"yes",
	esc_html__( "Show Time", 'burst' ),
	esc_html__( "Enabling this option will show time on Blog Single posts", 'burst' )
);
$panel20->addChild(
	"blog_single_show_time",
	$blog_single_show_time
);

$blog_author_info = new BurstMikadoField(
	"yesno",
	"blog_author_info",
	"no",
	esc_html__( "Show Author Info", 'burst' ),
	esc_html__( "Enabling this option will display author name and descriptions on Blog Single pages", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_enable_blog_author_info_container"
	)
);
$panel20->addChild(
	"blog_author_info",
	$blog_author_info
);

$enable_blog_author_info_container = new BurstMikadoContainer(
	"enable_blog_author_info_container",
	"blog_author_info",
	"no"
);
$panel20->addChild(
	"enable_blog_author_info_container",
	$enable_blog_author_info_container
);

$enable_author_info_email = new BurstMikadoField(
	"yesno",
	"enable_author_info_email",
	"no",
	esc_html__( "Show Author Email", 'burst' ),
	esc_html__( "Enabling this option will show author email", 'burst' )
);
$enable_blog_author_info_container->addChild(
	"enable_author_info_email",
	$enable_author_info_email
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Blog Single Author Info Box Style", 'burst' ),
	esc_html__( "Set styles for author info box on single post pages", 'burst' )
);
$enable_blog_author_info_container->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$blog_single_post_author_info_margin_top = new BurstMikadoField(
	"textsimple",
	"blog_single_post_author_info_margin_top",
	"",
	esc_html__( "Margin Top for Author Info Holder (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_single_post_author_info_margin_top",
	$blog_single_post_author_info_margin_top
);

$blog_single_post_author_info_background_color = new BurstMikadoField(
	"colorsimple",
	"blog_single_post_author_info_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_single_post_author_info_background_color",
	$blog_single_post_author_info_background_color
);

$row2 = new BurstMikadoRow();
$group1->addChild(
	"row2",
	$row2
);

$blog_single_post_author_info_padding_top = new BurstMikadoField(
	"textsimple",
	"blog_single_post_author_info_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_single_post_author_info_padding_top",
	$blog_single_post_author_info_padding_top
);

$blog_single_post_author_info_padding_bottom = new BurstMikadoField(
	"textsimple",
	"blog_single_post_author_info_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_single_post_author_info_padding_bottom",
	$blog_single_post_author_info_padding_bottom
);

$blog_single_post_author_info_padding_left = new BurstMikadoField(
	"textsimple",
	"blog_single_post_author_info_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_single_post_author_info_padding_left",
	$blog_single_post_author_info_padding_left
);

$blog_single_post_author_info_padding_right = new BurstMikadoField(
	"textsimple",
	"blog_single_post_author_info_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_single_post_author_info_padding_right",
	$blog_single_post_author_info_padding_right
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Blog Single Author Info Title Style", 'burst' ),
	esc_html__( "Set styles for author info title on single post pages", 'burst' )
);
$enable_blog_author_info_container->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$blog_single_post_author_info_title_color = new BurstMikadoField(
	"colorsimple",
	"blog_single_post_author_info_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_single_post_author_info_title_color",
	$blog_single_post_author_info_title_color
);

$blog_single_post_author_info_title_font_family = new BurstMikadoField(
	"fontsimple",
	"blog_single_post_author_info_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_single_post_author_info_title_font_family",
	$blog_single_post_author_info_title_font_family
);

$blog_single_post_author_info_title_fontsize = new BurstMikadoField(
	"textsimple",
	"blog_single_post_author_info_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_single_post_author_info_title_fontsize",
	$blog_single_post_author_info_title_fontsize
);

$blog_single_post_author_info_title_lineheight = new BurstMikadoField(
	"textsimple",
	"blog_single_post_author_info_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_single_post_author_info_title_lineheight",
	$blog_single_post_author_info_title_lineheight
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);

$blog_single_post_author_info_title_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"blog_single_post_author_info_title_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_single_post_author_info_title_fontstyle",
	$blog_single_post_author_info_title_fontstyle
);

$blog_single_post_author_info_title_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"blog_single_post_author_info_title_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_single_post_author_info_title_fontweight",
	$blog_single_post_author_info_title_fontweight
);

$blog_single_post_author_info_title_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"blog_single_post_author_info_title_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"blog_single_post_author_info_title_texttransform",
	$blog_single_post_author_info_title_texttransform
);

$blog_single_post_author_info_title_letterspacing = new BurstMikadoField(
	"textsimple",
	"blog_single_post_author_info_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_single_post_author_info_title_letterspacing",
	$blog_single_post_author_info_title_letterspacing
);

$row3 = new BurstMikadoRow();
$group2->addChild(
	"row3",
	$row3
);

$blog_single_post_author_info_title_margin_bottom = new BurstMikadoField(
	"textsimple",
	"blog_single_post_author_info_title_margin_bottom",
	"",
	esc_html__( "Margin Bottom for Author Info Title (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blog_single_post_author_info_title_margin_bottom",
	$blog_single_post_author_info_title_margin_bottom
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Blog Single Author Info Text Style", 'burst' ),
	esc_html__( "Set styles for author info text on single post pages", 'burst' )
);
$enable_blog_author_info_container->addChild(
	"group3",
	$group3
);

$row1 = new BurstMikadoRow();
$group3->addChild(
	"row1",
	$row1
);

$blog_single_post_author_info_text_color = new BurstMikadoField(
	"colorsimple",
	"blog_single_post_author_info_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_single_post_author_info_text_color",
	$blog_single_post_author_info_text_color
);

$blog_single_post_author_info_text_font_family = new BurstMikadoField(
	"fontsimple",
	"blog_single_post_author_info_text_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_single_post_author_info_text_font_family",
	$blog_single_post_author_info_text_font_family
);

$blog_single_post_author_info_text_fontsize = new BurstMikadoField(
	"textsimple",
	"blog_single_post_author_info_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_single_post_author_info_text_fontsize",
	$blog_single_post_author_info_text_fontsize
);

$blog_single_post_author_info_text_lineheight = new BurstMikadoField(
	"textsimple",
	"blog_single_post_author_info_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_single_post_author_info_text_lineheight",
	$blog_single_post_author_info_text_lineheight
);

$row2 = new BurstMikadoRow( true );
$group3->addChild(
	"row2",
	$row2
);

$blog_single_post_author_info_text_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"blog_single_post_author_info_text_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_single_post_author_info_text_fontstyle",
	$blog_single_post_author_info_text_fontstyle
);

$blog_single_post_author_info_text_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"blog_single_post_author_info_text_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_single_post_author_info_text_fontweight",
	$blog_single_post_author_info_text_fontweight
);

$blog_single_post_author_info_text_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"blog_single_post_author_info_text_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"blog_single_post_author_info_text_texttransform",
	$blog_single_post_author_info_text_texttransform
);

$blog_single_post_author_info_text_letterspacing = new BurstMikadoField(
	"textsimple",
	"blog_single_post_author_info_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_single_post_author_info_text_letterspacing",
	$blog_single_post_author_info_text_letterspacing
);

$blog_single_show_comments = new BurstMikadoField(
	"yesno",
	"blog_single_show_comments",
	"yes",
	esc_html__( "Show Comments", 'burst' ),
	esc_html__( "Enabling this option will show comments on Blog Single posts", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_enable_blog_comments_container"
	)
);
$panel20->addChild(
	"blog_single_show_comments",
	$blog_single_show_comments
);

$enable_blog_comments_container = new BurstMikadoContainer(
	"enable_blog_comments_container",
	"blog_single_show_comments",
	"no"
);
$panel20->addChild(
	"enable_blog_comments_container",
	$enable_blog_comments_container
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Comments Box Style", 'burst' ),
	esc_html__( "Set styles for comments box on single post pages", 'burst' )
);
$enable_blog_comments_container->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);

$blog_single_post_comments_margin_bottom = new BurstMikadoField(
	"textsimple",
	"blog_single_post_comments_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_single_post_comments_margin_bottom",
	$blog_single_post_comments_margin_bottom
);

$blog_single_post_comments_background_color = new BurstMikadoField(
	"colorsimple",
	"blog_single_post_comments_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_single_post_comments_background_color",
	$blog_single_post_comments_background_color
);

$row2 = new BurstMikadoRow();
$group1->addChild(
	"row2",
	$row2
);

$blog_single_post_comments_padding_top = new BurstMikadoField(
	"textsimple",
	"blog_single_post_comments_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_single_post_comments_padding_top",
	$blog_single_post_comments_padding_top
);

$blog_single_post_comments_padding_bottom = new BurstMikadoField(
	"textsimple",
	"blog_single_post_comments_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_single_post_comments_padding_bottom",
	$blog_single_post_comments_padding_bottom
);

$blog_single_post_comments_padding_left = new BurstMikadoField(
	"textsimple",
	"blog_single_post_comments_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_single_post_comments_padding_left",
	$blog_single_post_comments_padding_left
);

$blog_single_post_comments_padding_right = new BurstMikadoField(
	"textsimple",
	"blog_single_post_comments_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_single_post_comments_padding_right",
	$blog_single_post_comments_padding_right
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Comments Color Style", 'burst' ),
	esc_html__( "Set styles for comments on single post pages", 'burst' )
);
$enable_blog_comments_container->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);

$blog_single_post_comments_title_color = new BurstMikadoField(
	"colorsimple",
	"blog_single_post_comments_title_color",
	"",
	esc_html__( "Title Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_single_post_comments_title_color",
	$blog_single_post_comments_title_color
);

$blog_single_post_comments_text_color = new BurstMikadoField(
	"colorsimple",
	"blog_single_post_comments_text_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_single_post_comments_text_color",
	$blog_single_post_comments_text_color
);

$blog_single_post_comments_link_color = new BurstMikadoField(
	"colorsimple",
	"blog_single_post_comments_link_color",
	"",
	esc_html__( "Link Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_single_post_comments_link_color",
	$blog_single_post_comments_link_color
);

$blog_single_post_comments_date_color = new BurstMikadoField(
	"colorsimple",
	"blog_single_post_comments_date_color",
	"",
	esc_html__( "Date & Icons Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_single_post_comments_date_color",
	$blog_single_post_comments_date_color
);

// Advanced Options

$panel_advanced_options = new BurstMikadoPanel(
	esc_html__( "Advanced Options", 'burst' ),
	"panel_advanced_options"
);
$blogPage->addChild(
	"panel_advanced_options",
	$panel_advanced_options
);

$blog_standard_type_show_options = new BurstMikadoField(
	"yesno",
	"blog_standard_type_show_options",
	"no",
	esc_html__( "Show Standard Template Options", 'burst' ),
	esc_html__( "Editing these options will have affect on Post List & Single Post", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_blog_standard_type_post_lists"
	)
);
$panel_advanced_options->addChild(
	"blog_standard_type_show_options",
	$blog_standard_type_show_options
);

$blog_masonry_show_options = new BurstMikadoField(
	"yesno",
	"blog_masonry_show_options",
	"no",
	esc_html__( "Show Masonry & Masonry Full Width Template Options", 'burst' ),
	esc_html__( "Editing these options will have affect on Post List & Single Post", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_blog_masonry_post_lists"
	)
);
$panel_advanced_options->addChild(
	"blog_masonry_show_options",
	$blog_masonry_show_options
);

// Blog Post List - Blog: Masonry
$panel10 = new BurstMikadoPanel(
	esc_html__( "Blog List Templates Options: Masonry & Masonry Full Width", 'burst' ),
	"blog_masonry_post_lists",
	"blog_masonry_show_options",
	"no"
);
$blogPage->addChild(
	"panel10",
	$panel10
);

$blog_masonry_choose_type = new BurstMikadoField(
	"select",
	"blog_masonry_choose_type",
	"blog_masonry_standard",
	esc_html__( "Masonry Type", 'burst' ),
	esc_html__( 'Choose Type for "Masonry" Blog List', 'burst' ),
	array(
		"blog_masonry_standard" => esc_html__( "Standard", 'burst' ),
		"blog_masonry_meta_info_featured_on_side" => esc_html__( "Meta Info Featured on Side", 'burst' )
	)
);
$panel10->addChild(
	"blog_masonry_choose_type",
	$blog_masonry_choose_type
);

$blog_masonry_number_of_chars = new BurstMikadoField(
	"text",
	"blog_masonry_number_of_chars",
	"45",
	esc_html__( "Number of Words in Excerpt", 'burst' ),
	' Enter a number of words in excerpt (article summary)',
	array(),
	array( "col_width" => 3 )
);
$panel10->addChild(
	"blog_masonry_number_of_chars",
	$blog_masonry_number_of_chars
);

$blog_masonry_read_more_button = new BurstMikadoField(
	"yesno",
	"blog_masonry_read_more_button",
	"no",
	esc_html__( "Read More Button", 'burst' ),
	esc_html__( "Enable Read More Button", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_blog_masonry_read_more_button_container"
	)
);
$panel10->addChild(
	"blog_masonry_read_more_button",
	$blog_masonry_read_more_button
);

$blog_masonry_read_more_button_container = new BurstMikadoContainer(
	"blog_masonry_read_more_button_container",
	"blog_masonry_read_more_button",
	"no"
);
$panel10->addChild(
	"blog_masonry_read_more_button_container",
	$blog_masonry_read_more_button_container
);

$blog_masonry_read_more_button_icon = new BurstMikadoField(
	"yesno",
	"blog_masonry_read_more_button_icon",
	"no",
	esc_html__( "Enable Icon", 'burst' ),
	esc_html__( "Enabling this option will place icon in read more button", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_blog_masonry_read_more_button_icon_container"
	)
);
$blog_masonry_read_more_button_container->addChild(
	"blog_masonry_read_more_button_icon",
	$blog_masonry_read_more_button_icon
);

$blog_masonry_read_more_button_icon_container = new BurstMikadoContainer(
	"blog_masonry_read_more_button_icon_container",
	"blog_masonry_read_more_button_icon",
	"no"
);
$blog_masonry_read_more_button_container->addChild(
	"blog_masonry_read_more_button_icon_container",
	$blog_masonry_read_more_button_icon_container
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$blog_masonry_read_more_button_icon_pack_hide_array = array();
$blog_masonry_read_more_button_icon_pack_show_array = array();

//do we have some collection added in collections array?
if ( is_array( $burst_mikado_IconCollections->iconCollections ) && count( $burst_mikado_IconCollections->iconCollections ) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$blog_masonry_read_more_button_icon_collections_params = $burst_mikado_IconCollections->getIconCollectionsParams();
	
	//foreach collection generate hide and show array
	foreach ( $burst_mikado_IconCollections->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$blog_masonry_read_more_button_icon_pack_hide_array[ $dep_collection_key ] = '';
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$blog_masonry_read_more_button_icon_pack_show_array[ $dep_collection_key ] = '#mkdf_blog_masonry_read_more_button_icon_' . $dep_collection_object->param . '_container';
		
		//for all collections param generate hide string
		foreach ( $blog_masonry_read_more_button_icon_collections_params as $blog_masonry_read_more_button_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $blog_masonry_read_more_button_icon_collections_param !== $dep_collection_object->param ) {
				$blog_masonry_read_more_button_icon_pack_hide_array[ $dep_collection_key ] .= '#mkdf_blog_masonry_read_more_button_icon_' . $blog_masonry_read_more_button_icon_collections_param . '_container,';
			}
		}
		
		//remove remaining ',' character
		$blog_masonry_read_more_button_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$blog_masonry_read_more_button_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
	}
	
}

$blog_masonry_read_more_button_icon_pack = new BurstMikadoField(
	"select",
	"blog_masonry_read_more_button_icon_pack",
	"font_awesome",
	esc_html__( "Icon Pack", 'burst' ),
	esc_html__( "Choose icon pack for show load more button", 'burst' ),
	$burst_mikado_IconCollections->getIconCollections(),
	array(
		"dependence" => true,
		"hide"       => $blog_masonry_read_more_button_icon_pack_hide_array,
		"show"       => $blog_masonry_read_more_button_icon_pack_show_array
	)
);

$blog_masonry_read_more_button_icon_container->addChild(
	"blog_masonry_read_more_button_icon_pack",
	$blog_masonry_read_more_button_icon_pack
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
		
		$blog_masonry_read_more_button_icon_hide_values = $icon_collections_keys;
		$blog_icon_container                            = new BurstMikadoContainer(
			"blog_masonry_read_more_button_icon_" . $collection_object->param . "_container",
			"blog_masonry_read_more_button_icon_pack",
			"",
			$blog_masonry_read_more_button_icon_hide_values
		);
		$blog_masonry_read_more_button_icon             = new BurstMikadoField(
			"select",
			"blog_masonry_read_more_button_icon_" . $collection_object->param,
			"",
			esc_html__( "Button Icon", 'burst' ),
			esc_html__( "Choose Button Icon", 'burst' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$blog_icon_container->addChild(
			"blog_masonry_read_more_button_icon_" . $collection_object->param,
			$blog_masonry_read_more_button_icon
		);
		
		$blog_masonry_read_more_button_icon_container->addChild(
			"blog_masonry_read_more_button_icon_" . $collection_object->param . "_container",
			$blog_icon_container
		);
	}
	
}

$pagination_masonry = new BurstMikadoField(
	"select",
	"pagination_masonry",
	"pagination",
	esc_html__( "Pagination on Masonry", 'burst' ),
	esc_html__( 'Choose a pagination style for "Masonry" Blog List', 'burst' ),
	array(
		"pagination" => esc_html__( "Pagination", 'burst' ),
		"load_more" => esc_html__( "Load More", 'burst' ),
		"infinite_scroll" => esc_html__( "Infinite Scroll", 'burst' )
	)
);
$panel10->addChild(
	"pagination_masonry",
	$pagination_masonry
);

$blog_masonry_columns = new BurstMikadoField(
	'select',
	'blog_masonry_columns',
	'',
	esc_html__( 'Masonry Blog Columns', 'burst' ),
	esc_html__( 'Choose a number of columns for "Masonry" Blog List without sidebar', 'burst' ),
	array(
		'two_columns'   => '2',
		'three_columns' => '3'
	)
);
$panel10->addChild(
	'blog_masonry_columns',
	$blog_masonry_columns
);

$blog_masonry_full_width_columns = new BurstMikadoField(
	'select',
	'blog_masonry_full_width_columns',
	'',
	esc_html__( 'Full Width Masonry Blog Columns', 'burst' ),
	esc_html__( 'Choose a number of columns for "Masonry" Blog List', 'burst' ),
	array(
		'three_columns' => '3',
		'four_columns'  => '4',
		'five_columns'  => '5'
	)
);
$panel10->addChild(
	'blog_masonry_full_width_columns',
	$blog_masonry_full_width_columns
);

$blog_masonry_full_width_margin = new BurstMikadoField(
	"text",
	"blog_masonry_full_width_margin",
	"",
	esc_html__( "Full Width Masonry Margin", 'burst' ),
	esc_html__( 'Please insert margin in px (i.e. 5px), or in % (i.e 5%)', 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel10->addChild(
	"blog_masonry_full_width_margin",
	$blog_masonry_full_width_margin
);

$blog_masonry_filter = new BurstMikadoField(
	"yesno",
	"blog_masonry_filter",
	"no",
	esc_html__( "Show Category Filter on Masonry", 'burst' ),
	esc_html__( 'Enabling this option will display a Category Filter on "Masonry" Blog List', 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_blog_masonry_filter_container"
	)
);
$panel10->addChild(
	"blog_masonry_filter",
	$blog_masonry_filter
);

$blog_masonry_filter_container = new BurstMikadoContainer(
	"blog_masonry_filter_container",
	"blog_masonry_filter",
	"no"
);
$panel10->addChild(
	"blog_masonry_filter_container",
	$blog_masonry_filter_container
);

// Blog Masonry Filter
$blog_masonry_filter_background_color = new BurstMikadoField(
	"color",
	"blog_masonry_filter_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Choose color for background of filter area", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_background_color",
	$blog_masonry_filter_background_color
);

$blog_masonry_filter_height = new BurstMikadoField(
	"text",
	"blog_masonry_filter_height",
	"",
	esc_html__( "Height (px)", 'burst' ),
	esc_html__( "Enter height for filter area", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_height",
	$blog_masonry_filter_height
);

$blog_masonry_filter_margin_bottom = new BurstMikadoField(
	"text",
	"blog_masonry_filter_margin_bottom",
	"",
	esc_html__( "Bottom Margin (px)", 'burst' ),
	esc_html__( "Enter bottom margin for filter area. Default value is 36", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_margin_bottom",
	$blog_masonry_filter_margin_bottom
);

$blog_masonry_filter_alignment = new BurstMikadoField(
	"select",
	"blog_masonry_filter_alignment",
	"",
	esc_html__( "Horizontal Alignment", 'burst' ),
	esc_html__( "Choose filter alignment", 'burst' ),
	array(
		"left" => esc_html__( "Left", 'burst' ),
		"center" => esc_html__( "Center", 'burst' ),
		"right" => esc_html__( "Right", 'burst' )
	)
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_alignment",
	$blog_masonry_filter_alignment
);

$blog_masonry_enable_filter_title = new BurstMikadoField(
	"yesno",
	"blog_masonry_enable_filter_title",
	"no",
	esc_html__( "Enable Filter Title", 'burst' ),
	esc_html__( "Enabling this option will show category filter title", 'burst' )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_enable_filter_title",
	$blog_masonry_enable_filter_title
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Title", 'burst' ),
	esc_html__( "Define text styles for filter title", 'burst' )
);
$blog_masonry_filter_container->addChild(
	"group1",
	$group1
);

$row1 = new BurstMikadoRow();
$group1->addChild(
	"row1",
	$row1
);
$blog_masonry_filter_title_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_filter_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_filter_title_color",
	$blog_masonry_filter_title_color
);
$blog_masonry_filter_title_font_size = new BurstMikadoField(
	"textsimple",
	"blog_masonry_filter_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_filter_title_font_size",
	$blog_masonry_filter_title_font_size
);
$blog_masonry_filter_title_line_height = new BurstMikadoField(
	"textsimple",
	"blog_masonry_filter_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_filter_title_line_height",
	$blog_masonry_filter_title_line_height
);
$blog_masonry_filter_title_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"blog_masonry_filter_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"blog_masonry_filter_title_text_transform",
	$blog_masonry_filter_title_text_transform
);

$row2 = new BurstMikadoRow( true );
$group1->addChild(
	"row2",
	$row2
);
$blog_masonry_filter_title_font_family = new BurstMikadoField(
	"fontsimple",
	"blog_masonry_filter_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_masonry_filter_title_font_family",
	$blog_masonry_filter_title_font_family
);
$blog_masonry_filter_title_font_style = new BurstMikadoField(
	"selectblanksimple",
	"blog_masonry_filter_title_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_masonry_filter_title_font_style",
	$blog_masonry_filter_title_font_style
);
$blog_masonry_filter_title_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"blog_masonry_filter_title_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_masonry_filter_title_font_weight",
	$blog_masonry_filter_title_font_weight
);
$blog_masonry_filter_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"blog_masonry_filter_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_masonry_filter_title_letter_spacing",
	$blog_masonry_filter_title_letter_spacing
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Categories", 'burst' ),
	esc_html__( "Define text styles for filter categories", 'burst' )
);
$blog_masonry_filter_container->addChild(
	"group2",
	$group2
);

$row1 = new BurstMikadoRow();
$group2->addChild(
	"row1",
	$row1
);
$blog_masonry_filter_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_filter_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_filter_color",
	$blog_masonry_filter_color
);
$blog_masonry_filter_hovercolor = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_filter_hovercolor",
	"",
	esc_html__( "Hover/Active Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_filter_hovercolor",
	$blog_masonry_filter_hovercolor
);
$blog_masonry_filter_font_size = new BurstMikadoField(
	"textsimple",
	"blog_masonry_filter_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_filter_font_size",
	$blog_masonry_filter_font_size
);
$blog_masonry_filter_line_height = new BurstMikadoField(
	"textsimple",
	"blog_masonry_filter_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_filter_line_height",
	$blog_masonry_filter_line_height
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);
$blog_masonry_filter_font_family = new BurstMikadoField(
	"fontsimple",
	"blog_masonry_filter_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_masonry_filter_font_family",
	$blog_masonry_filter_font_family
);
$blog_masonry_filter_font_style = new BurstMikadoField(
	"selectblanksimple",
	"blog_masonry_filter_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_masonry_filter_font_style",
	$blog_masonry_filter_font_style
);
$blog_masonry_filter_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"blog_masonry_filter_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_masonry_filter_font_weight",
	$blog_masonry_filter_font_weight
);
$blog_masonry_filter_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"blog_masonry_filter_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"blog_masonry_filter_text_transform",
	$blog_masonry_filter_text_transform
);

$row3 = new BurstMikadoRow( true );
$group2->addChild(
	"row3",
	$row3
);
$blog_masonry_filter_letter_spacing = new BurstMikadoField(
	"textsimple",
	"blog_masonry_filter_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blog_masonry_filter_letter_spacing",
	$blog_masonry_filter_letter_spacing
);

$blog_masonry_filter_disable_separator = new BurstMikadoField(
	"yesno",
	"blog_masonry_filter_disable_separator",
	"yes",
	esc_html__( "Disable Separator Between Categories", 'burst' ),
	esc_html__( "Disabling this option will remove separator between filter categories.", 'burst' )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_disable_separator",
	$blog_masonry_filter_disable_separator
);

$blog_masonry_type = new BurstMikadoField(
	"select",
	"blog_masonry_type",
	"post_info_below_title",
	esc_html__( "Post Info Position", 'burst' ),
	esc_html__( "Choose Post Info Position for Masonry Blog List", 'burst' ),
	array(
		"post_info_below_title" => esc_html__( "Post Info Section Below Title", 'burst' ),
		"post_info_at_bottom" => esc_html__( "Post Info Section at Bottom", 'burst' )
	)
);
$panel10->addChild(
	"blog_masonry_type",
	$blog_masonry_type
);

$blog_masonry_content_position = new BurstMikadoField(
	"select",
	"blog_masonry_content_position",
	"content_above_blog_list",
	esc_html__( "Content Position", 'burst' ),
	esc_html__( "Choose content position for blog list template when sidebar is enabled. Note: This settings in only for template, not for archive pages", 'burst' ),
	array(
		"content_above_blog_list" => esc_html__( "Content Above Blog List", 'burst' ),
		"content_above_blog_list_and_sidebar" => esc_html__( "Content Above Blog List and Sidebar", 'burst' )
	)
);
$panel10->addChild(
	"blog_masonry_content_position",
	$blog_masonry_content_position
);

$blog_masonry_post_meta_data_section = new BurstMikadoTitle(
	"blog_masonry_post_meta_data_section",
	esc_html__( "Post Info Data Fields", 'burst' )
);
$panel10->addChild(
	"blog_masonry_post_meta_data_section",
	$blog_masonry_post_meta_data_section
);

$blog_masonry_show_categories = new BurstMikadoField(
	"yesno",
	"blog_masonry_show_categories",
	"no",
	esc_html__( "Show Categories", 'burst' ),
	esc_html__( "Enabling this option will Show Categories on Post List", 'burst' )
);
$panel10->addChild(
	"blog_masonry_show_categories",
	$blog_masonry_show_categories
);

$blog_masonry_show_comments = new BurstMikadoField(
	"yesno",
	"blog_masonry_show_comments",
	"no",
	esc_html__( "Show Comments", 'burst' ),
	esc_html__( "Enabling this option will Show Comments on Post List", 'burst' )
);
$panel10->addChild(
	"blog_masonry_show_comments",
	$blog_masonry_show_comments
);

$blog_masonry_show_author = new BurstMikadoField(
	"yesno",
	"blog_masonry_show_author",
	"no",
	esc_html__( "Show Author Name", 'burst' ),
	esc_html__( "Enabling this option will show author name on Post List and Blog Post Single", 'burst' )
);
$panel10->addChild(
	"blog_masonry_show_author",
	$blog_masonry_show_author
);

$blog_masonry_show_date = new BurstMikadoField(
	"yesno",
	"blog_masonry_show_date",
	"no",
	esc_html__( "Show Date", 'burst' ),
	esc_html__( "Enabling this option will show date on Post List", 'burst' )
);
$panel10->addChild(
	"blog_masonry_hide_date",
	$blog_masonry_show_date
);

$blog_masonry_show_share = new BurstMikadoField(
	"yesno",
	"blog_masonry_show_share",
	"no",
	esc_html__( "Show Share", 'burst' ),
	esc_html__( "Enabling this option will show share on Post List", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_blog_masonry_share_options_container"
	)
);
$panel10->addChild(
	"blog_masonry_show_share",
	$blog_masonry_show_share
);

$blog_masonry_share_options_container = new BurstMikadoContainer(
	"blog_masonry_share_options_container",
	"blog_masonry_show_share",
	"no"
);
$panel10->addChild(
	"blog_masonry_share_options_container",
	$blog_masonry_share_options_container
);

$blog_masonry_select_share_options_masonry_type = new BurstMikadoField(
	"select",
	"blog_masonry_select_share_options_masonry_type",
	"dropdown",
	esc_html__( "Social Share Style", 'burst' ),
	esc_html__( "Choose Social Share Style for Masonry Type", 'burst' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'burst' ),
		"list" => esc_html__( "Social Share List", 'burst' )
	),
	array(
		"dependence" => true,
		"show"       => array(
			"list"     => "#mkdf_blog_masonry_share_list_type_options_container",
			"dropdown" => "#mkdf_blog_masonry_share_dropdown_type_options_container"
		),
		"hide"       => array(
			"dropdown" => "#mkdf_blog_masonry_share_list_type_options_container",
			"list"     => "#mkdf_blog_masonry_share_dropdown_type_options_container"
		),
	)
);

$blog_masonry_share_options_container->addChild(
	"blog_masonry_select_share_options_masonry_type",
	$blog_masonry_select_share_options_masonry_type
);

$blog_masonry_share_list_type_options_container = new BurstMikadoContainer(
	"blog_masonry_share_list_type_options_container",
	"blog_masonry_select_share_options_masonry_type",
	"dropdown"
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_list_type_options_container",
	$blog_masonry_share_list_type_options_container
);

$blog_masonry_share_hld_hover_icon_color = new BurstMikadoField(
	"color",
	"blog_masonry_share_hld_hover_icon_color",
	"",
	esc_html__( "Icon color on Quote/Link Holder Hover", 'burst' ),
	esc_html__( "Choose icon color for share list when the quote/link holder is hovered over", 'burst' )
);
$blog_masonry_share_list_type_options_container->addChild(
	"blog_masonry_share_hld_hover_icon_color",
	$blog_masonry_share_hld_hover_icon_color
);

$blog_masonry_share_dropdown_type_options_container = new BurstMikadoContainer(
	"blog_masonry_share_dropdown_type_options_container",
	"blog_masonry_select_share_options_masonry_type",
	"list"
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_dropdown_type_options_container",
	$blog_masonry_share_dropdown_type_options_container
);

$blog_masonry_share_background_color = new BurstMikadoField(
	"color",
	"blog_masonry_share_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Choose background color for share dropdown", 'burst' )
);
$blog_masonry_share_dropdown_type_options_container->addChild(
	"blog_masonry_share_background_color",
	$blog_masonry_share_background_color
);

$blog_masonry_share_background_color_link_post_type = new BurstMikadoField(
	"color",
	"blog_masonry_share_background_color_link_post_type",
	"",
	esc_html__( "Background Color on Quote/Link Post Type", 'burst' ),
	esc_html__( "Choose background color for share dropdown", 'burst' )
);
$blog_masonry_share_dropdown_type_options_container->addChild(
	"blog_masonry_share_background_color_link_post_type",
	$blog_masonry_share_background_color_link_post_type
);

$blog_masonry_share_icon_color = new BurstMikadoField(
	"color",
	"blog_masonry_share_icon_color",
	"",
	esc_html__( "Icon Color", 'burst' ),
	esc_html__( "Choose icon color for share dropdown and list", 'burst' )
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_icon_color",
	$blog_masonry_share_icon_color
);

$blog_masonry_share_icon_hover_color = new BurstMikadoField(
	"color",
	"blog_masonry_share_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'burst' ),
	esc_html__( "Choose icon hover color for share dropdown and list", 'burst' )
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_icon_hover_color",
	$blog_masonry_share_icon_hover_color
);

$blog_masonry_share_icon_color_link_post_type = new BurstMikadoField(
	"color",
	"blog_masonry_share_icon_color_link_post_type",
	"",
	esc_html__( "Icon Color for Quote/Link Post Type", 'burst' ),
	esc_html__( "Choose icon color for share dropdown and list", 'burst' )
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_icon_color_link_post_type",
	$blog_masonry_share_icon_color_link_post_type
);

$blog_masonry_share_icon_hover_color_link_post_type = new BurstMikadoField(
	"color",
	"blog_masonry_share_icon_hover_color_link_post_type",
	"",
	esc_html__( "Icon Hover Color for Quote/Link Post Type", 'burst' ),
	esc_html__( "Choose icon hover color for share dropdown and list", 'burst' )
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_icon_hover_color_link_post_type",
	$blog_masonry_share_icon_hover_color_link_post_type
);

$blog_masonry_show_like = new BurstMikadoField(
	"yesno",
	"blog_masonry_show_like",
	"no",
	esc_html__( "Show Likes", 'burst' ),
	esc_html__( 'Enabling this option will turn on "Likes"', 'burst' )
);
$panel10->addChild(
	"blog_masonry_show_like",
	$blog_masonry_show_like
);

$blog_masonry_post_design_style = new BurstMikadoTitle(
	"blog_masonry_post_design_style",
	esc_html__( "Post Design Style", 'burst' )
);
$panel10->addChild(
	"blog_masonry_post_design_style",
	$blog_masonry_post_design_style
);

$blog_masonry_post_alignment = new BurstMikadoField(
	"select",
	"blog_masonry_post_alignment",
	"",
	esc_html__( "Post Alignment", 'burst' ),
	esc_html__( "Choose alignment for whole post", 'burst' ),
	array(
		"left" => esc_html__( "Left", 'burst' ),
		"center" => esc_html__( "Center", 'burst' ),
		"right" => esc_html__( "Right", 'burst' )
	)
);
$panel10->addChild(
	"blog_masonry_post_alignment",
	$blog_masonry_post_alignment
);

$blog_masonry_enable_text_box = new BurstMikadoField(
	"yesno",
	"blog_masonry_enable_text_box",
	"no",
	esc_html__( "Enable Boxed Styled Post Content", 'burst' ),
	esc_html__( "Enable post text boxed features", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_blog_masonry_enable_text_box_container"
	)
);
$panel10->addChild(
	"blog_masonry_enable_text_box",
	$blog_masonry_enable_text_box
);

$blog_masonry_enable_text_box_container = new BurstMikadoContainer(
	"blog_masonry_enable_text_box_container",
	"blog_masonry_enable_text_box",
	"no"
);
$panel10->addChild(
	"blog_masonry_enable_text_box_container",
	$blog_masonry_enable_text_box_container
);

$blog_masonry_box_background_color = new BurstMikadoField(
	"color",
	"blog_masonry_box_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Choose background color for post text box", 'burst' )
);
$blog_masonry_enable_text_box_container->addChild(
	"blog_masonry_box_background_color",
	$blog_masonry_box_background_color
);

$blog_masonry_box_border_color = new BurstMikadoField(
	"color",
	"blog_masonry_box_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "Choose border color for post text box", 'burst' )
);
$blog_masonry_enable_text_box_container->addChild(
	"blog_masonry_box_border_color",
	$blog_masonry_box_border_color
);

$blog_masonry_box_padding = new BurstMikadoField(
	"text",
	"blog_masonry_box_padding",
	"",
	esc_html__( "Text box padding", 'burst' ),
	esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_enable_text_box_container->addChild(
	"blog_masonry_box_padding",
	$blog_masonry_box_padding
);

$group7 = new BurstMikadoGroup(
	esc_html__( "Paragraph", 'burst' ),
	esc_html__( "Set paragraph color", 'burst' )
);
$panel10->addChild(
	"group7",
	$group7
);

$blog_masonry_paragraph_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_paragraph_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$group7->addChild(
	"blog_masonry_paragraph_color",
	$blog_masonry_paragraph_color
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Quote/Link Background", 'burst' ),
	esc_html__( "Set background of Quote/Link post type", 'burst' )
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

$blog_masonry_ql_background_image = new BurstMikadoField(
	"yesnosimple",
	"blog_masonry_ql_background_image",
	"no",
	esc_html__( "Background Image", 'burst' ),
	""
);
$row1->addChild(
	"blog_masonry_ql_background_image",
	$blog_masonry_ql_background_image
);

$blog_masonry_ql_background_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_ql_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Default color is #ffffff.", 'burst' )
);
$row1->addChild(
	"blog_masonry_ql_background_color",
	$blog_masonry_ql_background_color
);

$blog_masonry_ql_hover_background_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_ql_hover_background_color",
	"",
	esc_html__( "Background Hover Color", 'burst' ),
	esc_html__( "Default color is #e6ae48.", 'burst' )
);
$row1->addChild(
	"blog_masonry_ql_hover_background_color",
	$blog_masonry_ql_hover_background_color
);

$blog_masonry_show_ql_mark = new BurstMikadoField(
	"yesno",
	"blog_masonry_show_ql_mark",
	"yes",
	esc_html__( "Enable Quote/Link Icon", 'burst' ),
	esc_html__( "Show Icons for quote/link post format", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_blog_masonry_show_ql_mark_container"
	)
);
$panel10->addChild(
	"blog_masonry_show_ql_mark",
	$blog_masonry_show_ql_mark
);

$blog_masonry_show_ql_mark_container = new BurstMikadoContainer(
	"blog_masonry_show_ql_mark_container",
	"blog_masonry_show_ql_mark",
	"no"
);
$panel10->addChild(
	"blog_masonry_show_ql_mark_container",
	$blog_masonry_show_ql_mark_container
);

$row1 = new BurstMikadoRow();
$blog_masonry_show_ql_mark_container->addChild(
	"row1",
	$row1
);

$blog_masonry_ql_mark_color = new BurstMikadoField(
	"color",
	"blog_masonry_ql_mark_color",
	"",
	esc_html__( "Icon Color", 'burst' ),
	esc_html__( "Choose icon color for quote/link post", 'burst' )
);
$row1->addChild(
	"blog_masonry_ql_mark_color",
	$blog_masonry_ql_mark_color
);

$blog_masonry_ql_mark_hover_color = new BurstMikadoField(
	"color",
	"blog_masonry_ql_mark_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'burst' ),
	esc_html__( "Choose hover icon color for quote/link post.", 'burst' )
);
$row1->addChild(
	"blog_masonry_ql_mark_hover_color",
	$blog_masonry_ql_mark_hover_color
);

$group8 = new BurstMikadoGroup(
	esc_html__( "Blog List Spacing", 'burst' ),
	esc_html__( "Set spacing for blog layouts", 'burst' )
);
$panel10->addChild(
	"group8",
	$group8
);

$row1 = new BurstMikadoRow();
$group8->addChild(
	"row1",
	$row1
);

$blog_masonry_image_margin_bottom = new BurstMikadoField(
	"textsimple",
	"blog_masonry_image_margin_bottom",
	"",
	esc_html__( "Margin Under Image (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_image_margin_bottom",
	$blog_masonry_image_margin_bottom
);

$blog_masonry_title_margin_bottom = new BurstMikadoField(
	"textsimple",
	"blog_masonry_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_title_margin_bottom",
	$blog_masonry_title_margin_bottom
);

$blog_masonry_post_info_margin_bottom = new BurstMikadoField(
	"textsimple",
	"blog_masonry_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_post_info_margin_bottom",
	$blog_masonry_post_info_margin_bottom
);

$blog_masonry_read_more_margin_top = new BurstMikadoField(
	"textsimple",
	"blog_masonry_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_read_more_margin_top",
	$blog_masonry_read_more_margin_top
);

$row2 = new BurstMikadoRow();
$group8->addChild(
	"row2",
	$row2
);

$blog_masonry_social_share_list_margin_top = new BurstMikadoField(
	"textsimple",
	"blog_masonry_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List Holder (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_masonry_social_share_list_margin_top",
	$blog_masonry_social_share_list_margin_top
);

$blog_masonry_article_margin_bottom = new BurstMikadoField(
	"textsimple",
	"blog_masonry_article_margin_bottom",
	"",
	esc_html__( "Margin Between Articles (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_masonry_article_margin_bottom",
	$blog_masonry_article_margin_bottom
);

$blog_masonry_post_info_bottom_margin_top = new BurstMikadoField(
	"textsimple",
	"blog_masonry_post_info_bottom_margin_top",
	"",
	esc_html__( "Margin Above Post Info When Post Info is on the bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_masonry_post_info_bottom_margin_top",
	$blog_masonry_post_info_bottom_margin_top
);

$group9 = new BurstMikadoGroup(
	esc_html__( "Blog List Spacing for Quote and Link Post Type", 'burst' ),
	esc_html__( "Set spacing for blog layouts", 'burst' )
);
$panel10->addChild(
	"group9",
	$group9
);

$row1 = new BurstMikadoRow();
$group9->addChild(
	"row1",
	$row1
);

$blog_masonry_ql_title_margin_bottom = new BurstMikadoField(
	"textsimple",
	"blog_masonry_ql_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_ql_title_margin_bottom",
	$blog_masonry_ql_title_margin_bottom
);

$blog_masonry_ql_quote_author_margin_bottom = new BurstMikadoField(
	"textsimple",
	"blog_masonry_ql_quote_author_margin_bottom",
	"",
	esc_html__( "Margin Under Quote Author (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_ql_quote_author_margin_bottom",
	$blog_masonry_ql_quote_author_margin_bottom
);

$blog_masonry_ql_social_share_list_margin_top = new BurstMikadoField(
	"textsimple",
	"blog_masonry_ql_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List Holder (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_ql_social_share_list_margin_top",
	$blog_masonry_ql_social_share_list_margin_top
);

$group10 = new BurstMikadoGroup(
	esc_html__( "Border Arround Article", 'burst' ),
	esc_html__( "Set border style for articles", 'burst' )
);
$panel10->addChild(
	"group10",
	$group10
);

$row1 = new BurstMikadoRow();
$group10->addChild(
	"row1",
	$row1
);

$blog_masonry_article_border_width = new BurstMikadoField(
	"textsimple",
	"blog_masonry_article_border_width",
	"",
	esc_html__( "Border Width (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_article_border_width",
	$blog_masonry_article_border_width
);

$blog_masonry_article_border_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_article_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_article_border_color",
	$blog_masonry_article_border_color
);

$post_text_styling = new BurstMikadoTitle(
	"post_text_styling",
	esc_html__( "Post Text Style", 'burst' )
);
$panel10->addChild(
	"post_text_styling",
	$post_text_styling
);

$group2 = new BurstMikadoGroup(
	esc_html__( "Post Title", 'burst' ),
	esc_html__( "Define title styles in this blog post template.", 'burst' )
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

$blog_masonry_title_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_title_color",
	$blog_masonry_title_color
);

$blog_masonry_title_hover_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_title_hover_color",
	$blog_masonry_title_hover_color
);

$blog_masonry_title_fontsize = new BurstMikadoField(
	"textsimple",
	"blog_masonry_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_title_fontsize",
	$blog_masonry_title_fontsize
);

$row2 = new BurstMikadoRow( true );
$group2->addChild(
	"row2",
	$row2
);

$blog_masonry_title_lineheight = new BurstMikadoField(
	"textsimple",
	"blog_masonry_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_title_lineheight",
	$blog_masonry_title_lineheight
);

$blog_masonry_title_google_fonts = new BurstMikadoField(
	"fontsimple",
	"blog_masonry_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_masonry_title_google_fonts",
	$blog_masonry_title_google_fonts
);

$blog_masonry_title_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"blog_masonry_title_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_masonry_title_fontstyle",
	$blog_masonry_title_fontstyle
);

$blog_masonry_title_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"blog_masonry_title_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_masonry_title_fontweight",
	$blog_masonry_title_fontweight
);

$row3 = new BurstMikadoRow( true );
$group2->addChild(
	"row3",
	$row3
);

$blog_masonry_title_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"blog_masonry_title_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"blog_masonry_title_texttransform",
	$blog_masonry_title_texttransform
);

$blog_masonry_title_letterspacing = new BurstMikadoField(
	"textsimple",
	"blog_masonry_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blog_masonry_title_letterspacing",
	$blog_masonry_title_letterspacing
);

$group4 = new BurstMikadoGroup(
	esc_html__( "Post Info Data", 'burst' ),
	esc_html__( "Define post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list", 'burst' )
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

$blog_masonry_info_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_info_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_info_color",
	$blog_masonry_info_color
);

$blog_masonry_info_link_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_info_link_color",
	"",
	esc_html__( "Link Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_info_link_color",
	$blog_masonry_info_link_color
);

$blog_masonry_info_hover_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_info_hover_color",
	"",
	esc_html__( "Link Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_info_hover_color",
	$blog_masonry_info_hover_color
);

$blog_masonry_info_fontsize = new BurstMikadoField(
	"textsimple",
	"blog_masonry_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_info_fontsize",
	$blog_masonry_info_fontsize
);

$row2 = new BurstMikadoRow( true );
$group4->addChild(
	"row2",
	$row2
);

$blog_masonry_info_lineheight = new BurstMikadoField(
	"textsimple",
	"blog_masonry_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_masonry_info_lineheight",
	$blog_masonry_info_lineheight
);

$blog_masonry_info_google_fonts = new BurstMikadoField(
	"fontsimple",
	"blog_masonry_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_masonry_info_google_fonts",
	$blog_masonry_info_google_fonts
);

$blog_masonry_info_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"blog_masonry_info_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_masonry_info_fontstyle",
	$blog_masonry_info_fontstyle
);

$blog_masonry_info_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"blog_masonry_info_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_masonry_info_fontweight",
	$blog_masonry_info_fontweight
);

$row3 = new BurstMikadoRow( true );
$group4->addChild(
	"row3",
	$row3
);

$blog_masonry_info_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"blog_masonry_info_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row3->addChild(
	"blog_masonry_info_texttransform",
	$blog_masonry_info_texttransform
);

$blog_masonry_info_letterspacing = new BurstMikadoField(
	"textsimple",
	"blog_masonry_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blog_masonry_info_letterspacing",
	$blog_masonry_info_letterspacing
);

$group3 = new BurstMikadoGroup(
	esc_html__( "Quote/Link Title Style", 'burst' ),
	esc_html__( "Define title styles for Quote/Link articles", 'burst' )
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

$blog_masonry_ql_title_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_ql_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_ql_title_color",
	$blog_masonry_ql_title_color
);

$blog_masonry_ql_title_hover_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_ql_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_ql_title_hover_color",
	$blog_masonry_ql_title_hover_color
);

$blog_masonry_ql_title_fontsize = new BurstMikadoField(
	"textsimple",
	"blog_masonry_ql_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_ql_title_font_size",
	$blog_masonry_ql_title_fontsize
);

$blog_masonry_ql_title_lineheight = new BurstMikadoField(
	"textsimple",
	"blog_masonry_ql_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_ql_title_lineheight",
	$blog_masonry_ql_title_lineheight
);

$row2 = new BurstMikadoRow( true );
$group3->addChild(
	"row2",
	$row2
);

$blog_masonry_ql_title_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"blog_masonry_ql_title_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"blog_masonry_ql_title_texttransform",
	$blog_masonry_ql_title_texttransform
);

$blog_masonry_ql_title_google_fonts = new BurstMikadoField(
	"fontsimple",
	"blog_masonry_ql_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_masonry_ql_title_google_fonts",
	$blog_masonry_ql_title_google_fonts
);

$blog_masonry_ql_title_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"blog_masonry_ql_title_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_masonry_ql_title_fontstyle",
	$blog_masonry_ql_title_fontstyle
);

$blog_masonry_ql_title_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"blog_masonry_ql_title_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_masonry_ql_title_fontweight",
	$blog_masonry_ql_title_fontweight
);

$row3 = new BurstMikadoRow( true );
$group3->addChild(
	"row3",
	$row3
);

$blog_masonry_ql_title_letterspacing = new BurstMikadoField(
	"textsimple",
	"blog_masonry_ql_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blog_masonry_ql_title_letterspacing",
	$blog_masonry_ql_title_letterspacing
);

$group5 = new BurstMikadoGroup(
	esc_html__( "Quote/Link Post Info Data", 'burst' ),
	esc_html__( "Define quote/link post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list.", 'burst' )
);
$panel10->addChild(
	"group5",
	$group5
);

$row1 = new BurstMikadoRow();
$group5->addChild(
	"row1",
	$row1
);

$blog_masonry_ql_info_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_ql_info_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_ql_info_color",
	$blog_masonry_ql_info_color
);

$blog_masonry_ql_info_link_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_ql_info_link_color",
	"",
	esc_html__( "Link Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_ql_info_link_color",
	$blog_masonry_ql_info_link_color
);

$blog_masonry_ql_info_hover_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_ql_info_hover_color",
	"",
	esc_html__( "Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_ql_info_hover_color",
	$blog_masonry_ql_info_hover_color
);

$blog_masonry_ql_info_fontsize = new BurstMikadoField(
	"textsimple",
	"blog_masonry_ql_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_ql_info_fontsize",
	$blog_masonry_ql_info_fontsize
);

$row2 = new BurstMikadoRow( true );
$group5->addChild(
	"row2",
	$row2
);

$blog_masonry_ql_info_lineheight = new BurstMikadoField(
	"textsimple",
	"blog_masonry_ql_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_masonry_ql_info_lineheight",
	$blog_masonry_ql_info_lineheight
);

$blog_masonry_ql_info_google_fonts = new BurstMikadoField(
	"fontsimple",
	"blog_masonry_ql_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_masonry_ql_info_google_fonts",
	$blog_masonry_ql_info_google_fonts
);

$blog_masonry_ql_info_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"blog_masonry_ql_info_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_masonry_ql_info_fontstyle",
	$blog_masonry_ql_info_fontstyle
);

$blog_masonry_ql_info_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"blog_masonry_ql_info_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_masonry_ql_info_fontweight",
	$blog_masonry_ql_info_fontweight
);

$row3 = new BurstMikadoRow( true );
$group5->addChild(
	"row3",
	$row3
);

$blog_masonry_ql_info_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"blog_masonry_ql_info_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row3->addChild(
	"blog_masonry_ql_info_texttransform",
	$blog_masonry_ql_info_texttransform
);

$blog_masonry_ql_info_letterspacing = new BurstMikadoField(
	"textsimple",
	"blog_masonry_ql_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blog_masonry_ql_info_letterspacing",
	$blog_masonry_ql_info_letterspacing
);

$group6 = new BurstMikadoGroup(
	esc_html__( "Quote Author Style", 'burst' ),
	esc_html__( "Define author styles for Quote articles", 'burst' )
);
$panel10->addChild(
	"group6",
	$group6
);

$row1 = new BurstMikadoRow();
$group6->addChild(
	"row1",
	$row1
);

$blog_masonry_ql_author_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_ql_author_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_ql_author_color",
	$blog_masonry_ql_author_color
);

$blog_masonry_ql_author_hover_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_ql_author_hover_color",
	"",
	esc_html__( "Text Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_ql_author_hover_color",
	$blog_masonry_ql_author_hover_color
);

$blog_masonry_ql_author_fontsize = new BurstMikadoField(
	"textsimple",
	"blog_masonry_ql_author_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_ql_author_font_size",
	$blog_masonry_ql_author_fontsize
);

$blog_masonry_ql_author_lineheight = new BurstMikadoField(
	"textsimple",
	"blog_masonry_ql_author_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_ql_author_lineheight",
	$blog_masonry_ql_author_lineheight
);

$row2 = new BurstMikadoRow( true );
$group6->addChild(
	"row2",
	$row2
);

$blog_masonry_ql_author_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"blog_masonry_ql_author_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"blog_masonry_ql_author_texttransform",
	$blog_masonry_ql_author_texttransform
);

$blog_masonry_ql_author_google_fonts = new BurstMikadoField(
	"fontsimple",
	"blog_masonry_ql_author_google_fonts",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_masonry_ql_author_google_fonts",
	$blog_masonry_ql_author_google_fonts
);

$blog_masonry_ql_author_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"blog_masonry_ql_author_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_masonry_ql_author_fontstyle",
	$blog_masonry_ql_author_fontstyle
);

$blog_masonry_ql_author_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"blog_masonry_ql_author_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_masonry_ql_author_fontweight",
	$blog_masonry_ql_author_fontweight
);

$row3 = new BurstMikadoRow( true );
$group6->addChild(
	"row3",
	$row3
);

$blog_masonry_ql_author_letterspacing = new BurstMikadoField(
	"textsimple",
	"blog_masonry_ql_author_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blog_masonry_ql_author_letterspacing",
	$blog_masonry_ql_author_letterspacing
);

$blog_masonry_meta_info_featured_subtitle = new BurstMikadoTitle(
	"blog_masonry_meta_info_featured_subtitle",
	esc_html__( "Meta Info Featured on Side", 'burst' )
);
$panel10->addChild(
	"blog_masonry_meta_info_featured_subtitle",
	$blog_masonry_meta_info_featured_subtitle
);

$blog_masonry_meta_info_featured_on_side_post_info_border_color = new BurstMikadoField(
	"color",
	"blog_masonry_meta_info_featured_on_side_post_info_border_color",
	"",
	esc_html__( "Post Info Border Color", 'burst' ),
	esc_html__( "Default color is #ebebeb.", 'burst' )
);
$panel10->addChild(
	"blog_masonry_meta_info_featured_on_side_post_info_border_color",
	$blog_masonry_meta_info_featured_on_side_post_info_border_color
);

$group11 = new BurstMikadoGroup(
	esc_html__( "Post Info Date Box", 'burst' ),
	esc_html__( "Set style for Post Info Date Box", 'burst' )
);
$panel10->addChild(
	"group11",
	$group11
);

$row1 = new BurstMikadoRow();
$group11->addChild(
	"row1",
	$row1
);

$blog_masonry_meta_info_featured_on_side_date_box_background_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_meta_info_featured_on_side_date_box_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Default color is #ffffff.", 'burst' )
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_date_box_background_color",
	$blog_masonry_meta_info_featured_on_side_date_box_background_color
);

$blog_masonry_meta_info_featured_on_side_date_month_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_meta_info_featured_on_side_date_month_color",
	"",
	esc_html__( "Month Color", 'burst' ),
	esc_html__( "Default color is #e6ae48.", 'burst' )
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_date_month_color",
	$blog_masonry_meta_info_featured_on_side_date_month_color
);

$blog_masonry_meta_info_featured_on_side_date_day_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_meta_info_featured_on_side_date_day_color",
	"",
	esc_html__( "Day Color", 'burst' ),
	esc_html__( "Default color is #e6ae48.", 'burst' )
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_date_day_color",
	$blog_masonry_meta_info_featured_on_side_date_day_color
);

$blog_masonry_meta_info_featured_on_side_date_padding_top = new BurstMikadoField(
	"textsimple",
	"blog_masonry_meta_info_featured_on_side_date_padding_top",
	"",
	esc_html__( "Padding Top", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_date_padding_top",
	$blog_masonry_meta_info_featured_on_side_date_padding_top
);

$row2 = new BurstMikadoRow();
$group11->addChild(
	"row2",
	$row2
);

$blog_masonry_meta_info_featured_on_side_date_padding_bottom = new BurstMikadoField(
	"textsimple",
	"blog_masonry_meta_info_featured_on_side_date_padding_bottom",
	"",
	esc_html__( "Padding Bottom", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_masonry_meta_info_featured_on_side_date_padding_bottom",
	$blog_masonry_meta_info_featured_on_side_date_padding_bottom
);

$group12 = new BurstMikadoGroup(
	esc_html__( "Post Info Like Box", 'burst' ),
	esc_html__( "Set style for Post Info Like Box", 'burst' )
);
$panel10->addChild(
	"group12",
	$group12
);

$row1 = new BurstMikadoRow();
$group12->addChild(
	"row1",
	$row1
);

$blog_masonry_meta_info_featured_on_side_like_box_background_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_meta_info_featured_on_side_like_box_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Default color is #ffffff.", 'burst' )
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_like_box_background_color",
	$blog_masonry_meta_info_featured_on_side_like_box_background_color
);

$blog_masonry_meta_info_featured_on_side_like_box_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_meta_info_featured_on_side_like_box_color",
	"",
	esc_html__( "Icon Color", 'burst' ),
	esc_html__( "Default color is #e6ae48.", 'burst' )
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_like_box_color",
	$blog_masonry_meta_info_featured_on_side_like_box_color
);

$blog_masonry_meta_info_featured_on_side_like_box_hover_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_meta_info_featured_on_side_like_box_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'burst' ),
	""
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_like_box_hover_color",
	$blog_masonry_meta_info_featured_on_side_like_box_hover_color
);

$blog_masonry_meta_info_featured_on_side_like_count_number_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_meta_info_featured_on_side_like_count_number_color",
	"",
	esc_html__( "Number Color", 'burst' ),
	esc_html__( "Default color is #e6ae48.", 'burst' )
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_like_count_number_color",
	$blog_masonry_meta_info_featured_on_side_like_count_number_color
);

$row2 = new BurstMikadoRow();
$group12->addChild(
	"row2",
	$row2
);

$blog_masonry_meta_info_featured_on_side_like_padding_top = new BurstMikadoField(
	"textsimple",
	"blog_masonry_meta_info_featured_on_side_like_padding_top",
	"",
	esc_html__( "Padding Top", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_masonry_meta_info_featured_on_side_like_padding_top",
	$blog_masonry_meta_info_featured_on_side_like_padding_top
);

$blog_masonry_meta_info_featured_on_side_like_padding_bottom = new BurstMikadoField(
	"textsimple",
	"blog_masonry_meta_info_featured_on_side_like_padding_bottom",
	"",
	esc_html__( "Padding Bottom", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_masonry_meta_info_featured_on_side_like_padding_bottom",
	$blog_masonry_meta_info_featured_on_side_like_padding_bottom
);

$group13 = new BurstMikadoGroup(
	esc_html__( "Post Info Share Box", 'burst' ),
	esc_html__( "Set style for Post Info Share Box", 'burst' )
);
$panel10->addChild(
	"group13",
	$group13
);

$row1 = new BurstMikadoRow();
$group13->addChild(
	"row1",
	$row1
);

$blog_masonry_meta_info_featured_on_side_share_box_background_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_meta_info_featured_on_side_share_box_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Default color is #ffffff.", 'burst' )
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_share_box_background_color",
	$blog_masonry_meta_info_featured_on_side_share_box_background_color
);

$blog_masonry_meta_info_featured_on_side_share_box_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_meta_info_featured_on_side_share_box_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "Default color is #e6ae48.", 'burst' )
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_share_box_color",
	$blog_masonry_meta_info_featured_on_side_share_box_color
);

$blog_masonry_meta_info_featured_on_side_share_box_hover_color = new BurstMikadoField(
	"colorsimple",
	"blog_masonry_meta_info_featured_on_side_share_box_hover_color",
	"",
	esc_html__( "Hover Color", 'burst' ),
	esc_html__( "Default color is #e6ae48.", 'burst' )
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_share_box_hover_color",
	$blog_masonry_meta_info_featured_on_side_share_box_hover_color
);

$blog_masonry_meta_info_featured_on_side_share_padding_top = new BurstMikadoField(
	"textsimple",
	"blog_masonry_meta_info_featured_on_side_share_padding_top",
	"",
	esc_html__( "Padding Top", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_share_padding_top",
	$blog_masonry_meta_info_featured_on_side_share_padding_top
);

$row2 = new BurstMikadoRow();
$group13->addChild(
	"row2",
	$row2
);

$blog_masonry_meta_info_featured_on_side_share_padding_bottom = new BurstMikadoField(
	"textsimple",
	"blog_masonry_meta_info_featured_on_side_share_padding_bottom",
	"",
	esc_html__( "Padding Bottom", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_masonry_meta_info_featured_on_side_share_padding_bottom",
	$blog_masonry_meta_info_featured_on_side_share_padding_bottom
);

// Blog Post List - Blog: Standard
$panel21 = new BurstMikadoPanel(
	esc_html__( "Blog List Template Options: Standard", 'burst' ),
	"blog_standard_type_post_lists",
	"blog_standard_type_show_options",
	"no"
);
$blogPage->addChild(
	"panel21",
	$panel21
);

$blog_standard_type_number_of_chars = new BurstMikadoField(
	"text",
	"blog_standard_type_number_of_chars",
	"45",
	esc_html__( "Number of Words in Excerpt", 'burst' ),
	' Enter a number of words in excerpt (article summary)',
	array(),
	array( "col_width" => 3 )
);
$panel21->addChild(
	"blog_standard_type_number_of_chars",
	$blog_standard_type_number_of_chars
);

$blog_standard_type_image_size = new BurstMikadoField(
	"select",
	"blog_standard_type_image_size",
	"full",
	esc_html__( "Blog Image Size", 'burst' ),
	esc_html__( "Choose image size for Blog Single pages", 'burst' ),
	array(
		"full" => esc_html__( "Default", 'burst' ),
		"portfolio-landscape" => esc_html__( "Landscape", 'burst' ),
		"portfolio-portrait" => esc_html__( "Portrait", 'burst' ),
		"custom" => esc_html__( "Custom", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"full"                => "#mkdf_blog_standard_type_image_size_container",
			"portfolio-landscape" => "#mkdf_blog_standard_type_image_size_container",
			"portfolio-portrait"  => "#mkdf_blog_standard_type_image_size_container",
			"custom"              => ""
		),
		"show"       => array(
			"full"                => "",
			"portfolio-landscape" => "",
			"portfolio-portrait"  => "",
			"custom"              => "#mkdf_blog_standard_type_image_size_container"
		)
	)
);
$panel21->addChild(
	"blog_standard_type_image_size",
	$blog_standard_type_image_size
);

$blog_standard_type_image_size_container = new BurstMikadoContainer(
	"blog_standard_type_image_size_container",
	"blog_standard_type_image_size",
	"",
	array(
		"full",
		"portfolio-landscape",
		"portfolio-portrait"
	)
);
$panel21->addChild(
	"blog_standard_type_image_size_container",
	$blog_standard_type_image_size_container
);

$blog_standard_type_image_size_height = new BurstMikadoField(
	"text",
	"blog_standard_type_image_size_height",
	"",
	esc_html__( "Image Height (px)", 'burst' ),
	esc_html__( "Enter width (in pixels) for Custom Image for Blog Single", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$blog_standard_type_image_size_container->addChild(
	"blog_standard_type_image_size_height",
	$blog_standard_type_image_size_height
);

$blog_standard_type_image_size_width = new BurstMikadoField(
	"text",
	"blog_standard_type_image_size_width",
	"",
	esc_html__( "Image Width (px)", 'burst' ),
	esc_html__( "Enter width (in pixels) for Custom Image for Blog Single", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$blog_standard_type_image_size_container->addChild(
	"blog_standard_type_image_size_width",
	$blog_standard_type_image_size_width
);

$blog_standard_type_read_more_button = new BurstMikadoField(
	"yesno",
	"blog_standard_type_read_more_button",
	"yes",
	esc_html__( "Read More Button", 'burst' ),
	esc_html__( "Enable Read More Button", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_blog_standard_type_read_more_button_container"
	)
);
$panel21->addChild(
	"blog_standard_type_read_more_button",
	$blog_standard_type_read_more_button
);

$blog_standard_type_read_more_button_container = new BurstMikadoContainer(
	"blog_standard_type_read_more_button_container",
	"blog_standard_type_read_more_button",
	"no"
);
$panel21->addChild(
	"blog_standard_type_read_more_button_container",
	$blog_standard_type_read_more_button_container
);

$blog_standard_type_read_more_button_icon = new BurstMikadoField(
	"yesno",
	"blog_standard_type_read_more_button_icon",
	"no",
	esc_html__( "Enable Icon", 'burst' ),
	esc_html__( "Enabling this option will place icon in read more button", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_blog_standard_type_read_more_button_icon_container"
	)
);
$blog_standard_type_read_more_button_container->addChild(
	"blog_standard_type_read_more_button_icon",
	$blog_standard_type_read_more_button_icon
);

$blog_standard_type_read_more_button_icon_container = new BurstMikadoContainer(
	"blog_standard_type_read_more_button_icon_container",
	"blog_standard_type_read_more_button_icon",
	"no"
);
$blog_standard_type_read_more_button_container->addChild(
	"blog_standard_type_read_more_button_icon_container",
	$blog_standard_type_read_more_button_icon_container
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$blog_standard_type_read_more_button_icon_pack_hide_array = array();
$blog_standard_type_read_more_button_icon_pack_show_array = array();

//do we have some collection added in collections array?
if ( is_array( $burst_mikado_IconCollections->iconCollections ) && count( $burst_mikado_IconCollections->iconCollections ) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$blog_standard_type_read_more_button_icon_collections_params = $burst_mikado_IconCollections->getIconCollectionsParams(
	);
	
	//foreach collection generate hide and show array
	foreach ( $burst_mikado_IconCollections->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$blog_standard_type_read_more_button_icon_pack_hide_array[ $dep_collection_key ] = '';
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$blog_standard_type_read_more_button_icon_pack_show_array[ $dep_collection_key ] = '#mkdf_blog_standard_type_read_more_button_icon_' . $dep_collection_object->param . '_container';
		
		//for all collections param generate hide string
		foreach ( $blog_standard_type_read_more_button_icon_collections_params as $blog_standard_type_read_more_button_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $blog_standard_type_read_more_button_icon_collections_param !== $dep_collection_object->param ) {
				$blog_standard_type_read_more_button_icon_pack_hide_array[ $dep_collection_key ] .= '#mkdf_blog_standard_type_read_more_button_icon_' . $blog_standard_type_read_more_button_icon_collections_param . '_container,';
			}
		}
		
		//remove remaining ',' character
		$blog_standard_type_read_more_button_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$blog_standard_type_read_more_button_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
	}
	
}

$blog_standard_type_read_more_button_icon_pack = new BurstMikadoField(
	"select",
	"blog_standard_type_read_more_button_icon_pack",
	"font_awesome",
	esc_html__( "Icon Pack", 'burst' ),
	esc_html__( "Choose icon pack for show load more button", 'burst' ),
	$burst_mikado_IconCollections->getIconCollections(),
	array(
		"dependence" => true,
		"hide"       => $blog_standard_type_read_more_button_icon_pack_hide_array,
		"show"       => $blog_standard_type_read_more_button_icon_pack_show_array
	)
);

$blog_standard_type_read_more_button_icon_container->addChild(
	"blog_standard_type_read_more_button_icon_pack",
	$blog_standard_type_read_more_button_icon_pack
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
		
		$blog_standard_type_read_more_button_icon_hide_values = $icon_collections_keys;
		$blog_icon_container                                  = new BurstMikadoContainer(
			"blog_standard_type_read_more_button_icon_" . $collection_object->param . "_container",
			"blog_standard_type_read_more_button_icon_pack",
			"",
			$blog_standard_type_read_more_button_icon_hide_values
		);
		$blog_standard_type_read_more_button_icon             = new BurstMikadoField(
			"select",
			"blog_standard_type_read_more_button_icon_" . $collection_object->param,
			"",
			esc_html__( "Button Icon", 'burst' ),
			esc_html__( "Choose Button Icon", 'burst' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$blog_icon_container->addChild(
			"blog_standard_type_read_more_button_icon_" . $collection_object->param,
			$blog_standard_type_read_more_button_icon
		);
		
		$blog_standard_type_read_more_button_icon_container->addChild(
			"blog_standard_type_read_more_button_icon_" . $collection_object->param . "_container",
			$blog_icon_container
		);
	}
	
}

$blog_standard_type_content_position = new BurstMikadoField(
	"select",
	"blog_standard_type_content_position",
	"content_above_blog_list",
	esc_html__( "Content Position", 'burst' ),
	esc_html__( "Choose content position for blog list template when sidebar is enabled. Note: This settings in only for template, not for archive pages", 'burst' ),
	array(
		"content_above_blog_list" => esc_html__( "Content Above Blog List", 'burst' ),
		"content_above_blog_list_and_sidebar" => esc_html__( "Content Above Blog List and Sidebar", 'burst' )
	)
);
$panel21->addChild(
	"blog_standard_type_content_position",
	$blog_standard_type_content_position
);

$blog_standard_type_post_meta_data_section = new BurstMikadoTitle(
	"blog_standard_type_post_meta_data_section",
	esc_html__( "Post Info Data Fields", 'burst' )
);
$panel21->addChild(
	"blog_standard_type_post_meta_data_section",
	$blog_standard_type_post_meta_data_section
);

$blog_standard_type_show_categories = new BurstMikadoField(
	"yesno",
	"blog_standard_type_show_categories",
	"yes",
	esc_html__( "Show Categories", 'burst' ),
	esc_html__( "Enabling this option will Show Categories on Post List", 'burst' )
);
$panel21->addChild(
	"blog_standard_type_show_categories",
	$blog_standard_type_show_categories
);

$blog_standard_type_show_comments = new BurstMikadoField(
	"yesno",
	"blog_standard_type_show_comments",
	"no",
	esc_html__( "Show Comments", 'burst' ),
	esc_html__( "Enabling this option will Show Comments on Post List", 'burst' )
);
$panel21->addChild(
	"blog_standard_type_show_comments",
	$blog_standard_type_show_comments
);

$blog_standard_type_show_author = new BurstMikadoField(
	"yesno",
	"blog_standard_type_show_author",
	"yes",
	esc_html__( "Show Author Name", 'burst' ),
	esc_html__( "Enabling this option will show author name on Post List and Blog Post Single", 'burst' )
);
$panel21->addChild(
	"blog_standard_type_show_author",
	$blog_standard_type_show_author
);

$blog_standard_type_show_date = new BurstMikadoField(
	"yesno",
	"blog_standard_type_show_date",
	"yes",
	esc_html__( "Show Date", 'burst' ),
	esc_html__( "Enabling this option will show date on Post List", 'burst' )
);
$panel21->addChild(
	"blog_standard_type_hide_date",
	$blog_standard_type_show_date
);

$blog_standard_type_show_share = new BurstMikadoField(
	"yesno",
	"blog_standard_type_show_share",
	"no",
	esc_html__( "Show Share", 'burst' ),
	esc_html__( "Enabling this option will show share on Post List", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_blog_standard_type_share_options_container"
	)
);
$panel21->addChild(
	"blog_standard_type_show_share",
	$blog_standard_type_show_share
);

$blog_standard_type_share_options_container = new BurstMikadoContainer(
	"blog_standard_type_share_options_container",
	"blog_standard_type_show_share",
	"no"
);
$panel21->addChild(
	"blog_standard_type_share_options_container",
	$blog_standard_type_share_options_container
);

$blog_standard_type_select_share_option = new BurstMikadoField(
	"select",
	"blog_standard_type_select_share_option",
	"dropdown",
	esc_html__( "Social Share Style", 'burst' ),
	esc_html__( "Choose Social Share Style for Standard Type", 'burst' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'burst' ),
		"list" => esc_html__( "Social Share List", 'burst' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"dropdown" => "#mkdf_blog_standard_type_share_list_type_container",
			"list"     => "#mkdf_blog_standard_type_share_dropdown_type_container"
		),
		"show"       => array(
			"dropdown" => "#mkdf_blog_standard_type_share_dropdown_type_container",
			"list"     => "#mkdf_blog_standard_type_share_list_type_container"
		)
	)
);

$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_select_share_option",
	$blog_standard_type_select_share_option
);

$blog_standard_type_share_list_type_container = new BurstMikadoContainer(
	"blog_standard_type_share_list_type_container",
	"blog_standard_type_select_share_option",
	"dropdown"
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_list_type_container",
	$blog_standard_type_share_list_type_container
);

$blog_standard_type_share_hld_hover_icon_color = new BurstMikadoField(
	"color",
	"blog_standard_type_share_hld_hover_icon_color",
	"",
	esc_html__( "Icon color on Quote/Link Holder Hover", 'burst' ),
	esc_html__( "Choose icon color for list share type when the quote/link holder is hovered over", 'burst' )
);
$blog_standard_type_share_list_type_container->addChild(
	"blog_standard_type_share_hld_hover_icon_color",
	$blog_standard_type_share_hld_hover_icon_color
);

$blog_standard_type_share_dropdown_type_container = new BurstMikadoContainer(
	"blog_standard_type_share_dropdown_type_container",
	"blog_standard_type_select_share_option",
	"list"
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_dropdown_type_container",
	$blog_standard_type_share_dropdown_type_container
);

$blog_standard_type_share_background_color = new BurstMikadoField(
	"color",
	"blog_standard_type_share_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Choose background color for dropdown share type", 'burst' )
);
$blog_standard_type_share_dropdown_type_container->addChild(
	"blog_standard_type_share_background_color",
	$blog_standard_type_share_background_color
);

$blog_standard_type_share_background_color_link_post_type = new BurstMikadoField(
	"color",
	"blog_standard_type_share_background_color_link_post_type",
	"",
	esc_html__( "Background Color on Quote/Link Post Type", 'burst' ),
	esc_html__( "Choose background color for dropdown share type on quote post type", 'burst' )
);
$blog_standard_type_share_dropdown_type_container->addChild(
	"blog_standard_type_share_background_color_link_post_type",
	$blog_standard_type_share_background_color_link_post_type
);

$blog_standard_type_share_icon_color = new BurstMikadoField(
	"color",
	"blog_standard_type_share_icon_color",
	"",
	esc_html__( "Icon Color", 'burst' ),
	esc_html__( "Choose icon color for dropdown and list share type", 'burst' )
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_icon_color",
	$blog_standard_type_share_icon_color
);

$blog_standard_type_share_icon_hover_color = new BurstMikadoField(
	"color",
	"blog_standard_type_share_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'burst' ),
	esc_html__( "Choose icon hover color for dropdown and list Share Type", 'burst' )
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_icon_hover_color",
	$blog_standard_type_share_icon_hover_color
);

$blog_standard_type_share_icon_color_link_post_type = new BurstMikadoField(
	"color",
	"blog_standard_type_share_icon_color_link_post_type",
	"",
	esc_html__( "Icon Color For Quote/Link Post Type", 'burst' ),
	esc_html__( "Choose icon color for dropdown and list share type for quote post type", 'burst' )
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_icon_color_link_post_type",
	$blog_standard_type_share_icon_color_link_post_type
);

$blog_standard_type_share_icon_hover_color_link_post_type = new BurstMikadoField(
	"color",
	"blog_standard_type_share_icon_hover_color_link_post_type",
	"",
	esc_html__( "Icon Hover Color For Quote/Link Post Type", 'burst' ),
	esc_html__( "Choose icon hover color for dropdown and list Share Type for quote post type", 'burst' )
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_icon_hover_color_link_post_type",
	$blog_standard_type_share_icon_hover_color_link_post_type
);

$blog_standard_type_show_like = new BurstMikadoField(
	"yesno",
	"blog_standard_type_show_like",
	"no",
	esc_html__( "Show Likes", 'burst' ),
	esc_html__( 'Enabling this option will turn on "Likes"', 'burst' )
);
$panel21->addChild(
	"blog_standard_type_show_like",
	$blog_standard_type_show_like
);

$blog_standard_type_post_design_style = new BurstMikadoTitle(
	"blog_standard_type_post_design_style",
	esc_html__( "Post Design Style", 'burst' )
);
$panel21->addChild(
	"blog_standard_type_post_design_style",
	$blog_standard_type_post_design_style
);

$blog_standard_type_enable_text_box = new BurstMikadoField(
	"yesno",
	"blog_standard_type_enable_text_box",
	"no",
	esc_html__( "Enable Boxed Styled Post Content", 'burst' ),
	esc_html__( "Enable post text boxed features", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_blog_standard_type_enable_text_box_container"
	)
);
$panel21->addChild(
	"blog_standard_type_enable_text_box",
	$blog_standard_type_enable_text_box
);

$blog_standard_type_enable_text_box_container = new BurstMikadoContainer(
	"blog_standard_type_enable_text_box_container",
	"blog_standard_type_enable_text_box",
	"no"
);
$panel21->addChild(
	"blog_standard_type_enable_text_box_container",
	$blog_standard_type_enable_text_box_container
);

$blog_standard_type_box_background_color = new BurstMikadoField(
	"color",
	"blog_standard_type_box_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Choose background color for post text box", 'burst' )
);
$blog_standard_type_enable_text_box_container->addChild(
	"blog_standard_type_box_background_color",
	$blog_standard_type_box_background_color
);

$blog_standard_type_box_border_color = new BurstMikadoField(
	"color",
	"blog_standard_type_box_border_color",
	"",
	esc_html__( "Border Color", 'burst' ),
	esc_html__( "Choose border color for post text box", 'burst' )
);
$blog_standard_type_enable_text_box_container->addChild(
	"blog_standard_type_box_border_color",
	$blog_standard_type_box_border_color
);

$blog_standard_type_box_padding = new BurstMikadoField(
	"text",
	"blog_standard_type_box_padding",
	"",
	esc_html__( "Text box padding", 'burst' ),
	esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$blog_standard_type_enable_text_box_container->addChild(
	"blog_standard_type_box_padding",
	$blog_standard_type_box_padding
);

$group10 = new BurstMikadoGroup(
	esc_html__( "Paragraph", 'burst' ),
	esc_html__( "Set paragraph color", 'burst' )
);
$panel21->addChild(
	"group10",
	$group10
);

$blog_standard_type_paragraph_color = new BurstMikadoField(
	"colorsimple",
	"blog_standard_type_paragraph_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$group10->addChild(
	"blog_standard_type_paragraph_color",
	$blog_standard_type_paragraph_color
);

$group1 = new BurstMikadoGroup(
	esc_html__( "Quote/Link Background", 'burst' ),
	esc_html__( "Set background of Quote/Link post type", 'burst' )
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

$blog_standard_type_ql_background_image = new BurstMikadoField(
	"yesnosimple",
	"blog_standard_type_ql_background_image",
	"no",
	esc_html__( "Background Image", 'burst' ),
	""
);
$row1->addChild(
	"blog_standard_type_ql_background_image",
	$blog_standard_type_ql_background_image
);

$blog_standard_type_ql_background_color = new BurstMikadoField(
	"colorsimple",
	"blog_standard_type_ql_background_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Default color is #ffffff.", 'burst' )
);
$row1->addChild(
	"blog_standard_type_ql_background_color",
	$blog_standard_type_ql_background_color
);

$blog_standard_type_ql_hover_background_color = new BurstMikadoField(
	"colorsimple",
	"blog_standard_type_ql_hover_background_color",
	"",
	esc_html__( "Background Hover Color", 'burst' ),
	esc_html__( "Default color is #e6ae48.", 'burst' )
);
$row1->addChild(
	"blog_standard_type_ql_hover_background_color",
	$blog_standard_type_ql_hover_background_color
);

$blog_standard_type_show_ql_mark = new BurstMikadoField(
	"yesno",
	"blog_standard_type_show_ql_mark",
	"yes",
	esc_html__( "Enable Quote/Link Icon", 'burst' ),
	esc_html__( "Show Icons for Quote/Link Post Format", 'burst' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#mkdf_blog_standard_type_show_ql_mark_container"
	)
);
$panel21->addChild(
	"blog_standard_type_show_ql_mark",
	$blog_standard_type_show_ql_mark
);

$blog_standard_type_show_ql_mark_container = new BurstMikadoContainer(
	"blog_standard_type_show_ql_mark_container",
	"blog_standard_type_show_ql_mark",
	"no"
);
$panel21->addChild(
	"blog_standard_type_show_ql_mark_container",
	$blog_standard_type_show_ql_mark_container
);

$row1 = new BurstMikadoRow();
$blog_standard_type_show_ql_mark_container->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_mark_color = new BurstMikadoField(
	"color",
	"blog_standard_type_ql_mark_color",
	"",
	esc_html__( "Icon Color", 'burst' ),
	esc_html__( "Choose icon color for quote/link post.", 'burst' )
);
$row1->addChild(
	"blog_standard_type_ql_mark_color",
	$blog_standard_type_ql_mark_color
);

$blog_standard_type_ql_mark_hover_color = new BurstMikadoField(
	"color",
	"blog_standard_type_ql_mark_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'burst' ),
	esc_html__( "Choose hover icon color for quote/link post.", 'burst' )
);
$row1->addChild(
	"blog_standard_type_ql_mark_hover_color",
	$blog_standard_type_ql_mark_hover_color
);

$group11 = new BurstMikadoGroup(
	esc_html__( "Blog List Spacing", 'burst' ),
	esc_html__( "Set spacing for blog layouts", 'burst' )
);
$panel21->addChild(
	"group11",
	$group11
);

$row1 = new BurstMikadoRow();
$group11->addChild(
	"row1",
	$row1
);

$blog_standard_type_image_margin_bottom = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_image_margin_bottom",
	"",
	esc_html__( "Margin Under Image (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_image_margin_bottom",
	$blog_standard_type_image_margin_bottom
);

$blog_standard_type_title_margin_bottom = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_title_margin_bottom",
	$blog_standard_type_title_margin_bottom
);

$blog_standard_type_read_more_margin_top = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_read_more_margin_top",
	$blog_standard_type_read_more_margin_top
);

$blog_standard_type_post_info_margin_bottom = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_post_info_margin_bottom",
	$blog_standard_type_post_info_margin_bottom
);

$row2 = new BurstMikadoRow();
$group11->addChild(
	"row2",
	$row2
);

$blog_standard_type_article_margin_bottom = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_article_margin_bottom",
	"",
	esc_html__( "Margin Between Articles (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_standard_type_article_margin_bottom",
	$blog_standard_type_article_margin_bottom
);

$blog_standard_type_single_article_social_share_list_margin_top = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_single_article_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List Holder (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_standard_type_single_article_social_share_list_margin_top",
	$blog_standard_type_single_article_social_share_list_margin_top
);

$group12 = new BurstMikadoGroup(
	esc_html__( "Blog List Spacing for Quote and Link Post Type", 'burst' ),
	esc_html__( "Set spacing for blog layouts", 'burst' )
);
$panel21->addChild(
	"group12",
	$group12
);

$row1 = new BurstMikadoRow();
$group12->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_title_margin_bottom = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_ql_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_ql_title_margin_bottom",
	$blog_standard_type_ql_title_margin_bottom
);

$blog_standard_type_ql_social_share_list_margin_top = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_ql_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_ql_social_share_list_margin_top",
	$blog_standard_type_ql_social_share_list_margin_top
);

$blog_standard_type_ql_quote_author_margin_bottom = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_ql_quote_author_margin_bottom",
	"",
	esc_html__( "Margin Under Quote Author (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_ql_quote_author_margin_bottom",
	$blog_standard_type_ql_quote_author_margin_bottom
);

$post_text_styling = new BurstMikadoTitle(
	"post_text_styling",
	esc_html__( "Post Text Style", 'burst' )
);
$panel21->addChild(
	"post_text_styling",
	$post_text_styling
);

$group5 = new BurstMikadoGroup(
	esc_html__( "Post Title", 'burst' ),
	esc_html__( "Define title styles in this blog post template.", 'burst' )
);
$panel21->addChild(
	"group5",
	$group5
);

$row1 = new BurstMikadoRow();
$group5->addChild(
	"row1",
	$row1
);

$blog_standard_type_title_color = new BurstMikadoField(
	"colorsimple",
	"blog_standard_type_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_title_color",
	$blog_standard_type_title_color
);

$blog_standard_type_title_hover_color = new BurstMikadoField(
	"colorsimple",
	"blog_standard_type_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_title_hover_color",
	$blog_standard_type_title_hover_color
);

$blog_standard_type_title_fontsize = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_title_fontsize",
	$blog_standard_type_title_fontsize
);

$blog_standard_type_title_lineheight = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_title_lineheight",
	$blog_standard_type_title_lineheight
);

$row2 = new BurstMikadoRow( true );
$group5->addChild(
	"row2",
	$row2
);

$blog_standard_type_title_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"blog_standard_type_title_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"blog_standard_type_title_texttransform",
	$blog_standard_type_title_texttransform
);

$blog_standard_type_title_google_fonts = new BurstMikadoField(
	"fontsimple",
	"blog_standard_type_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_standard_type_title_google_fonts",
	$blog_standard_type_title_google_fonts
);

$blog_standard_type_title_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"blog_standard_type_title_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_standard_type_title_fontstyle",
	$blog_standard_type_title_fontstyle
);

$blog_standard_type_title_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"blog_standard_type_title_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_standard_type_title_fontweight",
	$blog_standard_type_title_fontweight
);

$row3 = new BurstMikadoRow( true );
$group5->addChild(
	"row3",
	$row3
);

$blog_standard_type_title_letterspacing = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blog_standard_type_title_letterspacing",
	$blog_standard_type_title_letterspacing
);

$group7 = new BurstMikadoGroup(
	esc_html__( "Post Info Data", 'burst' ),
	esc_html__( "Define post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list", 'burst' )
);
$panel21->addChild(
	"group7",
	$group7
);

$row1 = new BurstMikadoRow();
$group7->addChild(
	"row1",
	$row1
);

$blog_standard_type_info_color = new BurstMikadoField(
	"colorsimple",
	"blog_standard_type_info_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_info_color",
	$blog_standard_type_info_color
);

$blog_standard_type_info_link_color = new BurstMikadoField(
	"colorsimple",
	"blog_standard_type_info_link_color",
	"",
	esc_html__( "Link Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_info_link_color",
	$blog_standard_type_info_link_color
);

$blog_standard_type_info_hover_color = new BurstMikadoField(
	"colorsimple",
	"blog_standard_type_info_hover_color",
	"",
	esc_html__( "Link Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_info_hover_color",
	$blog_standard_type_info_hover_color
);

$blog_standard_type_info_fontsize = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_info_fontsize",
	$blog_standard_type_info_fontsize
);

$row2 = new BurstMikadoRow( true );
$group7->addChild(
	"row2",
	$row2
);

$blog_standard_type_info_lineheight = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_standard_type_info_lineheight",
	$blog_standard_type_info_lineheight
);

$blog_standard_type_info_google_fonts = new BurstMikadoField(
	"fontsimple",
	"blog_standard_type_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_standard_type_info_google_fonts",
	$blog_standard_type_info_google_fonts
);

$blog_standard_type_info_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"blog_standard_type_info_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_standard_type_info_fontstyle",
	$blog_standard_type_info_fontstyle
);

$blog_standard_type_info_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"blog_standard_type_info_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_standard_type_info_fontweight",
	$blog_standard_type_info_fontweight
);

$row3 = new BurstMikadoRow( true );
$group7->addChild(
	"row3",
	$row3
);

$blog_standard_type_info_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"blog_standard_type_info_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row3->addChild(
	"blog_standard_type_info_texttransform",
	$blog_standard_type_info_texttransform
);

$blog_standard_type_info_letterspacing = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blog_standard_type_info_letterspacing",
	$blog_standard_type_info_letterspacing
);

$group6 = new BurstMikadoGroup(
	esc_html__( "Quote/Link Title Style", 'burst' ),
	esc_html__( "Define title styles for Quote/Link articles", 'burst' )
);
$panel21->addChild(
	"group6",
	$group6
);

$row1 = new BurstMikadoRow();
$group6->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_title_color = new BurstMikadoField(
	"colorsimple",
	"blog_standard_type_ql_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_ql_title_color",
	$blog_standard_type_ql_title_color
);

$blog_standard_type_ql_title_hover_color = new BurstMikadoField(
	"colorsimple",
	"blog_standard_type_ql_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_ql_title_hover_color",
	$blog_standard_type_ql_title_hover_color
);

$blog_standard_type_ql_title_fontsize = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_ql_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_ql_title_font_size",
	$blog_standard_type_ql_title_fontsize
);

$blog_standard_type_ql_title_lineheight = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_ql_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_ql_title_lineheight",
	$blog_standard_type_ql_title_lineheight
);

$row2 = new BurstMikadoRow( true );
$group6->addChild(
	"row2",
	$row2
);

$blog_standard_type_ql_title_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"blog_standard_type_ql_title_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"blog_standard_type_ql_title_texttransform",
	$blog_standard_type_ql_title_texttransform
);

$blog_standard_type_ql_title_google_fonts = new BurstMikadoField(
	"fontsimple",
	"blog_standard_type_ql_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_standard_type_ql_title_google_fonts",
	$blog_standard_type_ql_title_google_fonts
);

$blog_standard_type_ql_title_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"blog_standard_type_ql_title_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_standard_type_ql_title_fontstyle",
	$blog_standard_type_ql_title_fontstyle
);

$blog_standard_type_ql_title_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"blog_standard_type_ql_title_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_standard_type_ql_title_fontweight",
	$blog_standard_type_ql_title_fontweight
);

$row3 = new BurstMikadoRow( true );
$group6->addChild(
	"row3",
	$row3
);

$blog_standard_type_ql_title_letterspacing = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_ql_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blog_standard_type_ql_title_letterspacing",
	$blog_standard_type_ql_title_letterspacing
);

$group8 = new BurstMikadoGroup(
	esc_html__( "Quote/Link Post Info Data", 'burst' ),
	esc_html__( "Define quote/link post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list.", 'burst' )
);
$panel21->addChild(
	"group8",
	$group8
);

$row1 = new BurstMikadoRow();
$group8->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_info_color = new BurstMikadoField(
	"colorsimple",
	"blog_standard_type_ql_info_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_ql_info_color",
	$blog_standard_type_ql_info_color
);

$blog_standard_type_ql_info_link_color = new BurstMikadoField(
	"colorsimple",
	"blog_standard_type_ql_info_link_color",
	"",
	esc_html__( "Link Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_ql_info_link_color",
	$blog_standard_type_ql_info_link_color
);

$blog_standard_type_ql_info_hover_color = new BurstMikadoField(
	"colorsimple",
	"blog_standard_type_ql_info_hover_color",
	"",
	esc_html__( "Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_ql_info_hover_color",
	$blog_standard_type_ql_info_hover_color
);

$blog_standard_type_ql_info_fontsize = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_ql_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_ql_info_fontsize",
	$blog_standard_type_ql_info_fontsize
);

$row2 = new BurstMikadoRow( true );
$group8->addChild(
	"row2",
	$row2
);

$blog_standard_type_ql_info_lineheight = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_ql_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_standard_type_ql_info_lineheight",
	$blog_standard_type_ql_info_lineheight
);

$blog_standard_type_ql_info_google_fonts = new BurstMikadoField(
	"fontsimple",
	"blog_standard_type_ql_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_standard_type_ql_info_google_fonts",
	$blog_standard_type_ql_info_google_fonts
);

$blog_standard_type_ql_info_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"blog_standard_type_ql_info_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_standard_type_ql_info_fontstyle",
	$blog_standard_type_ql_info_fontstyle
);

$blog_standard_type_ql_info_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"blog_standard_type_ql_info_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_standard_type_ql_info_fontweight",
	$blog_standard_type_ql_info_fontweight
);

$row3 = new BurstMikadoRow( true );
$group8->addChild(
	"row3",
	$row3
);

$blog_standard_type_ql_info_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"blog_standard_type_ql_info_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row3->addChild(
	"blog_standard_type_ql_info_texttransform",
	$blog_standard_type_ql_info_texttransform
);

$blog_standard_type_ql_info_letterspacing = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_ql_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blog_standard_type_ql_info_letterspacing",
	$blog_standard_type_ql_info_letterspacing
);

$group9 = new BurstMikadoGroup(
	esc_html__( "Quote Author Style", 'burst' ),
	esc_html__( "Define author styles for Quote articles", 'burst' )
);
$panel21->addChild(
	"group9",
	$group9
);

$row1 = new BurstMikadoRow();
$group9->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_author_color = new BurstMikadoField(
	"colorsimple",
	"blog_standard_type_ql_author_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_ql_author_color",
	$blog_standard_type_ql_author_color
);

$blog_standard_type_ql_author_hover_color = new BurstMikadoField(
	"colorsimple",
	"blog_standard_type_ql_author_hover_color",
	"",
	esc_html__( "Text Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_ql_author_hover_color",
	$blog_standard_type_ql_author_hover_color
);

$blog_standard_type_ql_author_fontsize = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_ql_author_fontsize",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_ql_author_font_size",
	$blog_standard_type_ql_author_fontsize
);

$blog_standard_type_ql_author_lineheight = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_ql_author_lineheight",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_standard_type_ql_author_lineheight",
	$blog_standard_type_ql_author_lineheight
);

$row2 = new BurstMikadoRow( true );
$group9->addChild(
	"row2",
	$row2
);

$blog_standard_type_ql_author_texttransform = new BurstMikadoField(
	"selectblanksimple",
	"blog_standard_type_ql_author_texttransform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"blog_standard_type_ql_author_texttransform",
	$blog_standard_type_ql_author_texttransform
);

$blog_standard_type_ql_author_google_fonts = new BurstMikadoField(
	"fontsimple",
	"blog_standard_type_ql_author_google_fonts",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_standard_type_ql_author_google_fonts",
	$blog_standard_type_ql_author_google_fonts
);

$blog_standard_type_ql_author_fontstyle = new BurstMikadoField(
	"selectblanksimple",
	"blog_standard_type_ql_author_fontstyle",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_standard_type_ql_author_fontstyle",
	$blog_standard_type_ql_author_fontstyle
);

$blog_standard_type_ql_author_fontweight = new BurstMikadoField(
	"selectblanksimple",
	"blog_standard_type_ql_author_fontweight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_standard_type_ql_author_fontweight",
	$blog_standard_type_ql_author_fontweight
);

$row3 = new BurstMikadoRow( true );
$group9->addChild(
	"row3",
	$row3
);

$blog_standard_type_ql_author_letterspacing = new BurstMikadoField(
	"textsimple",
	"blog_standard_type_ql_author_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blog_standard_type_ql_author_letterspacing",
	$blog_standard_type_ql_author_letterspacing
);

//Blog List

$panel28 = new BurstMikadoPanel(
	esc_html__( "Blog List Shortcode", 'burst' ),
	"blog_list_panel"
);
$blogPage->addChild(
	"panel28",
	$panel28
);

//Blog List Boxes

$blog_list_boxes_section_subtitle = new BurstMikadoTitle(
	"blog_list_boxes_section_subtitle",
	esc_html__( "Blog List - Boxes", 'burst' )
);
$panel28->addChild(
	"blog_list_boxes_section_subtitle",
	$blog_list_boxes_section_subtitle
);

$group6 = new BurstMikadoGroup(
	esc_html__( "Blog List Padding", 'burst' ),
	esc_html__( "Enter Boxes Blog List padding", 'burst' )
);
$panel28->addChild(
	"group6",
	$group6
);
$row1 = new BurstMikadoRow();
$group6->addChild(
	"row1",
	$row1
);

$blog_list_boxes_padding_top = new BurstMikadoField(
	"textsimple",
	"blog_list_boxes_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_boxes_padding_top",
	$blog_list_boxes_padding_top
);

$blog_list_boxes_padding_right = new BurstMikadoField(
	"textsimple",
	"blog_list_boxes_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_boxes_padding_right",
	$blog_list_boxes_padding_right
);

$blog_list_boxes_padding_bottom = new BurstMikadoField(
	"textsimple",
	"blog_list_boxes_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_boxes_padding_bottom",
	$blog_list_boxes_padding_bottom
);

$blog_list_boxes_padding_left = new BurstMikadoField(
	"textsimple",
	"blog_list_boxes_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_boxes_padding_left",
	$blog_list_boxes_padding_left
);

$group16 = new BurstMikadoGroup(
	esc_html__( "Blog List Spacing", 'burst' ),
	esc_html__( "Define blog list spacing", 'burst' )
);
$panel28->addChild(
	"group16",
	$group16
);

$row1 = new BurstMikadoRow();
$group16->addChild(
	"row1",
	$row1
);

$blog_list_boxes_title_margin_bottom = new BurstMikadoField(
	"textsimple",
	"blog_list_boxes_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_boxes_title_margin_bottom",
	$blog_list_boxes_title_margin_bottom
);

$blog_list_boxes_post_info_margin_bottom = new BurstMikadoField(
	"textsimple",
	"blog_list_boxes_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_boxes_post_info_margin_bottom",
	$blog_list_boxes_post_info_margin_bottom
);

$blog_list_boxes_read_more_margin_top = new BurstMikadoField(
	"textsimple",
	"blog_list_boxes_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_boxes_read_more_margin_top",
	$blog_list_boxes_read_more_margin_top
);

$group17 = new BurstMikadoGroup(
	esc_html__( "Blog List Title", 'burst' ),
	esc_html__( "Define Blog List title style", 'burst' )
);
$panel28->addChild(
	"group17",
	$group17
);

$row1 = new BurstMikadoRow();
$group17->addChild(
	"row1",
	$row1
);

$blog_list_boxes_title_color = new BurstMikadoField(
	"colorsimple",
	"blog_list_boxes_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_boxes_title_color",
	$blog_list_boxes_title_color
);

$blog_list_boxes_title_hover_color = new BurstMikadoField(
	"colorsimple",
	"blog_list_boxes_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_boxes_title_hover_color",
	$blog_list_boxes_title_hover_color
);

$blog_list_boxes_title_font_size = new BurstMikadoField(
	"textsimple",
	"blog_list_boxes_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_boxes_title_font_size",
	$blog_list_boxes_title_font_size
);

$blog_list_boxes_title_line_height = new BurstMikadoField(
	"textsimple",
	"blog_list_boxes_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_boxes_title_line_height",
	$blog_list_boxes_title_line_height
);

$row2 = new BurstMikadoRow();
$group17->addChild(
	"row2",
	$row2
);

$blog_list_boxes_title_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"blog_list_boxes_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"blog_list_boxes_title_text_transform",
	$blog_list_boxes_title_text_transform
);

$blog_list_boxes_title_font_family = new BurstMikadoField(
	"fontsimple",
	"blog_list_boxes_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_list_boxes_title_font_family",
	$blog_list_boxes_title_font_family
);

$blog_list_boxes_title_font_style = new BurstMikadoField(
	"selectblanksimple",
	"blog_list_boxes_title_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_list_boxes_title_font_style",
	$blog_list_boxes_title_font_style
);

$blog_list_boxes_title_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"blog_list_boxes_title_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_list_boxes_title_font_weight",
	$blog_list_boxes_title_font_weight
);

$row3 = new BurstMikadoRow();
$group17->addChild(
	"row3",
	$row3
);

$blog_list_boxes_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"blog_list_boxes_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blog_list_boxes_title_letter_spacing",
	$blog_list_boxes_title_letter_spacing
);

$group18 = new BurstMikadoGroup(
	esc_html__( "Blog List Post Info", 'burst' ),
	esc_html__( "Define blog list post info style", 'burst' )
);
$panel28->addChild(
	"group18",
	$group18
);

$row1 = new BurstMikadoRow();
$group18->addChild(
	"row1",
	$row1
);

$blog_list_boxes_post_info_color = new BurstMikadoField(
	"colorsimple",
	"blog_list_boxes_post_info_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_boxes_post_info_color",
	$blog_list_boxes_post_info_color
);

$blog_list_boxes_post_info_link_color = new BurstMikadoField(
	"colorsimple",
	"blog_list_boxes_post_info_link_color",
	"",
	esc_html__( "Link Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_boxes_post_info_link_color",
	$blog_list_boxes_post_info_link_color
);

$blog_list_boxes_post_info_link_hover_color = new BurstMikadoField(
	"colorsimple",
	"blog_list_boxes_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_boxes_post_info_link_hover_color",
	$blog_list_boxes_post_info_link_hover_color
);

$blog_list_boxes_post_info_font_size = new BurstMikadoField(
	"textsimple",
	"blog_list_boxes_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_boxes_post_info_font_size",
	$blog_list_boxes_post_info_font_size
);

$row2 = new BurstMikadoRow();
$group18->addChild(
	"row2",
	$row2
);

$blog_list_boxes_post_info_line_height = new BurstMikadoField(
	"textsimple",
	"blog_list_boxes_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_list_boxes_post_info_line_height",
	$blog_list_boxes_post_info_line_height
);

$blog_list_boxes_post_info_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"blog_list_boxes_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"blog_list_boxes_post_info_text_transform",
	$blog_list_boxes_post_info_text_transform
);

$blog_list_boxes_post_info_font_family = new BurstMikadoField(
	"fontsimple",
	"blog_list_boxes_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_list_boxes_post_info_font_family",
	$blog_list_boxes_post_info_font_family
);

$blog_list_boxes_post_info_font_style = new BurstMikadoField(
	"selectblanksimple",
	"blog_list_boxes_post_info_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_list_boxes_post_info_font_style",
	$blog_list_boxes_post_info_font_style
);

$row3 = new BurstMikadoRow();
$group18->addChild(
	"row3",
	$row3
);

$blog_list_boxes_post_info_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"blog_list_boxes_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row3->addChild(
	"blog_list_boxes_post_info_font_weight",
	$blog_list_boxes_post_info_font_weight
);

$blog_list_boxes_post_info_letter_spacing = new BurstMikadoField(
	"textsimple",
	"blog_list_boxes_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blog_list_boxes_post_info_letter_spacing",
	$blog_list_boxes_post_info_letter_spacing
);

$blog_list_boxes_date_color = new BurstMikadoField(
	"color",
	"blog_list_boxes_date_color",
	"",
	esc_html__( "Date Color", 'burst' ),
	esc_html__( "Choose color for date", 'burst' )
);
$panel28->addChild(
	"blog_list_boxes_date_color",
	$blog_list_boxes_date_color
);

$blog_list_minimal_subtitle = new BurstMikadoTitle(
	"blog_list_minimal_subtitle",
	esc_html__( "Blog List - Minimal", 'burst' )
);
$panel28->addChild(
	"blog_list_minimal_subtitle",
	$blog_list_minimal_subtitle
);

$group5 = new BurstMikadoGroup(
	esc_html__( "Blog List Spacing", 'burst' ),
	esc_html__( "Define blog list spacing", 'burst' )
);
$panel28->addChild(
	"group5",
	$group5
);

$row1 = new BurstMikadoRow( true );
$group5->addChild(
	"row1",
	$row1
);

$blog_list_minimal_title_margin_bottom = new BurstMikadoField(
	"textsimple",
	"blog_list_minimal_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_minimal_title_margin_bottom",
	$blog_list_minimal_title_margin_bottom
);

$blog_list_minimal_post_info_margin_bottom = new BurstMikadoField(
	"textsimple",
	"blog_list_minimal_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_minimal_post_info_margin_bottom",
	$blog_list_minimal_post_info_margin_bottom
);

$blog_list_minimal_read_more_margin_top = new BurstMikadoField(
	"textsimple",
	"blog_list_minimal_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_minimal_read_more_margin_top",
	$blog_list_minimal_read_more_margin_top
);

// Image in left box

$image_in_left_box = new BurstMikadoTitle(
	"image_in_left_box",
	esc_html__( "Blog List - Image in Left Box", 'burst' )
);
$panel28->addChild(
	"image_in_left_box",
	$image_in_left_box
);

$group28 = new BurstMikadoGroup(
	esc_html__( "Blog List Title", 'burst' ),
	esc_html__( "Define Blog List title style", 'burst' )
);
$panel28->addChild(
	"group28",
	$group28
);
$row1 = new BurstMikadoRow();
$group28->addChild(
	"row1",
	$row1
);

$blog_list_img_in_lbox_title_color = new BurstMikadoField(
	"colorsimple",
	"blog_list_img_in_lbox_title_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_color",
	$blog_list_img_in_lbox_title_color
);

$blog_list_img_in_lbox_title_hover_color = new BurstMikadoField(
	"colorsimple",
	"blog_list_img_in_lbox_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_hover_color",
	$blog_list_img_in_lbox_title_hover_color
);

$blog_list_img_in_lbox_title_font_size = new BurstMikadoField(
	"textsimple",
	"blog_list_img_in_lbox_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_font_size",
	$blog_list_img_in_lbox_title_font_size
);

$blog_list_img_in_lbox_title_line_height = new BurstMikadoField(
	"textsimple",
	"blog_list_img_in_lbox_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_line_height",
	$blog_list_img_in_lbox_title_line_height
);

$row2 = new BurstMikadoRow( true );
$group28->addChild(
	"row2",
	$row2
);

$blog_list_img_in_lbox_title_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"blog_list_img_in_lbox_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"blog_list_img_in_lbox_title_text_transform",
	$blog_list_img_in_lbox_title_text_transform
);

$blog_list_img_in_lbox_title_font_family = new BurstMikadoField(
	"fontsimple",
	"blog_list_img_in_lbox_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_list_img_in_lbox_title_font_family",
	$blog_list_img_in_lbox_title_font_family
);

$blog_list_img_in_lbox_title_font_style = new BurstMikadoField(
	"selectblanksimple",
	"blog_list_img_in_lbox_title_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_list_img_in_lbox_title_font_style",
	$blog_list_img_in_lbox_title_font_style
);

$blog_list_img_in_lbox_title_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"blog_list_img_in_lbox_title_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_list_img_in_lbox_title_font_weight",
	$blog_list_img_in_lbox_title_font_weight
);

$row3 = new BurstMikadoRow( true );
$group28->addChild(
	"row3",
	$row3
);

$blog_list_img_in_lbox_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"blog_list_img_in_lbox_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blog_list_img_in_lbox_title_letter_spacing",
	$blog_list_img_in_lbox_title_letter_spacing
);

$group29 = new BurstMikadoGroup(
	esc_html__( "Blog List Post Info", 'burst' ),
	esc_html__( "Define blog list post info style", 'burst' )
);
$panel28->addChild(
	"group29",
	$group29
);
$row1 = new BurstMikadoRow();
$group29->addChild(
	"row1",
	$row1
);

$blog_list_img_in_lbox_post_info_color = new BurstMikadoField(
	"colorsimple",
	"blog_list_img_in_lbox_post_info_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_color",
	$blog_list_img_in_lbox_post_info_color
);

$blog_list_img_in_lbox_post_info_link_color = new BurstMikadoField(
	"colorsimple",
	"blog_list_img_in_lbox_post_info_link_color",
	"",
	esc_html__( "Link Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_link_color",
	$blog_list_img_in_lbox_post_info_link_color
);

$blog_list_img_in_lbox_post_info_link_hover_color = new BurstMikadoField(
	"colorsimple",
	"blog_list_img_in_lbox_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_link_hover_color",
	$blog_list_img_in_lbox_post_info_link_hover_color
);

$blog_list_img_in_lbox_post_info_font_size = new BurstMikadoField(
	"textsimple",
	"blog_list_img_in_lbox_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_font_size",
	$blog_list_img_in_lbox_post_info_font_size
);

$row2 = new BurstMikadoRow( true );
$group29->addChild(
	"row2",
	$row2
);

$blog_list_img_in_lbox_post_info_line_height = new BurstMikadoField(
	"textsimple",
	"blog_list_img_in_lbox_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_list_img_in_lbox_post_info_line_height",
	$blog_list_img_in_lbox_post_info_line_height
);

$blog_list_img_in_lbox_post_info_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"blog_list_img_in_lbox_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"blog_list_img_in_lbox_post_info_text_transform",
	$blog_list_img_in_lbox_post_info_text_transform
);

$blog_list_img_in_lbox_post_info_font_family = new BurstMikadoField(
	"fontsimple",
	"blog_list_img_in_lbox_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_list_img_in_lbox_post_info_font_family",
	$blog_list_img_in_lbox_post_info_font_family
);

$blog_list_img_in_lbox_post_info_font_style = new BurstMikadoField(
	"selectblanksimple",
	"blog_list_img_in_lbox_post_info_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_list_img_in_lbox_post_info_font_style",
	$blog_list_img_in_lbox_post_info_font_style
);

$row3 = new BurstMikadoRow( true );
$group29->addChild(
	"row3",
	$row3
);

$blog_list_img_in_lbox_post_info_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"blog_list_img_in_lbox_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row3->addChild(
	"blog_list_img_in_lbox_post_info_font_weight",
	$blog_list_img_in_lbox_post_info_font_weight
);

$blog_list_img_in_lbox_post_info_letter_spacing = new BurstMikadoField(
	"textsimple",
	"blog_list_img_in_lbox_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blog_list_img_in_lbox_post_info_letter_spacing",
	$blog_list_img_in_lbox_post_info_letter_spacing
);

$group30 = new BurstMikadoGroup(
	esc_html__( "Blog List Date Style", 'burst' ),
	esc_html__( "Define blog list date style", 'burst' )
);
$panel28->addChild(
	"group30",
	$group30
);
$row1 = new BurstMikadoRow();
$group30->addChild(
	"row1",
	$row1
);

$blog_list_img_in_lbox_date_color = new BurstMikadoField(
	"colorsimple",
	"blog_list_img_in_lbox_date_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_img_in_lbox_date_color",
	$blog_list_img_in_lbox_date_color
);

$blog_list_img_in_lbox_date_font_size = new BurstMikadoField(
	"textsimple",
	"blog_list_img_in_lbox_date_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_img_in_lbox_date_font_size",
	$blog_list_img_in_lbox_date_font_size
);

$blog_list_img_in_lbox_date_line_height = new BurstMikadoField(
	"textsimple",
	"blog_list_img_in_lbox_date_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_img_in_lbox_date_line_height",
	$blog_list_img_in_lbox_date_line_height
);

$blog_list_img_in_lbox_date_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"blog_list_img_in_lbox_date_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"blog_list_img_in_lbox_date_text_transform",
	$blog_list_img_in_lbox_date_text_transform
);

$row2 = new BurstMikadoRow( true );
$group30->addChild(
	"row2",
	$row2
);

$blog_list_img_in_lbox_date_font_family = new BurstMikadoField(
	"fontsimple",
	"blog_list_img_in_lbox_date_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_list_img_in_lbox_date_font_family",
	$blog_list_img_in_lbox_date_font_family
);

$blog_list_img_in_lbox_date_font_style = new BurstMikadoField(
	"selectblanksimple",
	"blog_list_img_in_lbox_date_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_list_img_in_lbox_date_font_style",
	$blog_list_img_in_lbox_date_font_style
);

$blog_list_img_in_lbox_date_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"blog_list_img_in_lbox_date_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_list_img_in_lbox_date_font_weight",
	$blog_list_img_in_lbox_date_font_weight
);

$blog_list_img_in_lbox_date_letter_spacing = new BurstMikadoField(
	"textsimple",
	"blog_list_img_in_lbox_date_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_list_img_in_lbox_date_letter_spacing",
	$blog_list_img_in_lbox_date_letter_spacing
);

$group31 = new BurstMikadoGroup(
	esc_html__( "Blog List Spacing", 'burst' ),
	esc_html__( "Define blog list spacing", 'burst' )
);
$panel28->addChild(
	"group31",
	$group31
);

$row1 = new BurstMikadoRow( true );
$group31->addChild(
	"row1",
	$row1
);

$blog_list_img_in_lbox_title_margin_bttm = new BurstMikadoField(
	"textsimple",
	"blog_list_img_in_lbox_title_margin_bttm",
	"",
	esc_html__( "Margin Under Title (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_margin_bttm",
	$blog_list_img_in_lbox_title_margin_bttm
);

$blog_list_img_in_lbox_post_info_margin_bttm = new BurstMikadoField(
	"textsimple",
	"blog_list_img_in_lbox_post_info_margin_bttm",
	"",
	esc_html__( "Margin Under Post Info (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_margin_bttm",
	$blog_list_img_in_lbox_post_info_margin_bttm
);

$blog_list_img_in_lbox_read_more_margin_top = new BurstMikadoField(
	"textsimple",
	"blog_list_img_in_lbox_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_list_img_in_lbox_read_more_margin_top",
	$blog_list_img_in_lbox_read_more_margin_top
);

/*** Blog Carousel ***/

$panel31 = new BurstMikadoPanel(
	esc_html__( "Blog Carousel", 'burst' ),
	"blog_slider"
);
$blogPage->addChild(
	"panel31",
	$panel31
);

$blog_slider_default_and_with_info_always_title = new BurstMikadoTitle(
	"blog_slider_default_and_with_info_always_title",
	esc_html__( "Default and Post Info Visible", 'burst' )
);
$panel31->addChild(
	"blog_slider_default_and_with_info_always_title",
	$blog_slider_default_and_with_info_always_title
);

$group23 = new BurstMikadoGroup(
	esc_html__( "Title style", 'burst' ),
	esc_html__( "Blog Carousel title style", 'burst' )
);
$panel31->addChild(
	"group23",
	$group23
);

$row1 = new BurstMikadoRow();
$group23->addChild(
	"row1",
	$row1
);

$blog_slider_title_color = new BurstMikadoField(
	"colorsimple",
	"blog_slider_title_color",
	"",
	esc_html__( "Title Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_title_color",
	$blog_slider_title_color
);

$blog_slider_title_hover_color = new BurstMikadoField(
	"colorsimple",
	"blog_slider_title_hover_color",
	"",
	esc_html__( "Title Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_title_hover_color",
	$blog_slider_title_hover_color
);

$blog_slider_title_font_size = new BurstMikadoField(
	"textsimple",
	"blog_slider_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_title_font_size",
	$blog_slider_title_font_size
);

$blog_slider_title_line_height = new BurstMikadoField(
	"textsimple",
	"blog_slider_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_title_line_height",
	$blog_slider_title_line_height
);

$row2 = new BurstMikadoRow();
$group23->addChild(
	"row2",
	$row2
);

$blog_slider_title_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"blog_slider_title_text_transform",
	$blog_slider_title_text_transform
);

$blog_slider_title_font_family = new BurstMikadoField(
	"fontsimple",
	"blog_slider_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_slider_title_font_family",
	$blog_slider_title_font_family
);

$blog_slider_title_font_style = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_title_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_slider_title_font_style",
	$blog_slider_title_font_style
);

$blog_slider_title_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_title_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_slider_title_font_weight",
	$blog_slider_title_font_weight
);

$row3 = new BurstMikadoRow();
$group23->addChild(
	"row3",
	$row3
);

$blog_slider_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"blog_slider_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blog_slider_title_letter_spacing",
	$blog_slider_title_letter_spacing
);

$group24 = new BurstMikadoGroup(
	esc_html__( "Category style", 'burst' ),
	esc_html__( "Blog Carousel categories style", 'burst' )
);
$panel31->addChild(
	"group24",
	$group24
);

$row1 = new BurstMikadoRow();
$group24->addChild(
	"row1",
	$row1
);

$blog_slider_category_color = new BurstMikadoField(
	"colorsimple",
	"blog_slider_category_color",
	"",
	esc_html__( "Category Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_category_color",
	$blog_slider_category_color
);

$blog_slider_category_hover_color = new BurstMikadoField(
	"colorsimple",
	"blog_slider_category_hover_color",
	"",
	esc_html__( "Category Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_category_hover_color",
	$blog_slider_category_hover_color
);

$blog_slider_category_font_size = new BurstMikadoField(
	"textsimple",
	"blog_slider_category_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_category_font_size",
	$blog_slider_category_font_size
);

$blog_slider_category_line_height = new BurstMikadoField(
	"textsimple",
	"blog_slider_category_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_category_line_height",
	$blog_slider_category_line_height
);

$row2 = new BurstMikadoRow();
$group24->addChild(
	"row2",
	$row2
);

$blog_slider_category_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_category_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"blog_slider_category_text_transform",
	$blog_slider_category_text_transform
);

$blog_slider_category_font_family = new BurstMikadoField(
	"fontsimple",
	"blog_slider_category_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_slider_category_font_family",
	$blog_slider_category_font_family
);

$blog_slider_category_font_style = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_category_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_slider_category_font_style",
	$blog_slider_category_font_style
);

$blog_slider_category_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_category_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_slider_category_font_weight",
	$blog_slider_category_font_weight
);

$row3 = new BurstMikadoRow();
$group24->addChild(
	"row3",
	$row3
);

$blog_slider_category_letter_spacing = new BurstMikadoField(
	"textsimple",
	"blog_slider_category_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blog_slider_category_letter_spacing",
	$blog_slider_category_letter_spacing
);

$group25 = new BurstMikadoGroup(
	esc_html__( "Date style", 'burst' ),
	esc_html__( "Blog Carousel date style", 'burst' )
);
$panel31->addChild(
	"group25",
	$group25
);

$row1 = new BurstMikadoRow();
$group25->addChild(
	"row1",
	$row1
);

$blog_slider_date_color = new BurstMikadoField(
	"colorsimple",
	"blog_slider_date_color",
	"",
	esc_html__( "Date Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_date_color",
	$blog_slider_date_color
);

$blog_slider_date_font_size = new BurstMikadoField(
	"textsimple",
	"blog_slider_date_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_date_font_size",
	$blog_slider_date_font_size
);

$blog_slider_date_line_height = new BurstMikadoField(
	"textsimple",
	"blog_slider_date_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_date_line_height",
	$blog_slider_date_line_height
);

$blog_slider_date_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_date_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row1->addChild(
	"blog_slider_date_text_transform",
	$blog_slider_date_text_transform
);

$row2 = new BurstMikadoRow();
$group25->addChild(
	"row2",
	$row2
);

$blog_slider_date_font_family = new BurstMikadoField(
	"fontsimple",
	"blog_slider_date_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_slider_date_font_family",
	$blog_slider_date_font_family
);

$blog_slider_date_font_style = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_date_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_slider_date_font_style",
	$blog_slider_date_font_style
);

$blog_slider_date_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_date_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_slider_date_font_weight",
	$blog_slider_date_font_weight
);

$blog_slider_date_letter_spacing = new BurstMikadoField(
	"textsimple",
	"blog_slider_date_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_slider_date_letter_spacing",
	$blog_slider_date_letter_spacing
);

$blog_slider_info_in_bottom_title = new BurstMikadoTitle(
	"blog_slider_info_in_bottom_title",
	esc_html__( "Post Info in Bottom", 'burst' )
);
$panel31->addChild(
	"blog_slider_info_in_bottom_title",
	$blog_slider_info_in_bottom_title
);

$group26 = new BurstMikadoGroup(
	esc_html__( "Title style", 'burst' ),
	esc_html__( "Blog Carousel title style", 'burst' )
);
$panel31->addChild(
	"group26",
	$group26
);

$row1 = new BurstMikadoRow();
$group26->addChild(
	"row1",
	$row1
);

$blog_slider_post_info_in_bottom_title_color = new BurstMikadoField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_title_color",
	"",
	esc_html__( "Title Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_title_color",
	$blog_slider_post_info_in_bottom_title_color
);

$blog_slider_post_info_in_bottom_title_hover_color = new BurstMikadoField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_title_hover_color",
	"",
	esc_html__( "Title Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_title_hover_color",
	$blog_slider_post_info_in_bottom_title_hover_color
);

$blog_slider_post_info_in_bottom_title_font_size = new BurstMikadoField(
	"textsimple",
	"blog_slider_post_info_in_bottom_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_title_font_size",
	$blog_slider_post_info_in_bottom_title_font_size
);

$blog_slider_post_info_in_bottom_title_line_height = new BurstMikadoField(
	"textsimple",
	"blog_slider_post_info_in_bottom_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_title_line_height",
	$blog_slider_post_info_in_bottom_title_line_height
);

$row2 = new BurstMikadoRow();
$group26->addChild(
	"row2",
	$row2
);

$blog_slider_post_info_in_bottom_title_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_title_text_transform",
	$blog_slider_post_info_in_bottom_title_text_transform
);

$blog_slider_post_info_in_bottom_title_font_family = new BurstMikadoField(
	"fontsimple",
	"blog_slider_post_info_in_bottom_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_title_font_family",
	$blog_slider_post_info_in_bottom_title_font_family
);

$blog_slider_post_info_in_bottom_title_font_style = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_title_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_title_font_style",
	$blog_slider_post_info_in_bottom_title_font_style
);

$blog_slider_post_info_in_bottom_title_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_title_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_title_font_weight",
	$blog_slider_post_info_in_bottom_title_font_weight
);

$row3 = new BurstMikadoRow();
$group26->addChild(
	"row3",
	$row3
);

$blog_slider_post_info_in_bottom_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"blog_slider_post_info_in_bottom_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blog_slider_post_info_in_bottom_title_letter_spacing",
	$blog_slider_post_info_in_bottom_title_letter_spacing
);

$group27 = new BurstMikadoGroup(
	esc_html__( "Post Info style", 'burst' ),
	esc_html__( "Blog Carousel post info style", 'burst' )
);
$panel31->addChild(
	"group27",
	$group27
);

$row1 = new BurstMikadoRow();
$group27->addChild(
	"row1",
	$row1
);

$blog_slider_post_info_in_bottom_post_info_color = new BurstMikadoField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_post_info_color",
	"",
	esc_html__( "Text Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_post_info_color",
	$blog_slider_post_info_in_bottom_post_info_color
);

$blog_slider_post_info_in_bottom_post_info_link_color = new BurstMikadoField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_post_info_link_color",
	"",
	esc_html__( "Link Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_post_info_link_color",
	$blog_slider_post_info_in_bottom_post_info_link_color
);

$blog_slider_post_info_in_bottom_post_info_link_hover_color = new BurstMikadoField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_post_info_link_hover_color",
	$blog_slider_post_info_in_bottom_post_info_link_hover_color
);

$blog_slider_post_info_in_bottom_post_info_font_size = new BurstMikadoField(
	"textsimple",
	"blog_slider_post_info_in_bottom_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_post_info_font_size",
	$blog_slider_post_info_in_bottom_post_info_font_size
);

$row2 = new BurstMikadoRow();
$group27->addChild(
	"row2",
	$row2
);

$blog_slider_post_info_in_bottom_post_info_line_height = new BurstMikadoField(
	"textsimple",
	"blog_slider_post_info_in_bottom_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_post_info_line_height",
	$blog_slider_post_info_in_bottom_post_info_line_height
);

$blog_slider_post_info_in_bottom_post_info_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_post_info_text_transform",
	$blog_slider_post_info_in_bottom_post_info_text_transform
);

$blog_slider_post_info_in_bottom_post_info_font_family = new BurstMikadoField(
	"fontsimple",
	"blog_slider_post_info_in_bottom_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_post_info_font_family",
	$blog_slider_post_info_in_bottom_post_info_font_family
);

$blog_slider_post_info_in_bottom_post_info_font_style = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_post_info_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_post_info_font_style",
	$blog_slider_post_info_in_bottom_post_info_font_style
);

$row3 = new BurstMikadoRow();
$group27->addChild(
	"row3",
	$row3
);

$blog_slider_post_info_in_bottom_post_info_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row3->addChild(
	"blog_slider_post_info_in_bottom_post_info_font_weight",
	$blog_slider_post_info_in_bottom_post_info_font_weight
);

$blog_slider_post_info_in_bottom_post_info_letter_spacing = new BurstMikadoField(
	"textsimple",
	"blog_slider_post_info_in_bottom_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blog_slider_post_info_in_bottom_post_info_letter_spacing",
	$blog_slider_post_info_in_bottom_post_info_letter_spacing
);

$group32 = new BurstMikadoGroup(
	esc_html__( "Date Day Style", 'burst' ),
	esc_html__( "Define style for date day for Post Info in Bottom type", 'burst' )
);
$panel31->addChild(
	"group32",
	$group32
);

$row1 = new BurstMikadoRow();
$group32->addChild(
	"row1",
	$row1
);

$blog_slider_post_info_in_bottom_day_color = new BurstMikadoField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_day_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_day_color",
	$blog_slider_post_info_in_bottom_day_color
);

$blog_slider_post_info_in_bottom_day_font_size = new BurstMikadoField(
	"textsimple",
	"blog_slider_post_info_in_bottom_day_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_day_font_size",
	$blog_slider_post_info_in_bottom_day_font_size
);

$blog_slider_post_info_in_bottom_day_line_height = new BurstMikadoField(
	"textsimple",
	"blog_slider_post_info_in_bottom_day_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_day_line_height",
	$blog_slider_post_info_in_bottom_day_line_height
);

$blog_slider_post_info_in_bottom_day_font_family = new BurstMikadoField(
	"fontsimple",
	"blog_slider_post_info_in_bottom_day_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_day_font_family",
	$blog_slider_post_info_in_bottom_day_font_family
);

$row2 = new BurstMikadoRow();
$group32->addChild(
	"row2",
	$row2
);

$blog_slider_post_info_in_bottom_day_font_style = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_day_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_day_font_style",
	$blog_slider_post_info_in_bottom_day_font_style
);

$blog_slider_post_info_in_bottom_day_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_day_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_day_font_weight",
	$blog_slider_post_info_in_bottom_day_font_weight
);

$blog_slider_post_info_in_bottom_day_letter_spacing = new BurstMikadoField(
	"textsimple",
	"blog_slider_post_info_in_bottom_day_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_day_letter_spacing",
	$blog_slider_post_info_in_bottom_day_letter_spacing
);

/*** Blog Slider ***/

$panel32 = new BurstMikadoPanel(
	esc_html__( "Blog Slider", 'burst' ),
	"blog_slider_simple_simple"
);
$blogPage->addChild(
	"panel32",
	$panel32
);

$blog_slider_simple_simple_box = new BurstMikadoTitle(
	"blog_slider_simple_simple_box",
	esc_html__( "Box Style", 'burst' )
);
$panel32->addChild(
	"blog_slider_simple_simple_box",
	$blog_slider_simple_simple_box
);

$blog_slider_simple_box_back_color = new BurstMikadoField(
	"color",
	"blog_slider_simple_box_back_color",
	"",
	esc_html__( "Background Color", 'burst' ),
	esc_html__( "Choose background color", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel32->addChild(
	"blog_slider_simple_box_back_color",
	$blog_slider_simple_box_back_color
);

$blog_slider_simple_box_opacity = new BurstMikadoField(
	"text",
	"blog_slider_simple_box_opacity",
	"",
	esc_html__( "Background Opacity", 'burst' ),
	esc_html__( "Choose a transparency for the shader background color (0 = fully transparent, 1 = opaque)", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel32->addChild(
	"blog_slider_simple_box_opacity",
	$blog_slider_simple_box_opacity
);

$blog_slider_simple_box_padding = new BurstMikadoField(
	"text",
	"blog_slider_simple_box_padding",
	"",
	esc_html__( "Box Padding", 'burst' ),
	esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px or 5% 5% 5% 5%", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel32->addChild(
	"blog_slider_simple_box_padding",
	$blog_slider_simple_box_padding
);

$group_box_border = new BurstMikadoGroup(
	esc_html__( "Box Border Style", 'burst' ),
	esc_html__( "Define style for box border", 'burst' )
);
$panel32->addChild(
	"group_box_border",
	$group_box_border
);

$row1 = new BurstMikadoRow();
$group_box_border->addChild(
	"row1",
	$row1
);

$blog_slider_simple_box_border_color = new BurstMikadoField(
	"colorsimple",
	"blog_slider_simple_box_border_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "Choose border color", 'burst' )
);
$row1->addChild(
	"blog_slider_simple_box_border_color",
	$blog_slider_simple_box_border_color
);

$blog_slider_simple_box_border_width = new BurstMikadoField(
	"textsimple",
	"blog_slider_simple_box_border_width",
	"",
	esc_html__( "Width", 'burst' ),
	esc_html__( "Choose border width", 'burst' )
);
$row1->addChild(
	"blog_slider_simple_box_border_width",
	$blog_slider_simple_box_border_width
);

$blog_slider_simple_simple_spacing = new BurstMikadoTitle(
	"blog_slider_simple_simple_spacing",
	esc_html__( "Blog slider spacing", 'burst' )
);
$panel32->addChild(
	"blog_slider_simple_simple_spacing",
	$blog_slider_simple_simple_spacing
);

$blog_slider_simple_info_margin_top = new BurstMikadoField(
	"text",
	"blog_slider_simple_info_margin_top",
	"",
	esc_html__( "Post Info Margin Top (px)", 'burst' ),
	esc_html__( "Define post info margin top", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel32->addChild(
	"blog_slider_simple_info_margin_top",
	$blog_slider_simple_info_margin_top
);

$blog_slider_simple_read_more_margin_top = new BurstMikadoField(
	"text",
	"blog_slider_simple_read_more_margin_top",
	"",
	esc_html__( "Read More Margin Top (px)", 'burst' ),
	esc_html__( "Define read more margin top", 'burst' ),
	array(),
	array( "col_width" => 3 )
);
$panel32->addChild(
	"blog_slider_simple_read_more_margin_top",
	$blog_slider_simple_read_more_margin_top
);

$blog_slider_simple_simple_text = new BurstMikadoTitle(
	"blog_slider_simple_simple_text",
	esc_html__( "Post Text Style", 'burst' )
);
$panel32->addChild(
	"blog_slider_simple_simple_text",
	$blog_slider_simple_simple_text
);

$group_title = new BurstMikadoGroup(
	esc_html__( "Title style", 'burst' ),
	esc_html__( "Blog slider title style", 'burst' )
);
$panel32->addChild(
	"group_title",
	$group_title
);

$row1 = new BurstMikadoRow();
$group_title->addChild(
	"row1",
	$row1
);

$blog_slider_simple_title_color = new BurstMikadoField(
	"colorsimple",
	"blog_slider_simple_title_color",
	"",
	esc_html__( "Title Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_simple_title_color",
	$blog_slider_simple_title_color
);

$blog_slider_simple_title_hover_color = new BurstMikadoField(
	"colorsimple",
	"blog_slider_simple_title_hover_color",
	"",
	esc_html__( "Title Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_simple_title_hover_color",
	$blog_slider_simple_title_hover_color
);

$blog_slider_simple_title_font_size = new BurstMikadoField(
	"textsimple",
	"blog_slider_simple_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_simple_title_font_size",
	$blog_slider_simple_title_font_size
);

$blog_slider_simple_title_line_height = new BurstMikadoField(
	"textsimple",
	"blog_slider_simple_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_simple_title_line_height",
	$blog_slider_simple_title_line_height
);

$row2 = new BurstMikadoRow();
$group_title->addChild(
	"row2",
	$row2
);

$blog_slider_simple_title_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_simple_title_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"blog_slider_simple_title_text_transform",
	$blog_slider_simple_title_text_transform
);

$blog_slider_simple_title_font_family = new BurstMikadoField(
	"fontsimple",
	"blog_slider_simple_title_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_slider_simple_title_font_family",
	$blog_slider_simple_title_font_family
);

$blog_slider_simple_title_font_style = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_simple_title_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_slider_simple_title_font_style",
	$blog_slider_simple_title_font_style
);

$blog_slider_simple_title_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_simple_title_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_slider_simple_title_font_weight",
	$blog_slider_simple_title_font_weight
);

$row3 = new BurstMikadoRow();
$group_title->addChild(
	"row3",
	$row3
);

$blog_slider_simple_title_letter_spacing = new BurstMikadoField(
	"textsimple",
	"blog_slider_simple_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blog_slider_simple_title_letter_spacing",
	$blog_slider_simple_title_letter_spacing
);

$group_post_info = new BurstMikadoGroup(
	esc_html__( "Post Info Style", 'burst' ),
	esc_html__( "Blog slider post info style", 'burst' )
);
$panel32->addChild(
	"group_post_info",
	$group_post_info
);

$row1 = new BurstMikadoRow();
$group_post_info->addChild(
	"row1",
	$row1
);

$blog_slider_simple_info_color = new BurstMikadoField(
	"colorsimple",
	"blog_slider_simple_info_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_simple_info_color",
	$blog_slider_simple_info_color
);

$blog_slider_simple_info_link_color = new BurstMikadoField(
	"colorsimple",
	"blog_slider_simple_info_link_color",
	"",
	esc_html__( "Link Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_simple_info_link_color",
	$blog_slider_simple_info_link_color
);

$blog_slider_simple_info_hover_color = new BurstMikadoField(
	"colorsimple",
	"blog_slider_simple_info_hover_color",
	"",
	esc_html__( "Link Hover Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_simple_info_hover_color",
	$blog_slider_simple_info_hover_color
);

$blog_slider_simple_info_font_size = new BurstMikadoField(
	"textsimple",
	"blog_slider_simple_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_simple_info_font_size",
	$blog_slider_simple_info_font_size
);

$row2 = new BurstMikadoRow();
$group_post_info->addChild(
	"row2",
	$row2
);

$blog_slider_simple_info_line_height = new BurstMikadoField(
	"textsimple",
	"blog_slider_simple_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_slider_simple_info_line_height",
	$blog_slider_simple_info_line_height
);

$blog_slider_simple_info_text_transform = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_simple_info_text_transform",
	"",
	esc_html__( "Text Transform", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_texttransform()
);
$row2->addChild(
	"blog_slider_simple_info_text_transform",
	$blog_slider_simple_info_text_transform
);

$blog_slider_simple_info_font_family = new BurstMikadoField(
	"fontsimple",
	"blog_slider_simple_info_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_slider_simple_info_font_family",
	$blog_slider_simple_info_font_family
);

$blog_slider_simple_info_font_style = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_simple_info_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_slider_simple_info_font_style",
	$blog_slider_simple_info_font_style
);

$row3 = new BurstMikadoRow();
$group_post_info->addChild(
	"row3",
	$row3
);

$blog_slider_simple_info_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_simple_info_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row3->addChild(
	"blog_slider_simple_info_font_weight",
	$blog_slider_simple_info_font_weight
);

$blog_slider_simple_info_letter_spacing = new BurstMikadoField(
	"textsimple",
	"blog_slider_simple_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row3->addChild(
	"blog_slider_simple_info_letter_spacing",
	$blog_slider_simple_info_letter_spacing
);

$group_day = new BurstMikadoGroup(
	esc_html__( "Date Day Style", 'burst' ),
	esc_html__( "Define style for date day for Info in Bottom type", 'burst' )
);
$panel32->addChild(
	"group_day",
	$group_day
);

$row1 = new BurstMikadoRow();
$group_day->addChild(
	"row1",
	$row1
);

$blog_slider_simple_day_color = new BurstMikadoField(
	"colorsimple",
	"blog_slider_simple_day_color",
	"",
	esc_html__( "Color", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_simple_day_color",
	$blog_slider_simple_day_color
);

$blog_slider_simple_day_font_size = new BurstMikadoField(
	"textsimple",
	"blog_slider_simple_day_font_size",
	"",
	esc_html__( "Font Size (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_simple_day_font_size",
	$blog_slider_simple_day_font_size
);

$blog_slider_simple_day_line_height = new BurstMikadoField(
	"textsimple",
	"blog_slider_simple_day_line_height",
	"",
	esc_html__( "Line Height (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_simple_day_line_height",
	$blog_slider_simple_day_line_height
);

$blog_slider_simple_day_font_family = new BurstMikadoField(
	"fontsimple",
	"blog_slider_simple_day_font_family",
	"-1",
	esc_html__( "Font Family", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row1->addChild(
	"blog_slider_simple_day_font_family",
	$blog_slider_simple_day_font_family
);

$row2 = new BurstMikadoRow();
$group_day->addChild(
	"row2",
	$row2
);

$blog_slider_simple_day_font_style = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_simple_day_font_style",
	"",
	esc_html__( "Font Style", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontstyle()
);
$row2->addChild(
	"blog_slider_simple_day_font_style",
	$blog_slider_simple_day_font_style
);

$blog_slider_simple_day_font_weight = new BurstMikadoField(
	"selectblanksimple",
	"blog_slider_simple_day_font_weight",
	"",
	esc_html__( "Font Weight", 'burst' ),
	esc_html__( "This is some description", 'burst' ),
	burst_mikado_return_options_fontweight()
);
$row2->addChild(
	"blog_slider_simple_day_font_weight",
	$blog_slider_simple_day_font_weight
);

$blog_slider_simple_day_letter_spacing = new BurstMikadoField(
	"textsimple",
	"blog_slider_simple_day_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'burst' ),
	esc_html__( "This is some description", 'burst' )
);
$row2->addChild(
	"blog_slider_simple_day_letter_spacing",
	$blog_slider_simple_day_letter_spacing
);