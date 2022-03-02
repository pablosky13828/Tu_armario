<?php
	//Conexion con la base de datos
	require 'config/config.php';
	require 'config/database.php';
		$db=new Database();
		$conex = $db->conectar();

	//Preparamos consulta en la base de datos
	$sql = $conex->prepare("SELECT idProduct, carpeta, nameProduct, categoryID FROM products WHERE (novedades=1) AND (activo=1)");
	$sql->execute();

	$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

	//Romper sesion de php
	//session_destroy();
?>

<!DOCTYPE html>
<html>
	<head>
		<!--Title--> 
		<title>Home - tuArmario.es</title>
		<meta charset="UTF-8">
		
		<!-- Links -->
			<!--Bootstrap & CSS-->
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
			<link rel="stylesheet" type="text/css" href="css/style.css" />
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
		
		<!-- CONTENIDO-->
		<div class="container-fluid">
			
			<!-- Portada -->
			<div class='home-imgPortada'>
				<img src="images/otras/portada.png" style="width:100%"/>
			</div>
		
			<!-- Novedades -->
			<div class="container-box">
				<div class="txt-title">
					<h4 class="display-3">NOVEDADES</h4>
				</div>
				
				<div>
					<div class="row">
					<?php foreach ($resultado as $row){ ?>

						<?php 
							$id = $row['idProduct'];
							$carp = $row['carpeta'];

							$img = "images/productos2/" . $carp . "/default.png";

							if(!file_exists($img)){
								$img = "images/@general/noImg_default.png";
							}
						?>

						<div class="col espacios-columns">
							<a href="product.php?idProduct=<?php echo $id; ?>">
								<img src="<?php echo $img ?>" style="width:100%"/>
							</a>
						</div>
						
					<?php } ?>
					</div>
				</div>
			
			

			<!-- Categorias -->	
				<div class="txt-title">
					<h4 class="display-3">CATEGORÍAS</h4>
				</div>
				
				<div>
					<div class="row">
						<!--Chaquetas-->
						<div class="col-md-6 espacios-columns">
							<div class="demo-content">
								<a href="catalog2.php?categoryID=3">	
									<img src="images/otras/catChaquetas.png" style="max-width:100%"/>
								</a>
							</div>
						</div>
						<!--Pantalones-->
						<div class="col-md-6 espacios-columns">
						<a href="catalog2.php?categoryID=4">
									<img src="images/otras/catPantalones.png" style="max-width:100%"/>
								</a>
						</div>
					</div>
					
					<div class="row">
						<!--Jerseis-->
						<div class="col-md-6 espacios-columns">
							<div class="demo-content">
								<a href="catalog2.php?categoryID=5">
									<img src="images/otras/catChandal.png" style="max-width:100%"/>
								</a>
							</div>
						</div>

						<!--Accesorios-->
						<div class="col-md-6 espacios-columns">
							<a href="catalog2.php?categoryID=1">
								<img src="images/otras/catCamisetas.png" style="max-width:100%"/>
							</a>
						</div>
					</div>
				</div>
				
				<div class='infoPlus'>
					<a class="txt red" href='catalog.php'> Más Categorías </a>
				</div>


			<!-- Pie de Página -->
				<!--Linea Blanca--> <hr class="lineW" style='height:1px'/>
				
				<div class='footer-box'>	
					<a class="txt-min txt-footer red" href="privacy.php"> Privacidad</a> 	·
					<a class="txt-min txt-footer red" href="contact.php"> Contacto</a> 		·
					<a class="txt-min txt-footer red" href="refund.php"> Devoluciones</a> 	·
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