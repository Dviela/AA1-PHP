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
    $resultado = $numero->multiploTres();
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>If</title>
        <link rel="stylesheet" href="../estilos/styles.css">
    </head>
    <body>
        <div class="container">
            <h1>If</h1>
            <p>Introduce un número para comprobar si es múltiplo de 3</p>

            <!-- Formulario para ingresar número -->
            <form action="if.php" method="post">
                <label for="numero">Número:</label>
                <input type="number" id="numero" min=0 name="numero" required>
                <button type="submit">Enviar</button>
            </form>
        <!-- Muestra el resultado después de enviar el formulario -->
            <div class="resultado">
                <?php
                echo $resultado;
                ?>
            </div>
        </div>
        <button type="button" onclick="window.location.href='index.php'" class="boton-volver">Volver</button>
    </body>
</html>
