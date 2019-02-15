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
						<div class="col-group flex-row wrap">
							<?php
								$bach_programs = [
									"it" => [
										"pll_prog_name" => "programs_bachelor_it",
										"pll_deg_name" => "programs_bachelor_name",
										"years" => 4,
										"link" => "it-program",
										"deg" => "bachelor",
										"img" => "course-bach-it.jpg"
									],
									"dsba" => [
										"pll_prog_name" => "programs_bachelor_dsba",
										"pll_deg_name" => "programs_bachelor_name",
										"years" => 4,
										"link" => "datasci-program",
										"deg" => "bachelor",
										"img" => "course-bach-dsba.jpg"
									],
									"bit" => [
										"pll_prog_name" => "programs_bachelor_bit",
										"pll_deg_name" => "programs_bachelor_name",
										"years" => 4,
										"link" => "bit-program",
										"deg" => "bachelor",
										"img" => "course-bach-bit.jpg"
									],
									"adv" => [
										"pll_prog_name" => "programs_bachelor_adv",
										"pll_deg_name" => "programs_bachelor_adv_name",
										"years" => 5,
										"link" => "adv-bachelor",
										"deg" => "bachelor-and-master",
										"img" => "course-honors.jpg"
									],
									"master" => [
										"pll_prog_name" => "programs_master_it",
										"pll_deg_name" => "programs_master_name",
										"years" => 2,
										"link" => "master-degree",
										"deg" => "master",
										"img" => "course-master.jpg"
									],
									"phd" => [
										"pll_prog_name" => "programs_phd_it",
										"pll_deg_name" => "programs_phd_name",
										"years" => 3,
										"link" => "doctoral-degree",
										"deg" => "phd",
										"img" => "course-phd.jpg"
									]
								];
							?>
							<?php foreach ($bach_programs as $prog): ?>
							<div class="col-mb-12 col-6 col-dt-4">
								<div class="card simple-card no-bottom-mg <?php echo $prog["deg"]; ?>">
									<img src="<?php echo get_theme_file_uri('img/' . $prog['img']) ?>">
									<div class="padded">
										<h4><?php pll_e($prog["pll_prog_name"]); ?></h4>
										<?php
										$pll_deg_lvl = "";
										switch ($prog["deg"]) {
											case 'bachelor':
												$pll_deg_lvl = "programs_bachelor_title";
												break;
											case 'bachelor-and-master':
												$pll_deg_lvl = "programs_bachelor_adv_name";
												break;
											case 'master':
												$pll_deg_lvl = "programs_master_title";
												break;
											case 'phd':
												$pll_deg_lvl = "programs_phd_title";
												break;
										} ?>
										<div class="arrow-wrap">
											<p><i class="fas fa-arrow-circle-right"></i> <?php pll_e($pll_deg_lvl) ?></p>
											<?php if ($prog["years"]): ?>
											<p>
												<i class="fas fa-arrow-circle-right"></i> <?php echo $prog["years"] . " " . pll__('misc_years'); ?>
											</p>
											<?php endif; ?>
										</div>
										<a href="<?php echo $prog["link"] ?>" class="button outline">
											<?php pll_e('misc_read-more'); ?>
										</a>
	                                </div>
								</div>
							</div>
							<?php endforeach; ?>
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