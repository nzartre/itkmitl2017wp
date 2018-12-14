<?php /*
Template Name: Executives page
Template Post Type: page
*/

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <section class="page page--staff">
            <div class="page-content">
                <div class="paper">
                    <div class="container">
                        <h1 class="page-title"><?php pll_e('page_staff'); ?></h1>
                        <img src="<?php echo get_theme_file_uri('img/divider-short.png'); ?>" alt="divider"
                             class="divider-short">
                        <h3 class="text-center"><?php pll_e('staff_executives'); ?></h3>
                        <div class="staff-wrap">
                            <?php
                            $executive_query_args = array(
                                'post_type' => 'staff',
                                'staff_position' => 'executive',
                                'nopaging' => true,
                                'order' => 'ASC',
                                'orderby' => 'meta_value_num',
                                'meta_key' => 'order');
                            $executive_query = new WP_Query($executive_query_args);
                            if ($executive_query->have_posts()) :
                                while ($executive_query->have_posts()) : $executive_query->the_post();
                                    $execmeta = get_post_meta($post->ID); ?>
                                    <a class="card person-card" href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium', array('id' => 'staff-' . get_the_id() . '-img')); ?>
                                        <div class="padded">
                                            <h3><?php echo $execmeta['prefix'][0] . ' ' . $execmeta['first_name'][0] . ' ' . $execmeta['last_name'][0]; ?></h3>
                                            <p class="role"><?php echo $execmeta['role'][0]; ?></p>
                                            <p class="email"><?php echo $execmeta['email'][0]; ?></p>
                                        </div>
                                    </a>
                                <?php endwhile; endif; ?>
                        </div><!-- .staff-wrap -->
                    </div><!-- .container -->
                </div><!-- .paper -->
            </div><!-- .page-content -->
        </section>
    <?php

    endwhile;
endif;

get_footer();

?>
