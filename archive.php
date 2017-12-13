<?php get_header();
if (is_post_type_archive('staff')): ?>
    <section class="page page--staff">
        <div class="page-content">
            <div class="paper">
                <div class="container">
                    <h1 class="page-title"><?php pll_e('บุคลากร'); ?></h1>
                    <img src="<?php echo get_theme_file_uri('img/divider-short.png'); ?>" alt="divider"
                         class="divider-short">
                    <div class="staff-wrap">
                        <?php $my_query = new WP_Query('post_type=staff&nopaging=1&order=ASC');
                        if ($my_query->have_posts()) :
                            while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                <div class="card person-card" id="<?php echo 'staff-' . get_the_id(); ?>">
                                    <?php the_post_thumbnail('full', array('class' => 'e')); ?>
                                    <div class="padded">
                                        <h3><?php the_title(); ?></h3>
                                        <!--p class="role">คณบดี</p-->
                                        <p class="email"><?php echo get_post_meta(get_the_id(), 'email', true) ?></p>
                                    </div>
                                </div>
                            <?php endwhile; endif; ?>
                    </div><!-- .staff-wrap -->
                </div><!-- .container -->
            </div><!-- .paper -->
        </div><!-- .page-content -->
    </section>
<?php else: ?>
    <section class="page archive">
        <div class="page-content">
            <div class="container">
                <h1 class="page-title">หมวดหมู่: <?php single_cat_title(); ?></h1>
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
                                    <p><?php the_content(''); ?></p>
                                    <span class="post-meta"><?php the_time('j F Y'); ?></span>
                                </article>
                            <?php endwhile;
                        else :
                            echo '<p> no post to show</p>';
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
<?php endif;
get_footer(); ?>
