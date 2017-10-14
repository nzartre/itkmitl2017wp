<?php /*
Template Name: Admission page
Template Post Type: page
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
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
							<div class="admssn-img" style="background-image: url(<?php echo get_theme_file_uri('img/admssn-2.jpg'); ?>)"></div>
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