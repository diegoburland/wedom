<?php
$burst_mikado_options = burst_mikado_return_global_options();

$burst_mikado_title_tag = "h5";
if(isset($burst_mikado_options['blog_single_title_tags'])){
    $burst_mikado_title_tag = $burst_mikado_options['blog_single_title_tags'];
}
$burst_mikado_headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');
//get correct heading value
$burst_mikado_title_tag = (in_array($burst_mikado_title_tag, $burst_mikado_headings_array)) ? $burst_mikado_title_tag : 'h5';

$burst_mikado_blog_author_info="no";
if (isset($burst_mikado_options['blog_author_info'])) {
    $burst_mikado_blog_author_info = $burst_mikado_options['blog_author_info'];
}
$burst_mikado_blog_single_loop = "blog_standard_type";

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
<?php
get_template_part('templates/blog/blog_single/'.$burst_mikado_blog_single_loop.'_single', 'loop');
?>

<?php if($burst_mikado_blog_author_info == "yes") {

    $burst_mikado_enable_author_info_email = "no";
    if (isset($burst_mikado_options['enable_author_info_email']) && $burst_mikado_options['enable_author_info_email'] == "yes") {
        $burst_mikado_enable_author_info_email = "yes";
    }

    ?>
    <div class="author_description">
        <div class="author_description_inner">
            <div class="image">
                <?php echo burst_mikado_kses_img(get_avatar(get_the_author_meta( 'ID' ), 102)); ?>
            </div>
            <div class="author_text_holder">
                <<?php echo esc_attr($burst_mikado_title_tag); ?> class="author_name">
                    <?php
                    if(get_the_author_meta('first_name') != "" || get_the_author_meta('last_name') != "") {
                        echo esc_attr(get_the_author_meta('first_name')) . " " . esc_attr(get_the_author_meta('last_name'));
                    } else {
                        echo esc_attr(get_the_author_meta('display_name'));
                    }
                    ?>
                </<?php echo esc_attr($burst_mikado_title_tag);?>>
                <?php if($burst_mikado_enable_author_info_email == "yes" && is_email(get_the_author_meta('email'))){ ?>
                    <span class="author_email"><?php echo sanitize_email(get_the_author_meta('email')); ?></span>
                <?php } ?>
                <?php if(get_the_author_meta('description') != "") { ?>
                    <div class="author_text">
                        <p><?php echo esc_attr(get_the_author_meta('description')); ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>

<?php if( has_tag()) { ?>
    <div class="single_tags clearfix">
        <div class="tags_text">
            <<?php echo esc_attr($burst_mikado_title_tag);?> class="single_tags_heading"><?php esc_html_e('Post Tags:', 'burst'); ?></<?php echo esc_attr($burst_mikado_title_tag);?>>
            <?php the_tags('', '', ''); ?>
        </div>
    </div>
<?php } ?>
<?php
$burst_mikado_args_pages = array(
    'before'           => '<div class="single_links_pages ' .$burst_mikado_pagination_classes. '"><div class="single_links_pages_inner">',
    'after'            => '</div></div>',
    'link_before'      => '<span>',
    'link_after'       => '</span>',
    'pagelink'         => '%'
);

wp_link_pages($burst_mikado_args_pages);
get_template_part('templates/blog/blog_single/blog-navigation');
?>