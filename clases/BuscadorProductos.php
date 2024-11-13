<?php

namespace Clases;

class BuscadorProductos
{
    private $productos;
    private $limitePrecio;

    public function __construct($limitePrecio) {
        // Array de productos con sus precios
        $this->productos = [
            ["nombre" => "Disco Duro", "precio" => 50],
            ["nombre" => "Fuente de Alimentación", "precio" => 80],
            ["nombre" => "Memorias RAM", "precio" => 90],
            ["nombre" => "Placa Base", "precio" => 150],
            ["nombre" => "Procesador", "precio" => 200],
            ["nombre" => "Tarjeta Gráfica", "precio" => 500],
        ];
        $this->limitePrecio = (float) $limitePrecio;
    }
    ////Ejemplo Break
    public function buscarProductos() {
        $resultado = "";
        foreach ($this->productos as $producto) {
            // Si el precio del producto supera el límite, se detiene la búsqueda
            if ($producto["precio"] > $this->limitePrecio) {
                $resultado .= "No puedes permitirte: {$producto['nombre']} ({$producto['precio']}€).<br>";
                break;
            }
            // Añadir el producto al resultado si no supera el límite
            $resultado .= "Producto: {$producto['nombre']} - Precio: {$producto['precio']}€<br>";
        }
        return $resultado;
    }
}