<?php
class Producto {
    private $nombre;
    private $precio;
    private $stock;
    // Se genera el constructor
    public function __construct($nombre, $precio, $stock) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
    }
    // Se selecciona el método para aplicar el descuento
    public function aplicarDescuento($porcentaje) {
        if ($porcentaje > 0 && $porcentaje <= 100) {
            $descuento = ($this->precio * $porcentaje) / 100;
            $this->precio -= $descuento;
            echo "Descuento aplicado. Precio nuevo: " . $this->precio . "\n";
        } else {
            echo "Porcentaje inválido.\n";
        }
    }
    // Se selecciona el método para mostrar los datos
    public function mostrarDatos() {
        echo "Nombre: " . $this->nombre . ", Precio: " . $this->precio . ", Stock: " . $this->stock . "\n";
    }
}