<?php
	$burst_mikado_wp_query = burst_mikado_return_global_query();
	$burst_mikado_options = burst_mikado_return_global_options();
	$burst_mikado_id = burst_mikado_get_page_id();
	$burst_mikado_template_name =  get_page_template_slug($burst_mikado_id);
	$burst_mikado_category = get_post_meta($burst_mikado_id, "mkd_choose-blog-category", true);
	$burst_mikado_post_number = esc_attr(get_post_meta($burst_mikado_id, "mkd_show-posts-per-page", true));
    $burst_mikado_sidebar = $burst_mikado_options['category_blog_sidebar'];
	
	if ( get_query_var('paged') ) { $burst_mikado_paged = get_query_var('paged'); }
	elseif ( get_query_var('page') ) { $burst_mikado_paged = get_query_var('page'); }
	else { $burst_mikado_paged = 1; }

	if(!is_archive()) {
		$burst_mikado_blog_query = new WP_Query('post_type=post&paged=' . $burst_mikado_paged . '&cat=' . $burst_mikado_category . '&posts_per_page=' . $burst_mikado_post_number);
	}else{
		$burst_mikado_blog_query = $burst_mikado_wp_query;
	}

	if(isset($burst_mikado_options['blog_page_range']) && $burst_mikado_options['blog_page_range'] != ""){
		$blog_page_range = esc_attr($burst_mikado_options['blog_page_range']);
	} else{
		$blog_page_range = $burst_mikado_blog_query->max_num_pages;
	}
	
	$burst_mikado_blog_style = "blog_standard";
	if(isset($burst_mikado_options['blog_style'])){
		$burst_mikado_blog_style = $burst_mikado_options['blog_style'];
	}

	$burst_mikado_filter = "no";

	if(isset($burst_mikado_options['blog_masonry_filter'])){
		$burst_mikado_filter = $burst_mikado_options['blog_masonry_filter'];
	}
	
	
	$burst_mikado_blog_masonry_type = "blog_masonry_standard";
	if(isset($burst_mikado_options['blog_masonry_choose_type'])){
		$burst_mikado_blog_masonry_type = $burst_mikado_options['blog_masonry_choose_type'];
	} 

	$burst_mikado_blog_list = "";
	if($burst_mikado_template_name != "") {
		if($burst_mikado_template_name == "blog-masonry.php"){
			if($burst_mikado_blog_masonry_type == "blog_masonry_standard"){
				$burst_mikado_blog_list = "blog_masonry";
				$burst_mikado_blog_list_class = "masonry";
			}if($burst_mikado_blog_masonry_type == "blog_masonry_meta_info_featured_on_side"){
				$burst_mikado_blog_list = "blog_masonry_meta_info_featured_on_side";
				$burst_mikado_blog_list_class = "masonry blog_masonry_meta_info_featured_on_side";
			}
		}elseif($burst_mikado_template_name == "blog-masonry-full-width.php"){
			if($burst_mikado_blog_masonry_type == "blog_masonry_standard"){
				$burst_mikado_blog_list = "blog_masonry";
				$burst_mikado_blog_list_class = "masonry_full_width";
			}
			if($burst_mikado_blog_masonry_type == "blog_masonry_meta_info_featured_on_side"){
				$burst_mikado_blog_list = "blog_masonry_meta_info_featured_on_side";
				$burst_mikado_blog_list_class = "masonry_full_width blog_masonry_meta_info_featured_on_side";
			}
        }elseif($burst_mikado_template_name == "blog-standard.php"){
            $burst_mikado_blog_list = "blog_standard";
            $burst_mikado_blog_list_class = "blog_standard_type";
        }elseif($burst_mikado_template_name == "blog-standard-whole-post.php"){
			$burst_mikado_blog_list = "blog_standard_whole_post";
			$burst_mikado_blog_list_class = "blog_standard_type";
        }else{
			$burst_mikado_blog_list = "blog_standard";
			$burst_mikado_blog_list_class = "blog_standard_type";
		}
	} else{
		if($burst_mikado_blog_style=="blog_standard"){
			$burst_mikado_blog_list = "blog_standard";
			$burst_mikado_blog_list_class = "blog_standard_type";
        }elseif($burst_mikado_blog_style=="blog_masonry"){
			if($burst_mikado_blog_masonry_type == "blog_masonry_standard"){
				$burst_mikado_blog_list = "blog_masonry";
				$burst_mikado_blog_list_class = "masonry";
			}if($burst_mikado_blog_masonry_type == "blog_masonry_meta_info_featured_on_side"){
				$burst_mikado_blog_list = "blog_masonry_meta_info_featured_on_side";
				$burst_mikado_blog_list_class = "masonry blog_masonry_meta_info_featured_on_side";
			}
        }elseif($burst_mikado_blog_style=="blog_masonry_full_width"){
			if($burst_mikado_blog_masonry_type == "blog_masonry_standard"){
				$burst_mikado_blog_list = "blog_masonry";
				$burst_mikado_blog_list_class = "masonry_full_width";
			}
			if($burst_mikado_blog_masonry_type == "blog_masonry_meta_info_featured_on_side"){
				$burst_mikado_blog_list = "blog_masonry_meta_info_featured_on_side";
				$burst_mikado_blog_list_class = "masonry_full_width blog_masonry_meta_info_featured_on_side";
			}
		}elseif($burst_mikado_blog_style=="blog_standard_whole_post"){
			$burst_mikado_blog_list = "blog_standard_whole_post";
			$burst_mikado_blog_list_class = "blog_standard_type";
		}else {
			$burst_mikado_blog_list = "blog_standard";
			$burst_mikado_blog_list_class = "blog_standard_type";
		}
	}

    $burst_mikado_pagination_masonry = "pagination";
    if(isset($burst_mikado_options['pagination_masonry'])){
       $burst_mikado_pagination_masonry = $burst_mikado_options['pagination_masonry'];
		if($burst_mikado_blog_list == "blog_masonry" || $burst_mikado_blog_list == "blog_masonry_meta_info_featured_on_side") {
			$burst_mikado_blog_list_class .= " masonry_" . $burst_mikado_pagination_masonry;
		}
    }

?>
<?php

	if(($burst_mikado_blog_list == "blog_masonry" || $burst_mikado_blog_list == "blog_masonry_meta_info_featured_on_side") && $burst_mikado_filter == "yes") {
		get_template_part('templates/blog/masonry', 'filter');

	}

	$burst_mikado_blog_masonry_columns = 'three_columns';
	if (isset($burst_mikado_options['blog_masonry_columns']) && $burst_mikado_options['blog_masonry_columns'] !== '') {
		$burst_mikado_blog_masonry_columns = $burst_mikado_options['blog_masonry_columns'];
	}

	$burst_mikado_blog_masonry_full_width_columns = 'five_columns';
	if (isset($burst_mikado_options['blog_masonry_full_width_columns']) && $burst_mikado_options['blog_masonry_full_width_columns'] !== '') {
		$burst_mikado_blog_masonry_full_width_columns = $burst_mikado_options['blog_masonry_full_width_columns'];
	}
	
	if($burst_mikado_template_name == "blog-masonry.php" || $burst_mikado_blog_style == 'blog_masonry'){
		$burst_mikado_blog_list_class .= " " .$burst_mikado_blog_masonry_columns;
	}
	
	if($burst_mikado_template_name == "blog-masonry-full-width.php" || $burst_mikado_blog_style == 'blog_masonry_full_width'){
		$burst_mikado_blog_list_class .= " " .$burst_mikado_blog_masonry_full_width_columns;
	}

	
	$burst_mikado_icon_left_html =  "<i class='pagination_arrow arrow_carrot-left'></i>";
	if (isset($burst_mikado_options['pagination_arrows_type']) && $burst_mikado_options['pagination_arrows_type'] != '') {
		$burst_mikado_icon_navigation_class = $burst_mikado_options['pagination_arrows_type'];
		$burst_mikado_direction_nav_classes = burst_mikado_horizontal_slider_icon_classes($burst_mikado_icon_navigation_class);
		$burst_mikado_icon_left_html = '<span class="pagination_arrow ' . $burst_mikado_direction_nav_classes['left_icon_class']. '"></span>';
	}
	
	$burst_mikado_icon_left_html .= '<span class="pagination_label">';
	if (isset($burst_mikado_options['blog_pagination_previous_label']) && $burst_mikado_options['blog_pagination_previous_label'] != '') {
		$burst_mikado_icon_left_html.= $burst_mikado_options['blog_pagination_previous_label'];
	}
	else{
		$burst_mikado_icon_left_html .= "Previous";
	}
	$burst_mikado_icon_left_html .= '</span>';


	$burst_mikado_icon_right_html = '<span class="pagination_label">';
	if (isset($burst_mikado_options['blog_pagination_next_label']) && $burst_mikado_options['blog_pagination_next_label'] != '') {
		$burst_mikado_icon_right_html .= $burst_mikado_options['blog_pagination_next_label'];
	}
	else {
		$burst_mikado_icon_right_html .= "Next";
	}
	$burst_mikado_icon_right_html .= '</span>';

	if (isset($burst_mikado_options['pagination_arrows_type']) && $burst_mikado_options['pagination_arrows_type'] != '') {
		$burst_mikado_icon_navigation_class = $burst_mikado_options['pagination_arrows_type'];
		$burst_mikado_direction_nav_classes = burst_mikado_horizontal_slider_icon_classes($burst_mikado_icon_navigation_class);
		$burst_mikado_icon_right_html .= '<span class="pagination_arrow ' . $burst_mikado_direction_nav_classes['right_icon_class']. '"></span>';
	}
	else{
		$burst_mikado_icon_right_html .=  "<i class='pagination_arrow arrow_carrot-right'></i>";
	}

	?>

	<div class="blog_holder <?php echo esc_attr($burst_mikado_blog_list_class); ?>">
		
	<?php if($burst_mikado_blog_list == "blog_masonry" || $burst_mikado_blog_list == "blog_masonry_meta_info_featured_on_side") { ?>
		<div class="blog_holder_grid_sizer"></div>
		<div class="blog_holder_grid_gutter"></div>
	<?php } ?>
	<?php if($burst_mikado_blog_query->have_posts()) : while ( $burst_mikado_blog_query->have_posts() ) : $burst_mikado_blog_query->the_post(); ?>
		<?php
			get_template_part('templates/blog/'.$burst_mikado_blog_list, 'loop');
		?>
	<?php endwhile; ?>
	<?php if($burst_mikado_blog_list != "blog_masonry" && $burst_mikado_blog_list != "blog_masonry_meta_info_featured_on_side") {
		if ($burst_mikado_options['blog_pagination_type'] == 'standard'){
				burst_mikado_pagination($burst_mikado_blog_query->max_num_pages, $blog_page_range, $burst_mikado_paged);
			}
		elseif ($burst_mikado_options['blog_pagination_type'] == 'prev_and_next'){?>
			<div class="pagination_prev_and_next_only">
				<ul>
					<li class='prev'><?php echo wp_kses_post(get_previous_posts_link($burst_mikado_icon_left_html, $burst_mikado_blog_query->max_num_pages)); ?></li>
					<li class='next'><?php echo wp_kses_post(get_next_posts_link($burst_mikado_icon_right_html, $burst_mikado_blog_query->max_num_pages)); ?></li>
				</ul>
			</div>
		<?php } ?>
	<?php } ?>
	<?php else: //If no posts are present ?>
	<div class="entry">
			<p><?php esc_html_e('No posts were found.', 'burst'); ?></p>
	</div>
	<?php endif; ?>
</div>
<?php if($burst_mikado_blog_list == "blog_masonry" || $burst_mikado_blog_list == "blog_masonry_meta_info_featured_on_side") {
    if($burst_mikado_pagination_masonry == "load_more") {
		if (get_next_posts_link(null, $burst_mikado_blog_query->max_num_pages)) { ?>
			<div class="blog_load_more_button_holder">
				<div class="blog_load_more_button"><span data-rel="<?php echo esc_attr($burst_mikado_blog_query->max_num_pages); ?>"><?php echo wp_kses_post(get_next_posts_link(esc_html__('Show more', 'burst'), $burst_mikado_blog_query->max_num_pages)); ?></span></div>
			</div>
		<?php } ?>
	 <?php } elseif($burst_mikado_pagination_masonry == "infinite_scroll") { ?>
		<div class="blog_infinite_scroll_button"><span data-rel="<?php echo esc_attr($burst_mikado_blog_query->max_num_pages); ?>"><?php echo wp_kses_post(get_next_posts_link(esc_html__('Show more', 'burst'), $burst_mikado_blog_query->max_num_pages)); ?></span></div>
    <?php }else { ?>
        <?php if($burst_mikado_options['blog_pagination_type'] == 'standard' && $burst_mikado_options['pagination'] != "0") {
				burst_mikado_pagination($burst_mikado_blog_query->max_num_pages, $blog_page_range, $burst_mikado_paged);
            }
        	elseif ($burst_mikado_options['blog_pagination_type'] == 'prev_and_next'){ ?>
				<div class="pagination_prev_and_next_only">
					<ul>
						<li class='prev'><?php echo wp_kses_post(get_previous_posts_link($burst_mikado_icon_left_html, $burst_mikado_blog_query->max_num_pages)); ?></li>
						<li class='next'><?php echo wp_kses_post(get_next_posts_link($burst_mikado_icon_right_html, $burst_mikado_blog_query->max_num_pages)); ?></li>
					</ul>
				</div>
		<?php } ?>
    <?php } ?>
<?php } ?>
<?php wp_reset_postdata(); ?>