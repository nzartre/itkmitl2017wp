<?php /*
Template Name: Hub page
Template Post Type: page
*/

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <section class="page">
            <div class="page-content">
                <div class="container">
                    <h1 class="page-title"><?php pll_e("page_service-hub"); ?></h1>
                    <img src="<?php echo get_theme_file_uri('img/divider-short.png'); ?>" alt="divider"
                         class="divider-short">
                    <div class="col-group">
                        <div class="col-mb-12 col-6 col-dt-4">
                            <div class="bg-box"
                                 style="background-image: url(<?php echo get_theme_file_uri('img/services/moodle.jpg'); ?>); text-align: center;">
                                <h3 style="color: white">E-Learning</h3>
                                <div class="btn-wrap">
                                    <a href="https://onlearn.it.kmitl.ac.th/" class="button inverted">
                                        <i class="fas fa-sign-in-alt"></i> E-Learning
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-mb-12 col-6 col-dt-4">
                            <div class="bg-box"
                                 style="background-image: url(<?php echo get_theme_file_uri('img/services/wordpress.jpg'); ?>); text-align: center;">
                                <h3 style="color: white">WordPress</h3>
                                <div class="btn-wrap">
                                    <a href="<?php echo admin_url(); ?>" class="button inverted">
                                        <i class="fas fa-sign-in-alt"></i> Login
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-mb-12 col-6 col-dt-4">
                            <div class="bg-box"
                                 style="background-image: url(<?php echo get_theme_file_uri('img/services/support.jpg'); ?>); text-align: center;">
                                <h3 style="color: white">IT Support</h3>
                                <div class="btn-wrap">
                                    <a href="https://support.it.kmitl.ac.th/" class="button inverted">
                                        <i class="fas fa-sign-in-alt"></i> IT Support
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-mb-12 col-6 col-dt-4">
                            <div class="bg-box"
                                 style="background-image: url(<?php echo get_theme_file_uri('img/services/imagine.jpg'); ?>); text-align: center;">
                                <h3 style="color: white">MS Imagine</h3>
                                <div class="btn-wrap">
                                    <a href="http://e5.onthehub.com/d.ashx?s=457ogzrofp" class="button inverted">
                                        <i class="fas fa-sign-in-alt"></i> MS Imagine
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-mb-12 col-6 col-dt-4">
                            <div class="bg-box"
                                 style="background-image: url(<?php echo get_theme_file_uri('img/services/kerio.jpg'); ?>); text-align: center;">
                                <h3 style="color: white">VPN</h3>
                                <div class="btn-wrap">
                                    <a href="https://support.it.kmitl.ac.th/connecting-vpn/" class="button inverted">
                                        <i class="fas fa-sign-in-alt"></i> VPN
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-mb-12 col-6 col-dt-4">
                            <div class="bg-box"
                                 style="background-image: url(<?php echo get_theme_file_uri('img/services/workspace.png'); ?>); text-align: center;">
                                <h3 style="color: white">Workspace</h3>
                                <div class="btn-wrap">
                                    <a href="https://workspace.it.kmitl.ac.th" class="button inverted">
                                        <i class="fas fa-sign-in-alt"></i> Workspace
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col-group -->
                </div><!-- .container -->
            </div><!-- .page-content -->
        </section><!-- section .page -->
        <?php

    endwhile;
endif;

get_footer();

?>