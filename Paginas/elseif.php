<?php
// Incluir la clase Numero
use Clases\Numero;

require_once '../Clases/Numero.php';

// Inicializar el resultado vacío
$resultado = "";

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el número ingresado
    $numeroIngresado = $_POST['numero'];

    // Crear una instancia de la clase Numero
    $numero = new Numero($numeroIngresado);

    // Obtener el resultado del método verificarNumero
    $resultado = $numero->verificarNumero();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elseif</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
<div class="container">
    <h1>Elseif</h1>
    <p>Introduce un número para comprobar si es positivo, negativo o es 0</p>

    <!-- Formulario para ingresar número -->
    <form action="elseif.php" method="post">
        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Enviar</button>
    </form>
    <!-- Mostrar el resultado después de enviar el formulario -->
    <div class="resultado">
        <?php
        // Mostrar el resultado si se ha procesado el formulario
        echo $resultado;
        ?>
    </div>
</div>
</body>
</html>