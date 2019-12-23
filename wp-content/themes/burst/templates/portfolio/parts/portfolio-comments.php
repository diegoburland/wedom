<?php
$burst_mikado_options = burst_mikado_return_global_options();

//get portfolio comment value
$burst_mikado_portfolio_hide_comments = "";
if(get_post_meta(get_the_ID(), "mkd_portfolio-hide-comments", true) == "yes"){
	$burst_mikado_portfolio_hide_comments = "yes";
} elseif (isset($burst_mikado_options['portfolio_hide_comments'])){
	$burst_mikado_portfolio_hide_comments = $burst_mikado_options['portfolio_hide_comments'];
}

if($burst_mikado_portfolio_hide_comments != "yes"){
	comments_template('', true); 
}