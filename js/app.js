//homepage only
if($('main.home').length > 0){
	const homeImg = document.querySelector('.home .img-slide');
	const imgs = ['e1-P5110077z.JPG', 'e2-PC310155z.JPG', 'e3-P1110142z.JPG', 'e4-P1190064z.JPG', 'e5-P1300107z.JPG', 'e6-P2020085z.JPG', 'e7-P7240156d.JPG'];
	var imgCount = 1;
	homeImg.style.background = 'url("images/'+imgs[0]+'") no-repeat center / cover';

	setInterval(bkgrFade.bind(null),10000);
	function bkgrFade(){
		homeImg.style.background = 'url("images/'+imgs[imgCount]+'") no-repeat center / cover';
		if (imgCount === imgs.length - 1){
			imgCount = 0;
		}else{
			imgCount++;
		}
	}

	$('.nav-controls .home-btn').hide();
}

var navbar = document.querySelector('nav .main-menu');
SimpleScrollbar.initEl(navbar);

$('.submenu').click(function(e){
	if($(this).hasClass('active')){
		$(this).removeClass('active');
		$(".submenu-menu", this).removeClass('active');
	}else{
		$(this).addClass('active');
		$(".submenu-menu", this).addClass('active');
	}
});

$('.menu-toggle').click(function(e){
	if($(this).hasClass('open')){
		$(this).removeClass('open');
		$('body').addClass('collapsed-nav');
	}else{
		$(this).addClass('open');
		$('body').removeClass('collapsed-nav');
	}
});

// Optimalisation: Store the references outside the event handler:
var $window = $(window);

function checkWidth() {
    var windowsize = $window.width();
    if (windowsize < 960 || ($('main.media').length > 0)) {
 		$('.menu-toggle').removeClass('open');
		$('body').addClass('collapsed-nav');
    }else{
 		$('.menu-toggle').addClass('open');
		$('body').removeClass('collapsed-nav');
    }
}
// Execute on load
checkWidth();
// Bind event listener
$(window).resize(checkWidth);

if($('.modal').length > 0){
	var modal = $('.modal'),
		modalImage = $('.modal img');
	$('.media-block img').click(function(e){
		modal.css('display', 'block');
		modalImage.attr('src', $(this).attr('src'));
	});

	$('.modal .close').click(function(e){
		modal.css('display', 'none');
	})
}