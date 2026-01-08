<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        fieldset {
            margin: 10px;
            width: 200px;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET['name'])) {
        $name = htmlspecialchars(string: $_GET['name']);
        echo "<br>";
        $surName = htmlspecialchars(string: $_GET['surName']);
        echo "<h3>Hello, $name  $surName!</h3>";
    }
    ?>

    <form method="get">
        <fieldset>
            <legend>Ejercicio 1</legend>
            <h4>Datos personales</h4>
            Name: <input type="text" name="name"><br>
            <br> SurName: <input type="text" name="surName"><br>
            <br><input type="submit" value="Submit"><br>
    </form>
    </fieldset>
</body>

</html>