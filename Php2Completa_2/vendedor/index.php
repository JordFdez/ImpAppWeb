<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8" />
        
    </head>
    <body>
        <form action="cerrar_sesion.php" method="GET">
        <h3>Pisos:</h3>
        <div class="nombre">
        <?php
            echo $_SESSION['name'];
        ?>
        </div>
        <ul>
                <a href="piso_add.php" >Añadir</a>
                <a href="listar.php" >Listar</a>
        </ul>

        <input type="submit" name="cerrar" value="Cerrar Sesion">
        <form>
    </body>
</html>