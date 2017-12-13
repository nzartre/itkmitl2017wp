<?php /*
Template Name: Staff TH
Template Post Type: page
*/
get_header(); ?>
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
                                <?php the_post_thumbnail( 'full', array('class' => 'e')); ?>
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
<?php get_footer(); ?>
