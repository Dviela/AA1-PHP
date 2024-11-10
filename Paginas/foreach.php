<?php

use Clases\Paises;

require_once '../Clases/Paises.php';

$resultado = "";

// Procesar el formulario si se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Crear una instancia de la clase Paises con la cadena ingresada
    $paises = new Paises($_POST['paises']);
    // Obtener la lista de países formateada
    $resultado = $paises->obtenerListaPaises();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h1>Foreach</h1>
        <p>Introduce tus países favoritos separados por comas:</p>
        <br>
        <form action="" method="post">
            <label for="paises">Paises: </label>
            <input type="text" name="paises" id="paises" required>
            <button type="submit">Guardar Países</button>
        </form>
        <div class="resultado">
            <h3>Tus Países favoritos:</h3>
            <div>
                <?php
                // Mostrar el resultado si se ha procesado el formulario
                echo $resultado;
                ?>
        </div>
    </div>
</body>
</html>