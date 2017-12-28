<section class="page archive subjects-archive">
    <div class="page-content">
        <div class="container">
            <h1 class="page-title"><?php pll_e('page_subjects'); ?></h1>
            <img src="<?php echo get_theme_file_uri('img/divider-short.png'); ?>" alt="divider"
                 class="divider-short">
            <div class="col-group">
                <div class="col-12 col-dt-8 col-dt-offset-2">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post(); ?>
                            <article>
                                <h2 class="post-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <?php $meta = get_post_meta($post->ID); ?>
                                <span class="post-meta"><strong><?php echo $meta['name_en'][0]; ?></strong></span>
                                <span class="post-meta">หน่วยกิต: <?php echo $meta['credit'][0]; ?></span>
                                <div class="subject-detail"><?php the_excerpt(); ?></div>
                            </article>
                        <?php endwhile;
                    else :
                        pll_e('wp_no-result-found');
                    endif;
                    ?>
                    <nav class="pagination pager">
                        <ul>
                            <li class="prev"><?php previous_posts_link('Previous'); ?></li>
                            <li class="next"><?php next_posts_link('Next', ''); ?></li>
                        </ul>
                    </nav>
                </div><!-- content area -->
            </div><!-- .col-group -->
        </div><!-- .container -->
    </div><!-- .page-content -->
</section>