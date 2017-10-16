jQuery(document).ready(function( $ ) {

    if ($('#main-feat-image').height() > $('#main-feat-image').width()) {
        $('#main-feat-image').style('max-width', '400px');
    }
    
    $('.nav-chevron').click(function(){
        $('.mobile-nav').toggle();
    });

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

console.log("%cOoooooooh!", "color: blue; font-size: xx-large; font-weight: bold");
console.log("%cWanna sneak into our code? Feel free!", "color: blue; font-size: x-large;")
console.log("%cIT KMITL web developer", "color: orange; font-size: large");
console.log("lelelelelelelelelelelelelelelel");
