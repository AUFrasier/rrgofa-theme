<?php
/**
 * WP Rig functions and definitions
 *
 * This file must be parseable by PHP 5.2.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp_rig
 */

define( 'WP_RIG_MINIMUM_WP_VERSION', '4.5' );
define( 'WP_RIG_MINIMUM_PHP_VERSION', '7.0' );

// Bail if requirements are not met.
if ( version_compare( $GLOBALS['wp_version'], WP_RIG_MINIMUM_WP_VERSION, '<' ) || version_compare( phpversion(), WP_RIG_MINIMUM_PHP_VERSION, '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

// Include WordPress shims.
require get_template_directory() . '/inc/wordpress-shims.php';

// Setup autoloader (via Composer or custom).
if ( file_exists( get_template_directory() . '/vendor/autoload.php' ) ) {
	require get_template_directory() . '/vendor/autoload.php';
} else {
	/**
	 * Custom autoloader function for theme classes.
	 *
	 * @access private
	 *
	 * @param string $class_name Class name to load.
	 * @return bool True if the class was loaded, false otherwise.
	 */
	function _wp_rig_autoload( $class_name ) {
		$namespace = 'WP_Rig\WP_Rig';

		if ( strpos( $class_name, $namespace . '\\' ) !== 0 ) {
			return false;
		}

		$parts = explode( '\\', substr( $class_name, strlen( $namespace . '\\' ) ) );

		$path = get_template_directory() . '/inc';
		foreach ( $parts as $part ) {
			$path .= '/' . $part;
		}
		$path .= '.php';

		if ( ! file_exists( $path ) ) {
			return false;
		}

		require_once $path;

		return true;
	}
	spl_autoload_register( '_wp_rig_autoload' );
}

// Load the `wp_rig()` entry point function.
require get_template_directory() . '/inc/functions.php';

// Initialize the theme.
call_user_func( 'WP_Rig\WP_Rig\wp_rig' );

function create_testimonials() {
    $labels = array(
		'name'               => _x( 'Testimonials', 'post type general name' ),
		'singular_name'      => _x( 'Testimonial', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'review' ),
		'add_new_item'       => __( 'Add New Testimonial' ),
		'edit_item'          => __( 'Edit Testimonial' ),
		'new_item'           => __( 'New Testimonial' ),
		'all_items'          => __( 'All Testimonials' ),
		'view_item'          => __( 'View Testimonials' ),
		'search_items'       => __( 'Search Testimonials' ),
		'not_found'          => __( 'No testimonials found' ),
		'not_found_in_trash' => __( 'No testimonials found in the Trash' ), 
		'parent_item_colon'  => '’',
		'menu_name'          => 'Testimonials'
	  );
	  $args = array(
		'labels'        => $labels,
		'public'        => true,
		'menu_position' => 5,
		'menu_icon'     => 'dashicons-awards',
		'supports'      => array( 'title' ),
		'has_archive'   => true,
	  );
	  register_post_type( 'testimonial', $args ); 
}
// Hooking up our function to theme setup
add_action( 'init', 'create_testimonials' );

function add_author_metabox(){
    add_meta_box(
        "author_meta_box",
        "Author",
        "show_custom_metabox_author",
        "testimonial"
    );
}
add_action("add_meta_boxes", "add_author_metabox");

function show_custom_metabox_author(){
	global $post;
    $value = get_post_meta($post->ID, "author_meta_box_nonce", true);

    echo '<input type="text" name="author_meta_box_nonce" value="'. $value .'">';
 }

 function on_save_post_author($post_id){
    $meta_value = isset($_POST["author_meta_box_nonce"]) ?  $_POST["author_meta_box_nonce"]  : false;

    update_post_meta($post_id,"author_meta_box_nonce", $meta_value);
 }
 add_action("save_post", "on_save_post_author");


 function add_content_metabox(){
    add_meta_box(
        "content_meta_box",
        "Content",
        "show_custom_metabox_content",
        "testimonial"
    );
}
add_action("add_meta_boxes", "add_content_metabox");

function show_custom_metabox_content(){
	global $post;
    $value = get_post_meta($post->ID, "content_meta_box_nonce", true);
	?> 
		<textarea name="content_meta_box_nonce" id="content_meta_box_nonce" rows="5" cols="30" style="width:500px;"><?php echo $value; ?></textarea>
	<?php
 }

 function on_save_post_content($post_id){
    $meta_value = isset($_POST["content_meta_box_nonce"]) ?  $_POST["content_meta_box_nonce"]  : false;

    update_post_meta($post_id,"content_meta_box_nonce", $meta_value);

 }
 add_action("save_post", "on_save_post_content");

// load css into the website's front-end
function mytheme_enqueue_styles() {
	wp_enqueue_style( 'layout', get_stylesheet_directory_uri() . '/assets/css/layout.min.css' ); 
	wp_enqueue_style( 'bootstrap', '/wp-content/lib/bootstrap/css/bootstrap.min.css' );
	if(is_front_page()) {
		//wp_register_style( 'swiper-css', content_url() . '/lib/swiper/css/swiper.min.css' ); 
		//wp_enqueue_style('swiper-css');
	}
	wp_register_style('queries', get_stylesheet_directory_uri() . '/assets/css/queries.min.css');
	wp_enqueue_style('queries');
	wp_register_style('theme-style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('theme-style');
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles' );


function wpb_adding_scripts() {
	wp_register_script('theme_script', get_template_directory_uri() . '/assets/js/theme.min.js', array('jquery'),'1.1', true);
	wp_enqueue_script('theme_script');
	wp_register_script('bootstrap', '/wp-content/lib/bootstrap/js/bootstrap.min.js', array('jquery'),'1.1', true);
	wp_enqueue_script('bootstrap');
	wp_register_script('jquery', '//code.jquery.com/jquery-1.11.0.min.js', array('jquery'),'1.1', true);
	wp_enqueue_script('jquery');
	wp_register_script('jquery-migrate', '//code.jquery.com/jquery-migrate-1.2.1.min.js', array('jquery'),'1.1', true);
	wp_enqueue_script('jquery-migrate');
	if(is_front_page()) { 
		//wp_register_script('swiper-js', content_url() . '/lib/swiper/js/swiper.min.js', array('jquery'),'1.1', true);
		//wp_enqueue_script('swiper-js');
		wp_register_script('front_page_script', get_template_directory_uri() . '/assets/js/front-page.min.js', array('jquery'),'1.1', true);
		wp_enqueue_script('front_page_script');
	}
}
	  
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );