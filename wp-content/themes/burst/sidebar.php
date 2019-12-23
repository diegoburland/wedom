<?php
$burst_mikado_options = burst_mikado_return_global_options();
$burst_mikado_page_id = burst_mikado_get_page_id();
$burst_mikado_sidebar_id = $burst_mikado_page_id;
?>
<div class="column_inner">
    <aside class="sidebar">
        <?php
        $burst_mikado_sidebar = "";

        $burst_mikado_is_woocommerce = false;
        if (function_exists("is_woocommerce")) {
            $burst_mikado_is_woocommerce = is_woocommerce();
            if ($burst_mikado_is_woocommerce) {
                $burst_mikado_sidebar_id = get_option('woocommerce_shop_page_id');
            }
        }

        if (get_post_meta($burst_mikado_sidebar_id, 'mkd_choose-sidebar', true) != "") {
            $burst_mikado_sidebar = get_post_meta($burst_mikado_sidebar_id, 'mkd_choose-sidebar', true);
        } else {
            if (is_singular("post")) {
                if ($burst_mikado_options['blog_single_sidebar_custom_display'] != "") {
                    $burst_mikado_sidebar = $burst_mikado_options['blog_single_sidebar_custom_display'];
                } else {
                    $burst_mikado_sidebar = "sidebar";
                }
            } else {
                $burst_mikado_sidebar = "sidebar_page";
            }
        } ?>

        <?php if (is_active_sidebar($burst_mikado_sidebar)) {
            dynamic_sidebar($burst_mikado_sidebar);
        } ?>
    </aside>
</div>
