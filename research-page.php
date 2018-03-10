<?php /*
Template Name: Research page
Template Post Type: page
*/

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <section class="page page--research">
            <div class="page-content">
                <div class="page-hero">
                    <h1 class="text-center"><?php the_title(); ?></h1>
                    <h3 class="text-center"><?php pll_e('research_subtitle'); ?></h3>
                </div>
                <section style="padding-bottom: 0">
                    <?php $the_query = new WP_Query(array(
                        'posts_per_page' => 4,
                        'category_name' => 'research-highlight'
                    ));
                    if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                    $thumbnail = get_the_post_thumbnail_url();
                    ?>
                    <div class="container">
                        <div class="owl-carousel owl-theme owl-news-slider" id="research-highlight">
                            <div class="canvas">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('home_slider', array('class' => 'slider-featured-image'));
                                } ?>
                                <div class="text-box">
                                    <h3>
                                        <?php the_title(); ?>
                                    </h3>
                                    <p class="excerpt">
                                        <?php echo this_excerpt(100); ?>
                                    </p>
                                    <a href="<?php echo get_the_permalink() ?>" class="button round">
                                        <?php pll_e('misc_read-more'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php endwhile; endif; ?>
                <section class="research--lab">
                    <h1 class="title">ห้องปฏิบัติการ</h1>
                    <div class="container">
                        <a href="isis-lab" class="bg-box lab-box"
                           style="background-image: url(<?php echo get_theme_file_uri('img/lab-isis.jpg'); ?>);">
                            <h3><?php pll_e('research_isis'); ?></h3>
                            <p><?php pll_e('research_isis_details'); ?></p>
                        </a>
                        <a href="ni-lab" class="bg-box lab-box"
                           style="background-image: url(<?php echo get_theme_file_uri('img/lab-ni.jpg'); ?>);">
                            <h3><?php pll_e('research_ni'); ?></h3>
                            <p><?php pll_e('research_ni_details'); ?></p>
                        </a>
                        <a href="met-lab" class="bg-box lab-box"
                           style="background-image: url(<?php echo get_theme_file_uri('img/lab-met.jpg'); ?>);">
                            <h3><?php pll_e('research_met'); ?></h3>
                            <p><?php pll_e('research_met_details'); ?></p>
                        </a>
                    </div>
                </section>
                <div class="bg-box journal-box">
                    <div class="container">
                        <div class="col-group">
                            <div class="col-6">
                                <h3 class="title">IT Journal</h3>
                                <p><?php pll_e('research_journal_details'); ?></p>
                                <a href="http://www.it.kmitl.ac.th/~journal/"
                                   class="button outline inverted"><?php pll_e('research_view-journal'); ?></a>
                            </div>
                            <div class="col-6">
                                <h3 class="title"><?php pll_e('page_publications'); ?></h3>
                                <p><?php pll_e('research_publications_details'); ?></p>
                                <a href="/publications"
                                   class="button outline inverted"><?php pll_e('research_view-publications'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .page-content -->
        </section><!-- section.page.page-research -->
        <?php

    endwhile;
endif;

get_footer();

?>

<script>
    jQuery(document).ready(function ($) {
        $('#research-highlight').owlCarousel({
            center: true,
            margin: 10,
            loop: 1,
            lazyLoad: 1,
            dots: 1,
            navText: ['&larr;', '&rarr;'],
            items: 1,
            nav: 0
        });
    });
</script>
