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
		<title>Devoluciones - tuArmario.es</title>
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
			<div class="titles">
				<h4 class="display-5 txt-title">DEVOLUCIONES</h4>
				<hr class="lineW" style='height:1px'/>
			</div>
			
			<!-- Texto -->
			<div class="row">
				<p class='txt-min'>
					Una vez que el pedido está confirmado, ya lo hemos empezado a procesar. 
					Por este motivo, no es posible añadir o quitar artículos de tu compra una vez que ya se ha completado el proceso. 
					Sin embargo, puedes devolver los artículos que no desees siempre que cumplas con los plazos de devolución.<br><br>
				
					Entendemos que a veces el producto no se ajusta al 100% a tus expectativas y que es complicado acertar con el tallaje, 
					por lo que puedes realizar devoluciones en un plazo de 14 días desde que recibes el pedido.<br><br>
				
					Todos los artículos serán inspeccionados a su llegada a nuestras oficinas. 
					En el momento que confirmemos que el producto se encuentra en perfectas condiciones, procederemos a realizar la devolución del coste del producto. 
					No se devolverá el coste de los gastos de envío. Aunque intentamos aceptar todas las devoluciones, ten en cuenta que no 
					podremos aceptar artículos que estén en condiciones inadecuadas, por lo que quizás te las tengamos que hacer llegar nuevamente.<br><br>		
				</p>	
				
				<p class='refund-actual'>ACTUALMENTE NO SE ACEPTAN DEVOLUCIONES <br></p>
				
			</div>
			
			
			<!-- Pie de Página -->
				
				<hr class="lineW" style='height:1px'/>
				
				<div class='footer-box'>	
					<a class="txt-min txt-footer red" href="privacy.php"> Privacidad</a>
					·
					<a class="txt-min txt-footer red" href="contact.php"> Contacto</a>
					·
					<a class="txt-min txt-footer red selected"> Devoluciones</a>
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