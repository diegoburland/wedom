<?php
if (!function_exists('burst_mikado_option_has_value')) {
	/**
	 * Function that checks if option has value from theme options.
	 * It first checks global $burst_mikado_options variable and if option does'nt exists there
	 * it checks default theme options
	 *
	 * @param $name string name of the option to retrieve
	 * @return bool
	 */
	function burst_mikado_option_has_value($name) {
		global $burst_mikado_options;
		global $burst_mikado_Framework;

		if (array_key_exists($name, $burst_mikado_Framework->mkdOptions->options)) {
			if (isset($burst_mikado_options[$name]) && $burst_mikado_options[$name] !== '') {
				return true;
			} else {
				return false;
			}
		} else {
			global $post;

			$value = get_post_meta($post->ID, $name, true);

			if (isset($value) && $value !== "") {
				return true;
			} else {
				return false;
			}
		}

	}
}
if (!function_exists('burst_mikado_option_get_value')) {
	/**
	 * Function that gets option by it's name.
	 * It first checks if option exists in $burst_mikado_options global array and if it does'nt exists there
	 * it checks default theme options array.
	 *
	 * @param $name string name of the option to retrieve
	 * @return mixed|void
	 */
	function burst_mikado_option_get_value($name) {
		global $burst_mikado_options;
		global $burst_mikado_Framework;

		if (array_key_exists($name, $burst_mikado_Framework->mkdOptions->options)) {
			if (isset($burst_mikado_options[$name])) {
				return $burst_mikado_options[$name];
			} else {
				return $burst_mikado_Framework->mkdOptions->getOption($name);
			}
		} else {
			global $post;

			if (isset($post)) {
				$value = get_post_meta($post->ID, $name, true);
				if (isset($value) && $value !== "") {
					return $value;
				} else {
					return $burst_mikado_Framework->mkdMetaBoxes->getOption($name);
				}
			}

		}
	}
}
if (!function_exists('burst_mikado_get_attachment_thumb_url')) {
	/**
	 * Function that gets attachment thumbnail url from attachment url
	 *
	 * @param $attachment_url string url of the attachment
	 *
	 * @return bool|string
	 *
	 * @see burst_mikado_get_attachment_id_from_url()
	 */
	function burst_mikado_get_attachment_thumb_url($attachment_url) {
		$attachment_id = burst_mikado_get_attachment_id_from_url($attachment_url);

		if (!empty($attachment_id)) {
			return wp_get_attachment_thumb_url($attachment_id);
		} else {
			return $attachment_url;
		}
	}
}
if (!function_exists('burst_mikado_enqueue_skin_style')) {
	/**
	 * Function that enqueue skin style. Wrapper around wp_enqueue_style function,
	 * it prepends $src with skin path
	 * @param $handle string unique key for style
	 * @param $src string path inside skin folder
	 * @param array $deps array of handles that style will depend on
	 * @param bool|string $ver whether to add version string or not.
	 * @param string $media media for which to add style. Defaults to 'all'
	 *
	 * @see wp_enqueue_style()
	 */
	function burst_mikado_enqueue_skin_style($handle, $src, $deps = array(), $ver = false, $media = 'all') {
		global $burst_mikado_Framework;

		$src = get_template_directory_uri() . '/mkdinc/admin/skins/' . $burst_mikado_Framework->getSkin() . '/' . $src;
		wp_enqueue_style($handle, $src, $deps, $ver, $media);
	}
}
if (!function_exists('burst_mikado_register_skin_style')) {
	/**
	 * Function that registers skin style. Wrapper around wp_register_style function,
	 * it prepends $src with skin path
	 * @param $handle string unique key for style
	 * @param $src string path inside skin folder
	 * @param array $deps array of handles that style will depend on
	 * @param bool|string $ver whether to add version string or not.
	 * @param string $media media for which to add style. Defaults to 'all'
	 *
	 * @see wp_register_style()
	 */
	function burst_mikado_register_skin_style($handle, $src, $deps = array(), $ver = false, $media = 'all') {
		global $burst_mikado_Framework;

		$src = get_template_directory_uri() . '/mkdinc/admin/skins/' . $burst_mikado_Framework->getSkin() . '/' . $src;
		wp_register_style($handle, $src, $deps = array(), $ver = false, $media = 'all');
	}
}
if (!function_exists('burst_mikado_enqueue_skin_script')) {
	/**
	 * Function that enqueue skin script. Wrapper around wp_enqueue_script function,
	 * it prepends $src with skin path
	 * @param $handle string unique key for style
	 * @param $src string path inside skin folder
	 * @param array $deps array of handles that style will depend on
	 * @param bool|string $ver whether to add version string or not.
	 * @param bool $in_footer whether to include script in footer or not.
	 *
	 * @see wp_enqueue_script()
	 */
	function burst_mikado_enqueue_skin_script($handle, $src, $deps = array(), $ver = false, $in_footer = false) {
		global $burst_mikado_Framework;

		$src = get_template_directory_uri() . '/mkdinc/admin/skins/' . $burst_mikado_Framework->getSkin() . '/' . $src;
		wp_enqueue_script($handle, $src, $deps, $ver, $in_footer);
	}
}
if (!function_exists('burst_mikado_register_skin_script')) {
	/**
	 * Function that registers skin script. Wrapper around wp_register_script function,
	 * it prepends $src with skin path
	 * @param $handle string unique key for style
	 * @param $src string path inside skin folder
	 * @param array $deps array of handles that style will depend on
	 * @param bool|string $ver whether to add version string or not.
	 * @param bool $in_footer whether to include script in footer or not.
	 *
	 * @see wp_register_script()
	 */
	function burst_mikado_register_skin_script($handle, $src, $deps = array(), $ver = false, $in_footer = false) {
		global $burst_mikado_Framework;

		$src = get_template_directory_uri() . '/mkdinc/admin/skins/' . $burst_mikado_Framework->getSkin() . '/' . $src;
		wp_register_script($handle, $src, $deps, $ver, $in_footer);
	}
}
if (!function_exists('burst_mikado_generate_dynamic_css_and_js')){
	/**
	 * Function that gets content of dynamic assets files and puts that in static ones
	 */
	function burst_mikado_generate_dynamic_css_and_js() {
		global $wp_filesystem;
		WP_Filesystem();

		$burst_mikado_options = get_option('mkd_options_burst');
		if(burst_mikado_is_css_folder_writable()) {
			$css_dir = get_template_directory().'/css/';

			ob_start();
			include_once $css_dir.'style_dynamic.php';
			$css = ob_get_clean();
            if ( is_multisite() ) {
                $wp_filesystem->put_contents($css_dir.'style_dynamic_ms_id_' . burst_mikado_get_multisite_blog_id() . '.css', $css);
            } else{
                $wp_filesystem->put_contents($css_dir.'style_dynamic.css', $css);
            }

			ob_start();
			include_once $css_dir.'style_dynamic_responsive.php';
			$css = ob_get_clean();
            if ( is_multisite() ) {
                $wp_filesystem->put_contents($css_dir.'style_dynamic_responsive_ms_id_' . burst_mikado_get_multisite_blog_id() . '.css', $css);
            } else{
                $wp_filesystem->put_contents($css_dir.'style_dynamic_responsive.css', $css);
            }
		}

		if(burst_mikado_is_js_folder_writable()) {
			$js_dir = get_template_directory().'/js/';

			ob_start();
			include_once $js_dir.'default_dynamic.php';
			$js = ob_get_clean();
            if ( is_multisite() ) {
                $wp_filesystem->put_contents($css_dir.'default_dynamic_ms_id_' . burst_mikado_get_multisite_blog_id() . '.js', $js);
            } else{
                $wp_filesystem->put_contents($js_dir.'default_dynamic.js', $js);
            }
		}
	}

	if(!is_multisite()) {
		add_action('mkd_after_theme_option_save', 'burst_mikado_generate_dynamic_css_and_js');
	}
}

if (!function_exists('burst_mikado_gallery_upload_get_images')) {
	/**
	 * Function that outputs single image html that is used in multiple image upload field
	 * Hooked to wp_ajax_mkd_gallery_upload_get_images action
	 */
	function burst_mikado_gallery_upload_get_images(){
		$ids = sanitize_text_field($_POST['ids']);
		$ids = explode(",",$ids);
		foreach($ids as $id):
			$image = wp_get_attachment_image_src($id,'thumbnail', true);
			echo '<li class="mkd-gallery-image-holder"><img src="'.esc_url($image[0]).'"/></li>';
		endforeach;
		exit;
	}

	add_action( 'wp_ajax_burst_mikado_gallery_upload_get_images', 'burst_mikado_gallery_upload_get_images');
}

if (!function_exists('burst_mikado_hex2rgb')) {
	/**
	 * Function that transforms hex color to rgb color
	 * @param $hex string original hex string
	 * @return array array containing three elements (r, g, b)
	 */
	function burst_mikado_hex2rgb($hex) {
		$hex = str_replace("#", "", $hex);

		if(strlen($hex) == 3) {
			$r = hexdec(substr($hex,0,1).substr($hex,0,1));
			$g = hexdec(substr($hex,1,1).substr($hex,1,1));
			$b = hexdec(substr($hex,2,1).substr($hex,2,1));
		} else {
			$r = hexdec(substr($hex,0,2));
			$g = hexdec(substr($hex,2,2));
			$b = hexdec(substr($hex,4,2));
		}
		$rgb = array($r, $g, $b);
		//return implode(",", $rgb); // returns the rgb values separated by commas
		return $rgb; // returns an array with the rgb values
	}
}

if(!function_exists('burst_mikado_addslashes')) {
	/**
	 * Function that checks if magic quotes are turned on (for older versions of php) and returns escaped string
	 * @param $str string string to be escaped
	 * @return string escaped string
	 */
	function burst_mikado_addslashes($str) {
		//is magic quotes turned off in php.ini?
		if(!get_magic_quotes_gpc()) {
			//apply addslashes
			$str = addslashes($str);
		}

		//return escaped string
		return $str;
	}
}

if(!function_exists('burst_mikado_get_attachment_meta')) {
	/**
	 * Function that returns attachment meta data from attachment id
	 * @param $attachment_id
	 * @param array $keys sub array of attachment meta
	 * @return array|mixed
	 */
	function burst_mikado_get_attachment_meta($attachment_id, $keys = array()) {
		$meta_data = array();

		//is attachment id set?
		if(!empty($attachment_id)) {
			//get all post meta for given attachment id
			$meta_data = get_post_meta($attachment_id, '_wp_attachment_metadata', true);

			//is subarray of meta array keys set?
			if(is_array($keys) && count($keys)) {
				$sub_array = array();

				//for each defined key
				foreach($keys as $key) {
					//check if that key exists in all meta array
					if(array_key_exists($key, $meta_data)) {
						//assign key from meta array for current key to meta subarray
						$sub_array[$key] = $meta_data[$key];
					}
				}

				//we want meta array to be subarray because that is what used whants to get
				$meta_data = $sub_array;
			}
		}

		//return meta array
		return $meta_data;
	}
}

if(!function_exists('burst_mikado_get_attachment_id_from_url')) {
	/**
	 * Function that retrieves attachment id for passed attachment url
	 * @param $attachment_url
	 * @return null|string
	 */
	function burst_mikado_get_attachment_id_from_url($attachment_url) {
		global $wpdb;
		$attachment_id = '';

		//is attachment url set?
		if($attachment_url !== '') {
			//prepare query

			$query = $wpdb->prepare("SELECT ID FROM {$wpdb->posts} WHERE guid=%s", $attachment_url);

			//get attachment id
			$attachment_id = $wpdb->get_var($query);
		}

		//return id
		return $attachment_id;
	}
}

if(!function_exists('burst_mikado_get_attachment_meta_from_url')) {
	/**
	 * Function that returns meta array for give attachment url
	 *
*@param $attachment_url
	 * @param array $keys sub array of attachment meta
	 *
*@return array|mixed
	 *
	 * @see burst_mikado_get_attachment_id_from_url()
	 * @see burst_mikado_get_attachment_meta()
	 *
	 * @version 0.1
	 */
	function burst_mikado_get_attachment_meta_from_url($attachment_url, $keys = array()) {
		$attachment_meta = array();

		//get attachment id for attachment url
		$attachment_id = burst_mikado_get_attachment_id_from_url($attachment_url);

		//is attachment id set?
		if(!empty($attachment_id)) {
			//get post meta
			$attachment_meta = burst_mikado_get_attachment_meta($attachment_id, $keys);
		}

		//return post meta
		return $attachment_meta;
	}
}

if(!function_exists('burst_mikado_get_image_dimensions')) {
	/**
	 * Function that returns image sizes array. First looks in post_meta table if attachment exists in the database,
	 * if it doesn't than it uses getimagesize PHP function to get image sizes
	 *
*@param $url string url of the image
	 *
*@return array array of image sizes that containes height and width
	 *
	 * @see burst_mikado_get_attachment_meta_from_url()
	 * @uses getimagesize
	 *
	 * @version 0.1
	 */
	function burst_mikado_get_image_dimensions($url) {
		$image_sizes = array();

		//is url passed?
		if($url !== '') {
			//get image sizes from posts meta if attachment exists
			$image_sizes = burst_mikado_get_attachment_meta_from_url($url, array('width', 'height'));

			//image does not exists in post table, we have to use PHP way of getting image size
			if(!count($image_sizes)) {
                require_once( ABSPATH . 'wp-admin/includes/file.php' );
				//can we open file by url?
				if(ini_get('allow_url_fopen') == 1 && file_exists($url)) {
					list($width, $height, $type, $attr) = getimagesize($url);
				} else {
					//we can't open file directly, have to locate it with relative path.
					$image_obj = parse_url($url);
                    $image_relative_path = rtrim( get_home_path(), '/' ) . $image_obj['path'];

					if(file_exists($image_relative_path)) {
						list($width, $height, $type, $attr) = getimagesize($image_relative_path);
					}
				}

				//did we get width and height from some of above methods?
				if(isset($width) && isset($height)) {
					//set them to our image sizes array
					$image_sizes = array(
						'width' => $width,
						'height' => $height
					);
				}
			}
		}

		return $image_sizes;
	}
}

if(!function_exists('burst_mikado_get_native_fonts_list')) {
	/**
	 * Function that returns array of native fonts
	 * @return array
	 */
	function burst_mikado_get_native_fonts_list(){

		return array(
			'Arial',
			'Arial Black',
			'Comic Sans MS',
			'Courier New',
			'Georgia',
			'Impact',
			'Lucida Console',
			'Lucida Sans Unicode',
			'Palatino Linotype',
			'Tahoma',
			'Times New Roman',
			'Trebuchet MS',
			'Verdana');

	}
}

if(!function_exists('burst_mikado_get_native_fonts_array')) {
	/**
	 * Function that returns formatted array of native fonts
	 *
	 * @uses burst_mikado_get_native_fonts_list()
	 * @return array
	 */
	function burst_mikado_get_native_fonts_array(){
		$native_fonts_list = burst_mikado_get_native_fonts_list();
		$native_font_index = 0;
		$native_fonts_array = array();

		foreach($native_fonts_list as $native_font){
			$native_fonts_array[$native_font_index] = array('family' => $native_font);
			$native_font_index++;
		}

		return $native_fonts_array;
	}
}

if(!function_exists('burst_mikado_is_native_font')) {
	/**
	 * Function that checks if given font is native font
	 * @param $font_family string
	 * @return bool
	 */
	function burst_mikado_is_native_font($font_family) {
		return  in_array(str_replace('+', ' ', $font_family), burst_mikado_get_native_fonts_list());
	}
}


if(!function_exists('burst_mikado_merge_fonts')) {
	/**
	 * Function that merge google and native fonts
	 *
	 * @uses burst_mikado_get_native_fonts_array()
	 * @return array
	 */
	function burst_mikado_merge_fonts() {
		global $burst_mikado_fonts_array;
		$native_fonts = burst_mikado_get_native_fonts_array();

		if(is_array($native_fonts) && count($native_fonts)){
			$burst_mikado_fonts_array = array_merge($native_fonts, $burst_mikado_fonts_array);
		}
	}

	add_action('admin_init', 'burst_mikado_merge_fonts');
}

if(!function_exists('burst_mikado_inline_style')) {
	/**
	 * Function that echoes generated style attribute
	 *
*@param $value string | array attribute value
	 *
	 * @see burst_mikado_get_inline_style()
	 */
	function burst_mikado_inline_style($value) {
		echo burst_mikado_get_inline_style($value);
	}
}

if(!function_exists('burst_mikado_get_inline_style')) {
	/**
	 * Function that generates style attribute and returns generated string
	 *
*@param $value string | array value of style attribute
	 *
*@return string generated style attribute
	 *
	 * @see burst_mikado_get_inline_style()
	 */
	function burst_mikado_get_inline_style($value) {
		return burst_mikado_get_inline_attr($value, 'style', ';');
	}
}

if(!function_exists('burst_mikado_class_attribute')) {
	/**
	 * Function that echoes class attribute
	 *
*@param $value string value of class attribute
	 *
	 * @see burst_mikado_get_class_attribute()
	 */
	function burst_mikado_class_attribute($value) {
		echo burst_mikado_get_class_attribute($value);
	}
}

if(!function_exists('burst_mikado_get_class_attribute')) {
	/**
	 * Function that returns generated class attribute
	 *
*@param $value string value of class attribute
	 *
*@return string generated class attribute
	 *
	 * @see burst_mikado_get_inline_attr()
	 */
	function burst_mikado_get_class_attribute($value) {
		return burst_mikado_get_inline_attr($value, 'class');
	}
}

if(!function_exists('burst_mikado_get_inline_attr')) {
	/**
	 * Function that generates html attribute
	 * @param $value string | array value of html attribute
	 * @param $attr string name of html attribute to generate
	 * @param $glue string glue with which to implode $attr. Used only when $attr is array
	 * @return string generated html attribute
	 */
	function burst_mikado_get_inline_attr($value, $attr, $glue = '') {
		if(!empty($value)) {

			if(is_array($value) && count($value)) {
				$properties = implode($glue, $value);
			} elseif($value !== '') {
				$properties = $value;
			}

			return $attr.'="'.esc_attr($properties).'"';
		}

		return '';
	}
}

if ( ! function_exists('burst_mikado_get_module_part') ) {
	function burst_mikado_get_module_part($module ) {
		return $module;
	}
}

if(!function_exists('burst_mikado_get_skin_uri')) {
    /**
     * Returns current skin URI
     * @return mixed
     */
    function burst_mikado_get_skin_uri() {
		global $burst_mikado_Framework;

		$current_skin = $burst_mikado_Framework->getSkin();

		return $current_skin->getSkinURI();
	}
}

if(!function_exists('burst_mikado_core_installed')) {
    /**
     * Checks if core plugin is installed
     * @return bool
     */
    function burst_mikado_core_installed() {
        return defined('MIKADO_CORE_VERSION');
    }
}

if(!function_exists('burst_mikado_core_plugin_message')) {
    /**
     * Function that prints a mesasge in the admin if user hides TGMPA plugin activation message
     */
    function burst_mikado_core_plugin_message() {
        if(get_user_meta(get_current_user_id(), 'tgmpa_dismissed_notice', true) && !burst_mikado_core_installed()) {
            echo apply_filters('burst_mikado_core_plugin_message', '<div class="update-nag">'.esc_html__('Installation of the "Mikado
            Core" plugin is
            essential for
            proper
            theme functioning. Please','burst').'<a href="'.admin_url('themes.php?page=install-required-plugins')
                    .'">'.esc_html__('install','burst').'</a>'.esc_html__(' this
            plugin and activate it', 'burst').'</div>');
        }
    }

    add_action('admin_notices', 'burst_mikado_core_plugin_message');
}

if(!function_exists('burst_mikado_get_theme_info_item')) {
    /**
     * Returns desired info of the current theme
     * @param $item string info item to get
     * @return string
     */
    function burst_mikado_get_theme_info_item($item) {
        if($item !== '') {
            $current_theme = wp_get_theme();

            if($current_theme->parent()) {
                $current_theme = $current_theme->parent();
            }

            if($current_theme->exists() && $current_theme->get($item) != "") {
                return $current_theme->get($item);
            }
        }

        return '';
    }
}

if(!function_exists('burst_mikado_resize_image')) {
    /**
     * Functin that generates custom thumbnail for given attachment
     *
*@param null $attach_id id of attachment
     * @param null $attach_url URL of attachment
     * @param int $width desired height of custom thumbnail
     * @param int $height desired width of custom thumbnail
     * @param bool $crop whether to crop image or not
     *
*@return array returns array containing img_url, width and height
     *
     * @see burst_mikado_get_attachment_id_from_url()
     * @see get_attached_file()
     * @see wp_get_attachment_url()
     * @see wp_get_image_editor()
     */
    function burst_mikado_resize_image($attach_id = null, $attach_url = null, $width = null, $height = null, $crop = true) {
        $return_array = array();

        //is attachment id empty?
        if(empty($attach_id) && $attach_url !== '') {
            //get attachment id from url
            $attach_id = burst_mikado_get_attachment_id_from_url($attach_url);
        }

        if(!empty($attach_id) && (isset($width) && isset($height))) {

            //get file path of the attachment
            $img_path = get_attached_file($attach_id);

            //get attachment url
            $img_url  = wp_get_attachment_url($attach_id);

            //break down img path to array so we can use it's components in building thumbnail path
            $img_path_array = pathinfo($img_path);

            //build thumbnail path
            $new_img_path = $img_path_array['dirname'].'/'.$img_path_array['filename'].'-'.$width.'x'.$height.'.'.$img_path_array['extension'];

            //build thumbnail url
            $new_img_url = str_replace($img_path_array['filename'], $img_path_array['filename'].'-'.$width.'x'.$height, $img_url);

            //check if thumbnail exists by it's path
            if(!file_exists($new_img_path)) {
                //get image manipulation object
                $image_object = wp_get_image_editor($img_path);

                if(!is_wp_error($image_object)) {
                    //resize image and save it new to path
                    $image_object->resize($width, $height, $crop);
                    $image_object->save($new_img_path);

                    //get sizes of newly created thumbnail.
                    ///we don't use $width and $height because those might differ from end result based on $crop parameter
                    $image_sizes = $image_object->get_size();

                    $width = $image_sizes['width'];
                    $height = $image_sizes['height'];
                }
            }

            //generate data to be returned
            $return_array = array(
                'img_url' => $new_img_url,
                'img_width' => $width,
                'img_height' => $height
            );
        }

        //attachment wasn't found, probably because it comes from external source
        elseif($attach_url !== '' && (isset($width) && isset($height))) {
            //generate data to be returned
            $return_array = array(
                'img_url' => $attach_url,
                'img_width' => $width,
                'img_height' => $height
            );
        }

        return $return_array;
    }
}

if(!function_exists('burst_mikado_generate_thumbnail')) {
    /**
     * Generates thumbnail img tag. It calls burst_mikado_resize_image function which resizes img on the fly
     *
*@param null $attach_id attachment id
     * @param null $attach_url attachment URL
     * @param  int$width width of thumbnail
     * @param int $height height of thumbnail
     * @param bool $crop whether to crop thumbnail or not
     *
*@return string generated img tag
     *
     * @see burst_mikado_resize_image()
     * @see burst_mikado_get_attachment_id_from_url()
     */
    function burst_mikado_generate_thumbnail($attach_id = null, $attach_url = null, $width = null, $height = null, $crop = true) {
        //is attachment id empty?
        if(empty($attach_id)) {
            //get attachment id from attachment url
            $attach_id = burst_mikado_get_attachment_id_from_url($attach_url);
        }

        if(!empty($attach_id) || !empty($attach_url)) {
            $img_info = burst_mikado_resize_image($attach_id, $attach_url, $width, $height, $crop);
            $img_alt = !empty($attach_id) ? get_post_meta($attach_id, '_wp_attachment_image_alt', true) : '';

            if(is_array($img_info) && count($img_info)) {
                return '<img src="'.$img_info['img_url'].'" alt="'.$img_alt.'" width="'.$img_info['img_width'].'" height="'.$img_info['img_height'].'" />';
            }
        }

        return '';
    }
}