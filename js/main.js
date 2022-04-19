//Archivo JavaScript

/*
//Carrusel
window.onload = function(){
	//Variables de Imagenes
	const IMAGENES = [
		'../img/header/producto1.jpg',
		'../img/header/producto2.jpg',
		'../img/header/producto3.jpeg',
		'../img/header/producto4.jpg',
		'../img/header/producto5.jpg',
		'../img/header/producto6.jpg',
	];
	const TIEMPO_INTERVALO = 5000;
	let posicionActual = 0;
	let $botonRetroceder = document.querySelector('#retroceder');
	let $botonAvanzar = document.querySelector('#avanzar');
	let $imagen = document.querySelector('#imagen');
	let intervalo;
	let primerInterval;

	//Función que cambia la foto en la siguiente posición
	function pasarFoto(){
		if (posicionActual >= IMAGENES.length - 1){
			posicionActual = 0;
		}else{
			posicionActual++;
		}
		renderizarImagen();
	}

	//Función que cambia la foto en la anterior posición.
	function retrocederFoto(){
		if (posicionActual <= 0){
			posicionActual = IMAGENES.length - 1;
		}else{
			posicionActual--;
		}
		renderizarImagen();
	}

	//Función que actualiza la imagen dependiendo de la posición
	function renderizarImagen(){
		$imagen.style.backgroundImage = 'url('+IMAGENES[posicionActual]+')';
	}

	//AUTOPLAY
	function playIntervalo(){
		intervalo = setInterval(pasarFoto, TIEMPO_INTERVALO);
	}

	//Eventos.
	renderizarImagen();
	$botonAvanzar.addEventListener('click', pasarFoto);
	$botonRetroceder.addEventListener('click', retrocederFoto);
	playIntervalo();
}
*/

//Carrusel
let slider = document.querySelector(".slider-contenedor");
let sliderIndividual = document.querySelectorAll(".contenido-slider");
let contador = 1;
let width = sliderIndividual[0].clientWidth;
let intervalo = 8000;

window.addEventListener("resize", function(){
	width = sliderIndividual[0].clientWidth;
})

setInterval(function(){
	slides();
},intervalo);

function slides(){
	slider.style.transform = "translate("+(-width*contador)+"px)";
	slider.style.transition = "transform 2s";
	contador++;

	if (contador == sliderIndividual.length){
		setTimeout(function(){
			slider.style.transform = "translate(0px)";
			slider.style.transition = "transform .5s";
			contador =1;
		},8000)
	}
}

/*TYPING*/ //Numeros Clientes
let numeroJS = document.querySelectorAll(".num");
let numerosArray = [2001,1548,1452];

function typing(position, segundos){
	let contador = 0;
	setInterval(function(){
		if(contador<numerosArray[position]){
			if (position == 0){
				numeroJS[position].innerHTML = "+" + contador;
			}else{
				numeroJS[position].innerHTML = contador;
			}
			contador++;
		}
	},segundos)
}



//Carrusel2 - Recomendaciones De Personas
let slider2 = document.querySelector(".slider-contenedor2");
let sliderIndividual2 = document.querySelectorAll(".contenido-slider2");
let contador2 = 1;
let width2 = sliderIndividual2[0].clientWidth;
let intervalo2 = 8000;

window.addEventListener("resize", function(){
	width2 = sliderIndividual2[0].clientWidth;
})

setInterval(function(){
	slides2();
},intervalo2);

function slides2(){
	slider2.style.transform = "translate("+(-width2*contador2)+"px)";
	slider2.style.transition = "transform 2s";
	contador2++;

	if (contador2 == sliderIndividual2.length){
		setTimeout(function(){
			slider2.style.transform = "translate(0px)";
			slider2.style.transition = "transform .5s";
			contador2 =1;
		},8000)
	}
}

//Efecto Scroll
//Efecto Scroll
let uno_sola_vez = false;
$(document).ready(function(){
	$(window).scroll(function(){
		if($(this).scrollTop()>500 && !uno_sola_vez){
			typing(0, 0.5);
			typing(1, 0.5);
			typing(2, 0.5);
			uno_sola_vez = true;
		}
	});
});