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

var navbar = document.querySelector('nav');
SimpleScrollbar.initEl(navbar);