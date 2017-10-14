<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset=<?php bloginfo( 'charset' ); ?>>
    <meta name='viewport' content='width=device-width'>
    <!-- Welcome you naughty coder! Unleash your inner curiosity and dig through our website. -->
    <!-- BTW, check out our courses because people like you should find it happy to study here! -->
    <title>
        <?php bloginfo( 'name' ); ?>
    </title>
    <?php wp_head(); ?>
    <?php if (is_front_page()) {
        $owl_carousel = get_theme_file_uri('vendor/owl/assets/owl-theme.min.css');
        $owl_theme = get_theme_file_uri('vendor/owl/assets/owl.carousel.min.css');
        $owl_js = get_theme_file_uri('vendor/owl/owl.carousel.min.js');
        echo '<link rel="stylesheet" href="' . $owl_carousel . '">
        <link rel="stylesheet" href="' . $owl_theme . '"><script src="' . $owl_js . '"></script>';
    }
    ?>
</head>

<body <?php body_class(); ?>>

    <nav class="top-nav">
        <div class="container">
            <div class="logo">
                <a href="<?php echo home_url() ?>">
                    <img src="<?php echo get_theme_file_uri('img/nav-logo-blue.png'); ?>" alt="IT KMITL">
                </a>
            </div>
            <div class="nav-links">
                <span class="normal-links">
                <?php
                    $menuParameters = array(
                        'container'       => false,
                        'echo'            => false,
                        'items_wrap'      => '%3$s',
                        'depth'           => 0,
                        'theme_location'  => 'primary',
                    );
                    
                    echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                ?>
                </span>
                <span class="bold-links">
                    <?php global $current_user; wp_get_current_user(); ?>
                    <?php if ( is_user_logged_in() ) {
                        echo '<a href="' . get_admin_url() . '" title="Admin area">' . $current_user->display_name . "</a>"; }
                        else {
                            wp_loginout();
                    } ?>
                </span>
            </div>
            <img src="<?php echo get_theme_file_uri('img/nav-chevron.png'); ?>" alt="menu" class="nav-chevron" id="nav-chevron">
        </div>
    </nav>
    <div class="mobile-nav">
        <?php
            $menuParameters = array(
                'container'       => false,
                'echo'            => false,
                'items_wrap'      => '%3$s',
                'depth'           => 0,
                'theme_location'  => 'primary',
            );
            
            echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
        ?>
        <?php global $current_user; wp_get_current_user(); ?>
        <?php if ( is_user_logged_in() ) {
            echo '<a href="' . get_admin_url() . '" title="Admin area">Admin area</a>'; }
            else {
                wp_loginout();
        } ?>
    </div>
    <div class="top-nav-secondary">
        <div class="links-wrap">
            <?php
                $menuParameters = array(
                    'container'       => false,
                    'echo'            => false,
                    'items_wrap'      => '%3$s',
                    'depth'           => 0,
                    'theme_location'  => 'header',
                );
                
                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
            ?>
        </div>
    </div>