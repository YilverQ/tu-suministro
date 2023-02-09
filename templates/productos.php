<?php 
	class Producto{
		public function __construct($categoria){
			$this->productos_oficina = [ 'Archicomodo plástico', 
			'Archivadores de lomo ancho',
			'Bolígrafos', 
			'Borradores', 
			'Calculadoras', 
			'Carpetas 3 aros', 
			'Carpetas de fibra', 
			'Carpetas manila', 
			'Carteleras', 
			'Cintas plásticas', 
			'Encuadernación',
			'Engrapadoras', 
			'Formas continuas', 
			'Fundas transparentes', 
			'Grapas', 
			'Ligas No.18', 
			'Marcadores acrílicos', 
			'Marcadores fluorecentes', 
			'Marcadores permanentes', 
			'Mobiliario',
			'Pega blanca', 
			'Pega en barra', 
			'Pizarra acrílica', 
			'Saca grapas', 
			'Separadores', 
			'Sobre manila', 
			'Sumadoras', 
			'Teipes de embalaje'];

			$this->productos_limpieza = ['Ambientadores', 
										'Atomizadores', 
										'Bandejas de anime', 
										'Bolsa de asa', 
										'Bolsa de basura negra', 
										'Bolsa desechos peligrosos',
										'Bolsas cierre hermético', 
										'Bolsas-para-papeleras', 
										'Carro mopeador',
										'Cepillos de limpieza', 
										'Cera líquida', 
										'Cloro', 
										'Coletos', 
										'Contenedor anime',
										'Contenedor de basura', 
										'Bolsas transparentes', 
										'Cubiertos plásticos', 
										'Desengrasante', 
										'Desinfectante',
										'Envoltura alimentos', 
										'Escoba', 
										'Escobillon de techo', 
										'Esponja doble uso',
										'Gel antibacterial', 
										'Haraganes', 
										'Jabón en polvo', 
										'Jabón en polvo industrial',
										'Jabón líquido', 
										'Jabón líquido multiuso', 
										'Jabón líquido para las manos',
										'Lanilla amarilla', 
										'Limpiado de pocetas', 
										'Limpiador de pocetas', 
										'Limpiadores de superficie',
										'Limpia pocetas', 
										'Limpiavidrios', 
										'Mopas', 
										'Pala plástica', 
										'Pano de microfibra', 
										'Papel aluminio', 
										'Papeleras métalicas', 
										'Papeleras plásticas', 
										"Papel higienico 9˝˝",
										'Papel higiénico hogar', 
										'Pastillas para pocetas', 
										'Pipotes', 
										'Platos plásticos',
										'Servilletas', 
										'Strech film', 
										'Toalla en espiral', 
										'Toalla en rollo', 
										'Toalla intercalada',
										'Toallín cocina', 
										'Tobos', 
										'Vasos plásticos', 
										'Vensol'];

			$this->productos_consumibles 	 = [];
			$this->productos_impresos 	 	 = [];
			$this->productos_bioproteccion  = [];
			$this->productos_seguridad 	 = [];
		
			$this->lista_categorias = [ "oficina" => $this->productos_oficina,
										"limpieza" 		=> $this->productos_limpieza,
										"consumibles" 	=> $this->productos_consumibles,
										"impresos" 		=> $this->productos_impresos,
										"higiene" 		=> $this->productos_higiene,
										"proteccion" 	=> $this->productos_proteccion];

			$this->lista_productos = $this->lista_categorias[$categoria];
			$this->categoria = $categoria;
		}

		public function getProducts(){
			$html = '<div class="articulos">';
			foreach ($this->lista_productos as $producto){
				$texto_minuscula_path = strtolower($producto);
				$html .= '<div class="producto">
						<h3>' . $producto . '</h3>
						<img src="/img/productos/'. $this->categoria .'/' . str_replace(' ', '-', $texto_minuscula_path) . '.jpg" alt="'. $producto . '" />
						</div>';
			};

			return ($html .= '</div>');
		}
	}
?>