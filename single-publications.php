<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <section class="single">
            <div class="page-content">
                <div class="container">
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    <div class="col-group">
                        <div class="col-12 col-dt-9">
                            <?php
                            $taxonomies = get_the_terms($post->ID, 'publications-category');
                            $meta = get_post_meta($post->ID);
                            ?>
                            <div>
                                <?php foreach ($taxonomies as $tx) echo "<span class=\"label\">$tx->name</span>&nbsp;"; ?>
                            </div>
                            <table class="stack-on-tl" style="margin-top: 1em">
                                <tr>
                                    <th>ผู้เขียนและผู้เขียนร่วม</th>
                                    <td><?php echo $meta['author'][0]; ?></td>
                                </tr>
                                <tr>
                                    <th>ปี</th>
                                    <td><?php echo $meta['year'][0]; ?></td>
                                </tr>
                                <tr>
                                    <th>ชื่อวารสาร/การประชุม</th>
                                    <td><?php echo $meta['book'][0]; ?></td>
                                </tr>
                            </table>
                            <?php the_content(); ?>
                            <nav class="pagination pager">
                                <ul>
                                    <li class="prev"><a href="/publications">&larr;</a></li>
                                </ul>
                            </nav>
                        </div><!-- post content -->
                    </div><!-- .col-group -->
                </div><!-- .container -->
            </div><!-- .page-content -->
        </section>

    <?php

    endwhile;
endif;

get_footer();

?>