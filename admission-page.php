<?php /*
Template Name: Admission page
Template Post Type: page
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<section class="page page--courses">
			<div class="page-content">
				<div class="page-hero">
					<h1 class="text-center">หลักสูตร</h1>
					<h3 class="text-center">ผลิตบัณฑิตที่พร้อมด้วยคุณสมบัติอันพึงประสงค์ ในสาขาวิชาที่สอดคล้องกับความต้องการของสังคม</h3>
				</div>
				<section class="all-courses">
					<div class="container">
						<p class="text-center" id="course-overview">หลักสูตรที่มุ่งพัฒนาผู้เรียน ให้มีความรอบรู้อย่างกว้างขวาง มีโลกทัศน์ที่กว้างไกล มีความเข้าใจตนเอง ผู้อื่น และสังคม</p>
						<div class="col-group">
							<div class="col-12">
								<div class="bg-box" style="background-image: url(<?php echo get_theme_file_uri('img/course-1.jpg'); ?>);">
									<h3>หลักสูตรปริญญาตรี</h3>
									<p>หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ<br/>
									(Bachelor of Science Program in Information Technology)</p>
									<div class="btn-wrap">
										<a href="it-program" class="button outline inverted">สาขาวิชาเทคโนโลยีสารสนเทศ</a>
									</div>
									<div class="btn-wrap">
										<a href="datasci-program" class="button outline inverted">สาขาวิชาวิทยาการข้อมูลและการวิเคราะห์เชิงธุรกิจ</a>
									</div>
									<div class="btn-wrap">
										<a href="bit-program" class="button outline inverted">สาขาเทคโนโลยีสารสนเทศทางธุรกิจ (หลักสูตรนานาชาติ)</a>
									</div>
								</div>
							</div>
						</div>
						<div class="box-wrap">
							<div class="bg-box" style="background-image: url(<?php echo get_theme_file_uri('img/course-2.jpg'); ?>);">
								<h3>หลักสูตรปริญญาโท</h3>
								<p>หลักสูตรวิทยาศาสตรมหาบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ<br/>
								(Master of Science Program in Information Technology)</p>
								<a href="master-degree" class="button outline inverted">รายละเอียด</a>
							</div>
							<div class="bg-box" style="background-image: url();">
								<h3>หลักสูตรปริญญาเอก</h3>
								<p>หลักสูตรปรัชญาดุษฎีบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ<br/>
								(Doctor of Philosophy Program in Information Technology)</p>
								<a href="#" class="button outline inverted">รายละเอียด</a>
							</div>
						</div>
					</div>
				</section>
			</div><!-- .page-content -->
		</section><!-- section.page.page-research -->
		<section class="page page--admission">
			<div class="page-content">
				<div class="page-hero">
					<h1 class="text-center">การรับสมัคร</h1>
					<h3 class="text-center">หลักสูตรที่มุ่งพัฒนาผู้เรียน ให้มีความรอบรู้อย่างกว้างขวาง มีโลกทัศน์ที่กว้างไกล มีความเข้าใจตนเอง ผู้อื่น และสังคม</h3>
				</div>
				<section class="admission--admssn-types">
					<div class="container">
						<div class="admssn-box">
							<div class="admssn-img" style="background-image: url(<?php echo get_theme_file_uri('img/admssn-1.jpg'); ?>)"></div>
							<div class="admssn-text">
								<h3>ปริญญาตรี</h3>
								<hr>
								<ul class="unstyled">
									<li>
										<a href="#">
											<span class="caret right"></span> คัดเลือกโดยพิจารณาจาก Portfolio
										</a>
									</li>
									<li>
										<a href="#">
											<span class="caret right"></span> โควต้า
										</a>
									</li>
									<li>
										<a href="#">
											<span class="caret right"></span> รับตรงร่วมกัน
										</a>
									</li>
									<li>
										<a href="#">
											<span class="caret right"></span> Admission
										</a>
									</li>
									<li>
										<a href="#">
											<span class="caret right"></span> รับตรงอิสระ
										</a>
									</li>
									<li>
										<a href="#">
											<span class="caret right"></span> ทุนการศึกษา
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="admssn-box">
							<div class="admssn-img" style="background-image: url(.<?php echo get_theme_file_uri('img/admssn-2.jpg'); ?>)"></div>
							<div class="admssn-text">
								<h3>ปริญญาตรีแบบก้าวหน้า</h3>
								<hr>
								<ul class="unstyled">
									<li>
										<a href="#">
											<span class="caret right"></span> สอบข้อเขียนและสอบสัมภาษณ์
										</a>
									</li>
									<li>
										<a href="#">
											<span class="caret right"></span> ทุนการศึกษา
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="admssn-box">
							<div class="admssn-img" style="background-image: url(<?php echo get_theme_file_uri('img/admssn-3.jpg'); ?>)"></div>
							<div class="admssn-text">
								<h3>ปริญญาโทและเอก</h3>
								<hr>
								<ul class="unstyled">
									<li>
										<a href="#">
											<span class="caret right"></span> สอบข้อเขียนและสอบสัมภาษณ์
										</a>
									</li>
									<li>
										<a href="#">
											<span class="caret right"></span> โครงการข้าราชการ พนักงานรัฐ
										</a>
									</li>
									<li>
										<a href="#">
											<span class="caret right"></span> ทุนการศึกษา
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
			</div><!-- .page-content -->
		</section><!-- section.page.page-admission -->
<?php

endwhile;
endif;

get_footer();

?>