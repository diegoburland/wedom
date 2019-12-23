<?php

$burst_mikado_options = burst_mikado_return_global_options();
$burst_mikado_id = burst_mikado_get_page_id();
$burst_mikado_sidebar = burst_mikado_get_sidebar_layout();

$burst_mikado_blog_single_show_comments = "";
if (isset($burst_mikado_options['blog_single_show_comments']))
	$burst_mikado_blog_single_show_comments = $burst_mikado_options['blog_single_show_comments'];

if(get_post_meta($burst_mikado_id, "mkd_page_background_color", true) != ""){
	$burst_mikado_background_color = 'background-color: '.esc_attr(get_post_meta($burst_mikado_id, "mkd_page_background_color", true));
}else{
	$burst_mikado_background_color = "";
}
$burst_mikado_blog_single_loop = "blog_standard_type";

$burst_mikado_content_style = "";
if(get_post_meta($burst_mikado_id, "mkd_content-top-padding", true) != ""){
	if(get_post_meta($burst_mikado_id, "mkd_content-top-padding-mobile", true) == 'yes'){
		$burst_mikado_content_style = "padding-top:".esc_attr(get_post_meta($burst_mikado_id, "mkd_content-top-padding", true))."px !important";
	}else{
		$burst_mikado_content_style = "padding-top:".esc_attr(get_post_meta($burst_mikado_id, "mkd_content-top-padding", true))."px";
	}
}


$burst_mikado_gallery_position = "above_post_content";
if(get_post_meta(get_the_ID(), "gallery_position", true) !== ""){
	$burst_mikado_gallery_position = get_post_meta(get_the_ID(), "gallery_position", true);
}

?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

		<?php get_template_part( 'title' ); ?>
		<?php get_template_part('slider'); ?>

		<div class="container"<?php burst_mikado_inline_style($burst_mikado_background_color); ?>>
		<?php if($burst_mikado_options['overlapping_content'] == 'yes') {?>
			<div class="overlapping_content"><div class="overlapping_content_inner">
		<?php } ?>
			<div class="container_inner default_template_holder" <?php burst_mikado_inline_style($burst_mikado_content_style); ?>>

			<?php if(($burst_mikado_sidebar == "default")||($burst_mikado_sidebar == "")) : ?>
				<div class="blog_holder blog_single <?php echo esc_attr($burst_mikado_blog_single_loop )?>">
				<?php
					get_template_part('templates/blog/blog_single', 'loop');
				?>
				<?php
					if($burst_mikado_blog_single_show_comments == "yes"){
						comments_template('', true);
					}else{
						echo "<br/><br/>";
					}
				?>

			<?php elseif($burst_mikado_sidebar == "1" || $burst_mikado_sidebar == "2"): ?>
				<?php if($burst_mikado_gallery_position == "above_post_content_and_sidebar"){
					get_template_part('templates/blog/parts/post-format-gallery-slider');
				}?>	
				<?php if($burst_mikado_sidebar == "1") : ?>
					<div class="two_columns_66_33 background_color_sidebar grid2 clearfix">
					<div class="column1 content_left_from_sidebar">
				<?php elseif($burst_mikado_sidebar == "2") : ?>
					<div class="two_columns_75_25 background_color_sidebar grid2 clearfix">
						<div class="column1 content_left_from_sidebar">
				<?php endif; ?>

							<div class="column_inner">
								<div class="blog_holder blog_single <?php echo esc_attr($burst_mikado_blog_single_loop )?>">
									<?php
										get_template_part('templates/blog/blog_single', 'loop');
									?>
								</div>

								<?php
									if($burst_mikado_blog_single_show_comments == "yes"){
										comments_template('', true);
									}else{
										echo "<br/><br/>";
									}
								?>
							</div>
						</div>
						<div class="column2">
							<?php get_sidebar(); ?>
						</div>
					</div>
				<?php elseif($burst_mikado_sidebar == "3" || $burst_mikado_sidebar == "4"): ?>
					<?php if($burst_mikado_gallery_position == "above_post_content_and_sidebar"){
						get_template_part('templates/blog/parts/post-format-gallery-slider');
					}?>	
					<?php if($burst_mikado_sidebar == "3") : ?>
						<div class="two_columns_33_66 background_color_sidebar grid2 clearfix">
						<div class="column1">
							<?php get_sidebar(); ?>
						</div>
						<div class="column2 content_right_from_sidebar">
					<?php elseif($burst_mikado_sidebar == "4") : ?>
						<div class="two_columns_25_75 background_color_sidebar grid2 clearfix">
							<div class="column1">
								<?php get_sidebar(); ?>
							</div>
							<div class="column2 content_right_from_sidebar">
					<?php endif; ?>

								<div class="column_inner">
									<div class="blog_holder blog_single <?php echo esc_attr($burst_mikado_blog_single_loop); ?>">
										<?php
											get_template_part('templates/blog/blog_single', 'loop');
										?>
									</div>
									<?php
										if($burst_mikado_blog_single_show_comments == "yes"){
											comments_template('', true);
										}else{
											echo "<br/><br/>";
										}
									?>
								</div>
							</div>

						</div>
				<?php endif; ?>
			</div>
		</div>
		<?php if($burst_mikado_options['overlapping_content'] == 'yes') {?>
			</div></div>
		<?php } ?>
	</div>
<?php endwhile; ?>
<?php endif; ?>	


<?php get_footer(); ?>	