<?php
    $the_query = new WP_Query(array(
        'posts_per_page' => 5,
        'category_name' => 'achievement'
    ));
    if ($the_query->have_posts()) :
?>
<section id="achievement-section">
    <div class="owl-carousel owl-theme" id="home-achievement">
        <?php
            while ($the_query->have_posts()) : $the_query->the_post();
        ?>
            <div class="col-group">
                <div class="col-12 canvas">
                    <?php the_post_thumbnail( 'full', array('class' => 'featured-image', 'id' => 'achievement-image')); ?>                    
                </div>
                <div class="col-9 col-dt-4 text">
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                    <p>
                        <?php echo this_excerpt(200); ?>
                    </p>
                    <a href="<?php echo get_the_permalink() ?>" class="button round">
                        <?php pll_e('misc_read-more'); ?>
                    </a>
                </div>
            </div>

        <?php
            endwhile;
        ?>

    </div>

</section>
<?php endif; ?>