<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<meta name="author" content="Yilver Quevedo De Enclick Soluciones">
	<meta name="keywords" content="Suminstros, Suministro, suministros de productos, Suministros en Caracas, suministros de papelería, papelería y artículos de oficina.">
	<meta name="description" content="Suministros de productos en Caracas, aquí en tu suministro encontrarás gran variedad de productos para tus distintas necesidades. Recuerda, nuestro trabajo es hacer más fácil el tuyo.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Title -->
	<title>Suministros de productos en Caracas - Tu Suministro</title>

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
			<a href="/servicio.php?producto=oficina" onmouseover="pintar(0)" onmouseout="pintarDefault(0)">	
				<div class="tarjeta">
					<img src="img/servicios/papeleria-y-articulos-de-oficina.png" alt="articulos de oficina" />
					<p class="itemP">Papelería y artículos de oficina</p>
				</div>
			</a>
			<a href="/servicio.php?producto=limpieza" onmouseover="pintar(1)" onmouseout="pintarDefault(1)">
				<div class="tarjeta">
					<img src="img/servicios/articulos-de-limpieza.png" alt="articulos de limpieza" />
					<p class="itemP">Artículos de limpieza</p>
				</div>
			</a>
			<a href="/servicio.php?producto=consumibles" onmouseover="pintar(2)" onmouseout="pintarDefault(2)">
				<div class="tarjeta">
					<img src="img/servicios/consumibles.png" alt="cartuchos de impresora" />
					<p class="itemP">Consumibles de impresión</p>
				</div>
			</a>
			<a href="/servicio.php?producto=impresos" onmouseover="pintar(3)" onmouseout="pintarDefault(3)">
				<div class="tarjeta">
					<img src="img/servicios/impresos-publicitarios-y-POP.png" alt="impresos publicitarios" />
					<p class="itemP">Impresos publicitarios y POP</p>
				</div>
			</a>
			<a href="/servicio.php?producto=bioproteccion" onmouseover="pintar(4)" onmouseout="pintarDefault(4)">
				<div class="tarjeta">
					<img src="img/servicios/higiene-personal.png" alt="bioproteccion" />
					<p class="itemP">Bioprotección.</p>
				</div>
			</a>
			<a href="/servicio.php?producto=seguridad" onmouseover="pintar(5)" onmouseout="pintarDefault(5)">
				<div class="tarjeta">
					<img src="img/servicios/seguridad-personal.png" alt="equipos de seguridad industrial" />
					<p class="itemP">Equipos de protección industrial</p>
				</div>
			</a>
			<a href="/servicio.php?producto=cafeteria" onmouseover="pintar(6)" onmouseout="pintarDefault(6)">
				<div class="tarjeta">
					<img src="img/servicios/insumos-de-cafeteria.png" alt="insumos de cafetería" />
					<p class="itemP">Insumos de cafetería</p>
				</div>
			</a>
			<a href="/servicio.php?producto=desechables" onmouseover="pintar(7)" onmouseout="pintarDefault(7)">
				<div class="tarjeta">
					<img src="img/servicios/desechables.png" alt="Productos desechables" />
					<p class="itemP">Desechables</p>
				</div>
			</a>
			<a href="/servicio.php?producto=hoteleria" onmouseover="pintar(8)" onmouseout="pintarDefault(8)">
				<div class="tarjeta">
					<img src="img/servicios/hoteleria.png" alt="Productos de hotelería" />
					<p class="itemP">Hotelería</p>
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
    <script src="js/servicios.js"></script>
</body>
</html>