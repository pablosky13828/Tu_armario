<?php
    //abrimos sedsion en php
    session_start();

    //Cuenta numero productos
    $num_prodCarrito = 0;
    if(isset($_SESSION['carrito']['productos'])){
        $num_prodCarrito = count($_SESSION['carrito']['productos']);
    }

?>