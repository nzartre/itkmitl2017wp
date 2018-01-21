jQuery(document).ready(function ($) {

    if ($('#main-feat-image').height() > $('#main-feat-image').width()) {
        $('#main-feat-image').style('max-width', '400px');
    }

    //wpadminbar handler
    navHeight = parseInt($('.top-nav').css('top'));
    secondNavHeight = parseInt($('.top-nav-secondary').css('top'));
    overlayHeight = parseInt($('.overlay').css('top'));
    wrapperHeight = parseInt($('.hero .wrapper').css('top'));

    function wpadminbarHandler() {
        shift = $('#wpadminbar').outerHeight(true);
        $('.top-nav').css('top', navHeight+shift);
        $('.top-nav-secondary').css('top', secondNavHeight+shift);
        $('.overlay').css('top', overlayHeight+shift);
        $('.hero .wrapper').css('top', wrapperHeight+shift);
    }

    function wpadminbarScroll() {
        if (jQuery('#wpadminbar').length && jQuery('#wpadminbar').css('position') == 'absolute') {
            
            tHeight = jQuery('.top-nav').outerHeight(true);
            adminHeight = jQuery('#wpadminbar').outerHeight();

            jQuery('.top-nav').css('top', Math.max(adminHeight-jQuery(document).scrollTop(), 0));
            jQuery('.top-nav-secondary').css('top', tHeight+Math.max(adminHeight-jQuery(document).scrollTop(), 0));
        }
    }
    
    wpadminbarHandler();
    //end wpadminbar handler

    $('.nav-chevron').click(function (){
        $('.mobile-nav').toggle();
    });

    window.onload = function () {
        if ($("#splash-modal").attr('splash') == "on") {
            jQuery('button[data-target=#splash-modal]').trigger('click');        
        }
    };

    $('html').click(function (e) {
        if (e.target.id != 'lang-switch' && e.target.id != 'lang-switch-caret') $('#lang-list').removeClass('show');
        else $('#lang-list').toggleClass('show');
    });

    jQuery(window).on('resize', function () {
        wpadminbarHandler();
        wpadminbarScroll();
    });

    jQuery(document).scroll(function() {
        wpadminbarHandler();
        wpadminbarScroll();
    })

});

console.log("%cOoooooooh!", "color: blue; font-size: xx-large; font-weight: bold");
console.log("%cWanna sneak into our code? Feel free!", "color: blue; font-size: x-large;");
console.log("%cIT KMITL web developer", "color: orange; font-size: large");
console.log("lelelelelelelelelelelelelelelel");
AOS.init();