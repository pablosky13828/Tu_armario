<?php
	//Conexion con la base de datos
	require 'config/config.php';
	require 'config/database.php';
		$db=new Database();
		$conex = $db->conectar();
?>

<!DOCTYPE html>
<html>
	<head>
		<!--Title--> 
		<title>Contacto - tuArmario.es</title>
		<meta charset="UTF-8">
		
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
		
		
		<!-- CONTENIDO-->
		<div class="container-fluid">
			
			<div class='container-box'>
		
			<!-- Title -->
				<h4 class="display-5 txt-title">NOSOTROS</h4>
				<hr class="lineW" style='height:1px'/>
			
			
			<!-- Informacion -->
			
			<table class='contact-tab'>
				<tr>
					<td class='contact-tab-map'>
						<a href="https://www.google.com/maps/place/Colegio+Camino+Real/@40.4610614,-3.4554207,17z/data=!3m2!4b1!5s0xd4237accc55eab9:0xe5020166f1256b92!4m5!3m4!1s0xd42365332f98ca3:0x5580a4e3be7397!8m2!3d40.4610573!4d-3.4532267">
							<img src="images/otras/maps.png" style='width:100%; min-width:100px'/>
						</a>
					</td>
					
					<td style='width:10%'>
					</td>
					
					<td class='contact-tab-info'>
						<p class='txt'>
							<a class='contact-tab-title clear'>Teléfono</a><br>
							<a href="" class="red">000 000 000</a> / <a class="red">000 000 000</a><br><br>
							
							<a class='contact-tab-title clear'>Dirección</a><br>
							<a href="https://www.google.com/maps/place/Colegio+Camino+Real/@40.4610614,-3.4554207,17z/data=!3m2!4b1!5s0xd4237accc55eab9:0xe5020166f1256b92!4m5!3m4!1s0xd42365332f98ca3:0x5580a4e3be7397!8m2!3d40.4610573!4d-3.4532267" class="red">
								Av. de la Constitución, 190, 28850<br>Torrejón de Ardoz, Madrid
							</a><br><br>
							
							<a class='contact-tab-title clear'>Correo Electrónico</a><br>
							<a href="" class="red">info@tuarmario.es</a>
						</p>
					</td>
				</tr>
			</table>
			
			<!-- Informacion 2 -->
			<div class='contact-text-box'>
				<p class='txt'>
					Si tienes cualquier duda que deba ser resulta con la mayor rapidez posible solo tienes que escribirnos un mensaje directo por Instagram a <a class="red" href="https://www.instagram.com/tuarmario_vintage/?hl=es">@tuarmario_vintage</a> <br><br>

					Tambien se encuentra habilitado un correo electronico donde nos podreis expresar tambien vuestras dudas escribiendonos a <a class="red" href="">equipotuarmario@gmail.com</a> <br><br>

					No dudes en escribirnos para consultarnos cualquier duda o inquietud que se te presente, ¡Estaremos encantados de resolvertelas! 🙂❤️<br><br>
				</p>
			</div>
			
			
			<!-- Pie de Página -->	
				<hr class="lineW" style='height:1px'/>
				
				<div class='footer-box'>	
					<a class="txt-min txt-footer red" href="privacy.php"> Privacidad</a>
					·
					<a class="txt-min txt-footer red selected"> Contacto</a>
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