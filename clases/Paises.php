<?php

namespace Clases;
class Paises {
    private $paises = [];

    //Ejemplo Foreach
    public function __construct($cadenaPaises) {
        // Convierte la cadena de países en un array, separando por comas
        $paisesSinLimpiar = explode(",", $cadenaPaises);

        // Recorre cada país y elimina espacios alrededor
        foreach ($paisesSinLimpiar as $pais) {
            $this->paises[] = trim($pais);
        }
    }

    public function obtenerListaPaises() {
        $resultado = "<ol>";
        for ($i = 0; $i < count($this->paises); $i++) {
            $resultado .= "<li>" . $this->paises[$i] . "</li>";
        }
        $resultado .= "</ol>";
        return $resultado;
    }
}

