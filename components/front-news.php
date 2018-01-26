<section style="background-color: #f2f7ff" id="home-news-section">
    <h1 class="title"><?php pll_e('home_achievements'); ?></h1>
    <div class="container" id="achievement">
        <div class="owl-carousel owl-theme" id="home-achievement">
            <?php
            $the_query = new WP_Query(array(
                'posts_per_page' => 4,
                'category_name' => 'achievement'
            ));
            if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
                $thumbnail = get_the_post_thumbnail_url();
                ?>
                <div class="canvas" style="background-image: url('<?php echo $thumbnail; ?>')">
                    <div class="text-box">
                        <h3>
                            <?php the_title(); ?>
                        </h3>
                        <p class="excerpt">
                            <?php echo this_excerpt(10); ?>
                        </p>
                        <a href="<?php echo get_the_permalink() ?>" class="button round">
                            <?php pll_e('misc_read-more'); ?>
                        </a>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </div><!-- #achievement -->
    <div style="text-align: center; margin: 1em">
        <a href="/category/achievement" class="button outline"><?php pll_e('misc_view-all-achievements'); ?></a>
    </div>
    <h1 class="title"><?php pll_e('home_news-updates'); ?></h1>
    <div class="container" id="news">
        <div class="flex-row space-between wrap">
            <?php
            $the_query = new WP_Query(array(
                'posts_per_page' => 4,
                'category_name' => 'news'
            ));
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                    <article>
                        <a href="<?php echo get_the_permalink() ?>" class="card news-card">
                            <picture>
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('medium', array('class' => 'featured-image', 'id' => 'main-feat-image'));
                                } ?>
                            </picture>
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
            else: echo '<p class="text-center">no post</p>';
            endif;
            ?>
        </div>
    </div>
    <div style="text-align: center; margin: 2em 1em 1em">
        <a href="/category/news" class="button outline"><?php pll_e('misc_view-all-news'); ?></a>
    </div>
</section>