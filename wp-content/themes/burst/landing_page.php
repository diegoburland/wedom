<?php
/*
Template Name: Landing Page
*/
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
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <?php
        $burst_mikado_is_IE = burst_mikado_return_ie_variable();
        if ($burst_mikado_is_IE) { ?>
            <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <?php } ?>

        <?php
        /**
         * burst_mikado_header_meta hook
         *
         * @see burst_mikado_header_meta() - hooked with 10
         * @see burst_mikado_user_scalable_meta() - hooked with 10
         */
        do_action('burst_mikado_header_meta');
        ?>

        <?php wp_head(); ?>

    </head>

<body <?php body_class(); ?>>

<div class="wrapper">
    <div class="wrapper_inner">
        <div class="content content_top_margin_none">
            <div class="content_inner">
                <?php get_template_part( 'title' ); ?>
                <?php get_template_part('slider');?>
                <div class="full_width" <?php burst_mikado_inline_style($burst_mikado_background_color); ?>>
                    <div class="full_width_inner">
                        <?php if(($burst_mikado_sidebar == "default")||($burst_mikado_sidebar == "")) : ?>
                            <?php if (have_posts()) :
                                while (have_posts()) : the_post(); ?>
                                    <?php the_content(); ?>
                                    <?php
                                    $burst_mikado_args_pages = array(
                                        'before'           => '<div class="single_links_pages ' .$burst_mikado_pagination_classes. '"><div class="single_links_pages_inner">',
                                        'after'            => '</p>',
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
                            <div class="column1">
                        <?php elseif($burst_mikado_sidebar == "2") : ?>
                        <div class="two_columns_75_25 clearfix grid2">
                            <div class="column1">
                                <?php endif; ?>
                                <?php if (have_posts()) :
                                    while (have_posts()) : the_post(); ?>
                                        <div class="column_inner">

                                            <?php the_content(); ?>
                                            <?php
                                            $burst_mikado_args_pages = array(
                                                'before'           => '<div class="single_links_pages ' .$burst_mikado_pagination_classes. '"><div class="single_links_pages_inner">',
                                                'after'            => '</p>',
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
                            <div class="column2">
                                <?php elseif($burst_mikado_sidebar == "4") : ?>
                                <div class="two_columns_25_75 clearfix grid2">
                                    <div class="column1"><?php get_sidebar();?></div>
                                    <div class="column2">
                                        <?php endif; ?>
                                        <?php if (have_posts()) :
                                            while (have_posts()) : the_post(); ?>
                                                <div class="column_inner">
                                                    <?php the_content(); ?>
                                                    <?php
                                                    $burst_mikado_args_pages = array(
                                                        'before'           => '<div class="single_links_pages ' .$burst_mikado_pagination_classes. '"><div class="single_links_pages_inner">',
                                                        'after'            => '</p>',
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
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>