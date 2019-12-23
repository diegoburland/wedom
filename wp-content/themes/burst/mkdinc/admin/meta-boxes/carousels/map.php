<?php

//Carousels

$mkdCarousels = new BurstMikadoMetaBox(
	"carousels",
	esc_html__( "Carousels", 'burst' )
);
burst_mikado_return_framework_variable()->mkdMetaBoxes->addMetaBox(
	"carousels",
	$mkdCarousels
);

$mkd_carousel_image = new BurstMikadoMetaField(
	"image",
	"mkd_carousel-image",
	"",
	esc_html__( "Carousel Image", 'burst' ),
	esc_html__( "Choose carousel image (min width needs to be 215px)", 'burst' )
);
$mkdCarousels->addChild(
	"mkd_carousel-image",
	$mkd_carousel_image
);

$mkd_carousel_hover_image = new BurstMikadoMetaField(
	"image",
	"mkd_carousel-hover-image",
	"",
	esc_html__( "Carousel Hover Image", 'burst' ),
	esc_html__( "Choose carousel hover image (min width needs to be 215px)", 'burst' )
);
$mkdCarousels->addChild(
	"mkd_carousel-hover-image",
	$mkd_carousel_hover_image
);

$mkd_carousel_item_text = new BurstMikadoMetaField(
	"textarea",
	"mkd_carousel-item-text",
	"",
	esc_html__( "Text", 'burst' ),
	esc_html__( "Enter carousel text", 'burst' )
);
$mkdCarousels->addChild(
	"mkd_carousel-item-text",
	$mkd_carousel_item_text
);

$mkd_carousel_item_link = new BurstMikadoMetaField(
	"text",
	"mkd_carousel-item-link",
	"",
	esc_html__( "Link", 'burst' ),
	esc_html__( "Enter the URL to which you want the image to link to (e.g. http://www.example.com)", 'burst' )
);
$mkdCarousels->addChild(
	"mkd_carousel-item-link",
	$mkd_carousel_item_link
);

$mkd_carousel_item_target = new BurstMikadoMetaField(
	"selectblank",
	"mkd_carousel-item-target",
	"",
	esc_html__( "Target", 'burst' ),
	esc_html__( "Specify where to open the linked document", 'burst' ),
	array(
		"_self" => esc_html__( "Self", 'burst' ),
		"_blank" => esc_html__( "Blank", 'burst' )
	)
);
$mkdCarousels->addChild(
	"mkd_carousel-item-target",
	$mkd_carousel_item_target
);