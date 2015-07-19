<?php 

if ( ! function_exists('webbird_jobs') ) {

// Register Custom Post Type
function webbird_jobs() {

	$labels = array(
		'name'                => _x( 'Jobs', 'Post Type General Name', 'eagle' ),
		'singular_name'       => _x( 'Jobs', 'Post Type Singular Name', 'eagle' ),
		'menu_name'           => __( 'Jobs', 'eagle' ),
		'parent_item_colon'   => __( 'Parent Job Item:', 'eagle' ),
		'all_items'           => __( 'All Job Items', 'eagle' ),
		'view_item'           => __( 'View Job Item', 'eagle' ),
		'add_new_item'        => __( 'Add New Job Item', 'eagle' ),
		'add_new'             => __( 'Add New Job', 'eagle' ),
		'edit_item'           => __( 'Edit Job Item', 'eagle' ),
		'update_item'         => __( 'Update Job Item', 'eagle' ),
		'search_items'        => __( 'Search Job Item', 'eagle' ),
		'not_found'           => __( 'Not found', 'eagle' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'eagle' ),
	);
	$rewrite = array(
		'slug'                => 'jobs',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'webbird_jobs', 'eagle' ),
		'description'         => __( 'Jobs', 'eagle' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'comments', ),
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
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'post_tag' ),
	);
	register_post_type( 'webbird_jobs', $args );

}

// Hook into the 'init' action
add_action( 'init', 'webbird_jobs', 0 );

}

if ( ! function_exists( 'webbird_job_types' ) ) {

// Register Custom Taxonomy
function webbird_job_types() {

	$labels = array(
		'name'                       => _x( 'Types', 'Taxonomy General Name', 'eagle' ),
		'singular_name'              => _x( 'Type', 'Taxonomy Singular Name', 'eagle' ),
		'menu_name'                  => __( 'Types', 'eagle' ),
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
	register_taxonomy( 'webbird_job_types', array( 'webbird_jobs' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'webbird_job_types', 0 );

}

if ( ! function_exists( 'webbird_job_regions' ) ) {

// Register Custom Taxonomy
function webbird_job_regions() {

	$labels = array(
		'name'                       => _x( 'Regions', 'Taxonomy General Name', 'eagle' ),
		'singular_name'              => _x( 'Region', 'Taxonomy Singular Name', 'eagle' ),
		'menu_name'                  => __( 'Regions', 'eagle' ),
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
	register_taxonomy( 'webbird_job_regions', array( 'webbird_jobs' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'webbird_job_regions', 0 );

}


?>