<?php
	//Conexion con la base de datos
	require 'config/database.php';
		$db=new Database();
		$conex = $db->conectar();

	//Preparamos consulta en la base de datos
	$sql = conex->prepare("SELECT carpeta, nameProduct, categoryID, precio FROM productos WHERE activo=1");
	$sql->execute();

	$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
	<head>	
		<!--Title--> 
		<title>Catalogo - tuArmario.es</title>
		<meta charset="UTF-8">
		
		<!-- Links -->
			<!--Bootstrap & CSS-->	
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">		
			<link rel="stylesheet" type="text/css" href="css/style.css" />
			
			<!--JavaScript-->	
			<script src='js/jquery-3.2.1.js'></script> 
			<script src='js/script.js'></script>
	</head>
	
	<body>
		<!-- Navbar (falta por mejorar y terminar)-->
		<div class="container-fluid">

			<table style='width:100%; height:100px'>
				<tr>
					<td style='width:15%; text-align:left'>
						<!--Logo-->
						<a class="navbar-brand" href="home.php"><img src='images/@general/tuArmario.png' class='logoTuArmario'></a>
					</td>
						
					<td style='width:60%; text-align:center'>
						<!--Catalogo & Guia de Tallas-->
						<a class=" txt red selected" style='margin-right:20px'>Catálogo</a>
						<a class=" txt red" href="sizeGuide.php">Guia de Tallas</a>
					</td>
						
					<td style='width:5%; text-align:right'>
						<!--Iniciar Sesion-->
						<a class="nav-link txt red" href="logIn.php"><img src='images/@general/user.png' class='navBar-icons'></a>
					</td>
					<td style='width:5%; text-align:right'>
						<!--Carrito de la Compra-->
						<a class="nav-link txt red" href="shopCart.php"><img src='images/@general/carritoCompra.png' class='navBar-icons'></a>
					</td>
					
				</tr>
			  
			</table>
		</div>
		
		<hr class="lineR" style='height:8px'/>
		
		
		<!-- CONTENIDO-->
		<div class="container-fluid">
			
			<div class='container-box'>
		
			<!-- Title -->
				<div>
					<h4 class="display-5 txt-title">CATALOGO</h4>
					<hr class="lineW" style='height:1px'/>
				</div>
				<br>			
				
				<table class='catalog-box'>
					<tr>
				
					<!--Filtros-->
						<td class='catalog-filtros'>
							<a class='txt clear catalog-titulos'>COLECCIONES</a><br>
							
							<div>
								<label> <a class='txt-min red' href=''> <input type='radio' class='catalog-checkbox' name='catItem' href=''> Camisetas 	</input></a> </label><br>	
								<label> <a class='txt-min red' href=''> <input type='radio' class='catalog-checkbox' name='catItem' href=''> Sudaderas 	</input></a> </label><br>
								<label> <a class='txt-min red' href=''> <input type='radio' class='catalog-checkbox' name='catItem' href=''> Chaquetas	</input></a> </label><br>
								<label> <a class='txt-min red' href=''> <input type='radio' class='catalog-checkbox' name='catItem' href=''> Pantalones	</input></a> </label><br>		
								<label> <a class='txt-min red' href=''> <input type='radio' class='catalog-checkbox' name='catItem' href=''> Chandals	</input></a> </label><br>							
							</div>
							<br>
							
							<a class='txt clear catalog-titulos'>TALLAS</a><br>
							
							<div>
								<label> <a class='txt-min red' href=''> <input type='radio' class='catalog-checkbox' value='S' name='catItem2'> S</a> </label><br>
								<label> <a class='txt-min red' href=''> <input type='radio' class='catalog-checkbox' value='M' name='catItem2'> M</a> </label><br>
								<label> <a class='txt-min red' href=''> <input type='radio' class='catalog-checkbox' value='L' name='catItem2'> L</a> </label>
							</div>
							
						</td>
						
						<!--Espacio-->
						<td class='catalog-espacio'>
						</td>
						
						<!--Productos-->
						<td class='catalog-productos'>
							<div>
								
								<!--Primeros 4 productos-->
								<div class="row">
		

									<div class="col espacios-columns" category='chaquetas' href='abrigo_columbia_orange.html'>
										<a href='abrigo_columbia_orange.html'>
											<img src="images/productos/abrigo_columbia_orange/1.png" style="width:100%"/>
											<a class="txt-min red" href='abrigo_columbia_orange.php'>Columbia Orange Jacket <br> 29,99€</a>
										</a>
									</div>
									
									<div class="col espacios-columns" category='chaquetas'>
										<a href='abrigo_kappa_red.html'>
											<img src="images/productos/abrigo_kappa_red_puffer/1.png" style="width:100%"/>
											<a class="txt-min red" href='abrigo_kappa_red.php'>Kappa Red Puffer Jacket <br> 19,99€ </a>
										</a>
									</div>
									
									<div class="w-100 d-md-none"></div>
									
									<div class="col espacios-columns" category='sudaderas'>
										<a href='sudadera_fila_navi_blue.html'>
											<img src="images/productos/sudadera_fila_navi_blue/1.png" style="width:100%"/>
											<a class="txt-min red" href='sudadera_fila_navi_blue.php'>Fila Navi Blue Sweatshirt <br> 22,99€</a>
										</a>
									</div>
									
									<div class="col espacios-columns" category='sudaderas'>
										<a href='sudadera_nike_blackYellow.html'>
											<img src="images/productos/sudadera_nike_blackYellow/1.png" style="width:100%"/>
											<a class="txt-min red" href='sudadera_nike_blackYellow.php'>Nike Gold Sweatshirt <br> 35,99€</a>
										</a>
									</div>
								</div>
								
								<!--Primeros 4 productos-->
								<div class="row">
									<div class="col espacios-columns" category='camisetas'>
										<a href='camiseta_adidas_basket.html'>
											<img src="images/productos/camiseta_adidas_basket/1.png" style="width:100%"/>
											<a class="txt-min red" href='camiseta_adidas_basket.php'>Adidas Basketball Tee <br> 13,99€</a>
										</a>
									</div>
									
									<div class="col espacios-columns" category='camisetas'>
										<a href='camiseta_levis_gris.html'>
											<img src="images/productos/camiseta_levis_gris/1.png" style="width:100%"/>
											<a class="txt-min red" href='camiseta_levis_gris.php'>Levi's Gray Tee <br> 9,99€</a>
										</a>
									</div>
									
									<div class="w-100 d-md-none"></div>
									
									<div class="col espacios-columns">
										<a href='chandal_kappa_track.html'>
											<img src="images/productos/chandal_kappa_track/1.png" style="width:100%"/>
											<a class="txt-min red" href='chandal_kappa_track.php'>Kappa Track Jacket <br> 18,99€</a>
										</a>
									</div>
									
									<div class="col espacios-columns">
										<a href='chandal_boomerang_mag.html'>
											<img src="images/productos/chandal_boomerang_mag/1.png" style="width:100%"/>
											<a class="txt-min red" href='chandal_boomerang_mag.php'>Boomerang Shellsuit <br> 27,99€</a>
										</a>
									</div>
								</div>
								
								<!--Primeros 4 productos-->
								<div class="row">
									<div class="col espacios-columns">
										<a href='camiseta_adidas_basket.html'>
											<img src="images/productos/camiseta_adidas_basket/1.png" style="width:100%"/>
											<a class="txt-min red" href='sudadera_nike_blackYellow.php'>Adidas Basketball Tee <br> 14,99€</a>
										</a>
									</div>
									
									<div class="col espacios-columns">
										<a href='camiseta_adidas_basket.html'>
											<img src="images/productos/camiseta_adidas_basket/1.png" style="width:100%"/>
											<a class="txt-min red" href='sudadera_nike_blackYellow.php'>Adidas Basketball Tee <br> 14,99€</a>
										</a>
									</div>
									
									<div class="w-100 d-md-none"></div>
									
									<div class="col espacios-columns">
										<a href='camiseta_adidas_basket.html'>
											<img src="images/productos/camiseta_adidas_basket/1.png" style="width:100%"/>
											<a class="txt-min red" href='sudadera_nike_blackYellow.php'>Adidas Basketball Tee <br> 14,99€</a>
										</a>
									</div>
									
									<div class="col espacios-columns">
										<a href='camiseta_adidas_basket.html'>
											<img src="images/productos/camiseta_adidas_basket/1.png" style="width:100%"/>
											<a class="txt-min red" href='sudadera_nike_blackYellow.php'>Adidas Basketball Tee <br> 14,99€</a>
										</a>
									</div>
								</div>
								
							</div>
						</td>
					</tr>
				</table>
			
			
			
		
			<!-- Pie de Página -->
				<hr class="lineW" style='height:1px'/>
				
				<div class='footer-box'>	
					<a class="txt-min txt-footer red" href="privacy.php"> Privacidad</a>
					·
					<a class="txt-min txt-footer red" href="contact.php"> Contacto</a>
					·
					<a class="txt-min txt-footer red" href="refund.php"> Devoluciones</a>
					·
					<a href='https://www.instagram.com/tuarmario_vintage/?hl=es'> 
						<img src="images/@general/instagram.png" class="txt-footer instagram"/>
					</a>
				</div>
			
				<div class="footer-div">
					<p class='txt-reserved'>© Your Website 2022. All Rights Reserved.</p>
				</div>
		
			</div>
		</div>
		
		
		
		
		
		<!-- SCRIPTS JS Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	
	
	</body>
</html>