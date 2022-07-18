<?php 
	/**
	 * 
	 */
	class Producto{
		public function productosHTML($identificador){
			$oficina = '<div class="articulos">
			<div class="producto">
				<h3>Pizarra acrílica</h3>
				<img src="/img/productos/articulos-oficina/pizarra-acrilica.jpg" alt="Pizzarra acrílica" />
			</div>
			<div class="producto">
				<h3>Fundas transparentes</h3>
				<img src="/img/productos/articulos-oficina/fundas-transparentes.jpg" alt="fundas transparentes" />
			</div>
			<div class="producto">
				<h3>Cinta plástica</h3>
				<img src="/img/productos/articulos-oficina/cinta-plastica.jpg" alt="Cinta plástica" />
			</div>
			<div class="producto">
				<h3>Mobiliario</h3>
				<img src="/img/productos/articulos-oficina/mobiliario.jpg" alt="Mobiliario" />
			</div>
			<div class="producto">
				<h3>Bolígrafo</h3>
				<img src="/img/productos/articulos-oficina/boligrafo.jpg" alt="Bolígrafo" />
			</div>
			<div class="producto">
				<h3>Separadores</h3>
				<img src="/img/productos/articulos-oficina/separadores.jpg" alt="Separadores" />
			</div>
			<div class="producto">
				<h3>Cartelera corcho</h3>
				<img src="/img/productos/articulos-oficina/caretelera-corcho.jpg" alt="Cartelera corcho" />
			</div>
			<div class="producto">
				<h3>Archicomodo plástico</h3>
				<img src="/img/productos/articulos-oficina/archicomodo-plastico.jpg" alt="Archicomodo plástico" />
			</div>
			<div class="producto">
				<h3>Pega blanca</h3>
				<img src="/img/productos/articulos-oficina/pega-blanca.jpg" alt="Pega blanca" />
			</div>
			<div class="producto">
				<h3>Saca grapas</h3>
				<img src="/img/productos/articulos-oficina/saca-grapas.jpg" alt="Saca grapas" />
			</div>
			<div class="producto">
				<h3>Teipe de embalaje</h3>
				<img src="/img/productos/articulos-oficina/teipe-de-embalaje.jpg" alt="Teipe de embalaje" />
			</div>
			<div class="producto">
				<h3>Engrapadora</h3>
				<img src="/img/productos/articulos-oficina/engrapadora.jpg" alt="Engrapadora" />
			</div>

			<div class="producto">
				<h3>Marcador fosforenscente</h3>
				<img src="/img/productos/articulos-oficina/marcador-fosforenscente.jpg" alt="Marcadores fosforenscentes" />
			</div>
			<div class="producto">
				<h3>Grapas</h3>
				<img src="/img/productos/articulos-oficina/grapas.jpg" alt="grapas" />
			</div>
			<div class="producto">
				<h3>Carpeta de 3 aros</h3>
				<img src="/img/productos/articulos-oficina/carpeta-3-aros.jpg" alt="Carpeta de 3 aros" />
			</div>
			<div class="producto">
				<h3>Borra nata</h3>
				<img src="/img/productos/articulos-oficina/borra-nata.jpg" alt="Borra de nata" />
			</div>
			<div class="producto">
				<h3>Carpeta de fibra</h3>
				<img src="/img/productos/articulos-oficina/carpeta-de-fibra.jpg" alt="Carpeta de fibra" />
			</div>
			<div class="producto">
				<h3>Sobre manila</h3>
				<img src="/img/productos/articulos-oficina/sobre-manila.jpg" alt="Sobre manila" />
			</div>
			<div class="producto">
				<h3>Calculadora</h3>
				<img src="/img/productos/articulos-oficina/calculadora.jpg" alt="Calculadora" />
			</div>
			<div class="producto">
				<h3>Formas continuas</h3>
				<img src="/img/productos/articulos-oficina/formas-continuas.jpg" alt="Formas continuas" />
			</div>
			<div class="producto">
				<h3>Sumadora</h3>
				<img src="/img/productos/articulos-oficina/sumadora.jpg" alt="Sumadora" />
			</div>
			<div class="producto">
				<h3>Marcador de pizarra</h3>
				<img src="/img/productos/articulos-oficina/marcador-pizarra.jpg" alt="Marcador de Pizarra" />
			</div>
			<div class="producto">
				<h3>Pega en barra</h3>
				<img src="/img/productos/articulos-oficina/pega-en-barra.png" alt="Pega en barra" />
			</div>
			<div class="producto">
				<h3>Marcador permanente</h3>
				<img src="/img/productos/articulos-oficina/marcador-permanente.jpg" alt="Marcador permanente" />
			</div>
			<div class="producto">
				<h3>Liga No.18</h3>
				<img src="/img/productos/articulos-oficina/liga-18.jpg" alt="Liga numero 18" />
			</div>
			<div class="producto">
				<h3>Archivador de lomo ancho</h3>
				<img src="/img/productos/articulos-oficina/archivador-lomo-ancho.jpg" alt="Archivador de lomo ancho" />
			</div>
			<div class="producto">
				<h3>Encuadernacion</h3>
				<img src="/img/productos/articulos-oficina/encuadernacion.jpg" alt="" />
			</div>
			</div>';

			$limpieza = '<div class="articulos">
			<div class="producto">
				<h3>Papel institucional</h3>
				<img src="/img/productos/articulos-limpieza/papelrollo.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Bolsas</h3>
				<img src="/img/productos/articulos-limpieza/bolsas.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Desinfectantes y cloros</h3>
				<img src="/img/productos/articulos-limpieza/desinfectante.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Ambientadores e insecticidas</h3>
				<img src="/img/productos/articulos-limpieza/ambientador.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Escobas, cepillos y palas</h3>
				<img src="/img/productos/articulos-limpieza/escoba.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Haraganes, mopas y coletos</h3>
				<img src="/img/productos/articulos-limpieza/haragan.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Papelera, pipotes y tobo</h3>
				<img src="/img/productos/articulos-limpieza/papelera.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Esponjas y lanillas</h3>
				<img src="/img/productos/articulos-limpieza/esponjas.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Otros</h3>
				<img src="/img/productos/articulos-limpieza/dispensador.jpg" alt="" />
			</div>
			</div>';

			$consumibles = '<div class="articulos">
			<div class="producto">
				<h3>Cartuchos originales</h3>
				<img src="/img/productos/consumibles/cartuchos.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Cartuchos compatibles</h3>
				<img src="/img/productos/consumibles/cartgen.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Toners originales</h3>
				<img src="/img/productos/consumibles/tonerorig.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Toners compatibles</h3>
				<img src="/img/productos/consumibles/tonergen.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Cintas de impresión</h3>
				<img src="/img/productos/consumibles/cinta.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Recargas de toners y cartuchos</h3>
				<img src="/img/productos/consumibles/recarga.jpg" alt="" />
			</div>
			</div>';

			$impresos = '<div class="articulos">
			<div class="producto">
				<h3>Hojas membretadas</h3>
				<img src="/img/productos/impresos-publicitario/hojasmem.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Tarjetas de presentación</h3>
				<img src="/img/productos/impresos-publicitario/tarjetas.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Volantes</h3>
				<img src="/img/productos/impresos-publicitario/volantes.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Pendones</h3>
				<img src="/img/productos/impresos-publicitario/pendones.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Material POP</h3>
				<img src="/img/productos/impresos-publicitario/pop.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Otros</h3>
				<img src="/img/productos/impresos-publicitario/carpetrot.jpg" alt="" />
			</div>
			</div>';

			$higiene = "";
			$proteccion = "";


			$servicios =["oficina" => $oficina,
						 "limpieza" => $limpieza,
						 "consumibles" => $consumibles,
						 "impresos" => $impresos,
						 "higiene" => $higiene,
						 "proteccion" => $proteccion];
			echo $servicios[$identificador];
		}

	}
?>