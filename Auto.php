<?php
    class Auto {
        // Propiedades (atributos) de la clase Auto
        public $marca;
        public $modelo;
        public $color;
        public $anio;
    
        // Método constructor
        public function __construct($marca, $modelo, $color, $anio) {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->color = $color;
            $this->anio = $anio;
        }
    
        // Métodos de la clase Auto
        public function conducir() {
            echo "Conduciendo el auto {$this->marca} {$this->modelo}.";
        }
    
        public function frenar() {
            echo "El auto {$this->marca} {$this->modelo} ha frenado.";
        }
    
        public function obtenerInformacion() {
            return "Auto: {$this->marca} {$this->modelo}, Color: {$this->color}, Año: {$this->anio}";
        }
    }
    
    // Crear una instancia de la clase Auto
    $auto1 = new Auto("Toyota", "Corolla", "Azul", 2022);
    
    // Acceder a las propiedades y métodos de la instancia
    echo $auto1->marca; // Output: Toyota
    $auto1->conducir(); // Output: Conduciendo el auto Toyota Corolla.
    echo $auto1->obtenerInformacion(); // Output: Auto: Toyota Corolla, Color: Azul, Año: 2022
    
?>  