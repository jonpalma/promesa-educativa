$(window).scroll(function () {
	if($('.navbar-nav').height() <= '50') {
		$offset = '157';
	} else {
		$offset = '86';
	}
	if ($(window).scrollTop() >= $offset && !$('#navbar').hasClass('navbar-fixed-top')) {
		$('#navbar').addClass('navbar-fixed-top');
	} else if ($(window).scrollTop() < $offset && $('.navbar').hasClass('navbar-fixed-top')) {
		$('#navbar').removeClass('navbar-fixed-top');
	}
	
	/* DELAY GALLERY HOVER EFFECT */
	$('.purple li figure').delay(500).queue(function() {
		$(this).addClass('hover');
	});
	$('.green li figure').delay(500).queue(function() {
		$(this).addClass('hover');
	});
});


$(document).ready(function() {
	set_news_height();
});

$(window).resize(function(){
	var $win = $(this);
	$('.noticias .carousel-caption .col-sm-6').css({height:'auto'});
	set_news_height();
});

function set_news_height () {
	var $height;
	t = 0;
	$('.noticias .carousel-caption p').each(function () {
		if($(this).innerHeight() > $height) {
			$height = $(this).innerHeight();
		}
	});
	$('.noticias .carousel-caption p').each(function () {
		if($(this).innerHeight() < $height) {
			$(this).css({height:$height});
		}
	});
}