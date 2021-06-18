<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    $user = array("Usuario 1" => "Red", "Usuario 2" => "Green", "Usuario 3" => "Blue", "Usuario 4" => "Black", "Usuario 5" => "White");
    
    foreach ($user as $x => $x_value) {
        echo "el color elegido por ".$x." es ".$x_value;
        echo "<br>";
    }
    
    echo $user["Usuario 3"]; // Devuelve el valor "Blue" que hemos seteado

    ?>
</body>
</html>