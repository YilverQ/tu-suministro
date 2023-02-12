<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<meta name="author" content="Yilver Quevedo De Enclick Soluciones">
	<meta name="keywords" content="Suminstros, Suministro, Tu Suministro, Suministros en Caracas, suministros de papelería, papelería y artículos de oficina">
	<meta name="description" content="Somos una organización de amplia trayectoria dedicada a la venta de artículos de oficina, papelería, consumibles de impresión, material POP, material publicitario, bioproteccion, equipos de seguridad industrial, ubicada en la ciudad de Caracas.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Title -->
	<title>Tu Suministro, la mejor opción para ti.</title>

	<!-- Estilos -->
	<link rel="stylesheet" type="text/css" href="estilos/normalize.css">
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link href="img/favicon.png" rel="icon" type="image/png"/>
    <script src="js/all.min.js"></script>
</head>
<body>
	<h1 style="display: none;">Tu Suministro</h1>
	<!-- NAV -->
	<?php include("templates/menu.php"); ?>
	
	<!-- HEADER -->
	<header class="contenedor">
		<div class="slider-contenedor">
			<div class="contenido-slider">
				<div class="sabana">
				<div class="textoHEADER">
					<h2>Papelería y artículos de oficina.</h2>
					<p>Todo el material de papelería que necesitas para tu oficina, negocio o emprendimiento lo encontrarás acá, al mejor precio y con la garantía de las mejores marcas del mercado.</p>
				</div>
				</div>
			</div>
			<div class="contenido-slider">
				<div class="sabana">
				<div class="textoHEADER">
					<h2>Artículo de limpieza.</h2>
					<p>Trabajar en un lugar limpio y aseado siempre es lo deseado, para eso te ofrecemos productos de calidad, excelente rendimiento y precios inigualables.</p>
				</div>
				</div>
			</div>
			<div class="contenido-slider">
				<div class="sabana">
				<div class="textoHEADER">
					<h2>Consumibles de impresión.</h2>
					<p>No te quedes sin imprimir en ese momento tan importante, los mejores consumibles originales y compatibles los tenemos para ti.</p>
				</div>
				</div>
			</div>
			<div class="contenido-slider">
				<div class="sabana">
				<div class="textoHEADER">
					<h2>Impresos publicitarios y POP.</h2>
					<p>Soluciones gráficas para tu empresa, pendones, carpetas, tarjetas de presentación y material POP en un solo lugar.</p>
				</div>
				</div>
			</div>
			<div class="contenido-slider">
				<div class="sabana">
				<div class="textoHEADER">
					<h2>Bioprotección.</h2>
					<p>El mundo cambió y para proteger tu salud contamos con los mejores productos del mercado, garantizando la Bioprotección del ambiente de trabajo y del personal que en él labore.</p>
				</div>
				</div>
			</div>
			<div class="contenido-slider">
				<div class="sabana">
				<div class="textoHEADER">
					<h2>Equipos de protección industrial.</h2>
					<p>Trabajar seguro, sin riesgo y protegido es una regla. Por eso te ofrecemos productos con altos estándares de cálidad y adaptados a normas internacionales.</p>
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
					<p class="itemP">Papelería y artículos de oficina.</p>
				</div>
			</a>
			<a href="/servicio.php?producto=limpieza" onmouseover="pintar(1)" onmouseout="pintarDefault(1)">
				<div class="tarjeta">
					<img src="img/servicios/articulos-de-limpieza.png" alt="articulos de limpieza" />
					<p class="itemP">Artículos de limpieza.</p>
				</div>
			</a>
			<a href="/servicio.php?producto=consumibles" onmouseover="pintar(2)" onmouseout="pintarDefault(2)">
				<div class="tarjeta">
					<img src="img/servicios/consumibles.png" alt="cartuchos de impresora" />
					<p class="itemP">Consumibles de impresión.</p>
				</div>
			</a>
			<a href="/servicio.php?producto=impresos" onmouseover="pintar(3)" onmouseout="pintarDefault(3)">
				<div class="tarjeta">
					<img src="img/servicios/impresos-publicitarios-y-POP.png" alt="impresos publicitarios" />
					<p class="itemP">Impresos publicitarios y POP.</p>
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
					<p class="itemP">Equipos de protección industrial.</p>
				</div>
			</a>
		</div>
	</div>

	<!-- Numeros De Clientes -->
	<div class="numeros">
		<h3>Los Números No Mienten.</h3>
		<div class="numero">
			<p class="num"></p>
			<p class="title">Productos Disponibles.</p>
		</div>
		<div class="numero">
			<p class="num"></p>
			<p class="title">Clientes Satisfechos.</p>
		</div>
		<div class="numero">
			<p class="num"></p>
			<p class="title">Despachos Realizados.</p>
		</div>
	</div>

	<!-- Carrusel Personas -->
	<div class="personas">
		<div class="botones">
			<div id="izquierdaPersona" class="botonCircle fa-solid fa-angle-left"></div>
			<button id="derechaPersona" class="botonCircle fa-solid fa-angle-right"></button>
		</div>
		<h3>¡Qué opinan nuestros clientes!</h3>
		<div class="slider-contenedor2">
			<div class="contenido-slider2">
				<p class="pensamiento">"Fue una excelente opción, tener un sólo proveedor que nos ofreciera el suministros de los artículos de oficina, nos ahorró tiempo y dinero."</p>
				<p class="pensador">Juan Luis Hurtado.</p>
			</div>
			<div class="contenido-slider2">
				<p class="pensamiento">"Me gustó la atención dedicada que me ofrecieron, quiero destacar el compromiso, rapidez y puntualidad de sus entregas."</p>
				<p class="pensador">María Gabriela Alvarado.</p>
			</div>
			<div class="contenido-slider2">
				<p class="pensamiento">"¡Al fin lo encontré! Luego de buscar por varios días una guillotina de alto impacto, finalmente lo conseguí en Tu Suministro."</p>
				<p class="pensador">David Gonzáles.</p>
			</div>
			<div class="contenido-slider2">
				<p class="pensamiento">"He comprado varias veces en Tu Suministro, es una empresa que siempre me soluciona."</p>
				<p class="pensador">José Luis Figeroa.</p>
			</div>
			<div class="contenido-slider2">
				<p class="pensamiento">"Nos habían hablado maravillas de la empresa y la verdad es que no nos defraudó. Todo increíble."</p>
				<p class="pensador">Carla Lisbeth Bello.</p>
			</div>
		</div>
	</div>
	
	<!-- Ubicación -->
	<?php include("templates/mapa.php") ?>

	<!-- Boton Whatsapp -->
	<?php include("templates/botonWhatsapp.php"); ?>

	<!-- Footer -->
	<?php include("templates/footer.php"); ?>
	


	<!-- Archivos JS -->
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/boton_disabled.js"></script>
    <script src="js/servicios.js"></script>
</body>
</html>
