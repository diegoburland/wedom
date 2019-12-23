<?php

$burst_mikado_options = burst_mikado_return_global_options();
$burst_mikado_icon_collections = burst_mikado_return_icon_collections();

if($burst_mikado_options['show_back_button'] == "yes") {
    $burst_mikado_back_to_top_button_styles = "";
    if(isset($burst_mikado_options['back_to_top_position']) && !empty($burst_mikado_options['back_to_top_position'])) {
        $burst_mikado_back_to_top_button_styles = $burst_mikado_options['back_to_top_position'];
    } ?>
    <a id='back_to_top' class="<?php echo esc_attr($burst_mikado_back_to_top_button_styles);?>" href='#'>
		<span class="mkd_icon_stack">
			<?php if(isset($burst_mikado_options['show_back_button_icon']) && $burst_mikado_options['show_back_button_icon']!== '') { ?>
                <span <?php burst_mikado_class_attribute($burst_mikado_options['show_back_button_icon'])?>></span>
            <?php } else {
                $burst_mikado_icon_collections->getBackToTopIcon('font_awesome');
            } ?>
		</span>
    </a>
<?php } ?>