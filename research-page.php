<?php /*
Template Name: Research page
Template Post Type: page
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<section class="page page--research">
			<div class="page-content">
				<div class="page-hero">
					<h1 class="text-center"><?php the_title(); ?></h1>
					<h3 class="text-center"><?php pll_e('research_subtitle'); ?></h3>
				</div>
				<section class="research--lab">
					<h1 class="title">ห้องปฏิบัติการ</h1>
					<div class="container">
						<a href="isis-lab" class="bg-box lab-box" style="background-image: url(<?php echo get_theme_file_uri('img/lab-isis.jpg'); ?>);">
							<h3><?php pll_e('research_isis'); ?></h3>
							<p><?php pll_e('research_isis_details'); ?></p>
						</a>
						<a href="ni-lab" class="bg-box lab-box" style="background-image: url(<?php echo get_theme_file_uri('img/lab-ni.jpg'); ?>);">
							<h3><?php pll_e('research_ni'); ?></h3>
							<p><?php pll_e('research_ni_details'); ?></p>
						</a>
						<a href="met-lab" class="bg-box lab-box" style="background-image: url(<?php echo get_theme_file_uri('img/lab-met.jpg'); ?>);">
							<h3><?php pll_e('research_met'); ?></h3>
							<p><?php pll_e('research_met_details'); ?></p>
						</a>
					</div>
				</section>
				<div class="bg-box journal-box">
					<div class="container">
						<div class="col-group">
							<div class="col-6">
								<h3 class="title">IT Journal</h3>
								<p><?php pll_e('research_journal_details'); ?></p>
								<a href="http://www.it.kmitl.ac.th/~journal/" class="button outline inverted"><?php pll_e('research_view-journal'); ?></a>
							</div>
							<div class="col-6">
								<h3 class="title"><?php pll_e('page_publications'); ?></h3>
								<p><?php pll_e('research_publications_details'); ?></p>
								<a href="/publications" class="button outline inverted"><?php pll_e('research_view-publications'); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .page-content -->
		</section><!-- section.page.page-research -->
<?php

endwhile;
endif;

get_footer();

?>