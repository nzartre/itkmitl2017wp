<section class="page">
    <div class="page-content">
        <div class="paper">
            <div class="container">
                <h1 class="page-title"><?php pll_e('Publications'); ?></h1>
                <img src="<?php echo get_theme_file_uri('img/divider-short.png'); ?>" alt="divider"
                     class="divider-short"/>

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

                        $current_year = get_post_meta(get_the_id(), 'year', true);
                        if ($current_year != $prev_year) {
                            if (!$is_first_year) echo '</tbody></table></div>';
                            echo "
                                    <h1 class=\"label big strong\">$current_year</h1>
                                    <div style=\"overflow-x: auto;\">
                                    <table style=\"min-width: 530px;\">
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

                    <?php endwhile; echo '</tbody></table></div>'; endif; ?>
            </div>
        </div>
    </div>
</section>