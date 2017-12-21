<footer>
    <div class="container">
        <div class="col-group">
            <div class="col-4">
                <p>คณะเทคโนโลยีสารสนเทศ<br>สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</p>
                <p>เลขที่ 1 ซอยฉลองกรุง 1 แขวงลาดกระบัง เขตลาดกระบัง กรุงเทพฯ 10520</p>
                <p>โทรศัพท์​+66 (0) 2723 4900<br>โทรสาร +66 (0) 2723 4910</p>
            </div>
            <div class="col-3 col-mb-offset-0 col-dt-offset-5">
                <h5><?php pll_e('Social Media'); ?></h5>
                <div class="social-wrap">
                    <a href="https://www.facebook.com/ITLadkrabang">
                        <img src="<?php echo get_theme_file_uri('img/social/facebook.png'); ?>" alt="Facebook">
                    </a>
                    <a href="https://twitter.com/itkmitl">
                        <img src="<?php echo get_theme_file_uri('img/social/twitter.png'); ?>" alt="Twitter">
                    </a>
                    <a href="https://www.youtube.com/user/itkmitl1">
                        <img src="<?php echo get_theme_file_uri('img/social/youtube.png'); ?>" alt="YouTube">
                    </a>
                </div>
                <p><a href="/sitemap" class="text-link"><?php pll_e('Sitemap'); ?></a></p>

            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<div id="search-modal" class="modal-box hide">
    <div class="modal">
        <span class="close"></span>
        <div class="modal-header text-center">
            <?php pll_e("Search"); ?>
        </div>
        <div class="modal-body">
            <p class="text-center"><?php pll_e("Type and hit enter"); ?></p>
            <?php get_search_form(); ?>
        </div>
    </div>
</div>
<div id="splash-modal" class="modal-box hide"
     splash="<?php echo (!is_null(get_theme_mod('splash_display_setting')) && is_front_page()) ? "on" : "off"; ?>">
    <div class="modal">
        <span class="close"></span>
        <div class="inner">
            <?php if (strlen(get_theme_mod('splash_link_setting'))) {
                echo "<a href='" . get_theme_mod('splash_link_setting') . "'>";
            } ?>
            <img src="<?php echo esc_url(get_theme_mod('splash_setting')); ?>">
            <?php if (strlen(get_theme_mod('splash_link_setting'))) {
                echo "</a>";
            } ?>
        </div>
    </div>
</div>
<button data-component="modal" data-target="#splash-modal" style="display:none"></button>
</body>

</html>