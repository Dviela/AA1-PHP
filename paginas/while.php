<?php
use Clases\Contador;

require_once '../clases/Contador.php';

$resultado = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $limite = $_POST['limite'];
    $contador = new Contador($limite);
    $resultado = $contador->contarHasta();
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>While</title>
        <link rel="stylesheet" href="../estilos/styles.css">
    </head>
    <body>
        <div class="container">
            <h1>While</h1>
            <p>¿Hasta qué número quieres contar?</p>
            <br>
            <form action="while.php" method="post">
                <label for="limite">Nº Límite</label>
                <input type="number" name="limite" id="limite" min="1" required>
                <button type="submit">Contar</button>
            </form>
            <!-- Muestra el resultado después de enviar el formulario -->
            <div class="resultado">
                <h3>Resultado:</h3>
                <?php
                echo $resultado;
                ?>
            </div>
        </div>
        <button type="button" onclick="window.location.href='index.php'" class="boton-volver">Volver</button>
    </body>
</html>
