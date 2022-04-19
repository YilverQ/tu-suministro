<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="author" content="Yilver Quevedo- De Infover & Enclick Soluciones">
	<meta name="description" content="Suministro De Papelería En Caracas">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Title -->
	<title>Tu Suministro - Productos</title>

	<!-- Estilos -->
	<link rel="stylesheet" type="text/css" href="estilos/normalize.css">
	<link rel="stylesheet" type="text/css" href="estilos/productos.css">
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
					<h1>Variedad de productos.</h1>
					<p>Tu suministro ofrece una variedad de productos para tus distintas necesidades. Recuerda, nuestro trabajo es hacer más fácil el tuyo.</p>
				</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Servicios -->
	<div class="servicios">
		<h3>Variedad de productos para diferentes necesidades.</h3>
		<p>Dónde la calidad no se negocia, las mejores marcas y los mejores productos están aquí.</p>
		<div class="caja">
			<a href="/servicio.php?producto=oficina">	
				<div class="tarjeta">
					<img src="img/servicios/papeleria-y-articulos-de-oficina.png" alt="articulos de oficina" />
					<p>Papelería y artículos de oficina.</p>
				</div>
			</a>
			<a href="/servicio.php?producto=limpieza">
				<div class="tarjeta">
					<img src="img/servicios/articulos-de-limpieza.png" alt="articulos de limpieza" />
					<p>Artículos de limpieza.</p>
				</div>
			</a>
			<a href="/servicio.php?producto=consumibles">
				<div class="tarjeta">
					<img src="img/servicios/consumibles.png" alt="cartuchos de impresora" />
					<p>Consumibles.</p>
				</div>
			</a>
			<a href="/servicio.php?producto=impresos">
				<div class="tarjeta">
					<img src="img/servicios/impresos-publicitarios-y-POP.png" alt="impresos publicitarios" />
					<p>Impresos publicitarios y POP.</p>
				</div>
			</a>
			<a href="/servicio.php?producto=higiene">
				<div class="tarjeta">
					<img src="img/servicios/higiene-personal.png" alt="higiene personal" />
					<p>Higiene personal.</p>
				</div>
			</a>
			<a href="/servicio.php?producto=proteccion">
				<div class="tarjeta">
					<img src="img/servicios/seguridad-personal.png" alt="seguridad personal" />
					<p>Protección personal.</p>
				</div>
			</a>
		</div>
	</div>

	<!-- Boton Whatsapp -->
	<?php include("templates/botonWhatsapp.php"); ?>

	<!-- Footer -->
	<?php include("templates/footer.php"); ?>
	


	<!-- Archivos JS -->
    <script src="js/boton_disabled.js"></script>
</body>
</html>