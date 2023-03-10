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
	<title id="titleTitle">Suministros de </title>
	

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
		$servicios =["oficina" 		=> "Papelería y artículos de oficina",
					 "limpieza" 	=> "Artículos de limpieza",
					 "consumibles" 	=> "Consumibles de impresión",
					 "impresos" 	=> "Impresos publicitarios y POP",
					 "bioproteccion" => "Bioprotección",
					 "seguridad" 	=> "Equipos de protección industrial",
					 "cafeteria" 	=> "Insumos de cafetería",
					 "desechables" 	=> "Desechables",
					 "hoteleria"	=> "Hotelería"];

		$conceptos =["oficina" 		 => "Todo el material de papelería que necesitas para tu oficina, negocio o emprendimiento lo encontrarás acá, al mejor precio y con la garantía de las mejores marcas del mercado.",
					 "limpieza" 	 => "Trabajar en un lugar limpio y aseado siempre es lo deseado, para eso te ofrecemos productos de calidad, excelente rendimiento y precios inigualables.",
					 "consumibles" 	 => "No te quedes sin imprimir en ese momento tan importante, los mejores consumibles originales y compatibles los tenemos para ti.",
					 "impresos" 	 => "Soluciones gráficas para tu empresa, pendones, carpetas, tarjetas de presentación y material POP en un solo lugar.",
					 "bioproteccion" => "El mundo cambió y para proteger tu salud contamos con los mejores productos del mercado, garantizando la Bioprotección del ambiente de trabajo y del personal que en él labore.",
					 "seguridad" 	 => "Trabajar seguro, sin riesgo y protegido es una regla. Por eso te ofrecemos productos con altos estándares de calidad y adaptados a normas internacionales.",
					 "cafeteria" 	 => "Porque trabajar no lo es todo. Sabemos lo mucho que te gusta charlar y disfrutar de un buen bocadillo. Aquí tenemos productos de comida para tu oficina.",
					 "desechables" 	 => "El ahorro económico y la higiene son ventajas de los productos desechables, ¿Qué esperas para adquirir los tuyos?",
					 "hoteleria" 	 => "Para mejorar la experiencia de su huésped tenemos una variedad de productos que le ayudará con su descanso"];
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
			$products = new Producto($_GET['producto']);
			echo $products->getProducts($_GET['producto']); 
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
		document.getElementById('titleTitle').innerHTML += " - Tu Suministro";
	</script>
    <script src="js/boton_disabled.js"></script>
</body>
</html>