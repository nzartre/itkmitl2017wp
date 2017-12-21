<div class="hero">
    <div class="site-name text-center">
        <h1><?php pll_e('hero_faculty-IT'); ?></h1>
        <h2>
            <?php pll_e('hero_KMITL'); ?>
        </h2>
    </div>
    <div class="overlay"></div>
    <video autoplay loop id="hero-video"></video>
    <div class="container">
        <div class="secondary-nav" style="display: none">
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
</div>