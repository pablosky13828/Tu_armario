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
		<title>Privacy - tuArmario.es</title>
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
				<h4 class="display-5 txt-title">POLITICA DE PRIVACIDAD</h4>
				<hr class="lineW" style='height:1px'/>
			</div>
			
			
			<!-- Parte 1 -->
			
			<div class="privacy-text">
				<h5 class="txt privacy-title2">1. INFORMACIÓN AL USUARIO</h5>
				
				
						
				<div class='privacy-box'>
					<p class='txt-min'>
						El gerente, es el Responsable del tratamiento de los datos personales del 
						Usuario y le informa que estos datos serán tratados de conformidad con lo dispuesto en el Reglamento 
						(UE) 2016/679 de 27 de abril de 2016 (GDPR) relativo a la protección de las personas físicas en lo que 
						respecta al tratamiento de datos personales y a la libre circulación de estos datos, por lo que se le 
						facilita la siguiente información del tratamiento:
						<br>
					</p>
					
					<a class='txt-min clear'>Fin del tratamiento: mantener una relación comercial con el Usuario. Las operaciones previstas para realizar el tratamiento son:</a>
						<ul class='txt-min'>
							<li>Remisión de comunicaciones comerciales publicitarias por email, fax, SMS, MMS, comunidades sociales o cualquier otro medio 
							electrónico o físico, presente o futuro, que posibilite realizar comunicaciones comerciales. Estas comunicaciones serán realizadas 
							por el RESPONSABLE y relacionadas sobre sus productos y servicios, o de sus colaboradores o proveedores con los que éste haya 
							alcanzado algún acuerdo de promoción. En este caso, los terceros nunca tendrán acceso a los datos personales.</li>	
							
							<li>Realizar estudios estadísticos.</li>
							<li>Tramitar encargos, solicitudes o cualquier tipo de petición que sea realizada por el usuario a través de cualquiera de las formas de contacto que se ponen a su disposición.</li>
							<li>Remitir el boletín de noticias de la página web.</li>
						</ul>
					
					
					<p class='txt-min'>
						<a class='privacy-bold clear'>Base jurídica del tratamiento:</a> consentimiento del interesado.<br><br>
						
						Criterios de conservación de los datos: se conservarán mientras exista un interés mutuo para mantener el fin del tratamiento y cuando ya no sea necesario para tal fin, se suprimirán con medidas de seguridad adecuadas para garantizar la seudonimización de los datos o la destrucción total de los mismos.<br>
						Comunicación de los datos: No se comunicarán los datos a terceros, salvo obligación legal.
					</p>
					
					<a class='privacy-bold clear'>Derechos que asisten al Usuario:</a><br>
						<ul class='txt-min'>
							<li>Derecho a retirar el consentimiento en cualquier momento.</li>
							<li>Derecho de acceso, rectificación, portabilidad y supresión de sus datos y a la limitación u oposición al su tratamiento.</li>
							<li>Derecho a presentar una reclamación ante la autoridad de control 
							<a class="red" href="www.aepd.es">(www.aepd.es)</a> si considera que el tratamiento no se ajusta a la normativa vigente.</li>
						</ul>
						
					<a class='privacy-bold clear'>Datos de contacto para ejercer sus derechos:</a><br>
						<ul class='txt-min'>
							<li>Dirección postal: <a class='red' href='https://www.google.com/maps/place/Colegio+Camino+Real/@40.4610614,-3.4554207,17z/data=!3m2!4b1!5s0xd4237accc55eab9:0xe5020166f1256b92!4m5!3m4!1s0xd42365332f98ca3:0x5580a4e3be7397!8m2!3d40.4610573!4d-3.4532267'>
								Avda. Constitución 190 | Torrejón de Ardoz | Madrid
							</a></li> 
							<li>Email: <a class="red">equipotuarmario@gmail.com</a></li>
						</ul>
						
						<p class='txt-min'>
							Entendemos que a veces el producto no se ajusta al 100% a tus expectativas 
							y que es complicado acertar con el tallaje, por lo que puedes realizar devoluciones 
							en un plazo de 14 días desde que recibes el pedido.<br><br>
							
							Todos los artículos serán inspeccionados a su llegada a nuestras oficinas. 
							En el momento que confirmemos que el producto se encuentra en perfectas condiciones, 
							procederemos a realizar la devolución del coste del producto. 
							No se devolverá el coste de los gastos de envío. Aunque intentamos aceptar todas las devoluciones, 
							ten en cuenta que no podremos aceptar artículos que estén en condiciones inadecuadas, 
							por lo que quizás te las tengamos que hacer llegar nuevamente.				
						</p>
				</div>
				
				<!-- Parte 2 -->
				<h5 class="txt privacy-title2">2. CARÁCTER OBLIGATORIO O FACULTATIVO DE LA INFORMACIÓN FACILITADA POR EL USUARIO</h5>
				<div class='privacy-box'>	
					<p class='txt-min'>
						Los Usuarios, mediante la marcación de las casillas correspondientes y entrada de datos en los campos, 
						marcados con un asterisco (*) en el formulario de contacto o presentados en formularios de descarga, 
						aceptan expresamente y de forma libre e inequívoca, que sus datos son necesarios para atender su petición, 
						por parte del prestador, siendo voluntaria la inclusión de datos en los campos restantes. El Usuario garantiza 
						que los datos personales facilitados al RESPONSABLE son veraces y se hace responsable de comunicar cualquier 
						modificación de los mismos.<br><br>
						
						El RESPONSABLE informa y garantiza expresamente a los usuarios que sus datos personales no serán cedidos en 
						ningún caso a terceros, y que siempre que realizara algún tipo de cesión de datos personales, se pedirá previamente 
						el consentimiento expreso, informado e inequívoco por parte los Usuarios.<br>
						Todos los datos solicitados a través del sitio web son obligatorios, ya que son necesarios para la prestación de un servicio óptimo al Usuario.<br>
						En caso de que no sean facilitados todos los datos, no se garantiza que la información y servicios facilitados sean completamente ajustados a sus necesidades.<br>
					</p>
				</div>
				
				
				<!-- Parte 3 -->
				<h5 class="txt privacy-title2">3. MEDIDAS DE SEGURIDAD</h5>	
				<div class='privacy-box'>	
					<p class='txt-min'>
						Los Usuarios, mediante la marcación de las casillas correspondientes y entrada de datos en los campos, 
						marcados con un asterisco (*) en el formulario de contacto o presentados en formularios de descarga, 
						aceptan expresamente y de forma libre e inequívoca, que sus datos son necesarios para atender su petición, 
						por parte del prestador, siendo voluntaria la inclusión de datos en los campos restantes. El Usuario garantiza 
						que los datos personales facilitados al RESPONSABLE son veraces y se hace responsable de comunicar cualquier 
						modificación de los mismos.<br><br>
						
						El RESPONSABLE informa y garantiza expresamente a los usuarios que sus datos personales no serán cedidos en 
						ningún caso a terceros, y que siempre que realizara algún tipo de cesión de datos personales, se pedirá previamente 
						el consentimiento expreso, informado e inequívoco por parte los Usuarios.<br>
						Todos los datos solicitados a través del sitio web son obligatorios, ya que son necesarios para la prestación de un servicio óptimo al Usuario.<br>
						En caso de que no sean facilitados todos los datos, no se garantiza que la información y servicios facilitados sean completamente ajustados a sus necesidades.
					</p>
			
				</div>	
			</div>
			
			
			<!-- Pie de Página -->
				
				<hr class="lineW" style='height:1px'/>
				
				<div class='footer-box'>	
					<a class="txt-min txt-footer red selected"> Privacidad</a>
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