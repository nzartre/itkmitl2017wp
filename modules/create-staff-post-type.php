<?php
/* Custom Post Type for Staff */
function create_post_type() {
    register_post_type( 'staff',
        array(
            'labels' => array(
                'name' => __( 'Staff' ),
                'singular_name' => __( 'Staff' ),
                'featured_image' => __('Photo'),
                'set_featured_image' => __('Set staff photo'),
                'remove_featured_image' => __('Remove staff photo'),
                'use_featured_image' => __('Use staff photo'),
                'not_found' => __('No staff found')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-groups',
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
//            'taxonomies' => array('department')
            'show_in_rest' => true
        )
    );
}
add_action( 'init', 'create_post_type' );
?>