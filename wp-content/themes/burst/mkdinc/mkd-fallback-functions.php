<?php

function mkd_burst_get_inline_style($param1){
    burst_mikado_get_inline_style($param1);
}

function mkd_burst_get_attachment_meta_from_url($param1, $param2){
    burst_mikado_get_attachment_meta_from_url($param1, $param2);
}

if( ! function_exists('burst_mikado_init_fallback_variables') ) {
    function burst_mikado_init_fallback_variables(){
        global $mkd_burst_IconCollections;
        $mkd_burst_IconCollections = burst_mikado_return_icon_collections();
    }

    add_action('after_setup_theme', 'burst_mikado_init_fallback_variables', 1);
}