<?php extract(burst_mikado_get_header_variables()); ?>

<?php if($loading_animation){ ?>
    <div class="ajax_loader">
        <div class="ajax_loader_1">
            <?php if($loading_image != "") { ?>
                <div class="ajax_loader_2">
                    <img src="<?php echo esc_url($loading_image); ?>" alt="<?php esc_attr_e('Loading Image', 'burst'); ?>" />
                </div>
            <?php } else {
                burst_mikado_loading_spinners();
            } ?>
        </div>
    </div>
<?php } ?>