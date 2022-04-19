<?php 
	/**
	 * 
	 */
	class Producto{
		public function productosHTML($identificador){
			$oficina = '<div class="articulos">
			<div class="producto">
				<h3>Resmas de papel.</h3>
				<img src="/img/productos/articulos-oficina/cajapapel.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Carpetas y archivadores.</h3>
				<img src="/img/productos/articulos-oficina/lomoancho.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Sobres.</h3>
				<img src="/img/productos/articulos-oficina/sobres.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Marcadores.</h3>
				<img src="/img/productos/articulos-oficina/escritura.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Cintas Plásticas.</h3>
				<img src="/img/productos/articulos-oficina/cintaplastica.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Engrapadoras.</h3>
				<img src="/img/productos/articulos-oficina/engrapadora.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Perforadoras.</h3>
				<img src="/img/productos/articulos-oficina/perforadora.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Encuadernación.</h3>
				<img src="/img/productos/articulos-oficina/encuadernacion.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Pegamentos.</h3>
				<img src="/img/productos/articulos-oficina/pegamento.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Ligas.</h3>
				<img src="/img/productos/articulos-oficina/ligas.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Calculadoras.</h3>
				<img src="/img/productos/articulos-oficina/calculadora.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Mobiliario.</h3>
				<img src="/img/productos/articulos-oficina/mobiliario.jpg" alt="" />
			</div>
			</div>';

			$limpieza = '<div class="articulos">
			<div class="producto">
				<h3>Papel institucional.</h3>
				<img src="/img/productos/articulos-limpieza/papelrollo.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Bolsas.</h3>
				<img src="/img/productos/articulos-limpieza/bolsas.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Desinfectantes y cloros.</h3>
				<img src="/img/productos/articulos-limpieza/desinfectante.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Ambientadores e insecticidas.</h3>
				<img src="/img/productos/articulos-limpieza/ambientador.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Escobas, cepillos y palas.</h3>
				<img src="/img/productos/articulos-limpieza/escoba.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Haraganes, mopas y coletos.</h3>
				<img src="/img/productos/articulos-limpieza/haragan.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Papelera, pipotes y tobo.</h3>
				<img src="/img/productos/articulos-limpieza/papelera.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Esponjas y lanillas.</h3>
				<img src="/img/productos/articulos-limpieza/esponjas.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Otros.</h3>
				<img src="/img/productos/articulos-limpieza/dispensador.jpg" alt="" />
			</div>
			</div>';

			$consumibles = '<div class="articulos">
			<div class="producto">
				<h3>Cartuchos originales.</h3>
				<img src="/img/productos/consumibles/cartuchos.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Cartuchos compatibles.</h3>
				<img src="/img/productos/consumibles/cartgen.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Toners originales.</h3>
				<img src="/img/productos/consumibles/tonerorig.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Toners compatibles.</h3>
				<img src="/img/productos/consumibles/tonergen.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Cintas de impresión.</h3>
				<img src="/img/productos/consumibles/cinta.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Recargas de toners y cartuchos.</h3>
				<img src="/img/productos/consumibles/recarga.jpg" alt="" />
			</div>
			</div>';

			$impresos = '<div class="articulos">
			<div class="producto">
				<h3>Hojas membretadas.</h3>
				<img src="/img/productos/impresos-publicitario/hojasmem.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Tarjetas de presentación.</h3>
				<img src="/img/productos/impresos-publicitario/tarjetas.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Volantes.</h3>
				<img src="/img/productos/impresos-publicitario/volantes.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Pendones.</h3>
				<img src="/img/productos/impresos-publicitario/pendones.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Material POP.</h3>
				<img src="/img/productos/impresos-publicitario/pop.jpg" alt="" />
			</div>
			<div class="producto">
				<h3>Otros.</h3>
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