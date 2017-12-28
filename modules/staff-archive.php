<section class="page page--staff">
    <div class="page-content">
        <div class="paper">
            <div class="container">
                <h1 class="page-title"><?php pll_e('page_staff'); ?></h1>
                <img src="<?php echo get_theme_file_uri('img/divider-short.png'); ?>" alt="divider"
                     class="divider-short">
                <h3 class="text-center">บุคลากรสายวิชาการ</h3>
                <div class="staff-wrap">
                    <?php $staff_query = new WP_Query('post_type=staff&staff_position=lecturer&nopaging=1&order=ASC');
                    if ($staff_query->have_posts()) :
                        while ($staff_query->have_posts()) : $staff_query->the_post(); ?>
                            <div class="card person-card" id="<?php echo 'staff-' . get_the_id(); ?>"
                                 onclick="showStaffModal(<?php echo get_the_id(); ?>);">
                                <?php the_post_thumbnail('full', array('id' => 'staff-' . get_the_id() . '-img')); ?>
                                <div class="padded">
                                    <h3><?php echo get_post_meta(get_the_id(), 'prefix', true) . ' ' . get_post_meta(get_the_id(), 'first_name', true); ?></h3>
                                    <p class="role"><?php echo get_post_meta(get_the_id(), 'role', true); ?></p>
                                    <p class="email"><?php echo get_post_meta(get_the_id(), 'email', true); ?></p>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                </div><!-- .staff-wrap -->
                <hr class="more-space">
                <h3 class="text-center">บุคลากรสายสนับสนุน</h3>
                <div class="staff-wrap">
                    <?php $staff_query = new WP_Query('post_type=staff&staff_position=supportive-staff&nopaging=1&order=ASC');
                    if ($staff_query->have_posts()) :
                        while ($staff_query->have_posts()) : $staff_query->the_post(); ?>
                            <div class="card person-card" id="<?php echo 'staff-' . get_the_id(); ?>"
                                 onclick="showStaffModal(<?php echo get_the_id(); ?>);">
                                <?php the_post_thumbnail('full', array('id' => 'staff-' . get_the_id() . '-img')); ?>
                                <div class="padded">
                                    <h3><?php echo get_post_meta(get_the_id(), 'prefix', true) . get_post_meta(get_the_id(), 'first_name', true); ?></h3>
                                    <p class="email"><?php echo get_post_meta(get_the_id(), 'email', true) ?></p>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                </div><!-- .staff-wrap -->
            </div><!-- .container -->
        </div><!-- .paper -->
    </div><!-- .page-content -->
</section>

<div id="staff-modal" class="modal-box staff-modal hide">
    <div class="modal">
        <span class="close"></span>
        <div class="modal-body">
            <div class="col-group">
                <div class="col-4">
                    <img id="thumbnail" alt="Staff">
                </div>
                <div class="col-8">
                    <span id="prefix"></span>
                    <span id="name"></span>
                    <span id="role"></span>
                    <div class="contact-wrap">
                        <div id="email-wrap">
                            <img src="<?php echo get_theme_file_uri('img/staff-icn/icon-mail.png') ?>" alt="mail" class="icon">
                            <span class="meta-detail" id="email"></span>
                        </div>
                        <div id="website-wrap">
                            <img src="<?php echo get_theme_file_uri('img/staff-icn/icon-website.png') ?>" alt="website" class="icon">
                            <span class="meta-detail" id="website"><a href="#" id="website-link" target="_blank"></a></span>
                        </div>
                        <div id="phone-wrap">
                            <img src="<?php echo get_theme_file_uri('img/staff-icn/icon-phone.png') ?>" alt="phone" class="icon">
                            <span class="meta-detail" id="phone"></span>
                        </div>
                        <div id="lab-wrap">
                            <img src="<?php echo get_theme_file_uri('img/staff-icn/icon-lab.png') ?>" alt="lab" class="icon">
                            <span class="meta-detail" id="lab"></span>
                        </div>
                    </div>
                    <div id="content"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var staff;

    function showStaffModal(staffID) {
        jQuery('#staff-' + staffID).addClass('loading');
        var staffPromise = new Promise(function (resolve, reject) {
            resolve(staff = jQuery.getJSON('/wp-json/wp/v2/staff/' + staffID));
        });
        staffPromise.then(function () {
            staff = staff.responseJSON;
            document.getElementById('thumbnail').setAttribute('src', staff.thumbnail);
            if (staff.prefix == 'อ.') document.getElementById('prefix').innerText = 'อาจารย์';
            else document.getElementById('prefix').innerText = staff.prefix;
            document.getElementById('name').innerText = staff.first_name + " " + staff.last_name;
            document.getElementById('role').innerText = staff.role;
            if (staff.email) {
                document.getElementById('email').innerText = staff.email;
                document.getElementById('email-wrap').style.display = 'block';
            }
            else document.getElementById('email-wrap').style.display = 'none';
            if (staff.website) {
                document.getElementById('website-link').innerText = staff.website.replace(/https?:\/\//, '');
                document.getElementById('website-link').setAttribute('href', staff.website);
                document.getElementById('website-wrap').style.display = 'block';
            }
            else document.getElementById('website-wrap').style.display = 'none';
            if (staff.phone) {
                document.getElementById('phone').innerText = staff.phone;
                document.getElementById('phone-wrap').style.display = 'block';
            }
            else document.getElementById('phone-wrap').style.display = 'none';
            if (staff.lab) {
                document.getElementById('lab').innerText = staff.lab;
                document.getElementById('lab-wrap').style.display = 'block';
            }
            else document.getElementById('lab-wrap').style.display = 'none';
            document.getElementById('content').innerHTML = staff.content;
            jQuery.modalwindow({target: '#staff-modal', width: '720px'});
        });
        jQuery('#staff-modal').on('close.modal', function () {
            jQuery('#staff-' + staffID).removeClass('loading');
        });
    }
</script>