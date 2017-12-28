<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <section class="single">
            <div class="page-content">
                <div class="container">
                    <h3 style="margin-top: 2em"><?php the_title(); ?></h3>
                    <div class="col-group">
                        <div class="col-12 col-dt-9">
                            <?php $meta = get_post_meta($post->ID); ?>
                            <table class="stack-on-tl" style="margin-top: 1em">
                                <tr>
                                    <th>รหัสวิชา (Subject ID)</th>
                                    <td><?php echo $meta['subject_id'][0]; ?></td>
                                </tr>
                                <tr>
                                    <th>ชื่อวิชา</th>
                                    <td><?php echo $meta['name_th'][0]; ?></td>
                                </tr>
                                <tr>
                                    <th>Subject name</th>
                                    <td><?php echo $meta['name_en'][0]; ?></td>
                                </tr>
                                <tr>
                                    <th>วิชาบังคับก่อน (Prerequisite)</th>
                                    <td><?php echo $meta['prerequisite'][0]; ?></td>
                                </tr>
                            </table>
                            <h3>รายละเอียดวิชา</h3>
                            <?php the_content(); ?>
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