<?php

$nombre_archivo = "agenda.txt";
$datos = fopen($nombre_archivo, "r");
while (!feof($datos)){
    $linea = fgets($datos);
    print $linea ."<br>";
}

fclose($datos);

?>