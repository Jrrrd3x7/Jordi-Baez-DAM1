<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>

<body>
    <?php
    echo "Value of the gift?<br>";

    $gift = (rand(min: 0, max: 2000000));
    if ($gift < 5000) {
        echo "No tax!";
    } else if ($gift >= 5000 && $gift < 25000) {
        echo $gift;
        echo "<br>";
        echo "Tax: " . $resultado1 = (100 + ($gift - 5000) * 0.08);
    } else if ($gift >= 25000 && $gift < 55000) {
        echo $gift;
        echo "<br>";
        echo "Tax: " . $resultado2 = (1700 + ($gift - 25000) * 0.10);
    } else if ($gift >= 55000 && $gift < 200000) {
        echo $gift;
        echo "<br>";
        echo "Tax: " . $resultado3 = (4700 + ($gift - 55000) * 0.12);
    } else if ($gift >= 200000 && $gift < 1000000) {
        echo $gift;
        echo "<br>";
        echo "Tax: " . $resultado4 = (22100 + ($gift - 200000) * 0.15);
    } else if ($gift >= 1000000) {
        echo $gift;
        echo "<br>";
        echo "Tax: " . $resultado5 = (142100 + ($gift - 1000000) * 0.17);
    }
    ?>

</body>

</html>