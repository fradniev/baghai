
jQuery(document).ready(function($){
    $('.carousel.carousel-slider').carousel({full_width: true});
    window.setInterval(function(){$('.carousel').carousel('next')},9500);

	function goToByScroll(id, offset){
     // Remove "link" from the ID
		id = id.replace("link", "");
		// Scroll
	    $('html,body').animate({
			scrollTop: $("#"+id).offset().top-offset},
			'slow');
	}

	$(".services-a").click(function(e){
		e.preventDefault();
		goToByScroll('services', 120);
	});
	$(".res-a").click(function(e){
		e.preventDefault();
		goToByScroll('rescom', 188);
	});
	$(".com-a").click(function(e){
		e.preventDefault();
		goToByScroll('rescom', 188);
	});
	$(".about-a").click(function(e){
		e.preventDefault();
		goToByScroll('about', 120);
	});
	$(".support-a").click(function(e){
		e.preventDefault();
		goToByScroll('support', 120);
	});
	$(".contact-a").click(function(e){
		e.preventDefault();
		goToByScroll('contact', 120);
	});
	$(".home-a").click(function(e){
		e.preventDefault();
		goToByScroll('home', 120);
	});
	var didScroll;

	$(window).scroll(function (event){
		didScroll=true;
	});
	setInterval(function(){
		if(didScroll){
			hasScrolled();
			didScroll=false;
		}
	});
	function hasScrolled(){
		
	}
});
