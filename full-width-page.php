<?php /*
Template Name: Full Width
Template Post Type: page
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<section class="page">
			<div class="page-content">
				<div class="paper">
					<div class="container">
						<?php if (get_the_title() != ''): ?>
							<h1 class="page-title"><?php the_title(); ?></h1>
							<img src="<?php echo get_template_directory_uri(); ?>/img/divider-short.png" alt="divider" class="divider-short">
						<?php endif; ?>
						<?php if(has_post_thumbnail()): ?>
							<?php the_post_thumbnail( 'full', array('class' => 'featured-image', 'id' => 'main-feat-image')); ?>
						<?php endif; ?>
						<div class="col-group">
							<div class="col-12">
								<?php the_content(); ?>
							</div><!-- content area -->
						</div><!-- .col-group -->
					</div><!-- .container -->
				</div><!-- .paper -->
			</div><!-- .page-content -->
		</section>
<?php

endwhile;
endif;

get_footer();

?>
