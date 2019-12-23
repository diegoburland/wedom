<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <?php
    /**
     * @see burst_mikado_header_meta() - hooked with 10
     * @see mkd_user_scalable - hooked with 10
     */
    ?>
	<?php do_action('burst_mikado_header_meta'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php
        extract(burst_mikado_get_header_variables());
        $burst_mikado_options = burst_mikado_return_global_options();
        $burst_mikado_icon_collections = burst_mikado_return_icon_collections();
    ?>

    <?php get_template_part( 'mkdinc/modules/preloader' ); ?>
    <?php get_template_part( 'mkdinc/modules/sidearea' ); ?>


    <div class="wrapper">
    <div class="wrapper_inner">

        <?php do_action( 'burst_mikado_after_wrapper_inner_begin' ); ?>

        <?php get_template_part( 'mkdinc/modules/header' ); ?>
        <?php get_template_part( 'mkdinc/modules/back-to-top' ); ?>
        <?php get_template_part( 'mkdinc/modules/passepartout' ); ?>

            <div class="<?php echo esc_attr( apply_filters( 'burst_mikado_content_classes', 'content' ) ); ?>">

                <?php do_action( 'burst_mikado_after_content_begin' ); ?>

                <div class="<?php echo esc_attr( apply_filters( 'burst_mikado_content_inner_classes', 'content_inner' ) ); ?>">

                    <?php do_action( 'burst_mikado_after_content_inner_begin' ); ?>