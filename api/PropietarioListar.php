<?php

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
    header('content-type: application/json; charset=utf-8');
    $params = json_decode( file_get_contents( 'php://input' ), true ); 
    require './ConexionBD.php';

    try {
        $data = array();

        $sql = "SELECT * FROM propietarios";
        $result = $BD->query($sql);
        $error = $BD->errorInfo();

        if ($error[0] === "00000") {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                array_push($data, $row);
            }
        } else {
            throw new Exception($error[2]);
        }            
        
        echo json_encode($data);

    }catch(PDOException $e) {
        echo $sql." Error " . $e->getMessage();
    }



?>