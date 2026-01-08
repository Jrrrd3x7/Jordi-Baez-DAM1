<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
    <style>
        fieldset {
            margin: 10px;
            width: 25 0px;
        }
    </style>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_FILES["fileToUpload"])) {

        $target_dir = "Uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Si es imagen (JPG o PNG o PDF)
        if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "pdf") {
            $check = getimagesize($_FILES['fileToUpload']["tmp_name"]);
            if ($check !== false) {
                echo "El archivo es una imagen - " . $check['mime'] . ".<br>";
            } else {
                echo "El archivo no es una imagen válida.<br>";
                $uploadOk = 0;
            }
        }

        // Comprueba si el archivo ya existe
        if (file_exists($target_file)) {
            echo "Este archivo ya existe.<br>";
            $uploadOk = 0;
        }

        // Comprueba el tamaño del archivo
        if ($_FILES["fileToUpload"]["size"] >= 100000000) {
            echo "El archivo es demasiado grande.<br>";
            $uploadOk = 0;
        }

        // Solo extensiones permitidas
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "pdf") {
            echo "Solo se admiten archivos JPG, PNG & PDF.<br>";
            $uploadOk = 0;
        }

        // Intento de subida
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "El archivo " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " se ha subido correctamente.<br>";
            } else {
                echo "Hubo un error al subir el archivo.<br>";
            }
        } else {
            echo "El archivo no se ha subido.<br>";
        }
    }
    ?>
    <form action="Forms6.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>
                <h3>Ejercicio 6</h3>
            </legend>
            Seleccionar archivo: <br>
            <input type="file" name="fileToUpload" id="fileToUpload"><br>
            <br><select name="Extensión" id="Extensión"><br>
                <br>
                <option value="">-Seleccionar Extensión-</option><br>
                <option value="jpg">jpg</option>
                <option value="png">png</option>
                <option value="pdf">pdf</option>
            </select><br>
            <br>Tamaño MAX <input type="number" name="size" placeholder="100000000" id="size"><br>
            <br> <input type="submit" value="Enviar" name="submit">
    </form>
    </fieldset>
</body>

</html>