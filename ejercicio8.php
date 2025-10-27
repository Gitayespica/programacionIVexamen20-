<?php
class Rectangulo {
    private $base;
    private $altura;
    // Se crea el constructor
    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }
    // Se escoge el método para calcular área
    public function calcularArea() {
        return $this->base * $this->altura;
    }
    // Se genera el método para determinar si es cuadrado
    public function esCuadrado() {
        return $this->base === $this->altura;
    }
    // Se genera el método para mostrar datos
    public function mostrarDatos() {
        echo "Base: $this->base, Altura: $this->altura, Área: " . $this->calcularArea() . ", Es cuadrado: " . ($this->esCuadrado() ? "Sí" : "No") . "\n";
    }
}