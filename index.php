<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="author" content="Yilver Quevedo De Infover & Enclick Soluciones">
	<meta name="description" content="Suministro De Papelería En Caracas">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Title -->
	<title>Tu Suministro - Inicio</title>

	<!-- Estilos -->
	<link rel="stylesheet" type="text/css" href="estilos/normalize.css">
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
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
					<p>Sólo la mejor calidad de artículos de oficina, para el hogar y escolar están aquí.</p>
				</div>
				</div>
			</div>
			<div class="contenido-slider">
				<div class="sabana">
				<div class="textoHEADER">
					<h2>Artículo de limpieza.</h2>
					<p>La limpieza es importante, por eso te ofrecemos los mejores productos para tu espacio de trabajo, oficina u hogar.</p>
				</div>
				</div>
			</div>
			<div class="contenido-slider">
				<div class="sabana">
				<div class="textoHEADER">
					<h2>Consumibles.</h2>
					<p>La mejor calidad en consumibles para tu impresora está aquí.</p>
				</div>
				</div>
			</div>
			<div class="contenido-slider">
				<div class="sabana">
				<div class="textoHEADER">
					<h2>Impresos publicitarios y POP.</h2>
					<p>Te ofrecemos imagenes coorporativas, impresos publicitarios y materiales POP.</p>
				</div>
				</div>
			</div>
			<div class="contenido-slider">
				<div class="sabana">
				<div class="textoHEADER">
					<h2>Higiene personal.</h2>
					<p>Tenemos para ti la más amplia variedad de productos para la higiene personal.</p>
				</div>
				</div>
			</div>
			<div class="contenido-slider">
				<div class="sabana">
				<div class="textoHEADER">
					<h2>Protección personal.</h2>
					<p>La seguridad es lo primero, protege a tu personal con los productos de mayor durabilidad y resistencia.</p>
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

	<!-- Numeros De Clientes -->
	<div class="numeros" data-aos="fade-up">
		<h3>Los Números No Mienten.</h3>
		<div class="numero">
			<p class="num"></p>
			<p class="title">Variedad De Productos.</p>
		</div>
		<div class="numero">
			<p class="num"></p>
			<p class="title">Clientes Satisfechos.</p>
		</div>
		<div class="numero">
			<p class="num"></p>
			<p class="title">Delivery Entregados.</p>
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
				<p class="pensamiento">Fue una excelente opción, tener un sólo proveedor que nos ofreciera el suministros de los artículos de oficina, nos ahorró tiempo y dinero.</p>
				<p class="pensador">Juan Luis Hurtado.</p>
			</div>
			<div class="contenido-slider2">
				<p class="pensamiento">Me gustó la atención dedicada que me ofrecieron, quiero destacar el compromiso, rapidez y puntualidad de sus entregas.</p>
				<p class="pensador">María Gabriela Alvarado.</p>
			</div>
			<div class="contenido-slider2">
				<p class="pensamiento">¡Al fin lo encontré! Luego de buscar por varios días una guillotina de alto impacto, finalmente lo conseguí en Tu Suministro.</p>
				<p class="pensador">David Gonzáles.</p>
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
    <script src="js/main.js"></script>
    <script src="js/boton_disabled.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    	AOS.init();
    	
    </script>
</body>
</html>
