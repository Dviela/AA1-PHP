<?php

namespace Clases;

class FiltroJugadores
{

    private $jugadores;
    private $posicionFiltro;

    public function __construct($posicionFiltro)
    {
        // Array de jugadores del R.Zaragoza con sus posiciones
        $this->jugadores = [
            ["nombre" => "Gaëtan Poussin", "posicion" => "Portero"],
            ["nombre" => "Bernardo Vital", "posicion" => "Defensa"],
            ["nombre" => "Iván Calero", "posicion" => "Defensa"],
            ["nombre" => "Ager Aketxe", "posicion" => "Centrocampista"],
            ["nombre" => "Francho Serrano", "posicion" => "Centrocampista"],
            ["nombre" => "Samed Baždar", "posicion" => "Delantero"],
            ["nombre" => "Adrián Liso", "posicion" => "Delantero"],
            ["nombre" => "Keidi Bare", "posicion" => "Centrocampista"],
            ["nombre" => "Iván Azón", "posicion" => "Delantero"],
            ["nombre" => "Cristian Álvarez", "posicion" => "Portero"],
        ];
        $this->posicionFiltro = $posicionFiltro;
    }

    //Ejemplo Continue
    public function buscarJugadores()
    {
        $resultado = "";
        foreach ($this->jugadores as $jugador) {
            // Si el jugador no pertenece a la posición filtrada, saltar esta iteración
            if ($jugador["posicion"] !== $this->posicionFiltro) {
                continue;
            }
            // Agregar el jugador al resultado si cumple con el filtro
            $resultado .= "Jugador: {$jugador['nombre']} - Posición: {$jugador['posicion']}<br>";
        }

        // Si no se encontró ningún jugador en la posición filtrada
        if (empty($resultado)) {
            $resultado = "No se encontraron jugadores en la posición: $this->posicionFiltro.<br>";
        }

        return $resultado;
    }
}