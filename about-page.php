<?php /*
Template Name: About page
Template Post Type: page
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<section class="page page--about">
			<div class="page-content">
				<div class="page-hero about--hero">
					<h2><?php pll_e('about_subtitle'); ?></h2>
				</div>
				<section class="about--stats">
					<div class="container">
						<a href="#scroll-history" class="stat-box">
							<img src="<?php echo get_theme_file_uri('img/about-foundation.png'); ?>" alt="about-foundation">
							<h3><?php pll_e('about_found'); ?></h3>
							<p><?php pll_e('about_found_details'); ?></p>
						</a>
						<a href="./travel/" class="stat-box">
							<img src="<?php echo get_theme_file_uri('img/about-location.png'); ?>" alt="about-location">
							<h3><?php pll_e('about_location'); ?></h3>
							<p><?php pll_e('about_location_details'); ?><span id="weather"></span></p>
						</a>
                        <a href="./executives/" class="stat-box">
                            <img src="<?php echo get_theme_file_uri('img/about-executives.png'); ?>" alt="about-personnel">
                            <h3><?php pll_e('about_executives'); ?></h3>
                            <p><?php pll_e('about_executives_details'); ?></p>
                        </a>
                        <a href="<?php echo home_url() . '/staff/'; ?>" class="stat-box">
                            <img src="<?php echo get_theme_file_uri('img/about-personnel.png'); ?>" alt="about-personnel">
                            <h3><?php pll_e('about_staff'); ?></h3>
                            <p><?php pll_e('about_staff_details'); ?></p>
                        </a>
						<a href="./contact/" class="stat-box">
							<img src="<?php echo get_theme_file_uri('img/about-contact.png'); ?>" alt="about-contact">
							<h3><?php pll_e('about_contact'); ?></h3>
							<p><?php pll_e('about_contact_details'); ?></p>
						</a>
                        <a href="./life/" class="stat-box">
                            <img src="<?php echo get_theme_file_uri('img/about-life.png'); ?>" alt="about-life">
                            <h3><?php pll_e('about_life'); ?></h3>
                            <p><?php pll_e('about_life_details'); ?></p>
                        </a>
                        <a href="./donate/" class="stat-box">
                            <img src="<?php echo get_theme_file_uri('img/about-donate.png'); ?>" alt="about-donate">
                            <h3><?php pll_e('about_donate'); ?></h3>
                            <p><?php pll_e('about_donate_details'); ?></p>
                        </a>
					</div><!-- .container -->
				</section><!-- section.about——stats -->
				<div class="about--dean">
					<img src="<?php echo get_theme_file_uri('img/about-dean-avatar.jpg'); ?>" alt="Dean">
					<p class="large dean-words"><?php pll_e('about_description_word'); ?></p>
					<div style="margin-bottom: 1em">
						<a href="./deans-message/" class="button round inverted outline">
                    		<?php pll_e('misc_read-more'); ?>
                		</a>
					</div>
					<p class="big dean-name" id="scroll-history"><?php pll_e('about_description_person'); ?></p>
					<p class="dean-position"><?php pll_e('about_description_position'); ?></p>
				</div>
				<div class="timeline-wrapper">
					<ul class="timeline">
						<li class="event" data-date="2537">
							<h3 class="year">2537</h3>
							<div class="thumb" style="background-image: url(<?php echo get_theme_file_uri('img/fcl2537.jpg'); ?>)"></div>
							<div class="text">
								<p><?php pll_e('about_2537'); ?></p>
							</div>
						</li>
						<li class="event" data-date="2539">
							<h3 class="year">2539</h3>
							<div class="thumb" style="background-image: url(<?php echo get_theme_file_uri('img/fcl2539.jpg'); ?>)"></div>
							<div class="text">
								<p><?php pll_e('about_2539'); ?></p>
							</div>
						</li>
						<li class="event" data-date="2545">
							<h3 class="year">2545</h3>
							<div class="thumb" style="background-image: url(<?php echo get_theme_file_uri('img/fcl2545.jpg'); ?>)"></div>
							<div class="text">
								<p><?php pll_e('about_2545'); ?></p>
							</div>
						</li>
						<li class="event" data-date="2547">
							<h3 class="year">2547</h3>
							<div class="thumb" style="background-image: url(<?php echo get_theme_file_uri('img/fcl2547.jpg'); ?>)"></div>
							<div class="text">
								<p><?php pll_e('about_2547'); ?></p>
							</div>
						</li>
						<li class="event" data-date="2551">
							<h3 class="year">2551</h3>
							<div class="thumb" style="background-image: url(<?php echo get_theme_file_uri('img/fcl2551.jpg'); ?>)"></div>
							<div class="text">
								<p><?php pll_e('about_2551'); ?></p>
							</div>
						</li>
						<li class="event" data-date="2552">
							<h3 class="year">2552</h3>
							<div class="thumb" style="background-image: url(<?php echo get_theme_file_uri('img/fcl2552.jpg'); ?>)"></div>
							<div class="text">
								<p><?php pll_e('about_2552'); ?></p>
							</div>
						</li>
						<li class="event" data-date="2554">
							<h3 class="year">2554</h3>
							<div class="thumb" style="background-image: url(<?php echo get_theme_file_uri('img/fcl2554.jpg'); ?>)"></div>
							<div class="text">
								<p><?php pll_e('about_2554'); ?></p>
							</div>
						</li>
					</ul><!-- ul.timeline -->
				</div><!-- .timeline-wrapper -->
				<section class="identity">
					<div class="container">
						<div class="col-group">
							<div class="identity col-dt-4">
								<h2><?php pll_e('about_appreciation'); ?></h2>
								<h5><?php pll_e('about_appreciation_subtitle'); ?></h5>
								<hr>
								<p><?php pll_e('about_appreciation_details'); ?></p>
							</div>
							<div class="identity col-dt-4">
								<h2><?php pll_e('about_identity'); ?></h2>
								<h5><?php pll_e('about_identity_subtitle'); ?></h5>
								<hr>
								<p><?php pll_e('about_identity_details'); ?></p>
							</div>
							<div class="identity col-dt-4">
								<h2><?php pll_e('about_entity'); ?></h2>
								<h5><?php pll_e('about_entity_subtitle'); ?></h5>
								<hr>
								<p><?php pll_e('about_entity_details'); ?></p>
							</div>
						</div>
					</div>
				</section><!-- section.identity -->
			</div><!-- .page-content -->
		</section>
        <script>
            var setWeather = function(data) {
                var bkkTemp = data.query.results.channel.item.condition.temp;
                document.getElementById('weather').innerText = '(' + bkkTemp + '°C)';
            };
        </script>
        <script defer src="https://query.yahooapis.com/v1/public/yql?q=select item.condition.temp from weather.forecast where woeid = 1225448 and u='c'&format=json&callback=setWeather"></script>
<?php

endwhile;
endif;

get_footer();

?>
