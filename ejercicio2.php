<?php
class CuentaBancaria {
    private $saldo;
    // Constructor con saldo inicial
    public function __construct($saldoInicial) {
        $this->saldo = $saldoInicial;
    }
    // Método para depositar
    public function depositar($monto) {
        if ($monto > 0) {
            $this->saldo += $monto;
            echo "Depósito exitoso. Saldo actual: " . $this->saldo . "\n";
        } else {
            echo "Monto inválido.\n";
        }
    }
    // Método para retirar (controla que no quede negativo)
    public function retirar($monto) {
        if ($monto > 0 && $monto <= $this->saldo) {
            $this->saldo -= $monto;
            echo "Retiro exitoso. Saldo actual: " . $this->saldo . "\n";
        } else {
            echo "Monto inválido o saldo insuficiente.\n";
        }
    }
    // Método para mostrar saldo
    public function mostrarSaldo() {
        echo "Saldo actual: " . $this->saldo . "\n";
    }
}