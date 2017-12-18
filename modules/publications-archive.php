<section class="page">
    <div class="page-content">
        <div class="paper">
            <div class="container">
                <h1 class="page-title"><?php pll_e('Publications'); ?></h1>
                <img src="<?php echo get_theme_file_uri('img/divider-short.png'); ?>" alt="divider"
                     class="divider-short">
                <ul>
                    <?php $publications_query = new WP_Query('post_type=publications&nopaging=1&order=ASC');
                    if ($publications_query->have_posts()) :
                        while ($publications_query->have_posts()) : $publications_query->the_post(); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                        <?php endwhile; endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>