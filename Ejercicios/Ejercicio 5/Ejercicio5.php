<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
</head>

<body>


    <?php
    $varCien = 100;
    $numRandom = 0;
    $varUno = 0;
    $numPar = 0;
    $numImpar = 0;

    while ($varUno < $varCien) {
        $varUno = $numRandom + $varUno;
        $numRandom = rand(1, 20);
        if ($numRandom % 2 == 0) {
            $numPar++;
        } else {
            $numImpar++;
        }
        echo $numRandom . ",";
    }
    echo "<br>";
    echo "The sum total is " . $varUno;
    echo "<br>";
    echo "There were " . $numPar . " even numbers";
    echo "<br>";
    echo "There were " . $numImpar . " odd numbers"
    ?>
</body>

</html>