$(document).ready(menufixed);

	function menufixed () {

	var altura = $('.navbar .navbar-default .navbar-static-top').offset().top;

	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.navbar .navbar-default .navbar-static-top').addClass('menu-fixed');
		} else {
			$('.navbar .navbar-default .navbar-static-top').removeClass('menu-fixed');
		}
	});
	}
