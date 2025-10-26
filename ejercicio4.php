<?php
class Vehiculo {
    private $marca;
    private $velocidad;
    private const VELOCIDAD_MIN = 0;
    private const VELOCIDAD_MAX = 200;
    // Se genera el constructor
    public function __construct($marca, $velocidadInicial = 0) {
        $this->marca = $marca;
        $this->velocidad = max(self::VELOCIDAD_MIN, min($velocidadInicial, self::VELOCIDAD_MAX));
    }
    // Se selecciona el método para acelerar
    public function acelerar($incremento) {
        $this->velocidad = min($this->velocidad + $incremento, self::VELOCIDAD_MAX);
        echo "Velocidad actual: " . $this->velocidad . " km/h\n";
    }
    // Se escoge el método para frenar
    public function frenar($decremento) {
        $this->velocidad = max($this->velocidad - $decremento, self::VELOCIDAD_MIN);
        echo "Velocidad actual: " . $this->velocidad . " km/h\n";
    }
    // Se escoge el método para mostrar datos
    public function mostrarDatos() {
        echo "Marca: " . $this->marca . ", Velocidad: " . $this->velocidad . " km/h\n";
    }
}