/* Dynamic top menu positioning
 *
 */

var num = 50; //number of pixels before modifying styles

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('ul.art-hmenu').addClass('fixed');
    } else {
        $('ul.art-hmenu).removeClass('fixed');
    }
});

//USE SCROLL WHEEL FOR THIS FIDDLE DEMO