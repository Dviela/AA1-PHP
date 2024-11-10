<?php

namespace Clases;
class Paises {
    private $paises = [];

    public function __construct($cadenaPaises) {
        // Convertimos la cadena de países en un array, separando por comas
        $paisesSinLimpiar = explode(",", $cadenaPaises);

        // Recorremos cada país y eliminamos los espacios alrededor
        foreach ($paisesSinLimpiar as $pais) {
            $this->paises[] = trim($pais);
        }
    }
//Ejemplo Foreach
    public function obtenerListaPaises() {
        $resultado = "<ol>";
        for ($i = 0; $i < count($this->paises); $i++) {
            $resultado .= "<li>" . $this->paises[$i] . "</li>";
        }
        $resultado .= "</ol>";
        return $resultado;
    }
}
?>
