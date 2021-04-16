//append element 
function appendArrow(element) {
    jQuery(element).append("a");
    jQuery.each(jQuery(element).find(".menu-item"), function() { if (jQuery(this).find(".sub-menu").length > 0) { appendArrow(this); } })
}
jQuery.each(jQuery('#menu-mainmenu').children('.menu-item'), function() { if (jQuery(this).find(".sub-menu").length > 0) { appendArrow(this); } });

// first lelvel sub menu 
{
    jQuery('#menu-mainmenu').children('.menu-item').mouseenter(function() { jQuery(this).children('.sub-menu').css('display', 'flex'); });
    jQuery('#menu-mainmenu').children('.menu-item').mouseleave(function() { jQuery(this).children('.sub-menu').css('display', 'none'); });
}
// second level sub menu 
{
    jQuery('#menu-mainmenu').children('.menu-item').children('.sub-menu').children('.menu-item').mouseenter(function() {
        jQuery(this).children('.sub-menu').css('display', 'block');
    });
    jQuery('#menu-mainmenu').children('.menu-item').children('.sub-menu').children('.menu-item').mouseleave(function() {
        jQuery(this).children('.sub-menu').css('display', 'none');
    });
}