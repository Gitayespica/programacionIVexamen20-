<?php
class Alumno {
    private $nombre;
    private $edad;
    // Se genera el constructor para nombre y edad
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    // Se genera el método para mostrar datos
    public function mostrarDatos() {
        echo "Nombre: " . $this->nombre . "\n";
        echo "Edad: " . $this->edad . "\n";
    }
    // Se genera el método para actualizar edad
    public function actualizarEdad($nuevaEdad) {
        if ($nuevaEdad > 0) {
            $this->edad = $nuevaEdad;
            echo "Edad actualizada a: " . $this->edad . "\n";
        } else {
            echo "Edad inválida.\n";
        }
    }
}