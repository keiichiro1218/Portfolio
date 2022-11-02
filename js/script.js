
jQuery(function($){     
    var state = false;
        var pos;
        jQuery('.c-openbtn__area').click(function(){
        if (state == false) {
        pos = jQuery(window).scrollTop();
        jQuery('body').addClass('active').css({'top': -pos});
        jQuery('.c-openbtn__area, .p-header-content__menu').addClass('active');
        state = true;
    } else {
        jQuery('body').removeClass('active').css({'top': 0});
        jQuery('.c-openbtn__area, .p-header-content__menu').removeClass('active');
        window.scrollTo(0, pos);
        state = false;
        }
    });
});
    