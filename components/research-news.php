<?php
$research_news_query = new WP_Query(array(
    'posts_per_page' => 4,
    'tag' => 'research',
));

if ($research_news_query->have_posts()):
?>
<section style="background-color: #f2f7ff" id="home-news-section">
    <h1 class="title"><?php pll_e('home_news-updates'); ?></h1>
    <?php
    if ($research_news_query->have_posts()) :
    ?>
    <div class="container" id="news">
        <div class="col-group flex-row justify-center wrap">
            <?php
                while ($research_news_query->have_posts()) : $research_news_query->the_post();
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
        <a href="/tag/research/" class="button"><?php pll_e('misc_view-all-news'); ?></a>
    </div>
    <?php endif; ?>
</section>
<?php endif; ?>
