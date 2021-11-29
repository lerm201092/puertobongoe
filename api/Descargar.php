<?php

require './ConexionBD.php';

try {
    $sql = "SELECT * FROM propietarios";
    $result = $BD->query($sql);
    $error = $BD->errorInfo();
    $fecha =  time();
    if ($error[0] === "00000") {
        $texto = "";
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {            
            $texto .= "BEGIN:VCARD".PHP_EOL;
            $texto .= "VERSION:3.0".PHP_EOL;
            $texto .= "FN:".$row["nombre"]." (PB ".$row["apto"].")".PHP_EOL;
            $texto .= "N:;".$row["nombre"]." (PB ".$row["apto"].")".";;;".PHP_EOL;
            $texto .= "item1.TEL:".$row["telefono"].PHP_EOL;
            $texto .= "CATEGORIES:myContacts".PHP_EOL;
            $texto .= "END:VCARD".PHP_EOL;
        }
        
        $file = fopen("contacts_".$fecha.".vcf", "w");
        fwrite( $file, $texto );
        fclose($file);
        header("Content-disposition: attachment; filename=contacts_".$fecha.".vcf");
        readfile("contacts_".$fecha.".vcf");
    } else {
        throw new Exception($error[2]);
    }     

}catch(PDOException $e) {
    echo $sql." Error " . $e->getMessage();
}


?>