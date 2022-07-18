<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<meta name="author" content="Yilver Quevedo De Enclick Soluciones">
	<meta name="keywords" content="Suminstros, Suministro, suministros de productos, Suministros en Caracas, contacta con tu suministro.">
	<meta name="description" content="No dudes en contactarnos, siempre estamos disponible para atenderte y ofrecerte tu inventario de suministros y así no tener que pasar malos ratos. ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Title -->
	<title>Contacta con Tu Suministro, la mejor opción de suministros en Caracas.</title>

	<!-- Estilos -->
	<link rel="stylesheet" type="text/css" href="estilos/normalize.css">
	<link rel="stylesheet" type="text/css" href="estilos/contactanos.css">
	<link href="img/favicon.png" rel="icon" type="image/png"/>
    <script src="js/all.min.js"></script>
</head>
<body>
	<!-- NAV -->
	<?php include("templates/menu.php"); ?>
	
	<!-- HEADER -->
	<header class="contenedor">
		<div class="slider-contenedor">
			<div class="contenido-slider">
				<div class="sabana">
				<div class="textoHEADER">
					<h1>Contactanos.</h1>
					<p>No dudes en contactarnos para tener siempre tu inventario de suministros y evitar malos momentos.</p>
				</div>
				</div>
			</div>
		</div>
	</header>

	<!--Texto-->
	<div class="textoContact">
		<h2>Te invitamos a contactarnos.</h2>
		<div class="infoContact">
			<p>Puedes escribirnos a: </p>
			<p class="datosDeContacto">tusuministrovzla@gmail.com</p> 
			<p class="datosDeContacto">tusuministro@hotmail.com</p> 
			<p>o llamarnos al: </p>
			<p class="datosDeContacto">0212-424-2684</p> 
			<p class="datosDeContacto">0414-397-6743</p>
			<p class="pInterno">Dejanos un mensaje y nuestro equipo se pondrá en contacto contigo ¡Cuánto antes!</p>
		</div>
	</div>

	<!-- Formulario De Contacto -->
	<div class="formulario">
		<form action="correo.php" id="formulario" method="POST">
			<div class="form">
				<h2>Contactanos</h2>
				<div class="grupo" id="nombre__grupo">
					<label>Nombre y Apellido.</label>
					<input type="text" name="nombre" id="nombre" required="True">
				</div>
				<div class="grupo" id="correo__grupo">
					<label>Correo.</label>
					<input type="email" name="correo" id="correo" required="True">
				</div>
				<div class="grupo">
					<label>Número de Teléfono.</label>
					<input type="text" name="telefono" id="telefono" required="True">
				</div>
				<div class="grupo" id="numero__grupo">
					<label>Mensaje.</label>
					<textarea class="textareaFORM" name="mensaje" id="mensaje" rows="4" cols="30" required="True"></textarea>
				</div>
				<button class="BotonEnviar" type="submit" disabled="true">Enviar.</button>
			</div>
		</form>
	</div>
	<!-- Ubicación -->
	<?php include("templates/mapa.php") ?>

	<!-- Boton Whatsapp -->
	<?php include("templates/botonWhatsapp.php"); ?>

	<!-- Footer -->
	<?php include("templates/footer.php"); ?>
	


	<!-- Archivos JS -->
    <script src="js/formulario.js"></script>
    <script src="js/boton_disabled.js"></script>
</body>
</html>