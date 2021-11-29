<?php

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
    header('content-type: application/json; charset=utf-8');
    $params = json_decode( file_get_contents( 'php://input' ), true ); 
    require './ConexionBD.php';

    if(isset($params) && count($params) > 0){
        $apto = "T".$params['torre']." / ".$params['apto'];
        $nombre = $params['nombre']." ".$params['apellido'];
        $telefono = $params['telefono'];

        try {
            $sql = "INSERT INTO propietarios (apto, nombre, telefono) 
            VALUES ('{$apto}','{$nombre}','{$telefono}')";
            $BD->exec($sql);
            echo json_encode(["OK"]);
        }catch(PDOException $e) {
            echo $sql." Error " . $e->getMessage();
        }

    }else{
        echo json_encode(["Variable POST = Vacia"]);
    }

?>