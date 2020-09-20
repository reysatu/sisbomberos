let u_a=window.pageYOffset;
window.onscroll=function () {
	let d=window.pageYOffset;
	u_a=d;
	if (u_a>=50) {
		var a0 = document.getElementById("padre_cabesera");
		var a1 = document.getElementById("padre_menu");
		var a2 = document.getElementById("padre_llamar");
		var a3 = document.getElementById("a_padre_menu_r");
		var a4 = document.getElementById("padre_llamar_r");
		var a5 = document.getElementById("padre_logo_img");
		a0.style.cssText= "position: fixed;top:0%;height: 4em;transition: all 0.3s ease-out;";
		a1.style.cssText= "padding-top: 1.9%;";
		a2.style.cssText= "padding-top: 6px;";
		a3.style.cssText= "top: 27%; padding: 13px 20px;";
		a4.style.cssText= "padding-top: 4px;";
		a5.style.cssText= " width: 38%; left:10%; height:87%";

	}
	if (u_a<50) {
		document.getElementById("padre_cabesera").removeAttribute("style");
		document.getElementById("padre_menu").removeAttribute("style");
		document.getElementById("padre_llamar").removeAttribute("style");
		document.getElementById("a_padre_menu_r").removeAttribute("style");
		document.getElementById("padre_llamar_r").removeAttribute("style");
		document.getElementById("padre_logo_img").removeAttribute("style");
	}
}

//almacenar slider en una variable
var slider = $('#slider');
//almacenar botones
var siguiente = $('#btn-next');
var anterior = $('#btn-prev');

//mover ultima imagen al primer lugar
$('#slider .slider__section:last').insertBefore('#slider .slider__section:first');
//mostrar la primera imagen con un margen de -100%
slider.css('margin-left', '-'+100+'%');

function moverD() {
	slider.animate({
		marginLeft:'-'+200+'%'} ,500,
		function(){
		$('#slider .slider__section:first').insertAfter('#slider .slider__section:last');
		slider.css('margin-left', '-'+100+'%');
	});
}

function moverI() {
	slider.animate({
		marginLeft:0} ,500,
		function(){
		$('#slider .slider__section:last').insertBefore('#slider .slider__section:first');
		slider.css('margin-left', '-'+100+'%');
	});
}

function autoplay() {
	interval = setInterval(function(){
		moverD();
	}, 10000);
}
siguiente.on('click',function() {
	moverD();
	clearInterval(interval);
	autoplay();
});

anterior.on('click',function() {
	moverI();
	clearInterval(interval);
	autoplay();
});


autoplay();



function mostrar_menu_responsive(){
     document.getElementById("padre_menu_cabe_responsive").style.cssText= "display: flex;";
      var a0 = document.getElementById("body");
    a0.style.cssText= " overflow-x:hidden;overflow-y:hidden;";
    
}
function salir_responsive(){
    $("#padre_menu_cabe_responsive").slideUp(0);
      var a0 = document.getElementById("body");
    a0.style.cssText= " overflow-x:auto;overflow-y:auto;";
}




