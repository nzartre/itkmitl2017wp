<?php /*
Template Name: Acad Services
Template Post Type: page
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<section class="page page--acadserv">
			<div class="page-content">
				<div class="page-hero">
					<h1 class="text-center">การอบรม</h1>
					<h3 class="text-center">ถ่ายทอดความรู้ในศาสตร์ทางเทคโนโลยีสารสนเทศ ทั้งด้านทฤษฎีและปฏิบัติ ให้แก่สังคมอย่างยั่งยืน</h3>
					<a href="<?php get_site_url() ?>/events" class="button outline inverted big">ดูตารางการอบรม</a>
				</div>
				<section class="acadserv--categories">
					<div class="container">
						<h1 class="title">หลักสูตรอบรม</h1>
						<div class="box-w-image">
							<div class="the-img" style="background-image: url(<?php echo get_theme_file_uri('img/acad-serv-1.jpg'); ?>)"></div>
							<div class="the-text">
								<h3>หลักสูตรอบรมทางวิชาการ</h3>
								<p>หลักสูตรอบรมทางวิชาการโดยมีความร่วมมือกับบริษัทชั้นนำทาง ด้านเทคโนโลยีสารสนเทศ ให้คำแนะนำและถ่ายทอดเทคโนโลยีเฉพาะด้านอันทันสมัย แบ่งเป็น 3 กลุ่ม ได้แก่</p>
								<ul class="unstyled">
									<li>
										<a href="#">
											<span class="caret right"></span> หลักสูตร Mini Master
										</a>
									</li>
									<li>
										<a href="#">
											<span class="caret right"></span> หลักสูตร Oracle Database
										</a>
									</li>
									<li>
										<a href="#">
											<span class="caret right"></span> หลักสูตร CCNA for CNAP Instructors
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="box-w-image">
							<div class="the-text">
								<h3>หลักสูตรอบรมการวิชาการแก่ชุมชน</h3>
								<p>เป็นหลักสูตรที่ อาจารย์ของคณะเทคโนโลยีสารสนเทศ คัดสรรหัวข้อที่ทันสมัย เหมาะสมกับชุมชน สังคม และเหมาะสมกับ บุคคลทั่วไป ทั้งวัยเรียน วัยแรงงาน เพื่อพัฒนาทักษะเพิ่มพูนความรู้ เช่น</p>
								<ul class="unstyled">
									<li>
										<a href="#">
											<span class="caret right"></span> หลักสูตร Internet of Things Implementation
										</a>
									</li>
									<li>
										<a href="#">
											<span class="caret right"></span> หลักสูตร การโปรแกรมหุ่นยนต์อีทีด้วยจาวาเบื้องต้น
										</a>
									</li>
									<li>
										<a href="#">
											<span class="caret right"></span> หลักสูตร อบรมทางวิชาการให้ครูคอมพิวเตอร์
										</a>
									</li>
								</ul>
							</div>
							<div class="the-img" style="background-image: url(<?php echo get_theme_file_uri('img/acad-serv-2.jpg'); ?>)"></div>
						</div>
						<div class="box-w-image">
							<div class="the-img" style="background-image: url(<?php echo get_theme_file_uri('img/acad-serv-3.jpg'); ?>)"></div>
							<div class="the-text">
								<h3>โครงการบริการวิชาการเพื่อพัฒนาคุณภาพนักศึกษา</h3>
								<p>เป็นหลักสูตรพิเศษ ที่ทางคณะจัดทำขึ้นเพื่อพัฒนาคุณภาพของนักศึกษา ทั้งนักศึกษาปัจจุบัน และศิษย์เก่า เพื่อให้นักศึกษามีความรู้ที่ทันสมัย พร้อมออกไปทำงาน เป็นบัณฑิตที่พึงประสงค์ของสังคม เช่น</p>
								<ul class="unstyled">
									<li>
										<a href="#">
											<span class="caret right"></span> หลักสูตร Startup
										</a>
									</li>
									<li>
										<a href="#">
											<span class="caret right"></span> หลักสูตร เพิ่มพูนความรู้ภาษาอังกฤษสำหรับสัมภาษณ์งาน
										</a>
									</li>
									<li>
										<a href="#">
											<span class="caret right"></span> หลักสูตร การเขียนโปรแกรมเชื่อมต่อฐานข้อมูล NoSQL
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
			</div><!-- .page-content -->
		</section>
<?php

endwhile;
endif;

get_footer();

?>