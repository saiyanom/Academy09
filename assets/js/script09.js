//=================================sticky HEADER START
$(window).scroll(function(){
if ($(window).scrollTop() >= 100) {
   $('.stickynav09').addClass('fixed-header');
}
else {
   $('.stickynav09').removeClass('fixed-header');
}
});
//=================================sticky HEADER END

//=================================bootstrap menu START
jQuery(document).ready(function($) {
  function scrollToSection(event) {
    event.preventDefault();
    var $section = $($(this).attr('href')); 
    $('html, body').animate({
      scrollTop: $section.offset().top
    }, 300);
  }
  $('[data-scroll]').on('click', scrollToSection);
}(jQuery));
$(".nav li a").click(function() {
    $(this).parent().addClass('active').siblings().removeClass('active');
    $("#navbar").removeClass("in");    
});
//=================================bootstrap menu END

//=================================A0S START
AOS.init({easing: 'ease-in-out-sine'});
//=================================A0S END

//=================================GO TOP START
var btn = $('#go_top');
$(window).scroll(function() {
if ($(window).scrollTop() > 300) {
btn.addClass('show');
} else {
btn.removeClass('show');
}
});
btn.on('click', function(e) {
e.preventDefault();
$('html, body').animate({scrollTop:0}, '300');
});
//=================================GO TOP END

//=================================Scrolling START
window.smoothScroll = function(target) {
var scrollContainer = target;
do {
scrollContainer = scrollContainer.parentNode;
if (!scrollContainer) return;
scrollContainer.scrollTop += 1;
} while (scrollContainer.scrollTop == 0);

var targetY = 0;
do {
if (target == scrollContainer) break;
targetY += target.offsetTop;
} while (target = target.offsetParent);

scroll = function(c, a, b, i) {
i++; if (i > 30) return;
c.scrollTop = a + (b - a) / 30 * i;
setTimeout(function(){ scroll(c, a, b, i); }, 20);
}
scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}
//=================================Scrolling END


