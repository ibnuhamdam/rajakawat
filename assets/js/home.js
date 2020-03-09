$(window).scroll(function() {
	var wscroll = $(this).scrollTop();
	// Home deskripsi
	if( wscroll > $('#dua').offset().top - 300 ){
		$('.home-dua p').each(function(i){
			setTimeout(function(){
				$('.home-dua p').eq(i).addClass('show');
			}, 330 * (i+1));
		});
	}
	
	if( wscroll > $('#empat').offset().top - 300 ){
		$('#empat .items').each(function(i){
			setTimeout(function(){
				$('#empat .items').eq(i).addClass('show');
			}, 400 * (i+1));
		});
	}
});
