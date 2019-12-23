<?php 
/*
Template Name: Full Width
*/ 
?>
<?php 
$burst_mikado_options = burst_mikado_return_global_options();
$burst_mikado_id = burst_mikado_get_page_id();
$burst_mikado_sidebar = burst_mikado_get_sidebar_layout();

$burst_mikado_enable_page_comments = false;
if(get_post_meta($burst_mikado_id, "mkd_enable-page-comments", true) == 'yes') {
	$burst_mikado_enable_page_comments = true;
}

if(get_post_meta($burst_mikado_id, "mkd_page_background_color", true) != ""){
	$burst_mikado_background_color = 'background-color: '.esc_attr(get_post_meta($burst_mikado_id, "mkd_page_background_color", true));
}else{
	$burst_mikado_background_color = "";
}

$burst_mikado_content_style = "";
if(get_post_meta($burst_mikado_id, "mkd_content-top-padding", true) != ""){
	if(get_post_meta($burst_mikado_id, "mkd_content-top-padding-mobile", true) == 'yes'){
		$burst_mikado_content_style = "padding-top:".esc_attr(get_post_meta($burst_mikado_id, "mkd_content-top-padding", true))."px !important";
	}else{
		$burst_mikado_content_style = "padding-top:".esc_attr(get_post_meta($burst_mikado_id, "mkd_content-top-padding", true))."px";
	}
}
$burst_mikado_pagination_classes = '';
if( isset($burst_mikado_options['pagination_type']) && $burst_mikado_options['pagination_type'] == 'standard' ) {
	if( isset($burst_mikado_options['pagination_standard_position']) && $burst_mikado_options['pagination_standard_position'] !== '' ) {
		$burst_mikado_pagination_classes .= "standard_".esc_attr($burst_mikado_options['pagination_standard_position']);
	}
}
elseif ( isset($burst_mikado_options['pagination_type']) && $burst_mikado_options['pagination_type'] == 'arrows_on_sides' ) {
	$burst_mikado_pagination_classes .= "arrows_on_sides";
}

?>
	<?php get_header(); ?>

	<?php get_template_part( 'title' ); ?>
	<?php get_template_part('slider'); ?>

	<div class="full_width" <?php burst_mikado_inline_style($burst_mikado_background_color); ?>>
	<div class="full_width_inner" <?php burst_mikado_inline_style($burst_mikado_content_style); ?>>
		<?php if(($burst_mikado_sidebar == "default")||($burst_mikado_sidebar == "")) : ?>
			<?php if (have_posts()) : 
					while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
					<?php
                     $burst_mikado_args_pages = array(
					  'before'           => '<div class="single_links_pages ' .$burst_mikado_pagination_classes. '"><div class="single_links_pages_inner">',
				      'after'            => '</div></div>',
                      'pagelink'         => '<span>%</span>'
                     );

                    wp_link_pages($burst_mikado_args_pages); ?>
					<?php
					if($burst_mikado_enable_page_comments){
					?>
					<div class="container">
						<div class="container_inner">
					<?php
						comments_template('', true); 
					?>
						</div>
					</div>	
					<?php
					}
					?> 
					<?php endwhile; ?>
				<?php endif; ?>
		<?php elseif($burst_mikado_sidebar == "1" || $burst_mikado_sidebar == "2"): ?>		
			
			<?php if($burst_mikado_sidebar == "1") : ?>	
				<div class="two_columns_66_33 clearfix grid2">
					<div class="column1 content_left_from_sidebar">
			<?php elseif($burst_mikado_sidebar == "2") : ?>	
				<div class="two_columns_75_25 clearfix grid2">
					<div class="column1 content_left_from_sidebar">
			<?php endif; ?>
					<?php if (have_posts()) : 
						while (have_posts()) : the_post(); ?>
						<div class="column_inner">
						
						<?php the_content(); ?>	
						<?php 
                             $burst_mikado_args_pages = array(
                              'before'           => '<div class="single_links_pages ' .$burst_mikado_pagination_classes. '"><div class="single_links_pages_inner">',
                              'after'            => '</div></div>',
                              'pagelink'         => '<span>%</span>'
                             );

                            wp_link_pages($burst_mikado_args_pages); ?>
							<?php
							if($burst_mikado_enable_page_comments){
							?>
							<div class="container">
								<div class="container_inner">
							<?php
								comments_template('', true); 
							?>
								</div>
							</div>	
							<?php
							}
							?> 
						</div>
				<?php endwhile; ?>
				<?php endif; ?>
			
							
					</div>
					<div class="column2"><?php get_sidebar();?></div>
				</div>
			<?php elseif($burst_mikado_sidebar == "3" || $burst_mikado_sidebar == "4"): ?>
				<?php if($burst_mikado_sidebar == "3") : ?>	
					<div class="two_columns_33_66 clearfix grid2">
						<div class="column1"><?php get_sidebar();?></div>
						<div class="column2 content_right_from_sidebar">
				<?php elseif($burst_mikado_sidebar == "4") : ?>	
					<div class="two_columns_25_75 clearfix grid2">
						<div class="column1"><?php get_sidebar();?></div>
						<div class="column2 content_right_from_sidebar">
				<?php endif; ?>
						<?php if (have_posts()) : 
							while (have_posts()) : the_post(); ?>
							<div class="column_inner">
							<?php the_content(); ?>		
							<?php 
                                 $burst_mikado_args_pages = array(
                                  'before'           => '<div class="single_links_pages ' .$burst_mikado_pagination_classes. '"><div class="single_links_pages_inner">',
                                  'after'            => '</div></div>',
                                  'pagelink'         => '<span>%</span>'
                                 );

                                 wp_link_pages($burst_mikado_args_pages); ?>
							<?php
							if($burst_mikado_enable_page_comments){
							?>
							<div class="container">
								<div class="container_inner">
							<?php
								comments_template('', true); 
							?>
								</div>
							</div>	
							<?php
							}
							?> 
							</div>
					<?php endwhile; ?>
					<?php endif; ?>
				
								
						</div>
						
					</div>
			<?php endif; ?>
	</div>
	</div>	
	<?php get_footer(); ?>