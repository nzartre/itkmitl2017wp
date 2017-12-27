jQuery(document).ready(function ($) {

    if ($('#main-feat-image').height() > $('#main-feat-image').width()) {
        $('#main-feat-image').style('max-width', '400px');
    }
    
    $('.nav-chevron').click(function (){
        $('.mobile-nav').toggle();
    });

    window.onload = function () {
        if ($("#splash-modal").attr('splash') == "on") {
            jQuery('button[data-target=#splash-modal]').trigger('click');        
        }
    };

    $('html').click(function (e) {
        if (e.target.id != 'lang-switch') $('#lang-list').removeClass('show');
        else $('#lang-list').toggleClass('show');
    });

});
console.log("%cOoooooooh!", "color: blue; font-size: xx-large; font-weight: bold");
console.log("%cWanna sneak into our code? Feel free!", "color: blue; font-size: x-large;");
console.log("%cIT KMITL web developer", "color: orange; font-size: large");
console.log("lelelelelelelelelelelelelelelel");
