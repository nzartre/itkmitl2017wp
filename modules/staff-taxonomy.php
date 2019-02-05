<?php
function itkmitl_create_staff_category() {
    register_taxonomy(
        'staff_position',
        'staff',
        array(
            'labels' => array(
                'name' => __('Positions'),
                'singular_name' => __('Position'),
                'add_new_item' => ('Add New Position'),
                'not_found' => __('No position found'),
                'parent_item' => __('Parent position')
            ),
            'rewrite' => array('slug' => 'position'),
            'hierarchical' => true,
            'show_in_rest' => true,
        )
    );
}
add_action('init', 'itkmitl_create_staff_category');
?>