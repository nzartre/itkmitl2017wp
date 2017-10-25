<?php /*
Template Name: Staff TH
Template Post Type: page
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<section class="page page--staff">
			<div class="page-content">
				<div class="paper">
					<div class="container">
						<h1 class="page-title"><?php the_title(); ?></h1>
						<img src="<?php echo get_theme_file_uri('img/divider-short.png'); ?>" alt="divider" class="divider-short">
						<div class="staff-wrap">
							<div class="card person-card">
								<img src="<?php echo get_theme_file_uri('img/person.jpg'); ?>" alt="">
								<div class="padded">
									<h3>รศ.ดร. นพพร โชติกกำธร</h3>
									<p class="role">คณบดี</p>
									<p class="email">nopporn@it.kmitl.ac.th</p>
								</div>
							</div>
							<div class="card person-card">
								<img src="<?php echo get_theme_file_uri('img/person.jpg'); ?>" alt="">
								<div class="padded">
									<h3>รศ.ดร. จันทร์บูรณ์ สถิตวิริยวงศ์</h3>
									<p class="role">คณบดี</p>
									<p class="email">chanboon@it.kmitl.ac.th</p>
								</div>
							</div>
							<div class="card person-card">
								<img src="<?php echo get_theme_file_uri('img/person.jpg'); ?>" alt="">
								<div class="padded">
									<h3>รศ.ดร. วรพจน์ กรีสุระเดช</h3>
									<p class="role">คณบดี</p>
									<p class="email">worapoj@it.kmitl.ac.th</p>
								</div>
							</div>
							<div class="card person-card">
								<img src="<?php echo get_theme_file_uri('img/person.jpg'); ?>" alt="">
								<div class="padded">
									<h3>รศ.ดร. อาริต ธรรมโน</h3>
									<p class="role">คณบดี</p>
									<p class="email">arit@it.kmitl.ac.th</p>
								</div>
							</div>
							<div class="card person-card">
								<img src="<?php echo get_theme_file_uri('img/person.jpg'); ?>" alt="">
								<div class="padded">
									<h3>รศ.ดร. โชติพัชร์ ภรณวลัย</h3>
									<p class="role">คณบดี</p>
									<p class="email">chotipat@it.kmitl.ac.th</p>
								</div>
							</div>
							<div class="card person-card">
								<img src="<?php echo get_theme_file_uri('img/person.jpg'); ?>" alt="">
								<div class="padded">
									<h3>รศ.ดร. พรฤดี เนติโสภากุล</h3>
									<p class="role">คณบดี</p>
									<p class="email">pornrudee@it.kmitl.ac.th</p>
								</div>
							</div>
							<div class="card person-card">
								<img src="<?php echo get_theme_file_uri('img/person.jpg'); ?>" alt="">
								<div class="padded">
									<h3>รศ.ดร. สุขสันต์ พาณิชพาพิบูล</h3>
									<p class="role">คณบดี</p>
									<p class="email">sooksan@it.kmitl.ac.th</p>
								</div>
							</div>
						</div><!-- .staff-wrap -->
					</div><!-- .container -->
				</div><!-- .paper -->
			</div><!-- .page-content -->
		</section>
<?php

endwhile;
endif;

get_footer();

?>