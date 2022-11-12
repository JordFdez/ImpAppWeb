<?php

if (isset($_REQUEST['guardar'])){
    $nombre= $_REQUEST['nombre'];
    $trabajo = $_REQUEST['trabajo'];
    $telefono= $_REQUEST['telefono'];
    $direccion = $_REQUEST['direccion'];
    $otras = $_REQUEST['otras'];
    print "Añadido a agenda.";
    $datos=fopen("agenda.txt", "a");
    fwrite($datos, "Contacto: Nombre: $nombre - Trabajo: $trabajo - Telefono: $telefono - Direccion: $direccion - Otras: $otras" . PHP_EOL);
    fclose($datos);

}

else 
{
?>
<html>
<head>
    <style>
        input{
            margin-bottom: 5px;
        }
       
    </style>

</head>
<body>
<form action="ejercicio4.php" method="GET">

    <h2>Agenda Virtual PHP</h2>
    <h1>Contactos</h1>
    Para guardar presione el boton<br>
    Nombre: <input type="text" name="nombre" id="nombre"><br>
    Trabajo:<input type="text" name="trabajo" id="trabajo"><br>
    Telefono:<input type="number" name="telefono" id="telefono"><br>
    Direccion:<input type="text" name="direccion" id="direccion"><br>
    Otras: <input type="text" name="otras" id="otras"><br>
    <input type="submit" name="guardar" value="Guardar!">
    <input type="reset" name="reset" value="Reset">

</form>
</body>
</html>
<?php
}
?>