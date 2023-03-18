<?php  

	//Correos al que llegarán los mensajes.
	#$destinatario = "yilver0906@gmail.com";
	$destinatario = "tusuministrovzla@gmail.com";
	$destinatario2 = "tusuministro@hotmail.com";

	
	//Variables
	$nombre	 = $_POST["nombre"];
	$correo	 = $_POST["correo"];
	$telefono  = $_POST["telefono"];
	$mensaje = $_POST["mensaje"];
	$asunto = "Contacto Desde La Web";


	//Carta
	$carta 	= "De: " . $nombre . "\n";
	$carta	= $carta . "Correo: " . $correo . "\n";
	$carta	= $carta . "Teléfono: " . $telefono . "\n";
	$carta  = $carta . "Mensaje: " . $mensaje . "\n";


	mail($destinatario, $asunto, $carta);
	mail($destinatario2, $asunto, $carta);	


	#Redireccionar una a web
	header("Location: https://www.tusuministro.com.ve/contactanos.php", TRUE, 302);
	die();
?>