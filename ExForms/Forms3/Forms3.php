<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
    <style>
        fieldset {
            margin: 10px;
            width: 300px;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET['num1'])) {
        $num1 = htmlspecialchars(string: $_GET['num1']);
        $num2 = htmlspecialchars(string: $_GET['num2']);
        echo "Lista de menor a mayor <br>";
        for ($i = $num1; $i <= $num2; $i++) {
            echo "<ul style='color:blue',><li>$i<br></li></ul>";
        }
        echo "Lista de mayor a menor";
        for ($j = $num2; $j >= $num1; $j--) {
            echo "<ul style='color:red',>" . "<li>" . $j . "<br>" . "</li>" . "</ul>";
        }
    }
    ?>

    <form method="get">
        <fieldset>
            <legend>
                <h2>Ejercicio 3</h2>
            </legend>

            <h3>Introduce numeros entre 0 y 20.</h3>
            <br>Numero 1: <input type="number" name="num1" min="0" max="20"> <br>
            <br>Numero 2: <input type="number" name="num2" min="0" max="20"> <br>
            <br><input type="submit" value="Submit"><br>
    </form>
    </fieldset>
</body>

</html>