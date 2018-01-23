
var step = 10;
var speed = 1;

function myFunction(id) {
	var elem1 = document.getElementById(id);
	var style = window.getComputedStyle(elem1, null);
	if (style["height"] == "0px"){
		elem1.style.position = 'absolute';
		elem1.style.opacity = '0';
		elem1.style.height = 'auto';
		elem1.style.display = 'block';
		var h = elem1.clientHeight;
		elem1.style.display = 'none';
		elem1.style.height = '0px';
		elem1.style.position = 'relative';
		elem1.style.opacity = '1';
		denanification(id, h);
	}
	else{
		nanification(id);
	}
}

function nanification(id){
	var h = document.getElementById(id).clientHeight;
	var timer = setInterval(function(){
		var ret = document.getElementById(id).style.height = h+'px';
		if (h <= 0){
			var ret = document.getElementById(id).style.height = '0px';
			document.getElementById(id).style.display = 'none';
			clearInterval(timer);
		}
		h -= step;
	}, speed);
}

function denanification(id, max_h){
	var h = 0;
	var elem = document.getElementById(id);
	elem.style.display = 'block';
	var timer = setInterval(function(){
		elem.style.height = h+'px';
		if (h >= max_h){
			elem.style.height = 'auto';
			clearInterval(timer);
		}
		h += step;
	}, speed);
}
