<?php
/* Custom Post Type for Staff */
function create_staff_post_type() {
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
add_action( 'init', 'create_staff_post_type' );

/* Add meta to REST API */
function filter_staff_json( $data, $post, $context ) {
    $custom_meta = get_post_meta($post->ID);
    $featured_image_url = wp_get_attachment_image_src( $data->data['featured_media'], 'original' );
    return [
        'id'		=> $data->data['id'],
        'thumbnail' => $featured_image_url[0],
        'content'   => $data->data['content']['rendered'],
        'title'    	=> $data->data['title']['rendered'],
        'prefix'   	=> $custom_meta['prefix'][0],
        'first_name' => $custom_meta['first_name'][0],
        'last_name'  => $custom_meta['last_name'][0],
        'role'      => $custom_meta['role'][0],
        'phone'     => $custom_meta['phone'][0],
        'office'    => $custom_meta['office'][0],
        'lab'       => $custom_meta['lab'][0],
        'email'     => $custom_meta['email'][0],
        'website'   => $custom_meta['website'][0],
        'linkedin'  => $custom_meta['linkedin'][0],
        'scopus'    => $custom_meta['scopus'][0]
    ];
}
add_filter( 'rest_prepare_staff', 'filter_staff_json', 10, 3 );
?>
