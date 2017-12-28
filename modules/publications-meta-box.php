<?php
function itkmitl_add_publications_meta() {
    add_meta_box(
        'itkmitl_publications_meta',
        'Publication Details',
        'itkmitl_publications_meta_cb',
        'publications',
        'normal',
        'default'
    );
}
add_action( 'add_meta_boxes', 'itkmitl_add_publications_meta' );

function itkmitl_publications_meta_cb( $post ) {
    // Nonce field to validate form request came from current site
    wp_nonce_field( basename( __FILE__ ), 'itkmitl_publications_meta_fields' );
    // Get the data if it's already been entered
    $stored_publications_meta = get_post_meta( $post->ID );

    echo '<label for="author">ผู้เขียนและผู้เขียนร่วม</label>';
    echo '<input type="text" class="widefat" name="author" value="' . esc_textarea($stored_publications_meta['author'][0]) . '">';

    echo '<label for="year">ปี</label>';
    echo '<input type="text" class="widefat" name="year" value="' . esc_textarea($stored_publications_meta['year'][0]) . '">';

    echo '<label for="book">ชื่อวารสาร/การประชุม</label>';
    echo '<input type="text" class="widefat" name="book" value="' . esc_textarea($stored_publications_meta['book'][0]) . '">';
}

function itkmitl_save_publications_meta( $post_id ) {
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'itkmitl_publications_meta_fields' ] ) && wp_verify_nonce( $_POST[ 'itkmitl_publications_meta_fields' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
    // Checks for input and sanitizes/saves if needed
    $fields = ['author', 'year', 'book'];
    foreach ($fields as $field) {
        if( isset( $_POST[$field] ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }
}
add_action( 'save_post', 'itkmitl_save_publications_meta' );
?>