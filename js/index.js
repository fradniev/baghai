jQuery(document).ready(function($){
    $('.carousel.carousel-slider').carousel({full_width: true});
    //window.setInterval(function(){$('.carousel').carousel('next')},9500);
// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('.row-info').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('.row-info').removeClass('nav-down').addClass('nav-up');
        $('.navbar-fixed').addClass('nav-hide');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('.row-info').removeClass('nav-up').addClass('nav-down');
        	$('nav').removeClass('nav-hide');
        }
    }
    
    lastScrollTop = st;
}

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
	
});
