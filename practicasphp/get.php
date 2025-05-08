
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario GET</title>
</head>
<body>
    <h2>Formulario con método GET</h2>
    <form action="get-ejemplo.php" method="get">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"><br><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad"><br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    
    if (isset($_GET['nombre']) && isset($_GET['edad'])) {
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];

        echo "<h3>Datos recibidos:</h3>";
        echo "Nombre: $nombre<br>";
        echo "Edad: $edad";
    }
    ?>
</body>
</html>
