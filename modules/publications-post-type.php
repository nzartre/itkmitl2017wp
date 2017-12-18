<?php
/* Custom Post Type for Publications */
function create_publications_post_type() {
    register_post_type( 'publications',
        array(
            'labels' => array(
                'name' => __('Publications'),
                'singular_name' => __('Publication'),
                'add_new_item' => __('Add Publication'),
                'edit_item' => __('Edit Publication'),
                'not_found' => __('No publications found')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-book-alt',
            'supports' => array('title', 'editor'),
            'taxonomies' => array('publications-category'),
            'show_in_rest' => true,
            'meta_box_cb' => 'itkmitl_add_publications_meta_box'
        )
    );
}
add_action( 'init', 'create_publications_post_type' );
?>
