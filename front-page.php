<?php
get_header();

get_template_part( 'components/front', 'hero' );
get_template_part( 'components/front', 'news' );
get_template_part( 'components/front', 'info' );

get_footer();
?>

<script src="<?php echo get_theme_file_uri('scripts/detectbrowser.js'); ?>"></script>
<script>
    AOS.init();
	var theBrowser = detectBrowser();

    function heroVideo() {
        if (window.innerWidth > 768 && window.innerHeight < window.innerWidth) {
            var browsers = ['ie'];
            if (browsers.indexOf(theBrowser.name) == -1 && window.location.host != 'localhost') {
                var heroVideo = document.createElement('source');
                heroVideo.setAttribute('src', '<?php echo get_theme_file_uri('img/itkmitl-h264.mp4'); ?>');
                heroVideo.setAttribute('type', 'video/mp4');
                document.getElementById('hero-video').appendChild(heroVideo);
            }
        }
    }
    
    jQuery(window).on('resize', function () {
        heroVideo();
    });
    
    jQuery(document).ready(function( $ ) {
		heroVideo();
        $('#home-achievement').owlCarousel({
            center: true,
            margin: 10,
            loop: 1,
            lazyLoad: 1,
            dots: 1,
            navText: ['&larr;', '&rarr;'],
            items: 1,
            nav: 0
        });
		if (theBrowser.name == 'safari') {
			$('section#home-news-section #achievement .canvas .text-box').css('background', 'rgba(255, 255, 255, 0.7)');
		}
    });
</script>
