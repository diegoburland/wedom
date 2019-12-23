<?php
//get global variables
$burst_mikado_options = burst_mikado_return_global_options();
$burst_mikado_wp_filesystem = burst_mikado_return_filesystem();

//init variables
$burst_mikado_portfolio_images 			    = get_post_meta(get_the_ID(), "mkd_portfolio_images", true);
$burst_mikado_lightbox_single_project 	    = 'no';
$burst_mikado_lightbox_video_single_project  = 'no';
$burst_mikado_portfolio_title_tag 			= 'h3';
$burst_mikado_portfolio_title_style          = '';
$burst_mikado_show_like						= true;


//is lightbox turned on for image single project?
if (isset($burst_mikado_options['lightbox_single_project'])) {
	$burst_mikado_lightbox_single_project = $burst_mikado_options['lightbox_single_project'];
}

//is lightbox turned on for video single project?
if (isset($burst_mikado_options['lightbox_video_single_project'])) {
	$burst_mikado_lightbox_video_single_project = $burst_mikado_options['lightbox_video_single_project'];
}

$portfolio_text_follow = "portfolio_single_follow";
if (isset($burst_mikado_options['portfolio_text_follow'])) {
    $portfolio_text_follow = esc_attr($burst_mikado_options['portfolio_text_follow']);
}

//sort portfolio images by user defined input
if (is_array($burst_mikado_portfolio_images)){
	usort($burst_mikado_portfolio_images, "burst_mikado_ComparePortfolioImages");
}

//set title tag
if (isset($burst_mikado_options['portfolio_title_tag'])) {
	$burst_mikado_portfolio_title_tag = $burst_mikado_options['portfolio_title_tag'];
}

//set style for title
if ((isset($burst_mikado_options['portfolio_title_margin_bottom']) && $burst_mikado_options['portfolio_title_margin_bottom'] != '')
    || (isset($burst_mikado_options['portfolio_title_color']) && !empty($burst_mikado_options['portfolio_title_color']))){

    if (isset($burst_mikado_options['portfolio_title_margin_bottom']) && $burst_mikado_options['portfolio_title_margin_bottom'] != '') {
        $burst_mikado_portfolio_title_style .= 'margin-bottom:'.esc_attr($burst_mikado_options['portfolio_title_margin_bottom']).'px;';
    }

    if (isset($burst_mikado_options['portfolio_title_color']) && !empty($burst_mikado_options['portfolio_title_color'])) {
        $burst_mikado_portfolio_title_style .= 'color:'.esc_attr($burst_mikado_options['portfolio_title_color']).';';
    }

}

if (isset($burst_mikado_options['portfolio_hide_like']) && $burst_mikado_options['portfolio_hide_like'] == 'yes'){
	$burst_mikado_show_like = false;
}
?>

<div class="portfolio_top_holder">
	<div class="column1">
		<<?php echo esc_attr($burst_mikado_portfolio_title_tag); ?> class="portfolio_single_text_title" <?php burst_mikado_inline_style($burst_mikado_portfolio_title_style); ?>>
			<?php the_title(); ?>
		</<?php echo esc_attr($burst_mikado_portfolio_title_tag); ?>>
	</div>
	<div class="column2">
		<div class="portfolio_social_like_holder">
			<?php
			//get portfolio share section
			get_template_part('templates/portfolio/parts/portfolio-social'); ?>
			<?php if ($burst_mikado_show_like){ ?>
			<div class="portfolio_single_like">
				<?php
				echo burst_mikado_like_portfolio_post(get_the_ID());
				?>
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<div class="two_columns_66_33 clearfix portfolio_container">
	<div class="column1">
		<div class="column_inner">
			<div class="portfolio_images">
				<?php

                $portfolio_m_images = get_post_meta(get_the_ID(), "mkd_portfolio-image-gallery", true);
                if ($portfolio_m_images){
                    $portfolio_image_gallery_array=explode(',',$portfolio_m_images);
                    foreach($portfolio_image_gallery_array as $gimg_id){
                        $title = get_the_title($gimg_id);
                        $alt = get_post_meta($gimg_id, '_wp_attachment_image_alt', true);
                        $image_src = wp_get_attachment_image_src( $gimg_id, 'full' );
                        if (is_array($image_src)) $image_src = $image_src[0];
                        ?>
                        <?php if($burst_mikado_lightbox_single_project == "yes"){ ?>
                            <a class="lightbox_single_portfolio" title="<?php echo esc_attr($title); ?>" href="<?php echo esc_url($image_src); ?>" data-rel="prettyPhoto[single_pretty_photo]">
                                <img src="<?php echo esc_url($image_src); ?>" alt="<?php echo esc_attr($alt); ?>" />
                            </a>
                        <?php } else { ?>
                            <img src="<?php echo esc_url($image_src); ?>" alt="<?php echo esc_attr($alt); ?>" />
                        <?php }
                    }
                }

				//are portfolio images set?
				if (is_array($burst_mikado_portfolio_images) && count($burst_mikado_portfolio_images)){
					foreach($burst_mikado_portfolio_images as $portfolio_image){
						?>

						<?php if($portfolio_image['portfolioimg'] != ""){ ?>
							<?php

							list($id, $title, $alt) = burst_mikado_get_portfolio_image_meta($portfolio_image['portfolioimg']);

							?>
							<?php if($burst_mikado_lightbox_single_project == "yes"){ ?>
								<a class="lightbox_single_portfolio" title="<?php echo esc_attr($title); ?>" href="<?php echo esc_url($portfolio_image['portfolioimg']); ?>" data-rel="prettyPhoto[single_pretty_photo]">
									<img src="<?php echo esc_url($portfolio_image['portfolioimg']); ?>" alt="<?php echo esc_attr($alt); ?>" />
								</a>
							<?php } else { ?>
								<img src="<?php echo esc_url($portfolio_image['portfolioimg']); ?>" alt="<?php echo esc_attr($alt); ?>" />
							<?php } ?>

						<?php }else{ ?>

							<?php
							$portfolio_video_type = "";
							if (isset($portfolio_image['portfoliovideotype'])) $portfolio_video_type = $portfolio_image['portfoliovideotype'];
							switch ($portfolio_video_type){
								case "youtube": ?>
									<?php if($burst_mikado_lightbox_video_single_project == "yes"){ ?>
										<?php
											$vidID = esc_attr($portfolio_image['portfoliovideoid']);
                                            $thumbnail = "//img.youtube.com/vi/".$vidID."/maxresdefault.jpg";
										?>
                                        <a class="lightbox_single_portfolio" title="<?php echo esc_attr($portfolio_image['portfoliotitle']); ?>" href="//www.youtube.com/watch?feature=player_embedded&v=<?php echo esc_attr($vidID); ?>" data-rel="prettyPhoto[single_pretty_photo]">
											<i class="fa fa-play"></i>
                                            <img width="100%" src="<?php echo esc_url($thumbnail); ?>"/>
										</a>
									<?php } else { ?>
										<iframe width="100%" src="//www.youtube.com/embed/<?php echo esc_attr($portfolio_image['portfoliovideoid']);  ?>?wmode=transparent" wmode="Opaque" frameborder="0" allowfullscreen></iframe>
									<?php } ?>
									<?php	break;
								case "vimeo": ?>
									<?php if($burst_mikado_lightbox_video_single_project == "yes"){ ?>
										<?php
											WP_Filesystem();
											$vidID = esc_attr($portfolio_image['portfoliovideoid']);
                                            $url = "https://vimeo.com/api/v2/video/".$vidID.".php";
                                            $xml = unserialize($burst_mikado_wp_filesystem->get_contents($url));

                                            $video_title = $xml[0]['title'];
                                            $thumbnail = $xml[0]['thumbnail_large'];
										?>
                                        <a class="lightbox_single_portfolio" title="<?php echo esc_attr($video_title); ?>" href="//vimeo.com/<?php echo esc_attr($vidID); ?>" data-rel="prettyPhoto[single_pretty_photo]">
											<i class="fa fa-play"></i>
											<img width="100%" src="<?php echo esc_url($thumbnail); ?>"/>
										</a>
									<?php } else { ?>
										<iframe src="//player.vimeo.com/video/<?php echo esc_attr($portfolio_image['portfoliovideoid']); ?>?title=0&amp;byline=0&amp;portrait=0" width="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
									<?php } ?>
									<?php break;
								case "self": ?>
									<div class="video">
										<div class="mobile-video-image" style="background-image: url(<?php echo esc_url($portfolio_image['portfoliovideoimage']); ?>);"></div>
										<div class="video-wrap"  >
											<video class="video" poster="<?php echo esc_url($portfolio_image['portfoliovideoimage']); ?>" preload="auto">
												<?php if(!empty($portfolio_image['portfoliovideowebm'])) { ?> <source type="video/webm" src="<?php echo esc_url($portfolio_image['portfoliovideowebm']); ?>"> <?php } ?>
												<?php if(!empty($portfolio_image['portfoliovideomp4'])) { ?> <source type="video/mp4" src="<?php echo esc_url($portfolio_image['portfoliovideomp4']); ?>"> <?php } ?>
												<?php if(!empty($portfolio_image['portfoliovideoogv'])) { ?> <source type="video/ogg" src="<?php echo esc_url($portfolio_image['portfoliovideoogv']); ?>"> <?php } ?>
												<object width="320" height="240" type="application/x-shockwave-flash" data="<?php echo esc_url(get_template_directory_uri().'/js/flashmediaelement.swf'); ?>">
													<param name="movie" value="<?php echo esc_url(get_template_directory_uri().'/js/flashmediaelement.swf'); ?>" />
													<param name="flashvars" value="controls=true&file=<?php echo esc_url($portfolio_image['portfoliovideomp4']); ?>" />
													<img src="<?php echo esc_url($portfolio_image['portfoliovideoimage']); ?>" width="1920" height="800" title="<?php esc_attr_e( 'No video playback capabilities', 'burst' ); ?>" alt="<?php esc_attr_e( 'Video thumb', 'burst' ); ?>" />
												</object>
											</video>
										</div></div>
									<?php break;
							} //close switch 
						} //close video section
					}
				}
				?>
			</div>
		</div>
	</div>
	<div class="column2">
		<div class="column_inner">
			<div class="portfolio_detail <?php echo esc_attr($portfolio_text_follow); ?> clearfix">
				<?php
					//get portfolio content section
					get_template_part('templates/portfolio/parts/portfolio-content');

					//get portfolio custom fields section
					get_template_part('templates/portfolio/parts/portfolio-custom-fields');

					//get portfolio date section
					get_template_part('templates/portfolio/parts/portfolio-date');

					//get portfolio categories section
					get_template_part('templates/portfolio/parts/portfolio-categories');

					//get portfolio tags section
					get_template_part('templates/portfolio/parts/portfolio-tags');
				?>
			</div>
		</div>
	</div>
</div>