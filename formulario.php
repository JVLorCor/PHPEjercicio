<?php

//crear una clase llamada Form que tenga dos campos nombreProducto y precio. Se implementara en un formulario HTML para que realice la gestión del mismo.

class Form {
    private string $method = 'GET';
    public float $precio = 0;
    public string $nombreProducto = '';

    function __construct(string  $precio, string $producto) {
        $this->precio = (float) $precio;
        $this->nombreProducto = $producto;
    }

    public function getMethod () : string {
        return $this->method;
    }

    public function setMethod (string $metodo = 'POST') : void {
        $this->method = $metodo;
    }
    
    public function __toString() : string {
        if (isset($_REQUEST['precio'])){
            return "
            <h2>Producto cargado</h2>
            <ol>
                <li>Nombre del producto: $this->nombreProducto</li>
                <li>Precio del producto: $this->precio</li>
            </ol>";
        }
        else {
            return '';
        }
    }
}