<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 4</title>
  <style>
    fieldset {
      margin: 10px;
      width: 300px;
    }
  </style>
</head>

<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_FILES["fileToUpload"])) { //detecta si el usuario envió un fichero
    $target_dir = "Upload/"; //carpeta de destino
    //definir nombre del fichero
    $target_file = $target_dir . basename($_FILES["fileToUpload"]['name']);

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "El archivo " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " se ha subido correctamente.<br>";
    } else {
      echo " Hubo un error al subir el archivo.";
    }
  }

  ?>

  <form action="upload.php" method="post" enctype="multipart/form-data">
    <fieldset>
      <legend>
        <h3>Ejercicio 4</h3>
      </legend>
      <br>Selecciona la imagen que deseas subir:
      <br><input type="file" name="fileToUpload" id="fileToUpload"><br>
      <br><input type="submit" value="Enviar" name="submit"><br>
  </form>
  </fieldset>
</body>

</html>