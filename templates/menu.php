<!-- Inicio -->
	<nav class="menuNavegacion">
		<!-- BOTON RESPONSIVE -->
		<!-- Solo Visible para Telefonos y Tablet -->
		<input type="checkbox" id="res-menu">
		<label for="res-menu">
			<i class="fa-solid fa-bars" id="sign-one"> </i>
			<i class="fa-solid fa-xmark" id="sign-two"> </i>
		</label>

		<!-- Imagen Principal/Logo De La Empresa/Se puede cambiar la imagen -->
		<a href="/"><img src="img/logo-tu-suministro.png" alt="Logo Tu Suministro"/></a>

		<!-- Menú/NAV -->
		<ul class="menu">
			<a href="/"><li>Inicio</li></a>
			<!-- Este Elemento Contiene un Submenu -->
			<li class="menu_item">
				<a href="/productos.php" class="BotonProducto">Productos</a>
					
				<!-- Este es el Submenu/Se puede añadir o eliminar elementos. -->
				<div class="menuMenu">
				<ul class="submenu">
					<a href="/servicio.php?producto=oficina"><li>Papelería y artículos de oficina</li></a>
					<a href="/servicio.php?producto=limpieza"><li>Articulos de limpieza</li></a>
					<a href="/servicio.php?producto=consumibles"><li>Consumibles</li></a>
					<a href="/servicio.php?producto=impresos"><li>Impresos publicitarios</li></a>
					<a href="/servicio.php?producto=higiene"><li>Higiene personal</li></a>
					<a href="/servicio.php?producto=proteccion"><li>Protección personal</li></a>
				</ul>
				</div>
			</li>
			<a href="/nosotros.php"><li>Nosotros</li></a>
			<a href="/contactanos.php"><li>Contacto</li></a>
		</ul>
	</nav>
<!-- Final -->