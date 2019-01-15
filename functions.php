<?php
// Theme Support
add_theme_support('post-thumbnails');
add_image_size('home_slider', 1300, 550, true);

// Registration Section
function home_inc() {
    wp_enqueue_style('kube', get_theme_file_uri('styles/kube.css'));
    wp_enqueue_style('fluidable', get_theme_file_uri('styles/fluidable.css'));
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('fontawesome', get_theme_file_uri('styles/fontawesome/fontawesome.min.css'));

    wp_enqueue_script('main-js', get_template_directory_uri() . '/scripts/main.js', array('jquery'), null, true);
    wp_enqueue_script('kube-js', get_template_directory_uri() . '/vendor/kube.min.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'home_inc');

function nav_loader() {
    register_nav_menus(
        array(
            'primary' => __('Top Fixed Menu'),
            'header' => __('Header Menu'),
            'inpage' => __('In-Page Menu'),
            'archive' => __('Archive Page Menu')
        )
    );
}

add_action('init', 'nav_loader');

// Post Helper function
function this_excerpt($limit) {
    return wp_trim_words(get_the_content(), $limit);
}

function wpdocs_excerpt_more($more) {
    return '...';
}

add_filter('excerpt_more', 'wpdocs_excerpt_more');

function itkmitl_cpt_search($query) {
    if ($query->is_search) $query->set('post_type', array('post', 'page', 'staff', 'publications'));
    return $query;
}

function addForeignSuffix() {
    $lang = pll_current_language();
    if ($lang == 'en') echo '-en';
}

add_filter('pre_get_posts', 'itkmitl_cpt_search');

// Translation Section
if (function_exists('pll_register_string')) {
    include_once('pll_translations.php');
}

include_once('modules/page-meta-box.php');

include_once('modules/staff-post-type.php');
include_once('modules/staff-meta-box.php');
include_once('modules/staff-taxonomy.php');

include_once('modules/publications-post-type.php');
include_once('modules/publications-meta-box.php');
include_once('modules/publications-taxonomy.php');

include_once('modules/subjects-post-type.php');
include_once('modules/subjects-meta-box.php');

// Customization
include('customizer.php');

// TGM Plugin Activation
require_once('tgmpa/itkmitl-plugins.php');

?>