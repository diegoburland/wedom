<?php

add_action('after_setup_theme', 'burst_mikado_admin_map_init', 0);
function burst_mikado_admin_map_init() {
	global $burst_mikado_Framework;
	require_once(get_template_directory()."/mkdinc/admin/options/10.general/map.php");
    require_once(get_template_directory()."/mkdinc/admin/options/20.fonts/map.php");
    require_once(get_template_directory()."/mkdinc/admin/options/30.header/map.php");
    require_once(get_template_directory()."/mkdinc/admin/options/40.title/map.php");
    require_once(get_template_directory()."/mkdinc/admin/options/50.content/map.php");
    require_once(get_template_directory()."/mkdinc/admin/options/60.footer/map.php");
    require_once(get_template_directory()."/mkdinc/admin/options/70.elements/map.php");
    require_once(get_template_directory()."/mkdinc/admin/options/80.blog/map.php");
    require_once(get_template_directory()."/mkdinc/admin/options/90.portfolio/map.php");
    require_once(get_template_directory()."/mkdinc/admin/options/100.slider/map.php");
    require_once(get_template_directory()."/mkdinc/admin/options/110.social/map.php");
    require_once(get_template_directory()."/mkdinc/admin/options/120.error404/map.php");
    if(burst_mikado_visual_composer_installed() && version_compare(burst_mikado_get_vc_version(), '4.4.2') >= 0) {
        require_once(get_template_directory()."/mkdinc/admin/options/130.visualcomposer/map.php");
    } else {
        $burst_mikado_Framework->mkdOptions->addOption("enable_grid_elements","no");
    }
    if(burst_mikado_contact_form_7_installed()) {
        require_once(get_template_directory()."/mkdinc/admin/options/140.contactform7/map.php");
    }

    if(function_exists("is_woocommerce")){
        require_once(get_template_directory()."/mkdinc/admin/options/150.woocommerce/map.php");
    }
    require_once(get_template_directory()."/mkdinc/admin/options/160.reset/map.php");
}