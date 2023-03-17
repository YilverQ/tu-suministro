<?php 
	class Producto{
		public function __construct($categoria){
			$this->productos_oficina = [ 'Archicomodo plástico', 
							'Archivador lomo ancho',
							'Bolígrafos', 
							'Borradores', 
							'Calculadoras', 
							'Carpeta expediente',
							'Carpetas 3 aros', 
							'Carpetas de fibra', 
							'Carpetas plásticas',
							'Carpeta manila', 
							'Carteleras', 
							'Cintas plásticas',
							'Clip blinder',
							'Clips',
							'Clips mariposa',
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
							'Marcador Resaltador', 
							'Marcadores permanentes', 
							'Mobiliario',
							'Notas adhesivas',
							'Pega blanca', 
							'Pega en barra',
							'Perforadores de hojas', 
							'Pizarra acrílica',
							'Pliego papel bond',
							'Reglas',
							'Resmas de papel', 
							'Saca grapas', 
							'Sacapuntas',
							'Separadores',
							'Set de escritorio', 
							'Sobre manila', 
							'Sumadoras', 
							'Teipes de embalaje',
							'Tijera'];

			$this->productos_limpieza = ['Ambientadores', 
							'Atomizadores', 
							'Carro mopeador',
							'Cepillos de limpieza', 
							'Cera líquida', 
							'Cloro', 
							'Coletos', 
							'Contenedor de basura', 
							'Desengrasante', 
							'Desinfectante',
							'Dispensador de jabón líquido',
							'Dispensador de papel higienico',
							'Dispensador toalla de mano',
							'Dispensador toalla intercalada',
							'Escoba', 
							'Escobillon de techo', 
							'Esponja doble uso',
							'Gel antibacterial', 
							'Haraganes', 
							'Jabón en polvo', 
							'Jabón en polvo industrial',
							'Jabón líquido', 
							'Jabón líquido multiuso', 
							'Jabón antiséptico',
							'Lanilla amarilla', 
							'Limpiador de pocetas MAS', 
							'Limpiador de pocetas', 
							'Limpiadores de superficie',
							'Limpia pocetas', 
							'Limpiavidrios', 
							'Mopas', 
							'Pala plástica', 
							'Paño de microfibra', 
							'Papeleras métalicas', 
							'Papeleras plásticas', 
							'Pastillas para pocetas', 
							'Pipotes', 
							'Secador de manos',
							'Tobos', 
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
					'Letras Corpóreas',
					'Material pop',
					'Pendones',
					'Stands',
					'Tarjetas de presentación',
					'Vinilos publicitarios',
					'Volantes flyers'];


			$this->productos_bioproteccion  = ['Alcohol antiséptico',
						'Amonio cuaternario',
						'Cubre botas',
						'Faceshield',
						'Gel antibacterial',
						'Gorro enfermera',
						'Guante de látex',
						'Guante de nitrilo azul',
						'Guante de nitrilo negro',
						'KN95 blanca',
						'KN95 negra',
						'Mascarilla quirúrgica azul'
					];


			$this->productos_seguridad 	 = ['Arnés de seguridad',
					'Bota pvc caña corta',
					'Bota pvc caña larga',
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
					'Filtro 3m serie 6000',
					'Guante baño de látex',
					'Guante bloquero',
					'Guante cavero',
					'Guante de carnaza largo',
					'Guante de látex amarillo',
					'Guante de látex negro',
					'Guante de lona',
					'Guante de neopreno negro',
					'Guante de nitrilo azul',
					'Guante de nitrilo negro',
					'Guante de nitrilo verde',
					'Guante de precisión mecánica',
					'Guante de pvc rojo',
					'Guante de vaqueta',
					'Guante de vinyl azul',
					'Guante de vinyl tipo examen',
					'Guante malla de acero',
					'Guantes de carnaza',
					'Guantes de panadero',
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
						'Azúcar refinada',
						'Bebidas energéticas',
						'Café',
						'Café expresso',
						'Combo comida para empresas',
						'Comidas para eventos',
						'Gatorade',
						'Jugos variados',
						'Nestea',
						'Refrescos',
						'Té'];


			$this->productos_desechables = ['Bandeja de aluminio',
						'Bandeja de anime',
						'Bolsa celofán',
						'Bolsa de asa',
						'Bolsa de basura negra',
						'Bolsa biohazard',
						'Bolsas cierre hermético',
						'Bolsa para sellado al vacío',
						'Bolsas para papeleras',
						'Bolsas transparentes',
						'Contenedor mixto',
						'Contenedor plástico negro',
						'Contenedor transparente',
						'Cubiertos desechables',
						'Envase lunchero',
						'Envoltura de alimentos',
						'Papel aluminio',
						'Papel envoltura alimentos',
						"Papel higiénico 9''",
						'Papel higiénico hogar',
						'Papel Kraft',
						'Papel para camilla',
						'Pitillos negros',
						'Pitillos transparentes',
						'Platos plásticos',
						'Removedores de café',
						'Servilletas',
						'Strech film',
						'Toalla en espiral',
						'Toalla en rollo',
						'Toalla intercalada',
						'Toallin de cocina',
						'Vaso licorero',
						'Vasos cónicos',
						'Vasos de cartón',
						'Vasos plásticos'];


			$this->productos_hoteleria = ['Almohadas',
						'Batas',
						'Carros de alimentos',
						'Carros de servicio',
						'Colchones',
						'Cubiertos',
						'Gorros de baño',
						'Jabón hotelero',
						'Kit higiene dental',
						'Pantuflas',
						'Sábanas y cobertores',
						'Señales de limpieza',
						'Shampoo acondicionador y cremas',
						'Toallas',
						'Vajillas',
						'Vasos'];
		

			$this->lista_categorias = [ "oficina" 		=> $this->productos_oficina,
										"limpieza" 		=> $this->productos_limpieza,
										"consumibles" 	=> $this->productos_consumibles,
										"impresos" 		=> $this->productos_impresos,
										"bioproteccion" => $this->productos_bioproteccion,
										"seguridad" 	=> $this->productos_seguridad,
										"cafeteria" 	=> $this->productos_cafeteria,
										"desechables" 	=> $this->productos_desechables,
										"hoteleria" 	=> $this->productos_hoteleria];

			$this->lista_productos = $this->lista_categorias[$categoria];
			$this->categoria = $categoria;
		}

		public function getProducts(){
			$html = '<div class="articulos">';
			foreach ($this->lista_productos as $producto){
				#$texto_minuscula_path = strtolower($producto);
				$html .= '<div class="producto">
						<h3>' . $producto . '</h3>
						<img src="/img/productos/'. $this->categoria .'/' . str_replace(' ', '-', $producto
							) . '.jpg" alt="'. $producto . '" />
						</div>';
			};

			return ($html .= '</div>');
		}
	}
?>