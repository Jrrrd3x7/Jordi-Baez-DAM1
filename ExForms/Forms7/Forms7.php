<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <style>
        fieldset {
            margin: 10px;
            width: 300px;
        }
    </style>
</head>

<body>
    <?php
    $roundplayer1 = 0;
    $roundplayer2 = 0;


    if (isset($_GET['Luchador1']) && isset($_GET['Objeto1']) && isset($_GET['Luchador2']) && isset($_GET['Objeto2']) && isset($_GET['rounds'])) {
        $rounds = $_GET['rounds'];
        $luchador1 = $_GET['Luchador1'];
        $luchador2 = $_GET['Luchador2'];
        $objeto1 = $_GET['Objeto1'];
        $objeto2 = $_GET['Objeto2'];

        for ($i = 1; $i <= $rounds; $i++) {

            //Jugador1
            if ($_GET['Luchador1'] == "Doraemon") {
            } else if ($_GET['Luchador1'] == "Nobita") {
            }

            if ($_GET['Objeto1'] == "Sarten") {
                $random1 = rand(1, 8);
            } else if ($_GET["Objeto1"] == "Dorayaki") {
                $random1 = rand(1, 4) + rand(1, 4);
            }

            //Jugador2
            if ($_GET['Luchador2'] == "Doraemon") {
            } else if ($_GET['Luchador2'] == "Nobita") {
            }
            if ($_GET["Objeto2"] == "Sarten") {
                $random2 = rand(1, 8);
            } else if ($_GET['Objeto2'] == "Dorayaki") {
                $random2 = rand(1, 4) + rand(1, 4);
            }
            echo "Round $i: $luchador1 = $random1, $luchador2 = $random2<br>";

            if ($random1 > $random2) {
                $roundplayer1++; //suma a la ronda
                echo "Round winner $luchador1 with $objeto1<br>";
            } else if ($random1 < $random2) {
                echo "Round winner $luchador2 with $objeto2 <br>";
                $roundplayer2++; //suma a la ronda
            } else if ($random1 == $random2) {
                echo "Tie round<br>";
            }
        }
        if ($roundplayer1 > $roundplayer2) {
            echo "The winner is $luchador1";
        } elseif ($roundplayer1 < $roundplayer2) {
            echo "The winner is $luchador2";
        } else if ($roundplayer1 == $roundplayer2) {
            echo "Tie game";
        }
    }
    ?>
    <div>
        <form action="Forms7.php" method="get" enctype="multipart/form-data">
            <fieldset style="background-color: lightgray;">
                <legend>
                    <h3>Ejercicio 7</h3>
                </legend>
                <br>
                <h3>Jugador 1</h3>
                Luchador 1:<br>
                <select name="Luchador1" id="Luchador1"><br>
                    <option hidden>Seleccionar Luchador 1</option><br>
                    <option value="Doraemon">Doraemon</option>
                    <option value="Nobita">Nobita</option>
                </select><br>
                <br> Objeto 1:<br>
                <select name="Objeto1" id="Objeto1"><br>
                    <option hidden>Seleccionar Objeto 1</option>
                    <option value="Sarten">Sarten</option>
                    <option value="Dorayaki">Dorayaki</option>
                </select><br>
                <br>
                <h3>Jugador 2:</h3>
                Luchador 2:<br>
                <select name="Luchador2" id="Luchador2"><br>
                    <option hidden>Seleccionar Luchador 2</option><br>
                    <option value="Doraemon">Doraemon</option>
                    <option value="Nobita">Nobita</option>
                </select><br>

                <br> Objeto 2:<br>
                <select name="Objeto2" id="Objeto2"><br>
                    <option hidden>Seleccionar Objeto 2</option>
                    <option value="Sarten">Sarten</option>
                    <option value="Dorayaki">Dorayaki</option>
                </select><br>

                <br> Rondas (1-10):<br>
                <br><input type="number" name="rounds">
                <input type="submit" value="¡Luchar!"><br>
    </div>
    </fieldset>
    </form>

</body>

</html>