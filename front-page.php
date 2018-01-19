<?php
get_header();

get_template_part( 'components/front', 'hero' );
get_template_part( 'components/front', 'detail' );
get_template_part( 'components/front', 'prize' );
get_template_part( 'components/front', 'news' );
get_template_part( 'components/front', 'info' );

get_footer();
?>

<script src="<?php echo get_theme_file_uri('scripts/detectbrowser.js'); ?>"></script>
<script>
	if (window.innerWidth > 768) {
        var browser = detectBrowser();
        var browsers = ['ie', 'edge', 'firefox'];
        if (browsers.indexOf(browser.name) == -1) {
            var heroVideo = document.createElement('source');
            heroVideo.setAttribute('src', '<?php echo get_theme_file_uri('img/itkmitl-h264.mp4'); ?>');
            heroVideo.setAttribute('type', 'video/mp4');
            document.getElementById('hero-video').appendChild(heroVideo);
        }
    }
    jQuery(document).ready(function( $ ) {
        $('#home-news').owlCarousel({
            center: true,
            margin: 10,
            loop: 1,
            lazyLoad: 1,
            dots: 0,
            navText: ['&larr;', '&rarr;'],
            responsive: {
                0: {items: 1, nav: 0},
                720: {items: 3, nav: 1},
                1280: {items: 4, nav: 1}
            }
        });
    });
</script>