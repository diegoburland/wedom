<?php

//Testimonials

$mkdTestimonials = new BurstMikadoMetaBox(
	"testimonials",
	esc_html__( "Testimonials", 'burst' )
);
burst_mikado_return_framework_variable()->mkdMetaBoxes->addMetaBox(
	"testimonials",
	$mkdTestimonials
);

$mkd_show_testimonial_title_text = new BurstMikadoMetaField(
	"yesno",
	"mkd_show_testimonial_title_text",
	"no",
	esc_html__( "Hide Testimonial Title Text", 'burst' ),
	esc_html__( "Enable this option to hide the title text", 'burst' ),
	array(),
	array(
		"dependence" => true,
		"dependence_hide_on_yes" => "#mkdf_mkd_testimonial_title_container",
		"dependence_show_on_yes" => ""
	)
);
$mkdTestimonials->addChild(
	"mkd_show_testimonial_title_text",
	$mkd_show_testimonial_title_text
);

$mkd_testimonial_title_container = new BurstMikadoContainer(
	"mkd_testimonial_title_container",
	"mkd_show_testimonial_title_text",
	"yes"
);
$mkdTestimonials->addChild(
	"mkd_testimonial_title_container",
	$mkd_testimonial_title_container
);

$mkd_testimonial_title = new BurstMikadoMetaField(
	"text",
	"mkd_testimonial_title",
	"",
	esc_html__( "Title", 'burst' ),
	esc_html__( "Enter testimonial title", 'burst' )
);
$mkd_testimonial_title_container->addChild(
	"mkd_testimonial_title",
	$mkd_testimonial_title
);

$mkd_testimonial_author = new BurstMikadoMetaField(
	"text",
	"mkd_testimonial-author",
	"",
	esc_html__( "Author", 'burst' ),
	esc_html__( "Enter author name", 'burst' )
);
$mkdTestimonials->addChild(
	"mkd_testimonial-author",
	$mkd_testimonial_author
);

$mkd_testimonial_author_position = new BurstMikadoMetaField(
	"text",
	"mkd_testimonial_author_position",
	"",
	esc_html__( "Job Position", 'burst' ),
	esc_html__( "Enter job position name", 'burst' )
);
$mkdTestimonials->addChild(
	"mkd_testimonial_author_position",
	$mkd_testimonial_author_position
);

$mkd_testimonial_text = new BurstMikadoMetaField(
	"textarea",
	"mkd_testimonial-text",
	"",
	esc_html__( "Text", 'burst' ),
	esc_html__( "Enter testimonial text", 'burst' )
);
$mkdTestimonials->addChild(
	"mkd_testimonial-text",
	$mkd_testimonial_text
);