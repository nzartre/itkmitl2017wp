<section class="page">
    <div class="page-content">
        <div class="paper">
            <div class="container">
                <h1 class="page-title"><?php pll_e('page_publications'); ?></h1>
                <img src="<?php echo get_theme_file_uri('img/divider-short.png'); ?>" alt="divider"
                     class="divider-short"/>
                <div id="pub-collapse" data-component="collapse">

                    <?php $pub_query_args = array(
                        'post_type' => 'publications',
                        'nopaging' => true,
                        'order' => 'DSC',
                        'orderby' => 'meta_value_num',
                        'meta_key' => 'year');
                    $publications_query = new WP_Query($pub_query_args);
                    $prev_year = '';
                    $is_first_year = true;

                    if ($publications_query->have_posts()) :
                        while ($publications_query->have_posts()) : $publications_query->the_post();

                            $current_year = get_post_meta($post->ID, 'year', true);
                            if ($current_year != $prev_year) {
                                // close tags when not the first table
                                if (!$is_first_year) echo '</tbody></table></div></div>';
                                // create a toggler
                                echo "<h4 class=\"toggler\"><a href=\"#$current_year\" class=\"collapse-toggle\">$current_year</a></h4>";
                                // collapse non-first toggles at start
                                if (!$is_first_year) echo "<div class=\"collapse-box hide\" id=\"$current_year\">";
                                else echo "<div class=\"collapse-box\" id=\"$current_year\">";
                                echo "
                                        <h1 class=\"label year-label big strong\">$current_year</h1>
                                        <div style=\"overflow-x: auto;margin-bottom: 1em;\">
                                        <table class=\"striped\" style=\"min-width: 530px;\">
                                        <thead>
                                        <tr>
                                        <th class=\"w50\">หัวข้อ</th>
                                        <th class=\"w25\">ผู้เขียนและผู้เขียนร่วม</th>
                                        <th class=\"w25\">หมวด</th>
                                        </tr>
                                        </thead>
                                        <tbody>";
                            }

                            $is_first_year = false;
                            $prev_year = $current_year;
                            $taxonomies = get_the_terms($post->ID, 'publications-category');
                            $taxo_amount = count($taxonomies); ?>

                            <tr>
                                <td><a href="<?php the_permalink(); ?>" class="black"><?php the_title(); ?></a></td>
                                <td><?php echo get_post_meta(get_the_id(), 'author', true); ?></td>
                                <td><?php $c = 1;
                                    foreach ($taxonomies as $tx) {
                                        echo $tx->name;
                                        if ($c < $taxo_amount) echo ', ';
                                        $c++;
                                    } ?></td>
                            </tr>

                        <?php endwhile; echo '</tbody></table></div></div>'; endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    @media screen and (max-width: 414px) {
        h1.year-label {
            display: block;
            text-align: center;
        }
    }
</style>
