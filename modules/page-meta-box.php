<?php
function itkmitl_add_page_meta() {
    add_meta_box(
        'itkmitl_page_meta',
        'Page Details',
        'itkmitl_page_meta_cb',
        'page',
        'normal',
        'default'
    );
}
add_action( 'add_meta_boxes', 'itkmitl_add_page_meta' );

function itkmitl_page_meta_cb( $post ) {
    // Nonce field to validate form request came from current site
    wp_nonce_field( basename( __FILE__ ), 'itkmitl_page_meta_fields' );
    // Get the data if it's already been entered
    $stored_page_meta = get_post_meta( $post->ID );

    echo '<label for="pre-title">Pre-title</label>';
    echo '<input type="text" class="widefat" name="pre-title" value="' . esc_textarea($stored_page_meta['pre-title'][0]) . '">';

    echo '<label for="title">Title</label>';
    echo '<input type="text" class="widefat" name="title" value="' . esc_textarea($stored_page_meta['title'][0]) . '">';
}

function itkmitl_save_page_meta( $post_id ) {
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'itkmitl_page_meta_fields' ] ) && wp_verify_nonce( $_POST[ 'itkmitl_page_meta_fields' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
    // Checks for input and sanitizes/saves if needed
    $fields = ['pre-title', 'title'];
    foreach ($fields as $field) {
        if( isset( $_POST[$field] ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }
}
add_action( 'save_post', 'itkmitl_save_page_meta' );
?>
