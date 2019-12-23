<?php extract(burst_mikado_get_header_variables()); ?>

<?php if($enable_side_area == "yes" && $enable_popup_menu == 'no' && burst_mikado_is_top_header()) { ?>
    <section class="side_menu right">
        <?php if(isset($burst_mikado_options['side_area_title']) && $burst_mikado_options['side_area_title'] != "") { ?>
            <div class="side_menu_title">
                <h5><?php echo esc_html($burst_mikado_options['side_area_title']) ?></h5>
            </div>
        <?php } ?>
        <div class="close_side_menu_holder">
            <div class="close_side_menu_holder_inner">
                <a href="#" target="_self" class="close_side_menu">
                    <span aria-hidden="true" class="icon_close"></span>
                </a>
            </div>
        </div>
        <?php if(is_active_sidebar('sidearea')) {
            dynamic_sidebar('sidearea');
        } ?>
    </section>
<?php } ?>