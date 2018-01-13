<?php /*
Template Name: Life at IT
Template Post Type: page
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<section class="page page--life">
			<div class="page-content">
				<h1 class="title text-center"><?php the_title(); ?></h1>
				<section class="life--content">
					<div class="paper">
						<div class="col-group life-gallery">
							<div class="v-port col-12">
								<img src="<?php echo get_theme_file_uri('img/life/life-13.jpg'); ?>" alt="ITKMITL" title="ITKMITL - Photo by Nathan Yiangsupapaanontr">
							</div>
							<div class="v-port col-6">
								<img src="<?php echo get_theme_file_uri('img/life/life-1.jpg'); ?>" alt="ITKMITL" title="ITKMITL - Photo by Nathan Yiangsupapaanontr">
							</div>
							<div class="v-port col-6">
								<img src="<?php echo get_theme_file_uri('img/life/life-2.jpg'); ?>" alt="ITKMITL" title="ITKMITL - Photo by Nathan Yiangsupapaanontr">
							</div>
							<div class="v-port col-12">
								<img src="<?php echo get_theme_file_uri('img/life/life-10.jpg'); ?>" alt="ITKMITL" title="ITKMITL - Photo by Nathan Yiangsupapaanontr">
							</div>
							<div class="v-port col-6">
								<img src="<?php echo get_theme_file_uri('img/life/life-3.jpg'); ?>" alt="ITKMITL" title="ITKMITL - Photo by Nathan Yiangsupapaanontr">
							</div>
							<div class="v-port col-6">
								<img src="<?php echo get_theme_file_uri('img/life/life-4.jpg'); ?>" alt="ITKMITL" title="ITKMITL - Photo by Nathan Yiangsupapaanontr">
							</div>
							<div class="v-port col-12">
								<img src="<?php echo get_theme_file_uri('img/life/life-11.jpg'); ?>" alt="ITKMITL" title="ITKMITL - Photo by Nathan Yiangsupapaanontr">
							</div>
							<div class="v-port col-6">
								<img src="<?php echo get_theme_file_uri('img/life/life-5.jpg'); ?>" alt="ITKMITL" title="ITKMITL - Photo by Nathan Yiangsupapaanontr">
							</div>
							<div class="v-port col-6">
								<img src="<?php echo get_theme_file_uri('img/life/life-6.jpg'); ?>" alt="ITKMITL" title="ITKMITL - Photo by Nathan Yiangsupapaanontr">
							</div>
							<div class="v-port col-12">
								<img src="<?php echo get_theme_file_uri('img/life/life-14.jpg'); ?>" alt="ITKMITL" title="ITKMITL - Photo by Nathan Yiangsupapaanontr">
							</div>
							<div class="v-port col-4">
								<img src="<?php echo get_theme_file_uri('img/life/life-7.jpg'); ?>" alt="ITKMITL" title="ITKMITL - Photo by Nathan Yiangsupapaanontr">
							</div>
							<div class="v-port col-4">
								<img src="<?php echo get_theme_file_uri('img/life/life-8.jpg'); ?>" alt="ITKMITL" title="ITKMITL - Photo by Nathan Yiangsupapaanontr">
							</div>
							<div class="v-port col-4">
								<img src="<?php echo get_theme_file_uri('img/life/life-9.jpg'); ?>" alt="ITKMITL" title="ITKMITL - Photo by Nathan Yiangsupapaanontr">
							</div>
							<div class="v-port col-12">
								<img src="<?php echo get_theme_file_uri('img/life/life-12.jpg'); ?>" alt="ITKMITL" title="ITKMITL - Photo by Nathan Yiangsupapaanontr">
							</div>
						</div><!-- .col-group -->
						<script>
							sr.reveal('.v-port');
						</script>
					</div><!-- .paper -->
				</section>
			</div><!-- .page-content -->
		</section>
<?php

endwhile;
endif;

get_footer();

?>