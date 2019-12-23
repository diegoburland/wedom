<?php get_header();

$burst_mikado_options = burst_mikado_return_global_options();
$burst_mikado_wp_query = burst_mikado_return_global_query();
$burst_mikado_id = burst_mikado_get_page_id();
$burst_mikado_sidebar = $burst_mikado_options ['category_blog_sidebar'];

if ( get_query_var('paged') ) { $burst_mikado_paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $burst_mikado_paged = get_query_var('page'); }
else { $burst_mikado_paged = 1; }


if(isset($burst_mikado_options['blog_page_range']) && $burst_mikado_options['blog_page_range'] != ""){
	$blog_page_range = esc_attr($burst_mikado_options['blog_page_range']);
} else{
	$blog_page_range = $burst_mikado_wp_query->max_num_pages;
}

?>

	<?php get_template_part( 'title' ); ?>
	
	<div class="container">
	<?php if($burst_mikado_options['overlapping_content'] == 'yes') {?>
		<div class="overlapping_content"><div class="overlapping_content_inner">
	<?php } ?>
	<div class="container_inner default_template_holder clearfix">
		<?php if(($burst_mikado_sidebar == "default")||($burst_mikado_sidebar == "")) : ?>
			<div class="blog_holder blog_standard_type">
				<?php if(have_posts()) : while ( have_posts() ) : the_post(); ?>
						<?php 
							get_template_part('templates/blog/blog_search', 'loop');
						?>
				<?php endwhile; ?>
				<?php if($burst_mikado_options['pagination'] != "0") : ?>
					<?php burst_mikado_pagination($burst_mikado_wp_query->max_num_pages, $blog_page_range, $burst_mikado_paged); ?>
				<?php endif; ?>
				<?php else: //If no posts are present ?>
						<div class="entry">                        
							<p><?php esc_html_e('No posts were found.', 'burst'); ?></p>
						</div>
				<?php endif; ?>
			</div>	
		<?php elseif($burst_mikado_sidebar == "1" || $burst_mikado_sidebar == "2"): ?>
			<div class="<?php if($burst_mikado_sidebar == "1"):?>two_columns_66_33<?php elseif($burst_mikado_sidebar == "2") : ?>two_columns_75_25<?php endif; ?> background_color_sidebar grid2 clearfix">
				<div class="column1 content_left_from_sidebar">
					<div class="column_inner">
						<div class="blog_holder blog_standard_type">
							<?php if(have_posts()) : while ( have_posts() ) : the_post(); ?>
									<?php 
										get_template_part('templates/blog/blog_search', 'loop');
									?>
							<?php endwhile; ?>
							<?php if($burst_mikado_options['pagination'] != "0") : ?>
								<?php burst_mikado_pagination($burst_mikado_wp_query->max_num_pages, $blog_page_range, $burst_mikado_paged); ?>
							<?php endif; ?>
							<?php else: //If no posts are present ?>
								<div class="entry">                        
									<p><?php esc_html_e('No posts were found.', 'burst'); ?></p>
								</div>
							<?php endif; ?>
						</div>	
					</div>
				</div>
				<div class="column2">
					<?php get_sidebar(); ?>	
				</div>
			</div>
	<?php elseif($burst_mikado_sidebar == "3" || $burst_mikado_sidebar == "4"): ?>
			<div class="<?php if($burst_mikado_sidebar == "3"):?>two_columns_33_66<?php elseif($burst_mikado_sidebar == "4") : ?>two_columns_25_75<?php endif; ?> background_color_sidebar grid2 clearfix">
				<div class="column1">
				<?php get_sidebar(); ?>	
				</div>
				<div class="column2 content_right_from_sidebar">
					<div class="column_inner">
						<div class="blog_holder blog_standard_type">
							<?php if(have_posts()) : while ( have_posts() ) : the_post(); ?>
								<?php 
									get_template_part('templates/blog/blog_search', 'loop');
								?>
							<?php endwhile; ?>
							<?php if($burst_mikado_options['pagination'] != "0") : ?>
								<?php burst_mikado_pagination($burst_mikado_wp_query->max_num_pages, $blog_page_range, $burst_mikado_paged); ?>
							<?php endif; ?>
							<?php else: //If no posts are present ?>
								<div class="entry">                        
									<p><?php esc_html_e('No posts were found.', 'burst'); ?></p>
								</div>
							<?php endif; ?>
						</div>	
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
	<?php if($burst_mikado_options['overlapping_content'] == 'yes') {?>
		</div></div>
	<?php } ?>
</div>
<?php get_footer(); ?>