<?php /*
Template Name: Admission page
Template Post Type: page
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<section class="page page--admission">
			<div class="page-content">
				<div class="page-hero">
					<h1 class="text-center"><?php the_title(); ?></h1>
					<!--h3 class="text-center"><?php //pll_e('admissions_subtitle'); ?></h3-->
				</div>
				<section class="admission--admssn-types">
					<div class="container">
						<div class="box-w-image">
							<div class="the-img" style="background-image: url(<?php echo get_theme_file_uri('img/admssn-1.jpg'); ?>)"></div>
							<div class="the-text">
								<h3><?php pll_e('admissions_bachelor'); ?></h3>
								<hr>
								<ul class="unstyled">
									<li>
										<a href="bach-portfolio">
											<span class="caret right"></span> <?php pll_e('admissions_bach_portfolio'); ?>
										</a>
									</li>
									<li>
										<a href="bach-quota">
											<span class="caret right"></span> <?php pll_e('admissions_bach_quota'); ?>
										</a>
									</li>
									<li>
										<a href="bach-tcas">
											<span class="caret right"></span> <?php pll_e('admissions_bach_tcas'); ?>
										</a>
									</li>
									<li>
										<a href="bach-admission">
											<span class="caret right"></span> <?php pll_e('admissions_bach_admission'); ?>
										</a>
									</li>
									<li>
										<a href="bach-entrance">
											<span class="caret right"></span> <?php pll_e('admissions_bach_entrance'); ?>
										</a>
									</li>
									<li>
										<a href="bach-scholarship">
											<span class="caret right"></span> <?php pll_e('admissions_scholarship'); ?>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="box-w-image">
							<div class="the-img" style="background-image: url(<?php echo get_theme_file_uri('img/admssn-2.jpg'); ?>)"></div>
							<div class="the-text">
								<h3><?php pll_e('admissions_adv-bachelor'); ?></h3>
								<hr>
								<ul class="unstyled">
									<li>
										<a href="adv-bach-entrance">
											<span class="caret right"></span> <?php pll_e('admissions_adv-bach_entrance'); ?>
										</a>
									</li>
									<li>
										<a href="adv-bach-scholarship">
											<span class="caret right"></span> <?php pll_e('admissions_scholarship'); ?>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="box-w-image">
							<div class="the-img" style="background-image: url(<?php echo get_theme_file_uri('img/admssn-3.jpg'); ?>)"></div>
							<div class="the-text">
								<h3><?php pll_e('admissions_master-phd'); ?></h3>
								<hr>
								<ul class="unstyled">
									<li>
										<a href="master-doctor-entrance">
											<span class="caret right"></span> <?php pll_e('admissions_master-doctor_entrance'); ?>
										</a>
									</li>
									<li>
										<a href="master-doctor-govt">
											<span class="caret right"></span> <?php pll_e('admissions_master-doctor_govt'); ?>
										</a>
									</li>
									<li>
										<a href="master-doctor-scholarship">
											<span class="caret right"></span> <?php pll_e('admissions_scholarship'); ?>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
			</div><!-- .page-content -->
		</section><!-- section.page.page-admission -->
<?php

endwhile;
endif;

get_footer();

?>