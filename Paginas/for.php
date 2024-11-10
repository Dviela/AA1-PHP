<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
<div class="container">
    <h1>For</h1>
    <!-- Formulario-->
    <form action="" method="post">
        <label for="palabra">Introduce una palabra:</label>
        <input type="text" name="palabra" id="palabra" required>
        <br>
        <label for="repeticiones">Introduce el número de veces que quieres repetirla:</label>
        <input type="number" name="repeticiones" id="repeticiones" min="1" style="width: 40px;" required>
        <br>
        <button type="submit">Repetir</button>
    </form>


    <div class="resultado">
        <h3>Resultado:</h3>
        <?php
        // Procesamos el formulario si se ha enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $palabra = $_POST['palabra'];
            $repeticiones = (int)$_POST['repeticiones'];

            // Usamos For para repetir la palabra
            for ($i = 0; $i < $repeticiones; $i++) {
                echo "Repetición " . ($i + 1) . ": " . htmlspecialchars($palabra) . "<br>";
            }
        }
        ?>
    </div>
</div>
</body>
</html>
