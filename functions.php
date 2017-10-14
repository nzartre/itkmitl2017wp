<?php
//Theme Support
add_theme_support( 'post-thumbnails' ); 

// Registration Section
function home_inc() {
    wp_enqueue_style( 'kube', get_template_directory_uri().'/styles/kube.css');    
    wp_enqueue_style( 'fluidable', get_template_directory_uri().'/styles/fluidable.css');
    wp_enqueue_style( 'style', get_stylesheet_uri());

    wp_enqueue_style( 'owl-theme', get_template_directory_uri().'/vendor/owl/assets/owl-theme.min.css');
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/vendor/owl/assets/owl.carousel.min.css');    
    wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri().'/vendor/owl/owl.carousel.min.js', array('jquery') );

    wp_enqueue_script( 'main-js', get_template_directory_uri().'/scripts/main.js', array('jquery'), null, true );
}

add_action( 'wp_enqueue_scripts', 'home_inc' );

function nav_loader() {
    register_nav_menus(
            array(
              'primary' => __( 'Top Fixed Menu' ),
              'header' => __( 'Header Menu' ),
              'inpage' => __( 'In-Page Menu' )
            )
        );
}
add_action( 'init', 'nav_loader' );

//Post Helper function
function this_excerpt($limit) {
    return wp_trim_words(get_the_content(), $limit);
}

function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

//Translation Section
pll_register_string( 'Hero Text 1', 'คณะไอที', 'hero', false );
pll_register_string( 'Hero Text 2', 'พระจอมเกล้าฯ ลาดกระบัง', 'hero', false );

?>