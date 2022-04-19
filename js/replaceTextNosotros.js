//Remplazar texto cuando la pantalla sea chica.
let elemento_texto = document.getElementById("textoNosotros");
let texto1 = "Somos una organización de amplia trayectoria dedicada a la venta de Artículos de oficina, papelería, consumibles de impresión, material POP, material publicitario, bioproteccion, equipos de seguridad industrial y productos de Limpieza, ubicada en la ciudad de Caracas, nuestra área de atención abarca todo el distrito Metropolitano de Caracas, Edo. Vargas y Altos Mirandinos, contamos con personal calificado y presto a resolver cualquier inquietud, toma de pedidos y despacho.";
let texto2 = "Somos una organización de amplia trayectoria dedicada a la venta de artículos de oficina, consumibles de impresión, material publicitario, bioproteccion, equipos de seguridad industrial y productos de limpieza, nuestra área de atención abarca todo el distrito Metropolitano de Caracas, Edo. Vargas y Altos Mirandinos.";

const texto_original = () =>{
	elemento_texto.innerHTML = texto1;
}
const texto_responsive = () =>{
	elemento_texto.innerHTML = texto2;
}

window.addEventListener("resize", function(){
	tam = elemento.clientWidth;	
	if (tam <= 870){
		texto_responsive();
	}else{
		texto_original();
	}
})
window.onload = function(){
	tam = elemento.clientWidth;	
	if (tam <= 870){
		texto_responsive();
	}else{
		texto_original();
	}
}