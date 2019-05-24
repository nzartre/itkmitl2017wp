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

    $wp_customize->add_setting('splash_display_setting', array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(
        'splash_display_setting',
        array(
            'type' => 'checkbox',
            'label' => 'Show Splash',
            'section' => 'splash_section',
        )
    );

    // ImageLink on-click
    $wp_customize->add_setting('splash_link_setting', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));
      
    $wp_customize->add_control('splash_link_setting', array(
        'type' => 'text',
        'section' => 'splash_section',
        'label' => __( 'URL Link' ),
        'description' => __( 'URL ที่จะไปเมื่อรูปภาพบน Splash ถูกคลิก ถ้าเว้นว่าง รูปภาพบน Splash จะไม่สามารถถูกคลิกได้' ),
    ));

    // Home notice
    $wp_customize->add_section('home_notice_section', array(
        'title' => __('Home notice', 'itkmitl2017'),
        'description' => __('แถบข้อความประกาศบนหน้าแรก')
    ));

    $wp_customize->add_setting('home_notice_text', array());
    $wp_customize->add_setting('home_notice_btn_text', array());
    $wp_customize->add_setting('home_notice_btn_link', array());

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_notice_text', array(
        'label'      => __('Message', 'itkmitl2017'),
        'section'    => 'home_notice_section',
        'settings'   => 'home_notice_text'
    )));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_notice_btn_text', array(
        'label'      => __('Button text', 'itkmitl2017'),
        'section'    => 'home_notice_section',
        'settings'   => 'home_notice_btn_text'
    )));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'home_notice_btn_link', array(
        'label'      => __('Button link', 'itkmitl2017'),
        'section'    => 'home_notice_section',
        'settings'   => 'home_notice_btn_link'
    )));
}

add_action('customize_register', 'themeName_customize_register');

?>