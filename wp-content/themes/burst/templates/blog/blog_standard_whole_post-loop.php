<?php
$burst_mikado_options = burst_mikado_return_global_options();
burst_mikado_set_more_variable();


$burst_mikado_blog_show_categories = "no";
if (isset($burst_mikado_options['blog_standard_type_show_categories'])){
	$burst_mikado_blog_show_categories = $burst_mikado_options['blog_standard_type_show_categories'];
}

$burst_mikado_blog_show_comments = "yes";
if (isset($burst_mikado_options['blog_standard_type_show_comments'])){
    $burst_mikado_blog_show_comments = $burst_mikado_options['blog_standard_type_show_comments'];
}
$burst_mikado_blog_show_author = "yes";
if (isset($burst_mikado_options['blog_standard_type_show_author'])){
    $burst_mikado_blog_show_author = $burst_mikado_options['blog_standard_type_show_author'];
}
$burst_mikado_blog_show_like = "yes";
if (isset($burst_mikado_options['blog_standard_type_show_like'])) {
    $burst_mikado_blog_show_like = $burst_mikado_options['blog_standard_type_show_like'];
}
$burst_mikado_blog_show_ql_icon_mark = "yes";
$burst_mikado_blog_title_holder_icon_class = "";
if (isset($burst_mikado_options['blog_standard_type_show_ql_mark'])) {
    $burst_mikado_blog_show_ql_icon_mark = $burst_mikado_options['blog_standard_type_show_ql_mark'];
}
if($burst_mikado_blog_show_ql_icon_mark == "yes"){
	$burst_mikado_blog_title_holder_icon_class = " with_icon_right";
}

$burst_mikado_blog_show_date = "yes";
if (isset($burst_mikado_options['blog_standard_type_show_date'])) {
    $burst_mikado_blog_show_date = $burst_mikado_options['blog_standard_type_show_date'];
}
$burst_mikado_blog_show_social_share = "no";
$burst_mikado_blog_social_share_type = "dropdown";
if(isset($burst_mikado_options['blog_standard_type_select_share_option'])){
	$burst_mikado_blog_social_share_type = $burst_mikado_options['blog_standard_type_select_share_option'];
}
if (isset($burst_mikado_options['enable_social_share'])&& ($burst_mikado_options['enable_social_share']) =="yes"){
    if (isset($burst_mikado_options['post_types_names_post'])&& $burst_mikado_options['post_types_names_post'] =="post"){
        if (isset($burst_mikado_options['blog_standard_type_show_share'])&& $burst_mikado_blog_social_share_type == "dropdown") {
            $burst_mikado_blog_show_social_share = $burst_mikado_options['blog_standard_type_show_share'];
        }
    }
}

$burst_mikado_blog_image_size = 'full';
if( isset($burst_mikado_options['blog_standard_type_image_size']) && $burst_mikado_options['blog_standard_type_image_size'] !== '') {
    $burst_mikado_blog_image_size = $burst_mikado_options['blog_standard_type_image_size'];

}

if( $burst_mikado_blog_image_size == 'custom'
    && isset($burst_mikado_options['blog_standard_type_image_size_height']) && $burst_mikado_options['blog_standard_type_image_size_height'] !== ''
    && isset($burst_mikado_options['blog_standard_type_image_size_width']) && $burst_mikado_options['blog_standard_type_image_size_width'] !== '') {

    $burst_mikado_image_height = $burst_mikado_options['blog_standard_type_image_size_height'];
    $burst_mikado_image_width = $burst_mikado_options['blog_standard_type_image_size_width'];

    $burst_mikado_image_html = burst_mikado_generate_thumbnail(get_post_thumbnail_id(get_the_ID()),null,$burst_mikado_image_width,$burst_mikado_image_height);
}
else{
    $burst_mikado_image_html = get_the_post_thumbnail(get_the_ID(), $burst_mikado_blog_image_size);
}


$burst_mikado_blog_ql_background_image = "no";
if(isset($burst_mikado_options['blog_standard_type_ql_background_image'])){
	$burst_mikado_blog_ql_background_image = $burst_mikado_options['blog_standard_type_ql_background_image'];
}

$burst_mikado_background_image_object = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID()), 'blog_image_format_link_quote');
$burst_mikado_background_image_src = $burst_mikado_background_image_object[0];

$burst_mikado_blog_show_read_more_button = "yes";
if (isset($burst_mikado_options['blog_standard_type_read_more_button'])) {
    $burst_mikado_blog_show_read_more_button = $burst_mikado_options['blog_standard_type_read_more_button'];
}
$burst_mikado_post_format = get_post_format();
?>
<?php
	switch ($burst_mikado_post_format) {
		case "video":
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_content_holder">
				 <div class="post_image">
					<?php $_video_type = get_post_meta(get_the_ID(), "video_format_choose", true);?>
					<?php if($_video_type == "youtube") { ?>
						<iframe  src="//www.youtube.com/embed/<?php echo esc_attr(get_post_meta(get_the_ID(), "video_format_link", true));  ?>?wmode=transparent" wmode="Opaque" frameborder="0" allowfullscreen></iframe>
					<?php } elseif ($_video_type == "vimeo"){ ?>
						<iframe src="//player.vimeo.com/video/<?php echo esc_attr(get_post_meta(get_the_ID(), "video_format_link", true));  ?>?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					<?php } elseif ($_video_type == "self"){ ?> 
						<div class="video"> 
						    <div class="mobile-video-image" style="background-image: url(<?php echo esc_url(get_post_meta(get_the_ID(), "video_format_image", true));  ?>);"></div>
					    	<div class="video-wrap"  >
							    <video class="video" poster="<?php echo esc_url(get_post_meta(get_the_ID(), "video_format_image", true));  ?>" preload="auto">
								    <?php if(get_post_meta(get_the_ID(), "video_format_webm", true) != "") { ?> <source type="video/webm" src="<?php echo esc_url(get_post_meta(get_the_ID(), "video_format_webm", true));  ?>"> <?php } ?>
								    <?php if(get_post_meta(get_the_ID(), "video_format_mp4", true) != "") { ?> <source type="video/mp4" src="<?php echo esc_url(get_post_meta(get_the_ID(), "video_format_mp4", true));  ?>"> <?php } ?>
								    <?php if(get_post_meta(get_the_ID(), "video_format_ogv", true) != "") { ?> <source type="video/ogg" src="<?php echo esc_url(get_post_meta(get_the_ID(), "video_format_ogv", true));  ?>"> <?php } ?>
								    <object width="320" height="240" type="application/x-shockwave-flash" data="<?php echo esc_url(get_template_directory_uri().'/js/flashmediaelement.swf'); ?>">
								    	<param name="movie" value="<?php echo esc_url(get_template_directory_uri().'/js/flashmediaelement.swf'); ?>" />
									    <param name="flashvars" value="controls=true&file=<?php echo esc_url(get_post_meta(get_the_ID(), "video_format_mp4", true));  ?>" />
									    <img src="<?php echo esc_url(get_post_meta(get_the_ID(), "video_format_image", true));  ?>" width="1920" height="800" title="<?php esc_attr_e( 'No video playback capabilities', 'burst' ); ?>" alt="<?php esc_attr_e( 'Video thumb', 'burst' ); ?>" />
								    </object>
							    </video>
						    </div>
                        </div>
					<?php } ?>
				 </div>
                 <div class="post_text">
                    <div class="post_text_inner">         
						<h2>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h2>
						<?php if($burst_mikado_blog_show_author == "yes" || $burst_mikado_blog_show_date == "yes" || $burst_mikado_blog_show_social_share == "yes" || $burst_mikado_blog_show_categories == "yes" || $burst_mikado_blog_show_comments == "yes" || $burst_mikado_blog_show_like == "yes") { ?>	
							<div class="post_info">
								<?php burst_mikado_post_info(array('date' => $burst_mikado_blog_show_date, 'author' => $burst_mikado_blog_show_author, 'share' => $burst_mikado_blog_show_social_share, 'category' => $burst_mikado_blog_show_categories, 'comments' => $burst_mikado_blog_show_comments, 'like' => $burst_mikado_blog_show_like)); ?>
							</div>
						<?php } ?>
						<?php
							the_content();
							if($burst_mikado_blog_show_read_more_button == "yes"){?>
								<a href="<?php the_permalink(); ?>" target="_self" class="qbutton small read_more_button"><?php esc_html_e( 'Read More', 'burst' ); ?></a>
						<?php } ?>
						<?php if( burst_mikado_core_installed() && isset($burst_mikado_options['blog_standard_type_show_share']) && $burst_mikado_options['blog_standard_type_show_share'] == "yes" && $burst_mikado_blog_social_share_type == "list") {
							echo do_shortcode('[no_social_share_list]'); // XSS OK
						}; ?>
                    </div>
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
                            <?php echo wp_kses($burst_mikado_image_html, array(
                                'img' => array(
                                    'src' => true,
                                    'alt' => true,
                                    'width' => true,
                                    'height' => true,
                                    'draggable' => true
                                )
                            )); ?>
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
						<h2>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h2>
						<?php if($burst_mikado_blog_show_author == "yes" || $burst_mikado_blog_show_date == "yes" || $burst_mikado_blog_show_social_share == "yes" || $burst_mikado_blog_show_categories == "yes" || $burst_mikado_blog_show_comments == "yes" || $burst_mikado_blog_show_like == "yes") { ?>	
							<div class="post_info">
								<?php burst_mikado_post_info(array('date' => $burst_mikado_blog_show_date, 'author' => $burst_mikado_blog_show_author, 'share' => $burst_mikado_blog_show_social_share, 'category' => $burst_mikado_blog_show_categories, 'comments' => $burst_mikado_blog_show_comments, 'like' => $burst_mikado_blog_show_like)); ?>
							</div>
						<?php } ?>
						<?php
							the_content();
							if($burst_mikado_blog_show_read_more_button == "yes"){?>
								<a href="<?php the_permalink(); ?>" target="_self" class="qbutton small read_more_button"><?php esc_html_e( 'Read More', 'burst' ); ?></a>
						<?php } ?>
						<?php if( burst_mikado_core_installed() && isset($burst_mikado_options['blog_standard_type_show_share']) && $burst_mikado_options['blog_standard_type_show_share'] == "yes" && $burst_mikado_blog_social_share_type == "list") {
							echo do_shortcode('[no_social_share_list]'); // XSS OK
						}; ?>		
                    </div>
                </div>
			</div>
		</article>
<?php
		break;
		case "link":
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="post_content_holder">
                <div class="post_text_columns">
					<div class="post_text  <?php if($burst_mikado_blog_ql_background_image == "yes") {if ( has_post_thumbnail() ) { ?> link_image" style="background:url(<?php echo esc_url($burst_mikado_background_image_src); ?>); <?php } } ?>">
						<div class="post_text_inner">
							<?php if ($burst_mikado_blog_show_ql_icon_mark == "yes") { ?>
								<div class="post_info_link_mark">
									<span aria-hidden="true" class="icon_link"></span>
								</div>
							<?php } ?>
							<div class="post_title link">
								<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>								
							</div>							
							<?php if($burst_mikado_blog_show_author == "yes" || $burst_mikado_blog_show_date == "yes" || $burst_mikado_blog_show_social_share == "yes" || $burst_mikado_blog_show_categories == "yes" || $burst_mikado_blog_show_comments == "yes" || $burst_mikado_blog_show_like == "yes") { ?>	
								<div class="post_info">
									<?php burst_mikado_post_info(array('date' => $burst_mikado_blog_show_date, 'author' => $burst_mikado_blog_show_author, 'share' => $burst_mikado_blog_show_social_share, 'category' => $burst_mikado_blog_show_categories, 'comments' => $burst_mikado_blog_show_comments, 'like' => $burst_mikado_blog_show_like)); ?>
								</div>
							<?php } ?>
							<?php if( burst_mikado_core_installed() && isset($burst_mikado_options['blog_standard_type_show_share']) && $burst_mikado_options['blog_standard_type_show_share'] == "yes" && $burst_mikado_blog_social_share_type == "list") {
								echo do_shortcode('[no_social_share_list]'); // XSS OK
							}; ?>
						</div>
					</div>
                </div>
            </div>
        </article>
<?php
		break;
		case "gallery":
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_content_holder">
				<div class="post_image">
					<?php get_template_part('templates/blog/parts/post-format-gallery-slider'); ?>
				</div>
                <div class="post_text">
                    <div class="post_text_inner">
						<h2>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h2>
						<?php if($burst_mikado_blog_show_author == "yes" || $burst_mikado_blog_show_date == "yes" || $burst_mikado_blog_show_social_share == "yes" || $burst_mikado_blog_show_categories == "yes" || $burst_mikado_blog_show_comments == "yes" || $burst_mikado_blog_show_like == "yes") { ?>	
							<div class="post_info">
								<?php burst_mikado_post_info(array('date' => $burst_mikado_blog_show_date, 'author' => $burst_mikado_blog_show_author, 'share' => $burst_mikado_blog_show_social_share, 'category' => $burst_mikado_blog_show_categories, 'comments' => $burst_mikado_blog_show_comments, 'like' => $burst_mikado_blog_show_like)); ?>
							</div>
						<?php } ?>
						<?php
							the_content();
							if($burst_mikado_blog_show_read_more_button == "yes"){?>
								<a href="<?php the_permalink(); ?>" target="_self" class="qbutton small read_more_button"><?php esc_html_e( 'Read More', 'burst' ); ?></a>
						<?php } ?>
						<?php if( burst_mikado_core_installed() && isset($burst_mikado_options['blog_standard_type_show_share']) && $burst_mikado_options['blog_standard_type_show_share'] == "yes" && $burst_mikado_blog_social_share_type == "list") {
							echo do_shortcode('[no_social_share_list]'); // XSS OK
						}; ?>
                    </div>
                </div>
            </div>
		</article>
<?php
		break;
		case "quote":
?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="post_content_holder">
                    <div class="post_text_columns">
                         <div class="post_text  <?php if($burst_mikado_blog_ql_background_image == "yes") {if ( has_post_thumbnail() ) { ?> quote_image" style="background:url(<?php echo esc_url($burst_mikado_background_image_src); ?>); <?php } } ?>">
                            <div class="post_text_inner">
								<?php if ($burst_mikado_blog_show_ql_icon_mark == "yes") { ?>
									<div class="post_info_quote_mark">
										<span aria-hidden="true" class="icon_quotations"></span>
									</div>
								<?php } ?>
								<div class="post_title quote">
									<h3>
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo esc_html(get_post_meta(get_the_ID(), "quote_format", true)); ?></a>
									</h3>								
									<span class="quote_author">&mdash; <?php the_title(); ?></span>
								</div>
                                <?php if($burst_mikado_blog_show_author == "yes" || $burst_mikado_blog_show_date == "yes" || $burst_mikado_blog_show_social_share == "yes" || $burst_mikado_blog_show_categories == "yes" || $burst_mikado_blog_show_comments == "yes" || $burst_mikado_blog_show_like == "yes") { ?>	
									<div class="post_info">
										<?php burst_mikado_post_info(array('date' => $burst_mikado_blog_show_date, 'author' => $burst_mikado_blog_show_author, 'share' => $burst_mikado_blog_show_social_share, 'category' => $burst_mikado_blog_show_categories, 'comments' => $burst_mikado_blog_show_comments, 'like' => $burst_mikado_blog_show_like)); ?>
									</div>
								<?php } ?>
								<?php if( burst_mikado_core_installed() && isset($burst_mikado_options['blog_standard_type_show_share']) && $burst_mikado_options['blog_standard_type_show_share'] == "yes" && $burst_mikado_blog_social_share_type == "list") {
									echo do_shortcode('[no_social_share_list]'); // XSS OK
								}; ?>   
                            </div>
                        </div>
                    </div>
                </div>
            </article>
<?php
		break;
		default:
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_content_holder">
                <?php if ( has_post_thumbnail() ) { ?>
                        <div class="post_image">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php echo wp_kses($burst_mikado_image_html, array(
                                    'img' => array(
                                        'src' => true,
                                        'alt' => true,
                                        'width' => true,
                                        'height' => true,
                                        'draggable' => true
                                    )
                                )); ?>
                            </a>
                        </div>
				<?php } ?>
				<div class="post_text">
					<div class="post_text_inner">
                            <h2>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                            </h2>
							<?php if($burst_mikado_blog_show_author == "yes" || $burst_mikado_blog_show_date == "yes" || $burst_mikado_blog_show_social_share == "yes" || $burst_mikado_blog_show_categories == "yes" || $burst_mikado_blog_show_comments == "yes" || $burst_mikado_blog_show_like == "yes") { ?>	
								<div class="post_info">
									<?php burst_mikado_post_info(array('date' => $burst_mikado_blog_show_date, 'author' => $burst_mikado_blog_show_author, 'share' => $burst_mikado_blog_show_social_share, 'category' => $burst_mikado_blog_show_categories, 'comments' => $burst_mikado_blog_show_comments, 'like' => $burst_mikado_blog_show_like)); ?>
								</div>
							<?php } ?>	
							<?php
                                the_content();
                                if($burst_mikado_blog_show_read_more_button == "yes"){?>
                                    <a href="<?php the_permalink(); ?>" target="_self" class="qbutton small read_more_button"><?php esc_html_e( 'Read More', 'burst' ); ?></a>
                            <?php } ?>
							<?php if( burst_mikado_core_installed() && isset($burst_mikado_options['blog_standard_type_show_share']) && $burst_mikado_options['blog_standard_type_show_share'] == "yes" && $burst_mikado_blog_social_share_type == "list") {
								echo do_shortcode('[no_social_share_list]'); // XSS OK
							}; ?>		
                    </div>
				</div>
			</div>
		</article>
<?php
}
?>

