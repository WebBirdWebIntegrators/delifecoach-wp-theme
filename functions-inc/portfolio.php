<?php
/**
 * WebBird - Portfolio
 *
 * @link http://generatewp.com/snippet/1Wb2XgB/
 */


if ( ! function_exists('webbird_portfolio') ) {

// Register Custom Post Type
function webbird_portfolio() {

	$labels = array(
		'name'                => _x( 'Portfolio', 'Post Type General Name', 'eagle' ),
		'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'eagle' ),
		'menu_name'           => __( 'Portfolio', 'eagle' ),
		'parent_item_colon'   => __( 'Parent Portfolio Item:', 'eagle' ),
		'all_items'           => __( 'All Portfolio Items', 'eagle' ),
		'view_item'           => __( 'View Portfolio Item', 'eagle' ),
		'add_new_item'        => __( 'Add New Portfolio Item', 'eagle' ),
		'add_new'             => __( 'Add New Portfolio', 'eagle' ),
		'edit_item'           => __( 'Edit Portfolio Item', 'eagle' ),
		'update_item'         => __( 'Update Portfolio Item', 'eagle' ),
		'search_items'        => __( 'Search Portfolio Item', 'eagle' ),
		'not_found'           => __( 'Not found', 'eagle' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'eagle' ),
	);
	$args = array(
		'label'               => __( 'portfolio', 'eagle' ),
		'description'         => __( 'Portfolio', 'eagle' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'comments', ),
		'taxonomies'          => array( 'services' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-portfolio',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'portfolio', $args );

}

// Hook into the 'init' action
add_action( 'init', 'webbird_portfolio', 0 );

}

if ( ! function_exists( 'webbird_services' ) ) {

// Register Custom Taxonomy
function webbird_services() {

	$labels = array(
		'name'                       => _x( 'Services', 'Taxonomy General Name', 'eagle' ),
		'singular_name'              => _x( 'Service', 'Taxonomy Singular Name', 'eagle' ),
		'menu_name'                  => __( 'Services', 'eagle' ),
		'all_items'                  => __( 'All Items', 'eagle' ),
		'parent_item'                => __( 'Parent Item', 'eagle' ),
		'parent_item_colon'          => __( 'Parent Item:', 'eagle' ),
		'new_item_name'              => __( 'New Item Name', 'eagle' ),
		'add_new_item'               => __( 'Add New Item', 'eagle' ),
		'edit_item'                  => __( 'Edit Item', 'eagle' ),
		'update_item'                => __( 'Update Item', 'eagle' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'eagle' ),
		'search_items'               => __( 'Search Items', 'eagle' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'eagle' ),
		'choose_from_most_used'      => __( 'Choose from the most used items', 'eagle' ),
		'not_found'                  => __( 'Not Found', 'eagle' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'services', array( 'portfolio' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'webbird_services', 0 );

}