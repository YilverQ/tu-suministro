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


			$this->productos_seguridad 	 = ['Arnes de seguridad',
					'Bota pvc cana corta',
					'Bota pvc cana larga',
					'Botas de seguridad',
					'Bota soldador',
					'Careta soldador',
					'Cascos de seguridad',
					'Chaleco carnaza',
					'Chaleco vial',
					'Conos de seguridad',
					'Delantal de carnaza',
					'Delantal pvc',
					'Filtros 3m p100',
					'Flitro 3m serie 6000',
					'Guante bano de latex',
					'Guante bloquero',
					'Guante cavero',
					'Guante de carnaza largo',
					'Guante de latex amarillo',
					'Guante de latex negro',
					'Guante de lona',
					'Guante de neopreno negro',
					'Guante de nitrilo azul',
					'Guante de nitrilo negro',
					'Guante de nitrilo verde',
					'Guante de precision mecanica',
					'Guante de pvc rojo',
					'Guante de vaqueta',
					'Guante de vinyl azul',
					'Guante de vinyl tipo examen',
					'Guante malla de acero',
					'guantes-de-carnaza',
					'Guantes de panadero matfer 2',
					'Guante tejido punto pvc',
					'Impermeable amarillo',
					'Jeans 3 costuras',
					'Lentes de seguridad',
					'Lentes monogafas',
					'Mangas de carnaza',
					'Mascarilla 3m 8210',
					'Mascarilla doble liga n95',
					'Prefiltro 3m 5n11',
					'Protector auditivo',
					'Protector auditivo orejera',
					'Protector auditivo para casco',
					'Protector facial con rachet',
					'Respirador 3m',
					'Respirador 3m 6800'];
			
			
			$this->productos_cafeteria 	 = ['Agua',
				'Azucar refinada',
				'Bebidas energéticas',
				'Café',
				'Café expreso',
				'Combo comida para empresas',
				'Comidas para eventos',
				'Gatorade',
				'Jugos variados',
				'Nestea',
				'Refrescos',
				'Te'];


			$this->productos_desechables = [];
			$this->productos_hoteleria = [];
		

			$this->lista_categorias = [ "oficina" 		=> $this->productos_oficina,
										"limpieza" 		=> $this->productos_limpieza,
										"consumibles" 	=> $this->productos_consumibles,
										"impresos" 		=> $this->productos_impresos,
										"bioproteccion" => $this->productos_bioproteccion,
										"seguridad" 	=> $this->productos_seguridad,
										"cafeteria" 	=> $this->productos_cafeteria,
										"desechables" 	=> $this->pruductos_desechables,
										"hoteleria" 	=> $this->productos_hoteleria];

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