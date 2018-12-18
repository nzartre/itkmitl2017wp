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

    echo '<label for="order">ลำดับแสดงผล</label>';
    echo '<input type="text" class="widefat" name="order" value="' . esc_textarea($stored_staff_meta['order'][0]) . '">';

    echo '<label for="order_exec">ลำดับแสดงผลในหน้าผู้บริหาร (เฉพาะผู้บริหาร)</label>';
    echo '<input type="text" class="widefat" name="order_exec" value="' . esc_textarea($stored_staff_meta['order_exec'][0]) . '">';

    echo '<label for="prefix">คำนำหน้า (ย่อ)</label>';
    echo '<input type="text" class="widefat" name="prefix" value="' . esc_textarea($stored_staff_meta['prefix'][0]) . '">';

    echo '<label for="first_name">ชื่อ</label>';
    echo '<input type="text" class="widefat" name="first_name" value="' . esc_textarea($stored_staff_meta['first_name'][0]) . '">';

    echo '<label for="last_name">นามสกุล</label>';
    echo '<input type="text" class="widefat" name="last_name" value="' . esc_textarea($stored_staff_meta['last_name'][0]) . '">';

    echo '<label for="role">ตำแหน่ง</label>';
    echo '<input type="text" class="widefat" name="role" value="' . esc_textarea($stored_staff_meta['role'][0]) . '">';

    echo '<label for="phone">เบอร์ติดต่อ</label>';
    echo '<input type="text" class="widefat" name="phone" value="' . esc_textarea($stored_staff_meta['phone'][0]) . '">';

    echo '<label for="office">ห้องทำงาน</label>';
    echo '<input type="text" class="widefat" name="office" value="' . esc_textarea($stored_staff_meta['office'][0]) . '">';

    echo '<label for="lab">ห้องแล็บ</label>';
    echo '<input type="text" class="widefat" name="lab" value="' . esc_textarea($stored_staff_meta['lab'][0]) . '">';

    echo '<label for="email">อีเมล</label>';
    echo '<input type="text" class="widefat" name="email" value="' . esc_textarea($stored_staff_meta['email'][0]) . '">';

    echo '<label for="website">เว็บไซต์</label>';
    echo '<input type="text" class="widefat" name="website" value="' . esc_textarea($stored_staff_meta['website'][0]) . '">';

    echo '<label for="linkedin">LinkedIn</label>';
    echo '<input type="text" class="widefat" name="linkedin" value="' . esc_textarea($stored_staff_meta['linkedin'][0]) . '">';

    echo '<label for="scopus">Scopus</label>';
    echo '<input type="text" class="widefat" name="scopus" value="' . esc_textarea($stored_staff_meta['scopus'][0]) . '">';
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
    $fields = ['order', 'order_exec', 'prefix', 'first_name', 'last_name', 'role', 'phone', 'office', 'lab', 'email', 'website', 'linkedin', 'scopus'];
    foreach ($fields as $field) {
        if( isset( $_POST[$field] ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }
}
add_action( 'save_post', 'itkmitl_save_staff_meta' );
?>
