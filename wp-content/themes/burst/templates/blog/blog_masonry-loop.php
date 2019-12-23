<?php
$burst_mikado_options = burst_mikado_return_global_options();
burst_mikado_set_more_variable();


$burst_mikado_blog_show_categories = "no";
if (isset($burst_mikado_options['blog_masonry_show_categories'])){
	$burst_mikado_blog_show_categories = $burst_mikado_options['blog_masonry_show_categories'];
}
$burst_mikado_blog_show_comments = "no";
if (isset($burst_mikado_options['blog_masonry_show_comments'])){
	$burst_mikado_blog_show_comments = $burst_mikado_options['blog_masonry_show_comments'];
}

$burst_mikado_blog_show_author = "no";
if (isset($burst_mikado_options['blog_masonry_show_author'])){
	$burst_mikado_blog_show_author = $burst_mikado_options['blog_masonry_show_author'];
}
$burst_mikado_blog_show_like = "no";
if (isset($burst_mikado_options['blog_masonry_show_like'])) {
	$burst_mikado_blog_show_like = $burst_mikado_options['blog_masonry_show_like'];
}
$burst_mikado_blog_show_ql_icon_mark = "yes";
$burst_mikado_blog_title_holder_icon_class = "";
if (isset($burst_mikado_options['blog_masonry_show_ql_mark'])) {
	$burst_mikado_blog_show_ql_icon_mark = $burst_mikado_options['blog_masonry_show_ql_mark'];
}

if ($burst_mikado_blog_show_ql_icon_mark == "yes") {
	$burst_mikado_blog_title_holder_icon_class = " with_icon_right";
}

$burst_mikado_blog_show_date = "no";
if (isset($burst_mikado_options['blog_masonry_show_date'])) {
	$burst_mikado_blog_show_date = $burst_mikado_options['blog_masonry_show_date'];
}

$burst_mikado_blog_social_share_type = "dropdown";
if(isset($burst_mikado_options['blog_masonry_select_share_options_masonry_type'])){
	$burst_mikado_blog_social_share_type = $burst_mikado_options['blog_masonry_select_share_options_masonry_type'];
}
$burst_mikado_blog_show_social_share = "no";
if (isset($burst_mikado_options['enable_social_share'])&& $burst_mikado_options['enable_social_share'] =="yes"){
	if (isset($burst_mikado_options['post_types_names_post'])&& $burst_mikado_options['post_types_names_post'] =="post"){
		if (isset($burst_mikado_options['blog_masonry_show_share'])&& $burst_mikado_blog_social_share_type == "dropdown") {
					$burst_mikado_blog_show_social_share = $burst_mikado_options['blog_masonry_show_share'];
		}
	}
}

$burst_mikado_blog_read_more_button_classes = '';
if (isset($burst_mikado_options['blog_masonry_read_more_button_icon']) && $burst_mikado_options['blog_masonry_read_more_button_icon'] == 'yes'){
    $burst_mikado_blog_read_more_button_classes .= 'with_icon';
}

$burst_mikado_post_format = get_post_format();

$burst_mikado_blog_masonry_type = "post_info_below_title";
if(isset($burst_mikado_options['blog_masonry_type'])){
	$burst_mikado_blog_masonry_type = $burst_mikado_options['blog_masonry_type'];
}

$burst_mikado_blog_ql_background_image = "no";
if(isset($burst_mikado_options['blog_masonry_ql_background_image'])){
	$burst_mikado_blog_ql_background_image = $burst_mikado_options['blog_masonry_ql_background_image'];
}

?>
<?php
switch ($burst_mikado_post_format) {
	case "video":
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_image">
				<?php get_template_part('templates/blog/parts/post-format-video'); ?>
			</div>
			<div class="post_text">
				<div class="post_text_inner">
					<h4>
						<a href="<?php the_permalink(); ?>" target="_self" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h4>
					<?php if($burst_mikado_blog_masonry_type == "post_info_below_title"){ 
					if($burst_mikado_blog_show_author == "yes" || $burst_mikado_blog_show_date == "yes" || $burst_mikado_blog_show_social_share == "yes" || $burst_mikado_blog_show_categories == "yes" || $burst_mikado_blog_show_comments == "yes" || $burst_mikado_blog_show_like == "yes") { ?>
							<div class="post_info">
								<?php burst_mikado_post_info(array('date' => $burst_mikado_blog_show_date, 'author' => $burst_mikado_blog_show_author, 'share' => $burst_mikado_blog_show_social_share, 'category' => $burst_mikado_blog_show_categories, 'comments' => $burst_mikado_blog_show_comments, 'like' => $burst_mikado_blog_show_like)); ?>
							</div>
					<?php }} ?>
					<?php
						burst_mikado_excerpt();
						burst_mikado_read_more_button('blog_masonry_read_more_button',$burst_mikado_blog_read_more_button_classes);
					?>

					<?php if($burst_mikado_blog_masonry_type == "post_info_at_bottom"){ 
						if($burst_mikado_blog_show_author == "yes" || $burst_mikado_blog_show_date == "yes" || $burst_mikado_blog_show_social_share == "yes" || $burst_mikado_blog_show_categories == "yes" || $burst_mikado_blog_show_comments == "yes" || $burst_mikado_blog_show_like == "yes") { ?>
							<div class="post_info post_info_bottom">
								<?php burst_mikado_post_info(array('date' => $burst_mikado_blog_show_date, 'author' => $burst_mikado_blog_show_author, 'share' => $burst_mikado_blog_show_social_share, 'category' => $burst_mikado_blog_show_categories, 'comments' => $burst_mikado_blog_show_comments, 'like' => $burst_mikado_blog_show_like)); ?>
							</div>
					<?php }} ?>
					<?php if( burst_mikado_core_installed() && isset($burst_mikado_options['blog_masonry_show_share']) && $burst_mikado_options['blog_masonry_show_share'] == "yes" && $burst_mikado_blog_social_share_type == "list") {
							echo do_shortcode('[no_social_share_list]'); // XSS OK
					}; ?>
				</div>
			</div>
		</article>

		<?php
		break;
	case "audio":
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_content_holder">
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="post_image">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('full'); ?>
						</a>
					</div>
				<?php } ?>
				<div class="audio_image">
					<audio class="blog_audio" src="<?php echo esc_url(get_post_meta(get_the_ID(), "audio_link", true)) ?>" controls="controls">
						<?php esc_html_e("Your browser don't support audio player","burst"); ?>
					</audio>
				</div>
				<div class="post_text">
					<div class="post_text_inner">
						<h4>
							<a href="<?php the_permalink(); ?>" target="_self" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h4>
						<?php if($burst_mikado_blog_masonry_type == "post_info_below_title"){ 
						if($burst_mikado_blog_show_author == "yes" || $burst_mikado_blog_show_date == "yes" || $burst_mikado_blog_show_social_share == "yes" || $burst_mikado_blog_show_categories == "yes" || $burst_mikado_blog_show_comments == "yes" || $burst_mikado_blog_show_like == "yes") { ?>
								<div class="post_info">
									<?php burst_mikado_post_info(array('date' => $burst_mikado_blog_show_date, 'author' => $burst_mikado_blog_show_author, 'share' => $burst_mikado_blog_show_social_share, 'category' => $burst_mikado_blog_show_categories, 'comments' => $burst_mikado_blog_show_comments, 'like' => $burst_mikado_blog_show_like)); ?>
								</div>
						<?php }} ?>
						<?php
							burst_mikado_excerpt();
                            burst_mikado_read_more_button('blog_masonry_read_more_button',$burst_mikado_blog_read_more_button_classes);
						?>

						<?php if($burst_mikado_blog_masonry_type == "post_info_at_bottom"){
							if($burst_mikado_blog_show_author == "yes" || $burst_mikado_blog_show_date == "yes" || $burst_mikado_blog_show_social_share == "yes" || $burst_mikado_blog_show_categories == "yes" || $burst_mikado_blog_show_comments == "yes" || $burst_mikado_blog_show_like == "yes") { ?>
							<div class="post_info post_info_bottom">
								<?php burst_mikado_post_info(array('date' => $burst_mikado_blog_show_date, 'author' => $burst_mikado_blog_show_author, 'share' => $burst_mikado_blog_show_social_share, 'category' => $burst_mikado_blog_show_categories, 'comments' => $burst_mikado_blog_show_comments, 'like' => $burst_mikado_blog_show_like)); ?>
							</div>
						<?php }} ?>
						<?php if( burst_mikado_core_installed() && isset($burst_mikado_options['blog_masonry_show_share']) && $burst_mikado_options['blog_masonry_show_share'] == "yes" && $burst_mikado_blog_social_share_type == "list") {
							echo do_shortcode('[no_social_share_list]'); // XSS OK
						}; ?>	
					</div>
				</div>
		</article>
		<?php
		break;
	case "link":
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_content_holder">
				<div class="post_text  <?php if($burst_mikado_blog_ql_background_image == "yes") { if ( has_post_thumbnail() ) { ?> link_image" style="background:url(<?php  echo wp_get_attachment_url(get_post_thumbnail_id()); ?>); <?php }} ?>">
					<div class="post_text_inner">
						<?php if ($burst_mikado_blog_show_ql_icon_mark == "yes") { ?>
							<div class="post_info_link_mark">
								<span class="fa fa-link link_mark"></span>
							</div>
						<?php } ?>
						<div class="post_title<?php echo esc_attr($burst_mikado_blog_title_holder_icon_class); ?>">
							<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						</div>
						<?php if($burst_mikado_blog_show_author == "yes" || $burst_mikado_blog_show_date == "yes" || $burst_mikado_blog_show_social_share == "yes" || $burst_mikado_blog_show_categories == "yes" || $burst_mikado_blog_show_comments == "yes" || $burst_mikado_blog_show_like == "yes") { ?>	
							<div class="post_info">							
								<?php 
								burst_mikado_post_info(array('date' => $burst_mikado_blog_show_date, 'author' => $burst_mikado_blog_show_author, 'share' => $burst_mikado_blog_show_social_share, 'category' => $burst_mikado_blog_show_categories, 'comments' => $burst_mikado_blog_show_comments, 'like' => $burst_mikado_blog_show_like));
								?>
							</div>
						<?php } ?>
						<?php if( burst_mikado_core_installed() && isset($burst_mikado_options['blog_masonry_show_share']) && $burst_mikado_options['blog_masonry_show_share'] == "yes" && $burst_mikado_blog_social_share_type == "list") {
							echo do_shortcode('[no_social_share_list]'); // XSS OK
						}; ?>
					</div>
				</div>
			</div>
		</article>
		<?php
		break;
	case "gallery":
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_image">
				<?php get_template_part('templates/blog/parts/post-format-gallery-slider'); ?>
			</div>
			<div class="post_text">
				<div class="post_text_inner">
					<h4>
						<a href="<?php the_permalink(); ?>" target="_self" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h4>
					<?php if($burst_mikado_blog_masonry_type == "post_info_below_title"){ ?>
						<?php if($burst_mikado_blog_show_author == "yes" || $burst_mikado_blog_show_date == "yes" || $burst_mikado_blog_show_social_share == "yes" || $burst_mikado_blog_show_categories == "yes" || $burst_mikado_blog_show_comments == "yes" || $burst_mikado_blog_show_like == "yes") { ?>	
							<div class="post_info">
								<?php burst_mikado_post_info(array('date' => $burst_mikado_blog_show_date, 'author' => $burst_mikado_blog_show_author, 'share' => $burst_mikado_blog_show_social_share, 'category' => $burst_mikado_blog_show_categories, 'comments' => $burst_mikado_blog_show_comments, 'like' => $burst_mikado_blog_show_like)); ?>
							</div>
					<?php }} ?>
					<?php
						burst_mikado_excerpt();
                        burst_mikado_read_more_button('blog_masonry_read_more_button',$burst_mikado_blog_read_more_button_classes);
					?>

					<?php if($burst_mikado_blog_masonry_type == "post_info_at_bottom"){ ?>
						<?php if($burst_mikado_blog_show_author == "yes" || $burst_mikado_blog_show_date == "yes" || $burst_mikado_blog_show_social_share == "yes" || $burst_mikado_blog_show_categories == "yes" || $burst_mikado_blog_show_comments == "yes" || $burst_mikado_blog_show_like == "yes") { ?>	
							<div class="post_info post_info_bottom">
								<?php burst_mikado_post_info(array('date' => $burst_mikado_blog_show_date, 'author' => $burst_mikado_blog_show_author, 'share' => $burst_mikado_blog_show_social_share, 'category' => $burst_mikado_blog_show_categories, 'comments' => $burst_mikado_blog_show_comments, 'like' => $burst_mikado_blog_show_like)); ?>
							</div>
					<?php }} ?>
					<?php if( burst_mikado_core_installed() && isset($burst_mikado_options['blog_masonry_show_share']) && $burst_mikado_options['blog_masonry_show_share'] == "yes" && $burst_mikado_blog_social_share_type == "list") {
						echo do_shortcode('[no_social_share_list]'); // XSS OK
					}; ?>	
				</div>
			</div>
		</article>
		<?php
		break;
	case "quote":
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_content_holder">
				<div class="post_text  <?php if($burst_mikado_blog_ql_background_image == "yes") { if ( has_post_thumbnail() ) { ?> quote_image" style="background:url(<?php  echo wp_get_attachment_url(get_post_thumbnail_id()); ?>);<?php }} ?>">
					<div class="post_text_inner">
						<?php if ($burst_mikado_blog_show_ql_icon_mark == "yes") { ?>
							<div class="post_info_quote_mark">
								<span class="fa fa-quote-right quote_mark"></span>
							</div>
						<?php } ?>
						<div class="post_title<?php echo esc_attr($burst_mikado_blog_title_holder_icon_class); ?>">
							<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php echo esc_html(get_post_meta(get_the_ID(), "quote_format", true)); ?>
								</a>
							</h3>
							<span class="quote_author">&mdash; <?php the_title(); ?></span>
						</div>
						<?php if($burst_mikado_blog_show_author == "yes" || $burst_mikado_blog_show_date == "yes" || $burst_mikado_blog_show_social_share == "yes" || $burst_mikado_blog_show_categories == "yes" || $burst_mikado_blog_show_comments == "yes" || $burst_mikado_blog_show_like == "yes") { ?>	
							<div class="post_info">
								<?php burst_mikado_post_info(array('date' => $burst_mikado_blog_show_date, 'author' => $burst_mikado_blog_show_author, 'share' => $burst_mikado_blog_show_social_share, 'category' => $burst_mikado_blog_show_categories, 'comments' => $burst_mikado_blog_show_comments, 'like' => $burst_mikado_blog_show_like)); ?>
							</div>
						<?php } ?>
						<?php if( burst_mikado_core_installed() && isset($burst_mikado_options['blog_masonry_show_share']) && $burst_mikado_options['blog_masonry_show_share'] == "yes" && $burst_mikado_blog_social_share_type == "list") {
							echo do_shortcode('[no_social_share_list]'); // XSS OK
						}; ?>
					</div>
				</div>
			</div>
		</article>
		<?php
		break;
	default:
		?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="post_image">
						<a href="<?php the_permalink(); ?>" target="_self" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('full'); ?>
						</a>
					</div>
				<?php } ?>
				<div class="post_text">
					<div class="post_text_inner">
						<h4>
							<a href="<?php the_permalink(); ?>" target="_self" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h4>
						<?php if($burst_mikado_blog_masonry_type == "post_info_below_title"){ 
							if($burst_mikado_blog_show_author == "yes" || $burst_mikado_blog_show_date == "yes" || $burst_mikado_blog_show_social_share == "yes" || $burst_mikado_blog_show_categories == "yes" || $burst_mikado_blog_show_comments == "yes" || $burst_mikado_blog_show_like == "yes") { ?>	
								<div class="post_info">
									<?php burst_mikado_post_info(array('date' => $burst_mikado_blog_show_date, 'author' => $burst_mikado_blog_show_author, 'share' => $burst_mikado_blog_show_social_share, 'category' => $burst_mikado_blog_show_categories, 'comments' => $burst_mikado_blog_show_comments, 'like' => $burst_mikado_blog_show_like)); ?>
								</div>
						<?php }} ?>
						<?php
							burst_mikado_excerpt();
                            burst_mikado_read_more_button('blog_masonry_read_more_button',$burst_mikado_blog_read_more_button_classes);
						?>
													
						<?php if($burst_mikado_blog_masonry_type == "post_info_at_bottom"){ 
							if($burst_mikado_blog_show_author == "yes" || $burst_mikado_blog_show_date == "yes" || $burst_mikado_blog_show_social_share == "yes" || $burst_mikado_blog_show_categories == "yes" || $burst_mikado_blog_show_comments == "yes" || $burst_mikado_blog_show_like == "yes") { ?>	
								<div class="post_info post_info_bottom">
									<?php burst_mikado_post_info(array('date' => $burst_mikado_blog_show_date, 'author' => $burst_mikado_blog_show_author, 'share' => $burst_mikado_blog_show_social_share, 'category' => $burst_mikado_blog_show_categories, 'comments' => $burst_mikado_blog_show_comments, 'like' => $burst_mikado_blog_show_like)); ?>
								</div>
						<?php }} ?>
						<?php if( burst_mikado_core_installed() && isset($burst_mikado_options['blog_masonry_show_share']) && $burst_mikado_options['blog_masonry_show_share'] == "yes" && $burst_mikado_blog_social_share_type == "list") {
							echo do_shortcode('[no_social_share_list]'); // XSS OK
						}; ?>
					</div>
				</div>
			</article>
		<?php
}
?>

