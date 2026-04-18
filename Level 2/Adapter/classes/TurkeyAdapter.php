<?php

require_once "Duck.php";

class TurkeyAdapter extends Duck {

public function quack() {
              echo "Quack \n";
       }





}



/*
La traducció de l'quack entre classes és fàcil: 
simplement crida al mètode Gobble quan sigui apropiat.

Encara que ambdues classes tenen un mètode fly, 
els galls dindis només poden volar a ratxes curtes, 
no poden volar llargues distàncies com els ànecs. 
Per mapejar entre el mètode fly d'un ànec i el mètode 
del gall dindi, s'ha de trucar al mètode fly del gall
 dindi cinc vegades per compensar-ho.

*/