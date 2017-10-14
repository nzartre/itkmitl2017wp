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
					<h1 class="text-center">การอบรม</h1>
					<h3 class="text-center">และบริการวิชาการแก่นักศึกษาและผู้ที่สนใจ</h3>
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