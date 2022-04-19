<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="author" content="Yilver Quevedo- De Infover & Enclick Soluciones">
	<meta name="description" content="Suministro De Papelería En Caracas">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Title -->
	<title id="titleTitle">Tu Suministro - </title>
	

	<!-- Estilos -->
	<link rel="stylesheet" type="text/css" href="estilos/normalize.css">
	<link rel="stylesheet" type="text/css" href="estilos/servicio.css">
	<link href="img/favicon.png" rel="icon" type="image/png"/>
    <script src="js/all.min.js"></script>
</head>
<body>
	<!-- NAV -->
	<?php include("templates/menu.php"); ?>
	
	<?php
		$servicios =["oficina" => "Papelería y artículos de oficina",
					 "limpieza" => "Artículos de limpieza",
					 "consumibles" => "Consumibles de impresión",
					 "impresos" => "Impresos publicitarios y POP",
					 "bioproteccion" => "Bioprotección",
					 "seguridad" => "Equipos de protección industrial"];

		$conceptos =["oficina" => "Todo el material de papelería que necesitas para tu oficina, negocio o emprendimiento lo encontrarás acá, al mejor precio y con la garantía de las mejores marcas del mercado.",
					 "limpieza" => "Trabajar en un lugar limpio y aseado siempre es lo deseado, para eso te ofrecemos productos de calidad, excelente rendimiento y precios inigualables.",
					 "consumibles" => "No te quedes sin imprimir en ese momento tan importante, los mejores consumibles originales y compatibles los tenemos para ti.",
					 "impresos" => "Soluciones gráficas para tu empresa, pendones, carpetas, tarjetas de presentación y material POP en un solo lugar.",
					 "bioproteccion" => "El mundo cambió y para proteger tu salud contamos con los mejores productos del mercado, garantizando la Bioprotección del ambiente de trabajo y del personal que en él labore.",
					 "seguridad" => "Trabajar seguro, sin riesgo y protegido es una regla. Por eso te ofrecemos productos con altos estándares de calidad y adaptados a normas internacionales."];
	?>
	<p id="noneID" style="display:none;"><?php echo $servicios[$_GET['producto']]; ?></p>

	<!-- HEADER -->
	<header class="contenedor">
		<div class="slider-contenedor">
			<?php echo "<div class='contenido-slider sliderItem-" . $_GET["producto"] ."'>"; echo "\n";?>
				<div class="sabana">
				<div class="textoHEADER">
					<h1><?php echo $servicios[$_GET['producto']]; ?>.</h1>
					<p><?php echo $conceptos[$_GET['producto']] ?></p>
				</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Productos Del Servicio -->
	<div class="identidad">
		<h2><?php echo $servicios[$_GET['producto']]; ?>.</h2>
		<?php

			require_once("templates/productos.php");
			$seleccionar = new Producto();
			$seleccionar -> productosHTML($_GET['producto']); 
		?>
	</div>

	<!-- Boton Whatsapp -->
	<?php include("templates/botonWhatsapp.php"); ?>

	<!-- Footer -->
	<?php include("templates/footer.php"); ?>
	


	<!-- Archivos JS -->
	<script type="text/javascript">
		servicio = document.getElementById("noneID").innerHTML;
		document.getElementById('titleTitle').innerHTML += servicio;
	</script>
    <script src="js/boton_disabled.js"></script>
</body>
</html>