<!DOCTYPE html>
<html lang="es">
<head>
    <title>Procesamiento PHP</title>
</head>
<body>
    <h1>Procesamiento de PHP</h1>
    <?php
        //var_dump($_POST);
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $edad = $_POST['edad'];
        $genero = $_POST['genero'];
        $preferencias = $_POST['preferencias'];
        $estado_civil = $_POST['estado_civil'];

        echo "<p>Nombre: $nombre</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Edad: $edad</p>";
        echo "<p>Género: $genero</p>";
        echo "<p>Preferencias: $preferencias</p>";
        echo "<p>Estado civil: $estado_civil</p>";

    ?>
</body>
</html>