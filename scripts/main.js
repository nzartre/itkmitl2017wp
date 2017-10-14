if (window.innerWidth > 768) {
    var heroVideo = document.createElement('source');
    heroVideo.setAttribute('src', './img/itkmitl-h264.mp4');
    heroVideo.setAttribute('type', 'video/mp4');
    document.getElementById('hero-video').appendChild(heroVideo);
}

if ($('#main-feat-image').height() > $('#main-feat-image').width()) {
    $('#main-feat-image').style('max-width', '400px');
}

$('.nav-chevron').click(function(){
    $('.mobile-nav').toggle();
});

$(document).ready(function() {
    $('#home-news').owlCarousel({
        center: true,
        items: 1,
        margin: 10,
        loop: 0,
        lazyLoad: 1,
        dots: 1,
        responsive: {
            720: {
                items: 3,
                nav: 0
            },
            1280: {
            	items: 4
            }
        }
    });
});