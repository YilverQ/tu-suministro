<?php  

	//$destinatario = "tusuministrovzla@gmail.com";
	$destinatario = "yilver0906@gmail.com";
	//Correo al que llegarán los mensajes.
	
	//Variables
	$nombre	 = $_POST["nombre"];
	$email	 = $_POST["email"];
	$numero  = $_POST["numero"];
	$mensaje = $_POST["mensaje"];
	$asunto = "Contacto Desde La Web";

	//Carta
	$carta 	= "De: " . $nombre . "\n";
	$carta	= "Correo: " . $email . "\n";
	$carta	= "Teléfono: " . $numero . "\n";
	$carta  = "Mensaje: " . $mensaje . "\n";

	mail($destinatario, $asunto, $carta);
	echo "<script>alert('correo enviado exitosamente.')</script>";
	echo "<script>setTimeout(\"location.href='contactanos.php'\",1000)</script>";
?>