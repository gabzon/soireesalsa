<?php
if ( ! function_exists('school_post_type') ) {

    // Register Custom Post Type
    function school_post_type() {

        $labels = array(
            'name'                => _x( 'Schools', 'Post Type General Name', 'sage' ),
            'singular_name'       => _x( 'School', 'Post Type Singular Name', 'sage' ),
            'menu_name'           => __( 'Schools', 'sage' ),
            'name_admin_bar'      => __( 'School', 'sage' ),
            'parent_item_colon'   => __( 'Parent School:', 'sage' ),
            'all_items'           => __( 'All Schools', 'sage' ),
            'add_new_item'        => __( 'Add New School', 'sage' ),
            'add_new'             => __( 'Add New', 'sage' ),
            'new_item'            => __( 'New School', 'sage' ),
            'edit_item'           => __( 'Edit School', 'sage' ),
            'update_item'         => __( 'Update School', 'sage' ),
            'view_item'           => __( 'View School', 'sage' ),
            'search_items'        => __( 'Search School', 'sage' ),
            'not_found'           => __( 'Not found', 'sage' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'sage' ),
        );
        $rewrite = array(
            'slug'                => 'school',
            'with_front'          => true,
            'pages'               => true,
            'feeds'               => true,
        );
        $args = array(
            'label'               => __( 'School', 'sage' ),
            'description'         => __( 'List of salsa/danse school', 'sage' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'trackbacks', 'revisions', ),
            'taxonomies'          => array( 'category', 'post_tag', 'location', 'style' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-welcome-learn-more',
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'rewrite'             => $rewrite,
            'capability_type'     => 'page',
        );
        register_post_type( 'school', $args );

    }
    add_action( 'init', 'school_post_type', 0 );
}

/* Flush rewrite rules for custom post types. */
add_action( 'after_switch_theme', 'flush_rewrite_rules' );
