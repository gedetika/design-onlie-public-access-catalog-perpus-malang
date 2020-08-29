//parallax jumbotron
$(window).on('load' ,function(){
	$('.efekparallax').addClass('efekparallaxmuncul');
});

//parallax scroll
$(window).scroll(function () {
	var wScroll = $(this).scrollTop(); 

	//efect parallax, tapi di versi mobile gak bisa jadi off wkwk
	// $('.jumbotron h1').css({
	// 	'transform' : 'translate(0px, '+ wScroll/4 +'%)'
	// });

	//jumbotron

	//koleksi terbaru
	if (wScroll > $('.KoleksiTerbaru').offset().top -550) {
		//console.log('ok');
		$('.KoleksiTerbaru .carousel_slide').addClass('muncul');
	}

});

//smootshscrollbro
	
	$('.page-scroll').on('click', function() {

	var tujuan = $(this).attr('href');

	var elemenTujuan = $(tujuan);
	console.log(elemenHref);
});﻿


