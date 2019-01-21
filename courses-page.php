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
					<!-- <h3 class="text-center"><?php pll_e('programs_subtitle'); ?></h3> -->
				</div>
				<section class="all-courses">
					<div class="container">
						<div class="col-group">
							<?php
								$bach_programs = [
									"it" => [
										"pll_prog_name" => "programs_bachelor_it",
										"pll_deg_name" => "programs_bachelor_name",
										"years" => 4,
										"link" => "it-program"
									],
									"dsba" => [
										"pll_prog_name" => "programs_bachelor_dsba",
										"pll_deg_name" => "programs_bachelor_name",
										"years" => 4,
										"link" => "datasci-program"
									],
									"bit" => [
										"pll_prog_name" => "programs_bachelor_bit",
										"pll_deg_name" => "programs_bachelor_name",
										"years" => 4,
										"link" => "bit-program"
									],
									"adv" => [
										"pll_prog_name" => "programs_bachelor_adv",
										"pll_deg_name" => "programs_bachelor_name",
										"years" => 2,
										"link" => "adv-bachelor"
									]
								];
							?>
							<?php foreach ($bach_programs as $prog): ?>
							<div class="col-4">
								<div class="card simple-card">
									<div class="padded">
										<h4><?php pll_e($prog["pll_prog_name"]); ?></h4>
										<p><?php pll_e($prog["pll_deg_name"]); ?></p>
										<p>
											<i class="fas fa-arrow-circle-right"></i> <?php echo $prog["years"] . " " . pll__('misc_years'); ?>
										</p>
										<a href="<?php echo $prog["link"] ?>" class="button outline">
											<?php pll_e('misc_read-more'); ?>
										</a>
	                                </div>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
						<div class="box-wrap">
							<div class="bg-box half" style="background-image: url(<?php echo get_theme_file_uri('img/course-2.jpg'); ?>);">
								<h3><?php pll_e('programs_master_title'); ?></h3>
								<p><?php pll_e('programs_master_name'); ?></p>
								<a href="master-degree" class="button outline"><?php pll_e('misc_read-more'); ?></a>
							</div>
							<div class="bg-box half" style="background-image: url(<?php echo get_theme_file_uri('img/course-3.jpg'); ?>);">
								<h3><?php pll_e('programs_phd_title'); ?></h3>
								<p><?php pll_e('programs_phd_name'); ?></p>
								<a href="doctoral-degree" class="button outline"><?php pll_e('misc_read-more'); ?></a>
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