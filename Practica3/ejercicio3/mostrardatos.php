<?php
$datos = fopen('datos.txt', 'r');
while (!feof($datos)){
    $linea = fgets($datos);
    print $linea ."<br>";
}
fclose($datos);
?>