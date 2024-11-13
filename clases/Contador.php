<?php

namespace Clases;

class Contador
{
    private $valor;


    //Le da como valor, el recibido por el formulario
    public function __construct($valor)
    {
        $this->valor = $valor;
    }

    //Ejemplo While
    public function contarHasta()
    {
        $contador = 1;
        $resultado = "<ul>";    // Inicia lista para mostrar el resultado

        while ($contador <= $this->valor) {
            $resultado .= "<li>$contador</li>";
            $contador++;
        }
        $resultado .= "</ul>"; // Cierra la lista

        return $resultado;
    }

    //Ejemplo Do While
    public function cuentaRegresiva() {
        $contador = $this->valor;
        $resultado = "<ul>";    // Inicia lista para mostrar el resultado

        do {
            $resultado .= "<li>$contador</li>";
            $contador--;
        } while ($contador >= 1);

        $resultado .= "</ul>"; // Cierra la lista

        return $resultado;
    }

}