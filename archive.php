<?php get_header(); ?>
<section class="page archive">
    <div class="page-content">
        <div class="container">
            <h1 class="page-title">หมวดหมู่: <?php single_cat_title(); ?></h1>
            <img src="<?php echo get_theme_file_uri('img/divider-short.png'); ?>" alt="divider" class="divider-short">
            <div class="col-group">
                <div class="col-12 col-dt-8 col-dt-offset-2">
                    <?php
                if (have_posts()) :
                    while (have_posts()) : the_post(); ?>

                        <article>
                            <h2 class="post-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <p><?php the_content(''); ?></p>
                            <span class="post-meta">3 มี.ค. 2560 | โดย <a href="#">งานทะเบียน</a></span>
                        </article>

                        <?php endwhile;
                else :
                    echo '<p> no post to show</p>';
                endif;
                ?>
                        <nav class="pagination pager">
                            <ul>
                                <li class="prev"><?php previous_posts_link( 'Previous' ); ?></li>
                                <li class="next"><?php next_posts_link( 'Next', '' ); ?></li>
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