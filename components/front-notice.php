<?php
$notice_text = get_theme_mod('home_notice_text', false);
$notice_btn_text = get_theme_mod('home_notice_btn_text', false);
$notice_btn_link = get_theme_mod('home_notice_btn_link', false);

// If notice exists
if ($notice_text != false): ?>

<section id="home-notice">
	<div class="container">
		<div class="alert center filled">
			<?php echo $notice_text; ?>
			<?php if ($notice_btn_link): ?>
				<a href="<?php echo $notice_btn_link; ?>">
					<?php echo $notice_btn_text; ?>
				</a>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php endif; ?>