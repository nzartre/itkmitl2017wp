<?php
function set_default_custom_fields($post_id){
    if ( $_GET['post_type'] == 'staff' ) {
        add_post_meta($post_id, 'ชื่อ', '', true);
        add_post_meta($post_id, 'นามสกุล', '', true);
        add_post_meta($post_id, 'อีเมล', '', true);
        add_post_meta($post_id, 'เว็บไซต์', '', true);
    }
    return true;
}
?>