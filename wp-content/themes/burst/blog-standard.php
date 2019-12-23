<?php
/*
Template Name: Blog: Standard
*/
?>
<?php get_header(); ?>
<?php

$burst_mikado_options = burst_mikado_return_global_options();
$burst_mikado_id = burst_mikado_get_page_id();
$burst_mikado_page_object = get_post( $burst_mikado_id );
$burst_mikado_content = $burst_mikado_page_object->post_content;
$burst_mikado_sidebar = get_post_meta($burst_mikado_id, "mkd_show-sidebar", true);

$burst_mikado_blog_content_position = "content_above_blog_list";
if(isset($burst_mikado_options['blog_standard_type_content_position'])){
    $burst_mikado_blog_content_position = $burst_mikado_options['blog_standard_type_content_position'];
}


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

if(isset($burst_mikado_options['blog_standard_type_number_of_chars']) && $burst_mikado_options['blog_standard_type_number_of_chars'] != "") {
    burst_mikado_set_blog_word_count(esc_attr($burst_mikado_options['blog_standard_type_number_of_chars']));
}

?>

    <?php get_template_part( 'title' ); ?>
    <?php get_template_part('slider'); ?>

    <div class="container" <?php burst_mikado_inline_style($burst_mikado_background_color); ?>>
			<?php if($burst_mikado_options['overlapping_content'] == 'yes') {?>
				<div class="overlapping_content"><div class="overlapping_content_inner">
			<?php } ?>
        <div class="container_inner default_template_holder" <?php burst_mikado_inline_style($burst_mikado_content_style); ?>>
            <?php if(($burst_mikado_sidebar == "default")||($burst_mikado_sidebar == "")) : ?>
                <?php
					echo apply_filters('the_content', wp_kses_post($burst_mikado_content));
                	get_template_part('templates/blog/blog', 'structure');
                ?>
            <?php elseif($burst_mikado_sidebar == "1" || $burst_mikado_sidebar == "2"): ?>
				<?php
					if($burst_mikado_blog_content_position != "content_above_blog_list"){
						echo apply_filters('the_content', wp_kses_post($burst_mikado_content));
					}
				?>
                <div class="<?php if($burst_mikado_sidebar == "1"):?>two_columns_66_33<?php elseif($burst_mikado_sidebar == "2") : ?>two_columns_75_25<?php endif; ?> background_color_sidebar grid2 clearfix">
                    <div class="column1 content_left_from_sidebar">
                        <div class="column_inner">
                            <?php
								if($burst_mikado_blog_content_position == "content_above_blog_list"){
									echo apply_filters('the_content', wp_kses_post($burst_mikado_content));
								}
								get_template_part('templates/blog/blog', 'structure');
                            ?>
                        </div>
                    </div>
                    <div class="column2">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            <?php elseif($burst_mikado_sidebar == "3" || $burst_mikado_sidebar == "4"): ?>
				<?php
					if($burst_mikado_blog_content_position != "content_above_blog_list"){
						echo apply_filters('the_content', wp_kses_post($burst_mikado_content));
					}
				?>
                <div class="<?php if($burst_mikado_sidebar == "3"):?>two_columns_33_66<?php elseif($burst_mikado_sidebar == "4") : ?>two_columns_25_75<?php endif; ?> background_color_sidebar grid2 clearfix">
                    <div class="column1">
                        <?php get_sidebar(); ?>
                    </div>
                    <div class="column2 content_right_from_sidebar">
                        <div class="column_inner">
                            <?php
                            if($burst_mikado_blog_content_position == "content_above_blog_list"){
								echo apply_filters('the_content', wp_kses_post($burst_mikado_content));
							}
							get_template_part('templates/blog/blog', 'structure');
                            ?>
                        </div>
                    </div>

                </div>
            <?php endif; ?>
        </div>
				<?php if($burst_mikado_options['overlapping_content'] == 'yes') {?>
					</div></div>
				<?php } ?>
    </div>
<?php get_footer(); ?>