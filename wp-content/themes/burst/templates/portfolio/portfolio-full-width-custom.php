<?php
//get global variables
$burst_mikado_options = burst_mikado_return_global_options();

//init variables
$burst_mikado_id = burst_mikado_get_page_id();

if(get_post_meta($burst_mikado_id, "mkd_content-top-padding", true) != ""){
	$burst_mikado_content_style = 'padding-top: '.esc_attr(get_post_meta($burst_mikado_id, "mkd_content-top-padding", true)).'px';
}else{
	$burst_mikado_content_style = "";
}
?>
<div class="full_width">
	<div class="full_width_inner" <?php burst_mikado_inline_style($burst_mikado_content_style); ?>>
		<div class="portfolio_single full-width-portfolio">
			<?php
				if (post_password_required()) {
					echo get_the_password_form();
				} else { ?>
					<?php the_content(); ?>

					<div class="container">
						<div class="container_inner clearfix">
							<?php 
								get_template_part('templates/portfolio/parts/portfolio-navigation'); 

								get_template_part('templates/portfolio/parts/portfolio-comments');
							?>
						</div>
					</div>
				<?php }
			?>
		</div>
	</div>
</div>