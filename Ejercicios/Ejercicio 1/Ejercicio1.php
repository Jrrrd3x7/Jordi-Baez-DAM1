<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>




<?php     
// PHP code goes here
// Declarar dos variables numericas
    $number1 = 5; //php
    $number2 = 4; //php

    //logic
    $resultSum = $number1 + $number2;
    $resultRes = $number1 - $number2;
    $resultMul= $number1 * $number2;
    $resultDiv= $number1 / $number2;

    echo "The number are " . $number2 . " and " . $number1 . "<br>";
    echo "The sum of " . $number2 . " + " . $number1 . " = " . $resultSum . "<br>";
    echo "The mul of " . $number2 . " * " . $number1 . " = " . $resultMul . "<br>";
    echo "The substraction of " . $number2 . " - " . $number1 . " = " . $resultRes . "<br>";
    echo "The div of ". $number2 ." / ". $number1 . " = " . $resultDiv . "<br>";
    

    if ($number1 > $number2) {
        # code...
        echo "The number " . $number1 . " is the greatest number" . "<br>";
    } else {
        # code...
        echo "The number " . $number2 . " is the greatest number ";
    }

    $baseTriangulo = ($number1 * $number2) / 2;

    echo "The triangle area is " . $baseTriangulo;




    //output


?>



</body>
</html>
