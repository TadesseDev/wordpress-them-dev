//append element 
{
    jQuery.each(jQuery('.menu').find('.menu-item'),
        function() {
            if (jQuery(this).children(".sub-menu").length > 0) {
                jQuery(this).append("<span class='has-submenu'></span>");
            }
        });
    jQuery.each(jQuery('.menu').children('.menu-item').find(".menu-item"),
        function() {
            if (jQuery(this).children(".sub-menu").length > 0) {
                jQuery(this).append("<span class='open-submenu'></span>");
            }
        });
}
// first lelvel sub menu 
{
    jQuery('.menu').children('.menu-item').mouseenter(function() {
        jQuery(this).children('.sub-menu').css('display', 'flex');
        jQuery(this).children('.has-submenu').css({ 'height': '15px', 'transition': '0.8s', 'transform': 'rotate(0deg)' });
    });
    jQuery('.menu').children('.menu-item').mouseleave(function() {
        jQuery(this).children('.sub-menu').css('display', 'none');
        jQuery(this).children('.has-submenu').css({ 'height': '10px', 'transition': '0.8s', 'transform': 'rotate(270deg)' });
    });
}
// second level sub menu 
{
    jQuery('.menu').children('.menu-item').children('.sub-menu').find('.menu-item').mouseenter(function() {
        jQuery(this).children('.sub-menu').css('display', 'block');
        jQuery(this).children('.open-submenu').css({ 'display': 'block', });
        jQuery(this).children('.has-submenu').css({ 'height': '15px', 'transition': '0.8s', 'transform': 'rotate(0deg)' });
    });
    jQuery('.menu').children('.menu-item').children('.sub-menu').find('.menu-item').mouseleave(function() {
        jQuery(this).children('.sub-menu').css('display', 'none');
        jQuery(this).children('.open-submenu').css('display', 'none');
        jQuery(this).children('.has-submenu').css({ 'height': '10px', 'transition': '0.8s', 'transform': 'rotate(270deg)' });
    });
}

// observer 
var header_place_holder = document.querySelector('body').querySelector('.header-place-holder');
var header = jQuery('header');
var intersectionObserver = new IntersectionObserver(function(entries) {
    // If intersectionRatio is 0, the target is out of view
    // and we do not need to do anything.
    entries.forEach(entry => {
        if (entry.intersectionRatio <= 0) {
            header.css({ 'height': '50px' });
        } else {
            header.css({ 'height': '80px' });
        }
    });
});
// start observing
intersectionObserver.observe(header_place_holder);