<?php
	//Conexion con la base de datos
	require 'config/config.php';
	require 'config/database.php';
		$db=new Database();
		$conex = $db->conectar();

	//Info de Producto
	$id = isset($_GET['idProduct']) ? $_GET['idProduct'] : '';

	if($id == ''){
		echo 'Error al procesar la peticion';
		exit;
	}
	else{	
			//Consulta a la base de datos
				$sql = $conex->prepare("SELECT idProduct, carpeta, nameProduct, categoryID, talla, largo, ancho, mangas, precio FROM products WHERE idProduct=? AND activo=1");
				$sql->execute([$id]);
				$row = $sql->fetch(PDO::FETCH_ASSOC);

			//Asignacion variables
				$carpeta = $row['carpeta'];
				$nombre = $row['nameProduct'];
				$categoria = $row['categoryID'];		
				$talla = $row['talla'];
				$largo = $row['largo'];
				$ancho = $row['ancho'];
				$mangas = $row['mangas'];
				$precio = $row['precio'];


			//Imagenes
				$dir_images = "images/productos/" . $carpeta . "/";
				$img1 = $dir_images . "1.png";  
										
				if(!file_exists($img1)){
					$img1 = "images/@general/noImg.png";
				}

			//Carrusel de Imagenes
				$imagenes = array();
				$dir = dir($dir_images);

				while(($archivo = $dir->read()) != false){
					if($archivo != '1.png' && (strpos($archivo, 'png') || strpos($archivo, 'png'))){
						$imagenes[] = $dir_images . $archivo;
					}
				}
				$dir -> close();
		}
?>

<!DOCTYPE html>
<html>
	<head>
		<!--Title--> 
		<title><?php echo $nombre ?> - tuArmario.es</title>
		
		<!-- Links -->
			<!--Bootstrap & CSS-->
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
			<link rel="stylesheet" type="text/css" href="css/style.css" />
			
	</head>
	
	
	
	<!--Body-->
	<body>
		
		
		<!-- Navbar (falta por mejorar y terminar)-->
		<div class="container-fluid">
			<table style='width:100%; height:100px'>
				<tr>
					<!--Logo-->
					<td style='width:15%; text-align:left'>
						<a class="navbar-brand" href="home.php"><img src='images/@general/tuArmario.png' class='logoTuArmario'></a>
					</td>
					
					<!--Catalogo & Guia de Tallas-->
					<td style='width:60%; text-align:center'>
						<a class=" txt red" href="catalog.php" style='margin-right:20%'>Catálogo</a>
						<a class=" txt red" href="sizeGuide.php">Guia de Tallas</a>
					</td>
					
					<!--Iniciar Sesion-->
					<td style='width:5%; text-align:right'>
						<a class="nav-link txt red" href="logIn.php"><img src='images/@general/user.png' class='navBar-icons'></a>
					</td>

					<!--Carrito-->
					<td style='width:5%; text-align:right'>
						<a class="nav-link txt red" href="shopCart.php">
							<img src='images/@general/carritoCompra.png' class='navBar-icons'>
						</a>
					</td>
					<td style='width:2%; text-align:left'>
						<span id='num_prodCarrito' class='txt-min cestaNum' style='background: red; border-radius: 0.8em; -moz-border-radius: 0.8em; -webkit-border-radius: 0.8em; color: #ffffff; display: inline-block; font-weight: bold; line-height: 1.6em; margin-right: 15px; text-align: center; width: 1.6em'>
  						<?php echo $num_prodCarrito; ?></span>
					</td>
				</tr>
			</table>
		</div>
		
		<!--Linea Roja--> <hr class="lineR " style='height:8px'/>
		<br>
		
		<!-- CONTENIDO-->
		<div class="container-fluid">
			
			<div class='container-box'>
		
			<!--Info Producto-->
				<p class='txt-prod'> 
					<a class='red' href='home.php'>Inicio</a> &nbsp; > &nbsp; 
					<a class='red' href='catalog.php'>Productos</a> &nbsp; > &nbsp; 
					<a class='red selected'><?php echo $nombre;?></a> 
				</p>
					
					<div class="row">
						<!--fotos-->
						<div class="col-md-6 espacios-columns">
							<div class="demo-content">
								<?php
									//Imagen 1
									$img1 = "images/productos/" . $carpeta . "/1.png";  
									
									if(!file_exists($img1)){
										$img1 = "images/@general/noImg.png";
									}

									//Imagen 2
									$img2 = "images/productos/" . $carpeta . "/2.png";  
									
									if(!file_exists($img2)){
										$img2 = "images/@general/noImg.png";
									}

									//Imagen 3
									$img3 = "images/productos/" . $carpeta . "/3.png";  
									
									if(!file_exists($img3)){
										$img3 = "images/@general/noImg.png";
									}
								?>
	
								<div id='carouselImages' class='carousel slide' data-bs-ride='carousel'>
									<div class='carousel-inner'>
										<div class='carousel-item active'>	
											<img src="<?php echo $img1; ?>" style="width:100%"/>
										</div>

										<?php foreach ($imagenes as $img) { ?>
											<div class='carousel-item'>	
												<img src="<?php echo $img; ?>" style="width:100%"/>
											</div>
										<?php } ?>
									</div>
									
									<button class='carousel-control-prev' type='button' data-bs-target='#carouselImages' data-bs-slide='prev'>
										<span class='carousel-control-prev-icon' aria-hidden='true'></span>
										<span class='visually-hidden'>Previus</span>
									</button>
									
									<button class='carousel-control-next' type='button' data-bs-target='#carouselImages' data-bs-slide='next'>
										<span class='carousel-control-next-icon' aria-hidden='true'></span>
										<span class='visually-hidden'>Next</span>
									</button>

								</div>
								<br>

								<div class="row">
									<div class="col"> 
										<a><img src="<?php echo $img1; ?>" style="width:100%"/></a> 
									</div>
									
									<div class="col"> 
										<a><img src="<?php echo $img2; ?>" style="width:100%"/></a>
									</div>
									
									<div class="col"> 
										<a><img src="<?php echo $img3; ?>" style="width:100%"/></a>
									</div>					
								</div>
							</div>
						</div>
						
						<!--info-->
						<div class="col-md-6 espacios-columns">
							<p class='prod-info'>
									<!--Nombre --> <a class="display-5 clear"><?php echo $nombre;?></a><br>
									<!--Precio --> <a class='txt clear'><?php echo number_format($row['precio'], 2, '.', ',');?> €</a><br><br>									
									<!--Talla  --> <a class='txt clear'>Talla en Prenda: <?php echo $talla;?></a> <br><br>
									<!--Largo  --> <a class='txt clear'>Largo: <?php echo $largo;?></a> <br>
									<!--Ancho  --> <a class='txt clear'>Ancho: <?php echo $ancho;?></a> <br>
									<!--Mangas --> <a class='txt clear'>Mangas: <?php echo $mangas;?></a> <br><br>
							</p>
								
							<!--Guia Tallas --> <a class='txt red' href='sizeGuide.php'>GUIA TALLAS</a><br><br>
								
							<!--Cesta  --> 	<button onclick='addProducto(<?php echo $id;?>)' class='botonCompra' style="background-color:#212529; border:0">
												<img src='images/otras/agCarrito.png' style="width:100%" href='cesta.php'/>
											</button><br><br>
											
							<!--PayPal --> <button style="background-color:#212529; border:0;">
												<img src='images/otras/PayPal.png' style="width:100%"/>
											</button><br><br>
								
							<a class='txt-min clear'>Las prendas vintage pueden tener pequeño<br> desgaste por el uso o por el paso del tiempo.</a>
						</div>
					</div>
			
			
			<!-- OTROS PRODUCTOS -->
				<div class="txt-title">
					<h4 class="display-3">OTROS PRODUCTOS</h4>
				</div>
				
				<div>
					<?php 
					// Imagen 1
						$x1 = rand(1,12);
						//conexion
						$c1 = $conex->prepare("SELECT idProduct, carpeta FROM products WHERE idProduct=" . $x1 . ";");
						$c1->execute();
						$rowC1 = $c1->fetch(PDO::FETCH_ASSOC);
						
						//id y carpeta
						$id1 = $rowC1['idProduct'];
						$carpeta1 = $rowC1['carpeta'];

						//imagen
						$imgC1 = "images/productos2/" . $carpeta1 . "/default.png";				
					
					//---------------------------------------------------------------------------------------------------
					// Imagen 2
						$x2 = rand(1,12);
						//conexion
						$c2 = $conex->prepare("SELECT idProduct, carpeta FROM products WHERE idProduct=" . $x2 . ";");
						$c2->execute();
						$rowC2 = $c2->fetch(PDO::FETCH_ASSOC);
						
						//id y carpeta
						$id2 = $rowC2['idProduct'];
						$carpeta2 = $rowC2['carpeta'];

						//imagen
						$imgC2 = "images/productos2/" . $carpeta2 . "/default.png";	
						
					//---------------------------------------------------------------------------------------------------	
					// Imagen 3
						$x3 = rand(1,12);
						//conexion
						$c3 = $conex->prepare("SELECT idProduct, carpeta FROM products WHERE idProduct=" . $x3 . ";");
						$c3->execute();
						$rowC3 = $c3->fetch(PDO::FETCH_ASSOC);
						
						//id y carpeta
						$id3 = $rowC3['idProduct'];
						$carpeta3 = $rowC3['carpeta'];

						//imagen
						$imgC3 = "images/productos2/" . $carpeta3 . "/default.png";
									
					//---------------------------------------------------------------------------------------------------	
					// Imagen 4
						$x4 = rand(1,12);
						//conexion
						$c4 = $conex->prepare("SELECT idProduct, carpeta FROM products WHERE idProduct=" . $x4 . ";");
						$c4->execute();
						$rowC4 = $c4->fetch(PDO::FETCH_ASSOC);
						
						//id y carpeta
						$id4 = $rowC4['idProduct'];
						$carpeta4 = $rowC4['carpeta'];

						//imagen
						$imgC4 = "images/productos2/" . $carpeta4 . "/default.png";

					?>

					<div class="row">
						<div class="col espacios-columns">
							<a href="product.php?idProduct=<?php echo $id1; ?>">
								<img src="<?php echo $imgC1 ?>" style="width:100%"/>
							</a>
						</div>
						
						<div class="col espacios-columns">
							<a href="product.php?idProduct=<?php echo $id2; ?>">
								<img src="<?php echo $imgC2 ?>" style="width:100%"/>
							</a>
						</div>
						
						<div class="w-100 d-md-none"></div>
						
						<div class="col espacios-columns">
							<a href="product.php?idProduct=<?php echo $id3; ?>">
								<img src="<?php echo $imgC3 ?>" style="width:100%"/>
							</a>
						</div>
						
						<div class="col espacios-columns">
							<a href="product.php?idProduct=<?php echo $id4; ?>">
								<img src="<?php echo $imgC4 ?>" style="width:100%"/>
							</a>
						</div>
					</div>
				</div>
				
				<div class='infoPlus' style='padding-top:0px'>
					<a class="txt red" href='catalog.php'> Otros Productos</a>
				</div>
			
			
			
			
			<!-- Pie de Página -->
				
				<!-- Linea Blanca --> <hr class="lineW" style='height:1px'/>
				
				<!-- Distintos Apartados -->
				<div class='footer-box'>	
					<a class="txt-min txt-footer red" href="privacy.php"> Privacidad</a>	·
					<a class="txt-min txt-footer red" href="contact.php"> Contacto</a>		·
					<a class="txt-min txt-footer red" href="refund.php"> Devoluciones</a>	·
					<a href='https://www.instagram.com/tuarmario_vintage/?hl=es'> 
						<img src="images/@general/instagram.png" class="txt-footer instagram"/>
					</a>
				</div>
				
				<!-- Derechos -->
				<div class="footer-div">
					<p class='txt-reserved'>© Your Website 2022. All Rights Reserved.</p>
				</div>

			</div>
		</div>
		
		<!-- SCRIPTS JS Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
		
		<!-- addProducto (Peticion ajax con envio por medio del metodo POST)-->
		<script>
			function addProducto(id){
				let url = 'config/carrito.php'
				let formData = new FormData()
				formData.append('idProduct', id)

				fetch(url, {
					method: 'POST',
					body: formData,
					mode: 'cors'
				}).then(response => response.json())
				.then(data=>{
					if(data.ok){
						let elemento = document.getElementById('num_prodCarrito');
						elemento.innerHTML = data.numero;
					}
				})
			}
		</script>
	
	</body>
</html>