<?php

// - Defineix el mètode getInstance () que no tingui arguments. 
// Aquesta funció és responsable de crear una instància de la classe Tigger 
// només una vegada i tornar aquesta única instància cada vegada que es crida.
// - Imprimeix en pantalla múltiples vegades el rugit de Tigger.
// - Afegeix un mètode getCounter () que retorni el nombre de vegades que Tigger 
// ha realitzat rugits.

class Tigger {

    private static $instance;
    private static $count = 0;

       private function __construct() {
               echo "Building character..." . PHP_EOL;
       }

       public function roar() {
               echo "Grrr!" . PHP_EOL;

               self::$count++;
               return self::$count;
               
       }

       public static function getInstance()  {

            if (!isset(self::$instance)) {
                self::$instance = new self;
            }
        return self::$instance;
       }

       public function getCounter() {

            echo "Tigger has roared " . self::$count . " times!" . PHP_EOL;

       }

}

