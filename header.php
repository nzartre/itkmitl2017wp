<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset=<?php bloginfo( 'charset' ); ?>>
    <meta name='viewport' content='width=device-width'>
    <!-- Welcome you naughty coder! Unleash your inner curiosity and dig through our website. -->
    <!-- BTW, check out our courses because people like you should find it happy to study here! -->
    <meta property="og:url" content="<?php echo home_url(add_query_arg( array(), $wp->request )); ?>">
    <meta property="og:type" content="article">
    <?php if(has_post_thumbnail()) $ogimage = get_the_post_thumbnail_url(); else $ogimage = get_theme_file_uri('img/ogimage.png'); ?>
    <meta property="og:image" content="<?php echo $ogimage; ?>">
    <meta property="og:video" content="<?php echo get_theme_file_uri('img/itkmitl-h264.mp4'); ?>">
    <meta property="og:locale" content="<?php echo get_locale() ?>">
    <meta property="og:site_name" content="คณะเทคโนโลยีสารสนเทศ พระจอมเกล้าลาดกระบัง">
    <meta property="article:publisher" content="111528678864534">
    <meta property="article:author" content="111528678864534">
    <?php wp_head(); ?>
    <?php if (is_front_page()) {
        $owl_carousel = get_theme_file_uri('vendor/owl/assets/owl.carousel.min.css');
        $owl_theme = get_theme_file_uri('vendor/owl/assets/owl.theme.default.min.css');
        $owl_js = get_theme_file_uri('vendor/owl/owl.carousel.min.js');
        echo '<link rel="stylesheet" href="' . $owl_carousel . '">
        <link rel="stylesheet" href="' . $owl_theme . '"><script src="' . $owl_js . '"></script>';
    }
    ?>
    <title>
    <?php
    
    if ( is_category() ) {
        echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_tag() ) {
        echo 'กำลังดู tag &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_archive() ) {
        wp_title(''); echo ' Archive | '; bloginfo( 'name' );
    } elseif ( is_search() ) {
        echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
    } elseif ( is_home() || is_front_page() ) {
        bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
    }  elseif ( is_404() ) {
        echo 'Error 404 Not Found | '; bloginfo( 'name' );
    } elseif ( is_single() ) {
        wp_title('');
    } else {
        echo wp_title( ' | ', false, right ); bloginfo( 'name' );
    }
    
    ?>
    
    </title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!--script async src="https://www.googletagmanager.com/gtag/js?id=UA-90533167-1"></script-->
    <!--script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-90533167-1');
    </script-->
    <?php if (get_site_url() == 'http://161.246.38.99') : ?>
        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:728155,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>
    <?php endif; ?>
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
                    <a href="#" data-component="modal" data-target="#search-modal">🔍 <?php pll_e("Search"); ?></a>
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
        <a href="#" data-component="modal" data-target="#search-modal">🔍 <?php pll_e("ค้นหา"); ?></a>
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
