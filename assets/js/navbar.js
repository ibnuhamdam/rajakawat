$(window).scroll(function() {
	var wscroll = $(this).scrollTop();
    
    if($(this).scrollTop() > 250)  /*height in pixels when the navbar becomes non opaque*/ 
    {
        $('.custom-navbar').addClass('opaque');
    } else {
        $('.custom-navbar').removeClass('opaque');
    }
  
	// Parallax
	// $('.service-awal h3').css({
	// 	'transform' : 'translate('+ -wscroll/10 +'%, 2px)'
	// });

	$('.service-awal p').css({
		'transform' : 'translate(0px, '+ wscroll/5 +'%)'
	});

	$('.hr-desc-awal').css({
		'transform' : 'translate(0px, '+ wscroll/1 +'%)'
	});

	
  
});
