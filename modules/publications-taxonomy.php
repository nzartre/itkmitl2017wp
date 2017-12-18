<?php
function itkmitl_create_publications_category() {
    register_taxonomy(
        'publications-category',
        'publications',
        array(
            'labels' => array(
                'name' => __('Categories'),
                'singular_name' => __('Category'),
                'add_new_item' => ('Add New Category'),
                'not_found' => __('No category found'),
                'parent_item' => __('Parent category')
            ),
            'rewrite' => array('slug' => 'category'),
            'hierarchical' => true,
        )
    );
}
add_action('init', 'itkmitl_create_publications_category');
?>