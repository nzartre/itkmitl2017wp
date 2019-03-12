<?php
$achievement_query = new WP_Query(array(
    'posts_per_page' => 4,
    'category_name' => 'achievement'
));
$news_query = new WP_Query(array(
    'posts_per_page' => 4,
    'category_name' => 'news'
    // TODO: Add approval constraint
));
$stickies = get_option('sticky_posts');
if ($stickies) {
	$sticky_query = new WP_Query( array(
		'posts_per_page' => 4,
		'post__in'       => $stickies
	) );
}

if ( $achievement_query->have_posts() || $news_query->have_posts()):
?>
<section style="background-color: #f2f7ff" id="home-news-section">
    <?php if ($achievement_query->have_posts()): ?>
    <h1 class="title"><?php pll_e('home_achievements'); ?></h1>
    <div class="container" id="achievement">
        <div class="owl-carousel owl-theme owl-news-slider" id="home-achievement">
            <?php
            while ($achievement_query->have_posts()) : $achievement_query->the_post();
                $thumbnail = get_the_post_thumbnail_url();
                ?>
                <div class="canvas">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('home_slider', array('class' => 'featured-image'));
                    } else { ?>
                        <img src="<?php echo get_theme_file_uri('img/news_slider-thumb.jpg'); ?>" class="featured-image">
                    <?php } ?>
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
            <?php endwhile; ?>
        </div><!-- #home-achievement -->
    </div><!-- #achievement -->
    <div style="text-align: center; margin: 1em">
        <a href="/category/achievement" class="button"><?php pll_e('misc_view-all-achievements'); ?></a>
    </div>
    <h1 class="title"><?php pll_e('home_news-updates'); ?></h1>
    <?php endif;
    if ($stickies && $sticky_query->have_posts()) :
    ?>
    <div class="container" id="sticky" style="margin-bottom: 2em">
        <div class="col-group flex-row justify-center wrap">
            <?php
            while ($sticky_query->have_posts()) : $sticky_query->the_post();
                ?>
                <article class="col-mb-12 col-6 col-dt-3">
                    <a href="<?php echo get_the_permalink() ?>" class="card news-card">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('medium', array('class' => 'featured-image'));
                        } else { ?>
                            <img src="<?php echo get_theme_file_uri('img/300x200-thumb.png'); ?>" class="featured-image">
                        <?php } ?>
                        <div class="padded">
                            <h5>
                                <?php
                                $categories = get_the_category();
                                $last_cat = end($categories);
                                foreach ($categories as $category) {
                                    echo $category->cat_name;
                                    if ($category != $last_cat)
                                        echo ", ";
                                }
                                ?>
                            </h5>
                            <h4><?php the_title(); ?></h4>
                        </div>
                    </a>
                </article>
            <?php
            endwhile;
            ?>
        </div>
    </div>
    <?php endif;
    if ($news_query->have_posts()) :
    ?>
    <div class="container" id="news">
        <div class="col-group flex-row justify-center wrap">
            <?php
                while ($news_query->have_posts()) : $news_query->the_post();
                    ?>
                    <article class="col-mb-12 col-6 col-dt-3">
                        <a href="<?php echo get_the_permalink() ?>" class="card news-card">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('medium', array('class' => 'featured-image'));
                                } else { ?>
                                    <img src="<?php echo get_theme_file_uri('img/300x200-thumb.png'); ?>" class="featured-image">
                                <?php } ?>
                            <div class="padded">
                                <h5>
                                    <?php
                                    $categories = get_the_category();
                                    $last_cat = end($categories);
                                    foreach ($categories as $category) {
                                        echo $category->cat_name;
                                        if ($category != $last_cat)
                                            echo ", ";
                                    }
                                    ?>
                                </h5>
                                <h4><?php the_title(); ?></h4>
                            </div>
                        </a>
                    </article>
                <?php
                endwhile;
            ?>
        </div>
    </div>
    <div style="text-align: center; margin: 2em 1em 1em">
        <a href="/category/news" class="button"><?php pll_e('misc_view-all-news'); ?></a>
    </div>
    <?php endif; ?>
</section>
<?php endif; ?>
