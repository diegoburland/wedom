<?php 
$burst_mikado_options = burst_mikado_return_global_options();
$burst_mikado_title_tag="h5";
if(isset($burst_mikado_options['blog_single_title_tags'])){
    $burst_mikado_title_tag = $burst_mikado_options['blog_single_title_tags'];
}
$burst_mikado_headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');
//get correct heading value
$burst_mikado_title_tag = (in_array($burst_mikado_title_tag, $burst_mikado_headings_array)) ? $burst_mikado_title_tag : 'h5';

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

<div class="comment_holder clearfix" id="comments">
<div class="comment_number"><div class="comment_number_inner"><<?php echo esc_attr($burst_mikado_title_tag); ?> class="comments_number_tag"><?php comments_number( esc_html__('No Comments','burst'), '1'.esc_html__(' Comment ','burst'), '% '.esc_html__(' Comments ','burst')); ?></<?php echo esc_attr($burst_mikado_title_tag); ?>></div></div>
<div class="comments">
<?php if ( post_password_required() ) : ?>
				<p class="nopassword"><?php esc_html_e( 'This post is password protected. Enter the password to view any comments.', 'burst' ); ?></p>
			</div></div>
<?php
		
		return;
	endif;
?>
<?php if ( have_comments() ) : ?>

	<ul class="comment-list <?php if(isset($burst_mikado_options['blog_comments_reply_link_on_bottom_yes_no'])&& $burst_mikado_options['blog_comments_reply_link_on_bottom_yes_no']=='yes' ) echo "bottom-comment-link" ;?>">
		<?php wp_list_comments(array( 'callback' => 'burst_mikado_comment')); ?>
	</ul>


<?php // End Comments ?>

 <?php else : // this is displayed if there are no comments so far 

	if ( ! comments_open() ) :
?>
		<!-- If comments are open, but there are no comments. -->

	 
		<!-- If comments are closed. -->
		<p><?php esc_html_e('Sorry, the comment form is closed at this time.', 'burst'); ?></p>

	<?php endif; ?>
<?php endif; ?>
</div></div>
<?php
$burst_mikado_commenter = wp_get_current_commenter();
$burst_mikado_req = get_option( 'require_name_email' );
$burst_mikado_aria_req = ( $burst_mikado_req ? " aria-required='true'" : '' );
$burst_mikado_consent  = empty( $burst_mikado_commenter['comment_author_email'] ) ? '' : ' checked="checked"';

$burst_mikado_args = array(
	'id_form' => 'commentform',
	'id_submit' => 'submit_comment',
	'title_reply'=>'<'.$burst_mikado_title_tag.' class="leave_comment">'. esc_html__( 'Leave a Comment','burst' ) .'</'.$burst_mikado_title_tag.'>',
	'title_reply_to' => esc_html__( 'Post a Reply to %s','burst' ),
	'cancel_reply_link' => esc_html__( 'Cancel Reply','burst' ),
	'label_submit' => esc_html__( 'Submit','burst' ),
	'comment_field' => '<textarea id="comment" placeholder="'.esc_html__( 'Write your comment here...','burst' ).'" name="comment" cols="45" rows="8" aria-required="true"></textarea>',
	'comment_notes_before' => '',
	'comment_notes_after' => '',
	'fields' => apply_filters( 'comment_form_default_fields', array(
		'author' => '<div class="three_columns clearfix"><div class="column1"><div class="column_inner"><input id="author" name="author" placeholder="'. esc_html__( 'Name','burst' ) .'" type="text" value="' . esc_attr( $burst_mikado_commenter['comment_author'] ) . '"' . $burst_mikado_aria_req . ' /></div></div>',
		'url' => '<div class="column2"><div class="column_inner"><input id="email" name="email" placeholder="'. esc_html__( 'E-mail','burst' ) .'" type="text" value="' . esc_attr(  $burst_mikado_commenter['comment_author_email'] ) . '"' . $burst_mikado_aria_req . ' /></div></div>',
		'email' => '<div class="column3"><div class="column_inner"><input id="url" name="url" type="text" placeholder="'. esc_html__( 'Website','burst' ) .'" value="' . esc_attr( $burst_mikado_commenter['comment_author_url'] ) . '" /></div></div></div>',
        'cookies' => '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $burst_mikado_consent . ' />' .
            '<label for="wp-comment-cookies-consent">' . esc_html__( 'Save my name, email, and website in this browser for the next time I comment.', 'burst' ) . '</label></p>'
    ) ) );
 ?>
<?php if(get_comment_pages_count() > 1){
	?>
	<div class="comment_pager <?php echo esc_attr($burst_mikado_pagination_classes); ?>">
		<p><?php paginate_comments_links(); ?></p>
	</div>
<?php } ?>
 <div class="comment_form">
	<?php comment_form($burst_mikado_args); ?>
</div>
								
							


