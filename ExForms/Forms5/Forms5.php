<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <style>
        fieldset {
            margin: 10px;
            width: 250px;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET['num1'])) {
        $nombre = htmlspecialchars(string: $_GET['name']);
        echo "<br>";
        $num1 = htmlspecialchars(string: $_GET['num1']);
        $num2 = htmlspecialchars(string: $_GET['num2']);

        for ($i = $num1; $i <= $num2; $i++) {

            if ($i % 2 == 0) {
                echo "<div style='color:green',><li>$i<br></li></div>";
            } else {
                echo "<div style='color:orange',><li>$i<br></li></div>";
            }
        }
        echo "<h2>Bievenido, $nombre!</h3>";
        echo "El numero ";
        if ($num1 % 2 == 0) {
            echo $num1 . "  es par";
        } else {
            echo $num1 . " es impar";
        }
        echo " y ";
        echo " el numero ";
        if ($num2 % 2 == 0) {
            echo $num2 . " es par";
        } else {
            echo $num2 . " es impar";
        }
        echo ".";
    }

    ?>

    <form method="get">
        <fieldset>
            <legend>
                <h3>Ejercicio 5</h3>
            </legend>
            <h3>Datos personales</h3>
            Nombre:
            <br><input type="text" name="name"><br>
            <br> Numero 1: <input type="number" name="num1" min="1" max="15"><br>
            <br> Numero 2: <input type="number" name="num2" min="1" max="15">
            <input type="submit" value="Enviar"><br>
    </form>
    </fieldset>

</body>

</html>