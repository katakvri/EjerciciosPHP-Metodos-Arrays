<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
    $nombre = $_REQUEST['nombre'];
    $clave = $_REQUEST['clave'];

    function mostrar() {
        global $nombre, $clave;
        echo "se ha configurado como nombre de usuario: $nombre y como clave: $clave";
    }; 
    if ($nombre != $clave) {
        mostrar();
    } else {
        echo'<script type="text/javascript">
            alert("Porfavor introduzca una clave distinta al usuario");
            window.location.href="index1.html";
            </script>';
        };
    ?>
</body>
</html>