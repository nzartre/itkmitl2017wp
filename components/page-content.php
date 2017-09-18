<section class="page">
<div class="page-content">
    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <img src="<?php echo get_template_directory_uri(); ?>/img/divider-short.png" alt="divider" class="divider-short">
        <?php if(has_post_thumbnail()): ?>
			<?php the_post_thumbnail( 'full', array('class' => 'featured-image', 'id' => 'main-feat-image')); ?>
		<?php endif; ?>
        <div class="col-group">
            <div class="col-12 col-dt-8 col-dt-offset-2">
                <?php the_content(); ?>                    
            </div><!-- content area -->
        </div><!-- .col-group -->
    </div><!-- .container -->
</div><!-- .page-content -->
</section>