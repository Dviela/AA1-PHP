<?php

namespace Clases;

class Evaluador
{
    private $numero;

    public function __construct($numero) {
        $this->numero = (int) $numero; // Convierto el número a entero
    }

    //Ejemplo Switch
    public function obtenerNota() {
        switch ($this->numero) {
            //Del 1 al 4 mismo resultado
            case 1:
            case 2:
            case 3:
            case 4:
                return "Has suspendido :(";
            case 5:
                return "Has sacado un suficiente.";
            case 6:
                return "Has sacado un bien.";
            case 7:
                return "Has sacado un notable.";
            case 8:
                return "Has sacado un notable alto.";
            case 9:
                return "Has sacado un sobresaliente.";
            case 10:
                return "Has sacado la máxima nota :)";
            default:
                return "Número no válido. Por favor, introduce un número del 1 al 10.";
        }
    }
}