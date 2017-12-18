<section class="page">
    <div class="page-content">
        <div class="paper">
            <div class="container">
                <h1 class="page-title"><?php pll_e('Publications'); ?></h1>
                <img src="<?php echo get_theme_file_uri('img/divider-short.png'); ?>" alt="divider"
                     class="divider-short"/>
                <table>
                    <thead>
                        <th>หัวข้อ</th>
                        <th>ผู้เขียนและผู้เขียนร่วม </th>
                        <th>ประเภทบทความ</th>
                        <th>ชื่อวารสาร/การประชุม</th>
                    </thead>
                    <tbody>
                     <?php $publications_query = new WP_Query('post_type=publications&nopaging=1&order=ASC');
                    if ($publications_query->have_posts()) :
                        while ($publications_query->have_posts()) : $publications_query->the_post(); ?>
                    <tr>
                        <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                        <td><?php echo get_post_meta(get_the_id(), 'prefix', true) . ' ' . get_post_meta(get_the_id(), 'author', true); ?></td>
                        <td><?php echo get_post_meta(get_the_id(), 'prefix', true) . ' ' . get_post_meta(get_the_id(), 'book', true); ?></td>
                        <td><?php echo get_post_meta(get_the_id(), 'prefix', true) . ' ' . get_post_meta(get_the_id(), 'year', true); ?></td>
                    </tr>
                        <?php endwhile; endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>