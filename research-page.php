<?php /*
Template Name: Research page
Template Post Type: page
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<section class="page page--research">
			<div class="page-content">
				<div class="page-hero">
					<h1 class="text-center">การวิจัย</h1>
					<h3 class="text-center">สร้างคน มุ่งวิจัย รับใช้สังคม</h3>
				</div>
				<section class="research--lab">
					<h1 class="title">ห้องปฏิบัติการ</h1>
					<div class="container">
						<a href="#" class="lab-box" style="background-image: url(<?php echo get_theme_file_uri('img/lab-isis.jpg'); ?>);">
							<h3>กลุ่ม ISIS</h3>
							<p>กลุ่มวิทยาการสารสนเทศ (Information Science and Intelligent Systems Group) ประกอบด้วย 4 ห้องปฏิบัติการวิจัย</p>
						</a>
						<a href="#" class="lab-box" style="background-image: url(<?php echo get_theme_file_uri('img/lab-ni.jpg'); ?>);">
							<h3>กลุ่ม NI</h3>
							<p>กลุ่มระบบเครือข่าย (Networking and Internet Group) ประกอบด้วย 3 ห้องปฏิบัติการวิจัย</p>
						</a>
						<a href="#" class="lab-box" style="background-image: url(<?php echo get_theme_file_uri('img/lab-met.jpg'); ?>);">
							<h3>กลุ่ม MET</h3>
							<p>กลุ่มสื่อประสม (Multimedia and Embedded Technologies Group) ประกอบด้วย 3 ห้องปฏิบัติการวิจัย</p>
						</a>
					</div>
				</section>
				<hr class="container">
				<section class="journal">
					<div class="container">
						<div class="col-group">
							<div class="col-6">
								<h3 class="title" style="text-align: left;">IT Journal</h3>
								<p>คณะตระหนักถึงความสำคัญของบทความวิชาการที่มีคุณภาพทางด้านเทคโนโลยีสารสนเทศ ที่มีต่อการเรียนการสอน ตลอดจนการเผยแพร่ความรู้ความเข้าใจที่ถูกต้องแก่ประชาชนทั่วไป จึงได้จัดทำวารสารเทคโนโลยีสารสนเทศลาดกระบังขึ้น เพื่อส่งเสริมการผลิตและเผยแพร่บทความวิชาการ</p>
								<a href="" class="button">วารสารเทคโนโลยีสารสนเทศลาดกระบัง</a>
							</div>
							<div class="col-6">
								<h3 class="title" style="text-align: left;">ผลงานวิจัย</h3>
								<p>ผลงานบทความวิจัยของบุคลากรคณะ ทั้งประเภทการประชุมทางวิชาการ และประเภทวารสาร</p>
								<a href="" class="button">ผลงานวิจัยของบุคลากร</a>
							</div>
						</div>
					</div>
				</section>
			</div><!-- .page-content -->
		</section><!-- section.page.page-research -->
<?php

endwhile;
endif;

get_footer();

?>