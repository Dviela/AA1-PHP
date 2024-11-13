<?php
use Clases\Numero;

require_once '../clases/Numero.php';

// Inicializar el resultado vacío
$resultado = "";

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el número ingresado
    $numeroIngresado = $_POST['numero'];

    // Crear una instancia de la clase Numero
    $numero = new Numero($numeroIngresado);

    // Obtener el resultado del método verificarNumero
    $resultado = $numero->parImpar();
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IfElse</title>
        <link rel="stylesheet" href="../estilos/styles.css">
    </head>
    <body>
        <div class="container">
            <h1>If-Else</h1>
            <p>Introduce un número para comprobar si es Par o Impar</p>

            <!-- Formulario para ingresar número -->
            <form action="ifelse.php" method="post">
                <label for="numero">Número:</label>
                <input type="number" id="numero" name="numero" required>
                <button type="submit">Enviar</button>
            </form>
            <!-- Muestra el resultado después de enviar el formulario -->
            <div class="resultado">
                <?php
                echo $resultado;
                ?>
            </div>
            <button type="button" onclick="window.location.href='index.php'" class="boton-volver">Volver</button>
        </div>
    </body>
</html>
