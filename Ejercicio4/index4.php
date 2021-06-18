<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
    $numeros_cant = $_REQUEST['numeros-cantidad'];
    $numeros_in = $_REQUEST['numeros-inicio'];
    $numeros_fin = $_REQUEST['numeros-final'];

    function generatorRandomNumbers() {
        global $numeros_cant, $numeros_in, $numeros_fin;
        if ($numeros_in < $numeros_fin) {
            for ($i = 0; $i < $numeros_cant; $i++) {
                echo rand($numeros_in, $numeros_fin)."<br>";
            }
        } else {
            for ($i = 0; $i < $numeros_cant; $i++) {
                echo rand($numeros_fin, $numeros_in)."<br>";
            }
        }
    };

    generatorRandomNumbers();
    
    ?>
</body>
</html>