<?php
class Usuario {
    private $nombreUsuario;
    private $contrasena;
    // Se crea el constructor
    public function __construct($nombreUsuario, $contrasena) {
        $this->nombreUsuario = $nombreUsuario;
        $this->contrasena = $contrasena;
    }
    // Se crea el método para verificar la contraseña
    public function verificarContrasena($contrasenaIngresada) {
        $correcta = $this->contrasena === $contrasenaIngresada;
        echo $correcta ? "Contraseña correcta.\n" : "Contraseña incorrecta.\n";
        return $correcta;
    }
    // Se crea el método para mostrar el nombre del usuario
    public function mostrarNombre() {
        echo "Nombre de usuario: " . $this->nombreUsuario . "\n";
    }
}