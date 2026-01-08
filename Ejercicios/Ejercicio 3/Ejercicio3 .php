<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>
<body>
    <?php
        $varUno = 12;
        $varDos = 15;
        
    for ($varUno = 0; $varUno <= 12; $varUno++) {
        if ($varUno % 2 == 0)
        echo $varUno . ",";
    }
        //echo  __LINE__; sirve para detener el bucle infinito y ver donde esta el bucle
    ?>
    <br>
    <?php
    while ($varDos >= 0) {
        //if ($varDos === -1) break;
        echo $varDos . ",";
        $varDos--;
        }
    ?>
    <br>
    <?php
    $varUno = 12;
    $varDos = 15;
    do {
        echo $varUno . ",";
        $varUno++;
    } while ($varUno <= $varDos);
    ?>
    <br>
    <?php
    $variableUno=12;
    $variableDos=6;
    do {
        echo $variableUno . ",";
    } while ($variableUno <= $variableDos);

    ?>
</body>
</html>