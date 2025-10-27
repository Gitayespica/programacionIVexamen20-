<?php
class Calculadora {
    private $historial = [];
    // Se selecciona el método para sumar
    public function sumar($a, $b) {
        $resultado = $a + $b;
        $this->historial[] = "$a + $b = $resultado";
        return $resultado;
    }
    // Se selecciona el método para restar
    public function restar($a, $b) {
        $resultado = $a - $b;
        $this->historial[] = "$a - $b = $resultado";
        return $resultado;
    }
    // Se selecciona el método para multiplicar
    public function multiplicar($a, $b) {
        $resultado = $a * $b;
        $this->historial[] = "$a * $b = $resultado";
        return $resultado;
    }
    // Se selecciona el método para dividir
    public function dividir($a, $b) {
        if ($b != 0) {
            $resultado = $a / $b;
            $this->historial[] = "$a / $b = $resultado";
            return $resultado;
        } else {
            echo "Error: División por cero.\n";
            return null;
                    }
    }
}
