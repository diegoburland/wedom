<?php 
$burst_mikado_options = burst_mikado_return_global_options();

$burst_mikado_blog_hide_author = "";
if (isset($burst_mikado_options['blog_hide_author'])) {
    $burst_mikado_blog_hide_author = $burst_mikado_options['blog_hide_author'];
}
?>
<article id="post-<?php the_ID(); ?>">
	<div class="post_content_holder">
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="post_image">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail('full'); ?>
				</a>
			</div>
		<?php } ?>
		<div class="post_text">
			<div class="post_text_inner">
				<div class="post_content">
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<?php
						$burst_mikado_my_excerpt = get_the_excerpt();
						if ($burst_mikado_my_excerpt != '') {
							echo esc_html($burst_mikado_my_excerpt);
						}
					?>
				</div>
				<div class="post_info">
					<span class="time">
						<span><?php the_time(get_option('date_format')); ?></span>
					</span>
					<?php $burst_mikado_category = get_the_category(get_the_ID()); ?>
					<?php if(!empty($burst_mikado_category)){ ?>
						<span class="post_category">
							<span><?php esc_html_e('In', 'burst'); ?></span>
							<span><?php the_category(', '); ?></span>
						</span>
					<?php } ?>
					<?php if($burst_mikado_blog_hide_author == "no") { ?>
						<span class="post_author">
						<span><?php esc_html_e('By', 'burst'); ?></span>
							<a class="post_author_link" href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>"><span><?php the_author_meta('display_name'); ?></span></a>
						</span>
					<?php } ?>	
				</div>
			</div>
		</div>
	</div>
</article>