<?php

$burst_mikado_IconCollections = burst_mikado_return_icon_collections();
//Masonry Gallery Metaboxes

//General settings for text, buttons, links
$mkdMasonryGalleryItemGeneral = new BurstMikadoMetaBox(
	"masonry_gallery",
	esc_html__( "Masonry Gallery General", 'burst' )
);
burst_mikado_return_framework_variable()->mkdMetaBoxes->addMetaBox(
	"masonry_gallery_item_general",
	$mkdMasonryGalleryItemGeneral
);

$mkd_masonry_gallery_item_text = new BurstMikadoMetaField(
	'text',
	'mkd_masonry_gallery_item_text',
	'',
	esc_html__( 'Text', 'burst' ),
	''
);
$mkdMasonryGalleryItemGeneral->addChild(
	'mkd_masonry_gallery_item_text',
	$mkd_masonry_gallery_item_text
);

$mkd_masonry_gallery_item_link = new BurstMikadoMetaField(
	'text',
	'mkd_masonry_gallery_item_link',
	'',
	esc_html__( 'Link', 'burst' ),
	''
);
$mkdMasonryGalleryItemGeneral->addChild(
	'mkd_masonry_gallery_item_link',
	$mkd_masonry_gallery_item_link
);

$mkd_masonry_gallery_item_link_target = new BurstMikadoMetaField(
	'select',
	'mkd_masonry_gallery_item_link_target',
	'_self',
	esc_html__( 'Link target', 'burst' ),
	'',
	array(
		'_self' => esc_html__( 'Self', 'burst' ),
		'_blank' => esc_html__( 'Blank', 'burst' )
	)
);
$mkdMasonryGalleryItemGeneral->addChild(
	'mkd_masonry_gallery_item_link_target',
	$mkd_masonry_gallery_item_link_target
);

$mkd_masonry_item_parallax = new BurstMikadoMetaField(
	"select",
	"mkd_masonry_item_parallax",
	"no",
	esc_html__( "Set Item in Parallax", 'burst' ),
	"",
	array(
		"no" => esc_html__( "No", 'burst' ),
		"yes" => esc_html__( "Yes", 'burst' )
	)
);
$mkdMasonryGalleryItemGeneral->addChild(
	"mkd_masonry_item_parallax",
	$mkd_masonry_item_parallax
);

//Masonry Gallery Style - Size, Type
$section_style_title = new BurstMikadoTitle(
	'section_style_title',
	esc_html__( 'Masonry Gallery Item Style', 'burst' )
);
$mkdMasonryGalleryItemGeneral->addChild(
	'section_style_title',
	$section_style_title
);

$mkd_masonry_gallery_item_size = new BurstMikadoMetaField(
	'select',
	'mkd_masonry_gallery_item_size',
	'square_small',
	esc_html__( 'Size', 'burst' ),
	'size',
	array(
		'square_small' => esc_html__( 'Square Small', 'burst' ),
		'square_big' => esc_html__( 'Square Big', 'burst' ),
		'rectangle_portrait' => esc_html__( 'Rectangle Portrait', 'burst' ),
		'rectangle_landscape' => esc_html__( 'Rectangle Landscape', 'burst' )
	)
);
$mkdMasonryGalleryItemGeneral->addChild(
	'mkd_masonry_gallery_item_size',
	$mkd_masonry_gallery_item_size
);

$mkd_masonry_gallery_item_type = new BurstMikadoMetaField(
	'select',
	'mkd_masonry_gallery_item_type',
	'with_button',
	esc_html__( 'Type', 'burst' ),
	'type',
	array(
		'with_button' => esc_html__( 'With Button', 'burst' ),
		'with_icon' => esc_html__( 'With Icon', 'burst' ),
		'standard' => esc_html__( 'Standard', 'burst' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			'with_button' => '#mkdf_mkd_masonry_gallery_item_icon_type_container',
			'with_icon'   => '#mkdf_mkd_masonry_gallery_item_button_type_container',
			'standard'    => '#mkdf_mkd_masonry_gallery_item_button_type_container, #mkdf_mkd_masonry_gallery_item_icon_type_container'
		),
		'show'       => array(
			'with_button' => '#mkdf_mkd_masonry_gallery_item_button_type_container',
			'with_icon'   => '#mkdf_mkd_masonry_gallery_item_icon_type_container',
			'standard'    => ''
		)
	)
);
$mkdMasonryGalleryItemGeneral->addChild(
	'mkd_masonry_gallery_item_type',
	$mkd_masonry_gallery_item_type
);

$mkd_masonry_gallery_item_button_type_container = new BurstMikadoContainer(
	'mkd_masonry_gallery_item_button_type_container',
	'mkd_masonry_gallery_item_type',
	'',
	array( 'standard', 'with_icon' )
);
$mkdMasonryGalleryItemGeneral->addChild(
	'mkd_masonry_gallery_item_button_type_container',
	$mkd_masonry_gallery_item_button_type_container
);

$mkd_masonry_gallery_button_label = new BurstMikadoMetaField(
	'text',
	'mkd_masonry_gallery_button_label',
	'',
	esc_html__( 'Button Label', 'burst' ),
	''
);
$mkd_masonry_gallery_item_button_type_container->addChild(
	'mkd_masonry_gallery_button_label',
	$mkd_masonry_gallery_button_label
);

$mkd_masonry_gallery_item_icon_type_container = new BurstMikadoContainer(
	'mkd_masonry_gallery_item_icon_type_container',
	'mkd_masonry_gallery_item_type',
	'',
	array( 'standard', 'with_button' )
);
$mkdMasonryGalleryItemGeneral->addChild(
	'mkd_masonry_gallery_item_icon_type_container',
	$mkd_masonry_gallery_item_icon_type_container
);
//Icon Packages
$mkd_masonry_gallery_item_icon_hide_array = array();
$mkd_masonry_gallery_item_icon_show_array = array();

if ( is_array( $burst_mikado_IconCollections->iconCollections ) && count( $burst_mikado_IconCollections->iconCollections ) ) {
	
	$mkd_masonry_gallery_item_icon_collection_params = $burst_mikado_IconCollections->getIconCollectionsParams();
	
	foreach ( $burst_mikado_IconCollections->iconCollections as $dep_collection_key => $dep_collection_object ) {
		
		$mkd_masonry_gallery_item_icon_hide_array[ $dep_collection_key ] = '';
		
		$mkd_masonry_gallery_item_icon_show_array[ $dep_collection_key ] = '#mkdf_mkd_masonry_gallery_item_with_icon_' . $dep_collection_object->param . '_container';
		
		foreach ( $mkd_masonry_gallery_item_icon_collection_params as $mkd_masonry_gallery_item_icon_collection_param ) {
			
			if ( $mkd_masonry_gallery_item_icon_collection_param !== $dep_collection_object->param ) {
				$mkd_masonry_gallery_item_icon_hide_array[ $dep_collection_key ] .= '#mkdf_mkd_masonry_gallery_item_with_icon_' . $mkd_masonry_gallery_item_icon_collection_param . '_container,';
			}
			
		}
		
		$mkd_masonry_gallery_item_icon_hide_array[ $dep_collection_key ] = rtrim(
			$mkd_masonry_gallery_item_icon_hide_array[ $dep_collection_key ],
			','
		);
	}
	
}

$mkd_masonry_gallery_item_with_icon_icon_pack = new BurstMikadoMetaField(
	'select',
	'mkd_masonry_gallery_item_with_icon_icon_pack',
	'font_awesome',
	esc_html__( 'Icon Package', 'burst' ),
	esc_html__( 'Choose Icon Package', 'burst' ),
	$burst_mikado_IconCollections->getIconCollections(),
	array(
		'dependence' => true,
		'hide'       => $mkd_masonry_gallery_item_icon_hide_array,
		'show'       => $mkd_masonry_gallery_item_icon_show_array
	)
);
$mkd_masonry_gallery_item_icon_type_container->addChild(
	'mkd_masonry_gallery_item_with_icon_icon_pack',
	$mkd_masonry_gallery_item_with_icon_icon_pack
);

if ( is_array( $burst_mikado_IconCollections->iconCollections ) && count( $burst_mikado_IconCollections->iconCollections ) ) {
	
	foreach ( $burst_mikado_IconCollections->iconCollections as $collection_key => $collection_object ) {
		$icons_array = $collection_object->getIconsArray();
		
		$icon_collections_keys = $burst_mikado_IconCollections->getIconCollectionsKeys();
		
		unset(
			$icon_collections_keys[ array_search(
				$collection_key,
				$icon_collections_keys
			) ]
		);
		
		$mkd_masonry_gallery_item_icon_hide_values = $icon_collections_keys;
		
		$mkd_masonry_gallery_item_icon_pack_container = new BurstMikadoContainer(
			'mkd_masonry_gallery_item_with_icon_' . $collection_object->param . '_container',
			'mkd_masonry_gallery_item_with_icon_icon_pack',
			'',
			$mkd_masonry_gallery_item_icon_hide_values
		);
		$mkd_masonry_gallery_item_icon_type_container->addChild(
			'mkd_masonry_gallery_item_with_icon_' . $collection_object->param . '_container',
			$mkd_masonry_gallery_item_icon_pack_container
		);
		
		$mkd_masonry_gallery_item_with_icon_icon_type = new BurstMikadoMetaField(
			'select',
			'mkd_masonry_gallery_item_with_icon_' . $collection_object->param,
			'',
			$collection_object->title,
			esc_html__( 'Icon Package', 'burst' ),
			$icons_array
		);
		$mkd_masonry_gallery_item_icon_pack_container->addChild(
			'mkd_masonry_gallery_item_with_icon_' . $collection_object->param,
			$mkd_masonry_gallery_item_with_icon_icon_type
		);
		
	}
	
}