<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
        $meta = get_post_meta($post->ID);

        ?>

        <section class="single" style="background-color: #f6f6f6">
            <div class="page-content">
                <div class="staff_card">
                    <header>
                        <?php the_post_thumbnail('thumbnail', ['class' => 'avatar']); ?>
                        <h1 class="name text-center"><?php the_title(); ?></h1>
                        <h2 class="role text-center"><?php echo $meta['role'][0]; ?></h2>
                        <?php if ($meta['office'][0]) : ?>
                            <div class="office">
                                Office:
                                <?php echo $meta['office'][0]; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($meta['lab'][0]) : ?>
                            <div class="office">
                                Lab:
                                <?php echo $meta['lab'][0]; ?>
                            </div>
                        <?php endif; ?>
                    </header>
                    <div class="container">
                        <?php
                        // add meta to display in metaList
                        $metaList = ['phone', 'email'];
                        foreach ($metaList as $item) :
                            if ($meta[$item][0]) :
                                ?>
                                <div class="meta-box">
                                    <div class="icon-box">
                                        <img src="<?php echo get_theme_file_uri('img/staff-icn/icon-' . $item . '.png') ?>"
                                             alt="<?php echo $item; ?>">
                                    </div>
                                    <div class="data"><?php echo $meta[$item][0]; ?></div>
                                </div>
                            <?php endif;
                        endforeach;
                        ?>
                        <div class="links-box">
                            <?php
                            $links = ['website', 'linkedin', 'scopus'];
                            foreach ($links as $link) :
                                if ($meta[$link][0]) :
                                    ?>
                                    <a href="<?php echo $meta[$link][0]; ?>" title="<?php echo $link; ?>">
                                        <img src="<?php echo get_theme_file_uri('img/staff-icn/icon-' . $link . '.png') ?>"
                                             alt="<?php echo $link; ?>">
                                    </a>
                                <?php endif;
                            endforeach;
                            ?>
                        </div>
                        <div style="font-size: 14px">
                            <?php the_content(); ?>
                        </div>
                    </div><!-- .container -->
                </div><!-- .staff_card -->
            </div><!-- .page-content -->
        </section>

    <?php

    endwhile;
endif;

get_footer();

?>