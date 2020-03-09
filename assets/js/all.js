function deschover(x,p) {
	x.style.opacity = "0.9";
	if(p==5 || p==9){
		x.style.padding = "40% 15px";
	}else{
		x.style.padding = "10% 15px";
	}	
	document.getElementById("vis"+p).style.opacity = "1";
	
}

function descnonhover(x,p) {
	x.style.opacity = "1";
	if(p==5 || p==9){
		x.style.padding = "60% 15px";
	}else{
		x.style.padding = "25% 15px";
	}
	document.getElementById("vis"+p).style.opacity = "0";
}
