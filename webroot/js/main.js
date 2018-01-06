$(function(){
	if($(window).width() < 960){
		$('.container').css({'width':'90%'});
		$('header ul').css({'width':'50%'});
		$('.profile-image').css({'height':'400px'});
		$('.talent-box a').css({'width':'33.3%'});
	}
	$(window).scroll(function () {
		if($(window).scrollTop() >= 120){
			$('header').css({'position':'fixed'}).css({'height':'30px'});
			$('.biglogo').css({'height':'0'});
			$('.container').css({'margin-top':'200px'});
		}else{
			$('header').css({'position':'relative'}).css({'height':'150px'});
			$('.biglogo').css({'height':'120px'});
			$('.container').css({'margin-top':'50px'});
		}
    });
});