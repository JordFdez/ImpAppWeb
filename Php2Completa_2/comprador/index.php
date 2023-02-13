<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8" />
        
    </head>
    <body>
        <h3>Comprador:</h3>
        <form action="cerrar_sesion.php" method="GET">
        <div class="nombre">
        <?php
            echo $_SESSION['name'];
        ?>
        </div>
        <ul>
                <a href="listar.php" >Listar</a>
                <a href="buscar.php" >Buscar</a>
                <a href="comprar.php" >Comprar</a>
        </ul>

        <input type="submit" name="cerrar" value="Cerrar Sesion"><br>

        <form>
    </body>
</html>