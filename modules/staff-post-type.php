<?php
/* Custom Post Type for Staff */
function create_post_type() {
    register_post_type( 'staff',
        array(
            'labels' => array(
                'name' => __('Staff'),
                'singular_name' => __('Staff'),
                'add_new_item' => __('Add Staff'),
                'edit_item' => __('Edit Staff'),
                'featured_image' => __('Staff Photo'),
                'set_featured_image' => __('Set staff photo'),
                'remove_featured_image' => __('Remove staff photo'),
                'use_featured_image' => __('Use staff photo'),
                'not_found' => __('No staff found')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-groups',
            'supports' => array('title', 'editor', 'thumbnail'),
            'taxonomies' => array('staff-position'),
            'show_in_rest' => true,
            'meta_box_cb' => 'itkmitl_add_staff_meta_box'
        )
    );
}
add_action( 'init', 'create_post_type' );
?>