<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <section class="single">
            <div class="page-content">
                <div class="staff_card">
                    <h3><?php the_title(); ?></h3>
                    <div class="col-group">
                        <div class="col-12 col-dt-9">
                            <?php $meta = get_post_meta($post->ID); ?>
                            <table class="stack-on-tl" style="margin-top: 1em">
                                <tr>
                                    <th>ตำแหน่ง</th>
                                    <td><?php echo $meta['role'][0]; ?></td>
                                </tr>
                                <tr>
                                    <th>โทรศัพท์</th>
                                    <td><?php echo $meta['phone'][0]; ?></td>
                                </tr>
                                <tr>
                                    <th>ห้อง</th>
                                    <td><?php echo $meta['lab'][0]; ?></td>
                                </tr>
                                <tr>
                                    <th>อีเมล</th>
                                    <td><?php echo $meta['email'][0]; ?></td>
                                </tr>
                                <tr>
                                    <th>เว็บไซต์</th>
                                    <td><?php echo $meta['website'][0]; ?></td>
                                </tr>
                                <tr>
                                    <th>LinkedIn</th>
                                    <td><?php echo $meta['linkedin'][0]; ?></td>
                                </tr>
                            </table>
                            <?php the_content(); ?>
                        </div><!-- post content -->
                    </div><!-- .col-group -->
                </div><!-- .staff_card -->
            </div><!-- .page-content -->
        </section>

    <?php

    endwhile;
endif;

get_footer();

?>