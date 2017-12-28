<?php
function itkmitl_add_subjects_meta() {
    add_meta_box(
        'itkmitl_subjects_meta',
        'Subject Details',
        'itkmitl_subjects_meta_cb',
        'subjects',
        'normal',
        'default'
    );
}
add_action( 'add_meta_boxes', 'itkmitl_add_subjects_meta' );

function itkmitl_subjects_meta_cb( $post ) {
    // Nonce field to validate form request came from current site
    wp_nonce_field( basename( __FILE__ ), 'itkmitl_subjects_meta_fields' );
    // Get the data if it's already been entered
    $stored_subjects_meta = get_post_meta( $post->ID );

    echo '<label for="subject_id">รหัสวิชา</label>';
    echo '<input type="text" class="widefat" name="subject_id" value="' . esc_textarea($stored_subjects_meta['subject_id'][0]) . '">';

    echo '<label for="name_th">ชื่อวิชา (ภาษาไทย)</label>';
    echo '<input type="text" class="widefat" name="name_th" value="' . esc_textarea($stored_subjects_meta['name_th'][0]) . '">';

    echo '<label for="name_en">ชื่อวิชา (ภาษาอังกฤษ)</label>';
    echo '<input type="text" class="widefat" name="name_en" value="' . esc_textarea($stored_subjects_meta['name_en'][0]) . '">';

    echo '<label for="credit">หน่วยกิต</label>';
    echo '<input type="text" class="widefat" name="credit" value="' . esc_textarea($stored_subjects_meta['credit'][0]) . '">';

    echo '<label for="prerequisite">วิชาบังคับก่อน</label>';
    echo '<input type="text" class="widefat" name="prerequisite" value="' . esc_textarea($stored_subjects_meta['prerequisite'][0]) . '">';
}

function itkmitl_save_subjects_meta( $post_id ) {
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'itkmitl_subjects_meta_fields' ] ) && wp_verify_nonce( $_POST[ 'itkmitl_subjects_meta_fields' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
    // Checks for input and sanitizes/saves if needed
    $fields = ['subject_id', 'name_th', 'name_en', 'credit', 'prerequisite'];
    foreach ($fields as $field) {
        if( isset( $_POST[$field] ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }
}
add_action( 'save_post', 'itkmitl_save_subjects_meta' );
?>