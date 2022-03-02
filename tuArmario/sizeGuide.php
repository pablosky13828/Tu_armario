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
		<title>Guia de Tallas - tuArmario.es</title>
		<meta charset="UTF-8">
		
		<!-- Links -->
			<!--Bootstrap & CSS-->
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
			<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	

	<!--Body-->
	<body>
		
		<!-- Navbar (falta por mejorar y terminar)-->
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
						<a class=" txt red selected" >Guia de Tallas</a>
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
			<DIV class='container-box'>
			
			<!-- Title -->
				<div class="titles">
					<h4 class="display-5 txt-title">GUIA DE TALLAS</h4>
					<hr class="lineW" style='height:1px'/>
				</div>
			
			<!-- Texto -->
				<div style='text-align:left'>
					<p class='txt-min'>
						Los productos que encontrarás en tuArmario VINTAGE tienen las tallas originales, 
						no obstante dado que la mayoría de nuestros productos son vintage, el corte es 
						diferente al de la ropa que se hace en la actualidad. Por ello, podrás encontrar en cada prenda:
					</p>
					
					<ul class='txt-min'>
						<li>Talla en prenda: Talla que viene en la etiqueta de la prenda.</li>
						<li>Talla equivalente actual: Talla equivalente aproximada a las tallas actuales.</li>
					</ul>
					
					<p class='txt-min'>
						Para ser más exactos, también medimos cada una de las prendas. 
						Te dejamos aquí abajo las distintas medidas tomadas en cada producto para que sea más fácil hacerte una idea de cómo es éste.
						<br>
					</p>
					
					<p class='text sizeGuide-title'><br>PRENDAS DE ARRIBA<br></p>
					<ul class='txt-min'>
						<li>Largo: Medido por la parte delantera desde la parte de arriba justo en el centro de la prenda (concidiendo con la cremallera si tuviera) hasta el bajo de la prenda.</li>
						<li>Ancho: Medido de una costura a otra de los laterales justo debajo de las costuras de las mangas.</li>
						<li>Largo de mangas: Medido desde la costura superior del hombro hasta la costura de la parte exterior de la muñeca.</li>
					</ul>
					
					<p class='text sizeGuide-title'><br>PRENDAS DE ABAJO<br></p>
					<ul class='txt-min'>
						<li>Largo: Medido desde la parte superior del pantalón hasta el extremo inferior de la pierna.</li>
						<li>Ancho: Medido a través de la cintura/cadera de la costura lateral a la otra costura lateral.</li>
					</ul>
				</div>
			
			<!-- Imagen -->
				<img src="images/otras/img.png" style="width:50%"/>
				
				
			
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