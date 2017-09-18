<?php /*
Template Name: Personnel
Template Post Type: post
*/

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <h1>LOL</h1>
        <section class="single">
            <div class="page-content">
                <div class="container">
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    <span class="post-meta">
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
                    </span>
                    <div class="col-group">
                        <div class="col-12 col-dt-9">
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