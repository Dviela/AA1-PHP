<?php
// Incluir la clase BuscadorProductos
use Clases\BuscadorProductos;

require_once "../Clases/BuscadorProductos.php";

$resultado = "";

// Procesamos el formulario si se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $limitePrecio = $_POST['limite_precio'];

    // Creamos una instancia de BuscadorProductos
    $buscador = new BuscadorProductos($limitePrecio);

    // Obtenemos el resultado de la búsqueda
    $resultado = $buscador->buscarProductos();
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Break</title>
        <link rel="stylesheet" href="../styles/styles.css">
    </head>
        <body>
            <div class="container">
                <h1>Break</h1>
                <p>Introduce el presupuesto máximo que puedes gastarte</p>

                <!-- Formulario para ingresar el límite de precio -->
                <form action="" method="post">
                    <label for="limite_precio"> Precio límite:</label>
                    <input type="number" name="limite_precio" id="limite_precio" step="0.01" required>
                    <button type="submit">Buscar Productos</button>
                </form>


                <div class="resultado">
                    <h3>Productos encontrados:</h3>
                    <?php
                    // Mostrar el resultado si se ha procesado el formulario
                    echo $resultado;
                    ?>
                </div>
            </div>
            <button type="button" onclick="window.location.href='index.php'" class="boton-volver">Volver</button>
        </body>
</html>
