<?php
/*
Plugin Name: Stock Toolkit

*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


// Defines
define( 'Stock_ACC_URL', WP_PLUGIN_URL . '/' . plugin_basename( dirname( __FILE__ ) ) . '/' );
define( 'Stock_ACC_PATH', plugin_dir_path( __FILE__ ) );


add_action('init','stock_custom_slider');

function stock_custom_slider(){
	register_post_type('slide',array(
		'labels'=> array(
			'name'=> __('Full Slider'),
			'singular_name'=> __('Full Slider')
		),
		'supports'=> array('title','thumbnail','editor'),
		'public'=> true,
		'show_uri'=> true,
	));
}
add_action('init','user_custom_slider');


function user_custom_slider(){
	register_post_type('user',array(
		'labels'=> array(
			'name'=> __('User feedback'),
			'singular_name'=> __('User feedback')
		),
		'supports'=> array('title','editor','thumbnail','custom-fields'),
		'public'=> true,
		'show_uri'=> true,
	));
}

 




// Print shortcode in widgets
add_filter('widget_text','do_shortcode');


// Loading Visual Composer blocks addons
require_once( Stock_ACC_PATH . 'vc-addons/vc-blocks-load.php' );

// Theme shortcodes
require_once( Stock_ACC_PATH . 'theme-shortcodes/theme-shortcode.php' );
require_once( Stock_ACC_PATH . 'theme-shortcodes/slides-shortcode.php' );
require_once( Stock_ACC_PATH . 'theme-shortcodes/section-title.php');
require_once( Stock_ACC_PATH . 'theme-shortcodes/solution-shortcode.php');
require_once( Stock_ACC_PATH . 'theme-shortcodes/button-shortcode.php');
require_once( Stock_ACC_PATH . 'theme-shortcodes/Support-shortcode.php');
require_once( Stock_ACC_PATH . 'theme-shortcodes/counter-shortcode.php');
require_once( Stock_ACC_PATH . 'theme-shortcodes/quick-shortcode.php');
require_once( Stock_ACC_PATH . 'theme-shortcodes/client-carousal.php');
require_once( Stock_ACC_PATH . 'theme-shortcodes/addres-shortcode.php');
require_once( Stock_ACC_PATH . 'theme-shortcodes/peopel-shortcode.php');
require_once( Stock_ACC_PATH . 'theme-shortcodes/products-shortcode.php');

 





// Shortcodes depended on Visual Composer
include_once(ABSPATH .'wp-admin/includes/plugin.php');
if(is_plugin_active('js_composer/js_composer.php')){
	 require_once( Stock_ACC_PATH . 'theme-shortcodes/theme-shortcode.php' );
}

// Register stock toolkit files
function Stock_toolkit_files(){
    
    
    
}
add_action('wp_enqueue_scripts', 'Stock_toolkit_files');