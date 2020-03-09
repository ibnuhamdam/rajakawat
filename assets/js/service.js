$(window).scroll(function() {
	var wscroll = $(this).scrollTop();
// Service
	if( wscroll > $('.service').offset().top - 300 ){
		$('.service .items').each(function(i){
			setTimeout(function(){
				$('.service .items').eq(i).addClass('show');
			}, 330 * (i+1));
		});
		$('.service-2 .items').each(function(i){
			setTimeout(function(){
				$('.service-2 .items').eq(i).addClass('show');
			}, 300 * (i+1));
		});
		$('.service-2 .item').each(function(i){
			setTimeout(function(){
				$('.service-2 .item').eq(i).addClass('show');
			}, 300 * (i+1));
		});
		$('.service-3 .items').each(function(i){
			setTimeout(function(){
				$('.service-3 .items').eq(i).addClass('show');
			}, 300 * (i+1));
		});
		$('.service-3 .item').each(function(i){
			setTimeout(function(){
				$('.service-3 .item').eq(i).addClass('show');
			}, 300 * (i+1));
		});
	}
});
