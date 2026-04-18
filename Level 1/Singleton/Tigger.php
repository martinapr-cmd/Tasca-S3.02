<?php

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

