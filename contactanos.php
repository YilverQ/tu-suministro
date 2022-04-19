<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="author" content="Yilver Quevedo- De Infover & Enclick Soluciones">
	<meta name="description" content="Suministro De Papelería En Caracas">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Title -->
	<title>Tu Suministro - Contactanos</title>

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
					<p>No dudes en contactarnos para tener siempre tú inventario de suministros y evitar malos momentos. Puedes contactarnos a través de nuestras redes sociales, número de teléfono o correo.</p>
				</div>
				</div>
			</div>
		</div>
	</header>

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
					<textarea class="textareaFORM" name="mensaje" id="" rows="4" cols="30" required="True"></textarea>
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