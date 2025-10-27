<?php
class Empleado {
    private $nombre;
    private $salario;
    // Se genera el constructor
    public function __construct($nombre, $salario) {
        $this->nombre = $nombre;
        $this->salario = $salario;
    }
    // Se selecciona el método para calcular aumento
    public function calcularAumento($porcentaje) {
        if ($porcentaje > 0) {
            $aumento = ($this->salario * $porcentaje) / 100;
            $this->salario += $aumento;
            echo "Aumento aplicado. Salario nuevo: " . $this->salario . "\n";
        } else {
            echo "Porcentaje inválido.\n";
        }
    }
    // Se selecciona el método para mostrar datos
    public function mostrarDatos() {
        echo "Nombre: " . $this->nombre . ", Salario: " . $this->salario . "\n";
    }
}