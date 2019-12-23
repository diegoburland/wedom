<?php

$default_attrs = array(
	'image_position' => '',
	'slide_image' => '',
);

$default_attrs = array_merge($default_attrs);

extract(shortcode_atts($default_attrs, $atts));

if (is_numeric($slide_image)) {
    $slide_image_src = wp_get_attachment_url($slide_image);
} else {
    $slide_image_src = $slide_image;
}

$html  = '<li class="icon_slide">';
$html .= '<div class="icon_slide_container_inner">';
if($image_position == 'left'){
	$html .= '<div class="slide_image">';
	$html .= "<img src='".$slide_image_src."' alt='" . esc_attr__( 'img', 'burst' ) . "'/>";
	$html .= '</div>';
	$html .= '<div class="slide_content">';
	$html .= mikado_core_remove_wpautop($content,true);
	$html .= '</div>';
}else{
	$html .= '<div class="slide_content">';
	$html .= mikado_core_remove_wpautop($content,true);
	$html .= '</div>';
	$html .= '<div class="slide_image">';
	$html .= "<img src='".$slide_image_src."' alt='" . esc_attr__( 'img', 'burst' ) . "'/>";
	$html .= '</div>';
}
$html .= '</div>';
$html .= '</li>';

echo burst_mikado_get_module_part($html);