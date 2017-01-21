
jQuery(document).ready(function($){
    $('.carousel.carousel-slider').carousel({full_width: true});

	autoplay()   
	function autoplay() {
	    $('.carousel').carousel('next');
	    setTimeout(autoplay, 4500);
	}

	function goToByScroll(id){
      // Remove "link" from the ID
    id = id.replace("link", "");
      // Scroll
    $('html,body').animate({
        scrollTop: $("#"+id).offset().top-180},
        'slow');
	}

	$(".services-a").click(function(e){
		e.preventDefault();
		goToByScroll('services');
	});
	$(".products-a").click(function(e){
		e.preventDefault();
		goToByScroll('products');
	});
	$(".about-a").click(function(e){
		e.preventDefault();
		goToByScroll('about');
	});
	$(".support-a").click(function(e){
		e.preventDefault();
		goToByScroll('support');
	});
	$(".contact-a").click(function(e){
		e.preventDefault();
		goToByScroll('contact');
	});
	$(".home-a").click(function(e){
		e.preventDefault();
		goToByScroll('home');
	});
});
