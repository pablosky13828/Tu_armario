<?php
	//Conexion con la base de datos
	require 'config/config.php';
	require 'config/database.php';
		$db=new Database();
		$conex = $db->conectar();

    //Confirmamos q llegan los productos
    $producto = isset($_SESSION['carrito']['productos']) ? $_SESSION['carrito']['productos'] : null;

    $listaCarrito = array();

    if($producto != null){
        foreach($producto as $clave => $cantidad){
            
            //Consulta a la base de datos
            $sql = $conex->prepare("SELECT idProduct, carpeta, nameProduct, categoryID, talla, largo, ancho, mangas, precio, $cantidad AS cantidad FROM products WHERE idProduct=? AND activo=1");
            $sql->execute([$clave]);
            $listaCarrito[] = $sql->fetch(PDO::FETCH_ASSOC);
        }
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<!--Title--> 
		<title>Cesta - tuArmario.es</title>
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
						<a class="nav-link txt red">
							<img src='images/@general/carritoCompra2.png' class='navBar-icons'>
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
		
			<!-- Titulo -->
				<div class="txt-title">
					<h4 class="display-5">CESTA</h4>
				</div>
			
			<!--Producto-->		
				<div>
					<table class="shopCart-table">
                        <thead>
                            <tr>
                                <td class='shopCart-linesUP' colspan='4'>
                                    <hr class="lineW" style='height:1px'/>
                                </td>
                            </tr>    
                        </thead>

                        <tbody>
                            <?php 
                                if($listaCarrito == null){
                                    echo 'No has seleccionado nada? Ves a nuestro catalogo!';
                                    $total = 0;
                                }
                                else{
                                    $total = 0;

                                    foreach($listaCarrito as $producto){?>

                                    <?php //Variables
                                        $id         = $producto['idProduct'];
                                        $carpeta    = $producto['carpeta'];
                                        $nombre     = $producto['nameProduct'];
                                        $categoria  = $producto['categoryID'];		
                                        $talla      = $producto['talla'];
                                        $largo      = $producto['largo'];
                                        $ancho      = $producto['ancho'];
                                        $mangas     = $producto['mangas'];
                                        $cantidad   = $producto['cantidad'];
                                        $precio     = $producto['precio'];

                                        $subtotal   = $precio * $cantidad;
                                        $total      += $subtotal;
                                        $img1 = "images/productos/" . $carpeta . "/1.png";
                                    ?>
                            
                            <!-- tabla por producto -->

                                <tr>
                                    <!--Imagen-->
                                    <td rowspan='2' style='width:25%'>
                                        <a href="product.php?idProduct=<?php echo $id; ?>">
                                            <img src="<?php echo $img1; ?>" class='shopCart-table-img'>
                                        </a>
                                    </td>
                                
                                    <!--Espacio-->
                                    <td rowspan='2' style='width:3%'></td>
                                
                                    <!--Info-->
                                    <td class='shopCart-table-text'>
                                        <a class="red" href="product.php?idProduct=<?php echo $id; ?>">
                                            <h6 class="display-6"><?php echo $nombre ?></h6>
                                        </a>
                                        
                                        <!-- Talla -->
                                        <a class='txt-min clear'>Talla: <?php echo $talla ?></a>
                                        <br>
                                    </td>
                                    
                                    <!-- Eliminar Producto -->
                                    <td style='text-align:right; vertical-align:top;'>
                                        <a href='#' id="eliminar" class="btn btn-warning btn-sm txt-min" data-bs-id="<?php echo $id ?>" data-bs-toggle="modal" data-bs-target="#eliminaModal">Eliminar</a>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <!-- Cantidad -->
                                    <td class='shopCart-info'>
                                        <a class='txt clear'>Cantidad:</a> 
                                        <input type='number' class='txt-min' min='1' max='5' step='1' value="<?php echo $cantidad; ?>" size='2' id='cantidad_<?php echo $id; ?>' onchange='actCant(this.value, <?php echo $id; ?>)'/>
                                    </td>
                                    
                                    <!-- Precio Producto -->
                                    <td class='shopCart-precio1'>
                                        <a class='txt clear'> Precio: <a class='txt clear' id='subtotal_<?php echo $id; ?>' name='subtotal[]'><?php echo number_format($subtotal, 2, ', ', '. '); ?></a> €</a>
                                    </td>
                                </tr>
                                
                                <!-- Linea Blanca -->
                                <tr>
                                    <td colspan='4' class='shopCart-linesDOWN'>	
                                        <hr class="lineW" style='height:1px'/>
                                    </td>
                                </tr>
                            
                            <!--final tabla por producto-->
                            <?php //cerramos foreach
                                    }
                            ?>

                            <!-- PAGO // PRECIO TOTAL -->
                                <tr>
                                    <!--Realizar Pago-->
                                    <td colspan='2' style='vertical-align:bottom'> 
                                        <button class='btn btn-primary btn-sm txt clear2' style='background-color:red; border:0;' onclick='pago()'> REALIZAR PAGO</button>
                                    </td>
                                    
                                    <!--Precio TOTAL-->
                                    <td colspan='2' style='text-align:right; vertical-align:top'> 
                                        <a class='txt clear' style='font-weight:bold'> TOTAL : &nbsp; <a id='total' class='txt clear'><?php echo number_format($total, 2, ', ', '. '); ?></a> €</a>
                                    </td>
                                </tr>
                        </tbody>                
					</table>
				</div>		
                
                <?php //cerramos else
                            }
                ?>
			
			<!-- -------------------------------------------------------------------------------------------------------------- -->
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

        <!-- Modal -->
        <div class="modal fade" id="eliminaModal" tabindex="-1" aria-labelledby="eliminaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
            <div class="modal-body" style='color:black'>
                Deseas quitar el producto de la lista?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button id='btn-eliminar' type="button" class="btn btn-danger" onclick='elimina()'>Eliminar</button>
            </div>
            </div>
        </div>
        </div>

		<!-- SCRIPTS JS Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        
        <script>

            let eliminaModal = document.getElementById('eliminaModal')
            eliminaModal.addEventListener('show.bs.modal', function(event){
                let button = event.relatedTarget
                let id = button.getAttribute('data-bs-id')
                let buttonElimina = eliminaModal.querySelector('.modal-footer #btn-eliminar')
                buttonElimina.value = id
            })            


			function actCant(cantidad, id){
				let url = 'config/act_carrito.php'
				let formData = new FormData()
                formData.append('action', 'agregar')
				formData.append('idProduct', id)
                formData.append('cantidad', cantidad)

				fetch(url, {
					method: 'POST',
					body: formData,
					mode: 'cors'
				}).then(response => response.json())
				.then(data=>{
					if(data.ok){
                        //Aplicamos el cambio 
                        let divsubtotal = document.getElementById('subtotal_' + id)
                        divsubtotal.innerHTML = data.sub

                        //Calculamos el Total de Nuevo
                        let total = 0.00
                        let list = document.getElementsByName('subtotal[]')

                        for(let i = 0; i < list.length; i++){
                            total += parseFloat(list[i].innerHTML.replace(/[$,]/g, ''))
                        }

                        total = new Intl.NumberFormat('en-US', {
                            minimumFractionDigits: 2
                        }).format(total)

                        document.getElementById('total').innerHTML = total
					}
				})
			}


            function elimina(){

                let botonElimina = document.getElementById('btn-eliminar')
                let id = botonElimina.value

				let url = 'config/act_carrito.php'
				let formData = new FormData()
                formData.append('action', 'elimina')
				formData.append('idProduct', id)

				fetch(url, {
					method: 'POST',
					body: formData,
					mode: 'cors'
				}).then(response => response.json())
				.then(data=>{
					if(data.ok){
                        location.reload()
					}
				})
			}

			function pago(){
                alert('PAGO REALIZADO');
            }
		</script>

	</body>
</html>