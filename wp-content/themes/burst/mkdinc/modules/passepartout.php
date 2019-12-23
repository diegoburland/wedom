<?php

extract(burst_mikado_get_header_variables());
$burst_mikado_options = burst_mikado_return_global_options();

if(isset($burst_mikado_options['paspartu']) && $burst_mikado_options['paspartu'] == 'yes'){

    $paspartu_additional_classes = "";
    if(isset($burst_mikado_options['paspartu_on_top']) && $burst_mikado_options['paspartu_on_top'] == 'no'){
        $paspartu_additional_classes .= " disable_top_paspartu";
    }
    if(isset($burst_mikado_options['paspartu_on_bottom']) && $burst_mikado_options['paspartu_on_bottom'] == 'no'){
        $paspartu_additional_classes .= " disable_bottom_paspartu";
    }
    if(isset($burst_mikado_options['paspartu_on_bottom_slider']) && $burst_mikado_options['paspartu_on_bottom_slider'] == 'yes'){
        $paspartu_additional_classes .= " paspartu_on_bottom_slider";
    }
    if((isset($burst_mikado_options['paspartu_on_bottom']) && $burst_mikado_options['paspartu_on_bottom'] == 'yes' && isset($burst_mikado_options['paspartu_on_bottom_fixed']) && $burst_mikado_options['paspartu_on_bottom_fixed'] == 'yes') ||
        (burst_mikado_is_side_header() && isset($burst_mikado_options['vertical_menu_inside_paspartu']) && $burst_mikado_options['vertical_menu_inside_paspartu'] == 'yes')){
        $paspartu_additional_classes .= " paspartu_on_bottom_fixed";
    }
    ?>


<div class="paspartu_outer <?php echo esc_attr($paspartu_additional_classes); ?>">
    <?php if(burst_mikado_is_side_header() && isset($burst_mikado_options['vertical_menu_inside_paspartu']) && $burst_mikado_options['vertical_menu_inside_paspartu'] == 'no') { ?>
    <div class="paspartu_middle_inner">
<?php }?>

    <?php if((isset($burst_mikado_options['paspartu_on_top']) && $burst_mikado_options['paspartu_on_top'] == 'yes' && isset($burst_mikado_options['paspartu_on_top_fixed']) && $burst_mikado_options['paspartu_on_top_fixed'] == 'yes') ||
        (burst_mikado_is_side_header() && isset($burst_mikado_options['vertical_menu_inside_paspartu']) && $burst_mikado_options['vertical_menu_inside_paspartu'] == 'yes')){ ?>
        <div class="paspartu_top"></div>
    <?php }?>
    <div class="paspartu_left"></div>
    <div class="paspartu_right"></div>
    <div class="paspartu_inner">
    <?php
}
?>