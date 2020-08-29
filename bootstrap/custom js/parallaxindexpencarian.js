//parallax jumbotron
$(window).on('load' ,function(){
	$('.efekparallax').addClass('efekparallaxmuncul');
});

//parallax scroll
$(window).scroll(function () {
	var wScroll = $(this).scrollTop(); 

	//hasil pencarian
		if (wScroll > $('.efekparallaxpencarian').offset().top - 580) {
			//$('.efekparallaxpencarian .isiparallax').addClass('efekparallaxpencarianmuncul');
				$('.efekparallaxpencarian .isiparallax').each(function (i) {
					setTimeout(function () {
						$('.efekparallaxpencarian .isiparallax').eq(i).addClass('efekparallaxpencarianmuncul');
					}, 300 * (i+1));
				});
		}

});

//smootshscrollbro
	
	$('.page-scroll').on('click', function() {

	var tujuan = $(this).attr('href');

	var elemenTujuan = $(tujuan);
	console.log(elemenHref);
});﻿


