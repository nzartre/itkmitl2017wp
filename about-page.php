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
					<h2>เป็นองค์กรที่ใช้นวัตกรรม<br/>เพื่อความเป็นเลิศทางการศึกษา<br/>ด้านเทคโนโลยีสารสนเทศ</h2>
				</div>
				<section class="about--stats">
					<div class="container">
						<a href="#scroll-history" class="stat-box">
							<img src="<?php echo get_theme_file_uri('img/about-foundation.png'); ?>" alt="about-foundation">
							<h3>ก่อตั้ง</h3>
							<p>23 กุมภาพันธ์ 2539</p>
						</a>
						<a href="travel" class="stat-box">
							<img src="<?php echo get_theme_file_uri('img/about-location.png'); ?>" alt="about-location">
							<h3>สถานที่ตั้ง</h3>
							<p>ลาดกระบัง กทม. <span id="weather"></span></p>
						</a>
						<a href="<?php echo home_url() . '/staff'; ?>" class="stat-box">
							<img src="<?php echo get_theme_file_uri('img/about-personnel.png'); ?>" alt="about-personnel">
							<h3>บุคลากร</h3>
							<p>คณาจารย์และเจ้าหน้าที่</p>
						</a>
						<a href="contact" class="stat-box">
							<img src="<?php echo get_theme_file_uri('img/about-contact.png'); ?>" alt="about-contact">
							<h3>ติดต่อ</h3>
							<p>การติดต่อคณะ</p>
						</a>
                        <a href="life" class="stat-box">
                            <img src="<?php echo get_theme_file_uri('img/about-life.png'); ?>" alt="about-life">
                            <h3>Life@IT</h3>
                            <p>บรรยากาศในคณะ</p>
                        </a>
					</div><!-- .container -->
				</section><!-- section.about——stats -->
				<div class="about--dean">
					<img src="<?php echo get_theme_file_uri('img/person.jpg'); ?>" alt="Dean">
					<p class="large dean-words">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem labore laudantium fugit tempora temporibus debitis veritatis voluptates culpa ea, minus consequatur, hic quam mollitia ipsa dolor voluptatem vero! Voluptate, molestias!"</p>
					<p class="big dean-name" id="scroll-history">รศ.ดร. นพพร โชติกกำธร</p>
					<p class="dean-position">คณบดี</p>
				</div>
				<div class="timeline-wrapper">
					<ul class="timeline">
						<li class="event" data-date="2537">
							<h3 class="year">2537</h3>
							<div class="thumb" style="background-image: url(<?php echo get_theme_file_uri('img/fcl2537.jpg'); ?>)"></div>
							<div class="text">
								<p>โครงการจัดตั้งคณะเทคโนโลยีสารสนเทศ ได้รับความเห็นชอบจากสถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง เมื่อวันที่ 12 กรกฎาคม 2537</p>
							</div>
						</li>
						<li class="event" data-date="2539">
							<h3 class="year">2539</h3>
							<div class="thumb" style="background-image: url(<?php echo get_theme_file_uri('img/fcl2539.jpg'); ?>)"></div>
							<div class="text">
								<p>ได้รับสถาปนาเป็นส่วนราชการเมื่อวันที่ 27 กุมภาพันธ์ 2539 คณะฯ ได้พัฒนาหลักสูตรปริญญาโท วิทยาศาสตรมหาบัณฑิต สาขาเทคโนโลยีสารสนเทศ เป็นหลักสูตรแรก ซึ่งมีสองแขนงวิชา คือ การจัดการเทคโนโลยีสารสนเทศ (Information Management) และ วิทยาการสารสนเทศ (Information Science) โดยเปิดสอนตั้งแต่ภาคการศึกษาที่ 2/2538</p>
							</div>
						</li>
						<li class="event" data-date="2545">
							<h3 class="year">2545</h3>
							<div class="thumb" style="background-image: url(<?php echo get_theme_file_uri('img/fcl2545.jpg'); ?>)"></div>
							<div class="text">
								<p>คณะเทคโนโลยีสารสนเทศ ได้พัฒนาหลักสูตรปริญญาตรีวิทยาศาสตรบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ เพิ่มขึ้นอีกหนึ่งหลักสูตร เพื่อสร้างบัณฑิตที่มีความแข็งแรงทางด้านวิชาการและคุณธรรม เพื่อตอบสนองสังคม รวมทั้งเป็นการปูพื้นฐานบัณฑิตเพื่อต่อยอดเข้าศึกษาในระดับปริญญาโท ซึ่งได้เปิดรับนักศึกษารุ่นแรกในปีการศึกาษา 2546</p>
							</div>
						</li>
						<li class="event" data-date="2547">
							<h3 class="year">2547</h3>
							<div class="thumb" style="background-image: url(<?php echo get_theme_file_uri('img/fcl2547.jpg'); ?>)"></div>
							<div class="text">
								<p>คณะเทคโนโลยีสารสนเทศ ได้พัฒนาหลักสูตรระดับปริญญาเอก ปรัชญาดุษฎีบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ เปิดรับนักศึกษารุ่นแรกในปีการศึกษา 2547</p>
							</div>
						</li>
						<li class="event" data-date="2551">
							<h3 class="year">2551</h3>
							<div class="thumb" style="background-image: url(<?php echo get_theme_file_uri('img/fcl2551.jpg'); ?>)"></div>
							<div class="text">
								<p>ปรับปรุงหลักสูตรระดับปริญญาโท วิทยาศาสตร์มหาบัณฑิต เป็น 2 แขนงวิชา คือ เทคโนโลยีระบบสารสนเทศ (Infornation System Technologies - IST) และ เทคโนโลยีสารสนเทศและการจัดการ (Information Technology and Management - ITM)</p>
							</div>
						</li>
						<li class="event" data-date="2552">
							<h3 class="year">2552</h3>
							<div class="thumb" style="background-image: url(<?php echo get_theme_file_uri('img/fcl2552.jpg'); ?>)"></div>
							<div class="text">
								<p>ปรับปรุงหลักสูตรวิทยาศาสตรมหาบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ แบ่งเป็น 2 แขนงวิชา คือ แขนงวิชาเทคโนโลยีระบบสารสนเทศ (Information System Technologies - IST) และ แขนงวิชาเทคโนโลยีสารสนเทศและการจัดการ (Information Technology and Management - ITM)</p>
							</div>
						</li>
						<li class="event" data-date="2554">
							<h3 class="year">2554</h3>
							<div class="thumb" style="background-image: url(<?php echo get_theme_file_uri('img/fcl2554.jpg'); ?>)"></div>
							<div class="text">
								<p>ปรับปรุงหลักสูตร ป.ตรี ป.โท และ ป.เอก ให้เป็นไปตามตามกรอบมาตรฐานคุณวุฒิระดับอุดมศึกษาแห่งชาติ (TQF) โดยหลักสูตรของ ป.โท (วิทยาศาสตรมหาบัณฑิต) แบ่งเป็น 4 แขนงวิชา คือ</p>
								<ol>
									<li>แขนงวิชาวิทยาการสารสนเทศ (IS)</li>
									<li>แขนงวิชาเทคโนโลยีระบบสารสนเทศ (IST)</li>
									<li>แขนงวิชาเทคโนโลยีเครือข่ายและระบบ (NST)</li>
									<li>แขนงวิชาเทคโนโลยีสารสนเทศและการจัดการ (ITM)</li>
								</ol>
							</div>
						</li>
					</ul><!-- ul.timeline -->
				</div><!-- .timeline-wrapper -->
				<section class="identity">
					<div class="container">
						<div class="col-group">
							<div class="identity col-dt-4">
								<h2>ค่านิยม</h2>
								<h5>IT@WORKS</h5>
								<hr>
								<p>บุคลากร นักศึกษา และบัณฑิตของคณะ มีความสามารถทำงานได้จริง และเป็นมืออาชีพด้านเทคโนโลยีสารสนเทศ</p>
							</div>
							<div class="identity col-dt-4">
								<h2>อัตลักษณ์</h2>
								<h5>บัณฑิตพร้อมทำงาน (IT Prompt)</h5>
								<hr>
								<p>บัณฑิตมีความรู้และทักษะพร้อมในการทำงานที่ตรงกับสายงานและความเชี่ยวชาญเฉพาะทางตามหลักสูตรที่ศึกษา</p>
							</div>
							<div class="identity col-dt-4">
								<h2>เอกลักษณ์</h2>
								<h5>นวัตกรรมล้ำสมัย</h5>
								<hr>
								<p>คณะเน้นการใช้เทคโนโลยีและนวัตกรรมเพื่อสนับสนุนการเรียนการสอนที่มีประสิทธิภาพ และเป็นผู้นำในการวิจัยและพัฒนาเทคโนโลยีและนวัตกรรม</p>
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