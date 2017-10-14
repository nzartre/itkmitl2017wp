<?php
get_header();

get_template_part( 'components/front', 'hero' );
get_template_part( 'components/front', 'detail' );
get_template_part( 'components/front', 'news' );
get_template_part( 'components/front', 'info' );

get_footer();
?>

<script>
	if (window.innerWidth > 768) {
		var heroVideo = document.createElement('source');
		heroVideo.setAttribute('src', '<?php echo get_theme_file_uri('img/itkmitl-h264.mp4'); ?>');
		heroVideo.setAttribute('type', 'video/mp4');
		document.getElementById('hero-video').appendChild(heroVideo);
	}
</script>