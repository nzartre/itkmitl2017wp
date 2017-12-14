jQuery(document).ready(function( $ ) {

    if ($('#main-feat-image').height() > $('#main-feat-image').width()) {
        $('#main-feat-image').style('max-width', '400px');
    }
    
    $('.nav-chevron').click(function(){
        $('.mobile-nav').toggle();
    });

    window.onload = function () {
        if ($("#splash-modal").attr('show') == "1") {
            jQuery('button[data-target=#splash-modal]').trigger('click');        
        }
    }

});

console.log("%cOoooooooh!", "color: blue; font-size: xx-large; font-weight: bold");
console.log("%cWanna sneak into our code? Feel free!", "color: blue; font-size: x-large;")
console.log("%cIT KMITL web developer", "color: orange; font-size: large");
console.log("lelelelelelelelelelelelelelelel");
