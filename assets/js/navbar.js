$(window).scroll(function() {
    
    if($(this).scrollTop() > 250)  /*height in pixels when the navbar becomes non opaque*/ 
    {
        $('.custom-navbar').addClass('opaque');
    } else {
        $('.custom-navbar').removeClass('opaque');
    }

    console.log($(this).scrollTop());
  
  
});
