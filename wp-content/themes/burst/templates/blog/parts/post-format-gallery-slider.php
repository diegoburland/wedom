<?php
$burst_mikado_options = burst_mikado_return_global_options();
$burst_mikado_id = burst_mikado_get_page_id();
$burst_mikado_template_name = get_page_template_slug($burst_mikado_id);
?>


<div class="flexslider">
	<ul class="slides">
		<?php
		
		$image_gallery_val = get_post_meta( $post->ID, 'mkd_post-image-gallery' , true );
		if($image_gallery_val!='' ) $image_gallery_array=explode(',',$image_gallery_val);

        $blog_image_size = 'full';
        $blog_type = '';
        $image_height = '';
        $image_width = '';

        if(is_single()) {
            $blog_type = 'blog_single';
        }
        elseif($burst_mikado_template_name == "blog-standard.php" || $burst_mikado_template_name == "blog-standard-whole-post.php") {
            $blog_type = 'blog_standard_type';
        }

        if($blog_type !== ''){
            if( isset($burst_mikado_options[$blog_type.'_image_size']) && $burst_mikado_options[$blog_type.'_image_size'] !== '') {
                $blog_image_size = $burst_mikado_options[$blog_type.'_image_size'];

            }

            if( $blog_image_size == 'custom'
                && isset($burst_mikado_options[$blog_type.'_image_size_height']) && $burst_mikado_options[$blog_type.'_image_size_height'] !== ''
                && isset($burst_mikado_options[$blog_type.'_image_size_width']) && $burst_mikado_options[$blog_type.'_image_size_width'] !== '') {

                $image_height = $burst_mikado_options[$blog_type.'_image_size_height'];
                $image_width = $burst_mikado_options[$blog_type.'_image_size_width'];
            }

        }


        if(isset($image_gallery_array) && count($image_gallery_array)!=0):

			foreach($image_gallery_array as $gimg_id): ?>
		
				<li><a href="<?php the_permalink(); ?>">
                        <?php if( $blog_image_size == 'custom' && $image_height !== '' && $image_height !== ''){
                            echo burst_mikado_generate_thumbnail($gimg_id,null,$image_width,$image_height);
                        }
                        else{
                            echo wp_get_attachment_image($gimg_id, $blog_image_size);
                        }
                        ?>
                    </a>
                </li>

			<?php endforeach;

		endif;
		?>
	</ul>
</div>
