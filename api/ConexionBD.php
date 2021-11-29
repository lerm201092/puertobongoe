<?php

    $env = 1 ; // 1 : Local , 2 : Produccion

    if( $env == 1 ){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pto_bongoe";
    }else{
        $servername = "localhost";
        $username = "id18026355_lerm201092";
        $password = "0_8DG=P%PJQonxDS";
        $dbname = "id18026355_puertobongoe";
    }

    
    try {
      $BD = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $BD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo "Error en conexion: " . $e->getMessage();
    }   
?>