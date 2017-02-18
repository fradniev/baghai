jQuery(document).ready(function($){
    $('.carousel.carousel-slider').carousel({full_width: true});
    $('.modal').modal();
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
function onModalHide(){
	location.reload();
}
$('#modal1').modal({
	complete:onModalHide
});
$("#form").bind('submit', function(e) {
		e.preventDefault();
        $('#modal1').modal('open');
   });

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
		goToByScroll('services', 60);
	});
	$(".res-a").click(function(e){
		e.preventDefault();
		goToByScroll('rescom', 125);
	});
	$(".com-a").click(function(e){
		e.preventDefault();
		goToByScroll('rescom', 125);
	});
	$(".about-a").click(function(e){
		e.preventDefault();
		goToByScroll('about', 64);
	});
	$(".support-a").click(function(e){
		e.preventDefault();
		goToByScroll('support', 60);
	});
	$(".contact-a").click(function(e){
		e.preventDefault();
		goToByScroll('contact', 60);
	});
	$(".home-a").click(function(e){
		e.preventDefault();
		goToByScroll('home', 60);
	});
	
});
