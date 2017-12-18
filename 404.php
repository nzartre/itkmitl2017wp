<?php get_header(); ?>

    <section class="page page--err-404">
        <div class="page-content">
            <div class="col-group">
                <div class="col-12">
                    <h1 class="h-404 text-center">404</h1>
                    <h2 class="h-no-result text-center"><?php pll_e('No result found'); ?></h2>
                </div>
                <div class="col-mb-offset-0 col-offset-2 col-dt-offset-4 col-mb-12 col-8 col-dt-4">
                    <p class="p-search text-center"><?php pll_e("Type and hit enter"); ?></p>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>