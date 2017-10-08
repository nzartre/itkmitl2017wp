<?php /*
Template Name: About page
Template Post Type: page
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<section class="page page--about">
			<div class="page-content">
				<div class="about--hero">
					<h2>เป็นองค์กรที่ใช้นวัตกรรม<br/>เพื่อความเป็นเลิศทางการศึกษา<br/>ด้านเทคโนโลยีสารสนเทศ</h2>
				</div>
				<section class="about--stats">
					<div class="container">
						<div class="col-group">
							<div class="col-mb-12 col-6 col-dt-3">
								<img src="<?php echo get_theme_file_uri('img/about-foundation.png'); ?>" alt="about-foundation">
								<h3>ก่อตั้งเมื่อ</h3>
								<p>23 กุมภาพันธ์ 2539</p>
							</div>
							<div class="col-mb-12 col-6 col-dt-3">
								<img src="<?php echo get_theme_file_uri('img/about-location.png'); ?>" alt="about-location">
								<h3>สถานที่ตั้ง</h3>
								<p>เขตลาดกระบัง กรุงเทพมหานคร</p>
							</div>
							<div class="col-mb-12 col-6 col-dt-3">
								<img src="<?php echo get_theme_file_uri('img/about-students.png'); ?>" alt="about-students">
								<h3>นักศึกษา</h3>
								<p>จำนวน 1,200 คน</p>
							</div>
							<div class="col-mb-12 col-6 col-dt-3">
								<img src="<?php echo get_theme_file_uri('img/about-courses.png'); ?>" alt="about-courses">
								<h3>หลักสูตร</h3>
								<p>จำนวน 5 หลักสูตร</p>
							</div>
						</div>
					</div>
				</section>
				<div class="about--dean">
					<img src="<?php echo get_theme_file_uri('img/person.jpg'); ?>" alt="Dean">
					<p class="large dean-words">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem labore laudantium fugit tempora temporibus debitis veritatis voluptates culpa ea, minus consequatur, hic quam mollitia ipsa dolor voluptatem vero! Voluptate, molestias!"</p>
					<p class="big dean-name">รศ.ดร. นพพร โชติกกำธร</p>
					<p class="dean-position">คณบดี</p>
				</div>
				<div class="timeline-wrapper">
					<ul class="timeline">
						<li class="event" data-date="2537">
							<h3 class="year">2537</h3>
							<div class="thumb" style="background-image: url(<?php echo get_theme_file_uri('img/hero.jpg'); ?>)"></div>
							<div class="text">
								<p>โครงการจัดตั้งคณะเทคโนโลยีสารสนเทศ ได้รับความเห็นชอบจากสถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง เมื่อวันที่ 12 กรกฎาคม 2537</p>
							</div>
						</li>
						<li class="event" data-date="2539">
							<h3 class="year">2539</h3>
							<div class="thumb" style="background-image: url(<?php echo get_theme_file_uri('img/hero.jpg'); ?>)"></div>
							<div class="text">
								<p>ได้รับสถาปนาเป็นส่วนราชการเมื่อวันที่ 27 กุมภาพันธ์ 2539 คณะฯ ได้พัฒนาหลักสูตรปริญญาโท วิทยาศาสตรมหาบัณฑิต สาขาเทคโนโลยีสารสนเทศ เป็นหลักสูตรแรก ซึ่งมีสองแขนงวิชา คือ การจัดการเทคโนโลยีสารสนเทศ (Information Management) และ วิทยาการสารสนเทศ (Information Science) โดยเปิดสอนตั้งแต่ภาคการศึกษาที่ 2/2538</p>
							</div>
						</li>
						<li class="event" data-date="2545">
							<h3 class="year">2545</h3>
							<div class="thumb" style="background-image: url(<?php echo get_theme_file_uri('img/hero.jpg'); ?>)"></div>
							<div class="text">
								<p>คณะเทคโนโลยีสารสนเทศ ได้พัฒนาหลักสูตรปริญญาตรีวิทยาศาสตรบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ เพิ่มขึ้นอีกหนึ่งหลักสูตร เพื่อสร้างบัณฑิตที่มีความแข็งแรงทางด้านวิชาการและคุณธรรม เพื่อตอบสนองสังคม รวมทั้งเป็นการปูพื้นฐานบัณฑิตเพื่อต่อยอดเข้าศึกษาในระดับปริญญาโท ซึ่งได้เปิดรับนักศึกษารุ่นแรกในปีการศึกาษา 2546</p>
							</div>
						</li>
						<li class="event" data-date="2547">
							<h3 class="year">2547</h3>
							<div class="thumb" style="background-image: url(<?php echo get_theme_file_uri('img/hero.jpg'); ?>)"></div>
							<div class="text">
								<p>คณะเทคโนโลยีสารสนเทศ ได้พัฒนาหลักสูตรระดับปริญญาเอก ปรัชญาดุษฎีบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ เปิดรับนักศึกษารุ่นแรกในปีการศึกษา 2547</p>
							</div>
						</li>
						<li class="event" data-date="2551">
							<h3 class="year">2551</h3>
							<div class="thumb" style="background-image: url(<?php echo get_theme_file_uri('img/hero.jpg'); ?>)"></div>
							<div class="text">
								<p>ปรับปรุงหลักสูตรระดับปริญญาโท วิทยาศาสตร์มหาบัณฑิต เป็น 2 แขนงวิชา คือ เทคโนโลยีระบบสารสนเทศ (Infornation System Technologies - IST) และ เทคโนโลยีสารสนเทศและการจัดการ (Information Technology and Management - ITM)</p>
							</div>
						</li>
						<li class="event" data-date="2552">
							<h3 class="year">2552</h3>
							<div class="thumb" style="background-image: url(<?php echo get_theme_file_uri('img/hero.jpg'); ?>)"></div>
							<div class="text">
								<p>ปรับปรุงหลักสูตรวิทยาศาสตรมหาบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ แบ่งเป็น 2 แขนงวิชา คือ แขนงวิชาเทคโนโลยีระบบสารสนเทศ (Information System Technologies - IST) และ แขนงวิชาเทคโนโลยีสารสนเทศและการจัดการ (Information Technology and Management - ITM)</p>
							</div>
						</li>
						<li class="event" data-date="2554">
							<h3 class="year">2554</h3>
							<div class="thumb" style="background-image: url(<?php echo get_theme_file_uri('img/hero.jpg'); ?>)"></div>
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
			</div><!-- .page-content -->
		</section>
<?php

endwhile;
endif;

get_footer();

?>