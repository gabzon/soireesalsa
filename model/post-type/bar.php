<?php
// if ( ! function_exists('bars_post_type') ) {
//
// // Register Custom Post Type
// function bars_post_type() {
//
// 	$labels = array(
// 		'name'                => _x( 'Bars', 'Post Type General Name', 'sage' ),
// 		'singular_name'       => _x( 'Bar', 'Post Type Singular Name', 'sage' ),
// 		'menu_name'           => __( 'Bars', 'sage' ),
// 		'name_admin_bar'      => __( 'Bars', 'sage' ),
// 		'parent_item_colon'   => __( 'Parent Bar:', 'sage' ),
// 		'all_items'           => __( 'All Bars', 'sage' ),
// 		'add_new_item'        => __( 'Add New Bar', 'sage' ),
// 		'add_new'             => __( 'Add New', 'sage' ),
// 		'new_item'            => __( 'New Bar', 'sage' ),
// 		'edit_item'           => __( 'Edit Bar', 'sage' ),
// 		'update_item'         => __( 'Update Bar', 'sage' ),
// 		'view_item'           => __( 'View Bar', 'sage' ),
// 		'search_items'        => __( 'Search Bar', 'sage' ),
// 		'not_found'           => __( 'Not found', 'sage' ),
// 		'not_found_in_trash'  => __( 'Not found in Trash', 'sage' ),
// 	);
// 	$rewrite = array(
// 		'slug'                => 'bar',
// 		'with_front'          => true,
// 		'pages'               => true,
// 		'feeds'               => true,
// 	);
// 	$args = array(
// 		'label'               => __( 'Bar', 'sage' ),
// 		'description'         => __( 'List of bars and places where to dance', 'sage' ),
// 		'labels'              => $labels,
// 		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', ),
// 		'taxonomies'          => array( 'category', 'post_tag', 'location', 'style' ),
// 		'hierarchical'        => false,
// 		'public'              => true,
// 		'show_ui'             => true,
// 		'show_in_menu'        => true,
// 		'menu_position'       => 5,
// 		'menu_icon'           => 'dashicons-location-alt',
// 		'show_in_admin_bar'   => true,
// 		'show_in_nav_menus'   => true,
// 		'can_export'          => true,
// 		'has_archive'         => true,
// 		'exclude_from_search' => false,
// 		'publicly_queryable'  => true,
// 		'rewrite'             => $rewrite,
// 		'capability_type'     => 'page',
// 	);
// 	register_post_type( 'bar', $args );
// 
// }
// add_action( 'init', 'bars_post_type', 0 );
//
// }
