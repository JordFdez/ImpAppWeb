<?php

if (isset($_REQUEST['buscar'])){
    $nombre_archivo = "agenda.txt";
    $datos = fopen($nombre_archivo, "r");
    $buscar_nombre = $_REQUEST['nombre'];

    while (($linea=fgets($datos)) !== false){
        $arrayDatos = explode("-", $linea);
        $nom = $arrayDatos[0];
        $trabajo = $arrayDatos[1];
        $telef = $arrayDatos[2];
        $direc = $arrayDatos[3];
        $otras = $arrayDatos[4];
        if (trim($nom) == trim($buscar_nombre)){
            print "Contacto: $nom - $trabajo - $telef - $direc - $otras <br>";
        }

    }

    fclose($datos);

}
else
{
?>
<html>
<head>
    <style>
       
    </style>

</head>
<body>
<form action="buscar.php" method="GET">

    <h2>Buscar contacto: </h2>
    Nombre: <input type="text" name="nombre" id="nombre">
    <input type="submit" name="buscar" value="Buscar">

</form>
</body>
</html>

<?php
}
?>