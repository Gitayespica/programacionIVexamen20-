<?php
class CuentaBancaria {
    private $saldo;
    // Se genera el constructor con su saldo inicial
    public function __construct($saldoInicial) {
        $this->saldo = $saldoInicial;
    }
    // Se selecciona el método para depositar
    public function depositar($monto) {
        if ($monto > 0) {
            $this->saldo += $monto;
            echo "Depósito exitoso. Saldo actual: " . $this->saldo . "\n";
        } else {
            echo "Monto inválido.\n";
        }
    }
    // Se selecciona el método para retirar (controla que no quede negativo)
    public function retirar($monto) {
        if ($monto > 0 && $monto <= $this->saldo) {
            $this->saldo -= $monto;
            echo "Retiro exitoso. Saldo actual: " . $this->saldo . "\n";
        } else {
            echo "Monto inválido o saldo insuficiente.\n";
        }
    }
    // Se selecciona el método para mostrar saldo
    public function mostrarSaldo() {
        echo "Saldo actual: " . $this->saldo . "\n";
    }
}