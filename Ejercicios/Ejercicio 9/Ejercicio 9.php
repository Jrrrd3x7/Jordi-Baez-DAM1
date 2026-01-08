<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>

<body>
    <?php
    $suma = 0;
    for ($i = 0; $i < 20; $i++) {
        $nota = (rand(min: 0, max: 10));
        $suma = $suma + $nota;

        if ($nota >= 0 && $nota <= 4) {
            echo $nota . " - Suspenso<br>";
        } elseif ($nota >= 5 && $nota <= 6) {
            echo $nota . " - Aprobado<br>";
        } elseif ($nota >= 7 && $nota <= 8) {
            echo $nota . " - Notable<br>";
        } else {
            echo $nota . " - Sobresaliente<br>";
        }
    }
    echo "Suma de todas las notas " . $suma;
    echo "<br>";
    echo "La media aritmetica de todas las notas " . $suma / 20;





    ?>
</body>

</html>