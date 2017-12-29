<section style="background-color: #d7d7d7" id="home-news-section">
    <h1 class="title"><?php pll_e('home_news-updates'); ?></h1>
    <div class="owl-carousel owl-theme" id="home-news">

    <?php
    $the_query = new WP_Query(array(
        'posts_per_page' => 5,
        'category_name' => 'news'
    ));
    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
    ?>

        <div class="card news-card">
            <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail( 'full', array('class' => 'featured-image', 'id' => 'main-feat-image')); ?>
            <?php endif; ?>
            <div class="padded">
                <h3><?php the_title(); ?></h3>
                <p><?php echo this_excerpt(200); ?></p>
                <a href="<?php echo get_the_permalink() ?>" class="button round"><?php pll_e('misc_read-more'); ?></a>
            </div>
        </div>

    <?php
            endwhile;
        else: echo '<p class="text-center">no post</p>';
        endif;
    ?>

    </div>
    <div style="text-align: center; margin: 2em 1em 1em">
        <a href="/category/news" class="button outline"><?php pll_e('misc_view-all-news'); ?></a>
    </div>
</section>