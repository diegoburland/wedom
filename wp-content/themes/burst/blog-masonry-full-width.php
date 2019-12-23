<?php
/*
Template Name: Blog Masonry Full Width
*/
?>
<?php get_header(); ?>
<?php

$burst_mikado_options = burst_mikado_return_global_options();
$burst_mikado_id = burst_mikado_get_page_id();
$burst_mikado_page_object = get_post( $burst_mikado_id );
$burst_mikado_content = $burst_mikado_page_object->post_content;
$burst_mikado_sidebar = burst_mikado_get_sidebar_layout();


if(get_post_meta($burst_mikado_id, "mkd_page_background_color", true) != ""){
	$burst_mikado_background_color = 'background-color: '.esc_attr(get_post_meta($burst_mikado_id, "mkd_page_background_color", true));
}else{
	$burst_mikado_background_color = "";
}

$burst_mikado_content_style = "";
if(get_post_meta($burst_mikado_id, "mkd_content-top-padding", true) != ""){
	if(get_post_meta($burst_mikado_id, "mkd_content-top-padding-mobile", true) == 'yes'){
		$burst_mikado_content_style = "padding-top:".esc_attr(get_post_meta($burst_mikado_id, "mkd_content-top-padding", true))."px !important";
	}else{
		$burst_mikado_content_style = "padding-top:".esc_attr(get_post_meta($burst_mikado_id, "mkd_content-top-padding", true))."px";
	}
}

if(isset($burst_mikado_options['blog_masonry_number_of_chars'])&& $burst_mikado_options['blog_masonry_number_of_chars'] != "") {
	burst_mikado_set_blog_word_count(esc_attr($burst_mikado_options['blog_masonry_number_of_chars']));
}

$burst_mikado_category_filter = "no";
if(isset($burst_mikado_options['blog_masonry_filter'])){
	$burst_mikado_category_filter = $burst_mikado_options['blog_masonry_filter'];
}

$burst_mikado_container_inner_class = "";
if($burst_mikado_category_filter == "yes"){
	$burst_mikado_container_inner_class = " full_page_container_inner";
}

?>

	<?php get_template_part( 'title' ); ?>
	<?php get_template_part('slider'); ?>

	<div class="full_width" <?php burst_mikado_inline_style($burst_mikado_background_color); ?>>
		<div class="full_width_inner clearfix <?php echo esc_attr($burst_mikado_container_inner_class); ?>" <?php burst_mikado_inline_style($burst_mikado_content_style); ?>>
			<?php
				echo apply_filters('the_content', wp_kses_post($burst_mikado_content));
				get_template_part('templates/blog/blog', 'structure');
			?>
		</div>
	</div>
<?php get_footer(); ?>