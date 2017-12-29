<?php /*
Template Name: Courses page
Template Post Type: page
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<section class="page page--courses">
			<div class="page-content">
				<div class="page-hero">
					<h1 class="text-center"><?php the_title(); ?></h1>
					<h3 class="text-center"><?php pll_e('programs_subtitle'); ?></h3>
				</div>
				<section class="all-courses">
					<div class="container">
						<div class="col-group">
							<div class="col-12">
								<div class="bg-box" style="background-image: url(<?php echo get_theme_file_uri('img/course-1.jpg'); ?>);">
									<h3><?php pll_e('programs_bachelor_title'); ?></h3>
									<p><?php pll_e('programs_bachelor_name'); ?></p>
									<div class="btn-wrap">
										<a href="it-program" class="button outline inverted"><?php pll_e('programs_bachelor_it'); ?></a>
									</div>
									<div class="btn-wrap">
										<a href="datasci-program" class="button outline inverted"><?php pll_e('programs_bachelor_dsba'); ?></a>
									</div>
									<div class="btn-wrap">
										<a href="bit-program" class="button outline inverted"><?php pll_e('programs_bachelor_bit'); ?></a>
									</div>
								</div>
							</div>
						</div>
						<div class="box-wrap">
							<div class="bg-box" style="background-image: url(<?php echo get_theme_file_uri('img/course-2.jpg'); ?>);">
								<h3><?php pll_e('programs_master_title'); ?></h3>
								<p><?php pll_e('programs_master_name'); ?></p>
								<a href="master-degree" class="button outline inverted"><?php pll_e('misc_read-more'); ?></a>
							</div>
							<div class="bg-box" style="background-image: url(<?php echo get_theme_file_uri('img/course-3.jpg'); ?>);">
								<h3><?php pll_e('programs_phd_title'); ?></h3>
								<p><?php pll_e('programs_phd_name'); ?></p>
								<a href="#" class="button outline inverted"><?php pll_e('misc_read-more'); ?></a>
							</div>
						</div>
					</div>
				</section>
			</div><!-- .page-content -->
		</section><!-- section.page.page-research -->
<?php

endwhile;
endif;

get_footer();

?>