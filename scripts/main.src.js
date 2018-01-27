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
        $('.nav-chevron').toggleClass('active');
    });

    window.onload = function () {
        if ($("#splash-modal").attr('splash') == "on") {
            jQuery('button[data-target=#splash-modal]').trigger('click');        
        }
    };

    $('html').click(function (e) {
        if (e.target.id != 'lang-switch' && e.target.id != 'lang-switch-caret' && e.target.id != 'lang-switch-icon') {
            $('#lang-list').removeClass('show');
        }
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

function getElementY(query) {
    return window.pageYOffset + document.querySelector(query).getBoundingClientRect().top - 100
}

function doScrolling(element, duration) {
    var startingY = window.pageYOffset;
    var elementY = getElementY(element);
    // If element is close to page's bottom then window will scroll only to some position above the element.
    var targetY = document.body.scrollHeight - elementY < window.innerHeight ? document.body.scrollHeight - window.innerHeight : elementY;
    var diff = targetY - startingY;
    // Easing function: easeInOutCubic
    // From: https://gist.github.com/gre/1650294
    var easing = function (t) { return t<.5 ? 4*t*t*t : (t-1)*(2*t-2)*(2*t-2)+1 };
    var start;

    if (!diff) return;

    // Bootstrap our animation - it will get called right before next frame shall be rendered.
    window.requestAnimationFrame(function step(timestamp) {
        if (!start) start = timestamp;
        // Elapsed miliseconds since start of scrolling.
        var time = timestamp - start;
        // Get percent of completion in range [0, 1].
        var percent = Math.min(time / duration, 1);
        // Apply the easing.
        // It can cause bad-looking slow frames in browser performance tool, so be careful.
        percent = easing(percent);

        window.scrollTo(0, startingY + diff * percent);

        // Proceed with animation as long as we wanted it to.
        if (time < duration) window.requestAnimationFrame(step);
    })
}

console.log("%cOoooooooh!", "color: blue; font-size: xx-large; font-weight: bold");
console.log("%cWanna sneak into our code? Feel free!", "color: blue; font-size: x-large;");
console.log("%cIT KMITL web developer", "color: orange; font-size: large");
console.log("lelelelelelelelelelelelelelelel");
