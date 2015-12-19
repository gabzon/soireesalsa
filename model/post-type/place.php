<?php
if ( ! function_exists('place_post_type') ) {

    // Register Custom Post Type
    function place_post_type() {

        $labels = array(
            'name'                => _x( 'Places', 'Post Type General Name', 'sage' ),
            'singular_name'       => _x( 'Place', 'Post Type Singular Name', 'sage' ),
            'menu_name'           => __( 'Places', 'sage' ),
            'name_admin_bar'      => __( 'Places', 'sage' ),
            'parent_item_colon'   => __( 'Parent Place:', 'sage' ),
            'all_items'           => __( 'All Places', 'sage' ),
            'add_new_item'        => __( 'Add New Place', 'sage' ),
            'add_new'             => __( 'Add New', 'sage' ),
            'new_item'            => __( 'New Place', 'sage' ),
            'edit_item'           => __( 'Edit Place', 'sage' ),
            'update_item'         => __( 'Update Place', 'sage' ),
            'view_item'           => __( 'View Place', 'sage' ),
            'search_items'        => __( 'Search Place', 'sage' ),
            'not_found'           => __( 'Not found', 'sage' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'sage' ),
        );
        $rewrite = array(
            'slug'                => 'place',
            'with_front'          => true,
            'pages'               => true,
            'feeds'               => true,
        );
        $args = array(
            'label'               => __( 'Place', 'sage' ),
            'description'         => __( 'List of places where to dance salsa', 'sage' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'trackbacks', 'revisions', ),
            'taxonomies'          => array( 'category', 'post_tag' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-location-alt',
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'rewrite'             => $rewrite,
            'capability_type'     => 'page',
        );
        register_post_type( 'place', $args );

    }
    add_action( 'init', 'place_post_type', 0 );
}

/* Flush rewrite rules for custom post types. */
add_action( 'after_switch_theme', 'flush_rewrite_rules' );
