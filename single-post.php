<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
        $post_link = get_the_permalink();
        $post_title = get_the_title(); ?>

        <section class="single">
            <div class="page-content">
                <div class="container">
                    <h1 class="post-title"><?php echo $post_title; ?></h1>
                    <span class="post-meta"><?php the_time('j F Y'); ?> |
                        <?php
                        $category_list = get_the_category();
                        $separator = ', ';
                        $output = '';
                        if ($category_list) {
                            foreach ($category_list as $category) {
                                $output .= "<a href='" . get_category_link($category->term_id) . "'>" . $category->cat_name . "</a>" . $separator;
                            }
                            echo trim($output, $separator);
                        }
                        ?>
                        | โดย <?php the_author(); ?></span>
                    <div class="col-group">
                        <div class="col-12 col-dt-9">
                            <?php if (has_post_thumbnail()):
                                the_post_thumbnail('full', array('class' => 'featured-image', 'id' => 'main-feat-image'));
                            endif;
                            the_content(); ?>
                        </div><!-- post content -->
                        <div class="col-12 col-dt-3">
                            <ul class="unstyled share-buttons">
                                <li>
                                    <a href="<?php echo "https://www.facebook.com/sharer/sharer.php?u=$post_link"; ?>"
                                       title="Share on Facebook" target="_blank"><img alt="Share on Facebook"
                                                                                      src="<?php echo get_theme_file_uri('img/share-btn/Facebook.svg'); ?>"/>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo "https://twitter.com/intent/tweet?url=$post_link&text=$post_title&via=itkmitl"; ?>"
                                       target="_blank" title="Tweet"><img alt="Tweet"
                                                                          src="<?php echo get_theme_file_uri('img/share-btn/Twitter.svg'); ?>"/>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo "https://plus.google.com/share?url=$post_link"; ?>"
                                       target="_blank" title="Share on Google+"><img alt="Share on Google+"
                                                                                     src="<?php echo get_theme_file_uri('img/share-btn/Google+.svg'); ?>"/>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo "http://www.linkedin.com/shareArticle?mini=true&url=$post_link&title=$post_title"; ?>"
                                       target="_blank" title="Share on LinkedIn"><img alt="Share on LinkedIn"
                                                                                      src="<?php echo get_theme_file_uri('img/share-btn/LinkedIn.svg'); ?>"/>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .col-group -->
                </div><!-- .container -->
            </div><!-- .page-content -->
        </section>

    <?php

    endwhile;
endif;

get_footer();

?>