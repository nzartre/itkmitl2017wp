<?php 

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <h1>LOL</h1>
        <section class="single">
            <div class="page-content">
                <div class="container">
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    <span class="post-meta"><?php the_time('j F Y'); ?> | 
                    <?php 
                        $category_list = get_the_category();
                        $separator = ', ';
                        $output = '';

                        if ($category_list) {

                            foreach ($category_list as $category) {
                                $output .= "<a href='".get_category_link( $category->term_id )."'>".$category->cat_name."</a>".$separator;
                            }

                            echo trim($output, $separator);
                        }
                    ?>
                     | โดย <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                    <div class="col-group">
                        <div class="col-12 col-dt-9">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail( 'full', array('class' => 'featured-image', 'id' => 'main-feat-image')); ?>
                            <?php endif; ?>
                            <?php the_content(); ?>
                        </div><!-- post content -->
                    </div><!-- .col-group -->
                </div><!-- .container -->
            </div><!-- .page-content -->
        </section>

<?php

endwhile;
endif;

get_footer();

?>