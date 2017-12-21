<?php
function itkmitl_add_staff_meta() {
    add_meta_box(
        'itkmitl_staff_meta',
        'Staff Profile',
        'itkmitl_staff_meta_cb',
        'staff',
        'normal',
        'default'
    );
}
add_action( 'add_meta_boxes', 'itkmitl_add_staff_meta' );

function itkmitl_staff_meta_cb( $post ) {
    // Nonce field to validate form request came from current site
    wp_nonce_field( basename( __FILE__ ), 'itkmitl_staff_meta_fields' );
    // Get the data if it's already been entered
    $stored_staff_meta = get_post_meta( $post->ID );

    echo '<label for="prefix">คำนำหน้า (ย่อ)</label>';
    echo '<input type="text" class="widefat" name="prefix" value="' . esc_textarea($stored_staff_meta['prefix'][0]) . '">';

    echo '<label for="first_name">ชื่อ</label>';
    echo '<input type="text" class="widefat" name="first_name" value="' . esc_textarea($stored_staff_meta['first_name'][0]) . '">';

    echo '<label for="last_name">นามสกุล</label>';
    echo '<input type="text" class="widefat" name="last_name" value="' . esc_textarea($stored_staff_meta['last_name'][0]) . '">';

    echo '<label for="phone">เบอร์ติดต่อ</label>';
    echo '<input type="text" class="widefat" name="phone" value="' . esc_textarea($stored_staff_meta['phone'][0]) . '">';

    echo '<label for="lab">ห้อง</label>';
    echo '<input type="text" class="widefat" name="lab" value="' . esc_textarea($stored_staff_meta['lab'][0]) . '">';

    echo '<label for="email">อีเมล</label>';
    echo '<input type="text" class="widefat" name="email" value="' . esc_textarea($stored_staff_meta['email'][0]) . '">';

    echo '<label for="website">เว็บไซต์</label>';
    echo '<input type="text" class="widefat" name="website" value="' . esc_textarea($stored_staff_meta['website'][0]) . '">';

    echo '<label for="linkedin">LinkedIn</label>';
    echo '<input type="text" class="widefat" name="linkedin" value="' . esc_textarea($stored_staff_meta['linkedin'][0]) . '">';
}

function itkmitl_save_staff_meta( $post_id ) {
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'itkmitl_staff_meta_fields' ] ) && wp_verify_nonce( $_POST[ 'itkmitl_staff_meta_fields' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
    // Checks for input and sanitizes/saves if needed
    if( isset( $_POST['prefix'] ) ) {
        update_post_meta( $post_id, 'prefix', sanitize_text_field( $_POST['prefix'] ) );
    }
    if( isset( $_POST['first_name'] ) ) {
        update_post_meta( $post_id, 'first_name', sanitize_text_field( $_POST['first_name'] ) );
    }
    if( isset( $_POST['last_name'] ) ) {
        update_post_meta( $post_id, 'last_name', sanitize_text_field( $_POST['last_name'] ) );
    }
    if( isset( $_POST['phone'] ) ) {
        update_post_meta( $post_id, 'phone', sanitize_text_field( $_POST['phone'] ) );
    }
    if( isset( $_POST['lab'] ) ) {
        update_post_meta( $post_id, 'lab', sanitize_text_field( $_POST['lab'] ) );
    }
    if( isset( $_POST['email'] ) ) {
        update_post_meta( $post_id, 'email', sanitize_text_field( $_POST['email'] ) );
    }
    if( isset( $_POST['website'] ) ) {
        update_post_meta( $post_id, 'website', sanitize_text_field( $_POST['website'] ) );
    }
    if( isset( $_POST['linkedin'] ) ) {
        update_post_meta( $post_id, 'linkedin', sanitize_text_field( $_POST['linkedin'] ) );
    }
}
add_action( 'save_post', 'itkmitl_save_staff_meta' );
?>