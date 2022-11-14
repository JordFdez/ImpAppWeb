<?php

if (isset($_REQUEST['enviar'])){
    $nombre= $_REQUEST['nombre'];
    $ciclo = $_REQUEST['nivel'];
    $telefono= $_REQUEST['telef'];
    $matriculado = $_REQUEST['matri'];
    $opcion = $_REQUEST['opcion'];

    if ($opcion =='uno'){
        if ($matriculado){
            print"El alumno $nombre, con telefono $telefono, esta matriculado en un $ciclo";    
        }
        else {
            print "El alumno $nombre, con telefono $telefono, aun no esta matriculado";
        }
    }

    else if ($opcion == 'dos'){
        $nombre_archivo = "datos.txt";
        $datos = fopen($nombre_archivo, "a");
        if ($matriculado){
        fwrite($datos, "El alumno $nombre, con telefono $telefono, esta matriculado en un $ciclo" . PHP_EOL);

        }
        else {
            fwrite($datos, "El alumno $nombre, con telefono $telefono, aun no esta matriculado" . PHP_EOL);

        }
        print "<a href='mostrardatos.php'> Mostrar archivo </a> ";
        fclose($datos);

    }
    
}