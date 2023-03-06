<?php 
	class Producto{
		public function __construct($categoria){
			$this->productos_oficina = [ 'Archicomodo plástico', 
			'Archivador de lomo ancho',
			'Bolígrafos', 
			'Borradores', 
			'Calculadoras', 
			'Carpetas 3 aros', 
			'Carpetas de fibra', 
			'Carpeta manila', 
			'Carteleras', 
			'Cintas plásticas',
			'Clip blinder',
			'Clips',
			'Corrector líquido', 
			'Encuadernación',
			'Engrapadoras', 
			'Formas continuas', 
			'Fundas transparentes', 
			'Grapas', 
			'Lápices',
			'Libretas escolares',
			'Ligas No.18', 
			'Marcadores acrílicos', 
			'Marcadores fluorecentes', 
			'Marcadores permanentes', 
			'Mobiliario',
			'Notas adhesivas',
			'Pega blanca', 
			'Pega en barra',
			'Perforadores de hojas', 
			'Pizarra acrílica',
			'Resmas de papel', 
			'Saca grapas', 
			'Sacapuntas',
			'Separadores',
			'set-de-escritorio', 
			'Sobre manila', 
			'Sumadoras', 
			'Teipes de embalaje',
			'Tijera'];

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


			$this->productos_consumibles 	 = ['Cartuchos compatibles',
			'Cartuchos originales',
			'Cintas de transferencia térmica',
			'Etiquetas autoadhesivas', 
			'Papel carbón',
			'Papel fotográfico',
			'Papel glasse',
			'Plásticos para carnets',
			'Ribbons compatibles',
			'Ribbons originales',
			'Rollo punto de venta',
			'Rollo impresora fiscal',
			'Tintas compatibles',
			'Tintas originales', 
			'Toners compatibles',
			'Toners originales'];


			$this->productos_impresos = ['Banderolas',
					'Bolsas impresas',
					'Franelas sublimadas',
					'Hojas membretadas',
					'Inflables publicitarios',
					'Letras corporeas',
					'Material pop',
					'Pendones',
					'Stands',
					'Tarjetas de presentacion',
					'Viniles',
					'Volantes flyers'];


			$this->productos_bioproteccion  = ['Alcohol antiséptico',
				'Amonio cuaternario',
				'Cubre botas',
				'Faceshield',
				'Gel antibacterial',
				'Gorro enfermera',
				'Guante de latex',
				'Guante de nitrilo azul',
				'Guante de nitrilo negro',
				'Kn95 blanca',
				'Kn95 negra',
				'Mascarilla quirurgica azul'
				
			];
			$this->productos_seguridad 	 = [];
		
			$this->lista_categorias = [ "oficina" => $this->productos_oficina,
										"limpieza" 		=> $this->productos_limpieza,
										"consumibles" 	=> $this->productos_consumibles,
										"impresos" 		=> $this->productos_impresos,
										"bioproteccion" => $this->productos_bioproteccion,
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