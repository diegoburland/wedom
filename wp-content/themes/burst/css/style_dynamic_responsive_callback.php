<?php
$root = dirname(dirname(dirname(dirname(dirname(__FILE__)))));
if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
//    require_once( $root.'/wp-config.php' );
} else {
	$root = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__))))));
	if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
//    require_once( $root.'/wp-config.php' );
	}
}
header("Content-type: text/css; charset=utf-8");
?>

@media only screen and (max-width: 1024px){
	
	 <?php if (isset($burst_mikado_options['page_subtitle_fontsize']) && ($burst_mikado_options['page_subtitle_fontsize']) < 28 && ($burst_mikado_options['page_subtitle_fontsize']) !== '') { ?>
		.subtitle{
			font-size: <?php echo esc_attr($burst_mikado_options['page_subtitle_fontsize']) *0.8;  ?>px;
		}
	 <?php }?>
		
	<?php if(isset($burst_mikado_options['h1_fontsize']) && ($burst_mikado_options['h1_fontsize'])>80) { ?>
		.content h1{
			font-size:<?php echo esc_attr($burst_mikado_options['h1_fontsize'])*0.8; ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['page_title_fontsize']) && ($burst_mikado_options['page_title_fontsize'])>80) { ?>
		.title.title_size_small h1,
		.title.title_size_small h1.title_like_separator .vc_text_separator.full .separator_content{
			font-size:<?php echo esc_attr($burst_mikado_options['page_title_fontsize'])*0.8; ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['page_title_medium_fontsize']) && ($burst_mikado_options['page_title_medium_fontsize'])>80) { ?>
		.title.title_size_medium h1,
		.title.title_size_medium h1.title_like_separator .vc_text_separator.full .separator_content{
			font-size:<?php echo esc_attr($burst_mikado_options['page_title_medium_fontsize'])*0.8; ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['page_title_large_fontsize']) && ($burst_mikado_options['page_title_large_fontsize'])>80) { ?>
		.title.title_size_large h1,
		.title.title_size_large h1.title_like_separator .vc_text_separator.full .separator_content{
			font-size:<?php echo esc_attr($burst_mikado_options['page_title_large_fontsize'])*0.8; ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h2_fontsize']) && ($burst_mikado_options['h2_fontsize'])>70) { ?>
		.content h2{
			font-size:<?php echo esc_attr($burst_mikado_options['h2_fontsize'])*0.8; ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h2_lineheight']) && ($burst_mikado_options['h2_lineheight'])>70) { ?>
		.content h2{
			line-height: 1.3em;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h3_fontsize']) && ($burst_mikado_options['h3_fontsize'])>70) { ?>
		.content h3{
			font-size:<?php echo esc_attr($burst_mikado_options['h3_fontsize'])*0.8; ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h4_fontsize']) && ($burst_mikado_options['h4_fontsize'])>70) { ?>
		.content h4:not(.blockquote_text){
			font-size:<?php echo esc_attr($burst_mikado_options['h4_fontsize'])*0.8; ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h5_fontsize']) && ($burst_mikado_options['h5_fontsize'])>70) { ?>
		.content h5{
			font-size:<?php echo esc_attr($burst_mikado_options['h5_fontsize'])*0.8; ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h6_fontsize']) && ($burst_mikado_options['h6_fontsize'])>70) { ?>
		.content h6{
			font-size:<?php echo esc_attr($burst_mikado_options['h6_fontsize'])*0.8; ?>px;
		}
	<?php } ?>
}

@media only screen and (max-width: 1000px){
	
	
	<?php if (!empty($burst_mikado_options['header_top_background_color'])) { ?>
	.header_top {
		background-color: <?php echo esc_attr($burst_mikado_options['header_top_background_color']);  ?> !important;
	}
	<?php } ?>
	
	<?php if (!empty($burst_mikado_options['header_background_color'])) { ?>
	.header_bottom {
		background-color: <?php echo esc_attr($burst_mikado_options['header_background_color']);  ?>;
	}
	<?php } ?>
	<?php if (!empty($burst_mikado_options['mobile_background_color'])) { ?>
		.header_bottom,
		nav.mobile_menu{
				background-color: <?php echo esc_attr($burst_mikado_options['mobile_background_color']);  ?> !important;
		}
	<?php } ?>

	<?php if(isset($burst_mikado_options['portfolio_list_filter_height']) && $burst_mikado_options['portfolio_list_filter_height'] !== '') { ?>
		.filter_outer.filter_portfolio{
			line-height: 2em;
		}
	<?php } ?>
}

@media only screen and (min-width: 480px) and (max-width: 768px){

<?php if(isset($burst_mikado_options['overlapping_content']) && $burst_mikado_options['overlapping_content'] == 'yes' && isset($burst_mikado_options['overlapping_top_content_amount']) && $burst_mikado_options['overlapping_top_content_amount'] > 30){ ?>
    .overlapping_content .content .content_inner > .container .overlapping_content,
    .overlapping_content .content .content_inner > .full_width .full_width_inner{
    margin-top: -30px;
    }

    .overlapping_content .title .title_holder .container{
    padding-bottom: 30px;
    }

    .animate_overlapping_content .overlapping_content,
    .animate_overlapping_content .full_width {
    -webkit-transform: translateY(30px);
    transform: translateY(30px);
    }
<?php }	?>
}

@media only screen and (min-width: 600px) and (max-width: 768px){
	<?php if(isset($burst_mikado_options['h1_fontsize']) && $burst_mikado_options['h1_fontsize'] != '') {
		$title_font_size = $burst_mikado_options['h1_fontsize'];
		if (($burst_mikado_options['h1_fontsize'])>80) {
			$title_font_size *= 0.5;
		}
		elseif (($burst_mikado_options['h1_fontsize'])>65) {
		 	$title_font_size *= 0.6;
		}
		elseif (($burst_mikado_options['h1_fontsize'])>50) {
		 	$title_font_size *= 0.7;
		}
		elseif (($burst_mikado_options['h1_fontsize'])>35) {
		 	$title_font_size *= 0.8;
		} ?>
		.content h1{
			font-size:<?php echo esc_attr($title_font_size); ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['page_title_fontsize']) && ($burst_mikado_options['page_title_fontsize']) !== "") {
		$page_title_font_size = $burst_mikado_options['page_title_fontsize'];
		if (($burst_mikado_options['page_title_fontsize'])>80) {
			$page_title_font_size *= 0.5;
		}
		elseif (($burst_mikado_options['page_title_fontsize'])>65) {
		 	$page_title_font_size *= 0.6;
		}
		elseif (($burst_mikado_options['page_title_fontsize'])>50) {
		 	$page_title_font_size *= 0.7;
		}
		elseif (($burst_mikado_options['page_title_fontsize'])>35) {
		 	$page_title_font_size *= 0.8;
		} ?>
		.title.title_size_small h1,
		.title.title_size_small h1.title_like_separator .vc_text_separator.full .separator_content{
			font-size:<?php echo esc_attr($page_title_font_size); ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['page_title_medium_fontsize']) && ($burst_mikado_options['page_title_medium_fontsize']) !== "") {
		$page_title_font_size = $burst_mikado_options['page_title_medium_fontsize'];
		if (($burst_mikado_options['page_title_medium_fontsize'])>80) {
			$page_title_font_size *= 0.5;
		}
		elseif (($burst_mikado_options['page_title_medium_fontsize'])>65) {
		 	$page_title_font_size *= 0.6;
		}
		elseif (($burst_mikado_options['page_title_medium_fontsize'])>50) {
		 	$page_title_font_size *= 0.7;
		}
		elseif (($burst_mikado_options['page_title_medium_fontsize'])>35) {
		 	$page_title_font_size *= 0.8;
		} ?>
		.title.title_size_medium h1,
		.title.title_size_medium h1.title_like_separator .vc_text_separator.full .separator_content{
			font-size:<?php echo esc_attr($page_title_font_size); ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['page_title_large_fontsize']) && ($burst_mikado_options['page_title_large_fontsize']) !== "") {
		$page_title_font_size = $burst_mikado_options['page_title_large_fontsize'];
		if (($burst_mikado_options['page_title_large_fontsize'])>80) {
			$page_title_font_size *= 0.5;
		}
		elseif (($burst_mikado_options['page_title_large_fontsize'])>65) {
		 	$page_title_font_size *= 0.6;
		}
		elseif (($burst_mikado_options['page_title_large_fontsize'])>50) {
		 	$page_title_font_size *= 0.7;
		}
		elseif (($burst_mikado_options['page_title_large_fontsize'])>35) {
		 	$page_title_font_size *= 0.8;
		} ?>
		.title.title_size_large h1,
		.title.title_size_large h1.title_like_separator .vc_text_separator.full .separator_content{
			font-size:<?php echo esc_attr($page_title_font_size); ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h2_fontsize']) && ($burst_mikado_options['h2_fontsize'])>35) { ?>
		.content h2{
			font-size:<?php echo esc_attr($burst_mikado_options['h2_fontsize'])*0.7; ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h2_lineheight']) && ($burst_mikado_options['h2_lineheight'])>45) { ?>
		.content h2{
			line-height: 1.3em;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h3_fontsize']) && ($burst_mikado_options['h3_fontsize'])>35) { ?>
		.content h3{
			font-size:<?php echo esc_attr($burst_mikado_options['h3_fontsize'])*0.7; ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h4_fontsize']) && ($burst_mikado_options['h4_fontsize'])>35) { ?>
		.content h4{
			font-size:<?php echo esc_attr($burst_mikado_options['h4_fontsize'])*0.7; ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h5_fontsize']) && ($burst_mikado_options['h5_fontsize'])>35) { ?>
		.content h5{
			font-size:<?php echo esc_attr($burst_mikado_options['h5_fontsize'])*0.7; ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h6_fontsize']) && ($burst_mikado_options['h6_fontsize'])>35) { ?>
		.content h6{
			font-size:<?php echo esc_attr($burst_mikado_options['h6_fontsize'])*0.7; ?>px;
		}
	<?php } ?>
	
	<?php if (isset($burst_mikado_options['page_subtitle_fontsize']) && ($burst_mikado_options['page_subtitle_fontsize']) < 28 && ($burst_mikado_options['page_subtitle_fontsize']) !== '') { ?>
		.subtitle{
			font-size: <?php echo esc_attr($burst_mikado_options['page_subtitle_fontsize']) *0.8;  ?>px;
		}
	 <?php } ?>
}

@media only screen and (min-width: 480px) and (max-width: 768px){
	<?php if (isset($burst_mikado_options['parallax_minheight']) && !empty($burst_mikado_options['parallax_minheight'])) { ?>
        section.parallax_section_holder{
		height: auto !important;
		min-height: <?php echo esc_attr($burst_mikado_options['parallax_minheight']); ?>px !important;
	}
	<?php } ?>
	
	<?php if (isset($burst_mikado_options['header_background_color_mobile']) &&  !empty($burst_mikado_options['header_background_color_mobile'])) { ?>
	header
	{
		 background-color: <?php echo esc_attr($burst_mikado_options['header_background_color_mobile']);  ?> !important;
		 background-image:none;
	}
	<?php } ?>
}

@media only screen and (max-width: 600px){
	<?php if(isset($burst_mikado_options['h1_fontsize']) && $burst_mikado_options['h1_fontsize'] !== '') {
		$title_font_size = $burst_mikado_options['h1_fontsize'];
		if (($burst_mikado_options['h1_fontsize'])>80) {
			$title_font_size *= 0.4;
		}
		elseif (($burst_mikado_options['h1_fontsize'])>65) {
		 	$title_font_size *= 0.5;
		}
		elseif (($burst_mikado_options['h1_fontsize'])>50) {
		 	$title_font_size *= 0.6;
		}
		elseif (($burst_mikado_options['h1_fontsize'])>35) {
		 	$title_font_size *= 0.7;
		} ?>
		.content h1{
			font-size:<?php echo esc_attr($title_font_size); ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['page_title_fontsize']) && ($burst_mikado_options['page_title_fontsize']) !== '') {
		$page_title_font_size = $burst_mikado_options['page_title_fontsize'];
		if (($burst_mikado_options['page_title_fontsize'])>80) {
			$page_title_font_size *= 0.4;
		}
		elseif (($burst_mikado_options['page_title_fontsize'])>65) {
		 	$page_title_font_size *= 0.5;
		}
		elseif (($burst_mikado_options['page_title_fontsize'])>50) {
		 	$page_title_font_size *= 0.6;
		}
		elseif (($burst_mikado_options['page_title_fontsize'])>30) {
		 	$page_title_font_size *= 0.7;
		} ?>
		.title.title_size_small h1,
		.title.title_size_small h1.title_like_separator .vc_text_separator.full .separator_content{
			font-size:<?php echo esc_attr($page_title_font_size); ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['page_title_medium_fontsize']) && ($burst_mikado_options['page_title_medium_fontsize']) !== "") {
		$page_title_font_size = $burst_mikado_options['page_title_medium_fontsize'];
		if (($burst_mikado_options['page_title_medium_fontsize'])>80) {
			$page_title_font_size *= 0.4;
		}
		elseif (($burst_mikado_options['page_title_medium_fontsize'])>65) {
		 	$page_title_font_size *= 0.5;
		}
		elseif (($burst_mikado_options['page_title_medium_fontsize'])>50) {
		 	$page_title_font_size *= 0.6;
		}
		elseif (($burst_mikado_options['page_title_medium_fontsize'])>30) {
		 	$page_title_font_size *= 0.7;
		} ?>
		.title.title_size_medium h1,
		.title.title_size_medium h1.title_like_separator .vc_text_separator.full .separator_content{
			font-size:<?php echo esc_attr($page_title_font_size); ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['page_title_large_fontsize']) && ($burst_mikado_options['page_title_large_fontsize']) !== "") {
		$page_title_font_size = $burst_mikado_options['page_title_large_fontsize'];
		if (($burst_mikado_options['page_title_large_fontsize'])>80) {
			$page_title_font_size *= 0.4;
		}
		elseif (($burst_mikado_options['page_title_large_fontsize'])>65) {
		 	$page_title_font_size *= 0.5;
		}
		elseif (($burst_mikado_options['page_title_large_fontsize'])>50) {
		 	$page_title_font_size *= 0.6;
		}
		elseif (($burst_mikado_options['page_title_large_fontsize'])>30) {
		 	$page_title_font_size *= 0.7;
		} ?>
		.title.title_size_large h1,
		.title.title_size_large h1.title_like_separator .vc_text_separator.full .separator_content{
			font-size:<?php echo esc_attr($page_title_font_size); ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h2_fontsize']) && ($burst_mikado_options['h2_fontsize'])>30) { ?>
			.content h2{
				font-size:<?php echo esc_attr($burst_mikado_options['h2_fontsize'])*0.5; ?>px;
			}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h2_lineheight']) && ($burst_mikado_options['h2_lineheight'])>40) { ?>
		.content h2{
			line-height: 1.3em;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h3_fontsize']) && ($burst_mikado_options['h3_fontsize'])>30) { ?>
		.content h3{
			font-size:<?php echo esc_attr($burst_mikado_options['h3_fontsize'])*0.5; ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h4_fontsize']) && ($burst_mikado_options['h4_fontsize'])>30) { ?>
		.content h4{
			font-size:<?php echo esc_attr($burst_mikado_options['h4_fontsize'])*0.5; ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h5_fontsize']) && ($burst_mikado_options['h5_fontsize'])>30) { ?>
		.content h5{
			font-size:<?php echo esc_attr($burst_mikado_options['h5_fontsize'])*0.5; ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h6_fontsize']) && ($burst_mikado_options['h6_fontsize'])>30) { ?>
		.content h6{
			font-size:<?php echo esc_attr($burst_mikado_options['h6_fontsize'])*0.5; ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['title_span_background_color']) && !empty($burst_mikado_options['title_span_background_color'])) { ?>
		.title h1 span{
			padding: 0 5px;
		}
	<?php } ?>

	<?php if(isset($burst_mikado_options['portfolio_list_filter_height']) && $burst_mikado_options['portfolio_list_filter_height'] !== '') { ?>
		.filter_outer.filter_portfolio{
			height:auto;
		}
	<?php } ?>
}

@media only screen and (max-width: 480px){

	<?php if(isset($burst_mikado_options['h1_fontsize']) && $burst_mikado_options['h1_fontsize'] !== '') {
		$title_font_size = $burst_mikado_options['h1_fontsize'];
		if (($burst_mikado_options['h1_fontsize'])>65) {
		 	$title_font_size *= 0.4;
		}
		elseif (($burst_mikado_options['h1_fontsize'])>50) {
		 	$title_font_size *= 0.5;
		}
		elseif (($burst_mikado_options['h1_fontsize'])>35) {
		 	$title_font_size *= 0.6;
		} ?>
		.content h1{
			font-size:<?php echo esc_attr($title_font_size); ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['page_title_fontsize']) && ($burst_mikado_options['page_title_fontsize']) !== '') {
		$page_title_font_size = $burst_mikado_options['page_title_fontsize'];
		if (($burst_mikado_options['page_title_fontsize'])>65) {
		 	$page_title_font_size *= 0.4;
		}
		elseif (($burst_mikado_options['page_title_fontsize'])>50) {
		 	$page_title_font_size *= 0.5;
		}
		elseif (($burst_mikado_options['page_title_fontsize'])>30) {
		 	$page_title_font_size *= 0.6;
		} ?>
		.title.title_size_small h1,
		.title.title_size_small h1.title_like_separator .vc_text_separator.full .separator_content{
			font-size:<?php echo esc_attr($page_title_font_size); ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['page_title_medium_fontsize']) && ($burst_mikado_options['page_title_medium_fontsize']) !== '') {
		$page_title_font_size = $burst_mikado_options['page_title_medium_fontsize'];
		if (($burst_mikado_options['page_title_medium_fontsize'])>65) {
		 	$page_title_font_size *= 0.4;
		}
		elseif (($burst_mikado_options['page_title_medium_fontsize'])>50) {
		 	$page_title_font_size *= 0.5;
		}
		elseif (($burst_mikado_options['page_title_medium_fontsize'])>30) {
		 	$page_title_font_size *= 0.6;
		} ?>
		.title.title_size_medium h1,
		.title.title_size_medium h1.title_like_separator .vc_text_separator.full .separator_content{
			font-size:<?php echo esc_attr($page_title_font_size); ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['page_title_large_fontsize']) && ($burst_mikado_options['page_title_large_fontsize']) !== '') {
		$page_title_font_size = $burst_mikado_options['page_title_large_fontsize'];
		if (($burst_mikado_options['page_title_large_fontsize'])>65) {
		 	$page_title_font_size *= 0.4;
		}
		elseif (($burst_mikado_options['page_title_large_fontsize'])>50) {
		 	$page_title_font_size *= 0.5;
		}
		elseif (($burst_mikado_options['page_title_large_fontsize'])>30) {
		 	$page_title_font_size *= 0.6;
		} ?>
		.title.title_size_large h1,
		.title.title_size_large h1.title_like_separator .vc_text_separator.full .separator_content{
			font-size:<?php echo esc_attr($page_title_font_size); ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h2_fontsize']) && ($burst_mikado_options['h2_fontsize'])>35) { ?>
			.content h2{
				font-size:<?php echo esc_attr($burst_mikado_options['h2_fontsize'])*0.4; ?>px;
			}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h3_fontsize']) && ($burst_mikado_options['h3_fontsize'])>35) { ?>
		.content h3{
			font-size:<?php echo esc_attr($burst_mikado_options['h3_fontsize'])*0.4; ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h4_fontsize']) && ($burst_mikado_options['h4_fontsize'])>35) { ?>
		.content h4{
			font-size:<?php echo esc_attr($burst_mikado_options['h4_fontsize'])*0.4; ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h5_fontsize']) && ($burst_mikado_options['h5_fontsize'])>35) { ?>
		.content h5{
			font-size:<?php echo esc_attr($burst_mikado_options['h5_fontsize'])*0.4; ?>px;
		}
	<?php } ?>
	<?php if(isset($burst_mikado_options['h6_fontsize']) && ($burst_mikado_options['h6_fontsize'])>35) { ?>
		.content h6{
			font-size:<?php echo esc_attr($burst_mikado_options['h6_fontsize'])*0.4; ?>px;
		}
	<?php } ?>
		
	<?php if (isset($burst_mikado_options['parallax_minheight']) && !empty($burst_mikado_options['parallax_minheight'])) { ?>
	section.parallax_section_holder{
		height: auto !important;
		min-height: <?php echo esc_attr($burst_mikado_options['parallax_minheight']); ?>px !important;
	}
	<?php } ?>
	
	
	<?php if (isset($burst_mikado_options['header_background_color_mobile']) &&  !empty($burst_mikado_options['header_background_color_mobile'])) { ?>
	header
	{
		 background-color: <?php echo esc_attr($burst_mikado_options['header_background_color_mobile']);  ?> !important;
		 background-image:none;
	}
	<?php } ?>

	<?php
		if(isset($burst_mikado_options['masonry_gallery_square_big_title_font_size']) && ($burst_mikado_options['masonry_gallery_square_big_title_font_size']) > 30) { ?>
		        .masonry_gallery_item.square_big h3 {
	        		font-size: <?php echo esc_attr($burst_mikado_options['masonry_gallery_square_big_title_font_size'])*0.7; ?>px;
	    		}
		<?php }
	?>
}