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
										"deg" => "bachelor"
									],
									"dsba" => [
										"pll_prog_name" => "programs_bachelor_dsba",
										"pll_deg_name" => "programs_bachelor_name",
										"years" => 4,
										"link" => "datasci-program",
										"deg" => "bachelor"
									],
									"bit" => [
										"pll_prog_name" => "programs_bachelor_bit",
										"pll_deg_name" => "programs_bachelor_name",
										"years" => 4,
										"link" => "bit-program",
										"deg" => "bachelor"
									],
									"adv" => [
										"pll_prog_name" => "programs_bachelor_adv",
										"pll_deg_name" => "programs_bachelor_name",
										"years" => 2,
										"link" => "adv-bachelor",
										"deg" => "bachelor"
									],
									"master" => [
										"pll_prog_name" => "programs_master_it",
										"pll_deg_name" => "programs_master_name",
										"years" => 2,
										"link" => "master-degree",
										"deg" => "master"
									],
									"phd" => [
										"pll_prog_name" => "programs_phd_it",
										"pll_deg_name" => "programs_phd_name",
										"link" => "doctoral-degree",
										"deg" => "phd"
									]
								];
							?>
							<?php foreach ($bach_programs as $prog): ?>
							<div class="col-mb-12 col-6 col-dt-4">
								<div class="card simple-card no-bottom-mg <?php echo $prog["deg"]; ?>">
									<div class="padded">
										<h4><?php pll_e($prog["pll_prog_name"]); ?></h4>
										<p><?php pll_e($prog["pll_deg_name"]); ?></p>
										<?php
										$pll_deg_lvl = "";
										switch ($prog["deg"]) {
											case 'bachelor':
												$pll_deg_lvl = "programs_bachelor_title";
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