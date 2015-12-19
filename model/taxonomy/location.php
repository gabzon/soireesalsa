<?php
if ( ! function_exists( 'location_taxonomy' ) ) {

    // Register Custom Taxonomy
    function location_taxonomy() {

        $labels = array(
            'name'                       => _x( 'Locations', 'Taxonomy General Name', 'sage' ),
            'singular_name'              => _x( 'Location', 'Taxonomy Singular Name', 'sage' ),
            'menu_name'                  => __( 'Locations', 'sage' ),
            'all_items'                  => __( 'All Location', 'sage' ),
            'parent_item'                => __( 'Parent Location', 'sage' ),
            'parent_item_colon'          => __( 'Parent Location:', 'sage' ),
            'new_item_name'              => __( 'New Location Name', 'sage' ),
            'add_new_item'               => __( 'Add New Location', 'sage' ),
            'edit_item'                  => __( 'Edit Location', 'sage' ),
            'update_item'                => __( 'Update Location', 'sage' ),
            'view_item'                  => __( 'View Location', 'sage' ),
            'separate_items_with_commas' => __( 'Separate Locations with commas', 'sage' ),
            'add_or_remove_items'        => __( 'Add or remove Locations', 'sage' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'sage' ),
            'popular_items'              => __( 'Popular Locations', 'sage' ),
            'search_items'               => __( 'Search Locations', 'sage' ),
            'not_found'                  => __( 'Not Found', 'sage' ),
        );
        $rewrite = array(
            'slug'                       => 'location',
            'with_front'                 => true,
            'hierarchical'               => false,
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'rewrite'                    => $rewrite,
        );
        register_taxonomy( 'location', array( 'post', 'place'), $args );

    }
    add_action( 'init', 'location_taxonomy', 0 );

}
