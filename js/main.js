$(window).bind('resizeEnd', function () {
	$(".header-container").height($(window).height());
});
$(window).resize(function () {
	var browserHeight = Math.round($('.header-container').height());
	$(".header-container").height($(window).height());
	if($(window).width() >= 768) {
		$('.header-container nav').show();
	} else {
		//$('.header-container nav').hide();
		//$('#mobile-nav-btn').removeClass('open');
	}
 });
$(window).load(function() {
	$(window).resize();
});
$(document).ready(function() {
	setTimeout(function(){ $('.modal').fadeIn('fast'); }, 5000);
	if($(window).width()< 768) {
		setTimeout(function(){ $(".header-copy").animate({ 'top': '35%', opacity: 1 }, 1000); }, 500);
	} else {
		setTimeout(function(){ $(".header-copy").animate({ 'top': '48%', opacity: 1 }, 1000); }, 500);
	}
	$('.close,.modal').click(function() {
		$('.modal').fadeOut('fast');
	});
	$('#mobile-nav-btn').click(function() {
		$(this).toggleClass('open');
		$('.header-container nav').fadeToggle();
	});
});
