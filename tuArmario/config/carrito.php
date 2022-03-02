<?php

    require '../config/config.php';

    //Comprobamos q nos envian el id por el metodo POST
    if(isset($_POST['idProduct'])){
        $id = $_POST['idProduct'];

        //comprueba si tienes 1 o mas de un productos IGUALES
        if(isset($_SESSION['carrito']['productos'][$id])){
            $_SESSION['carrito']['productos'][$id] += 1;
        }
        else{
            $_SESSION['carrito']['productos'][$id] = 1;
        
            //1 = producto 1
        }

        $datos['numero'] = count($_SESSION['carrito']['productos']);
        $datos['ok'] = true;

    }
    else{
        $datos['ok'] = false;
    }

    echo json_encode($datos);

?>