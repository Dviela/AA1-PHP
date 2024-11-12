<?php
// Incluir la clase Numero
use Clases\Contador;

require_once '../Clases/Contador.php';

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $limite = $_POST['limite'];
    $contador = new Contador($limite);
    $resultado = $contador->cuentaRegresiva();
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Do While</title>
        <link rel="stylesheet" href="../styles/styles.css">
    </head>
    <body>
        <div class="container">
            <h1>Do While</h1>
            <p>Cuenta Regresiva desde el número especificado</p>
            <br>
            <form action="dowhile.php" method="post">
                <label for="inicio">Nº de Inicio</label>
                <input type="number" name="limite" id="limite" min="1" required>
                <button type="submit">Iniciar</button>
            </form>
            <!-- Muestra el resultado después de enviar el formulario -->
            <div class="resultado">
                <h3>Resultado:</h3>
                <?php
                // Mostrar el resultado del contador
                echo $resultado;
                ?>
            </div>
        </div>
        <button type="button" onclick="window.location.href='index.php'" class="boton-volver">Volver</button>
    </body>
</html>
