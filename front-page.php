<?php get_header(); ?>

<div class="hero">
    <div class="site-name text-center">
        <h1><?php pll_e('คณะไอที'); ?></h1>
        <h2>
            <?php pll_e('พระจอมเกล้าฯ ลาดกระบัง'); ?>
        </h2>
    </div>
    <div class="overlay"></div>
    <video autoplay loop id="hero-video"></video>
    <div class="container">
        <div class="secondary-nav">
            <?php
                $menuParameters = array(
                    'container'       => false,
                    'echo'            => false,
                    'items_wrap'      => '%3$s',
                    'depth'           => 0,
                    'theme_location'  => 'header',
                );
                
                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
            ?>
        </div>
    </div>
</div>

<section style="background-color: #f6f6f6">
    <div class="container">
        <div class="col-group">
            <div class="col-12 col-dt-4">
                <div class="card">
                    <div class="padded">
                        <img src="<?php echo get_theme_file_uri('img/card-icon.png'); ?>" class="icon" alt="">
                        <h3>หลักสูตรทั้งหมด</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna</p>
                        <a href="./page.html" class="button round">ดูเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-dt-4">
                <div class="card">
                    <div class="padded">
                        <img src="<?php echo get_theme_file_uri('img/card-icon.png'); ?>" class="icon" alt="">
                        <h3>หลักสูตรอบรม</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna</p>
                        <a href="./page.html" class="button round">ดูเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-dt-4">
                <div class="card">
                    <div class="padded">
                        <img src="<?php echo get_theme_file_uri('img/card-icon.png'); ?>" class="icon" alt="">
                        <h3>ที่ตั้งและการเดินทาง</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna</p>
                        <a href="./page.html" class="button round">ดูเพิ่มเติม</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #d7d7d7" id="home-news-section">
    <h1 class="title">ข่าวสารและกิจกรรม</h1>
    <div class="owl-carousel" id="home-news">
    <?php $the_query = new WP_Query(array(
    'posts_per_page' => 5,
    'category_name' => 'news', // this is the category SLUG
    ));
    if ($the_query->have_posts()) :
	while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <div class="card news-card">
            <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail( 'full', array('class' => 'featured-image', 'id' => 'main-feat-image')); ?>
            <?php endif; ?>
            <div class="padded">
                <h3><?php the_title(); ?></h3>
                <p><?php the_content('', FALSE, ''); ?></p>
                <a href="<?php echo get_the_permalink() ?>" class="button round">ดูเพิ่มเติม</a>                
            </div>
        </div>

    <?php
    endwhile;
    endif
    ?>

    </div>
    <div style="text-align: center; margin: 2em 1em 1em">
        <a href="#" class="button outline">ข่าวสารและกิจกรรมทั้งหมด</a>
    </div>
</section>
<section style="background-color: #0088D3; padding: 0;" id="course">
    <div class="each-course">
        <div class="col-group course-row">
            <div class="col-12 col-dt-8">
                <img class="course clip" src="<?php echo get_theme_file_uri('img/111.jpg'); ?>">
            </div>
            <div class="col-12 col-dt-4 course-text">
                <div class="content-course">
                    <h2>หลักสูตรปริญญาตรี</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna</p>
                    <a href="#" class="button round inverted outline">ดูเพิ่มเติม</a>
                </div>
            </div>
        </div><!-- .col-group .course-row -->
    </div><!-- .each-course -->
    <div class="each-course">
        <div class="col-group course-row">
            <div class="col-12 col-dt-8 push-last">
                <img class="course clip clip-left" src="<?php echo get_theme_file_uri('img/222.jpg'); ?>">
            </div>
            <div class="col-12 col-dt-4 course-text push-first">
                <div class="content-course left">
                    <h2>หลักสูตรปริญญาตรี</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna</p>
                    <a href="#" class="button round inverted outline">ดูเพิ่มเติม</a>
                </div>
            </div>
        </div><!-- .col-group .course-row -->
    </div><!-- .each-course -->
    <div class="each-course">
        <div class="col-group course-row">
            <div class="col-12 col-dt-8">
                <img class="course clip" src="<?php echo get_theme_file_uri('img/333.jpg'); ?>">
            </div>
            <div class="col-12 col-dt-4 course-text">
                <div class="content-course">
                    <h2>หลักสูตรปริญญาตรี</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna</p>
                    <a href="#" class="button round inverted outline">ดูเพิ่มเติม</a>
                </div>
            </div>
        </div><!-- .col-group .course-row -->
    </div><!-- .each-course -->
</section>

<?php get_footer(); ?>

<script>
    var heroVideo = document.createElement('source');
    heroVideo.setAttribute('src', '<?php echo get_theme_file_uri('img/itkmitl-h264.mp4'); ?>');
    heroVideo.setAttribute('type', 'video/mp4');
    
    if (window.innerWidth > 768) {
        document.getElementById('hero-video').appendChild(heroVideo);
    }
</script>