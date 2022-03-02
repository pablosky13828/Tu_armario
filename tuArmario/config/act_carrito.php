<?php

    require '../config/config.php';
    require '../config/database.php';

    if(isset($_POST['action'])){
        $action = $_POST['action'];
        $id = isset($_POST['idProduct']) ? $_POST['idProduct'] : 0;
        $action = $_POST['action'];

        if($action == 'agregar'){
            $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : 0;
            $respuesta = agregar($id, $cantidad);

            if($respuesta > 0 ){
                $datos['ok'] = true;
            }
            else{
                $datos['ok'] = false;
            }

            $datos['sub'] = number_format($respuesta, 2, '.', ',');
        }
        else if($action == 'elimina'){
            $datos['ok'] = elimina($id);
        }
        else{
            $datos['ok'] = false;
        }
    }

    else{
        $datos['ok'] = false;
    }

    echo json_encode($datos);

    function agregar($id, $cantidad){
        $res = 0;

        if($id > 0  && $cantidad > 0 && is_numeric($cantidad)){
            if(isset($_SESSION['carrito']['productos'][$id])){
                $_SESSION['carrito']['productos'][$id] = $cantidad;

                //Conectar BD
                    $db=new Database();
                    $conex = $db->conectar();

		        //Consulta a la base de datos
                    $sql = $conex->prepare("SELECT precio FROM products WHERE idProduct=? AND activo=1 LIMIT 1");
                    $sql->execute([$id]);
                    $row = $sql->fetch(PDO::FETCH_ASSOC);

			    //Variable
                    $precio = $row['precio'];
                
                //Calculo
                    $res = $precio * $cantidad;
                    return $res;
                
            }
        }
        else{
            return $res;
        }
    }


    function elimina($id){
        if($id > 0){
            if(isset($_SESSION['carrito']['productos'][$id])){
                
                unset($_SESSION['carrito']['productos'][$id]);
                return $datos['ok'] = true;
            }
        }else{
            return false;
        }
    }
?>