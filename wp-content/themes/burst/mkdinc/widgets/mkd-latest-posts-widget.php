<?php
if(!class_exists( 'BurstMikadoLatestPosts' )) {
	class BurstMikadoLatestPosts extends WP_Widget {
		private $params;
		
		public function __construct() {
			parent::__construct(
				'mkd_latest_posts_widget',
				// Base ID
				esc_html__('Burst Blog', 'burst'),
				// Name
				array(
					'description' => esc_html__(
						'Display posts from your blog',
						'burst'
					),
				) // Args
			);
			
			$this->setParams();
		}
		
		protected function setParams() {
			$this->params = array(
				array(
					'name'    => 'type',
					'type'    => 'dropdown',
					'title' => esc_html__( 'Type', 'burst' ),
					'options' => array(
						"image_in_box" => esc_html__('Image in left box', 'burst'),
						"minimal"      => esc_html__('Minimal', 'burst')
					)
				),
				array(
					'name'  => 'number_of_posts',
					'type'  => 'textfield',
					'title' => esc_html__('Number of posts', 'burst')
				),
				array(
					'name'    => 'order_by',
					'type'    => 'dropdown',
					'title'   => esc_html__('Order By', 'burst'),
					'options' => array(
						'title' => esc_html__('Title', 'burst'),
						'date'  => esc_html__('Date', 'burst')
					)
				),
				array(
					'name'    => 'order',
					'type'    => 'dropdown',
					'title'   => esc_html__('Order', 'burst'),
					'options' => array(
						'ASC'  => esc_html__('ASC', 'burst'),
						'DESC' => esc_html__('DESC', 'burst')
					)
				),
				array(
					'name'  => 'category',
					'type'  => 'textfield',
					'title' => esc_html__('Category Slug', 'burst')
				),
				array(
					'name'  => 'text_length',
					'type'  => 'textfield',
					'title' => esc_html__('Number of characters', 'burst')
				),
				array(
					'name'    => 'title_tag',
					'type'    => 'dropdown',
					'title'   => esc_html__('Title Tag', 'burst'),
					'options' => array(
						""   => "",
						"h2" => esc_html__( "h2", 'burst' ),
						"h3" => esc_html__( "h3", 'burst' ),
						"h4" => esc_html__( "h4", 'burst' ),
						"h5" => esc_html__( "h5", 'burst' ),
						"h6" => esc_html__( "h6", 'burst' )
					)
				),
				array(
					'name'  => 'title_size',
					'type'  => 'textfield',
					'title' => esc_html__('Title Size (px)', 'burst')
				),
				array(
					'name'  => 'title_color',
					'type'  => 'textfield',
					'title' => esc_html__('Title Color', 'burst')
				),
				array(
					'name'    => 'display_excerpt',
					'type'    => 'dropdown',
					'title'   => esc_html__('Display Excerpt', 'burst'),
					'options' => array(
						''  => esc_html__('Default', 'burst'),
						'0' => esc_html__('No', 'burst'),
						'1' => esc_html__('Yes', 'burst')
					)
				),
				array(
					'name'  => 'excerpt_color',
					'type'  => 'textfield',
					'title' => esc_html__('Excerpt Color', 'burst')
				),
				array(
					'name'    => 'info_position',
					'type'    => 'dropdown',
					'title'   => esc_html__('Info Position', 'burst'),
					'options' => array(
						''       => esc_html__('Default', 'burst'),
						'top'    => esc_html__('Top', 'burst'),
						'bottom' => esc_html__('Bottom', 'burst')
					)
				),
				array(
					'name'  => 'post_info_font_size',
					'type'  => 'textfield',
					'title' => esc_html__('Post info font size (px)', 'burst')
				),
				array(
					'name'  => 'post_info_color',
					'type'  => 'textfield',
					'title' => esc_html__('Post info color', 'burst')
				),
				array(
					'name'  => 'post_info_link_color',
					'type'  => 'textfield',
					'title' => esc_html__('Post info link color', 'burst')
				),
				array(
					'name'  => 'post_info_font_family',
					'type'  => 'textfield',
					'title' => esc_html__( 'Post info font family', 'burst' )
				),
				array(
					'name'    => 'post_info_text_transform',
					'type'    => 'dropdown',
					'title' => esc_html__( 'Post info text transform', 'burst' ),
					'options' => array(
						'' => esc_html__( 'Default', 'burst' ),
						'none' => esc_html__( 'None', 'burst' ),
						'capitalize' => esc_html__( 'Capitalize', 'burst' ),
						'uppercase' => esc_html__( 'Uppercase', 'burst' ),
						'lowercase' => esc_html__( 'Lowercase', 'burst' )
					)
				),
				array(
					'name'    => 'post_info_font_weight',
					'type'    => 'dropdown',
					'title' => esc_html__( 'Post info font weight', 'burst' ),
					'options' => array(
						'' => esc_html__( 'Default', 'burst' ),
						'100' => esc_html__( 'Thin 100', 'burst' ),
						'200' => esc_html__( 'Extra-Light 200', 'burst' ),
						'300' => esc_html__( 'Light 300', 'burst' ),
						'400' => esc_html__( 'Regular 400', 'burst' ),
						'500' => esc_html__( 'Medium 500', 'burst' ),
						'600' => esc_html__( 'Semi-Bold 600', 'burst' ),
						'700' => esc_html__( 'Bold 700', 'burst' ),
						'800' => esc_html__( 'Extra-Bold 800', 'burst' ),
						'900' => esc_html__( 'Ultra-Bold 900', 'burst' )
					)
				),
				array(
					'name'    => 'post_info_font_style',
					'type'    => 'dropdown',
					'title' => esc_html__( 'Post info font style', 'burst' ),
					'options' => array(
						'' => esc_html__( 'Default', 'burst' ),
						'normal' => esc_html__( 'Normal', 'burst' ),
						'italic' => esc_html__( 'Italic', 'burst' )
					)
				),
				array(
					'name'  => 'post_info_letter_spacing',
					'type'  => 'textfield',
					'title' => esc_html__( 'Post info letter spacing (px)', 'burst' )
				),
				array(
					'name'    => 'display_category',
					'type'    => 'dropdown',
					'title' => esc_html__( 'Display Category', 'burst' ),
					'options' => array(
						'' => esc_html__( 'Default', 'burst' ),
						'1' => esc_html__( 'Yes', 'burst' ),
						'0' => esc_html__( 'No', 'burst' )
					)
				),
				array(
					'name'    => 'display_date',
					'type'    => 'dropdown',
					'title' => esc_html__( 'Display Date', 'burst' ),
					'options' => array(
						'' => esc_html__( 'Default', 'burst' ),
						'1' => esc_html__( 'Yes', 'burst' ),
						'0' => esc_html__( 'No', 'burst' )
					)
				),
				array(
					'name'    => 'date_place',
					'type'    => 'dropdown',
					'title' => esc_html__( 'Date Position', 'burst' ),
					'options' => array(
						'by_title' => esc_html__( 'Date by Title', 'burst' ),
						'by_post_info' => esc_html__( 'Date by Post Info', 'burst' )
					)
				),
				array(
					'name'  => 'date_size',
					'type'  => 'textfield',
					'title' => esc_html__( 'Date Size (px)', 'burst' )
				),
				array(
					'name'    => 'display_author',
					'type'    => 'dropdown',
					'title' => esc_html__( 'Display Author', 'burst' ),
					'options' => array(
						'' => esc_html__( 'Default', 'burst' ),
						'1' => esc_html__( 'Yes', 'burst' ),
						'0' => esc_html__( 'No', 'burst' )
					)
				),
				array(
					'name'    => 'display_comments',
					'type'    => 'dropdown',
					'title' => esc_html__( 'Display Comments', 'burst' ),
					'options' => array(
						'' => esc_html__( 'Default', 'burst' ),
						'1' => esc_html__( 'Yes', 'burst' ),
						'0' => esc_html__( 'No', 'burst' )
					)
				),
				array(
					'name'  => 'background_color',
					'type'  => 'textfield',
					'title' => esc_html__( 'Box Background Color', 'burst' )
				),
				array(
					'name'  => 'border_color',
					'type'  => 'textfield',
					'title' => esc_html__( 'Separator Between Item Color', 'burst' )
				),
				array(
					'name'  => 'border_width',
					'type'  => 'textfield',
					'title' => esc_html__( 'Separator Between Item Thickness (px)', 'burst' )
				),
				array(
					'name'    => 'display_button',
					'type'    => 'dropdown',
					'title' => esc_html__( 'Display Button', 'burst' ),
					'options' => array(
						'' => esc_html__( 'Default', 'burst' ),
						'1' => esc_html__( 'Yes', 'burst' ),
						'0' => esc_html__( 'No', 'burst' )
					)
				),
				array(
					'name'    => 'button_size',
					'type'    => 'dropdown',
					'title' => esc_html__( 'Button Size', 'burst' ),
					'options' => array(
						"" => esc_html__( "Default", 'burst' ),
						"small" => esc_html__( "Small", 'burst' ),
						"medium" => esc_html__( "Medium", 'burst' ),
						"large" => esc_html__( "Large", 'burst' ),
						"big_large" => esc_html__( "Extra Large", 'burst' )
					)
				),
				array(
					'name'    => 'button_style',
					'type'    => 'dropdown',
					'title' => esc_html__( 'Button Style', 'burst' ),
					'options' => array(
						"" => esc_html__( "Default", 'burst' ),
						"white" => esc_html__( "White", 'burst' )
					)
				),
				array(
					'name'  => 'button_text',
					'type'  => 'textfield',
					'title' => esc_html__( 'Button Text', 'burst' )
				),
				array(
					'name'  => 'button_color',
					'type'  => 'textfield',
					'title' => esc_html__( 'Button Text Color', 'burst' )
				),
				array(
					'name'  => 'button_hover_color',
					'type'  => 'textfield',
					'title' => esc_html__( 'Button Text Hover Color', 'burst' )
				),
				array(
					'name'  => 'button_background_color',
					'type'  => 'textfield',
					'title' => esc_html__( 'Button Background Color', 'burst' )
				),
				array(
					'name'  => 'button_hover_background_color',
					'type'  => 'textfield',
					'title' => esc_html__( 'Button Hover Background Color', 'burst' )
				),
				array(
					'name'  => 'button_border_color',
					'type'  => 'textfield',
					'title' => esc_html__( 'Button Border Color', 'burst' )
				),
				array(
					'name'  => 'button_border_width',
					'type'  => 'textfield',
					'title' => esc_html__( 'Button Border Width', 'burst' )
				),
				array(
					'name'  => 'button_hover_border_color',
					'type'  => 'textfield',
					'title' => esc_html__( 'Button Hover Border Color', 'burst' )
				),
				array(
					'name'  => 'button_border_radius',
					'type'  => 'textfield',
					'title' => esc_html__( 'Button Border Radius (px)', 'burst' )
				)
			);
		}
		
		public function getParams() {
			return $this->params;
		}
		
		public function widget( $args, $instance ) {
			extract( $args );
			
			//prepare variables
			$content = '';
			$params  = '';
			
			//is instance empty?
			if ( is_array( $instance ) && count( $instance ) ) {
				//generate shortcode params
				foreach ( $instance as $key => $value ) {
					$params .= " $key = '$value' ";
				}
			}
			
			echo '<div class="widget mkd-latest-posts-widget">';
			
			//finally call the shortcode
			echo do_shortcode( "[no_blog_list $params]" ); // XSS OK
			
			echo '</div>'; //close div.mkd-latest-posts-widget
		}
		
		public function form( $instance ) {
			foreach ( $this->params as $param_array ) {
				$param_name    = $param_array['name'];
				${$param_name} = isset( $instance[ $param_name ] ) ? esc_attr( $instance[ $param_name ] ) : '';
			}
			
			foreach ( $this->params as $param ) {
				switch ( $param['type'] ) {
					case 'textfield':
						?>
						<p>
							<label for="<?php echo esc_attr( $this->get_field_id( $param['name'] ) ); ?>"><?php echo
								esc_html( $param['title'] ); ?></label>
							<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( $param['name'] ) ); ?>"
							       name="<?php echo esc_attr( $this->get_field_name( $param['name'] ) ); ?>" type="text"
							       value="<?php echo esc_attr( ${$param['name']} ); ?>"/>
						</p>
						<?php
						break;
					case 'dropdown':
						?>
						<p>
							<label for="<?php echo esc_attr( $this->get_field_id( $param['name'] ) ); ?>"><?php echo
								esc_html( $param['title'] ); ?></label>
							<?php if ( isset( $param['options'] ) && is_array( $param['options'] ) && count(
									$param['options']
								)
							) { ?>
								<select class="widefat"
								        name="<?php echo esc_attr( $this->get_field_name( $param['name'] ) ); ?>"
								        id="<?php echo esc_attr( $this->get_field_id( $param['name'] ) ); ?>">
									<?php foreach ( $param['options'] as $param_option_key => $param_option_val ) {
										$option_selected = '';
										if ( ${$param['name']} == $param_option_key ) {
											$option_selected = 'selected';
										}
										?>
										<option <?php echo esc_attr( $option_selected ); ?>value="<?php echo esc_attr(
											$param_option_key
										); ?>"><?php echo esc_attr( $param_option_val ); ?></option>
									<?php } ?>
								</select>
							<?php } ?>
						</p>
						
						<?php
						break;
				}
			}
		}
		
		public function update( $new_instance, $old_instance ) {
			$instance = array();
			foreach ( $this->params as $param ) {
				$param_name = $param['name'];
				
				$instance[ $param_name ] = sanitize_text_field( $new_instance[ $param_name ] );
			}
			
			return $instance;
		}
	}
}