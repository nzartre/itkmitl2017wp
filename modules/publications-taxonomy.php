<?php
function itkmitl_create_publications_category() {
    register_taxonomy(
        'publications-category',
        'publications',
        array(
            'labels' => array(
                'name' => __('Publication Categories'),
                'singular_name' => __('Publication Category'),
                'add_new_item' => ('Add New Category'),
                'not_found' => __('No category found'),
                'parent_item' => __('Parent category')
            ),
            'rewrite' => array('slug' => 'pub-category'),
            'hierarchical' => true,
            'show_in_rest' => true,
        )
    );
}
add_action('init', 'itkmitl_create_publications_category');
?>
