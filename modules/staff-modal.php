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
                    <div class="contact-wrap">
                        <div id="email-wrap">
                            <img src="<?php echo get_theme_file_uri('img/icon-mail.png') ?>" alt="mail" class="icon">
                            <span id="email"></span>
                        </div>
                        <div id="phone-wrap">
                            <img src="<?php echo get_theme_file_uri('img/icon-phone.png') ?>" alt="phone" class="icon">
                            <span id="phone"></span>
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
            document.getElementById('prefix').innerText = staff.prefix;
            document.getElementById('name').innerText = staff.first_name + " " + staff.last_name;
            if (staff.email) {
                document.getElementById('email').innerText = staff.email;
                document.getElementById('email-wrap').style.display = 'block';
            }
            else document.getElementById('email-wrap').style.display = 'none';
            if (staff.phone) {
                document.getElementById('phone').innerText = staff.phone;
                document.getElementById('phone-wrap').style.display = 'block';
            }
            else document.getElementById('phone-wrap').style.display = 'none';
            document.getElementById('content').innerHTML = staff.content;
            jQuery.modalwindow({ target: '#staff-modal', width: '720px' });
        });
        jQuery('#staff-modal').on('close.modal', function() {
            jQuery('#staff-' + staffID).removeClass('loading');
        });
    }
</script>
