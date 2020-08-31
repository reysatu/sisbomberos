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
		a5.style.cssText= " width: 35%; left:10%; height:85%";

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