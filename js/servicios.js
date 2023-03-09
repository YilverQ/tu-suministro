/*Servicios*/

let definiciones = ["Lápices, bolígrafos, resmas, pizarras y mucho más.",
					"Desinfectante, cloro, coletos, escobas y mucho más.",
					"Cartuchos, toners, cintas y tintas.",
					"Pendones, tarjetas, trípticos, vasos y jarras.",
					"Mascarillas, gel antibacterial, guantes y mucho más.",
					"Botas, cascos, lentes, guantes y mucho más.",
					"Café, comida para eventos, bebidas y mucho más",
					"Bandejas de anime, vasos plásticos, bolsas plásticas y mucho más"];

let definicionesDefault = [ "Papelería y artículos de oficina.",
							"Artículos de oficina.",
							"Consumibles de impresión.",
							"Impresos publicitarios y POP.",
							"Bioprotección.",
							"Equipos de seguridad industrial.",
							"Insumos de cafetería",
							"Desechables"];

let elementosP = document.querySelectorAll(".itemP");

const pintar = (posicion) =>{
	elementosP[posicion].innerHTML = definiciones[posicion];
	elementosP[posicion].classList.add("serviciosPfuente");
}

const pintarDefault = (posicion) =>{
	elementosP[posicion].innerHTML = definicionesDefault[posicion];
	elementosP[posicion].classList.remove("serviciosPfuente");
}