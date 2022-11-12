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
        fclose($datos);
    }
    
}

else 
{
?>
<html>
<head>
    <style>
        fieldset{
            border: 2px solid black;
        }
        td{
            text-align: center;
        }
        .izq{
            text-align: left;
        }
       
    </style>

</head>
<body>
<fieldset>
<form action="ejercicio3.php" method="GET">
    DATOS DEL ALUMNO:<br>
    <table>
        <tr>
            <td class="izq">Introduzca su <br>nombre:</td>
            <td>Enseñanza:</td>
        </tr>

        <tr>
            <td><input type="text" name="nombre" id="nombre"></td>
            <td><input type="radio" name="nivel" id="nivel" value="Secundaria">Secundaria
                <input type="radio" name="nivel" id="nivel" value="Bachillerato">Bachillerato<br>
                <input type="radio" name="nivel" id="nivel" value="Ciclo Medio">Ciclo Medio
                <input type="radio" name="nivel" id="nivel" value="Ciclo Superior">Ciclo Superior
            </td>
        </tr>

        <tr>
            <td class="izq" row=2>Introduzca su <br>telefono:</td>
        </tr>
        <tr>
            <td><input type="number" name="telef" id="telef"></td>    
            <td class="izq">Matriculado <input type="checkbox" name="matri" id="matri" value="Matriculado"></td>
        </tr>
    </table>
    Mostrar datos:
    <select name="opcion" id="opcion"> <!-- cuando se trata de un select simple va sin [], multiple con nombre[] -->
        <option value="uno">Por Pantalla</option>
        <option value="dos">En Archivo datos.txt</option>
    </select> 
    <br>

</fieldset>
<input type="submit" name="enviar" value="Enviar datos">
</form>
</body>
</html>
<?php
}
?>