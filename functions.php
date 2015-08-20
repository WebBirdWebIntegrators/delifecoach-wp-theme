<?php

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );
add_theme_support( 'menus' );
add_theme_support( 'widgets' );
add_theme_support( 'woocommerce' );
add_theme_support( "title-tag" );

function webbird_load_editor_style() {
  add_editor_style( get_template_directory_uri() . '/css/editor-style.css' );
}
//add_action( 'after_setup_theme', 'webbird_load_editor_style' );

add_action('after_setup_theme', 'webbird_theme_setup');
function webbird_theme_setup(){
    load_theme_textdomain('eagle', get_template_directory() . '/languages');
}

function webbird_show_full_tinymce( $args ) {
	$args['wordpress_adv_hidden'] = false;
	return $args;
}

add_filter( 'tiny_mce_before_init', 'webbird_show_full_tinymce' );

update_option('thumbnail_size_w', 300);
update_option('thumbnail_size_h', 300);
update_option('medium_size_w', 600);
update_option('medium_size_h', 600);
update_option('large_size_w', 1200);
update_option('large_size_h', 1200);

add_image_size( 'medium-square', 600, 600, true );
add_image_size( 'billboard-bp5', 2500, 9999 );
add_image_size( 'circle', 450, 450, true );

add_filter( 'image_size_names_choose', 'webbird_custom_image_sizes' );

function webbird_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
	    'medium-square' => __( 'Medium square', 'eagle' ),
        'billboard-bp5' => __( 'Billboard', 'eagle' ),
    ) );
}

add_action('init', 'load_exported_fields');

function load_exported_fields(){
	include 'acf/acf.php';
}

// Auto create menus
$menu_header_mnav = 'Header - Main navigation';
$menu_header_mnav_exists = wp_get_nav_menu_object( $menu_header_mnav );

if( !$menu_header_mnav_exists) {
$menu_header_mnav_id = wp_create_nav_menu( $menu_header_mnav );
}

$menu_header_fnav = 'Header - Functional navigation';
$menu_header_fnav_exists = wp_get_nav_menu_object( $menu_header_fnav );

if( !$menu_header_fnav_exists) {
$menu_header_fnav_id = wp_create_nav_menu( $menu_header_fnav );
}

$menu_footer_nav = 'Footer - Navigation';
$menu_footer_nav_exists = wp_get_nav_menu_object( $menu_footer_nav );

if( !$menu_footer_nav_exists) {
$menu_footer_nav_id = wp_create_nav_menu( $menu_footer_nav );
}

register_nav_menus(
	array (
		'header-mnav' => 'Header - Main navigation',
		'header-fnav' => 'Header - Functional navigation',
		'footer-nav' => 'Footer - Navigation',
	)
);

if ( ! isset( $content_width ) ) $content_width = 600;

/*
function editor_style() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'init', 'editor_style' );
*/

require_once( 'functions-inc/wordpress-dashboard.php' ); // WordPress dashboard settings
//require_once( 'functions-inc/woocommerce.php' ); // WooCommerce functions
//require_once( 'functions-inc/plugins/gravity-forms.php' ); // Gravity Forms settings

//require_once( 'functions-inc/eagle-settings.php' );

//require_once( 'functions-inc/portfolio.php' );
//require_once( 'functions-inc/jobs.php' );

function webbird_login_stylesheet() {
    wp_enqueue_style( 'custom-login' , get_template_directory_uri() . '/css/wordpress.css' );
}
add_action( 'login_enqueue_scripts' , 'webbird_login_stylesheet' );

function webbird_login_logo_url() {
    return 'http://www.webbird.be';
}
add_filter( 'login_headerurl' , 'webbird_login_logo_url' );

function webbird_login_logo_url_title() {
    return 'WebBird | Website & webshop architects';
}
add_filter( 'login_headertitle' , 'webbird_login_logo_url_title' );

add_action('wp_enqueue_scripts' , 'webbird_scripts');

function webbird_scripts() {
	wp_enqueue_script('jquery');

	wp_register_style( 'webbird-styles' , get_template_directory_uri() . '/css/styles.css');
	wp_enqueue_style( 'webbird-styles' );

	wp_register_style( 'fontawesome' , get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'fontawesome' );

	wp_register_script( 'flexslider' , get_template_directory_uri() . '/js/jquery.flexslider.js' );
	wp_enqueue_script( 'flexslider' );

	wp_register_script( 'black-and-white-images' , get_template_directory_uri() . '/js/jquery.BlackAndWhite.min.js' );
	wp_enqueue_script( 'black-and-white-images' );
}

$role_object = get_role( 'editor' );
$role_object->add_cap( 'edit_theme_options' );


if ( ! function_exists( 'webbird_sidebar_default' ) ) {

// Register Sidebar
function webbird_sidebar_default() {

	$args = array(
		'id'            => 'sidebar1',
		'name'          => __( 'Default', 'eagle' ),
		'description'   => __( 'Default sidebar', 'eagle' ),
		'class'         => 'sidebar-default',
		'before_widget' => '<div class="sidebar-default %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

}

// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'webbird_sidebar_default' );

}

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> __('Theme Settings', 'eagle'),
		'menu_title'	=> __('Theme Settings', 'eagle'),
		'menu_slug' 	=> 'theme-settings',
		'capability'	=> 'edit_posts',
		'icon_url'		=> 'dashicons-admin-appearance',
		'position'		=> '90',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> __('Header Settings', 'eagle'),
		'menu_title'	=> __('Header Settings', 'eagle'),
		'parent_slug'	=> 'theme-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> __('Contact Settings', 'eagle'),
		'menu_title'	=> __('Contact Settings', 'eagle'),
		'parent_slug'	=> 'theme-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> __('Agency Settings', 'eagle'),
		'menu_title'	=> __('Agency Settings', 'eagle'),
		'parent_slug'	=> 'theme-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> __('Footer Settings', 'eagle'),
		'menu_title'	=> __('Footer Settings', 'eagle'),
		'parent_slug'	=> 'theme-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> __('Social Media Settings', 'eagle'),
		'menu_title'	=> __('Social Media Settings', 'eagle'),
		'parent_slug'	=> 'theme-settings',
	));

	acf_add_options_page(array(
		'page_title' 	=> __('Theme Plugins', 'eagle'),
		'menu_title'	=> __('Theme Plugins', 'eagle'),
		'menu_slug' 	=> 'theme-plugins',
		'capability'	=> 'edit_posts',
		'icon_url'		=> 'dashicons-admin-plugins',
		'position'		=> '91',
		'redirect'		=> true
	));
}

add_action( 'wp_before_admin_bar_render', 'webbird_wp_before_admin_bar_render' );

function webbird_wp_before_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->add_node( array(
        'id'    => 'webbird-support',
        'title' => 'Contact WebBird Support',
        'href'  => 'https://webbird.zendesk.com/hc/nl/requests/new',
        'meta'  => array( 'target' => '_blank' )
    ) );
}

add_action( 'activity_box_end', 'activity_box_end_example' );

function activity_box_end_example() {
   _e( "If you have any questions, you can reach WebBird's support at" );
   echo '&nbsp;<a href="mailto:support@webbird.be">support@webbird.be</a>.';
}

// Move Yoast SEO meta box to the bottom
function webbird_move_yoast_seo_to_bottom() {
	return 'low';
}

add_filter( 'wpseo_metabox_prio', 'webbird_move_yoast_seo_to_bottom');

add_filter('acf/settings/save_json', function() {
	return get_stylesheet_directory() . '/acf-json';
});

add_filter('acf/settings/load_json', function($paths) {
	$paths = array(get_template_directory() . '/acf-json');

	if( is_child_theme() )
	{
		$paths[] = get_stylesheet_directory() . '/acf-json';
	}

	return $paths;
});

function webbird_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

add_action( 'init', 'webbird_add_excerpts_to_pages' );

function webbird_add_favicon_to_wp_head() {

	$output = '<!-- Favicon -->';
	$output .= '<link rel="shortcut icon" href="' . get_stylesheet_directory_uri() . '/img/favicon.ico" type="image/x-icon">';
	$output .= '<link rel="icon" href="' . get_stylesheet_directory_uri() . '/img/favicon.ico" type="image/x-icon">';
	echo $output;
}


add_action('wp_head','webbird_add_favicon_to_wp_head');


?>
