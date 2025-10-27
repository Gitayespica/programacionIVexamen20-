<?php
class Biblioteca {
    private $libros = [];
    // Se selecciona el método para agregar libro
    public function agregarLibro($titulo) {
        $this->libros[] = $titulo;
    }
    // Se selecciona el método para buscar libro por título
    public function buscarLibro($titulo) {
        $encontrado = in_array($titulo, $this->libros);
        echo $encontrado ? "Libro '$titulo' encontrado.\n" : "Libro '$titulo' no encontrado.\n";
        return $encontrado;
    }
    // Se selecciona el método para listar libros
    public function listarLibros() {
        echo "Libros en la biblioteca:\n";
        foreach ($this->libros as $libro) {
            echo "- $libro\n";
        }
    }
}