<?php /*
Template Name: Acad Services
Template Post Type: page
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<section class="page page--acadserv">
			<div class="page-content">
				<div class="page-hero">
					<h1 class="text-center"><?php the_title(); ?></h1>
					<!-- <h3 class="text-center"><?php pll_e('acad-serv_subtitle'); ?></h3> -->
					<a href="<?php echo pll_home_url() . 'events'; ?>" class="button outline inverted big"><?php pll_e('acad-serv_view-calendar'); ?></a>
				</div>
				<section class="acadserv--categories">
					<div class="container">
						<h1 class="title"><?php pll_e('acad-serv_training-course'); ?></h1>
						<div class="box-w-image">
							<div class="the-img" style="background-image: url(<?php echo get_theme_file_uri('img/acad-serv-1.jpg'); ?>)"></div>
							<div class="the-text">
								<h3><?php pll_e('acad-serv_banner-1_title'); ?></h3>
								<p><?php pll_e('acad-serv_banner-1_details'); ?></p>
								<ul>
									<?php pll_e('acad-serv_banner-1_list'); ?>
								</ul>
							</div>
						</div>
						<div class="box-w-image">
							<div class="the-text">
								<h3><?php pll_e('acad-serv_banner-2_title'); ?></h3>
								<p><?php pll_e('acad-serv_banner-2_details'); ?></p>
								<ul>
                                    <?php pll_e('acad-serv_banner-2_list'); ?>
								</ul>
							</div>
							<div class="the-img" style="background-image: url(<?php echo get_theme_file_uri('img/acad-serv-2.jpg'); ?>)"></div>
						</div>
						<div class="box-w-image">
							<div class="the-img" style="background-image: url(<?php echo get_theme_file_uri('img/acad-serv-3.jpg'); ?>)"></div>
							<div class="the-text">
								<h3><?php pll_e('acad-serv_banner-3_title'); ?></h3>
								<p><?php pll_e('acad-serv_banner-3_details'); ?></p>
								<ul>
                                    <?php pll_e('acad-serv_banner-3_list'); ?>
								</ul>
							</div>
						</div>
					</div>
				</section>
			</div><!-- .page-content -->
		</section>
<?php

endwhile;
endif;

get_footer();

?>
