<?php
/*
Template Name: Sitemap Page
Template Post Type: page
*/

get_header();
?>

<section class="page">
    <div class="page-content">
        <div class="paper">
            <article class="container">
                <h1 class="page-title"><?php pll_e('page_sitemap'); ?></h1>
                <ul>
                    <?php
                    $smp = get_page_by_title( 'Sitemap' )->ID;
                    wp_list_pages(
                        array(
                            'exclude' => $smp,
                            'title_li' => '',
                        )
                    );
                    ?>
                    <li><a href="staff"><?php pll_e('page_staff'); ?></a></li>
                    <li><a href="publications"><?php pll_e('page_publications'); ?></a></li>
                    <li><a href="Sitemap"><?php pll_e('page_sitemap'); ?></a></li>
                </ul>
            </article><!-- .container -->
        </div><!-- .paper -->
    </div><!-- .page-content -->
</section><!-- section.page -->

<?php get_footer(); ?>
