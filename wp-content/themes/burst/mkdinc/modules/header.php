<?php

extract(burst_mikado_get_header_variables());
$burst_mikado_options = burst_mikado_return_global_options();
$burst_mikado_icon_collections = burst_mikado_return_icon_collections();

?>

<?php if(burst_mikado_is_side_header()) { ?>
    <aside class="vertical_menu_area<?php echo esc_attr($vertical_area_scroll); ?> <?php echo esc_attr($header_style); ?>">
        <div class="vertical_menu_area_inner">
            <?php if(isset($burst_mikado_options['vertical_area_type']) && ($burst_mikado_options['vertical_area_type'] == 'hidden' || $burst_mikado_options['vertical_area_type'] == 'hidden_with_icons')) { ?>
                <a href="#" class="vertical_menu_hidden_button">
                    <span class="vertical_menu_hidden_button_line"></span>
                </a>
            <?php } ?>
            <div class="vertical_area_background <?php if($vertical_area_background_image != ""){ echo "preload_background";  } ?>" <?php echo 'style="'.esc_attr($bkg_image).esc_attr($page_vertical_area_background_transparency_style).esc_attr($page_vertical_area_background_style).'"'; ?>></div>


            <?php if (!(isset($burst_mikado_options['show_logo']) && $burst_mikado_options['show_logo'] == "no")){ ?>
                <div class="vertical_logo_wrapper">
                    <?php
                    if (isset($burst_mikado_options['logo_image']) && $burst_mikado_options['logo_image'] != ""){ $logo_image = $burst_mikado_options['logo_image'];}else{ $logo_image =  get_template_directory_uri().'/img/logo.png'; };
                    if (isset($burst_mikado_options['logo_image_light']) && $burst_mikado_options['logo_image_light'] != ""){ $logo_image_light = $burst_mikado_options['logo_image_light'];}else{ $logo_image_light =  get_template_directory_uri().'/img/logo.png'; };
                    if (isset($burst_mikado_options['logo_image_dark']) && $burst_mikado_options['logo_image_dark'] != ""){ $logo_image_dark = $burst_mikado_options['logo_image_dark'];}else{ $logo_image_dark =  get_template_directory_uri().'/img/logo_black.png'; };

                    ?>
                    <div class="mkd_logo_vertical" style="height: <?php echo esc_attr(intval($burst_mikado_options['logo_height'])/2); ?>px;">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img class="normal" src="<?php echo esc_url($logo_image); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/>
                            <img class="light" src="<?php echo esc_url($logo_image_light); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/>
                            <img class="dark" src="<?php echo esc_url($logo_image_dark); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/>
                        </a>
                    </div>

                </div>
            <?php } ?>

            <nav class="vertical_menu dropdown_animation vertical_menu_<?php echo esc_attr($vertical_menu_style); ?> <?php echo esc_attr($vertical_area_menu_items_arrow); ?>">
                <?php

                wp_nav_menu( array( 'theme_location' => 'top-navigation' ,
                    'container'  => '',
                    'container_class' => '',
                    'menu_class' => '',
                    'menu_id' => '',
                    'fallback_cb' => 'top_navigation_fallback',
                    'link_before' => '<span>',
                    'link_after' => '</span>',
                    'walker' => new BurstMikadoType1WalkerNavMenu()
                ));
                ?>
            </nav>
            <div class="vertical_menu_area_widget_holder">
                <?php if(is_active_sidebar('vertical_menu_area')) {
                    dynamic_sidebar('vertical_menu_area');
                } ?>
            </div>
        </div>
    </aside>
    <?php if((isset($burst_mikado_options['vertical_area_type']) && ($burst_mikado_options['vertical_area_type'] == 'hidden' || $burst_mikado_options['vertical_area_type'] == 'hidden_with_icons')) &&
        (isset($burst_mikado_options['vertical_logo_bottom']) && $burst_mikado_options['vertical_logo_bottom'] !== '')) { ?>
        <div class="vertical_menu_area_bottom_logo">
            <div class="vertical_menu_area_bottom_logo_inner">
                <a href="javascript: void(0)">
                    <img src="<?php echo esc_url($burst_mikado_options['vertical_logo_bottom']); ?>" alt="<?php esc_attr_e( 'vertical_menu_area_bottom_logo', 'burst' ); ?>"/>
                </a>
            </div>
        </div>
    <?php } ?>

<?php } ?>

<?php if(burst_mikado_space_around_content()){

$frame_around_content_class = '';
if($burst_mikado_options['frame_around_content'] == 'yes'){
    $frame_around_content_class = 'frame_around_content';
}

?>
<div class="space_around_content <?php echo esc_attr($frame_around_content_class); ?>"><div class="space_around_content_inner">
        <?php } ?>

        <?php if(burst_mikado_is_top_header()){ ?>

            <?php if($header_bottom_appearance == "regular" || $header_bottom_appearance == "fixed" || $header_bottom_appearance == "fixed_hiding" || $header_bottom_appearance == "stick" || $header_bottom_appearance == "stick menu_bottom" || $header_bottom_appearance == "stick_with_left_right_menu"){ ?>
                <header class="<?php burst_mikado_header_classes(); ?>">
                    <div class="header_inner clearfix">
                        <?php if(isset($burst_mikado_options['enable_search']) && $burst_mikado_options['enable_search'] == "yes" ){ ?>
                            <?php if( ($header_color_transparency_per_page == '' || $header_color_transparency_per_page == '1') && ($header_color_transparency_on_scroll=='' || $header_color_transparency_on_scroll == '1') &&  isset($burst_mikado_options['search_type']) && $burst_mikado_options['search_type'] == "search_slides_from_header_bottom"){ ?>
                                <form role="search" action="<?php echo esc_url(home_url('/')); ?>" class="mkd_search_form_2" method="get">
                                    <?php if($header_in_grid){ ?>
                                    <div class="container">
                                        <div class="container_inner clearfix">
                                            <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?><div class="overlapping_content_margin"><?php } ?>
                                                <?php } ?>
                                                <div class="form_holder_outer">
                                                    <div class="form_holder">
                                                        <input type="text" placeholder="<?php esc_html_e('Search', 'burst'); ?>" name="s" class="mkd_search_field" autocomplete="off" />
                                                        <a class="mkd_search_submit" href="javascript:void(0)">
                                                            <?php $burst_mikado_icon_collections->getSearchIcon($burst_mikado_options['search_icon_pack']); ?>
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php if($header_in_grid){ ?>
                                                <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?></div><?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                </form>

                            <?php } else if(isset($burst_mikado_options['search_type']) && $burst_mikado_options['search_type'] == "search_covers_header") { ?>
                                <form role="search" action="<?php echo esc_url(home_url('/')); ?>" class="mkd_search_form_3" method="get">
                                    <?php if($header_in_grid){ ?>
                                    <div class="container">
                                        <div class="container_inner clearfix">
                                            <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?><div class="overlapping_content_margin"><?php } ?>
                                                <?php } ?>
                                                <div class="form_holder_outer">
                                                    <div class="form_holder">
                                                        <div class="form_holder_inner">
                                                            <input type="text" placeholder="<?php esc_html_e('Search', 'burst'); ?>" name="s" class="mkd_search_field" autocomplete="off" />

                                                            <div class="mkd_search_close">
                                                                <a href="#">
                                                                    <?php if(isset($burst_mikado_options['header_icon_pack'])) { $burst_mikado_icon_collections->getSearchClose($burst_mikado_options['header_icon_pack']); } ?>
                                                                    <!--<i class="fa fa-times"></i>-->
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if($header_in_grid){ ?>
                                                <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?></div><?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                </form>
                            <?php } else if(isset($burst_mikado_options['search_type']) && $burst_mikado_options['search_type'] == "search_slides_from_window_top") { ?>
                                <form role="search" id="searchform" action="<?php echo esc_url(home_url('/')); ?>" class="mkd_search_form" method="get">
                                    <?php if($header_in_grid){ ?>
                                    <div class="container">
                                        <div class="container_inner clearfix">
                                            <?php } ?>
                                            <i class="fa fa-search"></i>
                                            <input type="text" placeholder="<?php esc_attr_e('Search', 'burst'); ?>" name="s" class="mkd_search_field" autocomplete="off" />
                                            <input type="submit" value="<?php esc_attr_e('Search', 'burst'); ?>" />
                                            <div class="mkd_search_close">
                                                <a href="#">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                            <?php if($header_in_grid){ ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                </form>
                            <?php } ?>


                        <?php } ?>


                        <div class="header_top_bottom_holder">
                            <?php if($display_header_top == "yes"){ ?>
                                <div class="header_top clearfix	<?php if(isset($burst_mikado_options['header_top_has_background_pattern']) && $burst_mikado_options['header_top_has_background_pattern'] == "yes") {echo "has_pattern";}?>"	<?php burst_mikado_inline_style($header_top_color_per_page); ?> >
                                    <?php if($header_in_grid){ ?>
                                    <div class="container">
                                        <div class="container_inner clearfix" >
                                            <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?><div class="overlapping_content_margin"><?php } ?>
                                                <?php } ?>
                                                <div class="left">
                                                    <div class="inner">
                                                        <?php if(is_active_sidebar('header_left')) {
                                                            dynamic_sidebar('header_left');
                                                        } ?>
                                                    </div>
                                                </div>
                                                <div class="right">
                                                    <div class="inner">
                                                        <?php if(is_active_sidebar('header_right')) {
                                                            dynamic_sidebar('header_right');
                                                        } ?>
                                                        <?php if(isset($burst_mikado_options['enable_search']) && $burst_mikado_options['enable_search'] == 'yes'  && isset($burst_mikado_options['search_icon_in_header_top']) && $burst_mikado_options['search_icon_in_header_top'] == 'yes'){ ?>
                                                            <div class="header_top_side_button">
                                                                <a class="<?php echo esc_attr($header_search_type); ?> <?php echo esc_attr($header_button_size); ?>" href="javascript:void(0)">
                                                                    <?php if(isset($burst_mikado_options['search_icon_pack'])){
                                                                        $burst_mikado_icon_collections->getSearchIcon($burst_mikado_options['search_icon_pack']);
                                                                    } ?>
                                                                    <?php if(isset($burst_mikado_options['enable_search_icon_text']) && $burst_mikado_options['enable_search_icon_text'] == 'yes'){?>
                                                                        <span class="search_icon_text">
															<?php esc_html_e('Search', 'burst'); ?>
														</span>
                                                                    <?php } ?>
                                                                </a>
                                                                <?php if(strstr($header_search_type, 'fullscreen_search') && $fullscreen_search_animation=='from_circle'){ ?>
                                                                    <div class="fullscreen_search_overlay"></div>
                                                                <?php } ?>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <?php if($header_in_grid){ ?>
                                                <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?></div><?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                </div>
                            <?php } ?>
                            <div class="header_bottom <?php echo esc_attr($header_bottom_class) ;?> clearfix <?php if($menu_item_icon_position=="top"){echo 'with_large_icons ';} if($menu_position == "left" && $header_bottom_appearance != "fixed_hiding" && $header_bottom_appearance != "stick menu_bottom" && $header_bottom_appearance != "stick_with_left_right_menu"){ echo 'left_menu_position';} ?>" <?php burst_mikado_inline_style($header_color_per_page); ?> >
                                <?php if($header_in_grid){ ?>
                                <div class="container">
                                    <div class="container_inner clearfix" <?php burst_mikado_inline_style($header_bottom_border_style); ?>>
                                        <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?><div class="overlapping_content_margin"><?php } ?>
                                            <?php } ?>
                                            <?php if($header_bottom_appearance == "stick_with_left_right_menu") { ?>
                                                <nav class="main_menu drop_down left_side <?php echo esc_attr($menu_hover_animation_class); ?> <?php echo esc_attr($menu_dropdown_appearance_class); ?>" <?php burst_mikado_inline_style($divided_left_menu_padding); ?>>
                                                    <div class="side_menu_button_wrapper right">
                                                        <?php if(is_active_sidebar('header_bottom_left')) { ?>
                                                            <div class="header_bottom_right_widget_holder"><?php dynamic_sidebar('header_bottom_left'); ?></div>
                                                        <?php } ?>
                                                    </div>

                                                    <?php
                                                    wp_nav_menu( array( 'theme_location' => 'left-top-navigation' ,
                                                        'container'  => '',
                                                        'container_class' => '',
                                                        'menu_class' => '',
                                                        'menu_id' => '',
                                                        'fallback_cb' => 'top_navigation_fallback',
                                                        'link_before' => '<span>',
                                                        'link_after' => '</span>',
                                                        'walker' => new BurstMikadoType1WalkerNavMenu()
                                                    ));
                                                    ?>
                                                </nav>
                                            <?php } ?>
                                            <div class="header_inner_left">
                                                <?php if($centered_logo && $header_bottom_appearance !== "stick menu_bottom") {
                                                    if(is_active_sidebar('header_left_from_logo')) {
                                                        dynamic_sidebar( 'header_left_from_logo' );
                                                    }
                                                } ?>
                                                <?php if(burst_mikado_is_main_menu_set()) { ?>
                                                    <div class="mobile_menu_button">
										<span>
											<?php $burst_mikado_icon_collections->getMobileMenuIcon($burst_mikado_options['header_icon_pack']); ?>
										</span>
                                                    </div>
                                                <?php } ?>



                                                <?php if (!(isset($burst_mikado_options['show_logo']) && $burst_mikado_options['show_logo'] == "no")){ ?>
                                                    <div class="logo_wrapper" <?php burst_mikado_inline_style($logo_wrapper_style); ?>>
                                                        <?php
                                                        if (isset($burst_mikado_options['logo_image']) && $burst_mikado_options['logo_image'] != ""){ $logo_image = $burst_mikado_options['logo_image'];}else{ $logo_image =  get_template_directory_uri().'/img/logo.png'; };
                                                        if (isset($burst_mikado_options['logo_image_light']) && $burst_mikado_options['logo_image_light'] != ""){ $logo_image_light = $burst_mikado_options['logo_image_light'];}else{ $logo_image_light =  get_template_directory_uri().'/img/logo.png'; };
                                                        if (isset($burst_mikado_options['logo_image_dark']) && $burst_mikado_options['logo_image_dark'] != ""){ $logo_image_dark = $burst_mikado_options['logo_image_dark'];}else{ $logo_image_dark =  get_template_directory_uri().'/img/logo_black.png'; };
                                                        if (isset($burst_mikado_options['logo_image_sticky']) && $burst_mikado_options['logo_image_sticky'] != ""){ $logo_image_sticky = $burst_mikado_options['logo_image_sticky'];}else{ $logo_image_sticky =  get_template_directory_uri().'/img/logo_black.png'; };
                                                        if (isset($burst_mikado_options['logo_image_popup']) && $burst_mikado_options['logo_image_popup'] != ""){ $logo_image_popup = $burst_mikado_options['logo_image_popup'];}else{ $logo_image_popup =  get_template_directory_uri().'/img/logo_white.png'; };
                                                        if (isset($burst_mikado_options['logo_image_fixed_hidden']) && $burst_mikado_options['logo_image_fixed_hidden'] != ""){ $logo_image_fixed_hidden = $burst_mikado_options['logo_image_fixed_hidden'];}else{ $logo_image_fixed_hidden =  get_template_directory_uri().'/img/logo.png'; };
                                                        if (isset($burst_mikado_options['logo_image_mobile']) && $burst_mikado_options['logo_image_mobile'] != ""){
                                                            $logo_image_mobile = $burst_mikado_options['logo_image_mobile'];
                                                        }else{
                                                            if(isset($burst_mikado_options['logo_image']) && $burst_mikado_options['logo_image'] != ""){
                                                                $logo_image_mobile = $burst_mikado_options['logo_image'];
                                                            }else{
                                                                $logo_image_mobile =  get_template_directory_uri().'/img/logo.png';
                                                            }
                                                        }
                                                        ?>
                                                        <div class="mkd_logo"><a <?php burst_mikado_inline_style($logo_wrapper_style); ?> href="<?php echo esc_url(home_url('/')); ?>"><img class="normal" src="<?php echo esc_url($logo_image); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><img class="light" src="<?php echo esc_url($logo_image_light); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><img class="dark" src="<?php echo esc_url($logo_image_dark); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><img class="sticky" src="<?php echo esc_url($logo_image_sticky); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><img class="mobile" src="<?php echo esc_url($logo_image_mobile); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><?php if($enable_popup_menu == 'yes'){ ?><img class="popup" src="<?php echo esc_url($logo_image_popup); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><?php } ?></a></div>
                                                        <?php if($header_bottom_appearance == "fixed_hiding") { ?>
                                                            <div class="mkd_logo_hidden"><a href="<?php echo esc_url(home_url('/')); ?>"><img alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>" src="<?php echo esc_url($logo_image_fixed_hidden); ?>" style="height: 100%;"></a></div>
                                                        <?php } ?>
                                                    </div>
                                                <?php } ?>


                                                <?php if($header_bottom_appearance == "stick menu_bottom" && is_active_sidebar('header_fixed_right')){ ?>
                                                    <div class="header_fixed_right_area">
                                                        <?php dynamic_sidebar('header_fixed_right'); ?>
                                                    </div>
                                                <?php } ?>
                                                <?php if($centered_logo && $header_bottom_appearance !== "stick menu_bottom") {
                                                    if(is_active_sidebar('header_right_from_logo')) {
                                                        dynamic_sidebar( 'header_right_from_logo' );
                                                    }
                                                } ?>
                                            </div>
                                            <?php if($header_bottom_appearance == "stick_with_left_right_menu") { ?>
                                                <nav class="main_menu drop_down right_side <?php echo esc_attr($menu_hover_animation_class); ?> <?php echo esc_attr($menu_dropdown_appearance_class); ?>" <?php burst_mikado_inline_style($divided_right_menu_padding); ?>>
                                                    <?php
                                                    wp_nav_menu( array( 'theme_location' => 'right-top-navigation' ,
                                                        'container'  => '',
                                                        'container_class' => '',
                                                        'menu_class' => '',
                                                        'menu_id' => '',
                                                        'fallback_cb' => 'top_navigation_fallback',
                                                        'link_before' => '<span>',
                                                        'link_after' => '</span>',
                                                        'walker' => new BurstMikadoType1WalkerNavMenu()
                                                    ));
                                                    ?>
                                                    <div class="side_menu_button_wrapper right">
                                                        <?php if(is_active_sidebar('header_bottom_right')) { ?>
                                                            <div class="header_bottom_right_widget_holder"><?php dynamic_sidebar('header_bottom_right'); ?></div>
                                                        <?php } ?>
                                                        <div class="side_menu_button">
                                                            <?php if(isset($burst_mikado_options['enable_search']) && $burst_mikado_options['enable_search'] == 'yes' && (!isset($burst_mikado_options['search_icon_in_header_top']) || $burst_mikado_options['search_icon_in_header_top'] == 'no')) { ?>
                                                                <a class="<?php echo esc_attr($header_search_type); ?> <?php echo esc_attr($header_button_size); ?>" href="javascript:void(0)">
                                                                    <?php if(isset($burst_mikado_options['search_icon_pack'])){
                                                                        $burst_mikado_icon_collections->getSearchIcon($burst_mikado_options['search_icon_pack']);
                                                                    } ?>
                                                                    <?php if(isset($burst_mikado_options['enable_search_icon_text']) && $burst_mikado_options['enable_search_icon_text'] == 'yes'){?>
                                                                        <span class="search_icon_text">
														<?php esc_html_e('Search', 'burst'); ?>
													</span>
                                                                    <?php } ?>
                                                                </a>

                                                                <?php if(strstr($header_search_type, 'fullscreen_search') && $fullscreen_search_animation=='from_circle'){ ?>
                                                                    <div class="fullscreen_search_overlay"></div>
                                                                <?php } ?>
                                                            <?php } ?>
                                                            <?php if($enable_popup_menu == "yes"){ ?>
                                                                <a href="javascript:void(0)" class="popup_menu <?php echo esc_attr($header_button_size.' '.$popup_menu_animation_style); ?>"><span class="popup_menu_inner"><i class="line">&nbsp;</i></span></a>
                                                            <?php } ?>
                                                            <?php if($enable_side_area == "yes" && $enable_popup_menu == 'no' && is_active_sidebar('sidearea')){ ?>
                                                                <a class="side_menu_button_link <?php echo esc_attr($header_button_size); ?>" href="javascript:void(0)">
                                                                    <?php echo burst_mikado_get_side_menu_icon_html(); ?></a>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </nav>

                                            <?php } ?>
                                            <?php if($header_bottom_appearance != "stick menu_bottom" && $header_bottom_appearance != "stick_with_left_right_menu"){ ?>
                                                <?php if($header_bottom_appearance == "fixed_hiding") { ?> <div class="holeder_for_hidden_menu"> <?php } //only for fixed with hiding menu ?>
                                                <?php if(!$centered_logo) { ?>
                                                    <div class="header_inner_right">
                                                        <div class="side_menu_button_wrapper right">
                                                            <?php if(is_active_sidebar('header_bottom_right')) { ?>
                                                                <div class="header_bottom_right_widget_holder"><?php dynamic_sidebar('header_bottom_right'); ?></div>
                                                            <?php } ?>
                                                            <div class="side_menu_button">

                                                                <?php if(isset($burst_mikado_options['enable_search']) && $burst_mikado_options['enable_search'] == 'yes'  && (!isset($burst_mikado_options['search_icon_in_header_top']) || $burst_mikado_options['search_icon_in_header_top'] == 'no')) { ?>
                                                                    <a class="<?php echo esc_attr($header_search_type); ?> <?php echo esc_attr($header_button_size); ?>" href="javascript:void(0)">
                                                                        <?php if(isset($burst_mikado_options['search_icon_pack'])){
                                                                            $burst_mikado_icon_collections->getSearchIcon($burst_mikado_options['search_icon_pack']);
                                                                        } ?>
                                                                        <?php if(isset($burst_mikado_options['enable_search_icon_text']) && $burst_mikado_options['enable_search_icon_text'] == 'yes'){?>
                                                                            <span class="search_icon_text">
															<?php esc_html_e('Search', 'burst'); ?>
														</span>
                                                                        <?php } ?>
                                                                    </a>

                                                                    <?php if(strstr($header_search_type, 'fullscreen_search') && $fullscreen_search_animation=='from_circle'){ ?>
                                                                        <div class="fullscreen_search_overlay"></div>
                                                                    <?php } ?>

                                                                <?php } ?>

                                                                <?php if($enable_popup_menu == "yes"){ ?>
                                                                    <a href="javascript:void(0)" class="popup_menu <?php echo esc_attr($header_button_size.' '.$popup_menu_animation_style); ?>"><span class="popup_menu_inner"><i class="line">&nbsp;</i></span></a>
                                                                <?php } ?>
                                                                <?php if($enable_side_area == "yes" && $enable_popup_menu == 'no' && is_active_sidebar('sidearea')){ ?>
                                                                    <a class="side_menu_button_link <?php echo esc_attr($header_button_size); ?>" href="javascript:void(0)">
                                                                        <?php echo burst_mikado_get_side_menu_icon_html(); ?></a>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <?php if($centered_logo == true && $enable_border_top_bottom_menu == true) { ?> <div class="main_menu_and_widget_holder"> <?php } //only for logo is centered ?>
                                                <?php if($centered_logo == true && $enable_search_left_sidearea_right == true ) { ?>
                                                    <div class="header_inner_right left_side">
                                                        <div class="side_menu_button_wrapper">
                                                            <div class="side_menu_button">
                                                                <?php if(isset($burst_mikado_options['enable_search']) && $burst_mikado_options['enable_search'] == 'yes'  && (!isset($burst_mikado_options['search_icon_in_header_top']) || $burst_mikado_options['search_icon_in_header_top'] == 'no')) { ?>
                                                                    <a class="<?php echo esc_attr($header_search_type); ?> <?php echo esc_attr($header_button_size); ?>" href="javascript:void(0)">
                                                                        <?php if(isset($burst_mikado_options['search_icon_pack'])){
                                                                            $burst_mikado_icon_collections->getSearchIcon($burst_mikado_options['search_icon_pack']);
                                                                        } ?>
                                                                        <?php if(isset($burst_mikado_options['enable_search_icon_text']) && $burst_mikado_options['enable_search_icon_text'] == 'yes'){?>
                                                                            <span class="search_icon_text">
																<?php esc_html_e('Search', 'burst'); ?>
															</span>
                                                                        <?php } ?>
                                                                    </a>
                                                                    <?php if(strstr($header_search_type, 'fullscreen_search') && $fullscreen_search_animation=='from_circle'){ ?>
                                                                        <div class="fullscreen_search_overlay"></div>
                                                                    <?php } ?>

                                                                <?php } ?>
                                                            </div>
                                                            <?php if(is_active_sidebar('header_bottom_left')) { ?>
                                                                <div class="header_bottom_right_widget_holder"><?php dynamic_sidebar('header_bottom_left'); ?></div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <nav class="main_menu drop_down <?php echo esc_attr($menu_hover_animation_class); ?> <?php  echo esc_attr($menu_dropdown_appearance_class); if($menu_position == "" && $header_bottom_appearance != "stick menu_bottom"){ echo ' right';} ?>">
                                                    <?php

                                                    wp_nav_menu( array( 'theme_location' => 'top-navigation' ,
                                                        'container'  => '',
                                                        'container_class' => '',
                                                        'menu_class' => '',
                                                        'menu_id' => '',
                                                        'fallback_cb' => 'top_navigation_fallback',
                                                        'link_before' => '<span>',
                                                        'link_after' => '</span>',
                                                        'walker' => new BurstMikadoType1WalkerNavMenu()
                                                    ));
                                                    ?>
                                                    <?php if(isset($burst_mikado_options['menu_item_hover_animation']) && $burst_mikado_options['menu_item_hover_animation'] == "underline_follow" ){ ?>
                                                        <span class="magic_follow"></span>
                                                    <?php } ?>
                                                </nav>
                                                <?php if($centered_logo) { ?>
                                                    <div class="header_inner_right">
                                                        <div class="side_menu_button_wrapper right">
                                                            <?php if(is_active_sidebar('header_bottom_right')) { ?>
                                                                <div class="header_bottom_right_widget_holder"><?php dynamic_sidebar('header_bottom_right'); ?></div>
                                                            <?php } ?>
                                                            <div class="side_menu_button">
                                                                <?php if($enable_search_left_sidearea_right == false && (isset($burst_mikado_options['enable_search']) && $burst_mikado_options['enable_search'] == 'yes')  && (!isset($burst_mikado_options['search_icon_in_header_top']) || $burst_mikado_options['search_icon_in_header_top'] == 'no')) { ?>
                                                                    <a class="<?php echo esc_attr($header_search_type); ?> <?php echo esc_attr($header_button_size); ?>" href="javascript:void(0)">
                                                                        <?php if(isset($burst_mikado_options['search_icon_pack'])){
                                                                            $burst_mikado_icon_collections->getSearchIcon($burst_mikado_options['search_icon_pack']);
                                                                        } ?>
                                                                        <?php if(isset($burst_mikado_options['enable_search_icon_text']) && $burst_mikado_options['enable_search_icon_text'] == 'yes'){?>
                                                                            <span class="search_icon_text">
																<?php esc_html_e('Search', 'burst'); ?>
															</span>
                                                                        <?php } ?>
                                                                    </a>
                                                                    <?php if(strstr($header_search_type, 'fullscreen_search') && $fullscreen_search_animation=='from_circle'){ ?>
                                                                        <div class="fullscreen_search_overlay"></div>
                                                                    <?php } ?>

                                                                <?php } ?>
                                                                <?php if($enable_popup_menu == "yes"){ ?>
                                                                    <a href="javascript:void(0)" class="popup_menu <?php echo esc_attr($header_button_size.' '.$popup_menu_animation_style); ?>"><span class="popup_menu_inner"><i class="line">&nbsp;</i></span></a>
                                                                <?php } ?>
                                                                <?php if($enable_side_area == "yes" && $enable_popup_menu == 'no' && is_active_sidebar('sidearea')){ ?>
                                                                    <a class="side_menu_button_link <?php echo esc_attr($header_button_size); ?>" href="javascript:void(0)">
                                                                        <?php echo burst_mikado_get_side_menu_icon_html(); ?>
                                                                    </a>
                                                                <?php } ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <?php if($centered_logo == true && $enable_border_top_bottom_menu == true) { ?> </div> <?php } //only for logo is centered ?>
                                                <?php if($header_bottom_appearance == "fixed_hiding") { ?> </div> <?php } //only for fixed with hiding menu ?>
                                            <?php }else if($header_bottom_appearance == "stick menu_bottom"){ ?>
                                            <div class="header_menu_bottom clearfix">
                                                <div class="header_menu_bottom_inner">
                                                    <?php if($centered_logo) { ?>
                                                    <div class="main_menu_header_inner_right_holder with_center_logo">
                                                        <?php } else { ?>
                                                        <div class="main_menu_header_inner_right_holder">
                                                            <?php } ?>
                                                            <nav class="main_menu drop_down <?php echo esc_attr($menu_dropdown_appearance_class); ?>">
                                                                <?php
                                                                wp_nav_menu( array(
                                                                    'theme_location' => 'top-navigation' ,
                                                                    'container'  => '',
                                                                    'container_class' => '',
                                                                    'menu_class' => 'clearfix',
                                                                    'menu_id' => '',
                                                                    'fallback_cb' => 'top_navigation_fallback',
                                                                    'link_before' => '<span>',
                                                                    'link_after' => '</span>',
                                                                    'walker' => new BurstMikadoType1WalkerNavMenu()
                                                                ));
                                                                ?>
                                                                <?php if(isset($burst_mikado_options['menu_item_hover_animation']) && $burst_mikado_options['menu_item_hover_animation'] == "underline_follow" ){ ?>
                                                                    <span class="magic_follow"></span>
                                                                <?php } ?>
                                                            </nav>
                                                            <div class="header_inner_right">
                                                                <div class="side_menu_button_wrapper right">
                                                                    <?php if(is_active_sidebar('header_bottom_right')) { ?>
                                                                        <div class="header_bottom_right_widget_holder"><?php dynamic_sidebar('header_bottom_right'); ?></div>
                                                                    <?php } ?>
                                                                    <div class="side_menu_button">

                                                                        <?php if(isset($burst_mikado_options['enable_search']) && $burst_mikado_options['enable_search'] == 'yes'  && (!isset($burst_mikado_options['search_icon_in_header_top']) || $burst_mikado_options['search_icon_in_header_top'] == 'no')) { ?>
                                                                            <a class="<?php echo esc_attr($header_search_type); ?> <?php echo esc_attr($header_button_size); ?>" href="javascript:void(0)">
                                                                                <?php if(isset($burst_mikado_options['search_icon_pack'])){
                                                                                    $burst_mikado_icon_collections->getSearchIcon($burst_mikado_options['search_icon_pack']);
                                                                                } ?>
                                                                                <?php if(isset($burst_mikado_options['enable_search_icon_text']) && $burst_mikado_options['enable_search_icon_text'] == 'yes'){?>
                                                                                    <span class="search_icon_text">
																	<?php esc_html_e('Search', 'burst'); ?>
																</span>
                                                                                <?php } ?>
                                                                            </a>

                                                                            <?php if(strstr($header_search_type, 'fullscreen_search') && $fullscreen_search_animation=='from_circle'){ ?>
                                                                                <div class="fullscreen_search_overlay"></div>
                                                                            <?php } ?>

                                                                        <?php } ?>

                                                                        <?php if($enable_popup_menu == "yes"){ ?>
                                                                            <a href="javascript:void(0)" class="popup_menu <?php echo esc_attr($header_button_size.' '.$popup_menu_animation_style); ?>"><span class="popup_menu_inner"><i class="line">&nbsp;</i></span></a>
                                                                        <?php } ?>
                                                                        <?php if($enable_side_area == "yes" && $enable_popup_menu == 'no' && is_active_sidebar('sidearea')){ ?>
                                                                            <a class="side_menu_button_link <?php echo esc_attr($header_button_size); ?>" href="javascript:void(0)">
                                                                                <?php echo burst_mikado_get_side_menu_icon_html(); ?>
                                                                            </a>
                                                                        <?php } ?>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                                <nav class="mobile_menu">
                                                    <?php
                                                    if($header_bottom_appearance == "stick_with_left_right_menu") {
                                                        echo '<ul>';
                                                        wp_nav_menu( array( 'theme_location' => 'left-top-navigation' ,
                                                            'container'  => '',
                                                            'container_class' => '',
                                                            'menu_class' => '',
                                                            'menu_id' => '',
                                                            'fallback_cb' => '',
                                                            'link_before' => '<span>',
                                                            'link_after' => '</span>',
                                                            'walker' => new BurstMikadoType4WalkerNavMenu(),
                                                            'items_wrap'      => '%3$s'
                                                        ));
                                                        wp_nav_menu( array( 'theme_location' => 'right-top-navigation' ,
                                                            'container'  => '',
                                                            'container_class' => '',
                                                            'menu_class' => '',
                                                            'menu_id' => '',
                                                            'fallback_cb' => '',
                                                            'link_before' => '<span>',
                                                            'link_after' => '</span>',
                                                            'walker' => new BurstMikadoType4WalkerNavMenu(),
                                                            'items_wrap'      => '%3$s'
                                                        ));
                                                        echo '</ul>';
                                                    }else{
                                                        wp_nav_menu( array( 'theme_location' => 'top-navigation' ,
                                                            'container'  => '',
                                                            'container_class' => '',
                                                            'menu_class' => '',
                                                            'menu_id' => '',
                                                            'fallback_cb' => 'top_navigation_fallback',
                                                            'link_before' => '<span>',
                                                            'link_after' => '</span>',
                                                            'walker' => new BurstMikadoType2WalkerNavMenu()
                                                        ));
                                                    }
                                                    ?>
                                                </nav>
                                                <?php if($header_in_grid){ ?>
                                                <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?></div><?php } ?>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                </header>
            <?php } else if($header_bottom_appearance == "fixed_top_header"){ ?>

                <?php //FIXED HEADER TOP Header Type ?>

                <header class="<?php burst_mikado_header_classes(); ?>">
                    <div class="header_inner clearfix">
                        <!--insert start-->
                        <?php if(isset($burst_mikado_options['enable_search']) && $burst_mikado_options['enable_search'] == "yes" ){ ?>
                            <?php  if(isset($burst_mikado_options['search_type']) && $burst_mikado_options['search_type'] == "search_covers_header") { ?>
                                <form role="search" action="<?php echo esc_url(home_url('/')); ?>" class="mkd_search_form_3" method="get">
                                    <?php if($header_in_grid){ ?>
                                    <div class="container">
                                        <div class="container_inner clearfix">
                                            <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?><div class="overlapping_content_margin"><?php } ?>
                                                <?php } ?>
                                                <div class="form_holder_outer">
                                                    <div class="form_holder">
                                                        <div class="form_holder_inner">
                                                            <input type="text" placeholder="<?php esc_html_e('Search', 'burst'); ?>" name="s" class="mkd_search_field" autocomplete="off" />
                                                            <div class="mkd_search_close">
                                                                <a href="#">
                                                                    <?php if(isset($burst_mikado_options['header_icon_pack'])) { $burst_mikado_icon_collections->getSearchClose($burst_mikado_options['header_icon_pack']); } ?>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if($header_in_grid){ ?>
                                                <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?></div><?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                </form>
                            <?php } ?>
                        <?php } ?>
                        <!--insert end-->
                        <div class="header_top_bottom_holder">
                            <?php if($display_header_top == "yes"){ ?>
                                <div class="top_header clearfix" <?php burst_mikado_inline_style($header_top_color_per_page); ?> >
                                    <?php if($header_in_grid){ ?>
                                    <div class="container">
                                        <div class="container_inner clearfix" >
                                            <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?><div class="overlapping_content_margin"><?php } ?>
                                                <?php } ?>
                                                <div class="left">
                                                    <div class="inner">
                                                        <nav class="main_menu drop_down <?php echo esc_attr($menu_hover_animation_class); ?> <?php echo esc_attr($menu_dropdown_appearance_class); ?>">
                                                            <?php
                                                            wp_nav_menu( array(
                                                                'theme_location' => 'top-navigation' ,
                                                                'container'  => '',
                                                                'container_class' => '',
                                                                'menu_class' => 'clearfix',
                                                                'menu_id' => '',
                                                                'fallback_cb' => 'top_navigation_fallback',
                                                                'link_before' => '<span>',
                                                                'link_after' => '</span>',
                                                                'walker' => new BurstMikadoType1WalkerNavMenu()
                                                            ));
                                                            ?>
                                                            <?php if(isset($burst_mikado_options['menu_item_hover_animation']) && $burst_mikado_options['menu_item_hover_animation'] == "underline_follow" ){ ?>
                                                                <span class="magic_follow"></span>
                                                            <?php } ?>
                                                        </nav>
                                                        <?php if(burst_mikado_is_main_menu_set()) { ?>
                                                            <div class="mobile_menu_button"><span>
													<?php $burst_mikado_icon_collections->getMobileMenuIcon($burst_mikado_options['header_icon_pack']); ?>
												</span>
                                                            </div>
                                                        <?php } ?>

                                                    </div>
                                                </div>
                                                <div class="right">
                                                    <div class="inner">
                                                        <div class="side_menu_button_wrapper right">
                                                            <div class="header_bottom_right_widget_holder">
                                                                <?php if(is_active_sidebar('header_right')) {
                                                                    dynamic_sidebar('header_right');
                                                                } ?>
                                                            </div>
                                                            <div class="side_menu_button">
                                                                <?php if(isset($burst_mikado_options['enable_search']) && $burst_mikado_options['enable_search'] == 'yes') { ?>
                                                                    <a class="search_covers_header <?php echo esc_attr($header_button_size); ?>" href="javascript:void(0)">
                                                                        <?php if(isset($burst_mikado_options['search_icon_pack'])){ $burst_mikado_icon_collections->getSearchIcon($burst_mikado_options['search_icon_pack']); } ?>
                                                                    </a>
                                                                <?php } ?>

                                                                <?php if($enable_popup_menu == "yes"){ ?>
                                                                    <a href="javascript:void(0)" class="popup_menu <?php echo esc_attr($header_button_size.' '.$popup_menu_animation_style); ?>"><span class="popup_menu_inner"><i class="line">&nbsp;</i></span></a>
                                                                <?php } ?>
                                                                <?php if($enable_side_area == "yes" && $enable_popup_menu == 'no' && is_active_sidebar('sidearea')){ ?>
                                                                    <a class="side_menu_button_link <?php echo esc_attr($header_button_size); ?>" href="javascript:void(0)">
                                                                        <?php echo burst_mikado_get_side_menu_icon_html(); ?>
                                                                    </a>
                                                                <?php } ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <nav class="mobile_menu">
                                                    <?php
                                                    wp_nav_menu( array( 'theme_location' => 'top-navigation' ,
                                                        'container'  => '',
                                                        'container_class' => '',
                                                        'menu_class' => '',
                                                        'menu_id' => '',
                                                        'fallback_cb' => 'top_navigation_fallback',
                                                        'link_before' => '<span>',
                                                        'link_after' => '</span>',
                                                        'walker' => new BurstMikadoType2WalkerNavMenu()
                                                    ));

                                                    ?>
                                                </nav>
                                                <?php if($header_in_grid){ ?>
                                                <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?></div><?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                </div>
                            <?php } ?>
                            <div class="bottom_header clearfix" <?php burst_mikado_inline_style($header_color_per_page); ?> >
                                <?php if($header_in_grid){ ?>
                                <div class="container">
                                    <div class="container_inner clearfix" <?php burst_mikado_inline_style($header_bottom_border_style); ?>>
                                        <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?><div class="overlapping_content_margin"><?php } ?>
                                            <?php } ?>
                                            <div class="header_inner_center">

                                                <?php if (!(isset($burst_mikado_options['show_logo']) && $burst_mikado_options['show_logo'] == "no")){ ?>
                                                    <div class="logo_wrapper" <?php burst_mikado_inline_style($logo_wrapper_style); ?>>
                                                        <?php
                                                        if (isset($burst_mikado_options['logo_image']) && $burst_mikado_options['logo_image'] != ""){ $logo_image = $burst_mikado_options['logo_image'];}else{ $logo_image =  get_template_directory_uri().'/img/logo.png'; };
                                                        if (isset($burst_mikado_options['logo_image_light']) && $burst_mikado_options['logo_image_light'] != ""){ $logo_image_light = $burst_mikado_options['logo_image_light'];}else{ $logo_image_light =  get_template_directory_uri().'/img/logo.png'; };
                                                        if (isset($burst_mikado_options['logo_image_dark']) && $burst_mikado_options['logo_image_dark'] != ""){ $logo_image_dark = $burst_mikado_options['logo_image_dark'];}else{ $logo_image_dark =  get_template_directory_uri().'/img/logo_black.png'; };
                                                        if (isset($burst_mikado_options['logo_image_sticky']) && $burst_mikado_options['logo_image_sticky'] != ""){ $logo_image_sticky = $burst_mikado_options['logo_image_sticky'];}else{ $logo_image_sticky =  get_template_directory_uri().'/img/logo_black.png'; };
                                                        if (isset($burst_mikado_options['logo_image_popup']) && $burst_mikado_options['logo_image_popup'] != ""){ $logo_image_popup = $burst_mikado_options['logo_image_popup'];}else{ $logo_image_popup =  get_template_directory_uri().'/img/logo_white.png'; };
                                                        if (isset($burst_mikado_options['logo_image_fixed_hidden']) && $burst_mikado_options['logo_image_fixed_hidden'] != ""){ $logo_image_fixed_hidden = $burst_mikado_options['logo_image_fixed_hidden'];}else{ $logo_image_fixed_hidden =  get_template_directory_uri().'/img/logo.png'; };
                                                        if (isset($burst_mikado_options['logo_image_mobile']) && $burst_mikado_options['logo_image_mobile'] != ""){
                                                            $logo_image_mobile = $burst_mikado_options['logo_image_mobile'];
                                                        }else{
                                                            if(isset($burst_mikado_options['logo_image']) && $burst_mikado_options['logo_image'] != ""){
                                                                $logo_image_mobile = $burst_mikado_options['logo_image'];
                                                            }else{
                                                                $logo_image_mobile =  get_template_directory_uri().'/img/logo.png';
                                                            }
                                                        }
                                                        ?>
                                                        <div class="mkd_logo"><a <?php burst_mikado_inline_style($logo_wrapper_style); ?> href="<?php echo esc_url(home_url('/')); ?>"><img class="normal" src="<?php echo esc_url($logo_image); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><img class="light" src="<?php echo esc_url($logo_image_light); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><img class="dark" src="<?php echo esc_url($logo_image_dark); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><img class="sticky" src="<?php echo esc_url($logo_image_sticky); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><img class="mobile" src="<?php echo esc_url($logo_image_mobile); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><?php if($enable_popup_menu == 'yes'){ ?><img class="popup" src="<?php echo esc_url($logo_image_popup); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><?php } ?></a></div>

                                                    </div>
                                                <?php } ?>
                                                <?php if(is_active_sidebar('header_bottom_center')) {
                                                    dynamic_sidebar('header_bottom_center');
                                                } ?>
                                            </div>
                                            <?php if($header_in_grid){ ?>
                                            <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?></div><?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </header>

            <?php } else if($header_bottom_appearance == "fixed fixed_minimal"){ ?>

                <?php //FIXED MINIMAL Header Type ?>

                <header class="<?php burst_mikado_header_classes(); ?>">
                    <div class="header_inner clearfix">
                        <?php if(isset($burst_mikado_options['enable_search']) && $burst_mikado_options['enable_search'] == "yes" ){ ?>
                            <?php if( ($header_color_transparency_per_page == '' || $header_color_transparency_per_page == '1') && ($header_color_transparency_on_scroll=='' || $header_color_transparency_on_scroll == '1') &&  isset($burst_mikado_options['search_type']) && $burst_mikado_options['search_type'] == "search_slides_from_header_bottom"){ ?>
                                <form role="search" action="<?php echo esc_url(home_url('/')); ?>" class="mkd_search_form_2" method="get">
                                    <?php if($header_in_grid){ ?>
                                    <div class="container">
                                        <div class="container_inner clearfix">
                                            <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?><div class="overlapping_content_margin"><?php } ?>
                                                <?php } ?>
                                                <div class="form_holder_outer">
                                                    <div class="form_holder">
                                                        <input type="text" placeholder="<?php esc_html_e('Search', 'burst'); ?>" name="s" class="mkd_search_field" autocomplete="off" />
                                                        <input type="submit" class="mkd_search_submit" value="&#xf002;" />
                                                    </div>
                                                </div>
                                                <?php if($header_in_grid){ ?>
                                                <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?></div><?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                </form>
                            <?php } else if(isset($burst_mikado_options['search_type']) && $burst_mikado_options['search_type'] == "search_covers_header") { ?>
                                <form role="search" action="<?php echo esc_url(home_url('/')); ?>" class="mkd_search_form_3" method="get">
                                    <?php if($header_in_grid){ ?>
                                    <div class="container">
                                        <div class="container_inner clearfix">
                                            <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?><div class="overlapping_content_margin"><?php } ?>
                                                <?php } ?>
                                                <div class="form_holder_outer">
                                                    <div class="form_holder">
                                                        <div class="form_holder_inner">
                                                            <input type="text" placeholder="<?php esc_html_e('Search', 'burst'); ?>" name="s" class="mkd_search_field" autocomplete="off" />
                                                            <div class="mkd_search_close">
                                                                <a href="#">
                                                                    <?php if(isset($burst_mikado_options['header_icon_pack'])) { $burst_mikado_icon_collections->getSearchClose($burst_mikado_options['header_icon_pack']); } ?>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if($header_in_grid){ ?>
                                                <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?></div><?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                </form>
                            <?php } ?>
                        <?php } ?>
                        <div class="header_top_bottom_holder">
                            <?php if($display_header_top == "yes"){ ?>
                                <div class="header_top clearfix	<?php if(isset($burst_mikado_options['header_top_has_background_pattern']) && $burst_mikado_options['header_top_has_background_pattern'] == "yes") {echo "has_pattern";}?>" <?php burst_mikado_inline_style($header_top_color_per_page); ?> >
                                    <?php if($header_in_grid){ ?>
                                    <div class="container">
                                        <div class="container_inner clearfix" >
                                            <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?><div class="overlapping_content_margin"><?php } ?>
                                                <?php } ?>
                                                <div class="left">
                                                    <div class="inner">
                                                        <?php if(is_active_sidebar('header_left')) {
                                                            dynamic_sidebar('header_left');
                                                        } ?>
                                                    </div>
                                                </div>
                                                <div class="right">
                                                    <div class="inner">
                                                        <?php if(is_active_sidebar('header_right')) {
                                                            dynamic_sidebar('header_right');
                                                        } ?>
                                                        <?php if(isset($burst_mikado_options['enable_search']) && $burst_mikado_options['enable_search'] == 'yes'  && isset($burst_mikado_options['search_icon_in_header_top']) && $burst_mikado_options['search_icon_in_header_top'] == 'yes'){ ?>
                                                            <div class="header_top_side_button">
                                                                <a class="<?php echo esc_attr($header_search_type); ?> <?php echo esc_attr($header_button_size); ?>" href="javascript:void(0)">
                                                                    <?php if(isset($burst_mikado_options['search_icon_pack'])){
                                                                        $burst_mikado_icon_collections->getSearchIcon($burst_mikado_options['search_icon_pack']);
                                                                    } ?>
                                                                    <?php if(isset($burst_mikado_options['enable_search_icon_text']) && $burst_mikado_options['enable_search_icon_text'] == 'yes'){?>
                                                                        <span class="search_icon_text">
																<?php esc_html_e('Search', 'burst'); ?>
															</span>
                                                                    <?php } ?>
                                                                </a>
                                                                <?php if(strstr($header_search_type, 'fullscreen_search') && $fullscreen_search_animation=='from_circle'){ ?>
                                                                    <div class="fullscreen_search_overlay"></div>
                                                                <?php } ?>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <?php if($header_in_grid){ ?>
                                                <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?></div><?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                </div>
                            <?php } ?>
                            <div class="header_bottom <?php echo esc_attr($header_bottom_class) ;?> clearfix" <?php burst_mikado_inline_style($header_color_per_page); ?> >
                                <?php if($header_in_grid){ ?>
                                <div class="container">
                                    <div class="container_inner clearfix" <?php burst_mikado_inline_style($header_bottom_border_style); ?>>
                                        <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?><div class="overlapping_content_margin"><?php } ?>
                                            <?php } ?>
                                            <div class="header_inner_left">
                                                <div class="side_menu_button_wrapper left">
                                                    <div class="side_menu_button">
                                                        <?php if($enable_popup_menu == "yes"){ ?>
                                                            <a href="javascript:void(0)" class="popup_menu <?php echo esc_attr($header_button_size.' '.$popup_menu_animation_style); ?>"><span class="popup_menu_inner"><i class="line">&nbsp;</i></span></a>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if (!(isset($burst_mikado_options['show_logo']) && $burst_mikado_options['show_logo'] == "no")){ ?>
                                                <div class="logo_wrapper" <?php burst_mikado_inline_style($logo_wrapper_style); ?>>
                                                    <?php
                                                    if (isset($burst_mikado_options['logo_image']) && $burst_mikado_options['logo_image'] != ""){ $logo_image = $burst_mikado_options['logo_image'];}else{ $logo_image =  get_template_directory_uri().'/img/logo.png'; };
                                                    if (isset($burst_mikado_options['logo_image_light']) && $burst_mikado_options['logo_image_light'] != ""){ $logo_image_light = $burst_mikado_options['logo_image_light'];}else{ $logo_image_light =  get_template_directory_uri().'/img/logo.png'; };
                                                    if (isset($burst_mikado_options['logo_image_dark']) && $burst_mikado_options['logo_image_dark'] != ""){ $logo_image_dark = $burst_mikado_options['logo_image_dark'];}else{ $logo_image_dark =  get_template_directory_uri().'/img/logo_black.png'; };
                                                    if (isset($burst_mikado_options['logo_image_sticky']) && $burst_mikado_options['logo_image_sticky'] != ""){ $logo_image_sticky = $burst_mikado_options['logo_image_sticky'];}else{ $logo_image_sticky =  get_template_directory_uri().'/img/logo_black.png'; };
                                                    if (isset($burst_mikado_options['logo_image_popup']) && $burst_mikado_options['logo_image_popup'] != ""){ $logo_image_popup = $burst_mikado_options['logo_image_popup'];}else{ $logo_image_popup =  get_template_directory_uri().'/img/logo_white.png'; };
                                                    if (isset($burst_mikado_options['logo_image_fixed_hidden']) && $burst_mikado_options['logo_image_fixed_hidden'] != ""){ $logo_image_fixed_hidden = $burst_mikado_options['logo_image_fixed_hidden'];}else{ $logo_image_fixed_hidden =  get_template_directory_uri().'/img/logo.png'; };
                                                    if (isset($burst_mikado_options['logo_image_mobile']) && $burst_mikado_options['logo_image_mobile'] != ""){
                                                        $logo_image_mobile = $burst_mikado_options['logo_image_mobile'];
                                                    }else{
                                                        if(isset($burst_mikado_options['logo_image']) && $burst_mikado_options['logo_image'] != ""){
                                                            $logo_image_mobile = $burst_mikado_options['logo_image'];
                                                        }else{
                                                            $logo_image_mobile =  get_template_directory_uri().'/img/logo.png';
                                                        }
                                                    }
                                                    ?>
                                                    <div class="mkd_logo"><a <?php burst_mikado_inline_style($logo_wrapper_style); ?> href="<?php echo esc_url(home_url('/')); ?>"><img class="normal" src="<?php echo esc_url($logo_image); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><img class="light" src="<?php echo esc_url($logo_image_light); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><img class="dark" src="<?php echo esc_url($logo_image_dark); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><img class="sticky" src="<?php echo esc_url($logo_image_sticky); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><img class="mobile" src="<?php echo esc_url($logo_image_mobile); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><?php if($enable_popup_menu == 'yes'){ ?><img class="popup" src="<?php echo esc_url($logo_image_popup); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><?php } ?></a></div>

                                                </div>
                                            <?php } ?>
                                            <div class="header_inner_right">
                                                <div class="side_menu_button_wrapper right">
                                                    <div class="side_menu_button">
                                                        <?php if(isset($burst_mikado_options['enable_search']) && $burst_mikado_options['enable_search'] == 'yes'  && (!isset($burst_mikado_options['search_icon_in_header_top']) || $burst_mikado_options['search_icon_in_header_top'] == 'no')) { ?>
                                                            <a class="<?php echo esc_attr($header_search_type); ?> <?php echo esc_attr($header_button_size); ?>" href="javascript:void(0)">
                                                                <?php if(isset($burst_mikado_options['search_icon_pack'])){
                                                                    $burst_mikado_icon_collections->getSearchIcon($burst_mikado_options['search_icon_pack']);
                                                                } ?>
                                                                <?php if(isset($burst_mikado_options['enable_search_icon_text']) && $burst_mikado_options['enable_search_icon_text'] == 'yes'){?>
                                                                    <span class="search_icon_text">
															<?php esc_html_e('Search', 'burst'); ?>
														</span>
                                                                <?php } ?>
                                                            </a>
                                                            <?php if(strstr($header_search_type, 'fullscreen_search') && $fullscreen_search_animation=='from_circle'){ ?>
                                                                <div class="fullscreen_search_overlay"></div>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if($header_in_grid){ ?>
                                            <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?></div><?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </header>

                <?php //STICK COMPOUND header type ?>

            <?php } else if($header_bottom_appearance == "stick compound"){ ?>
                <header class="<?php burst_mikado_header_classes(); ?>">
                    <div class="header_inner clearfix">
                        <?php if(isset($burst_mikado_options['enable_search']) && $burst_mikado_options['enable_search'] == "yes" ){ ?>
                            <?php if( ($header_color_transparency_per_page == '' || $header_color_transparency_per_page == '1') && ($header_color_transparency_on_scroll=='' || $header_color_transparency_on_scroll == '1') &&  isset($burst_mikado_options['search_type']) && $burst_mikado_options['search_type'] == "search_slides_from_header_bottom"){ ?>
                                <form role="search" action="<?php echo esc_url(home_url('/')); ?>" class="mkd_search_form_2" method="get">
                                    <?php if($header_in_grid){ ?>
                                    <div class="container">
                                        <div class="container_inner clearfix">
                                            <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?><div class="overlapping_content_margin"><?php } ?>
                                                <?php } ?>
                                                <div class="form_holder_outer">
                                                    <div class="form_holder">
                                                        <input type="text" placeholder="<?php esc_html_e('Search', 'burst'); ?>" name="s" class="mkd_search_field" autocomplete="off" />
                                                        <!--<input type="submit" class="mkd_search_submit" value="<?php /*if (isset($burst_mikado_options['header_icon_pack'])) { $burst_mikado_icon_collections->getSearchIconValue($burst_mikado_options['header_icon_pack']); } */?>"/>-->
                                                        <input type="submit" class="mkd_search_submit" value="&#xf002" />
                                                    </div>
                                                </div>
                                                <?php if($header_in_grid){ ?>
                                                <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?></div><?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                </form>
                            <?php } else if(isset($burst_mikado_options['search_type']) && $burst_mikado_options['search_type'] == "search_covers_header") { ?>
                                <form role="search" action="<?php echo esc_url(home_url('/')); ?>" class="mkd_search_form_3" method="get">
                                    <?php if($header_in_grid){ ?>
                                    <div class="container">
                                        <div class="container_inner clearfix">
                                            <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?><div class="overlapping_content_margin"><?php } ?>
                                                <?php } ?>
                                                <div class="form_holder_outer">
                                                    <div class="form_holder">
                                                        <div class="form_holder_inner">
                                                            <input type="text" placeholder="<?php esc_html_e('Search', 'burst'); ?>" name="s" class="mkd_search_field" autocomplete="off" />

                                                            <div class="mkd_search_close">
                                                                <a href="#">
                                                                    <?php if(isset($burst_mikado_options['header_icon_pack'])) { $burst_mikado_icon_collections->getSearchClose($burst_mikado_options['header_icon_pack']); } ?>
                                                                    <!--<i class="fa fa-times"></i>-->
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if($header_in_grid){ ?>
                                                <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?></div><?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                </form>
                            <?php } else if(isset($burst_mikado_options['search_type']) && $burst_mikado_options['search_type'] == "search_slides_from_window_top") { ?>
                                <form role="search" id="searchform" action="<?php echo esc_url(home_url('/')); ?>" class="mkd_search_form" method="get">
                                    <?php if($header_in_grid){ ?>
                                    <div class="container">
                                        <div class="container_inner clearfix">
                                            <?php } ?>
                                            <i class="fa fa-search"></i>
                                            <input type="text" placeholder="<?php esc_attr_e('Search', 'burst'); ?>" name="s" class="mkd_search_field" autocomplete="off" />
                                            <input type="submit" value="<?php esc_attr_e('Search', 'burst'); ?>" />
                                            <div class="mkd_search_close">
                                                <a href="#">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                            <?php if($header_in_grid){ ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                </form>
                            <?php } ?>
                        <?php } ?>
                        <div class="header_top_bottom_holder">
                            <?php if($display_header_top == "yes"){ ?>
                                <div class="header_top clearfix	<?php if(isset($burst_mikado_options['header_top_has_background_pattern']) && $burst_mikado_options['header_top_has_background_pattern'] == "yes") {echo "has_pattern";}?>" <?php burst_mikado_inline_style($header_top_color_per_page); ?> >
                                    <?php if($header_in_grid){ ?>
                                    <div class="container">
                                        <div class="container_inner clearfix" >
                                            <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?><div class="overlapping_content_margin"><?php } ?>
                                                <?php } ?>
                                                <div class="left">
                                                    <div class="inner">
                                                        <?php if(is_active_sidebar('header_left')) {
                                                            dynamic_sidebar('header_left');
                                                        } ?>
                                                    </div>
                                                </div>
                                                <div class="right">
                                                    <div class="inner">
                                                        <?php if(is_active_sidebar('header_right')) {
                                                            dynamic_sidebar('header_right');
                                                        } ?>
                                                        <?php if(isset($burst_mikado_options['enable_search']) && $burst_mikado_options['enable_search'] == 'yes'  && isset($burst_mikado_options['search_icon_in_header_top']) && $burst_mikado_options['search_icon_in_header_top'] == 'yes'){ ?>
                                                            <div class="header_top_side_button">
                                                                <a class="<?php echo esc_attr($header_search_type); ?> <?php echo esc_attr($header_button_size); ?>" href="javascript:void(0)">
                                                                    <?php if(isset($burst_mikado_options['search_icon_pack'])){
                                                                        $burst_mikado_icon_collections->getSearchIcon($burst_mikado_options['search_icon_pack']);
                                                                    } ?>
                                                                    <?php if(isset($burst_mikado_options['enable_search_icon_text']) && $burst_mikado_options['enable_search_icon_text'] == 'yes'){?>
                                                                        <span class="search_icon_text">
													<?php esc_html_e('Search', 'burst'); ?>
												</span>
                                                                    <?php } ?>
                                                                </a>
                                                                <?php if(strstr($header_search_type, 'fullscreen_search') && $fullscreen_search_animation=='from_circle'){ ?>
                                                                    <div class="fullscreen_search_overlay"></div>
                                                                <?php } ?>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <?php if($header_in_grid){ ?>
                                                <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?></div><?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                </div>
                            <?php } ?>
                            <div class="header_bottom <?php echo esc_attr($header_bottom_class) ;?> clearfix <?php if
                            ($menu_item_icon_position=="top"){echo 'with_large_icons ';}?>" <?php burst_mikado_inline_style($header_color_per_page); ?> >
                                <?php if($header_in_grid){ ?>
                                <div class="container">
                                    <div class="container_inner clearfix" <?php burst_mikado_inline_style($header_bottom_border_style); ?>>
                                        <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?><div class="overlapping_content_margin"><?php } ?>
                                            <?php } ?>
                                            <div class="header_inner_left">
                                                <?php if(burst_mikado_is_main_menu_set()) { ?>
                                                    <div class="mobile_menu_button">
									<span>
										<?php $burst_mikado_icon_collections->getMobileMenuIcon($burst_mikado_options['header_icon_pack']); ?>
									</span>
                                                    </div>
                                                <?php } ?>
                                                <?php if (!(isset($burst_mikado_options['show_logo']) && $burst_mikado_options['show_logo'] == "no")){ ?>
                                                    <div class="logo_wrapper" <?php burst_mikado_inline_style($logo_wrapper_style); ?>>
                                                        <?php
                                                        if (isset($burst_mikado_options['logo_image']) && $burst_mikado_options['logo_image'] != ""){ $logo_image = $burst_mikado_options['logo_image'];}else{ $logo_image =  get_template_directory_uri().'/img/logo.png'; };
                                                        if (isset($burst_mikado_options['logo_image_light']) && $burst_mikado_options['logo_image_light'] != ""){ $logo_image_light = $burst_mikado_options['logo_image_light'];}else{ $logo_image_light =  get_template_directory_uri().'/img/logo.png'; };
                                                        if (isset($burst_mikado_options['logo_image_dark']) && $burst_mikado_options['logo_image_dark'] != ""){ $logo_image_dark = $burst_mikado_options['logo_image_dark'];}else{ $logo_image_dark =  get_template_directory_uri().'/img/logo_black.png'; };
                                                        if (isset($burst_mikado_options['logo_image_sticky']) && $burst_mikado_options['logo_image_sticky'] != ""){ $logo_image_sticky = $burst_mikado_options['logo_image_sticky'];}else{ $logo_image_sticky =  get_template_directory_uri().'/img/logo_black.png'; };
                                                        if (isset($burst_mikado_options['logo_image_popup']) && $burst_mikado_options['logo_image_popup'] != ""){ $logo_image_popup = $burst_mikado_options['logo_image_popup'];}else{ $logo_image_popup =  get_template_directory_uri().'/img/logo_white.png'; };
                                                        if (isset($burst_mikado_options['logo_image_fixed_hidden']) && $burst_mikado_options['logo_image_fixed_hidden'] != ""){ $logo_image_fixed_hidden = $burst_mikado_options['logo_image_fixed_hidden'];}else{ $logo_image_fixed_hidden =  get_template_directory_uri().'/img/logo.png'; };
                                                        if (isset($burst_mikado_options['logo_image_mobile']) && $burst_mikado_options['logo_image_mobile'] != ""){
                                                            $logo_image_mobile = $burst_mikado_options['logo_image_mobile'];
                                                        }else{
                                                            if(isset($burst_mikado_options['logo_image']) && $burst_mikado_options['logo_image'] != ""){
                                                                $logo_image_mobile = $burst_mikado_options['logo_image'];
                                                            }else{
                                                                $logo_image_mobile =  get_template_directory_uri().'/img/logo.png';
                                                            }
                                                        }
                                                        ?>
                                                        <div class="mkd_logo"><a <?php burst_mikado_inline_style($logo_wrapper_style); ?> href="<?php echo esc_url(home_url('/')); ?>"><img class="normal" src="<?php echo esc_url($logo_image); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><img class="light" src="<?php echo esc_url($logo_image_light); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><img class="dark" src="<?php echo esc_url($logo_image_dark); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><img class="sticky" src="<?php echo esc_url($logo_image_sticky); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><img class="mobile" src="<?php echo esc_url($logo_image_mobile); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><?php if($enable_popup_menu == 'yes'){ ?><img class="popup" src="<?php echo esc_url($logo_image_popup); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><?php } ?></a></div>
                                                        <?php if($header_bottom_appearance == "fixed_hiding") { ?>
                                                            <div class="mkd_logo_hidden"><a href="<?php echo esc_url(home_url('/')); ?>"><img alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>" src="<?php echo esc_url($logo_image_fixed_hidden); ?>" style="height: 100%;"></a></div>
                                                        <?php } ?>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <div class="bottom_right">
                                                <div class="header_inner_right">
                                                    <div class="side_menu_button_wrapper right">
                                                        <div class="side_menu_button">
                                                            <?php if(isset($burst_mikado_options['enable_search']) && $burst_mikado_options['enable_search'] == 'yes'  && (!isset($burst_mikado_options['search_icon_in_header_top']) || $burst_mikado_options['search_icon_in_header_top'] == 'no')){ ?>
                                                                <a class="<?php echo esc_attr($header_search_type); ?> <?php echo esc_attr($header_button_size); ?>" href="javascript:void(0)">
                                                                    <?php if(isset($burst_mikado_options['search_icon_pack'])){
                                                                        $burst_mikado_icon_collections->getSearchIcon($burst_mikado_options['search_icon_pack']);
                                                                    } ?>
                                                                    <?php if(isset($burst_mikado_options['enable_search_icon_text']) && $burst_mikado_options['enable_search_icon_text'] == 'yes'){?>
                                                                        <span class="search_icon_text">
													<?php esc_html_e('Search', 'burst'); ?>
												</span>
                                                                    <?php } ?>
                                                                </a>
                                                                <?php if(strstr($header_search_type, 'fullscreen_search') && $fullscreen_search_animation=='from_circle'){ ?>
                                                                    <div class="fullscreen_search_overlay"></div>
                                                                <?php } ?>
                                                            <?php } ?>
                                                            <?php if($enable_popup_menu == "yes"){ ?>
                                                                <a href="javascript:void(0)" class="popup_menu <?php echo esc_attr($header_button_size.' '.$popup_menu_animation_style); ?>"><span class="popup_menu_inner"><i class="line">&nbsp;</i></span></a>
                                                            <?php } ?>
                                                            <?php if($enable_side_area == "yes" && $enable_popup_menu == 'no' && is_active_sidebar('sidearea')){ ?>
                                                                <a class="side_menu_button_link <?php echo esc_attr($header_button_size); ?>" href="javascript:void(0)">
                                                                    <?php echo burst_mikado_get_side_menu_icon_html(); ?></a>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <nav class="main_menu drop_down right <?php echo esc_attr($menu_hover_animation_class); ?> <?php  echo esc_attr($menu_dropdown_appearance_class);?>">
                                                    <?php
                                                    wp_nav_menu( array( 'theme_location' => 'top-navigation' ,
                                                        'container'  => '',
                                                        'container_class' => '',
                                                        'menu_class' => '',
                                                        'menu_id' => '',
                                                        'fallback_cb' => 'top_navigation_fallback',
                                                        'link_before' => '<span>',
                                                        'link_after' => '</span>',
                                                        'walker' => new BurstMikadoType1WalkerNavMenu()
                                                    ));
                                                    ?>
                                                </nav>
                                            </div>
                                            <div class="header_right_top">
                                                <div class="header_right_top_left">
                                                    <?php if(is_active_sidebar('header_bottom_right')) { ?>
                                                        <div class="header_right_top_widget_holder"><?php dynamic_sidebar('header_bottom_right'); ?></div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <nav class="mobile_menu">
                                                <?php
                                                wp_nav_menu( array( 'theme_location' => 'top-navigation' ,
                                                    'container'  => '',
                                                    'container_class' => '',
                                                    'menu_class' => '',
                                                    'menu_id' => '',
                                                    'fallback_cb' => 'top_navigation_fallback',
                                                    'link_before' => '<span>',
                                                    'link_after' => '</span>',
                                                    'walker' => new BurstMikadoType2WalkerNavMenu()
                                                ));
                                                ?>
                                            </nav>
                                            <?php if($header_in_grid){ ?>
                                            <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?></div><?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </header>

            <?php } ?>

        <?php } else{?>

            <?php //Here renders header simplified because Side Menu is enabled?>

            <header class="page_header <?php if($display_header_top == "yes"){ echo 'has_top'; }  if($header_top_area_scroll == "yes"){ echo ' scroll_top'; }?> <?php if($centered_logo){ echo " centered_logo"; } ?> <?php echo esc_attr($header_bottom_appearance); ?>  <?php echo esc_attr($header_style); ?> <?php if(is_active_sidebar('header_fixed_right')) { echo 'has_header_fixed_right'; } ?>">
                <div class="header_inner clearfix">
                    <div class="header_bottom <?php echo esc_attr($header_bottom_class) ;?> clearfix" <?php burst_mikado_inline_style($header_color_per_page); ?>>
                        <?php if($header_in_grid){ ?>
                        <div class="container">
                            <div class="container_inner clearfix" <?php burst_mikado_inline_style($header_bottom_border_style); ?>>
                                <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?><div class="overlapping_content_margin"><?php } ?>
                                    <?php } ?>
                                    <div class="header_inner_left">
                                        <?php if(burst_mikado_is_main_menu_set()) { ?>
                                            <div class="mobile_menu_button"><span>
										<?php $burst_mikado_icon_collections->getMobileMenuIcon($burst_mikado_options['header_icon_pack']); ?>
									</span>
                                            </div>
                                        <?php } ?>
                                        <?php if (!(isset($burst_mikado_options['show_logo']) && $burst_mikado_options['show_logo'] == "no")){ ?>
                                            <div class="logo_wrapper">
                                                <?php
                                                if (isset($burst_mikado_options['logo_image']) && $burst_mikado_options['logo_image'] != ""){ $logo_image = $burst_mikado_options['logo_image'];}else{ $logo_image =  get_template_directory_uri().'/img/logo.png'; };
                                                if (isset($burst_mikado_options['logo_image_light']) && $burst_mikado_options['logo_image_light'] != ""){ $logo_image_light = $burst_mikado_options['logo_image_light'];}else{ $logo_image_light =  get_template_directory_uri().'/img/logo.png'; };
                                                if (isset($burst_mikado_options['logo_image_dark']) && $burst_mikado_options['logo_image_dark'] != ""){ $logo_image_dark = $burst_mikado_options['logo_image_dark'];}else{ $logo_image_dark =  get_template_directory_uri().'/img/logo_black.png'; };
                                                if (isset($burst_mikado_options['logo_image_sticky']) && $burst_mikado_options['logo_image_sticky'] != ""){ $logo_image_sticky = $burst_mikado_options['logo_image_sticky'];}else{ $logo_image_sticky =  get_template_directory_uri().'/img/logo_black.png'; };
                                                if (isset($burst_mikado_options['logo_image_popup']) && $burst_mikado_options['logo_image_popup'] != ""){ $logo_image_popup = $burst_mikado_options['logo_image_popup'];}else{ $logo_image_popup =  get_template_directory_uri().'/img/logo_white.png'; };
                                                if (isset($burst_mikado_options['logo_image_mobile']) && $burst_mikado_options['logo_image_mobile'] != ""){
                                                    $logo_image_mobile = $burst_mikado_options['logo_image_mobile'];
                                                }else{
                                                    if(isset($burst_mikado_options['logo_image']) && $burst_mikado_options['logo_image'] != ""){
                                                        $logo_image_mobile = $burst_mikado_options['logo_image'];
                                                    }else{
                                                        $logo_image_mobile =  get_template_directory_uri().'/img/logo.png';
                                                    }
                                                }
                                                ?>
                                                <div class="mkd_logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img class="normal" src="<?php echo esc_url($logo_image); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><img class="light" src="<?php echo esc_url($logo_image_light); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><img class="dark" src="<?php echo esc_url($logo_image_dark); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><img class="sticky" src="<?php echo esc_url($logo_image_sticky); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><img class="mobile" src="<?php echo esc_url($logo_image_mobile); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><?php if($enable_popup_menu == 'yes'){ ?><img class="popup" src="<?php echo esc_url($logo_image_popup); ?>" alt="<?php esc_attr_e( 'Logo', 'burst' ); ?>"/><?php } ?></a></div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <nav class="mobile_menu">
                                        <?php
                                        wp_nav_menu( array( 'theme_location' => 'top-navigation' ,
                                            'container'  => '',
                                            'container_class' => '',
                                            'menu_class' => '',
                                            'menu_id' => '',
                                            'fallback_cb' => 'top_navigation_fallback',
                                            'link_before' => '<span>',
                                            'link_after' => '</span>',
                                            'walker' => new BurstMikadoType2WalkerNavMenu()
                                        ));
                                        ?>
                                    </nav>

                                    <?php if($header_in_grid){ ?>
                                    <?php if($burst_mikado_options['overlapping_content'] == 'yes') {?></div><?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </header>
        <?php } ?>


        <?php if($enable_popup_menu == "yes"){
            ?>
            <div class="popup_menu_holder_outer">
                <div class="popup_menu_holder">
                    <div class="popup_menu_holder_inner">
                        <?php if (isset($burst_mikado_options['popup_in_grid']) && $burst_mikado_options['popup_in_grid'] == "yes") { ?>
                        <div class = "container_inner">
                            <?php } ?>

                            <?php if(is_active_sidebar('fullscreen_above_menu')) { ?>
                                <div class="fullscreen_above_menu_widget_holder"><?php dynamic_sidebar('fullscreen_above_menu'); ?></div>
                            <?php } ?>
                            <nav class="popup_menu">
                                <?php
                                wp_nav_menu( array( 'theme_location' => 'popup-navigation' ,
                                    'container'  => '',
                                    'container_class' => '',
                                    'menu_class' => '',
                                    'menu_id' => '',
                                    'fallback_cb' => 'top_navigation_fallback',
                                    'link_before' => '<span>',
                                    'link_after' => '</span>',
                                    'walker' => new BurstMikadoType3WalkerNavMenu()
                                ));
                                ?>
                            </nav>
                            <?php if(is_active_sidebar('fullscreen_menu')) { ?>
                                <div class="fullscreen_menu_widget_holder"><?php dynamic_sidebar('fullscreen_menu'); ?></div>
                            <?php } ?>
                            <?php if (isset($burst_mikado_options['popup_in_grid']) && $burst_mikado_options['popup_in_grid'] == "yes") { ?>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php if($enable_fullscreen_search=="yes"){ ?>
            <div class="fullscreen_search_holder <?php echo esc_attr($fullscreen_search_animation); echo esc_attr($fullscreen_search_in_header_top); ?>">
                <div class="close_container">
                    <?php if($header_in_grid){ ?>
                    <div class="container">
                        <div class="container_inner clearfix" >
                            <?php } ?>
                            <div class="search_close_holder">
                                <div class="side_menu_button">
                                    <a class="fullscreen_search_close" href="javascript:void(0)">
                                        <?php if(isset($burst_mikado_options['header_icon_pack'])) { $burst_mikado_icon_collections->getSearchClose($burst_mikado_options['header_icon_pack']); } ?>
                                    </a>
                                    <?php if($header_bottom_appearance!="fixed fixed_minimal"){?>
                                        <?php if($enable_popup_menu == "yes"){ ?>
                                            <a href="javascript:void(0)" class="popup_menu <?php echo esc_attr($header_button_size.' '.$popup_menu_animation_style); ?>"><span class="popup_menu_inner"><i class="line">&nbsp;</i></span></a>
                                        <?php } ?>
                                        <?php if($enable_side_area == "yes" && $enable_popup_menu == 'no' && is_active_sidebar('sidearea')){ ?>
                                            <a class="side_menu_button_link <?php echo esc_attr($header_button_size); ?>" href="javascript:void(0)">
                                                <?php echo burst_mikado_get_side_menu_icon_html(); ?>
                                            </a>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php if($header_in_grid){ ?>
                        </div>
                    </div>
                <?php } ?>
                </div>
                <div class="fullscreen_search_table">
                    <div class="fullscreen_search_cell">
                        <div class="fullscreen_search_inner">
                            <form role="search" action="<?php echo esc_url(home_url('/')); ?>" class="fullscreen_search_form" method="get">
                                <div class="form_holder">
                                    <span class="search_label"><?php esc_html_e('Search:', 'burst'); ?></span>
                                    <div class="field_holder">
                                        <input type="text"  name="s" class="search_field" autocomplete="off" />
                                        <div class="line"></div>
                                    </div>
                                    <input type="submit" class="search_submit" value="&#x55;" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

