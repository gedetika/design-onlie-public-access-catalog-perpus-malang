$(document).scroll(function(){
	var height = $('.navbar').height();

	if ($(this).scrollTop() > height){
		$('.navbar').addClass('navmuncul');
	} else {
		$('.navbar').removeClass('navmuncul');
	}
})