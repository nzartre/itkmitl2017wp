<?php
get_header();

get_template_part( 'components/front', 'hero' );
get_template_part( 'components/front', 'detail' );
get_template_part( 'components/front', 'news' );
get_template_part( 'components/front', 'info' );

get_footer();
?>

<script src="<?php echo get_theme_file_uri('scripts/detectbrowser.js'); ?>"></script>
<script>
	if (window.innerWidth > 768) {
        var browser = detectBrowser();
        if (browser.name != "edge" && browser.name != 'firefox') {
            var heroVideo = document.createElement('source');
            heroVideo.setAttribute('src', '<?php echo get_theme_file_uri('img/itkmitl-h264.mp4'); ?>');
            heroVideo.setAttribute('type', 'video/mp4');
            document.getElementById('hero-video').appendChild(heroVideo);
        }
    }
    jQuery(document).ready(function( $ ) {
        $('#home-news').owlCarousel({
            center: true,
            items: 1,
            margin: 10,
            loop: 1,
            lazyLoad: 1,
            dots: 1,
            responsive: {
                720: {items: 3,nav: 0},
                1280: {items: 4}
            }
        });
    });
</script>