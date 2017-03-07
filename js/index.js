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
$(document).on("click",'.div-p',function() {
	$(this).parent().children(".box-text").toggleClass("up");
	$(this).parent().children(".box-text").children("div").children(".this-p-hid").toggleClass("show");
  });
/*setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);*/
function onModalHide(){
	$('#name').val("");
	$('#email').val("");
	$('#message').val("");
}
$('#modal1').modal({
	complete:onModalHide
});

$("#form").on("submit", function(ev){
	ev.preventDefault();

	var http = $.ajax({
		method: "POST",
		data: getFormData("form")
	});

	http.always(function(){
		$("#modal1").modal("open");
	});
});

function getFormData(name){
	var form = $(document.forms[name]);

	var inputs = form.find("input");
	var textAreas = form.find("textarea");

	var data = {};

	inputs.each(function(){
		data[this.name] = this.value;
	});

	textAreas.each(function(){
		data[this.name] = this.value;
	});

	return data;
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
