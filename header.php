<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset=<?php bloginfo( 'charset' ); ?>>
    <meta name='viewport' content='width=device-width'>
    <!-- Welcome you naughty coder! Unleash your inner curiosity and dig through our website. -->
    <!-- BTW, check out our courses because people like you should find it happy to study here! -->
    <?php wp_head(); ?>
    <meta property="og:url" content="<?php home_url(add_query_arg( array(), $wp->request )); ?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="<?php echo get_theme_file_uri('img/ogimage.png'); ?>">
    <meta property="og:video" content="<?php echo get_theme_file_uri('img/itkmitl-h264.mp4'); ?>">
    <meta property="og:locale" content="<?php echo get_locale() ?>">
    <meta property="article:publisher" content="https://www.facebook.com/ITLadkrabang/">
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
                    <?php if (function_exists('pll_get_post')): ?>
                        <?php global $langSwitch;
                        if (pll_current_language() == 'th') {
                            if (is_front_page()) {
                                $langSwitch = pll_home_url('en');
                            } else {
                                $langSwitch = get_permalink(pll_get_post( get_the_ID(), 'en' ));
                            }
                        } elseif (pll_current_language() == 'en') {
                            if (is_front_page()) {
                                $langSwitch = pll_home_url('th');
                            } else {
                                $langSwitch = get_permalink(pll_get_post( get_the_ID(), 'th' ));
                            }
                        }
                        ?>
                        <a href="<?php echo $langSwitch ?>">ไทย/EN</a>
                    <?php endif; ?>
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
        <a href="<?php echo $langSwitch ?>">ไทย/EN</a>
    </div>
    <div class="top-nav-secondary">
        <div class="links-wrap">
            <?php
                $menuParameters = array(
                    'container'       => false,
                    'depth'           => 0,
                    'theme_location'  => 'header',
                );
                wp_nav_menu( $menuParameters );
            ?>
        </div>
    </div>