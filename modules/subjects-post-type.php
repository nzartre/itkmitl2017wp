<?php
/* Custom Post Type for Subjects */
function create_subjects_post_type() {
    $labels = array(
        'name' => 'Subjects',
        'singular_name' => 'Subject',
        'add_new' => 'Add Subject',
        'edit_item' => 'Edit Subject',
        'not_found' => 'No subject found'
    );
    $args = array(
        'labels' => $labels,
        'supports' => array('title', 'editor'),
        'public' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'show_in_rest' => true,
        'meta_box_cb' => 'itkmitl_add_subjects_meta_box'
    );
    register_post_type('subjects', $args);
}

add_action('init', 'create_subjects_post_type', 0);
?>
