<?php get_header();
if (is_post_type_archive('staff')):
   include_once('modules/staff-archive.php');
elseif (is_post_type_archive('publications')):
   include_once('modules/publications-archive.php');
elseif (is_post_type_archive('subjects')):
   include_once('modules/subjects-archive.php');
else:
    ?>
    <section class="page archive">
        <div class="page-content">
            <div class="container">
                <h1 class="page-title"><?php single_cat_title(); ?></h1>
                <img src="<?php echo get_theme_file_uri('img/divider-short.png'); ?>" alt="divider"
                     class="divider-short">
                <div class="col-group">
                    <div class="col-12 col-dt-10 col-dt-offset-1">
                        <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post(); ?>
                                <article>
                                    <div class="col-group">
                                        <div class="col-2">
                                            <?php if (has_post_thumbnail()) {
                                                the_post_thumbnail('medium', array('class' => 'featured-image'));
                                            } else { ?>
                                                <img src="<?php echo get_theme_file_uri('img/300x200-thumb.png'); ?>" class="featured-image">
                                            <?php } ?>
                                        </div>
                                        <div class="col-10">
                                            <h2 class="post-title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h2>
                                            <div class="the_content">
                                                <?php the_content(''); ?>
                                            </div>
                                            <span class="post-meta"><?php the_time('j F Y'); ?></span>
                                        </div>
                                    </div>
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
<?php endif;
get_footer(); ?>
