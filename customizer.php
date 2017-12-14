<?php

function themeName_customize_register( $wp_customize ) {
    $wp_customize->add_setting('splash_setting', array(
        'transport'     => 'refresh',
        'height'        => 800,
        'width'        => 800,
    ));

    $wp_customize->add_section('splash_section', array(
        'title'           => __('Splash', 'itkmitl2017wp'),
        'description'     => __('ภาพที่จะขึ้นเมื่อเว็บไซต์โหลดเสร็จสมบูรณ์'), 
        'priority'        => 70,
        'active_callback' => 'is_front_page',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'splash_control', array(
        'label' => __('Splash Image', 'itkmitl2017wp'),
        'section' => 'splash_section',
        'settings' => 'splash_setting',
    )));

    $wp_customize->add_setting('splash_display_setting', 'splash_display');

    $wp_customize->add_control(
        'splash_display_setting',
        array(
            'type' => 'checkbox',
            'label' => 'Show Splash',
            'section' => 'splash_section',
        )
    );

}
add_action('customize_register', 'themeName_customize_register');

?>