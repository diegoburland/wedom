<?php

define( 'BURST_MIKADO', true );
define( 'BURST_MIKADO_ROOT', get_template_directory_uri() );
define( 'BURST_MIKADO_ROOT_DIR', get_template_directory() );
define( 'BURST_MIKADO_CSS_ROOT', BURST_MIKADO_ROOT . '/css' );
define( 'BURST_MIKADO_CSS_ROOT_DIR', BURST_MIKADO_ROOT_DIR . '/css' );
define( 'BURST_MIKADO_JS_ROOT', BURST_MIKADO_ROOT . '/js' );
define( 'BURST_MIKADO_JS_ROOT_DIR', BURST_MIKADO_ROOT_DIR . '/js' );
define( 'BURST_MIKADO_INCLUDES_ROOT', BURST_MIKADO_ROOT . '/mkdinc' );
define( 'BURST_MIKADO_INCLUDES_ROOT_DIR', BURST_MIKADO_ROOT_DIR . '/mkdinc' );
define('MIKADO_VAR_PREFIX', 'mkd_');

include_once get_template_directory().'/mkdinc/mkd-framework.php';
include_once get_template_directory().'/mkdinc/mkd-fallback-functions.php';
include_once get_template_directory().'/mkdinc/mkd-breadcrumbs.php';
include_once get_template_directory().'/mkdinc/mkd-dynamic-helper-functions.php';
include_once get_template_directory().'/mkdinc/nav_menu/mkd-menu.php';
include_once get_template_directory().'/mkdinc/sidebar/mkd-custom-sidebar.php';
include_once get_template_directory().'/mkdinc/header/mkd-header-functions.php';
include_once get_template_directory().'/mkdinc/title/mkd-title-functions.php';
include_once get_template_directory().'/mkdinc/mkd-portfolio-functions.php';
include_once get_template_directory().'/mkdinc/mkd-loading-spinners.php';
include_once get_template_directory().'/mkdinc/mkd-options-helper-functions.php';
/* Include comment functionality */
include_once get_template_directory().'/mkdinc/comment/comment.php';
/* Include sidebar functionality */
include_once get_template_directory().'/mkdinc/sidebar/sidebar.php';
/* Include pagination functionality */
include_once get_template_directory().'/mkdinc/pagination/pagination.php';
include_once get_template_directory().'/mkdinc/mkd-body-classes.php';
/** Include the TGM_Plugin_Activation class. */

include_once get_template_directory().'/mkdinc/mkd-blog-functions.php';
include_once get_template_directory().'/mkdinc/mkd-plugin-helper-functions.php';
include_once get_template_directory().'/mkdinc/widgets/mkd-call-to-action-widget.php';
include_once get_template_directory().'/mkdinc/widgets/mkd-sticky-sidebar.php';
include_once get_template_directory().'/mkdinc/widgets/mkd-latest-posts-widget.php';
include_once get_template_directory().'/mkdinc/widgets/mkd-latest-posts-menu-widget.php';
/* Include activation for plugins */
include_once get_template_directory().'/mkdinc/plugins/plugins-activation.php';

//does woocommerce function exists?
if(function_exists("is_woocommerce")){
    //include woocommerce configuration
    include_once get_template_directory().'/woocommerce/woocommerce_configuration.php';
    //include cart dropdown widget
    include_once get_template_directory().'/mkdinc/widgets/mkd-woocommerce-dropdown-cart.php';
}