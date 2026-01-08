<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body>
    <?php

    $varUno = 0;
    $numPar = 0;
    $numImpar = 0;

    for ($varUno = 1; $varUno <= 50; $varUno++) {
        echo $varUno . ",";
        if ($varUno % 2 == 0)
            $numPar++;
        else {
            $numImpar++;
        }
    }
    echo "<br>";
    echo "Hay " . $numImpar . " numeros impares";
    echo "<br>";
    echo "Hay " . $numPar . " numeros pares";
    ?>


</body>

</html>