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
	setTimeout(function(){set_news_size();}, 10);
});

$(document).load(function() {
	center_gallery();
});

$(document).ready(function() {
	$("#video-modal").on('hidden.bs.modal', function (e) {
		$("#video-modal iframe").attr("src", $("#video-modal iframe").attr("src"));
	});
});

$(window).resize(function(){
	var $win = $(this);
	$('.noticias .carousel-caption .col-sm-6').css({height:'auto'});
	set_news_height();
	center_gallery();
	set_news_size();
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

function center_gallery () {	
	$(".grid figure img").each(function(i, img) {
		$(img).css({
			position: "relative",
			left: ($(img).parent().width() - $(img).width()) / 2,
			top: ($(img).parent().height() - $(img).height()) / 2
		});
	});
}

function set_news_size () {
	var $item = $('.noticias .item'), $height = 0;
	$item.css('height','auto');
	$item.each(function() {
		if($(this).height() > $height) {
			$height = $(this).height();
		}
	});
	$item.each(function() {
		$(this).css('height',$height+'px');
	});
}