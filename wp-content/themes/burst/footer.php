<?php
$burst_mikado_options = burst_mikado_return_global_options();

//init variables
$burst_mikado_uncovering_footer = false;
$burst_mikado_footer_classes_array = array();
$burst_mikado_footer_classes = '';
$burst_mikado_footer_border_columns = 'yes';
$burst_mikado_footer_top_border_color = '';
$burst_mikado_footer_top_border_in_grid = '';
$burst_mikado_footer_bottom_border_color = '';
$burst_mikado_footer_bottom_border_bottom_color = '';
$burst_mikado_footer_bottom_border_in_grid = '';
$burst_mikado_oblique_section_position = '';

extract(burst_mikado_get_footer_variables());

?>

<?php get_template_part('content-bottom-area'); ?>

    </div> <!-- close div.content_inner -->
</div>  <!-- close div.content -->

<?php
if(isset($burst_mikado_options['paspartu']) && $burst_mikado_options['paspartu'] == 'yes'){?>
        <?php if(burst_mikado_is_side_header() && isset($burst_mikado_options['vertical_menu_inside_paspartu']) && $burst_mikado_options['vertical_menu_inside_paspartu'] == 'no') { ?>
			</div> <!-- paspartu_middle_inner close div -->
		<?php } ?>
		</div> <!-- paspartu_inner close div -->
		<?php if((isset($burst_mikado_options['paspartu_on_bottom']) && $burst_mikado_options['paspartu_on_bottom'] == 'yes') ||
        (burst_mikado_is_side_header() && isset($burst_mikado_options['vertical_menu_inside_paspartu']) && $burst_mikado_options['vertical_menu_inside_paspartu'] == 'yes')){ ?>
        <div class="paspartu_bottom"></div>
    <?php }?>
    </div> <!-- paspartu_outer close div -->
<?php
}
?>

<?php get_template_part('social-sidebar'); ?>

<?php if(burst_mikado_space_around_content() && !burst_mikado_include_footer_in_content()){ ?>
    </div></div> <!-- space_around_content close div -->
<?php } ?>

<footer <?php burst_mikado_class_attribute($burst_mikado_footer_classes); ?>>
	<div class="footer_inner clearfix">
		<?php

        $burst_mikado_footer_top_flag = false;

        //check footer columns.If they are empty, disable footer top
        for ( $i = 1; $i <= 4; $i ++ ) {
            $footer_columns_id = 'footer_column_' . $i;
            if ( is_active_sidebar( $footer_columns_id ) ) {
                $burst_mikado_footer_top_flag = true;
                break;
            }
        }
        
		if($burst_mikado_display_footer_top && $burst_mikado_footer_top_flag) {
			if($burst_mikado_footer_top_border_color != ''){ ?>
				<?php if($burst_mikado_footer_top_border_in_grid != '') { ?>
					<div class="footer_ingrid_border_holder_outer">
				<?php } ?>
						<div class="footer_top_border_holder <?php echo esc_attr($burst_mikado_footer_top_border_in_grid); ?>" <?php burst_mikado_inline_style($burst_mikado_footer_top_border_color); ?>></div>
				<?php if($burst_mikado_footer_top_border_in_grid != '') { ?>
					</div>
				<?php } ?>
			<?php } ?>
			<div class="footer_top_holder">
				<div class="footer_top<?php if(!$burst_mikado_footer_in_grid) {echo " footer_top_full";} ?>">
					<?php if($burst_mikado_footer_in_grid){ ?>
					<div class="container">
						<div class="container_inner">
							<?php } ?>
							<?php switch ($burst_mikado_footer_top_columns) {
								case 6:
									?>
									<div class="two_columns_50_50 clearfix">
										<div class="mkd_column column1">
											<div class="column_inner">
												<?php if(is_active_sidebar('footer_column_1')) {
                                                    dynamic_sidebar( 'footer_column_1' );
                                                } ?>
											</div>
										</div>
										<div class="mkd_column column2">
											<div class="column_inner">
												<div class="two_columns_50_50 clearfix">
													<div class="mkd_column column1 footer_col2">
														<div class="column_inner">
															<?php if(is_active_sidebar('footer_column_2')) {
                                                                dynamic_sidebar( 'footer_column_2' );
                                                            } ?>
														</div>
													</div>
													<div class="mkd_column column2 footer_col3">
														<div class="column_inner">
															<?php if(is_active_sidebar('footer_column_3')) {
                                                                dynamic_sidebar( 'footer_column_3' );
                                                            } ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php
									break;
								case 5:
									?>
									<div class="two_columns_50_50 clearfix">
										<div class="mkd_column column1">
											<div class="column_inner">
												<div class="two_columns_50_50 clearfix">
													<div class="mkd_column column1">
														<div class="column_inner">
															<?php if(is_active_sidebar('footer_column_1')) {
                                                                dynamic_sidebar( 'footer_column_1' );
                                                            } ?>
														</div>
													</div>
													<div class="mkd_column column2">
														<div class="column_inner">
															<?php if(is_active_sidebar('footer_column_2')) {
                                                                dynamic_sidebar( 'footer_column_2' );
                                                            } ?>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="mkd_column column2 footer_col3">
											<div class="column_inner">
												<?php if(is_active_sidebar('footer_column_3')) {
                                                    dynamic_sidebar( 'footer_column_3' );
                                                } ?>
											</div>
										</div>
									</div>
									<?php
									break;
								case 4:
									?>
									<div class="four_columns clearfix">
										<div class="mkd_column column1">
											<div class="column_inner">
												<?php if(is_active_sidebar('footer_column_1')) {
                                                    dynamic_sidebar( 'footer_column_1' );
                                                } ?>
											</div>
										</div>
										<div class="mkd_column column2">
											<div class="column_inner">
												<?php if(is_active_sidebar('footer_column_2')) {
                                                    dynamic_sidebar( 'footer_column_2' );
                                                } ?>
											</div>
										</div>
										<div class="mkd_column column3">
											<div class="column_inner">
												<?php if(is_active_sidebar('footer_column_3')) {
                                                    dynamic_sidebar( 'footer_column_3' );
                                                } ?>
											</div>
										</div>
										<div class="mkd_column column4">
											<div class="column_inner">
												<?php if(is_active_sidebar('footer_column_4')) {
                                                    dynamic_sidebar( 'footer_column_4' );
                                                } ?>
											</div>
										</div>
									</div>
									<?php
									break;
								case 3:
									?>
									<div class="three_columns clearfix">
										<div class="mkd_column column1">
											<div class="column_inner">
												<?php if(is_active_sidebar('footer_column_1')) {
                                                    dynamic_sidebar( 'footer_column_1' );
                                                } ?>
											</div>
										</div>
										<div class="mkd_column column2">
											<div class="column_inner">
												<?php if(is_active_sidebar('footer_column_2')) {
                                                    dynamic_sidebar( 'footer_column_2' );
                                                } ?>
											</div>
										</div>
										<div class="mkd_column column3">
											<div class="column_inner">
												<?php if(is_active_sidebar('footer_column_3')) {
                                                    dynamic_sidebar( 'footer_column_3' );
                                                } ?>
											</div>
										</div>
									</div>
									<?php
									break;
								case 2:
									?>
									<div class="two_columns_50_50 clearfix">
										<div class="mkd_column column1">
											<div class="column_inner">
												<?php if(is_active_sidebar('footer_column_1')) {
                                                    dynamic_sidebar( 'footer_column_1' );
                                                } ?>
											</div>
										</div>
										<div class="mkd_column column2">
											<div class="column_inner">
												<?php if(is_active_sidebar('footer_column_2')) {
                                                    dynamic_sidebar( 'footer_column_2' );
                                                } ?>
											</div>
										</div>
									</div>
									<?php
									break;
								case 1:
                                    ?>
                                    <div class="clearfix">
                                        <div class="mkd_column column1">
                                            <div class="column_inner">
                                                <?php if(is_active_sidebar('footer_column_1')) {
                                                    dynamic_sidebar( 'footer_column_1' );
                                                } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
									break;
							}
							?>
							<?php if($burst_mikado_footer_in_grid){ ?>
						</div>
					</div>
				<?php } ?>
				</div>
                <?php if (isset($burst_mikado_options['footer_oblique_section'])  && $burst_mikado_options['footer_oblique_section'] == "yes"){ ?>
                    <svg class="oblique-section svg-footer-bottom" preserveAspectRatio="none" viewBox="0 0 86 86" width="100%" height="86">
                        <?php if($burst_mikado_options['footer_oblique_section_position'] == 'from_left_to_right'){ ?>
                            <polygon points="0,0 0,86 86,86" />
                        <?php }
                        if($burst_mikado_options['footer_oblique_section_position'] == 'from_right_to_left'){ ?>
                            <polygon points="0,86 86,0 86,86" />
                        <?php } ?>
                    </svg>
                <?php } ?>

			</div>
		<?php } ?>
		<?php
		$burst_mikado_display_footer_text = false;
		if (isset($burst_mikado_options['footer_text'])) {
			if ($burst_mikado_options['footer_text'] == "yes") $burst_mikado_display_footer_text = true;
		}

        $burst_mikado_footer_bottom_flag = false;

        //check footer columns.If they are empty, disable footer bottom
        $burst_mikado_footer_bottom_sidebars = array('footer_bottom_left', 'footer_text', 'footer_bottom_right');
        foreach( $burst_mikado_footer_bottom_sidebars as $burst_mikado_footer_bottom_sidebar ){
            if ( is_active_sidebar( $burst_mikado_footer_bottom_sidebar ) ) {
                $burst_mikado_footer_bottom_flag = true;
                break;
            }
        }

		if($burst_mikado_display_footer_text && $burst_mikado_footer_bottom_flag): ?>
            <?php if($burst_mikado_footer_bottom_border_color != ''){ ?>
				<?php if($burst_mikado_footer_bottom_border_in_grid != '') { ?>
					<div class="footer_ingrid_border_holder_outer">
				<?php } ?>
                		<div class="footer_bottom_border_holder <?php echo esc_attr($burst_mikado_footer_bottom_border_in_grid); ?>" <?php burst_mikado_inline_style($burst_mikado_footer_bottom_border_color); ?>></div>
				<?php if($burst_mikado_footer_bottom_border_in_grid != '') { ?>
					</div>
				<?php } ?>
            <?php } ?>
			<div class="footer_bottom_holder">
                <div class="footer_bottom_holder_inner">
                    <?php if($burst_mikado_footer_in_grid){ ?>
                    <div class="container">
                        <div class="container_inner">
                            <?php } ?>

                            <?php switch ($burst_mikado_footer_bottom_columns) {
                                case 3:
                                    ?>
                                    <div class="three_columns clearfix">
                                        <div class="mkd_column column1">
                                            <div class="column_inner">
                                                <?php if(is_active_sidebar('footer_bottom_left')) {
                                                    dynamic_sidebar( 'footer_bottom_left' );
                                                } ?>
                                            </div>
                                        </div>
                                        <div class="mkd_column column2">
                                            <div class="column_inner">
                                                <?php if(is_active_sidebar('footer_text')) {
                                                    dynamic_sidebar( 'footer_text' );
                                                } ?>
                                            </div>
                                        </div>
                                        <div class="mkd_column column3">
                                            <div class="column_inner">
                                                <?php if(is_active_sidebar('footer_bottom_right')) {
                                                    dynamic_sidebar( 'footer_bottom_right' );
                                                } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    break;
                                case 2:
                                    ?>
                                    <div class="two_columns_50_50 clearfix">
                                        <div class="mkd_column column1">
                                            <div class="column_inner">
                                                <?php if(is_active_sidebar('footer_bottom_left')) {
                                                    dynamic_sidebar( 'footer_bottom_left' );
                                                } ?>
                                            </div>
                                        </div>
                                        <div class="mkd_column column2">
                                            <div class="column_inner">
                                                <?php if(is_active_sidebar('footer_bottom_right')) {
                                                    dynamic_sidebar( 'footer_bottom_right' );
                                                } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    break;
                                case 1:
                                    ?>
                                    <div class="column_inner">
                                        <?php if(is_active_sidebar('footer_text')) {
                                            dynamic_sidebar( 'footer_text' );
                                        } ?>
                                    </div>
                                    <?php
                                    break;
                            }
                            ?>
                            <?php if($burst_mikado_footer_in_grid){ ?>
                        </div>
                    </div>
                <?php } ?>
                </div>
			</div>
            <?php if($burst_mikado_footer_bottom_border_bottom_color != ''){ ?>
				<div class="footer_bottom_border_bottom_holder <?php echo esc_attr($burst_mikado_footer_top_border_in_grid); ?>" <?php burst_mikado_inline_style($burst_mikado_footer_bottom_border_bottom_color); ?>></div>
			<?php } ?>
		<?php endif; ?>
		
	</div>
</footer>
<?php if(burst_mikado_space_around_content() && burst_mikado_include_footer_in_content()){ ?>
    </div></div> <!-- space_around_content close div -->
<?php } ?>
</div> <!-- close div.wrapper_inner  -->
</div> <!-- close div.wrapper -->
<?php wp_footer(); ?>
</body>
</html>