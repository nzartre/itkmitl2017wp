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
										"years" => 4,
										"link" => "it-program",
										"deg" => "bachelor",
										"img" => "course-bach-it.jpg"
									],
									"dsba" => [
										"pll_prog_name" => "programs_bachelor_dsba",
										"years" => 4,
										"link" => "datasci-program",
										"deg" => "bachelor",
										"img" => "course-bach-dsba.jpg"
									],
									"bit" => [
										"pll_prog_name" => "programs_bachelor_bit",
										"years" => 4,
										"link" => "bit-program",
										"deg" => "bachelor",
										"img" => "course-bach-bit.jpg"
									],
									"adv" => [
										"pll_prog_name" => "programs_bachelor_adv",
										"years" => 5,
										"link" => "adv-bachelor",
										"deg" => "bachelor-and-master",
										"img" => "course-honors.jpg"
									],
									"master" => [
										"pll_prog_name" => "programs_master_it",
										"years" => 2,
										"link" => "master-degree",
										"deg" => "master",
										"img" => "course-master.jpg"
									],
									"phd" => [
										"pll_prog_name" => "programs_phd_it",
										"years" => 3,
										"link" => "doctoral-degree",
										"deg" => "phd",
										"img" => "course-phd.jpg"
									],
									"master_ai" => [
										"pll_prog_name" => "programs_master_ai",
										"years" => 1,
										"link" => "minor",
										"deg" => "minor-programs",
										"img" => "course-master-ai.jpg"
									],
									"master_ai_biz" => [
										"pll_prog_name" => "programs_master_ai_biz",
										"years" => 2,
										"link" => "master-ai-biz",
										"deg" => "master",
										"img" => "course-master-ai-biz.jpg"
									],
									"phd_ai_biz_intl" => [
										"pll_prog_name" => "programs_phd_ai_biz_intl",
										"years" => "3-4",
										"link" => "phd-ai-biz-intl",
										"deg" => "phd",
										"img" => "course-phd-ai-biz-intl.jpg"
									]
								];
							?>
							<?php foreach ($bach_programs as $prog): ?>
							<div class="col-mb-12 col-6 col-dt-4">
								<div class="card simple-card no-bottom-mg <?php echo $prog["deg"]; ?>">
									<img src="<?php echo get_theme_file_uri('img/' . $prog['img']) ?>">
									<div class="padded info">
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
											case 'minor-programs':
												$pll_deg_lvl = "master_minor_programs";
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
										<a href="<?php echo $prog["link"] ?>" class="button round fluid">
											<?php pll_e('misc_read-more'); ?>
										</a>
	                                </div>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
                    <div style="margin: 1em auto; text-align: center;">
                        <a href="./course-booklets/" class="button round large">
                            <?php pll_e('programs_booklets'); ?>
                        </a>
                    </div>
				</section>
			</div><!-- .page-content -->
		</section><!-- section.page.page-research -->
<?php

endwhile;
endif;

get_footer();

?>