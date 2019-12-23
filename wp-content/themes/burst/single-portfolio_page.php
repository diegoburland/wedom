<?php

//init variables
$burst_mikado_options = burst_mikado_return_global_options();
$burst_mikado_id = burst_mikado_get_page_id();
$burst_mikado_portfolio_template = 'small-images';

//is portfolio template set for current portfolio?
if(get_post_meta(get_the_ID(), "mkd_choose-portfolio-single-view", true) != "") {
	$burst_mikado_portfolio_template = get_post_meta(get_the_ID(), "mkd_choose-portfolio-single-view", true);
} elseif($burst_mikado_options['portfolio_style'] !== '') {
	//get default portfolio template if set in theme's options
	$burst_mikado_portfolio_template = $burst_mikado_options['portfolio_style'];
}
?>

<?php get_header(); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'title' ); ?>
			<?php get_template_part('slider'); ?>

			<?php

			//is current portfolio template full width?
			if($burst_mikado_portfolio_template !== 'full-width-custom') {
				//load general portfolio structure which will load proper template
				get_template_part('templates/portfolio/portfolio-structure');
			} else {
				//load custom full width template that doesn't have anything in common with other
				get_template_part('templates/portfolio/portfolio', $burst_mikado_portfolio_template);
			}
			?>
		<?php endwhile; ?>
	<?php endif; ?>	
<?php get_footer(); ?>	