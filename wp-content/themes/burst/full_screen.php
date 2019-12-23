<?php
/*
Template Name: Full Screen Sections
*/
?>
<?php

$burst_mikado_options = burst_mikado_return_global_options();
$burst_mikado_id = burst_mikado_get_page_id();


$burst_mikado_full_screen_holder_style = "";

if(get_post_meta($burst_mikado_id, "mkd_page_background_color", true) != ""){
    $burst_mikado_full_screen_holder_style .= "background-color:".esc_attr(get_post_meta($burst_mikado_id, "mkd_page_background_color", true)).";";
}else{
    $burst_mikado_full_screen_holder_style .= "";
}

$burst_mikado_header_bottom_appearance = 'regular';
if(isset($burst_mikado_options['header_bottom_appearance'])){
    $burst_mikado_header_bottom_appearance = $burst_mikado_options['header_bottom_appearance'];
}

$burst_mikado_enable_vertical_menu = false;
if(burst_mikado_is_side_header()){
    $burst_mikado_enable_vertical_menu = true;
}

$burst_mikado_content_style = "";
if(get_post_meta($burst_mikado_id, "mkd_content-top-padding", true) != ""){
    if(get_post_meta($burst_mikado_id, "mkd_content-top-padding-mobile", true) == 'yes'){
        $burst_mikado_content_style = "padding-top:".esc_attr(get_post_meta($burst_mikado_id, "mkd_content-top-padding", true))."px !important";
    }else{
        $burst_mikado_content_style = "padding-top:".esc_attr(get_post_meta($burst_mikado_id, "mkd_content-top-padding", true))."px";
    }
}

$burst_mikado_fs_navigation_type = "";
if(isset($burst_mikado_options['fs_navigation_slider_vertical_section_type'])){
    $burst_mikado_fs_navigation_type = $burst_mikado_options['fs_navigation_slider_vertical_section_type'];
}

$burst_mikado_fs_toggle_navigation = "";
if($burst_mikado_options['show_full_screen_sections_navigation'] == 'no'){
    $burst_mikado_fs_toggle_navigation = 'hide_navigation';
}

?>
<?php get_header(); ?>
    <div class="full_screen_preloader">
        <?php
        if($burst_mikado_options['loading_animation'] == "on") {
            if($burst_mikado_options['loading_image'] != "") { ?>
                <div class="ajax_loader">
	                <div class="ajax_loader_1">
		                <div class="ajax_loader_2">
			                <img src="<?php echo esc_url($burst_mikado_options['loading_image']) ?>" alt="<?php esc_attr_e('Loading Image', 'burst'); ?>" />
		                </div>
	                </div>
                </div>
            <?php }
            else { ?>
                <div class="ajax_loader"><div class="ajax_loader_1"><?php burst_mikado_loading_spinners(); ?></div></div>
            <?php }
        }
        ?>
    </div>

    <div <?php echo('class="full_screen_holder '.esc_attr($burst_mikado_fs_toggle_navigation).'"')?><?php burst_mikado_inline_style($burst_mikado_full_screen_holder_style); ?>>
        <div class="full_screen_inner" <?php burst_mikado_inline_style($burst_mikado_content_style); ?>>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; endif; ?>

        </div>
        <?php if($burst_mikado_fs_navigation_type == '' || $burst_mikado_fs_navigation_type == 'arrows' || $burst_mikado_fs_navigation_type == 'both'){ ?>
            <div class="full_screen_navigation_holder">
                <div class="full_screen_navigation_inner">
                    <a id="up_fs_button" href="#" target="_self"><span class='arrow_carrot-up'></span></a>
                    <a id="down_fs_button" href="#" target="_self"><span class='arrow_carrot-down'></span></a>
                </div>
            </div>
        <?php } ?>
    </div>

<?php get_footer(); ?>