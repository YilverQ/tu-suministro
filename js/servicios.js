/*Servicios*/

let definiciones = ["Lápices, bolígrafos, resmas, pizarras y mucho más.",
					"Desinfectante, cloro, coletos, escobas y mucho más.",
					"Cartuchos, tones, cintas y tintas.",
					"Pendones, tarjetas, trípticos, vasos y jarras.",
					"Mascarillas, gel antibacterial, guantes y mucho más.",
					"Botas, cascos, lentes, guantes y mucho más."];

let definicionesDefault = [ "Papelería y artículos de oficina.",
							"Artículos de oficina.",
							"Consumibles de impresión.",
							"Impresos publicitarios y POP.",
							"Bioprotección.",
							"Equipos de seguridad industrial."];

let elementosP = document.querySelectorAll(".itemP");

const pintar = (posicion) =>{
	elementosP[posicion].innerHTML = definiciones[posicion];
	elementosP[posicion].classList.add("serviciosPfuente");
}

const pintarDefault = (posicion) =>{
	elementosP[posicion].innerHTML = definicionesDefault[posicion];
	elementosP[posicion].classList.remove("serviciosPfuente");
}