<?php get_header(); ?>
    <section class="page">
        <div class="page-content">
            <div class="paper">
                <div class="container">
                    <h1 class="page-title"><?php pll_e('page_events_all-events'); ?></h1>
                    <img src="<?php echo get_theme_file_uri('img/divider-short.png'); ?>" alt="divider"
                         class="divider-short">
                    <?php // start the loop
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    em_display_events();
                    ?>
                        <?php endwhile;

                    else : ?>

                        <article id="post-0" class="post event no-results not-found">
                            <div class="entry-content">
                                <p class="no-events-found"><?php pll_e('wp_no-result-found'); ?></p>
                            </div>
                        </article>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>