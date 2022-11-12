<?php
// Leer archivo de texto con PHP

if (isset($_REQUEST['dibujar'])){
    $alto = $_REQUEST['alto'];
    $ancho = $_REQUEST['ancho'];
    print "Alto: $alto<br>";
    print "Ancho: $ancho<br><br>";

    for ($i=0; $i<$alto; $i++){
        for ($j=0; $j<$ancho; $j++){
            print "*";
        }
        print"<br>";
    }
}

else 
{
?>
<html>
<head>
    <style>
        fieldset{
            background-color: #9CD9FF;
            border-color: #0089E8
        }
        legend{
            border: 3px solid #0089E8;
            background-color: white;
        }
        input {
            margin-bottom: 5px;
        }
        .valor{
            width: 50px;
        }
    </style>

</head>
<body>
<fieldset>
    <legend> <a>Formulario</a> </legend>
<form action="ejercicio1.php" method="GET"><!--mayor o igual que &#8804 ; menor o igual que &#8805-->
    <p>Escriba el alto y ancho (0 < numeros &#8804 100) y mostraré un rectangulo de estrellas de ese tamaño.</p>
    Ancho: <input type="number" class="valor" name="ancho" id="ancho"><br>
    Alto: <input type="number" class="valor" name="alto" id="alto"><br><br>

    <input type="submit" name="dibujar" value="Dibujar">
    <input type="reset" name="borrar" value="Borrar"><br>

</form>
</fieldset>
</body>
</html>
<?php
}
?>