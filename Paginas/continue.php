<?php
// Incluir la clase BuscadorJugadores
use Clases\FiltroJugadores;

require_once "../Clases/FiltroJugadores.php";

$resultado = "";

// Procesamos el formulario si se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $posicionFiltro = $_POST['posicion'];

    // Creamos una instancia de BuscadorJugadores
    $buscador = new FiltroJugadores($posicionFiltro);

    // Obtenemos el resultado de la búsqueda
    $resultado = $buscador->buscarJugadores();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continue</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h1>Continue</h1>
        <p>Buscador de Jugadores por posición</p>
        <br>
        <!-- Formulario para ingresar la posición a filtrar -->
        <form action="" method="post">
            <label for="posicion">Seleccionar posición:</label>
            <select name="posicion" id="posicion" required>
                <option value="Portero">Portero</option>
                <option value="Defensa">Defensa</option>
                <option value="Centrocampista">Centrocampista</option>
                <option value="Delantero">Delantero</option>
            </select>
            <button type="submit">Buscar Jugadores</button>
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
