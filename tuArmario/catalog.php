<?php
	//Conexion con la base de datos
	require 'config/config.php';
	require 'config/database.php';
		$db=new Database();
		$conex = $db->conectar();

	//Preparamos consulta en la base de datos
	$sql = $conex->prepare("SELECT idProduct, carpeta, nameProduct, categoryID, talla, precio FROM products WHERE activo=1");
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
					<!--Logo-->
					<td style='width:15%; text-align:left'>
						<a class="navbar-brand" href="home.php"><img src='images/@general/tuArmario.png' class='logoTuArmario'></a>
					</td>
					
					<!--Catalogo & Guia de Tallas-->
					<td style='width:60%; text-align:center'>
						<a class=" txt red selected" style='margin-right:20%'>Catálogo</a>
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
								<label> <a class='txt-min red' href="catalog2.php?categoryID=1"> • Camisetas 	</input></a> </label><br>	
								<label> <a class='txt-min red' href="catalog2.php?categoryID=2"> • Sudaderas 	</input></a> </label><br>
								<label> <a class='txt-min red' href="catalog2.php?categoryID=3"> • Chaquetas	</input></a> </label><br>
								<label> <a class='txt-min red' href="catalog2.php?categoryID=4"> • Pantalones	</input></a> </label><br>		
								<label> <a class='txt-min red' href="catalog2.php?categoryID=5"> • Chandals		</input></a> </label><br>							
							</div>
							<br>
							
							<a class='txt clear catalog-titulos'>TALLAS</a><br>
							
							<div>
								<label> <a class='txt-min red' href="catalog2.php?talla=S"> • S</a> </label><br>
								<label> <a class='txt-min red' href="catalog2.php?talla=M"> • M</a> </label><br>
								<label> <a class='txt-min red' href="catalog2.php?talla=L"> • L</a> </label>
							</div>
							<br>

							<a class='txt clear catalog-titulos'>TIPOS</a><br>

							<div>
								<label> <a class='txt-min red selected' href="catalog.php"> • Todos</a> </label><br>
								<label> <a class='txt-min red' href="catalog2.php?novedades=1"> • Novedades</a> </label><br>
							</div>
						</td>
						
						<!--Espacio-->
						<td class='catalog-espacio'>
						</td>
						
						<!--Productos-->
						<td class='catalog-productos'>
							<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
								<?php foreach ($resultado as $row){ ?>
									<div class="col">
										<?php 
											$id = $row['idProduct'];
											$carp = $row['carpeta'];

											$img = "images/productos2/" . $carp . "/default.png";

											if(!file_exists($img)){
												$img = "images/@general/noImg_default.png";
											}
										?>

										<div>
											<a href="product.php?idProduct=<?php echo $row['idProduct']; ?>">
												<img src="<?php echo $img ?>" style="width:100%"/>
												<a class="txt-min red" href="product.php?idProduct=<?php echo $row['idProduct']; ?>"><?php echo $row['nameProduct'];?> <br> <?php echo number_format($row['precio'], 2, ', ', '. ');?> €</a>
											</a>
										</div>
									</div>

								<?php } ?>
							</div>
						</td>
					</tr>
				</table>
				<br>
				

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