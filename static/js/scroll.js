/*
Author: Liu Haocheng
2015.2.7

Instrument:
	Scroll animation for scroll button.
	This javascript document is neccessary for the scrollbtn.js document.
*/
$(function(){
	showScroll();
	function showScroll() {
	    $(window).scroll(function () {
			var scrollValue=$(window).scrollTop();
			scrollValue > 100 ? $('div[class=scroll-btn]').fadeIn():$('div[class=scroll-btn]').fadeOut();
			scrollValue > 100 ? $('div[class=scroll-line]').fadeIn():$('div[class=scroll-line]').fadeOut();
		} );	
		$('.scroll').click(function(){
			$("html,body").animate({scrollTop:0},200);	
		});	
	}
})

