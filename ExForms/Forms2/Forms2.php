<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <style>
        fieldset {
            margin: 10px;
            width: 200px;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET['num1'])) { // el usuario ha informado e name y ha dado el boton
        $num1 = htmlspecialchars(string: $_GET['num1']);
        $num2 = htmlspecialchars(string: $_GET['num2']);
        echo "<h3>Hola, a continuacion tu suma!</h3>";
        if ($num1 < $num2) {
            echo "El numero $num1 es menor que el numero $num2";
        } elseif ($num1 > $num2) {
            echo "El numero $num1 es mayor que el numero $num2";
        } elseif ($num1 == $num2) {
            echo "El numero $num1 es igual que el numero $num2";
        }
    }
    ?>
    <h2>Ejercicio2</h2>
    <fieldset>
        <legend>
            <h3>Ejercicio 2</h3>
        </legend>
        <form method="get">
            <br>Numero 1: <input type="number" name="num1"> <br>
            <br>Numero 2: <input type="number" name="num2"><br>
            <br><input type="submit" value="Submit"><br>
        </form>
    </fieldset>

</body>

</html>