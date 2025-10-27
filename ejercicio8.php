<?php
class Rectangulo {
    private $base;
    private $altura;
    // Constructor
    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }
    // Método para calcular área
    public function calcularArea() {
        return $this->base * $this->altura;
    }
    // Método para determinar si es cuadrado
    public function esCuadrado() {
        return $this->base === $this->altura;
    }
    // Método para mostrar datos
    public function mostrarDatos() {
        echo "Base: $this->base, Altura: $this->altura, Área: " . $this->calcularArea() . ", Es cuadrado: " . ($this->esCuadrado() ? "Sí" : "No") . "\n";
    }
}