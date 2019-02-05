<?php
wp_enqueue_script('airdatepicker-js', get_template_directory_uri() . '/scripts/airdatepicker.min.js', array('jquery'));
wp_enqueue_script('airdatepicker-en-js', get_template_directory_uri() . '/scripts/airdatepicker.en.js', null, null, true);
wp_enqueue_style('airdatepicker', get_theme_file_uri('styles/airdatepicker.min.css'));

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
    $presentation_date_to_display =
        $stored_publications_meta['presentation_date'][0] ?
        date("Y/m/d", $stored_publications_meta['presentation_date'][0]) : '';

    echo '<label for="author">ผู้เขียนและผู้เขียนร่วม</label>';
    echo '<input type="text" class="widefat" name="author" value="' . esc_textarea($stored_publications_meta['author'][0]) . '">';

    echo '<label for="presentation_date">ปี  เดือน วัน ที่ตีพิมพ์/เผยแพร่</label>';
    echo '<input type="text" class="widefat datepicker-here" data-language="en" data-date-format="yyyy/mm/dd" name="presentation_date"';
    echo ' value="' . esc_textarea($presentation_date_to_display) . '">';

    echo '<label for="book">ชื่อวารสาร/การประชุม</label>';
    echo '<input type="text" class="widefat" name="book" value="' . esc_textarea($stored_publications_meta['book'][0]) . '">';
}

function itkmitl_save_publications_meta( $post_id ) {
    // Check save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'itkmitl_publications_meta_fields' ] ) && wp_verify_nonce( $_POST[ 'itkmitl_publications_meta_fields' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
    // Check for input and sanitize/save if needed
    $fields = ['author', 'book', 'presentation_date'];
    foreach ($fields as $field) {
        if( isset( $_POST[$field] ) ) {
            if ($field == 'presentation_date') {
                $date_to_save = strtotime($_POST[$field]);
                update_post_meta($post_id, $field, sanitize_text_field($date_to_save));
            } else {
                update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
            }
        }
    }
}
add_action( 'save_post', 'itkmitl_save_publications_meta' );
?>
