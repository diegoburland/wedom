<?php

add_action('after_setup_theme', 'burst_mikado_meta_boxes_map_init', 1);
function burst_mikado_meta_boxes_map_init() {
	require_once(get_template_directory()."/mkdinc/admin/meta-boxes/page/map.php");
	require_once(get_template_directory()."/mkdinc/admin/meta-boxes/portfolio/map.php");
	require_once(get_template_directory()."/mkdinc/admin/meta-boxes/slides/map.php");
	require_once(get_template_directory()."/mkdinc/admin/meta-boxes/post/map.php");
	require_once(get_template_directory()."/mkdinc/admin/meta-boxes/testimonials/map.php");
	require_once(get_template_directory()."/mkdinc/admin/meta-boxes/carousels/map.php");
	require_once(get_template_directory()."/mkdinc/admin/meta-boxes/masonry_gallery/map.php");
}