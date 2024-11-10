<?php
// Incluir la clase EvaluadorNumero
use Clases\Evaluador;

require_once "../Clases/Evaluador.php";

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
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h1>Switch</h1>

        <!-- Formulario para ingresar la nota -->
        <form action="" method="post">
            <label for="numero">Introduce aquí tu nota (1-10):</label>
            <input type="number" name="numero" id="numero" min="1" max="10" required>
            <button type="submit">Evaluar Número</button>
        </form>

        <div class="resultado">
            <h3>Resultado:</h3>
            <?php
            // Mostrar el resultado si se ha procesado el formulario
            echo $resultado;
            ?>
        </div>
    </div>
</body>
</html>
