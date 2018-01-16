<div class="hero">
    <div class="site-name text-center">
        <div id="hero-title-wrap">
            <h1 id="hero-title"><?php pll_e('hero_faculty-IT'); ?></h1>
        </div>
        <div id="hero-subtitle-wrap">
            <h2 id="hero-subtitle"><?php pll_e('hero_KMITL'); ?></h2>
        </div>
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
<script>
    if (window.innerWidth > 768) {
        titleMin = 60;
        titleMax = 90; }
    else {
        titleMin = 45;
        titleMax = 55; }
    fitty('#hero-title', {minSize: titleMin, maxSize: titleMax});
    fitty('#hero-subtitle', {minSize: 23, maxSize: 45});
</script>