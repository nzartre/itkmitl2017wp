<?php
/*
* Category Template: Banner
*/

get_header();

?>

<section class="page">
<div class="page-content">
    <div class="container">
        <h1 class="page-title">คณาจารย์</h1>
        <img src="<?php echo get_theme_file_uri('img/divider-short.png'); ?>" alt="divider" class="divider-short">
        <h2 style="text-align: center;">ผู้ช่วยศาสตราจารย์</h2>
        <div class="col-group">


<?php

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
                    <div class="col-mb-12 col-6 col-dt-4">
                        <div class="card person-card">
                            <img src="<?php echo get_theme_file_uri('img/person.jpg'); ?>" alt="">
                            <h3><?php the_title(); ?></h3>
                            <p class="email"><?php the_content(); ?></p>
                        </div>
                    </div>

<?php endwhile;
endif; ?>

                </div>
            </div>
        </div>
    </section>

    <?php

get_footer();

?>