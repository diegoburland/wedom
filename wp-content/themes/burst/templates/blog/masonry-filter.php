<?php
$burst_mikado_page_id = burst_mikado_get_page_id();
$burst_mikado_options = burst_mikado_return_global_options();
$burst_mikado_template_name = get_page_template_slug($burst_mikado_page_id);

$burst_mikado_blog_style = "blog_standard";
if(isset($burst_mikado_options['blog_style'])){
	$burst_mikado_blog_style = $burst_mikado_options['blog_style'];
}

$burst_mikado_filter = "no";

if(isset($burst_mikado_options['blog_masonry_filter'])){
	$burst_mikado_filter = $burst_mikado_options['blog_masonry_filter'];
}


$burst_mikado_show_filter_title = "no";
if(isset($burst_mikado_options['blog_masonry_enable_filter_title'])){
	$burst_mikado_show_filter_title = $burst_mikado_options['blog_masonry_enable_filter_title'];
}


$burst_mikado_blog_masnory_filter_class = "";
if (isset($burst_mikado_options['blog_masonry_filter_disable_separator']) && !empty($burst_mikado_options['blog_masonry_filter_disable_separator'])){
	if($burst_mikado_options['blog_masonry_filter_disable_separator'] == "yes"){
		$burst_mikado_blog_masnory_filter_class = "without_separator";
	} else {
		$burst_mikado_blog_masnory_filter_class = "";
	}
}


$burst_mikado_page_category = get_post_meta($burst_mikado_page_id, "mkd_choose-blog-category", true);
if(is_category()){
	$burst_mikado_page_category = get_query_var( 'cat' );
}
if ($burst_mikado_page_category == "" && !is_category()) {
                $args = array(
                    'parent' => 0
                );
                $categories = get_categories( $args );
            } else {
                $args = array(
                    'parent' => $burst_mikado_page_category
                );
                $categories = get_categories( $args );
            }
if ($burst_mikado_filter == "yes" && count($categories) > 0) {	?>

			<div class="filter_outer filter_blog">
				<div class="filter_holder <?php echo esc_attr($burst_mikado_blog_masnory_filter_class); ?>">
					<ul>
                        <?php if($burst_mikado_show_filter_title == "yes"){ ?>
                            <li class='filter_title'><span><?php esc_html_e('Sort Blog:', 'burst'); ?></span></li>
                       <?php }?>
						<li class="filter" data-filter="*"><span><?php esc_html_e('All', 'burst'); ?></span></li>
						<?php foreach ($categories as $category) { ?>
							 <li class="filter" data-filter="<?php echo ".category-" . esc_attr($category->slug); ?>"><span><?php echo esc_html($category->name); ?></span></li>
						<?php } ?>
					</ul>
				</div>
			</div>

      <?php  }
?>
