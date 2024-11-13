<?php

namespace Clases;

class Numero
{

    private $valor;

    //Asigna el valor recibido por el formulario
    public function __construct($valor)
    {
        $this->valor = $valor;
    }


    //Ejemplo IF
    public function multiploTres()
    {
        if ($this->valor % 3 == 0) {
            return "El número es multiplo de 3.";
        }
    }

    //Ejemplo IF-ELSE
    public function parImpar()
    {
        if ($this->valor % 2 == 0) {
            return "El número es par.";
        } else {
            return "El número es impar.";
        }
    }
    //Ejemplo ELSEIF
    public function verificarNumero()
    {
        if ($this->valor > 0) {
            return "El número es positivo.";
        } elseif ($this->valor < 0) {
            return "El número es negativo.";
        } else {
            return "El número es cero.";
        }
    }
}