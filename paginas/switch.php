<?php
use Clases\Evaluador;

require_once "../clases/Evaluador.php";

$resultado = "";

// Procesamos el formulario si se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];

    $evaluador = new Evaluador($numero);

    // Obtenemos el mensaje de la evaluación
    $resultado = $evaluador->obtenerNota();
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Switch</title>
        <link rel="stylesheet" href="../estilos/styles.css">
    </head>
    <body>
        <div class="container">
            <h1>Switch</h1>

            <!-- Formulario -->
            <form action="" method="post">
                <label for="numero">Introduce aquí tu nota (1-10):</label>
                <input type="number" name="numero" id="numero" min="1" max="10" required>
                <button type="submit">Evaluar Número</button>
            </form>

            <div class="resultado">
                <h3>Resultado:</h3>
                <?php
                // Muestra el resultado si se ha procesado el formulario
                echo $resultado;
                ?>
            </div>
        </div>
        <button type="button" onclick="window.location.href='index.php'" class="boton-volver">Volver</button>
    </body>
</html>
