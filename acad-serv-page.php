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
					<h1>การอบรม</h1>
					<h3>และบริการวิชาการแก่นักศึกษาและผู้ที่สนใจ</h3>
					<a href="<?php get_site_url() ?>/events" class="button outline inverted big">ปฏิทิน</a>
				</div>
				<section>
					<div class="container">
						<?php the_content(); ?>
					</div>
				</section>
			</div><!-- .page-content -->
		</section>
<?php

endwhile;
endif;

get_footer();

?>