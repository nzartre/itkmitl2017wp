<?php
//Theme Support
add_theme_support( 'post-thumbnails' ); 

// Registration Section
function home_inc() {
    wp_enqueue_style( 'kube', get_template_directory_uri().'/styles/kube.css');    
    wp_enqueue_style( 'fluidable', get_template_directory_uri().'/styles/fluidable.css');
    wp_enqueue_style( 'style', get_stylesheet_uri());

    wp_enqueue_script( 'main-js', get_template_directory_uri().'/scripts/main.js', array('jquery'), null, true );
    // wp_enqueue_script( 'kube-js', get_template_directory_uri().'/vendor/kube.min.js', array('jquery'), null, true );
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


// Custom Page Titles
add_action('admin_menu', 'custom_title');
add_action('save_post', 'save_custom_title');
add_action('wp_head','insert_custom_title');

function custom_title() {
	add_meta_box('custom_title', 'Change page title', 'custom_title_input_function', 'post', 'normal', 'high');
	add_meta_box('custom_title', 'Change page title', 'custom_title_input_function', 'page', 'normal', 'high');
}
function custom_title_input_function() {
	global $post;
	echo '<input type="hidden" name="custom_title_input_hidden" id="custom_title_input_hidden" value="'.wp_create_nonce('custom-title-nonce').'" />';
	echo '<input type="text" name="custom_title_input" id="custom_title_input" style="width:100%;" value="'.get_post_meta($post->ID,'_custom_title',true).'" />';
}
function save_custom_title($post_id) {
	if (!wp_verify_nonce($_POST['custom_title_input_hidden'], 'custom-title-nonce')) return $post_id;
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
	$customTitle = $_POST['custom_title_input'];
	update_post_meta($post_id, '_custom_title', $customTitle);
}
function insert_custom_title() {
	if (have_posts()) : the_post();
	  $customTitle = get_post_meta(get_the_ID(), '_custom_title', true);
	  if ($customTitle) {
		echo "<title>$customTitle</title>";
      } else {
    	echo "<title>";
	      if (is_tag()) {
	         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
	      elseif (is_archive()) {
	         wp_title(''); echo ' Archive - '; }
	      elseif ((is_single()) || (is_page()) && (!(is_front_page())) ) {
	         wp_title(''); echo ' - '; }
	      if (is_home()) {
	         bloginfo('name'); echo ' - '; bloginfo('description'); }
	      else {
	          bloginfo('name'); }
	      if ($paged>1) {
	         echo ' - page '. $paged; }
        echo "</title>";
    }
    else :
      echo "<title>Page Not Found | "+ bloginfo('name') +"</title>";
	endif;
	rewind_posts();
}
?>