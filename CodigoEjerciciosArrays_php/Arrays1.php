<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays PHP</title>
</head>

<body>

    <?php
    echo "<h4>Ejercicio 1</h4>";
    //Recorremos el array con un foreach tantas veces como valores tengamos, usamos un contador para que el numero de dato se actualice en cada iteracion.
    echo "<br>";

    $datos = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => "23", "ciudad" => "Barcelona");
    $counter = 1;
    foreach ($datos as $valores) {
        echo "Dato " . $counter . "º: " . $valores . "<br>";
        $counter++;
    }

    echo "<h4>Ejercicio 2</h4>";
    //Recorremos el array con un foreach y hacemos la salida con sus datos
    echo "<br>";
    $datos = array("Nombre" => "Sara", "Apellido" => "Martinez", "Edad" => "23", "Ciudad" => "Barcelona");

    foreach ($datos as $valores => $y) {
        echo $valores . ": " . $y . "<br>";
    }

    echo "<br>";
    $counter = 1;
    $datos = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => "23", "ciudad" => "Barcelona");
    //Modificamos el valor del array
    $datos["edad"] = 24;
    foreach ($datos as $valores => $y) {
        echo "Dato " . $counter . "º: " . $y . "<br>";
        $counter++;
    }

    //El var_dump sirve para mostrar el tipo de dato de una variable,en este caso nos detalla si es un string o un entero.
    echo "<h4>Ejercicio 4</h4>";
    echo "<br>";
    $datos = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => "23", "ciudad" => "Barcelona");
    $datos["edad"] = 24;
    var_dump($datos);

    echo "<h4>Ejercicio 5</h4>";
    echo "<br>";
    //El explode() divide un string usando un separador, con un bucle for recorremos el array desde la posiscion i+1 para que nos marque el numero 6 hasta la posicion i que sera la posicion 0.
    $letters = "a,b,c,d,e,f";
    $lista = (explode(",", $letters));
    for ($i = 5; $i >= 0; $i--) {
        echo "Letter " . ($i + 1) . "º: " . $lista[$i] . "<br>";
    }

    echo "<h4>Ejercicio 6</h4>";
    echo "<br>";
    //El arsort() ordena los valores de un array asociativo de mayor a menor, 
    $notas = array("Miguel" => "5", "Luis" => "7", "Marta" => "10", "Isabel" => "8", "Aitor" => "4", "Pepe" => "1");
    arsort($notas);
    echo "Notas de los estudiantes: ";
    foreach ($notas as $alumnos => $orden) {
        echo $alumnos . ": " . $orden . " ";
    }

    //Mostrar media de notas
    echo "<h4>Ejercicio 7</h4>";
    echo "<br>";
    $notas = array("Miguel" => "5", "Luis" => "7", "Marta" => "10", "Isabel" => "8", "Aitor" => "4", "Pepe" => "1");
    //Con array_sum calculamos las medias de las notas
    $average = array_sum($notas) / count($notas);

    //number_format se usa para mostrar una media con decimales especificos.
    $average = number_format($average, 2);
    echo "Media de las notas: $average <br>";
    echo "Alumnos por encima de la media: <br>";
    //Con el foreach recorremos el array y usamos un if que muestre si la nota es mayor que la media
    foreach ($notas as $alumnos => $notaAlum) {
        if ($notaAlum > $average) {
            echo "$alumnos <br>";
        }
    }

    echo "<h4>Ejercicio 8</h4>";
    echo "<br>";
    $notas = array("Miguel" => "5", "Luis" => "7", "Marta" => "10", "Isabel" => "8", "Aitor" => "4", "Pepe" => "1");
    //Creo esta variable para asegurarme que el valor de la nota siempre sea mayor.
    $mejorNota = -1;
    $mejorAlumno = "";
    //Recorremos el array y en cada iteracion la nota se actualiza y se iguala a la variable $mejorNota y lo mismo con el nombre.
    foreach ($notas as $alumno => $nota) {
        if ($nota > $mejorNota) {
            $mejorAlumno = $alumno;
            $mejorNota = $nota;
        }
    }
    echo "La nota mas alta es $mejorNota y el mejor alumno es $mejorAlumno.";
    ?>


</body>

</html>
