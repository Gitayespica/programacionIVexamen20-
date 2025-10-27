<?php
class Tienda {
    private $productos = [];
    // Se escoge el método para agregar el producto
    public function agregarProducto($producto) {
        $this->productos[] = $producto;
    }
    // Se genera el método para listar los productos con stock
    public function listarProductosConStock() {
        echo "Productos con stock:\n";
        foreach ($this->productos as $producto) {
            if ($producto->stock > 0) {
                $producto->mostrarDatos();
            }
        }
    }
}
class Producto {
    public $nombre;
    public $precio;
    public $stock;
    public function __construct($nombre, $precio, $stock) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
    }
    public function mostrarDatos() {
        echo "Nombre: $this->nombre, Precio: $this->precio, Stock: $this->stock\n";
    }
