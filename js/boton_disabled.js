//Menú disabled (productos).
let elemento = document.querySelector(".menuNavegacion");
let tam 	 = elemento.clientWidth;
let elemento_disabled = document.querySelector(".BotonProducto");

window.addEventListener("resize", function(){
	tam = elemento.clientWidth;	
	if (tam <= 870){
		elemento_disabled.classList.remove("disabled");
	}else{
		elemento_disabled.classList.add("disabled");
	}
})
window.onload = function(){
	tam = elemento.clientWidth;	
	if (tam <= 870){
		elemento_disabled.classList.remove("disabled");
	}else{
		elemento_disabled.classList.add("disabled");
	}
}