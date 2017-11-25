<?php get_header(); ?>
<section class="page archive">
    <div class="page-content">
        <div class="container">
            <h1 class="page-title"><?php printf(__('🔍 %s', 'shape'), '<span>' . get_search_query() . '</span>'); ?></h1>
            <img src="<?php echo get_theme_file_uri('img/divider-short.png'); ?>" alt="divider" class="divider-short">
            <div class="col-group">
                <div class="col-12 col-dt-8 col-dt-offset-2">
                    <!-- Search -->
                    <?php get_search_form(); ?>
                    <!-- End -->
                    <?php
                    if (have_posts()) :

                        while (have_posts()) : the_post();
                            ?>

                            <article>
                                <h2 class="post-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <p><?php the_content(''); ?></p>
                                <span class="post-meta"><?php the_time('j F Y'); ?></span>
                            </article>

                        <?php endwhile;
                    else :
                        echo '<p class="text-center">' . pll__("ไม่พบผลลัพธ์") . '</p>';
                    endif;
                    ?>
                    <nav class="pagination pager">
                        <ul>
                            <li class="prev"><?php previous_posts_link('Previous'); ?></li>
                            <li class="next"><?php next_posts_link('Next', ''); ?></li>
                        </ul>
                    </nav>
                </div>
                <!-- content area -->
            </div>
            <!-- .col-group -->
        </div>
        <!-- .container -->
    </div>
    <!-- .page-content -->
</section>
<?php get_footer(); ?>

