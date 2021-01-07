jQuery( document ).ready( function( $ ) {

	var sposaMegaMenus = $(".sposa-mega-menus");

	$( '.home__hero--slider' ).slick( {
		dots: false,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear',
	} );

	$(".testimonial__slider").slick( {
		dots: false,
		infinite: true,
		speed: 500,
		cssEase: 'linear',
	} );




	if ($(window).width() < 480) {
		console.log("hey!");
		$(".instagram__slider").slick( {
			dots: false,
			infinite: true,
			speed: 500,
			cssEase: 'linear',
			slidesToShow: 1,
			arrows: false
		} );
	}


	$('.single-product__modaal').modaal();

	$('.inline').modaal();


	$(".dropdown-menu").mouseenter(function(){
		$(".sposa-mega-menus").css("opacity", "1");
		$(".sposa-mega-menus").css("height", "320px");
		$(".sposa-mega-menus .accessories").css("opacity", "1");
		console.log("wewlad!");
	});

	$(sposaMegaMenus).mouseenter(function(){
		$(".sposa-mega-menus").css("opacity", "1");
		$(".sposa-mega-menus").css("height", "320px");
		$(".sposa-mega-menus .accessories").css("opacity", "1");
		console.log("wewlad!");
	});
	$(sposaMegaMenus).mouseleave(function(){
		$(".sposa-mega-menus").css("opacity", "0");
		$(".sposa-mega-menus").css("height", "0");
		$(".sposa-mega-menus .accessories").css("opacity", "0");
		console.log("wewlad!");
	});
	console.log("wewlad!");

	$(".menu-item-has-children").mouseenter(function(){
		$(this).find(".sub-menu").addClass("show-sub-menu");
	});
	$(".sub-menu").mouseleave(function(){
		$(this).find(".sub-menu").removeClass("show-sub-menu");
	});

	$(".mobile-header__menu").click(function(e) {
		e.preventDefault();
		console.log("clicked this");
		$(".sposa-mobile-menu").addClass("show-mobile-header");
	});

	$(".sposa-mobile-menu__close").click(function(e) {
		e.preventDefault();
		$(".sposa-mobile-menu").removeClass("show-mobile-header");
	});

	$('.store__message').modaal();

} );
