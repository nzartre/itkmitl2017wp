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
				</div>
				<section class="admission--admssn-types">
					<div class="container">
						<div class="box-w-image">
							<div class="the-img" style="background-image: url(<?php echo get_theme_file_uri('img/admssn-1.jpg'); ?>)"></div>
							<div class="the-text">
								<h3><?php pll_e('admissions_bachelor'); ?></h3>
								<hr>
								<ul class="unstyled">
                                    <?php
                                    $bachSuffixes = ['overview', 'portfolio', 'quota', 'admission', 'entrance'];
                                    foreach ($bachSuffixes as $s):
                                    ?>
                                    <li>
                                        <a href="<?php echo 'bach-' . $s . '/' ?>">
                                            <span class="caret right"></span> <?php pll_e('admissions_bach_' . $s); ?>
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
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
										<a href="<?php echo get_permalink(pll_get_post( get_page_by_path( 'program' )->ID ));?>">
											<span class="caret right"></span> <?php pll_e('admissions_grad_glance'); ?>
										</a>
									</li>
									<li>
										<a href="master-doctor-information">
											<span class="caret right"></span> <?php pll_e('admissions_grad_info'); ?>
										</a>
									</li>
									<li>
										<a href="<?php echo get_permalink(pll_get_post('12127', pll_current_language()));?>">
											<span class="caret right"></span> <?php pll_e('admissions_grad_research'); ?>
										</a>
									</li>
									<li>
										<a href="<?php echo get_permalink(pll_get_post( get_page_by_path( 'scholarship' )->ID ));?>">
											<span class="caret right"></span> <?php pll_e('admissions_grad_scholarship'); ?>
										</a>
									</li>
									<li>
										<a href="master-doctor-govt">
											<span class="caret right"></span> <?php pll_e('admissions_grad_govt'); ?>
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