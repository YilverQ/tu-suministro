const formulario = document.getElementById("formulario");
const inputs = document.querySelectorAll("#formulario input");

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/
}

const campos = {
	nombre : false,
	correo : false,
	telefono : false
}

const validarFormulario = (e) => {
	switch (e.target.name){
		case "nombre":
			validarCampo(expresiones.nombre, e.target, e.target.name);
		break;
		case "correo":
			validarCampo(expresiones.correo, e.target, e.target.name);
		break;
		case "telefono":
			validarCampo(expresiones.telefono, e.target, e.target.name);
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`${campo}`).classList.remove("grupo--errado");
		document.getElementById(`${campo}`).classList.add("grupo--correcto");
		campos[campo] = true;
	}else{
		document.getElementById(`${campo}`).classList.remove("grupo--correcto");
		document.getElementById(`${campo}`).classList.add("grupo--errado");
		campos[campo] = false;
	}
}

const botonEnviar_disabled = () =>{
	botonEnviar = document.querySelector(".BotonEnviar");
	if (campos.nombre && campos.correo && campos.telefono) {
		botonEnviar.disabled = false;
	}else{
		botonEnviar.disabled = true;
	}
}


inputs.forEach((input) => {
	input.addEventListener("keyup", validarFormulario);
	input.addEventListener("blur", validarFormulario);
	input.addEventListener("keyup", botonEnviar_disabled);
	input.addEventListener("blur", botonEnviar_disabled);
});