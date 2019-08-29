<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset=<?php bloginfo('charset'); ?>>
	<meta name='viewport' content='width=device-width'>
	<!-- Welcome you naughty coder! Unleash your inner curiosity and dig through our website. -->
	<!-- BTW, check out our courses because people like you should find it happy to study here! -->
	<meta property="og:url" content="<?php echo home_url(add_query_arg(array(), $wp->request)); ?>">
	<meta property="og:type" content="article">
	<?php
	if (is_single() && has_post_thumbnail()) $ogimage = get_the_post_thumbnail_url();
	else $ogimage = get_theme_file_uri('img/ogimage.png');
	?>
	<meta property="og:image" content="<?php echo $ogimage; ?>">
	<meta property="og:video" content="<?php echo get_theme_file_uri('img/itkmitl-h264.mp4'); ?>">
	<meta property="og:locale" content="<?php echo get_locale() ?>">
	<meta property="og:site_name" content="คณะเทคโนโลยีสารสนเทศ พระจอมเกล้าลาดกระบัง">
	<meta property="article:publisher" content="111528678864534">
	<meta property="article:author" content="111528678864534">
	<meta name="theme-color" content="#1c86f2">
	<?php wp_head(); ?>

	<?php if (is_front_page() || is_page('research') || is_page('rd')) :
		$owl_carousel = get_theme_file_uri('vendor/owl/assets/owl.carousel.min.css');
		$owl_theme = get_theme_file_uri('vendor/owl/assets/owl.theme.default.min.css');
		$owl_js = get_theme_file_uri('vendor/owl/owl.carousel.min.js');
	?>
		<link rel="stylesheet" href="<?php echo $owl_carousel; ?>">
		<link rel="stylesheet" href="<?php echo $owl_theme; ?>">
		<script type="text/javascript" src="<?php echo $owl_js; ?>"></script>
		<script type="text/javascript" src="<?php echo get_theme_file_uri('vendor/fitty.min.js'); ?>"></script>
        <link rel="stylesheet" href="<?php echo get_theme_file_uri('vendor/aos.css'); ?>">
		<script type="text/javascript" src="<?php echo get_theme_file_uri('vendor/aos.js'); ?>"></script>
	<?php endif; ?>

	<?php if (is_page('life')): ?>
		<script type="text/javascript" src="<?php echo get_theme_file_uri("vendor/scrollreveal.min.js"); ?>"></script>
		<script>
      		window.sr = ScrollReveal();
    	</script>
	<?php endif; ?>

	<?php
	$title = '';
	if (is_category()) {
		$title = 'Category Archive for &quot;' . single_cat_title('', false) . '&quot; | ' . get_bloginfo('name');
	} elseif (is_tag()) {
		$title = 'กำลังดู tag &quot;' . single_tag_title('', false) . '&quot; | ' . get_bloginfo('name');
	} elseif (is_archive()) {
		$title = wp_title('', false) . ' Archive | ' . get_bloginfo('name');
	} elseif (is_search()) {
		$title = 'Search for &quot;' . wp_specialchars($s) . '&quot; | ' . get_bloginfo('name');
	} elseif (is_home() || is_front_page()) {
		$title = get_bloginfo('name') . ' | ' . get_bloginfo('description');
	} elseif (is_404()) {
		$title = 'Page Not Found | ' . get_bloginfo('name');
	} elseif (is_single()) {
		$title = wp_title('', false) . ' | ' . get_bloginfo('name');
	} else {
		$title = wp_title(' | ', false, 'right') . get_bloginfo('name');
	}
	?>
	<title><?php echo $title; ?></title>
	<meta property="og:title" content="<?php echo $title; ?>">

	<?php
	$enable_analytics = true;
	if ($enable_analytics) : ?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-90533167-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-90533167-1');
		</script>
	<?php endif; ?>
</head>

<body <?php body_class(); ?>>

<nav class="top-nav">
	<div class="container">
		<div class="logo">
			<a href="<?php echo home_url() ?>">
				<?php if (pll_current_language() == 'th') : ?>
					<img src="<?php echo get_theme_file_uri('img/nav-thai.svg'); ?>" alt="IT KMITL">
				<?php else : ?>
					<img src="<?php echo get_theme_file_uri('img/nav-eng.svg'); ?>" alt="IT KMITL">
				<?php endif; ?>
			</a>
		</div>
		<div class="nav-links">
				<span class="normal-links">
					<a href="#" id="search-magnifier" data-component="modal" data-target="#search-modal" onclick="focusSearchForm()">
                        <span class="typcn typcn-zoom"></span>
                        <?php pll_e('func_search'); ?>
                    </a>
					<?php
					$menuParameters = array(
						'container' => false,
						'echo' => false,
						'items_wrap' => '%3$s',
						'depth' => 0,
						'theme_location' => 'primary',
					);
					echo strip_tags(wp_nav_menu($menuParameters), '<a>');
					?>
				</span>
			<span class="bold-links">
                <a id="lang-switch">
                    <i class="fas fa-language" id="lang-switch-icon"></i>
                    <span class="caret down" id="lang-switch-caret"></span>
                </a>
            </span>
		</div>
		<img src="<?php echo get_theme_file_uri('img/nav-chevron.png'); ?>" alt="menu" class="nav-chevron"
			 id="nav-chevron">
		<div class="lang-dropdown" id="lang-list">
			<ul>
				<?php pll_the_languages(array('show_flags' => 1)); ?>
			</ul>
		</div>
	</div>
</nav>
<div class="mobile-nav">
	<ul class="unstyled">
		<li data-component="modal" data-target="#search-modal">
			<a onclick="focusSearchForm()"><?php pll_e('func_search'); ?></a>
		</li>
		<?php
		$mobile_top = array(
			'menu_class' => 'unstyled',
			'theme_location' => 'primary',
		);
		wp_nav_menu($mobile_top);
		?>
		<?php
		$mobile_header = array(
			'menu_class' => 'unstyled',
			'container' => false,
			'depth' => 0,
			'theme_location' => 'header',
		);
		wp_nav_menu($mobile_header);
		?>
		<li class="nohover">
			<a><?php pll_e('func_language'); ?></a>
		</li>
		<ul>
			<?php pll_the_languages(); ?>
		</ul>
	</ul>
</div>
<div class="top-nav-secondary">
	<div class="links-wrap">
		<?php
		$menuParameters = array(
			'container' => false,
			'depth' => 0,
			'theme_location' => 'header',
		);
		wp_nav_menu($menuParameters);
		?>
	</div>
</div>
