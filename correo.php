<?php  

	//$destinatario = "tusuministrovzla@gmail.com";
	//$destinatario2 = "tusuministro@hotmail.com";
	$destinatario = "yilver0906@gmail.com";
	//Correo al que llegarán los mensajes.
	
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
	//mail($destinatario2, $asunto, $carta);
	echo "<script>alert('correo enviado exitosamente.')</script>";
	echo "<script>setTimeout(\"location.href='contactanos.php'\",1000)</script>";
?>